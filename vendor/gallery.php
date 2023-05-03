<?php
include('config.php');
include('header.php');

$vid = $_GET['vid'];
$oid = $_GET['oid'];

include('module/galleryinfo.php');

/******Query******/
$query = mysqli_query($sql, "SELECT * FROM `awt_vgallery` WHERE deleted != '1' and v_id='$vid'");  
$gallerycount = mysqli_num_rows($query);

$queryvilla = mysqli_query($sql, "SELECT g.*, ap.title as villaname, ap.actualtitle as ogvillaname FROM `awt_vgallery`as g 
left join `addproperty` as ap on ap.id = g.v_id
WHERE g.deleted != '1' and v_id='$vid'");

$getvilla_name = mysqli_fetch_object($queryvilla);
$villaname =  $getvilla_name->villaname;
$villactualaname =  $getvilla_name->ogvillaname;
  
?>

<head>
    <style>
       .tablink {
            background-color: #dfd7d7;
            color: black;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 9px 10px;
            font-size: 17px;
            width: 11%;
            margin: 10px;
            border-radius: 5px;
        }

        .tablink a {
            text-decoration: underline;

        }

        .tablink:hover {
            background-color: #e4e4e4;
            border: 1px solid #e4e4e4;
            border-bottom: none;
        }
    </style>
</head>
<!-- Page Heading -->

<link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" rel="stylesheet"
  type="text/css">
<link href="https://codepen.io/fancyapps/pen/Kxdwjj.css" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>



<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">
        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
   Gallery -  <?php echo $villaname ;?>
       <?php 
    if($_GET['oid']){
        echo'<a class="btn btn-primary btn-sm float-right" href="manage_listing.php" role="button">
        List Property
    </a>';
    }else{
        echo'<a class="btn btn-primary btn-sm float-right" href="manage_listing.php" role="button">
        List Property
    </a>';
    }
    ?>
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Gallery</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid ">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
        <div class="card mb-4">
            <div class="row mt-3" style="margin-left:2px">
            <button class="tablink"><a href="addProperties.php?eid=<?php echo $vid; ?>">Overview</a></button>
            <button class="tablink"><a href="gallery.php?vid=<?php echo $vid; ?>">Gallery</a></button>
            <button class="tablink"><a href="meal.php?vid=<?php echo $vid; ?>">Meal Plan</a></button>         
            <button class="tablink"><a href="villafaq.php?vid=<?php echo $vid; ?>">Villa FAQ</a></button>
            </div>

    
            <!-- <div class="card-header">
                Gallery
            </div> -->
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">

               <!-- Default Card Example -->

                    <div class="card mb-4">
                        <div class="card-header">
                            Update Gallery
                        </div>
                            <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                        
                                <div class="col-12 mb-4 forminput">
                                    <label>Upload Multiple Images <span class="red">*</span></label><br>
                                    <input type="file" id="file" name="image[]" id="file" multiple  <?php if($eid == '') {echo 'required';} ?> >
                                    <?php if($imagefile1 != '') {echo '<span>'.$imagefile1.'</span>';} ?>
                         
                                    </div>
              

                            <div class="col-12 text-right">
                                <input id="eid" type="hidden" name="eid" value="<?php echo $eid;?>" />
                                <input type="hidden" name="vid" value="<?php echo $vid;?>" />
                                <!-- <input type="hidden" name="image" value="<?php echo $image; ?>"> -->
                                <input type="hidden" name="imagepath1" value="<?php echo $imagefile1; ?>" />
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-primary">Submit</button>
                                <button type="reset" name="reset" id="reset"
                                    class="btn btn-danger">Reset</button>
                            </div>
                            </div>
                        </form>
                        <?php echo $alertMessage; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">

                <!-- Default Card Example -->

            <div class="card mb-4">
                <div class="card-header">
                    Gallery Listing(<?php echo $gallerycount;?>)
                   
                    
                </div>

              

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">Sr.No.</th>
                                    <th>Select All ( <input type="checkbox" class="all_checkbox" id="all_checkbox" /> )</th>
                                    <th>Images</th>
                                    <th class="text-center" width="10%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              if($gallerycount > 0)
                              {
                                  $x = 1;
                                  while($getdata = mysqli_fetch_object($query)){
                                    echo '<tr>
                                    <td>'.$x.'</td> 
                                    <td><input type="checkbox" class="form-control individual_checkbox" style="width:20px !important" value="'.$getdata->id.'"></td>                     
                                    <td class="text-center">
                                        <a href="../upload/vgallery/' . $getdata->logo . '" data-fancybox="preview" data-width="1500" data-height="1000" ><img src="../upload/vgallery/' . $getdata->logo .'" style ="height: 50px; width: 50px;"></i>
                                        </a>
                                    </td>                             
                                    <td class="text-center">
                                        <a href="gallery.php?vid='.$vid.'&did='.$getdata->id.'" class="btn btn-icon-split btn-sm text-danger deleteme">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                  </tr>';
                                  $x++;
                                }
                                echo'<div >  
                                <form action="" method="post"> 
                                  <input type="hidden" name="vid" value="'.$vid.'" />
                                  <input type="hidden" value="" id="chkArray" name="chkArray">
                                  <button type="submit" name="deleteall" id="deleteall" class="btn btn-primary float-right">Delete All</button>
                                </form>
                                </div>';
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
                </form>
              </div>
            </div>
         </div>
    </div>




<!-- /.container-fluid -->

<?php
include('footer.php');
?>

<script >    
$(document).ready(function() {
$('.fadediv').delay(3000).fadeOut();

$('[data-fancybox="preview"]').fancybox({
      thumbs: {
        autoStart: true
      }
    });

});

</script>
<script type="text/javascript">
    $("#all_checkbox").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });

    $('body').on('click', '#deleteall', function(){
        var chkArray = [];
        $(".individual_checkbox:checked").each(function() {
            chkArray.push($(this).val());
        });
        $("#chkArray").val(chkArray);
        if (chkArray === undefined || chkArray.length == 0) {
            alert("Please select atleast 1 record");
            return false; 
        } else {
            if(confirm("Are you sure you want to delete?")) {
                                
                /*window.location.assign("addservices.php");*/
            }else{

                window.location.assign("gallery.php?vid=<?php echo $vid; ?>");

            }
        }

     });
</script>


</body>

</html>