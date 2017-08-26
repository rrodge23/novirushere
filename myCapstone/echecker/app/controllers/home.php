<?php

   
    class Home extends Controller
    {
        
        public function index($name=false){
            $user = $this->model('Users');
            $this->view('home/index', $name);
        }

    }
    
?>