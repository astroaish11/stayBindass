<?php
include('config.php');
include('header.php');
include('module/property_price.php');

$oid = $_GET['oid'];

?>
<!-- Page Heading -->
<style type="text/css">
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 2px solid #ddd;
        padding: 10px;
    }
</style>
<h1 class="h3 topTitle">

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">

        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />

        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />

    </svg>

    Property Price <span style="margin-left: 15px; color: blue;">(Property Name :
        <?php echo $property_name; ?>)
    </span>
    <?php 
    if($_GET['oid']){
        echo'<a class="btn btn-primary btn-sm float-right" href="vendorvillalist.php?eid='.$_GET['oid'].'" role="button">
        List Property
    </a>';
    }else{
        echo'<a class="btn btn-primary btn-sm float-right" href="manage_listing_1.php" role="button">
        List Property
    </a>';
    }
    ?>
    <a class="btn btn-primary btn-sm float-right mx-2" href="blockDates.php?pid=<?php echo $_GET['pid'];?>" role="button">
        Block Dates
    </a>
    <a class="btn btn-primary btn-sm float-right mx-2" href="addProperties.php?eid=<?php echo $_GET['pid'];?>" role="button">
        Overview
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
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Property Price</a>
    
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Default Rate
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <table>
                                <tr>
                                    <th>Day</th>
                                    <th>Per Night Price</th>
                                    <th>Extra Guest Price</th>
                                </tr>
                                <tr>
                                    <td>Monday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $monday; ?>"
                                            id="monday" name="monday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guestmonday; ?>"
                                            id="guestmonday" name="guestmonday" required></td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $tuesday; ?>"
                                            id="tuesday" name="tuesday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guesttuesday; ?>"
                                            id="guesttuesday" name="guesttuesday" required></td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $wednesday; ?>"
                                            id="wednesday" name="wednesday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guestwednesday; ?>"
                                            id="guestwednesday" name="guestwednesday" required></td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $thursday; ?>"
                                            id="thursday" name="thursday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guestthursday; ?>"
                                            id="guestthursday" name="guestthursday" required></td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $friday; ?>"
                                            id="friday" name="friday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guestfriday; ?>"
                                            id="guestfriday" name="guestfriday" required></td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $saturday; ?>"
                                            id="saturday" name="saturday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guestsaturday; ?>"
                                            id="guestsaturday" name="guestsaturday" required></td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td><input type="text" class="form-control" value="<?php echo $sunday; ?>"
                                            id="sunday" name="sunday" required></td>
                                    <td><input type="text" class="form-control" value="<?php echo $guestsunday; ?>"
                                            id="guestsunday" name="guestsunday" required></td>
                                </tr>
                            </table>
                            <div class="col-12 text-right" style="margin-top: 10px;">
                                <input type="hidden" value="<?php echo $pid; ?>" id="pid" name="pid">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Update
                                    Price</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Custom Rate
                </div>

                <div class="card-body">
                    <form action="" method="get">
                        <div class="table-responsive">
                        <div class = "row"> 
                            <div class="col-4 mb-4 forminput" style="float: left;">
                                <label for="title">From Date<span class="text-danger">*</span></label>
                                <input type="date" id="from_date" class="form-control" name="from_date"
                                    value="<?php echo $from_date; ?>" placeholder="dd-mm-yyyy" required />
                            </div>
                            <div class="col-4 mb-4 forminput" style="float: left;">
                                <label for="title">To Date<span class="text-danger">*</span></label>
                                <input type="date" id="to_date" class="form-control" name="to_date"
                                    value="<?php echo $to_date; ?>" placeholder="dd-mm-yyyy" required />
                            </div>
                        </div>
                        <div class = "row">                      
                            <div class="col-4 mb-4 forminput" style="float: left;">
                                <label for="title">Per Night Price<span class="text-danger">*</span></label>
                                <input type="text" id="per_night" class="form-control" name="per_night"
                                    value="<?php echo $per_night; ?>" placeholder="0" required />
                            </div>
                            <div class="col-4 mb-4 forminput" style="float: left;">
                                <label for="title">Extra Guest Price</label>
                                <input type="text" id="extra_guest" class="form-control" name="extra_guest"
                                    value="<?php echo $extra_guest; ?>" placeholder="0"  />
                            </div>
                        </div>
                            <div class="col-4 mb-4" style="margin-top: 10px; float: left;">
                                <input type="hidden" name="pid" value="<?php echo $pid; ?>" />
                                <button type="submit" name="datesubmit" id="submit" class="btn btn-primary"
                                    style="margin-top: 20px;">Search</button>
                                <a style="margin-top: 20px;" href="property_price.php?pid=<?php echo $pid; ?>"
                                    name="cancel" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="table-responsive">
                    <form action="" method="post">
                        <?php

                        if (isset($_GET['datesubmit'])) {
                            echo '<table>
                          <tr>
                            <th>Date</th>
                            <th>Per Night Price</th>
                            <th>Extra Guest Price</th>
                          </tr>';

                            $getdate_query = mysqli_query($sql, "SELECT * FROM `awt_property_price` WHERE `select_date` >= '$from_date' and `select_date` <= '$to_date' and `property_id`='$pid' ORDER BY `select_date` asc");
                            $x = 1;
                            while ($list_data = mysqli_fetch_object($getdate_query)) {
                                 
                            echo' <tr>
                            <td><input type="text" readonly class="form-control" value="'.$list_data->select_date.'" id="date'.$x.'" name="date'.$x.'"></td>

                            <td><input type="text" class="form-control" value="'.$per_night.'" id="per_night'.$x.'" name="per_night'.$x.'"></td>

                            <td><input type="text" class="form-control" value="'.$extra_guest.'" id="extra_guest'.$x.'" name="extra_guest'.$x.'"></td>

                            <input type="hidden" value="'.$list_data->id.'" id="hidden_id'.$x.'" name ="hidden_id'.$x.'"/>

                            </tr>';
                                $x++;
                            }
                            echo '</table>
                            <div class="col-12 text-right" style="margin-top: 10px;">
                            <input type="hidden" name="row_count" value="'.($x-1).'">
                            <button type="submit" name="priceupdate" id="submit" class="btn btn-primary">Update</button>
                            </div>';
                        }
                        ?>
                    </form>
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript" src="js/pages/masthead.js"></script>
    <script type="text/javascript">
        $('.deleteme').click(function () {
            return confirm("Are you sure you want to delete?");
        });

        $(document).ready(function () {
            $('.fadediv').delay(3000).fadeOut();
        });
    </script>
    </body>

    </html>