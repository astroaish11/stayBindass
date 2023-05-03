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
  Basic 
</h1>

<div class="breadcrumb">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
  </svg>
  <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Basic</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
<form>
  <div class="row">
    <div class="col-lg-12">

      <!-- Default Card Example -->
      <div class="card mb-4">
      
      <div class="card-header">
          <h6 class="font-weight-bold"> Rooms and Beds </h6>
        </div>

        <div class="card-body">
          
            <div class="row">
            <div class="col-4 mb-4  forminput">
                <label for="bedroom" >Bedroom<span class="text-danger">*</span> </label><br>
                <select name="state" id="bedroom" placeholder="Enter City" class="form-control" >
                  <div id="bedroom_err" class="errordiv text-danger"></div>
                </select>
               </div>
              <div class="col-4 mb-4  forminput">
                <label for="bed" >Beds<span class="text-danger">*</span> </label><br>
                <select name="state" id="bed" placeholder="Enter City" class="form-control" >
                  <div id="bed_err" class="errordiv text-danger"></div>
                </select>
               </div>
              <div class="col-4 mb-4  forminput">
                <label for="Bathroom">Bathroom<span class="text-danger">*</span> </label><br>
                <select name="state" id="Bathroom" placeholder="Enter City" class="form-control" >
                  <div id="Bathroom_err" class="errordiv text-danger"></div>
                </select>
               </div>
              <div class="col-4 mb-4  forminput">
                <label for="bedtype" >Bed Type<span class="text-danger">*</span> </label><br>
                <select name="state" id="bedtype" placeholder="Enter City" class="form-control" >
                  <div id="bedtype_err" class="errordiv text-danger"></div>
                </select>
               </div>

                <div class="col-4 mb-4  forminput">
                <label for="pool" >pool<span class="text-danger">*</span> </label><br>
                <select name="state" id="pool" placeholder="Enter City" class="form-control" >
                  <div id="pool_err" class="errordiv text-danger"></div>
                </select>
              </div>
              <hr>


             
            
              
            </div>
          
        </div>
      </div>
    </div>

    
  </div>
  <div class="row">
    <div class="col-lg-12">

      <!-- Default Card Example -->
      <div class="card mb-4">
      
      <div class="card-header">
          <h6 class="font-weight-bold"> Listings </h6>
        </div>



        <div class="card-body">
          <form>
            <div class="row">
            <div class="col-4 mb-4  forminput">
                <label for="propertytype" >Property Type<span class="text-danger">*</span> </label><br>
                <select name="state" id="propertytype" placeholder="Enter City" class="form-control" >
                  <div id="propertytype_err" class="errordiv text-danger"></div>
                </select>
               </div>
              <div class="col-4 mb-4  forminput">
                <label for="roomtype" >Room Type<span class="text-danger">*</span> </label><br>
                <select name="state" id="roomtype" placeholder="Enter City" class="form-control" >
                  <div id="roomtype_err" class="errordiv text-danger"></div>
                </select>
               </div>
              <div class="col-4 mb-4  forminput">
                <label for="Accommodates">Accommodates<span class="text-danger">*</span> </label><br>
                <select name="state" id="Accommodates" placeholder="Enter City" class="form-control" >
                  <div id="Accommodates_err" class="errordiv text-danger"></div>
                </select>
               </div>
              <div class="col-4 mb-4  forminput">
                <label for="Reccomended" >Reccomended<span class="text-danger">*</span> </label><br>
                <select name="state" id="Reccomended" placeholder="Enter City" class="form-control" >
                  <div id="Reccomended_err" class="errordiv text-danger"></div>
                </select>
</div>


             
            
              <div class="col-12 text-left">
            <a href="edit_listing_description.php" name="cancel" class="btn btn-danger">Next</a>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>

    
  </div>
</form>
</div>
<!-- /.container-fluid -->

<?php
include('footer.php');
?>

</body>

</html>