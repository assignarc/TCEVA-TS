<?php
namespace App\Beans;

use DateTime;
use Exception;

class Patrol extends BaseBean{
    private $id;
    private $status;
    private $day;  // Using DateTime for handling date
    private $person1;
    private $person2;
    private $note;
    private $person1Name;
    private $person2Name;

    private $dateFormat = "Y-m-d";  // Date format
    private $json;

    public function getJson() {
        $js = null;
        try {
            $data = [
                'id' => $this->id,
                'status' => $this->status,
                'day' => $this->day ? $this->day->format($this->dateFormat) : null,
                'person1' => $this->person1,
                'person2' => $this->person2,
                'note' => $this->note,
                'person1Name' => $this->person1Name,
                'person2Name' => $this->person2Name
            ];
            $js = json_encode($data);

            if ($js === false) {
                throw new Exception("JSON encoding error: " . json_last_error_msg());
            }

        } catch (Exception $e) {
            echo "error writing json " . $e->getMessage();
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

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getDay() {
        return $this->day;
    }

    public function setDay(DateTime $day) {
        $this->day = $day;
    }

    public function getPerson1() {
        return $this->person1;
    }

    public function setPerson1($person1) {
        $this->person1 = $person1;
    }

    public function getPerson2() {
        return $this->person2;
    }

    public function setPerson2($person2) {
        $this->person2 = $person2;
    }

    public function getNote() {
        return $this->note;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function getPerson1Name() {
        return $this->person1Name;
    }

    public function setPerson1Name($person1Name) {
        $this->person1Name = $person1Name;
    }

    public function getPerson2Name() {
        return $this->person2Name;
    }

    public function setPerson2Name($person2Name) {
        $this->person2Name = $person2Name;
    }
}

?>
