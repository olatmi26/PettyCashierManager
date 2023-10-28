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
		<link rel="stylesheet" href="assets/plugins/icons/pe7/pe-icon-7.css">
		
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
									<li><a class="active" href="icon-pe7.html">Pe7 Icons</a></li>
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
							<h5>Pe7 Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->						
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pe7 Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="pe-7s-album" data-bs-toggle="tooltip" title="pe-7s-album"></i></li>
											<li><i class="pe-7s-arc" data-bs-toggle="tooltip" title="pe-7s-arc"></i></li>
											<li><i class="pe-7s-back-2" data-bs-toggle="tooltip" title="pe-7s-back-2"></i></li>
											<li><i class="pe-7s-bandaid" data-bs-toggle="tooltip" title="pe-7s-bandaid"></i></li>
											<li><i class="pe-7s-car" data-bs-toggle="tooltip" title="pe-7s-car"></i></li>
											<li><i class="pe-7s-diamond" data-bs-toggle="tooltip" title="pe-7s-diamond"></i></li>
											<li><i class="pe-7s-door-lock" data-bs-toggle="tooltip" title="pe-7s-door-lock"></i></li>
											<li><i class="pe-7s-eyedropper" data-bs-toggle="tooltip" title="pe-7s-eyedropper"></i></li>
											<li><i class="pe-7s-female" data-bs-toggle="tooltip" title="pe-7s-female"></i></li>
											<li><i class="pe-7s-gym" data-bs-toggle="tooltip" title="pe-7s-gym"></i></li>
											<li><i class="pe-7s-hammer" data-bs-toggle="tooltip" title="pe-7s-hammer"></i></li>
											<li><i class="pe-7s-headphones" data-bs-toggle="tooltip" title="pe-7s-headphones"></i></li>
											<li><i class="pe-7s-helm" data-bs-toggle="tooltip" title="pe-7s-helm"></i></li>
											<li><i class="pe-7s-hourglass" data-bs-toggle="tooltip" title="pe-7s-hourglass"></i></li>
											<li><i class="pe-7s-leaf" data-bs-toggle="tooltip" title="pe-7s-leaf"></i></li>
											<li><i class="pe-7s-magic-wand" data-bs-toggle="tooltip" title="pe-7s-magic-wand"></i></li>
											<li><i class="pe-7s-male" data-bs-toggle="tooltip" title="pe-7s-male"></i></li>
											<li><i class="pe-7s-map-2" data-bs-toggle="tooltip" title="pe-7s-map-2"></i></li>
											<li><i class="pe-7s-next-2" data-bs-toggle="tooltip" title="pe-7s-next-2"></i></li>
											<li><i class="pe-7s-paint-bucket" data-bs-toggle="tooltip" title="pe-7s-paint-bucket"></i></li>
											<li><i class="pe-7s-pendrive" data-bs-toggle="tooltip" title="pe-7s-pendrive"></i></li>
											<li><i class="pe-7s-photo" data-bs-toggle="tooltip" title="pe-7s-photo"></i></li>
											<li><i class="pe-7s-piggy" data-bs-toggle="tooltip" title="pe-7s-piggy"></i></li>
											<li><i class="pe-7s-plugin" data-bs-toggle="tooltip" title="pe-7s-plugin"></i></li>
											<li><i class="pe-7s-refresh-2" data-bs-toggle="tooltip" title="pe-7s-refresh-2"></i></li>
											<li><i class="pe-7s-rocket" data-bs-toggle="tooltip" title="pe-7s-rocket"></i></li>
											<li><i class="pe-7s-settings" data-bs-toggle="tooltip" title="pe-7s-settings"></i></li>
											<li><i class="pe-7s-shield" data-bs-toggle="tooltip" title="pe-7s-shield"></i></li>
											<li><i class="pe-7s-smile" data-bs-toggle="tooltip" title="pe-7s-smile"></i></li>
											<li><i class="pe-7s-usb" data-bs-toggle="tooltip" title="pe-7s-usb"></i></li>
											<li><i class="pe-7s-vector" data-bs-toggle="tooltip" title="pe-7s-vector"></i></li>
											<li><i class="pe-7s-wine" data-bs-toggle="tooltip" title="pe-7s-wine"></i></li>
											<li><i class="pe-7s-cloud-upload" data-bs-toggle="tooltip" title="pe-7s-cloud-upload"></i></li>
											<li><i class="pe-7s-cash" data-bs-toggle="tooltip" title="pe-7s-cash"></i></li>
											<li><i class="pe-7s-close" data-bs-toggle="tooltip" title="pe-7s-close"></i></li>
											<li><i class="pe-7s-bluetooth" data-bs-toggle="tooltip" title="pe-7s-bluetooth"></i></li>
											<li><i class="pe-7s-cloud-download" data-bs-toggle="tooltip" title="pe-7s-cloud-download"></i></li>
											<li><i class="pe-7s-way" data-bs-toggle="tooltip" title="pe-7s-way"></i></li>
											<li><i class="pe-7s-close-circle" data-bs-toggle="tooltip" title="pe-7s-close-circle"></i></li>
											<li><i class="pe-7s-id" data-bs-toggle="tooltip" title="pe-7s-id"></i></li>
											<li><i class="pe-7s-angle-up" data-bs-toggle="tooltip" title="pe-7s-angle-up"></i></li>
											<li><i class="pe-7s-wristwatch" data-bs-toggle="tooltip" title="pe-7s-wristwatch"></i></li>
											<li><i class="pe-7s-angle-up-circle" data-bs-toggle="tooltip" title="pe-7s-angle-up-circle"></i></li>
											<li><i class="pe-7s-world" data-bs-toggle="tooltip" title="pe-7s-world"></i></li>
											<li><i class="pe-7s-angle-right" data-bs-toggle="tooltip" title="pe-7s-angle-right"></i></li>
											<li><i class="pe-7s-volume" data-bs-toggle="tooltip" title="pe-7s-volume"></i></li>
											<li><i class="pe-7s-angle-right-circle" data-bs-toggle="tooltip" title="pe-7s-angle-right-circle"></i></li>
											<li><i class="pe-7s-users" data-bs-toggle="tooltip" title="pe-7s-users"></i></li>
											<li><i class="pe-7s-angle-left" data-bs-toggle="tooltip" title="pe-7s-angle-left"></i></li>
											<li><i class="pe-7s-user-female" data-bs-toggle="tooltip" title="pe-7s-user-female"></i></li>
											<li><i class="pe-7s-angle-left-circle" data-bs-toggle="tooltip" title="pe-7s-angle-left-circle"></i></li>
											<li><i class="pe-7s-up-arrow" data-bs-toggle="tooltip" title="pe-7s-up-arrow"></i></li>
											<li><i class="pe-7s-angle-down" data-bs-toggle="tooltip" title="pe-7s-angle-down"></i></li>
											<li><i class="pe-7s-switch" data-bs-toggle="tooltip" title="pe-7s-switch"></i></li>
											<li><i class="pe-7s-angle-down-circle" data-bs-toggle="tooltip" title="pe-7s-angle-down-circle"></i></li>
											<li><i class="pe-7s-scissors" data-bs-toggle="tooltip" title="pe-7s-scissors"></i></li>
											<li><i class="pe-7s-wallet" data-bs-toggle="tooltip" title="pe-7s-wallet"></i></li>
											<li><i class="pe-7s-safe" data-bs-toggle="tooltip" title="pe-7s-safe"></i></li>
											<li><i class="pe-7s-volume2" data-bs-toggle="tooltip" title="pe-7s-volume2"></i></li>
											<li><i class="pe-7s-volume1" data-bs-toggle="tooltip" title="pe-7s-volume1"></i></li>
											<li><i class="pe-7s-voicemail" data-bs-toggle="tooltip" title="pe-7s-voicemail"></i></li>
											<li><i class="pe-7s-video" data-bs-toggle="tooltip" title="pe-7s-video"></i></li>
											<li><i class="pe-7s-user" data-bs-toggle="tooltip" title="pe-7s-user"></i></li>
											<li><i class="pe-7s-upload" data-bs-toggle="tooltip" title="pe-7s-upload"></i></li>
											<li><i class="pe-7s-unlock" data-bs-toggle="tooltip" title="pe-7s-unlock"></i></li>
											<li><i class="pe-7s-umbrella" data-bs-toggle="tooltip" title="pe-7s-umbrella"></i></li>
											<li><i class="pe-7s-trash" data-bs-toggle="tooltip" title="pe-7s-trash"></i></li>
											<li><i class="pe-7s-tools" data-bs-toggle="tooltip" title="pe-7s-tools"></i></li>
											<li><i class="pe-7s-timer" data-bs-toggle="tooltip" title="pe-7s-timer"></i></li>
											<li><i class="pe-7s-ticket" data-bs-toggle="tooltip" title="pe-7s-ticket"></i></li>
											<li><i class="pe-7s-target" data-bs-toggle="tooltip" title="pe-7s-target"></i></li>
											<li><i class="pe-7s-sun" data-bs-toggle="tooltip" title="pe-7s-sun"></i></li>
											<li><i class="pe-7s-study" data-bs-toggle="tooltip" title="pe-7s-study"></i></li>
											<li><i class="pe-7s-stopwatch" data-bs-toggle="tooltip" title="pe-7s-stopwatch"></i></li>
											<li><i class="pe-7s-star" data-bs-toggle="tooltip" title="pe-7s-star"></i></li>
											<li><i class="pe-7s-speaker" data-bs-toggle="tooltip" title="pe-7s-speaker"></i></li>
											<li><i class="pe-7s-signal" data-bs-toggle="tooltip" title="pe-7s-signal"></i></li>
											<li><i class="pe-7s-shuffle" data-bs-toggle="tooltip" title="pe-7s-shuffle"></i></li>
											<li><i class="pe-7s-shopbag" data-bs-toggle="tooltip" title="pe-7s-shopbag"></i></li>
											<li><i class="pe-7s-share" data-bs-toggle="tooltip" title="pe-7s-share"></i></li>
											<li><i class="pe-7s-server" data-bs-toggle="tooltip" title="pe-7s-server"></i></li>
											<li><i class="pe-7s-search" data-bs-toggle="tooltip" title="pe-7s-search"></i></li>
											<li><i class="pe-7s-film" data-bs-toggle="tooltip" title="pe-7s-film"></i></li>
											<li><i class="pe-7s-science" data-bs-toggle="tooltip" title="pe-7s-science"></i></li>
											<li><i class="pe-7s-disk" data-bs-toggle="tooltip" title="pe-7s-disk"></i></li>
											<li><i class="pe-7s-ribbon" data-bs-toggle="tooltip" title="pe-7s-ribbon"></i></li>
											<li><i class="pe-7s-repeat" data-bs-toggle="tooltip" title="pe-7s-repeat"></i></li>
											<li><i class="pe-7s-refresh" data-bs-toggle="tooltip" title="pe-7s-refresh"></i></li>
											<li><i class="pe-7s-add-user" data-bs-toggle="tooltip" title="pe-7s-add-user"></i></li>
											<li><i class="pe-7s-refresh-cloud" data-bs-toggle="tooltip" title="pe-7s-refresh-cloud"></i></li>
											<li><i class="pe-7s-paperclip" data-bs-toggle="tooltip" title="pe-7s-paperclip"></i></li>
											<li><i class="pe-7s-radio" data-bs-toggle="tooltip" title="pe-7s-radio"></i></li>
											<li><i class="pe-7s-note2" data-bs-toggle="tooltip" title="pe-7s-note2"></i></li>
											<li><i class="pe-7s-print" data-bs-toggle="tooltip" title="pe-7s-print"></i></li>
											<li><i class="pe-7s-network" data-bs-toggle="tooltip" title="pe-7s-network"></i></li>
											<li><i class="pe-7s-prev" data-bs-toggle="tooltip" title="pe-7s-prev"></i></li>
											<li><i class="pe-7s-mute" data-bs-toggle="tooltip" title="pe-7s-mute"></i></li>
											<li><i class="pe-7s-power" data-bs-toggle="tooltip" title="pe-7s-power"></i></li>
											<li><i class="pe-7s-medal" data-bs-toggle="tooltip" title="pe-7s-medal"></i></li>
											<li><i class="pe-7s-portfolio" data-bs-toggle="tooltip" title="pe-7s-portfolio"></i></li>
											<li><i class="pe-7s-like2" data-bs-toggle="tooltip" title="pe-7s-like2"></i></li>
											<li><i class="pe-7s-plus" data-bs-toggle="tooltip" title="pe-7s-plus"></i></li>
											<li><i class="pe-7s-left-arrow" data-bs-toggle="tooltip" title="pe-7s-left-arrow"></i></li>
											<li><i class="pe-7s-play" data-bs-toggle="tooltip" title="pe-7s-play"></i></li>
											<li><i class="pe-7s-key" data-bs-toggle="tooltip" title="pe-7s-key"></i></li>
											<li><i class="pe-7s-plane" data-bs-toggle="tooltip" title="pe-7s-plane"></i></li>
											<li><i class="pe-7s-joy" data-bs-toggle="tooltip" title="pe-7s-joy"></i></li>
											<li><i class="pe-7s-photo-gallery" data-bs-toggle="tooltip" title="pe-7s-photo-gallery"></i></li>
											<li><i class="pe-7s-pin" data-bs-toggle="tooltip" title="pe-7s-pin"></i></li>
											<li><i class="pe-7s-phone" data-bs-toggle="tooltip" title="pe-7s-phone"></i></li>
											<li><i class="pe-7s-plug" data-bs-toggle="tooltip" title="pe-7s-plug"></i></li>
											<li><i class="pe-7s-pen" data-bs-toggle="tooltip" title="pe-7s-pen"></i></li>
											<li><i class="pe-7s-right-arrow" data-bs-toggle="tooltip" title="pe-7s-right-arrow"></i></li>
											<li><i class="pe-7s-paper-plane" data-bs-toggle="tooltip" title="pe-7s-paper-plane"></i></li>
											<li><i class="pe-7s-delete-user" data-bs-toggle="tooltip" title="pe-7s-delete-user"></i></li>
											<li><i class="pe-7s-paint" data-bs-toggle="tooltip" title="pe-7s-paint"></i></li>
											<li><i class="pe-7s-bottom-arrow" data-bs-toggle="tooltip" title="pe-7s-bottom-arrow"></i></li>
											<li><i class="pe-7s-notebook" data-bs-toggle="tooltip" title="pe-7s-notebook"></i></li>
											<li><i class="pe-7s-note" data-bs-toggle="tooltip" title="pe-7s-note"></i></li>
											<li><i class="pe-7s-next" data-bs-toggle="tooltip" title="pe-7s-next"></i></li>
											<li><i class="pe-7s-news-paper" data-bs-toggle="tooltip" title="pe-7s-news-paper"></i></li>
											<li><i class="pe-7s-musiclist" data-bs-toggle="tooltip" title="pe-7s-musiclist"></i></li>
											<li><i class="pe-7s-music" data-bs-toggle="tooltip" title="pe-7s-music"></i></li>
											<li><i class="pe-7s-mouse" data-bs-toggle="tooltip" title="pe-7s-mouse"></i></li>
											<li><i class="pe-7s-more" data-bs-toggle="tooltip" title="pe-7s-more"></i></li>
											<li><i class="pe-7s-moon" data-bs-toggle="tooltip" title="pe-7s-moon"></i></li>
											<li><i class="pe-7s-monitor" data-bs-toggle="tooltip" title="pe-7s-monitor"></i></li>
											<li><i class="pe-7s-micro" data-bs-toggle="tooltip" title="pe-7s-micro"></i></li>
											<li><i class="pe-7s-menu" data-bs-toggle="tooltip" title="pe-7s-menu"></i></li>
											<li><i class="pe-7s-map" data-bs-toggle="tooltip" title="pe-7s-map"></i></li>
											<li><i class="pe-7s-map-marker" data-bs-toggle="tooltip" title="pe-7s-map-marker"></i></li>
											<li><i class="pe-7s-mail" data-bs-toggle="tooltip" title="pe-7s-mail"></i></li>
											<li><i class="pe-7s-mail-open" data-bs-toggle="tooltip" title="pe-7s-mail-open"></i></li>
											<li><i class="pe-7s-mail-open-file" data-bs-toggle="tooltip" title="pe-7s-mail-open-file"></i></li>
											<li><i class="pe-7s-magnet" data-bs-toggle="tooltip" title="pe-7s-magnet"></i></li>
											<li><i class="pe-7s-loop" data-bs-toggle="tooltip" title="pe-7s-loop"></i></li>
											<li><i class="pe-7s-look" data-bs-toggle="tooltip" title="pe-7s-look"></i></li>
											<li><i class="pe-7s-lock" data-bs-toggle="tooltip" title="pe-7s-lock"></i></li>
											<li><i class="pe-7s-lintern" data-bs-toggle="tooltip" title="pe-7s-lintern"></i></li>
											<li><i class="pe-7s-link" data-bs-toggle="tooltip" title="pe-7s-link"></i></li>
											<li><i class="pe-7s-like" data-bs-toggle="tooltip" title="pe-7s-like"></i></li>
											<li><i class="pe-7s-light" data-bs-toggle="tooltip" title="pe-7s-light"></i></li>
											<li><i class="pe-7s-less" data-bs-toggle="tooltip" title="pe-7s-less"></i></li>
											<li><i class="pe-7s-keypad" data-bs-toggle="tooltip" title="pe-7s-keypad"></i></li>
											<li><i class="pe-7s-junk" data-bs-toggle="tooltip" title="pe-7s-junk"></i></li>
											<li><i class="pe-7s-info" data-bs-toggle="tooltip" title="pe-7s-info"></i></li>
											<li><i class="pe-7s-home" data-bs-toggle="tooltip" title="pe-7s-home"></i></li>
											<li><i class="pe-7s-help2" data-bs-toggle="tooltip" title="pe-7s-help2"></i></li>
											<li><i class="pe-7s-help1" data-bs-toggle="tooltip" title="pe-7s-help1"></i></li>
											<li><i class="pe-7s-graph3" data-bs-toggle="tooltip" title="pe-7s-graph3"></i></li>
											<li><i class="pe-7s-graph2" data-bs-toggle="tooltip" title="pe-7s-graph2"></i></li>
											<li><i class="pe-7s-graph1" data-bs-toggle="tooltip" title="pe-7s-graph1"></i></li>
											<li><i class="pe-7s-graph" data-bs-toggle="tooltip" title="pe-7s-graph"></i></li>
											<li><i class="pe-7s-global" data-bs-toggle="tooltip" title="pe-7s-global"></i></li>
											<li><i class="pe-7s-gleam" data-bs-toggle="tooltip" title="pe-7s-gleam"></i></li>
											<li><i class="pe-7s-glasses" data-bs-toggle="tooltip" title="pe-7s-glasses"></i></li>
											<li><i class="pe-7s-gift" data-bs-toggle="tooltip" title="pe-7s-gift"></i></li>
											<li><i class="pe-7s-folder" data-bs-toggle="tooltip" title="pe-7s-folder"></i></li>
											<li><i class="pe-7s-flag" data-bs-toggle="tooltip" title="pe-7s-flag"></i></li>
											<li><i class="pe-7s-filter" data-bs-toggle="tooltip" title="pe-7s-filter"></i></li>
											<li><i class="pe-7s-file" data-bs-toggle="tooltip" title="pe-7s-file"></i></li>
											<li><i class="pe-7s-expand1" data-bs-toggle="tooltip" title="pe-7s-expand1"></i></li>
											<li><i class="pe-7s-exapnd2" data-bs-toggle="tooltip" title="pe-7s-exapnd2"></i></li>
											<li><i class="pe-7s-edit" data-bs-toggle="tooltip" title="pe-7s-edit"></i></li>
											<li><i class="pe-7s-drop" data-bs-toggle="tooltip" title="pe-7s-drop"></i></li>
											<li><i class="pe-7s-drawer" data-bs-toggle="tooltip" title="pe-7s-drawer"></i></li>
											<li><i class="pe-7s-download" data-bs-toggle="tooltip" title="pe-7s-download"></i></li>
											<li><i class="pe-7s-display2" data-bs-toggle="tooltip" title="pe-7s-display2"></i></li>
											<li><i class="pe-7s-display1" data-bs-toggle="tooltip" title="pe-7s-display1"></i></li>
											<li><i class="pe-7s-diskette" data-bs-toggle="tooltip" title="pe-7s-diskette"></i></li>
											<li><i class="pe-7s-date" data-bs-toggle="tooltip" title="pe-7s-date"></i></li>
											<li><i class="pe-7s-cup" data-bs-toggle="tooltip" title="pe-7s-cup"></i></li>
											<li><i class="pe-7s-culture" data-bs-toggle="tooltip" title="pe-7s-culture"></i></li>
											<li><i class="pe-7s-crop" data-bs-toggle="tooltip" title="pe-7s-crop"></i></li>
											<li><i class="pe-7s-credit" data-bs-toggle="tooltip" title="pe-7s-credit"></i></li>
											<li><i class="pe-7s-copy-file" data-bs-toggle="tooltip" title="pe-7s-copy-file"></i></li>
											<li><i class="pe-7s-config" data-bs-toggle="tooltip" title="pe-7s-config"></i></li>
											<li><i class="pe-7s-compass" data-bs-toggle="tooltip" title="pe-7s-compass"></i></li>
											<li><i class="pe-7s-comment" data-bs-toggle="tooltip" title="pe-7s-comment"></i></li>
											<li><i class="pe-7s-coffee" data-bs-toggle="tooltip" title="pe-7s-coffee"></i></li>
											<li><i class="pe-7s-cloud" data-bs-toggle="tooltip" title="pe-7s-cloud"></i></li>
											<li><i class="pe-7s-clock" data-bs-toggle="tooltip" title="pe-7s-clock"></i></li>
											<li><i class="pe-7s-check" data-bs-toggle="tooltip" title="pe-7s-check"></i></li>
											<li><i class="pe-7s-chat" data-bs-toggle="tooltip" title="pe-7s-chat"></i></li>
											<li><i class="pe-7s-cart" data-bs-toggle="tooltip" title="pe-7s-cart"></i></li>
											<li><i class="pe-7s-camera" data-bs-toggle="tooltip" title="pe-7s-camera"></i></li>
											<li><i class="pe-7s-call" data-bs-toggle="tooltip" title="pe-7s-call"></i></li>
											<li><i class="pe-7s-calculator" data-bs-toggle="tooltip" title="pe-7s-calculator"></i></li>
											<li><i class="pe-7s-browser" data-bs-toggle="tooltip" title="pe-7s-browser"></i></li>
											<li><i class="pe-7s-box2" data-bs-toggle="tooltip" title="pe-7s-box2"></i></li>
											<li><i class="pe-7s-box1" data-bs-toggle="tooltip" title="pe-7s-box1"></i></li>
											<li><i class="pe-7s-bookmarks" data-bs-toggle="tooltip" title="pe-7s-bookmarks"></i></li>
											<li><i class="pe-7s-bicycle" data-bs-toggle="tooltip" title="pe-7s-bicycle"></i></li>
											<li><i class="pe-7s-bell" data-bs-toggle="tooltip" title="pe-7s-bell"></i></li>
											<li><i class="pe-7s-battery" data-bs-toggle="tooltip" title="pe-7s-battery"></i></li>
											<li><i class="pe-7s-ball" data-bs-toggle="tooltip" title="pe-7s-ball"></i></li>
											<li><i class="pe-7s-back" data-bs-toggle="tooltip" title="pe-7s-back"></i></li>
											<li><i class="pe-7s-attention" data-bs-toggle="tooltip" title="pe-7s-attention"></i></li>
											<li><i class="pe-7s-anchor" data-bs-toggle="tooltip" title="pe-7s-anchor"></i></li>
											<li><i class="pe-7s-albums" data-bs-toggle="tooltip" title="pe-7s-albums"></i></li>
											<li><i class="pe-7s-alarm" data-bs-toggle="tooltip" title="pe-7s-alarm"></i></li>
											<li><i class="pe-7s-airplay" data-bs-toggle="tooltip" title="pe-7s-airplay"></i></li>
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