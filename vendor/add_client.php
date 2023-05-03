<?php
include('config.php');
include('header.php');
include('module/insurance-pro.php');
?>

<!-- Page Heading -->
<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    Add Client
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Client</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Client
                    <a class="btn btn-primary btn-sm float-right" href="../weblogin/client_mast.php" role="button">Client List</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-4 mb-4 forminput">
                                <label for="title">Company Name <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" id="c_name" placeholder="Enter Company Name" name="c_name">
                                <div id="title_err" class=" errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminout ">
                                <label for="email">Company Email Id:<span class="text-danger "> *</span></label>
                                <input type="email" class="form-control " id="email" name="email" placeholder="Enter Email">
                                <div id="email_err" class=" errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminout">
                                <label for="lname">Company Contact No.:<span class="text-danger "> *</span></label>
                                <input type="text" class="form-control " id="contact" name="contact" placeholder="Enter Contact No.">
                                <div id="contact_err" class=" errordiv text-danger"></div>
                            </div>



                        </div>


                        <div class="row">
                            <div class=" col-8 mb-4  forminput">
                                <!-- <label for="title">Company Address <span class="text-danger"></span></label>
                                <input type="text" class="form-control" id="C_add" placeholder="Enter Company Address" name="C_add">
                                <div id="title_err" class=" errordiv text-danger"></div> -->
                                <label for="target">Company Address <span class="text-danger ">*</span> : </label>
                                <textarea class="form-control" id="C_add" placeholder="Enter Address" rows="5" name="address"></textarea>
                                <div id="add_err" class="errordiv text-danger"></div>

                            </div>
                            <div class="col-4 mb-4 forminout">

                                <label for="title">Credit Limit </label>
                                <input type="text" class="form-control " id="credit" placeholder="Enter Credit Limit">
                                <div id="credit_error" class="errordiv text-danger"></div><br>

                                <label for="title">Client Rate Chart </label>
                                <input type="text" class="form-control " id="chart" placeholder="">
                                <div id="chart_error" class="errordiv text-danger"></div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-4 forminout">

                                <label for="title">City Name</label>
                                <input type="text" class="form-control " id="city" placeholder="Enter City Name">
                                <div id="city_error" class="errordiv text-danger"></div>
                            </div>
                            <div class=" col-4 mb-4  forminput">
                                <label for="lang">Select State <span class="text-danger">*</span></label><br>
                                <select name="state" id="state" class="form-control">
                                    <div id="state_err" class=" errordiv text-danger"></div>
                                </select>

                            </div>
                            <div class="col-4 mb-4 forminout">

                                <label for="title">Pin Code</label>
                                <input type="text" class="form-control " id="pin" placeholder="Enter Pin Code">
                                <div id="pin_error" class="errordiv text-danger"></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 mb-4 forminout">
                                <fieldset>

                                    <legend style="font-size:15px">Person Contact Info:</legend>
                                    <div class="row">
                                        <!-- <div class="col-4 mb-4 forminout">
                                            <label for="fname">Company name:</label>
                                            <input type="text" class="form-control  " id="cname" name="cname" placeholder="Enter Name ">
                                            <div id="title_err" class=" errordiv text-danger"></div>
                                        </div> -->
                                        <div class="col-4 mb-4 forminput">
                                            <label for="title"> Person Name <span class="text-danger "> *</span></label>
                                            <input type="text" class="form-control " id="c_person" placeholder="Enter Person Name" name="c_person">
                                            <div id="cpersn_err" class=" errordiv text-danger"></div>

                                        </div>

                                        <div class="col-4 mb-4 forminout ">
                                            <label for="email">Person Email Id:</label>
                                            <input type="email" class="form-control " id="email" name="email" placeholder="Enter Email">
                                            <div id="email_err" class=" errordiv text-danger"></div>
                                        </div>
                                        <div class="col-4 mb-4 forminout">
                                            <label for="lname">Contact No.:</label>
                                            <input type="text" class="form-control " id="contact" name="contact" placeholder="Enter Contact No.">
                                            <div id="contact_err" class=" errordiv text-danger"></div>
                                        </div>




                                    </div>

                                </fieldset>

                            </div>




                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4 forminout">
                                <fieldset>

                                    <legend style="font-size:15px">KYC</legend>
                                    <div class="row">
                                        <div class="col-4 mb-4 forminout">
                                            <label for="fileupload">PAN Card No.</label>
                                            <input type="text" class="form-control " id="city" placeholder="Enter Pan Card No.">
                                            <div id="city_error" class="errordiv text-danger"></div>
                                            <div><br>
                                                <label for="fileupload">PAN Card Upload</label>
                                                <input type="file" id="pan" class="form-control" name="upload">
                                                <div id="pan_err" class="errordiv text-danger"></div>
                                            </div>
                                        </div>
                                        <div class="col-4 mb-4 forminout">
                                            <label for="fileupload">GST No.</label>
                                            <input type="text" class="form-control " id="city" placeholder="Enter GST No.">
                                            <div id="city_error" class="errordiv text-danger"></div>
                                            <div><br>
                                                <label for="fileupload">GST Certificate </label>
                                                <input type="file" id="gst" class="form-control" name="gst">
                                            </div>
                                        </div>
                                        <div class="col-4 mb-4 forminout">
                                            <label for="fileupload">Adhar No.</label>
                                            <input type="text" class="form-control " id="adhar_no" placeholder="Enter Adhar No.">
                                            <!-- <div id="adhar_no_error" class="errordiv text-danger"></div> -->
                                            <div><br>
                                                <label for="fileupload">Adhar Card</label>
                                                <input type="file" id="adhar" class="form-control" name="adhar">
                                            </div>
                                        </div>



                                    </div>

                                </fieldset>

                            </div>
                        </div>
                        <!-- <div class="row">

                            <div class="col-4 mb-4 forminout">
                                <label for="title">Client Rate Chart: </label>
                                <input type="text" class="form-control " id="rate" placeholder="Enter Rate " name="rate">
                                <div id="rate_err" class=" errordiv text-danger"></div><br><br>
                            </div>


                        </div> -->


                        <div class="row">

                            <div class="col-12 text-right">
                                <input type="hidden" name="image">
                                <button type="submit" name="submit" class="btn btn-primary" id="submit">submit</button>
                                <a href="add_client.php" name="cancel" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>

                </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?php
include('footer.php');
?>
<script type="text/javascript" src="js/validate/add_lab.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js/validate/add_client.js"></script>
<script type="text/javascript">
    function valid() {
        var pin_code = document.getElementById("pin");
        var user_mobile = document.getElementById("contact");
        var user_id = document.getElementById("email");
        var pat1 = /^\d{6}$/;
        var pattern = /^\d{10}$/;
        var filter = /^([a-z A-Z 0-9 _\.\-])+\@(([a-z A-Z 0-9\-])+\.)+([a-z A-z 0-9]{3,3})+$/;
        if (!filter.test(user_id.value)) {
            alert("Email is in www.gmail.com format");
            user_id.focus();
            return false;
        }
        if (!pattern.test(user_mobile.value)) {
            alert("Phone nubmer is in 0123456789 format ");
            user_mobile.focus();
            return false;
        }
        if (!pat1.test(pin_code.value)) {
            alert("Pin code should be 6 digits ");
            pin_code.focus();
            return false;
        }
    }
</script>


</body>

</html>