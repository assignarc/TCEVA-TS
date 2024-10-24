<?php

namespace App\Controller;

use App\Beans\Person;
use App\Exception\InvalidRequestException;
use App\Repository\PersonRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Traits\LoggerAwareTrait;
use App\Traits\DatabaseAwareTrait;
use Exception;

#[Route('/')]
class LoginController extends BaseController
{
    use LoggerAwareTrait;
    use DatabaseAwareTrait;

    #[Route('/login', name: 'app_login', methods: ['GET','POST'])]
    public function index(): Response
    {
       
        $this->setSessionParm('loggedInUser', null);  // Clearing session
        $people =  $this->queryService->getPersons(-1); // Fetch persons from the database
       
        // Handling actions
        $action= $this->request->get('action') ?  $this->request->get('action') :null;
        $enteredId= $this->request->get('userName') ?  $this->request->get('userName') :null;
        try{
            if ($action === null || !in_array($action, ['reset', 'login'])) {
                $this->addFlashMessage("error","Please login");
            } elseif ($action === "login") {
                $this->handleLogin($people, $enteredId);
                    return $this->render('home.html.twig', [
                ]);
            } elseif ($action === "reset") {
                $this->handleReset($people, $enteredId);
            }
        }
        catch(Exception $e){
            $this->addFlashMessage("error","Incorrect login");
            return $this->redirectToRoute("app_loginPage");
        }
        return $this->redirectToRoute("app_loginPage");

    }  
    #[Route('/login/page', name: 'app_loginPage', methods: ['GET'])]
    public function loginPage(): Response
    {
        return $this->render('login.html.twig', [
        ]);
    } 
    #[Route('/logout', name: 'app_logoutPage', methods: ['GET'])]
    public function logoutPage(): Response
    {
        $this->session->invalidate();
        return $this->render('home.html.twig', [
        ]);
    } 
    private function handleLogin($people, $enteredId) {
        $password = $this->getParm('password','')!= null ? trim($this->getParm('password')) : null;
        $valid = false;
        foreach ($people as $person) {
            if (in_array($person->getStatus(), ["M", "A", "G"])) {
              
                if ($enteredId === $person->getLogin()) {
                    $encpw = $person->getPassword();
                    $match = false;
                    // Password verification using bcrypt
                    if ($encpw !== null) {
                        $match = password_verify($password, $encpw);
                    }
                    if ($match) {
                        $this->setSessionParm('loggedInUser', $person);
                        $valid = true;
                    }
                    break;
                }
            }
        }

        if (!$valid) {
            throw new InvalidRequestException("Login failed");
        }
    }

    private function handleReset(array $people, $enteredId) {
        foreach ($people as $person) {
            if (in_array($person->getStatus(), ["M", "A", "G"])) {
                if ($enteredId === $person->getLogin()) {
                    $email = $person->getEmail();
                    if ($email !== null && strlen($email) > 0) {
                        $salt = password_hash(uniqid(), PASSWORD_BCRYPT);
                        $newPw = $this->generateRandomPassword(10);
                        $enc = password_hash($newPw, PASSWORD_BCRYPT);
                        
                        // Update password in the database
                        $person->setPassword($enc);
                        $this->queryService->updatePersonAccess($person);

                        // Send reset email
                        //$body = str_replace("%password%", $newPw, $this->resetPwBody);
                       // $this->mailer->sendEmail($email, "TCEVA Account Password Reset", $body);
                    }
                }
            }
        }
    }

    private function generateRandomPassword($length) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomPassword = '';
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomPassword;
    }
}
