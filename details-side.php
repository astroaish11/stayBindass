<?php
//include('config.php');
?>


<form action="" method="POST">
  <div class="y-gap-20">
    <div class="text-14">
      Start from
      
      <span class="text-22 text-dark-1 fw-500">₹ <?php echo number_format($todayprice); ?> </span><span class="text-14 fw-500">/ night</span>
      
      </div>
              
      <!-- <a data-x-click="lang" class="button px-10 fw-400 text-14 -outline-blue-1 h-40 text-blue-1 mb-10"><svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0331 18.5H3.96736C2.7371 18.5 1.73047 17.4933 1.73047 16.2631L1.73064 8.43416C1.73064 7.2039 2.73727 6.19727 3.96753 6.19727H14.0333C15.2636 6.19727 16.2702 7.2039 16.2702 8.43416V16.2631C16.27 17.4933 15.2636 18.5 14.0333 18.5H14.0331Z" stroke="#ab2440" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14.0346 6.19741C13.8669 3.56919 11.686 1.5 9.00169 1.5C6.31754 1.5 4.19255 3.56902 3.96875 6.19741" stroke="#ab2440" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.00119 14.5865C8.38604 14.5865 7.88281 14.0832 7.88281 13.4681V11.2312C7.88281 10.616 8.38604 10.1128 9.00119 10.1128C9.61633 10.1128 10.1196 10.616 10.1196 11.2312V13.4681C10.1196 14.0832 9.61633 14.5865 9.00119 14.5865Z" fill="#ab2440"></path></svg> &nbsp; Unlock Special Discount!</a> -->

        <div class="col-12 border border-bottom-none">
          <div class="searchMenu-date js-form-dd js-calendar">
           <div data-x-dd-click="searchMenu-date">
             <h4 class="text-15 fw-500 ls-2 color-dark-1 lh-16">Check in - Check out</h4>
              <div class="text-15 text-light-1 ls-2 lh-16">
                <div class="t-datepicker" data-x-dd="searchMenu-date">
                  <div class="t-check-in"></div>
                  <div class="t-check-out"></div>
                </div>      
               </div>
            </div>     
           </div>
         </div>
        <div class="col-12 border">
          <div class="searchMenu-guests px-10 lg:py-10 lg:px-0 js-form-dd js-form-counters">
              <div data-x-dd-click="searchMenu-guests">
                <h4 class="text-15 fw-500 color-dark-1 ls-2 lh-16">Guest</h4>
                  <div class="text-15 text-light-1 ls-2 lh-16">
                  <span class="js-count-adult">2</span> adults
                                        -
                  <span class="js-count-child">1</span> children
                  -
                  <span class="js-count-room">1</span> room
                </div>
              </div>
            <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
              <div class="bg-white px-20 py-20 rounded-4">
                <div class="row y-gap-10 justify-between items-center">
                    <div class="col-auto">
                      <div class="text-15 fw-500">Adults</div>
                    </div>
                    <div class="col-auto">
                      <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                        <p class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                          <i class="icon-minus text-12"></i>
                        </p>
                        <div class="flex-center size-20 ml-15 mr-15">
                          <div class="text-15 js-count" id="adults">2</div>
                        </div>
                        <p class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                          <i class="icon-plus text-12"></i>
                        </p>
                      </div>
                    </div>
                </div>
                <div class="border-top-light mt-10 mb-10"></div>
                <div class="row y-gap-10 justify-between items-center">
                  <div class="col-auto">
                    <div class="text-15 lh-12 fw-500">Children</div>
                    <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                  </div>
                  <div class="col-auto">
                    <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                      <p class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                        <i class="icon-minus text-12"></i>
                      </p>
                      <div class="flex-center size-20 ml-15 mr-15">
                        <div class="text-15 js-count" id="children">1</div>
                      </div>
                      <p class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                        <i class="icon-plus text-12"></i>
                      </p>
                    </div>
                  </div>
                </div>
               <div class="border-top-light mt-10 mb-10"></div>
              <div class="row y-gap-10 justify-between items-center">
                <div class="col-auto">
                  <div class="text-15 fw-500">Rooms</div>
                </div>
                <div class="col-auto">
                  <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                    <p class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                      <i class="icon-minus text-12"></i>
                    </p>
                    <div class="flex-center size-20 ml-15 mr-15">
                      <div class="text-15 js-count" id="rooms">1</div>
                    </div>
                    <p class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                      <i class="icon-plus text-12"></i>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
    <?php if(isset($_SESSION[SESSION])) { ?>
      <div class="col-12">
        <input type="hidden" id="propertyid" value="<?php echo $eid; ?>"/>
        <div id="availabilityErr" style="text-align: center;"></div>
        <button type="button" name="submitbtn" id="check-availability" class="button -dark-1 py-15 px-35 h-40 col-12 rounded-4 bg-blue-1 text-white">
          Book
        </button>
      </div>
    <?php }else{ ?>
      <div class="col-12">
        <input type="hidden" id="propertyid" value="<?php echo $eid; ?>"/>
        <div id="availabilityErr" style="text-align: center;"></div>
        <button data-x-click="lang" type="button" name="submitbtn" class="button -dark-1 py-15 px-35 h-40 col-12 rounded-4 bg-blue-1 text-white px-10 fw-400 text-14 -blue-1 bg-blue-1 h-40 text-white ml-10">
          Book
        </button>
      </div>
    <?php } ?>                   
   </div>
 </form>

                     
<p class="text-center text-14 pt-10">You won't be charged yet</p>
<div class="items-center">
  <div class="text-14 lh-12 pt-10">
    <p ><u> <span class="pull-right"></span></u></p>
  </div>
  

</div>

<div id="totalAmountDiv">
  <div class="calculations ">
    <div class="con-space-between">
      <div class="text-xsm-light clr-grey" id="open-dialog">₹<?php echo number_format($todayprice); ?> x 1 night &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div>
      <div class="text-xsm clr-black">₹<?php echo number_format($todayprice); ?></div>
    </div>
    <dialog id="dialog">
       <form method="dialog">
          <button><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 3; overflow: visible;"><path d="m6 6 20 20"></path><path d="m26 6-20 20"></path></svg></button>
        </form>
        <div>
          <h5>Base Price Breakdown</h5>
          <hr>
          <p><?php echo $todayDate; ?> <span class="pull-right">₹<?php echo $todayprice; ?></span></p>
          <!-- <p>1/2/2023 <span class="pull-right">₹10,160</span></p>
          <p>2/2/2023 <span class="pull-right">₹10,160</span></p>
          <p>3/2/2023 <span class="pull-right">₹10,160</span></p>
          <p>4/2/2023 <span class="pull-right">₹10,160</span></p>
          <p>5/2/2023 <span class="pull-right">₹10,160</span></p> -->
        <hr>
      <h6>Total Base Price &nbsp;&nbsp; <span class="pull-right">₹<?php echo $todayprice; ?></span></h6>
        </div>
      </dialog>
      <div class="con-space-between tooltip" style="display: none;">
        <div class="text-xsm-light clr-grey">Extra Guest Charges &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
        <div class="text-xsm clr-black">₹6,000</div>
        <span class="tooltiptext">Any Bbooking above 6 guest will be charged as extra guest</span>
    </div>
    <div class="con-space-between tooltip">
        <div class="text-xsm-light clr-grey">Service Charges &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
        <div class="text-xsm clr-black">₹<?php echo number_format($serviceCharge); ?></div>
        <span class="tooltiptext">Applicable as per Government Guidelines</span>
    </div>
    <div class="con-space-between tooltip" style="display: none;">
        <div class="text-xsm-light clr-grey">Convenience fees &nbsp;<span class="info-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.00065 1.33594C4.32065 1.33594 1.33398 4.3226 1.33398 8.0026C1.33398 11.6826 4.32065 14.6693 8.00065 14.6693C11.6807 14.6693 14.6673 11.6826 14.6673 8.0026C14.6673 4.3226 11.6807 1.33594 8.00065 1.33594ZM8.66732 11.3359H7.33398V7.33594H8.66732V11.3359ZM8.66732 6.0026H7.33398V4.66927H8.66732V6.0026Z" fill="#ab2440"></path></svg></span></div> 
        <div class="text-xsm clr-black">₹ 0</div>
        <span class="tooltiptext">Service Fee To help run this platform smoothly and offer you various service</span>
    </div>
  </div>
  <hr>
  <div class="items-center">
    <div class="text-14 lh-12">
      <h6>Total before taxes<span class="pull-right total_before_taxes"> &nbsp; ₹<?php echo number_format($total); ?></span></h6>                              
    </div>
  </div>
</div>
<input type="hidden" id="checkin-date" value="null">
<input type="hidden" id="checkout-date" value="null">
<script type="text/javascript">

$('body').on('click', '#check-availability', function () {

  var checkin = $('.t-input-check-in').val();
  var checkout = $('.t-input-check-out').val();
  var adults = $('#adults').text();
  var children = $('#children').text();
  var rooms = $('#rooms').text();
  var propertyid = $('#propertyid').val();
  var allok = 1;

  if(checkin == 'null'){
    $('#availabilityErr').html('<p style="font-size: 14px; color: red; margin-top: 0; margin-left: 0;">Please select check in date.</p>');
     setTimeout(function(){ $('#availabilityErr').html('');}, 5000);
     var allok = 0;
     return false;
  }

  if(checkout == 'null'){
    $('#availabilityErr').html('<p style="font-size: 14px; color: red; margin-top: 0; margin-left: 0;">Please select check out date.</p>');
     setTimeout(function(){ $('#availabilityErr').html('');}, 5000);
     var allok = 0;
     return false;
  }

  if (allok == 1) {

    var dataString = 'checkAvailability='+checkin+'&checkout='+checkout+'&propertyid='+propertyid+'&adults='+adults+'&children='+children+'&rooms='+rooms;

    $.ajax({
      type: "POST",
      url: mainlink+"ajax_function.php",
      data: dataString,
      success: function (data) {

        if (data == 1) {
            window.location.assign(mainlink+"booking");
        }

        if (data == 2) {
          $('#availabilityErr').html('<p style="font-size: 14px; color: red; margin-top: 0; margin-left: 0;">Something went wrong.</p>');
          setTimeout(function(){ $('#availabilityErr').html('');}, 5000);
          return false;
        }

        if (data == 3) {
          $('#availabilityErr').html('<p style="font-size: 14px; color: red; margin-top: 0; margin-left: 0;">Property not available this dates.</p>');
          setTimeout(function(){ $('#availabilityErr').html('');}, 5000);
          return false;
        }

      }

    });

  }

});



// $('body').on('click', '.t-end', function () {
//    alert('Hi'); 
// });

var x = setInterval(function() {

  var checkin = $('.t-input-check-in').val();
  var checkout = $('.t-input-check-out').val();
  var propertyid = $('#propertyid').val();

  if(checkin != null && checkout != null){

    var checkinDate = $('#checkin-date').val();
    var checkoutDate = $('#checkout-date').val();

    if(checkin != checkinDate || checkout != checkoutDate){

      $('#checkin-date').val(checkin);
      $('#checkout-date').val(checkout);

      var dataString = 'checkDatewisePrice='+checkin+'&checkout='+checkout+'&propertyid='+propertyid;

      $.ajax({
        type: "POST",
        url: mainlink+"ajax_function.php",
        data: dataString,
        success: function (data) {

          //console.log(data);

          if(data != 0){

            $('#totalAmountDiv').html(data);

          }

        }

      });

    }else{

      //console.log('Hi2');

    }
    
  }

}, 1000);

</script>      

                

                 
