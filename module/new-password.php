<?php 

$newpassword = '';
$confirmpassword = '';

 if(isset($_POST['submitpwd'])) {

    
     $newpassword = mysqli_real_escape_string($sql,$_POST['newpassword']);
     $confirmpassword = mysqli_real_escape_string($sql,$_POST['confirmpassword']);

     $cpw = md5($confirmpassword);
     $created_date = date("Y-m-d H:i:s");

    // $email = $_SESSION['emailid1'];
    $email = $_SESSION['emailid_passwordreset'];

     $logquery = mysqli_query($sql, "UPDATE `awt_registerUser` SET `password`='$cpw', `updated_by`='1', `updated_date`='$created_date' WHERE `email` = '$email'");

     echo "UPDATE `awt_registerUser` SET `password`='$cpw', `updated_by`='1', `updated_date`='$created_date' WHERE `email` = '$email'";

    // echo "<script>alert('password has been reset successfully');window.location.href='index.php';</script>";

 }   

?>