<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

        <div class="logo text-center">
            <a href="" class="font-product" style="color:orange !important;">
                School Bank | EBI
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <?php 
                    if($_SESSION['users']['user_level'] == 1)
                        $usrLvl = "Admin";
                    else if($_SESSION['users']['user_level'] == 2)
                        $usrLvl = "Staff";
                    else if($_SESSION['users']['user_level'] == 3)
                        $usrLvl = "CRO";
                    else $usrLvl = "Cashier/BM";

                    if($_SESSION['users']['user_level'] == 1){
                        $navDash="";
                        $navDept="";
                        $navProd="";
                        $navClient="";
                        $navReports="";
                        $navUsers="";
                        $authClientButtonDeposit="";
                        $authClientButtonWithdrawal="";
                        $authClientButtonHist="";
                        $authClientButtonView="";
                        $authClientButtonDelete="";    
                        $authButtonTransHistDelete="";                    
                    }

                    if($_SESSION['users']['user_level'] == 2){
                        $navDash="";
                        $navDept="hidden";
                        $navProd="hidden";
                        $navClient="";
                        $navReports="";
                        $navUsers="hidden";
                        $authClientButtonDeposit="";
                        $authClientButtonWithdrawal="";
                        $authClientButtonHist="";
                        $authClientButtonView="hidden";
                        $authClientButtonDelete="hidden";
                        $authButtonTransHistDelete="hidden";
                    }

                    if($_SESSION['users']['user_level'] == 3){
                        $navDash="";
                        $navDept="hidden";
                        $navProd="hidden";
                        $navClient="hidden";
                        $navReports="hidden";
                        $navUsers="hidden";
                        $authClientButtonDeposit="hidden";
                        $authClientButtonWithdrawal="hidden";
                        $authClientButtonHist="hidden";
                        $authClientButtonView="hidden";
                        $authClientButtonDelete="hidden";
                        $authButtonTransHistDelete="hidden";
                    }

                    if($_SESSION['users']['user_level'] == 4){
                        $navDash="";
                        $navDept="hidden";
                        $navProd="hidden";
                        $navClient="hidden";
                        $navReports="";
                        $navUsers="hidden";
                        $authClientButtonDeposit="hidden";
                        $authClientButtonWithdrawal="hidden";
                        $authClientButtonHist="";
                        $authClientButtonView="hidden";
                        $authClientButtonDelete="hidden";
                        $authButtonTransHistDelete="hidden";
                    }

                ?>
                <li class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/home.php' ? 'active' : ''; echo ' ' .$navDash;?> '>
                    <a href='/view/page/home.php'> 
                        <i class='material-icons'>dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/clients.php' ? 'active' : '';echo ' ' . $navClient; ?> '>
                    <a href='/view/page/clients.php'>
                        <i class='material-icons'>account_box</i>
                        <p>Clients</p>
                    </a>
                </li>     
                <li class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/departments.php' ? 'active' : '';echo ' ' . $navDept; ?>'>
                    <a href='/view/page/departments.php'>
                        <i class='material-icons'>view_compact</i>
                        <p>Departments</p>
                    </a>
                </li>
                <li class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/products.php' ? 'active' : '';echo ' ' . $navProd; ?> '>
                    <a href='/view/page/products.php'>
                        <i class='material-icons'>donut_small</i>
                        
                        <p>Products</p>
                    </a>
                </li>  
                <li class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/trans_hist.php' ? 'active' : '';echo ' ' . $navReports; ?> '>
                    <a href='#' data-target='.collapseone' data-toggle='collapse'> 
                        <i class='material-icons'>assessment</i>
                        <p>Reports<b class='caret float-right' style='margin-top: 13px;'></b></p>
                    </a>
                    <ul id="sidebarcollapse" class='nav collapse collapseone' aria-expanded='true' style='margin-top: 0px !important;'>
                        <li id="sidebarReportsCollapse" class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/trans_hist.php' ? 'active' : ''; ?> '>
                           <a href='/view/page/trans_hist.php'>Transaction History</a>
                        </li>
                        
                    </ul>
                </li>
                
                <li class='<?php echo $_SERVER['REQUEST_URI'] == '/view/page/users.php' ? 'active' : '';echo ' ' . $navUsers;?>'>
                    <a href='/view/page/users.php'>
                        <i class='material-icons'>account_circle</i>
                        <p>Users</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="box-shadow navbar navbar-transparent navbar-absolute" style="background-color: #009587;">
            <div class="container-fluid" style="height:50px !important;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" style="padding-top:0px !important;">
                    <ul class="nav navbar-nav navbar-right float-right">
                        <table style="">
                            <tr>
                                <td>
                                    <p class="font-product" style="color:white;margin:10px;margin-right:20px;margin-bottom:0px;"><?=$_SESSION['users']['nickname']; ?></p><p style="margin:0 !important;font-size:10px;color:white;" class="padding-left10"><?=$usrLvl ?></p>
                                </td>
                                <td>
                                    <li class="dropdown" style="margin-right:50px;">
                                        <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="material-icons">person</i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li id="logout"><a style="font-weight:bold;font-size:13px !important;" href="/app/controller/auth/logout.php" class="font-product" style="color:#009785;">Logout</a></li>                                
                                            <li id="chnge_pass"><a style="font-weight:bold;font-size:13px !important;" href="/view/auth/changePass.php" class="font-product" style="color:#009785;">Change Password</a></li>                                
                                        </ul>
                                    </li>
                                </td>
                            </tr>
                        </table>
                      
                    </ul>
                    <a class="navbar-brand float-right font-product" style="color:white;" href="#"></a>
                    

                </div>
            </div>
        </nav>

        <div class="content">
             <div class="container-fluid">