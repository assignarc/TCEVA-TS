<?php
namespace App\Controller;

use App\Services\ReportDatesService;
use App\Traits\DatabaseAwareTrait;
use App\Traits\LoggerAwareTrait;
use App\Traits\MailerAwareTrait;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/report')]
class ReportController extends BaseController
{
    use DatabaseAwareTrait;
    use MailerAwareTrait;

    #[Route('/selector', name: 'app_ReportPage', methods: ['GET','POST'])]
    public function index(): Response
    {
        $loggedInUser = $this->getSessionParm('loggedInUser');
       // $this->sendEmail("In Report Page");
        if (!$loggedInUser) {
            return $this->redirectToRoute("app_loginPage"); // Assuming you have a login route
        }

        return $this->render('reportSelector.html.twig', [
            'loggedInUser' => $loggedInUser
        ]);
    }
   

    #[Route('/show', name: 'app_ReportDisplay', methods: ['GET','POST'])]
    public function show(ReportDatesService $reportDates): Response
    {
        
            $valid = true;
            $person = $this->getSessionParm('loggedInUser');
    
            if ($person !== null) {
                $reportType = $this->getParm('reportType');
    
                if ($reportType !== null) {
                    switch ($reportType) {
                        case 'HoursByType':
                            $reportDates->calcDates($this->request);
                            $start = $reportDates->getStartDate();
                            $end = $reportDates->getEndDate();
                 
                            $activities = $this->queryService->getActivityTotals($start, $end);
                            $rows = [];
                            $titles = [];
                            $lastId = -1;
                            $totals = array_fill(start_index: 0, count: 14, value: 0.0);
                            $row=null;
                            foreach ($activities as $activity) {
                                if ($activity['activityTypeId'] != $lastId) {
                                    unset($row);
                                    $row = array_fill(start_index: 0, count: 14, value: 0.0);
                                    $titles[] = $activity['name'];
                                    $rows[] = &$row;
                                    $lastId = $activity['activityTypeId'];
                                }
                                $row[$activity['Month']] += $activity['Hours'];
                                $row[13] +=  $activity['Hours'];
                                $totals[$activity['Month']] += $activity['Hours'];
                                $totals[13] += $activity['Hours'];
                            }
                            
                            return $this->render('reportHoursByType.html.twig', [
                                'titles' => $titles,
                                'timeLabel' =>  $reportDates->timeLabel,
                                'offsetMonth' => $reportDates->offsetMonth,
                                'numberOfMonths' => $reportDates->numberOfMonths,
                                'rows' => $rows,
                                'totals' => $totals,
                                'months' => $reportDates->months
                            ]);
    
                        case 'PersonHoursByType':
                            $reportDates->calcDates($this->request);
                            $start = $reportDates->getStartDate();
                            $end = $reportDates->getEndDate();
                            $activities = $this->queryService->getPersonTotals(0, $start, $end);
                            $rows = [];
                            $titles = [];
                            $lastId = -1;
                            $lastPersonId = -1;
                            $lastPersonName = '';
                            $personTotals = array_fill(0, 14, 0.0);
                            $totals = array_fill(0, 14, 0.0);
    
                            foreach ($activities as $activity) {
                                if ($activity['activityTypeId'] != $lastId || $activity['id'] != $lastPersonId) {
                                    if ($activity['id'] != $lastPersonId){// && $lastPersonId != -1) {
                                        $titles[] = [$lastPersonName, 'Total'];
                                        $rows[] = &$personTotals;
                                        unset($personTotals);
                                        $personTotals = array_fill(0, 14, 0.0);
                                    }
                                    unset($row);
                                    $row = array_fill(0, 14, 0.0);
                                    $titles[] = [$activity['personName'], $activity['activityName']];
                                    $rows[] = &$row;
                                    $lastPersonName = $activity['personName'];
                                    $lastId = $activity['activityTypeId'];
                                    $lastPersonId = $activity['id'];
                                }
                                $row[$activity['month'] - 1] += $activity['hours'];
                                $row[12] += $activity['hours'];
                                $personTotals[$activity['month'] - 1] += $activity['hours'];
                                $personTotals[12] += $activity['hours'];
                                $totals[$activity['month'] - 1] += $activity['hours'];
                                $totals[12] += $activity['hours'];
                            }
    
                            if (count($activities) > 0) {
                                $titles[] = [$lastPersonName, 'Total'];
                                $rows[] = $personTotals;
                            }
    
                            return $this->render('reportPersonHoursByType.html.twig', [
                                'titles' => $titles,
                                'rows' => $rows,
                                'totals' => $totals,
                                'timeLabel' =>  $reportDates->timeLabel,
                                'offsetMonth' => $reportDates->offsetMonth,
                                'numberOfMonths' => $reportDates->numberOfMonths,
                                'months' => $reportDates->months
                            ]);
    
                        case 'MonthlySignUp':
                            $c = new \DateTime();
                            $c->modify('-1 year');
                            $c->setDate($c->format('Y'), $c->format('m'), 1);
                            $c->setTime(0, 0);
                            $since = $c;
    
                            $activities = $this->queryService->getPersonStatus($since);
                            $nVoting = 0;
                            foreach ($activities as $activity) {
                                if ($activity['hours'] >= 16) {
                                    $nVoting++;
                                }
                            }
                            $quorum = (int)(($nVoting * 0.30) + 0.5);
    
                            return $this->render('reportSignup.html.twig', [
                                'activities' => $activities,
                                'quorum' => $quorum,
                            ]);
    
                        case 'Volunteer':
                            $reportDates->calcDates($this->request);
                            $start = $reportDates->getStartDate();
                            $end = $reportDates->getEndDate();
                            $actionDefinitions = $this->queryService->getActionDefinitions();
                            $actions = $this->queryService->getActions($start->format('Y-m-d'), $end->format('Y-m-d'));
    
                            return $this->render('reportVolunteer.html.twig', [
                                'actionDefinitions' => $actionDefinitions,
                                'actions' => $actions,
                            ]);
    
                        case 'Membership':
                            if ($person->isUserAdmin()) {
                                $people = $this->queryService->getPersons(-1);
                                return $this->render('reportMembership.html.twig', [
                                    'people' => $people,
                                ]);
                            }
                            $valid = false;
                            break;
    
                        default:
                            $valid = false;
                            break;
                    }
                }
            } else {
                $valid = false;
            }
    
            if (!$valid) {
                return $this->redirectToRoute('login');
            }
    
            return new Response('Invalid request', Response::HTTP_BAD_REQUEST);
        
        }
}
?>