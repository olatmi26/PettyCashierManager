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

		 <!-- Feathericon CSS -->
		 <link rel="stylesheet" href="assets/css/feather.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<div class="header header-one">
			
				<!-- Logo -->
				<div class="header-left header-left-one">
					<a href="index.html" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.html" class="white-logo">
						<img src="assets/img/logo-white.png" alt="Logo">
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
							<li class="submenu">
								<a href="#"><i data-feather="clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="invoices.html">Invoices List</a></li>
                                    <li><a  href="invoice-template.html">Invoice Templates</a></li>
									<li><a href="invoice-grid.html">Invoices Grid</a></li>
									<li><a href="invoice-grid-two.html">Invoices Grid 2</a></li>
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
									<li><a href="blog.html" class="active">All Blogs</a></li>
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
					<!-- Blog List -->
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="list-links mb-4">
                                <li><a href="blog.html">Active Blog</a></li>
                                <li class="active"><a href="pending-blog.html">Pending Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <a href="add-blog.html" class="btn btn-primary btn-blog mb-3" ><i class="feather-plus-circle me-1"></i> Add New</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-1.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 225
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html">
                                                    <img src="assets/img/profiles/avatar-12.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Alex Campbell</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_4" class="check" type="checkbox" checked>
                                            <label for="rating_4" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-2.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 132
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html">
                                                    <img src="assets/img/profiles/avatar-04.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Barbara Moore</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_5" class="check" type="checkbox" checked>
                                            <label for="rating_5" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">    
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-3.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 344
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Brian Johnson</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_6" class="check" type="checkbox" checked>
                                            <label for="rating_6" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-4.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 215
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html">
                                                    <img src="assets/img/profiles/avatar-05.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Greg Lynch</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_7" class="check" type="checkbox" checked>
                                            <label for="rating_7" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-5.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 285
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html">
                                                    <img src="assets/img/profiles/avatar-11.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Jennifer Floyd  </span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_8" class="check" type="checkbox" checked>
                                            <label for="rating_8" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img class="img-fluid" src="assets/img/category/blog-6.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                        <i class="feather-eye me-1"></i> 654
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile.html">
                                                    <img src="assets/img/profiles/avatar-06.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Karlene Chaidez</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog-details.html">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit-blog.html" class="text-success"  ><i class="feather-edit-3 me-1"></i> Edit</a>
                                            <a href="edit-blog.html" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_9" class="check" type="checkbox" checked>
                                            <label for="rating_9" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>										
                        </div>
                        <!-- /Blog Post -->
                
                        
                    </div>
                    <!-- Pagination -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="pagination-tab  d-flex justify-content-center">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="feather-chevron-left mr-2"></i>Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next<i class="feather-chevron-right ml-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Pagination -->
                        <!-- Modal -->
            <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content doctor-profile">
                        <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="delete-wrap text-center">
                                <div class="del-icon"><i class="feather-x-circle"></i></div>
                                <h2>Sure you want to delete</h2>
                                <div class="submit-section">
                                    <a href="blog.html" class="btn btn-success me-2">Yes</a>
                                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
                                </div>								
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
					
					
				</div>
			</div>
			<!-- /Page Wrapper -->

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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>


	</body>
</html>