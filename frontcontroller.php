<?php
switch ($_SERVER['PHP_SELF']){
    case "/firstpage":
        $firstPageController=new FirstPageController();
        $firstPageController->main();
        break;
    
}

