<?php

    /**
     * 
     */
     
    class Database
    {
        protected static $host = "localhost";
        protected static $username = "root";
        protected static $password = "";
        protected static $dbName = "echecker";

     
        public static function connect()
        {
            $connection = new mysqli(self::$host,self::$username,self::$password,self::$dbName);
            if($connection->connect_error){
                die("error: " . $connection->connect_error());
            }
            return $connection;
        }

        public static function query($query, $params=array()){
            $connection = self::connect();
            $sqlQuery = self::insertQueryParameters($query, $params);
       
            $dbResult = $connection->query($sqlQuery[0]);
            if($sqlQuery[1]){
                if($dbResult){
                    return $dbResult;
                }else{
                    echo "\nno query failed";
                }
            }else{
                if($dbResult){
                    return true;
                }
            }
            return false;
        }

        private static function insertQueryParameters($query, $params=array()){
            $queryStatement = explode(' ', $query);
            
            $newQueryStatement = "";
            $index = 0;
            foreach($queryStatement as $statement){
                if($statement == "?"){
                    $statement = $params[$index++];
                }
                $newQueryStatement .= $statement . " ";
            }
            
            $ifQuerySelect = (strtolower($queryStatement[0]) == "select") ? true : false; // CHECK IF IT IS SELECT STATEMENT OR NOT
            
            return array(rtrim($newQueryStatement, " "), $ifQuerySelect);
        }
    }
    
?>