<?php

namespace App\Exception;

use Symfony\Component\HttpFoundation\Response;
use Throwable;

class DatabaseException extends BaseException  {
    
    // Redefine the exception so message isn't optional
    public function __construct($message ="Database error happened. ", $code = 9100,  array $exceptionData=[],Throwable $previous = null) {
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
        $this->__RESPONSE_CODE__ = Response::HTTP_INTERNAL_SERVER_ERROR;
        $this->exceptioName = __CLASS__;
        $this->exceptionData = $exceptionData;
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}