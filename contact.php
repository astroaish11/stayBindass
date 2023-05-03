<?php
include('config.php');
include('module/contact.php');
include('module/contactform.php');
include('header.php');
?>
<div class="ratio ratio-16:9">
   <div class="map-ratio">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.723470815762!2d72.87269021490185!3d19.119783487062822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c822a93c78b9%3A0x7fc80412deb7c8c0!2s91springboard%20Lotus%2C%20Andheri%20East!5e0!3m2!1sen!2sin!4v1664993080513!5m2!1sen!2sin"
         width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
         referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
</div>
<section>
   <div class="relative container">
      <div class="row justify-end">
         <div class="col-xl-5 col-lg-7">
            <div class="map-form px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">
               <div class="text-22 fw-500">
                  Send a message
               </div>
               <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row y-gap-20 pt-20">
                     <div class="col-12">
                        <div class="form-input1 form-input">
                           <input type="text" class="form-control onlyLetters" id="fullname"
                              placeholder="Enter Full name" required name="name" value="">

                        </div>
                        <div id="fullnameerror" class="errordiv text-danger"></div>
                     </div>
                     <div class="col-12">
                        <div class="form-input1 form-input">
                           <input type="email" class="form-control disallow_space" id="emailidform"
                              placeholder="Enter Email" required name="email" value="">
                        </div>
                        <div id="emailiderror" class="errordiv text-danger"></div>
                     </div>
                     <div class="col-12">
                        <div class="form-input1 form-input">
                           <input type="text" class="form-control" id="subjectform" placeholder="Subject" required
                              name="subject" value="">
                        </div>
                        <div id="subjecterror" class="errordiv text-danger"></div>
                     </div>

                     <div class="col-12">
                        <div class="form-input1 form-input">
                           <textarea name="message" id="messageform" placeholder="Your Messages" class="form-control"
                              rows="4" required></textarea>
                        </div>
                        <div id="messageerror" class="errordiv text-danger"></div>
                     </div>

                     <div class="col-12 ">
                        <input type="hidden" value="<?php echo $eid; ?>" name="eid">
                        <button type="submit" id="submit" name="submit"
                           class="button px-24 h-50 -dark-1 bg-blue-1 text-white"> Send a Messsage
                           <div class="icon-arrow-top-right ml-15"></div>
                        </button>
                     </div>
                  </div>
               </form>
               <?php echo $alertMessage; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="layout-pt-md layout-pb-lg">
   <div class="container">
      <div class="row x-gap-80 y-gap-20 justify-between">
         <div class="col-12">
            <div class="text-30 sm:text-24 fw-600">Contact Us</div>
         </div>
         <div class="col-lg-4">
            <?php echo $contact_data[0]->head_ofc_addr; ?>
            <?php echo $contact_data[0]->branch_ofc_addr; ?>

            <!-- <div class="text-20 fw-600">Bmunk Hospitality Pvt Ltd</div>
                        <div class="text-16 fw-500 mt-10">91springboard Lotus Plot No. D-5 Road No. 20, Marol MIDC, Andheri East, Mumbai, Maharashtra 400069</div> -->
         </div>
         <div class="col-auto">
            <div class="text-14 text-light-1">Phone</div>
            <div class="text-18 fw-500 mt-10">
               <?php echo $contact_data[0]->mobile; ?>
            </div>
         </div>
         <div class="col-auto">
            <div class="text-14 text-light-1">Email support?</div>
            <div class="text-18 fw-500 mt-10">
               <?php echo $contact_data[0]->support_email; ?>
            </div>
         </div>
         <div class="col-auto">
            <div class="text-14 text-light-1">Follow us on social media</div>
            <div class="d-flex x-gap-20 items-center mt-10">
               <a href="https://www.facebook.com/staybindassofficial" target="blank"><i
                     class="icon-facebook text-18"></i></a>
               <a href="https://twitter.com/stay_bindass" target="blank"><i class="icon-twitter text-18"></i></a>
               <a href="https://instagram.com/staybindass.official" target="blank"><i
                     class="icon-instagram text-18"></i></a>
               <a href="https://www.linkedin.com/company/staybindass/" target="blank"><i
                     class="icon-linkedin text-18"></i></a><br>
               <a href="https://www.youtube.com/channel/UCVrpngUmIQh1dLEC5HiNqXw" target="blank"><i
                     class="fa fa-youtube-play text-18"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'footer.php'; ?>
<script type="text/javascript">
   $(document).ready(function () {
      $('.fadediv').delay(4000).fadeOut();
      //alert("hello");

      /* No Space Validation */

      $('.disallow_space').on('keypress', function (e) {
         if (e.which == 32)
            return false;
      });


      /* Only Letters Validation */

      $(".onlyLetters").keypress(function (event) {
         var inputValue = event.which;
         // allow letters and whitespaces only.
         if (!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)) {
            event.preventDefault();
         }
      });

      /* Only Character Validation */

      function validateOnlyCharacter(inputtxt) {

         var validRegex = /^[A-Za-z_ ]+$/;

         if (validRegex.test(inputtxt)) {

            return true;

         } else {

            return false;

         }

      }

      $('body').on('change', '#fullname', function () {


         // $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: -2px; margin-left: 0;">Please enter a full name.</p>');

         var contactfullname = $('#fullname').val();
         contactfullname = contactfullname.trim();

         var firstnameCheck = validateOnlyCharacter(contactfullname);

         if (contactfullname == '') {

            $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a fullname.</p>');
            setTimeout(function () { $('#fullnameerror').html(''); }, 5000);
            return false;

         }
         else {

            if (firstnameCheck == false) {

               $('#fullnameerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: 0; margin-left: 0;">Please enter a only letters.</p>');
               setTimeout(function () { $('#fullnameerror').html(''); }, 5000);
               return false;

            }
         }

      });


      /* Email Id Validation */

      function validateEmail(emailid) {

         var validRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

         if (validRegex.test(emailid)) {

            return true;

         } else {

            return false;

         }

      }

      /* Email Id Onchange Validation */

      $('body').on('change', '#emailidform', function () {

         var contactEmailid = $('#emailidform').val();
         contactEmailid = contactEmailid.trim();

         var emailcheck = validateEmail(contactEmailid);



         if (contactEmailid == '') {

            $('#emailiderror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: -2px; margin-left: 0;">Please enter a email address.</p>');
            setTimeout(function () { $('#emailiderror').html(''); }, 5000);
            return false;

         } else {

            if (emailcheck == false) {
               $('#emailiderror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: -2px; margin-left: 0;">Please enter a valid email address.</p>');
               setTimeout(function () { $('#emailiderror').html(''); }, 5000);
               return false;

            }

         }

      });

      //no blank subject
      $('body').on('change', '#subjectform', function () {

         var subject = $('#subjectform').val();

         if (subject == '') {

            $('#subjecterror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: -2px; margin-left: 0;">Please enter subject.</p>');
            setTimeout(function () { $('#subjecterror').html(''); }, 5000);
            return false;

         }

      });

      //no blank subject
      $('body').on('change', '#messageform', function () {

         var message = $('#messageform').val();

         if (message == '') {

            $('#messageerror').html('<p style="font-size: 11px; color: red; position: absolute; margin-top: -2px; margin-left: 0;">Please enter message.</p>');
            setTimeout(function () { $('#messageerror').html(''); }, 5000);
            return false;

         }

      });

   });
</script>