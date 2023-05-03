<?php 
$password = '';
$username = '';
$errorMsg = '';

 if(isset($_SESSION[SESSION])) {
     echo '<script>window.location.href="'.MAINLINK.'manage_listing_1.php";</script>';
 }

if(isset($_POST['loginsubmit'])) {
    
    $username = mysqli_real_escape_string($sql, $_POST['username']);
    $password = mysqli_real_escape_string($sql, $_POST['password']);
    $passwordMd5 = md5($password);
   

    $logquery = mysqli_query($sql, "SELECT * FROM `awt_login` where `email` = '$username' and `password` = '$passwordMd5' and `deleted` = 0");


    if(mysqli_num_rows($logquery) == 1) {
        
        $getuserinfo = mysqli_fetch_object($logquery);
        
        $userid = $getuserinfo->id;
        $name = $getuserinfo->name;
        
        $userdt = array('loginuserid' =>$userid,);

          
        
        if(!isset($_SESSION[SESSION])) {
            $_SESSION[SESSION] = array();
            $_SESSION[SESSION] = $userdt;
        

        }
        echo '<script>window.location.href="'.MAINLINK.'manage_listing_1.php";</script>';
        
        
    } else {
        $errorMsg = 'Username / Password not Match';
    }
    
    
}


?>