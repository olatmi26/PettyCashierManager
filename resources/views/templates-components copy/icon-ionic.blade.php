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
		
		<!-- Ionic CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/ionic/ionicons.css">
		
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
									<li><a class="active" href="icon-ionic.html">Ionic Icons</a></li>
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
							<h5>Feather Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Ionic Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="ion-ionic" data-bs-toggle="tooltip" title="ion-ionic"></i></li>
											<li><i class="ion-arrow-up-a" data-bs-toggle="tooltip" title="ion-arrow-up-a"></i></li>
											<li><i class="ion-arrow-right-a" data-bs-toggle="tooltip" title="ion-arrow-right-a"></i></li>
											<li><i class="ion-arrow-down-a" data-bs-toggle="tooltip" title="ion-arrow-down-a"></i></li>
											<li><i class="ion-arrow-left-a" data-bs-toggle="tooltip" title="ion-arrow-left-a"></i></li>
											<li><i class="ion-arrow-up-b" data-bs-toggle="tooltip" title="ion-arrow-up-b"></i></li>
											<li><i class="ion-arrow-right-b" data-bs-toggle="tooltip" title="ion-arrow-right-b"></i></li>
											<li><i class="ion-arrow-down-b" data-bs-toggle="tooltip" title="ion-arrow-down-b"></i></li>
											<li><i class="ion-arrow-left-b" data-bs-toggle="tooltip" title="ion-arrow-left-b"></i></li>
											<li><i class="ion-arrow-up-c" data-bs-toggle="tooltip" title="ion-arrow-up-c"></i></li>
											<li><i class="ion-arrow-right-c" data-bs-toggle="tooltip" title="ion-arrow-right-c"></i></li>
											<li><i class="ion-arrow-down-c" data-bs-toggle="tooltip" title="ion-arrow-down-c"></i></li>
											<li><i class="ion-arrow-left-c" data-bs-toggle="tooltip" title="ion-arrow-left-c"></i></li>
											<li><i class="ion-arrow-return-right" data-bs-toggle="tooltip" title="ion-arrow-return-right"></i></li>
											<li><i class="ion-arrow-return-left" data-bs-toggle="tooltip" title="ion-arrow-return-left"></i></li>
											<li><i class="ion-arrow-swap" data-bs-toggle="tooltip" title="ion-arrow-swap"></i></li>
											<li><i class="ion-arrow-shrink" data-bs-toggle="tooltip" title="ion-arrow-shrink"></i></li>
											<li><i class="ion-arrow-expand" data-bs-toggle="tooltip" title="ion-arrow-expand"></i></li>
											<li><i class="ion-arrow-move" data-bs-toggle="tooltip" title="ion-arrow-move"></i></li>
											<li><i class="ion-arrow-resize" data-bs-toggle="tooltip" title="ion-arrow-resize"></i></li>
											<li><i class="ion-chevron-up" data-bs-toggle="tooltip" title="ion-chevron-up"></i></li>
											<li><i class="ion-chevron-right" data-bs-toggle="tooltip" title="ion-chevron-right"></i></li>
											<li><i class="ion-chevron-down" data-bs-toggle="tooltip" title="ion-chevron-down"></i></li>
											<li><i class="ion-chevron-left" data-bs-toggle="tooltip" title="ion-chevron-left"></i></li>
											<li><i class="ion-navicon-round" data-bs-toggle="tooltip" title="ion-navicon-round"></i></li>
											<li><i class="ion-navicon" data-bs-toggle="tooltip" title="ion-navicon"></i></li>
											<li><i class="ion-drag" data-bs-toggle="tooltip" title="ion-drag"></i></li>
											<li><i class="ion-log-in" data-bs-toggle="tooltip" title="ion-log-in"></i></li>
											<li><i class="ion-log-out" data-bs-toggle="tooltip" title="ion-log-out"></i></li>
											<li><i class="ion-checkmark-round" data-bs-toggle="tooltip" title="ion-checkmark-round"></i></li>
											<li><i class="ion-checkmark" data-bs-toggle="tooltip" title="ion-checkmark"></i></li>
											<li><i class="ion-checkmark-circled" data-bs-toggle="tooltip" title="ion-checkmark-circled"></i></li>
											<li><i class="ion-close-round" data-bs-toggle="tooltip" title="ion-close-round"></i></li>
											<li><i class="ion-close" data-bs-toggle="tooltip" title="ion-close"></i></li>
											<li><i class="ion-close-circled" data-bs-toggle="tooltip" title="ion-close-circled"></i></li>
											<li><i class="ion-plus-round" data-bs-toggle="tooltip" title="ion-plus-round"></i></li>
											<li><i class="ion-plus" data-bs-toggle="tooltip" title="ion-plus"></i></li>
											<li><i class="ion-plus-circled" data-bs-toggle="tooltip" title="ion-plus-circled"></i></li>
											<li><i class="ion-minus-round" data-bs-toggle="tooltip" title="ion-minus-round"></i></li>
											<li><i class="ion-minus" data-bs-toggle="tooltip" title="ion-minus"></i></li>
											<li><i class="ion-minus-circled" data-bs-toggle="tooltip" title="ion-minus-circled"></i></li>
											<li><i class="ion-information" data-bs-toggle="tooltip" title="ion-information"></i></li>
											<li><i class="ion-information-circled" data-bs-toggle="tooltip" title="ion-information-circled"></i></li>
											<li><i class="ion-help" data-bs-toggle="tooltip" title="ion-help"></i></li>
											<li><i class="ion-help-circled" data-bs-toggle="tooltip" title="ion-help-circled"></i></li>
											<li><i class="ion-help-buoy" data-bs-toggle="tooltip" title="ion-help-buoy"></i></li>
											<li><i class="ion-asterisk" data-bs-toggle="tooltip" title="ion-asterisk"></i></li>
											<li><i class="ion-alert" data-bs-toggle="tooltip" title="ion-alert"></i></li>
											<li><i class="ion-alert-circled" data-bs-toggle="tooltip" title="ion-alert-circled"></i></li>
											<li><i class="ion-refresh" data-bs-toggle="tooltip" title="ion-refresh"></i></li>
											<li><i class="ion-loop" data-bs-toggle="tooltip" title="ion-loop"></i></li>
											<li><i class="ion-shuffle" data-bs-toggle="tooltip" title="ion-shuffle"></i></li>
											<li><i class="ion-home" data-bs-toggle="tooltip" title="ion-home"></i></li>
											<li><i class="ion-search" data-bs-toggle="tooltip" title="ion-search"></i></li>
											<li><i class="ion-flag" data-bs-toggle="tooltip" title="ion-flag"></i></li>
											<li><i class="ion-star" data-bs-toggle="tooltip" title="ion-star"></i></li>
											<li><i class="ion-heart" data-bs-toggle="tooltip" title="ion-heart"></i></li>
											<li><i class="ion-heart-broken" data-bs-toggle="tooltip" title="ion-heart-broken"></i></li>
											<li><i class="ion-gear-a" data-bs-toggle="tooltip" title="ion-gear-a"></i></li>
											<li><i class="ion-gear-b" data-bs-toggle="tooltip" title="ion-gear-b"></i></li>
											<li><i class="ion-toggle-filled" data-bs-toggle="tooltip" title="ion-toggle-filled"></i></li>
											<li><i class="ion-toggle" data-bs-toggle="tooltip" title="ion-toggle"></i></li>
											<li><i class="ion-settings" data-bs-toggle="tooltip" title="ion-settings"></i></li>
											<li><i class="ion-wrench" data-bs-toggle="tooltip" title="ion-wrench"></i></li>
											<li><i class="ion-folder" data-bs-toggle="tooltip" title="ion-folder"></i></li>
											<li><i class="ion-hammer" data-bs-toggle="tooltip" title="ion-hammer"></i></li>
											<li><i class="ion-edit" data-bs-toggle="tooltip" title="ion-edit"></i></li>
											<li><i class="ion-trash-a" data-bs-toggle="tooltip" title="ion-trash-a"></i></li>
											<li><i class="ion-trash-b" data-bs-toggle="tooltip" title="ion-trash-b"></i></li>
											<li><i class="ion-document" data-bs-toggle="tooltip" title="ion-document"></i></li>
											<li><i class="ion-document-text" data-bs-toggle="tooltip" title="ion-document-text"></i></li>
											<li><i class="ion-clipboard" data-bs-toggle="tooltip" title="ion-clipboard"></i></li>
											<li><i class="ion-scissors" data-bs-toggle="tooltip" title="ion-scissors"></i></li>
											<li><i class="ion-funnel" data-bs-toggle="tooltip" title="ion-funnel"></i></li>
											<li><i class="ion-bookmark" data-bs-toggle="tooltip" title="ion-bookmark"></i></li>
											<li><i class="ion-email" data-bs-toggle="tooltip" title="ion-email"></i></li>
											<li><i class="ion-folder" data-bs-toggle="tooltip" title="ion-folder"></i></li>
											<li><i class="ion-filing" data-bs-toggle="tooltip" title="ion-filing"></i></li>
											<li><i class="ion-archive" data-bs-toggle="tooltip" title="ion-archive"></i></li>
											<li><i class="ion-reply" data-bs-toggle="tooltip" title="ion-reply"></i></li>
											<li><i class="ion-reply-all" data-bs-toggle="tooltip" title="ion-reply-all"></i></li>
											<li><i class="ion-forward" data-bs-toggle="tooltip" title="ion-forward"></i></li>
											<li><i class="ion-share" data-bs-toggle="tooltip" title="ion-share"></i></li>
											<li><i class="ion-paper-airplane" data-bs-toggle="tooltip" title="ion-paper-airplane"></i></li>
											<li><i class="ion-link" data-bs-toggle="tooltip" title="ion-link"></i></li>
											<li><i class="ion-paperclip" data-bs-toggle="tooltip" title="ion-paperclip"></i></li>
											<li><i class="ion-compose" data-bs-toggle="tooltip" title="ion-compose"></i></li>
											<li><i class="ion-briefcase" data-bs-toggle="tooltip" title="ion-briefcase"></i></li>
											<li><i class="ion-medkit" data-bs-toggle="tooltip" title="ion-medkit"></i></li>
											<li><i class="ion-at" data-bs-toggle="tooltip" title="ion-at"></i></li>
											<li><i class="ion-pound" data-bs-toggle="tooltip" title="ion-pound"></i></li>
											<li><i class="ion-quote" data-bs-toggle="tooltip" title="ion-quote"></i></li>
											<li><i class="ion-cloud" data-bs-toggle="tooltip" title="ion-cloud"></i></li>
											<li><i class="ion-upload" data-bs-toggle="tooltip" title="ion-upload"></i></li>
											<li><i class="ion-more" data-bs-toggle="tooltip" title="ion-more"></i></li>
											<li><i class="ion-grid" data-bs-toggle="tooltip" title="ion-grid"></i></li>
											<li><i class="ion-calendar" data-bs-toggle="tooltip" title="ion-calendar"></i></li>
											<li><i class="ion-clock" data-bs-toggle="tooltip" title="ion-clock"></i></li>
											<li><i class="ion-compass" data-bs-toggle="tooltip" title="ion-compass"></i></li>
											<li><i class="ion-pinpoint" data-bs-toggle="tooltip" title="ion-pinpoint"></i></li>
											<li><i class="ion-pin" data-bs-toggle="tooltip" title="ion-pin"></i></li>
											<li><i class="ion-navigate" data-bs-toggle="tooltip" title="ion-navigate"></i></li>
											<li><i class="ion-location" data-bs-toggle="tooltip" title="ion-location"></i></li>
											<li><i class="ion-map" data-bs-toggle="tooltip" title="ion-map"></i></li>
											<li><i class="ion-model-s" data-bs-toggle="tooltip" title="ion-model-s"></i></li>
											<li><i class="ion-locked" data-bs-toggle="tooltip" title="ion-locked"></i></li>
											<li><i class="ion-unlocked" data-bs-toggle="tooltip" title="ion-unlocked"></i></li>
											<li><i class="ion-key" data-bs-toggle="tooltip" title="ion-key"></i></li>
											<li><i class="ion-arrow-graph-up-right" data-bs-toggle="tooltip" title="ion-arrow-graph-up-right"></i></li>
											<li><i class="ion-arrow-graph-down-right" data-bs-toggle="tooltip" title="ion-arrow-graph-down-right"></i></li>
											<li><i class="ion-arrow-graph-down-left" data-bs-toggle="tooltip" title="ion-arrow-graph-down-left"></i></li>
											<li><i class="ion-stats-bars" data-bs-toggle="tooltip" title="ion-stats-bars"></i></li>
											<li><i class="ion-connection-bars" data-bs-toggle="tooltip" title="ion-connection-bars"></i></li>
											<li><i class="ion-pie-graph" data-bs-toggle="tooltip" title="ion-pie-graph"></i></li>
											<li><i class="ion-chatbubble" data-bs-toggle="tooltip" title="ion-chatbubble"></i></li>
											<li><i class="ion-chatbubble-working" data-bs-toggle="tooltip" title="ion-chatbubble-working"></i></li>
											<li><i class="ion-chatbubbles" data-bs-toggle="tooltip" title="ion-chatbubbles"></i></li>
											<li><i class="ion-chatbox" data-bs-toggle="tooltip" title="ion-chatbox"></i></li>
											<li><i class="ion-chatbox-working" data-bs-toggle="tooltip" title="ion-chatbox-working"></i></li>
											<li><i class="ion-chatboxes" data-bs-toggle="tooltip" title="ion-chatboxes"></i></li>
											<li><i class="ion-person" data-bs-toggle="tooltip" title="ion-person"></i></li>
											<li><i class="ion-person-add" data-bs-toggle="tooltip" title="ion-person-add"></i></li>
											<li><i class="ion-person-stalker" data-bs-toggle="tooltip" title="ion-person-stalker"></i></li>
											<li><i class="ion-woman" data-bs-toggle="tooltip" title="ion-woman"></i></li>
											<li><i class="ion-man" data-bs-toggle="tooltip" title="ion-man"></i></li>
											<li><i class="ion-female" data-bs-toggle="tooltip" title="ion-female"></i></li>
											<li><i class="ion-male" data-bs-toggle="tooltip" title="ion-male"></i></li>
											<li><i class="ion-fork" data-bs-toggle="tooltip" title="ion-fork"></i></li>
											<li><i class="ion-knife" data-bs-toggle="tooltip" title="ion-knife"></i></li>
											<li><i class="ion-spoon" data-bs-toggle="tooltip" title="ion-spoon"></i></li>
											<li><i class="ion-beer" data-bs-toggle="tooltip" title="ion-beer"></i></li>
											<li><i class="ion-wineglass" data-bs-toggle="tooltip" title="ion-wineglass"></i></li>
											<li><i class="ion-coffee" data-bs-toggle="tooltip" title="ion-coffee"></i></li>
											<li><i class="ion-icecream" data-bs-toggle="tooltip" title="ion-icecream"></i></li>
											<li><i class="ion-pizza" data-bs-toggle="tooltip" title="ion-pizza"></i></li>
											<li><i class="ion-power" data-bs-toggle="tooltip" title="ion-power"></i></li>
											<li><i class="ion-mouse" data-bs-toggle="tooltip" title="ion-mouse"></i></li>
											<li><i class="ion-battery-full" data-bs-toggle="tooltip" title="ion-battery-full"></i></li>
											<li><i class="ion-battery-half" data-bs-toggle="tooltip" title="ion-battery-half"></i></li>
											<li><i class="ion-battery-low" data-bs-toggle="tooltip" title="ion-battery-low"></i></li>
											<li><i class="ion-battery-empty" data-bs-toggle="tooltip" title="ion-battery-empty"></i></li>
											<li><i class="ion-battery-charging" data-bs-toggle="tooltip" title="ion-battery-charging"></i></li>
											<li><i class="ion-bluetooth" data-bs-toggle="tooltip" title="ion-bluetooth"></i></li>
											<li><i class="ion-calculator" data-bs-toggle="tooltip" title="ion-calculator"></i></li>
											<li><i class="ion-camera" data-bs-toggle="tooltip" title="ion-camera"></i></li>
											<li><i class="ion-eye" data-bs-toggle="tooltip" title="ion-eye"></i></li>
											<li><i class="ion-eye-disabled" data-bs-toggle="tooltip" title="ion-eye-disabled"></i></li>
											<li><i class="ion-flash" data-bs-toggle="tooltip" title="ion-flash"></i></li>
											<li><i class="ion-flash-off" data-bs-toggle="tooltip" title="ion-flash-off"></i></li>
											<li><i class="ion-qr-scanner" data-bs-toggle="tooltip" title="ion-qr-scanner"></i></li>
											<li><i class="ion-image" data-bs-toggle="tooltip" title="ion-image"></i></li>
											<li><i class="ion-images" data-bs-toggle="tooltip" title="ion-images"></i></li>
											<li><i class="ion-contrast" data-bs-toggle="tooltip" title="ion-contrast"></i></li>
											<li><i class="ion-wand" data-bs-toggle="tooltip" title="ion-wand"></i></li>
											<li><i class="ion-aperture" data-bs-toggle="tooltip" title="ion-aperture"></i></li>
											<li><i class="ion-monitor" data-bs-toggle="tooltip" title="ion-monitor"></i></li>
											<li><i class="ion-laptop" data-bs-toggle="tooltip" title="ion-laptop"></i></li>
											<li><i class="ion-ipad" data-bs-toggle="tooltip" title="ion-ipad"></i></li>
											<li><i class="ion-iphone" data-bs-toggle="tooltip" title="ion-iphone"></i></li>
											<li><i class="ion-ipod" data-bs-toggle="tooltip" title="ion-ipod"></i></li>
											<li><i class="ion-printer" data-bs-toggle="tooltip" title="ion-printer"></i></li>
											<li><i class="ion-usb" data-bs-toggle="tooltip" title="ion-usb"></i></li>
											<li><i class="ion-outlet" data-bs-toggle="tooltip" title="ion-outlet"></i></li>
											<li><i class="ion-bug" data-bs-toggle="tooltip" title="ion-bug"></i></li>
											<li><i class="ion-code" data-bs-toggle="tooltip" title="ion-code"></i></li>
											<li><i class="ion-code-working" data-bs-toggle="tooltip" title="ion-code-working"></i></li>
											<li><i class="ion-code-download" data-bs-toggle="tooltip" title="ion-code-download"></i></li>
											<li><i class="ion-fork-repo" data-bs-toggle="tooltip" title="ion-fork-repo"></i></li>
											<li><i class="ion-network" data-bs-toggle="tooltip" title="ion-network"></i></li>
											<li><i class="ion-pull-request" data-bs-toggle="tooltip" title="ion-pull-request"></i></li>
											<li><i class="ion-merge" data-bs-toggle="tooltip" title="ion-merge"></i></li>
											<li><i class="ion-game-controller-a" data-bs-toggle="tooltip" title="ion-game-controller-a"></i></li>
											<li><i class="ion-game-controller-b" data-bs-toggle="tooltip" title="ion-game-controller-b"></i></li>
											<li><i class="ion-xbox" data-bs-toggle="tooltip" title="ion-xbox"></i></li>
											<li><i class="ion-playstation" data-bs-toggle="tooltip" title="ion-playstation"></i></li>
											<li><i class="ion-steam" data-bs-toggle="tooltip" title="ion-steam"></i></li>
											<li><i class="ion-closed-captioning" data-bs-toggle="tooltip" title="ion-closed-captioning"></i></li>
											<li><i class="ion-videocamera" data-bs-toggle="tooltip" title="ion-videocamera"></i></li>
											<li><i class="ion-film-marker" data-bs-toggle="tooltip" title="ion-film-marker"></i></li>
											<li><i class="ion-disc" data-bs-toggle="tooltip" title="ion-disc"></i></li>
											<li><i class="ion-headphone" data-bs-toggle="tooltip" title="ion-headphone"></i></li>
											<li><i class="ion-music-note" data-bs-toggle="tooltip" title="ion-music-note"></i></li>
											<li><i class="ion-radio-waves" data-bs-toggle="tooltip" title="ion-radio-waves"></i></li>
											<li><i class="ion-speakerphone" data-bs-toggle="tooltip" title="ion-speakerphone"></i></li>
											<li><i class="ion-mic-a" data-bs-toggle="tooltip" title="ion-mic-a"></i></li>
											<li><i class="ion-mic-b" data-bs-toggle="tooltip" title="ion-mic-b"></i></li>
											<li><i class="ion-mic-c" data-bs-toggle="tooltip" title="ion-mic-c"></i></li>
											<li><i class="ion-volume-high" data-bs-toggle="tooltip" title="ion-volume-high"></i></li>
											<li><i class="ion-volume-medium" data-bs-toggle="tooltip" title="ion-volume-medium"></i></li>
											<li><i class="ion-volume-low" data-bs-toggle="tooltip" title="ion-volume-low"></i></li>
											<li><i class="ion-volume-mute" data-bs-toggle="tooltip" title="ion-volume-mute"></i></li>
											<li><i class="ion-levels" data-bs-toggle="tooltip" title="ion-levels"></i></li>
											<li><i class="ion-play" data-bs-toggle="tooltip" title="ion-play"></i></li>
											<li><i class="ion-pause" data-bs-toggle="tooltip" title="ion-pause"></i></li>
											<li><i class="ion-stop" data-bs-toggle="tooltip" title="ion-stop"></i></li>
											<li><i class="ion-record" data-bs-toggle="tooltip" title="ion-record"></i></li>
											<li><i class="ion-skip-forward" data-bs-toggle="tooltip" title="ion-skip-forward"></i></li>
											<li><i class="ion-skip-backward" data-bs-toggle="tooltip" title="ion-skip-backward"></i></li>
											<li><i class="ion-eject" data-bs-toggle="tooltip" title="ion-eject"></i></li>
											<li><i class="ion-bag" data-bs-toggle="tooltip" title="ion-bag"></i></li>
											<li><i class="ion-card" data-bs-toggle="tooltip" title="ion-card"></i></li>
											<li><i class="ion-cash" data-bs-toggle="tooltip" title="ion-cash"></i></li>
											<li><i class="ion-pricetag" data-bs-toggle="tooltip" title="ion-pricetag"></i></li>
											<li><i class="ion-pricetags" data-bs-toggle="tooltip" title="ion-pricetags"></i></li>
											<li><i class="ion-thumbsup" data-bs-toggle="tooltip" title="ion-thumbsup"></i></li>
											<li><i class="ion-thumbsdown" data-bs-toggle="tooltip" title="ion-thumbsdown"></i></li>
											<li><i class="ion-happy" data-bs-toggle="tooltip" title="ion-happy"></i></li>
											<li><i class="ion-sad" data-bs-toggle="tooltip" title="ion-sad"></i></li>
											<li><i class="ion-trophy" data-bs-toggle="tooltip" title="ion-trophy"></i></li>
											<li><i class="ion-podium" data-bs-toggle="tooltip" title="ion-podium"></i></li>
											<li><i class="ion-ribbon-a" data-bs-toggle="tooltip" title="ion-ribbon-a"></i></li>
											<li><i class="ion-ribbon-b" data-bs-toggle="tooltip" title="ion-ribbon-b"></i></li>
											<li><i class="ion-university" data-bs-toggle="tooltip" title="ion-university"></i></li>
											<li><i class="ion-magnet" data-bs-toggle="tooltip" title="ion-magnet"></i></li>
											<li><i class="ion-beaker" data-bs-toggle="tooltip" title="ion-beaker"></i></li>
											<li><i class="ion-flask" data-bs-toggle="tooltip" title="ion-flask"></i></li>
											<li><i class="ion-egg" data-bs-toggle="tooltip" title="ion-egg"></i></li>
											<li><i class="ion-earth" data-bs-toggle="tooltip" title="ion-earth"></i></li>
											<li><i class="ion-planet" data-bs-toggle="tooltip" title="ion-planet"></i></li>
											<li><i class="ion-lightbulb" data-bs-toggle="tooltip" title="ion-lightbulb"></i></li>
											<li><i class="ion-cube" data-bs-toggle="tooltip" title="ion-cube"></i></li>
											<li><i class="ion-leaf" data-bs-toggle="tooltip" title="ion-leaf"></i></li>
											<li><i class="ion-waterdrop" data-bs-toggle="tooltip" title="ion-waterdrop"></i></li>
											<li><i class="ion-flame" data-bs-toggle="tooltip" title="ion-flame"></i></li>
											<li><i class="ion-fireball" data-bs-toggle="tooltip" title="ion-fireball"></i></li>
											<li><i class="ion-bonfire" data-bs-toggle="tooltip" title="ion-bonfire"></i></li>
											<li><i class="ion-umbrella" data-bs-toggle="tooltip" title="ion-umbrella"></i></li>
											<li><i class="ion-nuclear" data-bs-toggle="tooltip" title="ion-nuclear"></i></li>
											<li><i class="ion-no-smoking" data-bs-toggle="tooltip" title="ion-no-smoking"></i></li>
											<li><i class="ion-thermometer" data-bs-toggle="tooltip" title="ion-thermometer"></i></li>
											<li><i class="ion-speedometer" data-bs-toggle="tooltip" title="ion-speedometer"></i></li>
											<li><i class="ion-plane" data-bs-toggle="tooltip" title="ion-plane"></i></li>
											<li><i class="ion-jet" data-bs-toggle="tooltip" title="ion-jet"></i></li>
											<li><i class="ion-load-a" data-bs-toggle="tooltip" title="ion-load-a"></i></li>
											<li><i class="ion-load-b" data-bs-toggle="tooltip" title="ion-load-b"></i></li>
											<li><i class="ion-load-c" data-bs-toggle="tooltip" title="ion-load-c"></i></li>
											<li><i class="ion-load-d" data-bs-toggle="tooltip" title="ion-load-d"></i></li>
											<li><i class="ion-ios7-ionic-outline" data-bs-toggle="tooltip" title="ion-ios7-ionic-outline"></i></li>
											<li><i class="ion-ios7-arrow-back" data-bs-toggle="tooltip" title="ion-ios7-arrow-back"></i></li>
											<li><i class="ion-ios7-arrow-forward" data-bs-toggle="tooltip" title="ion-ios7-arrow-forward"></i></li>
											<li><i class="ion-ios7-arrow-up" data-bs-toggle="tooltip" title="ion-ios7-arrow-up"></i></li>
											<li><i class="ion-ios7-arrow-right" data-bs-toggle="tooltip" title="ion-ios7-arrow-right"></i></li>
											<li><i class="ion-ios7-arrow-down" data-bs-toggle="tooltip" title="ion-ios7-arrow-down"></i></li>
											<li><i class="ion-ios7-arrow-left" data-bs-toggle="tooltip" title="ion-ios7-arrow-left"></i></li>
											<li><i class="ion-ios7-arrow-thin-up" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-up"></i></li>
											<li><i class="ion-ios7-arrow-thin-right" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-right"></i></li>
											<li><i class="ion-ios7-arrow-thin-down" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-down"></i></li>
											<li><i class="ion-ios7-arrow-thin-left" data-bs-toggle="tooltip" title="ion-ios7-arrow-thin-left"></i></li>
											<li><i class="ion-ios7-circle-filled" data-bs-toggle="tooltip" title="ion-ios7-circle-filled"></i></li>
											<li><i class="ion-ios7-circle-outline" data-bs-toggle="tooltip" title="ion-ios7-circle-outline"></i></li>
											<li><i class="ion-ios7-checkmark-empty" data-bs-toggle="tooltip" title="ion-ios7-checkmark-empty"></i></li>
											<li><i class="ion-ios7-checkmark-outline" data-bs-toggle="tooltip" title="ion-ios7-checkmark-outline"></i></li>
											<li><i class="ion-ios7-checkmark" data-bs-toggle="tooltip" title="ion-ios7-checkmark"></i></li>
											<li><i class="ion-ios7-plus-empty" data-bs-toggle="tooltip" title="ion-ios7-plus-empty"></i></li>
											<li><i class="ion-ios7-plus-outline" data-bs-toggle="tooltip" title="ion-ios7-plus-outline"></i></li>
											<li><i class="ion-ios7-plus" data-bs-toggle="tooltip" title="ion-ios7-plus"></i></li>
											<li><i class="ion-ios7-close-empty" data-bs-toggle="tooltip" title="ion-ios7-close-empty"></i></li>
											<li><i class="ion-ios7-close-outline" data-bs-toggle="tooltip" title="ion-ios7-close-outline"></i></li>
											<li><i class="ion-ios7-close" data-bs-toggle="tooltip" title="ion-ios7-close"></i></li>
											<li><i class="ion-ios7-minus-empty" data-bs-toggle="tooltip" title="ion-ios7-minus-empty"></i></li>
											<li><i class="ion-ios7-minus-outline" data-bs-toggle="tooltip" title="ion-ios7-minus-outline"></i></li>
											<li><i class="ion-ios7-minus" data-bs-toggle="tooltip" title="ion-ios7-minus"></i></li>
											<li><i class="ion-ios7-information-empty" data-bs-toggle="tooltip" title="ion-ios7-information-empty"></i></li>
											<li><i class="ion-ios7-information-outline" data-bs-toggle="tooltip" title="ion-ios7-information-outline"></i></li>
											<li><i class="ion-ios7-information" data-bs-toggle="tooltip" title="ion-ios7-information"></i></li>
											<li><i class="ion-ios7-help-empty" data-bs-toggle="tooltip" title="ion-ios7-help-empty"></i></li>
											<li><i class="ion-ios7-help-outline" data-bs-toggle="tooltip" title="ion-ios7-help-outline"></i></li>
											<li><i class="ion-ios7-help" data-bs-toggle="tooltip" title="ion-ios7-help"></i></li>
											<li><i class="ion-ios7-search" data-bs-toggle="tooltip" title="ion-ios7-search"></i></li>
											<li><i class="ion-ios7-search-strong" data-bs-toggle="tooltip" title="ion-ios7-search-strong"></i></li>
											<li><i class="ion-ios7-star" data-bs-toggle="tooltip" title="ion-ios7-star"></i></li>
											<li><i class="ion-ios7-star-half" data-bs-toggle="tooltip" title="ion-ios7-star-half"></i></li>
											<li><i class="ion-ios7-star-outline" data-bs-toggle="tooltip" title="ion-ios7-star-outline"></i></li>
											<li><i class="ion-ios7-heart" data-bs-toggle="tooltip" title="ion-ios7-heart"></i></li>
											<li><i class="ion-ios7-heart-outline" data-bs-toggle="tooltip" title="ion-ios7-heart-outline"></i></li>
											<li><i class="ion-ios7-more" data-bs-toggle="tooltip" title="ion-ios7-more"></i></li>
											<li><i class="ion-ios7-more-outline" data-bs-toggle="tooltip" title="ion-ios7-more-outline"></i></li>
											<li><i class="ion-ios7-home" data-bs-toggle="tooltip" title="ion-ios7-home"></i></li>
											<li><i class="ion-ios7-home-outline" data-bs-toggle="tooltip" title="ion-ios7-home-outline"></i></li>
											<li><i class="ion-ios7-cloud" data-bs-toggle="tooltip" title="ion-ios7-cloud"></i></li>
											<li><i class="ion-ios7-cloud-outline" data-bs-toggle="tooltip" title="ion-ios7-cloud-outline"></i></li>
											<li><i class="ion-ios7-cloud-upload" data-bs-toggle="tooltip" title="ion-ios7-cloud-upload"></i></li>
											<li><i class="ion-ios7-cloud-upload-outline" data-bs-toggle="tooltip" title="ion-ios7-cloud-upload-outline"></i></li>
											<li><i class="ion-ios7-cloud-download" data-bs-toggle="tooltip" title="ion-ios7-cloud-download"></i></li>
											<li><i class="ion-ios7-cloud-download-outline" data-bs-toggle="tooltip" title="ion-ios7-cloud-download-outline"></i></li>
											<li><i class="ion-ios7-upload" data-bs-toggle="tooltip" title="ion-ios7-upload"></i></li>
											<li><i class="ion-ios7-upload-outline" data-bs-toggle="tooltip" title="ion-ios7-upload-outline"></i></li>
											<li><i class="ion-ios7-download" data-bs-toggle="tooltip" title="ion-ios7-download"></i></li>
											<li><i class="ion-ios7-refresh" data-bs-toggle="tooltip" title="ion-ios7-refresh"></i></li>
											<li><i class="ion-ios7-refresh-outline" data-bs-toggle="tooltip" title="ion-ios7-refresh-outline"></i></li>
											<li><i class="ion-ios7-refresh-empty" data-bs-toggle="tooltip" title="ion-ios7-refresh-empty"></i></li>
											<li><i class="ion-ios7-reload" data-bs-toggle="tooltip" title="ion-ios7-reload"></i></li>
											<li><i class="ion-ios7-loop-strong" data-bs-toggle="tooltip" title="ion-ios7-loop-strong"></i></li>
											<li><i class="ion-ios7-loop" data-bs-toggle="tooltip" title="ion-ios7-loop"></i></li>
											<li><i class="ion-ios7-bookmarks" data-bs-toggle="tooltip" title="ion-ios7-bookmarks"></i></li>
											<li><i class="ion-ios7-bookmarks-outline" data-bs-toggle="tooltip" title="ion-ios7-bookmarks-outline"></i></li>

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