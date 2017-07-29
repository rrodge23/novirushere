<?php
    
    include "../../view/base/header.php";
    include "../layout/layout.php";
    include "../../app/controller/homeController.php";
    if(!isset($_SESSION['users'])) {
        include_once("/view/auth/login.php");
        exit;
    }
?>
    
    <div class="row">
        
        <table style="height: 100%;width: 100%;">
        	<tr style="height: 30%;width: 100%;">
        		<td>
        			<div id="chartContainer" style="height: 300px; width: 100%;">
        		</td>
        		<td>
        			<div id="chartSpline" style="height: 300px; width: 100%;">
        		</td>
        	</tr>
        </table>
    
    </div>

    <div class="row">
        <div class="greeting font-product" style="font-size:30px;"></div>
        <?php print_r($_SESSION['users']); ?>
    </div>
<?php
    include "../../view/base/footer.php";
?>

