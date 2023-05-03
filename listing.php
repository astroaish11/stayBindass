<?php 
include('config.php');
include('header.php');
// include('module/villalist.php');
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
            <!-- <div class=""><a href="index.php">Home</a></div> -->
            <div class=""><a href="<?php echo WEBLINK; ?>">Home</a></div>
            
          </div>
          <div class="col-auto">
            <div class="">&gt;</div>
          </div>
          <?php

       /* $propertyslug = $_GET["property"];

        // echo'<script type = "text/javascript">alert("$propertyslug")</script>';

        $data_destination = mysqli_query($sql,"SELECT `id`,`title` from `destination_master` where `slug`='$propertyslug'");
            $list_dest = mysqli_fetch_object($data_destination);
            $urlslug = $list_dest->title;
            $destination_id = $list_dest->id;*/

          // $dest_id = $_GET["destination_id"];
          // $data_destination = mysqli_query($sql,"SELECT `title` from `destination_master` where `id`='$dest_id'");
          // $list_dest = mysqli_fetch_object($data_destination);
          // 
          if(isset($_GET['destination_id'])){$propertyslug = $_GET['destination_id'];}
          //$propertyslug = $_GET['destination_id'];
          $data_destination = mysqli_query($sql,"SELECT `id`,`title` from `destination_master` where `id`='$propertyslug'");
          $list_dest = mysqli_fetch_object($data_destination);
          $urlslug = $list_dest->title;
          $destination_id = $list_dest->id;
          $destination_name = $urlslug;

          if(isset($_GET['cityname'])){$urlslug=$_GET['cityname'];}


          ?>
          <div class="col-auto">
            <div class="">Villa in <?php echo $urlslug;?></div>
          </div>              
        </div>
      </div>        
    </div>
  </div>
</section>
<section class="pt-20 layout-pb-lg">
  <div class="container">
    <div class="row y-gap-30">
  
    <?php propertyListing($sql, $cityname, $cityid, $checkin, $checkout, $adults, $childs, $rooms, $destination_name, $destination_id); ?>

</section>
<script type="text/javascript">
$(document).ready(function (){
  // $('.wishlist').on('click', function () {
  //   alert('clicked');
  // });
  $('.wishlist').on('click', function () {
         var prop_id = $(this).attr('data-propid');
         var user_id = $(this).attr('data-userid');
         var checkdata = $(this).hasClass('active');

         if (checkdata == true) {
            $(this).removeClass('active');
            var dataString = 'removeWishlist=' + prop_id +"&userid="+user_id;
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               success: function (data) {

               }
            });
         }
         else {
            $(this).addClass('active');
            var dataString = 'addToWishlist=' + prop_id+"&userid="+user_id;
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               success: function (data) {

               }
            });
         }
      });
});
</script>
<!-- <?php include 'map-button.php';?> -->
<?php include 'footer.php'; ?>