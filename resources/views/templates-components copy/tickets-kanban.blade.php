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

		<!-- Feather CSS -->
		<link rel="stylesheet" href="assets/plugins/feather/feather.css">

		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
	
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<div class="header header-one">
			
				<!-- Sidebar Toggle -->
				<a href="javascript:void(0);" id="toggle_btn">
					<span class="toggle-bars">
						<span class="bar-icons"></span>
						<span class="bar-icons"></span>
						<span class="bar-icons"></span>
						<span class="bar-icons"></span>
					</span>
				</a>
				<!-- /Sidebar Toggle -->
				
				<!-- Search -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><img src="assets/img/icons/search.svg" alt="img"></button>
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
							<img src="assets/img/flags/us1.png" alt="" height="20"><span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="" height="16"><span>English</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"><span>French</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"><span>Spanish</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"><span>German</span>
							</a>
						</div>
					</li>
					<!-- /Flag -->
					
					
					<li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="toggle-switch">
                            <i class="fe fe-moon"></i>
                        </a>
                    </li>
					<li class="nav-item dropdown  flag-nav dropdown-heads">
						<a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
							<i class="fe fe-bell"></i> <span class="badge rounded-pill"></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="profile.html">
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
										<a href="profile.html">
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
										<a href="profile.html">
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
										<a href="profile.html">
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
										<a href="profile.html">
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
								<a href="notifications.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="win-maximize">
                            <i class="fe fe-maximize"></i>
                        </a>
                    </li>
					<!-- User Menu -->
					<li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="assets/img/profiles/avatar-07.jpg" alt="img" class="profilesidebar">
                                <span class="animate-circle"></span>
                            </span>
                            <span class="user-content">
                                <span class="user-details">Admin</span>
								<span class="user-name">John Smith</span>
                            </span>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilemenu">
                                <div class="subscription-menu">
                                    <ul>
                                        <li>
                                            <a class="dropdown-item" href="profile.html">Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="settings.html">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="subscription-logout">
                                    <ul>
                                        <li class="pb-0">
											<a class="dropdown-item" href="login.html">Log Out</a>
										</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </li>
					<!-- /User Menu -->
					
				</ul>
				
				<!-- /Header Menu -->
				
			</div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-header">
					<div class="sidebar-logo">
						<a href="index.html">
							<img src="assets/img/logo.png" class="img-fluid logo" alt="">
						</a>
						<a href="index.html">
							<img src="assets/img/logo-small.png" class="img-fluid logo-small" alt="">
						</a>
					</div>
				</div>
				<div class="sidebar-inner slimscroll"  >
					<div id="sidebar-menu" class="sidebar-menu">
						<!-- Main -->
						<ul>
							<li class="menu-title"><span>Main</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-home"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="index.html">Admin Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-grid"></i> <span> Applications</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="chat.html">Chat</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="inbox.html">Email</a></li>
								</ul>
							</li>
						</ul>
						<!-- /Main -->

						<!-- Customers -->
						<ul>
							<li class="menu-title"><span>Customers</span></li>
							<li>
								<a href="customers.html"><i class="fe fe-users"></i> <span>Customers</span></a>
							</li>
							<li>
								<a href="customer-details.html"><i class="fe fe-file"></i> <span>Customer Details</span></a>
							</li>
							<li>
								<a href="vendors.html"><i class="fe fe-user"></i> <span>Vendors</span></a>
							</li>
						</ul>
						<!-- /Customers -->

						<!-- Inventory -->
						<ul>
							<li class="menu-title"><span>Inventory</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-package"></i> <span> Products / Services</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="product-list.html">Product List</a></li>
									<li><a href="category.html">Category</a></li>
									
									<li><a href="units.html">Units</a></li>
								</ul>
							</li>
							<li>
								<a href="inventory.html"><i class="fe fe-user"></i> <span>Inventory</span></a>
							</li>
						</ul>
						<!-- /Inventory -->

						<!-- Sales -->
						<ul>
							<li class="menu-title"><span>Sales</span></li>							
							<li class="submenu">
								<a href="invoices.html"><i class="fe fe-file"></i> <span>Invoices</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="invoices.html">Invoices List</a></li>
									<li><a  href="invoice-template.html">Invoice Templates</a></li>
									
									
								</ul>
							</li>
							<li>
								<a href="recurring-invoices.html"><i class="fe fe-clipboard"></i> <span>Recurring Invoices</span></a>
							</li>
							<li>
								<a href="credit-notes.html"><i class="fe fe-edit"></i> <span>Credit Notes</span></a>
							</li>
						</ul>
						<!-- /Sales -->

						<!-- Purchases -->
						<ul>
							<li class="menu-title"><span>Purchases</span></li>							
							<li>
								<a href="purchases.html"><i class="fe fe-shopping-cart"></i> <span>Purchases</span></a>
							</li>
							<li>
								<a href="purchase-orders.html"><i class="fe fe-shopping-bag"></i> <span>Purchase Orders</span></a>
							</li>
							<li>
								<a href="debit-notes.html"><i class="fe fe-file-text"></i> <span>Debit Notes</span></a>
							</li>
						</ul>
						<!-- /Purchases -->

						<!-- Finance & Accounts -->
						<ul>
							<li class="menu-title"><span>Finance & Accounts</span></li>								
							<li>
								<a href="expenses.html"><i class="fe fe-file-plus"></i> <span>Expenses</span></a>
							</li>
							<li>
								<a href="payments.html"><i class="fe fe-credit-card"></i> <span>Payments</span></a>
							</li>
						</ul>
						<!-- /Finance & Accounts -->

						<!-- Quotations -->
						<ul>
							<li class="menu-title"><span>Quotations</span></li>									
							<li>
								<a href="quotations.html"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
							</li>
							<li>
								<a href="delivery-challans.html"><i class="fe fe-file-text"></i> <span>Delivery Challans</span></a>
							</li>
						</ul>
						<!-- /Quotations -->

						<!-- Reports -->
						<ul>
							<li class="menu-title"><span>Reports</span></li>								
							<li>
								<a href="quotations.html"><i class="fe fe-clipboard"></i> <span>Quotations</span></a>
							</li>
							<li>
								<a href="payment-summary.html"><i class="fe fe-credit-card"></i> <span>Payment Summary</span></a>
							</li>
						</ul>
						<!-- /Reports -->

						<!-- User Management -->
						<ul>
							<li class="menu-title"><span>User Management</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-user"></i> <span> Manage Users</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="add-user.html">Add User</a></li>
									<li><a href="users.html">Users</a></li>
								</ul>
							</li>
							<li>
								<a href="roles-permission.html"><i class="fe fe-clipboard"></i> <span>Roles & Permission</span></a>
							</li>
							<li>
								<a href="delete-account-request.html"><i class="fe fe-trash-2"></i> <span>Delete Account Request</span></a>
							</li>
						</ul>
						<!-- /User Management -->

						<!-- Membership) -->
						<ul>
							<li class="menu-title"><span>Membership</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-book"></i> <span> Membership</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="membership-plans.html">Membership Plans</a></li>
									<li><a href="membership-addons.html">Membership Addons</a></li>
									<li><a href="subscribers.html">Subscribers</a></li>
									<li><a href="transactions.html">Transactions</a></li>
								</ul>
							</li>
						</ul>
						<!-- /Membership) -->

						<!-- Content (CMS) -->
						<ul>
							<li class="menu-title"><span>Content (CMS)</span></li>
							<li class="submenu">
								<a href="#"><i class="fe fe-folder"></i> <span> Pages</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="add-page.html">Add Page</a></li>
									<li><a href="pages.html">Pages</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-book"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="all-blogs.html">All Blogs</a></li>
									<li><a href="add-blog.html">Add Blog</a></li>
									<li><a href="categories.html">Categories</a></li>
									<li><a href="blog-comments.html">Blog Comments</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-map-pin"></i> <span> Location</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="countries.html">Countries</a></li>
									<li><a href="states.html">States</a></li>
									<li><a href="cities.html">Cities</a></li>
								</ul>
							</li>
							<li>
								<a href="testimonials.html"><i class="fe fe-message-square"></i> <span>Testimonials</span></a>
							</li>
							<li>
								<a href="faq.html"><i class="fe fe-alert-circle"></i> <span>FAQ</span></a>
							</li>
						</ul>
						<!-- /Content (CMS) -->

						<!-- Support -->
						<ul>
							<li class="menu-title"><span>Support</span></li>							
							<li>
								<a href="contact-messages.html"><i class="fe fe-printer"></i> <span>Contact Messages</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-save"></i> <span> Tickets</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tickets.html">Tickets</a></li>
									<li><a href="tickets-list.html">Tickets List</a></li>
									<li><a class="active" href="tickets-kanban.html">Tickets Kanban</a></li>
									<li><a href="ticket-details.html">Ticket Overview</a></li>
								</ul>
							</li>
						</ul>
						<!-- /Support -->

						<!-- Authentication -->
						<ul>
							<li class="submenu">
                                <a href="#"><i class="fe fe-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="login.html"> Login </a></li>
                                    <li><a href="register.html"> Register </a></li>
                                    <li><a href="forgot-password.html"> Forgot Password </a></li>
                                    <li><a href="lock-screen.html"> Lock Screen </a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /Authentication -->

						<!-- Pages -->
						<ul>
							<li class="menu-title"><span>Pages</span></li>							
							<li>
								<a href="profile.html"><i class="fe fe-user"></i> <span>Profile</span></a>
							</li>
							<li>
								<a href="error-404.html"><i class="fe fe-x-square"></i> <span>Error Pages</span></a>
							</li>
							<li>
								<a href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
							</li>
							<li>
								<a href="maps-vector.html"><i class="fe fe-image"></i> <span>Vector Maps</span></a>
							</li>
						</ul>
						<!-- /Pages -->

						<!-- UI Interface -->
						<ul>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-pocket"></i> <span>Base UI </span> <span class="menu-arrow"></span></a>
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
								<a href="#"><i class="fe fe-box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
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
								<a href="#"><i class="fe fe-bar-chart"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
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
								<a href="#"><i class="fe fe-award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
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
								<a href="#"><i class="fe fe-sidebar"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
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
								<a href="#"><i class="fe fe-layout"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
						</ul>
						<!-- /UI Interface -->

						<!-- Settings -->
						<ul>
							<li class="menu-title"><span>Settings</span></li>							
							<li>
								<a href="settings.html"><i class="fe fe-settings"></i> <span>Settings</span></a>
							</li>
							<li>
								<a href="login.html"><i class="fe fe-power"></i> <span>Logout</span></a>
							</li>
						</ul>
						<!-- /Settings -->

					</div>
				</div>
			</div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Tickets</h5>
							<div class="list-btn">
								<ul class="filter-list">
									<li>
										<div class="short-filter">
											<img class="me-2" src="assets/img/icons/sort.svg" alt="Sort by select">
											<div class="sort-by">
												<select class="sort">
												<option>Sort by: Date</option>
												<option>Sort by: Date 1</option>
												<option>Sort by: Date 2</option>
												</select>
											</div>
										</div>
									</li>
									<li>
										<a class="btn btn-filters w-auto popup-toggle"><span class="me-2"><i class="fe fe-filter"></i></span>Filter </a>
									</li>
									<li>
										<a class="active btn-filters" href="tickets-kanban.html"><span><i class="fe fe-grid"></i></span> </a>
									</li>
									<li>
										<a class="btn-filters" href="tickets-list.html"><span><i class="fe fe-list"></i></span> </a>
									</li>
									<li>
										<a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#add_ticket"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>New Tickets</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						
					<!-- Search Filter -->
					<div id="filter_inputs" class="card filter-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Search Filter -->

					<!-- Inovices card -->
					<div class="row">
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="dash-widget-header mb-0">
										<span class="inovices-widget-icon rounded-circle bg-info-light">
											<img src="assets/img/icons/receipt-item.svg" alt="">
										</span>
										<div class="dash-count">
											<div class="dash-title">Total Tickets</div>
											<div class="dash-counts">
												<p class="mb-0">$298</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="dash-widget-header mb-0">
										<span class="inovices-widget-icon rounded-circle bg-primary-light">
											<img src="assets/img/icons/transaction-minus.svg" alt="">
										</span>
										<div class="dash-count">
											<div class="dash-title">Completed</div>
											<div class="dash-counts">
												<p class="mb-0">$325,215</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="dash-widget-header mb-0">
										<span class="inovices-widget-icon rounded-circle bg-warning-light">
											<img src="assets/img/icons/archive-book.svg" alt="">
										</span>
										<div class="dash-count">
											<div class="dash-title">In Progress</div>
											<div class="dash-counts">
												<p class="mb-0">$7825</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="dash-widget-header mb-0">
										<span class="inovices-widget-icon rounded-circle bg-primary-light">
											<img src="assets/img/icons/clipboard-close.svg" alt="">
										</span>
										<div class="dash-count">
											<div class="dash-title">Unassigned</div>
											<div class="dash-counts">
												<p class="mb-0">100</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="dash-widget-header mb-0">
										<span class="inovices-widget-icon rounded-circle bg-green-light">
											<img src="assets/img/icons/message-edit.svg" alt="">
										</span>
										<div class="dash-count">
											<div class="dash-title">New</div>
											<div class="dash-counts">
												<p class="mb-0">$125,586</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-6 col-12">
							<div class="card inovices-card">
								<div class="card-body">
									<div class="dash-widget-header mb-0">
										<span class="inovices-widget-icon rounded-circle bg-danger-light">
											<img src="assets/img/icons/3d-rotate.svg" alt="">
										</span>
										<div class="dash-count">
											<div class="dash-title">Hold Tickets</div>
											<div class="dash-counts">
												<p class="mb-0">$86,892</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Inovices card -->

					<!-- All Invoice -->
					<div class="card invoices-tabs-card">
						<div class="invoices-main-tabs">
							<div class="row align-items-center">
								<div class="col-lg-12">
									<div class="invoices-tabs">
										<ul>
											<li><a href="tickets-kanban.html" class="active">All</a></li>
											<li><a href="tickets-list-pending.html">Pending</a></li>	
											<li><a href="tickets-list-overdue.html">Overdue</a></li>		
											<li><a href="tickets-list-draft.html">Draft</a></li>	
											<li><a href="tickets-list-recurring.html">Recurring</a></li>
											<li><a href="tickets-list-cancelled.html">Cancelled</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /All Invoice -->

					<!-- Ticket Kanban -->
					<div class="row">
						<div class="col-sm-12">
							<div class="kanban-ticket-main">
								<!-- list grid title -->
								<ul class="kanban-ticket-list css-equal-heights">
									<li class="kanban-ticket-grid">										
										<div class="kanban-ticket d-flex justify-content-between align-items-center">
											<div class="kanban-head css-equal-heights">
												<h6 class="me-2">Open</h6>
												<span class="inovices-widget-icon rounded-circle bg-warning-light text-warning-light">5</span>
											</div>												
											<a href="#"><span><i class="fe fe-plus"></i></span></a>
										</div>
									</li>
									<li class="kanban-ticket-grid">										
										<div class="kanban-ticket d-flex justify-content-between align-items-center">
											<div class="kanban-head css-equal-heights">
												<h6 class="me-2">In Progress</h6>
												<span class="inovices-widget-icon rounded-circle bg-warning-light text-warning-light">8</span>
											</div>												
											<a href="#"><span><i class="fe fe-plus"></i></span></a>
										</div>
									</li>
									<li class="kanban-ticket-grid">										
										<div class="kanban-ticket d-flex justify-content-between align-items-center">
											<div class="kanban-head css-equal-heights">
												<h6 class="me-2">Hold</h6>
												<span class="inovices-widget-icon rounded-circle bg-warning-light text-warning-light">6</span>
											</div>												
											<a href="#"><span><i class="fe fe-plus"></i></span></a>
										</div>
									</li>
									<li class="kanban-ticket-grid">										
										<div class="kanban-ticket d-flex justify-content-between align-items-center">
											<div class="kanban-head css-equal-heights">
												<h6 class="me-2">Unassigned</h6>
												<span class="inovices-widget-icon rounded-circle bg-warning-light text-warning-light">5</span>
											</div>												
											<a href="#"><span><i class="fe fe-plus"></i></span></a>
										</div>
									</li>
									<li class="kanban-ticket-grid">										
										<div class="kanban-ticket d-flex justify-content-between align-items-center">
											<div class="kanban-head css-equal-heights">
												<h6 class="me-2">Solved</h6>
												<span class="inovices-widget-icon rounded-circle bg-warning-light text-warning-light">10</span>
											</div>												
											<a href="#"><span><i class="fe fe-plus"></i></span></a>
										</div>
									</li>
								</ul>
								<!-- list grid title -->

								<ul class="kanban-ticket-list css-equal-heights">
									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-warning-light text-warning-light">Medium</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Verify your email</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-primary-light">Overdue</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Verify your email</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-warning-light text-warning-light">Medium</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-primary-light">Overdue</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Verify your email</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-primary-light">Overdue</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Verify your email</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-warning-light text-warning-light">Medium</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Verify your email</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-warning-light text-warning-light">Medium</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-danger-light">High</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Management</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge bg-danger-light">Cancelled</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->

									<!-- list Grid -->
									<li class="kanban-ticket-grid">
										<div class="card-kanban">
											<div class="kanban-box">
												<div class="kanban-name d-flex justify-content-between align-items-center">
													<span class="badge bg-primary-light">Low</span>
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-edit me-2"></i>Edit</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-eye me-2"></i>View</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
														</div>
													</div>
												</div>
												<h6>Support for theme</h6>
												<div class="ticket-due d-flex">
													<div class="ticket-due-id me-2"><span class="badge badge-gray-outline">#4987</span></div>
													<div class="ticket-due-status"><span class="badge badge bg-success-light">Paid</span></div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<ul class="kanban-ticket-img d-flex align-items-center">
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 1">
																<img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-01.jpg" alt="img">
															</a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 3"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 4"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="img"></a>
														</li>
														<li>
															<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Member 5"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="img"></a>
														</li>
														<li class="more-set">
															<a href="#"><span class="d-flex justify-content-center align-items-center"><i class="fe fe-plus"></i></span></a>
														</li>
													</ul>
													<div class="progressset">
														<p><span><i class="far fa-calendar me-2"></i></span> Jan 2023</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- /list Grid -->
								</ul>
							</div>
						</div>
					</div>
					<!-- /Ticket Kanban -->

				</div>
			</div>
			<!-- /Page Wrapper -->

			<!-- Add Asset -->
			<div class="toggle-sidebar">
				<div class="sidebar-layout-filter">
					<div class="sidebar-header">
						<h5>Filter</h5>
						<a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
					</div>
					<div class="sidebar-body">						
						<form action="#" autocomplete="off">
							<!-- Customer -->
							<div class="accordion" id="accordionMain1">
								<div class="card-header-new" id="headingOne">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Customer	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"  data-bs-parent="#accordionExample1">
									<div class="card-body-chat">
										<div class="row">
											<div class="col-md-12">
												<div id="checkBoxes1">
													<div class="form-custom">														
														<input type="text" class="form-control" id="member_search1" placeholder="Search here">
														<span><img src="assets/img/icons/search.svg" alt="img"></span>
													</div>
													<div class="selectBox-cont">
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span>  Brian Johnson
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span>  Russell Copeland
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span>  Greg Lynch
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> John Blair
														</label>
														<!-- View All -->
														<div class="view-content">
															<div class="viewall-One">	
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Barbara Moore
																</label>
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Hendry Evan
																</label>
																<label class="custom_check w-100">
																	<input type="checkbox" name="username">
																	<span class="checkmark"></span> Richard Miles
																</label>
															</div>
															<div class="view-all">
																<a href="javascript:void(0);" class="viewall-button-One"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
															</div>
														</div>
														<!-- /View All -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Customer -->

							<!-- Select Date -->
							<div class="accordion" id="accordionMain2">
								<div class="card-header-new" id="headingTwo">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100 collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										Select Date	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"  data-bs-parent="#accordionExample2">
									<div class="card-body-chat">
										<div class="form-group">
											<label class="form-control-label">From</label>
											<div class="cal-icon">
												<input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
											</div>
										</div>
										<div class="form-group">
											<label class="form-control-label">To</label>
											<div class="cal-icon">
												<input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Select Date -->

							<!-- By Status -->
							<div class="accordion" id="accordionMain3">
								<div class="card-header-new" id="headingThree">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100 collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										By Status	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree"  data-bs-parent="#accordionExample3">
									<div class="card-body-chat">
										<div id="checkBoxes2">
											<div class="form-custom">														
												<input type="text" class="form-control" id="member_search2" placeholder="Search here">
												<span><img src="assets/img/icons/search.svg" alt="img"></span>
											</div>
											<div class="selectBox-cont">
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> All Invoices
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span>  Paid
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span>  Overdue
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Draft
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Recurring
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="bystatus">
													<span class="checkmark"></span> Cancelled
												</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<!-- /By Status -->

							<!-- Category -->
							<div class="accordion accordion-last" id="accordionMain4">
								<div class="card-header-new" id="headingFour">
									<h6 class="filter-title">
									<a href="javascript:void(0);" class="w-100 collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
										Category	
										<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
									</a> 
									</h6>
								</div>
							
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour"  data-bs-parent="#accordionExample4">
									<div class="card-body-chat">
										<div id="checkBoxes3">
											<div class="selectBox-cont">
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span> Advertising
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span>  Food
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span>  Repairs
												</label>
												<label class="custom_check w-100">
													<input type="checkbox" name="category">
													<span class="checkmark"></span> Software
												</label>
												<!-- View All -->
												<div class="view-content">
													<div class="viewall-Two">	
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Stationary
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Medical
														</label>
														<label class="custom_check w-100">
															<input type="checkbox" name="username">
															<span class="checkmark"></span> Designing
														</label>
													</div>
													<div class="view-all">
														<a href="javascript:void(0);" class="viewall-button-Two"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
													</div>
												</div>
												<!-- /View All -->
											</div>
										</div>	
									</div>
								</div>
							</div>
							<!-- /Category -->

							<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
								<span><img src="assets/img/icons/chart.svg" class="me-2" alt="Generate report"></span>Generate report
							</button>
						</form>
						
					</div>
				</div>
			</div>	
			<!--/Add Asset -->	
			
			<!-- Add Ticket Modal -->
			<div class="modal custom-modal fade" id="add_ticket" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header border-0 pb-0">
							<div class="form-header modal-header-title text-start mb-0">
								<h4 class="mb-0">Add Ticket</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span class="align-center" aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control" placeholder="Enter Subject">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<label>Assigned Name</label>
										<input type="number" class="form-control" placeholder="Enter Assigned Name">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<label>Assigned Date</label>
										<div class="cal-icon cal-icon-info">
											<input type="text" class="datetimepicker form-control" placeholder="Select Date">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<label>Created Date</label>
										<div class="cal-icon cal-icon-info">
											<input type="text" class="datetimepicker form-control" placeholder="Select Date">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<label>Due Date</label>
										<div class="cal-icon cal-icon-info">
											<input type="text" class="datetimepicker form-control" placeholder="Select Date">
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<label>Assignee Name</label>
										<input type="text" class="form-control" placeholder="Enter Assignee Name">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label>Priority</label>
										<select class="select">
											<option>Select Priority</option>
											<option>Priority 1</option>
											<option>Priority 2</option>
											<option>Priority 3</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mb-0">
										<label>Status</label>
										<select class="select">
											<option>Select Status</option>
											<option>Status 1</option>
											<option>Status 2</option>
											<option>Status 3</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Back</a>
							<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Ticket Modal -->
			
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.3.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets/plugins/datatables/datatables.min.js"></script>

		<!-- select CSS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datepicker Core JS -->
		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- multiselect JS -->
		<script src="assets/js/jquery-ui.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>
</html>