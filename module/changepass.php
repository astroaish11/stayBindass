<?php 

$errorMsg = '';

$eid = '';
$title = '';
$allok = 0;
$userID = $_SESSION[SESSION]['loginuserid'];

if(isset($_POST['submit'])) {

    $opass = mysqli_real_escape_string($sql,$_POST['opass']);
    $npass = mysqli_real_escape_string($sql,$_POST['npass']);
    $cpass = mysqli_real_escape_string($sql,$_POST['cpass']);
    $opassNew = md5($opass);
    $npassNew = md5($npass);
    $created_date = date("Y-m-d H:i:s");

   // echo $opassNew;

    // $userid = $_SESSION[SESSION]['loginuserid'];

      //===password====//
  if ($npass != '') {
  
    if (strlen($npass) < 6) {
      $errorMsg = "Min 6 Charcter required in password";
	  // $reg=1;
    }else{
	
	  if (strlen($npass) > 12) {
		  $errorMsg = "Max 12 Charcter required in password";
		  // $reg=1;
		}
	}
  }

    $logquery = mysqli_query($sql, "SELECT * FROM `awt_registerUser` where `password` = '$opassNew' and `id` = '$userID'");

    $count = mysqli_num_rows($logquery);

   // echo "SELECT * FROM `awt_registerUser` where `password` = '$opassNew' and `id` = '$userID'";

    if($count == 0)
    {
        $roleerr = "Old password does not match";
        $errorMsg = $roleerr;
    }
    else
    {
        if($npass == $cpass){
                
            mysqli_query( $sql, "UPDATE `awt_registerUser` SET `password`='$npassNew', `updated_by`='1', `updated_date`='$created_date' WHERE `id` = '$userID'");
            
          //  $allok = 1;
            echo '<script type="text/javascript">window.location.href="password-change.php?u=1&a=1";</script>';


        }else{

            $roleerr = "New password & Confirm password does not match";
            $errorMsg = $roleerr;

        }

    }
    
}   

if(isset($_GET['u'])){
    if(isset($_GET['a'])){$allok=$_GET['a'];}
    if($allok == 1)
    {
        $errorMsg = '<div class="alert alert-success mt-2 fadediv" role="alert">Password updated Successfully</div>';
    }
   // $errorMsg = '<div class="alert alert-success mt-2 fadediv" role="alert">Password updated Successfully</div>';

}


?>