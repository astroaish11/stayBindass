<?php
include('config.php');
include('header.php');
include('module/general.php');
?>

<style>
    .readonly:read-only {
        background: red;
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

    General Setting Form

</h1>



<div class="breadcrumb">

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">

        <path fill-rule="evenodd"
            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />

        <path fill-rule="evenodd"
            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />

    </svg>

    <a class="copad" href="dashboard.php">Home</a> <span class="pl-2 pr-2">/</span> <a>General</a>

</div>



<!-- Begin Page Content -->

<div class="container-fluid">



    <div class="row">

        <div class="col-lg-12">



            <!-- Default Card Example -->

            <div class="card mb-4">

                <div class="card-header">

                    General

                </div>

                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">
                        <?php echo $alertMessage; ?>
                        <div class="row">
                            <div class="col-6 mb-4  forminput">

                                <label for="name">Name <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    value="<?php echo $name; ?>" required>

                                <div id="name_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-6 mb-4  forminput">

                                <label for="seo_title">SEO Title <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" id="seo_title" placeholder="SEO Title"
                                    name="seo_title" value="<?php echo $seo_title; ?>" required>

                                <div id="seo_title_err" class="errordiv text-danger"></div>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6 mb-4  forminput">

                                <label for="meta_desc">Meta Description <span class="text-danger">*</span></label> <br>

                                <textarea name="meta_desc" id="meta_desc" placeholder="Meta Description"
                                    class="form-control" required><?php echo $meta_desc; ?></textarea>

                                <div id="meta_desc_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-6 mb-4  forminput">

                                <label for="meta_desc1">Keywords </label> <br>

                                <textarea name="meta_desc1" id="meta_desc1" placeholder="Meta Description"
                                    class="form-control" required><?php echo $meta_desc1; ?></textarea>

                                <div id="keyword_err" class="errordiv text-danger"></div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 mb-4  forminput">

                                <label for="dark_logo">Dark Logo </label> <br>

                                <input type="file" name="dark_logo" id="dark_logo" class="form-control">
                                <?php
                                if ($image != '') {
                                    echo '<img src="' . $path . $image . '" alt="" height="100px;" />';
                                }
                                ?>
                                
                                <div id="dark_logo_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-4 mb-4  forminput">

                                <label for="light_logo">Light Logo </label> <br>

                                <input type="file" name="light_logo" id="light_logo" class="form-control">
                                <?php
                                if ($image1 != '') {
                                    echo '<img src="' . $path . $image1 . '" alt="" height="100px;" />';
                                }
                                ?>
                                
                                <div id="light_logo_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-4 mb-4  forminput">

                                <label for="favicon">Favicon </label> <br>

                                <input type="file" name="favicon" value="<?php echo $favicon; ?>" id="favicon"
                                    class="form-control">
                                <?php
                                if ($image2 != '') {
                                    echo '<img src="' . $path . $image2 . '" alt="" height="100px;" />';
                                }
                                ?>
                                
                                <div id="favicon_err" class="errordiv text-danger"></div>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12 mb-4  forminput">

                                <label for="hCode">Head Code </label> <br>

                                <textarea name="hCode" id="hCode" placeholder="Head Code"
                                    class="form-control"><?php echo $hCode; ?> </textarea>

                                <div id="hCode_err" class="errordiv text-danger"></div>

                            </div>
                        </div>





                        <!-- <div class="col-12 mb-4  forminput">

                                <label for="dCurrency">Default Currency</label><br>

                                <select name="dCurrency" id="dCurrency" class="form-control">



                                    <option value="1" selected="">US Dollar</option>

                                    <option value="2">Pound Sterling</option>

                                    <option value="3">Europe</option>

                                    <option value="4">Australian Dollar</option>

                                    <option value="5">Singapore</option>

                                    <option value="6">Swedish Krona</option>

                                    <option value="7">Danish Krone</option>

                                    <option value="8">Mexican Peso</option>

                                    <option value="9">Brazilian Real</option>

                                    <option value="10">Malaysian Ringgit</option>

                                    <option value="11">Philippine Peso</option>

                                    <option value="12">Swiss Franc</option>

                                    <option value="13">India</option>

                                    <option value="14">Argentine Peso</option>

                                    <option value="15">Canadian Dollar</option>

                                    <option value="16">Chinese Yuan</option>

                                    <option value="17">Czech Republic Koruna</option>

                                    <option value="18">Hong Kong Dollar</option>

                                    <option value="19">Hungarian Forint</option>

                                    <option value="20">Indonesian Rupiah</option>

                                    <option value="21">Israeli New Sheqel</option>

                                    <option value="22">Japanese Yen</option>

                                    <option value="23">South Korean Won</option>

                                    <option value="24">Norwegian Krone</option>

                                    <option value="25">New Zealand Dollar</option>

                                    <option value="26">Polish Zloty</option>

                                    <option value="27">Russian Ruble</option>

                                    <option value="28">Thai Baht</option>

                                    <option value="29">Turkish Lira</option>

                                    <option value="30">New Taiwan Dollar</option>

                                    <option value="31">Vietnamese Dong</option>

                                    <option value="32">South African Rand</option>



                                    <div id="dCurrency_err" class="errordiv text-danger"></div>

                                </select>

                            </div> -->



                        <!-- <div class="col-12 mb-4  forminput">

                                <label for="dLanguage">Default Language</label><br>

                                <select name="dLanguage" id="dLanguage" class="form-control">



                                    <option value="1" selected="">English</option>

                                    <option value="2">عربى</option>

                                    <option value="3">中文 (繁體)</option>

                                    <option value="4">Français</option>

                                    <option value="5">Português</option>

                                    <option value="6">Русский</option>

                                    <option value="7">Español</option>

                                    <option value="8">Türkçe</option>



                                    <div id="dLanguage_err" class="errordiv text-danger"></div>

                                </select>

                            </div> -->


                        <div class="row">
                            <div class="col-12 mb-4  forminput">

                                <label for="autoAprrovalProperties">Auto Approval Properties</label><br>

                                <select name="autoAprrovalProperties" id="autoAprrovalProperties" class="form-control">

                                    <option value="0" <?php if ($autoAprrovalProperties == '0') { ?> selected="selected"
                                        <?php } ?>>Yes</option>

                                    <option value="1" <?php if ($autoAprrovalProperties == '1') { ?> selected="selected"
                                        <?php } ?>>No</option>

                                    <div id="autoAprrovalProperties_err" class="errordiv text-danger"></div>

                                </select>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 mb-4  forminput">

                                <label for="invoiceDesc">Invoice Description </label> <br>

                                <textarea name="invoiceDesc" id="invoiceDesc" placeholder="Invoice Description"
                                    class="form-control"><?php echo $invoiceDesc; ?></textarea>

                                <div id="invoiceDesc_err" class="errordiv text-danger"></div>

                            </div>
                        </div>





                        <!-- <div class="col-12 mb-4  forminput">

                                <label for="guestPaymentExpirationDays">Guest Payment Expiration Days <span

                                        class="text-danger">*</span></label>

                                <input type="text" class="form-control" id="guestPaymentExpirationDays"

                                    placeholder="Guest Payment Expiration Days" name="guestPaymentExpirationDays"

                                    value="1">

                                <div id="guestPaymentExpirationDays_err" class="errordiv text-danger"></div>

                            </div> -->


                        <div class="row">
                            <div class="col-4 mb-4  forminput">

                                <label for="signUpImg">User Login/Sign Up Image </label> <br>

                                <input type="file" name="signUpImg" value="<?php echo $signUpImg; ?>" id="signUpImg"
                                    class="form-control">
                                <?php
                                if ($image3 != '') {
                                    echo '<img src="' . $path . $image3 . '" alt="" height="100px;" />';
                                }
                                ?>
                                
                                <div id="signUpImg_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-4 mb-4  forminput">

                                <label for="adminLoginImg">Admin Login Image </label> <br>

                                <input type="file" name="adminLoginImg" value="<?php echo $adminLoginImg; ?>"
                                    id="adminLoginImg" class="form-control">
                                <?php
                                if ($image4 != '') {
                                    echo '<img src="' . $path . $image4 . '" alt="" height="100px;" />';
                                }
                                ?>
                                
                                <div id="adminLoginImg_err" class="errordiv text-danger"></div>

                            </div>



                            <!-- <div class="col-12 mb-4  forminput">

                                <label for="listYourSpace">List Your Space </label> <br>

                                <input type="file" name="listYourSpace" id="listYourSpace" class="form-control">

                                <div id="listYourSpace_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="roomAndBeds">Rooms and Beds </label> <br>

                                <input type="file" name="roomAndBeds" id="roomAndBeds" class="form-control">

                                <div id="roomAndBeds_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="desc">Description </label> <br>

                                <input type="file" name="desc" id="desc" class="form-control">

                                <div id="desc_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="location">Location </label> <br>

                                <input type="file" name="location" id="location" class="form-control">

                                <div id="location_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="amenities">Amenities </label> <br>

                                <input type="file" name="amenities" id="amenities" class="form-control">

                                <div id="amenities_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="photosAndVideos">Photos & Videos </label> <br>

                                <input type="file" name="photosAndVideos" id="photosAndVideos" class="form-control">

                                <div id="photosAndVideos_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="price">Price </label> <br>

                                <input type="file" name="price" id="price" class="form-control">

                                <div id="price_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="bookYourSpace">Book your space </label> <br>

                                <input type="file" name="bookYourSpace" id="bookYourSpace" class="form-control">

                                <div id="bookYourSpace_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="calendar">Calendar </label> <br>

                                <input type="file" name="calendar" id="calendar" class="form-control">

                                <div id="calendar_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="listYourExp">List Your Experience </label> <br>

                                <input type="file" name="listYourExp" id="listYourExp" class="form-control">

                                <div id="listYourExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="expTypeDur">Experience Type and Duration </label> <br>

                                <input type="file" name="expTypeDur" id="expTypeDur" class="form-control">

                                <div id="expTypeDur_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="descExp">Description (Experience) </label> <br>

                                <input type="file" name="descExp" id="descExp" class="form-control">

                                <div id="descExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="locExp">location (Experience) </label> <br>

                                <input type="file" name="locExp" id="locExp" class="form-control">

                                <div id="locExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="inclExcl">Inclusion/Exclusion </label> <br>

                                <input type="file" name="inclExcl" id="inclExcl" class="form-control">

                                <div id="inclExcl_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="photosAndVideosExp">Photos & Videos (Experience) </label> <br>

                                <input type="file" name="photosAndVideosExp" id="photosAndVideosExp"

                                    class="form-control">

                                <div id="photosAndVideosExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="priceExp">Price (Experience) </label> <br>

                                <input type="file" name="priceExp" id="priceExp" class="form-control">

                                <div id="priceExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="bookYourSpaceExp">Book your space (Experience) </label> <br>

                                <input type="file" name="bookYourSpaceExp" id="bookYourSpaceExp" class="form-control">

                                <div id="bookYourSpaceExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="calendarExp">Calendar (Experience) </label> <br>

                                <input type="file" name="calendarExp" id="calendarExp" class="form-control">

                                <div id="calendarExp_err" class="errordiv text-danger"></div>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="homeImg">Home (Try Hosting Image) </label> <br>

                                <input type="file" name="homeImg" id="homeImg" class="form-control">

                                <div id="homeImg_err" class="errordiv text-danger"></div>

                            </div> -->



                            <!-- <div class="col-12 mb-4  forminput">

                                <label for="enableFB">Enable Facebook</label><br>

                                <select name="enableFB" id="enableFB" class="form-control">

                                    <option value="">Yes</option>

                                    <option value="">No</option>

                                    <div id="enableFB_err" class="errordiv text-danger"></div>

                                </select>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="enableGoogle">Enable Google</label><br>

                                <select name="enableGoogle" id="enableGoogle" class="form-control">

                                    <option value="">Yes</option>

                                    <option value="">No</option>

                                    <div id="enableGoogle_err" class="errordiv text-danger"></div>

                                </select>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="enableExp">Enable Experience</label><br>

                                <select name="enableExp" id="enableExp" class="form-control">

                                    <option value="">Yes</option>

                                    <option value="">No</option>

                                    <div id="enableExp_err" class="errordiv text-danger"></div>

                                </select>

                            </div>



                            <div class="col-12 mb-4  forminput">

                                <label for="selectHomePage">Select Home Page</label><br>

                                <select name="selectHomePage" id="selectHomePage" class="form-control">

                                    <option value="">Old Home Page</option>

                                    <option value="">New Home Page</option>

                                    <div id="selectHomePage_err" class="errordiv text-danger"></div>

                                </select>

                            </div> -->



                            <div class="col-4 mb-4  forminput">

                                <label for="enableCookies">Enable Cookies</label><br>

                                <select name="enableCookies" id="enableCookies" class="form-control">

                                    <option value="0" <?php if ($enableCookies == 0) { ?> selected="selected" <?php } ?>>
                                        Yes</option>

                                    <option value="1" <?php if ($enableCookies == 1) { ?> selected="selected" <?php } ?>>
                                        No
                                    </option>

                                    <div id="enableCookies_err" class="errordiv text-danger"></div>

                                </select>

                            </div>
                        </div>

                        <!-- need to change
                            <div class="col-12 mb-4  forminput">

                                <label for="primaryColor">Primary Color <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" id="name" placeholder="Primary Color"

                                    name="primaryColor" value="">

                                <div id="primaryColor_err" class="errordiv text-danger"></div>

                            </div>





                            <div class="col-12 mb-4  forminput">

                                <input type="color" class="" id="name" placeholder="Primary Color"

                                    name="primaryColor1" value="">

                                <div id="primaryColor_err" class="errordiv text-danger"></div>

                            </div> -->


                        <!-- To display hex code of the color -->
                        <div class="row">
                            <div class="col-6 mb-4  forminput">

                                <label for="p_color">Primary Color <span class="text-danger">*</span></label>

                                <input type="text" class="form-control readonlyColor" id="p_color"
                                    placeholder="Primary Color" name="p_color" value="<?php echo $colorPicker;?>" required readonly>
                                
                                <div id="p_color_err" class="errordiv text-danger"></div>


                                <!-- To select the color -->
                                <div class="mt-4  forminput">

                                    <input type="color" id="colorPicker" value="<?php echo $colorPicker;?>">
                
                                    <div id="colorPicker_err" class="errordiv text-danger"></div>

                                </div>

                            </div>



                            <div class="col-6 mb-4 forminput">

                                <label for="lang">Row Per Page <span class="text-danger">*</span> </label><br>

                                <select name="row_per_page" id="row_per_page" class="form-control">

                                    <option value="0" <?php if ($row_per_page == 0) { ?> selected="selected" <?php } ?>>10
                                    </option>

                                    <option value="1" <?php if ($row_per_page == 1) { ?> selected="selected" <?php } ?>>24
                                    </option>

                                    <option value="2" <?php if ($row_per_page == 2) { ?> selected="selected" <?php } ?>>50
                                    </option>

                                    <option value="3" <?php if ($row_per_page == 3) { ?> selected="selected" <?php } ?>>
                                        100
                                    </option>

                                    <div id="row_per_page_err" class="errordiv text-danger"></div>

                                </select>

                            </div>
                        </div>

                        <!-- <div class="col-12 mb-4  forminput">

                                <label for="head_office">Head Office <span class="text-danger">*</span></label> <br>

                                <textarea name="head_office" id="head_office" placeholder="Head Office"
                                    class="form-control"></textarea>

                                <div id="head_office_err" class="errordiv text-danger"></div>

                            </div>

                            <div class="col-12 mb-4  forminput">

                                <label for="branch_office">Branch Office <span class="text-danger">*</span></label> <br>

                                <textarea name="branch_office" id="branch_office" placeholder="Branch Office"
                                    class="form-control"></textarea>

                                <div id="branch_office_err" class="errordiv text-danger"></div>

                            </div> -->

                        <!-- <div class="card-header">

                            Preferences

                        </div>


                        <div class="col-6 mb-4 forminput">

                            <label for="lang">Row Per Page <span class="text-danger">*</span> </label><br>

                            <select name="row_per_page" id="row_per_page" class="form-control">

                                <option value="0" <?php if ($row_per_page == 0) { ?> selected="selected" <?php } ?>>10
                                </option>

                                <option value="1" <?php if ($row_per_page == 1) { ?> selected="selected" <?php } ?>>24
                                </option>

                                <option value="2" <?php if ($row_per_page == 2) { ?> selected="selected" <?php } ?>>50
                                </option>

                                <option value="3" <?php if ($row_per_page == 3) { ?> selected="selected" <?php } ?>>100
                                </option>

                                <div id="row_per_page_err" class="errordiv text-danger"></div>

                            </select>

                        </div> -->

                        <div class="col-12 text-right">
                            <input type="hidden" value="<?php echo $eid; ?>" name="eid">
                            <input type="hidden" value="<?php echo $colorPicker;?>" id="hiddencolor" name="hiddencolor">
                            
                            <input type="hidden" value="<?php echo $dark_logo;?>" id="dark_logo" name="dark_logo">
                            <input type="hidden" value="<?php echo $light_logo;?>" id="light_logo" name="light_logo">
                            <input type="hidden" value="<?php echo $favicon;?>" id="favicon" name="favicon">
                            <input type="hidden" value="<?php echo $signUpImg;?>" id="signUpImg" name="signUpImg">
                            <input type="hidden" value="<?php echo $adminLoginImg;?>" id="adminLoginImg" name="adminLoginImg">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                            <a href="general.php" name="cancel" class="btn btn-danger">Cancel</a>

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


<script type="text/javascript">
    $(document).ready(function () {
        $('.fadediv').delay(3000).fadeOut();
    });
</script>


<!-- Color picker HEX-code scripts -->

<script>
    function myColor() {

        // Get the value return by color picker 
        var color = document.getElementById('colorPicker').value;

        // Set the color as background 
        document.body.style.backgroundColor = color;

        // Take the hex code 
        document.getElementById('p_color').value = color;

        //set hidden values
        document.getElementById('hiddencolor').value = color;
    }

    // When user clicks over color picker, 
    // myColor() function is called 
    document.getElementById('colorPicker')
        .addEventListener('input', myColor); 
</script>


</body>



</html>