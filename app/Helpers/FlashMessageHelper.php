<?php


namespace App\Helpers;


use Illuminate\Session\Store;

class FlashMessageHelper
{
    private $sessionKey = 'exception-helper';

    protected $session;

    public function __construct(Store $sessionStore)
    {
        $this->session = $sessionStore;
    }

    public function setExceptionMessage($exceptionObject){
        $this->session->push($this->sessionKey,$exceptionObject->getMessage());
    }

    public function setMessage($error){
        $this->session->push($this->sessionKey,$error);
    }
}
