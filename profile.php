<?php 
include('config.php');
include ('header.php');
include('module/userProfile.php');

 if(!isset($_SESSION[SESSION])) {
   echo '<script type="text/javascript">window.location.href="index.php"</script>';
 }		


?>


      <form action="" method="POST" enctype="multipart/form-data">
         <section class="layout-pt-md">
            <div class="container">
               <div class="row y-gap-30">
                  <div class="col-lg-3">
                      <?php include 'dashboard-side.php';?>
                  </div>
                  <div class="col-lg-9">
                     <div class="px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">
                       <div class="col-auto">
                          <h1 class="text-30 lh-14 fw-600">My Profile</h1>
                        </div>
                        <div class="row y-gap-20 pt-20">
                        <div class="col-12">
                              <div class="form-input ">
                                 <p>Full Name<span style="color:red">*</span></p>
                                 <input class="onlyLetters" type="text" placeholder="" required name="fullname" value="<?php echo $fullname;?>" id="fullname" >
                              </div>
                              <div id="fullname_error" class="errordiv text-danger"></div>
                           </div>
                           <div class="col-12 col-lg-4">
                              <div class="form-input ">
                                 <p>Phone<span style="color:red">*</span></p>
                                 <input class="onlynumber nospace" type="tel" placeholder="" required value="<?php echo $mobile;?>"  name="mobile" id="mobile" >
                              </div>
                              <div id="mobile_error" class="errordiv text-danger"></div>
                           </div>
                           <div class="col-12 col-lg-5">
                              <div class="form-input ">
                                 <p>Email Address<span style="color:red">*</span></p>
                                 <input class="nospace" type="email" placeholder="" required value="<?php echo $email;?>"  name="email"  id="email" >
                              </div>
                              <div id="emailid_error" class="errordiv text-danger"></div>
                           </div>
                           <div class="col-12 col-lg-3">
                           <div class="form-input ">
                           <p>I Am  </p>
                              <select class="form-control" required id="gender" name="gender">
                                 <option value="">Select Gender</option>
                                 <option value="1" <?php if ($gender == 1) { ?> selected="selected" <?php } ?>>Male</option>
                                 <option value="2" <?php if ($gender == 2) { ?> selected="selected" <?php } ?>>Female</option>
                                 <option value="3" <?php if ($gender == 3) { ?> selected="selected" <?php } ?>>Other</option>
                              </select>
                              </div>
                              </div>
                       
                           <div class="col-12">
                              <div class="form-input ">
                                 <p>Where You Live</p>
                                 <input type="text" placeholder="e.g. Paris, FR / Brooklyn, NY / Chicago, IL" value="<?php echo $address;?>" name="address"  id="address" >
                              </div>
                              <div id="address_error" class="errordiv text-danger"></div>
                           </div>
                           <div class="col-12">
                              <div class="form-input ">
                                 <p>Describe Yourself</p>
                                 <textarea rows="4" placeholder="I'm Albert, and I like to meet new people and learn about various cultures. This is mainly why I chose to work as a host."  name="describeYou"  id="describeYou" ><?php echo $describeYou;?></textarea>
                              </div>
                              <div id="describeYou_error" class="errordiv text-danger"></div>
                           </div>
                           <div class="col-auto">
                                <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                                <button class="button px-24 h-50 -dark-1 bg-blue-1 text-white" type="submit" name="submit" id="submit">Submit
                                <div class="icon-arrow-top-right ml-15"></div>
                                </button>
                            </div>
                            <?php echo $alertMessage;?>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </section>
         </form>
     
         <?php include 'footer.php';?>
  
      <script>
       $(document).ready(function() {
        $('.fadediv').delay(3000).fadeOut();
           });
    </script>
   <script type="text/javascript" src="js/profile.js?v=<?php echo time(); ?>"></script>
