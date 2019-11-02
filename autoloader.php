<?php
    function __autoload($class_name) 
    {
        //class directories
        $directorys = array(
            'controllers/',
            'controllers/models/',
            'library/',
            'models/',
            'views/',
            'views/templates'
        );
        
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php'))
            {
                require_once($directory.$class_name . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                return;
            }            
        }
    }