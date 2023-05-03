<?php 
include('config.php');
include('header.php');
include('module/listurproperty.php');
?>

   <section class="layout-pt-lg layout-pb-lg bg-blue-2">
      <div class="container">
         <div class="row justify-center">
            <div class="col-xl-6 col-lg-6 col-md-9">
               <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4 mt-50">
                  <div class="row y-gap-20">
                     <div class="col-12">
                        <h1 class="text-22 fw-500">Partner as a Homeowner</h1>
                        <p>StayBindass specializes in creating and curating luxury holiday homes all over the world.</p>
                     </div>
                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-input pt-10">
                                    <p>Full Name</p>
                                    <input class="form-control onlyLetters" type="text" id="fullname" name="name" value="<?php echo $name;?>" placeholder="" required >
                                    <div id="name_error" class="errordiv text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Email</p>
                                    <input class="form-control nospace" id="email" type="email" name="email" value="<?php echo $email;?>" placeholder="" required>
                                    <div id="email_error" class="errordiv text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Mobile</p>
                                    <input class="form-control onlynumber nospace" id="mobile" type="text" name="mobile" value="<?php echo $mobile;?>" placeholder="" required>
                                    <div id="mobile_error" class="errordiv text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Property Type</p>
                                    <select class="form-control" id="property_type" name="property_type">
                                       <?php property_types($sql, $selected) ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Location</p>
                                    <input class="form-control" id="location" type="text" name="location" value="<?php echo $location;?>" placeholder="" required>
                                    <div id="location_error" class="errordiv text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-input pt-10">
                                    <p>Your Messages</p>
                                    <textarea required rows="4" placeholder="" name="messages" id="messages"><?php echo $messages;?></textarea>
                                    <div id="message_error" class="errordiv text-danger"></div>
                                 </div>
                                
                              </div>
                              <div class="col-12 pt-20">
                                 <button id="submitbtn" type="submit" name="submit" class="button py-20 -dark-1 bg-blue-1 text-white" style="width: 100%;">SUBMIT</button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <?php echo $alertMessage;?>
                     <!-- <div class="alert alert-success mt-2 fadediv text-success" role="alert">Message Sent.</div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
 <?php include 'footer.php';?>
 <script src="<?php echo $WEBLINK;?>js/listproperty.js?u=<?php echo time(); ?>"></script>
 


     