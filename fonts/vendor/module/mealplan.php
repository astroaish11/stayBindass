<?php
$adult1_price = '';
$adult2_price = '';
$adult3_price = '';
$adult4_price = '';
$child1_price = '';
$child2_price = '';
$child3_price = '';
$child4_price = '';
$desc = '';
$pdf = '';
$eid = '';

$cdate = date('Y-m-d H:i:s');
$path = "../upload/meal/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");
$alertMessage= '';
$image = '';

if(isset($_POST['submit'])){

$adult1_price = trim($_POST['adult1_price']);
$adult1_price = mysqli_real_escape_string($sql,$adult1_price);

$child1_price = trim($_POST['child1_price']);
$child1_price = mysqli_real_escape_string($sql,$child1_price);

$adult2_price = trim($_POST['adult2_price']);
$adult2_price = mysqli_real_escape_string($sql,$adult2_price);

$child2_price = trim($_POST['child2_price']);
$child2_price = mysqli_real_escape_string($sql,$child2_price);

$adult3_price = trim($_POST['adult3_price']);
$adult3_price = mysqli_real_escape_string($sql,$adult3_price);

$child3_price = trim($_POST['child3_price']);
$child3_price = mysqli_real_escape_string($sql,$child3_price);

$adult4_price = trim($_POST['adult4_price']);
$adult4_price = mysqli_real_escape_string($sql,$adult4_price);

$child4_price = trim($_POST['child4_price']);
$child4_price = mysqli_real_escape_string($sql,$child4_price);

$desc = trim($_POST['desc']);
$desc = mysqli_real_escape_string($sql,$desc);

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);

$vid = trim($_POST['vid']);
$vid = mysqli_real_escape_string($sql, $vid);



$upload = $_FILES['pdf']['name']; 

    if($upload != '') {

        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
        $txt = str_replace(" ", "-", $txt);
        global $upload_image;
        $upload_image = $txt."-".time().".".$ext;
        $tmppath = $_FILES['pdf']['tmp_name'];	
        move_uploaded_file($tmppath, $path.$upload_image);

    } else {

    }

    $image = $upload_image;			

} else {

$image = mysqli_real_escape_string($sql,$_POST['image']);

}

// *****************************************UPDATE****************************************************

mysqli_query($sql, "UPDATE `awt_meal` SET `adult1`='$adult1_price',`adult2`='$adult2_price',`adult3`='$adult3_price',`adult4`='$adult4_price',`child1`='$child1_price',`child2`='$child2_price',`child3`='$child3_price',`child4`='$child4_price',`short_desc`='$desc',`upload_image`='$image',`v_id`='$vid',`updated_date`='$cdate',`updated_by`='1' WHERE `id` = '$eid'");

echo '<script type="text/javascript">window.location.href="meal.php?vid='.$vid.'&s=1"</script>';

}

if(isset($_GET['s'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}

// *****************************************Query****************************************************

$query = mysqli_query($sql, "SELECT * FROM `awt_meal` WHERE deleted != '1'");
$getdata = mysqli_fetch_object($query);

$adult1 = $getdata->adult1;
$child1 = $getdata->child1;
$adult2 = $getdata->adult2;
$child2 = $getdata->child2;
$adult3 = $getdata->adult3;
$child3 = $getdata->child3;
$adult4 = $getdata->adult4;
$child4 = $getdata->child4;
$desc = $getdata->short_desc;
$upload_image = $getdata->upload_image;
$image = $upload_image;

$eid = $getdata->id;
?>