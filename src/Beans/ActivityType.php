<?php
namespace App\Beans;
class ActivityType  extends BaseBean{
    private $id;
    private $name;
    private $stat;

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
    public function getStat() {
        return $this->stat;
    }

    public function setStat($stat) {
        $this->stat = $stat;
    }
}

?>
