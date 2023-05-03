<?php
$title = '';
$subTitle = '';
$symbol = '';
$alertMessage= '';
$image = '';
$eid = '';

$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])){

$title = trim($_POST['facility']);
$title = mysqli_real_escape_string($sql,$title);

$subTitle = trim($_POST['subTitle']);
$subTitle = mysqli_real_escape_string($sql,$subTitle);

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);



/*************************************Insert & Update*********************************/


if($eid == ''){

    mysqli_query($sql, "INSERT INTO `subFacilities` (`title_id`,`subtitle`,`created_by`, `created_date`) VALUES ('$title','$subTitle', '$userid', '$cdate')");
   
    echo '<script type="text/javascript">window.location.href="subFacilities.php?s=1"</script>';
    
}else {
    mysqli_query($sql, "UPDATE `subFacilities` SET `title_id`='$title',`subtitle`='$subTitle', `updated_by`='$userid', `updated_date`='$cdate' where id = '$eid'");


        echo '<script type="text/javascript">window.location.href="subFacilities.php?u=1"</script>';
}

/************************************Json*********************************/



    $query_json = mysqli_query($sql, "SELECT * FROM `subFacilities` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){
            $master_data = array(
                               'id'     => $getdata_json->id,
                                'title_id'  => $getdata_json->title_id,
                                'subTitle'  => $getdata_json->subtitle,
                              
                                 );

    $array_data[] = $master_data;

     }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/subFacilities')) {
        mkdir('../json/subFacilities', 0777, true);
    }

    file_put_contents('../json/subFacilities/subFacilities.json', $final_data);
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

    $query = mysqli_query($sql, "SELECT * FROM `subFacilities` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $title = $getdata->title_id;
    $subTitle = $getdata->subtitle;
    $eid = $getdata->id;

}

   /***********************************Function***************************************/

   function getFacility($sql, $title){

    $getdata = mysqli_query($sql, "SELECT * FROM `awt_facilities` where `deleted` != 1");

    while($listdata = mysqli_fetch_object($getdata)){

        echo '<option value="'.$listdata->id.'"';
			if($listdata->id == $title){ echo 'selected="selected"';}
			echo '>'.$listdata->title.'</option>';

    }

}

   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `subFacilities` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '$eid' where `id` = '$did'");

    echo '<script type="text/javascript">window.location.href="subFacilities.php?d=1"</script>';

}

/***********************************Query***************************************/

 $query = mysqli_query($sql, "SELECT s.*,f.title, s.subtitle 
                            from  `subFacilities` as s
                            left Join `awt_facilities` as f 
                            on f.id = s.title_id
                            where f.deleted != 1 and s.deleted != 1");

 $count = mysqli_num_rows($query);


?>
