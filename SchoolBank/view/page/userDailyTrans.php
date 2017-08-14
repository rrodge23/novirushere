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
        <h1>My Daily Transaction</h1>
        <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>

                    <td class="text-center font-roboto color-a2">Transaction ID</td>
                    <td class="text-center font-roboto color-a2">Account ID</td>
                    <td class="text-center font-roboto color-a2">Transaction Date</td>
                    <td class="text-center font-roboto color-a2">Transaction Type</td>
                    <td class="text-center font-roboto color-a2">Amount</td>
                    <td class="text-center font-roboto color-a2">Total Amount</td>
               
                </tr>
            </thead>
            <tbody>
                <?php 
                    $totalUserBalance = 0;
                    if($userDailyTransactionTableList){
                        while($r = $userDailyTransactionTableList->fetch_assoc()){
                            $id = $r['ID'];
                            $ACID = $r['ACID'];
                            $trans_date = $r['trans_date'];
                            $trans_type = ($r['trans_type'] == 1) ? 'Deposit' : 'Withdrawal';
                            $amount = $r['amount'];
                            $totalUserBalance = ($r['trans_type'] == 1) ? $totalUserBalance+$amount : $totalUserBalance-$amount;
                            $amount = number_format($amount,2,'.',',');
                            $total_amount = number_format($r['total_amount'],2,'.',',');
                            echo "
                                <tr>  
                                    <td class='text-center checked'>$id</td>
                                    <td class='text-center'>$ACID</td>
                                    <td class='text-center'>$trans_date</td>
                                    <td class='text-center'>$trans_type</td>
                                    <td class='text-center'>$amount</td>
                                    <td class='text-center'>$total_amount</td>
                                </tr>
                            ";
                         
                        }
                    }
                    
                ?>
            </tbody>
        </table>
        <h1>Total Balance: <?php echo number_format($totalUserBalance,2,'.',','); ?></h1>
   </div>
<?php
    include "../../view/base/footer.php";
?>

