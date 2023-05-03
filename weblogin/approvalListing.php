<?php
include('config.php');
include('header.php');
include('module/approvelisting.php');


//filter and display
$search_hostname = '';
$search_destination = '';
$search_location = '';
$state='';
$city='';
if (isset($_GET['search_hostname'])) {
    $search_hostname = $_GET['search_hostname'];
}
if (isset($_GET['search_destination'])) {
    $search_destination = $_GET['search_destination'];
}
if (isset($_GET['search_location'])) {
    $search_location = $_GET['search_location'];
}
if (isset($_GET['state'])) {
    $state = $_GET['state'];
}
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}

$makequery = "SELECT a.*, r.room, v.name as vendorname, d.title as titlename, s.name, c.city as cityname 
                        from `addproperty` as a 
                        left Join `room_master` as r on r.id = a.r_type 
                        left Join `vendor_master` as v on v.id = a.property_by 
                        left Join `destination_master` as d on d.id = a.destination 
                        left Join `awt_states` as s on s.id = a.state 
                        left Join `city_master` as c on c.id = a.city 
                        where a.deleted != 1 and a.adminApproval !=1";

if ($search_hostname != '') {
    $makequery .= " and v.name like '$search_hostname'";
}
if ($search_destination != '') {
    $makequery .= " and d.title like '$search_destination'";
}
if ($state != '') {
    $makequery .= " and s.id = '$state'";
}
if ($city != '') {
    $makequery .= " and c.id = '$city'";
}
// if ($search_location != '') {
//     $makequery .= " and s.name like '%$search_location%'";
// }

$makequery .= " order by a.reason is null desc,a.reason desc";

$query = mysqli_query($sql, $makequery);

$count = mysqli_num_rows($query);

?>

<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    Property Approval Listing
    <a class="btn btn-primary btn-sm float-right" href="manage_listing_1.php" role="button">
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
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span>
    <a>Property Approval Listing</a>
</div>


<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="display: block;">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="" method="get" enctype="multipart/form-data">
                        <div class="row">
                     
                            <div class="col-3 mb-4  forminput">
                                <label for="search_hostname">Name</label><br>
                                <select name="search_hostname" class="form-control select2" data-placeholder=" Select Name"
                                    id="search_hostname">
                                    <option value="">Select Name</option>
                                    <?php
                                    $query12 = mysqli_query($sql, "SELECT v.name as vendor from `addproperty` as a left Join `vendor_master` as v on v.id = a.property_by where a.deleted != 1 and a.adminApproval !=1 and v.vendor_status !=1");
                                    while ($listquery = mysqli_fetch_object($query12)) {
                                        echo '<option value="' . $listquery->vendor . '"';
                                        if ($search_hostname == $listquery->vendor) {
                                            echo 'selected ="selected"';
                                        }
                                        echo '>' . $listquery->vendor . '</option>';
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
                                <select name="state" id="state" class="form-control select2" data-placeholder=" Select State">
                                    <option value="">Select State</option>
                                    <?php
                                    $query2 = mysqli_query($sql, "SELECT * FROM `awt_states` ");
                                    while ($listdata = mysqli_fetch_object($query2)) {
                                        echo '<option value="' . $listdata->id . '"';
                                        if ($listdata->id == $state) {
                                            echo ' selected="selected" ';
                                        }
                                        echo '>' . $listdata->name . '</option>';
                                    }
                                    ?>
                                </select>
                                <div id="state_err" class=" errordiv text-danger"></div>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="city">City<!--<span class="text-danger">*</span>--> </label> <br>
                                <select name="city" id="city" data-placeholder="Select City" class="form-control select2">
                                    <option value="">Select City</option>
                                    <?php
                                    $query3 = mysqli_query($sql, "SELECT * FROM `city_master` WHERE `state`='$state' and deleted != 1 and city_status !=1");
                                    while ($listdata = mysqli_fetch_object($query3)) {
                                        echo '<option value="' . $listdata->id . '"';
                                        if ($listdata->id == $city) {
                                            echo ' selected="selected" ';
                                        }
                                        echo '>' . $listdata->city . '</option>';
                                    }
                                    ?>
                                    <div id="city_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 text-right d-flex align-items-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Filter</button>
                                <!-- <button type="reset" id="reset" name="reset" class="btn btn-danger ml-2">Reset</button> -->
                                <a href="approvalListing.php" name="cancel" class="ml-2 btn btn-danger">Cancel</a>
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
                    Approval Pending Listing (
                    <?php echo $count; ?>)
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Host Name</th>
                                    <th>Property Name</th>
                                    <th>Destination</th>
                                    <th>Location</th>
                                    <th>View</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($count > 0) {
                                    $x = 1;
                                    while ($getdata = mysqli_fetch_object($query)) {

                                        $destination = $getdata->titlename;
                                        $statename = $getdata->name;
                                        $city_name = $getdata->cityname;

                                        echo '<tr>
                                <td>' . $x . '</td>
                                <td>' . $getdata->vendorname . '</td>
                                <td>' . $getdata->title . '</td>                            
                                <td>' . $destination . '</td>
                                <td>' . $statename . '</td>
                                
                                <td class="text-center">
                                        <a href="addProperties.php?eid=' . $getdata->id . '">View </a>
                                 </td>';

                                        if ($getdata->reason == 'approved') {
                                            echo '<td><a href="#" data-toggle="modal" data-target="#myModal2" data-reason="' . $getdata->reason . '" data-id="' . $getdata->id . '" aria-controls="myModal2" class="approved_popup_btn btn btn-success btn-sm">Approved</a></td>';
                                        } else if ($getdata->reason == NULL) {
                                            echo '<td><a href="#" data-toggle="modal" data-target="#myModal2" data-id="' . $getdata->id . '" aria-controls="myModal2" class="pending_popup_btn btn btn-primary btn-sm">Pending</a></td>';

                                        } else {
                                            echo '<td><a href="#" data-toggle="modal" data-target="#myModal2" data-reason="' . $getdata->reason . '" data-id="' . $getdata->id . '" aria-controls="myModal2" class="disaproved_popup_btn btn btn-danger btn-sm">Disapproved</a></td>';
                                        }

                                        echo '</tr>';
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

        <!--modal popup-->
        <div class="modal fade" id="myModal2" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog desknewmodaldialog" role="document">
                <div class="modal-content desknewmodalcontent">
                    <div class="modal-header newdeskbg1">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-times" aria-hidden="true"></i></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="deskmartopaddcl">
                                    <label class="deskmartopaddcllable">Status</label>
                                    <select id="status_approval" required name="status_approval" class="form-control">
                                        <option>Select Status</option>
                                        <option value="0">Approve</option>
                                        <option value="1">Disapprove</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group" style="margin-top: 10px; display: none;" id="reasondiv">
                                    <label>Reason<span class="text-danger">*</span></label>
                                    <textarea name="reason" id="reason" placeholder="" class="form-control" row="4"
                                        required=""></textarea>
                                </div>
                            </div>
                            <div class="deskmartopaddcl2">
                                <input id="propertyid" name="propertyid" value="" type="hidden">
                                <button type="submit" name="updateproperty_status" class="btn btn-primary"
                                    id="updateproperty_status"
                                    style="width: 91px; margin: 20px 0px 20px 197px;">Update</button>
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

<script type="text/javascript" src="js/validate/city.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#status_approval').change(function () {
            var status_id = $('#status_approval').val();
            if (status_id == 1) {
                $('#reasondiv').show();
                $('#reason').attr('required', true);
            }
            else {
                $('#reasondiv').hide();
                $('#reason').removeAttr('required', true);
            }
        });

        $('.pending_popup_btn').click(function () {
            var propid = $(this).attr('data-id');
            $('#propertyid').val(propid);
            var reasondata = '';
            $('#reason').val(reasondata);
        });


        $('.disaproved_popup_btn').click(function () {
            var reasondata = $(this).attr('data-reason');
            $('#reason').val(reasondata);
            var propid = $(this).attr('data-id');
            $('#propertyid').val(propid);
        });


        $('.approved_popup_btn').click(function () {
            var reasondata = $(this).attr('data-reason');
            $('#reason').val(reasondata);
            var propid = $(this).attr('data-id');
            $('#propertyid').val(propid);
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

    });
</script>
<!-- Page level custom scripts -->

<link rel="stylesheet" href="<?php echo MAINLINK;?>/css/select2.min.css">
<script src="<?php echo MAINLINK;?>js/select2.full.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });

</script>





</body>



</html>