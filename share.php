<div class="row">
<div class=" col-auto padding0">
  <button class="good-share text-white mr-10 share"> <i class="fa fa-share-alt" aria-hidden="true"></i> Share</button>
</div>
<?php 
$getslug = $_GET['slug'];
$query_prop = mysqli_query($sql,"SELECT `id` from `addproperty` where `slug`='$getslug'");
$getslugdata = mysqli_fetch_object($query_prop);
$pid = $getslugdata->id;
$user_id = $_SESSION[SESSION]['loginuserid'];
$getwishlist = mysqli_query($sql,"SELECT `id` from `wishlist_tbl` where `property_id` = '$pid' and `userid`='$user_id'");
$countdata = mysqli_num_rows($getwishlist);

?>
<div class=" col-auto padding0">
<?php 
                     if($countdata>0){
                echo'<button class="save_details_property_btn wishlist active px-15 mr-10 py-10 -blue-1" data-propid="'.$pid.'" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'">
                  <i class="icon-heart mr-10"></i>
                  Save
                </button>';
                     }
                     else
                     {
                      echo'<button class="wishlist save_details_property_btn px-15 mr-10 py-10 -blue-1" data-propid="'.$pid.'" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'">
                      <i class="icon-heart mr-10"></i>
                      Save
                    </button>';
                     }
?>
              </div>


           <!-- AddToAny BEGIN -->


<!-- <div class="sharethis-inline-share-buttons"></div>


          <div class="col-12">

            <h3 class="text-15 fw-500 pt-10">Share Villa </h3>

          </div> -->

</div> 
<!-- AddToAny END -->

<script type="text/javascript">
   $(document).ready(function () {      
    $('.wishlist').on('click',function(){
         var prop_id = $(this).attr('data-propid');
         var user_id = $(this).attr('data-userid');
         var checkdata = $(this).hasClass('active');

         if(checkdata == true){
            $(this).removeClass('active');
            var dataString = 'removeWishlist=' + prop_id +"&userid="+user_id;
            //alert(dataString);
            $.ajax({
               type: "POST",
               url: mainlink+"ajax_function.php",
               data: dataString,
               success: function (data) {
                 
               }
            });
         }
         else
         {
            $(this).addClass('active');
            var dataString = 'addToWishlist=' + prop_id +"&userid="+user_id;
           // alert(dataString);
            $.ajax({
               type: "POST",
               url: mainlink+"ajax_function.php",
               data: dataString,
               success: function (data) {
                 
               }
            });
         }
      });

   });
   </script>