<?php
include('config.php');
include('header.php');
//include('module/addpage.php');


$getdata = mysqli_query($sql, "SELECT * FROM `static_pages` WHERE `deleted` != 1 "); 


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
  Pages

  <!-- <a class="btn btn-primary btn-sm float-right" href="add_page.php" role="button">
    Add Page
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
  <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Pages</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-12">

      <!-- Default Card Example -->
      <div class="card mb-4">
        <div class="card-header">
        Static Pages Listing
        <!-- <a href="add_page.php" name="addpage" class="btn btn-primary">Add Page</a> -->

          <!-- <a class="btn btn-primary btn-sm float-right" href="add_page.php" role="button">Add Pages</a> -->
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center" width="10%" >Sr. No</th>
                  <th >Page Name</th>
                  <th class="text-center" width="5%">Edit</th>
                  <th class="text-center" width="5%">Delete</th>
                </tr>
              </thead>
              <tbody>

                   <?php
                           $x = 1;
                         while($listdata = mysqli_fetch_object($getdata)) 
                          {
                            echo '<tr>';
                            echo '<td style="text-align:center">'.$x.'</td>';
                            echo '<td>'.$listdata->title.'</td>';
                            echo '  <td><center><a href="add_page.php?pid='.$listdata->id.'"><i class="fa fa-edit"></i></a></center></td>';
                            echo '<td><center> <a href="static_page.php?did='. $listdata->id .'" class="btn btn-icon-split btn-sm text-danger deleteme">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                            </a></center></td>'; 
                            echo '</tr>';
                            
                            $x++;
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

















