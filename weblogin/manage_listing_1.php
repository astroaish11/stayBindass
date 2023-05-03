<?php
include('config.php');
include('header.php');
include('module/addproperty.php');

function dataCount($sql, $tablename, $columnname, $villaid)
{

    $countquery = mysqli_query($sql, "SELECT `id` FROM $tablename WHERE `$columnname` = '$villaid' and `deleted` != 1");
    $allcounts = mysqli_num_rows($countquery);

    return $allcounts;

}

?>

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /*background-color: red;*/
        background-color: green;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        /*background-color: green;*/
        background-color: red;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 28px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>



<!-- Page Heading -->

<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">
        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    Property Listing
    <a class="btn btn-primary btn-sm float-right" href="addProperties.php" role="button">
        Add Property
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
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span>
    <a>Property Listing</a>
</div>


<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="display: display;">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="" method="get" enctype="multipart/form-data">
                        <div class="row">                    
                            <div class="col-3 mb-4  forminput">
                                <label for="search_vendorname">Vendor Name</label><br>
                                <select name="search_vendorname" class="form-control select2" data-placeholder=" Select Vendor"
                                    id="search_vendorname">
                                    <option value="">Select Name</option>
                                    <?php
                                    $query12 = mysqli_query($sql, "SELECT distinct(username),name FROM `vendor_master` where deleted != 1 and vendor_status != 1");
                                    while ($listquery = mysqli_fetch_object($query12)) {
                                        echo '<option value="' . $listquery->username . '"';
                                        if ($search_vendorname == $listquery->username) {
                                            echo 'selected ="selected"';
                                        }
                                        echo '>' . $listquery->name . ' - '.$listquery->username.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="search_destination">Destination</label><br>
                                <select name="search_destination" class="form-control select2" data-placeholder=" Select Destination"
                                    id="search_destination">
                                    <option value="">Select Destination</option>
                                    <?php
                                    $query13 = mysqli_query($sql, "SELECT `title` from `destination_master` where deleted != 1 and destination_status !=1");
                                    while ($listquery = mysqli_fetch_object($query13)) {
                                        echo '<option value="' . $listquery->title . '"';
                                        if ($search_destination == $listquery->title) {
                                            echo 'selected ="selected"';
                                        }
                                        echo '>' . $listquery->title . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-3 mb-4 forminput">
                                <label for="lang">Select State <span class="text-danger"></span></label><br>
                                <select name="search_state" id="state" class="form-control select2" data-placeholder=" Select State">
                                    <option value="">Select State</option>
                                    <?php
                                    $query2 = mysqli_query($sql, "SELECT * FROM `awt_states` ");
                                    while ($listdata = mysqli_fetch_object($query2)) {
                                        echo '<option value="' . $listdata->id . '"';
                                        if ($listdata->id == $search_state) {
                                            echo ' selected="selected" ';
                                        }
                                        echo '>' . $listdata->name . '</option>';
                                    }
                                    ?>
                                </select>
                                <div id="state_err" class=" errordiv text-danger"></div>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="search_city">City<!--<span class="text-danger">*</span>--> </label> <br>
                                <select name="city" id="city" data-placeholder="Select City" class="form-control select2">
                                    <option value="">Select City</option>
                                    <?php
                                    $query3 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `state`='$search_state' and deleted != 1 and city_status = 0");
                                    while ($listdata = mysqli_fetch_object($query3)) {
                                        echo '<option value="' . $listdata->id . '"';
                                        if ($listdata->id == $search_city) {
                                            echo ' selected="selected" ';
                                        }
                                        echo '>' . $listdata->city . '</option>';
                                    }
                                    ?>
                                    <div id="city_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="sale">Check Offer</label><br>
                                <select name="search_offer" id="search_offer" class="form-control" style="height:30px">
                                <option value="" >Select Offer</option>
                                    <option value="1" <?php if($search_offer==1){echo 'selected';}?>>Offer</option>
                                    <option value="0" <?php if($search_offer==0){echo 'selected';}?>>No Offer</option>
                                </select>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="disable">Property Status</label><br>
                                <select name="search_disable" id="search_disable" class="form-control" style="height:30px">
                                <option value="" >Select Status</option>
                                    <option value="1" <?php if($search_disable==1){echo 'selected';}?>>Disable</option>
                                    <option value="0" <?php if($search_disable==0){echo 'selected';}?>>Enable</option>
                                </select>
                            </div>


                            <div class="col-3 text-right d-flex align-items-center">
                                <button type="submit" id="search" name="search" class="btn btn-primary">Filter</button>
                                <!-- <button type="reset" id="reset" name="reset" class="btn btn-danger ml-2">Reset</button> -->
                                <a href="manage_listing_1.php" name="cancel" class="ml-2 btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Property Listing (
                    <?php echo $count; ?>)
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">Sr.No.</th>
                                    <th>Property Details</th>

                                    <th>Destination</th>

                                    <th>Gallery</th>                              
                                    <th>Villa FAQ</th>
                                    <th>Meal Plan</th>
                                    <th>Block Dates</th>

                                    <th>Add Price</th>
                                    <th>Offer</th><!--Sale-->
                                    <th class="text-center" width="5%">Edit</th>
                                    <th class="text-center status" width="5%">Enable/Disable</th>
                                    <th class="text-center" width="5%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($count > 0) {
                                    $x = 1;
                                    while ($getdata = mysqli_fetch_object($query)) {

                                        $villaid = $getdata->id;
                                        $destination = $getdata->titlename;
                                        $statename = $getdata->name;
                                        $city_name = $getdata->cityname;

                                        $galleryCount = dataCount($sql, 'awt_vgallery', 'v_id', $villaid);
                                        $faqCount = dataCount($sql, 'awt_villafaq', 'v_id', $villaid);

                                        echo '<tr>
                                <td>' . $x . '</td>
                                <td>Villa Name : ' . $getdata->title . '
                                    <br>Actual Villa Name : ' . $getdata->actualtitle . '
                                    <br>Vendor Name : ' . $getdata->vendorname . '</td>
                                                    
                                <td>' . $destination . '</td>

                                <td class="text-center"><a href="gallery.php?vid=' . $getdata->id . '" class="btn btn-sm btn-info">Add (' . $galleryCount . ')</a></td>                                                         
                                <td class="text-center"><a href="villafaq.php?vid=' . $getdata->id . '" class="btn btn-sm btn-info">Add (' . $faqCount . ')</a></td>
                                <td class="text-center"><a href="meal.php?vid=' . $getdata->id . '" class="btn btn-sm btn-info">Add</a></td>
                                <td class="text-center"><a href="blockDates.php?pid=' . $getdata->id . '" class="btn btn-sm btn-info">Add</a></td>       

                                <td class="text-center"><a href="property_price.php?pid=' . $getdata->id . '" class="btn btn-sm btn-info">Add</a></td>';
                                        if ($getdata->sale_status == 1) {
                                            echo '<td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="' . $getdata->id . '" class="saleStatus" checked="checked">
                                        <span class="slider round"></span>
                                    </label>
                                </td>';
                                        } else {
                                            echo '<td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="' . $getdata->id . '" class="saleStatus">
                                        <span class="slider round"></span>
                                    </label>
                                </td>';
                                        }
                                        echo '<td class="text-center">
                                    <a href="addProperties.php?eid=' . $getdata->id . '" class="btn btn-icon-split btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                            </td>';

                            if($getdata->villaStatus == 1)
                            {
                            echo'<td>
                            <label class="switch">
                                <input type="checkbox" data-id="'.$getdata->id.'" class="villaStatus" checked="checked">
                                <span class="slider round"></span>
                            </label>
                        </td>';
                                
                            }else
                            {

                            echo '<td>
                                <label class="switch">
                                    <input type="checkbox" data-id="'.$getdata->id.'" class="villaStatus">
                                    <span class="slider round"></span>
                                </label>
                            </td>';
                            }

                            echo'<td class="text-center">
                                <a href="manage_listing_1.php?did=' . $getdata->id . '" class="btn btn-icon-split btn-sm text-danger deleteme">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>';
                                        $x++;
                                    }

                                } else {
                                    echo '<tr><td colspan="9">No Record Found</td></tr>';
                                }
                                ?>


                                </tr>

                            </tbody>
                        </table>
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

<!-- <script type="text/javascript" src="js/validate/city.js"></script> -->
<script src="<?php MAINLINK;?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php MAINLINK;?>vendor/datatables/dataTables.bootstrap4.min.js"></script>



<script type="text/javascript">
    $(document).ready(function () {

        // Sale Status validation -----------


        $('.saleStatus').click(function () {
            var retVal = confirm("Are you sure you want to Change Status?");
            if (retVal == true) {
                var id = $(this).attr('data-id');
                var dataString = 'salestatusid=' + id;
                //alert(dataString);
                $.ajax({
                    type: "POST",
                    url: "ajax_function.php",
                    data: dataString,
                    cache: false,
                    success: function (data) {
                        //alert(data);              
                    }
                });
            } else {
                window.location.href = "";
            }
        });

                // Villa Disable Status validation -----------

                $('.villaStatus').click(function () {
            var retvilla = confirm("Are you sure you want to Change Status?");
             if (retvilla == true) {
                var id = $(this).attr('data-id');              
                var dataString = 'villastatusid=' + id;
                //alert(dataString);
            
                $.ajax({
                    type: "POST",
                    url: "ajax_function.php",
                    data: dataString,
                    cache: false,
                    success: function (data) {
                       // alert(data);              
                    }
                });
            } else {
                window.location.href = "";
            }
             
        });

    });

</script>

<!-- Page level custom scripts -->

<link rel="stylesheet" href="<?php echo MAINLINK ; ?>/css/select2.min.css">
<script src="<?php echo MAINLINK ; ?>js/select2.full.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });

    $('#state').change(function () {
            var stateid = $(this).val();

            var dataString = 'generateCityDropdown=' + stateid;
            $.ajax({
                type: "POST",
                url: "ajax_function.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    $("#city").html(data);
                }
            });
        });

</script>





</body>



</html>