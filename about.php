<?php 
include('config.php');
include('module/story.php');
include('header.php');
?>

         <section class="section-bg layout-pt-md layout-pb-md">
            <div class="section-bg__item col-12">
               <!-- <img src="img/pages/about/1.png" alt="image"> -->
            </div>
            <div class="container">
               <div class="row justify-center text-center">
                  <div class="col-xl-6 col-lg-8 col-md-10">
                     <h1 class="text-40 md:text-25 fw-600 text-white">
                        <?php echo $ourstory_data[0]->title ; ?></h1>
                  </div>
               </div>
            </div>
         </section>
         <section class="layout-pt-md">
            <div class="container">
               <div class="row y-gap-30 justify-between items-center">
                  <div class="col-lg-6">
                     <h2 class="text-30 fw-600"><?php echo $ourstory_data[0]->title;?></h2>
                     <!-- <p class="mt-5">Discover your next holiday destination</p> -->
                     <p class="text-dark-1 mt-20 lg:mt-40 md:mt-20 justify">
                     <?php echo $ourstory_data[0]->desc ; ?>.</p> 
                  </div>
                  <div class="col-lg-5">
                      <img src="upload/ourstory/<?php echo $ourstory_data[0]->upload_image; ?>" alt="image"  class="rounded-4">
                  </div>
               </div>
            </div>
         </section>
         <section class="pt-60">
            <div class="container">
               <div class="border-bottom-light pb-40">
                  <div class="row y-gap-30 justify-center text-center">
                     <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600"><?php echo $ourstory_data[0]->counter_1_1; ?></div>
                        <div class="text-14 lh-14 text-light-1 mt-5"><?php echo $ourstory_data[0]->counter_1_2; ?></div>
                     </div>
                     <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600"><?php echo $ourstory_data[0]->counter_2_1; ?></div>
                        <div class="text-14 lh-14 text-light-1 mt-5"><?php echo $ourstory_data[0]->counter_2_2; ?></div>
                     </div>
                     <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600"><?php echo $ourstory_data[0]->counter_3_1; ?></div>
                        <div class="text-14 lh-14 text-light-1 mt-5"><?php echo $ourstory_data[0]->counter_3_2; ?></div>
                     </div>
                     <div class="col-xl-3 col-6">
                        <div class="text-40 lg:text-30 lh-13 fw-600"><?php echo $ourstory_data[0]->counter_4_1; ?></div>
                        <div class="text-14 lh-14 text-light-1 mt-5"><?php echo $ourstory_data[0]->counter_4_2; ?></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <?php include('footer.php'); ?>
     