<?php 
include('config.php');
include('header.php');
include('module/faqs.php');
?>

         <section class="layout-pt-lg layout-pb-lg">
            <div class="container">
               <div class="tabs js-tabs">
                  <div class="row y-gap-30">
                     <div class="col-lg-12">
                        <div class="tabs__content js-tabs-content">
                           <section class=" layout-pb-md">
                              <div class="container">
                                 <div class="row justify-center text-center">
                                    <div class="col-auto">
                                    <div class="sectionTitle -md">
                                          <h2 class="text-30 fw-500">FAQs<br></hr>
                                       <?php  $x = 0;
                                       foreach ($faqcat_data as $faqcat)
                                       {   
                                          $catid = $faqcat->id;
                                             $faqmasterdata = file_get_contents('json/faqmaster/faqmaster.json');
                                             $addproperty_data = json_decode($faqmasterdata,true);

                                             $filteredquestions = array_filter($addproperty_data, function ($var) use ($catid) {
                                                return ($var['title_id'] == $catid);
                                             });
                                             
                                          ?>

                                       

                                          <h2><?php echo $faqcat->title; ?></h2>

                                          <p class="text-dark-1 text-16 mt-10">
                                             <?php echo $faqcat->desc; ?></p>

                                             <?php
                                             // $catid = $faqcat->id;
                                             // $faqmasterdata = file_get_contents('json/faqmaster/faqmaster.json');
                                             // $addproperty_data = json_decode($faqmasterdata,true);

                                             // $filteredquestions = array_filter($addproperty_data, function ($var) use ($catid) {
                                             //    return ($var['title_id'] == $catid);
                                             // });
                                             
                                             ?>
                                          
                                             <div class="row y-gap-30 justify-center pt-40 sm:pt-20">
                                    <div class="col-xl-8 col-lg-10">
                                       <div class="accordion -simple row y-gap-20 js-accordion">
                                        
                                       <?php 
                                       foreach ($filteredquestions as $faqmast)
                                       {    
                                          ?>

                                          <div class="col-12">
                                             <div class="accordion__item px-20 py-20 border-light rounded-4">
                                                <div class="accordion__button d-flex items-center">
                                                   <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                      <i class="icon-plus"></i>
                                                      <i class="icon-minus"></i>
                                                   </div>
                                                   <div class="button text-dark-1">   
                                                      <?php echo $faqmast['question']; ?></h2></div>
                                                </div>
                                                <div class="accordion__content">
                                                   <div class="pt-20 pl-60">
                                                      <p class="text-15">  
                                                          <?php echo $faqmast['answer']; ?></p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <?php 
                                       } 
                                       ?>
                                    </div>
                                 </div>
                              </div>
                                       </div>

                                       <?php $x++; } ?>

                                    </div>
                                 </div>
                                 


                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <?php include 'footer.php';?>
