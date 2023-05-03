<?php
include('config.php');
include('header.php');
include('module/change_password.php');
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
   Change Password
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Change Password</a>
</div>

<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                    </div>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <!-- <div class="box-header with-border">
                                        <h3 class="box-title">Add Company</h3>
                                    </div> -->
                                    <form action="" method="post" role="form" enctype="multipart/form-data">
                                    <div class="row box-body">
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                        <label> Old Password <span class="red text-danger">*</span></label>
                                        <input type="password" required placeholder="Enter Old Password" class="form-control form-control-user" name="opass" value="" id="title">
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label> New Password <span class="red text-danger">*</span></label>
                                        <input type="password" required placeholder="Enter New Password" class="form-control form-control-user" name="npass" value="<?php echo $npass; ?>" id="title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label> Confirm Password <span class="red text-danger">*</span></label>
                                        <input type="password" required placeholder="Confirm Password" class="form-control form-control-user" name="cpass" value="<?php echo $cpass; ?>" id="title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="margin-left: 17px; color: red; float: left;"><?php echo $errorMsg; ?></p>
                                        <?php if(isset($_GET['u'])) { ?>
                                            <p style="margin-left: 17px; float: left; fadediv">Password Updated Successfully !!!</p>
                                        <?php } ?>
                                        <div class="box-footer" style="text-align:right">
                                            <input type="submit" name="submit" id="contactinfo" class="btn btn-primary" value="Update">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->
<?php include('footer.php'); ?>
</body>
</html>