<?php
include('config.php');
include('header.php');
// include('module/addproperty.php');

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
   Booking Details
    <a class="btn btn-primary btn-sm float-right" href="booking.php" role="button">
        Booking List
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
    <a>Booking Details</a>
</div>


<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="scontainer">
                                <h4 style="text-decoration:underline">Booking Details</h4>
                                <p><strong>Customer Name : </strong>varsha kadage</p>
                                <!--<p><strong>Address : </strong>Jogeshwari , east, , , 400021</p>-->
                                <p><strong>Address : </strong>Jogeshwari , east - 400021</p>
                                <p><strong>Mobile No. : </strong>8422091076</p>
                                <p><strong>Email : </strong>v@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="scontainer">
                                <h4 style="text-decoration:underline">Booking Detail</h4>
                                <p><strong>Booking No : </strong>ORG-202302-5</p>
                                <p><strong>Booking Date : </strong>16-02-2023</p>
                                <p><strong>Booking Amount : </strong> Rs. 550.00</p>
                                <p><strong>Booking Status : </strong> Success</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="scontainer">
                                <h4 style="text-decoration:underline">Payment Details</h4>
                                <p><strong>Payment mode :</strong>
                                    Online payment </p>
                                <p><strong>Payment Status :</strong> Paid </p>
                                <!--<p><strong>Delivery Date :</strong>  </p>
                  <form method="post" action="">
                      <input type="text" id="datepicker" class="" value="" name="ddchangedate" placeholder="Change Delivery Date" style="height: 34px; border-radius: 1px; border: 1px solid #ddd; padding: 0 7px;" required />
                      <input type="submit" value="Update" name="changeddate" class="btn btn-primary" style="margin-top: -3px;">
                  </form>-->
                                <p><strong>Transaction Id :</strong> pay_LH3YD4hk21B5Dj - <strong>Rs. 550</strong> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <!-- <div class="card-header">
                  Booking  Property Listing (
                    <?php //echo $count; ?>)
                </div> -->
                <div class="card-body">
                    <div style="margin:0;" class="row">
                        <div>
                            <h4 style="float: left; margin-bottom: 10px;"><strong>Booking Property Detail :</strong></h4>
                            <!--<a href="addproduct.php?oid=29" class="btn btn-primary" style="float: right; margin-top: -10px; margin-bottom: 10px;">Add Product</a>-->
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="display:none"></th>
                                    <th>Sr No.</th>
                                    <th>Type</th>
                                    <th>Villa Name</th>
                                    <th>Booking Date</th>
                                    <th>Execution Time</th>
                                    <th>Location</th>
                                    <th>Total</th>
                                    <th>Booking No.</th>
                                    <th>Amount</th>
                                    <!--<th style="width: 50px;">Delete</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="display:none;"></td>
                                    <td>1</td>
                                    <td>Villa</td>
                                    <td>Villa sb 001</td>
                                    <td>16-02-2023</td>
                                    <td></td>
                                    <td>Mumbai</td>
                                    <td>550</td>
                                    <td></td>
                                    <td><span class="newtotalsingle">550.00</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8">Booking Amount</td>
                                    <td><span id="tordamt">550.00</span></td>
                                </tr>
                                <!--<tr>
                    <td colspan="5">Discount Amount </td>
                    <td><span id="tdisamt"></span></td>
                    <td></td>
                  </tr>-->
                                <tr>
                                    <td colspan="8">Discount Amount </td>
                                    <td><span id="tshipamt">0</span></td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="8">Paid Amount</td>
                                    <td><span id="paidamt">550.00</span></td>

                                </tr>
                                <!--<tr>
                    <td colspan="5">GST 5%</td>
                    <td>
                                            </td>
                    <td></td>
                  </tr>-->
                                <tr>
                                    <td colspan="8"><b>Total Amount</b></td>
                                    <td><b><span id="ttotalamt">
                                                550.00 </span></b></td>

                                </tr>
                            </tfoot>
                        </table>
                        <!--<div style="padding-left:0; margin-top:15px;" class="col-md-2">
                <label>Crate No</label>
                <input value="" class="crate_no" data-id="29"> </div>
              <div style="padding-left:0; margin-top:15px;" class="col-md-5">
                <label>Note :</label>
                <div>
                  <p></p>
                </div>
              </div>-->
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