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
            
            $email = (new Email())
                ->from(addresses: 'no-reply@member.tceva.us')
                ->to(addresses: $toAddress)
                ->subject(subject: $emailSubject)
                ->html(body: $emailBody);
            $this->mailer->send(message: $email);
            $this->logInfo("Email Sent: Subject:" . $emailSubject . " To:" . $toAddress );
            
        }
        catch(Exception $e){
            throw new BaseException("Email Error:" . __METHOD__ . " Message:" . $e->getMessage() ,previous:$e);
        }
        
    }

}
