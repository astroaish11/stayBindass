<?php 
include('config.php');
include('header.php');
include('module/villaDetail.php');
//include('module/property_book.php');

$currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$parts = parse_url($currentPageUrl);
parse_str($parts['query'], $query);
?>
<section class="">

    <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="xl-1 lg-1 md-1 sm-1 xs-1 base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next"> 
              
                
           <?php
            $x = 1;
            echo '<div class="swiper-wrapper photo">';
            while($getdata1 = mysqli_fetch_object($query11)){
              echo '<div class="swiper-slide">        
                        <img src="'.WEBLINK.'upload/vgallery/'.$getdata1->logo.'" alt="image" class="col-12 object-cover banner_height_slider photo" width="100%">
                    </div>';

              $x++;
            }
            echo '</div>
                    
            <div class="absolute h-full col-11">
             <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev">
              <i class="icon icon-chevron-left text-12"></i>
             </button>
             <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next">
              <i class="icon icon-chevron-right text-12"></i>
             </button>';

             if($video_link != ''){
              echo'  <div class="video_play-btn-container">
                      <div class="galleryGrid__item relative d-flex">
                        <div class="absolute h-full col-12 flex-center">
                           <a href="'.html_entity_decode($video_link).'" class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1 js-gallery" data-gallery="gallery1">
                          <i class="icon-play text-16"></i> </a>
                        </div>
                     </div>
                 </div>';
             }

            echo'</div>';
     ?>

      <div class="listing-name-address-container"><h1><?php echo $title;?></h1>
            <h3><i class="icon-bed text-16 text-w"></i> <?php echo $bedroom;?></h3>
          <h4><i class="icon-placeholder text-16 text-w"></i> <?php echo $city;?>, <?php echo ucfirst(strtolower($state));?></h4>
        </div>

        <div class="absolute image-popup h-full col-12 px-10 py-10 d-flex justify-end items-end">
          <a data-x-click="filterPopup" class="button cursor -blue-1 text-dark-1 z-2">
            <img src="<?php echo WEBLINK;?>upload/property_thumbnail/<?php echo $uploadimage ;?>">
            <p>+<?php echo $countgal; ?></p>
          </a>          
        </div>
     </div>

    </section>

<div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
        <div class="container-header">
            <aside class="sidebar">
                <div class="row position-sticky">
                  <div class="col-md-6 col-6">
                    <div data-x-click="filterPopup" class="-icon-close back-gallery">
                   <i class="fa fa-chevron-left" aria-hidden="true"></i> Go back
                </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <button class="good-share px-15 text-white share pull-right"> <i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp; Share</button>
                  </div>
                </div>                             
      <div class="">   
          <div class="">
            <ul class="gallery">
                <div class="row">

                <?php
                      $x = 1;
                      
                      while($getdata21 = mysqli_fetch_object($querygal)){ 
                      
                        $getdivider = $x % 3;
                        if($getdivider == 1) {
                          echo'<div class="col-md-12 px-10 py-10">';
                        } else {
                          echo'<div class="col-md-6 px-10 py-10">';
                        }
                          
                            echo'<li><a href="'.WEBLINK.'upload/vgallery/'.$getdata21->logo.'"><img src="'.WEBLINK.'upload/vgallery/'.$getdata21->logo.'" alt="Image"></a></li>';
                          echo'</div>';
                            $x++;
                          }
                  ?>                       
                  
                </div>  
              </ul>
          </div>           
              </div>
            </aside>
        </div> 
    </div>

<section class="pt-30">
  <div class="container">
    <div class="outline">
      <div class="middle">          
        <div class="row">
          <div class="col-xl-8">

            <div class="row x-gap-20 y-gap-20 items-center pt-10 mb-10">
                 <div class="col-md-6 col-6" >
                   <div class="d-flex items-center" >
                     <!-- <div class="d-flex x-gap-5 items-center" >

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                      <i class="icon-star text-10 text-yellow-1"></i>

                     </div> -->
                       <!-- <div class="text-14 text-light-1 ml-10">3,014 reviews</div> -->
                  </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="row x-gap-10 pull-right">
                  <div class="col-auto">
                    <?php include 'share.php';?>
                  </div>
                </div>
              </div>
          </div>
              <div class="row">
                <div>              
            <div class="row y-gap-30 justify-between pt-20">
              <div class="col-md-auto col-6">
                <div class="d-flex tobbackgrond">
                  <i class="icon-bed text-22 mr-10"></i>
                  <div class="text-15 lh-15">
                  <?php echo $bedroom;?>
                  </div>
                </div>
              </div>
              <div class="col-md-auto col-6">
                <div class="d-flex tobbackgrond">
                  <i class="icon-bathtub text-22 mr-10"></i>
                  <div class="text-15 lh-15">
                  <?php echo $bathroom;?>
                  </div>
                </div>
              </div>
              <div class="col-md-auto col-6">
                <div class="d-flex tobbackgrond">
                  <i class="icon-bathtub text-22 mr-10"></i>
                  <div class="text-15 lh-15">
                  <?php echo $pool;?>
                  </div>
                </div>
              </div>
              <div class="col-md-auto col-6">
                <div class="d-flex tobbackgrond">
                  <i class="icon-customer text-22 mr-10"></i>
                  <div class="text-15 lh-15">
                  <?php echo $guestmin;?> - <?php echo $guestmax;?> Guests
                  </div>
                </div>
              </div>
              <div class="col-md-auto col-6">
                <div class="d-flex tobbackgrond">
                  <i class="icon-day-night text-22 mr-10"></i>
                  <div class="text-15 lh-15">
                      Minimum <?php echo $night;?> 
                  </div>
                </div>
              </div>
            </div>
        </div>                       
                
                <div id="Overview" class="col-12">  
                    <h3 class="text-22 fw-500 pt-40">Overview</h3>    
                      <div class="readmore js-read-more justify" data-rm-words="70">                    
                      <?php echo html_entity_decode($overview);?>
                     </div>
                   </div>                              
             
                <div class="col-md-12">
                    <div id="Amenities">
                          <h5 class="mt-20">Amenities</h5>
                      <div class="row">
                   
               
                         <?php 
                              if ($amenities != '') {
                                $amenitiesarray = array();
                                $amenitiesarray = explode(',', $amenities); //extracting comma separated string into array}                        
                              }                 
                                
                          /*  $enabled_amenities_array = array();
                            foreach($amenitiesarray as $data_amenities){
                              $enableddata = mysqli_query($sql, "SELECT * FROM `awt_facilities`  WHERE `title` = '$data_amenities' and `facilities_status` != 1");
                              $amenity_title=mysqli_fetch_object($enableddata);
                              if($amenity_title->title!='')
                              {
                                array_push($enabled_amenities_array,$amenity_title->title);
                              }
                            }*/
                             
                            foreach($amenitiesarray as $data){ 
                            //foreach($enabled_amenities_array as $data){
                              $selectiddata = mysqli_query($sql, "SELECT * FROM `awt_facilities`  WHERE `title` = '$data'");
                              if (++$i == 7) break;
                             
                              $getiddata = mysqli_fetch_object($selectiddata);
                              $ameninties_name = $getiddata->title;
                              $amenity_logo = $getiddata->upload_image;

                              //echo $amenity_logo;


                               if($x % 2 == 0){
                      
                                  echo'<div class="col-md-6 col-6">
                                      <div class="icons">
                                       <img _ngcontent-mgd-c195=""  src="'.WEBLINK.'upload/amenities/'.$amenity_logo.'"> 
                                      <span>'.$ameninties_name.'</span>
                                      </div>
                                      </div>';
                                
                                 }else{ 
                    
                                  echo'<div class="col-md-6 col-6">
                                    <div class="icons">
                                    <img _ngcontent-mgd-c195=""  src="'.WEBLINK.'upload/amenities/'.$amenity_logo.'"> 
                                    <span>'.$ameninties_name.'</span>
                                  </div>    
                                  </div>';                
                                    }
                                  } ?>
                
                        </div>
                      </div>
                </div>

                  <a class="js-open-modal btn" href="#" data-modal-id="popup1"><u>See More</u></a> 

                   <div id="popup1" class="modal-box">
                            <header> <a class="js-modal-close close">×</a>
                              <h4>Amenities</h4>
                            </header>
                                <div class="modal-body">
                                <div class="row">
                          
                            <?php 
                                                           
                             foreach($amenitiesarray as $data){ 
                            //  foreach($enabled_amenities_array as $data){
                              $selectiddata = mysqli_query($sql, "SELECT * FROM `awt_facilities` WHERE `title` = '$data'");
                              $getiddata = mysqli_fetch_object($selectiddata);
                              $ameninties_name = $getiddata->title;
                              $ameninties_logo = $getiddata->upload_image;


                               if($x % 2 == 0){
                      
                                echo'<div class="col-md-6 col-6">
                                    <div class="icons">
                                    <img _ngcontent-mgd-c195="" class="amenities-icon" src="'.WEBLINK.'upload/amenities/'.$ameninties_logo.'"> 
                                    <span>'.$ameninties_name.'</span>
                                    </div>
                                    </div>';
                          
                                  }else{ 
                      
                                    echo'<div class="col-md-6 col-6">
                                        <div class="icons">
                                        <img _ngcontent-mgd-c195="" class="amenities-icon" src="'.WEBLINK.'upload/amenities/'.$ameninties_logo.'"> 
                                        <span>'.$ameninties_name.'</span>
                                        </div>    
                                        </div>';              
                                    }
                                  } ?>
                
                           
                                      </div>
                                  </div>
                              </div>
                   
                       


        <div class="col-md-12">
            <div class="mealsection">
                <h5>Meal Plan</h5>
                  <p class="text-dark-1 text-16 mt-10">
                    <?php echo $short_desc;?> </p>
                  <div class="meal-types">
                    <div class="meal-type">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#11BF0E"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#11BF0E"></rect></svg><div class="text-sm-light clr-black">Veg</div>
                    </div>
                    <div class="meal-type">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#FA4B4B"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#FA4B4B"></rect></svg><div class="text-sm-light clr-black">Non-Veg</div></div>
                    </div>
                    <div class="listing__meals">
                        <span>
                          <?php 
                          if($upload_image !=''){
                              echo '<a href="'.WEBLINK.'upload/meal/'.$upload_image.'" target="blank" aria-label="meals-details" class="button px-10 fw-400 text-14 bg-blue-1 h-30 text-white mb-10">View Menu</a>';
                               }
                          if($adult1 !='' && $adult2 !='' && $adult3 !='' && $adult4 !=''){
                              echo '<a class="js-open-modal button px-10 fw-400 text-14 -outline-blue-1 h-30 text-blue-1 mb-10" href="#" data-modal-id="popup2">Read More</a>';
                               }
                          ?>
                    <!-- <a class="js-open-modal button px-10 fw-400 text-14 -outline-blue-1 h-30 text-blue-1 mb-10" href="#" data-modal-id="popup2">Read More</a> -->
                  </span>
              </div>

                  <div id="popup2" class="modal-box">
                    <header> <a class="js-modal-close close">×</a>
                      <h4>Meals Preferences</h4>
                    </header>
                    <div class="modal-body">
                      <!-- veg -->
                      <div class="vegmeal">
                          <div class="meals__body-heading-container veg-green"><svg width="24" height="24"       viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5"  width="23" height="23" rx="1.5" fill="white" stroke="#11BF0E"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#11BF0E"></rect></svg><p class="meals__body-heading">Veg</p>
                          </div>
                                                
                          <?php if($adult1 !='') {
                        echo '<div class="mt-20">
                            <h5>All meals</h5>
                              <div class="meals__body-content-wrapper">
                                <div class="meals__body-content-wrapper-row">
                                  <p class="meals__body-content-para-normal">Adults</p>
                                  <p class="meals__body-content-para-background">12+ YEARS</p>
                                </div>
                                <div class="meals__body-content-wrapper-row item-down">
                                  <p class="meals__body-content-para-bold">'.$adult1.'</p>
                                  <p class="meals__body-content-para-small">+GST</p>
                                </div>
                              </div>

                              <div class="meals__body-content-wrapper">
                                <div class="meals__body-content-wrapper-row">
                                  <p class="meals__body-content-para-normal">Children</p>
                                  <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                </div>
                                <div class="meals__body-content-wrapper-row item-down">
                                  <p class="meals__body-content-para-bold">'.$child1.'</p>
                                  <p class="meals__body-content-para-small">+GST</p>
                                </div>
                              </div>
                                </div>';

                              }
                          ?>

                          <?php if($adult2 !='') {

                            echo' <div class="mt-20">
                                  <h5>Any two meals</h5>
                                      <div class="meals__body-content-wrapper">
                                        <div class="meals__body-content-wrapper-row">
                                          <p class="meals__body-content-para-normal">Adults</p>
                                          <p class="meals__body-content-para-background">12+ YEARS</p>
                                        </div>
                                        <div class="meals__body-content-wrapper-row item-down">
                                          <p class="meals__body-content-para-bold">'.$adult2.'</p>
                                          <p class="meals__body-content-para-small">+GST</p>
                                        </div>
                                      </div>

                                          <div class="meals__body-content-wrapper">
                                            <div class="meals__body-content-wrapper-row">
                                              <p class="meals__body-content-para-normal">Children</p>
                                              <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                            </div>
                                            <div class="meals__body-content-wrapper-row item-down">
                                              <p class="meals__body-content-para-bold">'.$child2.'</p>
                                              <p class="meals__body-content-para-small">+GST</p>
                                            </div>
                                          </div>
                                </div>';}
                              ?>
                              
                      </div>
                      <!-- veg close -->
                      <!-- nonveg -->
                      <div class="vegmeal">
                          <div class="meals__body-heading-container non-veg-red">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#FA4B4B"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#FA4B4B"></rect></svg><p class="meals__body-heading">Non Veg</p>
                          </div>
                          <?php if($adult3 !='') {
                            echo '<div class="mt-20">
                                    <h5>All meals</h5>
                                      <div class="meals__body-content-wrapper">
                                        <div class="meals__body-content-wrapper-row">
                                          <p class="meals__body-content-para-normal">Adults</p>
                                          <p class="meals__body-content-para-background">12+ YEARS</p>
                                        </div>
                                        <div class="meals__body-content-wrapper-row item-down">
                                          <p class="meals__body-content-para-bold">'.$adult3.'</p>
                                          <p class="meals__body-content-para-small">+GST</p>
                                        </div>
                                      </div>

                                        <div class="meals__body-content-wrapper">
                                          <div class="meals__body-content-wrapper-row">
                                            <p class="meals__body-content-para-normal">Children</p>
                                            <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                          </div>
                                          <div class="meals__body-content-wrapper-row item-down">
                                            <p class="meals__body-content-para-bold">'.$child3.'</p>
                                            <p class="meals__body-content-para-small">+GST</p>
                                          </div>
                                        </div>
                                  </div>';
                          } ?>

                          <?php if($adult4 !='') {
                                echo  '<div class="mt-20">
                                      <h5>Any two meals</h5>
                                      <div class="meals__body-content-wrapper">
                                        <div class="meals__body-content-wrapper-row">
                                          <p class="meals__body-content-para-normal">Adults</p>
                                          <p class="meals__body-content-para-background">12+ YEARS</p>
                                        </div>
                                        <div class="meals__body-content-wrapper-row item-down">
                                          <p class="meals__body-content-para-bold">'.$adult4.'</p>
                                          <p class="meals__body-content-para-small">+GST</p>
                                        </div>
                                      </div>

                                          <div class="meals__body-content-wrapper">
                                            <div class="meals__body-content-wrapper-row">
                                              <p class="meals__body-content-para-normal">Children</p>
                                              <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                            </div>
                                            <div class="meals__body-content-wrapper-row item-down">
                                              <p class="meals__body-content-para-bold">'.$child4.'</p>
                                              <p class="meals__body-content-para-small">+GST</p>
                                            </div>
                                          </div>
                                  </div>';
                            } 
                          ?>
                      </div>
                      <!-- nonveg close -->
                    </div>
                  </div>
               </div>
          <p>(Meals can be booked offline by getting in touch with our team)</p>
    </div>
   

          <div class="col-lg-12 mt-20" id="Overview">
           
            <div class="tabs -underline-2 pt-10 lg:pt-40 sm:pt-30 js-tabs">
              <div class="tabs__controls row x-gap-10 y-gap-10 lg:x-gap-20 js-tabs-controls">

               <?php 
                 if($rules!=''){
                  echo '<div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">RULES FOR GUESTS</button>
                  </div>';
                 }
                 if($location!=''){
                  echo'<div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-2">LOCATION</button>
                </div>';

                 }
                 if($security!=''){
                //   echo'  <div class="col-auto">
                //   <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-4">SECURITY</button>
                // </div> ';

                echo'  <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-5">SECURITY</button>
                </div> ';

                 }
                 if($policies!=''){
                //   echo' <div class="col-auto">
                //   <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-5">POLICIES</button>
                // </div>';
                echo' <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-4">POLICIES</button>
                </div>';
                 }
                 if($question!=''){
                  echo' <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-3">FAQ</button>
                </div>';
                 }
               ?>
              </div>

               <div class="tabs__content pt-20 js-tabs-content">
                       <div class="tabs__pane -tab-item-1 is-tab-el-active" id="Overview">
                                    <div class="col-md-12">
                                    <?php echo html_entity_decode($rules);?>
                                    </div>
                                  </div>
                    
                       <div class="tabs__pane -tab-item-2" id="Overview">
                  <!-- <div class="col-md-12">
                     <iframe
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30745.998710708336!2d73.72867582349623!3d15.578294757882592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfe987ea084dc1%3A0x4d340b1a155b357e!2sAnjuna%2C%20Goa%20403509!5e0!3m2!1sen!2sin!4v1664912607897!5m2!1sen!2sin"
                           width="100%"
                           height="300"
                           style="border:0;"
                           allowfullscreen=""
                           loading="lazy"
                           referrerpolicy="no-referrer-when-downgrade"
                           ></iframe>
                   </div> -->
                </div>
               
                       <div class="tabs__pane -tab-item-3" id="Overview">
                  <div id="faq" class="layout-pb-md">
                    <div class="">
                      <div class="pt-10">
                          <div class="row y-gap-20">
                            
                            <div class="col-lg-12">
                                <div class="accordion -simple row y-gap-20 js-accordion">
                                      <?php 
                                      $x = 1;
                                      while($getvilaaQue = mysqli_fetch_object($queryvillaQue )){

                                    echo ' <div class="col-12">
                                    <div class="accordion__item px-20 py-20 border-light rounded-4">
                                          <div class="accordion__button d-flex items-center">
                                            <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                <i class="icon-plus"></i>
                                                <i class="icon-minus"></i>
                                            </div>
                                            <div class="button text-dark-1">'.$getvilaaQue->villaquestions.'</div>
                                          </div>
                                          <div class="accordion__content">
                                            <div class="pt-20 pl-60">
                                                <p class="text-15">
                                                '.$getvilaaQue->villaanswers.'
                                                </p>
                                                </div>
                                              </div>
                                          </div>
                                          </div>';

                                        $x++;}
                                          ?>                      
                                </div>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                  </div>

                        <div class="tabs__pane -tab-item-4" id="Overview">
                    <div class="col-md-12">
                      <div id="Policies">
                      <?php echo html_entity_decode($policies);?>
                      </div>
                    </div>
                  </div>
                     
                        <div class="tabs__pane -tab-item-5" id="Overview">
                  <div class="col-md-12">
                    <div id="Security">
                    <?php echo html_entity_decode($security);?>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </div>
                
          



          <div class="col-md-12 pt-40" id="Overview">
            <?php echo html_entity_decode($shortdesc);?>               
         </div>     
         </div>
        </div>

          <div class="col-xl-4" id="bookvilla">
            <div class="">
              <div class="jq_sidebar_fix">
                <div class="mt-0">  
                </div>
                  <aside class="sidebar">
                    <div class="sidebar__item">
                      <div class="px-15 py-15 rounded-4">
                             <!-- <h5 class="text-22 fw-500">Book Now</h5> -->
                          <?php include('details-side.php');?>                       
                      </div>                     
                    </div>
                  </aside>
                    <?php include ('connect-with-host.php');?> 
                </div>
              </div>        
            </div>  
                                   
          </div>
      </div>
    </div>
  </div>
</section>

  <div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
  </div>
  <?php 
  if(!isset($_SESSION[SESSION])) { ?>

    <section id="reviews">
    <div class="container" style="display :none;">
      <div class="row y-gap-40 mb-40 justify-between">
        <div class="col-xl-3">

          <div class="d-flex items-center mt-20">
            <div class="flex-center bg-blue-1 rounded-4 size-70 text-22 fw-600 text-white">4.8</div>
            <div class="ml-20">
              <div class="text-16 text-dark-1 fw-500 lh-14">Reviews</div>
              <div class="text-15 text-light-1 lh-14 mt-4">114 reviews</div>
            </div>
          </div>

          <div class="row y-gap-20 pt-20">

            <div class="col-12">
              <div class="">
                <div class="d-flex items-center justify-between">
                  <div class="text-15 fw-500">Cleanliness</div>
                  <div class="text-15 text-light-1">9.4</div>
                </div>

                <div class="progressBar mt-10">
                  <div class="progressBar__bg bg-blue-2"></div>
                  <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="">
                <div class="d-flex items-center justify-between">
                  <div class="text-15 fw-500">Communication</div>
                  <div class="text-15 text-light-1">9.4</div>
                </div>

                <div class="progressBar mt-10">
                  <div class="progressBar__bg bg-blue-2"></div>
                  <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="">
                <div class="d-flex items-center justify-between">
                  <div class="text-15 fw-500">Check-in</div>
                  <div class="text-15 text-light-1">9.4</div>
                </div>

                <div class="progressBar mt-10">
                  <div class="progressBar__bg bg-blue-2"></div>
                  <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="">
                <div class="d-flex items-center justify-between">
                  <div class="text-15 fw-500">Accuracy</div>
                  <div class="text-15 text-light-1">9.4</div>
                </div>

                <div class="progressBar mt-10">
                  <div class="progressBar__bg bg-blue-2"></div>
                  <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="">
                <div class="d-flex items-center justify-between">
                  <div class="text-15 fw-500">Location</div>
                  <div class="text-15 text-light-1">9.4</div>
                </div>

                <div class="progressBar mt-10">
                  <div class="progressBar__bg bg-blue-2"></div>
                  <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="">
                <div class="d-flex items-center justify-between">
                  <div class="text-15 fw-500">Value</div>
                  <div class="text-15 text-light-1">9.4</div>
                </div>

                <div class="progressBar mt-10">
                  <div class="progressBar__bg bg-blue-2"></div>
                  <div class="progressBar__bar bg-blue-1" style="width: 90%"></div>
                </div>
              </div>
            </div>

            

          </div>
        </div>

        <div class="col-xl-8">
          <div class="row y-gap-40">


            <div class="col-12">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>


            <div class="col-12">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>


            <div class="col-12">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>


            <div class="col-12">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>


            <div class="col-auto">

             

              <a class="js-open-modal btn button -md -outline-blue-1 text-blue-1" href="#" data-modal-id="reviews-pop">Show all 116 reviews <div class="icon-arrow-top-right ml-15"></div></a> 

                             <div id="reviews-pop" class="modal-box">
<header> <a class="js-modal-close close">×</a>
  <h4>198 reviews</h4>
</header>
<div class="modal-body">
      <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>

            <div class="col-12 pt-20 pb-5">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="<?php echo WEBLINK;?>img/avatars/2.png" alt="image">
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
            </div>


    </div>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <?php }else{ ?>
    
    <section>
          <div class="container" style="display :none;">
            <div class="row y-gap-30 justify-between pb-20">
              <div class="col-xl-3">
                <div class="row">
                  <div class="col-auto">
                    <h3 class="text-22 fw-500">Leave a Reply</h3>
                    <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
                  </div>
                </div>

                <div class="row y-gap-30 pt-30">

                  <div class="col-sm-6">
                    <div class="text-15 lh-1 fw-500">Cleanliness</div>
                    <div class="d-flex x-gap-5 items-center pt-10 text-10">
                      <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                      <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                      <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                      <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                      <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-15 lh-1 fw-500">Communication</div>
                    <div class="d-flex x-gap-5 items-center pt-10 text-10">
                      <span class="fa fa-star" id="star1" onclick="add(this,11)"></span>
                      <span class="fa fa-star" id="star2" onclick="add(this,12)"></span>
                      <span class="fa fa-star" id="star3" onclick="add(this,13)"></span>
                      <span class="fa fa-star" id="star4" onclick="add(this,14)"></span>
                      <span class="fa fa-star" id="star5" onclick="add(this,15)"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-15 lh-1 fw-500">Check-in</div>
                    <div class="d-flex x-gap-5 items-center pt-10 text-10">
                      <span class="fa fa-star" id="star1" onclick="add(this,21)"></span>
                      <span class="fa fa-star" id="star2" onclick="add(this,22)"></span>
                      <span class="fa fa-star" id="star3" onclick="add(this,23)"></span>
                      <span class="fa fa-star" id="star4" onclick="add(this,24)"></span>
                      <span class="fa fa-star" id="star5" onclick="add(this,25)"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-15 lh-1 fw-500">Accuracy</div>
                    <div class="d-flex x-gap-5 items-center pt-10 text-10">
                      <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                      <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                      <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                      <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                      <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-15 lh-1 fw-500">Location</div>
                    <div class="d-flex x-gap-5 items-center pt-10 text-10">
                      <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                      <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                      <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                      <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                      <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-15 lh-1 fw-500">Value</div>
                    <div class="d-flex x-gap-5 items-center pt-10 text-10">
                      <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                      <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                      <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                      <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                      <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                    </div>
                  </div>


                </div>
              </div>

              <div class="col-xl-8">
                <div class="row y-gap-30">
              

               
              
                <form action="" method="POST" enctype="multipart/form-data">
                      <div class="col-xl-6">
                        <div class="form-input ">
                          <p class="text-16">Name</p>
                          <input type="text" id="userreview" name="userreview" required="">
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="form-input ">
                          <p class="text-16">Email Id</p>
                          <input type="emailreview" id ="emailreview" name="emailreview" required="">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-input ">
                          <p class="text-16">Write Your Comment</p>
                          <textarea required rows="6" name="commentreview" id="commentreview"></textarea>              
                        </div>
                      </div>
                      <div class="reviw">
                          <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                          <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                          <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                          <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                          <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                      </div>
                      <div class="col-auto">
                        <button class="button px-24 h-50 -dark-1 bg-blue-1 text-white" type="submit" name="submitreview" id="submitreview">  Post Comment
                        <div class="icon-arrow-top-right ml-15"></div>
                          </button>
                        
                      </div>
                  </form>

              

               
                  
       </div>
           </div>
        </div>
    </div>
  </section>
 <?php } ?>
  

   
    
<?php include('footer.php'); ?>
<script type="text/javascript" src="<?php echo WEBLINK; ?>js/requestcall.js?v=<?php echo time(); ?>"></script>
