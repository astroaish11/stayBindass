<?php
include('config.php');
include('header.php');
// include('module/booking.php');
// include('module/addproperty.php');

$vendorId =$_SESSION[SESSION]['loginuserid'];

$vendorname='';
$destination='';
$checkin_date='';
$checkout_date='';
if(isset($_GET['vendorname'])){$vendorname=$_GET['vendorname'];}
if(isset($_GET['destination'])){$destination=$_GET['destination'];}
if(isset($_GET['checkin_date'])){$checkin_date=$_GET['checkin_date'];}
if(isset($_GET['checkout_date'])){$checkout_date=$_GET['checkout_date'];}
                        

$makequery = "SELECT d.title,vm.name as vendorname,vm.contact as vendorcontact,vm.email as vendoremail,pb.*,u.*,a.actualtitle,a.address as villaaddress FROM `confirm_booking` as pb 
                        left join `addproperty` as a on a.id = pb.prop_id                                           
                        left join `awt_registerUser` as u on u.id = pb.userID 
                        left join `vendor_master` as vm on vm.id = pb.vendorId
                        left join `destination_master` as d on d.id = a.destination 
                        where a.deleted != 1  and adminapproval = 1 and pb.vendorId = $vendorId" ;
                         $checkin_date_format = date("Y-m-d", strtotime($checkin_date)); 
                         $checkout_date_format = date("Y-m-d", strtotime($checkout_date));
                        if($vendorname != ''){$makequery.= " and vm.name like '%$vendorname%'";}
                        if($destination != ''){$makequery.= " and d.title like '%$destination%'";}
                        if($checkin_date != ''){
                            
                            $makequery.= " and pb.checkin >='$checkin_date_format'";
                        }
                        if($checkout_date != ''){
                           
                            $makequery.= " and pb.checkout <= '$checkout_date_format'";
                        }
                        $query = mysqli_query($sql,$makequery);
                        $count = mysqli_num_rows($query);


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
        <div class="col-lg-12" style="display:block" >
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="" method="get" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-3 mb-4  forminput">
                                <label for="vendorname">Villa Owner Name</label><br>
                                <input type="text" class="form-control" value="<?php echo $vendorname;?>" id="vendorname" placeholder="Enter Villa Owner Name" name="vendorname">
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="destination">Destination</label><br>
                                <input type="text" class="form-control" value="<?php echo $destination;?>" id="destination" placeholder="Enter Destination" name="destination">
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="checkin_date">Check In</label><br>
                                <input type="text" value="<?php echo $checkin_date;?>" name="checkin_date" id="checkin_date" class="form-control" autocomplete="off" placeholder="Enter Date.">
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="checkout_date">Check Out</label><br>
                                <input type="text" value="<?php echo $checkout_date;?>" name="checkout_date" id="checkout_date" class="form-control" autocomplete="off" placeholder="Enter Date.">
                            </div>

                            <div class="col-3 text-right d-flex align-items-center">
                                <button type="submit" id="search" name="search" class="btn btn-primary">Filter</button>
                         
                                <a href="booking.php" name="cancel" class="ml-2 btn btn-danger">Cancel</a>
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
                <?php
               // $count_query = mysqli_query($sql,"SELECT")
                ?>
                Bookings List (<?php echo $count; ?>)
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">Sr.No.</th>
                                    <th>Villa Details</th>
                                    <!-- <th>Villa Code Name</th> -->
                                    <!-- <th>Villa Owner Details</th> -->
                                    <th>Customer Details</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <!-- <th>Location</th> -->                                  
                                    <th>Price</th>
                                    <th>All Details</th>
                                    <!-- <th>Paid</th>
                                    <th>Remain</th>
                                    <th class="text-center" width="5%">Status</th>
                                    <th class="text-center" width="5%">View</th> -->

                                </tr>
                            </thead>
                            <tbody>
                               
                              

                        <?php
                
                               if($count > 0)
                               {
                                 $x = 1;
                                while($getdata = mysqli_fetch_object($query)){
                          
                                echo '<tr>
                                   <td>'.$x.'</td>
                                   <td><strong>Villa: </strong>'.$getdata->actualtitle.'<br><strong>Code: </strong>'.$getdata->prop_name.'</td>                           
                                   <td>Name : '.$getdata->fullname.'<br>Email : '.$getdata->email.'<br>Contact No : '.$getdata->mobile.'</td>
                                   <!--<td>'.$getdata->checkin.'</td>
                                   <td>'.$getdata->checkout.'</td>-->
                                   <td>'.date("d-m-Y", strtotime($getdata->checkin)).'</td>
                                   <td>'.date("d-m-Y", strtotime($getdata->checkout)).'</td>
                                   <!--<td>'.$getdata->villaaddress.'</td>-->                                  
                                   <td>'.$getdata->price.'</td>
                                   <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter' . $getdata->id . '">View</a></td>                              
                                   </tr>';                        
                                        echo '<div class="modal fade" id="exampleModalCenter' . $getdata->id . '" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Booking Details </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h6><strong>Villa code</strong> : ' . $getdata->prop_name . '</h6>
                                                    <h6><strong>Booking No</strong>  : ' . $getdata->bookingNo . '</h6>
                                                    <h6><strong>Booking Date</strong>  : ' . $getdata->bookingDate . '</h6>
                                                    <h6><strong>Villa Owner Name</strong>  : ' . $getdata->vendorname . '</h6>
                                                    <h6><strong>Owner Contact</strong>  : ' . $getdata->vendorcontact . '</h6>
                                                    <h6><strong>Customer Name</strong>  : ' . $getdata->fullname . '</h6>
                                                    <h6><strong>Customer Email</strong>  : ' . $getdata->email . '</h6>
                                                    <h6><strong>Customer Contact</strong>  : ' . $getdata->mobile . '</h6>
                                                    <h6><strong>Guests</strong>  : Adults -' . $getdata->adults . 'Children -' . $getdata->children . 'Nights -' . $getdata->nights . '</h6>
                                                    <h6><strong>Check IN</strong>  : '.date("d-m-Y", strtotime($getdata->checkin)).'</h6>
                                                    <h6><strong>Check Out</strong>  : '.date("d-m-Y", strtotime($getdata->checkout)).'</h6>                                                 
                                                    <h6><strong>Price</strong>  : ' . $getdata->price . '</h6>
                                                    <h6><strong>Gst Amount</strong>  : ' . $getdata->gstamt . ' Gst % :'.$getdata->gst.'</h6>
                                                    <h6><strong>Total Price</strong>  : ' . $getdata->totalamt . '</h6>
                                                  
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

<script src="<?php MAINLINK;?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php MAINLINK;?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
  $(function() {
    $("#checkin_date").datepicker({
	  dateFormat: "dd-mm-yy",	
      onClose: function( selectedDate ) {
        $("#checkout_date").datepicker( "option", "minDate", selectedDate );
      }
    });
	
    $("#checkout_date" ).datepicker({
	  dateFormat: "dd-mm-yy",	
      onClose: function( selectedDate ) {
        $("#checkin_date").datepicker( "option", "maxDate", selectedDate );
      }
    });	
	
  });
</script>

<!-- Page level custom scripts -->







</body>



</html>