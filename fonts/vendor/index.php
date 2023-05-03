<?php
include('config.php');
include('module/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Stay Bindass</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> 

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color:aliceblue" class=" bg-gradient-primary  ">

    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center mt-5">

    <div class=" col-md-4">

        <div style="background-color:#ffff" class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
                    <div class="col-md-12">
                    <div class="p-4">
                        <div class="text-center">
                         <img src="img/logo.png" width="230px" >
                         <h1 class="h4 text-gray-900 mb-4 mt-3 text-da"> Welcome Vendors!</h1>
                        </div>
                            <form action="" method="post"> 
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user"
                                id="username" name="username" value="<?php echo $username; ?>" aria-describedby="emailHelp"  placeholder="Enter Email Address">
                                <div id="email_error" class="errordiv text-danger"></div>
                            </div>
                             <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                id="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
                                <div id="pass_error" class="errordiv text-danger"></div>
                            </div>
                        <!-- <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember
                                    Me</label>
                            </div>
                        </div>-->
                            <div class="form-group">
                                <a href="forget_password.php">Forget Password</a>
                            </div>
                            <div style="padding:30px 50px; ">
                                 <button  type="submit"  class="btn btn-primary btn-user btn-block" id="loginsubmit" name="loginsubmit" > Login </button>
                            </div>                              
                            <div style="text-align: center; margin: -10px 0 0px; color: red;
                                 "id="errorMsg"><?php echo $errorMsg; ?>
                            </div>
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
 </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="js/validate/login.js"> </script>

</body>
</html>