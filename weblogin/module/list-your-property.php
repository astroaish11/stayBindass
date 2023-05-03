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
                                    <input class="form-control" type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="" required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Email</p>
                                    <input class="form-control" id="email" type="email" name="email" value="<?php echo $email;?>" placeholder="" required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Mobile</p>
                                    <input class="form-control" id="mobile" type="text" name="mobile" value="<?php echo $mobile;?>" placeholder="" required="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Property Type</p>
                                    <select class="form-control" id="property_type" name="property_type">
                                       <!-- <option value="1" <?php if($property_type == 1) { ?> selected="selected"<?php } ?> >Villa</option>
                                       <option value="2" <?php if($property_type == 2) { ?> selected="selected"<?php } ?> >Apartment</option>
                                       <option value="1" <?php if($property_type == 3) { ?> selected="selected"<?php } ?> >Cottage</option>
                                       <option value="2" <?php if($property_type == 4) { ?> selected="selected"<?php } ?> >Homestays</option>
                                       <option value="1" <?php if($property_type == 5) { ?> selected="selected"<?php } ?> >Resort</option>
                                       <option value="2" <?php if($property_type == 6) { ?> selected="selected"<?php } ?> >Bungalow</option> -->

                                       <?php property_types($sql, $selected) ?>
                                       </select>

                                    <!-- <select class="form-control" type="text" name="property_type" value="" placeholder=" PHONE" required="">
                                       <option value="select">Select Property Type</option>
                                       <option value="Villa">Villa</option>
                                       <option value="Apartment">Apartment</option>
                                       <option value="Cottage">Cottage</option>
                                       <option value="Homestays">Homestays</option>
                                       <option value="Resort">Resort</option>
                                       <option value="Bungalow">Bungalow</option>
                                    </select> -->
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-input pt-10">
                                    <p>Location</p>
                                    <input class="form-control" id="location" type="text" name="location" value="<?php echo $location;?>" placeholder="" required="">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-input pt-10">
                                    <p>Your Messages</p>
                                    <textarea required="" rows="4" placeholder="" name="messages" id="messages"><?php echo $messages;?></textarea>
                                 </div>
                              </div>
                              <div class="col-12 pt-20">
                                 <button type="submit" name="submit" class="button py-20 -dark-1 bg-blue-1 text-white" style="width: 100%;">SUBMIT</button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <?php echo $alertMessage;?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
 <?php include 'footer.php';?>
     