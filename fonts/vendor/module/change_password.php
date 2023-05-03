<?php 

$errorMsg = '';

$eid = '';
$title = '';
$description = '';
$oldslug = '';
$image = '';
$errorMsg = '';

if(isset($_POST['submit'])) {

    $opass = mysqli_real_escape_string($sql,$_POST['opass']);
    $npass = mysqli_real_escape_string($sql,$_POST['npass']);
    $cpass = mysqli_real_escape_string($sql,$_POST['cpass']);
    $opassNew = md5($opass);
    $npassNew = md5($npass);
    $created_date = date("Y-m-d H:i:s");

    $userid = $_SESSION[SESSION]['loginuserid'];

    $logquery = mysqli_query($sql, "SELECT * FROM `awt_vendorLogin` where `password` = '$opassNew' and `id` = '$userid'");
    $count = mysqli_num_rows($logquery);

    if($count > 0){

        if($npass == $cpass){
                
            mysqli_query( $sql, "UPDATE `awt_vendorLogin` SET `password`='$npassNew', `updated_by`='1', `updated_date`='$created_date' WHERE `id` = '$userid'");
            
    
            echo '<script type="text/javascript">window.location.href="changepassword.php?u=1";</script>';

        }else{

            $roleerr = "New password & old password does not match";
            $errorMsg = $roleerr;

        }

    }else{

        $roleerr = "Old password does not match";
        $errorMsg = $roleerr;

    }

}   

?>