<?php

namespace App\Controller;

use App\Beans\Activity;
use App\Beans\Person;
use App\Exception\InvalidRequestException;
use App\Services\ValidationPatterns;
use App\Traits\DatabaseAwareTrait;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\MailerAwareTrait;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/time')]
class TimeEditController extends BaseController
{
    use DatabaseAwareTrait;
    use MailerAwareTrait;

    #[Route('/edit', name: 'app_TimeEdit', methods: ['GET','POST'])]
    public function timeEdit(): Response
    {
        $loggedInUser = $this->getSessionParm('loggedInUser'); 
        if (!$loggedInUser) {
            return $this->redirectToRoute("app_loginPage"); // Assuming you have a login route
        }

        $people = $this->queryService->getPersons(-1);
        $activityTypes = $this->queryService->getActivityTypes();
       

        $actionStr = $this->getParm('submitChoice');

        if ($actionStr) {
            try {
                if (!in_array($actionStr, ['Save', 'Delete'])) {
                    throw new InvalidRequestException('Invalid Operation : You can\'t do this.');
                }

                $activityId = $this->getParm('activityIdChoice');
                if ($activityId ==null || !preg_match(ValidationPatterns::NUMBER_PATTERN, (string) $activityId)) {
                    throw new InvalidRequestException('Invalid Operation : Invalid activityId:' . $activityId);
                }

                if ($actionStr === 'Delete') {
                    $this->queryService->deleteActivity($activityId);
                } else {
                    $personId = (int) $this->getParm('personChoice');
                    if ($personId <= 0 || !preg_match(ValidationPatterns::NUMBER_PATTERN, (string) $personId)) {
                        throw new InvalidRequestException('Invalid Operation : Incorrect person');
                    }

                    $activityType = (int) $this->getParm('activityTypeChoice');
                    if ($activityType <= 0 || !preg_match(ValidationPatterns::NUMBER_PATTERN, (string) $activityType)) {
                        throw new InvalidRequestException('Invalid Operation : Incorrect ActivityType : ' .$activityType);
                    }

                    $hoursStr = $this->getParm('hoursChoice');
                    if (!preg_match(ValidationPatterns::FLOAT_PATTERN, $hoursStr)) {
                        throw new InvalidRequestException('Invalid Hours : Incorrect hours');
                    }
                    $hours = (float) $hoursStr;

                    $activity = new Activity();
                    $activity->setId($activityId);
                    $activity->setPersonId($personId);
                    $activity->setActivityId($activityType);
                    $activity->setHours($hours);

                    $dayStr = $this->getParm('dateChoice');
                    if (empty($dayStr)) {
                        throw new \RuntimeException('Missing Date Value');
                    }
                    $date = \DateTime::createFromFormat(\App\Entity\Constants::DATE_FORMAT, $dayStr);
                    if ($date === false) {
                        throw new \RuntimeException('Invalid Date Value');
                    }
                    $activity->setDay($date);

                    $noteStr = $this->getParm('noteChoice');
                    $activity->setNote($noteStr);

                    if ($activityId > 0) {
                        $this->queryService->updateActivity($activity);
                    } else {
                        $this->queryService->insertActivity($activity);
                    }
                }
            } catch (\Exception $e) {
                $this->logException($e);
                $this->addFlashMessage('Error',$e->getMessage());
            }
        }

        $userId = $loggedInUser->getId();
        $showStr = $this->getParm('showAllChoice');
        $allUsers = '';
        if ($loggedInUser->isTimeAdmin() && $showStr === 'true') {
            $allUsers = 'checked';
            $userId = 0;
        }
     

        $emptyActivity = new Activity();
        $emptyActivity->setId(-1);
        $emptyActivity->setPersonId($loggedInUser->getId());
        $emptyActivity->setHours(0);
     
        $startC = new \DateTime();
        $startC->modify('-1 year');
        $activities = $this->queryService->getActivities($userId, $startC);
     
        return $this->render('time.html.twig', [
            'people' => $people,
            'activityTypes' => $activityTypes,
            'user' => $loggedInUser,
            'allUsers' => $allUsers,
            'emptyActivity' => $emptyActivity,
            'activities' => $activities,
          
        ]);
    }

    /**
     * TODO: Email sent is not wired yet. 
     */
    private $actionBody = " <html><body> "
        . " <b><i>This email was auto-generated.</b></i><br>"
        . " <h4>DO NOT REPLY TO THIS EMAIL</h4><br>"
        . " This email is to confirm time recorded as following,<br>"
        . " <br>"
        . " Activity      :<b>%actionName%</b> <br>"
        . " Volunteer(s)  :<b>%actionVolunteers%</b> <br>"
        . " Datetime      :<b>%actionDateTime%</b> <br>"
        . " Note          :<b>%actionNaote%</b> <br>"
        . " <br> "
        . " Thank you! <br><br>"
        . " TCEVA. "
        . " </body></html>";
    private function emailTimeOperation(Person $person, Activity $activity, $hours)
    {
        
        $body = str_replace("%actionName%", $activity->getActivityName(), $this->actionBody);
        $body = str_replace("%activityType%", $$activity->getActivityId(), $body);
        $body = str_replace("%actionDateTime%", $activity->getDay()->format(\App\Entity\Constants::DATE_FORMAT), $body);
        $body = str_replace("%notes%", $activity->getNote(), $body);
        $body = str_replace("%hours%", $hours, $body);

        $this->sendEmail($person->getEmail(), "TCEVA Time Record", $body);
    }
}
