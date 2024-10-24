<?php
namespace App\Beans;

use DateTime;
use Exception;


class ActionDefinition  extends BaseBean{
    private $id;
    private $name;
    private $description;  // Changed from "Description" to "description" to follow PHP conventions
    private $restrictionType;
    private $restrictionValue;
    private $restrictionDate;

    private $dateFormat = "Y-m-d";  // Date format
    private $json;

    const RESTRICTION_NONE = 0;
    const RESTRICTION_DAY_OF_WEEK = 1;
    const RESTRICTION_DATE = 2;
   
    public function getJson() {
        $js = null;
        try {
            $js = json_encode([
                'id' => $this->id,
                'name' => $this->name,
                'description' => $this->description,
                'restrictionType' => $this->restrictionType,
                'restrictionValue' => $this->restrictionValue,
                'restrictionDate' => $this->restrictionDate ? $this->restrictionDate->format($this->dateFormat) : null
            ]);

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

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getRestrictionType() {
        return $this->restrictionType;
    }

    public function setRestrictionType($restrictionType) {
        $this->restrictionType = (int)$restrictionType;
    }

    public function getRestrictionValue() {
        return $this->restrictionValue;
    }

    public function setRestrictionValue($restrictionValue) {
        $this->restrictionValue = $restrictionValue;
    }

    public function getRestrictionDate() {
        return $this->restrictionDate;
    }

    public function setRestrictionDate(?DateTime $restrictionDate) {
        $this->restrictionDate = $restrictionDate;
    }
}

?>
