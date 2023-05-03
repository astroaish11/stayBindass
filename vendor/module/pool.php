<?php
$title = '';
$pool = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $pool = trim($_POST['pool']);
    $pool = mysqli_real_escape_string($sql, $pool);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $userid = $_SESSION[SESSION]['loginuserid'];


   /***********************************INSERT & UPDATE*****************************************/

    if($eid == ''){

        mysqli_query($sql, "INSERT INTO `pool_master` (`pool`, `created_by`, `created_date`) VALUES ('$pool', '$userid', '$cdate')");
       
        echo '<script type="text/javascript">window.location.href="pool_master.php?s=1"</script>';
        
    }else {
        mysqli_query($sql, "UPDATE `pool_master` SET `pool`='$pool', `updated_by`='$userid', `updated_date`='$cdate' where id = '$eid'");


            echo '<script type="text/javascript">window.location.href="pool_master.php?u=1"</script>';
    }

 /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `pool_master` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'pool'  => $getdata_json->pool,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/pool_master')) {
     mkdir('../json/pool_master', 0777, true);
 }

 file_put_contents('../json/pool_master/pool_master.json', $final_data);



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

    $query = mysqli_query($sql, "SELECT * FROM `pool_master` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $pool = $getdata->pool;
    $eid = $getdata->id;

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `pool_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '$eid' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="pool_master.php?d=1"</script>';

}

   /***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `pool_master`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>