<?php
$fullname = '';
$mobile = '';
$email = '';
$gender = '';
$address = '';
$describeYou = '';
$alertMessage= '';
$eid = '';
$cdate = date('Y-m-d H:i:s');
$eid = $_SESSION[SESSION]['loginuserid'];

if(isset($_POST['submit'])) {
   
     $fullname = trim($_POST['fullname']);
     $fullname = mysqli_real_escape_string($sql,$fullname);

     $mobile = trim($_POST['mobile']);
     $mobile = mysqli_real_escape_string($sql,$mobile);    

     $email = trim($_POST['email']);
     $email = mysqli_real_escape_string($sql,$email);

     $gender = trim($_POST['gender']);
     $gender = mysqli_real_escape_string($sql,$gender);
 
    $address = trim($_POST['address']);
    $address = mysqli_real_escape_string($sql, $address);

    $describeYou = trim($_POST['describeYou']);
    $describeYou = mysqli_real_escape_string($sql, $describeYou);

    $eid = trim($_POST['eid']);
    $eid = mysqli_real_escape_string($sql, $eid);

    

    /***************************  Update ****************************/

     
        mysqli_query($sql,"UPDATE `awt_registerUser` SET `fullname`='$fullname', `mobile`='$mobile',`email`='$email',`gender`='$gender',`address`='$address',`describeYou`='$describeYou',`updated_by`='1',`updated_date`='$cdate' WHERE `id`= '$eid'"); 

        echo '<script type="text/javascript">window.location.href="profile.php?u=1"</script>';


   /***************************  Json ****************************/

    $query_json = mysqli_query($sql, "SELECT * FROM `awt_registerUser` WHERE `deleted` != 1");
    $array_data = array();

    $getdata_json = mysqli_fetch_object($query_json);
    $master_data = array(

        'id'  => $getdata_json->id,
        'fullname'=> $getdata_json->fullname,
        'mobile'  => $getdata_json->mobile,
        'email'  => $getdata_json->email,
        'gender' => $getdata_json->gender,
        'address' => $getdata_json->address,
        'describeYou' => $getdata_json->describeYou
                        );

    $array_data[] = $master_data;

    $final_data = json_encode($array_data);

    if (!file_exists('../json/registerUser')) {
        mkdir('../json/registerUser', 0777, true);
    }

    file_put_contents('../json/registerUser/registerUser.json', $final_data);



    }


if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data updated Successfully</div>';

}


    /**************************** Edit **************************/

 //   $eid = $_SESSION[SESSION]['loginuserid'];
    $selectdata = mysqli_query($sql, "SELECT * FROM `awt_registerUser` WHERE `id` = '$eid'");      
    $getdata = mysqli_fetch_object($selectdata);
    
    $eid = $getdata->id;
    $fullname = $getdata->fullname;
    $mobile = $getdata->mobile;
    $email = $getdata->email;
    $gender = $getdata->gender;
    $address = $getdata->address;
    $describeYou = $getdata->describeYou;
  

?>