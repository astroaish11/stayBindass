<?php
$name = '';
$contact = '';
$address = '';
$email = '';
$city = '';
$state = '';
$pin = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $name = mysqli_real_escape_string($sql, $name);

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

    $userid = $_SESSION[SESSION]['loginuserid'];



   /***********************************INSERT & UPDATE*****************************************/

    if($eid == ''){

        mysqli_query($sql, "INSERT INTO `vendor_master` (`name`,`contact`,`email`,`address`,`city`,`state`,`pin`, `created_by`, `created_date`) VALUES ('$name','$contact','$email','$address','$city','$state',$pin,'$userid', '$cdate')");
       
        echo '<script type="text/javascript">window.location.href="vendor_mast.php?s=1"</script>';
        
    }else {
        mysqli_query($sql, "UPDATE `vendor_master` SET `name`='$name', `contact`='$contact', `email`='$email', `address`='$address', `city`='$city', `state`='$state', `pin`='$pin', `updated_by`='$userid', `updated_date`='$cdate' where id = '$eid'");


            echo '<script type="text/javascript">window.location.href="vendor_mast.php?u=1"</script>';
    }

    /***********************************Json*****************************************/

    
    $query_json = mysqli_query($sql, "SELECT * FROM `vendor_master` WHERE `deleted` != '1'");

    $array_data = array();

    while($getdata_json = mysqli_fetch_object($query_json)){
        $master_data = array(
                                'id'     => $getdata_json->id,
                                'name'  => $getdata_json->name,
                                'contact'  => $getdata_json->contact,
                                'email' => $getdata_json->email,
                                'address' => $getdata_json->address,
                                'city' => $getdata_json->city,
                                'state' => $getdata_json->state,
                                'pin' => $getdata_json->pin
                             );

        $array_data[] = $master_data;
    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/vendor_master')) {
        mkdir('../json/vendor_master', 0777, true);
    }

    file_put_contents('../json/vendor_master/vendor_master.json', $final_data);


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

    mysqli_query($sql, "UPDATE `vendor_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '$eid' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="vendor_listing.php?d=1"</script>';

}

   /***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `vendor_master`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>