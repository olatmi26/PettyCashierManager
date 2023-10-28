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
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/weather/weathericons.css">
		
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
									<li><a href="icon-material.html">Material Icons</a></li>
									<li><a href="icon-pe7.html">Pe7 Icons</a></li>
									<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
									<li><a href="icon-themify.html">Themify Icons</a></li>
									<li><a class="active" href="icon-weather.html">Weather Icons</a></li>
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
							<h5>Weather Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Weather Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="wi wi-day-cloudy-high" data-bs-toggle="tooltip" title="wi wi-day-cloudy-high"></i></li>
											<li><i class="wi wi-moonrise" data-bs-toggle="tooltip" title="wi wi-moonrise"></i></li>
											<li><i class="wi wi-na" data-bs-toggle="tooltip" title="wi wi-na"></i></li>
											<li><i class="wi wi-volcano" data-bs-toggle="tooltip" title="wi wi-volcano"></i></li>
											<li><i class="wi wi-day-light-wind" data-bs-toggle="tooltip" title="wi wi-day-light-wind"></i></li>
											<li><i class="wi wi-moonset" data-bs-toggle="tooltip" title="wi wi-moonset"></i></li>
											<li><i class="wi wi-flood" data-bs-toggle="tooltip" title="wi wi-flood"></i></li>
											<li><i class="wi wi-train" data-bs-toggle="tooltip" title="wi wi-train"></i></li>
											<li><i class="wi wi-day-sleet" data-bs-toggle="tooltip" title="wi wi-day-sleet"></i></li>
											<li><i class="wi wi-night-sleet" data-bs-toggle="tooltip" title="wi wi-night-sleet"></i></li>
											<li><i class="wi wi-sandstorm" data-bs-toggle="tooltip" title="wi wi-sandstorm"></i></li>
											<li><i class="wi wi-small-craft-advisory" data-bs-toggle="tooltip" title="wi wi-small-craft-advisory"></i></li>
											<li><i class="wi wi-day-haze" data-bs-toggle="tooltip" title="wi wi-day-haze"></i></li>
											<li><i class="wi wi-night-alt-sleet" data-bs-toggle="tooltip" title="wi wi-night-alt-sleet"></i></li>
											<li><i class="wi wi-tsunami" data-bs-toggle="tooltip" title="wi wi-tsunami"></i></li>
											<li><i class="wi wi-gale-warning" data-bs-toggle="tooltip" title="wi wi-gale-warning"></i></li>
											<li><i class="wi wi-night-cloudy-high" data-bs-toggle="tooltip" title="wi wi-night-cloudy-high"></i></li>
											<li><i class="wi wi-raindrop" data-bs-toggle="tooltip" title="wi wi-raindrop"></i></li>
											<li><i class="wi wi-earthquake" data-bs-toggle="tooltip" title="wi wi-earthquake"></i></li>
											<li><i class="wi wi-storm-warning" data-bs-toggle="tooltip" title="wi wi-storm-warning"></i></li>
											<li><i class="wi wi-night-alt-partly-cloudy" data-bs-toggle="tooltip" title="wi wi-night-alt-partly-cloudy"></i></li>
											<li><i class="wi wi-barometer" data-bs-toggle="tooltip" title="wi wi-barometer"></i></li>
											<li><i class="wi wi-fire" data-bs-toggle="tooltip" title="wi wi-fire"></i></li>
											<li><i class="wi wi-hurricane-warning" data-bs-toggle="tooltip" title="wi wi-hurricane-warning"></i></li>
											<li><i class="wi wi-sleet" data-bs-toggle="tooltip" title="wi wi-sleet"></i></li>
											<li><i class="wi wi-humidity" data-bs-toggle="tooltip" title="wi wi-humidity"></i></li>
											<li><i class="wi wi-day-sunny" data-bs-toggle="tooltip" title="wi wi-day-sunny"></i></li>
											<li><i class="wi wi-day-cloudy" data-bs-toggle="tooltip" title="wi wi-day-cloudy"></i></li>
											<li><i class="wi wi-day-cloudy-gusts" data-bs-toggle="tooltip" title="wi wi-day-cloudy-gusts"></i></li>
											<li><i class="wi wi-day-cloudy-windy" data-bs-toggle="tooltip" title="wi wi-day-cloudy-windy"></i></li>
											<li><i class="wi wi-day-fog" data-bs-toggle="tooltip" title="wi wi-day-fog"></i></li>
											<li><i class="wi wi-day-hail" data-bs-toggle="tooltip" title="wi wi-day-hail"></i></li>
											<li><i class="wi wi-day-haze" data-bs-toggle="tooltip" title="wi wi-day-haze"></i></li>
											<li><i class="wi wi-day-lightning" data-bs-toggle="tooltip" title="wi wi-day-lightning"></i></li>
											<li><i class="wi wi-day-rain" data-bs-toggle="tooltip" title="wi wi-day-rain"></i></li>
											<li><i class="wi wi-day-rain-mix" data-bs-toggle="tooltip" title="wi wi-day-rain-mix"></i></li>
											<li><i class="wi wi-day-rain-wind" data-bs-toggle="tooltip" title="wi wi-day-rain-wind"></i></li>
											<li><i class="wi wi-day-showers" data-bs-toggle="tooltip" title="wi wi-day-showers"></i></li>
											<li><i class="wi wi-day-sleet" data-bs-toggle="tooltip" title="wi wi-day-sleet"></i></li>
											<li><i class="wi wi-day-sleet-storm" data-bs-toggle="tooltip" title="wi wi-day-sleet-storm"></i></li>
											<li><i class="wi wi-day-snow" data-bs-toggle="tooltip" title="wi wi-day-snow"></i></li>
											<li><i class="wi wi-day-snow-thunderstorm" data-bs-toggle="tooltip" title="wi wi-day-snow-thunderstorm"></i></li>
											<li><i class="wi wi-day-snow-wind" data-bs-toggle="tooltip" title="wi wi-day-snow-wind"></i></li>
											<li><i class="wi wi-day-sprinkle" data-bs-toggle="tooltip" title="wi wi-day-sprinkle"></i></li>
											<li><i class="wi wi-day-storm-showers" data-bs-toggle="tooltip" title="wi wi-day-storm-showers"></i></li>
											<li><i class="wi wi-day-sunny-overcast" data-bs-toggle="tooltip" title="wi wi-day-sunny-overcast"></i></li>
											<li><i class="wi wi-day-thunderstorm" data-bs-toggle="tooltip" title="wi wi-day-thunderstorm"></i></li>
											<li><i class="wi wi-day-windy" data-bs-toggle="tooltip" title="wi wi-day-windy"></i></li>
											<li><i class="wi wi-solar-eclipse" data-bs-toggle="tooltip" title="wi wi-solar-eclipse"></i></li>
											<li><i class="wi wi-hot" data-bs-toggle="tooltip" title="wi wi-hot"></i></li>
											<li><i class="wi wi-day-cloudy-high" data-bs-toggle="tooltip" title="wi wi-day-cloudy-high"></i></li>
											<li><i class="wi wi-day-light-wind" data-bs-toggle="tooltip" title="wi wi-day-light-wind"></i></li>
											<li><i class="wi wi-night-clear" data-bs-toggle="tooltip" title="wi wi-night-clear"></i></li>
											<li><i class="wi wi-night-alt-cloudy" data-bs-toggle="tooltip" title="wi wi-night-alt-cloudy"></i></li>
											<li><i class="wi wi-night-alt-cloudy-gusts" data-bs-toggle="tooltip" title="wi wi-night-alt-cloudy-gusts"></i></li>
											<li><i class="wi wi-night-alt-cloudy-windy" data-bs-toggle="tooltip" title="wi wi-night-alt-cloudy-windy"></i></li>
											<li><i class="wi wi-night-alt-hail" data-bs-toggle="tooltip" title="wi wi-night-alt-hail"></i></li>
											<li><i class="wi wi-night-alt-lightning" data-bs-toggle="tooltip" title="wi wi-night-alt-lightning"></i></li>
											<li><i class="wi wi-night-alt-rain" data-bs-toggle="tooltip" title="wi wi-night-alt-rain"></i></li>
											<li><i class="wi wi-night-alt-rain-mix" data-bs-toggle="tooltip" title="wi wi-night-alt-rain-mix"></i></li>
											<li><i class="wi wi-night-alt-rain-wind" data-bs-toggle="tooltip" title="wi wi-night-alt-rain-wind"></i></li>
											<li><i class="wi wi-night-alt-showers" data-bs-toggle="tooltip" title="wi wi-night-alt-showers"></i></li>
											<li><i class="wi wi-night-alt-sleet" data-bs-toggle="tooltip" title="wi wi-night-alt-sleet"></i></li>
											<li><i class="wi wi-night-alt-sleet-storm" data-bs-toggle="tooltip" title="wi wi-night-alt-sleet-storm"></i></li>
											<li><i class="wi wi-night-alt-snow" data-bs-toggle="tooltip" title="wi wi-night-alt-snow"></i></li>
											<li><i class="wi wi-night-alt-snow-thunderstorm" data-bs-toggle="tooltip" title="wi wi-night-alt-snow-thunderstorm"></i></li>
											<li><i class="wi wi-night-alt-snow-wind" data-bs-toggle="tooltip" title="wi wi-night-alt-snow-wind"></i></li>
											<li><i class="wi wi-night-alt-sprinkle" data-bs-toggle="tooltip" title="wi wi-night-alt-sprinkle"></i></li>
											<li><i class="wi wi-night-alt-storm-showers" data-bs-toggle="tooltip" title="wi wi-night-alt-storm-showers"></i></li>
											<li><i class="wi wi-night-alt-thunderstorm" data-bs-toggle="tooltip" title="wi wi-night-alt-thunderstorm"></i></li>
											<li><i class="wi wi-night-cloudy" data-bs-toggle="tooltip" title="wi wi-night-cloudy"></i></li>
											<li><i class="wi wi-night-cloudy-gusts" data-bs-toggle="tooltip" title="wi wi-night-cloudy-gusts"></i></li>
											<li><i class="wi wi-night-cloudy-windy" data-bs-toggle="tooltip" title="wi wi-night-cloudy-windy"></i></li>
											<li><i class="wi wi-night-fog" data-bs-toggle="tooltip" title="wi wi-night-fog"></i></li>
											<li><i class="wi wi-night-hail" data-bs-toggle="tooltip" title="wi wi-night-hail"></i></li>
											<li><i class="wi wi-night-lightning" data-bs-toggle="tooltip" title="wi wi-night-lightning"></i></li>
											<li><i class="wi wi-night-partly-cloudy" data-bs-toggle="tooltip" title="wi wi-night-partly-cloudy"></i></li>
											<li><i class="wi wi-night-rain" data-bs-toggle="tooltip" title="wi wi-night-rain"></i></li>
											<li><i class="wi wi-night-rain-mix" data-bs-toggle="tooltip" title="wi wi-night-rain-mix"></i></li>
											<li><i class="wi wi-night-rain-wind" data-bs-toggle="tooltip" title="wi wi-night-rain-wind"></i></li>
											<li><i class="wi wi-night-showers" data-bs-toggle="tooltip" title="wi wi-night-showers"></i></li>
											<li><i class="wi wi-night-sleet" data-bs-toggle="tooltip" title="wi wi-night-sleet"></i></li>
											<li><i class="wi wi-night-sleet-storm" data-bs-toggle="tooltip" title="wi wi-night-sleet-storm"></i></li>
											<li><i class="wi wi-night-snow" data-bs-toggle="tooltip" title="wi wi-night-snow"></i></li>
											<li><i class="wi wi-night-snow-thunderstorm" data-bs-toggle="tooltip" title="wi wi-night-snow-thunderstorm"></i></li>
											<li><i class="wi wi-night-snow-wind" data-bs-toggle="tooltip" title="wi wi-night-snow-wind"></i></li>
											<li><i class="wi wi-night-sprinkle" data-bs-toggle="tooltip" title="wi wi-night-sprinkle"></i></li>
											<li><i class="wi wi-night-storm-showers" data-bs-toggle="tooltip" title="wi wi-night-storm-showers"></i></li>
											<li><i class="wi wi-night-thunderstorm" data-bs-toggle="tooltip" title="wi wi-night-thunderstorm"></i></li>
											<li><i class="wi wi-lunar-eclipse" data-bs-toggle="tooltip" title="wi wi-lunar-eclipse"></i></li>
											<li><i class="wi wi-stars" data-bs-toggle="tooltip" title="wi wi-stars"></i></li>
											<li><i class="wi wi-storm-showers" data-bs-toggle="tooltip" title="wi wi-storm-showers"></i></li>
											<li><i class="wi wi-night-alt-cloudy-high" data-bs-toggle="tooltip" title="wi wi-night-alt-cloudy-high"></i></li>
											<li><i class="wi wi-night-cloudy-high" data-bs-toggle="tooltip" title="wi wi-night-cloudy-high"></i></li>
											<li><i class="wi wi-night-alt-partly-cloudy" data-bs-toggle="tooltip" title="wi wi-night-alt-partly-cloudy"></i></li>
											<li><i class="wi wi-cloud" data-bs-toggle="tooltip" title="wi wi-cloud"></i></li>
											<li><i class="wi wi-cloudy" data-bs-toggle="tooltip" title="wi wi-cloudy"></i></li>
											<li><i class="wi wi-cloudy-gusts" data-bs-toggle="tooltip" title="wi wi-cloudy-gusts"></i></li>
											<li><i class="wi wi-cloudy-windy" data-bs-toggle="tooltip" title="wi wi-cloudy-windy"></i></li>
											<li><i class="wi wi-fog" data-bs-toggle="tooltip" title="wi wi-fog"></i></li>
											<li><i class="wi wi-hail" data-bs-toggle="tooltip" title="wi wi-hail"></i></li>
											<li><i class="wi wi-rain" data-bs-toggle="tooltip" title="wi wi-rain"></i></li>
											<li><i class="wi wi-rain-mix" data-bs-toggle="tooltip" title="wi wi-rain-mix"></i></li>
											<li><i class="wi wi-rain-wind" data-bs-toggle="tooltip" title="wi wi-rain-wind"></i></li>
											<li><i class="wi wi-showers" data-bs-toggle="tooltip" title="wi wi-showers"></i></li>
											<li><i class="wi wi-sleet" data-bs-toggle="tooltip" title="wi wi-sleet"></i></li>
											<li><i class="wi wi-snow" data-bs-toggle="tooltip" title="wi wi-snow"></i></li>
											<li><i class="wi wi-sprinkle" data-bs-toggle="tooltip" title="wi wi-sprinkle"></i></li>
											<li><i class="wi wi-storm-showers" data-bs-toggle="tooltip" title="wi wi-storm-showers"></i></li>
											<li><i class="wi wi-thunderstorm" data-bs-toggle="tooltip" title="wi wi-thunderstorm"></i></li>
											<li><i class="wi wi-snow-wind" data-bs-toggle="tooltip" title="wi wi-snow-wind"></i></li>
											<li><i class="wi wi-snow" data-bs-toggle="tooltip" title="wi wi-snow"></i></li>
											<li><i class="wi wi-smog" data-bs-toggle="tooltip" title="wi wi-smog"></i></li>
											<li><i class="wi wi-smoke" data-bs-toggle="tooltip" title="wi wi-smoke"></i></li>
											<li><i class="wi wi-lightning" data-bs-toggle="tooltip" title="wi wi-lightning"></i></li>
											<li><i class="wi wi-raindrops" data-bs-toggle="tooltip" title="wi wi-raindrops"></i></li>
											<li><i class="wi wi-raindrop" data-bs-toggle="tooltip" title="wi wi-raindrop"></i></li>
											<li><i class="wi wi-snowflake-cold" data-bs-toggle="tooltip" title="wi wi-snowflake-cold"></i></li>
											<li><i class="wi wi-windy" data-bs-toggle="tooltip" title="wi wi-windy"></i></li>
											<li><i class="wi wi-strong-wind" data-bs-toggle="tooltip" title="wi wi-strong-wind"></i></li>
											<li><i class="wi wi-sandstorm" data-bs-toggle="tooltip" title="wi wi-sandstorm"></i></li>
											<li><i class="wi wi-earthquake" data-bs-toggle="tooltip" title="wi wi-earthquake"></i></li>
											<li><i class="wi wi-fire" data-bs-toggle="tooltip" title="wi wi-fire"></i></li>
											<li><i class="wi wi-flood" data-bs-toggle="tooltip" title="wi wi-flood"></i></li>
											<li><i class="wi wi-meteor" data-bs-toggle="tooltip" title="wi wi-meteor"></i></li>
											<li><i class="wi wi-tsunami" data-bs-toggle="tooltip" title="wi wi-tsunami"></i></li>
											<li><i class="wi wi-volcano" data-bs-toggle="tooltip" title="wi wi-volcano"></i></li>
											<li><i class="wi wi-hurricane" data-bs-toggle="tooltip" title="wi wi-hurricane"></i></li>
											<li><i class="wi wi-tornado" data-bs-toggle="tooltip" title="wi wi-tornado"></i></li>
											<li><i class="wi wi-small-craft-advisory" data-bs-toggle="tooltip" title="wi wi-small-craft-advisory"></i></li>
											<li><i class="wi wi-gale-warning" data-bs-toggle="tooltip" title="wi wi-gale-warning"></i></li>
											<li><i class="wi wi-storm-warning" data-bs-toggle="tooltip" title="wi wi-storm-warning"></i></li>
											<li><i class="wi wi-hurricane-warning" data-bs-toggle="tooltip" title="wi wi-hurricane-warning"></i></li>
											<li><i class="wi wi-wind-direction" data-bs-toggle="tooltip" title="wi wi-wind-direction"></i></li>
											<li><i class="wi wi-alien" data-bs-toggle="tooltip" title="wi wi-alien"></i></li>
											<li><i class="wi wi-celsius" data-bs-toggle="tooltip" title="wi wi-celsius"></i></li>
											<li><i class="wi wi-fahrenheit" data-bs-toggle="tooltip" title="wi wi-fahrenheit"></i></li>
											<li><i class="wi wi-degrees" data-bs-toggle="tooltip" title="wi wi-degrees"></i></li>
											<li><i class="wi wi-thermometer" data-bs-toggle="tooltip" title="wi wi-thermometer"></i></li>
											<li><i class="wi wi-thermometer-exterior" data-bs-toggle="tooltip" title="wi wi-thermometer-exterior"></i></li>
											<li><i class="wi wi-thermometer-internal" data-bs-toggle="tooltip" title="wi wi-thermometer-internal"></i></li>
											<li><i class="wi wi-cloud-down" data-bs-toggle="tooltip" title="wi wi-cloud-down"></i></li>
											<li><i class="wi wi-cloud-up" data-bs-toggle="tooltip" title="wi wi-cloud-up"></i></li>
											<li><i class="wi wi-cloud-refresh" data-bs-toggle="tooltip" title="wi wi-cloud-refresh"></i></li>
											<li><i class="wi wi-horizon" data-bs-toggle="tooltip" title="wi wi-horizon"></i></li>
											<li><i class="wi wi-horizon-alt" data-bs-toggle="tooltip" title="wi wi-horizon-alt"></i></li>
											<li><i class="wi wi-sunrise" data-bs-toggle="tooltip" title="wi wi-sunrise"></i></li>
											<li><i class="wi wi-sunset" data-bs-toggle="tooltip" title="wi wi-sunset"></i></li>
											<li><i class="wi wi-moonrise" data-bs-toggle="tooltip" title="wi wi-moonrise"></i></li>
											<li><i class="wi wi-moonset" data-bs-toggle="tooltip" title="wi wi-moonset"></i></li>
											<li><i class="wi wi-refresh" data-bs-toggle="tooltip" title="typcn typcn-rss-outline"></i></li>
											<li><i class="wi wi-refresh-alt" data-bs-toggle="tooltip" title="wi wi-refresh-alt"></i></li>
											<li><i class="wi wi-umbrella" data-bs-toggle="tooltip" title="wi wi-umbrella"></i></li>
											<li><i class="wi wi-barometer" data-bs-toggle="tooltip" title="wi wi-barometer"></i></li>
											<li><i class="wi wi-humidity" data-bs-toggle="tooltip" title="wi wi-humidity"></i></li>
											<li><i class="wi wi-na" data-bs-toggle="tooltip" title="wi wi-na"></i></li>
											<li><i class="wi wi-train" data-bs-toggle="tooltip" title="wi wi-train"></i></li>
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