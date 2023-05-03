<?php
$name = '';
$seo_title = '';
$meta_desc = '';
$meta_desc1 = '';
$dark_logo = '';
$light_logo = '';
$signUpImg = '';
$adminLoginImg = '';
$favicon = '';
$hCode = '';
$autoAprrovalProperties = '';
$invoiceDesc = '';
$enableCookies = '';
$primaryColor = '';
$primaryColor1 = '';
$row_per_page ='';
$image = '';
$image1 = '';
$image2 = '';
$image3 = '';
$image4 = '';
$eid= '';
$alertMessage= '';
$colorPicker = '';
$hiddencolor = '';
$p_color = '';
$cdate = date('Y-m-d H:i:s');
$path = "../upload/general_setting/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");

if(isset($_POST['submit'])){

$name = trim($_POST['name']);
$name = mysqli_real_escape_string($sql,$name);

$eid =  trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);

$seo_title = trim($_POST['seo_title']);
$seo_title = mysqli_real_escape_string($sql,$seo_title);

$meta_desc = trim($_POST['meta_desc']);
$meta_desc = mysqli_real_escape_string($sql,$meta_desc);

$meta_desc1 = trim($_POST['meta_desc1']);
$meta_desc1 = mysqli_real_escape_string($sql,$meta_desc1);

$hCode =  trim($_POST['hCode']);
$hCode =  mysqli_real_escape_string($sql,$hCode);

$autoAprrovalProperties =  trim($_POST['autoAprrovalProperties']);
$autoAprrovalProperties =  mysqli_real_escape_string($sql,$autoAprrovalProperties);

$invoiceDesc =  trim($_POST['invoiceDesc']);
$invoiceDesc =  mysqli_real_escape_string($sql,$invoiceDesc);

$enableCookies =  trim($_POST['enableCookies']);
$enableCookies =  mysqli_real_escape_string($sql,$enableCookies);

$row_per_page =  trim($_POST['row_per_page']);
$row_per_page =  mysqli_real_escape_string($sql,$row_per_page);

$dark_logo = trim($_POST['dark_logo']);
$dark_logo = mysqli_real_escape_string($sql,$dark_logo);

//$p_color = trim($_POST['p_color']);
//$p_color = mysqli_real_escape_string($sql,$p_color);

$hiddencolor = trim($_POST['hiddencolor']);
$hiddencolor = mysqli_real_escape_string($sql,$hiddencolor);

//$colorPicker = trim($_POST['colorPicker']);
//$colorPicker = mysqli_real_escape_string($sql,$colorPicker);



//dark logo image
$upload = $_FILES['dark_logo']['name']; 

    if($upload != '') {

        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);

        list($txt, $ext) = explode(".", $upload);

        if(in_array($ext,$valid_formats)){

        $txt = str_replace(" ", "-", $txt);
        global $upload_image;
        $upload_image = $txt."-".time().".".$ext;

        $tmp = $_FILES['dark_logo']['tmp_name'];	
        move_uploaded_file($tmp, $path.$upload_image);

    } else {

    }

$dark_logo = $upload_image;			

} else {

$dark_logo = mysqli_real_escape_string($sql,$_POST['dark_logo']);

}

//light logo image
$light_logo = trim($_POST['light_logo']);
$light_logo = mysqli_real_escape_string($sql,$light_logo);

 $upload1 = $_FILES['light_logo']['name']; 

     if($upload1 != '') {

         $lastDot = strrpos($upload1, ".");
         $upload1 = str_replace(".", "", substr($upload1, 0, $lastDot)) . substr($upload1, $lastDot);

 		list($txt, $ext) = explode(".", $upload1);

 		if(in_array($ext,$valid_formats)){

             $txt = str_replace(" ", "-", $txt);

 			global $upload_image1;
 			$upload_image1 = $txt."-".time().".".$ext;

 			$tmp = $_FILES['light_logo']['tmp_name'];	
 			move_uploaded_file($tmp, $path.$upload_image1);

 		} else {

         }

 		$light_logo = $upload_image1;			

 	} else {

 		$light_logo = mysqli_real_escape_string($sql,$_POST['light_logo']);

}

//favicon
$favicon = trim($_POST['favicon']);
$favicon = mysqli_real_escape_string($sql,$favicon);

 $upload2 = $_FILES['favicon']['name']; 

     if($upload2 != '') {

         $lastDot = strrpos($upload2, ".");
         $upload2 = str_replace(".", "", substr($upload2, 0, $lastDot)) . substr($upload2, $lastDot);

 		list($txt, $ext) = explode(".", $upload2);

 		if(in_array($ext,$valid_formats)){

             $txt = str_replace(" ", "-", $txt);

 			global $upload_image2;
 			$upload_image2 = $txt."-".time().".".$ext;

			$tmp = $_FILES['favicon']['tmp_name'];	
 			move_uploaded_file($tmp, $path.$upload_image2);

 		} 
        else {

        }

 		$favicon = $upload_image2;			

 	} 
    else {

 		$favicon = mysqli_real_escape_string($sql,$_POST['favicon']);

}

//signup image
$signUpImg = trim($_POST['signUpImg']);
$signUpImg = mysqli_real_escape_string($sql,$signUpImg);

 $upload3 = $_FILES['signUpImg']['name']; 

     if($upload3 != '') {

         $lastDot = strrpos($upload3, ".");
         $upload3 = str_replace(".", "", substr($upload3, 0, $lastDot)) . substr($upload3, $lastDot);

		list($txt, $ext) = explode(".", $upload3);

 		if(in_array($ext,$valid_formats)){

             $txt = str_replace(" ", "-", $txt);

 			global $upload_image3;
 			$upload_image3 = $txt."-".time().".".$ext;

 			$tmp = $_FILES['signUpImg']['tmp_name'];	
			move_uploaded_file($tmp, $path.$upload_image3);

 		} else {

         }

 		$signUpImg = $upload_image3;			

 	} else {

 		$signUpImg = mysqli_real_escape_string($sql,$_POST['signUpImg']);

}

//admin login image
$adminLoginImg = trim($_POST['adminLoginImg']);
$adminLoginImg = mysqli_real_escape_string($sql,$adminLoginImg);

$upload4 = $_FILES['adminLoginImg']['name']; 

     if($upload4 != '') {

         $lastDot = strrpos($upload4, ".");
         $upload4 = str_replace(".", "", substr($upload4, 0, $lastDot)) . substr($upload4, $lastDot);

 		list($txt, $ext) = explode(".", $upload4);

 		if(in_array($ext,$valid_formats)){

             $txt = str_replace(" ", "-", $txt);

 			global $upload_image4;
 			$upload_image4 = $txt."-".time().".".$ext;

 			$tmp = $_FILES['adminLoginImg']['tmp_name'];	
 			move_uploaded_file($tmp, $path.$upload_image4);

 		} else {

         }

 		$adminLoginImg = $upload_image4;			

 	} else {

 		$adminLoginImg = mysqli_real_escape_string($sql,$_POST['adminLoginImg']);

 	}

//update query

     mysqli_query($sql, "UPDATE `awt_general` SET `name`='$name',`seo_title`='$seo_title',`meta_desc`='$meta_desc',`keywords`='$meta_desc1', `head_code`='$hCode',`approval_prop`='$autoAprrovalProperties',`inv_desc`='$invoiceDesc',`enable_cookies`='$enableCookies',`rowperpage`='$row_per_page',`dark_logo`='$dark_logo',`light_logo`='$light_logo',`favicon`='$favicon',`signup_img`='$signUpImg',`login_img`='$adminLoginImg',`primary_color`='$hiddencolor',`updated_date`='$cdate',`updated_by`='1' WHERE `id` = '$eid'");
	 if (!file_exists('../json/general')) {
		mkdir('../json/general', 0777, true);
	 }
	 echo '<script type="text/javascript">window.location.href="general.php?s=1"</script>';

//Create JSON file
$query_json = mysqli_query($sql, "SELECT * FROM `awt_general` WHERE `deleted` != '1'");
	 
$getdata_json = mysqli_fetch_object($query_json);

$general_json = array(
					   'id' => $getdata_json->id,
					   'name' => $getdata_json->name,
					   'seo_title' => $getdata_json->seo_title,
					   'meta_desc' => $getdata_json->meta_desc,
					   'keywords' => $getdata_json->keywords,
					   'dark_logo' => $getdata_json->dark_logo,
					   'light_logo' => $getdata_json->light_logo,
					   'favicon' => $getdata_json->favicon,
					   'signup_img' => $getdata_json->signup_img,
					   'login_img' => $getdata_json->login_img,
					   'head_code' => $getdata_json->head_code,
					   'approval_prop' => $getdata_json->approval_prop,
					   'inv_desc' => $getdata_json->inv_desc,
					   'enable_cookies' => $getdata_json->enable_cookies,
					   'rowperpage' => $getdata_json->rowperpage
				   );
$final_data = json_encode($general_json);

if (!file_exists('../json/general')) {
	mkdir('../json/general', 0777, true);
}

file_put_contents('../json/general/general.json', $final_data);

}


if(isset($_GET['s'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}

$query = mysqli_query($sql, "SELECT * FROM `awt_general` WHERE deleted != '1'");
$getdata = mysqli_fetch_object($query);
 
$name = $getdata->name;
$seo_title = $getdata->seo_title;
$meta_desc = $getdata->meta_desc;
$meta_desc1 = $getdata->keywords;

$dark_logo = $getdata->dark_logo;
$image = $dark_logo;

$light_logo = $getdata->light_logo;
$image1 = $light_logo;

$favicon = $getdata->favicon;
$image2 = $favicon;

$signUpImg = $getdata->signup_img;
$image3 = $signUpImg;

$adminLoginImg = $getdata->	login_img;
$image4 = $adminLoginImg;

$hCode =  $getdata->head_code;
$autoAprrovalProperties =  $getdata->approval_prop;
$invoiceDesc =  $getdata->inv_desc;
$enableCookies =  $getdata->enable_cookies;
$row_per_page =  $getdata->rowperpage;
$colorPicker = $getdata->primary_color;
$eid = $getdata->id;

?>