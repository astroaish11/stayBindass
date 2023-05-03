<?php 
include('config.php');
include('header.php');
include('module/changepass.php');

if(!isset($_SESSION[SESSION])) {
   echo '<script type="text/javascript">window.location.href="index.php"</script>';
 }		

?>


         <form action="" method="POST" enctype="multipart/form-data">
         <section class="layout-pt-md">
            <div class="container">
               <div class="row y-gap-30">
                  <div class="col-lg-3">
                      <?php include 'dashboard-side.php';?>
                  </div>
          
            <div class="col-lg-9">
               <div class="px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">
                  <div class="col-auto">
                  <h1 class="text-30 lh-14 fw-600">Change Password?</h1>
                  </div>
                  <div class="row y-gap-20 pt-20">
                     <div class="col-12 col-lg-12">
                        <div class="form-input ">
                           <p>Current Password</p>
                           <input type="password" value="<?php echo $opass; ?>" class="form-control nospace" placeholder="Current Password" name="opass" id="opass">
                        </div>
                     </div>
                     <div class="col-12 col-lg-6">
                        <div class="form-input ">
                           <p>New Password</p>
                           <input required id="password-field" type="password" class="form-control nospace" name="npass" value="<?php echo $npass; ?>"  id="npass">
                              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                     </div>
                     <div class="col-12 col-lg-6">
                        <div class="form-input ">
                           <p>Confirm New Password </p>
                           <input required id="password-field1" type="password" class="form-control nospace" name="cpass" value="<?php echo $cpass; ?>"  id="cpass">
                              <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                     </div>
                     <div class="col-auto">
                        <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                        <button class="button px-24 h-50 -dark-1 bg-blue-1 text-white" type="submit" name="submit" id="submit">Submit
                        <div class="icon-arrow-top-right ml-15"></div>
                        </button>
                     </div>
                    
                  </div>    
                  <?php echo $errorMsg;?>
                  
               </div>
               
            </div>
         </div>
      </div>
    </section>
    </form> 
         
         
         <?php include 'footer.php';?>
    
   
      <script>
       $(document).ready(function() {
        $('.fadediv').delay(3000).fadeOut();
           });
    </script>
       <script type="text/javascript" src="js/profile.js?v=<?php echo time(); ?>"></script>

