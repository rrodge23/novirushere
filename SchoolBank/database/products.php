<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "database/dbconn.php";
    
    class modelProd extends database{

        public function getAllProd(){
            $con = $this->conn;
            $sql = "SELECT * FROM products";
            $result = $con->query($sql);
            $con->close();
            if($result->num_rows > 0){
                return $result;
            }
            return false;
        }

        public function getProdInfoById($data=NULL){
			$con = $this->conn;
			$result = $con->query("SELECT * FROM products WHERE PID LIKE '{$data}'");
			$con->close();
			if($result)
			{
				$result = $result->fetch_assoc();
				return $result;
			}
			return false;
		}

        public function addProduct($data=NULL){

            $con = $this->conn;
            $sql = "INSERT INTO products(prod_name,inter_rate) VALUES('{$data['actAcc_pn']}','{$data['actAcc_ir']}')";
            $result = $con->query($sql);
            $con->close();
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function deleteProduct($data=NULL){
            $con = $this->conn;
            $sql = "DELETE FROM products WHERE PID LIKE '{$data}'";
            $result = $con->query($sql);
            $con->close();
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function updateProduct($data=NULL){
            $con = $this->conn;
            $sql = "SELECT * FROM products WHERE PID NOT LIKE '{$data['PID']}' AND dept_name LIKE '{$data['prod_name']}' AND inter_rate LIKE '{$data['inter_rate']}'";
            $result = $con->query($sql);
            if($result){
                return false;
            }
            $sql = "UPDATE products SET prod_name='{$data['prod_name']}', inter_rate='{$data['inter_rate']}' WHERE PID LIKE '{$data['PID']}'";
            $result = $con->query($sql);
			if($result){
                return true;
            }else{
                return false;
            }
            
        }
    }

?>