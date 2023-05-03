
<?php 
include('config.php');
include('header.php');
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
            <?php //include 'listing-filter.php';?>
      </div>
    </section>

    <div class="singleMenu js-singleMenu">
            <div class="singleMenu__content">
               <div class="container">
                 <?php //include 'listing-filter.php';?>
               </div>
            </div>
         </div>

    <section data-anim="fade" class="d-flex items-center py-15 is-in-view">
      <div class="container">
        <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
              <div class="col-auto">
                <div class=""><a href="<?php echo WEBLINK; ?>">Home</a></div>
              </div>
              <div class="col-auto">
                <div class="">&gt;</div>
              </div>
              <div class="col-auto">
                <div class="">Villa in Goa</div>
              </div>
              
            </div>
          </div>

          
        </div>
      </div>
    </section>


 <section class="halfMap">
    

      <div class="halfMap__map">
        <div class="map js-map"></div>
      </div>
    </section>
     
     <?php include 'list-button.php';?>

         <?php include 'footer.php';?>
      </main>
      <!-- JavaScript -->
      <?php include 'script.php';?>
   </body>
</html>