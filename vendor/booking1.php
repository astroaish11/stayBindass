<?php
include('config.php');
include('header.php');
// include('module/addproperty.php');

$vendorId =$_SESSION[SESSION]['loginuserid'];


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
    Booking
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
    <a>Bookings List</a>
</div>


<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="display:none" >
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-3 mb-4  forminput">
                                <label for="lang">Date Range </label><br>
                                <select name="state" id="data_range" class="form-control">
                                    <option value="0">Anytime</option>
                                    <option value="1">Today</option>
                                    <option value="2">Yesterday</option>
                                    <option value="3">Last 7 days</option>
                                    <option value="4">Last 30 days</option>
                                    <option value="5">This Month</option>
                                    <option value="6">Last Month</option>
                                    <option value="7">Custom Range</option>
                                    <div id="data_range_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 mb-4  forminput">
                                <label for="lang">Status </label><br>
                                <select name="state" id="status" class="form-control">
                                    <option value="0">All</option>
                                    <option value="1">Listed</option>
                                    <option value="2">Unlisted</option>
                                    <div id="status_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 mb-4  forminput">
                                <label for="lang">Space Type </label><br>
                                <select name="state" id="cust" class="form-control">
                                    <option value="0">All</option>
                                    <option value="1">Entire Home/apt</option>
                                    <option value="0">Private Room</option>
                                    <option value="0">Shared Room</option>
                                    <option value="0">Unique Stays</option>
                                    <option value="0">Single Room</option>
                                    <div id="cust_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 text-right d-flex align-items-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Filter</button>
                                <button type="reset" id="reset" name="reset" class="btn btn-danger ml-2">Reset</button>
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
                Bookings List (<?php echo $count; ?>)
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Actual Villa  Name</th>
                                    <th>Villa Code Name</th>
                                    <th>Customer Details</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <!-- <th>Paid</th>
                                    <th>Remain</th>
                                    <th class="text-center" width="5%">Status</th>
                                    <th class="text-center" width="5%">View</th> -->

                                </tr>
                            </thead>
                            <tbody>
                               
                              

                        <?php
                        $query = mysqli_query($sql, "SELECT vm.name as vendorname,vm.contact as vendorcontact,vm.email as vendoremail,pb.*,u.*,a.actualtitle,a.address as villaaddress FROM `property_booking` as pb 
                        left join `addproperty` as a on a.id = pb.prop_id                                           
                        left join `awt_registerUser` as u on u.id = pb.userID 
                        left join `vendor_master` as vm on vm.id = pb.vendorID
                        where a.deleted != 1 and pb.vendorID = $vendorId;");

                        $count = mysqli_num_rows($query);

                               if($count > 0)
                               {
                                 $x = 1;
                                while($getdata = mysqli_fetch_object($query)){
                                    // if($getdata->status == 1 ){
                                    //     $statusname = 'Booking';
                                    // }else{
                                    //     $statusname = 'No Booking';
                                    // }

                                echo '<tr>
                                   <td>'.$x.'</td>
                                   <td>'.$getdata->actualtitle.'</td>
                                   <td>'.$getdata->prop_name.'</td>

                                   <td>Name : '.$getdata->fullname.'<br>Email : '.$getdata->email.'<br>Contact No : '.$getdata->mobile.'</td>
                                   <td>'.$getdata->checkin.'</td>
                                   <td>'.$getdata->checkout.'</td>
                                   <td>'.$getdata->villaaddress.'</td>
                                   <td>'.$getdata->price.'</td>
                                
                           </tr>';
                            $x++;
                           }
                             
                         }
                         else 
                         {
                           echo '<tr><td colspan="11">No Record Found</td></tr>';
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

<script type="text/javascript" src="js/validate/city.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



<!-- Page level custom scripts -->







</body>



</html>