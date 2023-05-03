<?php
include('config.php');
include('header.php');
include('module/contactus_listing.php');

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
    Contact Us Listing
    <!-- <a class="btn btn-primary btn-sm float-right" href="addProperties.php" role="button">
        Add Property
    </a> -->
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
    <a>Contact Us Listing</a>
</div>


<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="display:block">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="" method="get" enctype="multipart/form-data">
                        <div class="row">
                            <!-- <div class="col-3 mb-4  forminput">
                                <label for="search_name">Name</label><br>
                                <input type="text" class="form-control" value="<?php echo $search_name; ?>"
                                    id="search_name" placeholder="Enter Name" name="search_name">
                            </div> -->
                            <!-- <div class="col-3 mb-4  forminput">
                                <label for="search_email">Email</label><br>
                                <input type="text" class="form-control" value="<?php echo $search_email; ?>"
                                    id="search_email" placeholder="Enter Email" name="search_email">
                            </div> -->
                            <div class="col-3 mb-4  forminput">
                                <label for="search_date">Date</label><br>
                                <!-- <input type="date" class="form-control"
                                    value="<?php echo $search_date; ?>" id="search_date" name="search_date"> -->
                                    <input type="text" value="<?php echo $search_date;?>" name="search_date" id="search_date" class="form-control" autocomplete="off" placeholder="Enter Date.">
                            </div>

                            <div class="col-3 text-right d-flex align-items-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Filter</button>
                                <!-- <button type="reset" id="reset" name="reset" class="btn btn-danger ml-2">Reset</button> -->
                                <a href="contact_us_listing.php" name="cancel" class="ml-2 btn btn-danger">Cancel</a>
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
                    Contact Us Listing (
                    <?php echo $count; ?>)
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <!-- <th>Message</th> -->
                                    <th>Date</th>
                                    <th>View Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($count > 0) {
                                    $x = 1;
                                    while ($getdata = mysqli_fetch_object($query)) {
                                        $d = $getdata->created_date;
                                      //  $nd = date("Y-m-d", strtotime($d));
                                      $nd=date("d-m-Y", strtotime($d));
                                        echo '<tr>
                                   <td>' . $x . '</td>
                                   <td>' . $getdata->name . '</td>
                                   <td>' . $getdata->email . '</td>
                                   <td>' . $getdata->subject . '</td>
                                   <td>' . $nd . '</td>
                                   <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter' . $getdata->id . '">View Message</a></td>
                                
                                    </tr>';

                                        echo '<div class="modal fade" id="exampleModalCenter' . $getdata->id . '" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Homeowner -
                                            ' . $getdata->name . '</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                         <h6>' . $getdata->message . '</h6>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>';

                                        $x++;
                                    }

                                } else {
                                    echo '<tr><td colspan="6">No Record Found</td></tr>';
                                }
                                ?>

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

<script src="<?php echo MAINLINK;?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo MAINLINK;?>vendor/datatables/dataTables.bootstrap4.min.js"></script>



<!-- Page level custom scripts -->




<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
  $(function() {
    $("#search_date").datepicker({
	  dateFormat: "dd-mm-yy",
            changeMonth: true,
	        changeYear: true,
            yearRange: "-100:+0"
    });
  });
</script>


</body>



</html>