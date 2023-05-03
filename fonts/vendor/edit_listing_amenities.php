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
  Amenities
</h1>

<div class="breadcrumb">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
  </svg>
  <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Amenities</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
<form>
  <div class="row">
    <div class="col-lg-12">

      <!-- Default Card Example -->
      <div class="card mb-4">
      
      <div class="card-header">
          <h6 class="font-weight-bold">Pricing</h6>
        </div>

        <div class="card-body">
            <div class="card-header">
            <h6 class="font-weight-bold">Common Amenities</h6>
            </div>
           <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Cleaning fee
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   Additional guest
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   Security Deposite
  </label>
</div>
        
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   Weekend Pricing 
  </label>
</div>
        
         
          

            <div class="col-12 text-left">
            <a href="edit_listing_photos.php" name="cancel" class="btn btn-danger">Next</a>
              </div>
           
          
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