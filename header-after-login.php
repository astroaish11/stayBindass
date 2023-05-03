<header data-add-bg="bg-white" class="header  js-header" data-x="header" data-x-toggle="is-menu-opened">
   <div class="container mx-auto px-30 sm:px-20">
      <div class="row justify-between items-center">
         <div class="col-auto">
            <div class="d-flex items-center">
               <a href="<?php echo WEBLINK; ?>" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
               <img src="<?php echo WEBLINK; ?>img/logo.png" alt="logo icon">
               <img src="<?php echo WEBLINK; ?>img/logo.png" alt="logo icon">
               </a>
               <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                  <div class="mobile-overlay"></div>
                  <div class="header-menu__content">
                     <div class="mobile-bg js-mobile-bg"></div>
                     <div class="menu js-navList">
                        <ul class="menu__nav text-dark-1 -is-active">
                           <li>
                              <a href="<?php echo WEBLINK; ?>">Home</a>

                           </li>
                           <li class="menu-item-has-children">
                              <a data-barba href="#">
                              <span class="mr-10">Villas On Rent</span>
                              <i class="icon icon-chevron-sm-down"></i>
                              </a>
                              <ul class="subnav">
                                 <li class="subnav__backBtn js-nav-list-back">
                                    <a href="#"><i class="icon icon-chevron-sm-down"></i>Villas On Rent</a>
                                 </li>
                                 <li><a href="<?php echo WEBLINK; ?>luxury-villa-in-goa.php">Luxury villas in Goa</a></li>
                                 <li><a href="<?php echo WEBLINK; ?>luxury-villa-in-lonavala.php">Luxury villas in Lonavala</a></li>
                                 <li><a href="<?php echo WEBLINK; ?>luxury-villa-in-alibaug.php">Luxury villas in Alibaug</a></li>
                                 <li><a href="<?php echo WEBLINK; ?>luxury-villa-in-karjat.php">Luxury villas in Karjat</a></li>
                                 <li><a href="<?php echo WEBLINK; ?>luxury-villa-in-panchgani.php">Luxury villas in Panchgani</a></li>
                                 <li><a href="<?php echo WEBLINK; ?>luxury-villa-in-igatpuri.php">Luxury villas in Igatpuri</a></li>
                              </ul>
                           </li>
                           <!-- <li><a href="list-your-property.php">List Your Property</a></li> -->
                           <!-- <li><a href="contact.php">Contact us</a></li>
                           <li><a href="">Blog</a></li>
                           <li><a href="about.php">Our Story</a></li> -->
                           <li><a href="<?php echo WEBLINK; ?>online-payment.php">Online Payment</a></li>
                        </ul>
                     </div>
                     <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-auto">
            <div class="d-flex items-center">

         
               <div class="row x-gap-20 items-center xxl:d-none">
              
                <div class="col-auto">
                  <div class="w-1 h-20 bg-black-20"></div>
                </div>

                <div class="col-auto">
                  <button class="d-flex items-center text-14 text-dark-1" data-x-click="lang">
                    <img src="<?php echo WEBLINK; ?>img/user.png" alt="image" class="rounded-full mr-10">
                    <span class="js-language-mainTitle">Ashish M</span>
                    <i class="icon-chevron-sm-down text-7 ml-15"></i>
                  </button>
                </div>
              </div>

              <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                <a href="<?php echo WEBLINK; ?>list-your-property.php" class="button px-10 fw-400 text-14 -outline-blue-1 h-40 text-blue-1 ">List Your Property</a>
                
              </div>

              <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons" data-x-toggle="text-white">
                <div><a href="<?php echo WEBLINK; ?>login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                <div><button class="d-flex items-center icon-menu text-20" data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>
              </div>
            </div>
          </div>

         <div class="col-auto" style="display: none;">
            <div class="d-flex items-center">
               <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                  <a href="<?php echo WEBLINK; ?>book-now.php" class="button px-30 fw-400 text-14 -blue-1 bg-dark-4 h-50 text-white">Book Now</a>
               </div>
               <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons" data-x-toggle="">
                  <!-- <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div> -->
                  <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>