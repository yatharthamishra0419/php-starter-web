<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FirstPageUI
 *
 * @author yathartha
 */
class FirstPageUI extends BaseUI{
    
    public function __construct() {
        
    }
    public function renderBody($outputArray) {
        include 'templates/firstpage/firstpage.phtml';
    }

}
