<?php 

function sendmail($host,$port,$username,$password,$from,$fromname,$to,$subject,$message) {

    $mail = new PHPMailer(); 
    $mail->Host = $host;  
	$mail->Port = $port;       
	$mail->SMTPAuth = false;  
	$mail->SMTPDebug = 2;
	$mail->Username = $username; 
	$mail->Password =$password; 
	$mail->SMTPSecure = 'tls'; 
	$mail->From = $from;
	$mail->FromName = $fromname;
	$mail->AddAddress($to);
	// foreach ($tomaillist as $selectedto){
	// 	$mail->AddAddress($selectedto);
	// }
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->WordWrap = 50; 
	$mail->IsHTML(true);
    if($mail->Send()){
	
        $submess = '<div class="alert alert-success" role="alert">';
		$submess .= 'Thankyou for Purchase.';	
		$submess .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
		
		
	} else {

		$submess = 'Error sending Message'; // ECHO Error sending message 
	}
	
}

function sendmailAdmin($host,$port,$username,$password,$from,$fromname,$to,$cc,$subject,$message) {

	//$tomaillist = array();
	//$tomaillist=explode(",", $to);


    $mail = new PHPMailer(); 
    $mail->Host = $host;  
	$mail->Port = $port;       
	$mail->SMTPAuth = true;  
	$mail->SMTPDebug = 2;
	$mail->Username = $username; 
	$mail->Password =$password; 
	$mail->SMTPSecure = 'tls'; 
	$mail->From = $from;
	$mail->FromName = $fromname;
	//$mail->AddAddress($to);

	/*foreach ($tomaillist as $selectedto){
		$mail->AddAddress($cc);
	}*/

    $mail->AddAddress($to);
    $mail->AddAddress($cc);

	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->WordWrap = 50; 
	$mail->IsHTML(true);
    if($mail->Send()){
	
        $submess = '<div class="alert alert-success" role="alert">';
		$submess .= 'Thankyou for Purchase.';	
		$submess .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
		
		
	} else {

		$submess = 'Error sending Message'; // ECHO Error sending message 
	}
	
}

function sendmailwith_attachment($host,$port,$username,$password,$from,$fromname,$to,$subject,$message,$attchment) {

    $mail = new PHPMailer(); 
    $mail->Host = $host;  
	$mail->Port = $port;       
	$mail->SMTPAuth = false;  
	$mail->SMTPDebug = 2;
	$mail->Username = $username; 
	$mail->Password =$password; 
	$mail->SMTPSecure = 'tls'; 
	$mail->From = $from;
	$mail->FromName = $fromname;
	$mail->AddAddress($to);
	// foreach ($tomaillist as $selectedto){
	// 	$mail->AddAddress($selectedto);
	// }
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->WordWrap = 50; 
	$mail->IsHTML(true);
	$mail->AddAttachment($attchment);
    if($mail->Send()){
	
        $submess = '<div class="alert alert-success" role="alert">';
		$submess .= 'Thankyou for Purchase.';	
		$submess .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
		
		
	} else {

		$submess = 'Error sending Message'; // ECHO Error sending message 
	}
	
}

?>