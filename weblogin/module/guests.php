<?php
$title = '';
$guest = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $guest = trim($_POST['guest']);
    $guest = mysqli_real_escape_string($sql, $guest);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $userid = $_SESSION[SESSION]['loginuserid'];


   /***********************************INSERT & UPDATE*****************************************/

    if($eid == ''){

        mysqli_query($sql, "INSERT INTO `guest_master` (`guest`, `created_by`, `created_date`) VALUES ('$guest', '$userid', '$cdate')");
       
        echo '<script type="text/javascript">window.location.href="guest.php?s=1"</script>';
        
    }else {
        mysqli_query($sql, "UPDATE `guest_master` SET `guest`='$guest', `updated_by`='$userid', `updated_date`='$cdate' where id = '$eid'");


            echo '<script type="text/javascript">window.location.href="guest.php?u=1"</script>';
    }

 /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `guest_master` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'guest'  => $getdata_json->guest,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/guest')) {
     mkdir('../json/guest', 0777, true);
 }

 file_put_contents('../json/guest/guest.json', $final_data);



}

    if(isset($_GET['s'])){

        $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';
    }

    if(isset($_GET['u'])){

        $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
    }



   /***********************************Edit***************************************/


if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);

    $query = mysqli_query($sql, "SELECT * FROM `guest_master` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $guest = $getdata->guest;
    $eid = $getdata->id;

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `guest_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '$eid' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="guest.php?d=1"</script>';

     /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `guest_master` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'guest'  => $getdata_json->guest,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/guest')) {
     mkdir('../json/guest', 0777, true);
 }

 file_put_contents('../json/guest/guest.json', $final_data);

}

   /***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `guest_master`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>