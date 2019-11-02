<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseUI
 *
 * @author yathartha
 */
abstract class BaseUI {
    
    protected abstract function renderBody($outputArray);
    
    public function renderPage($outputArray){
        $this->renderHeader();
        $this->renderBody($outputArray);
        $this->renderFooter();
    }

    protected function renderHeader(){
        include 'templates/header.html';
    }
    protected function renderFooter(){
        include 'templates/footer.html';
    }
   
}
