<?php
include('config.php');
include('header.php');
include('module/addproperty.php');
?>

<style>
    .tablink {
        background-color: #dfd7d7;
        color: black;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 6px 10px;
        font-size: 17px;

        margin: 10px;
        border-radius: 5px;
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
    Add Property

    <a class="btn btn-primary btn-sm float-right" href="manage_listing.php" role="button">
        List Property
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
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Property</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Property

                    <?php if ($eid != '') {
                        echo '<button class="tablink float-right"  >
                        <a  href="gallery.php?vid=' . $getdata->id . '" role="button">
                           Gallery
                        </a> </button>
                        <button class="tablink float-right"  >
                        <a  href="meal.php?vid=' . $getdata->id . '" role="button">
                            Meal Plan
                        </a> </button>
                        <button class="tablink float-right"  >
                        <a  href="villafaq.php?vid=' . $getdata->id . '" role="button">
                            Villa FAQ
                        </a> </button>';
                    } else {

                    }

                    ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">

                        <?php $vendorname = $_SESSION[SESSION]['name'];?>
                            <div class="col-4 mb-4  forminput">
                                <label for="vendor">Vendor</label><br>
                                <input type="text" id="vendor" class="form-control" name="vendor"
                                    value="<?php echo $vendorname; ?>" placeholder="" readonly />                           
                            </div>
                            <div class="col-4 mb-4 forminput">
                                <label for="title">Actual Villa Name<span class="text-danger">*</span></label>
                                <input type="text" id="actualtitle" class="form-control" name="actualtitle"
                                    value="<?php echo $actualtitle; ?>" placeholder="Enter Villa Name" required />
                                <div id="actualtitle-error" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4 forminput">
                                <label for="title">Villa Code Name<span class="text-danger">*</span></label>
                                <input type="text" id="title" class="form-control" name="title"
                                    value="<?php echo $title; ?>" placeholder="Enter Code Name" required />
                                <div id="title-error" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4 forminput">
                                <label for="slug">Slug<span class="text-danger">*</span></label>
                                <input type="text" id="slug" class="form-control" name="slug"
                                    value="<?php echo $slug; ?>" placeholder="Enter Property Slug" readonly required />
                                <div id="slug-error" class="errordiv text-danger"></div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 mb-4  forminput">
                                <label for="text">Address<span class="text-danger">*</span></label> <br>
                                <textarea name="address" id="address" placeholder="" class="form-control" row="4"
                                    required><?php echo $address; ?></textarea>
                                <div id="add_err" class="errordiv text-danger"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 mb-4 forminput">
                                <label for="lang">Select State <span class="text-danger">*</span></label><br>
                                <select name="state" id="state" class="form-control">
                                    <option value="">Select State</option>
                                    <?php states($sql, $state) ?>
                                </select>
                                <div id="state_err" class=" errordiv text-danger"></div>
                            </div>


                            <div class="col-3 mb-4  forminput">
                                <label for="city">City<span class="text-danger">*</span> </label> <br>
                                <select name="city" id="city" placeholder="" class="form-control">
                                    <option value="">Select City</option>
                                    <?php if ($eid != '') { ?>
                                        <?php city($sql, $state, $city); ?>
                                    <?php } ?>

                                    <div id="city_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 mb-4 forminput">
                                <label for="title">Latitude <span class="text-danger">*</span></label>
                                <input type="text" id="latitude" class="form-control" name="latitude"
                                    value="<?php echo $latitude; ?>" placeholder="Enter Latitude" required />
                                <div id="title-error" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-3 mb-4 forminput">
                                <label for="title">Longitude<span class="text-danger">*</span></label>
                                <input type="text" id="longitude" class="form-control" name="longitude"
                                    value="<?php echo $longitude; ?>" placeholder="Enter Longitude" required />
                                <div id="title-error" class="errordiv text-danger"></div>
                            </div>

                        </div>

                        <div class="row">                        
                            <div class="col-3 mb-4  forminput">
                                <label for="room_type">Bedroom<span class="text-danger">*</span> </label><br>
                                <select name="room_type" id="room_type" class="form-control">
                                    <option value="">Select Bedroom</option>
                                    <?php room($sql, $r_type); ?>
                                    <div id="room_type_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="home_type">Bathroom<span class="text-danger">*</span> </label><br>
                                <select name="home_type" id="home_type" class="form-control">
                                    <option value="">Select Bathroom</option>
                                    <?php home($sql, $h_type); ?>
                                    <div id="home_type_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                            <div class="col-3 mb-4 forminput">
                                <label for="title">Minimum Guest <span class="text-danger">*</span></label>
                                <input type="text" id="minguest" class="form-control" name="minguest"
                                    value="<?php echo $minguest; ?>" placeholder="Enter Minimum Guests" required />
                                <div id="minguest-error" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-3 mb-4 forminput">
                                <label for="title">Maximum Guest <span class="text-danger">*</span></label>
                                <input type="text" id="maxguest" class="form-control" name="maxguest"
                                    value="<?php echo $maxguest; ?>" placeholder="Enter Maximum Guests" required />
                                <div id="maxguest-error" class="errordiv text-danger"></div>
                            </div>
                        
                            <div class="col-3 mb-4 forminput">
                                <label for="serviceCharges">Service Charges(%)</label>
                                <input type="text" id="serviceCharges" class="form-control onlynumber" 
                                name="serviceCharges" value="<?php echo $serviceCharges; ?>"
                                 placeholder="Enter Service Charges" required />
                                <div id="serviceCharges-error" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-2 mb-4  forminput">
                                <label for="nights"> Minimun Nights<span class="text-danger">*</span> </label><br>
                                <select name="nights" required id="nights" class="form-control ">
                                    <option value="">Select Nights</option>
                                    <?php night($sql, $nightname); ?>
                                    <div id="nights_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 mb-4  forminput">
                                <label for="pool">Pool<span class="text-danger">*</span> </label><br>
                                <select name="pool" id="pool" class="form-control">
                                    <option value="">Select Pool</option>
                                    <?php pool($sql, $poolname); ?>
                                    <div id="pool_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="destination">Destination <span class="text-danger">*</span> </label><br>
                                <select name="destination" id="destination" class="form-control">
                                    <option value="">Select Destination</option>
                                    <?php destination($sql, $destinationname); ?>
                                    <div id="destination_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                          
                            <div class="col-2 mb-4  forminput">
                                <label for="propcat">Property Category <span class="text-danger">*</span> </label><br>
                                <select name="propcat[]" id="propcat" class="form-control" multiple
                                    multiselect-search="true" multiselect-select-all="true" 
                                    multiselect-max-items="30" required>

                                    <?php property_category($sql, $prop_cat); ?>
                                    <div id="propcat_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                          
                            <div class="col-2 mb-4  forminput">
                                <label for="amenities">Amenities <span class="text-danger">*</span> </label><br>
                                <select name="amenities[]" id="amenities" class="form-control" multiple
                                    multiselect-search="true" multiselect-select-all="true" 
                                    multiselect-max-items="30" required>

                                    <?php amenitiesname($sql, $amenities_name); ?>
                                    <div id="amenities_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-2 mb-4 forminput">
                                <label for="villaQuantity">Villa Quantity <span class="text-danger">*</span></label>
                                <input type="text" id="villaQuantity" class="form-control" name="villaQuantity"
                                    value="<?php echo $villaQuantity; ?>" placeholder="Villa Quantity" required />
                                <div id="villaQuantity-error" class="errordiv text-danger"></div>
                            </div>
                           
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4  forminput">
                                <label for="overview">Overview <span class="text-danger">* </span></label> <br>
                                <textarea name="overview" id="overview" class="form-control" row="4"
                                    required><?php echo $overview; ?></textarea>
                                <div id="overview_err" class="errordiv text-danger"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4  forminput">
                                <label for="rules">Rules </label> <br>
                                <textarea name="rules" id="rules" class="form-control" row="4"
                               ><?php echo $rules; ?></textarea>
                                <div id="rules_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="security">Security </label> <br>
                                <textarea name="security" id="security" class="form-control" row="4"
                                    ><?php echo $security; ?></textarea>
                                <div id="security_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="policies">Policies </label> <br>
                                <textarea name="policies" id="policies" class="form-control" row="4"
                                    ><?php echo $policies; ?></textarea>
                                <div id="policies_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="shortdesc">Short Description</label> <br>
                                <textarea name="shortdesc" id="shortdesc" class="form-control" row="4"
                                    required><?php echo $shortdesc; ?></textarea>
                                <div id="shortdesc_err" class="errordiv text-danger"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mb-4  forminput">
                                <label for="location_link">Google Map Link<span class="text-danger">*</span></label>
                                <input type="text" id="location_link" class="form-control" name="location_link"
                                    value="<?php echo $location_link; ?>" required />
                                <div id="location_link_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="video_link">Upload Video Link</label>
                                <input type="text" id="video_link" class="form-control" name="video_link"
                                    value="<?php echo $video_link; ?>" />
                                <div id="video_link_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4 forminput">
                                <label for="seo_title">SEO Title<span class="text-danger">*</span></label>
                                <input type="text" id="seo_title" class="form-control" name="seo_title"
                                    value="<?php echo $seo_title; ?>" required />
                                <div id="seo_title_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4 forminput">
                                <label for="seo_key">SEO Keyword<span class="text-danger">*</span></label>
                                <input type="text" id="seo_key" class="form-control" name="seo_key"
                                    value="<?php echo $seo_keyword; ?>" required />
                                <div id="seo_key_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="seo_desc">SEO Description <span class="text-danger">*</span></label> <br>
                                <textarea name="seo_desc" id="seo_desc" class="form-control" row="4"
                                    required><?php echo $seo_desc; ?></textarea>
                                <div id="seo_desc_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="uploadimage">Thumbnail Image </label> <br>
                                <input type="file" name="uploadimage" id="uploadimage" class="form-control">
                                <?php
                                if ($image != '') {
                                    echo '<img src="' . $path . $image . '" alt="" height="100px;" />';
                                }
                                ?>
                                <div id="uploadimage_err" class="errordiv text-danger"></div>
                            </div>
                        </div>

                        <div class="col-12 text-right">
                            <input type="hidden" value="<?php echo $eid; ?>" name="eid">
                            <input type="hidden" value="<?php echo $image; ?>" name="image">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary ml-2">Submit</button>
                            <a href="addProperties.php" name="reset" class="btn btn-danger ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->

<?php
include('footer.php');
?>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



<!-- Page level custom scripts -->
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('add');
    CKEDITOR.replace('overview');
    CKEDITOR.replace('specification');
    CKEDITOR.replace('rules');
    CKEDITOR.replace('security');
    CKEDITOR.replace('policies');
    CKEDITOR.replace('shortdesc');

    var config = {
        '.chosen-select': {
            search_contains: false,
            enable_split_word_search: false
        },
        '.chosen-select-deselect': {
            allow_single_deselect: true
        },
        '.chosen-select-no-single': {
            disable_search_threshold: 10
        },
        '.chosen-select-no-results': {
            no_results_text: 'Oops, nothing found!'
        },
        '.chosen-select-rtl': {
            rtl: true
        },
        '.chosen-select-width': {
            width: '95%'
        }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="js/distributer.js"></script>

<script>
    $(document).ready(function () {

        $('#title').change(function () {

            var title = $(this).val();

            var dataString = 'generateSlug=' + title;

            $.ajax({
                type: "POST",
                url: "ajax_function.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    $('#slug').val(data);
                }
            });
        });

        $('.bhk').select2();

        $('#state').change(function () {
            var stateid = $(this).val();

            var dataString = 'generateCityDropdown=' + stateid;
            $.ajax({
                type: "POST",
                url: "ajax_function.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    $("#city").html(data);
                }
            });
        });

    });
</script>
</body>

</html>