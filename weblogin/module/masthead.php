<?php
$title = '';
$image = '';
$alertMessage= '';
$eid = '';

$cdate = date('Y-m-d H:i:s');
$path = "../upload/sliderimage/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");
if(isset($_POST['submit'])) {

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql,$title);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $image = trim($_POST['image']);
    $image = mysqli_real_escape_string($sql, $image);



    $upload = $_FILES['slider_img']['name']; 

    if($upload != '') {
        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
            $txt = str_replace(" ", "-", $txt);
            global $upload_image;
			$upload_image = $txt."-".time().".".$ext;

			$tmppath = $_FILES['slider_img']['tmp_name'];	
			move_uploaded_file($tmppath, $path.$upload_image);
        }
        else {

        }
        $image = $upload_image;
    }else {

		$image = mysqli_real_escape_string($sql,$_POST['image']);

	}



   /***********************************INSERT & UPDATE*****************************************/


    if($eid == ''){

                   
        mysqli_query($sql,"INSERT INTO `awt_master` (`slider_img`,`created_date`,`created_by`) VALUES ('$image','$cdate','1')");

        echo '<script type="text/javascript">window.location.href="master.php?s=1"</script>';
                    
           

        
    }else {

            mysqli_query($sql,"UPDATE `awt_master` SET `slider_img`='$image',`updated_by`='1',`updated_date`='$cdate' WHERE `id` = '$eid' and `deleted` != '1'");

            echo '<script type="text/javascript">window.location.href="master.php?u=1"</script>';


    }



    $query_json = mysqli_query($sql, "SELECT * FROM `awt_master` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'slider_img'  => $getdata_json->slider_img,
                               
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/masthead')) {
        mkdir('../json/masthead', 0777, true);
    }

    file_put_contents('../json/masthead/masthead.json', $final_data);

}

if(isset($_GET['s'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';

}
if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}

if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);
    
    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_master` WHERE `id` = '$eid'");
    
    $getdata = mysqli_fetch_object($selectdata);
    
    $eid = $getdata->id;
    $image = $getdata->slider_img;
 
}

if(isset($_GET['did'])){
    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql,$did);

    mysqli_query($sql,"UPDATE `awt_master` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");
    echo '<script type="text/javascript">window.location.href="master.php?d=1"</script>';

    
    $query_json = mysqli_query($sql, "SELECT * FROM `awt_master` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'slider_img'  => $getdata_json->slider_img,
                          
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/masthead')) {
        mkdir('../json/masthead', 0777, true);
    }

    file_put_contents('../json/masthead/masthead.json', $final_data);
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}
   
$query = mysqli_query($sql, "SELECT * FROM `awt_master` WHERE deleted != '1'");
    
$count = mysqli_num_rows($query);


?>