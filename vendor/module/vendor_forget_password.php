<?php 
$username = '';
$errorMsg = '';
$alertMessage = '';
$vendor_generatedotp = '';
if(isset($_POST['passwordsubmit'])) {
    
    $username = trim($_POST['username']);
    $username = mysqli_real_escape_string($sql,$username);

    $query_log = "SELECT * FROM `vendor_master` where `email` = '$username'";

    $result = mysqli_query($sql, $query_log);

    $getdata = mysqli_fetch_object($result);
    $email_id = $getdata->email;
      
    $row_count = mysqli_num_rows($result);

    if($row_count == 1)
    {
        $_SESSION['vendor_emailid'] = $email_id;

        $vendor_generatedotp = mt_rand(1111,9999);

        //echo $_SESSION['vendor_emailid'];
        //mail send for otp
        $to = $email_id;
        $subject = "StayBindass - Password Reset Code";
        $message = "
        <html>
        <head>
        <title>StayBindass - Password Reset Code</title>
        </head>
        <body>
        <p>Your password reset code is ".$vendor_generatedotp."</p>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <vkadge6@example.com>' . "\r\n";
        if(mail($to,$subject,$message,$headers))
        {
            mysqli_query($sql,"UPDATE `vendor_master` SET `otp`='$vendor_generatedotp' WHERE `email`='$email_id'");
        }
        

        
        echo '<script>window.location.href="vendor_generate_OTP.php";</script>';
    }
    else
    {
        $alertMessage = '<div class="alert alert-success mt-3 fadediv" role="alert">Incorrect Email Address</div>';
    }   
    
}


?>