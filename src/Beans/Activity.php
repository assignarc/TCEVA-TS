<?php
namespace App\Beans;

use App\Exception\InvalidRequestException;
use DateTime;
use Exception;

class Activity  extends BaseBean{
    private $id;
    private $personId;
    private $personName;
    private $activityId;
    private $activityName;
    private $day;
    private $month;
    private $year;
    private $hours;
    private $note;

    private $dateFormat = "Y-m-d";  // Date format
    private $json;

    public function getJson() {
        $js = null;
        try {
            $data = [
                'id' => $this->id,
                'personId' => $this->personId,
                'personName' => $this->personName,
                'activityId' => $this->activityId,
                'activityName' => $this->activityName,
                'day' => $this->day ? $this->day->format($this->dateFormat) : null,
                'month' => $this->month,
                'year' => $this->year,
                'hours' => $this->hours,
                'note' => $this->note
            ];
            $js = json_encode($data);

            if ($js === false) {
                throw new Exception("JSON encoding error: " . json_last_error_msg());
            }

        } catch (Exception $e) {
           throw new InvalidRequestException("Json Encoding:" . __METHOD__, previous:$e );
        }

        // Encode the JSON string to handle quotes, etc.
        return base64_encode($js);
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPersonId() {
        return $this->personId;
    }

    public function setPersonId($personId) {
        $this->personId = $personId;
    }

    public function getPersonName() {
        return $this->personName;
    }

    public function setPersonName($personName) {
        $this->personName = $personName;
    }

    public function getActivityId() {
        return $this->activityId;
    }

    public function setActivityId($activityId) {
        $this->activityId = $activityId;
    }

    public function getActivityName() {
        return $this->activityName;
    }

    public function setActivityName($activityName) {
        $this->activityName = $activityName;
    }

    public function getDay() {
        return $this->day;
    }

    public function setDay(DateTime $day) {
        $this->day = $day;
    }

    public function getMonth() {
        return $this->month;
    }

    public function setMonth($month) {
        $this->month = $month;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getHours() {
        return $this->hours;
    }

    public function setHours($hours) {
        $this->hours = $hours;
    }

    public function getNote() {
        return $this->note;
    }

    public function setNote($note) {
        $this->note = $note;
    }
}

?>
