<?php
    
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
    if(!isset($_SESSION['users'])) {
        include_once("/view/auth/login.php");
        exit;
    }
?>
    <div class="row hidden" id="morning-greetings">
        <div class="col-md-2">
            <img src="/resources/assets/image/morning.png" style="height:150px;width:150px;">
        </div>
        <div class="col-md-10" style="margin-top:20px;padding-left:10px;border-left:1px solid #ddd;">
            <h2 class="greeting" style="float:left;color:#009785;font-family:'Arial Black', Gadget, sans-serif;"></h2>
            <h2 style="float:left;color:#009785;font-family:'Arial Black', Gadget, sans-serif;"><?=", ".$_SESSION['users']['nickname']." !"?></h2>
        </div>
    </div>
    <div class="row hidden" id="afternoon-greetings">
        <div class="col-md-2">
            <img src="/resources/assets/image/afternoon.png" style="height:150px;width:150px;">
        </div>
        <div class="col-md-10" style="margin-top:20px;padding-left:10px;border-left:1px solid #ddd;">
            <h2 class="greeting" style="float:left;color:#009785;font-family:'Arial Black', Gadget, sans-serif;"></h2>
            <h2 style="float:left;color:#009785;font-family:'Arial Black', Gadget, sans-serif;"><?=", ".$_SESSION['users']['nickname']." !"?></h2>
        </div>
    </div>
    <div class="row hidden" id="evening-greetings">
        <div class="col-md-2">
            <img src="/resources/assets/image/evening.png" style="height:150px;width:150px;">
        </div>
        <div class="col-md-10" style="margin-top:20px;padding-left:10px;border-left:1px solid #ddd;">
            <h2 class="greeting" style="float:left;color:#009785;font-family:'Arial Black', Gadget, sans-serif;"></h2>   
            <h2 style="float:left;color:#009785;font-family:'Arial Black', Gadget, sans-serif;"><?=", ".$_SESSION['users']['nickname']." !"?></h2>
        </div>
    </div>
    <div class="row">
    
       <div class="alert-message alert-message-warning box-shadow-panel">
            <h4>
                ATTENTION !
            </h4>
            <p>
                Create an announcement to all users <strong>HERE !</strong>
            </p>
        </div>
    </div>

    
<?php
    include "../../view/base/footer.php";
?>

