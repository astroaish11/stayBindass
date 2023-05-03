<?php
$otp = '';
$email1 = '';
$generatedotp1 = '';
$email1 = $_SESSION['emailid_passwordreset'];


if (isset($_POST['otpsubmit'])) {
    $otp = trim($_POST['otp']);
    $otp = mysqli_real_escape_string($sql, $otp);

   //  $query_log1 = "SELECT * FROM `awt_registerUser` where `email` = '$email1'";
//
  //    $result2 = mysqli_query($sql, $query_log1);

  //    $getdata1 = mysqli_fetch_object($result2);


    $query_log1 = "SELECT * FROM `awt_registerUser` where `email` = '$email1'";
    $result2 = mysqli_query($sql, $query_log1);
    $getdata1 = mysqli_fetch_object($result2);
    $db_otp1 = $getdata1->otp;

   // echo "OTP ==" . $db_otp1;
    //echo 'email otp = ' . $otp;

    if ($db_otp1 == $otp) {
        echo '<script>window.location.href="new-password.php";</script>';
    } else {
       // $alertMessage = '<div class="alert alert-success mt-3 fadediv" role="alert">Incorrect OTP</div>';
           echo '<script>alert("Incorrect OTP");</script>';
    }

}

if (isset($_POST['resendotp'])) {
    $generatedotp1 = mt_rand(1111, 9999);
    
//echo "UPDATE `awt_registerUser` SET `otp`='$generatedotp1' WHERE `email`='$email1'";
    //mail send for otp
    ini_set("sendmail_from", "vkadge6@gmail.com");
    $to = $email1; //change receiver address  
    $subject = "StayBindass - Password Reset Code";
    $message = "
        <html>
         <head>
         <title>StayBindass - Password Reset Code</title>
         </head>
         <body>
         <p>Your password reset code is " . $generatedotp1 . "</p>
         </body>
        </html>";
    // $header = "From:info@staybindass.com \r\n";  

    $header = "From:info@staybindass.com \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-type: text/html;charset=UTF-8 \r\n";

    //$result = mail($to, $subject, $message, $header);

    if (mail($to, $subject, $message, $header)) {
        mysqli_query($sql, "UPDATE `awt_registerUser` SET `otp`='$generatedotp1' WHERE `email`='$email1'");
        echo '<script>alert("OTP Sent On Your Registerd Email Id");</script>';
    } //else {
        // $alertMessage = '<div class="alert alert-success mt-3 fadediv" role="alert">Incorrect OTP</div>';
    //    echo '<script>alert("Incorrect OTP");</script>';
  //  }

}



?>