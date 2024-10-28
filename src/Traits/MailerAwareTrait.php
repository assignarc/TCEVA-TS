<?php
namespace App\Traits;

use App\Exception\BaseException;
use Exception;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\Service\Attribute\Required;


trait MailerAwareTrait{
    use LoggerAwareTrait;
    private $mailer;
    private $environment;

    #[Required]
    public function setMailer(MailerInterface $mailer, KernelInterface $kernel){
        $this->mailer = $mailer;
        $this->environment = $kernel->getEnvironment();
    }
    
   
    public function sendEmail(string $toAddress,string $emailSubject, string $emailBody)
    {
        try{
            $this->logInfo("Env: " .$this->environment);
            if($this->environment=="dev"){
                $this->logInfo("To: " .$toAddress);
                $this->logInfo("Subject: ". $emailSubject);
                $this->logInfo("Body: " . $emailBody);
            }
            else{
            
                $email = (new Email())
                    ->from('no-reply@member.tceva.us')
                    ->to($toAddress)
                    ->subject($emailSubject)
                    ->html($emailBody);
                //$this->mailer->send($email);
                $this->logInfo("Email Sent: Subject:" . $emailSubject . " To:" . $toAddress );
            }
        }
        catch(Exception $e){
            throw new BaseException("Email Error:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
        }
        
    }

}
