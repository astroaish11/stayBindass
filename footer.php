
<section class="pt-30 pb-30 bg-blue-1">
   <div class="container">
      <div class="row y-gap-30 justify-between items-center">
         <div class="col-auto">
            <div class="d-flex y-gap-20 flex-wrap items-center">
               <!-- <div class="text-60 sm:text-40 text-white">
                  <img src="img/icons/call centre.png">
                  </div> -->
               <div class="">
                  <h4 class="text-26 text-white fw-600">Instant Call Back</h4>
                  <!-- <div class="text-white">Please share your number so our team can connect with you</div> -->
               </div>
            </div>
         </div>
         <div class="col-auto">
            <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
               <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                  <div class="row">
                  <div id="alertMessage"></div>
                     <div class="col-auto">
                        <input class="bg-white h-60 nospace onlynumber" type="tel" name="mobile" id="mobile" placeholder="Your Mobile No" pattern="[0-9]{10}" required>
                        <div id="mobile_error" class="errordiv text-light"></div>
                     </div>
                     
                     <div class="col-auto">
                        <button type="submit" name="instant_submit" id="instant_submit"
                           class="button -md h-60 width-100 bg-yellow-1 text-dark-1">Send</button>
                           <!-- <div id="alertMessage" ></div> -->
                     </div>
                     
                  </div>
               <!-- </form> -->
      
            </div>
         </div>
      </div>
   </div>
</section>

<?php 
include('module/contactus.php');
//include('module/home.php');
?>
<footer class="footer -type-1">
   <div class="container">
      <div class="pt-30 pb-30">
         <div class="row y-gap-40 justify-between xl:justify-start">
            <div class="col-xl-2 col-lg-4 col-sm-6">
               <h5 class="text-20 fw-500 mb-30">Follow Us</h5>
               <!-- <p class="text-16">Staybindass is looking forward to hosting you and having a prime experience staying with us!</p> -->
               <div class="col-auto pt-20">
                  <div class="d-flex x-gap-20 items-center">
                     <a href="<?php echo $social_data[0]->link;?>" target="blank"><i
                           class="icon-facebook text-18"></i></a>
                     <a href="<?php echo $social_data[2]->link;?>" target="blank"><i 
                            class="icon-twitter text-18"></i></a>
                     <a href="<?php echo $social_data[6]->link;?>" target="blank"><i
                           class="icon-instagram text-18"></i></a>
                     <a href="<?php echo $social_data[3]->link;?>" target="blank"><i
                           class="icon-linkedin text-18"></i></a><br>
                     <a href="<?php echo $social_data[5]->link;?>" target="blank"><i
                           class="fa fa-youtube-play text-18"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-sm-6 col-6">
               <h5 class="text-20 fw-500 mb-20">Quick Links</h5>
               <div class="d-flex flex-column">
                  <li><a href="<?php echo WEBLINK; ?>home">Home</a></li>
                  <li><a href="<?php echo WEBLINK; ?>list_your_property">List Your Property</a></li>
                  <li><a href="<?php echo WEBLINK; ?>contact">Contact us</a></li>
                  <!-- <li><a href="">Blog</a></li> -->
                  <li><a href="<?php echo WEBLINK; ?>ourstory">Our Story</a></li>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
               <h5 class="text-20 fw-500 mb-20">Luxury Villa</h5>
               <div class="d-flex flex-column">
                 

                  <?php foreach ($destination_data as $destination) 
                  {
                     $x = 1; 
                    // echo '<li><a href="'.WEBLINK.'listing.php?destination_id='.$destination->id.'">Luxury villas in '.$destination->title.'</a></li>';
                    echo '<li><a href="'.WEBLINK.'property-listing??cityname=&cityid=0&t-start=null&t-end=null&adults=2&childs=1&rooms=1&property='.$destination->slug.'&destination_id='.$destination->id.'">Luxury villas in '.$destination->title.'</a></li>';
                     $x++;
                  } ?>

               </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6">
            <?php echo $contact_data[0]->head_ofc_addr;?>
            <?php echo $contact_data[0]->branch_ofc_addr;?>
     
            </div>
            <div class="col-xl-2 col-lg-4 col-sm-6">
               <h5 class="text-20 fw-500 mb-20">Support</h5>
               <div class="mt-20">
                  <div class="text-14 mt-20"> Call Us On</div>
                  <a href="tel:8657011171" class="text-18 fw-500 text-white mt-5"><?php echo $contact_data[0]->mobile;?></a>
               </div>
               <div class="mt-20">
                  <div class="text-14 mt-20">Need live support?</div>
                  <a href="mailto:support@staybindass.com"
                     class="text-15 fw-500 text-white mt-5"><?php echo $contact_data[0]->support_email;?></a>
               </div>
            </div>
         </div>
      </div>
      <div class="py-10 border-top-light">
         <div class="row justify-between items-center y-gap-10">
            <div class="col-auto">
               <div class="row x-gap-30 y-gap-10">
                  <div class="col-auto">
                     <div class="d-flex items-center">
                        © 2023 Bmunk Hospitality Pvt. Ltd. All rights reserved.
                     </div>
                  </div>
                  <div class="col-auto">
                     <div class="d-flex x-gap-15">
                        <a href="<?php echo WEBLINK; ?>cancellation-and-refund-policies">Refund Policy</a>
                        <a href="<?php echo WEBLINK; ?>frequently-asked-questions">FAQs</a>
                        <a href="<?php echo WEBLINK; ?>terms_and_conditions">Terms and Conditions</a>
                        <a href="<?php echo WEBLINK; ?>privacy-policies">Privacy Policy</a>
                     </div>
                  </div>
               </div>
            </div>
         
         </div>
      </div>
   </div>
</footer>


<a href="https://api.whatsapp.com/send?phone=+918657011172&amp;text=Hello StayBindass" class="float" target="_blank"
   datasqstyle="{&quot;top&quot;:null}" datasquuid="40efdfef-ebad-48cd-abbf-7d889b18ef36" datasqtop="547"
   style="top: 547px;">
   <i class="fa fa-whatsapp my-float"></i>
</a>

<div class="hide-on-desktop-menu">
   <div class="sticky-footer ">
      <div class="one-fourth">
         <a aria-label="home" aria-current="page" class="btm-active link-active" href="<?php echo WEBLINK; ?>"><svg width="18" height="19"
               viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M16.6585 7.70153L9.6585 1.57653C9.28148 1.24663 8.71852 1.24663 8.3415 1.57652L1.3415 7.70153C1.12448 7.89141 1 8.16574 1 8.4541V17.0003C1 17.5526 1.44772 18.0003 2 18.0003H6C6.55228 18.0003 7 17.5526 7 17.0003V13.0003C7 12.448 7.44772 12.0003 8 12.0003H10C10.5523 12.0003 11 12.448 11 13.0003V17.0003C11 17.5526 11.4477 18.0003 12 18.0003H16C16.5523 18.0003 17 17.5526 17 17.0003V8.4541C17 8.16574 16.8755 7.89141 16.6585 7.70153Z"
                  stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p>Home</p>
         </a>

      </div>
      <div class="one-fourth">
         <a aria-label="bookings" class="link-active" href="<?php echo WEBLINK; ?>"><svg width="24" height="24" viewBox="0 0 24 24"
               fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M20 8H4C3.44772 8 3 8.44772 3 9V19C3 19.5523 3.44772 20 4 20H20C20.5523 20 21 19.5523 21 19V9C21 8.44772 20.5523 8 20 8Z"
                  stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               <path d="M8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8" stroke="#999999" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p>My Bookings</p>
         </a>
      </div>

      <div class="one-fourth">
         <a aria-label="wishlist" class="link-active" href="<?php echo WEBLINK; ?>"><svg width="20" height="18" viewBox="0 0 20 18"
               fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M10 17L9.51343 17.8736C9.81593 18.0421 10.1841 18.0421 10.4866 17.8736L10 17ZM10 4.16221L9.07966 4.55332C9.23655 4.9225 9.59886 5.16221 10 5.16221C10.4011 5.16221 10.7635 4.9225 10.9203 4.55332L10 4.16221ZM0 5.97234C0 9.44565 2.56031 12.4617 4.83471 14.4884C6.00373 15.5302 7.16813 16.3728 8.03809 16.9542C8.47404 17.2456 8.83849 17.473 9.09584 17.6286C9.22457 17.7064 9.32667 17.7664 9.39771 17.8076C9.43323 17.8281 9.461 17.844 9.48047 17.8551C9.4902 17.8606 9.49786 17.8649 9.50338 17.868C9.50614 17.8696 9.50836 17.8708 9.51004 17.8717C9.51087 17.8722 9.51158 17.8726 9.51214 17.8729C9.51243 17.8731 9.51275 17.8733 9.51289 17.8733C9.51317 17.8735 9.51343 17.8736 10 17C10.4866 16.1264 10.4868 16.1265 10.4869 16.1265C10.4869 16.1265 10.487 16.1266 10.487 16.1266C10.4871 16.1266 10.4869 16.1266 10.4867 16.1264C10.4862 16.1261 10.4851 16.1256 10.4836 16.1247C10.4804 16.1229 10.4752 16.12 10.4679 16.1158C10.4533 16.1075 10.4305 16.0945 10.4001 16.0769C10.3393 16.0417 10.2481 15.9881 10.1307 15.9172C9.89588 15.7751 9.55721 15.5639 9.14941 15.2914C8.33187 14.745 7.24627 13.9585 6.1653 12.9953C3.93969 11.012 2 8.51414 2 5.97234H0ZM10.9203 3.77109C9.73912 0.991542 7.04681 -0.295418 4.60702 0.0570384C3.38263 0.233916 2.21629 0.825536 1.35895 1.84728C0.498879 2.87228 0 4.26915 0 5.97234H2C2 4.66797 2.37612 3.74652 2.89105 3.13285C3.40871 2.51592 4.11737 2.14854 4.89298 2.03649C6.45319 1.8111 8.26088 2.62663 9.07966 4.55332L10.9203 3.77109ZM18 5.97234C18 8.51414 16.0603 11.012 13.8347 12.9953C12.7537 13.9585 11.6681 14.745 10.8506 15.2914C10.4428 15.5639 10.1041 15.7751 9.86928 15.9172C9.75191 15.9881 9.66066 16.0417 9.59986 16.0769C9.56946 16.0945 9.5467 16.1075 9.53211 16.1158C9.52481 16.12 9.51956 16.1229 9.51643 16.1247C9.51486 16.1256 9.51382 16.1261 9.51331 16.1264C9.51306 16.1266 9.51295 16.1266 9.51296 16.1266C9.51297 16.1266 9.51309 16.1265 9.51309 16.1265C9.51324 16.1265 9.51343 16.1264 10 17C10.4866 17.8736 10.4868 17.8735 10.4871 17.8733C10.4873 17.8733 10.4876 17.8731 10.4879 17.8729C10.4884 17.8726 10.4891 17.8722 10.49 17.8717C10.4916 17.8708 10.4939 17.8696 10.4966 17.868C10.5021 17.8649 10.5098 17.8606 10.5195 17.8551C10.539 17.844 10.5668 17.8281 10.6023 17.8076C10.6733 17.7664 10.7754 17.7064 10.9042 17.6286C11.1615 17.473 11.526 17.2456 11.9619 16.9542C12.8319 16.3728 13.9963 15.5302 15.1653 14.4884C17.4397 12.4617 20 9.44565 20 5.97234H18ZM10.9203 4.55332C11.7391 2.62663 13.5468 1.8111 15.107 2.03649C15.8826 2.14854 16.5913 2.51592 17.109 3.13285C17.6239 3.74652 18 4.66797 18 5.97234H20C20 4.26915 19.5011 2.87228 18.641 1.84728C17.7837 0.825536 16.6174 0.233916 15.393 0.0570384C12.9532 -0.295418 10.2609 0.991542 9.07966 3.77109L10.9203 4.55332Z"
                  fill="#999999"></path>
            </svg>
            <p>Wishlist</p>
         </a>
      </div>

      <div class="one-fourth">
         <a aria-label="profile" class="link-active" data-x-click="lang"><svg width="24" height="24" viewBox="0 0 24 24"
               fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21" stroke="#999999" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"></path>
               <path
                  d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                  stroke="#999999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p>Profile</p>
         </a>
      </div>



   </div>
</div>
</main>
<!-- JavaScript -->
<?php include('script.php'); ?>
<!-- <script type="text/javascript" charset="UTF-8"
   src="//cdn.cookie-script.com/s/236d4cdebfe0b9c501e6e635459f5ca0.js"></script>  -->
<script type="text/javascript" src="<?php echo WEBLINK; ?>js/instant.js?v=<?php echo time(); ?>"></script>
<!-- Popup -->
</body>

</html>