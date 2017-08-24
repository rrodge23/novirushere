<?php

   
    class Home extends Controller
    {
        
        public function index($name=null){
            
            $dbUser = new Users();

            $users = $dbUser->getAllUsers();
   
            self::view('home/index', function() use ($users){
                return $users;
            });
            
        }
    }
    
?>