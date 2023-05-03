<?php 
include('config.php');
include('header.php');
//$cityname = $_GET['cityname'];

if(isset($_GET['destination_name']))
{
  if(($_GET['destination_name'])!=''){
    $cityname=$_GET['destination_name'];
  }
}
else
{
  $cityname = $_GET['cityname'];
}

?>

         <div class="bg-light-2">
            <div class="container block-search hide-on-desktop-menu">
  <!-- Content here -->
    <div class="row">
        <div class="col-12">
            <div class="box-text pt-20 " id="embed_button">
                <button class="btn-search" onclick="JavaScript:fncShow('embed_div');"><i class="fa fa-search"></i> Search for a destination or a home</button>
            </div>
        </div> 
    </div>
    <div class="box-search" id="embed_div" style="display:none;">
       <div class="">
                        <?php include 'search-form.php';?>
                     </div>
    </div> 
</div>
</div>

          <section class="pt-20 pb-20 bg-light-2">
      <div class="container">
        <div class="pb-10 hide_mobile">
                        <?php include 'search-form.php';?>
                     </div>
            <?php include 'listing-filter.php';?>
      </div>
    </section>

    <div class="singleMenu js-singleMenu">
            <div class="singleMenu__content">
               <div class="container">
                 <?php include 'listing-filter.php';?>
               </div>
            </div>
         </div>

    <section data-anim="fade" class="d-flex items-center py-15 is-in-view">
      <div class="container">
        <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
              <div class="col-auto">
                <div class=""><a href="index.php">Home</a></div>
              </div>
              <div class="col-auto">
                <div class="">&gt;</div>
              </div>
              <div class="col-auto">
                <div class="">Villa in <?php echo $cityname; ?></div>
              </div>
              
            </div>
          </div>

          
        </div>
      </div>
    </section>

     

              <section class="layout-pb-lg">
      <div class="container">
        <div class="row justify-between items-center text-center">
         
          <div class="col-lg-12">
            <div class="no-page">
              <div class="no-page__title"><img src="img/dashboard/sidebar/house.svg" width="20%"></div>

              <h2 class="text-30 fw-600">Opps, we couldn't find any results</h2>

              <div class="pr-30 mt-5">Try searching for something else</div>

              
            </div>
          </div>
        </div>
      </div>
    </section>
         


  

    

         <?php include 'footer.php';?>
      </main>
      <!-- JavaScript -->
      <?php include 'script.php';?>
   </body>
</html>