<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RequestWrapper
 *
 * @author yathartha
 */
class RequestWrapper{
    
    private $postParameters;
    private $getParameters;
    private $cookieParameters;
    private $sessionParameters;
    private $serverParameters;
    


    public function __construct() {
        $this->postParameters=$_POST;
        $this->getParameters=$_GET;
        $this->cookieParameters=$_COOKIE;
        $this->sessionParameters=$_SESSION;
        $this->serverParameters=$_SERVER;
    }
    
    public function getPostParameters() {
        return $this->postParameters;
    }

    public function getGetParameters() {
        return $this->getParameters;
    }

    public function setPostParameters($postParameters) {
        $this->postParameters = $postParameters;
    }

    public function setGetParameters($getParameters) {
        $this->getParameters = $getParameters;
    }
    
}
