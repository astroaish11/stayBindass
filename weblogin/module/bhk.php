<?php
$bhk = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $bhk = trim($_POST['bhk']);
    $bhk = mysqli_real_escape_string($sql, $bhk);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    // $userid = $_SESSION[SESSION]['loginuserid'];


   /***********************************INSERT & UPDATE*****************************************/

    if($eid == ''){

            //check bhk already exist
            $queryselect =mysqli_query($sql,"SELECT * from `bhk_master` where `bhk` = '$bhk'");
            $countqueryselect = mysqli_num_rows($queryselect);

                if($countqueryselect>0){

                    $alertMessage = '<div class = "fadediv"><span class="text-danger">Already Exist</span></div>';
                   
                }else{

                   

                    mysqli_query($sql, "INSERT INTO `bhk_master` (`bhk`, `created_by`, `created_date`) VALUES ('$bhk', '1', '$cdate')");

                    echo '<script type="text/javascript">window.location.href="bhk_master.php?s=1"</script>';
                }

      
    }else {
        mysqli_query($sql, "UPDATE `bhk_master` SET `bhk`='$bhk', `updated_by`='1', `updated_date`='$cdate' where id = '$eid'");


        echo '<script type="text/javascript">window.location.href="bhk_master.php?u=1"</script>';
    }

    
 /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `bhk_master` WHERE `deleted` != '1'");
 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'bhk'  => $getdata_json->bhk,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/bhk_master')) {
     mkdir('../json/bhk_master', 0777, true);
 }

 file_put_contents('../json/bhk_master/bhk_master.json', $final_data);

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

    $query = mysqli_query($sql, "SELECT * FROM `bhk_master` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $bhk = $getdata->bhk;
    $eid = $getdata->id;

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `bhk_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '1' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="bhk_master.php?d=1"</script>';

}

   /***********************************Query***************************************/


$query = mysqli_query($sql, "SELECT * FROM `bhk_master`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>