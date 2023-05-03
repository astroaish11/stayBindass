<?php
$title = '';
$slug = '';
$publishdate = '';
$author_name = '';
$blogImage = '';
$desc = '';
$seo_title = '';
$seo_keyword = '';
$seo_desc = '';
$uploadImage = '';
$cdate = date('Y-m-d H:i:s');
$path = "../upload/blog/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg", "JPG", "PNG", "GIF", "BMP", "JPEG", "webp", "WEBP");
if(isset($_POST['submit'])) {

    $title = trim($_POST['title']);
    $title = mysqli_real_escape_string($sql,$title);

    $slug = trim($_POST['slug']);
    $slug = mysqli_real_escape_string($sql,$slug);

    $publishdate = trim($_POST['publishdate']);
    $publishdate = date('Y-m-d',strtotime($publishdate));
    $publishdate = mysqli_real_escape_string($sql,$publishdate);

    $author_name = trim($_POST['author_name']);
    $author_name = mysqli_real_escape_string($sql,$author_name);

    $desc = trim($_POST['desc']);
    $desc = mysqli_real_escape_string($sql,$desc);

    $seo_title = trim($_POST['seo_title']);
    $seo_title = mysqli_real_escape_string($sql,$seo_title);

    $seo_keyword = trim($_POST['seo_keyword']);
    $seo_keyword = mysqli_real_escape_string($sql,$seo_keyword);

    $seo_desc = trim($_POST['seo_desc']);
    $seo_desc = mysqli_real_escape_string($sql,$seo_desc);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);



    $upload = $_FILES['uploadImage']['name']; 

    if($upload != '') {
        $lastDot = strrpos($upload, ".");
        $upload = str_replace(".", "", substr($upload, 0, $lastDot)) . substr($upload, $lastDot);
        list($txt, $ext) = explode(".", $upload);
        if(in_array($ext,$valid_formats)){
            $txt = str_replace(" ", "-", $txt);
            global $upload_image;
			$upload_image = $txt."-".time().".".$ext;

			$tmppath = $_FILES['uploadImage']['tmp_name'];	
			move_uploaded_file($tmppath, $path.$upload_image);
        }
        else {

        }
        $blogImage = $upload_image;
    }else {

		$blogImage = mysqli_real_escape_string($sql,$_POST['blogImage']);

	}

    if($eid == ''){
        mysqli_query($sql,"INSERT INTO `awt_blog` (`title`,`slug`,`publishdate`,`author_name`,`image`,`description`,`seo_title`,`seo_keyword`,`seo_desc`,`created_date`,`created_by`) VALUES ('$title','$slug','$publishdate','$author_name','$blogImage','$desc','$seotitle','$seokeyword','$seo_desc','$cdate','1')");
        
        echo '<script type="text/javascript">window.location.href="add_blog.php?s=1"</script>';
    }
    else{
        mysqli_query($sql,"UPDATE `awt_blog` SET `title`='$title',`slug`='$slug',`publishdate`='$publishdate',`author_name`='$author_name',`image`='$blogImage',`description`='$desc',`seo_title`='$seo_title',`seo_keyword`='$seo_keyword',`seo_desc`='$seo_desc',`updated_by`='1',`updated_date`='$cdate' WHERE id = '$eid'");
        echo '<script type="text/javascript">window.location.href="add_blog.php?u=1"</script>';
    }


        /***************************  Json ****************************/    


    $query_json = mysqli_query($sql, "SELECT * FROM `awt_blog` WHERE `deleted` != '1'");

    $array_data = array();
    $array_data2 = array();
    while($getdata_json = mysqli_fetch_object($query_json)){

        $master_data = array(
                                'title'    => $getdata_json->title,
                                'slug'     => $getdata_json->slug,
                                'publishdate'  => $getdata_json->publishdate,
                                'author_name' => $getdata_json->author_name,
                                'image'    => $getdata_json->image,
                                'description'  => $getdata_json->description,
                                'seo_title'    => $getdata_json->seo_title,
                                'seo_keyword'  => $getdata_json->seo_keyword,
                                'seo_desc'    => $getdata_json->seo_desc,
                             );
        $array_data[] = $master_data;
        $array_data2['abc'] = $master_data;

        $final_data2 = json_encode($array_data2[$getdata_json->slug]);

        if (!file_exists('../json/blogdetails')) {
            mkdir('../json/blogdetails', 0777, true);
        }

        file_put_contents('../json/blogdetails/'.$getdata_json->slug.'.json', $final_data);

    }

    $final_data = json_encode($array_data);

    if (!file_exists('../json/blog')) {
        mkdir('../json/blog', 0777, true);
    }

    file_put_contents('../json/blog/blog.json', $final_data);


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
    
    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_blog` WHERE `id` = '$eid'");
    
    $getdata = mysqli_fetch_object($selectdata);
    
    $title = $getdata->title;
    $slug = $getdata->slug;
    $eid = $getdata->id;
    //$publishdate = $getdata->publishdate;
    $publishdate = date('Y-m-d',strtotime($getdata->publishdate));
    $author_name = $getdata->author_name;
    $blogImage = $getdata->image;
    $description = $getdata->description;
    $eid = $getdata->id;
    $seo_title = $getdata->seo_title;
    $seo_keyword = $getdata->seo_keyword;
    $seo_desc = $getdata->seo_desc;
}

if(isset($_GET['did'])){
    $did = trim($_GET['did']);
    $did = mysqli_real_escape_string($sql,$did);

    mysqli_query($sql,"UPDATE `awt_blog` SET `deleted`='1',`updated_date`='$cdate',`updated_by`='1' WHERE `id`='$did'");
    echo '<script type="text/javascript">window.location.href="add_blog.php?d=1"</script>';
}

if(isset($_GET['d'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Deleted Successfully</div>';
}
   
$query = mysqli_query($sql, "SELECT * FROM `awt_blog` WHERE deleted != '1'");
    
$count = mysqli_num_rows($query);


?>