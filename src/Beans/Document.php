<?php
namespace App\Beans;
use DateTime;

class Document extends BaseBean{
    private $id;
    private $fileName;
    private $documentCategoryId;
    private $documentCategory;
    private $lastUpdated;  // Using DateTime for handling date
    private $lastUpdatedById;
    private $lastUpdatedBy;

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function getDocumentCategoryId() {
        return $this->documentCategoryId;
    }

    public function setDocumentCategoryId($documentCategoryId) {
        $this->documentCategoryId = $documentCategoryId;
    }

    public function getDocumentCategory() {
        return $this->documentCategory;
    }

    public function setDocumentCategory($documentCategory) {
        $this->documentCategory = $documentCategory;
    }

    public function getLastUpdated() {
        return $this->lastUpdated;
    }

    public function setLastUpdated(DateTime $lastUpdated) {
        $this->lastUpdated = $lastUpdated;
    }

    public function getLastUpdatedById() {
        return $this->lastUpdatedById;
    }

    public function setLastUpdatedById($lastUpdatedById) {
        $this->lastUpdatedById = $lastUpdatedById;
    }

    public function getLastUpdatedBy() {
        return $this->lastUpdatedBy;
    }

    public function setLastUpdatedBy($lastUpdatedBy) {
        $this->lastUpdatedBy = $lastUpdatedBy;
    }
}

?>
