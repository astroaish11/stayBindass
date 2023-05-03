<?php
include('config.php');

$cdate = date('d-m-Y');



/*Room Disable Status*/

if (isset($_POST['roomstatusid'])) {

	$roomid = $_POST['roomstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `room_master` WHERE `id`='$roomid' and deleted !=1");
	$numroom = mysqli_num_rows($query_statusid);

	if ($numroom == 1) {
		$getroom = mysqli_fetch_object($query_statusid);
		$room_status = $getroom->room_status;

        //check if room is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `r_type` = '$roomid'and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($room_status == 1) {
                        mysqli_query($sql, "UPDATE `room_master` SET `room_status`= 0 WHERE `id`='$roomid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `room_master` SET `room_status`= 1 WHERE `id`='$roomid'and deleted !=1");
                    }

            }

    }

}   




/*BathRoom Disable Status*/

if (isset($_POST['bathroomstatusid'])) {

	$bathroomid = $_POST['bathroomstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `home_master` WHERE `id`='$bathroomid' and deleted !=1");
	$numbathroom = mysqli_num_rows($query_statusid);

	if ($numbathroom == 1) {
		$getroom = mysqli_fetch_object($query_statusid);
		$bathroom_status = $getroom->bathroom_status;

                //check if bathroom is used in property.

                $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `h_type` = '$bathroomid'and deleted != 1");

                $countqueryselect = mysqli_num_rows($queryselect);

                    if($countqueryselect>0){

                        echo "success";
                        
                    }else{  

                            if ($bathroom_status == 1) {
                                mysqli_query($sql, "UPDATE `home_master` SET `bathroom_status`= 0 WHERE `id`='$bathroomid'and deleted !=1");
                            } else {
                                mysqli_query($sql, "UPDATE `home_master` SET `bathroom_status`= 1 WHERE `id`='$bathroomid'and deleted !=1");
                            }

                    }

                }

}   

/*Pool Disable Status*/

if (isset($_POST['poolstatusid'])) {

	$poolid = $_POST['poolstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `pool_master` WHERE `id`='$poolid' and deleted !=1");
	$numpool = mysqli_num_rows($query_statusid);

	if ($numpool == 1) {
		$getpool = mysqli_fetch_object($query_statusid);
		$pool_status = $getpool->pool_status;

        //check if poool is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `pool` = '$poolid'and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($pool_status == 1) {
                        mysqli_query($sql, "UPDATE `pool_master` SET `pool_status`= 0 WHERE `id`='$poolid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `pool_master` SET `pool_status`= 1 WHERE `id`='$poolid'and deleted !=1");
                    }

            }

    }

}   


/*Night Disable Status*/

if (isset($_POST['nightstatusid'])) {

	$nightid = $_POST['nightstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `night_master` WHERE `id`='$nightid' and deleted !=1");
	$numnight = mysqli_num_rows($query_statusid);

	if ($numnight == 1) {
		$getnight = mysqli_fetch_object($query_statusid);
		$night_status = $getnight->night_status;

        //check if night is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `nights` = '$nightid'and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($night_status == 1) {
                        mysqli_query($sql, "UPDATE `night_master` SET `night_status`= 0 WHERE `id`='$nightid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `night_master` SET `night_status`= 1 WHERE `id`='$nightid'and deleted !=1");
                    }

            }

    }

}   


/*Destination Disable Status*/

if (isset($_POST['destinationstatusid'])) {

	$destinationid = $_POST['destinationstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `destination_master` WHERE `id`='$destinationid' and deleted !=1");
	$numroom = mysqli_num_rows($query_statusid);

	if ($numroom == 1) {
		$getroom = mysqli_fetch_object($query_statusid);
		$destination_status = $getroom->destination_status;

        //check if Destination is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `r_type` = '$destinationid'and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($destination_status == 1) {
                        mysqli_query($sql, "UPDATE `destination_master` SET `destination_status`= 0 WHERE `id`='$destinationid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `destination_master` SET `destination_status`= 1 WHERE `id`='$destinationid'and deleted !=1");
                    }
                    
            }  

    }

    //Destination Json Update

    $query_json = mysqli_query($sql, "SELECT * FROM `destination_master` WHERE `deleted` != '1' and `destination_status` = 0");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                                'slug'  => $getdata_json->slug,
                                'logo'  => $getdata_json->logo,
                                
                            );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/destination_master')) {
        mkdir('../json/destination_master', 0777, true);
    }

    file_put_contents('../json/destination_master/destination_master.json', $final_data);

}   


/*Property category (filters) Disable Status*/

if (isset($_POST['propCatstatusid'])) {

	$propcatid = $_POST['propCatstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `awt_filters` WHERE `id`='$propcatid' and deleted !=1");
	$numprop = mysqli_num_rows($query_statusid);

	if ($numprop == 1) {
		$getpropcat = mysqli_fetch_object($query_statusid);
		$propcat_status = $getpropcat->propcat_status;
        $propcat_name = $getpropcat->title;



        //check if Property category (filters) is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `propcat` LIKE '%$propcat_name%'and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($propcat_status == 1) {
                        mysqli_query($sql, "UPDATE `awt_filters` SET `propcat_status`= 0 WHERE `id`='$propcatid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `awt_filters` SET `propcat_status`= 1 WHERE `id`='$propcatid'and deleted !=1");
                    }

            }

    }

    // filter json updated
    $query_json = mysqli_query($sql, "SELECT * FROM `awt_filters` WHERE `deleted` != '1' and `propcat_status` = 0");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                                'logo'  => $getdata_json->logo,
                               
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/filters')) {
        mkdir('../json/filters', 0777, true);
    }

    file_put_contents('../json/filters/filters.json', $final_data);

}   



/*Ammenities (facilities) Disable Status*/

if (isset($_POST['amenitiesstatusid'])) {

	$amenityid = $_POST['amenitiesstatusid'];
  //  $numamenity = mysqli_num_rows($query_statusid);

	$query_statusid = mysqli_query($sql, "SELECT * FROM `awt_facilities` WHERE `id`='$amenityid' and deleted !=1");
    $numamenity = mysqli_num_rows($query_statusid);

    /*$getpropcat = mysqli_fetch_object($query_statusid);
    $facilities_status = $getpropcat->facilities_status;
    if ($facilities_status == 1) {
        mysqli_query($sql, "UPDATE `awt_facilities` SET `facilities_status`= 0 WHERE `id`='$amenityid'and deleted !=1");
    } else {
        mysqli_query($sql, "UPDATE `awt_facilities` SET `facilities_status`= 1 WHERE `id`='$amenityid'and deleted !=1");
    }*/
    
	if ($numamenity == 1) {
		$getpropcat = mysqli_fetch_object($query_statusid);
		$facilities_status = $getpropcat->facilities_status;
		$facilities_title = $getpropcat->title;

        //check if Ammenities (facilities) is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `amenities` LIKE '%$facilities_title%'and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($facilities_status == 1) {
                        mysqli_query($sql, "UPDATE `awt_facilities` SET `facilities_status`= 0 WHERE `id`='$amenityid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `awt_facilities` SET `facilities_status`= 1 WHERE `id`='$amenityid'and deleted !=1");
                    }

            }

    }

    //Ammenity json update

    
    $query_json = mysqli_query($sql, "SELECT * FROM `awt_facilities` WHERE `deleted` != '1' and `facilities_status` = 0");

    $array_data = array();
            $getdata_json = mysqli_fetch_object($query_json);
            $master_data = array(
                                'title'  => $getdata_json->title,
                                'upload_image' => $getdata_json->upload_image
                                 );

    $array_data[] = $master_data;

    $final_data = json_encode($array_data);

    if (!file_exists('../json/facilities')) {
        mkdir('../json/facilities', 0777, true);
    }

    file_put_contents('../json/facilities/facilities.json', $final_data);

}   



/*City Disable Status*/

if (isset($_POST['citystatusid'])) {

	$cityid = $_POST['citystatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `id`='$cityid' and deleted !=1");
	$numcity = mysqli_num_rows($query_statusid);

	if ($numcity == 1) {
		$getcity = mysqli_fetch_object($query_statusid);
		$city_status = $getcity->city_status;
		// $city_title = $getcity->title;

        //check if City is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `city` = '$cityid' and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($city_status == 1) {
                        mysqli_query($sql, "UPDATE `city_master` SET `city_status`= 0 WHERE `id`='$cityid' and deleted !=1");

                    } else {
                        mysqli_query($sql, "UPDATE `city_master` SET `city_status`= 1 WHERE `id`='$cityid' and deleted !=1");

                    }

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



/*Vendor Disable Status*/

if (isset($_POST['vendorstatusid'])) {

	$vendorid = $_POST['vendorstatusid'];
	$query_statusid = mysqli_query($sql, "SELECT * FROM `vendor_master` WHERE `id`='$vendorid' and deleted !=1");
	$numvendor = mysqli_num_rows($query_statusid);

	if ($numvendor == 1) {
		$getvendor = mysqli_fetch_object($query_statusid);
		$vendor_status = $getvendor->vendor_status;

        //check if Vendor is used in property.

        $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `property_by` = '$vendorid' and deleted != 1");

        $countqueryselect = mysqli_num_rows($queryselect);

            if($countqueryselect>0){

                echo "success";
                
            }else{  

                    if ($vendor_status == 1) {
                        mysqli_query($sql, "UPDATE `vendor_master` SET `vendor_status`= 0 WHERE `id`='$vendorid'and deleted !=1");
                    } else {
                        mysqli_query($sql, "UPDATE `vendor_master` SET `vendor_status`= 1 WHERE `id`='$vendorid'and deleted !=1");
                    }

            }

    }

}   




?>