<?php 
$username = '';
$errorMsg = '';
$alertMessage = '';
$generatedotp = '';

if(isset($_POST['passwordsubmit'])) {
    
     $username = trim($_POST['username']);
     $username = mysqli_real_escape_string($sql,$username);

     $query= "SELECT * FROM `awt_registerUser` where `email` = '$username'";

     //echo "SELECT * FROM `awt_registerUser` where `email` = '$username'";
      $result1 = mysqli_query($sql, $query);

    $getdata = mysqli_fetch_object($result1);
    $email = $getdata->email;
    $fullname = $getdata->fullname;
      
    $row_count1 = mysqli_num_rows($result1);

    if($row_count1 == 1)
    {
        $_SESSION['emailid_passwordreset'] = $email;       
        
        //echo "generated OTP = ".$generatedotp;
        $generatedotp = mt_rand(1111,9999);

        //mail send for otp
        ini_set("sendmail_from", "support@staybindass.com");  
        $to = $email;//change receiver address  
        $subject = "StayBindass - Password Reset Code";  
        // $message = "
        // <html>
        //  <head>
        //  <title>StayBindass - Password Reset Code</title>
        //  </head>
        //  <body>
        //  <p>Your password reset code is ".$generatedotp."</p>
        //  </body>
        // </html>";  
       // $header = "From:info@staybindass.com \r\n";  

       $message = '<div style="padding: 50px 0px;background: #f5f5f5;width: 100%;">
     <div style="border: 0px solid #70d8ed; padding: 20px;background: #fff; width: 700px; margin: 0 auto;">
         <div style="padding-bottom:20px;margin-bottom:20px;border-bottom:1px solid #03bbe1;">
             <div style="text-align:center;">
                 <img src="'.LOGO.'" style="width:150px; padding:10px 0px;" />
                 <!--<p style="font-size: 20px; font-weight: bold;">Stay Bindass</p>-->
             </div>
         </div>			  
         <div>
             <p style="margin:0px 0px 10px 0px;">
             <p>Dear '.$fullname.'</p>
             <p>As you requested, your OTP for password reset :'.$generatedotp.'</p>
             <p>Thank you</p>
             <p>Team Stay Bindass</p>
         </div>
     </div>
 </div>';

        $header = "From:info@staybindass.com \r\n";  
        $header .= "MIME-Version: 1.0 \r\n";  
        $header .= "Content-type: text/html;charset=UTF-8 \r\n";  
  
        if(mail ($to,$subject,$message,$header))
        {
            mysqli_query($sql,"UPDATE `awt_registerUser` SET `otp`='$generatedotp' WHERE `email`='$email'");
        }  

         echo '<script>window.location.href="generate-otp.php";</script>';
    }
    else
    {
        $alertMessage = '<div class="alert alert-success mt-3 fadediv" role="alert">Incorrect Email Address</div>';
    }   
    
}


?>