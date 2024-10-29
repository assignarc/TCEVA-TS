<?php

namespace App\Controller;

use App\Beans\Activity;
use App\Exception\InvalidRequestException;
use App\Service\DBQueries;
use App\Services\ValidationPatterns;
use App\Traits\DatabaseAwareTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/time')]
class TimeEditController extends BaseController
{
    use DatabaseAwareTrait;

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
}
