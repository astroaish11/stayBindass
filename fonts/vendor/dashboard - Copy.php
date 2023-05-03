<?php
include('config.php');
include('header.php');


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
    Dashboard
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Dashboard</a> <span class="pl-2 pr-2">/</span> <a> Dashboard</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Application
                    <a class="btn btn-primary btn-sm float-right" href="application_list.php" role="button">Application
                        List</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">


                        <div class="row">
                            <div class="card col-6 mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <i class="fa-regular fa-user-plus"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.
                                            </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card col-6 mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.
                                            </p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                    ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4 forminput">
                                <label for="client" style="display:block;">Select Client<span class="text-danger">*
                                    </span> <a style="float:right; font-size:12px;" href="add_client.php">Add New
                                        Client</a></label>
                                <select class="form-control chosen-select" id="client" name="client">
                                    <option value="">Select</option>
                                    

                                </select>
                                <div id="client_err" class=" errordiv text-danger"></div>

                            </div>

                            <div class="col-4 mb-4 forminput">

                                <a class="btn btn-primary btn-sm float-right d-none" style=" margin-top:35px"
                                    href="../weblogin/add_client.php" role="button">Add New Client</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 mb-4 forminput">
                                <label for="title">Client Name <span class="text-danger"> </span></label>
                                <input type="text" class="form-control" value="<?php echo $c_name; ?>" id="c_name"
                                    placeholder="Enter Company Name" name="c_name">
                                <div id="title_err" class=" errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminout ">
                                <label for="email">Client Email Id:<span class="text-danger "> </span></label>
                                <input type="email" class="form-control " id="email" name="email"
                                    value="<?php echo $email; ?>" placeholder="Enter Email">
                                <div id="email_err" class=" errordiv text-danger"></div>
                            </div>

                            <div class="col-4 mb-4 forminout">
                                <label for="lname">Client Contact No.:<span class="text-danger "> </span></label>
                                <input type="text" class="form-control " id="contact" name="contact"
                                    value="<?php echo $contact; ?>" placeholder="Enter Contact No.">
                                <div id="contact_err" class=" errordiv text-danger"></div>
                            </div>



                        </div>


                        <div class="row">
                            <div class=" col-12 mb-4  forminput">

                                <label for="target">Client Address <span class="text-danger "></span> : </label>
                                <textarea class="form-control" id="c_add" placeholder="Enter Address" rows="3"
                                    name="c_add"><?php echo $c_add; ?></textarea>
                                <div id="add_err" class="errordiv text-danger"></div>

                            </div>

                        </div>
                        <hr>
                        <div class="row">

                            <div class=" col-2 mb-4  forminput">

                                <!-- <a class="btn btn-primary btn-sm float-right " href="../weblogin/add_client.php" role="button">Add Client</a> -->
                                <label for="date">Select Date <span class="text-danger "> *</span></label>
                                <input type="date" class="form-control" id="date" value="<?php echo $date; ?>"
                                    placeholder="Enter Date" name="date">
                                <div id="date_err" class=" errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4 forminput">
                                <label for="service">Select Service<span class="text-danger "> *</span></label>
                                <select class="form-control" id="service" name="service">
                                    <option value="">Select</option>
                                    

                                </select>
                                <div id="service_err" class=" errordiv text-danger"></div>

                            </div>
                            <div class=" col-2 mb-4  forminput" style="margin-top:35px;">

                                <a class="btn btn-primary btn-sm " id="addrow" role="button">Add Row</a>
                            </div>

                        </div>
                        <div class="row">
                            <table class="table table-bordered NameNmberTable" id="resourceRequest">
                                <thead>
                                    <tr>
                                        <th style="text-align:center" width="20%;">Service Name</th>
                                        <th style="text-align:center" width="15%;">No. of Sample</th>
                                        <th style="text-align:center" width="10%;">Rate</th>
                                        <!-- <th style="text-align:center" width="120px;">GST</th> -->
                                        <th style="text-align:center" width="15%;">Total Amount</th>
                                        <th style="text-align:center" width="5%;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $getcount = '';
                                    if (isset($_GET['eid'])) {

                                        $getcart = mysqli_query($conn, "SELECT * FROM `awt_cart` where `appid` = '$eid'");

                                        $getcount = mysqli_num_rows($getcart);

                                        $x = 1;
                                        while ($listcart = mysqli_fetch_object($getcart)) {

                                            echo '<tr><td style="text-align:left"><input type="text" value="' . $listcart->servicename . '" class="form-control" name="servicename' . $x . '" readonly=""></td><td style="text-align:left"><input type="text" value="' . $listcart->sample . '" class="form-control samples" name="sample' . $x . '"></td><td style="text-align:left"><input type="text" value="' . $listcart->rate . '" class="form-control ratebx" name="rate' . $x . '"></td><td style="text-align:left; display:none;"><input type="text" value="" class="form-control" name="gst' . $x . '"></td><td style="text-align:left"><input type="text" value="' . $listcart->totalamount . '" readonly="" class="form-control tothrs" name="amount' . $x . '"><input type="hidden" value="' . $listcart->serviceid . '" name="serviceid' . $x . '" class="serviceid"></td><td><a class="btn btn-danger btn-sm deleterow" data-id="' . $listcart->serviceid . '">X</a></td></tr>';

                                        }



                                    }
                                    ?>

                                </tbody>

                            </table>
                            <div>
                                Total : <span id="grtotal" name="grtotal"></span>

                            </div>
                        </div>


                        <div class="row">

                            <div class="col-12 text-right">
                                <input type="hidden" value="<?php echo $eid; ?>" name="eid">
                                <input type="hidden" value="<?php echo $getcount; ?>" name="rowlen" id="rowlen">
                                <button type="submit" name="submit" class="btn btn-primary" id="submit">Submit</button>
                                <a href="add_application.php" name="cancel" class="btn btn-danger">Cancel</a>
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

<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('c_add');

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
<script type="text/javascript">
    $(document).ready(function () {
        $("#client").change(function () {
            var id = $(this).val();
            var datastring = 'client=' + id;
            $.ajax({
                url: 'getapplication.php',
                type: "POST",
                data: datastring,
                dataType: "JSON",
                success: function (data) {
                    /*if(empData){
                        $( "$errorMessage" ).addClass
                        ('hidden').text("");
                        $("#recoedListing").removeClass
                        ('hidden').text("No Record Found!");
                    }*/

                    $('#c_name').val(data.cname);
                    $('#email').val(data.email);
                    $('#contact').val(data.contact);
                    $('#c_add').val(data.cadd);
                }
            });
        });

        $('#addrow').click(function () {

            if ($('#service').val() != '') {

                var getlength = $('#resourceRequest tbody tr').length;
                var rowid = parseFloat(getlength) + 1;

                $('#rowlen').val(rowid);

                var getservice = $('#service').val();
                var getservicename = $('#service option:selected').text();
                var getservicerate = $('#service option:selected').attr('data-rate');

                $('#resourceRequest').append('<tr><td style="text-align:left"><input type="text" value="' + getservicename + '" class="form-control" name="servicename' + rowid + '" readonly></td><td style="text-align:left"><input type="text" value="" class="form-control samples" name="sample' + rowid + '"></td><td style="text-align:left"><input type="text" value="' + getservicerate + '" class="form-control ratebx" name="rate' + rowid + '"></td><td style="text-align:left; display:none;"><input  type="text" value="" class="form-control" name="gst' + rowid + '"></td><td style="text-align:left"><input type="text" value="" readonly class="form-control tothrs" name="amount' + rowid + '"><input type="hidden" value="' + getservice + '" name="serviceid' + rowid + '" class="serviceid"></td><td><a class="btn btn-danger btn-sm deleterow" data-id="' + getservice + '">X</a></td></tr>');

                $('#service option:selected').hide();
                $('#service').prop('selectedIndex', 0);

            } else {
                alert('Please select Service');
            }

        });


        $('body').on('change', '.samples', function () {

            var getsample = $(this).val();
            var getsamplerate = $(this).closest('tr').find('.ratebx').val();

            var newamout = parseFloat(getsample) * parseFloat(getsamplerate);

            $(this).closest('tr').find('.tothrs').val(newamout);

            getgrtotal();

        });

        $('body').on('change', '.ratebx', function () {

            var getsamplerate = $(this).val();
            var getsample = $(this).closest('tr').find('.samples').val();

            var newamout = parseFloat(getsample) * parseFloat(getsamplerate);

            $(this).closest('tr').find('.tothrs').val(newamout);

            getgrtotal();

        });

        $('body').on('click', '.deleterow', function () {

            $(this).closest('tr').remove();
            var getval = $(this).attr('data-id');
            getgrtotal();

            var getrow = $('#rowlen').val();
            var newcount = parseFloat(getrow) - 1;


            $('#rowlen').val(newcount);

            $('#service option[value=' + getval + ']').show();

            return false;
        });


        function getgrtotal() {

            var thetotal = 0;

            $('.tothrs').each(function () {

                thetotal += parseFloat($(this).val());

            });

            $('#grtotal').text(thetotal);

        }



    });

</script>



</body>

</html>