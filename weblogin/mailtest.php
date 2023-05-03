<?php

			//Mail to vendor about disable property

			ini_set("sendmail_from", "vkadge6@gmail.com");
			$to = "aishp0403@gmail.com"; //change receiver address  
			$subject = "Villa Status - Disable";
			$message = "
				<html>
				<head>
				<title>Villa Status - Disable</title>
				</head>
				<body>
				<p>Your Villa is currently disable by StayBindass.</p>
				</body>
				</html>";
			// $header = "From:info@staybindass.com \r\n";  
		
			$header = "From:info@staybindass.com \r\n";
			$header .= "MIME-Version: 1.0 \r\n";
			$header .= "Content-type: text/html;charset=UTF-8 \r\n";
		
			$result = mail($to, $subject, $message, $header);

            echo "Good baby!!";

?>