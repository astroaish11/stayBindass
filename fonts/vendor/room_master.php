<?php
include('config.php');
include('header.php');
include('module/room-master.php');
?>
<!-- Page Heading -->

<h1 class="h3 topTitle">

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">

        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />

        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />

    </svg>

    Bedroom Type

</h1>
<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Bedroom </a>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Bedroom 
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 mb-4 forminput">
                                <label for="room">Bedroom Type<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="<?php echo $room; ?>" id="room" placeholder="Enter city" name="room"             required>
                                <div id="city_err" class="errordiv text-danger"></div>
                            </div>



                            <div class="col-12 text-right">
                                <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                                <input type="hidden" value="<?php echo $image; ?>" id="image" name="image">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                                <a href="city_mast.php" name="cancel" class="btn btn-danger">Cancel</a>
                            </div>
                            <?php echo $alertMessage; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                Bedroom  Listing
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Bedroom Type</th>

                                    <th class="text-center" width="10%">Edit</th>
                                    <th class="text-center" width="10%">Delete</th>
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
                                        <td>'.$getdata->room.'</td>
                                        <td class="text-center">
                                            <a href="room_master.php?eid='.$getdata->id.'" class="btn btn-icon-split btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="room_master.php?did='.$getdata->id.'" class="btn btn-icon-split btn-sm text-danger deleteme">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>';
                                 $x++;
                                }
                                  
                              }
                              else 
                              {
                                echo '<tr><td colspan="4">No Record Found</td></tr>';
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