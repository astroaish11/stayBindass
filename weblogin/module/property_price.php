<?php
$date = '';
$price = '';
$eid= '';
$pid= $_GET['pid'];
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');

if(isset($_GET['pid'])) {
    $pid= $_GET['pid'];
    $pid = mysqli_real_escape_string($sql, $_GET['pid']);

    $getpropertyname = mysqli_query($sql, "SELECT `title` from `addproperty` where id = '$pid'");    
    $propertyname = mysqli_fetch_object($getpropertyname);
    $property_name = $propertyname->title;


    $getpropertyprice = mysqli_query($sql, "SELECT * from `awt_default_property_price` where property_id = '$pid'");
   // echo "SELECT * from `awt_default_property_price` where id = '$pid'";
    $propertyprice = mysqli_fetch_object($getpropertyprice);
    $monday = $propertyprice->monday;
    $guestmonday = $propertyprice->guestmonday;
    $tuesday = $propertyprice->tuesday;
    $guesttuesday = $propertyprice->guesttuesday;
    $wednesday = $propertyprice->wednesday;
    $guestwednesday = $propertyprice->guestwednesday;
    $thursday = $propertyprice->thursday;
    $guestthursday = $propertyprice->guestthursday;
    $friday = $propertyprice->friday;
    $guestfriday = $propertyprice->guestfriday;
    $saturday = $propertyprice->saturday;
    $guestsaturday = $propertyprice->guestsaturday;
    $sunday = $propertyprice->sunday;
    $guestsunday = $propertyprice->guestsunday;
}


if(isset($_POST['submit'])){

    $pid = trim($_POST['pid']);
    $pid = mysqli_real_escape_string($sql, $pid);

    $monday = trim($_POST['monday']);
    $monday = mysqli_real_escape_string($sql, $monday);

    $guestmonday = trim($_POST['guestmonday']);
    $guestmonday = mysqli_real_escape_string($sql, $guestmonday);

    $tuesday = trim($_POST['tuesday']);
    $tuesday = mysqli_real_escape_string($sql, $tuesday);

    $guesttuesday = trim($_POST['guesttuesday']);
    $guesttuesday = mysqli_real_escape_string($sql, $guesttuesday);

    $wednesday = trim($_POST['wednesday']);
    $wednesday = mysqli_real_escape_string($sql, $wednesday);

    $guestwednesday = trim($_POST['guestwednesday']);
    $guestwednesday = mysqli_real_escape_string($sql, $guestwednesday);

    $thursday = trim($_POST['thursday']);
    $thursday = mysqli_real_escape_string($sql, $thursday);

    $guestthursday = trim($_POST['guestthursday']);
    $guestthursday = mysqli_real_escape_string($sql, $guestthursday);

    $friday = trim($_POST['friday']);
    $friday = mysqli_real_escape_string($sql, $friday);

    $guestfriday = trim($_POST['guestfriday']);
    $guestfriday = mysqli_real_escape_string($sql, $guestfriday);

    $saturday = trim($_POST['saturday']);
    $saturday = mysqli_real_escape_string($sql, $saturday);

    $guestsaturday = trim($_POST['guestsaturday']);
    $guestsaturday = mysqli_real_escape_string($sql, $guestsaturday);

    $sunday = trim($_POST['sunday']);
    $sunday = mysqli_real_escape_string($sql, $sunday);

    $guestsunday = trim($_POST['guestsunday']);
    $guestsunday = mysqli_real_escape_string($sql, $guestsunday);

    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `awt_default_property_price` SET `monday`='$monday', `guestmonday`='$guestmonday', `tuesday`='$tuesday', `guesttuesday`='$guesttuesday', `wednesday`='$wednesday', `guestwednesday`='$guestwednesday',`thursday`='$thursday', `guestthursday`='$guestthursday',`friday`='$friday', `guestfriday`='$guestfriday', `saturday`='$saturday', `guestsaturday`='$guestsaturday', `sunday`='$sunday', `guestsunday`='$guestsunday', `updated_by`='1', `updated_date`='$cdate' where `property_id`='$pid'");

    echo '<script type="text/javascript">window.location.href="property_price.php?pid='.$pid.'&u=1"</script>';

}

if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}


if(isset($_GET['datesubmit'])){
    $from_date = trim($_GET['from_date']);
    $to_date = trim($_GET['to_date']);
    $per_night = trim($_GET['per_night']);
    $extra_guest = trim($_GET['extra_guest']);
    $pid = $_GET['pid'];

    $difference = strtotime($from_date) - strtotime($to_date);
    $days = abs($difference/(60 * 60)/24);

    $checkdate = date('Y-m-d', strtotime($from_date . ' -1 day'));

    for($i=0; $i<=$days; $i++){

        $checkdate = date('Y-m-d', strtotime($checkdate . ' +1 day'));

        $check_date_query = mysqli_query($sql,"SELECT `id` from `awt_property_price` where `select_date` = '$checkdate' and `property_id`='$pid'");
        $count = mysqli_num_rows($check_date_query);
        $day = lcfirst(date('l', strtotime($checkdate)));

        if($count == 0){
            // $check_date_query = mysqli_query($sql,"SELECT * from `awt_default_property_price` where `property_id`='$pid'");
            // $getdata_day = mysqli_fetch_object($check_date_query);
            if($day == "monday"){
                $price =  $per_night;
                $guest_price =  $extra_guest ;
            }
            elseif($day == "tuesday"){
                $price = $per_night;
                $guest_price =  $extra_guest ;
            }
            elseif($day == "wednesday"){
                $price =  $per_night;
                $guest_price =  $extra_guest ;
            }
            elseif($day == "thursday"){
                $price =  $per_night;
                $guest_price =  $extra_guest ;
            }
            elseif($day == "friday"){
                $price =  $per_night;
                $guest_price = $extra_guest ;
            }
            elseif($day == "saturday"){
                $price =  $per_night;
                $guest_price =  $extra_guest ;
            }
            else{
                $price =  $per_night;
                $guest_price = $extra_guest ;
            }

            mysqli_query($sql,"INSERT INTO `awt_property_price` (`property_id`,`select_date`,`property_price`,`guest_price`,`created_date`,`created_by`) VALUES ('$pid','$checkdate','$price','$guest_price','$cdate','1')");
         
        }

    }

}


if(isset($_POST['priceupdate'])){
    $row_count = trim($_POST['row_count']);
    
    for($i=1;$i<=$row_count;$i++){
        $select_date = $_POST['date'.$i];
        $p_price = $_POST['per_night'.$i];
        $g_price = $_POST['extra_guest'.$i];
        $id = $_POST['hidden_id'.$i];

        $update_individualprice = mysqli_query($sql,"UPDATE `awt_property_price` set `property_price` = '$p_price', `guest_price` = '$g_price' where `property_id`='$pid' and `id` = '$id'");

    }

   
}
?>