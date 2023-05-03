<?php
include('config.php');
include('header.php');

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
    Edit Space Form
</h1>

<div class="breadcrumb">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
    </svg>
    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>Edit Space Form</a>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                Edit Space Form
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6 mb-4  forminput">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    value="">
                                <div id="name_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="desc">Description <span class="text-danger">*</span></label> <br>
                                <textarea name="desc" id="desc" placeholder=""
                                    class="form-control"></textarea>
                                <div id="desc_err" class="errordiv text-danger"></div>
                            </div>

                            <div class="col-6 mb-4  forminput">
                                <label for="status">Status </label><br>
                                <select name="status" id="status" placeholder="" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                    <div id="status_err" class="errordiv text-danger"></div>
                                </select>
                            </div>
                        </div>




                        <div class="form-input">
                            <a class="text-decoration-none h4" href="#" onclick="myFunction()">Français </a>

                            <div class="form-group" id="langDiv" class="answer_list">
                                <label for="exampleInputPassword1" class="control-label col-sm-3">Name<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="fr[name]" id="">
                                </div>
                            </div>
                        </div>


                        <div class="col-12 text-right">
                            <input type="hidden" value="<?php echo $image; ?>" name="image">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                            <a href="add_propertyType.php" name="reset" class="btn btn-danger">Cancel</a>
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





<script>
    function myFunction() {
        var x = document.getElementById("langDiv");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>

</body>

</html>