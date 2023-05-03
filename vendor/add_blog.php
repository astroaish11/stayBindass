<?php
include('config.php');
include('header.php');
include('module/blog.php');
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
    Add Blog

    <a class="btn btn-primary btn-sm float-right" href="blog_list.php" role="button">
    List Blog
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

    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Add Blog</a>

</div>



<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

           <!-- Default Card Example -->

            <div class="card mb-4">
               <div class="card-header">
                 <!-- Add Blog  <a href="blog_list.php" name="continue" class="btn btn-primary">Back To Blog List</a> -->
                </div>
                <div class="card-body">
                   <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-4 mb-4  forminput">
                                <label for="title">Title <span class="text-danger">*</span></label> <br>
                                <input type="title" name="title" id="title" placeholder="Enter...."
                                    class="form-control" value="<?php echo $title;?>" >
                                <div id="title_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4  forminput">
                                <label for="slug">Slug <span class="text-danger">*</span></label> <br>
                                <input readonly type="slug" name="slug" id="slug" placeholder="Enter...."
                                    class="form-control"  value="<?php echo $slug;?>" >
                                <div id="slug_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4  forminput">
                                <label for="publishdate">Blog Publish Date <span class="text-danger">*</span></label> <br>
                                <input type="date" name="publishdate" value="<?php echo $publishdate;?>" id="publishdate" class="form-control">
                                <div id="publishdate_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4  forminput">
                                <label for="author_name">Author Name <span class="text-danger">*</span></label> <br>
                                <input type="author_name" name="author_name" id="author_name" placeholder="Enter...." class="form-control"  value="<?php echo $author_name;?>" >
                                <div id="authorname_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-4 mb-4  forminput">
                                <label>Upload Image (370 * 284) <span class="text-danger">*</span></label>
                                <input type="file" name="uploadImage" id="uploadImage" class="form-control">
                                <?php 
                                if($blogImage != '') {
                                   echo '<img src="'.$path.$blogImage.'" alt="" height="100px;" />'; 
                                }
                                ?>
                                <div id=uploadImage_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="desc">Description <span class="text-danger">*</span></label> <br>
                                <textarea name="desc" id="desc" placeholder="Enter...."
                                    class="form-control" ><?php echo $description; ?></textarea>
                                <div id="desc_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="seo_title">SEO Title <span class="text-danger">*</span></label> <br>
                                <input type="seo_title" name="seo_title" id="seo_title" placeholder="Enter...." class="form-control" value="<?php echo $seo_title;?>">
                                <div id="seo_title_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="seo_keyword">SEO Keyword</Keygen> <span class="text-danger">*</span></label> <br>
                                <input type="seo_keyword" name="seo_keyword" id="seo_keyword" placeholder="Enter...." class="form-control" value="<?php echo $seo_keyword;?>">
                                <div id="seokeyword_err" class="errordiv text-danger"></div>
                            </div>
                            <div class="col-12 mb-4  forminput">
                                <label for="seo_desc">SEO Description <span class="text-danger">*</span></label> <br>
                                <textarea name="seo_desc" id="seo_desc" placeholder="Enter...." class="form-control" required=""><?php echo $seo_desc;?></textarea>
                                <div id="seo_desc_err" class="errordiv text-danger"></div>

                            </div>
                            <div class="col-md-5">
                                <input type="hidden" value="<?php echo $eid; ?>" id="eid" name="eid">
                                <input type="hidden" value="<?php echo $blogImage;?>" id="blogImage" name="blogImage">
                                <button type="submit" class="btn btn-primary float-left" name="submit">Submit</button>
                            </div>
                            
                        </div>
                    </form>
                    <?php echo $alertMessage;?>
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
  
    CKEDITOR.replace('desc', {
      height: 250,
      filebrowserUploadUrl: "upload_common.php"
    });
    CKEDITOR.add

  </script>


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

<script>
    $(document).ready(function () {

        $('#title').change(function () {

            var title = $(this).val();

            var dataString = 'generateBlogSlug=' + title;

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

    });
</script>


<!-- Page level custom scripts -->
</body>

</html>