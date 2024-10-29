<?php
namespace App\Controller;

use App\Beans\Action;
use App\Beans\ActionDefinition;
use App\Entity\Constants;
use App\Exception\InvalidRequestException;
use App\Services\CalendarViewService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Traits\LoggerAwareTrait;
use App\Traits\DatabaseAwareTrait;
use DateTime;
use Exception;

#[Route('/action/definition')]
class ActionDefinitionEditController extends BaseController
{
    use LoggerAwareTrait;
    use DatabaseAwareTrait;

    

    #[Route('/edit', name: 'app_ActionDefinitionEdit', methods: ['GET','POST'])]
    public function index(CalendarViewService $calendarView): Response
    {
        try{
            // Get the logged-in user from the session
            $person = $this->getSessionParm('loggedInUser');
            if (!$person) {
                return $this->redirectToRoute('app_loginPage'); // Assuming you have a route named 'login'
            }

            // Handle form submission
            $action = $this->getParm('submitChoice');
            if ($action && $action === 'Save') {
                $ad = new ActionDefinition();
                $id = $this->getParm('adIdChoice');
                $name = $this->getParm('nameChoice');
                $description = $this->getParm('descriptionChoice');
                $restrictionType = $this->getParm('restrictChoice');
                $restrictionValue =  $this->getParm('restrictDowChoice');
                $restrictionDate = $this->getParm('restrictDateChoice');

                // Set ActionDefinition properties
                $ad->setId((int)$id);
                $ad->setName($name);
                $ad->setDescription($description);
                $ad->setRestrictionType((int)$restrictionType);
                $ad->setRestrictionValue($restrictionValue);

                if ($ad->getRestrictionType() === ActionDefinition::RESTRICTION_DATE) {
                    if (empty($restrictionDate)) {
                        throw new InvalidRequestException("Missing Date Value");
                    }
                    $ud = \DateTime::createFromFormat(Constants::DATE_FORMAT, $restrictionDate);
                    if (!$ud) {
                        throw new InvalidRequestException("Invalid Date Value");
                    }
                    $ad->setRestrictionDate($ud);
                } else {
                    $ad->setRestrictionDate(null);
                }

                // Insert or update ActionDefinition
                if ($ad->getId() > 0) {
                    $this->queryService->updateActionDefinition($ad);
                } else {
                    $this->queryService->insertActionDefinition($ad);
                }
            }

            // Redraw data
            $calendarView->calcCalendarDetails($this->request);
            $month = $calendarView->getMonth();
            $year = $calendarView->getYear();
            
            $start = new \DateTime();
            $end = new \DateTime();
            $start->setDate($year, $month, 1)->setTime(0, 0, 0);
            $end->setDate($year, $month + 1, 1)->setTime(0, 0, 0);

            $actionDefinitions = $this->queryService->getActionDefinitions();
         
            $emptyAd = new ActionDefinition();
            $emptyAd->setId(-1);
            $emptyAd->setRestrictionDate(new DateTime('now'));
        }
       catch(Exception $e){
            $this->logException($e);
            $this->addFlashMessage('Error',$e->getMessage());
       }
       // Render the template
       return $this->render('actionDefinitionEdit.html.twig', [
            'actionDefinitions' => $actionDefinitions,
            'emptyAd' => $emptyAd,
       ]);
    }
   
}
