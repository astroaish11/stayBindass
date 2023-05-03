<?php 

include('config.php');

$date = date("Y-m-d H:i:s");
$time = strtotime($date);
$time = $time - (10 * 60);
$date = date("Y-m-d H:i:s", $time);

$booking_query = mysqli_query($sql, "SELECT * FROM `property_booking` WHERE `created_date` < '$date'");

while($booking_data = mysqli_fetch_object($booking_query)) {

  $id = $booking_data->id;

  mysqli_query($sql, "INSERT INTO `property_booking_clean` SELECT * FROM `property_booking` WHERE `id` = '$id'");

  mysqli_query($sql, "DELETE FROM `property_booking` WHERE `id` = '$id'");

}

?>
