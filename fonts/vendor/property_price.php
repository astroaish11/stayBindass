<?php
include('config.php');
include('header.php');
include('module/property_price.php');
?>
<!-- Page Heading -->
<style type="text/css">
table{
    width: 100%;
}
table, th, td {
    border: 2px solid #ddd;
    padding: 10px;
}
</style>
<h1 class="h3 topTitle">

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">

        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />

        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />

    </svg>

   Property Price <span style="margin-left: 15px; color: blue;">(Property Name : <?php echo $property_name; ?>)</span>
    <a class="btn btn-primary btn-sm float-right" href="manage_listing.php" role="button">
        List Property
    </a>
</h1>
<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
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
                                <th>Price</th>
                              </tr>
                              <tr>
                                <td>Monday</td>
                                <td><input type="text" class="form-control" value="<?php echo $monday; ?>" id="monday" name="monday" required></td>
                              </tr>
                              <tr>
                                <td>Tuesday</td>
                                <td><input type="text" class="form-control" value="<?php echo $tuesday; ?>" id="tuesday" name="tuesday" required></td>
                              </tr>
                              <tr>
                                <td>Wednesday</td>
                                <td><input type="text" class="form-control" value="<?php echo $wednesday; ?>" id="wednesday" name="wednesday" required></td>
                              </tr>
                              <tr>
                                <td>Thursday</td>
                                <td><input type="text" class="form-control" value="<?php echo $thursday; ?>" id="thursday" name="thursday" required></td>
                              </tr>
                              <tr>
                                <td>Friday</td>
                                <td><input type="text" class="form-control" value="<?php echo $friday; ?>" id="friday" name="friday" required></td>
                              </tr>
                              <tr>
                                <td>Saturday</td>
                                <td><input type="text" class="form-control" value="<?php echo $saturday; ?>" id="saturday" name="saturday" required></td>
                              </tr>
                              <tr>
                                <td>Sunday</td>
                                <td><input type="text" class="form-control" value="<?php echo $sunday; ?>" id="sunday" name="sunday" required></td>
                              </tr>
                            </table>
                            <div class="col-12 text-right" style="margin-top: 10px;">
                                <input type="hidden" value="<?php echo $pid; ?>" id="pid" name="pid">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Price</button>
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
                    <div class="table-responsive">
                        <div class="col-4 mb-4 forminput" style="float: left;">
                            <label for="title">From Date<span class="text-danger">*</span></label>
                            <input type="date" id="from_date" class="form-control" name="from_date" value="<?php echo $from_date;?>" placeholder="dd-mm-yyyy" required />
                        </div>
                        <div class="col-4 mb-4 forminput" style="float: left;">
                            <label for="title">To Date<span class="text-danger">*</span></label>
                            <input type="date" id="to_date" class="form-control" name="title" value="<?php echo $to_date; ?>" placeholder="dd-mm-yyyy" required />
                        </div>
                        <div class="col-4 mb-4" style="margin-top: 10px; float: left;">
                            <button type="submit" name="datesubmit" id="submit" class="btn btn-primary" style="margin-top: 20px;">Search</button>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table>
                          <tr>
                            <th>Date</th>
                            <th>Price</th>
                          </tr>
                          <tr>
                            <td>16-02-2023</td>
                            <td><input type="text" class="form-control" value="<?php echo $monday; ?>" id="monday" name="monday" required></td>
                          </tr>
                          <tr>
                            <td>17-02-2023</td>
                            <td><input type="text" class="form-control" value="<?php echo $tuesday; ?>" id="tuesday" name="tuesday" required></td>
                          </tr>
                        </table>
                        <div class="col-12 text-right" style="margin-top: 10px;">
                            <button type="submit" name="priceupdate" id="submit" class="btn btn-primary">Update</button>
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
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script type="text/javascript" src="js/pages/masthead.js"></script>
<script type="text/javascript">
    $('.deleteme').click(function() {
        return confirm("Are you sure you want to delete?");
    });

    $(document).ready(function() {
        $('.fadediv').delay(3000).fadeOut();
    });
</script>
</body>

</html>