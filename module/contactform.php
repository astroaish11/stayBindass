<?php
$name = '';
$subject = '';
$message = '';
$email = '';

$eid = '';
$alertMessage = '';

$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])){

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);

$name = trim($_POST['name']);
$name = mysqli_real_escape_string($sql,$name);

$email =  trim($_POST['email']);
$email = mysqli_real_escape_string($sql,$email);

$subject =  trim($_POST['subject']);
$subject = mysqli_real_escape_string($sql,$subject);

$message = trim($_POST['message']);
$message = mysqli_real_escape_string($sql,$message);


/***************************  Insert ****************************/    

if($eid == ''){
    mysqli_query($sql,"INSERT INTO `awt_contactForm` (`name`,`email`,`subject`,`message`,`created_date`,`created_by`) VALUES ('$name','$email','$subject','$message','$cdate','1')");
    
    echo '<script type="text/javascript">window.location.href="contact.php?s=1"</script>';
    } 
}

if(isset($_GET['s'])){
	$alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Message Sent.</div>';
}


?>