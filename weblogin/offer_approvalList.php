<?php
include('config.php');
include('header.php');
include('function.php');

$query = mysqli_query($sql, "SELECT a.*, r.room, v.name as vendorname, b.bhk as bhkname, d.title as titlename, s.name, c.city as cityname 
                        from `addproperty` as a 
                        left Join `room_master` as r on r.id = a.r_type 
                        left Join `vendor_master` as v on v.id = a.property_by 
                        left Join `bhk_master` as b on b.id = a.bhk 
                        left Join `destination_master` as d on d.id = a.destination 
                        left Join `awt_states` as s on s.id = a.state 
                        left Join `city_master` as c on c.id = a.city 
                        where a.deleted != 1 and a.offerApproval=0");



$count = mysqli_num_rows($query);

?>

<head>
    <style>
        .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 30px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: red;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: green;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
/* Rounded sliders */
.slider.round {
  border-radius: 28px;
}

.slider.round:before {
  border-radius: 50%;
}
    </style>

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
    Property Offer Approval List
    <a class="btn btn-primary btn-sm float-right" href="manage_listing.php" role="button">
        Property List
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
    <a>Property Offer Approval List</a>
</div>


<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="display: none;">
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
            Offer Approval Pending List (<?php echo $count; ?>)
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
                                <th>Price</th>
                                <th>View</th>
                               
                             <!-- <th>Add Price</th>  -->
                                <th>Approve</th>
                                <!-- <th class="text-center" width="5%">Edit</th>
                                <th class="text-center" width="5%">Delete</th> -->
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                            if($count > 0)
                            {
                                $x = 1;
                                while($getdata = mysqli_fetch_object($query)){

                                    $bhk_name = $getdata->bhkname;
                                    $destination = $getdata->titlename;
                                    $statename = $getdata->name;
                                    $city_name = $getdata->cityname;
                                    $price = propertyPerNightPrice($sql, $getdata->id);

                                echo '<tr>
                                <td>'.$x.'</td>
                                <td>'.$getdata->vendorname.'</td>
                                <td>'.$getdata->title.'</td>                            
                                <td>'.$destination.'</td>
                                <td>'. $price.'</td>
                                
                                <td class="text-center">
                                        <a href="addProperties.php?eid='.$getdata->id.'">View </a>
                                 </td>';
                             
                                if($getdata->aofferApproval == 1){
                                    echo'<td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="'.$getdata->id.'" class="offerStatus" checked="checked">
                                        <span class="slider round"></span>
                                    </label>
                                </td>';
                                }
                                else
                                {
                                    echo '<td>
                                    <label class="switch">
                                        <input type="checkbox" data-id="'.$getdata->id.'" class="offerStatus">
                                        <span class="slider round"></span>
                                    </label>
                                </td>';
                                }
                        
                        echo '</tr>';
                            $x++;
                        }
                            
                        }
                        else 
                        {
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
  $(document).ready(function(){

        //Offer Status validation -----------


    $('.offerStatus').click(function()
    {
        var retVal = confirm("Are you sure you want Approve ??");
        if(retVal == true )
        {
            var id = $(this).attr('data-id');
            var dataString = 'offerStatusid='+id;
            //alert(dataString);
            $.ajax({
               type: "POST",
               url: "ajax_function.php",
               data: dataString,
               cache: false,
               success: function(data){
                    //alert(data);              
                }
            });
        } else {
            window.location.href="";
           }
    });

    
  });

</script>

<!-- Page level custom scripts -->







</body>



</html>