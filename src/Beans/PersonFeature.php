<?php
namespace App\Beans;
use DateTime;

class PersonFeature {
    private int $id;
    private int $featureId;
    private string $featureName;
    private DateTime $featureDate; // Using DateTime for date
    private string $featureLabel;

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getFeatureId(): int {
        return $this->featureId;
    }

    public function setFeatureId(int $featureId): void {
        $this->featureId = $featureId;
    }

    public function getFeatureName(): string {
        return $this->featureName;
    }

    public function setFeatureName(string $featureName): void {
        $this->featureName = $featureName;
    }

    public function getFeatureDate(): ?DateTime {
        return $this->featureDate;
    }

    public function setFeatureDate(?DateTime $featureDate): void {
        $this->featureDate = $featureDate;
    }

    public function getFeatureLabel(): string {
        return $this->featureLabel;
    }

    public function setFeatureLabel(string $featureLabel): void {
        $this->featureLabel = $featureLabel;
    }

    public function __toString(): string {
        return "PersonFeature{" .
            "id=" . $this->id .
            ", featureId=" . $this->featureId .
            ", featureName='" . $this->featureName . '\'' .
            ", featureDate=" . $this->featureDate->format(\App\Entity\Constants::DATE_FORMAT) . // Format the date
            ", featureLabel='" . $this->featureLabel . '\'' .
            '}';
    }
}
