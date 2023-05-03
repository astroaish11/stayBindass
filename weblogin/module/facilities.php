<?php
$title = '';

$symbol = '';
$alertMessage= '';
$image = '';
$eid = '';

$path = "../upload/amenities/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");

$cdate = date('Y-m-d H:i:s');


if(isset($_POST['submit'])){

$title = trim($_POST['title']);
$title = mysqli_real_escape_string($sql,$title);


$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);


$upload = $_FILES['symbol']['name']; 

    if($upload != '') {

        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
        $txt = str_replace(" ", "-", $txt);
        global $upload_image;
        $upload_image = $txt."-".time().".".$ext;
        $tmppath = $_FILES['symbol']['tmp_name'];	
        move_uploaded_file($tmppath, $path.$upload_image);

    } else {

    }

    $image = $upload_image;			

} else {

$image = mysqli_real_escape_string($sql,$_POST['image']);

}

/*************************************Insert & Update*********************************/



if($eid == ''){
        //check facilities already exist
        $queryselect =mysqli_query($sql,"SELECT * from `awt_facilities` where `title` = '$title'and `deleted`!= 1");
        $countqueryselect = mysqli_num_rows($queryselect);

         if($countqueryselect>0){

            echo '<script type="text/javascript">alert("Ammenity Already Exist")</script>';

            
         }else{

            mysqli_query($sql, "INSERT INTO `awt_facilities` (`title`,`upload_image`,`created_by`, `created_date`) VALUES ('$title','$image', '1', '$cdate')");
   
            echo '<script type="text/javascript">window.location.href="facilities.php?s=1"</script>';

            
         }
    
}else {
        //check facilities already exist
        $queryselect =mysqli_query($sql,"SELECT * from `awt_facilities` where `title` = '$title' and `id`!= '$eid'and `deleted`!= 1");
        $countqueryselect = mysqli_num_rows($queryselect);

    if($countqueryselect>0){

        echo '<script type="text/javascript">alert("Ammenity Already Exist")</script>';
       
    }else{

    mysqli_query($sql, "UPDATE `awt_facilities` SET `title`='$title',`upload_image`='$image', `updated_by`='1', `updated_date`='$cdate' where id = '$eid'");


        echo '<script type="text/javascript">window.location.href="facilities.php?u=1"</script>';
}
}

/************************************Json*********************************/



    $query_json = mysqli_query($sql, "SELECT * FROM `awt_facilities` WHERE `deleted` != '1'and `facilities_status` = 0");

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

    $query = mysqli_query($sql, "SELECT * FROM `awt_facilities` where `id` = '$eid'");

    $getdata = mysqli_fetch_object($query);

    $title = $getdata->title;
    $image = $getdata->upload_image;
    $eid = $getdata->id;

}

  
   /***********************************Delete***************************************/


if(isset($_GET['did'])) {

    $did = trim($_GET['did']);    
    $did = mysqli_real_escape_string($sql, $did);
    $cdate = date('Y-m-d H:i:s');


               //check if facilities is used in property.

               $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `amenities` = '$did' and deleted != 1");
               $countqueryselect = mysqli_num_rows($queryselect);
   
                   if($countqueryselect>0){

                    echo '<script type="text/javascript">alert("Data is already Used in Property.<br> If You Wish to delete, first delete its depenedent data")</script>';
   
               
                       
                   }else{
   
                    mysqli_query($sql, "UPDATE `awt_facilities` SET `deleted` = 1, `updated_date` = '$cdate', `updated_by` = '1' where `id` = '$did'");

                    echo '<script type="text/javascript">window.location.href="facilities.php?d=1"</script>';
                   }
           
   
   



    
/************************************Json*********************************/



$query_json = mysqli_query($sql, "SELECT * FROM `awt_facilities` WHERE `deleted` != 1 and `facilities_status` = 0");

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

/***********************************Query***************************************/

$query = mysqli_query($sql, "SELECT * FROM `awt_facilities`  where deleted != 1");

$count = mysqli_num_rows($query);


?>
