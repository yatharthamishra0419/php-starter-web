<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FirstPage
 *
 * @author yathartha
 */
class FirstPageController extends BaseControllerClass{
    
    private $firstPageLibrary;
    private $view;

    public function __construct() {
        $this->firstPageLibrary=new FirstPageLibrary();
        $this->view=new FirstPageUI();
    }

    

    public function execute(RequestWrapper $requestWrapper) {
        return $this->firstPageLibrary->getTestData();
    }
    
    public function render($outputArray) {
        $this->view->renderPage($outputArray);
    }

    public function validate($requestWrapper) {
        return 2;
    }
    

}
