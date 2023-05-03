<?php
function sendemail($toemail,$mailsubject,$body){
	$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Bcc: bmunkofficial@gmail.com\r\n";
		$headers .= "Bcc: ashishmaurya371@gmail.com\r\n";
		//$headers .= "Bcc: patilavinrock@gmail.com \r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: StayBindass Partner as a Homeowner <info@bmunkvillas.com>" . "\r\n";
		
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
	 $name = cleartext($_REQUEST['name']);
	$email = cleartext($_REQUEST['email']);
	$mobile = cleartext($_REQUEST['mobile']);
	$property_type = cleartext($_REQUEST['property_type']);
	$location = cleartext($_REQUEST['location']);
	$messages = cleartext($_REQUEST['messages']);
	//$budgetperday = cleartext($_REQUEST['budgetperday']);
	//$msg = cleartext($_REQUEST['msg']);
	
		$strBody = "Following are form details";
		$strBody .= "<p>  Name : $name</p>";
		$strBody .= "<p>Pnone No : $email</p>";
		$strBody .= "<p>Email : $mobile</p>";
		$strBody .= "<p>Property Type: $property_type</p>";
		$strBody .= "<p>Location : $location</p>";
		$strBody .= "<p>Messages : $messages</p>";
		//$strBody .= "<p>Budget Per Day : $budgetperday</p>";
		//$strBody .= "<p>Message : $msg</p>";
		
	$mailsent = sendemail("info@bmunkvillas.com","StayBindass Partner as a Homeowner",$strBody);
	header("location:thank-you.html"); exit;
	
}
?>