<?php 
$otp = '';
$email = $_SESSION['emailid'];
//validate OTP

if(isset($_POST['otpsubmit']))
{
    $otp = trim($_POST['otp']);
    $otp = mysqli_real_escape_string($sql,$otp);

    $query_log = "SELECT * FROM `awt_login` where `email` = '$email'";
    
    $result = mysqli_query($sql, $query_log);

    $getdata = mysqli_fetch_object($result);
    $db_otp = $getdata->otp;
   
    if($db_otp == $otp){
        echo '<script>window.location.href="forgetpwd_reset.php";</script>';
    }
    else{
        $alertMessage = '<div class="alert alert-success mt-3 fadediv" role="alert">Incorrect OTP</div>';
    }

}

if(isset($_POST['resendotp'])){

    $generatedotp1 = mt_rand(1111,9999);
    mysqli_query($sql,"UPDATE `awt_login` SET `otp`='$generatedotp1' WHERE `email`='$email'");

    //mail send for otp
    $to = $email;
    $subject = "StayBindass - Password Reset Code";

    $message = "
    <html>
    <head>
    <title>StayBindass - Password Reset Code</title>
    </head>
    <body>
    <p>Your password reset code is ".$generatedotp1."</p>
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <vkadge6@example.com>' . "\r\n";
    mail($to,$subject,$message,$headers);

}



?>