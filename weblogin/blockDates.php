<?php
include('config.php');
include('header.php');
include('module/date_block.php');

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
    <?php
    $prop_query = mysqli_query($sql, "SELECT `title` from `addproperty` where `id`='$pid'");
    $get_prop = mysqli_fetch_object($prop_query);
    $property_name = $get_prop->title;
    ?>
    Block Dates <span style="margin-left: 15px; color: blue;">(Property Name :
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
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a> Block Dates</a>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Block Dates
                </div>

                <div class="card-body">
                    <form action="" method="get">
                        <div class="table-responsive">

                            <?php
                            $quantity_query = mysqli_query($sql, "SELECT `villaQuantity` from `addproperty` where `id`='$pid'");
                            $get_data_quantity = mysqli_fetch_object($quantity_query);
                            $quantity = $get_data_quantity->villaQuantity;
                            // echo $quantity;
                            ?>
                            <?php

                            if ($quantity > 1) {
                                echo '<div class="col-3 mb-3 forminput" style="float: left;">
                                    <label for="quantity">Villa Quantity<span class="text-danger">*</span></label>';
                                echo '<select name="quantity" id="quantity" class="form-control quantity" required>
                                        <option value="">Select Quantity</option>';
                                for ($i = 1; $i <= $quantity; $i++) {
                                    echo '<option value="' . $i . '"';
                                    if ($_GET['quantity'] == $i) {
                                        echo 'selected="selected"';
                                    }
                                    echo '>' . $i . '</option>';
                                }
                                echo '</select>';
                                echo '</div>';
                            } else {
                                 echo '<input type="hidden" name="hidden_quantity" value="' . $quantity . '"/>';
                            }

                            ?>

                            <div class="col-3 mb-3 forminput" style="float: left;">
                                <label for="title">From Date<span class="text-danger">*</span></label>
                                <!-- <input type="date" id="from_date" class="form-control" name="from_date"
                                    value="<?php echo $from_date; ?>" placeholder="dd-mm-yyyy" required /> -->
                                <input style="height: 30px;" type="text" value="<?php echo $from_date; ?>"
                                    name="from_date" id="from_date" class="form-control" autocomplete="off"
                                    placeholder="Enter Date." required />
                            </div>
                            <div class="col-3 mb-3 forminput" style="float: left;">
                                <label for="title">To Date<span class="text-danger">*</span></label>
                                <!-- <input type="date" id="to_date" class="form-control" name="to_date"
                                    value="<?php echo $to_date; ?>" placeholder="dd-mm-yyyy" required /> -->
                                <input style="height: 30px;" type="text" value="<?php echo $to_date; ?>" name="to_date"
                                    id="to_date" class="form-control" autocomplete="off" placeholder="Enter Date."
                                    required />

                            </div>
                            <div class="col-3 mb-3" style="margin-top: 10px; float: left;">
                                <input type="hidden" name="pid" value="<?php echo $pid; ?>" />

                                <button type="submit" name="datesubmit" id="submit_search" class="btn btn-primary"
                                    style="margin-top: 20px;">Search</button>
                                <a style="margin-top: 20px;" href="blockDates.php?pid=<?php echo $pid; ?>"
                                    name="cancel" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="table-responsive">
                        <form action="" method="post">
                            <?php

                            if (isset($_GET['datesubmit'])) {
                                echo '<table style="width:100%">
                          <tr>
                            <th>Date</th>
                            <th>Villa Quantity 
                            
                            ( <input type="checkbox" class="all_checkbox" id="all_checkbox" /> ALL )
                            </th>
                            <!--<th style="width:5%">Block Date</th>-->
                            <th>Booked Quantity</th>

                          </tr>';
                                $getquantity_query = mysqli_query($sql, "SELECT * from `addproperty` where id='$pid'");
                                $list_quantity_data = mysqli_fetch_object($getquantity_query);
                                $actual_villa_quantity = $list_quantity_data->villaQuantity;

                                $getdate_query = mysqli_query($sql, "SELECT * FROM `awt_blockDates` WHERE `select_date` >= '$from_date' and `select_date` <= '$to_date' and `property_id`='$pid' ORDER BY `select_date` asc");


                                $x = 1;
                                while ($list_data = mysqli_fetch_object($getdate_query)) {

                                    $blockdate_quantity = $list_data->block_quantity;
                                    $total_remain_quantity = $actual_villa_quantity - $blockdate_quantity;

                                    echo '<tr>
                            <td><input type="text" class="form-control" value="' . $list_data->select_date . '" id="select_date' . $x . '" name="select_date' . $x . '" readonly></td>';

                                    // echo '<td><input type="number" id="quantity'.$x.'" name="quantity'.$x.'" min="1" max="'.$total_remain_quantity.'" value="'.$total_remain_quantity.'" style="width:60px !important"></td>';
                            
                                    if ($list_data->blockStatus == 1) {
                                        echo '<td><input type="checkbox" class="form-control individual_checkbox" style="width:20px !important" value="1" checked id="blocked_date' . $x . '" name="blocked_date' . $x . '"></td>';
                                    } else {
                                        echo '<td><input type="checkbox" class="form-control individual_checkbox" style="width:20px !important" value="1" id="blocked_date' . $x . '" name="blocked_date' . $x . '"></td>';
                                    }

                                    if($list_data->block_quantity==''){
                                        echo '<td><input type="text" class="form-control" value="Not Blocked" id="block_quantity' . $x . '" name="block_quantity' . $x . '" readonly></td>';
                                    }
                                    else
                                    {
                                        echo '<td><input type="text" class="form-control" value="' . $list_data->block_quantity . '" id="block_quantity' . $x . '" name="block_quantity' . $x . '" readonly></td>';
                                    }
                                    

                                    echo '</tr>';
                                    $x++;
                                }
                                echo '</table>
                            <div class="col-12 text-right" style="margin-top: 10px;">
                            <input type="hidden" value="' . $pid . '" id="hidden_propid" name ="hidden_propid"/>
                            <input type="hidden" name="row_count" value="' . ($x - 1) . '">
                            <input type="hidden" name="hidden_quantity" id="hidden_quantity" value="'.$hidden_quantity.'"/>
                            <button type="submit" name="blockdate_update" id="submit" class="btn btn-primary">Update</button>
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

    // $('.quantity').on('change', function () {
    //     var optionSelected = $(this).find("option:selected");
    //     var valueSelected = optionSelected.val();
    //     $('#hidden_quantity').val(valueSelected);
    // });

    //on click of search-- bind value
    // $('#submit_search').on('click', function () {
    //     var optionSelected = $('.quantity').find("option:selected");
    //     var valueSelected = optionSelected.val();
    //     $('#hidden_quantity').val(valueSelected);
    //    // alert(valueSelected);
    // });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.quantity').on('change', function () {
        var optionSelected = $(this).find("option:selected");
        var valueSelected = optionSelected.val();
        $('#hidden_quantity').val(valueSelected);
    });
    });
</script>

<script type="text/javascript">
    $("#all_checkbox").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
</script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
    $(function () {
        // $("#from_date").datepicker({
        //     dateFormat: "dd-mm-yy",
        //     changeMonth: true,
        //     changeYear: true,
        //     yearRange: "-100:+0"
        // });

        $("#from_date").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: new Date(),
            onClose: function (selectedDate) {
                $("#to_date").datepicker("option", "minDate", selectedDate);
            }
        });

        $("#to_date").datepicker({
            dateFormat: "yy-mm-dd",
            onClose: function (selectedDate) {
                $("#from_date").datepicker("option", "maxDate", selectedDate);
            }
        });
    });
</script>
</body>

</html>