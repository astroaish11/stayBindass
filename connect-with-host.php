<div class="col-12 mt-20 mb-40">
                <div class="d-flex items-center justify-between bg-info-1 pl-30 pr-20 py-15 rounded-8">
                  <div class="text-info-2 lh-1 fw-500">Connect with Host</div>
                  <div class="text-info-2 text-14 "><a data-x-click="lang1" class="button px-10 fw-400 text-14 -outline-blue-1 h-40 text-blue-1"> &nbsp; Request Call Back</a></div>
                </div>
              </div>


              <div class="langMenu is-hidden js-langMenu" data-x="lang1" data-x-toggle="is-hidden">
    <div class="langMenu__bg" data-x-click="lang1"></div>

    <div class="langMenu__content bg-white rounded-4" id="ab">
       <button class="pointer paddibg-login" data-x-click="lang1">
          <i class="icon-close"></i>
        </button>
      <div class="d-flex items-center justify-between sm:px-15 border-bottom-light">
        
        <div class="py-30 px-30 rounded-4 bg-white">
          <div class="tabs -underline-2 js-tabs">
            <!-- <form action="mail_handler.php" method="POST"> -->
                              <div class="form-group">
                                 <div class="row">

                                  <div class="col-12">
                  <h1 class="text-22 fw-500">Contact Us</h1>
                  <p class="mt-10">When are you planning to visit us and with how many guests?</p>
                </div>
                                 <?php $slug_title = $_GET['slug'];
                                 $get_id = mysqli_query($sql,"SELECT `id` from `addproperty` where `slug`='$slug_title'");
                                 $get_dataid = mysqli_fetch_object($get_id);
                                 $property_id=$get_dataid->id;?>
                                  <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Check in Date</p>
                                          <input type="hidden" id="hiddenslug" value="<?php echo $property_id;?>">
                                          <input class="form-control" type="date" id="checkindate" name="checkindate" placeholder="" required>
                                          <div id="dateerror" class="errordiv text-danger"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Check Out Date</p>
                                          <input class="form-control" type="date" id="checkoutdate" name="checkoutdate" placeholder=" " required>
                                          <div id="dateerror" class="errordiv text-danger"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Number of Guests</p>
                                          <!-- <select class="form-control" type="text" name="numberofpeople" id="guest" placeholder="" required="">
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">5</option>
                                             <option value="6">6</option>
                                             <option value="7">7</option>
                                             <option value="8">8</option>
                                             <option value="9">9</option>
                                             <option value="10">10-15</option>
                                             <option value="15-20">15-20</option>
                                          </select> -->

                                          <select class="form-control" type="text" name="numberofpeople" id="guest" placeholder="" required="">
                                          <?php
                                           $query_guest = mysqli_query($sql,"SELECT `maxguest` from `addproperty` where `id` = '$property_id' and `deleted`!='1'");
                                           $guestlist = mysqli_fetch_object($query_guest);
                                           $maxguest = $guestlist->maxguest;
                                           
                                          for($i=1;$i<=$maxguest;$i++){
                                             echo '<option value="'.$i.'">'.$i.'</option>';
                                           }
                                           
                                          ?>
                                          </select>
                                       </div>
                                    </div>


                                  </div>

                                   <div class="row mt-20">
                                    <p>Where should we contact you?</p>
                                    <div class="col-md-12">
                                       <div class="form-input pt-10">
                                          <p>Full Name</p>
                                          <input class="form-control onlyLetters" id= "fullname" type="text" name="name" placeholder="" required="">
                                          <div id="fullnameerror" class="errordiv text-danger"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Email</p>
                                          <input class="form-control nospace" type="email" id="emailid" name="email" placeholder="" required="">
                                          <div id="emailiderror" class="errordiv text-danger"></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-input pt-10">
                                          <p>Mobile</p>
                                          <input class="form-control nospace numbersOnly" type="text" id="mobile" name="mobile" placeholder="" required maxlength="10">
                                          <div id="mobileerror" class="errordiv text-danger"></div>
                                       </div>
                                    </div>
                                    
                                    
                                    <div class="col-12 pt-20">
                                       <button type="submit" name="submit" id = "submit_host" class="button py-10 -dark-1 bg-blue-1 text-white" style="width: 100%;">SUBMIT</button>
                                       <div id="request_form_error"></div>
                                    </div>
                                 </div>
                              </div>
                           <!-- </form> -->

          
          </div>

        </div>
        
      </div>


    </div>
  </div>