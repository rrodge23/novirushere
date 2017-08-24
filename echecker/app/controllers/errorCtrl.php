<?php

   
    class ErrorCtrl extends Controller
    {
        
        public static function index(){
            self::view('home/error', "Error");
        }
    }
    
?>