<?php
$state = '';
$city = '';
$latitude = '';
$longitude = '';
$alertMessage= '';
$eid = '';
$vid = $_GET['vid'];

$cdate = date('Y-m-d H:i:s');

if(isset($_GET['vid'])) {

    $getpropertyname = mysqli_query($sql, "SELECT `title` from `addproperty` where id = '$vid'");    
    $propertyname = mysqli_fetch_object($getpropertyname);
    $property_name = $propertyname->title;

    }


    if(isset($_POST['submit'])) {

            $state = trim($_POST['state']);
            $state = mysqli_real_escape_string($sql,$state);

            $city = trim($_POST['city']);
            $city = mysqli_real_escape_string($sql,$city);

            $latitude = trim($_POST['latitude']);
            $latitude = mysqli_real_escape_string($sql,$latitude);

            $longitude = trim($_POST['longitude']);
            $longitude = mysqli_real_escape_string($sql,$longitude);

            $eid = trim($_POST['eid']);
            $eid = mysqli_real_escape_string($sql, $eid);

      //      $vid = trim($_POST['vid']);
      //      $vid = mysqli_real_escape_string($sql, $vid);




    /*************************Update********************************/

        mysqli_query($sql,"UPDATE `awt_location` SET   `state`='$state',`city`='$city',`latitude`='$latitude',`longitude`='$longitude',`updated_by`='1',`updated_date`='$cdate' WHERE `v_id`='$vid'");

        echo '<script type="text/javascript">window.location.href="location.php?vid='.$vid.'&u=1"</script>';
    

      /*****************************Json************************8***/

    $query_json = mysqli_query($sql, "SELECT * FROM `awt_location` WHERE `deleted` != '1'");

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

    if (!file_exists('../json/location')) {
        mkdir('../json/location', 0777, true);
    }

    file_put_contents('../json/location/location.json', $final_data);
    

}


if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}


  /******************************Functions**************************/

function states($sql, $state) {

    $query2 = mysqli_query($sql, "SELECT * FROM `awt_states` ");

    while($listdata = mysqli_fetch_object($query2)) {

        echo '<option value="'.$listdata->id.'"';
        if($listdata->id == $state) {echo ' selected="selected" ';}
        echo '>'.$listdata->name.'</option>';

    }

}

function city($sql, $state, $city) {

    $query3 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `deleted` != 1");

    while($listdata = mysqli_fetch_object($query3)) {

        echo '<option value="'.$listdata->id.'"';
        if($listdata->id == $city) {echo ' selected="selected" ';}
        echo '>'.$listdata->city.'</option>';

    }

}


  /*****************************Query*********************/

   
$query = mysqli_query($sql, "SELECT * FROM `awt_location` WHERE deleted != '1'");
$count = mysqli_num_rows($query);

$getdata = mysqli_fetch_object($query);

$vid = $getdata->v_id;
$state = $getdata->state;
$city = $getdata->city;
$latitude = $getdata->latitude;
$longitude = $getdata->longitude;


?>