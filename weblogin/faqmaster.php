<?php
include('config.php');
include('header.php');
include('module/faqmast.php');

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
 FAQ
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />

        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>FAQ</a>
</div>

<!-- Begin Page Content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">

            <!-- Default Card Example -->

            <div class="card mb-4">
                <div class="card-header">
                    Add FAQ
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-12 forminput">
                            <div class="form-group">
                                <label for="faqcat">FAQ Category <span class="text-danger">*</span> </label><br>
                                <select name="faqcat" id="faqcat" placeholder="Select FAQ Categeory" class="form-control" required>
                                    <option value="">Select FAQ Category</option>
                                    <?php getFaqcat($sql, $title); ?>
                                    <div id="facility_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                        </div>

                        <div class="col-12  forminput">
                        <div class="form-group">
                            <label for="question">Question<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="<?php echo $question;?>" id="question" placeholder="Enter question" name="question" required>
                            <div id="question_err" class="errordiv text-danger"></div>
                            </div>
                        </div>

                        <div class="col-12  forminput">
                        <div class="form-group">
                            <label for="answer">Answer<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="answer" placeholder="Enter Answer" name="answer"><?php echo $answer;?></textarea>
                            <div id="answer_err" class="errordiv text-danger"></div>
                            </div>
                        </div>

                        <div class="col-12 text-right">
                        <div class="form-group">
                            <input type="hidden" name ="eid" id="eid" value="<?php echo $eid;?>">
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                            <a href="faqmaster.php" name="cancel" class="btn btn-danger">
                                Cancel</a>
                        </div>
                        </div>
                </div>
                </form>
            </div>
            <?php echo $alertMessage;?>
        </div>
    </div>

    <div class="col-lg-6">

        <!-- Default Card Example -->

        <div class="card mb-4">
            <div class="card-header">
               FAQ Listing
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">Sr. No.</th>
                                <th>FAQ Category</th>
                                <th>Questions</th>
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
                                        <td>'.$getdata->title.'</td>
                                        <td>'.$getdata->question.'</td>
                                        <td class="text-center">
                                        <a href="faqmaster.php?eid='.$getdata->id.'" class="btn btn-icon-split btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="faqmaster.php?did='.$getdata->id.'" class="btn btn-icon-split btn-sm text-danger deleteme">
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
                                echo '<tr><td colspan="5">No Record Found</td></tr>';
                              }  
                              ?> 
                            </tbody>
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

<script type="text/javascript">
  
  CKEDITOR.replace('answer', {
    required: true,
    height: 250,
    filebrowserUploadUrl: "upload_common.php"
  });
  CKEDITOR.add

</script>

<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('answer');

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

<!-- Page level custom scripts -->

<script src="js/demo/datatables-demo.js"></script>
<script type="text/javascript" src="js/pages/masthead.js"></script>

</body>



</html>