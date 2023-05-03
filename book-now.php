<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include 'main-css.php';?>
      <title>StayBindass</title>
   </head>
   <body>
      <div class="preloader js-preloader">
         <div class="preloader__wrap">
            <div class="preloader__icon">
               <img src="img/general/preloader.png">
            </div>
         </div>
         <!-- <div class="preloader__title">StayBindass</div> -->
      </div>
      <main>
         <?php include 'header.php';?>
         <section class="layout-pt-md layout-pb-md bg-blue-2">
            <div class="container">
               <div class="row justify-center">
                  <div class="col-xl-8 col-lg-8 col-md-9">
                     <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4 mt-50">
                        <div class="row y-gap-20">
                           <div class="col-12">
                              <h1 class="text-22 fw-500">Book Now</h1>
                           </div>
                           <form action="mail_handler.php" method="POST">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-input pt-10">
                                          <p>Full Name</p>
                                          <input class="form-control" type="text" name="name" value="" placeholder="" required="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Email</p>
                                          <input class="form-control" type="email" name="email" value="" placeholder="" required="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Mobile</p>
                                          <input class="form-control" type="text" name="mobile" value="" placeholder="" required="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Check in Date</p>
                                          <input class="form-control" type="date" name="checkindate" value="" placeholder="" required="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Check Out Date</p>
                                          <input class="form-control" type="date" name="checkoutdate" value="" placeholder=" " required="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Number of Guests</p>
                                          <select class="form-control" type="text" name="numberofpeople" value="" placeholder=" PHONE" required="">
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">5</option>
                                             <option value="6">6</option>
                                             <option value="7">7</option>
                                             <option value="8">8</option>
                                             <option value="9">9</option>
                                             <option value="10-15">10-15</option>
                                             <option value="15-20">15-20</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Location</p>
                                          <select class="form-control" type="text" name="location" value="" placeholder=" PHONE" required="">
                                             <option>Select</option>
                                             <option value="Goa">Goa</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12 pt-20">
                                       <button type="submit" name="submit" class="button py-20 -dark-1 bg-blue-1 text-white" style="width: 100%;">SUBMIT</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
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