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
		<link rel="stylesheet" href="assets/plugins/icons/typicons/typicons.css">
		
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
									<li><a href="icon-weather.html">Weather Icons</a></li>
									<li><a class="active" href="icon-typicon.html">Typicon Icons</a></li>
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
							<h5>Typicon Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Typicon Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li class="icons-list-item"><i class="typcn typcn-chart-pie-outline" data-bs-toggle="tooltip" title="typcn typcn-chart-pie-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-chart-pie" data-bs-toggle="tooltip" title="typcn typcn-chart-pie"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-chevron-left-outline" data-bs-toggle="tooltip" title="typcn typcn-chevron-left-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-chevron-left" data-bs-toggle="tooltip" title="typcn typcn-chevron-left"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-chevron-right-outline" data-bs-toggle="tooltip" title="typcn typcn-chevron-right-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-chevron-right" data-bs-toggle="tooltip" title="typcn typcn-chevron-right"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-clipboard" data-bs-toggle="tooltip" title="typcn typcn-clipboard"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-cloud-storage" data-bs-toggle="tooltip" title="typcn typcn-cloud-storage"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-cloud-storage-outline" data-bs-toggle="tooltip" title="typcn typcn-cloud-storage-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-code-outline" data-bs-toggle="tooltip" title="typcn typcn-code-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-code" data-bs-toggle="tooltip" title="typcn typcn-code"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-coffee" data-bs-toggle="tooltip" title="typcn typcn-coffee"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-cog-outline" data-bs-toggle="tooltip" title="typcn typcn-cog-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-cog" data-bs-toggle="tooltip" title="typcn typcn-cog"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-compass" data-bs-toggle="tooltip" title="typcn typcn-compass"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-contacts" data-bs-toggle="tooltip" title="typcn typcn-contacts"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-credit-card" data-bs-toggle="tooltip" title="typcn typcn-credit-card"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-css3" data-bs-toggle="tooltip" title="typcn typcn-css3"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-database" data-bs-toggle="tooltip" title="typcn typcn-database"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-delete-outline" data-bs-toggle="tooltip" title="typcn typcn-delete-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-delete" data-bs-toggle="tooltip" title="typcn typcn-delete"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-device-desktop" data-bs-toggle="tooltip" title="typcn typcn-device-desktop"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-device-laptop" data-bs-toggle="tooltip" title="typcn typcn-device-laptop"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-device-phone" data-bs-toggle="tooltip" title="typcn typcn-device-phone"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-device-tablet" data-bs-toggle="tooltip" title="typcn typcn-device-tablet"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-directions" data-bs-toggle="tooltip" title="typcn typcn-directions"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-divide-outline" data-bs-toggle="tooltip" title="typcn typcn-divide-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-divide" data-bs-toggle="tooltip" title="typcn typcn-divide"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document-add" data-bs-toggle="tooltip" title="typcn typcn-document-add"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document-delete" data-bs-toggle="tooltip" title="typcn typcn-document-delete"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document-text" data-bs-toggle="tooltip" title="typcn typcn-document-text"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-document" data-bs-toggle="tooltip" title="typcn typcn-document"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-download-outline" data-bs-toggle="tooltip" title="typcn typcn-download-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-download" data-bs-toggle="tooltip" title="typcn typcn-download"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-dropbox" data-bs-toggle="tooltip" title="typcn typcn-dropbox"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-edit" data-bs-toggle="tooltip" title="typcn typcn-edit"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-eject-outline" data-bs-toggle="tooltip" title="typcn typcn-eject-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-eject" data-bs-toggle="tooltip" title="typcn typcn-eject"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-equals-outline" data-bs-toggle="tooltip" title="typcn typcn-equals-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-equals" data-bs-toggle="tooltip" title="typcn typcn-equals"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-export-outline" data-bs-toggle="tooltip" title="typcn typcn-export-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-export" data-bs-toggle="tooltip" title="typcn typcn-export"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-eye-outline" data-bs-toggle="tooltip" title="typcn typcn-eye-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-eye" data-bs-toggle="tooltip" title="typcn typcn-eye"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-feather" data-bs-toggle="tooltip" title="typcn typcn-feather"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-film" data-bs-toggle="tooltip" title="typcn typcn-film"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-filter" data-bs-toggle="tooltip" title="typcn typcn-filter"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flag-outline" data-bs-toggle="tooltip" title="typcn typcn-flag-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flag" data-bs-toggle="tooltip" title="typcn typcn-flag"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flash-outline" data-bs-toggle="tooltip" title="typcn typcn-flash-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flash" data-bs-toggle="tooltip" title="typcn typcn-flash"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flow-children" data-bs-toggle="tooltip" title="typcn typcn-flow-children"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flow-merge" data-bs-toggle="tooltip" title="typcn typcn-flow-merge"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flow-parallel" data-bs-toggle="tooltip" title="typcn typcn-flow-parallel"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-flow-switch" data-bs-toggle="tooltip" title="typcn typcn-flow-switch"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-folder-add" data-bs-toggle="tooltip" title="typcn typcn-folder-add"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-folder-delete" data-bs-toggle="tooltip" title="typcn typcn-folder-delete"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-folder-open" data-bs-toggle="tooltip" title="typcn typcn-folder-open"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-folder" data-bs-toggle="tooltip" title="typcn typcn-folder"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-gift" data-bs-toggle="tooltip" title="typcn typcn-gift"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-globe-outline" data-bs-toggle="tooltip" title="typcn typcn-globe-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-globe" data-bs-toggle="tooltip" title="typcn typcn-globe"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-group-outline" data-bs-toggle="tooltip" title="typcn typcn-group-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-group" data-bs-toggle="tooltip" title="typcn typcn-group"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-headphones" data-bs-toggle="tooltip" title="typcn typcn-headphones"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-heart-full-outline" data-bs-toggle="tooltip" title="typcn typcn-heart-full-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-heart-half-outline" data-bs-toggle="tooltip" title="typcn typcn-heart-half-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-heart-outline" data-bs-toggle="tooltip" title="typcn typcn-heart-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-heart" data-bs-toggle="tooltip" title="typcn typcn-heart"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-home-outline" data-bs-toggle="tooltip" title="typcn typcn-home-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-home" data-bs-toggle="tooltip" title="typcn typcn-home"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-html5" data-bs-toggle="tooltip" title="typcn typcn-html5"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-image-outline" data-bs-toggle="tooltip" title="typcn typcn-image-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-image" data-bs-toggle="tooltip" title="typcn typcn-image"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-infinity-outline" data-bs-toggle="tooltip" title="typcn typcn-infinity-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-info-large-outline" data-bs-toggle="tooltip" title="typcn typcn-info-large-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-info-large" data-bs-toggle="tooltip" title="typcn typcn-info-large"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-info-outline" data-bs-toggle="tooltip" title="typcn typcn-info-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-info" data-bs-toggle="tooltip" title="typcn typcn-info"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-input-checked-outline" data-bs-toggle="tooltip" title="typcn typcn-input-checked-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-input-checked" data-bs-toggle="tooltip" title="typcn typcn-input-checked"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-key-outline" data-bs-toggle="tooltip" title="typcn typcn-key-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-key" data-bs-toggle="tooltip" title="typcn typcn-key"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-keyboard" data-bs-toggle="tooltip" title="typcn typcn-keyboard"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-leaf" data-bs-toggle="tooltip" title="typcn typcn-leaf"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-lightbulb" data-bs-toggle="tooltip" title="typcn typcn-lightbulb"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-link-outline" data-bs-toggle="tooltip" title="typcn typcn-link-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-link" data-bs-toggle="tooltip" title="typcn typcn-link"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-location-arrow-outline" data-bs-toggle="tooltip" title="typcn typcn-location-arrow-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-location-arrow" data-bs-toggle="tooltip" title="typcn typcn-location-arrow"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-location-outline" data-bs-toggle="tooltip" title="typcn typcn-location-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-location" data-bs-toggle="tooltip" title="typcn typcn-location"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-lock-closed-outline" data-bs-toggle="tooltip" title="typcn typcn-lock-closed-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-lock-closed" data-bs-toggle="tooltip" title="typcn typcn-lock-closed"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-lock-open-outline" data-bs-toggle="tooltip" title="typcn typcn-lock-open-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-lock-open" data-bs-toggle="tooltip" title="typcn typcn-lock-open"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-mail" data-bs-toggle="tooltip" title="typcn typcn-mail"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-map" data-bs-toggle="tooltip" title="typcn typcn-map"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-eject-outline" data-bs-toggle="tooltip" title="typcn typcn-media-eject-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-eject" data-bs-toggle="tooltip" title="typcn typcn-media-eject"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-fast-forward-outline" data-bs-toggle="tooltip" title="typcn typcn-media-fast-forward-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-fast-forward" data-bs-toggle="tooltip" title="typcn typcn-media-fast-forward"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-pause-outline" data-bs-toggle="tooltip" title="typcn typcn-media-pause-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-pause" data-bs-toggle="tooltip" title="typcn typcn-media-pause"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-play-outline" data-bs-toggle="tooltip" title="typcn typcn-media-play-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-play-reverse-outline" data-bs-toggle="tooltip" title="typcn typcn-media-play-reverse-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-play-reverse" data-bs-toggle="tooltip" title="typcn typcn-media-play-reverse"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-play" data-bs-toggle="tooltip" title="typcn typcn-media-play"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-record-outline" data-bs-toggle="tooltip" title="typcn typcn-media-record-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-record" data-bs-toggle="tooltip" title="typcn typcn-media-record"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-rewind-outline" data-bs-toggle="tooltip" title="typcn typcn-media-rewind-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-rewind" data-bs-toggle="tooltip" title="typcn typcn-media-rewind"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-stop-outline" data-bs-toggle="tooltip" title="typcn typcn-media-stop-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-media-stop" data-bs-toggle="tooltip" title="typcn typcn-media-stop"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-message-typing" data-bs-toggle="tooltip" title="typcn typcn-message-typing"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-message" data-bs-toggle="tooltip" title="typcn typcn-message"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-messages" data-bs-toggle="tooltip" title="typcn typcn-messages"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-microphone-outline" data-bs-toggle="tooltip" title="typcn typcn-microphone-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-microphone" data-bs-toggle="tooltip" title="typcn typcn-microphone"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-minus-outline" data-bs-toggle="tooltip" title="typcn typcn-minus-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-minus" data-bs-toggle="tooltip" title="typcn typcn-minus"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-mortar-board" data-bs-toggle="tooltip" title="typcn typcn-mortar-board"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-news" data-bs-toggle="tooltip" title="typcn typcn-news"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-notes-outline" data-bs-toggle="tooltip" title="typcn typcn-notes-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-notes" data-bs-toggle="tooltip" title="typcn typcn-notes"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pen" data-bs-toggle="tooltip" title="typcn typcn-pen"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pencil" data-bs-toggle="tooltip" title="typcn typcn-pencil"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-phone-outline" data-bs-toggle="tooltip" title="typcn typcn-phone-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-phone" data-bs-toggle="tooltip" title="typcn typcn-phone"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pi-outline" data-bs-toggle="tooltip" title="typcn typcn-pi-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pi" data-bs-toggle="tooltip" title="typcn typcn-pi"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pin-outline" data-bs-toggle="tooltip" title="typcn typcn-pin-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pin" data-bs-toggle="tooltip" title="typcn typcn-pin"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-pipette" data-bs-toggle="tooltip" title="typcn typcn-pipette"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-plane-outline" data-bs-toggle="tooltip" title="typcn typcn-plane-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-plane" data-bs-toggle="tooltip" title="typcn typcn-plane"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-plug" data-bs-toggle="tooltip" title="typcn typcn-plug"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-plus-outline" data-bs-toggle="tooltip" title="typcn typcn-plus-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-plus" data-bs-toggle="tooltip" title="typcn typcn-plus"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-point-of-interest-outline" data-bs-toggle="tooltip" title="typcn typcn-point-of-interest-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-point-of-interest" data-bs-toggle="tooltip" title="typcn typcn-point-of-interest"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-power-outline" data-bs-toggle="tooltip" title="typcn typcn-power-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-power" data-bs-toggle="tooltip" title="typcn typcn-power"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-printer" data-bs-toggle="tooltip" title="typcn typcn-printer"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-puzzle-outline" data-bs-toggle="tooltip" title="typcn typcn-puzzle-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-puzzle" data-bs-toggle="tooltip" title="typcn typcn-puzzle"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-radar-outline" data-bs-toggle="tooltip" title="typcn typcn-radar-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-radar" data-bs-toggle="tooltip" title="typcn typcn-radar"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-refresh-outline" data-bs-toggle="tooltip" title="typcn typcn-refresh-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-refresh" data-bs-toggle="tooltip" title="typcn typcn-refresh"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-rss-outline" data-bs-toggle="tooltip" title="typcn typcn-rss-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-rss" data-bs-toggle="tooltip" title="typcn typcn-rss"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-scissors-outline" data-bs-toggle="tooltip" title="typcn typcn-scissors-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-scissors" data-bs-toggle="tooltip" title="typcn typcn-scissors"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-shopping-bag" data-bs-toggle="tooltip" title="typcn typcn-shopping-bag"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-shopping-cart" data-bs-toggle="tooltip" title="typcn typcn-shopping-cart"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-at-circular" data-bs-toggle="tooltip" title="typcn typcn-social-at-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-dribbble-circular" data-bs-toggle="tooltip" title="typcn typcn-social-dribbble-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-dribbble" data-bs-toggle="tooltip" title="typcn typcn-social-dribbble"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-facebook-circular" data-bs-toggle="tooltip" title="typcn typcn-social-facebook-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-facebook" data-bs-toggle="tooltip" title="typcn typcn-social-facebook"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-flickr-circular" data-bs-toggle="tooltip" title="typcn typcn-social-flickr-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-flickr" data-bs-toggle="tooltip" title="typcn typcn-social-flickr"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-github-circular" data-bs-toggle="tooltip" title="typcn typcn-social-github-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-github" data-bs-toggle="tooltip" title="typcn typcn-social-github"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-google-plus-circular" data-bs-toggle="tooltip" title="typcn typcn-social-google-plus-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-google-plus" data-bs-toggle="tooltip" title="typcn typcn-social-google-plus"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-instagram-circular" data-bs-toggle="tooltip" title="typcn typcn-social-instagram-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-instagram" data-bs-toggle="tooltip" title="typcn typcn-social-instagram"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-last-fm-circular" data-bs-toggle="tooltip" title="typcn typcn-social-last-fm-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-last-fm" data-bs-toggle="tooltip" title="typcn typcn-social-last-fm"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-linkedin-circular" data-bs-toggle="tooltip" title="typcn typcn-social-linkedin-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-linkedin" data-bs-toggle="tooltip" title="typcn typcn-social-linkedin"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-pinterest-circular" data-bs-toggle="tooltip" title="typcn typcn-social-pinterest-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-pinterest" data-bs-toggle="tooltip" title="typcn typcn-social-pinterest"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-skype-outline" data-bs-toggle="tooltip" title="typcn typcn-social-skype-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-skype" data-bs-toggle="tooltip" title="typcn typcn-social-skype"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-tumbler-circular" data-bs-toggle="tooltip" title="typcn typcn-social-tumbler-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-tumbler" data-bs-toggle="tooltip" title="typcn typcn-social-tumbler"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-twitter-circular" data-bs-toggle="tooltip" title="typcn typcn-social-twitter-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-twitter" data-bs-toggle="tooltip" title="typcn typcn-social-twitter"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-vimeo-circular" data-bs-toggle="tooltip" title="typcn typcn-social-vimeo-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-vimeo" data-bs-toggle="tooltip" title="typcn typcn-social-vimeo"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-youtube-circular" data-bs-toggle="tooltip" title="typcn typcn-social-youtube-circular"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-social-youtube" data-bs-toggle="tooltip" title="typcn typcn-social-youtube"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-sort-alphabetically-outline" data-bs-toggle="tooltip" title="typcn typcn-sort-alphabetically-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-sort-alphabetically" data-bs-toggle="tooltip" title="typcn typcn-sort-alphabetically"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-sort-numerically-outline" data-bs-toggle="tooltip" title="typcn typcn-sort-numerically-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-sort-numerically" data-bs-toggle="tooltip" title="typcn typcn-sort-numerically"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-spanner-outline" data-bs-toggle="tooltip" title="typcn typcn-spanner-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-spanner" data-bs-toggle="tooltip" title="typcn typcn-spanner"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-spiral" data-bs-toggle="tooltip" title="typcn typcn-spiral"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-star-full-outline" data-bs-toggle="tooltip" title="typcn typcn-star-full-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-star-half-outline" data-bs-toggle="tooltip" title="typcn typcn-star-half-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-star-half" data-bs-toggle="tooltip" title="typcn typcn-star-half"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-star-outline" data-bs-toggle="tooltip" title="typcn typcn-star-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-star" data-bs-toggle="tooltip" title="typcn typcn-star"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-starburst-outline" data-bs-toggle="tooltip" title="typcn typcn-starburst-outline"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-starburst" data-bs-toggle="tooltip" title="typcn typcn-starburst"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-stopwatch" data-bs-toggle="tooltip" title="typcn typcn-stopwatch"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-support" data-bs-toggle="tooltip" title="typcn typcn-support"></i></li>
											<li class="icons-list-item"><i class="typcn typcn-tabs-outline" data-bs-toggle="tooltip" title="typcn typcn-tabs-outline"></i></li>
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