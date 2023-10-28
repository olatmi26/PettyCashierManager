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
		
		<!-- Feather CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">

		<!-- Material CSS -->
		<link rel="stylesheet" href="assets/plugins/material/materialdesignicons.css">
		
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
									<li><a href="tickets-kanban.html">Tickets Kanban</a></li>
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
									<li><a class="active" href="icon-material.html">Material Icons</a></li>
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
							<h5>Material Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Material Icons</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="mdi mdi-access-point" data-bs-toggle="tooltip" title="mdi-access-point"></i></li>
											<li><i class="mdi mdi-access-point-network" data-bs-toggle="tooltip" title="mdi-access-point-network"></i></li>
											<li><i class="mdi mdi-account" data-bs-toggle="tooltip" title="mdi-account"></i></li>
											<li><i class="mdi mdi-account-alert" data-bs-toggle="tooltip" title="mdi-account-alert"></i></li>
											<li><i class="mdi mdi-account-box" data-bs-toggle="tooltip" title="mdi-account-box"></i></li>
											<li><i class="mdi mdi-account-box-outline" data-bs-toggle="tooltip" title="mdi-account-box-outline"></i></li>
											<li><i class="mdi mdi-account-card-details" data-bs-toggle="tooltip" title="mdi-account-card-details"></i></li>
											<li><i class="mdi mdi-account-check" data-bs-toggle="tooltip" title="mdi-account-check"></i></li>
											<li><i class="mdi mdi-account-circle" data-bs-toggle="tooltip" title="mdi-account-circle"></i></li>
											<li><i class="mdi mdi-account-convert" data-bs-toggle="tooltip" title="mdi-account-convert"></i></li>
											<li><i class="mdi mdi-account-edit" data-bs-toggle="tooltip" title="mdi-account-edit"></i></li>
											<li><i class="mdi mdi-account-key" data-bs-toggle="tooltip" title="mdi-account-key"></i></li>
											<li><i class="mdi mdi-account-location" data-bs-toggle="tooltip" title="mdi-account-location"></i></li>
											<li><i class="mdi mdi-account-minus" data-bs-toggle="tooltip" title="mdi-account-minus"></i></li>
											<li><i class="mdi mdi-account-multiple" data-bs-toggle="tooltip" title="mdi-account-multiple"></i></li>
											<li><i class="mdi mdi-account-multiple-minus" data-bs-toggle="tooltip" title="mdi-account-multiple-minus"></i></li>
											<li><i class="mdi mdi-account-multiple-outline" data-bs-toggle="tooltip" title="mdi-account-multiple-outline"></i></li>
											<li><i class="mdi mdi-account-multiple-plus" data-bs-toggle="tooltip" title="mdi-account-multiple-plus"></i></li>
											<li><i class="mdi mdi-account-network" data-bs-toggle="tooltip" title="mdi-account-network"></i></li>
											<li><i class="mdi mdi-account-off" data-bs-toggle="tooltip" title="mdi-account-off"></i></li>
											<li><i class="mdi mdi-account-outline" data-bs-toggle="tooltip" title="mdi-account-outline"></i></li>
											<li><i class="mdi mdi-account-plus" data-bs-toggle="tooltip" title="mdi-account-plus"></i></li>
											<li><i class="mdi mdi-account-remove" data-bs-toggle="tooltip" title="mdi-account-remove"></i></li>
											<li><i class="mdi mdi-account-search" data-bs-toggle="tooltip" title="mdi-account-search"></i></li>
											<li><i class="mdi mdi-account-settings" data-bs-toggle="tooltip" title="mdi-account-settings"></i></li>
											<li><i class="mdi mdi-account-settings-variant" data-bs-toggle="tooltip" title="mdi-account-settings-variant"></i></li>
											<li><i class="mdi mdi-account-star" data-bs-toggle="tooltip" title="mdi-account-star"></i></li>
											<li><i class="mdi mdi-account-switch" data-bs-toggle="tooltip" title="mdi-account-switch"></i></li>
											<li><i class="mdi mdi-adjust" data-bs-toggle="tooltip" title="mdi-adjust"></i></li>
											<li><i class="mdi mdi-air-conditioner" data-bs-toggle="tooltip" title="mdi-air-conditioner"></i></li>
											<li><i class="mdi mdi-airballoon" data-bs-toggle="tooltip" title="mdi-airballoon"></i></li>
											<li><i class="mdi mdi-airplane" data-bs-toggle="tooltip" title="mdi-airplane"></i></li>
											<li><i class="mdi mdi-airplane-landing" data-bs-toggle="tooltip" title="mdi-airplane-landing"></i></li>
											<li><i class="mdi mdi-airplane-off" data-bs-toggle="tooltip" title="mdi-airplane-off"></i></li>
											<li><i class="mdi mdi-airplane-takeoff" data-bs-toggle="tooltip" title="mdi-airplane-takeoff"></i></li>
											<li><i class="mdi mdi-airplay" data-bs-toggle="tooltip" title="mdi-airplay"></i></li>
											<li><i class="mdi mdi-alarm" data-bs-toggle="tooltip" title="mdi-alarm"></i></li>
											<li><i class="mdi mdi-alarm-bell" data-bs-toggle="tooltip" title="mdi-alarm-bell"></i></li>
											<li><i class="mdi mdi-alarm-check" data-bs-toggle="tooltip" title="mdi-alarm-check"></i></li>
											<li><i class="mdi mdi-alarm-light" data-bs-toggle="tooltip" title="mdi-alarm-light"></i></li>
											<li><i class="mdi mdi-alarm-multiple" data-bs-toggle="tooltip" title="mdi-alarm-multiple"></i></li>
											<li><i class="mdi mdi-alarm-off" data-bs-toggle="tooltip" title="mdi-alarm-off"></i></li>
											<li><i class="mdi mdi-alarm-plus" data-bs-toggle="tooltip" title="mdi-alarm-plus"></i></li>
											<li><i class="mdi mdi-alarm-snooze" data-bs-toggle="tooltip" title="mdi-alarm-snooze"></i></li>
											<li><i class="mdi mdi-album" data-bs-toggle="tooltip" title="mdi-album"></i></li>
											<li><i class="mdi mdi-alert" data-bs-toggle="tooltip" title="mdi-alert"></i></li>
											<li><i class="mdi mdi-alert-box" data-bs-toggle="tooltip" title="mdi-alert-box"></i></li>
											<li><i class="mdi mdi-alert-circle" data-bs-toggle="tooltip" title="mdi-alert-circle"></i></li>
											<li><i class="mdi mdi-alert-circle-outline" data-bs-toggle="tooltip" title="mdi-alert-circle-outline"></i></li>
											<li><i class="mdi mdi-alert-decagram" data-bs-toggle="tooltip" title="mdi-alert-decagram"></i></li>
											<li><i class="mdi mdi-alert-octagon" data-bs-toggle="tooltip" title="mdi-alert-octagon"></i></li>
											<li><i class="mdi mdi-alert-octagram" data-bs-toggle="tooltip" title="mdi-alert-octagram"></i></li>
											<li><i class="mdi mdi-alert-outline" data-bs-toggle="tooltip" title="mdi-alert-outline"></i></li>
											<li><i class="mdi mdi-all-inclusive" data-bs-toggle="tooltip" title="mdi-all-inclusive"></i></li>
											<li><i class="mdi mdi-alpha" data-bs-toggle="tooltip" title="mdi-alpha"></i></li>
											<li><i class="mdi mdi-alphabetical" data-bs-toggle="tooltip" title="mdi-alphabetical"></i></li>
											<li><i class="mdi mdi-altimeter" data-bs-toggle="tooltip" title="mdi-altimeter"></i></li>
											<li><i class="mdi mdi-amazon" data-bs-toggle="tooltip" title="mdi-amazon"></i></li>
											<li><i class="mdi mdi-amazon-clouddrive" data-bs-toggle="tooltip" title="mdi-amazon-clouddrive"></i></li>
											<li><i class="mdi mdi-ambulance" data-bs-toggle="tooltip" title="mdi-ambulance"></i></li>
											<li><i class="mdi mdi-amplifier" data-bs-toggle="tooltip" title="mdi-amplifier"></i></li>
											<li><i class="mdi mdi-anchor" data-bs-toggle="tooltip" title="mdi-anchor"></i></li>
											<li><i class="mdi mdi-android" data-bs-toggle="tooltip" title="mdi-android"></i></li>
											<li><i class="mdi mdi-android-debug-bridge" data-bs-toggle="tooltip" title="mdi-android-debug-bridge"></i></li>
											<li><i class="mdi mdi-android-head" data-bs-toggle="tooltip" title="mdi-android-head"></i></li>
											<li><i class="mdi mdi-android-studio" data-bs-toggle="tooltip" title="mdi-android-studio"></i></li>
											<li><i class="mdi mdi-angular" data-bs-toggle="tooltip" title="mdi-angular"></i></li>
											<li><i class="mdi mdi-angularjs" data-bs-toggle="tooltip" title="mdi-angularjs"></i></li>
											<li><i class="mdi mdi-animation" data-bs-toggle="tooltip" title="mdi-animation"></i></li>
											<li><i class="mdi mdi-apple" data-bs-toggle="tooltip" title="mdi-apple"></i></li>
											<li><i class="mdi mdi-apple-finder" data-bs-toggle="tooltip" title="mdi-apple-finder"></i></li>
											<li><i class="mdi mdi-apple-ios" data-bs-toggle="tooltip" title="mdi-apple-ios"></i></li>
											<li><i class="mdi mdi-apple-keyboard-caps" data-bs-toggle="tooltip" title="mdi-apple-keyboard-caps"></i></li>
											<li><i class="mdi mdi-apple-keyboard-command" data-bs-toggle="tooltip" title="mdi-apple-keyboard-command"></i></li>
											<li><i class="mdi mdi-apple-keyboard-control" data-bs-toggle="tooltip" title="mdi-apple-keyboard-control"></i></li>
											<li><i class="mdi mdi-apple-keyboard-option" data-bs-toggle="tooltip" title="mdi-apple-keyboard-option"></i></li>
											<li><i class="mdi mdi-apple-keyboard-shift" data-bs-toggle="tooltip" title="mdi-apple-keyboard-shift"></i></li>
											<li><i class="mdi mdi-apple-mobileme" data-bs-toggle="tooltip" title="mdi-apple-mobileme"></i></li>
											<li><i class="mdi mdi-apple-safari" data-bs-toggle="tooltip" title="mdi-apple-safari"></i></li>
											<li><i class="mdi mdi-application" data-bs-toggle="tooltip" title="mdi-application"></i></li>
											<li><i class="mdi mdi-approval" data-bs-toggle="tooltip" title="mdi-approval"></i></li>
											<li><i class="mdi mdi-apps" data-bs-toggle="tooltip" title="mdi-apps"></i></li>
											<li><i class="mdi mdi-archive" data-bs-toggle="tooltip" title="mdi-archive"></i></li>
											<li><i class="mdi mdi-arrange-bring-forward" data-bs-toggle="tooltip" title="mdi-arrange-bring-forward"></i></li>
											<li><i class="mdi mdi-arrange-send-to-back" data-bs-toggle="tooltip" title="mdi-arrange-send-to-back"></i></li>
											<li><i class="mdi mdi-arrange-bring-to-front" data-bs-toggle="tooltip" title="mdi-arrange-bring-to-front"></i></li>
											<li><i class="mdi mdi-arrange-send-backward" data-bs-toggle="tooltip" title="mdi-arrange-send-backward"></i></li>
											<li><i class="mdi mdi-arrow-all" data-bs-toggle="tooltip" title="mdi-arrow-all"></i></li>
											<li><i class="mdi mdi-arrow-bottom-left" data-bs-toggle="tooltip" title="mdi-arrow-bottom-left"></i></li>
											<li><i class="mdi mdi-arrow-bottom-right" data-bs-toggle="tooltip" title="mdi-arrow-bottom-right"></i></li>
											<li><i class="mdi mdi-arrow-collapse" data-bs-toggle="tooltip" title="mdi-arrow-collapse"></i></li>
											<li><i class="mdi mdi-arrow-collapse-all" data-bs-toggle="tooltip" title="mdi-arrow-collapse-all"></i></li>
											<li><i class="mdi mdi-arrow-collapse-down" data-bs-toggle="tooltip" title="mdi-arrow-collapse-down"></i></li>
											<li><i class="mdi mdi-arrow-collapse-left" data-bs-toggle="tooltip" title="mdi-arrow-collapse-left"></i></li>
											<li><i class="mdi mdi-arrow-collapse-right" data-bs-toggle="tooltip" title="mdi-arrow-collapse-right"></i></li>
											<li><i class="mdi mdi-arrow-collapse-up" data-bs-toggle="tooltip" title="mdi-arrow-collapse-up"></i></li>
											<li><i class="mdi mdi-arrow-down" data-bs-toggle="tooltip" title="mdi-arrow-down"></i></li>
											<li><i class="mdi mdi-arrow-down-bold" data-bs-toggle="tooltip" title="mdi-arrow-down-bold"></i></li>
											<li><i class="mdi mdi-arrow-down-bold-box" data-bs-toggle="tooltip" title="mdi-arrow-down-bold-box"></i></li>
											<li><i class="mdi mdi-arrow-down-bold-box-outline" data-bs-toggle="tooltip" title="mdi-arrow-down-bold-box-outline"></i></li>
											<li><i class="mdi mdi-arrow-down-bold-circle" data-bs-toggle="tooltip" title="mdi-arrow-down-bold-circle"></i></li>
											<li><i class="mdi mdi-arrow-down-bold-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-down-bold-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-down-box" data-bs-toggle="tooltip" title="mdi-arrow-down-box"></i></li>
											<li><i class="mdi mdi-arrow-down-drop-circle" data-bs-toggle="tooltip" title="mdi-arrow-down-drop-circle"></i></li>
											<li><i class="mdi mdi-arrow-down-drop-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-down-drop-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-down-thick" data-bs-toggle="tooltip" title="mdi-arrow-down-thick"></i></li>
											<li><i class="mdi mdi-arrow-expand" data-bs-toggle="tooltip" title="mdi-arrow-expand"></i></li>
											<li><i class="mdi mdi-arrow-expand-all" data-bs-toggle="tooltip" title="mdi-arrow-expand-all"></i></li>
											<li><i class="mdi mdi-arrow-expand-down" data-bs-toggle="tooltip" title="mdi-arrow-expand-down"></i></li>
											<li><i class="mdi mdi-arrow-expand-left" data-bs-toggle="tooltip" title="mdi-arrow-expand-left"></i></li>
											<li><i class="mdi mdi-arrow-expand-right" data-bs-toggle="tooltip" title="mdi-arrow-expand-right"></i></li>
											<li><i class="mdi mdi-arrow-expand-up" data-bs-toggle="tooltip" title="mdi-arrow-expand-up"></i></li>
											<li><i class="mdi mdi-arrow-left" data-bs-toggle="tooltip" title="mdi-arrow-left"></i></li>
											<li><i class="mdi mdi-arrow-left-bold" data-bs-toggle="tooltip" title="mdi-arrow-left-bold"></i></li>
											<li><i class="mdi mdi-arrow-left-bold-box" data-bs-toggle="tooltip" title="mdi-arrow-left-bold-box"></i></li>
											<li><i class="mdi mdi-arrow-left-bold-box-outline" data-bs-toggle="tooltip" title="mdi-arrow-left-bold-box-outline"></i></li>
											<li><i class="mdi mdi-arrow-left-bold-circle" data-bs-toggle="tooltip" title="mdi-arrow-left-bold-circle"></i></li>
											<li><i class="mdi mdi-arrow-left-bold-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-left-bold-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-left-box" data-bs-toggle="tooltip" title="mdi-arrow-left-box"></i></li>
											<li><i class="mdi mdi-arrow-left-drop-circle" data-bs-toggle="tooltip" title="mdi-arrow-left-drop-circle"></i></li>
											<li><i class="mdi mdi-arrow-left-drop-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-left-drop-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-left-thick" data-bs-toggle="tooltip" title="mdi-arrow-left-thick"></i></li>
											<li><i class="mdi mdi-arrow-right" data-bs-toggle="tooltip" title="mdi-arrow-right"></i></li>
											<li><i class="mdi mdi-arrow-right-bold" data-bs-toggle="tooltip" title="mdi-arrow-right-bold"></i></li>
											<li><i class="mdi mdi-arrow-right-bold-box" data-bs-toggle="tooltip" title="mdi-arrow-right-bold-box"></i></li>
											<li><i class="mdi mdi-arrow-right-bold-box-outline" data-bs-toggle="tooltip" title="mdi-arrow-right-bold-box-outline"></i></li>
											<li><i class="mdi mdi-arrow-right-bold-circle" data-bs-toggle="tooltip" title="mdi-arrow-right-bold-circle"></i></li>
											<li><i class="mdi mdi-arrow-right-bold-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-right-bold-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-right-box" data-bs-toggle="tooltip" title="mdi-arrow-right-box"></i></li>
											<li><i class="mdi mdi-arrow-right-drop-circle" data-bs-toggle="tooltip" title="mdi-arrow-right-drop-circle"></i></li>
											<li><i class="mdi mdi-arrow-right-drop-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-right-drop-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-right-thick" data-bs-toggle="tooltip" title="mdi-arrow-right-thick"></i></li>
											<li><i class="mdi mdi-arrow-top-left" data-bs-toggle="tooltip" title="mdi-arrow-top-left"></i></li>
											<li><i class="mdi mdi-arrow-top-right" data-bs-toggle="tooltip" title="mdi-arrow-top-right"></i></li>
											<li><i class="mdi mdi-arrow-up" data-bs-toggle="tooltip" title="mdi-arrow-up"></i></li>
											<li><i class="mdi mdi-arrow-up-bold" data-bs-toggle="tooltip" title="mdi-arrow-up-bold"></i></li>
											<li><i class="mdi mdi-arrow-up-bold-box" data-bs-toggle="tooltip" title="mdi-arrow-up-bold-box"></i></li>
											<li><i class="mdi mdi-arrow-up-bold-box-outline" data-bs-toggle="tooltip" title="mdi-arrow-up-bold-box-outline"></i></li>
											<li><i class="mdi mdi-arrow-up-bold-circle" data-bs-toggle="tooltip" title="mdi-arrow-up-bold-circle"></i></li>
											<li><i class="mdi mdi-arrow-up-bold-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-up-bold-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-up-box" data-bs-toggle="tooltip" title="mdi-arrow-up-box"></i></li>
											<li><i class="mdi mdi-arrow-up-drop-circle" data-bs-toggle="tooltip" title="mdi-arrow-up-drop-circle"></i></li>
											<li><i class="mdi mdi-arrow-up-drop-circle-outline" data-bs-toggle="tooltip" title="mdi-arrow-up-drop-circle-outline"></i></li>
											<li><i class="mdi mdi-arrow-up-thick" data-bs-toggle="tooltip" title="mdi-arrow-up-thick"></i></li>
											<li><i class="mdi mdi-assistant" data-bs-toggle="tooltip" title="mdi-assistant"></i></li>
											<li><i class="mdi mdi-asterisk" data-bs-toggle="tooltip" title="mdi-asterisk"></i></li>
											<li><i class="mdi mdi-at" data-bs-toggle="tooltip" title="mdi-at"></i></li>
											<li><i class="mdi mdi-atom" data-bs-toggle="tooltip" title="mdi-atom"></i></li>
											<li><i class="mdi mdi-attachment" data-bs-toggle="tooltip" title="mdi-attachment"></i></li>
											<li><i class="mdi mdi-audiobook" data-bs-toggle="tooltip" title="mdi-audiobook"></i></li>
											<li><i class="mdi mdi-auto-fix" data-bs-toggle="tooltip" title="mdi-auto-fix"></i></li>
											<li><i class="mdi mdi-auto-upload" data-bs-toggle="tooltip" title="mdi-auto-upload"></i></li>
											<li><i class="mdi mdi-autorenew" data-bs-toggle="tooltip" title="mdi-autorenew"></i></li>
											<li><i class="mdi mdi-av-timer" data-bs-toggle="tooltip" title="mdi-av-timer"></i></li>
											<li><i class="mdi mdi-baby" data-bs-toggle="tooltip" title="mdi-baby"></i></li>
											<li><i class="mdi mdi-baby-buggy" data-bs-toggle="tooltip" title="mdi-baby-buggy"></i></li>
											<li><i class="mdi mdi-backburger" data-bs-toggle="tooltip" title="mdi-backburger"></i></li>
											<li><i class="mdi mdi-backspace" data-bs-toggle="tooltip" title="mdi-backspace"></i></li>
											<li><i class="mdi mdi-backup-restore" data-bs-toggle="tooltip" title="mdi-backup-restore"></i></li>
											<li><i class="mdi mdi-bandcamp" data-bs-toggle="tooltip" title="mdi-bandcamp"></i></li>
											<li><i class="mdi mdi-bank" data-bs-toggle="tooltip" title="mdi-bank"></i></li>
											<li><i class="mdi mdi-barcode" data-bs-toggle="tooltip" title="mdi-barcode"></i></li>
											<li><i class="mdi mdi-barcode-scan" data-bs-toggle="tooltip" title="mdi-barcode-scan"></i></li>
											<li><i class="mdi mdi-barley" data-bs-toggle="tooltip" title="mdi-barley"></i></li>
											<li><i class="mdi mdi-barrel" data-bs-toggle="tooltip" title="mdi-barrel"></i></li>
											<li><i class="mdi mdi-basecamp" data-bs-toggle="tooltip" title="mdi-basecamp"></i></li>
											<li><i class="mdi mdi-basket" data-bs-toggle="tooltip" title="mdi-basket"></i></li>
											<li><i class="mdi mdi-basket-fill" data-bs-toggle="tooltip" title="mdi-basket-fill"></i></li>
											<li><i class="mdi mdi-basket-unfill" data-bs-toggle="tooltip" title="mdi-basket-unfill"></i></li>
											<li><i class="mdi mdi-battery" data-bs-toggle="tooltip" title="mdi-battery"></i></li>
											<li><i class="mdi mdi-battery-10" data-bs-toggle="tooltip" title="mdi-battery-10"></i></li>
											<li><i class="mdi mdi-battery-20" data-bs-toggle="tooltip" title="mdi-battery-20"></i></li>
											<li><i class="mdi mdi-battery-30" data-bs-toggle="tooltip" title="mdi-battery-30"></i></li>
											<li><i class="mdi mdi-battery-40" data-bs-toggle="tooltip" title="mdi-battery-40"></i></li>
											<li><i class="mdi mdi-battery-50" data-bs-toggle="tooltip" title="mdi-battery-50"></i></li>
											<li><i class="mdi mdi-battery-60" data-bs-toggle="tooltip" title="mdi-battery-60"></i></li>
											<li><i class="mdi mdi-battery-70" data-bs-toggle="tooltip" title="mdi-battery-70"></i></li>
											<li><i class="mdi mdi-battery-80" data-bs-toggle="tooltip" title="mdi-battery-80"></i></li>
											<li><i class="mdi mdi-battery-90" data-bs-toggle="tooltip" title="mdi-battery-90"></i></li>
											<li><i class="mdi mdi-battery-alert" data-bs-toggle="tooltip" title="mdi-battery-alert"></i></li>
											<li><i class="mdi mdi-battery-charging" data-bs-toggle="tooltip" title="mdi-battery-charging"></i></li>
											<li><i class="mdi mdi-battery-charging-100" data-bs-toggle="tooltip" title="mdi-battery-charging-100"></i></li>
											<li><i class="mdi mdi-battery-charging-20" data-bs-toggle="tooltip" title="mdi-battery-charging-20"></i></li>
											<li><i class="mdi mdi-battery-charging-30" data-bs-toggle="tooltip" title="mdi-battery-charging-30"></i></li>
											<li><i class="mdi mdi-battery-charging-40" data-bs-toggle="tooltip" title="mdi-battery-charging-40"></i></li>
											<li><i class="mdi mdi-battery-charging-60" data-bs-toggle="tooltip" title="mdi-battery-charging-60"></i></li>
											<li><i class="mdi mdi-battery-charging-80" data-bs-toggle="tooltip" title="mdi-battery-charging-80"></i></li>
											<li><i class="mdi mdi-battery-charging-90" data-bs-toggle="tooltip" title="mdi-battery-charging-90"></i></li>
											<li><i class="mdi mdi-battery-minus" data-bs-toggle="tooltip" title="mdi-battery-minus"></i></li>
											<li><i class="mdi mdi-battery-negative" data-bs-toggle="tooltip" title="mdi-battery-negative"></i></li>
											<li><i class="mdi mdi-battery-outline" data-bs-toggle="tooltip" title="mdi-battery-outline"></i></li>
											<li><i class="mdi mdi-battery-plus" data-bs-toggle="tooltip" title="mdi-battery-plus"></i></li>
											<li><i class="mdi mdi-battery-unknown" data-bs-toggle="tooltip" title="mdi-battery-unknown"></i></li>
											<li><i class="mdi mdi-beach" data-bs-toggle="tooltip" title="mdi-beach"></i></li>
											<li><i class="mdi mdi-zip-box" data-bs-toggle="tooltip" title="mdi-zip-box"></i></li>
											<li><i class="mdi mdi-youtube-play" data-bs-toggle="tooltip" title="mdi-youtube-play"></i></li>
											<li><i class="mdi mdi-yin-yang" data-bs-toggle="tooltip" title="mdi-yin-yang"></i></li>
											<li><i class="mdi mdi-yelp" data-bs-toggle="tooltip" title="mdi-yelp"></i></li>
											<li><i class="mdi mdi-yammer" data-bs-toggle="tooltip" title="mdi-yammer"></i></li>
											<li><i class="mdi mdi-xmpp" data-bs-toggle="tooltip" title="mdi-xmpp"></i></li>
											<li><i class="mdi mdi-xml" data-bs-toggle="tooltip" title="mdi-xml"></i></li>
											<li><i class="mdi mdi-wrench" data-bs-toggle="tooltip" title="mdi-wrench"></i></li>
											<li><i class="mdi mdi-wrap" data-bs-toggle="tooltip" title="mdi-wrap"></i></li>
											<li><i class="mdi mdi-wunderlist" data-bs-toggle="tooltip" title="mdi-wunderlist"></i></li>
											<li><i class="mdi mdi-wrench" data-bs-toggle="tooltip" title="mdi-wrench"></i></li>
											<li><i class="mdi mdi-vpn" data-bs-toggle="tooltip" title="mdi-vpn"></i></li>
											<li><i class="mdi mdi-volume-off" data-bs-toggle="tooltip" title="mdi-volume-off"></i></li>
											<li><i class="mdi mdi-volume-mute" data-bs-toggle="tooltip" title="mdi-volume-mute"></i></li>
											<li><i class="mdi mdi-vlc" data-bs-toggle="tooltip" title="mdi-vlc"></i></li>
											<li><i class="mdi mdi-video" data-bs-toggle="tooltip" title="mdi-video"></i></li>
											<li><i class="mdi mdi-usb" data-bs-toggle="tooltip" title="mdi-usb"></i></li>
											<li><i class="mdi mdi-upload-network" data-bs-toggle="tooltip" title="mdi-upload-network"></i></li>
											<li><i class="mdi mdi-update" data-bs-toggle="tooltip" title="mdi-update"></i></li>
											<li><i class="mdi mdi-unity" data-bs-toggle="tooltip" title="mdi-unity"></i></li>
											<li><i class="mdi mdi-undo" data-bs-toggle="tooltip" title="mdi-undo"></i></li>
											<li><i class="mdi mdi-ubuntu" data-bs-toggle="tooltip" title="mdi-ubuntu"></i></li>
											<li><i class="mdi mdi-tune" data-bs-toggle="tooltip" title="mdi-tune"></i></li>
											<li><i class="mdi mdi-truck-trailer" data-bs-toggle="tooltip" title="mdi-truck-trailer"></i></li>
											<li><i class="mdi mdi-truck" data-bs-toggle="tooltip" title="mdi-truck"></i></li>
											<li><i class="mdi mdi-svg" data-bs-toggle="tooltip" title="mdi-svg"></i></li>
											<li><i class="mdi mdi-subway" data-bs-toggle="tooltip" title="mdi-subway"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
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