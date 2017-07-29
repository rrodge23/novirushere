<?php
    class database{

        var $conn;

        function __construct(){
            
            $this->conn = new mysqli("localhost","root","","schoolbank");

			if($this->conn->connect_error)
			{
				die("error: ". $this->conn->connect_error());
			}
        }
    }

?>