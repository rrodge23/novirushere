<?php

    include $_SERVER["DOCUMENT_ROOT"] . "database/products.php";

    if($_POST['mode'] == "viewProd"){
        $dbProd = new modelProd();
        $prodData = $dbProd->getProdInfoById($_POST['id_view']);
        echo json_encode($prodData);
    }

    if($_POST['mode'] == "updateProd"){
        $dbProd = new modelProd();
        $prodData = $dbProd->updateProduct($_POST);
        echo json_encode($prodData);
    }

    if($_POST['mode'] == "deleteProd"){
        $dbProd = new modelProd();
        $prodData = $dbProd->deleteProduct($_POST['id_del']);
        echo json_encode($prodData);
    }

    if($_POST['mode'] == "addProd"){
        $dbProd = new modelProd();
        $prodData = $dbProd->addProduct($_POST);
        echo json_encode($prodData);
    }

?>