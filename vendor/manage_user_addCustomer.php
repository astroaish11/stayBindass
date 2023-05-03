<?php
include('config.php');
include('header.php');
include('module/user_add.php');
?>

<!-- Page Heading -->
<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">
        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    Add Customer
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Customer</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-8">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Customer
                    <a href="manage_users.php" name="customer" style="float:right" class="btn btn-primary">Customer Listing</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST" id="myForm" enctype="multipart/form-data" onsubmit = "validate();">
                        <div class="row">
                            <div class="col-6 mb-4  forminput">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name"
                                    value="<?php echo $first_name; ?>" required>
                                <div id="first_name_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name"
                                    value="<?php echo $last_name; ?>" required>
                                <div id="last_name_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email"
                                    value="<?php echo $email; ?>" autocomplete="new-email" required>
                                <div id="email_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="text">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone No" name="phone" value="<?php echo $phone; ?>" required>
                                <div id="phone_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password"
                                    value="<?php echo $password; ?>" autocomplete="new-password" required>
                                <div id="password_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="lang">Status </label><br>
                                
                                <select name="status" id="status" placeholder="Select Status" class="form-control" required>
                                    
                                    <option value="1" <?php if($status == 1) { ?> selected="selected"<?php } ?> >Active</option>
                                    <option value="0" <?php if($status == 0) { ?> selected="selected"<?php } ?> >Inactive</option> 
                                    <div id="status_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 text-right">
                            <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                            <a href="manage_user_addCustomer.php" name="cancel" class="btn btn-danger">Reset</a>
                        </div>
                    </form>
                    <?php echo $alertMessage; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->

<?php
include('footer.php');
?>
<script type="text/javascript" src="js/validate/city.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->

<script type="text/javascript">

  $(document).ready( function() {
        $('.fadediv').delay(3000).fadeOut();
      });

//form validation

// function validate() {
//     // var email = document.myForm.email.value;
//     // var password = document.myForm.password.value;
//     // var phone = document.myForm.phone.value;

//     // var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
//     // var regPhone=/^\d{10}$/;                                        // Javascript reGex for Phone Number validation.


//     //  if (email == "" || !regEmail.test(email)) {
//     //     alert("Please enter a valid e-mail address.");
//     //     email.focus();
//     //     return false;
//     //     }
                  
//     // if (password == "") {
//     //     alert("Please enter your password");
//     //     password.focus();
//     //     return false;
//     //     }
 
//     // if(password.length <6){
//     //     alert("Password should be atleast 6 character long");
//     //     password.focus();
//     //     return false;
//     //     }

//     // if (phone == "" || !regPhone.test(phone)) {
//     //     alert("Please enter valid phone number.");
//     //     phone.focus();
//     //     return false;
//     //     }

//     // return true;
//     alert("hello");
// }

</script>


</body>

</html>