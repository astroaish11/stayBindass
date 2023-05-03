<?php 
include('module/main.php');

if(isset($_SESSION[SESSION])){
   $username = $_SESSION[SESSION]['name'];
}

$CurPageURL ='';

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  



?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include('main-css.php');?>
      <title>StayBindass</title>
   </head>
   <body>
      <div class="preloader js-preloader">
         <div class="preloader__wrap">
            <div class="preloader__icon">
               <img src="<?php echo WEBLINK; ?>img/general/preloader.png">
            </div>
         </div>
         <!-- <div class="preloader__title">StayBindass</div> -->
      </div>
      <main>
      <script src="<?php echo WEBLINK; ?>js/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
      <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
      <script>
         var mainlink = '<?php echo WEBLINK; ?>';
      </script>
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
                                 <!-- <li>
                                    <a href="<?php echo WEBLINK; ?>">Home</a>

                                 </li> -->
                                 
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
                              <a href="tel:8657011171"><?php echo $contact_data[0]->mobile;?></a>
                           </div>
                        </div>

                 
                     </div>


                     <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                        <a href="<?php echo WEBLINK; ?>list_your_property"
                           class="button px-10 fw-400 text-14 -outline-blue-1 h-40 text-blue-1 ">List Your Property</a>

                              <?php 
                              if(!isset($_SESSION[SESSION])) {
                                 echo '<button data-x-click="lang"
                                 class="button px-10 fw-400 text-14 -blue-1 bg-blue-1 h-40 text-white ml-10">Sign In /
                                 Register</button>';

                              }
                              else{                                
                                 echo  '<a href="'.WEBLINK.'profile" class="button px-10 fw-400 text-14 -outline-blue-1 h-40 text-blue-1  " style ="margin-left:5px"
                                 <button class="d-flex items-center text-14 text-dark-1" >
                                 <img src="'.WEBLINK.'img/user.png" alt="image" class="rounded-full mr-10">
                                 <span class="js-language-mainTitle">'.$username.'</span>
                                 </button> </a>';
                              }                        
                              ?>
                     </div>

                     <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons">

                        <div><button class="d-flex items-center icon-menu text-20"
                              data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                     </div>

                  </div>
               </div>

               <div class="col-auto" style="display: none;">
                  <div class="d-flex items-center">
                     <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                        <a href="<?php echo WEBLINK; ?>book-now.php" class="button px-30 fw-400 text-14 -blue-1 bg-dark-4 h-50 text-white">Book
                           Now</a>
                     </div>
                     <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons" data-x-toggle="">
                        <!-- <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div> -->
                        <div><button class="d-flex items-center icon-menu text-inherit text-20"
                              data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">
         <div class="langMenu__bg" data-x-click="lang"></div>

         <div class="langMenu__content bg-white rounded-4" id="aa" >
            <button class="pointer paddibg-login" data-x-click="lang">
               <i class="icon-close"></i>
            </button>
            <div class="d-flex items-center justify-between sm:px-15 border-bottom-light">

               <div class="py-30 px-30 rounded-4 bg-white">
                  <div class="tabs -underline-2 js-tabs">
                     <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

                        <div class="col-auto">
                           <button
                              class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                              data-tab-target=".-tab-item-1">Log in</button>
                        </div>

                        <div class="col-auto">
                           <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button"
                              data-tab-target=".-tab-item-2">Register</button>
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
                                                      <!-- <input class="form-control" type="text" name="name" value=""
                                                         placeholder="" required=""> -->
                                                      <input class="form-control nospace" type="email" name="contactEmailid1"
                                                         id="contactEmailid1" placeholder="" required>
                                                      <div id="cont_emailid_error1" class="errordiv text-danger"></div>
                                                   </div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="form-input pt-10">
                                                      <p>Password</p>

                                                      <!-- <div class="form-group pass_show"> -->
                                                         <!-- <input type="password" value="faisalkhan@123" class="form-control"
                                                            placeholder="Current Password"> -->
                                                         <input type="password" class="form-control nospace"
                                                            placeholder="Current Password" name="contactPassword1"
                                                            id="contactPassword1" required>
                                                            <span toggle="#contactPassword1"
                                                         class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                         <div id="cont_password_error1" class="errordiv text-danger"></div>
                                                      <!-- </div> -->
                                                   </div>
                                                </div>


                                                <div class="col-12" style="margin-top: 20px;">
                                                   <a href="<?php echo WEBLINK; ?>forgot-password.php"
                                                      class="text-14 fw-500 text-blue-1 underline">Forgot your
                                                      password?</a>
                                                </div>

                                                <div class="col-12">

                                                   <!-- <a href="#" class="button py-10 -dark-1 bg-blue-1 text-white">
                                                      Sign In <div class="icon-arrow-top-right ml-15"></div>
                                                   </a> -->

                                                   <button style="width: 100px;"
                                                      class="button btn-sm py-10 -dark-1 bg-blue-1 text-white"
                                                      name="login_submit" id="login_submit" type="button">
                                                      Sign In
                                                      <div class="icon-arrow-top-right ml-15"></div>
                                                   </button>
                                                   <div id="cont_form_error1"></div>

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
                                                <div class="col-md-6">
                                                   <div class="form-input pt-10">
                                                      <p> Full Name</p>
                                                      <input class="form-control onlyLetters" type="text"
                                                         name="contactfullname" id="contactfullname" placeholder="" required>
                                                   </div>
                                                   <div id="cont_fullname_error" class="errordiv text-danger"></div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-input pt-10">
                                                      <p> Mobile No.</p>
                                                      <input class="form-control onlynumber" type="tel"
                                                         name="contactmobile" id="contactmobile" placeholder="" required>
                                                   </div>
                                                   <div id="cont_mobile_error" class="errordiv text-danger"></div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="form-input pt-10">
                                                      <p> Email</p>
                                                      <input class="form-control nospace" type="email" name="contactEmailid"
                                                         id="contactEmailid" placeholder="" required>
                                                      <div id="cont_emailid_error" class="errordiv text-danger"></div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-input pt-10">
                                                      <p>Password</p>
                                                      <input type="password" minlength="6" maxlength="12"
                                                         class="form-control nospace" placeholder="Current Password"
                                                         name="contactPassword" id="contactPassword" required>
                                                      <span toggle="#contactPassword"
                                                         class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                   </div>
                                                   <div id="cont_password_error" class="errordiv text-danger"></div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-input pt-10">
                                                      <p>Confirm Password</p>
                                                      <input type="password" minlength="6" maxlength="12"
                                                         class="form-control nospace" placeholder="Confirm Password"
                                                         name="contactconfirmPassword" id="contactconfirmPassword" required>
                                                      <span toggle="#contactconfirmPassword"
                                                         class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                   </div>
                                                   <div id="cont_confirmpassword_error" class="errordiv text-danger"></div>
                                                </div>
                                                <!-- <div class="col-12">
                                                   <a href="#" class="text-14 fw-500 text-blue-1 underline">Forgot your
                                                      password?</a>
                                                </div> -->
                                                <div class="col-12" style="margin-top: 22px;">
                                                   <button class="button py-10 -dark-1 bg-blue-1 text-white"
                                                      name="register_submit-new" id="register_submit-new" type="button"
                                                      style="display: none">
                                                      <button style="width: 100px;"
                                                         class="button py-10 -dark-1 bg-blue-1 text-white"
                                                         name="register_submit" id="register_submit" type="button">
                                                         Sign Up
                                                         <div class="icon-arrow-top-right ml-15"></div>
                                                      </button>
                                                      <div id="cont_form_error"></div>
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

                  <p class="text-12">By signing in or creating an account, you agree with our <a class="fw-500 text-blue-1"
                        href="<?php echo WEBLINK; ?>terms-and-conditions.php" target="blank">Terms & conditions</a> and <a
                        class="fw-500 text-blue-1" href="<?php echo WEBLINK; ?>privacy-policy.php" target="blank">Privacy statement</a></p>
               </div>

            </div>
         </div>
      </div>

      <script type="text/javascript" src="<?php echo WEBLINK; ?>js/register1.js?v=<?php echo time(); ?>"></script>

      <!-- <script>
         document.('register_submit').addEventListener('keypress', function(event) {
            event.keyCode == 13 
         
         });
      </script> -->