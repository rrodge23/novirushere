<?php

    /**
     * 
     */
    class dashboard extends Controller
    {
        
        public function index($name=null){
            
            $dbUser = new Users();

            $users = $dbUser->getAllUsers();
   
            self::view('pages/dashboard', function() use ($users){
                return $users;
            });
            
        }


    }
    
?>