<?php
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$status = 1;
$password = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $first_name = trim($_POST['first_name']);
    $first_name = mysqli_real_escape_string($sql, $first_name);
    
    $last_name = trim($_POST['last_name']);
    $last_name = mysqli_real_escape_string($sql, $last_name);

    $email = trim($_POST['email']);
    $email = mysqli_real_escape_string($sql, $email);

    $phone = trim($_POST['phone']);
    $phone = mysqli_real_escape_string($sql, $phone);

    $status = trim($_POST['status']);
    $status = mysqli_real_escape_string($sql, $status);

    $password = trim($_POST['password']);
    $password = mysqli_real_escape_string($sql, $password);
    $password = md5($password);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);


    if($eid == ''){

        mysqli_query($sql, "INSERT INTO `awt_adduser` (`firstname`,`lastname`,`email`,`phone`,`password`,`status`,`created_by`, `created_date`) VALUES ('$first_name','$last_name','$email','$phone','$password','$status', '1', '$cdate')");

        echo '<script type="text/javascript">window.location.href="manage_user_addCustomer.php?s=1"</script>';
      //  echo '<script type="text/javascript">window.location.href="manage_users.php"</script>';

        
    }else {
        mysqli_query($sql, "UPDATE `awt_adduser` SET `firstname`='$first_name',`lastname`='$last_name',`email`='$email',`phone`='$phone',`password`='$password',`status`='$status',`updated_by`='1', `updated_date`='$cdate' where id = '$eid'");

        echo '<script type="text/javascript">window.location.href="manage_user_addCustomer.php?u=1"</script>';

    }

}

if(isset($_GET['s'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';

}

if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}

if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);

    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_adduser` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($selectdata);
 
    $first_name = $getdata->firstname;
    $last_name = $getdata->lastname;
    $email = $getdata->email;
    $phone = $getdata->phone;
    $password = $getdata->password;
    $status = $getdata->status;
    $created_date = $getdata->created_date;
    $eid = $getdata->id;

}

if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `awt_adduser` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '$eid' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="manage_users.php?d=1"</script>';

}


     $query = mysqli_query($sql, "SELECT * FROM `awt_adduser` where deleted != 1;");

     $count = mysqli_num_rows($query);

?>