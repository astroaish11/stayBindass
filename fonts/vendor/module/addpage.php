<?php 

$title = '';
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

	$desc = trim($_POST['desc']);
	$desc = mysqli_real_escape_string($sql,$_POST['desc']);




	 /*************************** INSERT UPDATE ****************************/   
     if($pid == ''){
        mysqli_query($sql,"INSERT INTO `static_pages` (`title`, `desc`,`created_date`,`created_by`) VALUES ('$title', '$desc','$created_date','1')");
        
        echo '<script type="text/javascript">window.location.href="add_page.php?s=1"</script>';
    }
    else{

	mysqli_query($sql, "UPDATE `static_pages` SET `title`='$title',`desc`='$desc',`updated_by`='1', `updated_date`='$created_date' where id = '$pid'");

    echo '<script type="text/javascript">window.location.href="add_page.php?u=1"</script>';
        }

	   /***************************  Json ****************************/   


    $query_json = mysqli_query($sql, "SELECT * FROM `static_pages` WHERE `deleted` != '1'");
    $array_data = array();

    while ($getdata_json = mysqli_fetch_object($query_json)){
    $master_data = array(

        'title'  => $getdata_json->title,
        'desc'  => $getdata_json->desc,
                        );

    $array_data[] = $master_data;
                };

    $final_data = json_encode($array_data);

    if (!file_exists('../json/static_pages')) {
        mkdir('../json/static_pages', 0777, true);
    }

    file_put_contents('../json/static_pages/static_pages.json', $final_data);

	
	
	echo '<script type="text/javascript">window.location.href="add_page.php?pid='.$pid.'&u=1";</script>';
}	

if(isset($_GET['pid'])) 
{
	$pid = $_GET['pid'];
	$getpage = mysqli_query($sql,"SELECT * from `static_pages` where `id` = '$pid'");
	$getedata = mysqli_fetch_object($getpage);

	$title = $getedata->title;
	$desc = $getedata->desc;
	
}

    if(isset($_GET['s'])) {
        $alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Inserted Successfully</div>';
    }
    
     if(isset($_GET['u'])) {
       $alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Updated Successfully</div>';
     }

    // $getdata = mysqli_query($sql, "SELECT * FROM `static_pages` where deleted != '1'"); 
    // $count = mysqli_num_rows($getdata);


?>