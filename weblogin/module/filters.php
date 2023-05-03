<?php
$title = '';
$icon = '';
$image = '';
$alertMessage= '';
$eid = '';
$cdate = date('Y-m-d H:i:s');
$path = "../upload/filters/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");
if(isset($_POST['submit'])) {

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql,$title);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    $image = trim($_POST['image']);
    $image = mysqli_real_escape_string($sql, $image);



    $upload = $_FILES['icon']['name']; 

    if($upload != '') {
        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
            $txt = str_replace(" ", "-", $txt);
            global $upload_image;
			$upload_image = $txt."-".time().".".$ext;

			$tmppath = $_FILES['icon']['tmp_name'];	
			move_uploaded_file($tmppath, $path.$upload_image);
        }
        else {

        }
        $image = $upload_image;
    }else {

		$image = mysqli_real_escape_string($sql,$_POST['image']);

	}



    if($eid == ''){

        //check filter already exist
$queryselect =mysqli_query($sql,"SELECT * from `awt_filters` where `title` = '$title' and deleted !=1");
$countqueryselect = mysqli_num_rows($queryselect);

                if($countqueryselect>0){

                    echo '<script type="text/javascript">alert("Property Category Already Exist")</script>';
                    
                }else{

                    
                    mysqli_query($sql,"INSERT INTO `awt_filters` (`title`,`logo`,`created_date`,`created_by`) VALUES ('$title','$image','$cdate','1')");
        
                    echo '<script type="text/javascript">window.location.href="filters.php?s=1"</script>';

                    
                }


    }
    else{
//check filter already exist
$queryselect =mysqli_query($sql,"SELECT * from `awt_filters` where `title` = '$title'and `id`!= '$eid'  and deleted !=1");
$countqueryselect = mysqli_num_rows($queryselect);

        if($countqueryselect>0){

            echo '<script type="text/javascript">alert("Property Category Already Exist")</script>';

          
            
        }else{

        mysqli_query($sql,"UPDATE `awt_filters` SET `title`='$title',`logo`='$image',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");
        echo '<script type="text/javascript">window.location.href="filters.php?u=1"</script>';
    }
}

    $query_json = mysqli_query($sql, "SELECT * FROM `awt_filters` WHERE `deleted` != '1' and `propcat_status` = 0");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                                'logo'  => $getdata_json->logo,
                               
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/filters')) {
        mkdir('../json/filters', 0777, true);
    }

    file_put_contents('../json/filters/filters.json', $final_data);
    

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
    
    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_filters` WHERE `id` = '$eid'");
    
    $getdata = mysqli_fetch_object($selectdata);
    
    $title = $getdata->title;
    $eid = $getdata->id;
    $image = $getdata->logo;
   
}

if(isset($_GET['did'])){
    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql,$did);



              //check if filter is used in property.

              $queryselect =mysqli_query($sql,"SELECT * from `addproperty` where `propcat` = '$did' and deleted != 1");
              $countqueryselect = mysqli_num_rows($queryselect);
  
                  if($countqueryselect>0){
  

                    echo '<script type="text/javascript">alert("Data is already Used in Property.<br> If You Wish to delete, first delete its depenedent data")</script>';

                    //   $alertMessage = '<div class = "masterfadediv" style ="font-size:12px;"><span class="text-danger"> Data is already Used in Property.<br> If You Wish to delete, first delete its depenedent data</span></div>';
                      
                  }else{
  
                      
                    mysqli_query($sql,"UPDATE `awt_filters` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");
                    echo '<script type="text/javascript">window.location.href="filters.php?d=1"</script>';
                  }
          
  
  
  
  



    $query_json = mysqli_query($sql, "SELECT * FROM `awt_filters` WHERE `deleted` != '1' and `propcat_status` = 0");

    $array_data = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'id'     => $getdata_json->id,
                                'title'  => $getdata_json->title,
                                'logo'  => $getdata_json->logo,
                               
                             );
        $array_data[] = $master_data;

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/filters')) {
        mkdir('../json/filters', 0777, true);
    }

    file_put_contents('../json/filters/filters.json', $final_data);
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}
   
$query = mysqli_query($sql, "SELECT * FROM `awt_filters` WHERE deleted != '1'");
    
$count = mysqli_num_rows($query);


?>