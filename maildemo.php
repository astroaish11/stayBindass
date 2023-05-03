<?php  
   ini_set("sendmail_from", "vkadge6@gmail.com");  
   $to = "aishp0403@gmail.com";//change receiver address  
   $subject = "This is subject";  
   $message = "This is simple text message.";  
   $header = "From:sonoojaiswal@javatpoint.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
?>  