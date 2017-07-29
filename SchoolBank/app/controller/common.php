<?php
    define("ROOT_FOLDER", '/');
    define("VIEW", ROOT_FOLDER . 'view/');
    define("ASSET", ROOT_FOLDER . 'resources/assets/');
    define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
    session_start();

    function message($data=NULL){
        echo $data;
    }

    function refresh(){
        echo '<meta http-equiv="refresh" content=1>';
    }

?>

