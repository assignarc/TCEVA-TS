<?php
namespace App\Utils;

use DateTime;

class ReportDates {
    private $startC;
    private $endC;
    private $offsetMonth;

    public function __construct() {
        // Initialize start and end dates to the current date
        $this->startC = new DateTime('now');
        $this->endC = new DateTime('now');
    }

    public function calcDates() {
        $months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        // Getting offsetMonth from query params (like HttpServletRequest in Java)
        $this->offsetMonth = isset($_GET['offsetMonth']) ? (int)$_GET['offsetMonth'] : 0;

        // Modify the start and end dates based on the offsetMonth
        $this->startC->modify("{$this->offsetMonth} months");
        $this->endC->modify("{$this->offsetMonth} months +1 month -1 day");

        // Return the start and end dates formatted as needed for the report
        return [
            'startDate' => $this->startC->format('Y-m-d'),
            'endDate' => $this->endC->format('Y-m-d')
        ];
    }
}
?>
