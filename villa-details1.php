<?php 
include('config.php');
include('module/home.php');
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include 'main-css.php';?>

      <title>StayBindass</title>
   </head>
   <body>
      <div class="preloader js-preloader">
         <div class="preloader__wrap">
            <div class="preloader__icon">
               <img src="img/general/preloader.png">
            </div>
         </div>
         <!-- <div class="preloader__title">StayBindass</div> -->
      </div>
      <main>
         <?php include 'header.php';?>

         
         

    

    <section class="">

    <?php// foreach($addproperty_data as $addproperty) { $x=1?>

      <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="xl-1 lg-1 md-1 sm-1 xs-1 base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next"> 
              <div class="swiper-wrapper photo">
                <div class="swiper-slide">
                  <img src="img/banner.jpg" alt="image" class="col-12 h-full object-cover">
                </div>

                <div class="swiper-slide">
                  <img src="img/banner.jpg" alt="image" class="col-12 h-full object-cover">
                </div>

                <div class="swiper-slide">
                  <img src="img/banner.jpg" alt="image" class="col-12 h-full object-cover">
                </div>

                <div class="swiper-slide">
                  <img src="img/banner.jpg" alt="image" class="col-12 h-full object-cover">
                </div>

              </div>

              <div class="absolute h-full col-11">

                <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev">
                  <i class="icon icon-chevron-left text-12"></i>
                </button>

                <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next">
                  <i class="icon icon-chevron-right text-12"></i>
                </button>

                <div class="video_play-btn-container"><button class="video_play-btn" title="play listing stories" aria-label="play listing stories"><span class="video_play-btn-svg-container"><svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5921 7.64521C13.2335 8.03461 13.2335 8.96539 12.5921 9.35479L1.51898 16.0778C0.852556 16.4824 2.54178e-07 16.0026 2.88257e-07 15.223L8.75998e-07 1.77702C9.10077e-07 0.997389 0.852557 0.517623 1.51898 0.922236L12.5921 7.64521Z" fill="black"></path></svg></span></button></div>

              </div>

              <div class="listing-name-address-container"><h1><?php //echo $addproperty->title;?></h1>
                <h3><i class="icon-bed text-16 text-w"></i> 3 Bedrooms</h3>
              <h4><i class="icon-placeholder text-16 text-w"></i> Kihim, Maharashtra</h4>
            </div>

              <div class="absolute image-popup h-full col-12 px-10 py-10 d-flex justify-end items-end">
            <a data-x-click="filterPopup" class="button cursor -blue-1 text-dark-1 z-2">
              <img src="img/banner.jpg">
              <p>+40</p>
            </a>
           
          </div>
            </div>

            <?php //$x++; } ?>
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
      <div class="col-md-12 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-12 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-12 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-12 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-12 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
      <div class="col-md-6 px-10 py-10">
        <li><a href="img/Villa/Villa SB 001/Villa SB 001-4.jpg"><img src="img/Villa/Villa SB 001/Villa SB 001-4.jpg" alt="Image"></a></li>
      </div>
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
              <div class="col-md-6 col-6">
                <div class="d-flex items-center">
                  <div class="d-flex x-gap-5 items-center">

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                  </div>

                  <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                </div>
              </div>

              <div class="col-md-6 col-6">
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
                      5 Bedrooms
                    </div>
                  </div>
                </div>

                <div class="col-md-auto col-6">
                  <div class="d-flex tobbackgrond">
                    <i class="icon-bathtub text-22 mr-10"></i>
                    <div class="text-15 lh-15">
                      3 Bathrooms 
                    </div>
                  </div>
                </div>

                <div class="col-md-auto col-6">
                  <div class="d-flex tobbackgrond">
                    <i class="icon-customer text-22 mr-10"></i>
                    <div class="text-15 lh-15">
                      11 Guests
                    </div>
                  </div>
                </div>

                <div class="col-md-auto col-6">
                  <div class="d-flex tobbackgrond">
                    <i class="icon-day-night text-22 mr-10"></i>
                    <div class="text-15 lh-15">
                       Minimum 2 Night 
                    </div>
                  </div>
                </div>


              </div>
            </div>

                              
                              <div id="Overview" class="col-12">
                                 <h3 class="text-22 fw-500 pt-40">Overview</h3>
                                 <div class="readmore js-read-more justify" data-rm-words="70">
                                    <p class="text-dark-1 text-16 mt-20">
                                       This villa is a perfect place for your getaway. A lavish residence with beautiful scenic views will make it a worth staying vacation. The villa has a beautiful interior with pleasant decor
                                       and is fully furnished with luxurious furniture for your comfort. The enormous glass windows and doors of this villa will allow you to enjoy the verdure with an astonishing natural
                                       skylight coming through them. The room's interior has a creamy texture with pleasant lights in each of the rooms which gives a soothing experience to sit and enjoy quality time. The
                                       poolside area is best for breakfast to sit and chit-chat with family and friends. The wonderful dining area fits a perfect match for having delicious and mouth-watering Goan cuisine at the
                                       table. You can look out to a panoramic view from the balcony, sitting there and grooving on the songs. The 3 cozy bedrooms will give you the most comfortable experience and give homely
                                       vibes for you to lighten yourself up.
                                    </p>
                                    <p class="text-dark-1 text-16 mt-20">
                                       This villa is the absolute ideal choice you can make for your holiday homes. This villa is best to rent with such amenities for family and friends. It's basically situated in Gumal vaddo,
                                       Anjuna which is a truly scenic wonderful beach. One can enjoy and discover the various colorful Portuguese houses, churches, and farm fields. Well-known cafes and restaurants are just a
                                       drive away from the residence. You can book a villa for an amazing luxurious experience without disturbing your own privacy.
                                    </p>


                                    <div class="col-md-12">
                                 <h4 class="mt-20">For the comfort and security check, please take time to note and read the House rules and Policies.</h4>
                                 <h5 class="mt-20">Villa SB 001 is an amazing choice because of its:</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Pleasant and illuminated interiors with a texture of grandiosity</li>
                                    <li>Unique location medially situated among the beautiful farm fields and green grazing land</li>
                                    <li>Authentic feel of Portuguese and Goan elegance</li>
                                    <li>Private pool with a sitting arrangement to chill</li>
                                    <li>Easy access to nearby restaurants and cafes</li>
                                    <li>Eye pleasing view from the balcony</li>
                                    <li>Cozy and comfortable bedrooms to relax</li>
                                 </ul>
                               </div>
                                 <div class="col-md-12">
                                 <div id="Amenities">
                                 <h5 class="mt-20">For us, your comfort comes first! For that, we add these amenities:</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>24x7 security for our guests</li>
                                    <li>Wi-fi connectivity with high-speed access</li>
                                    <li>100% power backup</li>
                                    <li>Property manager for any issues</li>
                                    <li>Caretaker for the day</li>
                                    <li>Housekeeping once a day</li>
                                    <li>Evening turndown services are available</li>
                                    <li>Electric Kettle is available</li>
                                    <li>Washing machine for cleaning clothes</li>
                                    <li>Iron/Ironing Board are provided</li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <h4 class="mt-20">The spacious room tour:</h4>
                                 <div id="Bedrooms">
                                 <h5 class="mt-20">BEDROOMS</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>This sprawling villa consists of 3 bedrooms</li>
                                    <li>Rooms are well organized and have AC in each room</li>
                                    <li>All the bedrooms have luxurious amenities including a king-sized bed with attached bathrooms.</li>
                                    <li>High-speed wifi and a TV connection are offered in every room</li>
                                    <li>All bedrooms are super clean and neat</li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <div id="Bathrooms">
                                 <h5 class="mt-20">BATHROOMS</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>There are 3 spacious bathrooms attached to the bedrooms</li>
                                    <li>Bathrooms are well organized and excellently cleaned</li>
                                    <li>Geyser/Water Heater is provided in every bathroom</li>
                                    <li>All of them consist of a shower and western toilet seat</li>
                                    <li>All top amenities including toiletries, shower cubicle, towels, toilet Paper, and other essentials are provided</li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <h5 class="mt-20">COMMON AREAS</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>On the ground floor it has a living area which is fully furnished with sofas, tables, and chairs</li>
                                    <li>There is a dining area which is part of the living area with comfortable seating</li>
                                    <li>There is a closet and clothes rack for keeping clothes safe</li>
                                    <li>There is a small balcony on the first floor which gives you a beautiful outdoor view</li>
                                    <li>The pool is beside the living area</li>
                                 </ul>
                               </div>
                               <div class="col-md-12">
                                 <div id="Kitchen">
                                 <h5 class="mt-20">KITCHEN</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Guests have the access to the kitchen</li>
                                    <li>Simple food, tea, coffee, and instant noodles can be made</li>
                                    <li>Crockery and cutlery are ready to use when needed</li>
                                    <li>It has a microwave, gas stove, refrigerator; and other essential things</li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <div id="Food">
                                 <h5 class="mt-20">FOOD</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Cook for breakfast is available (included) from 8 am to 11 am</li>
                                    <li>Ingredients and groceries will be charged as per actuals</li>
                                    <li>No cook charges for breakfast</li>
                                    <li>Cook charges for lunch, dinner is Rs 1000/- per meal</li>
                                    <li>Guests can order food from nearby restaurants if needed</li>
                                 </ul>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <h5 class="mt-20">ACCESS TO THE VILLA</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>The guests have access to the entire villa</li>
                                    <li>Restricted areas to be avoided if any</li>
                                 </ul>
                               </div>
                               <div class="col-md-12">
                                 <h5 class="mt-20">AVAILABILITY OF MANAGER/CARETAKER</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>The caretaker of the villa will be available for you the entire day</li>
                                    <li>He will be present at the villa if anything is needed for your comfort</li>
                                    <li>The manager will communicate via calls or messages anytime if needed</li>
                                 </ul>
                               </div>
                               <div class="col-md-12">
                                 <h5 class="mt-20">FUN ACTIVITIES</h5>
                                 <p class="text-dark-1 text-16 mt-10">
                                    The guests can have a fun playing day at the villa by playing amazing indoor games as well as pool games. Guests can also have the beaches to talk a pleasant walk, chill, and seize the scenic
                                    beauty.
                                 </p>
                               </div>
                               <div class="col-md-12">
                                 <h5 class="mt-20">NEARBY TRAVEL ROUTES/ TRANSPORTATIONS</h5>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Distance from Goa International Airport: 43 km</li>
                                    <li>Thivim Railway Station: 18 km</li>
                                    <li>Panjim Bus Stand: 18 km</li>
                                    <li>Mapusa Bus Stand: 8.8 km</li>
                                 </ul>
                               </div>
                               <div class="col-md-12">
                                 <div id="TopAttractions">
                                 <h5 class="mt-20">TOP ATTRACTIONS</h5>
                                 <p class="text-dark-1 text-16 mt-10">
                                    When it comes to traveling to Goa you must have the checklist ready with you, here we have the most attractive places where you can visit and which are a few km drive away from the villa. We
                                    have picked some amazing spots for your travel experience and wandering around to explore the scenic beauty of this heavenly land.
                                 </p>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Fort Aguada: 15 km</li>
                                    <li>Wax World Museum: 28.3 km</li>
                                    <li>Mae De Deus Church: 8.1 km</li>
                                    <li>The Cube Gallary: 14 km</li>
                                    <li>Anjuna flea market: 3 km</li>
                                    <li>Hilltop Goa: 750 m</li>
                                    <li>Sunset point: 1.5 km</li>
                                    <li>Hammerzz Nightclub: 4.6 km</li>
                                    <li>Ozran Beach: 1.5 km</li>
                                    <li>Anjuna Beach: 1.2 km</li>
                                    <li>Vagator Beach: 2.3 km</li>
                                    <li>Baga Beach: 7 km</li>
                                    <li>Morjim Beach: 13.2 km</li>
                                 </ul>
                               </div>
                             </div>
                             <div class="col-md-12">
                                 <h5 class="mt-20">WHAT'S AROUND</h5>
                                 <p class="text-dark-1 text-16 mt-10">
                                    Goa is famous for its beaches and heritage, which makes it a hot spot for tourists. Its enchanting night lifestyle attracts the world to visit this land. Goa is also famous for its heavenly
                                    panoramic beaches and Goan Cuisine. People come to experience the Portuguese culture and dynamic festivals held every year. The charming heritage of this land and eye soothing spectacle. Here
                                    are some nearby places which you can visit while staying and enjoying your perfect holiday at the villa.
                                 </p>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Witness the glory of the beautiful Goan houses</li>
                                    <li>Enjoy the local drinks and fabulous cuisine</li>
                                    <li>Experience the beauty of paddy lands and beaches</li>
                                    <li>Water sports activities are a must for adventure-seeking friends</li>
                                    <li>Finger-licking seafood should be there in your list</li>
                                 </ul>
                               </div>

                               

                                 </div>
                              </div>


                              <div class="col-md-12">
                                 <div id="Amenities">
                                 <h5 class="mt-20">Amenities</h5>
                                 <div class="row">
                                   <div class="col-md-6 col-6">
                                    <div class="icons">
                                      <img _ngcontent-mgd-c195="" class="amenities-icon" src="https://vista-prod-web.s3.ap-south-1.amazonaws.com/icons/smqqf4pd2s6h0l2cnmef.jpg"> 
                                      <span>Tv</span>
                                    </div>
                                    <div class="icons">
                                      <img _ngcontent-mgd-c195="" class="amenities-icon" src="https://vista-prod-web.s3.ap-south-1.amazonaws.com/icons/smqqf4pd2s6h0l2cnmef.jpg"> 
                                      <span>Wifi</span>
                                    </div>
                                    <div class="icons">
                                      <img _ngcontent-mgd-c195="" class="amenities-icon" src="https://vista-prod-web.s3.ap-south-1.amazonaws.com/icons/smqqf4pd2s6h0l2cnmef.jpg"> 
                                      <span>Pool</span>
                                    </div>
                                   </div>

                                   <div class="col-md-6 col-6">
                                    <div class="icons">
                                      <img _ngcontent-mgd-c195="" class="amenities-icon" src="https://vista-prod-web.s3.ap-south-1.amazonaws.com/icons/smqqf4pd2s6h0l2cnmef.jpg"> 
                                      <span>Ac</span>
                                    </div>
                                    <div class="icons">
                                      <img _ngcontent-mgd-c195="" class="amenities-icon" src="https://vista-prod-web.s3.ap-south-1.amazonaws.com/icons/smqqf4pd2s6h0l2cnmef.jpg"> 
                                      <span>Parking</span>
                                    </div>
                                    <div class="icons">
                                      <img _ngcontent-mgd-c195="" class="amenities-icon" src="https://vista-prod-web.s3.ap-south-1.amazonaws.com/icons/smqqf4pd2s6h0l2cnmef.jpg"> 
                                      <span>Valley View</span>
                                    </div>
                                   </div>

                                 </div>

                          

                                 </div>
                               </div>

                               <a class="js-open-modal btn" href="#" data-modal-id="popup1"><u>See More</u></a> 

                               <div id="popup1" class="modal-box">
  <header> <a class="js-modal-close close">×</a>
    <h4>Amenities</h4>
  </header>
  <div class="modal-body">
        <ul>
          <li>Tv</li>
<li>Ac</li>
<li>Wifi</li>
<li>Parking</li>
<li>Pool</li>
<li>Valley View</li>
<li>Lawn</li>
<li>Music System</li>
<li>Bonfire</li>
<li>Tv</li>
<li>Ac</li>
<li>Wifi</li>
<li>Parking</li>
<li>Pool</li>
<li>Valley View</li>
<li>Lawn</li>
<li>Music System</li>
<li>Bonfire</li>
        </ul>
      </div>
</div>




<div class="col-md-12">
                                 <div class="mealsection">
                                   <h5>Meal Plan</h5>
                                 <p class="text-dark-1 text-16 mt-10">
                                We offer healthy home-cooked meals prepared using locally sourced fresh ingredients. Tea/Coffee will be served during breakfast and high tea time. If you would like tea/coffee at any other time of the day, it can be arranged at an additional charge. </p>
                                    <div class="meal-types">
                                      <div class="meal-type">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#11BF0E"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#11BF0E"></rect></svg><div class="text-sm-light clr-black">Veg</div>
                                      </div>
                                      <div class="meal-type">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#FA4B4B"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#FA4B4B"></rect></svg><div class="text-sm-light clr-black">Non-Veg</div></div>
                                      </div>
                                      <div class="listing__meals">
                                      <span>
                                        <a href="https://staybindass.com/pdf/Villas%20SB%20001.pdf" target="blank" aria-label="meals-details" class="button px-10 fw-400 text-14 bg-blue-1 h-30 text-white mb-10">View Menu</a>
                                        <a class="js-open-modal button px-10 fw-400 text-14 -outline-blue-1 h-30 text-blue-1 mb-10" href="#" data-modal-id="popup2">Read More</a>
                                      </span>


                                      </div>
                                 

                                                                
<div id="popup2" class="modal-box">
  <header> <a class="js-modal-close close">×</a>
    <h4>Meals Preferences</h4>
  </header>
  <div class="modal-body">

    <!-- veg -->
    <div class="vegmeal">
      <div class="meals__body-heading-container veg-green"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#11BF0E"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#11BF0E"></rect></svg><p class="meals__body-heading">Veg</p></div>
      
      <div class="mt-20">
        <h5>All meals</h5>
    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Adults</p>
        <p class="meals__body-content-para-background">12+ YEARS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1700</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>

    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Children</p>
        <p class="meals__body-content-para-background">6-12 YEARSS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1200</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>
      </div>

    <div class="mt-20">
        <h5>Any two meals</h5>
    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Adults</p>
        <p class="meals__body-content-para-background">12+ YEARS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1500</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>

    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Children</p>
        <p class="meals__body-content-para-background">6-12 YEARSS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1000</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>
      </div>

    </div>
    <!-- veg close -->


    <!-- nonveg -->
    <div class="vegmeal">
      <div class="meals__body-heading-container non-veg-red"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#FA4B4B"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#FA4B4B"></rect></svg><p class="meals__body-heading">Non Veg</p></div>
      
      <div class="mt-20">
        <h5>All meals</h5>
    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Adults</p>
        <p class="meals__body-content-para-background">12+ YEARS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1700</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>

    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Children</p>
        <p class="meals__body-content-para-background">6-12 YEARSS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1200</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>
      </div>

    <div class="mt-20">
        <h5>Any two meals</h5>
    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Adults</p>
        <p class="meals__body-content-para-background">12+ YEARS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1500</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>

    <div class="meals__body-content-wrapper">
      <div class="meals__body-content-wrapper-row">
        <p class="meals__body-content-para-normal">Children</p>
        <p class="meals__body-content-para-background">6-12 YEARSS</p>
      </div>
      <div class="meals__body-content-wrapper-row item-down">
        <p class="meals__body-content-para-bold">₹ 1000</p>
        <p class="meals__body-content-para-small">+GST</p>
      </div>
    </div>
      </div>

    </div>
    <!-- nonveg close -->



  </div>
</div>
                                 </div>

                                 <p>(Meals can be booked offline by getting in touch with our team)</p>
                              
                               </div>



                                 <div class="col-lg-12 mt-20">
           
            <div class="tabs -underline-2 pt-10 lg:pt-40 sm:pt-30 js-tabs">
              <div class="tabs__controls row x-gap-10 y-gap-10 lg:x-gap-20 js-tabs-controls">

                <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">RULES FOR GUESTS</button>
                </div>
                <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-2">LOCATION</button>
                </div>
                

                <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-3">FAQ'S</button>
                </div>
                <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-4">SECURITY</button>
                </div>
                

                <div class="col-auto">
                  <button class="tabs__button text-light-1 fw-500 px-5 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-5">POLICIES</button>
                </div>

              </div>

              <div class="tabs__content pt-20 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                  <div class="col-md-12">
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>Check-in timing 1 PM and Check-out timing 11 AM</li>
                                    <li>The villa has the occupancy of 6 guests maximum</li>
                                    <li>Guests are requested to keep the space clean</li>
                                    <li>Loud music is prohibited after 10:00 PM</li>
                                    <li>Alcohol consumption is allowed</li>
                                    <li>Smoking is allowed only outdoors</li>
                                    <li>Our kitchen can be used by the guests anytime during their stay</li>
                                    <li>Guests are responsible for his/her personal belongings and valuables</li>
                                    <li>Children should be looked after while they are in or around the pool</li>
                                    <li>Guests are sincerely requested to treat the home with care property</li>
                                    <li>Smoking within the premises is not allowed</li>
                                    <li>Does not allow private parties or events</li>
                                    <li>Guests below 18 years of age are allowed, suitable for children</li>
                                    <li>Unmarried couples/guests with Local IDs are allowed</li>
                                    <li>Unmarried couples and bachelors allowed</li>
                                    <li>Office ID and Non-Govt IDs are not accepted as ID proof(s)</li>
                                    <li>Passport, Aadhar, Driving License, and Govt. IDs are accepted as ID proof(s)</li>
                                 </ul>
                               </div>
                </div>


                <div class="tabs__pane -tab-item-2 ">
                  <div class="col-md-12">
                                 <iframe
                                       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30745.998710708336!2d73.72867582349623!3d15.578294757882592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfe987ea084dc1%3A0x4d340b1a155b357e!2sAnjuna%2C%20Goa%20403509!5e0!3m2!1sen!2sin!4v1664912607897!5m2!1sen!2sin"
                                       width="100%"
                                       height="300"
                                       style="border:0;"
                                       allowfullscreen=""
                                       loading="lazy"
                                       referrerpolicy="no-referrer-when-downgrade"
                                       ></iframe>
                               </div>
                </div>

                <div class="tabs__pane -tab-item-3 ">
                  <div id="faq" class="layout-pb-md">
            <div class="">
               <div class="pt-10">
                  <div class="row y-gap-20">
                     
                     <div class="col-lg-12">
                        <div class="accordion -simple row y-gap-20 js-accordion">
                           <div class="col-12">
                              <div class="accordion__item px-20 py-20 border-light rounded-4">
                                 <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                       <i class="icon-plus"></i>
                                       <i class="icon-minus"></i>
                                    </div>
                                    <div class="button text-dark-1">1. How can I make a direct booking with Staybindass</div>
                                 </div>
                                 <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                       <p class="text-15">
                                          Browse the city in which you want to stay, and filter your exact needs. When you love any of the properties and you are ready to book, simply make your online reservation and it is
                                          swiftly confirmed.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="accordion__item px-20 py-20 border-light rounded-4">
                                 <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                       <i class="icon-plus"></i>
                                       <i class="icon-minus"></i>
                                    </div>
                                    <div class="button text-dark-1">2. Is my booking will get instantly confirmed?</div>
                                 </div>
                                 <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                       <p class="text-15">
                                          Yes it will get swiftly confirmed, if not then you can expect a call from our team within an hour or two. If you have any queries then you can freely contact our janitor team they will
                                          assist you.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="accordion__item px-20 py-20 border-light rounded-4">
                                 <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                       <i class="icon-plus"></i>
                                       <i class="icon-minus"></i>
                                    </div>
                                    <div class="button text-dark-1">3. What is the pre-check-in process?</div>
                                 </div>
                                 <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                       <p class="text-15">
                                          We need to get some paperwork completed before you arrive, including collecting a picture of a government-issued id or any legal id proofs of yours, we do this to verify identity and
                                          ensure the safety of our guests in all of our homes.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                </div>

                <div class="tabs__pane -tab-item-4 ">
                  <div class="col-md-12">
                                 <div id="Policies">
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>The full payment must be made for your booking to be confirmed.</li>
                                    <li>Security deposit of 20,000 Rs is to be paid before check-in.</li>
                                    <li>In case there is a lockdown in the City, we can refund the full advance payment</li>
                                    <li>The foreign nationals have to share their passport and visa details prior to their stay.</li>
                                    <li>To avail of this, you need to send aadhar card copies for all guests.</li>
                                    <li>The number of guests must not exceed the count previously mentioned at the time of booking.</li>
                                    <li>Any harm to the property will be charged as per the actual repairing amount or replacing amount.</li>
                                    <li>The only guests registered are allowed on the premises of the villa.</li>
                                    <li>Any commercial and illegal activity is strictly not permitted.</li>
                                 </ul>
                                 </div>
                               </div>
                </div>

                <div class="tabs__pane -tab-item-5 ">
                <div class="col-md-12">
                                 <div id="Security">
                                 <p class="text-dark-1 text-16 mt-10">
                                    A perfect stay requires perfect security, while staying at the villas we would like to mention a few details to ensure a perfect stay without any unknown troublesome queries.
                                 </p>
                                 <ul class="list-disc text-15 mt-10 pl-20">
                                    <li>In case of any electrical failure, the generator will be activated which will support all appliances for up to 24 hours</li>
                                    <li>There are CCTV cameras at the entrance of the villa for security purposes</li>
                                    <li>The caretaker will be available all the time if needed</li>
                                 </ul>
                                 </div>
                               </div>
                             </div>

              </div>
            </div>
          </div>

                              
                            
                              
                               
                               
                               
                               <div class="col-md-12">
                                 <p class="text-dark-1 text-16 mt-40">
                                    We are here to welcome and host you! The moment you book, our team will get in touch with you to update you with the additional details which you may want to know and we will be at your
                                    service and take care of your comfort.
                                 </p>
                                 <p class="text-dark-1 text-16 mt-10">From Team Staybindass: Welcome your perfect holiday home!</p>
                                 
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-xl-4" id="bookvilla">
                           <div class="">
                              <div class="jq_sidebar_fix">
                                 <div class="mt-0"></div>
                                 <aside class="sidebar">
                                    <div class="sidebar__item">
                                       <div class="px-15 py-15 rounded-4">
                                          <!-- <h5 class="text-22 fw-500">Book Now</h5> -->
                                          
                                          
                                             <?php include 'details-side.php';?>
                                         
                                       </div>
                                        
                                    </div>
                                 </aside>
                              </div>
                           </div>


                           <!-- /.jq_sidebar_fix -->
                        </div>
                        <!-- /.column2 -->
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <div class="container mt-40 mb-40">
      <div class="border-top-light"></div>
    </div>

    <section id="reviews">
      <div class="container">
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
                    <img src="img/avatars/2.png" alt="image">
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
                    <img src="img/avatars/2.png" alt="image">
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
                    <img src="img/avatars/2.png" alt="image">
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
                    <img src="img/avatars/2.png" alt="image">
                  </div>
                  <div class="col-auto">
                    <div class="fw-500 lh-15">Tonko</div>
                    <div class="text-14 text-light-1 lh-15">March 2022</div>
                  </div>
                </div>

                <p class="text-15 text-dark-1 mt-10">Nice two level apartment in great London location. Located in quiet small street, but just 50 meters from main street and bus stop. Tube station is short walk, just like two grocery stores. </p>
              </div>


              <div class="col-auto">

                <a href="#" class="button -md -outline-blue-1 text-blue-1">
                  Show all 116 reviews <div class="icon-arrow-top-right ml-15"></div>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
              

  

      <?php include 'footer.php';?>
      </main>
      <!-- JavaScript -->
      <?php include 'script.php';?>
      <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/236d4cdebfe0b9c501e6e635459f5ca0.js"></script>
      <!-- Popup -->
   </body>
</html>