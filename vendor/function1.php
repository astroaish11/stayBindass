<?php

function propertyPerNightPrice($sql, $property_id){

    $query22 = mysqli_query($sql,"SELECT * FROM `awt_property_price` where `property_id` = '$property_id'");
    $count22 = mysqli_num_rows($query22);
  
    $guestprice=0;
    if($count22 > 0){
        $getdata22 = mysqli_fetch_object($query22);
        $todayprice = $getdata22->property_price;
        $guestprice = $getdata22->guest_price;
    }else{
        $day = strtolower(date("l"));
        $guestday = strtolower('guest'.$day);
        $query33 = mysqli_query($sql,"SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$property_id'");
        $getdata33 = mysqli_fetch_object($query33);
        $todayprice = $getdata33->todayprice;
        $guestprice = $getdata33->guestprice;
    }
  
    return $todayprice;
  
  }

?>