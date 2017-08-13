<?php
include('../lib/common.php');
$util = new Utility;
$db = new DB;
$data = array('loan_no'=>$g['loan_no']);
$bl = $db->Select('my_loan_list',$data);
$computed = $util->amort_computation($bl);
 if(!count($bl) || !count($computed)){
	 redirect(FOLDER.'error-404');
 }
  if(!isset($g['loan_no'])){
	 redirect(FOLDER.'error-404');
 }
$date = date('M d, Y');
$date_granted = date_create($bl[0]['date_granted']);
$granted_date = date_format($date_granted, 'M d, Y');
$amort_date = date_modify($date_granted, '+'.$bl[0]['amort_adjust'].' day');
$amort_date = date_format($amort_date, 'M d, Y');
$pay_interval = '';
 if($bl[0]['pay_interval']==1){
	  $pay_interval='Daily (1)';
  }else if($bl[0]['pay_interval']==7){
	  $pay_interval='Weekly (7)';
  }else if($bl[0]['pay_interval']==15){
	  $pay_interval='Bi-Monthly (15)';
  }else{
	  $pay_interval='Monthly (30)';
  }
										  
$html = '
<div class="row">
 <div class="col-md-12 text-center">
	<h3>Borrower Amortization Table</h3>
 </div>
 <br>
 <div class="col-md-12">
	<table>
		<tr>
			<td colspan="3" width="100%">Name: <span style="font-weight:bold;">'.$bl[0]['name'].'</span></td>
			<td>Date Generated: <span style="font-weight:bold;">'.$date.'</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Loan Amount: <span style="font-weight:bold;">'.number_format($bl[0]['loan_amount'],2,'.',',').'</span></td>
			<td>Interest Amount: <span style="font-weight:bold;">'.number_format($computed[0]['total_interest'],2,'.',',').'</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Date Granted: <span style="font-weight:bold;">'.$granted_date.'</span></td>
			<td>Date Maturity: <span style="font-weight:bold;">'.$amort_date.'</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Payment Interval: <span style="font-weight:bold;">'.$pay_interval.'</span></td>
			<td>No. of Amortization: <span style="font-weight:bold;">'.$bl[0]['amort_count'].'</span></td>
		</tr>
		<tr>
			<td colspan="3" width="100%">Term: <span style="font-weight:bold;">'.$bl[0]['amort_adjust'].' Days</span></td>
		</tr>
	</table>
	
  <div class="col-md-12">
 <hr>
<table class="amort_table">
	<thead>
		<tr class="headerrow">
			<th>Date</th>
			<th>Principal</th>
			<th>Interest</th>
			<th>Total</th>
		</tr>
	</thead>
		<tbody>';
	foreach($computed as $key => $a){
		$total_interval =$a['interval']*($key+1);
		$date_granted = date_create($a['amort_date']);
		$amort_principal = 0;
		$interest_amount = 0;
		$total_amount = 0;
		if(($key+1)==$bl[0]['amort_count']){
			$amort_date = date_modify($date_granted, '+'.$bl[0]['amort_adjust'].' day');
			$amort_date = date_format($amort_date, 'Y-m-d');
			echo $amort_date;
		}else{
			$amort_date = date_modify($date_granted, '+'.$total_interval.' day');
			$amort_date = date_format($amort_date, 'Y-m-d');
		}
		
		if(($key+1)==$bl[0]['amort_count']){
			$amort_principal = number_format(($a['amort_principal']+$a['p_adjust']),2,'.',',');
		}else{
			$amort_principal = number_format($a['amort_principal'],2,'.',',');
		}
		
		if(($key+1)==$bl[0]['amort_count']){
			$interest_amount = number_format(($a['interest_amount']+$a['i_adjust']),2,'.',',');
		}else{
			$interest_amount = number_format($a['interest_amount'],2,'.',',');
		}
		
		if(($key+1)==$bl[0]['amort_count']){
			$total_amount = number_format(($a['total_amount']+$a['p_adjust']+$a['i_adjust']),2,'.',',');
		}else{
			$total_amount = number_format($a['total_amount'],2,'.',',');
		}
	$html .='	<tr class="oddrow">
			<td>'.$amort_date.'</td>
			<td>'.$amort_principal.'</td>
			<td>'.$interest_amount.'</td>
			<td>'.$total_amount.'</td>
		</tr>';
	}
	$total_int = ($a['interest_amount']*$bl[0]['amort_count'])+$a['i_adjust'];
	$total_amort = ($a['total_amount']*$bl[0]['amort_count'])+$a['p_adjust']+$a['i_adjust'];
	$html.='
	<tr>
		<th>Grand Total</th>
		<th>'.number_format($bl[0]['loan_amount'],2,'.',',').'</th>
		<th>'.number_format($total_int,2,'.',',').'</th>
		<th>'.number_format($total_amort,2,'.',',').'</th>
	</tr>
	</tbody>
	</table>
	</div>
	</div>
</div>
</div>
</div>
';


//==============================================================
//==============================================================
//==============================================================

include('mpdf.php');

$mpdf=new mPDF('c'); 

$mpdf->SetDisplayMode('fullpage');
$mpdf->SetTitle('Amortization');
$mpdf->SetAuthor('MyLoan User');
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================

?>