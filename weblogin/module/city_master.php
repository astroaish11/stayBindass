<?php
$state ='';
$city = '';
$latitude = '';
$longitude = '';
$eid= '';
$selected='';
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');



if(isset($_POST['submit'])){

    $state = trim($_POST['state']);
    $state = mysqli_real_escape_string($sql, $state);

    $city = trim($_POST['city']);
    $city = mysqli_real_escape_string($sql, $city);

    $latitude = trim($_POST['latitude']);
    $latitude = mysqli_real_escape_string($sql, $latitude);

    $longitude = trim($_POST['longitude']);
    $longitude = mysqli_real_escape_string($sql, $longitude);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);


   /***********************************INSERT & UPDATE*****************************************/



    if($eid == ''){

        //check city already exist
        $queryselect =mysqli_query($sql,"SELECT * from `city_master` where `city` = '$city'and deleted != 1");
        $countqueryselect = mysqli_num_rows($queryselect);


            if($countqueryselect>0){

                echo '<script type="text/javascript">alert("City Already Exist.Try Uploading another City ")</script>';
                
            }else{

                

                mysqli_query($sql, "INSERT INTO `city_master` (`state`,`city`,`latitude`,`longitude`, `created_by`, `created_date`) VALUES ('$state','$city','$latitude','$longitude','1', '$cdate')");

                echo '<script type="text/javascript">window.location.href="city_mast_1.php?s=1"</script>';
            }
    


        
    }else {

           //check city already exist
            $queryselect =mysqli_query($sql,"SELECT * from `city_master` where `city` = '$city' and `id`!= '$eid'and deleted != 1");
            $countqueryselect = mysqli_num_rows($queryselect);

        if($countqueryselect>0){

            echo '<script type="text/javascript">alert("City Already Exist.Try Uploading another City ")</script>';
            
        }else{

            
        mysqli_query($sql, "UPDATE `city_master` SET `state`='$state', `city`='$city',`latitude`='$latitude', `longitude`='$longitude', `updated_by`='1', `updated_date`='$cdate' where id = '$eid'");


        echo '<script type="text/javascript">window.location.href="city_mast_1.php?u=1"</script>';
    }

    
    }

     /***********************************Json*****************************************/

            
        $query_json = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `deleted` != '1'");
        $array_data = array();

        while($getdata_json = mysqli_fetch_object($query_json)){
            $master_data = array(
                                    'id'     => $getdata_json->id,
                                    'state'  => $getdata_json->state,
                                    'city'  => $getdata_json->city,
                                    'latitude'  => $getdata_json->latitude,
                                    'longitude'  => $getdata_json->longitude,
                                    
                                );

            $array_data[] = $master_data;
        }

        $final_data = json_encode($array_data);

        if (!file_exists('../json/city_master')) {
            mkdir('../json/city_master', 0777, true);
        }

        file_put_contents('../json/city_master/city_master.json', $final_data);

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

    $query = mysqli_query($sql, "SELECT * FROM `city_master` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);
    
    $selected = $getdata->state;
    $city = $getdata->city;
    $latitude = $getdata->latitude;
    $longitude = $getdata->longitude;
    $eid = $getdata->id;

}

   /***********************************Function***************************************/

    
function states($sql, $selected) {

    $query = mysqli_query($sql, "SELECT * FROM `awt_states` ");

    while($listdata = mysqli_fetch_object($query)) {

        echo '<option value="'.$listdata->id.'"';
        if($listdata->id == $selected) {echo 'selected="selected"';}
        echo '>'.$listdata->name.'</option>';

    }

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');


            //check if city is used in property.

            $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `city` = '$did'and deleted != 1");
            $countqueryselect = mysqli_num_rows($queryselect);

                if($countqueryselect>0){

                    echo '<script type="text/javascript">alert(" City Already Used in Property.If You Wish to delete, first delete its depenedent data")</script>';
                  


                    // $alertMessage = '<div class = "fadediv"><span class="text-danger"> City Already Used in Property.If You Wish to delete, first delete its depenedent data</span></div>';
                    
                }else{

                    
                    mysqli_query($sql, "UPDATE `city_master` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '1' where `id` = '$did'");

                    echo '<script type="text/javascript">window.location.href="city_mast_1.php?d=1"</script>';
                }
        


    /***********************************Json*****************************************/

            
    $query_json = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `deleted` != '1'");
    $array_data = array();

    while($getdata_json = mysqli_fetch_object($query_json)){
        $master_data = array(
                                'id'     => $getdata_json->id,
                                'state'  => $getdata_json->state,
                                'city'  => $getdata_json->city,
                                'latitude'  => $getdata_json->latitude,
                                'longitude'  => $getdata_json->longitude,
                                
                            );

        $array_data[] = $master_data;
    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/city_master')) {
        mkdir('../json/city_master', 0777, true);
    }

    file_put_contents('../json/city_master/city_master.json', $final_data);

}

  /***********************************Query***************************************/

  $query = mysqli_query($sql,"SELECT c.*, s.name from `city_master` as c 
                        left Join `awt_states` as s on s.id = c.state 
                        where c.deleted != 1 ");
$count = mysqli_num_rows($query);


?>