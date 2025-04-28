<?php

namespace App\Controller;

use App\Beans\Action;
use App\Beans\ActionDefinition;
use App\Beans\Person;
use App\Exception\InvalidRequestException;
use App\Services\CalendarViewService;
use App\Traits\DatabaseAwareTrait;
use App\Traits\LoggerAwareTrait;
use App\Traits\MailerAwareTrait;
use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/action')]
class ActionEditController extends BaseController
{
    use LoggerAwareTrait;
    use DatabaseAwareTrait;
    use MailerAwareTrait;
    private $dateFormat = \App\Entity\Constants::DATE_FORMAT;

    private $actionBody = " <html><body> "
        . " <b><i>This email was auto-generated.</b></i><br>"
        . " <h4>DO NOT REPLY TO THIS EMAIL</h4><br>"
        . " This email is to confirm  Signup as following,<br>"
        . " <br>"
        . " Action        :<b>%actionCommand%</b> <br>"
        . " Activity      :<b>%actionName%</b> <br>"
        . " Volunteer(s)  :<b>%actionVolunteers%</b> <br>"
        . " Datetime      :<b>%actionDateTime%</b> <br>"
        . " Note          :<b>%actionNaote%</b> <br>"
        . " <br> "
        . " Thank you! <br><br>"
        . " TCEVA. "
        . " </body></html>";

    #[Route('/edit', name: 'app_ActionEdit', methods: ['GET', 'POST'])]
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

                $actionDefId = (int) $this->getParm('actionTypeChoice');
                $actionDefinitions = $this->queryService->getActionDefinitions();
                $usedAd = $this->findActionDefinitionById($actionDefId, $actionDefinitions);

                if ($cmd == 'Delete') {
                    $action = $this->queryService->getAction($actionId);
                    $usedAd = $this->findActionDefinitionById($action->getActionDefinition(), $actionDefinitions);
                    $this->queryService->deleteAction($actionId);
                    $this->emailActionOperation("Signup removed", $action, $usedAd);
                } else {
                    $noteStr = $this->getParm('noteChoice', "N/A");
                    if (empty($noteStr)) {
                        throw new InvalidRequestException("Missing or Invalid value for Comment");
                    }
                    $action = new Action();
                    $action->setId($actionId);
                    $action->setNote($noteStr);

                    $ids = $this->getParm('joinId', null);

                    if (!empty($ids)) {
                        foreach ($ids as $id) {
                            $persons = $this->queryService->getPersons((int) $id);
                            if ($persons) {
                                $action->addPerson($persons[0]);
                            } else {
                                throw new InvalidRequestException("Invalid person");
                            }
                        }
                    }

                    if ($action->getId() < 0) {

                        if ($usedAd == null) {
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

                        $this->emailActionOperation("Signup added", $action, $usedAd);

                    } else if ($cmd === 'Save') {
                        $this->queryService->updateAction($action);
                        $action = $this->queryService->getAction($action->getId());
                        $usedAd = $this->findActionDefinitionById($action->getActionDefinition(), $actionDefinitions);
                        $this->emailActionOperation("Signup updated", $action, $usedAd);
                    }
                }
            }
        } catch (\Exception $e) {
            $this->logException($e);
            $this->addFlashMessage('Error', $e->getMessage());
        }

        // Prepare data for the view
        $calendar = $calendarView->calcCalendarDetails($this->request);
        $month = $calendarView->getMonth();
        $year = $calendarView->getYear();
        $start = new DateTime('now');
        $end = new DateTime('now');

        $start->setDate($year, $month, 1);
        $start->setTime(0, 0, 0);
        $start->modify('-1 second');

        $end->setDate($year, $month + 1, 1);
        $end->setTime(0, 0, 0);
        $actionDefinitions = $this->queryService->getActionDefinitions();
        $actions = $this->queryService->getActions(
            $start->format(\App\Entity\Constants::DATE_FORMAT),
            $end->format(\App\Entity\Constants::DATE_FORMAT));
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
            'month' => $month,
            'year' => $year,
            'dim' => $calendar['dim'],
            'dow' => $calendar['dow'],
        ]);
    }

    private function emailActionOperation(string $actionCommand, Action $action, ActionDefinition $usedAd)
    {
        // Insert Action Email setup
        $signedUpName = "";
        foreach ($action->getPersons() as $a_person) {
            $signedUpName = $signedUpName . $a_person->getLastName() . ", " . $a_person->getFirstName() . "; ";
        }
        $body = str_replace("%actionCommand%", $actionCommand, $this->actionBody);
        $body = str_replace("%actionName%", $usedAd->getName(), $body);
        $body = str_replace("%actionVolunteers%", $signedUpName, $body);
        $body = str_replace("%actionDateTime%", $action->getDay()->format(\App\Entity\Constants::DATE_FORMAT), $body);
        $body = str_replace("%actionNaote%", $action->getNote(), $body);

        foreach ($action->getPersons() as $a_person) {
            if ($a_person->getEmail() != null && $a_person->getEmail() != '') {
                $this->sendEmail($a_person->getEmail(), "TCEVA Action Signup", $body);
            }

        }
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
        if (ActionDefinition::RESTRICTION_DAY_OF_WEEK === $usedAd->getRestrictionType()) {
            $restrictDay = (int) $usedAd->getRestrictionValue();
            $dow = (int) $day->format('N'); // Day of the week (1 for Monday, 7 for Sunday)

            if ($dow === $restrictDay) {
                throw new InvalidRequestException("This action is not valid on " . $day->format('l'));
            }
        } elseif ($usedAd->getRestrictionType() == ActionDefinition::RESTRICTION_DATE) {
            if ($usedAd->getRestrictionDate()->format($this->dateFormat) == $day->format($this->dateFormat)) {
                throw new InvalidRequestException("This action is not valid on " . $day->format($this->dateFormat));
            }
        }

    }

}
