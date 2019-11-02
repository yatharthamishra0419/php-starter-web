<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FirstPageLibrary
 *
 * @author yathartha
 */
class FirstPageLibrary {
    
    private $testModel;
    
    public function __construct() {
        $this->testModel=new TestModel();
    }
    
    public function getTestData(){
        // some more operations can be performed here
        return $this->testModel->getData();
    }
}
