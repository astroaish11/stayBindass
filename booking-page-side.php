  <div class="">
    <div class="row">
      <div class="col-auto">
        <img src="<?php echo WEBLINK;?>upload/property_thumbnail/<?php echo $property_image;?>" alt="image" class="size-140 rounded-4 object-cover">
      </div>
      <div class="col">
        <!-- <div class="d-flex x-gap-5 pb-10">
          <i class="icon-star text-yellow-1 text-10"></i>
          <i class="icon-star text-yellow-1 text-10"></i>
          <i class="icon-star text-yellow-1 text-10"></i>
          <i class="icon-star text-yellow-1 text-10"></i>
          <i class="icon-star text-yellow-1 text-10"></i>
        </div> -->
        <div class="lh-17 fw-500"><?php echo $property_name;?></div>
        <div class="text-14 lh-15 mt-5"><?php echo $property_address;?></div>
      </div>
    </div>

    <form action="" method="POST"> 
      <h4 class="text-18 fw-500 mt-20 md:mt-10">Price Details</h4>

      <div class="calculations ">
        <div class="con-space-between">
          <div class="text-xsm-light clr-grey" id="open-dialog">₹<?php echo number_format($pernightPrice); ?> x <?php echo $night; ?> &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div>
          <div class="text-xsm clr-black">₹<?php echo number_format($subtotalprice); ?></div>
        </div>

        <dialog id="dialog">
           <form method="dialog">
              <button><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;"><path d="m6 6 20 20"></path><path d="m26 6-20 20"></path></svg></button>
            </form>
            <div>
              <h5>Base Price Breakdown</h5>
              <hr>
              <p>31/1/2023 <span class="pull-right">₹10,160</span></p>
              <p>1/2/2023 <span class="pull-right">₹10,160</span></p>
              <p>2/2/2023 <span class="pull-right">₹10,160</span></p>
              <p>3/2/2023 <span class="pull-right">₹10,160</span></p>
              <p>4/2/2023 <span class="pull-right">₹10,160</span></p>
              <p>5/2/2023 <span class="pull-right">₹10,160</span></p>
            <hr>
          <h6>Total Base Price &nbsp;&nbsp; <span class="pull-right">₹30,237</span></h6>
            </div>
          </dialog>

          

        <!-- <div class="con-space-between tooltip">
            <div class="text-xsm-light clr-grey">Extra Guest Charges &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
            <div class="text-xsm clr-black">₹6,000</div>
            <span class="tooltiptext">Any Bbooking above 6 guest will be charged as extra guest</span>
        </div> -->

        <div class="con-space-between tooltip">
            <div class="text-xsm-light clr-grey">Total GST &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
            <div class="text-xsm clr-black">₹<?php echo number_format($gstAmt); ?></div>
            <span class="tooltiptext">Applicable as per Government Guidelines</span>
        </div>

        <!-- <div class="con-space-between tooltip">
            <div class="text-xsm-light clr-grey">Convenience fees &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
            <div class="text-xsm clr-black">₹ 0</div>
            <span class="tooltiptext">Service Fee To help run this platform smoothly and offer you various service</span>
        </div> -->
      </div>
      <hr>
      <div class="con-space-between tooltip">
            <div class="text-15 fw-600 ">Total Payable &nbsp; </div> 
            <div class="text-15 fw-600 text-xsm clr-black">₹ <?php echo number_format($gradtotalAmt); ?></div>
        </div>
    <hr>
      <div class="d-flex items-center justify-between bg-success-1 pl-30 pr-20 py-10 rounded-8">
      <div class="text-success-2 lh-1 fw-500">You pay only : ₹<?php echo number_format($perpersonAmt); ?> per person</div>
    </div>
        <div class="col-12 mt-20">
          <input type="hidden" id="book_state" value="">
          <input type="hidden" id="book_state_id" value="0">
          <input type="hidden" id="bookingId" value="<?php echo $getid; ?>">
          <button type="submit" id="submit_paynow" name="submit_paynow" class="button -dark-1 py-15 px-35 h-40 col-12 rounded-4 bg-blue-1 text-white">
            Pay Now
          </button>
          <button type="submit" id="submit_paynow_dummy" name="submit_paynow" class="button -dark-1 py-15 px-35 h-40 col-12 rounded-4 bg-blue-1 text-white" style="display: none;">
            Pay Now
          </button>
          <div id="booking_error"></div>
        </div>
      </div>