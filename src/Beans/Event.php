<?php
namespace App\Beans;

use App\Beans\BaseBean;
use DateTime;
use Exception;

class Event  extends BaseBean{
    private $id;
    private $title;
    private $description;
    private $day;  // Using DateTime for handling date
    private $url;

    private $dateFormat = \App\Entity\Constants::DATE_FORMAT;
    private $json;

    public function getJson() {
        $js = null;
        try {
            $data = [
                'id' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'day' => $this->day ? $this->day->format($this->dateFormat) : null,
                'url' => $this->url
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

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDay() {
        return $this->day;
    }

    public function setDay(DateTime $day) {
        $this->day = $day;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}

