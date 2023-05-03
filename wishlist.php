<?php 
include('config.php');
include('header.php');

$userID = $_SESSION[SESSION]['loginuserid'];

if(!isset($_SESSION[SESSION])) {
  echo '<script type="text/javascript">window.location.href="index.php"</script>';
}		

$wishQuery = "SELECT a.*,w.*,s.name as statename,n.night as nightstitle,r.room as roomtitle, p.pool as poolname,c.city as cityname , d.slug as destinationslug from  `addproperty` as a 
left join`wishlist_tbl` as w on   w.property_id = a.id 
left Join `awt_states` as s on s.id = a.state 
left Join `destination_master` as d on d.id = a.destination 
left Join `city_master` as c on c.id = a.city 
left Join `night_master` as n on n.id = a.nights 
left Join `room_master` as r on r.id = a.r_type
left Join `pool_master` as p on p.id = a.pool
where 
 w.deleted != 1 and w.userid = $userID ";

//echo $wishQuery;
$query_wish = mysqli_query($sql,$wishQuery);


$count = mysqli_num_rows($query_wish);


?>
  
<section class="layout-pt-md">
  <div class="container">
      <div class="row y-gap-30">
        <div class="col-lg-3">
            <?php include 'dashboard-side.php';?>
        </div>
        <div class="col-lg-9">
            <div class="px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">
              <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Wishlist</h1>
              </div>
              <div class="row y-gap-30 pt-40">
                <?php 

                if($count>0){
                $x = 1;
                while($getwish = mysqli_fetch_object($query_wish)){
                  $prop_id = $getwish->property_id;
                 // $arr = explode(' ',trim($getwish->nightstitle));
                 // echo $arr[0];
                    echo'<div class="col-lg-6 col-sm-6">
                            
                                <div class="listing-border">
                                  <div class="hotelsCard__image">
                                    <div class="cardImage ratio ratio-1:1">
                                      <div class="cardImage__content"> 
                                      <a href="'.WEBLINK.'property/'.$getwish->destinationslug.'/'.$getwish->slug.'" class="hotelsCard -type-1 ">                           
                                        <img class="col-12 js-lazy" src="'.WEBLINK.'upload/property_thumbnail/'. $getwish->uploadimage.'" alt="image">
                                        </a>
                                      </div>
                                      <div class="cardImage__wishlist">';
                                      
                              
                              $getwishlist = mysqli_query($sql, "SELECT `id` from `wishlist_tbl` where `property_id` = '$prop_id' and `userid`='$userID'");
                              
                             // echo "SELECT `id` from `wishlist_tbl` where `property_id` = '$query_wish->property_id' and `userid`='$userID'";
                             // echo $countdata;
                             $countdata = mysqli_num_rows($query_wish);
                              if ($countdata > 0) {
                                echo '<button class="save_property_btn active wishlist -blue-1 bg-white size-30 rounded-full shadow-2" data-propid="' . $getwish->property_id . '" data-userid="'. $userID .'">
                                          <i class="icon-heart text-12"></i>
                                        </button>';
                              }
                              else
                              {
                                echo '<button class="save_property_btn wishlist -blue-1 bg-white size-30 rounded-full shadow-2" data-propid="' . $getwish->property_id . '" data-userid="'. $_SESSION[SESSION]['loginuserid'] .'">
                                <i class="icon-heart text-12"></i>
                              </button>';
                              }
                              
                                       // echo '<button class="button active wishlist -blue-1 bg-white size-30 rounded-full shadow-2">
                                        //  <i class="icon-heart text-12"></i>
                                       // </button>';
                                      echo'</div>
                                      <div class="cardImage__leftBadge">
                                        <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                          Min: '.$getwish->nightstitle.'
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                   <div class="hotelsCard__content mt-10 pl-15 pr-15 mb-10">
                                   <a href="'.WEBLINK.'property/'.$getwish->destinationslug.'/'.$getwish->slug.'" class="hotelsCard -type-1 ">
                                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                        <span>'.$getwish->title.' </span>
                                      </h4>
                                      </a>
                                      <p class="text-light-1 lh-14 text-14 mt-5"><i class="icon-location-2 text-14 mr-5"></i>'.$getwish->cityname.' ,'.$getwish->statename.', India</p>
                                      <p class="text-14 mt-5">'.$getwish->minguest.' - '.$getwish->maxguest.' Guest |  '.$getwish->roomtitle.' | '.$getwish->poolname.'</p>

                                    

                                  <div class="text-20 lh-12 fw-600 mt-5">₹ '.number_format(propertyPerNightPrice($sql, $getwish->property_id)).'<span class="text-14 fw-500">/ night</span>
                                  </div>
                                  <div class="text-12 text-light-1 mb-10">(excl. taxes & charges)</div>
                                      <div class="d-flex items-center mt-10">
                                        <!--<div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                                          <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>-->
                                            <!--<div class="text-14 text-light-1 ml-10">3,014 reviews</div>-->
                                      </div>
                                    </div>
                                  </div>
                                
                              </div>';                     
                         $x++;
                          }
                        }else{

                          echo '<tr><td colspan="9">No Property Added in Wishlist .</td></tr>';
                        }
                          ?>
                        </div>
                     </div>
                  </div>                 
               </div>
            </div>
         </section>
         
         <script type="text/javascript">
   $(document).ready(function () {
      $('.wishlist').on('click', function () {
         var prop_id = $(this).attr('data-propid');
         var user_id = $(this).attr('data-userid');
         var checkdata = $(this).hasClass('active');

         if (checkdata == true) {
            $(this).removeClass('active');
            var dataString = 'removeWishlist=' + prop_id+"&userid="+user_id;
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               success: function (data) {
                window.location.href="wishlist.php";
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
                window.location.href="wishlist.php";
               }
            });
         }
      });




   });
</script>
         
         <?php include 'footer.php';?>
