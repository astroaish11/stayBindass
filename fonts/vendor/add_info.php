<?php
include('config.php');
include('header.php');
?>

<head>
    <style>
        .tablink {
            background-color: white;
            color: black;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            font-size: 17px;
            width: 10%;
        }

        .tablink:hover {
            background-color: #e4e4e4;
            border: 1px solid #e4e4e4;
            border-bottom: none;
        }
    </style>
</head>
<!-- Page Heading -->
<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">
        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    Add Information
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Information</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid ">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="row mt-3" style="margin-left:2px">
                    <button class=" tablink  " onclick="openPage('overview', this, '#e4e4e4')">Overview</button>
                    <button class="tablink  " onclick="openPage('location', this, '#e4e4e4')">Location</button>
                    <button class=" tablink  " onclick="openPage('gallery', this, '#e4e4e4')">Gallery</button>
                </div>

                <div class="card-body tabcontent" id="overview">
                    <div class="card-header">
                        Overview
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-3 mb-4 forminput">
                                    <label for="price">Price <span class="text-danger">* (Digit only)</span> </label>
                                    <input type="text" class="form-control" value="" id="price"
                                        placeholder="Enter Price" name="price" required>
                                    <div id="price_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-3 mb-4 forminput">
                                    <label for="contact">Contact No. </label>
                                    <input type="tel" class="form-control" value="" id="contact"
                                        placeholder="Enter Contact No." name="contact">
                                    <div id="contact_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-3 mb-4 forminput">
                                    <label for="whatsapp">Whatsapp No. </label>
                                    <input type="tel" class="form-control" value="" id="whatsapp"
                                        placeholder="Enter Whatsapp No." name="whatsapp">
                                    <div id="whatsapp_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-3 mb-4 forminput">
                                    <label for="pdf">Upload PDF</label>
                                    <input type="file" class="form-control" id="pdf" name="pdf">
                                    <div id="pdf_err" class="errordiv text-danger"></div>
                                </div>


                                <div class="col-12 text-right">
                                    <input type="hidden" value="" id="eid" name="eid">
                                    <button type="submit" class="btn btn-primary" name="submit"
                                        id="submit">Submit</button>
                                    <button type="reset" name="reset" id="reset" class="btn btn-danger">Reset</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body tabcontent " id="location" style="display: none;">
                    <div class="card-header">
                        Update Location
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="row">

                                <div class="col-3 mb-4 forminput">
                                    <label for="locMap">Location Map</label>
                                    <input type="file" class="form-control" id="locMap" name="locMap">
                                    <div id="locMap_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-3 mb-4 forminput">
                                    <label for="mastPlan">Master Plan</label>
                                    <input type="file" class="form-control" id="mastPlan" name="mastPlan">
                                    <div id="mastPlan_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-3 mb-4 forminput">
                                    <label for="latitude">Latitude </label>
                                    <input type="text" class="form-control" value="" id="latitude" placeholder=""
                                        name="latitude">
                                    <div id="latitude_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-3 mb-4 forminput">
                                    <label for="longitude">Longitude </label>
                                    <input type="text" class="form-control" value="" id="longitude" placeholder=""
                                        name="longitude">
                                    <div id="longitude_err" class="errordiv text-danger"></div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-12 mb-4 forminput">
                                    <label for="map">Google Map </label>
                                    <input type="text" class="form-control" value="" id="map"
                                        placeholder="Enter Map Link" name="map">
                                    <div id="map_err" class="errordiv text-danger"></div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-12 text-right">
                                    <button type="submit" name="submit" class="btn btn-primary"
                                        id="submit">Submit</button>
                                    <button type="reset" name="reset" id="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body tabcontent " id="gallery" style="display: none;">
                    <div class="card-header">
                        Gallery
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-lg-6">

                                    <!-- Default Card Example -->

                                    <div class="card mb-4">

                                        <div class="card-header">

                                            Update Gallery

                                        </div>

                                        <div class="card-body">

                                            <form action="" method="post" enctype="multipart/form-data">

                                                <div class="row">

                                                    <div class="col-12 mb-4 forminput">

                                                        <label for="title">Title<span
                                                                class="text-danger">*</span></label>

                                                        <input type="text" class="form-control" value="" id="title"
                                                            placeholder="Enter Title" name="title" required>

                                                        <div id="title_err" class="errordiv text-danger"></div>

                                                    </div>

                                                    <div class="col-12 mb-4 forminput">

                                                        <label for="image">Upload Image<span
                                                                class="text-danger">*</span></label>

                                                        <input type="file" class="form-control" value="" id="title"
                                                            placeholder="Upload Image" name="image" required>

                                                        <div id="image_err" class="errordiv text-danger"></div>

                                                    </div>







                                                    <div class="col-12 text-right">

                                                        <button type="submit" name="submit" id="submit"
                                                            class="btn btn-primary">Submit</button>

                                                        <button type="reset" name="reset" id="reset"
                                                            class="btn btn-danger">Reset</button>

                                                    </div>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <!-- Default Card Example -->

                                    <div class="card mb-4">

                                        <div class="card-header">

                                            Gallery Listing

                                        </div>

                                        <div class="card-body">

                                            <div class="table-responsive">

                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">

                                                    <thead>

                                                        <tr>

                                                            <th width="5%">#</th>

                                                            <th>Title</th>



                                                            <th class="text-center" width="10%">Edit</th>

                                                            <th class="text-center" width="10%">Delete</th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr>

                                                            <td>1</td>

                                                            <td>Bathroom</td>



                                                            <td class="text-center">

                                                                <a href="#" class="btn btn-icon-split btn-sm">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">

                                                                        <path
                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />

                                                                        <path fill-rule="evenodd"
                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />

                                                                    </svg>

                                                                </a>

                                                            </td>

                                                            <td class="text-center">

                                                                <a href="#"
                                                                    class="btn btn-icon-split btn-sm text-danger deleteme">

                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash-fill" viewBox="0 0 16 16">

                                                                        <path
                                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />

                                                                    </svg>

                                                                </a>

                                                            </td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</div>




<!-- /.container-fluid -->

<?php
include('footer.php');
?>

</body>
<script>
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    $(document).ready(function () {


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

</html>