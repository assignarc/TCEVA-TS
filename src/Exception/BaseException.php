<?php

namespace App\Exception;

use Exception;
use JsonSerializable;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class BaseException extends Exception implements JsonSerializable
{
    protected int $__RESPONSE_CODE__ = Response::HTTP_INTERNAL_SERVER_ERROR;
    protected string $exceptioName = __CLASS__;
    protected array $exceptionData = [];
    // Redefine the exception so message isn't optional
    public function __construct(string $message="", $code = 1, Throwable $previous = null) {
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        //return __CLASS__ . ":[{$this->code}]:{$this->message}\n";
        return __CLASS__ . ";CODE:{$this->code};MESSAGE:{$this->getMessage()};DATA:" . json_encode($this->exceptionData);
    }

   

    public static function CREATE(Exception $ex) : BaseException {
        if($ex instanceof BaseException)
            return $ex;
        else 
            return new BaseException($ex->getMessage(),1,$ex);
    }
   
    public function jsonSerialize() :mixed
    {
        return get_object_vars($this);
    }
}