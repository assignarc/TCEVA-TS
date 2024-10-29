<?php
namespace App\Beans;

use App\Entity\Constants;
use DateTime;
use Exception;

class Action extends BaseBean{
    private $id;
    private $actionDefinition;
    private $actionName;
    private $day;
    private $note;
    private $persons = [];
    private $personSize;
    private $dateFormat = Constants::DATE_FORMAT;
    private $json;

    public function __construct() {
        $this->json = "";
    }

    public function getJson() {
        $js = null;
        try {
            $js = json_encode([
                'id' => $this->id,
                'actionDefinition' => $this->actionDefinition,
                'actionName' => $this->actionName,
                'day' => $this->day ? $this->day->format($this->dateFormat) : null,
                'note' => $this->note,
                'persons' => $this->persons,
                'personSize' => $this->getPersonSize()
            ]);

            if ($js === false) {
                throw new Exception("JSON encoding error: " . json_last_error_msg());
            }

        } catch (Exception $e) {
            echo "error writing json " . $e->getMessage();
        }
        //$this->json=$js;
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

    public function getActionDefinition()  {
        return $this->actionDefinition;
    }

    public function setActionDefinition($actionDefinition) {
        $this->actionDefinition = $actionDefinition;
    }

    public function getActionName() {
        return $this->actionName;
    }

    public function setActionName($actionName) {
        $this->actionName = $actionName;
    }

    public function getDay() {
        return $this->day;
    }

    public function setDay(DateTime $day) {
        $this->day = $day;
    }

    public function getNote() {
        return $this->note;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function addPerson($person) {
        $this->persons[] = $person;
    }

    public function getPersons(): ?array {
        return $this->persons;
    }

    public function setPersons(array $persons) {
        $this->persons = $persons;
    }

    public function getPersonSize() {
        return count($this->persons);
    }
}

