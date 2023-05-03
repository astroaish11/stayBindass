<?php
$userID = $_SESSION[SESSION]['loginuserid'];
function propertyListing($sql, $cityname, $cityid, $checkin, $checkout, $adults, $childs, $rooms, $destination_name, $destination_id){

  //$checkin = '2023-04-13';
  //$checkout = '2023-04-15';

  $checkdate = 0;
  $checkdate1 = 0;
  $checkdate2 = 0;

  if($checkin != null && $checkin != 'null'){
    $checkdate1 = 1;
  }

  if($checkout != null && $checkout != 'null'){
    $checkdate2 = 1;
  }

  $checkdate = $checkdate1+$checkdate2;

  if($checkdate == 2){
    $date1 = strtotime($checkin);  
    $date2 = strtotime($checkout);  
      
    $diff = abs($date2 - $date1);  
      
    $years = floor($diff / (365*60*60*24));  
    $months = floor(($diff - $years * 365*60*60*24) 
                     / (30*60*60*24));  
    $days = floor(($diff - $years * 365*60*60*24 -  
           $months*30*60*60*24)/ (60*60*24));
  }

  $person = $adults+$childs;

  $makequery = "SELECT p.*, c.city as cityname, s.name as statename, r.room as room_type, po.pool as pool_type, n.night,d.slug as destinationslug FROM `addproperty` as p  
  left join `destination_master` as d on d.id=p.destination
  LEFT JOIN `city_master` as c ON c.`id` = p.`city`
  LEFT JOIN `awt_states` as s ON s.`id` = p.`state`
  LEFT JOIN `room_master` as r ON r.`id` = p.`r_type`
  LEFT JOIN `pool_master` as po ON po.`id` = p.`pool`
  LEFT JOIN `night_master` as n ON n.`id` = p.`nights`
  WHERE p.`adminApproval` = 1 and p.`deleted` != 1 and p.`villaStatus` = 0 ";

  if ($cityid != 0) {
    $makequery .= " and p.`city` = $cityid";
  }

  if ($destination_id != 0) {
    $makequery .= " and p.`destination` = $destination_id";
  }

  if ($person != 0) {
    $makequery .= " and p.`maxguest` >= $person";
  }

  if($checkdate == 2){
    if($days>1){$days = $days+1;}
    $makequery .= " and p.`nights` <= $days";
  }

  //echo $makequery;

  $queryProperty = mysqli_query($sql, $makequery);

  $propertyCount = mysqli_num_rows($queryProperty);

  $city_name = $cityname;

  if ($propertyCount > 0) {

    $confcount = 0;
    $tempcount = 0;
    $fcount = 0;
    $villaQuantity = 0;
    while ($listdataProperty = mysqli_fetch_object($queryProperty)) {

      $property_id = $listdataProperty->id;
      $villaQuantity = $listdataProperty->villaQuantity;
      $destinationslug = $listdataProperty->destinationslug;

      $cpropertyquery = mysqli_query($sql, "SELECT `id` FROM `confirm_booking` WHERE `prop_id` = '$property_id' and (`checkin` >= '$checkin' || `checkout` <= '$checkout')");
      $confcount = mysqli_num_rows($cpropertyquery);

      $tpropertyquery = mysqli_query($sql, "SELECT `id` FROM `property_booking` WHERE `prop_id` = '$property_id' and (`checkin` >= '$checkin' || `checkout` <= '$checkout')");
      $tempcount = mysqli_num_rows($tpropertyquery);


      /*$bpropertyquery = mysqli_query($sql, "SELECT `id` FROM `awt_blockDates` WHERE `property_id` = '$property_id' and `checkin` >= '$checkin' and `checkout` <= '$checkout'");
      $count = mysqli_num_rows($bpropertyquery);*/

      $fcount = $confcount + $tempcount;


      if ($villaQuantity > $fcount) {

        $property_id = $listdataProperty->id;
        $statename = ucfirst(strtolower($listdataProperty->statename));

        $propertyPerNightPrice = propertyPerNightPrice($sql, $property_id);

        $getgallery = mysqli_query($sql, "SELECT * from `awt_vgallery` where `v_id` = '$property_id' and `deleted` != '1' limit 5");


        echo '<div class="col-lg-4 col-sm-4">
                  <!--<a href="' . WEBLINK . 'property/'.$listdataProperty->destinationslug.'/' . $listdataProperty->slug . '" class="hotelsCard -type-1 ">-->
                    <div class="listing-border">
                    <div class="hotelsCard__image">
                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">
                          <div class="cardImage-slider overflow-hidden js-cardImage-slider">
                          <a href="' . WEBLINK . 'property/'.$listdataProperty->destinationslug.'/' . $listdataProperty->slug . '?cityname='.$cityname.'&cityid='.$cityid.'&t-start='.$checkin.'&t-end='.$checkout.'&adults='.$adults.'&childs='.$childs.'&rooms='.$rooms.'&property='.$destination_name.'&destination_id='.$destination_id.'" class="hotelsCard -type-1 ">
                            <div class="swiper-wrapper">';
                            while($gallerydata = mysqli_fetch_object($getgallery)){
                              echo '<div class="swiper-slide">
                                      <img class="col-12 js-lazy" src="#" data-src="'.WEBLINK.'upload/vgallery/'.$gallerydata->logo.'" alt="image">
                                    </div>';
                              }
                            echo '</div>
                            </a>
                            <div class="cardImage-slider__pagination js-pagination"></div>
                            <div class="cardImage-slider__nav -prev">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                <i class="icon-chevron-left text-10"></i>
                              </button>
                            </div>
                            <div class="cardImage-slider__nav -next">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                <i class="icon-chevron-right text-10"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="cardImage__wishlist">';
                        $prop_id = $listdataProperty->id;
                        $user_loginid = $_SESSION[SESSION]['loginuserid'];
                        $getwishlist = mysqli_query($sql, "SELECT `id` from `wishlist_tbl` where `property_id` = '$prop_id' and `userid`='$user_loginid'");
                        $countdata = mysqli_num_rows($getwishlist);
                        if ($countdata > 0) {
                       // echo '<button data-propid="' . $prop_id . '" class="savepropertylisting button -blue-1 bg-white size-30 rounded-full shadow-2 active wishlist">
                         //   <i class="icon-heart text-12"></i>
                        //  </button>';

                          echo '<button data-propid="' . $prop_id . '" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'" class="save_property_btn -blue-1 bg-white size-30 rounded-full shadow-2 active wishlist">
                            <i class="icon-heart text-12"></i>
                          </button>';
                        }
                        else
                        {
                          // echo '<button data-propid="' . $prop_id . '" class="savepropertylisting button -blue-1 bg-white size-30 rounded-full shadow-2 wishlist">
                          //   <i class="icon-heart text-12"></i>
                          // </button>';

                          echo '<button data-propid="' . $prop_id . '" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'" class="save_property_btn -blue-1 bg-white size-30 rounded-full shadow-2 wishlist">
                            <i class="icon-heart text-12"></i>
                          </button>';
                        }
                        echo '</div>
                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Min: ' . $listdataProperty->night . '
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hotelsCard__content mt-10 pl-15 pr-15 mb-10">
                    <a href="' . WEBLINK . 'property/'.$listdataProperty->destinationslug.'/' . $listdataProperty->slug . '?cityname='.$cityname.'&cityid='.$cityid.'&t-start='.$checkin.'&t-end='.$checkout.'&adults='.$adults.'&childs='.$childs.'&rooms='.$rooms.'&property='.$destination_name.'&destination_id='.$destination_id.'" class="hotelsCard -type-1 ">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>' . $listdataProperty->title . '</span>
                      </h4>
                      </a>
                      <p class="text-light-1 lh-14 text-14 mt-5"><i class="icon-location-2 text-14 mr-5"></i> ' . ucfirst($listdataProperty->cityname) . ', ' . $statename . ' India</p>';
                        if($listdataProperty->maxguest != '' && $listdataProperty->maxguest != 0){
                          echo '<p class="text-14 mt-5">' . $listdataProperty->minguest . ' - ' . $listdataProperty->maxguest . ' Guests | ' . $listdataProperty->room_type . ' | ' . $listdataProperty->pool_type . ' </p>';
                        }else{
                           echo '<p class="text-14 mt-5">' . $listdataProperty->minguest . ' Guests | ' . $listdataProperty->room_type . ' | ' . $listdataProperty->pool_type . ' </p>';
                        }
                        echo '<div class="text-20 lh-12 fw-600 mt-5">₹ ' . number_format($propertyPerNightPrice) . ' <span class="text-14 fw-500">/ night</span></div>
                          <div class="text-12 text-light-1 mb-10">(excl. taxes & charges)</div>
                      <!--<div class="d-flex items-center mt-10">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>-->
                    </div>
                    </div>
                  <!--</a>-->
                </div>';

      }

    }

  } else {

      //echo '<script type="text/javascript">window.location.href = "listing-404.php?cityname='.$cityname.'&destination_name='.$destination_name.'"</script>';

      /*echo '<script type="text/javascript">window.location.href = "listing-404.php?cityname='.$cityname.'&cityid='.$cityid.'&t-start='.$checkin.'&t-end='.$checkout.'&adults='.$adults.'&childs='.$childs.'&rooms='.$rooms.'&property='.$destination_name.'&destination_id='.$destination_id.'"</script>';*/

      echo '<section class="layout-pb-lg">
              <div class="container">
                <div class="row justify-between items-center text-center">
                  <div class="col-lg-12">
                    <div class="no-page">
                      <div class="no-page__title"><img src="img/dashboard/sidebar/house.svg" width="20%"></div>
                      <h2 class="text-30 fw-600">Opps, we couldn\'t find any results</h2>
                      <div class="pr-30 mt-5">Try searching for something else</div>
                    </div>
                  </div>
                </div>
              </div>
            </section>';

  }

}


function propertyPerNightPrice($sql, $property_id)
{

  $today = date('Y-m-d');

  $query22 = mysqli_query($sql, "SELECT * FROM `awt_property_price` where `select_date` = '$today' and  `property_id` = '$property_id'");
  $count22 = mysqli_num_rows($query22);

  $guestprice = 0;
  if($count22 > 0) {
    $getdata22 = mysqli_fetch_object($query22);
    $todayprice = $getdata22->property_price;
    $guestprice = $getdata22->guest_price;
  } else {
    $day = strtolower(date("l"));
    $guestday = strtolower('guest' . $day);
    $query33 = mysqli_query($sql, "SELECT $day as todayprice, $guestday as guestprice FROM `awt_default_property_price` where `property_id` = '$property_id'");
    $count33 = mysqli_num_rows($query33);
    $getdata33 = mysqli_fetch_object($query33);
    if($count33 > 0) {
      $todayprice = $getdata33->todayprice;
      $guestprice = $getdata33->guestprice;
    }else{
      $todayprice = 0;
      $guestprice = 0;
    }
  }

  return $todayprice;

}

?>