<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "database/dbconn.php";
    class modelDept extends database{

        public function getDepartments(){
            
			$con = $this->conn;

            $sql = "SELECT * FROM department";
            $result = $con->query($sql);
            $con->close();
            
			if($result->num_rows > 0)
			{
				return $result;
			}
			return false;
            
        }

        public function getDeptInfoById($data=NULL){
            
			$con = $this->conn;
			$result = $con->query("SELECT * FROM department WHERE DID LIKE '{$data}'");
			$con->close();
			if($result)
			{
				$result = $result->fetch_assoc();
				return $result;
			}
			return false;
		}

        public function addDepartments($data=NULL){

            $con = $this->conn;

            $sql = "SELECT * FROM department WHERE dept_name LIKE '".$data['actAcc_dn']."'";
            $result = $con->query($sql);
            

            if($result->num_rows > 0){
                return false;
            }

            $sql = "INSERT INTO department(dept_name) VALUES('".$data['actAcc_dn']."')";
            $result = $con->query($sql);
            $con->close();
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function deleteDepartment($data=NULL){
            $con = $this->conn;
            $sql = "DELETE FROM department WHERE DID LIKE '".$data."'";
            $result = $con->query($sql);
			if($result){
                return true;
            }else{
                return false;
            }
        }

        public function updateDepartment($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM department WHERE DID NOT LIKE '{$data['DID']}' AND dept_name LIKE '{$data['dept_name']}'";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                return false;
            }
            $sql = "UPDATE department SET dept_name='{$data['dept_name']}' WHERE DID LIKE '{$data['DID']}'";
            $result = $con->query($sql);
			if($result){
                return true;
            }else{
                return false;
            }
            
        }
    }

?>