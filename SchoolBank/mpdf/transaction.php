<?php
 
 include $_SERVER['DOCUMENT_ROOT'] . "database/transaction.php";

$dbTrans = new modelTrans();
$data = $dbTrans->getPreviousTransaction();
$ACID = $data["ACID"];
$AID = $data["AID"];
$firstname = $data["firstname"];
$middlename = $data["middlename"];
$lastname = $data["lastname"];
$trans_date = date("Y-m-d g:i a", strtotime($data["trans_date"]));
$trans_type = ($data["trans_type"] == 1) ? "Deposit" : "Withdrawal";
$product = $data["prod_name"];
$teller = $data["teller"];
$amount = number_format($data["amount"],2,'.',',');

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <style>'.file_get_contents('bootstrap.css').'</style>
</head>
<body>
    
    <div class="row">
        <table style="width:100%;">
            <tr>
                <td style="width:66.66%;padding10px;">
                    <div style="border-bottom:1px solid #ddd;border-right:1px solid #ddd;">
                        <span style="font-size:50px;"><b>SCHOOL BANKING</b></span>
                    </div>
                </td>
                <td style="width:33.33%;padding:10px;">
                    <div style="">
                        <span style="font-size:20px;float:right;"><b>INVOICE</b></span>
                    </div>
                </td>
               
            </tr>
            <tr>
                <td>
                    <br>
                    <br>
                    <br>
                    <br>
                </td>
                
            </tr>
            <tr>
                <td style="width:60.00%;padding:10px;">
                    <table style="width:100%;">
                        <tr>
                            <td style="width:20%;">
                                <div>
                                    <span><b>Account no</b></span>
                                </div>
                            </td>
                            <td style="width:2%;">
                                <div>
                                    <span><b>:</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span><b>'.$ACID.'</b></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                   
                </td>
                <td style="width:39.99%;padding:10px;">
                    <table style="width:100%;">
                        <tr>
                            <td style="width:45%;">
                                <div>
                                    <span><b>Date Generated</b></span>
                                </div>
                            </td>
                            <td style="width:2%;">
                                <div>
                                    <span><b>:</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span><b>'.$trans_date.'</b></span>
                                </div>
                            </td>
                           
                        </tr>
                    </table> 
                </td>
            </tr>
            <tr>
                <td style="width:66.66%;padding:10px;">
                    <table style="width:100%;">
                        <tr>
                            <td style="width:20%;">
                                <div>
                                    <span><b>Name</b></span>
                                </div>
                            </td>
                            <td style="width:2%;">
                                <div>
                                    <span><b>:</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span><b>'.$lastname.', '.$firstname.' '.$middlename.'</b></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                   
                </td>
                <td style="width:33.33%;padding:10px;">
                    <div>
                        <span><b></b></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width:66.66%;padding:10px;">
                    <table style="width:100%;">
                        <tr>
                            <td style="width:20%;">
                                <div>
                                    <span><b>Client Type</b></span>
                                </div>
                            </td>
                            <td style="width:2%;">
                                <div>
                                    <span><b>:</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span><b>'.$product.'</b></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:33.33%;padding:10px;">
                    <div>
                        <span><b></b></span>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <hr>
        <br>
        <table style="width:100%;" class="list">
            <tr style="width:100%;">
                <td class="td-header">
                    <div>
                        <span><b>Transaction Type</b></span>
                    </div>
                </td>
                <td class="td-header">
                    <div>
                        <span><b>Teller</b></span>
                    </div>
                </td>
                <td class="td-header">
                    <div>
                        <span><b>Amount</b></span>
                    </div>
                </td>
            </tr>
            <tr style="width:100%;">
                <td class="td-list">
                    <div>
                        <span><b>'.$trans_type.'</b></span>
                    </div>
                </td>
                <td class="td-list">
                    <div>
                        <span><b>'.$teller.'</b></span>
                    </div>
                </td>
                <td class="td-list">
                    <div>
                        <span><b>'.$amount.'</b></span>
                    </div>
                </td>
            </tr>
        </table>


    </div>

</body>
</html>
';

include('mpdf.php'); // including mpdf.php
$mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();

exit;



?>