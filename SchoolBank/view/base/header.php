<?php
    include $_SERVER["DOCUMENT_ROOT"] . "app/controller/common.php";
    if($_SERVER['REQUEST_URI'] != '/'){
        if(!isset($_SESSION['users'])){
            header('location:/');
        }
    }else{
        if(isset($_SESSION['users'])){
            header('location:/view/page/home.php');
        }
    }
    
    

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	
	<title>School Bank | EBI</title>

    <link href= "<?php echo ASSET; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
    <link href= "<?php echo ASSET; ?>css/material-dashboard.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/demo.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/material-icons.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/fa.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/dataTables.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/datepicker.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/dataTables-bootstrap4.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/jquery-dropdown.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/design.css" rel="stylesheet" type="text/css"/>
    <link href= "<?php echo ASSET; ?>css/common.css" rel="stylesheet" type="text/css"/>
    <script src= "<?php echo ASSET; ?>js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/dataTables.js" type="text/javascript"></script>
    <script src= "<?php echo ASSET; ?>js/dataTables-bootstrap4.js" type="text/javascript"></script>
</head>

<body>
    <div class="loader">
        <img src="/resources/assets/image/magniloader.gif" id="loadergif">
    </div>

