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
	$mobile = cleartext($_REQUEST['mobile']);
	
		$strBody = "Following are form details";
		$strBody .= "<p>Pnone No : $mobile</p>";
		
	$mailsent = sendemail("nileshk@bmunk.com","StayBindass Website Enquiry Callback",$strBody);
	header("location:thank-you.html"); exit;
	
}
?>