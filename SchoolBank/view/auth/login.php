<?php
    include  $_SERVER["DOCUMENT_ROOT"] . "/view/base/header.php";
    include ROOT . "app/controller/auth/loginController.php";
    
?>
    
    <nav class="navbar navbar-info" style="background-color:#009785;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"></button>
               
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6 container-fluid">                            
                    <div class="card" style="background-color: rgba(255,255,255,0.5)">
                        <div class="card-header" data-background-color="#009785">
                            <h4><center>School Bank</center></h4>
                        </div>
                        <div class="card-content">
                            <form role="form" method="post">
                                <div class="form-group label-floating">
                                    <label for="usern" class="control-label">Username</label>
                                    <input type="text" id="usern" class="form-control" name="username" autofocus="autofocus">
                                </div>
                                <div class="form-group label-floating">
                                    <label for="passw" class="control-label">Password</label>
                                    <input id="passw" type="password" name="password" class="form-control">
                                </div>
                              
                                <div>
                                    <button style="background-color: #009785;" type="submit" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </div>
              
<?php
    include ROOT . "view/base/footer.php";
?>


