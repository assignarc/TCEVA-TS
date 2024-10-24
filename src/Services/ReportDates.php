<?php

namespace App\Services;

use App\Traits\LoggerAwareTrait;
use Symfony\Component\HttpFoundation\Request;

class ReportDates 
{
    use LoggerAwareTrait;

    public $startC;
    public $endC;
    public $offsetMonth;
    public $timeLabel;
    public $numberOfMonths;
    public $months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    public $startMonth=1;
    public $endMonth= 12;
    public function __construct()
    {
        $this->startC = new \DateTime();
        $this->endC = new \DateTime();
    }

    public function calcDates(Request $request): void
    {
        $yearStr = $request->get('year');
        $periodStr = $request->get('period');
        $year = $yearStr != null && strlen($yearStr) > 0 ? (int)$yearStr : 0;

        $this->startC = new \DateTime();
        $this->endC = new \DateTime();
        $this->startMonth = 1;
        $this->endMonth = 12;
        $this->offsetMonth = 1;
        $this->numberOfMonths = 12;

        if ($periodStr == null || str_starts_with($periodStr, 'y')) {
            $this->startC->setDate($year - 1, 12, 31)->setTime(23, 59, 59);
            $this->endC->setDate($year + 1, 1, 1)->setTime(0, 0, 0);
            $this->timeLabel= $year;
        } elseif (strlen($periodStr) == 2 && str_starts_with($periodStr, 'q')) {
            $quarter = (int)substr($periodStr, 1);
            $this->numberOfMonths = 3;
            $this->timeLabel = strtoupper($periodStr) . " of " . $year;

            switch ($quarter) {
                case 1:
                    $this->startC->setDate($year, 1, 1)->setTime(0, 0, 0);
                    $this->endC->setDate($year, 4, 1)->setTime(0, 0, 0);
                    break;
                case 2:
                    $this->startC->setDate($year, 4, 1)->setTime(0, 0, 0);
                    $this->endC->setDate($year, 7, 1)->setTime(0, 0, 0);
                    $this->offsetMonth = 4;
                    break;
                case 3:
                    $this->startC->setDate($year, 7, 1)->setTime(0,0,0);
                    $this->endC->setDate($year, 10, 1)->setTime(0,0,0);
                    $this->offsetMonth = 7;
                    break;
                case 4:
                    $this->startC->setDate($year, 1, 1)->setTime(0,0,0);
                    $this->endC->setDate($year+1, 1, 1)->setTime(0,0,0);
                    $this->offsetMonth = 10;
                    break;
            }
        } elseif (strlen($periodStr) > 1 && str_starts_with($periodStr, 'm')) {
            $month = (int)substr($periodStr, 1);
            $this->offsetMonth = $month+1;
            $this->numberOfMonths = 2;
            $this->startC->setDate($year, $month+1, 1)->setTime(0, 0, 0)->modify('-1 second');
            $this->endC->setDate($year, $month+2, 1)->setTime(0, 0, 0)->modify('-1 second');
            $this->timeLabel = $this->months[$this->offsetMonth] . " of " . $year ;
        }

      
    }

    public function getStartDate(): \DateTime
    {
        return $this->startC;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endC;
    }

    public function getOffsetMonth(): int
    {
        return $this->offsetMonth;
    }
}
