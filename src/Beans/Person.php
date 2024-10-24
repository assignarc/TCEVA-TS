<?php
namespace App\Beans;

use DateTime;

class Person extends BaseBean{
    private $id;
    private $firstName;
    private $lastName;
    private $login;
    private $password;
    private $newsAdmin;
    private $userAdmin;
    private $timeAdmin;
    private $copAdmin;
    private $addressLine1;
    private $addressLine2;
    private $city;
    private $state;
    private $postal;
    private $phone;
    private $carrier;
    private $email;
    private $birthMonth;
    private $birthDay;
    private $emergencyContact;
    private $emergencyContactPhone;
    private $joinDate;
    private $renewYear;
    private $status;
    private $features = [];

    public function getJson() {
        
        $data = [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'login' => $this->login,
            'password' => $this->password,
            'newsAdmin' => $this->newsAdmin,
            'userAdmin' => $this->userAdmin,
            'timeAdmin' => $this->timeAdmin,
            'copAdmin' => $this->copAdmin,
            'addressLine1' => $this->addressLine1,
            'addressLine2' => $this->addressLine2,
            'city' => $this->city,
            'state' => $this->state,
            'postal' => $this->postal,
            'phone' => $this->phone,
            'carrier' => $this->carrier,
            'email' => $this->email,
            'birthMonth' => $this->birthMonth,
            'birthDay' => $this->birthDay,
            'emergencyContact' => $this->emergencyContact,
            'emergencyContactPhone' => $this->emergencyContactPhone,
            'joinDate' => $this->joinDate,
            'renewYear' => $this->renewYear,
            'status' => $this->status
            ];

            $fs=[];
             foreach ($this->features as $key => $value) {
                $f = [
                    'id' => $value->getId(),
                    'featureId' => $value->getFeatureId(),
                    'featureDate' => $value->getFeatureDate()->format('Y-m-d'),
                    'featureName'=> $value->getFeatureName(),
                    'featureLabel' => $value->getFeatureLabel()
                ];
                $fs[] = $f;
                unset($f);
            }
            $data['features']=$fs;
        
        
        $json = json_encode($data);
        return base64_encode($json);
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function getLogin() {
        return $this->login;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function isNewsAdmin() {
        return $this->newsAdmin;
    }
    public function setNewsAdmin($newsAdmin) {
        $this->newsAdmin = $newsAdmin;
    }
    public function isUserAdmin() {
        return $this->userAdmin;
    }
    public function setUserAdmin($userAdmin) {
        $this->userAdmin = $userAdmin;
    }
    public function isTimeAdmin() {
        return $this->timeAdmin;
    }
    public function setTimeAdmin($timeAdmin) {
        $this->timeAdmin = $timeAdmin;
    }
    public function isCopAdmin() {
        return $this->copAdmin;
    }
    public function setCopAdmin($copAdmin) {
        $this->copAdmin = $copAdmin;
    }
    public function getAddressLine1() {
        return $this->addressLine1;
    }
    public function setAddressLine1($addressLine1) {
        $this->addressLine1 = $addressLine1;
    }
    public function getAddressLine2() {
        return $this->addressLine2;
    }
    public function setAddressLine2($addressLine2) {
        $this->addressLine2 = $addressLine2;
    }
    public function getCity() {
        return $this->city;
    }
    public function setCity($city) {
        $this->city = $city;
    }
    public function getState() {
        return $this->state;
    }
    public function setState($state) {
        $this->state = $state;
    }
    public function getPostal() {
        return $this->postal;
    }
    public function setPostal($postal) {
        $this->postal = $postal;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function getCarrier() {
        return $this->carrier;
    }
    public function setCarrier($carrier) {
        $this->carrier = $carrier;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getBirthMonth() {
        return $this->birthMonth;
    }
    public function setBirthMonth($birthMonth) {
        $this->birthMonth = $birthMonth;
    }
    public function getBirthDay() {
        return $this->birthDay;
    }
    public function setBirthDay($birthDay) {
        $this->birthDay = $birthDay;
    }
    public function getEmergencyContact() {
        return $this->emergencyContact;
    }
    public function setEmergencyContact($emergencyContact) {
        $this->emergencyContact = $emergencyContact;
    }
    public function getEmergencyContactPhone() {
        return $this->emergencyContactPhone;
    }
    public function setEmergencyContactPhone($emergencyContactPhone) {
        $this->emergencyContactPhone = $emergencyContactPhone;
    }
    public function getJoinDate() : ?DateTime {
        return $this->joinDate ? $this->joinDate : new DateTime('0000-01-01');
    }
    public function setJoinDate(?Datetime $joinDate) {
        $this->joinDate = $joinDate ? $joinDate : new DateTime('0000-01-01');
    }
    public function getRenewYear() {
        return $this->renewYear;
    }
    public function setRenewYear($renewYear) {
        $this->renewYear = $renewYear;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

    public function addFeature($feature) {
        $this->features[] = $feature;
    }

    public function getFeatures(): ?array {
        return $this->features;
    }

    public function setFeatures($features) {
        $this->features = $features;
    }

    public function hasFeature($featureName) {
        foreach ($this->features as $feature) {
            if ($feature->getFeatureName() === $featureName) {
                return true;
            }
        }
        return false;
    }
}
?>
