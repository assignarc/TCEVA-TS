<?php
namespace App\Services;

use App\Traits\LoggerAwareTrait;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class CalendarViewService
{
    use LoggerAwareTrait;
    private $month;
    private $year;
    private $daysInMonth;
    public $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    public $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const PHP_JAVA_DAYOFWEEK = [2,3,4,5,6,7,1];

    public function calcCalendarDetails(Request $request)
    {
        // Days and months
        
        // Current date and time
        $now = new DateTime('now');
        // Set day of the month to 1
       
        $this->year = (int)$now->format('Y');
        $this->month = (int)$now->format('n'); // Calendar.MONTH starts from 0 in Java, but PHP months are 1-12
        
        $now->setDate($this->year, $this->month, 1);  // Adjust month for PHP (1-12)

        // $this->logAlert(" Month1 : ". $request->get('newMonth') . " Year: " . $request->get('newYear'));
        // Check for user input (from request)
        $monthStr = $request->get('newMonth');
        if ($monthStr !== null) {
            $this->month = (int)$monthStr;
            $yearStr = $request->get('newYear');
            if ($yearStr !== null) {
                $this->year = (int)$yearStr;
            }
            $now->setDate($this->year, $this->month, 1);
            // $this->logAlert($now->format('Y-m-d'));
        }
       
        // Calculate the number of days in the month
        // $this->logAlert(" Month : ". $this->month . " Year: " . $this->year);
       
        // $this->logAlert("Days in month ". cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year) . " Month : ". $this->month . " Year: " . $this->year);
       
        $this->daysInMonth = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year); //$this->calculateDaysInMonth($this->month, $this->year);
        
        // Calculate the day of the week for the first day of the month
        // $this->logAlert("Day:".$now->format("Y-m-d"));
       
        //Adjust for phptojavascript.
       
        if((int)$now->format('w')-1 < 0 ) 
            $dow = 6;
        else 
            $dow = (int)$now->format('w')-1;

        $dow = CalendarViewService::PHP_JAVA_DAYOFWEEK[$dow];  // Day of week, 0 (Sunday) to 6 (Saturday)
        
        return [
            'months' => $this->months,
            'days' => $this->days,
            'month' => $this->month,
            'year' => $this->year,
            'dim' => $this->daysInMonth,
            'dow' => $dow,
        ];
    }

    // Helper to calculate the number of days in the month
    private function calculateDaysInMonth($month, $year) : int
    {
        // $this->logAlert("Days in month ". cal_days_in_month(CAL_GREGORIAN, $month, $year) . " Month : ". $month . " Year: " . $year);
        return cal_days_in_month(CAL_GREGORIAN, $month, $year);

        if ($month == 1) { // February
            if (($year % 100 != 0 && $year % 4 == 0) || ($year % 400 == 0)) {
                return 29; // Leap year
            }
            return 28;
        }

        // April, June, September, November have 30 days
        if (in_array($month, [3, 5, 8, 10])) {
            return 30;
        }

        // All others have 31 days
        return 31;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getDaysInMonth()
    {
        return $this->daysInMonth;
    }
}

?>
