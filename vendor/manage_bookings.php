<?php
include('config.php');
include('header.php');

?>

<head>
    <link rel="stylesheet" href="abhishek_style.css">
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
    Manage Bookings
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Manage Bookings</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Booking
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-2 mb-4  forminput">
                                <label for="date_range">Date Range </label><br>
                                <select name="data_range" id="data_range" class="form-control">
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

                            <div class="col-2 mb-4  forminput">
                                <label for="property">Property </label><br>
                                <select name="property" id="property" class="form-control">
                                    <option value="0">All</option>
                                    <div id="property_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-2 mb-4  forminput">
                                <label for="cust">Customer </label><br>
                                <select name="cust" id="cust" class="form-control">
                                    <option value="0">All</option>
                                    <div id="cust_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-2 mb-4  forminput">
                                <label for="status">Status </label><br>
                                <select name="status" id="status" class="form-control">
                                    <option value="0">All</option>
                                    <option value="1">Accepted</option>
                                    <option value="2">CAncelled</option>
                                    <div id="status_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-4 text-right d-flex align-items-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Filter</button>
                                <button type="reset" id="reset" name="reset" class="btn btn-danger ml-2">Reset</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="forminput">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="panel">
                                    <div class="panel-body text-center">
                                        <span class="text-20">34</span><br>
                                        <span class="total-payouts">Total Bookings</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="panel">
                                    <div class="panel-body text-center">
                                        <span class="text-20">6</span><br>
                                        <span class="total-payouts">Total Customers</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="panel">
                                    <div class="panel-body text-center">
                                        <span class="text-20">$ 2005</span><br>
                                        <span class="specificText">Total <span class="total-payouts"> USD</span>
                                            amount</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 mt-2">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    <!-- Bookings
                    <a class="btn btn-primary btn-sm float-right" href="manage_users.php" role="button">Add Customer
                    </a> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Host Name</th>
                                    <th>Guest Name</th>
                                    <th>Property Name</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Albert</td>
                                    <td>Hot Air Ballon Safari</td>
                                    <td>$ 82</td>
                                    <td>Processing</td>
                                    <td>02-09-2022 12:48 PM</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                </tr>

                                <tr>
                                    <td>John</td>
                                    <td>Albert</td>
                                    <td>Hot Air Ballon Safari</td>
                                    <td>$ 82</td>
                                    <td>Cancelled <br> <span class="btn-primary">Refund</span> </td>
                                    <td>02-09-2022 12:48 PM</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header">
                    Booking Details
                </div>
                <div class="card-body">
                    <div class="col-6 mb-4">
                        <label for="name">Experience Name </label>
                        <input type="text" class="form-control" id="eName" placeholder="Experience Name" name="eName"
                            value="Hot Air Ballon Safari" readonly>
                        <div id="eName_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="hName">Host Name </label>
                        <input type="text" class="form-control" id="hName" placeholder="Host Name" name="hName" value="John"
                            readonly>
                        <div id="hName_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="gName">Guest Name </label>
                        <input type="text" class="form-control" id="gName" placeholder="Guest Name" name="gName" value="Albert"
                            readonly>
                        <div id="gName_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="checkIn">Checkin </label>
                        <input type="text" class="form-control" id="checkIn" placeholder="Checkin" name="checkIn" value="07-12-2022"
                            readonly>
                        <div id="checkIn_err" class="errordiv text-danger"></div>
                    </div>
                    

                    <div class="col-6 mb-4">
                        <label for="no_of_guests">Number of guests </label>
                        <input type="text" class="form-control" id="no_of_guests" placeholder="Number of guests" name="no_of_guests" value="1"
                            readonly>
                        <div id="no_of_guests_err" class="errordiv text-danger"></div>
                    </div>
                    

                    <div class="col-6 mb-4">
                        <label for="duration">Duration </label>
                        <input type="text" class="form-control" id="duration" placeholder="Duration" name="duration" value="3 Hours"
                            readonly>
                        <div id="duration_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="time">Time </label>
                        <input type="text" class="form-control" id="time" placeholder="Time" name="time" value="10:00 AM-01:00 PM"
                            readonly>
                        <div id="time_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="sub_total_amt">Sub Total amount </label>
                        <input type="text" class="form-control" id="sub_total_amt" placeholder="Sub Total Amount" name="sub_total_amt" value="$82"
                            readonly>
                        <div id="sub_total_amt_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="iva_tax">I.V.A Tax </label>
                        <input type="text" class="form-control" id="iva_tax" placeholder="I.V.A Tax" name="iva_tax" value="$4"
                            readonly>
                        <div id="iva_tax_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="accom_tax">Accomodation Tax </label>
                        <input type="text" class="form-control" id="accom_tax" placeholder="Accomodation Tax" name="accom_tax" value="$4"
                            readonly>
                        <div id="accom_tax_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="serviceFee">Service fee </label>
                        <input type="text" class="form-control" id="serviceFee" placeholder="Service Fee" name="serviceFee" value="$4"
                            readonly>
                        <div id="serviceFee_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="hFee">Host fee </label>
                        <input type="text" class="form-control" id="hFee" placeholder="Host fee" name="hFee" value="$4"
                            readonly>
                        <div id="hFee_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="total_amt">Total amount </label>
                        <input type="text" class="form-control" id="total_amt" placeholder="Total amount" name="total_amt" value="$82"
                            readonly>
                        <div id="total_amt_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="currency">Currency </label>
                        <input type="text" class="form-control" id="currency" placeholder="Currency" name="currency" value="USD"
                            readonly>
                        <div id="currency_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="paymode">Paymode </label>
                        <input type="text" class="form-control" id="paymode" placeholder="Paymode" name="paymode" value="John"
                            readonly>
                        <div id="paymode_err" class="errordiv text-danger"></div>
                    </div>

                    <div class="col-6 mb-4">
                        <label for="status">Status </label>
                        <input type="text" class="form-control" id="status" placeholder="Status" name="status" value="Processing"
                            readonly>
                        <div id="status_err" class="errordiv text-danger"></div>
                    </div>
                    

                    <div class="col-6 mb-4">
                        <label for="transactionId">Transaction ID </label>
                        <input type="text" class="form-control" id="transactionId" placeholder="Transaction Id" name="transactionId" value="$6.00"
                            readonly>
                        <div id="transactionId_err" class="errordiv text-danger"></div>
                    </div>
                    <a class="btn btn-primary float-right" href="manage_bookings.php" role="button">Back</a>
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