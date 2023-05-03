<style type="text/css">
.bg-white.px-30.py-30.sm\:px-0.sm\:py-15.rounded-4{
  max-height: 400px;
  overflow-y: scroll;
}
.clickcity {
    cursor: pointer;
}
</style>
<section class="py-10">
  <div class="">
    <div class="row">
      <form action="<?php echo WEBLINK; ?>property-listing" method="get">
      <div class="col-12">
        <div class="mainSearch bg-white px-10 py-5 lg:px-20 lg:pt-5 lg:pb-20 rounded-4">
          <div class="button-grid items-center">
            <div class="searchMenu-loc pl-10 pr-10 lg:py-10 lg:px-0 js-form-dd js-liveSearch">
              <div data-x-dd-click="searchMenu-loc">
                <h4 class="text-15 fw-500 ls-2 color-dark-1 lh-16">Location</h4>
                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input autocomplete="off" type="search" placeholder="Enter Location..." class="js-search js-dd-focus searchlocation" value="<?php echo $cityname; ?>" required />
                  <input type="hidden" name="cityname" value="<?php echo $cityname; ?>" class="cityname">
                  <input type="hidden" name="cityid" value="<?php echo $cityid; ?>" class="cityid">
                </div>
              </div>

              <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4 searchdiv">
                  <div class="y-gap-5 js-results">

                    <?php echo citySearchListing($sql); ?>

                  </div>
                </div>
              </div>
            </div>

            <div class="searchMenu-date px-10 lg:py-10 lg:px-0 js-form-dd js-calendar">
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

            <div class="searchMenu-guests px-10 lg:py-10 lg:px-0 js-form-dd js-form-counters">
              <div data-x-dd-click="searchMenu-guests">
                <h4 class="text-15 fw-500 color-dark-1 ls-2 lh-16">Guest</h4>
                <div class="text-15 text-light-1 ls-2 lh-16">
                  <span class="js-count-adult"><?php echo $adults; ?></span> adults
                  -
                  <span class="js-count-child"><?php echo $childs; ?></span> children
                  -
                  <span class="js-count-room"><?php echo $rooms; ?></span> room
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
                        <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down adults-change">
                          <i class="icon-minus text-12"></i>
                        </a>

                        <div class="flex-center size-20 ml-15 mr-15">
                          <div class="text-15 js-count adults-count"><?php echo $adults; ?></div>
                        </div>

                        <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up adults-change">
                          <i class="icon-plus text-12"></i>
                        </a>
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
                        <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down childs-change">
                          <i class="icon-minus text-12"></i>
                        </a>

                        <div class="flex-center size-20 ml-15 mr-15">
                          <div class="text-15 js-count childs-count"><?php echo $childs; ?></div>
                        </div>

                        <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up childs-change">
                          <i class="icon-plus text-12"></i>
                        </a>
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
                        <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down rooms-change">
                          <i class="icon-minus text-12"></i>
                        </a>

                        <div class="flex-center size-20 ml-15 mr-15">
                          <div class="text-15 js-count rooms-count"><?php echo $rooms; ?></div>
                        </div>

                        <a class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up rooms-change">
                          <i class="icon-plus text-12"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <input type="hidden" name="adults" class="adults" value="<?php echo $adults; ?>">
            <input type="hidden" name="childs" class="childs" value="<?php echo $childs; ?>">
            <input type="hidden" name="rooms" class="rooms" value="<?php echo $rooms; ?>">
            <input type="hidden" name="property" class="property" value="<?php echo $property; ?>">
            <input type="hidden" name="destination_id" class="destination_id" value="0">
            <!-- <input type="hidden" name="destination_id" class="destination_id" value="<?php echo $destination_id; ?>"> -->

            <div class="button-item">
              <button class="mainSearch__submit button -dark-1 py-15 px-20 col-12 rounded-4 bg-blue-1 text-white">
                <i class="icon-search text-20 mr-10"></i>
                Search
              </button>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</section>


<!--<form name="menuform" class="pt-20" style="display: none;">
   <div class="row">
      <div class="col-md-1"></div>
      <div class="col-xl-12 col-lg-12 col-md-12">
         <div class="px-20 py-10 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
            <div class="row y-gap-20">
               <div class="col-md-12">
                  <h1 class="text-22 fw-500">Handpicked homes,
                  paired with unparalleled hospitality
                  </h1>
                </div>
               <div class="col-md-3">
                  <div class="form-input ">
                     <div class="row">
                        <div class="col-12">
                           <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>
                        </div>
                        <div class="col-12">
                           <select name="menu1">
                              <option value="luxury-villa-in-goa.php" selected>Goa</option>
                              <option value="luxury-villa-in-lonavala.php">Lonavala</option>
                              <option value="luxury-villa-in-alibaug.php">Alibaug</option>
                              <option value="luxury-villa-in-karjat.php">Karjat</option>
                              <option value="luxury-villa-in-panchgani.php">Panchgani</option>
                              <option value="luxury-villa-in-igatpuri.php">Igatpuri</option>
                              
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-input ">
                     <div class="">
                        <div class="col-md-12">
                           <h4 class="text-15 fw-500 ls-2 lh-16">Check-In / Check-Out</h4>
                        </div>
                        <div class="col-md-12 border">
                           <div class="t-datepicker">
                              <div class="t-check-in"></div>
                              <div class="t-check-out"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-input ">
                     <div class="row">
                        <div class="col-12">
                           <h4 class="text-15 fw-500 ls-2 lh-16">Guests</h4>
                        </div>
                        <div class="col-12">
                           <select class="form-control" type="text" name="numberofpeople" value="" placeholder=" PHONE" required="">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10-15">10-15</option>
                              <option value="15-20">15-20</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="button-item">
                     <div style="padding-top: 10px;"></div>
                     <input class="mainSearch__submit button -dark-1 h-50 px-35 col-12 rounded-100 bg-blue-1 text-white" type="button" name="Submit" value="Search" 
                        onClick="top.location.href = this.form.menu1.options[this.form.menu1.selectedIndex].value;
                        return false;">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>-->
<script type="text/javascript">

$('body').on('click', '.clickcity', function () {

  var cityid = $(this).attr('data-cityid');
  var cityname = $(this).attr('data-cityname');

  $('.cityid').val(cityid);
  $('.cityname').val(cityname);

  $(this).closest('.js-popup-window').removeClass('-is-active');
  var searchcity = $(this).closest('div').find('.searchcity').text();
  var searchstate = $(this).closest('div').find('.searchstate').text();
  if(searchstate != '' && searchstate != 'undefined'){
    var searchlocation = searchcity+', '+searchstate;
  }else{
    var searchlocation = searchcity;
  }
  $('.searchlocation').val(searchlocation);

});

// $('body').on('keypress', '.searchlocation', function () {
//   $('.searchdiv').show();
// });

$('body').on('click', '.adults-change', function () {
  var adultsCount = $(this).closest('div').find('.adults-count').text();
  $('.adults').val(adultsCount);
}); 

$('body').on('click', '.childs-change', function () {
  var childsCount = $(this).closest('div').find('.childs-count').text();
  $('.childs').val(childsCount);
}); 

$('body').on('click', '.rooms-change', function () {
  var roomsCount = $(this).closest('div').find('.rooms-count').text();
  $('.rooms').val(roomsCount);
}); 
</script>