<?php

namespace App\Controller;

use App\Entity\Constants;
use DateTimeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\LoggerAwareTrait;
//https://ourcodeworld.com/articles/read/1386/how-to-generate-the-entities-from-a-database-and-create-the-crud-automatically-in-symfony-5


class BaseController extends AbstractController
{
  
    protected $requestStack;
    protected $session;
    protected $request;
    protected $cookies;
    protected $cookiesResponse =[];
    protected $parameters;
   
    use LoggerAwareTrait;
    // use CacheAwareTrait;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
        $this->request = $requestStack->getCurrentRequest();
        $this->session = $this->request->getSession();
        $this->cookies = $this->request->cookies;
    }

    /*SYMFONY Specifics */
    /* type= notice, success, warning, error */
    protected function addFlashMessage(string $type, string $message){
        $this->addFlash($type,$message);
    }
    protected function routeExists($name) : bool
    {
        // I assume that you have a link to the container in your twig extension class
        $router = $this->container->get('router');
        return (null === $router->getRouteCollection()->get($name)) ? false : true;
    }
    /**
     * getParm function
     * Gets HTTP Parameters 
     * @param string $parm
     * @return mixed
     */
    protected function getParm(string $parm, mixed $default = Constants::NONE): mixed{
        // https://lindevs.com/methods-to-get-route-parameters-in-symfony
        $data =  $this->request->get($parm);
       
        // if($data !=null)
        //     return $data;
        // else 
        //     return $default;

        return $data;
    }

    

    protected function getContentParm(string $parm, mixed $default = Constants::NONE): mixed{
        // https://lindevs.com/methods-to-get-route-parameters-in-symfony
        $content = $this->request->getContent();//->all();
        $parsedData = [];
        parse_str($content, $parsedData);
        $data = $parsedData[$parm];
        if($data !=null)
            return $data;
        else 
            return $default;
    }

    protected function postParm(string $parm, mixed $defaultValue = Constants::NONE): string{
        $parameters = json_decode($this->request->getContent(), true);
        return array_key_exists($parm,$parameters) ?  $parameters[$parm] :  $defaultValue;
    }
    protected function postJson(): mixed{
        return json_decode($this->request->getContent());
    }

    public function logRequest() 
    {
        // Extract request information
        $method = $this->request->getMethod();
        $uri = $this->request->getRequestUri();
        $headers = $this->request->headers->all();
        $queryParams = $this->request->query->all();
        $postParams = $this->request->request->all();
        $content = $this->request->getContent();

        // Log different parts of the request
        $this->logInfo('Request Method: ' . $method);
        $this->logInfo('Request URI: ' . $uri);
        $this->logInfo('Headers: ' . json_encode($headers));
        $this->logInfo('Query Parameters: ' . json_encode($queryParams));
        $this->logInfo('POST Parameters: ' . json_encode($postParams));
        $this->logInfo('Content: ' . $content);

    }
    
    /**
     * Session Functions
     */
    protected function logout(){
        $this->session->clear();
    }
    protected function getSessionParm(string $parm, mixed $defaultValue = Constants::NONE)  {
        $data =  $this->session->get($parm);
        return $data ?? $defaultValue;
    }
    protected function getSessionAllParms() : array{
        $data =  $this->session->all();
        return $data ?? [];
    }
    protected function setSessionParm(string $key, mixed $value=Constants::NONE){
        $this->session->set($key,$value);
    }
    protected function getQueryParm(string $parm): mixed{
        //https://lindevs.com/methods-to-get-route-parameters-in-symfony
        $data =  $this->request->query->get($parm);
        return $data ?? Constants::NONE;
    }
    protected function customResponse(Response $redirectResponse) : Response{
        //foreach($this->cookiesResponse as &$value)
        //    $this->log($value);
            //$redirectResponse->headers->setCookie($value);
        
        return $redirectResponse;
    }

   
   
    
    /* COOKIE FUNCTIONS */
    protected function addCookie(string $key,string $value, DateTimeInterface $expires, string $domain ="/", bool $secure = false ){
        $this->cookiesResponse[] =Cookie::create($key)
                ->withValue($value)
                ->withExpires($expires)
                ->withDomain("127.0.0.1")
                ->withSecure($secure);
    }

    protected function removeCookie(string $key){
        if(!$this->cookies)
            return;
        unset($this->cookies[$key]);
    }
    
 
}
