<?php 
include('config.php');
include ('header.php');

$loginuserid = $_SESSION[SESSION]['loginuserid'];


if(!isset($_SESSION[SESSION])) {
  echo '<script type="text/javascript">window.location.href="index.php"</script>';
}		

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
              <h1 class="text-30 lh-14 fw-600">My Bookings</h1>
             </div>                    
            <div class="pt-30">
             <div class="tabs -underline-2 js-tabs">
              <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Upcoming</button>
              </div>
              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-2">Past</button>
              </div>
   
            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                    <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Villa Name</th>
                        <th>Booking Date</th>
                        <th>Execution Time</th>
                        <th>Location</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $query= mysqli_query($sql,"SELECT * from `property_booking` where deleted!=1 and userID = $loginuserid");
                    $count = mysqli_num_rows($query);
                      if($count > 0)
                      {
                          $x = 1;
                          while($getdata = mysqli_fetch_object($query)){

                              $prop_name = $getdata->prop_name;
                              $address = $getdata->address;
                              $price = $getdata->price;
                              $checkin = $getdata->checkin;
                              $checkout = $getdata->checkout;
          
                     echo '<tr>
                        <td>Villa</td>
                        <td>'.$prop_name.'</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : '.$checkin.'<br>Check out : '.$checkout.'</td>
                        <td> '.$address.' <br><a href=""><u> Directions Maps</u></a> </td>
                        <td class="fw-500">₹  '.$price.' </td>
                        <td>₹ '.$price.' </td>
                        <td>₹ 00 </td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td>
                      </tr>';

                      $x++;
                    }
                        
                    }
                    else 
                    {
                    echo '<tr><td colspan="9">No Record Found</td></tr>';
                    }  
                    ?>
                        

                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tabs__pane -tab-item-2 ">
                <div class="overflow-scroll scroll-bar-1">
                  <table class="table-3 -border-bottom col-12">
                  <thead class="bg-light-2">
                      <tr>
                        <th>Type</th>
                        <th>Villa Name</th>
                        <th>Booking Date</th>
                        <th>Execution Time</th>
                        <th>Location</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Remain</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

                
                      <tr>
                      <tr><td colspan="9">No Record Found</td></tr>
                        <!-- <td>Villa</td>
                        <td>Villa SB 001</td>
                        <td>04/04/2022</td>
                        <td class="lh-16">Check in : 05/14/2022<br>Check out : 05/29/2022</td>
                        <td> WQ6P+XW6, Ganpati Nagar, Jaipur, Rajasthan 303902, India <br><a href=""><u> Directions Maps</u></a> </td>
                        <td class="fw-500">₹ 65,150 </td>
                        <td>₹ 00</td>
                        <td>₹ 65,150 </td>
                        <td><span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</span></td> -->
                      </tr>

                    
                  </table>
                </div>
              </div>


            </div>
          </div>

        </div>

                     </div>
                  </div>
                  
               </div>
            </div>
         </section>
        
         <?php include 'footer.php';?>
