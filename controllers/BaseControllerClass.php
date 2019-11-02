<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseControllerClass
 *
 * @author yathartha
 */
abstract class BaseControllerClass {
    public abstract function render($outputArray);
    public abstract function execute(RequestWrapper $requestWrapper);
    public abstract function validate($requestWrapper);


    public function main(){
        $requestWrapper=new RequestWrapper();
        if($this->validate($requestWrapper)==0){
            echo "Some error occured , wrong request";
        };
        $outputArray=$this->execute($requestWrapper);
        $this->render($outputArray);
    }


    //put your code here
}


