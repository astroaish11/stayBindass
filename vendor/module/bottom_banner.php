<?php
$heading = '';
$subtitle = '';
$btnname = '';
$title = '';
$btnlink = '';
$image = '';
$alertMessage= '';
$eid = '';
$cdate = date('Y-m-d H:i:s');
$path = "../upload/bottom_banner/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");

if(isset($_POST['submit'])) {

     $heading = trim($_POST['heading']);
     $heading = mysqli_real_escape_string($sql,$heading);

     $title = trim($_POST['title']);
     $title = mysqli_real_escape_string($sql,$title);    

     $subtitle = trim($_POST['subtitle']);
     $subtitle = mysqli_real_escape_string($sql,$subtitle);

     $btnlink = trim($_POST['btnlink']);
     $btnlink = mysqli_real_escape_string($sql,$btnlink);
 
    $btnname = trim($_POST['btnname']);
    $btnname = mysqli_real_escape_string($sql, $btnname);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);



    $upload = $_FILES['bottom_banner']['name']; 

    if($upload != '') {
        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
            $txt = str_replace(" ", "-", $txt);
            global $upload_image;
			$upload_image = $txt."-".time().".".$ext;

			$tmppath = $_FILES['bottom_banner']['tmp_name'];	
			move_uploaded_file($tmppath, $path.$upload_image);
        }
        else {

        }
        $image = $upload_image;
    }else {

		$image = mysqli_real_escape_string($sql,$_POST['image']);

	}


    /***************************  Update ****************************/

     
        mysqli_query($sql,"UPDATE `bottom_banner` SET `heading`='$heading', `title`='$title',`subtitle`='$subtitle',`btn_link`='$btnlink',`btn_name`='$btnname',`image_upload`='$image',`updated_by`='1',`updated_date`='$cdate' WHERE id = '1'");

        echo '<script type="text/javascript">window.location.href="bottombanner.php?u=1"</script>';


            $query_json = mysqli_query($sql, "SELECT * FROM `bottom_banner` WHERE `deleted` != '1'");
            $array_data = array();

            $getdata_json = mysqli_fetch_object($query_json);
            $master_data = array(

                'heading'     => $getdata_json->heading,
                'title'  => $getdata_json->title,
                'subtitle'  => $getdata_json->subtitle,
                'btn_link' => $getdata_json->btn_link,
                'btn_name' => $getdata_json->btn_name,
                'image_upload' => $getdata_json->image_upload
                                );

            $array_data[] = $master_data;

            $final_data = json_encode($array_data);

            if (!file_exists('../json/bottombanner')) {
                mkdir('../json/bottombanner', 0777, true);
            }

            file_put_contents('../json/bottombanner/bottombanner.json', $final_data);



    }


if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}


    /**************************** Edit **************************/

    
    $selectdata = mysqli_query($sql, "SELECT * FROM `bottom_banner` WHERE `id` = 1");
    
    $getdata = mysqli_fetch_object($selectdata);
    
    $heading = $getdata->heading;
    $title = $getdata->title;
    $subtitle = $getdata->subtitle;
    $btnlink = $getdata->btn_link;
    $btnname = $getdata->btn_name;
    $image = $getdata->image_upload;
    $eid = $getdata->id;
    



?>