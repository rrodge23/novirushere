<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "database/dbconn.php";
    class modelTrans extends database{

        public function getAllTransactionHistoryDeposits(){
            $con = $this->conn;
            $sql = "SELECT * FROM transaction WHERE trans_type LIKE 1";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                return $result;
            }
            return false;
        }
        public function getAllTransactionHistoryWithdrawals(){
            $con = $this->conn;
            $sql = "SELECT * FROM transaction WHERE trans_type LIKE 2";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                return $result;
            }
            return false;
        }

        public function deleteTransaction($data=NULL){
            $con = $this->conn;
            $sql = "DELETE FROM transaction WHERE ID LIKE '{$data['id_del']}' ";
            $result = $con->query($sql);
            if($result){
                return true;
            }
            return false;
        }

        public function getPreviousTransaction(){
            $con = $this->conn;
            $sql ="SELECT * FROM transaction LEFT JOIN accounts ON transaction.ACID = accounts.ACID
                LEFT JOIN client_info ON accounts.ID = client_info.ID ORDER BY trans_date DESC LIMIT 1
            ";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                return $result = $result->fetch_assoc();
            }else{
                return false;
            }
        }
    }

?>