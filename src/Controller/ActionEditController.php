<?php

namespace App\Controller;

use DateTime;
use App\Beans\Action;
use App\Beans\Person;
use App\Beans\ActionDefinition;
use App\Traits\LoggerAwareTrait;
use App\Traits\DatabaseAwareTrait;
use App\Services\CalendarViewService;
use App\Exception\InvalidRequestException;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

#[Route('/action')]
class ActionEditController extends BaseController
{
    use LoggerAwareTrait;
    use DatabaseAwareTrait;
    private $dateFormat = 'Y-m-d';
   
    #[Route('/edit', name: 'app_ActionEdit', methods: ['GET','POST'])]
    public function index(CalendarViewService $calendarView): Response
    {
        $loggedInUser = $this->getSessionParm('loggedInUser'); 
        if (!$loggedInUser) {
            return $this->redirectToRoute("app_loginPage"); // Assuming you have a login route
        }
        
       // $this->logRequest();

        $people = $this->queryService->getPersons(-1);
        $people = array_filter($people, function (Person $person) {
            return $person->getStatus() === 'M' || $person->getStatus() === 'A';
        });

        try {

            $cmd = $this->getParm('submitChoice');
            if ($cmd) {
                $actionIdChoice = $this->getParm('actionIdChoice');
                $actionId = (int) $actionIdChoice;
                if ($cmd == 'Delete') {
                    $this->queryService->deleteAction($actionId);
                } else {
                    $noteStr = $this->getParm('noteChoice',"N/A");
                    if (empty($noteStr)) {
                         throw new InvalidRequestException("Missing or Invalid value for Comment");
                    }
                    $action = new Action();
                    $action->setId($actionId);
                    $action->setNote($noteStr);
                 
                    $ids = $this->getParm('joinId',null);

                    if (!empty($ids)) {
                        foreach ($ids as $id) {
                            $persons = $this->queryService->getPersons((int)$id);
                            if ($persons) {
                                $action->addPerson($persons[0]);
                            } else {
                                throw new InvalidRequestException("Invalid person");
                            }
                        }
                    }
                    // else{
                    //     throw new InvalidRequestException("Join Volunteer ids are notprovided");
                    // }

                    if ($action->getId() < 0) {
                        $actionDefId = (int) $this->getParm('actionTypeChoice');
                        $actionDefinitions = $this->queryService->getActionDefinitions();
                        $usedAd = $this->findActionDefinitionById($actionDefId, $actionDefinitions);
                        
                        if ($usedAd ==null) {
                            throw new InvalidRequestException("Invalid Action Type");
                        }
                        $dayStr = $this->getParm('dateChoice');
                        if (empty($dayStr)) {
                             throw new InvalidRequestException("Missing Date Value");
                        }
                     
                        $day = DateTime::createFromFormat($this->dateFormat, $dayStr);
                        if (!$day) {
                            throw new InvalidRequestException("Invalid Date Value");
                        }
                       
                        $this->validateActionDate($day, $usedAd);
                        $action->setActionDefinition($usedAd->getId());
                        $action->setDay($day);
                        $this->queryService->insertAction($action);
                    } else if ($cmd === 'Save') {
                        $this->queryService->updateAction($action);
                    }
                }
            }
        } catch (\Exception $e) {
            $this->logException($e);
            $this->addFlashMessage('Error',$e->getMessage());
        }

        // Prepare data for the view
        $calendar= $calendarView->calcCalendarDetails($this->request);
        $month = $calendarView->getMonth();
        $year = $calendarView->getYear();
        $start = new DateTime('now');
        $end = new DateTime('now');
       
        $start->setDate($year, $month, 1);
        $start->setTime(0, 0, 0);
        $start->modify('-1 second');

        $end->setDate($year, $month+1, 1);
        $end->setTime(0,0,0);
        $actionDefinitions = $this->queryService->getActionDefinitions();
        $actions = $this->queryService->getActions($start->format("Y-m-d"),  $end->format("Y-m-d"));
        $emptyAction = new Action();
        $emptyAction->setId(-1);
        $emptyAction->setActionDefinition(0);
      
        return $this->render('volunteerCalendar.html.twig', [
            'actionDefinitions' => $actionDefinitions,
            'actions' => $actions,
            'people' => $people,
            'emptyAction' => $emptyAction,
            'loggedInUser' => $loggedInUser,
            'days' => $calendar['days'],
            'months' => $calendar['months'],
            'month' => $month ,
            'year' => $year,
            'dim' => $calendar['dim'],
            'dow' => $calendar['dow'],
        ]);
    }

    private function findActionDefinitionById(int $actionDefId, array $actionDefinitions): ?ActionDefinition
    {
        foreach ($actionDefinitions as $ad) {
            if ($ad->getId() == $actionDefId) {
                return $ad;
            }
        }
        return null;
    }

    private function validateActionDate(DateTime $day, ActionDefinition $usedAd)
    { 
        if(ActionDefinition::RESTRICTION_DAY_OF_WEEK === $usedAd->getRestrictionType()) {
            $restrictDay = (int) $usedAd->getRestrictionValue();
            $dow = (int) $day->format('N'); // Day of the week (1 for Monday, 7 for Sunday)
            
            
            if ($dow === $restrictDay) {
                throw new InvalidRequestException("This action is not valid on ". $day->format('l'));
            }
        }elseif ($usedAd->getRestrictionType() == ActionDefinition::RESTRICTION_DATE) {
            if ($usedAd->getRestrictionDate()->format($this->dateFormat) == $day->format($this->dateFormat)) {
                throw new InvalidRequestException("This action is not valid on " . $day->format($this->dateFormat));
            }
        }
         
    }
   
}
