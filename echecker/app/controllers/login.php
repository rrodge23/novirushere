<?php

   
    class Login extends Controller
    {
        
        public function index(){
            
            self::view('auth/login', function(){
                 
            });
        }
    }
    
?>