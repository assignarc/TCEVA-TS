<?php

namespace App\Controller;

use App\Beans\PersonFeature;
use App\Traits\DatabaseAwareTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

use App\Beans\Person;
use App\Beans\FeatureType;
use App\Exception\InvalidRequestException;
use App\Services\ValidationPatterns;
use RuntimeException;
use DateTime;
use DateTimeZone;
use Exception;

#[Route('/admin')]
class AdminEditController extends BaseController
{
    use DatabaseAwareTrait;
  
    private $allFeatures;


    #[Route('/edit', name: 'app_AdminEdit', methods: ['GET','POST'])]
    public function editAdmin(Request $request, SessionInterface $session): Response
    {
        $loggedInUser = $this->getSessionParm('loggedInUser');
        
        if (!$loggedInUser) {
            return $this->redirectToRoute("app_loginPage"); // Assuming you have a login route
        }
        $person =  $loggedInUser;
        $idStr = $this->getParm('personIdChoice');
        if ($idStr !== null && trim($idStr) !== '') {
            try {
                if (!preg_match(ValidationPatterns::NUMBER_PATTERN, $idStr)) {
                    throw new InvalidRequestException("Invalid Operation.ID: " . $idStr);
                }
                $id = (int)$idStr;
                if (!$person->isUserAdmin() && $person->getId() !== $id) {
                    throw new InvalidRequestException("Invalid Operation. ID: " . $idStr) ;
                }

                $per = new Person();
                $per->setId($id);

                $firstName = $this->getParm('personFirstNameChoice');
                if ($firstName === null || trim($firstName) === '') {
                    throw new InvalidRequestException("First Name Required");
                }
                $per->setFirstName($firstName);

                $lastName = $this->getParm('personLastNameChoice');
                if ($lastName === null || trim($lastName) === '') {
                    throw new InvalidRequestException("Last Name Required");
                }
                $per->setLastName($lastName);

                $per->setAddressLine1($this->getParm('personAddressLine1Choice'));
                $per->setAddressLine2($this->getParm('personAddressLine2Choice'));
                $per->setCity($this->getParm('personCityChoice'));
                $per->setState($this->getParm('personStateChoice'));
                $per->setPostal($this->getParm('personPostalChoice'));
                $per->setPhone($this->getParm('personPhoneChoice'));
                $per->setCarrier($this->getParm('personCarrierChoice'));
                $per->setEmail($this->getParm('personEmailChoice'));
                $per->setEmergencyContact($this->getParm('emergencyContactChoice'));
                $per->setEmergencyContactPhone($this->getParm('emergencyContactPhoneChoice'));
                $per->setBirthMonth($this->getParm('birthMonthChoice'));
                $per->setLogin($this->getParm('loginChoice'));
                $day = $this->getParm('birthDayChoice');
                if ($day !== null && trim($day) !== '') {
                    $per->setBirthDay((int)$day);
                }

                $rYear = $this->getParm('renewYearChoice');
                if ($rYear !== null && trim($rYear) !== '') {
                    $per->setRenewYear((int)$rYear);
                }

                $jDateStr = $this->getParm('joinDateChoice');
                if ($jDateStr !== null && trim($jDateStr) !== '') {
                    $ud = DateTime::createFromFormat('Y-m-d', $jDateStr, new DateTimeZone('UTC'));
                    if ($ud !== false) {
                        $per->setJoinDate($ud);
                    }
                }

                $per->setUserAdmin($this->getParm('adminChoice') === 'on');
                $per->setTimeAdmin($this->getParm('timeChoice') === 'on');
                $per->setCopAdmin($this->getParm('copChoice') === 'on');
                $per->setNewsAdmin($this->getParm('eventsChoice') === 'on');
                $per->setStatus($this->getParm('statusChoice') ?? 'M');

                foreach ($this->queryService->getFeatureTypes() as $f) {
                    $ft = $f->getName();
                    $ftParam = "Feature_" . $ft . "_Choice";
                    $sel = $this->getParm($ftParam);
                    if ($sel === 'on') {
                        $pf = new PersonFeature();
                        $fIdStr = $this->getParm("Feature_" . $ft . "_idChoice");
                        $fId = $fIdStr !== null ? (int)$fIdStr : -1;
                        $pf->setId($fId);
                        $pf->setFeatureId($f->getId());
                        $pf->setFeatureName($ft);
                        $pf->setFeatureLabel($this->getParm("Feature_" . $ft . "_valueChoice"));

                        $fd = $this->getParm("Feature_" . $ft . "_dateChoice");
                        if ($fd !== null && trim($fd) !== '') {
                            $ud = DateTime::createFromFormat('Y-m-d', $fd, new DateTimeZone('UTC'));
                            if ($ud !== false) {
                                $pf->setFeatureDate($ud);
                            }
                        }
                        $per->addFeature($pf);
                    }
                }

                if ($id > 0) {
                    $this->queryService->updatePerson($per);
                    if ($person->isUserAdmin()) {
                        $this->queryService->updatePersonAdmin($per);
                    }
                    $passwordStr = $this->getParm('passwdChoice');
                    if (isset($passwordStr) && $passwordStr != null && trim($passwordStr) != '') {
                        $salt = password_hash($passwordStr, PASSWORD_BCRYPT);
                        $per->setPassword($salt);
                        $this->queryService->updatePersonAccess($per);
                        $this->logAlert("Password resetted for " . $per->getLogin() . " | by " . $loggedInUser->getLogin());
                    }
                } else {
                    if ($person->isUserAdmin()) {
                        $people = $this->queryService->getPersons(-1);
                        $login = trim($per->getFirstName()) . substr($per->getLastName(), 0, 1);
                        $baseLogin = $login;
                        $post = 0;
                        do {
                            $redo = false;
                            foreach ($people as $existing) {
                                if ($login === $existing->getLogin()) {
                                    $login = $baseLogin . (++$post);
                                    $redo = true;
                                    break;
                                }
                            }
                        } while ($redo);
                        $per->setLogin($login);
                        $this->queryService->insertPerson($per);
                    }
                }
            } catch (Exception $e) {
                $this->logException($e);
                $this->addFlashMessage('Error',$e->getMessage());
             }
        }

        // load data for redraw
        $empty = new Person();
        $empty->setId(-1);

        $personId = $person->isUserAdmin() ? -1 : $person->getId();
        $admin = $person->isUserAdmin();
        $people = $this->queryService->getPersons($personId);
       
        $features = $this->queryService->getFeatureTypes();
        //$this->logInfo(implode("|", $features));
        $memberType = $this->getParm('memberType') ?? 'M';

        return $this->render('admin.html.twig', [
            'emptyPerson' => $empty,
            'admin' => $admin,
            'people' => $people,
            'features' => $features,
            'memberType' => $memberType,
        
        ]);
    }
}
