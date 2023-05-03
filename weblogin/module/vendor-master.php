<?php
$name = '';
$username = '';
$contact = '';
$address = '';
$email = '';
$city = '';
$state = '';
$image = '';
$pin = '';
$eid= '';
$alertMessage= '';
$npass = '';
//$cpass = '';
$cdate = date('Y-m-d H:i:s');

//search filter
if(isset($_GET['search_vendorname'])){$search_vendorname=$_GET['search_vendorname'];}
if(isset($_GET['search_email'])){$search_email=$_GET['search_email'];}
if(isset($_GET['search_mobile'])){$search_mobile=$_GET['search_mobile'];}
if(isset($_GET['state'])){$state=$_GET['state'];}
if(isset($_GET['city'])){$city=$_GET['city'];}

if(isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $name = mysqli_real_escape_string($sql, $name);

    $username = trim($_POST['username']);
    $username = mysqli_real_escape_string($sql, $username);

    $contact = trim($_POST['contact']);
    $contact = mysqli_real_escape_string($sql, $contact);

    $email = trim($_POST['email']);
    $email = mysqli_real_escape_string($sql, $email);

    $address = trim($_POST['address']);
    $address = mysqli_real_escape_string($sql, $address);

    $city = trim($_POST['city']);
    $city = mysqli_real_escape_string($sql, $city);

    $state = trim($_POST['state']);
    $state = mysqli_real_escape_string($sql, $state);
    
    $pin = trim($_POST['pin']);
    $pin = mysqli_real_escape_string($sql, $pin);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    // $userid = $_SESSION[SESSION]['loginuserid'];

    $npass = mysqli_real_escape_string($sql,$_POST['npass']);
   // $cpass = mysqli_real_escape_string($sql,$_POST['cpass']);

   /***********************************INSERT & UPDATE*****************************************/
   

        //check username already exist
        $queryselect =mysqli_query($sql,"SELECT * from `vendor_master` where `username` = '$username'and `id`!='$eid' and deleted != 1");
        $countqueryselect = mysqli_num_rows($queryselect);

    if($eid == ''){

                if( $countqueryselect > 0 ){

                    echo '<script type="text/javascript">alert("Username Already Exist.Please Choose another Username")</script>';
                }else{

                        // if($npass != $cpass){
                //     $roleerr = "New password & old password does not match";
                //     $alertMessage = $roleerr;
                // }
                // else
                // {
                    // $opassNew = md5($opass);

                
                    $npassNew = md5($npass);
                mysqli_query($sql, "INSERT INTO `vendor_master` (`name`,`username`,`password`,`contact`,`email`,`address`,`city`,`state`,`pin`, `created_by`, `created_date`) VALUES ('$name','$username','$npassNew','$contact','$email','$address','$city','$state','$pin','1', '$cdate')");
                echo '<script type="text/javascript">window.location.href="vendor_listing.php?s=1"</script>';
            //  }

                }

        
    }else {

        if( $countqueryselect > 0 ){

            echo '<script type="text/javascript">alert("Username Already Exist.Please Choose another Username")</script>';
        }else{


                if($npass == '')
                {
                    
                    mysqli_query($sql, "UPDATE `vendor_master` SET `name`='$name',`username`='$username', `contact`='$contact', `email`='$email', `address`='$address', `city`='$city', `state`='$state', `pin`='$pin', `updated_by`='1', `updated_date`='$cdate' where id = '$eid' and `deleted` != '1'");
                }
                else
                {
                    $npassNew = md5($npass);
                    mysqli_query($sql, "UPDATE `vendor_master` SET `name`='$name',`username`='$username', `password`='$npassNew',`contact`='$contact', `email`='$email', `address`='$address', `city`='$city', `state`='$state', `pin`='$pin', `updated_by`='1', `updated_date`='$cdate' where id = '$eid' and `deleted` != '1'");
                }



                    echo '<script type="text/javascript">window.location.href="vendor_listing.php?u=1"</script>';
          }
    }



}


    if(isset($_GET['s'])){

        $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';
    }

    if(isset($_GET['u'])){

        $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
    }



    
function states($sql, $selected) {

    $query2 = mysqli_query($sql, "SELECT * FROM `awt_states` ");

    while($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="'.$listdata->id.'"';
        if($listdata->id == $selected) {echo ' selected="selected" ';}
        echo '>'.$listdata->name.'</option>';

    }

}


   /***********************************Edit***************************************/


if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);

    $query = mysqli_query($sql, "SELECT * FROM `vendor_master` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $name = $getdata->name;
    $username = $getdata->username;
    $npass = $getdata->npass;
    $contact = $getdata->contact;
    $email = $getdata->email;
    $address  = $getdata->address;
    $city = $getdata->city;
    $state = $getdata->state;
    $pin = $getdata->pin;
    $eid = $getdata->id;

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `vendor_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '1' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="vendor_listing.php?d=1"</script>';


}


?>