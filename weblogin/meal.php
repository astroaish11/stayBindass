<?php

include('config.php');
include('header.php');

$vid = $_GET['vid'];
$oid = $_GET['oid'];


include('module/mealplan.php');

$queryvilla = mysqli_query($sql, "SELECT g.*, ap.title as villaname, ap.actualtitle as ogvillaname FROM `awt_vgallery`as g left join `addproperty` as ap on ap.id = g.v_id
WHERE g.deleted != '1' and v_id='$vid'");

$getvilla_name = mysqli_fetch_object($queryvilla);
$villaname =  $getvilla_name->villaname;


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
<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg"
        viewBox="0 0 16 16">
        <path
            d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path
            d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
   Meal Plan - <?php echo $villaname;?>
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
    <a class="btn btn-primary btn-sm float-right mx-2" href="addProperties.php?eid=<?php echo $_GET['vid'];?>" role="button">
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
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Meal Plan</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid ">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
        <div class="card mb-4">
            <div class="row mt-3" style="margin-left:2px">
\            <button class="tablink"><a href="gallery.php?vid=<?php echo $vid; ?>">Gallery</a></button>
            <button class="tablink"><a href="meal.php?vid=<?php echo $vid; ?>">Meal Plan</a></button>
            <!-- <button class="tablink"><a href="location.php?vid=<?php echo $vid; ?>">Location</a></button> -->
            <button class="tablink"><a href="villafaq.php?vid=<?php echo $vid; ?>">Villa FAQ</a></button>
            <button class="tablink"><a href="blockDates.php?pid=<?php echo $vid; ?>">Block Dates</a></button>
            <button class="tablink"><a href="property_price.php?pid=<?php echo $vid; ?>">Add Price</a></button>
            </div>

    
            <!-- <div class="card-header">
               

 Begin Page Content -->

<div class="container-fluid">
    <div class="card mb-4 col-12">
    
    <form action="" method="post" enctype="multipart/form-data">

             <div class="row mt-2">
            <div class="col-lg-6">
                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header">
                        Veg
                    </div>
                    <div class="card-body">                      
                         <div class="row">
                                <div class="col-12">
                                    <p style="font-weight:500;">All meal</p>
                                </div>
                                <div class="col-6">
                                    <label for="adult1">Adult</label>
                                    <input type="text" class="form-control" value="<?php echo $adult1;?>" id="adult1_price"
                                        placeholder="Enter Price" name="adult1_price" >
                                    <div id="adult1_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-6">
                                    <label for="child1">Child</label>
                                    <input type="text" class="form-control" value="<?php echo $child1;?>" id="child1_price"
                                        placeholder="Enter Price" name="child1_price" >
                                    <div id="child1_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-12 mt-3">
                                    <p style="font-weight:500;">Any two meal</p>
                                </div>


                                <div class="col-6">
                                    <label for="adult2">Adult</label>
                    
                                    <input type="text" class="form-control" value="<?php echo $adult2;?>" id="adult2_price"
                                        placeholder="Enter Price" name="adult2_price" >
                                    <div id="adult2_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-6">
                                    <label for="child2">Child</label>
                                    
                                    <input type="text" class="form-control" value="<?php echo $child2;?>" id="child2_price"
                                        placeholder="Enter Price" name="child2_price" >
                                    <div id="child2_err" class="errordiv text-danger"></div>
                                </div>
                            </div>                       
                    </div>
                </div>
            </div>
           
            <div class="col-lg-6">
                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header">
                        Non Veg
                    </div>
                    <div class="card-body">                       
                      <div class="row">
                                <div class="col-12">
                                    <p style="font-weight:500;">All meal</p>
                                </div>
                                <div class="col-6">
                                    <label for="adult3">Adult</label>
                                   
                                    <input type="text" class="form-control" value="<?php echo $adult3;?>" id="adult3_price"
                                        placeholder="Enter Price" name="adult3_price" >
                                    <div id="adult3_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-6">
                                    <label for="child3">Child</label>
                                    
                                    <input type="text" class="form-control" value="<?php echo $child3;?>" id="child3_price"
                                        placeholder="Enter Price" name="child3_price" >
                                    <div id="child3_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-12 mt-3">
                                    <p style="font-weight:500;">Any two meal</p>
                                </div>


                                <div class="col-6">
                                    <label for="adult4">Adult</label>
                                    
                                    <input type="text" class="form-control" value="<?php echo $adult4;?>" id="adult4_price"
                                        placeholder="Enter Price" name="adult4_price" >
                                    <div id="adult4_err" class="errordiv text-danger"></div>
                                </div>

                                <div class="col-6">
                                    <label for="child4">Child</label>
                                    
                                    <input type="text" class="form-control" value="<?php echo $child4;?>" id="child4_price"
                                        placeholder="Enter Price" name="child4_price" >
                                    <div id="child4_err" class="errordiv text-danger"></div>
                                </div>
                            </div>                   
                    </div>
                </div>
            </div>
        </div>       
            <div class="col-12">
                <label for="pdf">Upload Pdf</label>
                <input type="file" class="form-control mb-2" value="" id="pdf" placeholder="" name="pdf" >
                <?php 
                    if($image != '') {
                        echo '<img src="'.$path.$image.'" alt="" height="100px;" />'; 
                    }
                    ?>
                <div id="pdf" class="errordiv text-danger"></div>
            </div>
            <div class="col-12">
                <label for="desc">Short Description</label>
                <textarea type="text" class="form-control" id="desc" placeholder="Enter Short Description" name="desc"
                    required><?php echo $desc;?></textarea>
                <div id="desc" class="errordiv text-danger"></div>
            </div>
            <div class="col-12 text-right mt-3 mb-3">
            <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
            <input type="hidden" name="vid" value="<?php echo $vid;?>" />
             <input type="hidden" name="image" value="<?php echo $image; ?>">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
           
        </div>
        
    </form>
    <?php echo $alertMessage;?>

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
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('desc');

    var config = {
        '.chosen-select': { search_contains: false, enable_split_word_search: false },
        '.chosen-select-deselect': { allow_single_deselect: true },
        '.chosen-select-no-single': { disable_search_threshold: 10 },
        '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
        '.chosen-select-rtl': { rtl: true },
        '.chosen-select-width': { width: '95%' }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

</script>

</body>

</html>