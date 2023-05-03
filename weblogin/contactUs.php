<?php
include('config.php');
include('header.php');
include('module/contactUs.php');
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
    Office Address
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Office Address</a>
</div>



<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->

            <div class="card mb-4">
                <div class="card-header"> Office Address</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6 mb-4  forminput">
                                <label for="head_office">Head Office <span class="text-danger">*</span></label> <br>
                                <textarea name="head_office" id="head_office" placeholder="Head Office"
                                    class="form-control"><?php echo $desc1; ?></textarea>
                                <div id="head_office_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="branch_office">Branch Office <span class="text-danger">*</span></label> <br>
                                <textarea name="branch_office" id="branch_office" placeholder="Branch Office"
                                    class="form-control"><?php echo $desc2; ?></textarea>
                                <div id="branch_office_err" class="errordiv text-danger"></div>
                            </div>


                            <div class="col-6 mb-4  forminput">
                                <label for="seo_title">Mobile <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control nospace onlynumber" id="phone" placeholder="Enter Mobile No."
                                    name="phone" value="<?php echo $phone; ?>">
                                <div id="phone_err" class="errordiv text-danger"></div>
                            </div>


                            <div class="col-6 mb-4  forminput">
                                <label for="email">Support Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control nospace" id="email" placeholder="Enter Email"
                                    name="email" value="<?php echo $email; ?>">
                                <div id="email_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-12 text-right">
                                <input type="hidden" value="<?php echo $eid; ?>" name="eid">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a href="contactUs.php" name="cancel" class="btn btn-danger">Cancel</a>

                            </div>
                            <?php echo $alertMessage;?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- /.container-fluid -->

<?php include('footer.php'); ?>

<script type="text/javascript" src="<?php echo MAINLINK;?>js/validate/city.js"></script>
<script type="text/javascript" src="<?php echo MAINLINK;?>js/contact2.js"></script>
<script src="<?php echo MAINLINK;?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo MAINLINK;?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('head_office');
    CKEDITOR.replace('branch_office');

    var config = {
        '.chosen-select': { search_contains: false, enable_split_word_search: false },
        '.chosen-select-deselect': { allow_single_deselect: true },
        '.chosen-select-no-single': { disable_search_threshold: 10 },
        '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
        '.chosen-select-rtl': { rtl: true },
        '.chosen-select-width': { width: '95%' }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

</script>







</body>



</html>