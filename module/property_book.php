<?php 
$price = '';
$prop_slug = '';
$checkin =  '';
$checkout =  '';
$adults = '';
$children = '';
$room = '';
$upload_image = '';
$mealdesc ='';
$property_address = '';
$property_image = '';
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


if($_SESSION['dummy_bookingid']){

     $getid = $_SESSION['dummy_bookingid'];

     $query = mysqli_query($sql,"SELECT pb.*, am.*, ap.`uploadimage`, d.`slug` as dest_slug from `property_booking` as pb 
     left join `awt_meal` as am on am.v_id = pb.prop_id
     left join `addproperty` as ap on ap.id = pb.prop_id
     left join `destination_master` as d on d.id = ap.destination
     left join `awt_registerUser` as ru on ru.id = pb.userID
     where pb.id = '$getid'");

     $getdata1 = mysqli_fetch_object($query);

     $upload_image = $getdata1->upload_image;
     $mealdesc = $getdata1->short_desc;
     $checkin = $getdata1->checkin;
     $checkout = $getdata1->checkout;
     $adults = $getdata1->adults;
     $children = $getdata1->children;
     $totalperson = $adults+$children;
     $prop_slug = $getdata1->prop_slug;
     $property_name = $getdata1->prop_name;
     $property_address = $getdata1->address;
     $property_image = $getdata1->uploadimage;
     $userName = $getdata1->fullname;
     $userEmail = $getdata1->email;
     $userMobile = $getdata1->mobile;
     $adult1 = $getdata1->adult1;
     $child1 = $getdata1->child1;
     $adult2 = $getdata1->adult2;
     $child2 = $getdata1->child2;
     $adult3 = $getdata1->adult3;
     $child3 = $getdata1->child3;
     $adult4 = $getdata1->adult4;
     $child4 = $getdata1->child4;
     $dest_slug = $getdata1->dest_slug;
     $subtotalprice = $getdata1->price;
     $nights = $getdata1->nights;
     $pernightPrice = $subtotalprice/$nights;
     $gstAmt = $subtotalprice*12/100;
     $gradtotalAmt = $subtotalprice+$gstAmt;
     $perpersonAmt = $gradtotalAmt/$totalperson;

     if($nights > 1){
          $night = $nights.' nights';
     }else{
          $night = $nights.' night';
     }

}else{

     echo '<script type="text/javascript">window.location.href="'.WEBLINK.'";</script>';

}

function stateLisitingBook($sql){

     $sizequery = mysqli_query($sql, "SELECT * FROM `awt_states`");

     while($datasizequery = mysqli_fetch_object($sizequery)){

       echo '<div class="select__options__button stateclick" data-id="'.$datasizequery->id.'" data-state="'.$datasizequery->name.'">'.$datasizequery->name.'</div>';

     }

}

?>