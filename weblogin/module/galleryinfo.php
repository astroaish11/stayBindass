<?php
$title = '';
$icon = '';
$link = '';
$image = '';
$imagefile1 = '';
$alertMessage= '';
$alertMessage2= '';
$eid = '';
$theimage=array();
$editimage=array();
$pid2=array();

$cdate = date('Y-m-d H:i:s');
$path = "../upload/vgallery/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");

if(isset($_POST['submit'])) {

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $vid = trim($_POST['vid']);
    $vid = mysqli_real_escape_string($sql, $vid);



     //Multi Image Upload

     $frontimage = $_FILES['image']['name'];

     if($frontimage[0] != '')
     {
      for($i=0;$i<count($_FILES["image"]["name"]);$i++)
        {
               $folder= "../upload/vgallery/";
               
         $upload_image = time().'_'.$_FILES["image"]["name"][$i];
         $tmp =$_FILES["image"]["tmp_name"][$i];
         move_uploaded_file($tmp, $folder.$upload_image);
               array_push($theimage,$upload_image);
      }
      }
   

    /******Insert&Update******/

     $num=sizeof($theimage);

     if ($frontimage[0] !='') {

        if($num != 0){

             for($i=0;$i<=$num-1;$i++){

              $imagename = $theimage[$i];

                    if($eid == ''){
                        mysqli_query($sql,"INSERT INTO `awt_vgallery` (`v_id`,`logo`,`created_date`,`created_by`) VALUES ('$vid','$theimage[$i]','$cdate','1')");
                    
                        echo '<script type="text/javascript">window.location.href="gallery.php?vid='.$vid.'&s=1"</script>';
                    }
                    else{
                        mysqli_query($sql,"UPDATE `awt_vgallery` SET  `v_id`='$vid',`logo`='$image',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");

                        echo '<script type="text/javascript">window.location.href="gallery.php?vid='.$vid.'&u=1"</script>';
                    }

   

      /******Json******/

    $query_json = mysqli_query($sql, "SELECT * FROM `awt_vgallery` WHERE `deleted` != '1'");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'v_id'     => $getdata_json->v_id,
                                'logo'  => $getdata_json->logo,
                              
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/vgallery')) {
        mkdir('../json/vgallery', 0777, true);
    }

    file_put_contents('../json/vgallery/vgallery.json', $final_data);
    

}

}

if(isset($_GET['s'])) {

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Inserted Successfully</div>';

}
if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}
        }
    }



  /******Delete******/

if(isset($_GET['did'])){

    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql,$did);

    $vid = trim($_GET['vid']);
    $vid = mysqli_real_escape_string($sql,$vid);

    mysqli_query($sql,"UPDATE `awt_vgallery` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");

    echo '<script type="text/javascript">window.location.href="gallery.php?vid='.$vid.'&d=1"</script>';

        /******Json******/

        $query_json = mysqli_query($sql, "SELECT * FROM `awt_vgallery` WHERE `deleted` != '1'");

        $array_data = array();
        while($getdata_json = mysqli_fetch_object($query_json)){
    
            $master_data = array(
                                    'id'     => $getdata_json->id,
                                    'v_id'     => $getdata_json->v_id,
                                    'logo'  => $getdata_json->logo,
                                  
                                 );
            $array_data[] = $master_data;
    
        }
    
        $final_data = json_encode($array_data);
    
        if (!file_exists('../json/vgallery')) {
            mkdir('../json/vgallery', 0777, true);
        }
    
        file_put_contents('../json/vgallery/vgallery.json', $final_data);
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}


if(isset($_POST['deleteall'])){

    $chkArray = $_POST['chkArray'];
    $vid = $_POST['vid'];
    
    $created_date = date('Y-m-d H:i:s');
    
    $storids = explode(",", $chkArray);
    $arraylength=count($storids);

    $x=0;
    if($arraylength > 0){
    
        for($i=0; $i<$arraylength; $i++){
            
            $did = $storids[$i];

            mysqli_query($sql,"UPDATE `awt_vgallery` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");

        }

        echo '<script type="text/javascript">window.location.href="gallery.php?vid='.$vid.'&d=1"</script>';
        
    }else{
    
        echo '<script type="text/javascript">window.location.href="gallery.php?vid='.$vid.'&d=1"</script>';
   
   }

}

?>