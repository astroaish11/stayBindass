<?php
$title = '';
$icon = '';
$image = '';
$link = '';
$alertMessage= '';
$eid = '';
$vid = $_GET['vid'];

$cdate = date('Y-m-d H:i:s');
$path = "../upload/video/";
$valid_formats = array("mp4");


if(isset($_POST['submit1'])) {

     $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql,$title);

    $link = trim($_POST['link1']);
    $link = mysqli_real_escape_string($sql,$link);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $vid = trim($_POST['vid']);
    $vid = mysqli_real_escape_string($sql, $vid);

    

  //   $upload = $_FILES['upload']['name'];
  //       list($txt, $ext) = explode(".", $upload);
  //       if(in_array($ext,$valid_formats)){
  //           $txt = str_replace(" ", "-", $txt);
  //           global $upload_image;
	// 		$upload_image = $txt."-".time().".".$ext;

	// 		$tmppath = $_FILES['upload']['tmp_name'];	
	// 		move_uploaded_file($tmppath, $path.$upload_image);
  //       }
  //       else {

  //       }
  //       $image = $upload_image;
  //   }else {

	// 	$image = mysqli_real_escape_string($sql,$_POST['image']);

	// }

  
$upload = $_FILES['video1']['name']; 

if($upload != '') {

    $lastDot = strrpos($upload, ".");
    $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
    list($txt, $ext) = explode(".", $upload);
    if(in_array($ext,$valid_formats)){
    $txt = str_replace(" ", "-", $txt);
    global $upload_image;
    $upload_image = $txt."-".time().".".$ext;
    $tmppath = $_FILES['video1']['tmp_name'];	
    move_uploaded_file($tmppath, $path.$upload_image);

} else {

}

$image = $upload_image;			

} else {

$image = mysqli_real_escape_string($sql,$_POST['image']);

}


    /******Insert&Update******/

    if($eid == ''){
        mysqli_query($sql,"INSERT INTO `awt_Video` (`type`,`v_id`, `videoTitle`, `link`,`video`,`created_date`,`created_by`) VALUES ('2','$vid', '$title','$link','$image','$cdate','1')");
        
        echo '<script type="text/javascript">window.location.href="video.php?s=1"</script>';
    }
    else{
        mysqli_query($sql,"UPDATE `awt_Video` SET `type`='2',`v_id`='$vid', `videoTitle`='$title',`link`='$link',`video`='$image',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");

        echo '<script type="text/javascript">window.location.href="video.php?u=1"</script>';
    }

      /******Json******/

    $query_json = mysqli_query($sql, "SELECT * FROM `awt_Video` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'type'     => $getdata_json->type,
                                'videoTitle'  => $getdata_json->videoTitle,
                                'link'  => $getdata_json->link,
                                'video'  => $getdata_json->video,
                              
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/vVideo')) {
        mkdir('../json/vVideo', 0777, true);
    }

    file_put_contents('../json/vVideo/vVideo.json', $final_data);
    

  }

if(isset($_GET['s'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';

}
if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

 }

  /***************Edit**************/

if(isset($_GET['eid'])) {

    $eid = trim($_GET['eid']);    
    $eid = mysqli_real_escape_string($sql, $eid);
    
    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_Video` WHERE `id` = '$eid'");
    
    $getdata = mysqli_fetch_object($selectdata);
    $eid = $getdata->id;
    $vid = $getdata->v_id;
    $title = $getdata->videoTitle;
    $link = $getdata->link;
    $image = $getdata->video;

}

  /******Delete******/

if(isset($_GET['did'])){
    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql,$did);

    mysqli_query($sql,"UPDATE `awt_Video` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");

    echo '<script type="text/javascript">window.location.href="video.php?d=1"</script>';
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}

  /******Query******/

   
$query = mysqli_query($sql, "SELECT * FROM `awt_Video` WHERE deleted != '1'");
    
$count = mysqli_num_rows($query);


?>