<?php
$title = '';
$subTitle = '';
$image = '';

$alertMessage= '';
$eid = '';

$cdate = date('Y-m-d H:i:s');
$path = "../upload/services/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");

if(isset($_POST['submit'])) {

    $eid = $_GET['eid'];


    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql,$title);

    $subtitle = trim($_POST['subtitle']);
    $subtitle = mysqli_real_escape_string($sql,$subtitle);

  
    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);


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

    /*********************************UPDATE*************************************/

   
        mysqli_query($sql,"UPDATE `awt_services` SET `title`='$title',`subtitle`='$subtitle',`slider_img`='$image',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");

        echo '<script type="text/javascript">window.location.href="services.php?eid='.$eid.'&u=1"</script>';
    


        /*********************************JSON*************************************/


    $query_json = mysqli_query($sql, "SELECT * FROM `awt_services` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                                'subtitle' => $getdata_json->subtitle,
                                'slider_img'  => $getdata_json->slider_img

                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/services')) {
        mkdir('../json/services', 0777, true);
    }

    file_put_contents('../json/services/services.json', $final_data);

}


if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}

    /*********************************Query*************************************/

    if(isset($_GET['eid'])) 
    {
        $eid = $_GET['eid'];
        $getpage = mysqli_query($sql,"SELECT * from `awt_services` where `id` = '$eid'");
        $getedata = mysqli_fetch_object($getpage);
    
        $title = $getedata->title;
        $subtitle = $getedata->subtitle;
        $image = $getedata->slider_img;
        
    }


?>