<?php
include('config.php');
include('module/new-password.php');
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
                        <div class="">New Password</div>
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

                        <h1 class="text-30 lh-14 fw-600">New Password</h1>

                     </div>
                     <div class="row y-gap-20 pt-20">
                        <form action="" method="post" class="mt-4">
                           <div class="col-12 col-lg-12">
                              <div class="form-input ">
                                 <label style="position:static;padding:0px;">Creat New Password</label>
                                 <input id="password-field" type="password" class="form-control" name="newpassword"
                                    value="" onchange="return checkpasslength()">
                                 <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                              </div>
                           </div>
                           <div class="col-12 col-lg-12">
                              <div class="form-input ">
                                 <label style="position:static;padding:0px;">Confirm New Password </label>

                                 <input id="password-field1" type="password" class="form-control" name="confirmpassword"
                                    value="" onchange="return checkpasslength()">
                                 <span toggle="#password-field1"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                              </div>
                           </div>
                           <div class="form-group">
                              <a href="index.php" style="color:red">Back To Login</a>

                           </div>

                           <div class="col-auto">
                              <!-- <a href="#" class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                              Reset Password
                           </a> -->
                              <button type="submit" class="button px-24 h-50 -dark-1 bg-blue-1 text-white"
                                 id="submitpwd" name="submitpwd" onclick="return Validate()"> Reset Password </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </section>


      <?php include 'footer.php'; ?>
   </main>
   <!-- JavaScript -->
   <?php include 'script.php'; ?>

   <script type="text/javascript" src="js/validate/login.js"></script>

   <script type="text/javascript">
      function Validate() {
         var password = document.getElementById("password-field").value;
         var confirmPassword = document.getElementById("password-field1").value;

         if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
         }
         // else {

         //    if (password.length < 6 || confirmPassword.length < 6) {
         //       alert("Please enter password of minimum 6 characters");
         //       return false;
         //    }
         //    // else if (confirmPassword.length < 6) {
         //    //    return false;
         //    // }
         //    else {
         //       return true;
         //    }
         // }
        else if (password.length < 6 || confirmPassword.length < 6) {
               alert("Please enter password of minimum 6 characters");
               return false;
            }
            // else if (confirmPassword.length < 6) {
            //    return false;
            // }
            else {
               return true;
            }
   }

      //}

      function checkpasslength() {
         var password1 = document.getElementById("password-field").value;
         var passlength = password1.length;
         var password2 = document.getElementById("password-field1").value;
         var passlength2 = password2.length;
         if (passlength < 6) {
            alert("Please enter password of minimum 6 characters");
            return false;
         }
         else if (passlength2 < 6) {
            return false;
         }
         else {
            return true;
         }


         //alert("check password");
      }
   </script>
           <script>
            $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

             $(".toggle-password1").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
        </script>
</body>

</html>