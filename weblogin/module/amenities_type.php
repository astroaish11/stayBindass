<?php
$title = '';
$desc = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql, $title);

    $desc = trim($_POST['desc']);
    $desc = mysqli_real_escape_string($sql, $desc);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $userid = $_SESSION[SESSION]['loginuserid'];


   /***********************************INSERT & UPDATE*****************************************/

    if($eid == ''){

        mysqli_query($sql, "INSERT INTO `amenity_type` (`title`,`desc`, `created_by`, `created_date`) VALUES ('$room', '$userid', '$cdate')");

                 echo '<script type="text/javascript">window.location.href="add_amenities_type.php?s=1"</script>';
        
    }else {
        mysqli_query($sql, "UPDATE `amenity_type` SET `title`='$title',`desc`='$desc', `updated_by`='$userid', `updated_date`='$cdate' where id = '$eid'");


            echo '<script type="text/javascript">window.location.href="add_amenities_type.php?u=1"</script>';
    }

     /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `amenity_type` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'title'  => $getdata_json->title,
                             'desc'  => $getdata_json->desc,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/amenity_type')) {
     mkdir('../json/amenity_type', 0777, true);
 }

 file_put_contents('../json/amenity_type/amenity_type.json', $final_data);

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

    $query = mysqli_query($sql, "SELECT * FROM `amenity_type` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $title = $getdata->title;
    $desc = $getdata->desc;
    $eid = $getdata->id;

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `amenity_type` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '$eid' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="add_amenities_type.php?d=1"</script>';

        /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `amenity_type` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'title'  => $getdata_json->title,
                             'desc'  => $getdata_json->desc,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/amenity_type')) {
     mkdir('../json/amenity_type', 0777, true);
 }

 file_put_contents('../json/amenity_type/amenity_type.json', $final_data);

}

   /***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `amenity_type`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>