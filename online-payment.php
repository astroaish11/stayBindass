<?php 
include('config.php');
include('header.php');
include('module/onlinepay.php');
?>
  
         <section class="section-bg layout-pt-md layout-pb-md">
            <div class="section-bg__item col-12">
            </div>
            <div class="container">
               <div class="row justify-center text-center">
                  <div class="col-xl-6 col-lg-8 col-md-10">
                     <h1 class="text-40 md:text-25 fw-600 text-white">Online Payment</h1>
                  </div>
               </div>
            </div>
         </section>
         <section class="layout-pt-md">
            <div class="container">
               <div class="row y-gap-30 justify-between items-center">
                  <div class="col-lg-6">
                     <p class="text-dark-1 mt-20 lg:mt-40 md:mt-20 justify">
                     <?php echo $onlinepay_data[0]->desc; ?>
                     </p>
                  </div>
                  <div class="col-lg-4">
                     <img src="upload/onlinepayment/<?php echo $onlinepay_data[0]->upload_image; ?>" alt="Online Payment" class="rounded-4">
                  </div>
               </div>
            </div>
         </section>
         
         <?php include 'footer.php';?>
      