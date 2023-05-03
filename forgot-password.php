<?php
include('config.php');
include('module/forgot-password.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include 'main-css.php'; ?>
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
      <?php include 'header.php'; ?>
      <section data-anim="fade" class="d-flex items-center py-15 is-in-view">
         <div class="container">
            <div class="row y-gap-10 items-center justify-between">
               <div class="col-auto">
                  <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                     <div class="col-auto">
                        <div class=""><a href="index.php">Home</a></div>
                     </div>
                     <div class="col-auto">
                        <div class="">&gt;</div>
                     </div>
                     <div class="col-auto">
                        <div class="">Forgot Password</div>
                     </div>

                  </div>
               </div>


            </div>
         </div>
      </section>

      <section class="layout-pt-md layout-pb-md">
         <div class="container">
            <div class="row justify-center y-gap-30">

               <div class="col-lg-5">
                  <div class="px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">


                     <div class="col-auto">

                        <h1 class="text-30 lh-14 fw-600">Forgot Password</h1>

                     </div>
                     <form action="" method="post" class="mt-4">
                        <div class="row y-gap-20 pt-20">
                           <div class="col-12 col-lg-12">
                              <div class="form-input ">
                                 <label class="pb-10" style="position:static;padding:0px;">Enter Your Email Address</label>
                                 <!-- <input type="email" class="form-control"> -->
                                 <input type="email" class="form-control form-control-user" id="username"
                                    name="username" value="<?php echo $username; ?>" aria-describedby="emailHelp"
                                    placeholder="Enter Your Email Address">
                                 <div id="email_error" class="errordiv text-danger"></div>
                              </div>
                           </div>
                           <div class="form-group ml-1">
                              <a href="index.php"> Back To Login</a>
                           </div>

                           <div style="text-align: center; margin: -10px 0 0px; color: red;" id="errorMsg">
                              <?php echo $alertMessage ?>
                           </div>

                           <div class="col-auto">
                              <!-- <a href="#" class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                              Reset Password
                           </a> -->
                              <button type="submit" class="button px-24 h-50 -dark-1 bg-blue-1 text-white"
                                 id="passwordsubmit" name="passwordsubmit"> Submit </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

            </div>
         </div>
      </section>


      <?php include 'footer.php'; ?>
   </main>
   <!-- JavaScript -->
   <?php include 'script.php'; ?>
</body>

</html>