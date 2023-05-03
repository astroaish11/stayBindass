<?php 
include('config.php');
include('header.php');
include('module/property_book.php');

?>
<section class="pt-30 mb-40">
  <div class="container">
     <div class="outline">
        <div class="middle">
           <div class="row">
              <div class="col-xl-7">
                <?php ?>
              <div class=""> <a href="<?php echo WEBLINK;?>property/<?php echo $dest_slug; ?>/<?php echo $prop_slug; ?>" class="icon-arrow-left text-22 fw-500"> Review and pay</a></div>

              <table class="table-4 w-1/1 mt-30">
                <thead class="">
                  <tr>
                    <th class="text-22">Trip details</th>
                    <th class="pull-right"><a href="">Edit</a></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>Check In</td>
                    <!-- <td class="pull-right">Thu, 2nd Mar 2023</td> -->
                    <td class="pull-right"><?php echo date('D', strtotime($checkout)).', '.date('jS M Y', strtotime($checkout));?></td>
                  </tr>

                  <tr>
                    <td>Check Out</td>
                    <!-- <td class="pull-right">Sat, 4th Mar 2023</td> -->
                    <td class="pull-right"><?php echo date('D', strtotime($checkin)).', '.date('jS M Y', strtotime($checkin));?></td>
                  </tr>

                  <tr>
                    <td>Guests</td>
                    <!-- <td class="pull-right">10 Adult</td> -->
                    <?php if($adults > 1){ ?>
                      <td class="pull-right"><?php echo $adults; ?> Adults</td>
                    <?php }else{ ?>
                      <td class="pull-right"><?php echo $adults; ?> Adult</td>
                    <?php } ?>
                  </tr>

                  <tr>
                    <td>Children</td>
                    <!-- <td class="pull-right">4</td> -->
                    <?php if($children > 1){ ?>
                      <td class="pull-right"><?php echo $children; ?> Childrens</td>
                    <?php }else{ ?>
                      <td class="pull-right"><?php echo $children; ?> Children</td>
                    <?php } ?>
                  </tr>

                </tbody>
              </table>

              <hr>


          <div class="col-md-12">
            <div class="mealsection">
                <h5>Meal Plan</h5>
                  <p class="text-dark-1 text-16 mt-10">
                    <?php echo $mealdesc;?> </p>
                  <div class="meal-types">
                 
                    <div class="meal-type">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#11BF0E"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#11BF0E"></rect></svg><div class="text-sm-light clr-black">Veg</div>
                    </div>
                    <div class="meal-type">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#FA4B4B"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#FA4B4B"></rect></svg><div class="text-sm-light clr-black">Non-Veg</div></div>
                    </div>
                    <div class="listing__meals">
                        <span>
                          <?php if($upload_image !=''){
                              echo '<a href="'.WEBLINK.'upload/meal/'.$upload_image.'" target="blank" aria-label="meals-details" class="button px-10 fw-400 text-14 bg-blue-1 h-30 text-white mb-10">View Menu</a>';
                          }
                    else{
                    
                    }?>  
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
                      <div class="meals__body-heading-container veg-green"><svg width="24" height="24"       viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5"  width="23" height="23" rx="1.5" fill="white" stroke="#11BF0E"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#11BF0E"></rect></svg><p class="meals__body-heading">Veg</p>
                      </div>
                      <?php if($adult1 !='') {
                    echo '<div class="mt-20">
                        <h5>All meals</h5>
                          <div class="meals__body-content-wrapper">
                            <div class="meals__body-content-wrapper-row">
                              <p class="meals__body-content-para-normal">Adults</p>
                              <p class="meals__body-content-para-background">12+ YEARS</p>
                            </div>
                            <div class="meals__body-content-wrapper-row item-down">
                              <p class="meals__body-content-para-bold">'.$adult1.'</p>
                              <p class="meals__body-content-para-small">+GST</p>
                            </div>
                          </div>

                          <div class="meals__body-content-wrapper">
                            <div class="meals__body-content-wrapper-row">
                              <p class="meals__body-content-para-normal">Children</p>
                              <p class="meals__body-content-para-background">6-12 YEARSS</p>
                            </div>
                            <div class="meals__body-content-wrapper-row item-down">
                              <p class="meals__body-content-para-bold">'.$child1.'</p>
                              <p class="meals__body-content-para-small">+GST</p>
                            </div>
                          </div>
                            </div>';

                          }
                      ?>

                      <?php if($adult2 !='') {

                        echo' <div class="mt-20">
                              <h5>Any two meals</h5>
                                  <div class="meals__body-content-wrapper">
                                    <div class="meals__body-content-wrapper-row">
                                      <p class="meals__body-content-para-normal">Adults</p>
                                      <p class="meals__body-content-para-background">12+ YEARS</p>
                                    </div>
                                    <div class="meals__body-content-wrapper-row item-down">
                                      <p class="meals__body-content-para-bold">'.$adult2.'</p>
                                      <p class="meals__body-content-para-small">+GST</p>
                                    </div>
                                  </div>

                                      <div class="meals__body-content-wrapper">
                                        <div class="meals__body-content-wrapper-row">
                                          <p class="meals__body-content-para-normal">Children</p>
                                          <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                        </div>
                                        <div class="meals__body-content-wrapper-row item-down">
                                          <p class="meals__body-content-para-bold">'.$child2.'</p>
                                          <p class="meals__body-content-para-small">+GST</p>
                                        </div>
                                      </div>
                            </div>';}
                          ?>
                          
                  </div>
                  <!-- veg close -->
                  <!-- nonveg -->
                  <div class="vegmeal">
                      <div class="meals__body-heading-container non-veg-red">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="23" height="23" rx="1.5" fill="white" stroke="#FA4B4B"></rect><rect x="5" y="5" width="14" height="14" rx="7" fill="#FA4B4B"></rect></svg><p class="meals__body-heading">Non Veg</p>
                      </div>
                      <?php if($adult3 !='') {
                        echo '<div class="mt-20">
                                <h5>All meals</h5>
                                  <div class="meals__body-content-wrapper">
                                    <div class="meals__body-content-wrapper-row">
                                      <p class="meals__body-content-para-normal">Adults</p>
                                      <p class="meals__body-content-para-background">12+ YEARS</p>
                                    </div>
                                    <div class="meals__body-content-wrapper-row item-down">
                                      <p class="meals__body-content-para-bold">'.$adult3.'</p>
                                      <p class="meals__body-content-para-small">+GST</p>
                                    </div>
                                  </div>

                                    <div class="meals__body-content-wrapper">
                                      <div class="meals__body-content-wrapper-row">
                                        <p class="meals__body-content-para-normal">Children</p>
                                        <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                      </div>
                                      <div class="meals__body-content-wrapper-row item-down">
                                        <p class="meals__body-content-para-bold">'.$child3.'</p>
                                        <p class="meals__body-content-para-small">+GST</p>
                                      </div>
                                    </div>
                              </div>';
                      } ?>

                      <?php if($adult4 !='') {
                            echo  '<div class="mt-20">
                                  <h5>Any two meals</h5>
                                  <div class="meals__body-content-wrapper">
                                    <div class="meals__body-content-wrapper-row">
                                      <p class="meals__body-content-para-normal">Adults</p>
                                      <p class="meals__body-content-para-background">12+ YEARS</p>
                                    </div>
                                    <div class="meals__body-content-wrapper-row item-down">
                                      <p class="meals__body-content-para-bold">'.$adult4.'</p>
                                      <p class="meals__body-content-para-small">+GST</p>
                                    </div>
                                  </div>

                                      <div class="meals__body-content-wrapper">
                                        <div class="meals__body-content-wrapper-row">
                                          <p class="meals__body-content-para-normal">Children</p>
                                          <p class="meals__body-content-para-background">6-12 YEARSS</p>
                                        </div>
                                        <div class="meals__body-content-wrapper-row item-down">
                                          <p class="meals__body-content-para-bold">'.$child4.'</p>
                                          <p class="meals__body-content-para-small">+GST</p>
                                        </div>
                                      </div>
                              </div>';
                        } 
                      ?>
                  </div>
                  <!-- nonveg close -->
                </div>
              </div>
        </div>
     <p>(Meals can be booked offline by getting in touch with our team)</p>
 </div>
  <h2 class="text-22 fw-500 mt-40 md:mt-24">Booking Details</h2>
  <div class="row x-gap-20 y-gap-20 pt-20">
    <div class="col-md-6 col-12">
      <div class="form-input-booking ">
        <input type="text" name="fullname" class="onlyLetters" value="" id="book_fullname" required>
        <label class="lh-1 text-16 text-light-1">Full Name*</label>
      </div>
      <div id="book_fullname_error"></div>
    </div>
    <div class="col-md-6 col-12">
      <div class="form-input-booking ">
        <input type="email" name="email" value="" id="book_email" required>
        <label class="lh-1 text-16 text-light-1">Email*</label>
      </div>
      <div id="book_email_error"></div>
    </div>
    <div class="col-md-12 col-12">
      <div class="form-input-booking ">
        <input type="tel" name="phone" maxlength="10" class="nospace onlynumber" value="" id="book_mobileno" required>
        <label class="lh-1 text-16 text-light-1">Phone Number*</label>
      </div>
      <div id="book_mobile_error"></div>
    </div>
    <div class="col-md-12 col-12">
      <div class="form-input-booking ">
        <input type="text" name="city" class="onlyLetters" value="" id="book_city" required>
        <label class="lh-1 text-16 text-light-1">Residential City*</label>
      </div>
      <div id="book_city_error"></div>
    </div>
    <div class="col-12">
      <p>(All the booking communications will be sent to above mentioned contact details)</p>
    </div>
    <div class="col-12">
      <div class="form-input-booking ">
        <textarea required rows="2" id="book_special_request"></textarea>
        <label class="lh-1 text-16 text-light-1">Any special request?</label>
      </div>
    </div>
    <h2 class="text-15 fw-500 mt-40 md:mt-24">Enter GST details (optional)</h2>
  <div class="row x-gap-20 y-gap-20 pt-20">
    <div class="col-md-6 col-12">
      <div class="form-input-booking ">
        <input type="text" name="compname" id="book_compname" value="" required>
        <label class="lh-1 text-16 text-light-1">Company Name</label>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="form-input-booking ">
        <input type="text" name="GSTnumber" class="nospace" value="" id="book_gst" required>
        <label class="lh-1 text-16 text-light-1">GST Number</label>
      </div>
      <div id="book_gst_error"></div>
    </div>
    <div class="col-md-12 col-12">
      <div class="form-input-booking ">
        <input type="text" name="address" id="book_address" value="" required>
        <label class="lh-1 text-16 text-light-1">Address</label>
      </div>
    </div>
    <div class="col-md-12 col-12">
     <label class="text-16 lh-1 fw-500 text-dark-1 mb-10 mt-10">States & UTs*</label>
  <div class="select js-select js-liveSearch" data-select-value="">
    <button class="select__button js-button">
      <span class="js-button-title">Default</span>
      <i class="select__icon" data-feather="chevron-down"></i>
    </button>
    <div id="book_state_error"></div>
    <div class="select__dropdown js-dropdown">
      <input type="text" placeholder="Search" class="select__search js-search">
      <div class="select__options js-options">

        <?php echo stateLisitingBook($sql); ?>

      </div>
    </div>
  </div>
    </div>
  </div>

  <h2 class="text-22 fw-500 mt-40 md:mt-24">Cancellation Policy</h2>
  <p>To know more about cancellation policy <a href="https://www.staybindass.com/policies.php" target="_blank"><u>click here</u></a></p>
     <div class="d-flex items-center">
        <div class="form-checkbox ">
          <input type="checkbox" name="name">
          <div class="form-checkbox__mark">
            <div class="form-checkbox__icon icon-check"></div>
          </div>
        </div>
        <div class="text-14 lh-12 ml-10"> I agree with <a href="https://www.staybindass.com/terms-and-conditions.php" target="_blank"><u>Terms & Services </u></a>  of StayBindass</div>
      </div>

                  </div>
               </div>
               <div class="col-xl-5 col-lg-4">
                  <div class="ml-50 lg:ml-40 md:ml-0">
                    <div class="jq_sidebar_fix">
                       <div class="mt-0"></div>
                       <aside class="sidebar">
                          <div class="sidebar__item">
                             <div class="px-15 py-15 rounded-4">
                                <!-- <h5 class="text-22 fw-500">Book Now</h5> -->
                                
                                <?php include 'booking-page-side.php';?>
                             
                             </div>
                          </div>
                       </aside>
                       <?php include 'connect-with-host.php';?>
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
<script type="text/javascript" src="<?php echo WEBLINK; ?>js/booking.js?v=<?php echo time(); ?>"></script>
<?php include('footer.php'); ?>