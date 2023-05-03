<?php
$title = '';
$night = '';
$eid= '';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $night = trim($_POST['night']);
    $night = mysqli_real_escape_string($sql, $night);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    // $userid = $_SESSION[SESSION]['loginuserid'];


   /***********************************INSERT & UPDATE*****************************************/


    if($eid == ''){
        //check night already exist
$queryselect =mysqli_query($sql,"SELECT * from `night_master` where `night` = '$night' and deleted != 1");
$countqueryselect = mysqli_num_rows($queryselect);



                if($countqueryselect>0){

                    echo '<script type="text/javascript">alert("Night Already Exist")</script>';
                    
                }else{

                 
                mysqli_query($sql, "INSERT INTO `night_master` (`night`, `created_by`, `created_date`) VALUES ('$night', '1', '$cdate')");
            
                echo '<script type="text/javascript">window.location.href="night_master.php?s=1"</script>';

                    
                }
       

        
    }else {
        //check night already exist
$queryselect =mysqli_query($sql,"SELECT * from `night_master` where `night` = '$night' and `id`!= '$eid' and deleted != 1");
$countqueryselect = mysqli_num_rows($queryselect);


        

        if($countqueryselect>0){

            echo '<script type="text/javascript">alert("Night Already Exist")</script>';
            
        }else{


        mysqli_query($sql, "UPDATE `night_master` SET `night`='$night', `updated_by`='1', `updated_date`='$cdate' where id = '$eid'");


            echo '<script type="text/javascript">window.location.href="night_master.php?u=1"</script>';
    }

}

 /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `night_master` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'night'  => $getdata_json->night,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/night_master')) {
     mkdir('../json/night_master', 0777, true);
 }

 file_put_contents('../json/night_master/night_master.json', $final_data);



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

    $query = mysqli_query($sql, "SELECT * FROM `night_master` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $night = $getdata->night;
    $eid = $getdata->id;

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

        
            //check if night is used in property.

            $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `nights` = '$did' and deleted != 1");
            $countqueryselect = mysqli_num_rows($queryselect);

                if($countqueryselect>0){

                    echo '<script type="text/javascript">alert("Data is already Used in Property.<br> If You Wish to delete, first delete its depenedent data")</script>';
                    
                }else{

                    
                    mysqli_query($sql, "UPDATE `night_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '1' where `id` = '$did'");

                    echo '<script type="text/javascript">window.location.href="night_master.php?d=1"</script>';
                }
        





     /***********************************Json*****************************************/

    
 $query_json = mysqli_query($sql, "SELECT * FROM `night_master` WHERE `deleted` != '1'");

 $array_data = array();

 while($getdata_json = mysqli_fetch_object($query_json)){
     $master_data = array(
                             'id'     => $getdata_json->id,
                             'night'  => $getdata_json->night,
                             
                          );

     $array_data[] = $master_data;
 }

 $final_data = json_encode($array_data);

 if (!file_exists('../json/night_master')) {
     mkdir('../json/night_master', 0777, true);
 }

 file_put_contents('../json/night_master/night_master.json', $final_data);

}

   /***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `night_master`  where deleted != 1;");

$count = mysqli_num_rows($query);


?>