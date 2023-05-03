<?php
function sendemail($toemail,$mailsubject,$body){
	$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Bcc: bmunkofficial@gmail.com\r\n";
		$headers .= "Bcc: staybindas@gmail.com\r\n";
		//$headers .= "Bcc: patilavinrock@gmail.com \r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: StayBindass Website Enquiry <nileshk@bmunk.com>" . "\r\n";
		
		$mailit = mail($toemail,$mailsubject,$body,$headers);
		if($mailit){
			$msg = "success";
		}else{
			$msg = "fail";
		}
		
		return $msg;
	
}
	function cleartext($id){
		$id = trim(str_replace("'", "", $id));
		$id = strip_tags($id);
		return $id;
		
	}
if(isset($_REQUEST['submit'])){
	$villa_name = cleartext($_REQUEST['villa_name']);
	 $name = cleartext($_REQUEST['name']);
	$mobile = cleartext($_REQUEST['mobile']);
	$checkindate = cleartext($_REQUEST['checkindate']);
	$checkoutdate = cleartext($_REQUEST['checkoutdate']);
	$numberofpeople = cleartext($_REQUEST['numberofpeople']);
	$villa_location = cleartext($_REQUEST['villa_location']);
	$villa_rate = cleartext($_REQUEST['villa_rate']);
	$page_link = cleartext($_REQUEST['page_link']);
	$property_pdf = cleartext($_REQUEST['property_pdf']);
	//$budgetperday = cleartext($_REQUEST['budgetperday']);
	//$msg = cleartext($_REQUEST['msg']);
	
		$strBody = "Following are form details";
		$strBody .= "<p>  Name : $name</p>";
		$strBody .= "<p>Pnone No : $mobile</p>";
		$strBody .= "<p>Check in Date : $checkindate</p>";
		$strBody .= "<p>Check Out Date : $checkoutdate</p>";
		$strBody .= "<p>Number of Guests : $numberofpeople</p>";
		$strBody .= "<p>  Villa Code : $villa_name</p>";
		$strBody .= "<p>Villa Location : $villa_location</p>";
		$strBody .= "<p>Villa Rate : $villa_rate</p>";
		$strBody .= "<p>Page Link : $page_link</p>";
		$strBody .= "<p>Property PDF : $property_pdf</p>";
		//$strBody .= "<p>Budget Per Day : $budgetperday</p>";
		//$strBody .= "<p>Message : $msg</p>";
		
	$mailsent = sendemail("nileshk@bmunk.com","StayBindass Website Enquiry",$strBody);
	header("location:thank-you.html"); exit;
	
}
?>