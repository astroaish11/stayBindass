<?php 
$username = '';
$errorMsg = '';
$alertMessage = '';

if(isset($_POST['passwordsubmit'])) {
    
    $username = trim($_POST['username']);
    $username = mysqli_real_escape_string($sql,$username);

    $query_log = "SELECT * FROM `awt_login` where `email` = '$username'";

    $result = mysqli_query($sql, $query_log);

    $getdata = mysqli_fetch_object($result);
    $email = $getdata->email;
      
    $row_count = mysqli_num_rows($result);

    if($row_count == 1)
    {
        $_SESSION['emailid'] = $email;

        $generatedotp = mt_rand(1111,9999);
        mysqli_query($sql,"UPDATE `awt_login` SET `otp`='$generatedotp' WHERE `email`='$email'");

        //mail send for otp
        $to = $email;
        $subject = "StayBindass - Password Reset Code";

        $message = "
        <html>
        <head>
        <title>StayBindass - Password Reset Code</title>
        </head>
        <body>
        <p>Your password reset code is ".$generatedotp."</p>
        </body>
        </html>
        ";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <vkadge6@example.com>' . "\r\n";
        mail($to,$subject,$message,$headers);

        echo '<script>window.location.href="generate_OTP.php";</script>';
    }
    else
    {
        $alertMessage = '<div class="alert alert-success mt-3 fadediv" role="alert">Incorrect Email Address</div>';
    }   
    
}


?>