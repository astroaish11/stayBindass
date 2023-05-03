<?php
include('config.php');
include('header.php');
?>

<!-- Page Heading -->
<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    payment Method
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Payment Method </a>
    <div class="text-right"></div>

</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<form>
  <div class="row">
    <div class="col-lg-12">

      <!-- Default Card Example -->
      <div class="card mb-4">
      
   

        <div class="card-body">
        <div class="col-6 mb-4">
                <label for="title">PayPal Username<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="tel" placeholder="">
                <div id="tel_error" class="errordiv text-danger"></div>
              </div>

              <div class="col-6 mb-4">
                <label for="Symbol">Paypal Password<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="Symbol" placeholder="">
                <div id="Symbol_error" class="errordiv text-danger"></div>
              </div>
            

            <div class="col-6 mb-4">
                <label for="Symbol">PayPal Signature<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="Symbol" placeholder="">
                <div id="Symbol_error" class="errordiv text-danger"></div>
              </div>
       
            <div class="col-6 mb-4  forminput">
                <label for="Type" >PayPal Mode<span class="text-danger">*</span> </label><br>
                <select name="state" id="Type" placeholder="Enter City" class="form-control" >
                  <div id="Type_err" class="errordiv text-danger"></div>
                </select>
            </div>

            <div class="col-6 mb-4  forminput">
                <label for="Status" >Paypal Status<span class="text-danger">*</span> </label><br>
                <select name="state" id="Status" placeholder="Enter City" class="form-control" >
                  <div id="Status_err" class="errordiv text-danger"></div>
                </select>
            </div>

            <div class="col-12 text-left">
               <a href="edit_listing_calender.php" name="cancel" class="btn btn-danger">Next</a>
            </div>
           
             
            
              
           
          
        </div>
      </div>
    </div>

    
  </div>
  
    
  
</form>
</div>
  


  <div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div class="card mb-4">
    <div class="card-body">
        <div class="col-6 mb-4">
                <label for="title">Stripe Secret Key<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="tel" placeholder="">
                <div id="tel_error" class="errordiv text-danger"></div>
              </div>

              <div class="col-6 mb-4">
                <label for="Symbol">Strip Publishable Key<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="Symbol" placeholder="">
                <div id="Symbol_error" class="errordiv text-danger"></div>
              </div>
            
       
            <div class="col-6 mb-4  forminput">
                <label for="Type" >Stripe Status<span class="text-danger">*</span> </label><br>
                <select name="state" id="Type" placeholder="Enter City" class="form-control" >
                  <div id="Type_err" class="errordiv text-danger"></div>
                </select>
            </div>

         
            <div class="col-12 text-left">
               <a href="edit_listing_calender.php" name="cancel" class="btn btn-danger">Next</a>
            </div>
           
             
            
              
           
          
        </div>
  </div>
</div>

  <div class="tab-pane" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  <div class="card mb-4">
    <div class="card-body">
        <div class="col-6 mb-4">
                <label for="title">Razorpay Key Key<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="tel" placeholder="">
                <div id="tel_error" class="errordiv text-danger"></div>
              </div>

              <div class="col-6 mb-4">
                <label for="Symbol">Razorpay Secret<span class="text-danger "> *</span></label>
                <input type="text" class="form-control form-control-user" id="Symbol" placeholder="">
                <div id="Symbol_error" class="errordiv text-danger"></div>
              </div>
            
       
            <div class="col-6 mb-4  forminput">
                <label for="Type" >Razorpay Status<span class="text-danger">*</span> </label><br>
                <select name="state" id="Type" placeholder="Enter City" class="form-control" >
                  <div id="Type_err" class="errordiv text-danger"></div>
                </select>
            </div>

         
            <div class="col-12 text-left">
               <a href="edit_listing_calender.php" name="cancel" class="btn btn-danger">Next</a>
            </div>
           
             
            
              
           
          
        </div>
  </div>
</div>

  </div>
<!-- /.container-fluid -->

<?php
include('footer.php');
?>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  $('document').ready(function(){
    $('#nav-home-tab').click(function(){
      $('#nav-home').show();
      $('#nav-profile').hide();
      $('#nav-contact').hide();
    })
  })
  $('document').ready(function(){
    $('#nav-profile-tab').click(function(){
      $('#nav-home').hide();
      $('#nav-profile').show();
      $('#nav-contact').hide();
    })
  })
  $('document').ready(function(){
    $('#nav-contact-tab').click(function(){
      $('#nav-home').hide();
      $('#nav-profile').hide();
      $('#nav-contact').show();
    })
  })
  </script>
</body>

</html>