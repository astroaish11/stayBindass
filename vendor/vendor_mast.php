<?php
include('config.php');
include('header.php');
include('module/vendor-master.php');
?>
<!-- Page Heading -->

<h1 class="h3 topTitle">

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">

        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />

        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />

    </svg>

    Vendor Master

    <a class="btn btn-primary btn-sm float-right" href="vendor_listing.php" role="button">List Vendors</a>

</h1>
<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Vendor</a>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Vendor
                    <!-- <a class="btn btn-primary btn-sm float-right" href="vendor_listing.php" role="button">Vendor Listing
                    </a> -->
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-4 mb-4 forminput">
                                <label for="name"> Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?php echo $name ?>" id="name" placeholder="Enter name" name="name" required>
                                <div id="name_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminput">
                                <label for="contact"> Contact No.<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?php echo $contact ?>" id="contact" placeholder="Enter contact" name="contact" required  pattern="[0-9]{10}" >
                                <div id="contact_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminput">
                                <label for="email"> Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" value="<?php echo $email ?>" id="email" placeholder="Enter email" name="email" required>
                                <div id="email_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-12 mb-4  forminput">
                                <label for="address">Address<span class="text-danger">*</span></label> <br>
                                <textarea name="address" id="address" placeholder="" class="form-control" row="4" value="<?php echo $address ?>" required></textarea>
                                <div id="add_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminput">
                                <label for="city"> City<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?php echo $city ?>" id="city" placeholder="Enter city" name="city" required>
                                <div id="city_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminput">
                                <label for="lang">Select State <span class="text-danger"></span></label><br>
                                <select name="state" id="state" class="form-control">
                                <option value="">Select States</option>
                                <?php states($sql, $state) ?>
                                </select>
                                <div id="state_err" class=" errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminput">
                                <label for="pin"> Pin<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?php echo $pin?>" id="pin" placeholder="Enter pin" name="pin" required>
                                <div id="pin_err" class="errordiv text-danger"></div>
                            </div>

                            <!-- <div class="col-4 mb-4 forminput">
                                <label for="user">User Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="" id="user" placeholder="Enter User" name="user" required>
                                <div id="user_err" class="errordiv text-danger"></div>
                            </div> -->

                            <!-- <div class="col-4 mb-4 forminput">
                                <label for="pass"> Password<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="" id="pin" placeholder="Enter Password" name="pin" required>
                                <div id="pin_err" class="errordiv text-danger"></div>
                            </div> -->


                            <!-- <div class="col-4 mb-4  forminput">
                                <label for="state">BHK<span class="text-danger">*</span> </label><br>
                                <select name="state" id="state" placeholder="Select" class=" as form-control" multiple="multiple">
                                    <option value="0">Select</option>
                                    <option value="1">Goa</option>
                                    <div id="state_err" class="errordiv text-danger"></div>
                                </select>
                            </div> -->

                            <!-- <div class="col-4 mb-4  forminput">
                                <label for="pass" > Bhk<span class="text-danger ">*</span></label>
                                <select class="as form-control" name="states[]" multiple="multiple">
                                    <option value="AL">Alabama</option>
                                    ...
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div> -->

                            <div class="col-12 text-right">
                                <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                                <input type="hidden" value="<?php echo $image; ?>" id="image" name="image">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                <a href="city_mast.php" name="cancel" class="btn btn-danger">Cancel</a>
                            </div>
                            <?php echo $alertMessage; ?>
                        </div>
                    </form>
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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 



<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script type="text/javascript" src="js/pages/masthead.js"></script>
<script type="text/javascript">
    $('.deleteme').click(function() {
        return confirm("Are you sure you want to delete?");
    });

    $(document).ready(function() {
        $('.fadediv').delay(3000).fadeOut();
    });
</script>

<!-- Page level custom scripts -->
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('address');


    var config = {
        '.chosen-select': {
            search_contains: false,
            enable_split_word_search: false
        },
        '.chosen-select-deselect': {
            allow_single_deselect: true
        },
        '.chosen-select-no-single': {
            disable_search_threshold: 10
        },
        '.chosen-select-no-results': {
            no_results_text: 'Oops, nothing found!'
        },
        '.chosen-select-rtl': {
            rtl: true
        },
        '.chosen-select-width': {
            width: '95%'
        }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>
<script>
    $(document).ready(function() {
        $('.as').select2();
    });
</script>
</body>

</html>