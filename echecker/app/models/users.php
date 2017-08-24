<?php

    /**
     * 
     */
    class Users extends Database
    {
        
        function __construct()
        {
            
        }

        public function getAllUsers(){
            $admin = "aw";
            $user_level = "1";

            $data = self::query("SELECT * FROM users WHERE UID LIKE '1' AND user LIKE 'aw' ",array($user_level,$admin));
            return $data;
        }
    }
    
?>