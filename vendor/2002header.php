<script src="vendor/vendor/jquery/jquery.min.js"></script>
<header data-add-bg="bg-white" class="header  js-header" data-x="header" data-x-toggle="is-menu-opened">
   <div class="container mx-auto px-30 sm:px-20">
      <div class="row justify-between items-center">
         <div class="col-auto">
            <div class="d-flex items-center">
               <a href="https://staybindass.com/" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
               <img src="img/logo.png" alt="logo icon">
               <img src="img/logo.png" alt="logo icon">
               </a>
               <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                  <div class="mobile-overlay"></div>
                  <div class="header-menu__content">
                     <div class="mobile-bg js-mobile-bg"></div>
                     <div class="menu js-navList">
                        <ul class="menu__nav text-dark-1 -is-active">
                           <li>
                              <a href="https://project-uat.com/stay_bindass">Home</a>

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
                                 <li><a href="luxury-villa-in-goa.php">Luxury villas in Goa</a></li>
                                 <li><a href="luxury-villa-in-lonavala.php">Luxury villas in Lonavala</a></li>
                                 <li><a href="luxury-villa-in-alibaug.php">Luxury villas in Alibaug</a></li>
                                 <li><a href="luxury-villa-in-karjat.php">Luxury villas in Karjat</a></li>
                                 <li><a href="luxury-villa-in-panchgani.php">Luxury villas in Panchgani</a></li>
                                 <li><a href="luxury-villa-in-igatpuri.php">Luxury villas in Igatpuri</a></li>
                              </ul>
                           </li>
                           <!-- <li><a href="list-your-property.php">List Your Property</a></li> -->
                           <!-- <li><a href="contact.php">Contact us</a></li>
                           <li><a href="">Blog</a></li>
                           <li><a href="about.php">Our Story</a></li> -->
                           <li><a href="online-payment.php">Online Payment</a></li>
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
                  <div class=" h-30">
                  <a href="tel:8657011171">+(91) 86570 11171 </a>
               </div>
                </div>

                <!-- <div class="col-auto">
                  <button class="button px-10 fw-400 text-14 -blue-1 bg-blue-1 h-40 text-white ml-20" data-x-click="lang">
                    <img src="img/user.png" alt="image" class="rounded-full mr-10">
                    <span class="js-language-mainTitle">Ashish M</span>
                    <i class="icon-chevron-sm-down text-7 ml-15"></i>
                  </button>
                </div> -->
              </div>


              <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                <a href="list-your-property.php" class="button px-10 fw-400 text-14 -outline-blue-1 h-40 text-blue-1 ">List Your Property</a>

                <button data-x-click="lang" class="button px-10 fw-400 text-14 -blue-1 bg-blue-1 h-40 text-white ml-10">Sign In / Register</button>

                <!-- <button class="button px-10 fw-400 text-14 -blue-1 bg-blue-1 h-40 text-white ml-20" data-x-click="lang">
                    <img src="img/user.png" alt="image" class="rounded-full mr-10">
                    <span class="js-language-mainTitle">Ashish M</span>
                    <i class="icon-chevron-sm-down text-7 ml-15"></i>
                  </button> -->
                
              </div>

              <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons">
                
                <div><button class="d-flex items-center icon-menu text-20" data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>
              </div>

            </div>
          </div>

         <div class="col-auto" style="display: none;">
            <div class="d-flex items-center">
               <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                  <a href="book-now.php" class="button px-30 fw-400 text-14 -blue-1 bg-dark-4 h-50 text-white">Book Now</a>
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

<div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">
    <div class="langMenu__bg" data-x-click="lang"></div>

    <div class="langMenu__content bg-white rounded-4">
       <button class="pointer paddibg-login" data-x-click="lang">
          <i class="icon-close"></i>
        </button>
      <div class="d-flex items-center justify-between sm:px-15 border-bottom-light">
        
        <div class="py-30 px-30 rounded-4 bg-white">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Log in</button>
              </div>

              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-2">Register</button>
              </div>

            </div>

            <div class="tabs__content pt-10 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="row justify-center">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="px-10 py-10 sm:px-20 sm:py-20 bg-white rounded-4">
              <div class="row">
                <div class="col-12">
                  <h1 class="text-22 fw-500">Welcome to StayBindass!</h1>
                  <p class="mt-10">Let's log you in </p>
                </div>

                <form action="list-your-property-form.php" method="post">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-input pt-10">
                                          <p> Email</p>
                                          <input class="form-control" type="text" name="name" value="" placeholder="" required="">
                                       </div>
                                    </div>
                                     <div class="col-md-12">
                                       <div class="form-input pt-10">
                                          <p>Passowrd</p>
  
          <div class="form-group pass_show"> 
                <input type="password" value="faisalkhan@123" class="form-control" placeholder="Current Password"> 
            </div>
                                       </div>
                                    </div>
                                    
                                    <div class="col-12">
                  <a href="#" class="text-14 fw-500 text-blue-1 underline">Forgot your password?</a>
                </div>

                <div class="col-12">

                  <a href="#" class="button py-10 -dark-1 bg-blue-1 text-white">
                    Sign In <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
                                 </div>
                              </div>
                           </form>

              

                
              </div>

            
            </div>
          </div>
        </div>
              </div>

      <div class="tabs__pane -tab-item-2">
         <div class="row justify-center">
   <div class="col-xl-12 col-lg-12 col-md-12">
   <div class="px-10 py-10 sm:px-20 sm:py-20 bg-white rounded-4">
      <div class="row">
         <div class="col-12">
         <h1 class="text-22 fw-500">Welcome to StayBindass!</h1>
         <p class="mt-10">Let's sign you up</p>
         </div>

   <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-input pt-10">
                           <p> Full Name</p>
                           <input class="form-control onlyLetters nospace" type="text" name="name" id="name" placeholder="" required>
                        </div>
                        <div id="name_err" class="errordiv text-danger"></div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-input pt-10">
                           <p> Email</p>
                           <input class="form-control nospace" type="email" name="contactEmailid" id="contactEmailid" placeholder="" required>
                           <div id="email_err" class="errordiv text-danger"></div>
                        </div>
                     </div>
                        <div class="col-md-12">
                        <div class="form-input pt-10">
                           <p>Passowrd</p>
                        <input type="password" class="form-control nospace" placeholder="Current Password" name="password" id="password" required> 
                        </div>
                      </div>                   
                     <div class="col-12">
                        <a href="#" class="text-14 fw-500 text-blue-1 underline">Forgot your password?</a>
                     </div>
                     <div class="col-12">
                     <button class="button py-10 -dark-1 bg-blue-1 text-white" name="register_submit-new" id="register_submit-new" type="button" style="display: none">
                        <button class="button py-10 -dark-1 bg-blue-1 text-white" name="register_submit" id="register_submit" type="button">
                            Sign Up 
                        <div class="icon-arrow-top-right ml-15"></div>
                        </button>
                     </div>
                  </div>
               </div>
            </form>              
              </div>
            </div>
          </div>
        </div>
   </div>
</div>
</div>

<p class="text-12">By signing in or creating an account, you agree with our <a class="fw-500 text-blue-1" href="terms-and-conditions.php" target="blank">Terms & conditions</a> and <a class="fw-500 text-blue-1" href="privacy-policy.php" target="blank">Privacy statement</a></p>
   </div>
   
</div>
    </div>
  </div>
  
  <script type="text/javascript" src="js/register.js?v=<?php echo time(); ?>"></script>
