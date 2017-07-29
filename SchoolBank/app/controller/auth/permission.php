<?php
    session_start();

    if(isset($_SESSION['users'])){
        $permissionData = array('cro'=>$_SESSION['users']['cro_pass'], 'cashier'=>$_SESSION['users']['cashier_pass']);
        echo json_encode($permissionData);
    }

?>