<?php
    session_start();
    if(isset($_SESSION['users'])){
        $sessionData = array('username' => $_SESSION['users']['username'],
                             'password' => $_SESSION['users']['password'],   
                             'status' => $_SESSION['users']['status'],   
                             'user_level' => $_SESSION['users']['user_level'],   
                             'nickname' => $_SESSION['users']['nickname'],   
        );
        echo json_encode($sessionData);
    }

?>