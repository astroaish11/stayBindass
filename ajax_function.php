<?php
include('config.php');
include('function.php');


/*
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS, post, get');
header("Access-Control-Max-Age", "3600");
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header("Access-Control-Allow-Credentials", "true");*/

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

/* Client Address List */


if (isset($_POST['submit'])) {
	$stateID = $_POST['state'];
	$query = mysqli_query($sql, "SELECT `state`, `city` FROM `city_master` WHERE `state` = '$stateID' and `deleted` != 1");
	echo '<option value="">Select City </option>';
	while ($listdata = mysqli_fetch_object($query)) {
		echo '<option value="' . $listdata->id . '">' . $listdata->name . '</option>';
	}
}


/* Register form submit */

if (isset($_POST['contactFormSubmit'])) {



	$contactfullname = $_POST['contactFormSubmit'];
	$contactmobile = $_POST['contactmobile'];
	$contactEmailid = $_POST['contactEmailid'];
	$contactPassword = $_POST['contactPassword'];
	$contactconfirmPassword = $_POST['contactconfirmPassword'];
	$mobile_len = strlen($contactmobile);
	$cdate = date('Y-m-d H:i:s');
	$errorMsg = '';
	$allok = 1;
	$printdata = 2;

	//password validation

	if ($contactPassword == '') {

		$errorMsg = 'Please enter a password.';
		$allok = 0;

	} else {
		if (strlen($contactPassword) < 6) {
			$errorMsg = 'Please enter password of minimum 6 characters.';
			$allok = 0;
		}
	}


	//Confirm password validation

	if ($contactconfirmPassword == '') {

		$errorMsg = 'Please enter Confirm  password.';
		$allok = 0;

	} else {
		if (strlen($contactconfirmPassword) < 6) {
			$errorMsg = 'Please enter Confirm password of minimum 6 characters.';
			$allok = 0;
		}
	}




	// Fullname Validation
	if ($contactfullname == '') {
		$errorMsg = 'Please enter a fullname.';
		$allok = 0;
	} else {
		if (preg_match("/^[a-zA-Z -]+$/", $contactfullname) === 0) {
			$errorMsg = 'Please enter a only letters.';
			$allok = 0;
		}
	}


	// Mobile Validation
	if ($contactmobile == '') {
		$errorMsg = 'Please enter a Mobile Number.';
		$allok = 0;
	} else {

		if (preg_match("/^[0-9]+$/", $contactmobile) === 0) {
			$errorMsg = 'Please enter a valid mobile number.';
			$allok = 0;
		} else {
			if ($mobile_len != 10) {
				$errorMsg = 'Please enter a valid mobile number.';
				$allok = 0;
			}
		}
	}



	// Emailid Validation
	if ($contactEmailid != '') {

		if (filter_var($contactEmailid, FILTER_VALIDATE_EMAIL)) {

		} else {

			$errorMsg = 'Please enter a valid email address.';
			$allok = 0;

		}

	} else {

		$errorMsg = 'Please enter a email address.';
		$allok = 0;

	}


	if ($allok == 1) {


		//mysqli_query($sql, "INSERT INTO `awt_registerUser`(`fullname`, `email`,`password`,`created_date`) VALUES ( '$contactfullname', '$contactEmailid','$contactPassword','$cdate')");


		//check
		$queryselect = mysqli_query($sql, "SELECT * from `awt_registerUser` where `email` = '$contactEmailid'");
		$count1 = mysqli_num_rows($queryselect);
		if ($count1 > 0) {
			$printdata = 0;
		} else {
			$printdata = 1;
			mysqli_query($sql, "INSERT INTO `awt_registerUser`(`fullname`, `email`,`mobile`,`password`,`created_date`) VALUES ( '$contactfullname', '$contactEmailid', '$contactmobile','$contactPassword','$cdate')");

			echo '<script type="text/javascript">window.location.href="' . $CurPageURL . '"</script>';
		}
	}


	if ($allok == 1) {
		//echo 1;
		if ($printdata == 1) {

		} else {
			$errorMsg = "Email ID Already Exists";
			echo $errorMsg;
		}
	} else {
		echo $errorMsg;
	}

}


/* Login form submit */

// if(isset($_SESSION[SESSION])) {
//     echo '<script>window.location.href="'.WEBLINK.'index.php";</script>';
// }


if (isset($_POST['contactLoginSubmit'])) {

	$contactEmailid1 = $_POST['contactLoginSubmit'];
	$contactPassword1 = $_POST['contactPassword1'];
	$cdate = date('Y-m-d H:i:s');
	$errorMsg = '';
	$allok = 1;

	//password validation

	if ($contactPassword1 == '') {

		$errorMsg = 'Please enter a password.';
		$allok = 0;

	}

	// Emailid Validation
	if ($contactEmailid1 != '') {

		if (filter_var($contactEmailid1, FILTER_VALIDATE_EMAIL)) {

		} else {

			$errorMsg = 'Please enter a valid email address.';
			$allok = 0;

		}

	} else {

		$errorMsg = 'Please enter a email address.';
		$allok = 0;

	}

	if ($allok == 1) {

		$query = mysqli_query($sql, "SELECT * FROM `awt_registerUser` where `email`='$contactEmailid1' and `password`='$contactPassword1'");

		$getdata = mysqli_fetch_object($query);
		$userid = $getdata->id;
		$username = $getdata->fullname;
		$userEmail = $getdata->email;

		$userdt = array('loginuserid' => $userid, 'name' => $username, 'email' => $userEmail);

		$count = mysqli_num_rows($query);

		if ($count > 0) {

			if (!isset($_SESSION[SESSION])) {
				$_SESSION[SESSION] = array();
				$_SESSION[SESSION] = $userdt;
			}

			echo 1;
		
		}else{

			echo 'Incorrect Credentials';

		}

	} else {

		echo $errorMsg;

	}

	//echo "hello";
}


/*email id exists*/

// if (isset($_POST['checkemailidExists'])) {

// 	$contactEmailid2 = $_POST['checkemailidExists'];
// 	$errorMsg = '';
// 	$allok1 = 1;

// 	// Emailid Validation
// 	if ($contactEmailid2 != '') {

// 		if (filter_var($contactEmailid2, FILTER_VALIDATE_EMAIL)) {

// 		} else {

// 			$errorMsg = 'Please enter a valid email address.';
// 			$allok1 = 0;

// 		}

// 	} else {

// 		$errorMsg = 'Please enter a email address.';
// 		$allok1 = 0;

// 	}


// 	if ($allok1 == 1) {

// 		// $query = mysqli_query($sql, "SELECT `id` FROM `awt_registerUser` where `email`='$contactEmailid'");
// 		// $count = mysqli_num_rows($query);
// 		// if ($count > 0) 
// 		// 	echo "0"; // email exists
//  		// else
//      	// 	 echo "1"; // email doesn't exists

// 		echo "0";
// 	}
// 	else
// 	{
// 		echo "1";
// 	}
// }






/* Instant Call submit */

if (isset($_POST['instantSubmit'])) {

	$mobile = trim($_POST['instantSubmit']);
	//$mobile_len = strlen($mobile);
	$cdate = date('Y-m-d H:i:s');
	$errorMsg = '';
	$allok = 1;


	if ($allok == 1) {

		mysqli_query($sql, "INSERT INTO `awt_instantcall`(`phone`,`created_date`) VALUES ( '$mobile','$cdate')");

	}

	if ($allok == 1) {
		echo 1;
	} else {
		echo 0;
	}

}


/* Request Call */

if (isset($_POST['RequestFormSubmit'])) {

	$propertyId = $_POST['RequestFormSubmit'];
	$fullname = $_POST['fullname'];
	$emailid = $_POST['emailid'];
	$mobile = $_POST['mobile'];
	$guest = $_POST['guest'];
	$checkindate = $_POST['checkindate'];
	$checkoutdate = $_POST['checkoutdate'];
	$cdate = date('Y-m-d H:i:s');
	$allok = 1;

	// Fullname Validation
	if ($fullname == '') {
		$errorMsg = 'Please enter a fullname.';
		$allok = 0;
	} else {
		if (preg_match("/^[a-zA-Z -]+$/", $fullname) === 0) {
			$errorMsg = 'Please enter a only letters.';
			$allok = 0;
		}
	}

	// Emailid Validation
	if ($emailid != '') {

		if (filter_var($emailid, FILTER_VALIDATE_EMAIL)) {

		} else {

			$errorMsg = 'Please enter a valid email address.';
			$allok = 0;

		}

	} else {

		$errorMsg = 'Please enter a email address.';
		$allok = 0;

	}

	if ($allok == 1) {
		mysqli_query($sql, "INSERT into `awt_requestcallback` (`property_id`,`checkindate`,`checkoutdate`,`guests`,`fullname`,`email`,`mobile`,`created_date`) values ('$propertyId','$checkindate','$checkoutdate','$guest','$fullname','$emailid','$mobile','$cdate')");

	}

	if ($allok == 1) {
		//mail send for otp
		ini_set("sendmail_from", "support@staybindass.com");
		$to = "aishp0403@gmail.com"; //change receiver address  
		$subject = "Request callback mail";
		$message = "
				 <html>
				  <head>
				  <title>Request callback</title>
				  </head>
				  <body>
				  <p>Request callback mail received</p>
				  </body>
				 </html>";
		// $header = "From:info@staybindass.com \r\n";  

		$header = "From:info@staybindass.com \r\n";
		$header .= "MIME-Version: 1.0 \r\n";
		$header .= "Content-type: text/html;charset=UTF-8 \r\n";

		$result = mail($to, $subject, $message, $header);

		echo 1;
	} else {
		echo $errorMsg;
	}

}


/*Add To Wishlist*/

if (isset($_POST['addToWishlist'])) {
	$prop_id = $_POST['addToWishlist'];
	$user_id = $_POST['userid'];
	$cdate = date('Y-m-d H:i:s');
	//$query = mysqli_query($sql, "INSERT into `wishlist_tbl`(`userid`,`property_id`,`created_date`) VALUES ('1','$prop_id','$cdate')");
	//$query = mysqli_query($sql, "INSERT into `wishlist_tbl`(`userid`,`property_id`,`created_date`) VALUES ('$user_id','$prop_id','$cdate')");

	$query = mysqli_query($sql, "INSERT into `wishlist_tbl`(`userid`,`property_id`,`created_date`) VALUES ('$user_id','$prop_id','$cdate')");

	//echo "INSERT into `wishlist_tbl`(`userid`,`property_id`,`created_date`) VALUES ('$user_id','$prop_id','$cdate'";

}

/*Remove from Wishlist*/

if (isset($_POST['removeWishlist'])) {
	
	$prop_id = $_POST['removeWishlist'];
	$user_id = $_POST['userid'];
	$cdate = date('Y-m-d H:i:s');
	//$query = mysqli_query($sql, "DELETE from `wishlist_tbl` where `property_id` = '$prop_id' and `userid`='1'");
	$query = mysqli_query($sql, "DELETE from `wishlist_tbl` where `property_id` = '$prop_id' and `userid`='$user_id'");
}


if (isset($_POST['checkAvailability'])) {

	$checkin = $_POST['checkAvailability'];
	$checkin = date('Y-m-d', strtotime($checkin));
	$checkout = $_POST['checkout'];
	$checkout = date('Y-m-d', strtotime($checkout));
	$propertyid = $_POST['propertyid'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	$room = $_POST['rooms'];

	if (isset($_SESSION[SESSION])) {
		$userID = $_SESSION[SESSION]['loginuserid'];
	} else {
		$userID = 0;
	}

	$cdate = date('Y-m-d H:i:s');

	/*$checkoutNew = date('Y-m-d', strtotime($checkout. ' -1 days'));

	$getdate_query = mysqli_query($sql, "SELECT * FROM `awt_property_price` WHERE `select_date` >= '$checkin' and `select_date` <= '$checkoutNew' and `property_id`='$propertyid'");
	
	$property_price = 0;
	$nights=0;
	while ($list_data = mysqli_fetch_object($getdate_query)) {
		$property_price = $property_price+$list_data->property_price;
		$nights++;
	}*/

	$date1 = strtotime($checkin);  
    $date2 = strtotime($checkout);  
      
    $diff = abs($date2 - $date1);  
      
    $years = floor($diff / (365*60*60*24));  
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    $nights = $days;

    $todayprice=0;
	for($i=1; $i<=$days; $i++){

		if($i == 1){

			$query22 = mysqli_query($sql, "SELECT * FROM `awt_property_price` where `select_date` = '$checkin' and  `property_id` = '$propertyid'");
	  		$count22 = mysqli_num_rows($query22);
			if($count22 > 0) {
				$getdata22 = mysqli_fetch_object($query22);
				$todayprice = $todayprice+$getdata22->property_price;
				$guestprice = $getdata22->guest_price;
			} else {
				$day = strtolower(date("l",strtotime($checkin)));
				$guestday = strtolower('guest' . $day);
				$query33 = mysqli_query($sql, "SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$propertyid'");
				$count33 = mysqli_num_rows($query33);
				$getdata33 = mysqli_fetch_object($query33);
				if($count33 > 0) {
				  $todayprice = $todayprice+$getdata33->todayprice;
				  $guestprice = $getdata33->guestprice;
				}
			}

	  	}else{

	  		$checkin = date('Y-m-d', strtotime($checkin. ' +'.$i.' days'));

	  		$query22 = mysqli_query($sql, "SELECT * FROM `awt_property_price` where `select_date` = '$checkin' and  `property_id` = '$propertyid'");
	  		$count22 = mysqli_num_rows($query22);
			if($count22 > 0) {
				$getdata22 = mysqli_fetch_object($query22);
				$todayprice = $todayprice+$getdata22->property_price;
				$guestprice = $getdata22->guest_price;
			} else {
				$day = strtolower(date("l",strtotime($checkin)));
				$guestday = strtolower('guest' . $day);
				$query33 = mysqli_query($sql, "SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$propertyid'");
				$count33 = mysqli_num_rows($query33);
				$getdata33 = mysqli_fetch_object($query33);
				if($count33 > 0) {
				  $todayprice = $todayprice+$getdata33->todayprice;
				  $guestprice = $getdata33->guestprice;
				}
			}

	  	}

	}

	$property_price = $todayprice;

	$property_query = mysqli_query($sql, "SELECT * FROM `addproperty` WHERE `id`='$propertyid'");
	$propertyData = mysqli_fetch_object($property_query);
	$vendorID = $propertyData->property_by;
	$prop_slug = $propertyData->slug;
	$prop_name = $propertyData->title;
	$prop_id = $propertyData->id;
	$address = $propertyData->address;
	$villaQuantity = $propertyData->villaQuantity;


	$confcount = 0;
	$tempcount = 0;
	$fcount = 0;

	$cpropertyquery = mysqli_query($sql, "SELECT `id` FROM `confirm_booking` WHERE `prop_id` = '$propertyid' and (`checkin` >= '$checkin' || `checkout` <= '$checkout')");
    $confcount = mysqli_num_rows($cpropertyquery);

    $tpropertyquery = mysqli_query($sql, "SELECT `id` FROM `property_booking` WHERE `prop_id` = '$propertyid' and (`checkin` >= '$checkin' || `checkout` <= '$checkout')");
    $tempcount = mysqli_num_rows($tpropertyquery);

    /*$bpropertyquery = mysqli_query($sql, "SELECT `id` FROM `awt_blockDates` WHERE `property_id` = '$propertyid' and `checkin` >= '$checkin' and `checkout` <= '$checkout'");
    $count = mysqli_num_rows($bpropertyquery);*/

    $fcount = $confcount + $tempcount;

    if ($villaQuantity > $fcount) {

		if($property_price > 0){

			$queryca = mysqli_query($sql, "INSERT INTO `property_booking`(`userID`, `vendorID`, `prop_slug`, `prop_name`, `prop_id`, `address`, `price`, `checkin`, `checkout`, `adults`, `children`, `room`, `nights`, `created_by`, `created_date`) VALUES ('$userID','$vendorID','$prop_slug','$prop_name','$prop_id','$address','$property_price','$checkin','$checkout','$adults','$children','$room','$nights','1','$cdate')");
			$bookingid = mysqli_insert_id($sql);
			$_SESSION['dummy_bookingid'] = $bookingid;

			echo 1;

		}else{

			echo 2;

		}

	}else{

		echo 3;

	}

}


//category wise filter properties

if (isset($_POST['property_filter_categorywise'])) {
	$catdivid = $_POST['property_filter_categorywise'];

	$query_filter_property = mysqli_query($sql, "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,d.slug as destinationslug FROM `addproperty` as a left join `home_master` as h on h.id=a.h_type left join `room_master` as r on r.id=a.r_type left join `pool_master` as p on p.id=a.pool left join `night_master` as n on n.id=a.nights left join `destination_master` as d on d.id=a.destination left join `city_master` as c on c.id=a.city left join `awt_states` as s on s.id=a.state WHERE FIND_IN_SET('$catdivid',a.propcat_ids) > 0 and a.deleted !='1' and a.adminApproval = '1' and a.villaStatus!='1' ORDER by RAND() LIMIT 24;");

	//echo "SELECT a.*,c.city as cityname,s.name as statename,h.home as homename,r.room as roomname,p.pool as poolname,n.night as nightname,d.title as destinationname,d.slug as destinationslug FROM `addproperty` as a left join `home_master` as h on h.id=a.h_type left join `room_master` as r on r.id=a.r_type left join `pool_master` as p on p.id=a.pool left join `night_master` as n on n.id=a.nights left join `destination_master` as d on d.id=a.destination left join `city_master` as c on c.id=a.city left join `awt_states` as s on s.id=a.state WHERE FIND_IN_SET('$catdivid',a.propcat_ids) > 0 and a.deleted !='1' and a.adminApproval = '1' and a.villaStatus!='1' ORDER by RAND() LIMIT 24";
	$data = "";

	$property_count = mysqli_num_rows($query_filter_property);

	if($property_count==0)
	{
		$data = "<div style='color: #ab2440;'>Property not available...</div>";
	}
	else{
		while ($approve = mysqli_fetch_object($query_filter_property)) {
			$data .= '<div class="col-lg-3 col-sm-6 catdivall '.$catdivid.'">
							<a href="property/'.$approve->destinationslug.'/'.$approve->slug.'"
							   class="hotelsCard -type-1 ">
							   <div class="hotelsCard__image">
								  <div class="cardImage ratio ratio-1:1 rounded-4">
									 <div class="cardImage__content">
										<img class="rounded-4 col-12 js-lazy"
										   src="upload/property_thumbnail/'.$approve->uploadimage.'" alt="image">
									 </div>
								  </div>
							   </div>
							   <div class="hotelsCard__content mt-10 pl-5">
								  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
									 <span>
										'.$approve->title.'
									 </span>
								  </h4>
								  <p class="text-light-1 lh-14 text-14 mt-5"><i class="icon-location-2 text-14 mr-5"></i>
									 '.$approve->cityname.',
									 '.ucfirst(strtolower($approve->statename)).', India
								  </p>
								  <!-- <p class="text-14 mt-5">
									 '.$approve->minguest.' -
									 '.$approve->maxguest.' Guests |
									 '.$approve->roomname.' |
									 '.$approve->poolname.'
								  </p> -->';
	
			if ($approve->maxguest != '' && $approve->maxguest != 0) {
				$data .= '<p class="text-14 mt-5">' . $approve->minguest . ' - ' . $approve->maxguest . ' Guest | ' . $approve->roomname . ' | ' . $approve->poolname . ' </p>';
			} else {
				$data .= '<p class="text-14 mt-5">' . $approve->minguest . ' Guest | ' . $approve->roomname . ' | ' . $approve->poolname . ' </p>';
			}
	
			$price = propertyPerNightPrice($sql, $approve->id);
	
			$data .= '</div>
							</a>
							<div class="text-20 lh-12 fw-600 mt-5">
							<span class="text-14 fw-500">₹ '.number_format($price).' / night
							   </span> <a href="villa-details1.php#Rates" data-x-click="mapFilter"
								  class="text-blue-1 text-13">Rates &amp; Charges</a>
							</div>
							<div class="text-12 text-light-1 mb-10">(excl. taxes & charges)</div>
						 </div>';
		}
	}
	

	echo $data;
}


/*if (isset($_POST['propertybooking'])) {

	$book_fullname = $_POST['propertybooking'];
	$book_email = $_POST['book_email'];
	$book_mobileno = $_POST['book_mobileno'];
	$book_city = $_POST['book_city'];
	$book_special_request = $_POST['book_special_request'];
	$book_compname = $_POST['book_compname'];
	$book_gst = $_POST['book_gst'];
	$book_address = $_POST['book_address'];
	$bookingId = $_POST['bookingId'];

	$property_query = mysqli_query($sql, "SELECT * FROM `property_booking` WHERE `id`='$bookingId'");
	$propertyData = mysqli_fetch_object($property_query);
	$vendorID = $propertyData->property_by;
	$prop_slug = $propertyData->slug;
	$prop_name = $propertyData->title;
	$prop_id = $propertyData->id;
	$address = $propertyData->address;
	$villaQuantity = $propertyData->villaQuantity;

	$queryca = mysqli_query($sql, "INSERT INTO `confirm_booking`(`userID`, `vendorID`, `prop_slug`, `prop_name`, `prop_id`, `address`, `price`, `checkin`, `checkout`, `adults`, `children`, `room`, `nights`, `created_by`, `created_date`) VALUES ('$userID','$vendorID','$prop_slug','$prop_name','$prop_id','$address','$property_price','$checkin','$checkout','$adults','$children','$room','$nights','1','$cdate')");
	$bookingid = mysqli_insert_id($sql);

	$_SESSION['dummy_bookingid'] = $bookingid;

}*/


if (isset($_POST['propertybooking'])) {

	$book_fullname = $_POST['propertybooking'];
	$book_email = $_POST['book_email'];
	$book_mobileno = $_POST['book_mobileno'];
	$mobile_len = strlen($book_mobileno);
	$book_city = $_POST['book_city'];
	$book_special_request = $_POST['book_special_request'];
	$book_compname = $_POST['book_compname'];
	$book_gst = $_POST['book_gst'];
	$book_address = $_POST['book_address'];
	$book_state = $_POST['book_state'];
	$book_state_id = $_POST['book_state_id'];
	$bookingId = $_POST['bookingId'];
	$cdate = date('Y-m-d H:i:s');
	$allok = 1;

	$property_query = mysqli_query($sql, "SELECT b.*, p.`uploadimage` FROM `property_booking` as b
														left join `addproperty` as p on p.`id` = b.`prop_id` 	
														WHERE b.`id`='$bookingId'");
	$propertyData = mysqli_fetch_object($property_query);
	$vendorID = $propertyData->vendorID;
	$prop_slug = $propertyData->prop_slug;
	$prop_name = $propertyData->prop_name;
	$prop_id = $propertyData->prop_id;
	$address = $propertyData->address;
	$checkin = $propertyData->checkin;
	$checkout = $propertyData->checkout;
	$checkin_new = date('d/m/Y', strtotime($propertyData->checkin));
   $checkout_new = date('d/m/Y', strtotime($propertyData->checkout));
	$adults = $propertyData->adults;
	$children = $propertyData->children;
	$room = $propertyData->room;
	$property_image = $propertyData->uploadimage;
	$subtotalprice = $propertyData->price;
	$nights = $propertyData->nights;
	$pernightPrice = $subtotalprice/$nights;
	$gst=12;
	$gstAmt = $subtotalprice*$gst/100;
	$gradtotalAmt = $subtotalprice+$gstAmt;

	// Fullname Validation
	if($book_fullname == ''){
		$errorMsg = 'Please enter a fullname.';
		$allok = 0;
	}else{
		if(preg_match("/^[a-zA-Z -]+$/", $book_fullname) === 0){
			$errorMsg = 'Please enter a only letters.';
			$allok = 0;
		}
	}


	// Emailid Validation
	if($book_email != ''){
		if (filter_var($book_email, FILTER_VALIDATE_EMAIL)) {

	    }else{
	    	$errorMsg = 'Please enter a valid email address.';
			$allok = 0;
	    }		
	}else{
		$errorMsg = 'Please enter a email address.';
		$allok = 0;
	}

	// Mobile Number Validation
	if($book_mobileno == ''){
		$errorMsg = 'Please enter a valid mobile number.';
		$allok = 0;
	}else{
		if(preg_match("/^[0-9]+$/", $book_mobileno) === 0){
			$errorMsg = 'Please enter a valid mobile number.';
			$allok = 0;
		}else{
			if($mobile_len != 10){
				$errorMsg = 'Please enter a valid mobile number.';
				$allok = 0;
			}
		}
	}

	// City Validation
	if($book_city == ''){
		$errorMsg = 'Please enter a city.';
		$allok = 0;
	}

	// // GST Validation
	// if($book_gst != ''){
	// 	if(preg_match("/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}[0-9A-Z]{1}$/", $book_gst) === 0){
	// 		$errorMsg = 'Please enter a valid GST no.';
	// 		$allok = 0;
	// 	}
	// }

	// State Validation
	if($book_state_id == 0){
		$errorMsg = 'Please select a state.';
		$allok = 0;
	}

	if($allok == 1){

		$queryca = mysqli_query($sql, "INSERT INTO `confirm_booking`(`userID`, `vendorID`, `prop_slug`, `prop_name`, `prop_id`, `address`, `price`, `gstamt`, `totalamt`, `gst`, `checkin`, `checkout`, `adults`, `children`, `room`, `nights`, `guest_name`, `guest_email`, `guest_mobile`, `guest_city`, `guest_special_request`, `guest_companyname`, `guest_gst`, `guest_address`, `guest_state`, `guest_state_id`, `bookingId`, `confirmed`, `created_by`, `created_date`) VALUES ('$userID', '$vendorID', '$prop_slug', '$prop_name', '$prop_id', '$address', '$subtotalprice', '$gstAmt', '$gradtotalAmt', '$gst', '$checkin', '$checkout', '$adults', '$children', '$room', '$nights', '$book_fullname', '$book_email', '$book_mobileno', '$book_city', '$book_special_request', '$book_compname', '$book_gst', '$book_address', '$book_state', '$book_state_id', '$bookingId', '1', '1', '$cdate')");
		$bookingid = mysqli_insert_id($sql);

		$bookingNo = 'SB'.date('Y').date('m').'-'.$bookingid;

		mysqli_query($sql, "UPDATE `confirm_booking` SET `bookingNo` = '$bookingNo', `bookingDate` = '$cdate' WHERE `id` = '$bookingid'");

		// USER MAIL - ORDER RELATED
		$subject = "Your booking #".$bookingNo." has been placed successfully - ".$fromname;
		$to = $book_email;
		$message = '<div style="padding: 50px 0px;background: #f5f5f5;width: 100%;font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;">
        <div style="border: 0px solid #70d8ed; padding: 20px;background: #fff; width: 700px; margin: 0 auto;">
          <div style="padding-bottom:20px;margin-bottom:20px;border-bottom:1px solid #03bbe1;">
            <div style=" text-align:center;">
              <img src="'.$logo.'" style="width:150px; padding-top:10px;" />
            </div>
          </div>        
          <div>
            <p style="margin:0px 0px 10px 0px; letter-spacing: 0.5px;">Hello '.$book_fullname.',</p>
            <p style="margin:0px 0px 10px 0px; letter-spacing: 0.5px;">Thank you for booking at '.$fromname.'. Your booking <a href="'.WEBLINK.'" style="font-weight:600;color:#709deb;">#'.$bookingNo.'</a> has been confirmed.</p>
            <p></p>
            <h3 style="color:#4d4d4d;margin: 0;padding: 10px 0px 10px; letter-spacing: 0.5px; font-size: 16px;">Billing Address:</h3>
            <div style="letter-spacing: 0.5px;color: #4d4d4d;line-height: 20px;margin-bottom: 15px;">
              '.$book_fullname.'<br>
              '.$book_address.', '.$book_city.', '.$book_state.'
            </div>
            <div style="background-color: #f2f2f2;padding: 10px;">
              <div style="background-color: white; padding: 10px;">
                <h3 style="letter-spacing: 0.5px; margin: 0; padding: 10px 0px;font-size: 15px;">Booking Summary | <strong>(#'.$bookingNo.')</strong></h3>
                <table style="width: 100%; font-size: 12px; border-collapse: collapse;">
                  <thead>
                    <tr>
                      <th style="border-bottom-width: 1px;border-bottom-color: #f7f7f7; border-bottom-style: solid;padding-bottom: 10px; padding-top: 10px; text-align: left;"><strong>Property Image</strong></th>
                      <th style="border-bottom-width: 1px;border-bottom-color: #f7f7f7; border-bottom-style: solid;padding-bottom: 10px; padding-top: 10px; text-align: left;"><strong>Property Name</strong></th>
                      <th style="border-bottom-width: 1px;border-bottom-color: #f7f7f7; border-bottom-style: solid;padding-bottom: 10px; padding-top: 10px; text-align: left;"><strong>Check In</strong></th>
                      <th style="border-bottom-width: 1px;border-bottom-color: #f7f7f7; border-bottom-style: solid;padding-bottom: 10px; padding-top: 10px; text-align: right; width:18%;"><strong>Check Out</strong></th>
                      <th style="border-bottom-width: 1px;border-bottom-color: #f7f7f7; border-bottom-style: solid;padding-bottom: 10px; padding-top: 10px; text-align: right; width:18%;"><strong>Amount</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td style="padding:10px 0px 0px; width: 15%;">
                          <img src="'.WEBLINK.'upload/property_thumbnail/'.$property_image.'" style="width:70%">
                        </td>
                        <td style="width: 30%;"><p>'.$prop_name.'</p></td>
                        <td style="padding:10px 0px;"><p>'.$checkin_new.'</p></td>
                        <td style="padding:10px 0px;"><p>'.$checkout_new.'</p></td>
                        <td style="padding:10px 0px;"><p>₹'.number_format($gradtotalAmt).'</p></td>
                    </tr>
                    <tr>  
                      <td colspan="5" style="text-align:right;padding: 10px 0px;">Sub Total : </td>
                      <td colspan="5" style="font-weight:600; text-align: right; padding: 10px 0px;">₹'.number_format($subtotalprice).'</td>
                    </tr>
                    <tr>  
                      <td colspan="5" style="text-align:right;padding: 10px 0px;">GST Amount : </td>
                      <td colspan="5" style="font-weight:600; text-align: right; padding: 10px 0px;">₹'.number_format($gstAmt).'</td>
                    </tr>
                    <tr>  
                      <td colspan="5" style="text-align:right;padding: 10px 0px;">Grand Total : </td>
                      <td colspan="5" style="font-weight:600; text-align: right; padding: 10px 0px;">₹'.number_format($gradtotalAmt).'</td>
                    </tr>
                </tbody>
              </table>
              </div>
            </div>
            <div style="padding: 10px 0px 0px;">
              For any queries visit <a href="'.WEBLINK.'contact" style="text-decoration: none; color:#709deb;">'.WEBLINK.'contact</a>. If you don’t find your query there, you can email us at <a href="mailto:info@staybindass.com" style="text-decoration: none; color:#709deb;">info@staybindass.com</a>.
            </div>
            <p style="margin: 0;padding: 10px 0px 5px;">Thank you</p>
            <p style="margin: 0;">Team '.$fromname.'</p>
          </div>
          
        </div>
      </div>';

  		sendmail($host,$port,$username,$password,$from,$fromname,$to,$subject,$message);

		//session_unset($_SESSION['dummy_bookingid']);

		$arr = array('status' => 1, 'msg' => $bookingNo);
		echo json_encode($arr)."\n";

	}else{

		$arr = array('status' => 0, 'msg' => $errorMsg);
		echo json_encode($arr)."\n";
	
	}

}


if (isset($_POST['checkDatewisePrice'])) {

	$checkin = $_POST['checkDatewisePrice'];
	$checkout = $_POST['checkout'];
	$propertyid = $_POST['propertyid'];
	$serviceCharge = 0;

	$days=0;
	if($checkin != 'null' && $checkout != 'null'){

	    $date1 = strtotime($checkin);  
	    $date2 = strtotime($checkout);  
	      
	    $diff = abs($date2 - $date1);  
	      
	    $years = floor($diff / (365*60*60*24));  
	    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
	    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

	    $todayprice=0;
	    $priceBreckdown = '';
		for($i=1; $i<=$days; $i++){

			if($i == 1){

				$query22 = mysqli_query($sql, "SELECT * FROM `awt_property_price` where `select_date` = '$checkin' and  `property_id` = '$propertyid'");
		  		$count22 = mysqli_num_rows($query22);
				if($count22 > 0) {
					$getdata22 = mysqli_fetch_object($query22);
					$todayprice = $todayprice+$getdata22->property_price;
					$guestprice = $getdata22->guest_price;
				} else {
					$day = strtolower(date("l",strtotime($checkin)));
					$guestday = strtolower('guest' . $day);
					$query33 = mysqli_query($sql, "SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$propertyid'");
					$count33 = mysqli_num_rows($query33);
					$getdata33 = mysqli_fetch_object($query33);
					if($count33 > 0) {
					  $todayprice = $todayprice+$getdata33->todayprice;
					  $guestprice = $getdata33->guestprice;
					}
				}

				$date = date('d/m/Y', strtotime($checkin));

				$priceBreckdown .= '<p>'.$date.' <span class="pull-right">₹ '.$todayprice.'</span></p>';

		  	}else{

		  		$date = '';
		  		$checkin = date('Y-m-d', strtotime($checkin. ' +'.$i.' days'));

		  		$query22 = mysqli_query($sql, "SELECT * FROM `awt_property_price` where `select_date` = '$checkin' and  `property_id` = '$propertyid'");
		  		$count22 = mysqli_num_rows($query22);
				if($count22 > 0) {
					$getdata22 = mysqli_fetch_object($query22);
					$property_price = $getdata22->property_price;
					$todayprice = $todayprice+$getdata22->property_price;
					$guestprice = $getdata22->guest_price;
				} else {
					$day = strtolower(date("l",strtotime($checkin)));
					$guestday = strtolower('guest' . $day);
					$query33 = mysqli_query($sql, "SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$propertyid'");
					$count33 = mysqli_num_rows($query33);
					$getdata33 = mysqli_fetch_object($query33);
					if($count33 > 0) {
					  $property_price = $getdata33->todayprice;
					  $todayprice = $todayprice+$getdata33->todayprice;
					  $guestprice = $getdata33->guestprice;
					}
				}

				$date = date('d/m/Y', strtotime($checkin));

				$priceBreckdown .= '<p>'.$date.' <span class="pull-right">₹ '.$property_price.'</span></p>';

		  	}

		}

		$pernightPrice = $todayprice/$days;
		if($days > 1){
			$night = 'nights';
		}else{
			$night = 'night';
		}
		 

		echo '<div class="calculations ">
			    <div class="con-space-between">
			      <div class="text-xsm-light clr-grey" id="open-dialog">₹ '.number_format($pernightPrice).' x '.$days.' '.$night.' &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div>
			      <div class="text-xsm clr-black">₹ '.number_format($todayprice).'</div>
			    </div>
			    <dialog id="dialog">
			       <form method="dialog">
			          <button><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;"><path d="m6 6 20 20"></path><path d="m26 6-20 20"></path></svg></button>
			        </form>
			        <div>
			          <h5>Base Price Breakdown</h5>
			          <hr>'.$priceBreckdown.'<!-- <p>1/2/2023 <span class="pull-right">₹10,160</span></p>
			          <p>2/2/2023 <span class="pull-right">₹10,160</span></p>
			          <p>3/2/2023 <span class="pull-right">₹10,160</span></p>
			          <p>4/2/2023 <span class="pull-right">₹10,160</span></p>
			          <p>5/2/2023 <span class="pull-right">₹10,160</span></p> -->
			        <hr>
			      <h6>Total Base Price &nbsp;&nbsp; <span class="pull-right">₹ '.$todayprice.'</span></h6>
			        </div>
			      </dialog>
			      <div class="con-space-between tooltip" style="display: none;">
			        <div class="text-xsm-light clr-grey">Extra Guest Charges &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
			        <div class="text-xsm clr-black">₹6,000</div>
			        <span class="tooltiptext">Any Bbooking above 6 guest will be charged as extra guest</span>
			    </div>
			    <div class="con-space-between tooltip">
			        <div class="text-xsm-light clr-grey">Service Charges &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
			        <div class="text-xsm clr-black">₹ '.number_format($serviceCharge).'</div>
			        <span class="tooltiptext">Applicable as per Government Guidelines</span>
			    </div>
			    <div class="con-space-between tooltip" style="display: none;">
			        <div class="text-xsm-light clr-grey">Convenience fees &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
			        <div class="text-xsm clr-black">₹ 0</div>
			        <span class="tooltiptext">Service Fee To help run this platform smoothly and offer you various service</span>
			    </div>
			  </div>
			  <hr>
			  <div class="items-center">
			    <div class="text-14 lh-12">
			      <h6>Total before taxes<span class="pull-right total_before_taxes"> &nbsp; ₹ '.number_format($todayprice).'</span></h6>                              
			    </div>
			  </div>';
	
	}else{

		echo 0;

	}

}

?>