<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental Example</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <img class="sidebar-brand-text mx-3" src="img/Logo.jpg" width="100px" height="60px">

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Tables -->


    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
                <a class="nav-link" href="master.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span> Master </span></a>
            </li> -->

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSite" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Site setting</span>

        </a>
        <div id="collapseSite" class="collapse" aria-labelledby="collapsePro" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item " href="general_site_setting.php">General</a>
                <a class="collapse-item" href="designation.php">Preferences</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="add_application.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDocs" aria-expanded="true" aria-controls="collapseTrasn">
            <i class="fa fa-list"></i>
            <span>Document Verification</span>
        </a>
        <div id="collapseDocs" class="collapse" aria-labelledby="collapseDocs" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Disapprove Documents</a>
                <a class="collapse-item" href="humi_book.php">Approve Documents</a>

            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="add_application.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Listings</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="add_application.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Experience</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExpSetting" aria-expanded="true" aria-controls="collapseExpSetting">
            <i class="fa fa-list"></i>
            <span>Experience Settings</span>
        </a>
        <div id="collapseExpSetting" class="collapse" aria-labelledby="collapseExpSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Experience Category</a>
                <a class="collapse-item" href="humi_book.php">Inclusion</a>
                <a class="collapse-item" href="humi_book.php">Exclusion</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="application_list.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Manage Bookings</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="application_list.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Payout Requests</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePanalty" aria-expanded="true" aria-controls="collapsePanalty">
            <i class="fa fa-list"></i>
            <span>Penalty</span>
        </a>
        <div id="collapsePanalty" class="collapse" aria-labelledby="collapsePanalty" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Host Penalty</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseListSetting" aria-expanded="true" aria-controls="collapseListSetting">
            <i class="fa fa-list"></i>
            <span>Listing Settings</span>
        </a>
        <div id="collapseListSetting" class="collapse" aria-labelledby="collapseListSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Property Type</a>
                <a class="collapse-item" href="humi_book.php">Space Type</a>
                <a class="collapse-item" href="humi_book.php">Bed Type</a>

            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAmenities" aria-expanded="true" aria-controls="collapseAmenities">
            <i class="fa fa-list"></i>
            <span>Manage Amenities</span>
        </a>
        <div id="collapseAmenities" class="collapse" aria-labelledby="collapseAmenities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">All Amenities</a>
                <a class="collapse-item" href="humi_book.php">Amenities Type</a>

            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> User Reviews</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Site Testimonials</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Customer Messages</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStats" aria-expanded="true" aria-controls="collapseStats">
            <i class="fa fa-list"></i>
            <span>Reports &amp; Stats</span>
        </a>
        <div id="collapseStats" class="collapse" aria-labelledby="collapseStats" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Overview</a>
                <a class="collapse-item" href="humi_book.php">Booking Report</a>
                <a class="collapse-item" href="humi_book.php">Data Analysis</a>

            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHomeSetting" aria-expanded="true" aria-controls="collapseHomeSetting">
            <i class="fa fa-list"></i>
            <span>Home Page Settings</span>
        </a>
        <div id="collapseHomeSetting" class="collapse" aria-labelledby="collapseHomeSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Banners</a>
                <a class="collapse-item" href="humi_book.php">Popular Cities</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Static Page CMS</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Manage Country</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Manage Languages</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="update_payment.php">
            <i class="fas fa-fw fa-table"></i>
            <span> Customer Messages</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHomeFeeSetting" aria-expanded="true" aria-controls="collapseHomeFeeSetting">
            <i class="fa fa-list"></i>
            <span>Payment &amp; Fee settings</span>
        </a>
        <div id="collapseHomeFeeSetting" class="collapse" aria-labelledby="collapseHomeFeeSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Payment Methods</a>
                <a class="collapse-item" href="humi_book.php">Fees &amp; Tax settings</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmail" aria-expanded="true" aria-controls="collapseEmail">
            <i class="fa fa-list"></i>
            <span>Manage Emails</span>
        </a>
        <div id="collapseEmail" class="collapse" aria-labelledby="collapseEmail" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Email Settings</a>
                <a class="collapse-item" href="humi_book.php">Email Templates</a>

            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="settings.php">
            <i class="fas fa-fw fa-table"></i>
            <span> SMS Settings</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoginSetting" aria-expanded="true" aria-controls="collapseLoginSetting">
            <i class="fa fa-list"></i>
            <span>Social Page &amp; login Settings</span>
        </a>
        <div id="collapseLoginSetting" class="collapse" aria-labelledby="collapseLoginSetting" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="regi_book.php">Social Media Links Settings</a>
                <a class="collapse-item" href="humi_book.php">Social Login API</a>

            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="settings.php">
            <i class="fas fa-fw fa-table"></i>
            <span>SEO Settings</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>        <!-- End of Sidebar -->
        
        
	<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-darksh topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <section class="content">
			<div class="row">
				<div class="col-md-3 settings_bar_gap">
					<div class="box box-info box_info">
	<div class="panel-body">
		<h4 class="all_settings">Manage Settings</h4>
		<ul class="nav navbar-pills nav-tabs nav-stacked no-margin" role="tablist">
							<li class="active">
					<a href="https://demowpthemes.com/buy2rental/admin/settings" data-group="profile">General</a>
				</li>
						
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/preferences" data-group="profile">Preferences</a>
				</li>
			
							<li class="">
						<a href="https://demowpthemes.com/buy2rental/admin/settings/sms" data-group="sms">SMS Settings</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/banners" data-group="profile">Banners</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/starting-cities" data-group="home_cities">Starting Cities</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/property-type" data-group="property_type">Property Type</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/space-type" data-group="space_type">Space Type</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/bed-type" data-group="bed_type">Bed Type</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/currency" data-group="currency">Currency</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/country">Country</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/amenities-type">Amenities Type</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/email">Email Settings</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/fees">Fees</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/language" data-group="language">Language</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/metas" data-group="metas">Metas</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/api-informations" data-group="api_informations">Api Credentials</a>
				</li>
			
			
				<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/payment-methods" data-group="payment_methods">Payment Methods</a>
				</li>
			
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/social-links" data-group="social_links">Social Links</a>
				</li>
						
							<li class="">
					<a href="https://demowpthemes.com/buy2rental/admin/settings/roles"><span>Roles &amp; Permissions</span></a>
				</li>
			
						<li class="">
				<a href="https://demowpthemes.com/buy2rental/admin/settings/backup"><span>Database Backups</span></a>
			</li>
					</ul>
	</div>
</div>				</div>
			
				<div class="col-md-9">
					<div class="box box-info">
						<div class="error_email_settings" style="display: none;">  
							<div class="alert alert-warning fade in alert-dismissable">
								<strong>Warning!</strong> Whoops there was an error. Please verify your below information. <a class="close" href="#" data-dismiss="alert" aria-label="close" title="close">×</a>
							</div>
						</div>

						<div class="box-header with-border">
							<h3 class="box-title">General Setting Form</h3><span class="email_status" style="display: none;">(<span class="text-green"><i class="fa fa-check" aria-hidden="true"></i>Verified</span>)</span>
						</div>
					
						<form id="general_form" method="post" action="https://demowpthemes.com/buy2rental/admin/settings" class="form-horizontal " enctype="multipart/form-data" novalidate="novalidate">
							<input type="hidden" name="_token" value="8wSZtckPKu9glOYdwrnvXwmSIMRPpkNsvhoN8g73">
							<div class="box-body">
																	<div class="form-group name ">

	
			<label for="inputEmail3" class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
		<div class="col-sm-6">
		<input type="text" name="name" class="form-control " id="name" value="Buy2Rental" placeholder="Name">
		<span class="text-danger"></span>
			
	</div>
	
	

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group seo_title ">

	
			<label for="inputEmail3" class="col-sm-3 control-label">SEO Title <span class="text-danger">*</span></label>
		<div class="col-sm-6">
		<input type="text" name="seo_title" class="form-control " id="seo_title" value="Home | Rental  Marketplace Script" placeholder="SEO Title">
		<span class="text-danger"></span>
			
	</div>
	
	

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Meta Description <span class="text-danger">*</span></label>
	
	<div class="col-sm-6">
		<textarea name="meta_description" placeholder="Meta Description" rows="3" class="form-control ">Rental marketplace to Add your listing &amp; Earn</textarea>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Keywords</label>
	
	<div class="col-sm-6">
		<textarea name="keywords" placeholder="Keywords" rows="3" class="form-control ">rental business, rental marketplace, rental script</textarea>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Dark Logo</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[logo]" class="form-control " id="photos[logo]" value="" placeholder="Dark Logo">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/default-error-image.png">
		
		
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Light Logo</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[light_logo]" class="form-control " id="photos[light_logo]" value="" placeholder="Light Logo">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1654012655_light_logo.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1654012655_light_logo.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Favicon</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[favicon]" class="form-control validate_field" id="photos[favicon]" value="" placeholder="Favicon">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1628150085_favicon.png">
		
		
		<span name="mySpan2" class="remove_favicon_preview" id="mySpan2"></span>
		<input id="hidden_company_favicon" name="hidden_company_favicon" data-rel="1628150085_favicon.png" type="hidden">
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Head Code</label>
	
	<div class="col-sm-6">
		<textarea name="head_code" placeholder="Head Code" rows="3" class="form-control validate_field"></textarea>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group default_currency">
<label for="inputEmail3" class="col-sm-3 control-label">Default Currency</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="default_currency" name="default_currency">
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
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group default_language">
<label for="inputEmail3" class="col-sm-3 control-label">Default Language</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="default_language" name="default_language">
							<option value="1" selected="">English</option>
							<option value="2">عربى</option>
							<option value="3">中文 (繁體)</option>
							<option value="4">Français</option>
							<option value="5">Português</option>
							<option value="6">Русский</option>
							<option value="7">Español</option>
							<option value="8">Türkçe</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group auto_approval">
<label for="inputEmail3" class="col-sm-3 control-label">Auto Approval Properties</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="auto_approval" name="auto_approval">
							<option value="yes">Yes</option>
							<option value="no" selected="">No</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Invoice Description</label>
	
	<div class="col-sm-6">
		<textarea name="invoice_description" placeholder="Invoice Description" rows="3" class="form-control validate_field">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group guest_payment_expiration_time ">

	
			<label for="inputEmail3" class="col-sm-3 control-label">Guest Payment Expiration Days <span class="text-danger">*</span></label>
		<div class="col-sm-6">
		<input type="text" name="guest_payment_expiration_time" class="form-control " id="guest_payment_expiration_time" value="1" placeholder="Guest Payment Expiration Days">
		<span class="text-danger"></span>
			
	</div>
	
	

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group enable_captcha">
<label for="inputEmail3" class="col-sm-3 control-label">Enable Captcha</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="enable_captcha" name="enable_captcha">
							<option value="yes">Yes</option>
							<option value="no" selected="">No</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">User Login/Sign Up Image</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[user_login_img]" class="form-control " id="photos[user_login_img]" value="" placeholder="User Login/Sign Up Image">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635916380_user_login_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635916380_user_login_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Admin Login Image</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[admin_login_img]" class="form-control " id="photos[admin_login_img]" value="" placeholder="Admin Login Image">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635916462_admin_login_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635916462_admin_login_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">List Your Space</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[list_your_space]" class="form-control " id="photos[list_your_space]" value="" placeholder="List Your Space">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921594_list_your_space.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921594_list_your_space.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Rooms and Beds</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[description_img]" class="form-control " id="photos[description_img]" value="" placeholder="Rooms and Beds">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635920925_description_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635920925_description_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Description</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_third_img]" class="form-control " id="photos[hosting_third_img]" value="" placeholder="Description">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635920977_hosting_third_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635920977_hosting_third_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">location</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_fourth_img]" class="form-control " id="photos[hosting_fourth_img]" value="" placeholder="location">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921016_hosting_fourth_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921016_hosting_fourth_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Amenities</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_fifth_img]" class="form-control " id="photos[hosting_fifth_img]" value="" placeholder="Amenities">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921121_hosting_fifth_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921121_hosting_fifth_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Photos &amp; Videos</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_sixth_img]" class="form-control " id="photos[hosting_sixth_img]" value="" placeholder="Photos &amp; Videos">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921178_hosting_sixth_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921178_hosting_sixth_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Price</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_seventh_img]" class="form-control " id="photos[hosting_seventh_img]" value="" placeholder="Price">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921220_hosting_seventh_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921220_hosting_seventh_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Book your space</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_eighth_img]" class="form-control " id="photos[hosting_eighth_img]" value="" placeholder="Book your space">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921270_hosting_eighth_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921270_hosting_eighth_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Calendar</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[hosting_ninth_img]" class="form-control " id="photos[hosting_ninth_img]" value="" placeholder="Calendar">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635921373_hosting_ninth_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635921373_hosting_ninth_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">List Your Experience</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_first_img]" class="form-control " id="photos[experience_first_img]" value="" placeholder="List Your Experience">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_first_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_first_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Experience Type and Duration</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_second_img]" class="form-control " id="photos[experience_second_img]" value="" placeholder="Experience Type and Duration">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_second_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_second_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Description (Experience)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_third_img]" class="form-control " id="photos[experience_third_img]" value="" placeholder="Description (Experience)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_third_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_third_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">location (Experience)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_fourth_img]" class="form-control " id="photos[experience_fourth_img]" value="" placeholder="location (Experience)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_fourth_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_fourth_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Inclusion/Exclusion</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_fifth_img]" class="form-control " id="photos[experience_fifth_img]" value="" placeholder="Inclusion/Exclusion">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_fifth_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_fifth_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Photos &amp; Videos (Experience)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_sixth_img]" class="form-control " id="photos[experience_sixth_img]" value="" placeholder="Photos &amp; Videos (Experience)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_sixth_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_sixth_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Price (Experience)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_seventh_img]" class="form-control " id="photos[experience_seventh_img]" value="" placeholder="Price (Experience)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_seventh_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_seventh_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Book your space (Experience)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_eighth_img]" class="form-control " id="photos[experience_eighth_img]" value="" placeholder="Book your space (Experience)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_eighth_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_eighth_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Calendar (Experience)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[experience_ninth_img]" class="form-control " id="photos[experience_ninth_img]" value="" placeholder="Calendar (Experience)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1660816095_experience_ninth_img.png">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1660816095_experience_ninth_img.png" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group">
			<label for="inputEmail3" class="col-sm-3 control-label">Home (Try Hosting Image)</label>
	
	<div class="col-sm-6">
		<input type="file" name="photos[try_hosting_img]" class="form-control " id="photos[try_hosting_img]" value="" placeholder="Home (Try Hosting Image)">
		<span class="text-danger"></span>
		<br><img class="file-img" src="https://demowpthemes.com/buy2rental/public/front/images/logos/1635917422_try_hosting_img.jpg">
		<span name="mySpan" class="remove_logo_preview" id="mySpan"></span>
		<input id="hidden_company_logo" name="hidden_company_logo" data-rel="1635917422_try_hosting_img.jpg" type="hidden">
		
		
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group enable_facebook">
<label for="inputEmail3" class="col-sm-3 control-label">Enable Facebook</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="enable_facebook" name="enable_facebook">
							<option value="yes" selected="">Yes</option>
							<option value="no">No</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group enable_google">
<label for="inputEmail3" class="col-sm-3 control-label">Enable Google</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="enable_google" name="enable_google">
							<option value="yes" selected="">Yes</option>
							<option value="no">No</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group enable_experience">
<label for="inputEmail3" class="col-sm-3 control-label">Enable Experience</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="enable_experience" name="enable_experience">
							<option value="Yes" selected="">Yes</option>
							<option value="no">No</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group homepage_type">
<label for="inputEmail3" class="col-sm-3 control-label">Select Home Page</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="homepage_type" name="homepage_type">
							<option value="old_home" selected="">Old Home Page</option>
							<option value="new_home">New Home Page</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group enable_cookies">
<label for="inputEmail3" class="col-sm-3 control-label">Enable Cookies</label>
	<div class="col-sm-6">
		<select class="form-control validate_field" id="enable_cookies" name="enable_cookies">
							<option value="Yes" selected="">Yes</option>
							<option value="no">No</option>
					</select>
		<span class="text-danger"></span>
	</div>

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																	<div class="form-group colorpicker  colorpicker-element">

	
			<label for="inputEmail3" class="col-sm-3 control-label">Primary Color <span class="text-danger">*</span></label>
		<div class="col-sm-6">
		<input type="text" name="colorpicker" class="form-control " id="colorpicker" value="#ed3615" placeholder="Primary Color">
		<span class="text-danger"></span>
					<span class="input-group-addon"><i style="background-color: rgb(237, 54, 21);"></i></span> 
			
	</div>
	
	

	<div class="col-sm-3">
		<small></small>
	</div>
</div>																<div class="text-center" id="error-message"></div>
							</div>
							
														        <div class="box-footer">
        								<p class="btn btn-primary btn-space btn-disable">Submit</p>
        								<a class="btn btn-default" href="#">Cancel</a>
        								<p class="disabletxt">Demo disabled</p>
        							</div>
														
							
						</form>
					</div>
				</div>
			</div>
		</section>

    </div>
    <!-- /.container-fluid -->

</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body></html>