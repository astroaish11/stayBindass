<?php
include('config.php');
include('module/villaDetail.php');
include('header.php');
include('module/home.php');
?>

<section data-anim-wrap class="masthead -type-5 ">
   <div class="masthead__bg">
      <img src="img/masthead/1/hero-art.svg">
   </div>

   <div class="container">
      <div class="row">
         <div class="col-xl-9">
            <div class="hide_mobile">
               <h1 class="text-60 lg:text-40 md:text-30"> <span class="text-blue-1 relative">StayBindass </span>With Us
               </h1>
               <span data-anim-child="slide-up delay-5" class="ityped"></span>
               <div class="">
                  <?php include 'search-form.php'; ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container block-search hide-on-desktop-menu">
      <!-- Content here -->
      <div class="row">
         <div class="col-12">
            <div class="box-text pt-80 " id="embed_button">
               <button class="btn-search" onclick="JavaScript:fncShow('embed_div');"><i class="fa fa-search"></i> Search
                  for a destination or a home</button>
            </div>
         </div>
      </div>
      <div class="box-search" id="embed_div" style="display:none;">
         <div class="">
            <?php include 'search-form.php'; ?>
         </div>
      </div>
   </div>

   <div class="masthead__image">
      <div class="row justify-center">
         <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="overflow-hidden js-section-slider" data-slider-cols="base-1" data-gap="30"
               data-pagination="js-testimonials-pag">
               <div class="swiper-wrapper">

                  <?php foreach ($masthead_data as $masthead) {
                     $x = 1 ?>

                     <div class="swiper-slide">
                        <img src="upload/sliderimage/<?php echo $masthead->slider_img; ?>" alt="image">
                     </div>
                     <?php $x++;
                  } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section data-anim-wrap class="masthead -type-1 z-5 hide_mobile" style="display: none;">
   <div class="masthead__bg">
      <img src="#" alt="image" data-src="img/masthead/1/banner1.jpg">
   </div>
   <div class="container-fluid">
      <div class="row justify-center">
         <div class="col-xl-12">
            <div class="text-center">
               <h1 class="text-60 lg:text-40 md:text-30 text-white">StayBindass With Us</h1>
               <p class="text-white mt-6 md:mt-10">Explore Your Next Luxurious Staycation</p>
            </div>
            <div class="hide_mobile">
               <?php include('search-form.php'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="layout-pt-lg layout-pb-md">
   <div data-anim-wrap class="container">
      <div data-anim-child="slide-up" class="row justify-between items-center">
         <div class="col-md-12">
            <div class="sectionTitle -md">
               <h2 class="sectionTitle__title ">Browse By Destination</h2>
            </div>
         </div>
      </div>

      <div class="relative">
         <div class="overflow-hidden mt-20 sm:mt-20 js-section-slider" data-gap="10"
            data-slider-cols="xl-8 lg-6 md-2 sm-2 xs-2 base-3" data-nav-prev="js-routes-slider-prev"
            data-nav-next="js-routes-slider-next">
            <div class="swiper-wrapper">

               <?php foreach ($destination_data as $destination) {
                  $x = 1 ?>

                  <div data-anim-child="slide-up delay-2" class="swiper-slide">
                     <!-- <a href="<?php echo WEBLINK; ?>listing.php?property=<?php echo $destination->slug; ?>" -->
                     <a href="<?php echo WEBLINK; ?>property-listing??cityname=&cityid=0&t-start=null&t-end=null&adults=2&childs=1&rooms=1&property=<?php echo $destination->slug; ?>&destination_id=<?php echo $destination->id; ?>"
                        class="tourTypeCard -type-1 d-block rounded-4 rounded-4">
                        <div class="tourTypeCard__content text-center pt-20 pb-20 px-10">
                           <img src="upload/destination_master/<?php echo $destination->logo; ?>" class="size-80">
                           <h4 class="text-dark-1 text-16 fw-500 mt-10 md:mt-10">
                              <?php echo $destination->title; ?>
                           </h4>
                        </div>
                     </a>
                  </div>
                  <?php $x++;
               } ?>
            </div>
         </div>
         <button
            class="section-slider-nav -prev flex-center button -blue-1 bg-white text-dark-1 size-40 rounded-full shadow-1 sm:d-none  js-routes-slider-prev">
            <i class="icon icon-chevron-left text-12"></i>
         </button>
         <button
            class="section-slider-nav -next flex-center button -blue-1 bg-white text-dark-1 size-40 rounded-full shadow-1 sm:d-none  js-routes-slider-next">
            <i class="icon icon-chevron-right text-12"></i>
         </button>
      </div>
   </div>
</section>

<section class="layout-pt-md layout-pb-md">
   <div data-anim-wrap class="container">
      <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
         <div class="col-auto">
            <div class="sectionTitle -md">
               <h2 class="sectionTitle__title">Today's Deals </h2>
            </div>
         </div>

         <div class="col-auto">

            <div class="d-flex x-gap-15 items-center justify-center pt-40 sm:pt-20">
               <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-left-hover js-places-prev">
                     <i class="icon icon-arrow-left"></i>
                  </button>
               </div>

               <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-right-hover js-places-next">
                     <i class="icon icon-arrow-right"></i>
                  </button>
               </div>
            </div>

         </div>
      </div>

      <div class="pt-40 overflow-hidden js-section-slider" data-gap="30" data-slider-cols="xl-3 lg-3 md-2 sm-2 base-1"
         data-nav-prev="js-places-prev" data-pagination="js-places-pag" data-nav-next="js-places-next">
         <div class="swiper-wrapper">


            <?php foreach ($saleproperty_data as $sale) {
               $x = 1 ?>


               <div data-anim-child="slide-left delay-5" class="swiper-slide">
                  <!--<a href="property/<?php echo $sale->destinationslug; ?>/<?php echo $sale->slug; ?>"
                     class="hotelsCard -type-1 ">-->
                  <div class="listing-border">
                     <div class="hotelsCard__image">
                        <div class="cardImage ratio ratio-1:1">
                           <div class="cardImage__content">
                              <a href="property/<?php echo $sale->destinationslug; ?>/<?php echo $sale->slug; ?>"
                                 class="hotelsCard -type-1 ">
                                 <img class="col-12 js-lazy" src="upload/property_thumbnail/<?php echo $sale->image; ?>"
                                    alt="image">
                              </a>

                           </div>
                           <div class="cardImage__wishlist">
                              <?php
                              $prop_id = $sale->id;
                              $user_id = $_SESSION[SESSION]['loginuserid'];
                              $getwishlist = mysqli_query($sql, "SELECT `id` from `wishlist_tbl` where `property_id` = '$prop_id' and `userid`='$user_id'");
                              $countdata = mysqli_num_rows($getwishlist);
                              ?>
                              <?php
                              if ($countdata > 0) {
                                 echo '<button class="save_property_btn -blue-1 size-30 rounded-full shadow-2 active wishlist" data-propid="' . $prop_id . '" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'">
                      <i class="icon-heart text-12"></i>
                    </button>';
                              } else {
                                 echo '<button class="save_property_btn -blue-1 size-30 rounded-full shadow-2 wishlist" data-propid="' . $prop_id . '" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'">
                      <i class="icon-heart text-12"></i>
                    </button>';
                              }
                              ?>
                           </div>
                           <div class="cardImage__leftBadge">
                              <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                 Min:
                                 <?php echo $sale->nights; ?>

                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hotelsCard__content mt-10 pl-15 pr-15 mb-10">
                        <a href="property/<?php echo $sale->destinationslug; ?>/<?php echo $sale->slug; ?>"
                           class="hotelsCard -type-1 ">
                           <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                              <span>
                                 <?php echo $sale->title; ?>
                              </span>
                           </h4>
                        </a>
                        <p class="text-light-1 lh-14 text-14 mt-5"><i class="icon-location-2 text-14 mr-5"></i>
                           <?php echo $sale->city; ?>,
                           <?php echo ucfirst(strtolower($sale->state)); ?>, India
                        </p>
                        <!-- <p class="text-14 mt-5">
                           <?php echo $sale->minguest; ?> -
                           <?php echo $sale->maxguest; ?> Guest |
                           <?php echo $sale->room_type; ?> |
                           <?php echo $sale->pool; ?>
                        </p> -->
                        <?php
                        if ($sale->maxguest != '' && $sale->maxguest != 0) {
                           echo '<p class="text-14 mt-5">' . $sale->minguest . ' - ' . $sale->maxguest . ' Guest | ' . $sale->room_type . ' | ' . $sale->pool . ' </p>';
                        } else {
                           echo '<p class="text-14 mt-5">' . $sale->minguest . ' Guest | ' . $sale->room_type . ' | ' . $sale->pool . ' </p>';
                        }
                        ?>
                        <?php $price = propertyPerNightPrice($sql, $sale->id); ?>

                        <div class="text-20 lh-12 fw-600 mt-5">₹
                           <?php echo number_format($price) ?> <span class="text-14 fw-500">/ night</span>
                        </div>
                        <div class="text-12 text-light-1 mb-10">(excl. taxes & charges)</div>

                     </div>
                  </div>
                  <!--</a>-->
               </div>

               <?php $x++;
            } ?>

         </div>

      </div>
</section>



<section class="layout-pt-md layout-pb-md">
   <div class="container">
      <div class="w-100">
         <div class="white-bg">
            <div class="container padding0">
               <div class="scroller scroller-left float-left mt-2"><i class="fa fa-chevron-left"></i></div>
               <div class="scroller scroller-right float-right mt-2"><i class="fa fa-chevron-right"></i></div>
               <div class="wrapper-nav">
                  <div class="container">
                     <div class="nav nav-tabs list " id="myTab" role="tablist">
                        <?php foreach ($filter_data as $filter) {
                           $x = 1 ?>

                           <a class="nav-item nav-link property_filter" data-cat="<?php echo $filter->id; ?>"
                              data-toggle="tab" href="#<?php echo $filter->title; ?>" role="tab" aria-controls="public" aria-expanded="true">
                              <img src="upload/filters/<?php echo $filter->logo; ?>">
                              <p>
                                 <?php echo $filter->title; ?>
                              </p>
                           </a>
                           <?php $x++;
                        } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-content" id="myTabContent">


            <div role="tabpanel" class="tab-pane active show fade mt-2" id="TopCollection" aria-labelledby="public-tab"
               aria-expanded="true">

               <div class="row y-gap-30 categorywise_filtered">
                  <?php
                  shuffle($approveProperty_data);
                  $limited_data = array_slice($approveProperty_data, 0, 24);
                  ?>

                  <?php
                  //foreach ($approveProperty_data as $approve) {
                  foreach ($limited_data as $approve) {
                     $x = 1;

                     if ($approve->propcat_ids != '') {
                        $prop_ids_array = array();
                        $prop_ids_array = explode(',', $approve->propcat_ids);
                     }

                     $catdivid = '';
                     foreach ($prop_ids_array as $prop_ids) {
                        $class = "catdivid" . $prop_ids;
                        if ($catdivid == '') {
                           $catdivid = $class;
                        } else {
                           $catdivid = $catdivid . ' ' . $class;
                        }
                     }

                     // echo $catdivid;
                     ?>
                     <!--<div class="col-lg-3 col-sm-6 catdivall catdivid<?php echo $approve->id; ?>">-->
                     <div class="col-lg-3 col-sm-6 catdivall <?php echo $catdivid ?>">
                        <a href="property/<?php echo $approve->destinationslug; ?>/<?php echo $approve->slug; ?>"
                           class="hotelsCard -type-1 ">
                           <div class="hotelsCard__image">
                              <div class="cardImage ratio ratio-1:1 rounded-4">
                                 <div class="cardImage__content">
                                    <img class="rounded-4 col-12 js-lazy"
                                       src="upload/property_thumbnail/<?php echo $approve->image; ?>" alt="image">
                                 </div>
                              </div>
                           </div>
                           <div class="hotelsCard__content mt-10 pl-5">
                              <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                 <span>
                                    <?php echo $approve->title; ?>
                                 </span>
                              </h4>
                              <p class="text-light-1 lh-14 text-14 mt-5"><i class="icon-location-2 text-14 mr-5"></i>
                                 <?php echo $approve->city; ?>,
                                 <?php echo ucfirst(strtolower($approve->state)); ?>, India
                              </p>
                              <!-- <p class="text-14 mt-5">
                                 <?php echo $approve->minguest; ?> -
                                 <?php echo $approve->maxguest; ?> Guests |
                                 <?php echo $approve->room_type; ?> |
                                 <?php echo $approve->pool; ?>
                              </p> -->
                              <?php
                              if ($approve->maxguest != '' && $approve->maxguest != 0) {
                                 echo '<p class="text-14 mt-5">' . $approve->minguest . ' - ' . $approve->maxguest . ' Guest | ' . $approve->room_type . ' | ' . $approve->pool . ' </p>';
                              } else {
                                 echo '<p class="text-14 mt-5">' . $approve->minguest . ' Guest | ' . $approve->room_type . ' | ' . $approve->pool . ' </p>';
                              }
                              ?>
                           </div>
                        </a>
                        <div class="text-20 lh-12 fw-600 mt-5">


                           <?php $price = propertyPerNightPrice($sql, $approve->id); ?>

                           <span class="text-14 fw-500">₹
                              <?php echo number_format($price) ?> / night
                           </span> <a href="villa-details1.php#Rates" data-x-click="mapFilter"
                              class="text-blue-1 text-13">Rates &amp; Charges</a>
                        </div>
                        <div class="text-12 text-light-1 mb-10">(excl. taxes & charges)</div>
                     </div>

                     <?php $x++;
                  } ?>
               </div>
            </div>
         </div>
</section>

<section data-anim="slide-up delay-1" class="layout-pt-md layout-pb-md">
   <div class="container">
      <div class="row ml-0 mr-0 items-center justify-between">
         <div class="col-xl-5 px-0">
            <img class="col-12 h-400" src="upload/your_property/<?php echo $your_property_data[0]->image_upload; ?>"
               alt="image">
         </div>
         <div class="col px-0">
            <div class="d-flex justify-center flex-column h-400 px-80 py-40 md:px-30 bg-green-1">
               <h2 class="text-30 sm:text-24 lh-15 mt-20">
                  <?php echo $your_property_data[0]->title; ?>
               </h2>
               <div class="single-field -w-410 d-flex x-gap-10 flex-wrap y-gap-20 pt-30">
                  <div class="col-auto">
                     <a href="<?php echo $your_property_data[0]->btn_link; ?>"
                        class="button px-20 fw-400 text-14 -outline-blue-1 h-40 text-blue-1 "><?php echo $your_property_data[0]->btn_name; ?></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="layout-pt-md layout-pb-md">
   <div data-anim-wrap class="container">
      <div class="row y-gap-20 justify-between">

         <?php foreach ($services_data as $services) {
            $x = 1 ?>

            <div data-anim-child="slide-up delay-1" class="col-lg-3 col-sm-6">
               <div class="featureIcon -type-1 ">
                  <div class="d-flex justify-center">
                     <img src="upload/services/<?php echo $services->slider_img; ?>" alt="image" class="js-lazy">
                  </div>
                  <div class="text-center mt-30">
                     <h4 class="text-18 fw-500">
                        <?php echo $services->title; ?>
                     </h4>
                     <p class="text-15 mt-5">
                        <?php echo $services->subtitle; ?>
                     </p>
                  </div>
               </div>
            </div>

            <?php $x++;
         } ?>

      </div>
   </div>
</section>

<section class="section-bg layout-pt-xl layout-pb-xl mb-20">
   <div data-anim="fade delay-1" class="section-bg__item -mx-20" data-parallax="0.7">
      <div data-parallax-target>
         <img src="upload/bottom_banner/<?php echo $bottombanner_data[0]->image_upload; ?>" alt="image">
      </div>
   </div>
   <div class="container">
      <div data-anim="fade delay-3" class="row justify-center text-center">
         <div class="col-auto">
            <div class="text-white mb-10">
               <?php echo $bottombanner_data[0]->heading; ?>
            </div>
            <h2 class="text-40 text-white">
               <?php echo $bottombanner_data[0]->title; ?> <br><span class="text-30">
                  <?php echo $bottombanner_data[0]->subtitle; ?>
               </span>
            </h2>
            <div class="d-inline-block mt-30">
               <a href="<?php echo $bottombanner_data[0]->btn_link; ?>"
                  class="button px-20 py-10  -blue-1 bg-white text-dark-1"><?php echo $bottombanner_data[0]->btn_name; ?></a>
            </div>
         </div>
      </div>
   </div>
</section>




<script type="text/javascript">
   $(document).ready(function () {
      $('.wishlist').on('click', function () {
         var prop_id = $(this).attr('data-propid');
         var user_id = $(this).attr('data-userid');
         var checkdata = $(this).hasClass('active');

         if (checkdata == true) {
            $(this).removeClass('active');
            var dataString = 'removeWishlist=' + prop_id+"&userid="+user_id;
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               success: function (data) {

               }
            });
         }
         else {
            $(this).addClass('active');
            var dataString = 'addToWishlist=' + prop_id+"&userid="+user_id;
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               success: function (data) {

               }
            });
         }
      });

     /* //filter tabs

      $('.property_filter').on('click', function () {
         var a = $(this).attr('data-cat');
         $('.catdivall').hide();
         $('.catdivid' + a).show();
      });*/


      //filter using ajax

      $('.property_filter').on('click', function () {
         var a = $(this).attr('data-cat');
         $('.catdivall').hide();
         //$('.catdivid' + a).show();
         var dataString = 'property_filter_categorywise=' + a;
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               success: function (data) {
                  $('.categorywise_filtered').html(data);
               }
            });
      });


   });
</script>


<?php include('footer.php'); ?>