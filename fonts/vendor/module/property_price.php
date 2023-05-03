<?php
$date = '';
$price = '';
$eid= '';
$pid= $_GET['pid'];
$alertMessage= '';
$cdate = date('Y-m-d H:i:s');

if(isset($_GET['pid'])) {

    $pid = mysqli_real_escape_string($sql, $_GET['pid']);

    $getpropertyname = mysqli_query($sql, "SELECT `title` from `addproperty` where id = '$pid'");    
    $propertyname = mysqli_fetch_object($getpropertyname);
    $property_name = $propertyname->title;


    $getpropertyprice = mysqli_query($sql, "SELECT * from `awt_default_property_price` where id = '$pid'"); 
    $propertyprice = mysqli_fetch_object($getpropertyprice);
    $monday = $propertyprice->monday;
    $tuesday = $propertyprice->tuesday;
    $wednesday = $propertyprice->wednesday;
    $thursday = $propertyprice->thursday;
    $friday = $propertyprice->friday;
    $saturday = $propertyprice->saturday;
    $sunday = $propertyprice->sunday;
}


if(isset($_POST['submit'])){

    $pid = trim($_POST['pid']);
    $pid = mysqli_real_escape_string($sql, $pid);

    $monday = trim($_POST['monday']);
    $monday = mysqli_real_escape_string($sql, $monday);

    $tuesday = trim($_POST['tuesday']);
    $tuesday = mysqli_real_escape_string($sql, $tuesday);

    $wednesday = trim($_POST['wednesday']);
    $wednesday = mysqli_real_escape_string($sql, $wednesday);

    $thursday = trim($_POST['thursday']);
    $thursday = mysqli_real_escape_string($sql, $thursday);

    $friday = trim($_POST['friday']);
    $friday = mysqli_real_escape_string($sql, $friday);

    $saturday = trim($_POST['saturday']);
    $saturday = mysqli_real_escape_string($sql, $saturday);

    $sunday = trim($_POST['sunday']);
    $sunday = mysqli_real_escape_string($sql, $sunday);

    $cdate = date('Y-m-d H:i:s');

    mysqli_query($sql, "UPDATE `awt_default_property_price` SET `monday`='$monday', `tuesday`='$tuesday', `wednesday`='$wednesday', `thursday`='$thursday', `friday`='$friday', `saturday`='$saturday', `sunday`='$sunday', `updated_by`='1', `updated_date`='$cdate' where `property_id`='$pid'");

    echo '<script type="text/javascript">window.location.href="property_price.php?pid='.$pid.'&u=1"</script>';

}

if(isset($_GET['u'])){

    $alertMessage = '<div class="alert alert-success mt-2 fadediv" role="alert">Data Updated Successfully</div>';
}


?>