<?php

    include $_SERVER["DOCUMENT_ROOT"] . "database/department.php";
    
    if(isset($_POST['id'])){
        if($_POST['set'] == "department"){
            $dbDept = new modelDept();
            $data = $dbDept->getDeptInfoById($_POST['id']);
            $dbDept = new modelDept();
            $result = $dbDept->updateDepartment($data);
            echo json_encode($result);
        }
    }
    
?>