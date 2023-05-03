<?php
include('config.php');
include('header.php');
include('module/galleryinfo.php');
?>

<head>
    <style>
        .tablink {
            background-color: #dfd7d7;
            color: black;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 9px 10px;
            font-size: 17px;
            width: 11%;
            margin: 10px;
            border-radius: 5px;
        }

        .tablink a {
            text-decoration: underline;

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
    <a class="btn btn-primary btn-sm float-right" href="manage_listing.php" role="button">
    Property Listing
    </a>
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
            <button class="tablink"><a href="overview.php?vid='.$getdata->id.'">Overview</a></button>
            <button class="tablink"><a href="location.php?vid='.$getdata->id.'">Location</a></button>
            <button class="tablink"><a href="gallery.php?vid='.$getdata->id.'">Gallery</a></button>
            <button class="tablink"><a href="video.php?vid='.$getdata->id.'">Video</a></button>
            <button class="tablink"><a href="villafaq.php?vid='.$getdata->id.'">Villa FAQ</a></button>
            </div>

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
            </div>
        </div>
    </div>






<!-- /.container-fluid -->

<?php
include('footer.php');
?>

</body>

</html>