<?php

    include $_SERVER["DOCUMENT_ROOT"] . "database/transaction.php";

    if($_POST['mode'] == "deleteTrans"){
        $dbTrans = new modelTrans();
        $transData = $dbTrans->deleteTransaction($_POST);
        echo json_encode($transData);
    }
?>