<?php
    include  $_SERVER["DOCUMENT_ROOT"] . "/view/base/header.php";
    include ROOT . "app/controller/auth/loginController.php";
    
?>
    <div style="background-color:#DADADA;height:110%;width:100%;">
        <div class="ui middle aligned center aligned grid">
            <div class="column" style="width:35%;margin-top:8%;margin-left:18%;">
                <h2 class="ui teal image header">
                <img src="/resources/assets/image/logo.png" class="image">
                <div class="content">
                    School Bank | EBI
                </div>
                </h2>
                <form class="ui large form" method="post">
                <div class="ui stacked segment">
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" id="usern" name="username" autofocus="autofocus" placeholder="Enter Username">
                    </div>
                    </div>
                    <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input id="passw" type="password" name="password" placeholder="Enter Password">
                    </div>
                    </div>
                    <div class="ui fluid large teal submit button">Login</div>
                </div>
                <div class="ErrorMessage"><?=$loginMessage;?></div>
                <div class="ui error message"></div>

                </form>

                <div class="ui message">
                    more about EBI | <a href="#">School Bank</a>
                </div>
            </div>
        </div>
        
    </div>
    
    
              
<?php
    include ROOT . "view/base/footer.php";
?>


