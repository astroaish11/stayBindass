<?php 
include('config.php');
include('header.php');

if($_GET['bookingno']){

  $bookingno = $_GET['bookingno'];

  $booking_query = mysqli_query($sql, "SELECT b.*, p.`uploadimage` FROM `confirm_booking` as b 
                                       left join `addproperty` as p on p.`id` = b.`prop_id`
                                       WHERE b.`bookingNo`='$bookingno'");
  $bookingData = mysqli_fetch_object($booking_query);
  $guest_name = $bookingData->guest_name;
  $guest_email = $bookingData->guest_email;
  $guest_mobile = $bookingData->guest_mobile;
  $prop_name = $bookingData->prop_name;
  $prop_id = $bookingData->prop_id;
  $address = $bookingData->address;
  $bookingDate = date('d/m/Y', strtotime($bookingData->bookingDate));
  $price = $bookingData->price;
  $gstamt = $bookingData->gstamt;
  $totalamt = $bookingData->totalamt;
  $guest_city = $bookingData->guest_city;
  $guest_state = $bookingData->guest_state;
  $guest_special_request = $bookingData->guest_special_request;
  $property_image = $bookingData->uploadimage;
  $checkin = date('d/m/Y', strtotime($bookingData->checkin));
  $checkout = date('d/m/Y', strtotime($bookingData->checkout));

}
?>
<section class="pt-30 mb-40">
<div class="container">
   <div class="outline">
      <div class="middle">
         <div class="row">
          <div class="col-xl-2"></div>
            <div class="col-xl-8">
              <div class="d-flex flex-column items-center mt-60 lg:md-40 sm:mt-24">
                <div class="size-80 flex-center rounded-full bg-dark-3">
                  <i class="icon-check text-30 text-white"></i>
                </div>
                <div class="text-30 lh-1 fw-600 mt-20"><?php echo $guest_name; ?>, your order was submitted successfully!</div>
                <div class="text-15 text-light-1 mt-10">Booking details has been sent to: <?php echo $guest_email; ?></div>
              </div>
              <div class="border-type-1 rounded-8 px-50 py-35 mt-40">
                <div class="row">
                    <div class="col-auto">
                      <img src="<?php echo WEBLINK; ?>upload/property_thumbnail/<?php echo $property_image;?>" alt="image" class="size-140 rounded-4 object-cover">
                    </div>
                    <div class="col">
                      <!-- <div class="d-flex x-gap-5 pb-10">
                        <i class="icon-star text-yellow-1 text-10"></i>
                        <i class="icon-star text-yellow-1 text-10"></i>
                        <i class="icon-star text-yellow-1 text-10"></i>
                        <i class="icon-star text-yellow-1 text-10"></i>
                        <i class="icon-star text-yellow-1 text-10"></i>
                      </div> -->
                      <div class="lh-17 fw-500"><?php echo $prop_name; ?>,<?php echo $address; ?></div>
                      <!-- <div class="text-14 lh-15 mt-5">Anjuna, Goa</div> -->
                    </div>
                  </div>
                <div class="row mt-40">
                  <div class="col-lg-3 col-md-6">
                    <div class="text-15 lh-12">Order Number</div>
                    <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">#<?php echo $bookingno; ?></div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="text-15 lh-12">Date</div>
                    <div class="text-15 lh-12 fw-500 text-blue-1 mt-10"><?php echo $bookingDate; ?></div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="text-15 lh-12">Total</div>
                    <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">₹<?php echo number_format($totalamt); ?></div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="text-15 lh-12">Payment Method</div>
                    <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">COD</div>
                  </div>
                </div>
              </div>
              <div class="border-light rounded-8 px-50 py-40 mt-40">
                <h4 class="text-20 fw-500 mb-30">Your Information</h4>
                <div class="row y-gap-10">
                  <div class="col-12">
                    <div class="d-flex justify-between ">
                      <div class="text-15 lh-16">Full Name</div>
                      <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $guest_name; ?></div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex justify-between border-top-light pt-10">
                      <div class="text-15 lh-16">Email</div>
                      <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $guest_email; ?></div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex justify-between border-top-light pt-10">
                      <div class="text-15 lh-16">Phone Number</div>
                      <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $guest_mobile; ?></div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex justify-between border-top-light pt-10">
                      <div class="text-15 lh-16">Residential City</div>
                      <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $guest_city; ?></div>
                    </div>
                  </div>
                <?php if($guest_special_request != ''){ ?>
                  <div class="col-12">
                    <div class="d-flex justify-between border-top-light pt-10">
                      <div class="text-15 lh-16">Special Request</div>
                      <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $guest_special_request; ?></div>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div>
            </div>
            <!-- /.column2 -->
         </div>
      </div>
   </div>
</div>
</section>
<?php include 'footer.php';?>
