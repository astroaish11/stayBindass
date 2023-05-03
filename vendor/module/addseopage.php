<?php 

$title = '';
$seotitle = '';
$desc = '';
$pid = '';
$alertMessage= '';
$created_date = date("Y-m-d H:i:s");



	
/*********************** Submit / Update ***************************************/

if(isset($_POST['submit'])) 
{
	$pid = $_GET['pid'];

	$title = trim($_POST['title']);
	$title = mysqli_real_escape_string($sql, $_POST['title']);

    $seotitle = trim($_POST['seotitle']);
	$seotitle = mysqli_real_escape_string($sql, $_POST['seotitle']);

	$desc = trim($_POST['desc']);
	$desc = mysqli_real_escape_string($sql,$_POST['desc']);




	 /*************************** INSERT UPDATE ****************************/   
     if($pid == ''){
        mysqli_query($sql,"INSERT INTO `seo_pages` (`title`, `seotitle`, `desc`,`created_date`,`created_by`) VALUES ('$title', '$seotitle', '$desc','$created_date','1')");
        
        echo '<script type="text/javascript">window.location.href="addseo_page.php?s=1"</script>';
    }
    else{

	mysqli_query($sql, "UPDATE `seo_pages` SET `title`='$title', `seotitle`='$seotitle', `desc`='$desc',`updated_by`='1', `updated_date`='$created_date' where id = '$pid'");

    echo '<script type="text/javascript">window.location.href="addseo_page.php?u=1"</script>';
        }

	   /***************************  Json ****************************/   


    $query_json = mysqli_query($sql, "SELECT * FROM `seo_pages` WHERE `deleted` != '1'");
    $array_data = array();

    while ($getdata_json = mysqli_fetch_object($query_json)){
    $master_data = array(

        'pagename'  => $getdata_json->title,
        'seotitle'  => $getdata_json->seotitle,
        'seodesc'  => $getdata_json->desc,
                        );

    $array_data[] = $master_data;
                };

    $final_data = json_encode($array_data);

    if (!file_exists('../json/seo_pages')) {
        mkdir('../json/seo_pages', 0777, true);
    }

    file_put_contents('../json/seo_pages/seo_pages.json', $final_data);

	echo '<script type="text/javascript">window.location.href="addseo_page.php?pid='.$pid.'&u=1";</script>';
}	

if(isset($_GET['pid'])) 
{
	$pid = $_GET['pid'];
	$getpage = mysqli_query($sql,"SELECT * from `seo_pages` where `id` = '$pid'");
	$getedata = mysqli_fetch_object($getpage);

	$title = $getedata->title;
    $seotitle = $getedata->seotitle;
	$desc = $getedata->desc;
	
}

    if(isset($_GET['s'])) {
        $alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Inserted Successfully</div>';
    }
    
     if(isset($_GET['u'])) {
       $alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Updated Successfully</div>';
     }


?>