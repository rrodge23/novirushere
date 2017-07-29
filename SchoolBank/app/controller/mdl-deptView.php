<?php

    include $_SERVER["DOCUMENT_ROOT"] . "database/department.php";

    /**** MODAL UPDATE INPUT TEXT *******/
    if($_POST['mode'] == "deptView"){
        $dbDept = new modelDept();
        $deptData = $dbDept->getDeptInfoById($_POST['id']);
        echo json_encode($deptData);    
    }
    
    if($_POST['mode'] == "deptUpdate"){
        $dbDept = new modelDept();
        $deptData = $dbDept->updateDepartment($_POST);
        echo json_encode($deptData);    
    }

    if($_POST['mode'] == "deptDelete"){
        $dbDept = new modelDept();
        $deptData = $dbDept->deleteDepartment($_POST['id_del']);
        echo json_encode($deptData);
    }

    if($_POST['mode'] == "addDept"){
        $dbDept = new modelDept();
        $deptData = $dbDept->addDepartments($_POST);
        echo json_encode($deptData);
    }

?>