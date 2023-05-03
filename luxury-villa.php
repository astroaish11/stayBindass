<?php
include('config.php');
include('header.php');
include('module/luxury-villa.php');
?>

<section class="section-bg pt-40 pb-40 relative z-5">
   <div class="section-bg__item col-12">
      <!-- <img src="img/misc/bg-1.png" alt="image" class="w-full h-full object-cover"> -->
   </div>
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="text-center">
               <h1 class="text-30 fw-600 text-white">Experience luxury with a touch of comfort</h1>
            </div>
            <div class="hide_mobile">
               <?php include 'search-form.php'; ?>
            </div>
         </div>
      </div>
   </div>
</section>



<section class="layout-pt-md layout-pb-lg main-section">
   <div class="container">
      <div class="outline">
         <div class="middle">
            <div class="row">
               <div class="col-md-8">

                  <div class="rounded-4">
                     <div class="tabs -underline-2 js-tabs">
                        <div class="tabs__controls row x-gap-20 y-gap-10 lg:x-gap-20 js-tabs-controls">

                            <?php foreach ($bhk_master_data as $bhk_master) {
                              $x = 1;
                               echo '<div class="col-auto '.$bhk_master->bhk.'">
                                     <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"  data-tab-target=".-tab-item-2" id="bhktab">' . $bhk_master->bhk . '</button>
                                     </div>';
                              $x++;
                           } ?> 

                        </div>



                        <div class="tabs__content pt-30 js-tabs-content">

                           <div class="tabs__pane -tab-item-2 is-tab-el-active">
                              <div class="row y-gap-20">


                                 <?php
                                 if ($count > 0) {

                                    $x = 1;
                                  //  while ($listdata = mysqli_fetch_object($selectdata)) {
                                    foreach ($resources as $listdata) {
                                     $varstr = $listdata['bhk'];
                                     $newstr = str_replace(",", " ",$varstr);
                                     //echo $newstr;
                                       echo '
                              <div class="col-12 list-shadow mb-20 '.$newstr.'">
                              <div class="">
                                 <div class="row x-gap-20 y-gap-20">
                                    <div class="col-md-auto">
                                       <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                          <div class="cardImage__content">
                                             <img class="rounded-4 col-12 js-lazy" src="' . WEBLINK . 'upload/property_thumbnail/' . $listdata['image']. '" alt="image">
                                          </div>
                                          <div class="cardImage__leftBadge">
                                             <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                                EST 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md">
                                       <a href="villa-sb-089.php" class="text-18 lh-16 fw-500">
                                       ' . $listdata['title'] . '
                                       </a>
                                       <div class="row x-gap-10 y-gap-10 items-center pt-5">
                                          <div class="col-auto">
                                             <p class="text-14"><i class="icon-location-2 text-14 mr-5"></i>' . $listdata['city'] . ', ' . $listdata['state'] . ', India</p>
                                          </div>
                                          <div class="col-auto">
                                             <a href="villa-sb-089.php#Rates"data-x-click="mapFilter" class="text-blue-1 text-14 underline">Rates & Charges</a>
                                          </div>
                                          <div class="col-auto">
                                             <div class="size-3 rounded-full bg-light-1"></div>
                                          </div>
                                          <div class="col-auto">
                                             <p class="text-16">Upto 4 Guest | ' . $listdata['room_type'] . ' | ' . $listdata['home_type'] . ' |  ' . $listdata['pool'] . ' </p>
                                          </div>
                                       </div>
                                       <div class="col-xl-12">
                                          <div class="col-md-auto text-right md:text-left">
                                             <div class="text-14 text-light-1 mt-0 md:mt-20">Start from</div>
                                             <div class="text-20 lh-12 fw-600 mt-5">
                                            
                                             <span class="text-14 fw-500">/ night</span></div>
                                             <div class="text-14 text-light-1 mt-5 mb-10">(excl. taxes & charges)</div>
                                             <div class="text-14 text-light-1 mb-10">Rates Can Vary According to the Peak Seasons</div>
                                             <a href="' . WEBLINK . 'property/' . $listdata['slug'] . '.php" class="details text-white mt-24 py-5 px-20 mt-20">
                                             View details<span class="icon-arrow-top-right ml-10"></span>
                                             </a>
                                             <a href="https://api.whatsapp.com/send?phone=+918657011172&text=I am interested to know more about villa SB 089" target="blank" class="whatsApp text-white mt-24 py-5 px-20 mt-20 ml-10">
                                             <i class="fa fa-whatsapp my-float"></i> Chat Now 
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>';
                                       $x++;
                                    }

                                 } else {
                                    echo '<div>No Villa Found</div>';
                                 }
                                 ?>

                              </div>
                           </div>

                        </div>
                     </div>
                  </div>


                  <!-- /#content -->
               </div>
               <!-- /.column1 -->
               <div class="col-xl-4">
                  <?php include 'need-help.php'; ?>
               </div>
               <!-- /.column2 -->
            </div>
         </div>
         <!-- /.middle -->
      </div>
      <!-- /.outline -->
   </div>
</section>
<script type="text/javascript">
   $(document).ready(function(){
         alert('clicked'");
      }
</script>
<?php include 'footer.php'; ?>
