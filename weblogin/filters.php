<?php
include('config.php');
include('header.php');
include('module/filters.php');

?>


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
        /*background-color: red;*/
        background-color: green;
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

    input:checked+.slider {
        /*background-color: green;*/
        background-color: red;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
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

<!-- Page Heading -->

<h1 class="h3 topTitle">

  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
    viewBox="0 0 16 16">

    <path
      d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />

    <path
      d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />

  </svg>

  Property Category

</h1>



<div class="breadcrumb">

  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
    viewBox="0 0 16 16">

    <path fill-rule="evenodd"
      d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />

    <path fill-rule="evenodd"
      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />

  </svg>

  <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Property Category</a>

</div>



<!-- Begin Page Content -->

<div class="container-fluid">



  <div class="row">

    <div class="col-lg-6">



      <!-- Default Card Example -->

      <div class="card mb-4">

        <div class="card-header">

        Add Property Category

        </div>

        <div class="card-body">

          <form action="" method="post" enctype="multipart/form-data">

            <div class="row">

              <div class="col-12 mb-4 forminput">

                <label for="title">Title<span class="text-danger">*</span></label>

                <input type="text" class="form-control" value="<?php echo $title;?>" id="title"
                  placeholder="Enter Title" name="title" required>

                <div id="title_err" class="errordiv text-danger"></div>

              </div>

              <div class="col-12 mb-4 forminput">

                <label for="icon">Icon Upload<span class="text-danger">*</span></label>

                <?php 
                if($eid!=''){
                  echo'<input type="file" id="icon" class="form-control" name="icon">';

                }else{

                  echo'<input type="file" id="icon" class="form-control" name="icon" required>';
                }
                ?>

                

                <div id="icon_err" class="errordiv text-danger"></div>
                <?php 
                  if($image != '') {
                      echo '<img src="'.$path.$image.'" alt="" height="100px;" />'; 
                  }
               ?>

              </div>


              <div class="col-12 text-right">
                <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                <input type="hidden" value="<?php echo $image; ?>" id="image" name="image">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>

                <a href="filters.php" name="cancel" class="btn btn-danger">Cancel</a>

              </div>
              <?php echo $alertMessage;?>
            </div>

          </form>




        </div>

      </div>



    </div>



    <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                Property Category Listing
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">Sr.No.</th>
                                    <th>Title</th>
                                    <th class="text-center" width="10%">Edit</th>
                                    <th class="text-center" width="10%">Delete</th>
                                    <th class="text-center" width="10%">Disable</th>
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
                                    <td>'.$getdata->title.'</td>
                                    <td class="text-center">
                                        <a href="filters.php?eid='.$getdata->id.'" class="btn btn-icon-split btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="filters.php?did='.$getdata->id.'" class="btn btn-icon-split btn-sm text-danger deleteme">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>';

                                    if ($getdata->propcat_status == 1) {
                                      echo '<td>
                                          <label class="switch">
                                              <input type="checkbox" data-id="'. $getdata->id .'" class="propCategory" checked="checked">
                                              <span class="slider round"></span>
                                          </label>
                                          </td>';
                                    } else {
                                      echo '<td>
                                          <label class="switch">
                                              <input type="checkbox" data-id="'. $getdata->id .'" class="propCategory">
                                              <span class="slider round"></span>
                                          </label>
                                      </td>';
                                  }

                                  echo'</tr>';
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

<script type="text/javascript">
    $(document).ready(function () {

        // Destination Disable Status validation -----------


        $('.propCategory').click(function () {
            var retVal = confirm("Are you sure you want to Change the Status ?");
            if (retVal == true) {
                var id = $(this).attr('data-id');
                var dataString = 'propCatstatusid=' + id;
                //alert(dataString);
                $.ajax({
                    type: "POST",
                    url: "ajax_function1.php",
                    data: dataString,
                    cache: false,
                    success: function (data) {
                        if(data=="success") 
                        {
                            alert("Data is already Used in Property. If You Wish to disable, first change its Dependant data");

                            window.location.href="filters.php";
                        }             
                    }
                });
            } else {
                window.location.href = "";
            }
        });

    });

</script>

<script src="vendor/datatables/jquery.dataTables.min.js"></script>

<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



<!-- Page level custom scripts -->

<script src="js/demo/datatables-demo.js"></script>

<script type="text/javascript" src="js/pages/masthead.js"></script>






</body>



</html>