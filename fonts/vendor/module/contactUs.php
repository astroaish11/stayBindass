<?php
$desc1 = '';
$desc2 = '';
$phone = '';
$email = '';
$eid = '';
$cdate = date('Y-m-d H:i:s');
$alertMessage = '';

if(isset($_POST['submit'])){

$eid = trim($_POST['eid']);
$eid = mysqli_real_escape_string($sql,$eid);
	
$email =  trim($_POST['email']);
$email = mysqli_real_escape_string($sql,$email);

$phone =  trim($_POST['phone']);
$phone = mysqli_real_escape_string($sql,$phone);

$desc1 = trim($_POST['head_office']);
$desc1 = mysqli_real_escape_string($sql,$desc1);

$desc2 = trim($_POST['branch_office']);
$desc2 = mysqli_real_escape_string($sql,$desc2);

	    /***************************  UPDATE ****************************/    


	mysqli_query($sql, "UPDATE `contact_us` SET `head_ofc_addr`='$desc1',`branch_ofc_addr`='$desc2',`mobile`='$phone',`support_email`='$email',`updated_date`='$cdate',`updated_by`='1' WHERE `id` = '$eid'");



	    /***************************  Json ****************************/    


    $query_json = mysqli_query($sql, "SELECT * FROM `contact_us` WHERE `deleted` != '1'");

    $array_data = array();
    $getdata_json = mysqli_fetch_object($query_json);

        $master_data = array(
                                'head_ofc_addr'    => $getdata_json->head_ofc_addr,
                                'branch_ofc_addr'  => $getdata_json->branch_ofc_addr,
                                'mobile'  => $getdata_json->mobile,
                                'support_email' => $getdata_json->support_email,
                             );
        $array_data[] = $master_data;

    

    $final_data = json_encode($array_data);

    if (!file_exists('../json/contact_us')) {
        mkdir('../json/contact_us', 0777, true);
    }

    file_put_contents('../json/contact_us/contact_us.json', $final_data);


	echo '<script type="text/javascript">window.location.href="contactUs.php?s=1"</script>';
}



if(isset($_GET['s'])){
	$alertMessage = '<div class="alert alert-success mt-2" role="alert">Data Updated Successfully</div>';
}

    /**************************** Edit **************************/

$query = mysqli_query($sql, "SELECT * FROM `contact_us` WHERE deleted != '1'");
$getdata = mysqli_fetch_object($query);
 
$eid = $getdata->id;
$email = $getdata->support_email;
$desc1 = $getdata->head_ofc_addr;
$desc2 = $getdata->branch_ofc_addr;
$phone = $getdata->mobile;

?>