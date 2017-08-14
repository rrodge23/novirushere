<?php
 
 include $_SERVER['DOCUMENT_ROOT'] . "database/transaction.php";

$dbTrans = new modelTrans();
$data = $dbTrans->getPreviousTransaction();
$ACID = $data;

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
                    <div>
                        
                    </div>
                </td>
                <td style="width:33.33%;padding:10px;">
                    <div>
                    
                    </div>
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
                            <td style="width:50%;">
                                <div>
                                    <span><b>Date Generated</b></span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span><b>:</b></span>
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
                            <td>
                                <div>
                                    <span><b>:</b></span>
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
                            <td>
                                <div>
                                    <span><b>:</b></span>
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
                        <span><b>Transaction Date</b></span>
                    </div>
                </td>
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
                        <span><b>Amount</b></span>
                    </div>
                </td>
                <td class="td-list">
                    <div>
                        <span><b>Amount</b></span>
                    </div>
                </td>
                <td class="td-list">
                    <div>
                        <span><b>Amount</b></span>
                    </div>
                </td>
                <td class="td-list">
                    <div>
                        <span><b>Amount</b></span>
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