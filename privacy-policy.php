<?php 
include('config.php');
include('header.php');
include('module/static.php');
?>

<section class="layout-pb-lg layout-pt-md ">
   <div class="container">
      <div class="tabs js-tabs">
         <div class="row y-gap-30">              
            <div class="col-lg-12">
               <div class="tabs__content js-tabs-content">
                  <div class="tabs__pane -tab-item-1 is-tab-el-active">
                           <?php echo $static_data[0]->desc; ?>                   
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
 <?php include 'footer.php';?>
  