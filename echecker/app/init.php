<?php
        
        /**
        * AUTO LOAD IF FILE IS EXIST
        */
     
        
        
        spl_autoload_register(function($class){
            if(file_exists(__ROOT . 'app/core/'. $class . '.php')){ // CORE
                require_once __ROOT . 'app/core/'. $class . '.php';
            }else if(file_exists(__ROOT . 'app/controllers/'. $class . '.php')){ // CONTROLLER
                require_once __ROOT . 'app/controllers/'. $class . '.php';
            }else if(file_exists(__ROOT . 'app/models/'. $class . '.php')){ // MODEL
                require_once __ROOT . 'app/models/'. $class . '.php';
            }
        });
      
        require_once __ROOT . 'app/route/routes.php';
?>