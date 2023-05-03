<?php 
/*$price = '';
$checkin =  '';
$checkout =  '';
$adults = '';
$children = '';
$room = '';
$cdate = date("Y-m-d H:i:s");

//Booking Form posting from details-side.php
if(isset($_POST['submitbtn'])){

$price = trim($_POST['price']);
$price =mysqli_real_escape_string($sql,$price);

$checkin = trim($_POST['checkin']);
$checkin =mysqli_real_escape_string($sql,$checkin);

$checkout = trim($_POST['checkout']);
$checkout =mysqli_real_escape_string($sql,$checkout);

$adults = trim($_POST['adults']);
$adults =mysqli_real_escape_string($sql,$adults);

$children = trim($_POST['children']);
$children =mysqli_real_escape_string($sql,$children);

$room = trim($_POST['room']);
$room = mysqli_real_escape_string($sql,$room);

 $prop_slug = trim($_GET['slug']);
 $prop_slug = mysqli_real_escape_string($sql,$prop_slug);

 $get_proid = mysqli_query($sql,"SELECT `title`, `id`,`address` from `addproperty` where `slug` = '$prop_slug'");
 $getproperty = mysqli_fetch_object($get_proid);
 $prop_name = $getproperty->title;
 $prop_id = $getproperty->id;
 $address = $getproperty->address;

mysqli_query($sql,"INSERT INTO `property_booking` (`prop_slug`,`prop_name`,`prop_id`,`address`,`price`,`checkin`,`checkout`,`adults`,`children`,`room`,`created_date`,`created_by`) VALUES ('$prop_slug', '$prop_name', '$prop_id', '$address','$price', '$checkin','$checkout', '$adults','$children', '$room','$cdate','1')");

$last_id = mysqli_insert_id($sql);

 echo '<script type="text/javascript">window.location.href="'.WEBLINK.'booking-pages.php?s='.$last_id.'"</script>';

}

if(isset($_GET['s'])){

     $getid = trim($_GET['s']);

     $query = mysqli_query($sql,"SELECT * from `property_booking` where `id` = '$getid'");
     $getdata1 = mysqli_fetch_object($query);
     $checkin = $getdata1->checkin;
     $checkout = $getdata1->checkout;
     $adults = $getdata1->adults;
     $children = $getdata1->children;
     $prop_slug = $getdata1->prop_slug;

}*/


?>