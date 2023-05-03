<?php
include('config.php');
include('header.php');

?>

<!-- Page Heading -->
<h1 class="h3 topTitle">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
    </svg>
    Add Properties
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Properties</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Add Properties
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-3 mb-4 forminput">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" id="email" class="form-control" name="title" value="" required />
                                <div id="title-error" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-3 mb-4 forminput">
                                <label for="slug">Slug<span class="text-danger">*</span></label>
                                <input type="text" id="slug" class="form-control" name="slug" value="" required />
                                <div id="slug-error" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-3 mb-4  forminput">
                                <label for="state">state<span class="text-danger">*</span> </label><br>
                                <select name="state" id="state" placeholder="" class="form-control">
                                    <option value="0">Select</option>
                                    <option value="1">Goa</option>
                                    <div id="state_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 mb-4  forminput">
                                <label for="city">City<span class="text-danger">*</span> </label><br>
                                <select name="city" id="city" placeholder="" class="form-control">
                                    <option value="0">Select</option>
                                    <option value="1">Mumbai</option>
                                    <div id="city_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4  forminput">

                                <label for="add">Address<span class="text-danger">*</span></label> <br>

                                <textarea name="add" id="add" placeholder="" class="form-control" row="4" required></textarea>

                                <div id="add_err" class="errordiv text-danger"></div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-3 mb-4  forminput">
                                <label for="home_type">Home Type </label><br>
                                <select name="home_type" id="home_type" placeholder="" class="form-control">
                                    <option value="0">Apartment</option>
                                    <option value="1">Villa</option>
                                    <div id="home_type_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-3 mb-4  forminput">
                                <label for="room_type">Room Type </label><br>
                                <select name="room_type" id="room_type" placeholder="" class="form-control">
                                    <option value="0">Private Room</option>
                                    <option value="1">Shared Room</option>
                                    <div id="room_type_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                         
                            <div class="col-2 mb-4  forminput multiselected">
                                <label for="bhk">BHK </label><br>
                                <select name="bhk" id="bhk" placeholder="" class="form-control">
                                    <option value="0">1bhk</option>
                                    <option value="1">1.5bhk</option>
                                    <div id="bhk_err" class="errordiv text-danger"></div>
                                </select>
                            </div>

                            <div class="col-2 mb-4  forminput">
                                <label for="project_status">Project Status </label><br>
                                <select name="project_status" id="project_status" placeholder="" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                    <div id="project_status_err" class="errordiv text-danger"></div>
                                </select>
                            </div>


                            <div class="col-2 mb-4  forminput">
                                <label for="property_by">Property By</label><br>
                                <select name="property_by" id="property_by" placeholder="" class="form-control">
                                    <option value="0">Select</option>
                                    <option value="1"></option>
                                    <div id="property_by_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4  forminput">

                                <label for="overview">Overview <span class="text-danger">*</span></label> <br>

                                <textarea name="overview" id="overview" placeholder="" class="form-control" row="4" required></textarea>

                                <div id="overview_err" class="errordiv text-danger"></div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4  forminput">

                                <label for="specification">Specification <span class="text-danger">*</span></label> <br>

                                <textarea name="specification" id="specification" placeholder="" class="form-control" row="4" required></textarea>

                                <div id="specification_err" class="errordiv text-danger"></div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4 forminput">
                                <label for="seo_title">SEO Title<span class="text-danger">*</span></label>
                                <input type="text" id="seo_title" class="form-control" name="seo_title" value="" required />
                                <div id="seo_title_err" class="errordiv text-danger"></div>
                            </div>



                            <div class="col-12 mb-4 forminput">
                                <label for="seo_key">SEO Keyword<span class="text-danger">*</span></label>
                                <input type="text" id="seo_key" class="form-control" name="seo_key" value="" required />
                                <div id="seo_key_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">

                                <label for="seo_desc">SEO Description <span class="text-danger">*</span></label> <br>

                                <textarea name="seo_desc" id="seo_desc" placeholder="" class="form-control" row="4" required></textarea>

                                <div id="seo_desc_err" class="errordiv text-danger"></div>

                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <input type="hidden" value="<?php echo $image; ?>" name="image">
                            <!-- <a href="" name="continue" class="btn btn-primary">Continue</a> -->
                            <button type="submit" name="submit" id="submit">Submit</button>
                            <a href="manage_listing_addProperties.php" name="reset" class="btn btn-danger ml-2">Reset</a>
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
<script type="text/javascript" src="js/validate/city.js"></script>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>



<!-- Page level custom scripts -->
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('add');
    CKEDITOR.replace('overview');
    CKEDITOR.replace('specification');

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



</body>

</html>