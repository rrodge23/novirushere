<?php

    /**
     * 
     */
     
    class Controller
    {
        
        public function model($model){
            return new $model();
        }

        public static function view($view=false, $function=array()){
            
            if(is_callable($function)){
                $data = $function();
            }else{
                $data = $function;
            }
            
            require_once __ROOT . 'app/views/layouts/header.php';
            require_once __ROOT . 'app/views/' . $view . '.php';
            require_once __ROOT . 'app/views/layouts/footer.php';
        }

    }
    
?>