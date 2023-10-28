<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Kanakku - Bootstrap Admin HTML Template</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<div class="header">
			
				<!-- Logo -->
				<div class="header-left">
					<a href="index.html" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
				</div>
				<!-- /Logo -->
				
				<!-- Sidebar Toggle -->
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Sidebar Toggle -->
				
				<!-- Search -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Menu -->
				<ul class="nav nav-tabs user-menu">
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
					
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i data-feather="bell"></i> <span class="badge rounded-pill">5</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<div class="avatar avatar-sm">
													<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
												</div>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">New user registered</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="" src="assets/img/profiles/avatar-04.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<div class="avatar avatar-sm">
													<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
												</div>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img">
								<img src="assets/img/profiles/avatar-01.jpg" alt="">
								<span class="status online"></span>
							</span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i> Profile</a>
							<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i> Settings</a>
							<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="me-1"></i> Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Menu -->
				
			</div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll"  >
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"><span>Main</span></li>
							<li>
								<a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
							</li>
							<li>
								<a href="customers.html"><i data-feather="users"></i> <span>Customers</span></a>
							</li>
							<li>
								<a href="estimates.html"><i data-feather="file-text"></i> <span>Estimates</span></a>
							</li>
							<li class="submenu active">
								<a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="invoices.html">Invoices List</a></li>
									<li><a  href="invoice-template.html">Invoice Templates</a></li>
									<li><a href="invoice-grid.html">Invoices Grid</a></li>
									<li><a href="invoice-grid-two.html" class="active">Invoices Grid 2</a></li>
									<li><a href="add-invoice.html">Add Invoices</a></li>
									<li><a href="edit-invoice.html">Edit Invoices</a></li>
									<li><a href="invoice-details.html">Invoices Details</a></li>
									<li><a href="view-invoice-two.html">Invoices Details 2</a></li>
									<li><a href="invoices-settings.html">Invoices Settings</a></li>
								</ul>
							</li>
							<li>
								<a href="invoice-items.html"><i data-feather="star"></i> <span>Items</span></a>
							</li>
							<li>
								<a href="payments.html"><i data-feather="credit-card"></i> <span>Payments</span></a>
							</li>
							<li>
								<a href="expenses.html"><i data-feather="package"></i> <span>Expenses</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="pie-chart"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="sales-report.html">Sales Report</a></li>
									<li><a href="expenses-report.html">Expenses Report</a></li>
									<li><a href="profit-loss-report.html">Profit & Loss Report</a></li>
									<li><a href="taxs-report.html">Taxs Report</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="grid"></i> <span> Blogs</span>
									<span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="blog.html" >All Blogs</a></li>
									<li><a href="add-blog.html">Add Blog</a></li>
									<li><a href="edit-blog.html">Edit Blog</a></li>
									<li><a href="blog-categories.html">Categories</a></li>
								</ul>
							</li>
							<li>
								<a href="settings.html"><i data-feather="settings"></i> <span>Settings</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="grid"></i> <span> Application</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="#">Chat</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="inbox.html">Email</a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<li> 
								<a href="profile.html"><i data-feather="user-plus"></i> <span>Profile</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="login.html"> Login </a></li>
									<li><a href="register.html"> Register </a></li>
									<li><a href="forgot-password.html"> Forgot Password </a></li>
									<li><a href="lock-screen.html"> Lock Screen </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</li>
							<li> 
								<a href="users.html"><i data-feather="user"></i> <span>Users</span></a>
							</li>
							<li> 
								<a href="blank-page.html"><i data-feather="file"></i> <span>Blank Page</span></a>
							</li>
							<li> 
								<a href="maps-vector.html"><i data-feather="map-pin"></i> <span>Vector Maps</span></a>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li class="submenu">
                                <a href="#"><i class="fab fa-get-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="alerts.html">Alerts</a></li>                                    
                                    <li><a href="accordions.html">Accordions</a></li>
                                    <li><a href="avatar.html">Avatar</a></li> 
                                    <li><a href="badges.html">Badges</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>   
                                    <li><a href="buttongroup.html">Button Group</a></li>                                  
                                    <li><a href="breadcrumbs.html">Breadcrumb</a></li>
                                    <li><a href="cards.html">Cards</a></li>
                                    <li><a href="carousel.html">Carousel</a></li>                                   
                                    <li><a href="dropdowns.html">Dropdowns</a></li>
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="images.html">Images</a></li>
                                    <li><a href="lightbox.html">Lightbox</a></li>
                                    <li><a href="media.html">Media</a></li>                              
                                    <li><a href="modal.html">Modals</a></li>
                                    <li><a href="offcanvas.html">Offcanvas</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="popover.html">Popover</a></li>                                    
                                    <li><a href="progress.html">Progress Bars</a></li>
                                    <li><a href="placeholders.html">Placeholders</a></li>
                                    <li><a href="rangeslider.html">Range Slider</a></li>                                    
                                    <li><a href="spinners.html">Spinner</a></li>
                                    <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                                    <li><a href="tab.html">Tabs</a></li>
                                    <li><a href="toastr.html">Toasts</a></li>
                                    <li><a href="tooltip.html">Tooltip</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="video.html">Video</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="ribbon.html">Ribbon</a></li>
                                    <li><a href="clipboard.html">Clipboard</a></li>
                                    <li><a href="drag-drop.html">Drag & Drop</a></li>
                                    <li><a href="rating.html">Rating</a></li>
                                    <li><a href="text-editor.html">Text Editor</a></li>
                                    <li><a href="counter.html">Counter</a></li>
                                    <li><a href="scrollbar.html">Scrollbar</a></li>
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="stickynote.html">Sticky Note</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                </ul>
                            </li>
							<li class="submenu">
								<a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="chart-apex.html">Apex Charts</a></li>
									<li><a href="chart-js.html">Chart Js</a></li>
									<li><a href="chart-morris.html">Morris Charts</a></li>
									<li><a href="chart-flot.html">Flot Charts</a></li>
									<li><a href="chart-peity.html">Peity Charts</a></li>
									<li><a href="chart-c3.html">C3 Charts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
									<li><a href="icon-feather.html">Feather Icons</a></li>
									<li><a href="icon-ionic.html">Ionic Icons</a></li>
									<li><a href="icon-material.html">Material Icons</a></li>
									<li><a href="icon-pe7.html">Pe7 Icons</a></li>
									<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
									<li><a href="icon-themify.html">Themify Icons</a></li>
									<li><a href="icon-weather.html">Weather Icons</a></li>
									<li><a href="icon-typicon.html">Typicon Icons</a></li>
									<li><a href="icon-flag.html">Flag Icons</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html">Form Mask </a></li>
									<li><a href="form-validation.html">Form Validation </a></li>
									<li><a href="form-select2.html">Form Select2 </a></li>
									<li><a href="form-fileupload.html">File Upload </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i data-feather="layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
			
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Invoice Grid</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Invoice Grid</li>
								</ul>
							</div>
							<div class="col-auto">
								<a href="add-invoice.html" class="btn btn-primary">
									<i class="fas fa-plus"></i>
								</a>
								<a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
									<i class="fas fa-filter"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
			   
					<!-- Search Filter -->
					<div id="filter_inputs" class="card filter-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
									<label>Customer:</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Status:</label>
										<select class="select">
											<option>Select Status</option>
											<option>Draft</option>
											<option>Sent</option>
											<option>Viewed</option>
											<option>Expired</option>
											<option>Accepted</option>
											<option>Rejected</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>From</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>To</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Invoice Number</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Search Filter -->
					
						<div class="row">
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Barbara Moore</a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220001</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$118</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">23 Nov, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-success-light">Paid</span>
											</div>
											<div class="col d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Karlene Chaidez</a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220002</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$222</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">18 Nov, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-info-light">Sent</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Russell Copeland</a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220003</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$347</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">10 Nov, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-warning-light">Partially Paid</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Joseph Collins</a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220004</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$826</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">25 Sep, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-danger-light">Overdue</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Jennifer Floyd</a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220005</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$519</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">17 Sep, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-info-light">Sent</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Leatha Bailey </a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220006</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$480</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">2 Oct, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-warning-light">Partially Paid</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Marie Canales </a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220007</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$2700</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">30 Dec, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-danger-light">Overdue</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="inv-header mb-3">
											<a href="profile.html" class="avatar avatar-sm me-2">
												<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-12.jpg" alt="User Image"> 
											</a>
											<a class="text-dark" href="profile.html">Alex Campbell </a>
										</div>
										<div class="invoice-id mb-3">
											<a href="invoice-details.html" class="text-primary btn-link">#20220008</a>
										</div>
										<div class="row align-items-center">
											<div class="col">
												<span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
												<h6 class="mb-0">$1999</h6>
											</div>
											<div class="col-auto text-end">
												<span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
												<h6 class="mb-0">27 Apr, 2022</h6>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row align-items-center">
											<div class="col-auto">
												<span class="badge bg-success-light">Paid</span>
											</div>
											<div class="col text-end d-flex justify-content-end">
												<a href="invoice-details.html" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
													<i class="far fa-eye"></i>
												</a>
												<a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
													<i class="fas fa-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			
			<!-- Right-Sidebar -->
			<div class="right-side-views">
				<ul class="sticky-sidebar siderbar-view">
					<li class="sidebar-icons">
						<a class="toggle tipinfo open-layout open-siderbar" href="#" data-toggle="tooltip" data-placement="left" data-bs-original-title="Tooltip on left">
							<div class="tooltip-five ">
								<i data-feather="layout" class="feather-five"></i>
								<span class="tooltiptext">Check Layout</span>
							</div>
						</a>
					</li>
					<li class="sidebar-icons">
						<a class="toggle tipinfo open-settings open-siderbar" href="#" data-toggle="tooltip" data-placement="left" data-bs-original-title="Tooltip on left">
							<div class="tooltip-five">
								<i data-feather="settings" class="feather-five"></i>
								<span class="tooltiptext">Demo Settings</span>
							</div>
						</a>
					</li>
					<li class="sidebar-icons">
						<a class="toggle tipinfo" target="_blank" href="https://themeforest.net/item/kanakku-bootstrap-admin-html-template/29436291?s_rank=11" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
							<div class="tooltip-five">
								<i data-feather="shopping-cart" class="feather-five"></i>
								<span class="tooltiptext">Buy Now</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!--/Right-Sidebar -->

			<!-- Right-Sticky-Sidebar-Layout -->
			<div class="sidebar-layout">
				<div class="sidebar-content">
					<div class="sidebar-top">
						<div class="container-fluid">
							<div class="row  align-items-center">
								<div class="col-xl-6 col-sm-6 col-12">
									<div class="sidebar-logo">
										<a href="index.html" class="logo">
											<img src="assets/img/logo.png" alt="Logo" class="img-flex">
										</a>
									</div>
								</div>
								<div class="col-xl-6 col-sm-6 col-12">
									<a class="btn-closed"  href="#"><i data-feather="x" class="feather-six"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row  align-items-center">
							<h5 class="sidebar-title">Choose layout</h5>
							<div class="col-xl-6 col-sm-6 col-12">
								<div class="sidebar-image align-center">
									<img class="img-fliud" src="assets/img/demo-one.png" alt="demo">
								</div>
								<div class="row">
									<div class="col-lg-6 layout">
										<h5 class="layout-title">Demo 1</h5>
									</div>
									<div class="col-lg-6 layout">
										<label class="switch">
										  <input type="checkbox" onclick="window.location.href='index.html'">
										  <span class="slider round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6 col-12">
								<div class="sidebar-image align-center">
									<img class="img-fliud" src="assets/img/demo-two.png" alt="demo">
								</div>
								<div class="row">
									<div class="col-lg-6 layout">
										<h5 class="layout-title">Demo 2</h5>
									</div>
									<div class="col-lg-6 layout">
										<label class="switch">
										  <input type="checkbox" onclick="window.location.href='index-two.html'">
										  <span class="slider round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<div class="col-xl-6 col-sm-6 col-12">
								<div class="sidebar-image align-center">
									<img class="img-fliud" src="assets/img/demo-three.png" alt="demo">
								</div>
								<div class="row">
									<div class="col-lg-6 layout">
										<h5 class="layout-title">Demo 3</h5>
									</div>
									<div class="col-lg-6 layout">
										<label class="switch">
										  <input type="checkbox" onclick="window.location.href='index-three.html'">
										  <span class="slider round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6 col-12">
								<div class="sidebar-image align-center">
									<img class="img-fliud" src="assets/img/demo-four.png" alt="demo">
								</div>
								<div class="row">
									<div class="col-lg-6 layout">
										<h5 class="layout-title">Demo 4</h5>
									</div>
									<div class="col-lg-6 layout">
										<label class="switch">
										  <input type="checkbox" onclick="window.location.href='index-four.html'">
										  <span class="slider round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<div class="col-xl-6 col-sm-6 col-12">
								<div class="sidebar-image align-center">
									<img class="img-fliud" src="assets/img/demo-five.png" alt="demo">
								</div>
								<div class="row">
									<div class="col-lg-6 layout">
										<h5 class="layout-title">Demo 5</h5>
									</div>
									<div class="col-lg-6 layout">
										<label class="switch">
										  <input type="checkbox" onclick="window.location.href='index-five.html'">
										  <span class="slider round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<div class="reset-page text-center">
								<a href="index.html">
									<button type="button" class="sidebar-but"><i data-feather="refresh-cw"></i>
										<span>Reset Settings</span>
									</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Right-Sticky-Sidebar-Layout -->

			<!-- Right-Sticky-Sidebar-Settings -->
			<div class="sidebar-settings">
				<div class="sidebar-content sticky-sidebar-one">
					<div class="sidebar-top">
						<div class="container-fluid">
							<div class="row  align-items-center ">
								<div class="col-xl-6 col-sm-6 col-12">
									<div class="sidebar-logo">
										<a href="index.html" class="logo">
											<img src="assets/img/logo.png" alt="Logo" class="img-flex">
										</a>
									</div>
								</div>
								<div class="col-xl-6 col-sm-6 col-12">
									<a class="btn-closed"  href="#"><i data-feather="x" class="feather-six"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row  align-items-center">
							<h5 class="sidebar-title">Preview Setting</h5>
							<h5 class="sidebar-sub-title">Layout Type</h5>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-image-one align-center">
									<img src="assets/img/layout-one.png" alt="layout">
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">LTR</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one">
										  <input type="checkbox" onclick="window.location.href='index.html'">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-image-one align-center">
									<img src="assets/img/layout-two.png" alt="layout">
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">RTL</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one">
										  <input type="checkbox" onclick="window.location.href='../template-rtl/index.html'">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-image-one align-center">
									<img src="assets/img/layout-three.png" alt="layout">
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">BOX</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one">
										  <input type="checkbox" onclick="window.location.href='index-three.html'">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<h5 class="sidebar-sub-title">Sidebar Type</h5>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-image-one align-center">
									<img src="assets/img/layout-four.png" alt="layout">
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">Normal</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one">
										  <input type="checkbox" onclick="window.location.href='index-two.html'">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-image-one align-center">
									<img src="assets/img/layout-five.png" alt="layout">
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">Compact</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one">
										  <input type="checkbox" onclick="window.location.href='index-five.html'">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<h5 class="sidebar-sub-title">Header & Sidebar Style</h5>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-color align-center">
									<span class="color-one"></span>
								</div>
								<div class="row">
									<div class="col setting">
										<h5 class="setting-title">White</h5>
									</div>
									<div class="col-auto setting">
										<label class="switch switch-one sidebar-type-two">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-color align-center">
									<span class="color-two"></span>
								</div>
								<div class="row">
									<div class="col setting">
										<h5 class="setting-title">Lite</h5>
									</div>
									<div class="col-auto setting">
										<label class="switch switch-one sidebar-type-three">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-color align-center">
									<span class="color-three"></span>
								</div>
								<div class="row">
									<div class="col setting">
										<h5 class="setting-title">Dark</h5>
									</div>
									<div class="col-auto setting">
										<label class="switch switch-one sidebar-type-four">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="sidebar-color align-center">
									<span class="color-eight"></span>
								</div>
								<div class="row">
									<div class="col setting">
										<h5 class="setting-title">Theme</h5>
									</div>
									<div class="col-auto setting">
										<label class="switch switch-one sidebar-type-five">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<h5 class="sidebar-sub-title">Primary Skin</h5>
							<div class="col-xl-6 col-sm-6">
								<div class="sidebar-color-one align-center">
									<span class="color-five"></span>
									<span class="color-four"></span>
									<span class="color-six"></span>
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">Theme</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one primary-skin-one">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="sidebar-color-one align-center">
									<span class="color-five"></span>
									<span class="color-two"></span>
									<span class="color-six"></span>
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">Lite</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one primary-skin-two">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="sidebar-color-one align-center">
									<span class="color-three"></span>
									<span class="color-four"></span>
									<span class="color-seven"></span>
								</div>
								<div class="row">
									<div class="col-lg-6 setting">
										<h5 class="setting-title">Dark</h5>
									</div>
									<div class="col-lg-6 setting">
										<label class="switch switch-one primary-skin-three">
										  <input type="checkbox">
										  <span class="slider slider-one round"></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row  align-items-center">
							<div class="col-xl-12 col-sm-12">
								<div class="reset-page text-center">
									<a href="index.html">
										<button type="button" class="sidebar-but"><i data-feather="refresh-cw"></i>
											<span>Reset Settings</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		    <!-- /Right-Sticky-Sidebar-Preview -->
			
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.3.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>

		<!-- Datepicker Core JS -->
		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>
</html>