<?php
$title = '';
$desc = '';
$uploadStory = '';
$eid = '';
$cdate = date('Y-m-d H:i:s');
$path = "../upload/ourstory/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");
$alertMessage= '';
$image = '';

if(isset($_POST['submit'])){

$title = trim($_POST['title']);
$title = mysqli_real_escape_string($sql,$title);

$desc = trim($_POST['desc']);
$desc = mysqli_real_escape_string($sql,$desc);

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);




$upload = $_FILES['uploadStory']['name']; 

    if($upload != '') {

        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
        $txt = str_replace(" ", "-", $txt);
        global $upload_image;
        $upload_image = $txt."-".time().".".$ext;
        $tmppath = $_FILES['uploadStory']['tmp_name'];	
        move_uploaded_file($tmppath, $path.$upload_image);

    } else {

    }

    $image = $upload_image;			

} else {

$image = mysqli_real_escape_string($sql,$_POST['image']);

}

mysqli_query($sql, "UPDATE `ourstory` SET `title`='$title',`desc`='$desc',`upload_image`='$image',`updated_date`='$cdate',`updated_by`='1' WHERE `id` = '$eid'");


    $query_json = mysqli_query($sql, "SELECT * FROM `ourstory` WHERE `deleted` != '1'");
    $array_data = array();
    
    $getdata_json = mysqli_fetch_object($query_json);
    $master_data = array(

        'title'  => $getdata_json->title,
        'desc'  => $getdata_json->desc,
        'upload_image' => $getdata_json->upload_image
                        );

    $array_data[] = $master_data;

    $final_data = json_encode($array_data);

    if (!file_exists('../json/ourstory')) {
        mkdir('../json/ourstory', 0777, true);
    }

    file_put_contents('../json/ourstory/ourstory.json', $final_data);



echo '<script type="text/javascript">window.location.href="our_story.php?s=1"</script>';

}

if(isset($_GET['s'])){

    $alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Updated Successfully</div>';
}

$query = mysqli_query($sql, "SELECT * FROM `ourstory` WHERE deleted != '1'");
$getdata = mysqli_fetch_object($query);

$title = $getdata->title;
$desc = $getdata->desc;

$uploadStory = $getdata->upload_image;
$image = $uploadStory;

$eid = $getdata->id;
?>