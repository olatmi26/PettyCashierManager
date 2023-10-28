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
									<li><a class="active" href="icon-feather.html">Feather Icons</a></li>
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
							<h5>Feather Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Feather Icon</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="fe fe-activity" data-bs-toggle="tooltip" title="fe fe-activity"></i></li>
											<li><i class="fe fe-airplay" data-bs-toggle="tooltip" title="fe fe-airplay"></i></li>
											<li><i class="fe fe-alert-circle" data-bs-toggle="tooltip" title="fe fe-alert-circle"></i></li>
											<li><i class="fe fe-alert-octagon" data-bs-toggle="tooltip" title="fe fe-alert-octagon"></i></li>
											<li><i class="fe fe-alert-triangle" data-bs-toggle="tooltip" title="fe fe-alert-triangle"></i></li>
											<li><i class="fe fe-align-center" data-bs-toggle="tooltip" title="fe fe-align-center"></i></li>
											<li><i class="fe fe-align-justify" data-bs-toggle="tooltip" title="fe fe-align-justify"></i></li>
											<li><i class="fe fe-align-left" data-bs-toggle="tooltip" title="fe fe-align-left"></i></li>
											<li><i class="fe fe-align-right" data-bs-toggle="tooltip" title="fe fe-align-right"></i></li>
											<li><i class="fe fe-anchor" data-bs-toggle="tooltip" title="fe fe-anchor"></i></li>
											<li><i class="fe fe-aperture" data-bs-toggle="tooltip" title="fe fe-aperture"></i></li>
											<li><i class="fe fe-arrow-down" data-bs-toggle="tooltip" title="fe fe-arrow-down"></i></li>
											<li><i class="fe fe-arrow-down-circle" data-bs-toggle="tooltip" title="fe fe-arrow-down-circle"></i></li>
											<li><i class="fe fe-arrow-down-left" data-bs-toggle="tooltip" title="fe fe-arrow-down-left"></i></li>
											<li><i class="fe fe-arrow-down-right" data-bs-toggle="tooltip" title="fe fe-arrow-down-right"></i></li>
											<li><i class="fe fe-arrow-left" data-bs-toggle="tooltip" title="fe fe-arrow-left"></i></li>
											<li><i class="fe fe-arrow-left-circle" data-bs-toggle="tooltip" title="fe fe-arrow-left-circle"></i></li>
											<li><i class="fe fe-arrow-right" data-bs-toggle="tooltip" title="fe fe-arrow-right"></i></li>
											<li><i class="fe fe-arrow-right-circle" data-bs-toggle="tooltip" title="fe fe-arrow-right-circle"></i></li>
											<li><i class="fe fe-arrow-up" data-bs-toggle="tooltip" title="fe fe-arrow-up"></i></li>
											<li><i class="fe fe-arrow-up-circle" data-bs-toggle="tooltip" title="fe fe-arrow-up-circle"></i></li>
											<li><i class="fe fe-arrow-up-left" data-bs-toggle="tooltip" title="fe fe-arrow-up-left"></i></li>
											<li><i class="fe fe-arrow-up-right" data-bs-toggle="tooltip" title="fe fe-arrow-up-right"></i></li>
											<li><i class="fe fe-at-sign" data-bs-toggle="tooltip" title="fe fe-at-sign"></i></li>
											<li><i class="fe fe-award" data-bs-toggle="tooltip" title="fe fe-award"></i></li>
											<li><i class="fe fe-bar-chart" data-bs-toggle="tooltip" title="fe fe-bar-chart"></i></li>
											<li><i class="fe fe-bar-chart-2" data-bs-toggle="tooltip" title="fe fe-bar-chart-2"></i></li>
											<li><i class="fe fe-battery" data-bs-toggle="tooltip" title="fe fe-battery"></i></li>
											<li><i class="fe fe-battery-charging" data-bs-toggle="tooltip" title="fe fe-battery-charging"></i></li>
											<li><i class="fe fe-bell" data-bs-toggle="tooltip" title="fe fe-bell"></i></li>
											<li><i class="fe fe-bell-off" data-bs-toggle="tooltip" title="fe fe-bell-off"></i></li>
											<li><i class="fe fe-bluetooth" data-bs-toggle="tooltip" title="fe fe-bluetooth"></i></li>
											<li><i class="fe fe-bold" data-bs-toggle="tooltip" title="fe fe-bold"></i></li>
											<li><i class="fe fe-book" data-bs-toggle="tooltip" title="fe fe-book"></i></li>
											<li><i class="fe fe-book-open" data-bs-toggle="tooltip" title="fe fe-book-open"></i></li>
											<li><i class="fe fe-bookmark" data-bs-toggle="tooltip" title="fe fe-bookmark"></i></li>
											<li><i class="fe fe-box" data-bs-toggle="tooltip" title="fe fe-box"></i></li>
											<li><i class="fe fe-briefcase" data-bs-toggle="tooltip" title="fe fe-briefcase"></i></li>
											<li><i class="fe fe-calendar" data-bs-toggle="tooltip" title="fe fe-calendar"></i></li>
											<li><i class="fe fe-camera" data-bs-toggle="tooltip" title="fe fe-camera"></i></li>
											<li><i class="fe fe-camera-off" data-bs-toggle="tooltip" title="fe fe-camera-off"></i></li>
											<li><i class="fe fe-cast" data-bs-toggle="tooltip" title="fe fe-cast"></i></li>
											<li><i class="fe fe-check" data-bs-toggle="tooltip" title="fe fe-check"></i></li>
											<li><i class="fe fe-check-circle" data-bs-toggle="tooltip" title="fe fe-check-circle"></i></li>
											<li><i class="fe fe-check-square" data-bs-toggle="tooltip" title="fe fe-check-square"></i></li>
											<li><i class="fe fe-chevron-down" data-bs-toggle="tooltip" title="fe fe-chevron-down"></i></li>
											<li><i class="fe fe-chevron-left" data-bs-toggle="tooltip" title="fe fe-chevron-left"></i></li>
											<li><i class="fe fe-chevron-right" data-bs-toggle="tooltip" title="fe fe-chevron-right"></i></li>
											<li><i class="fe fe-chevron-up" data-bs-toggle="tooltip" title="fe fe-chevron-up"></i></li>
											<li><i class="fe fe-chevrons-down" data-bs-toggle="tooltip" title="fe fe-chevrons-down"></i></li>
											<li><i class="fe fe-chevrons-left" data-bs-toggle="tooltip" title="fe fe-chevrons-left"></i></li>
											<li><i class="fe fe-chevrons-right" data-bs-toggle="tooltip" title="fe fe-chevrons-right"></i></li>
											<li><i class="fe fe-chevrons-up" data-bs-toggle="tooltip" title="fe fe-chevrons-up"></i></li>
											<li><i class="fe fe-chrome" data-bs-toggle="tooltip" title="fe fe-chrome"></i></li>
											<li><i class="fe fe-circle" data-bs-toggle="tooltip" title="fe fe-circle"></i></li>
											<li><i class="fe fe-clipboard" data-bs-toggle="tooltip" title="fe fe-clipboard"></i></li>
											<li><i class="fe fe-clock" data-bs-toggle="tooltip" title="fe fe-clock"></i></li>
											<li><i class="fe fe-cloud" data-bs-toggle="tooltip" title="fe fe-cloud"></i></li>
											<li><i class="fe fe-cloud-drizzle" data-bs-toggle="tooltip" title="fe fe-cloud-drizzle"></i></li>
											<li><i class="fe fe-cloud-lightning" data-bs-toggle="tooltip" title="fe fe-cloud-lightning"></i></li>
											<li><i class="fe fe-cloud-off" data-bs-toggle="tooltip" title="fe fe-cloud-off"></i></li>
											<li><i class="fe fe-cloud-rain" data-bs-toggle="tooltip" title="fe fe-cloud-rain"></i></li>
											<li><i class="fe fe-cloud-snow" data-bs-toggle="tooltip" title="fe fe-cloud-snow"></i></li>
											<li><i class="fe fe-code" data-bs-toggle="tooltip" title="fe fe-code"></i></li>
											<li><i class="fe fe-codepen" data-bs-toggle="tooltip" title="fe fe-codepen"></i></li>
											<li><i class="fe fe-command" data-bs-toggle="tooltip" title="fe fe-command"></i></li>
											<li><i class="fe fe-compass" data-bs-toggle="tooltip" title="fe fe-compass"></i></li>
											<li><i class="fe fe-copy" data-bs-toggle="tooltip" title="fe fe-copy"></i></li>
											<li><i class="fe fe-corner-down-left" data-bs-toggle="tooltip" title="fe fe-corner-down-left"></i></li>
											<li><i class="fe fe-corner-down-right" data-bs-toggle="tooltip" title="fe fe-corner-down-right"></i></li>
											<li><i class="fe fe-corner-left-down" data-bs-toggle="tooltip" title="fe fe-corner-left-down"></i></li>
											<li><i class="fe fe-corner-left-up" data-bs-toggle="tooltip" title="fe fe-corner-left-up"></i></li>
											<li><i class="fe fe-corner-right-down" data-bs-toggle="tooltip" title="fe fe-corner-right-down"></i></li>
											<li><i class="fe fe-corner-right-up" data-bs-toggle="tooltip" title="fe fe-corner-right-up"></i></li>
											<li><i class="fe fe-corner-up-left" data-bs-toggle="tooltip" title="fe fe-corner-up-left"></i></li>
											<li><i class="fe fe-corner-up-right" data-bs-toggle="tooltip" title="fe fe-corner-up-right"></i></li>
											<li><i class="fe fe-cpu" data-bs-toggle="tooltip" title="fe fe-cpu"></i></li>
											<li><i class="fe fe-credit-card" data-bs-toggle="tooltip" title="fe fe-credit-card"></i></li>
											<li><i class="fe fe-crop" data-bs-toggle="tooltip" title="fe fe-crop"></i></li>
											<li><i class="fe fe-crosshair" data-bs-toggle="tooltip" title="fe fe-crosshair"></i></li>
											<li><i class="fe fe-database" data-bs-toggle="tooltip" title="fe fe-database"></i></li>
											<li><i class="fe fe-delete" data-bs-toggle="tooltip" title="fe fe-delete"></i></li>
											<li><i class="fe fe-disc" data-bs-toggle="tooltip" title="fe fe-disc"></i></li>
											<li><i class="fe fe-dollar-sign" data-bs-toggle="tooltip" title="fe fe-dollar-sign"></i></li>
											<li><i class="fe fe-download" data-bs-toggle="tooltip" title="fe fe-download"></i></li>
											<li><i class="fe fe-download-cloud" data-bs-toggle="tooltip" title="fe fe-download-cloud"></i></li>
											<li><i class="fe fe-droplet" data-bs-toggle="tooltip" title="fe fe-droplet"></i></li>
											<li><i class="fe fe-edit" data-bs-toggle="tooltip" title="fe fe-edit"></i></li>
											<li><i class="fe fe-edit-2" data-bs-toggle="tooltip" title="fe fe-edit-2"></i></li>
											<li><i class="fe fe-edit-3" data-bs-toggle="tooltip" title="fe fe-edit-3"></i></li>
											<li><i class="fe fe-external-link" data-bs-toggle="tooltip" title="fe fe-external-link"></i></li>
											<li><i class="fe fe-eye" data-bs-toggle="tooltip" title="fe fe-eye"></i></li>
											<li><i class="fe fe-eye-off" data-bs-toggle="tooltip" title="fe fe-eye-off"></i></li>
											<li><i class="fe fe-facebook" data-bs-toggle="tooltip" title="fe fe-facebook"></i></li>
											<li><i class="fe fe-fast-forward" data-bs-toggle="tooltip" title="fe fe-fast-forward"></i></li>
											<li><i class="fe fe-feather" data-bs-toggle="tooltip" title="fe fe-feather"></i></li>
											<li><i class="fe fe-file" data-bs-toggle="tooltip" title="fe fe-file"></i></li>
											<li><i class="fe fe-file-minus" data-bs-toggle="tooltip" title="fe fe-file-minus"></i></li>
											<li><i class="fe fe-file-plus" data-bs-toggle="tooltip" title="fe fe-file-plus"></i></li>
											<li><i class="fe fe-file-text" data-bs-toggle="tooltip" title="fe fe-file-text"></i></li>
											<li><i class="fe fe-film" data-bs-toggle="tooltip" title="fe fe-film"></i></li>
											<li><i class="fe fe-filter" data-bs-toggle="tooltip" title="fe fe-filter"></i></li>
											<li><i class="fe fe-flag" data-bs-toggle="tooltip" title="fe fe-flag"></i></li>
											<li><i class="fe fe-folder" data-bs-toggle="tooltip" title="fe fe-folder"></i></li>
											<li><i class="fe fe-folder-minus" data-bs-toggle="tooltip" title="fe fe-folder-minus"></i></li>
											<li><i class="fe fe-folder-plus" data-bs-toggle="tooltip" title="fe fe-folder-plus"></i></li>
											<li><i class="fe fe-git-branch" data-bs-toggle="tooltip" title="fe fe-git-branch"></i></li>
											<li><i class="fe fe-git-commit" data-bs-toggle="tooltip" title="fe fe-git-commit"></i></li>
											<li><i class="fe fe-git-merge" data-bs-toggle="tooltip" title="fe fe-git-merge"></i></li>
											<li><i class="fe fe-git-pull-request" data-bs-toggle="tooltip" title="fe fe-git-pull-request"></i></li>
											<li><i class="fe fe-github" data-bs-toggle="tooltip" title="fe fe-github"></i></li>
											<li><i class="fe fe-gitlab" data-bs-toggle="tooltip" title="fe fe-gitlab"></i></li>
											<li><i class="fe fe-globe" data-bs-toggle="tooltip" title="fe fe-globe"></i></li>
											<li><i class="fe fe-grid" data-bs-toggle="tooltip" title="fe fe-grid"></i></li>
											<li><i class="fe fe-hard-drive" data-bs-toggle="tooltip" title="fe fe-hard-drive"></i></li>
											<li><i class="fe fe-hash" data-bs-toggle="tooltip" title="fe fe-hash"></i></li>
											<li><i class="fe fe-headphones" data-bs-toggle="tooltip" title="fe fe-headphones"></i></li>
											<li><i class="fe fe-heart" data-bs-toggle="tooltip" title="fe fe-heart"></i></li>
											<li><i class="fe fe-help-circle" data-bs-toggle="tooltip" title="fe fe-help-circle"></i></li>
											<li><i class="fe fe-home" data-bs-toggle="tooltip" title="fe fe-home"></i></li>
											<li><i class="fe fe-image" data-bs-toggle="tooltip" title="fe fe-image"></i></li>
											<li><i class="fe fe-inbox" data-bs-toggle="tooltip" title="fe fe-inbox"></i></li>
											<li><i class="fe fe-info" data-bs-toggle="tooltip" title="fe fe-info"></i></li>
											<li><i class="fe fe-instagram" data-bs-toggle="tooltip" title="fe fe-instagram"></i></li>
											<li><i class="fe fe-italic" data-bs-toggle="tooltip" title="fe fe-italic"></i></li>
											<li><i class="fe fe-layers" data-bs-toggle="tooltip" title="fe fe-layers"></i></li>
											<li><i class="fe fe-layout" data-bs-toggle="tooltip" title="fe fe-layout"></i></li>
											<li><i class="fe fe-life-buoy" data-bs-toggle="tooltip" title="fe fe-life-buoy"></i></li>
											<li><i class="fe fe-link" data-bs-toggle="tooltip" title="fe fe-link"></i></li>
											<li><i class="fe fe-link-2" data-bs-toggle="tooltip" title="fe fe-link-2"></i></li>
											<li><i class="fe fe-linkedin" data-bs-toggle="tooltip" title="fe fe-linkedin"></i></li>
											<li><i class="fe fe-list" data-bs-toggle="tooltip" title="fe fe-list"></i></li>
											<li><i class="fe fe-loader" data-bs-toggle="tooltip" title="fe fe-loader"></i></li>
											<li><i class="fe fe-lock" data-bs-toggle="tooltip" title="fe fe-lock"></i></li>
											<li><i class="fe fe-log-in" data-bs-toggle="tooltip" title="fe fe-log-in"></i></li>
											<li><i class="fe fe-log-out" data-bs-toggle="tooltip" title="fe fe-log-out"></i></li>
											<li><i class="fe fe-mail" data-bs-toggle="tooltip" title="fe fe-mail"></i></li>
											<li><i class="fe fe-map" data-bs-toggle="tooltip" title="fe fe-map"></i></li>
											<li><i class="fe fe-map-pin" data-bs-toggle="tooltip" title="fe fe-map-pin"></i></li>
											<li><i class="fe fe-maximize" data-bs-toggle="tooltip" title="fe fe-maximize"></i></li>
											<li><i class="fe fe-maximize-2" data-bs-toggle="tooltip" title="fe fe-maximize-2"></i></li>
											<li><i class="fe fe-menu" data-bs-toggle="tooltip" title="fe fe-menu"></i></li>
											<li><i class="fe fe-message-circle" data-bs-toggle="tooltip" title="fe fe-message-circle"></i></li>
											<li><i class="fe fe-message-square" data-bs-toggle="tooltip" title="fe fe-message-square"></i></li>
											<li><i class="fe fe-mic" data-bs-toggle="tooltip" title="fe fe-mic"></i></li>
											<li><i class="fe fe-mic-off" data-bs-toggle="tooltip" title="fe fe-mic-off"></i></li>
											<li><i class="fe fe-minimize" data-bs-toggle="tooltip" title="fe fe-minimize"></i></li>
											<li><i class="fe fe-minimize-2" data-bs-toggle="tooltip" title="fe fe-minimize-2"></i></li>
											<li><i class="fe fe-minus" data-bs-toggle="tooltip" title="fe fe-minus"></i></li>
											<li><i class="fe fe-minus-circle" data-bs-toggle="tooltip" title="fe fe-minus-circle"></i></li>
											<li><i class="fe fe-minus-square" data-bs-toggle="tooltip" title="fe fe-minus-square"></i></li>
											<li><i class="fe fe-monitor" data-bs-toggle="tooltip" title="fe fe-monitor"></i></li>
											<li><i class="fe fe-moon" data-bs-toggle="tooltip" title="fe fe-moon"></i></li>
											<li><i class="fe fe-more-horizontal" data-bs-toggle="tooltip" title="fe fe-more-horizontal"></i></li>
											<li><i class="fe fe-more-vertical" data-bs-toggle="tooltip" title="fe fe-more-vertical"></i></li>
											<li><i class="fe fe-move" data-bs-toggle="tooltip" title="fe fe-move"></i></li>
											<li><i class="fe fe-music" data-bs-toggle="tooltip" title="fe fe-music"></i></li>
											<li><i class="fe fe-navigation" data-bs-toggle="tooltip" title="fe fe-navigation"></i></li>
											<li><i class="fe fe-navigation-2" data-bs-toggle="tooltip" title="fe fe-navigation-2"></i></li>
											<li><i class="fe fe-octagon" data-bs-toggle="tooltip" title="fe fe-octagon"></i></li>
											<li><i class="fe fe-package" data-bs-toggle="tooltip" title="fe fe-package"></i></li>
											<li><i class="fe fe-paperclip" data-bs-toggle="tooltip" title="fe fe-paperclip"></i></li>
											<li><i class="fe fe-pause" data-bs-toggle="tooltip" title="fe fe-pause"></i></li>
											<li><i class="fe fe-pause-circle" data-bs-toggle="tooltip" title="fe fe-pause-circle"></i></li>
											<li><i class="fe fe-percent" data-bs-toggle="tooltip" title="fe fe-percent"></i></li>
											<li><i class="fe fe-phone" data-bs-toggle="tooltip" title="fe fe-phone"></i></li>
											<li><i class="fe fe-phone-call" data-bs-toggle="tooltip" title="fe fe-phone-call"></i></li>
											<li><i class="fe fe-phone-forwarded" data-bs-toggle="tooltip" title="fe fe-phone-forwarded"></i></li>
											<li><i class="fe fe-phone-incoming" data-bs-toggle="tooltip" title="fe fe-phone-incoming"></i></li>
											<li><i class="fe fe-phone-missed" data-bs-toggle="tooltip" title="fe fe-phone-missed"></i></li>
											<li><i class="fe fe-phone-off" data-bs-toggle="tooltip" title="fe fe-phone-off"></i></li>
											<li><i class="fe fe-phone-outgoing" data-bs-toggle="tooltip" title="fe fe-phone-outgoing"></i></li>
											<li><i class="fe fe-pie-chart" data-bs-toggle="tooltip" title="fe fe-pie-chart"></i></li>
											<li><i class="fe fe-play" data-bs-toggle="tooltip" title="fe fe-play"></i></li>
											<li><i class="fe fe-play-circle" data-bs-toggle="tooltip" title="fe fe-play-circle"></i></li>
											<li><i class="fe fe-plus" data-bs-toggle="tooltip" title="fe fe-plus"></i></li>
											<li><i class="fe fe-plus-circle" data-bs-toggle="tooltip" title="fe fe-plus-circle"></i></li>
											<li><i class="fe fe-plus-square" data-bs-toggle="tooltip" title="fe fe-plus-square"></i></li>
											<li><i class="fe fe-pocket" data-bs-toggle="tooltip" title="fe fe-pocket"></i></li>
											<li><i class="fe fe-power" data-bs-toggle="tooltip" title="fe fe-power"></i></li>
											<li><i class="fe fe-printer" data-bs-toggle="tooltip" title="fe fe-printer"></i></li>
											<li><i class="fe fe-radio" data-bs-toggle="tooltip" title="fe fe-radio"></i></li>
											<li><i class="fe fe-refresh-ccw" data-bs-toggle="tooltip" title="fe fe-refresh-ccw"></i></li>
											<li><i class="fe fe-refresh-cw" data-bs-toggle="tooltip" title="fe fe-refresh-cw"></i></li>
											<li><i class="fe fe-repeat" data-bs-toggle="tooltip" title="fe fe-repeat"></i></li>
											<li><i class="fe fe-rewind" data-bs-toggle="tooltip" title="fe fe-rewind"></i></li>
											<li><i class="fe fe-rotate-ccw" data-bs-toggle="tooltip" title="fe fe-rotate-ccw"></i></li>
											<li><i class="fe fe-rotate-cw" data-bs-toggle="tooltip" title="fe fe-rotate-cw"></i></li>
											<li><i class="fe fe-rss" data-bs-toggle="tooltip" title="fe fe-rss"></i></li>
											<li><i class="fe fe-save" data-bs-toggle="tooltip" title="fe fe-save"></i></li>
											<li><i class="fe fe-scissors" data-bs-toggle="tooltip" title="fe fe-scissors"></i></li>
											<li><i class="fe fe-search" data-bs-toggle="tooltip" title="fe fe-search"></i></li>
											<li><i class="fe fe-send" data-bs-toggle="tooltip" title="fe fe-send"></i></li>
											<li><i class="fe fe-server" data-bs-toggle="tooltip" title="fe fe-server"></i></li>
											<li><i class="fe fe-settings" data-bs-toggle="tooltip" title="fe fe-settings"></i></li>
											<li><i class="fe fe-share" data-bs-toggle="tooltip" title="fe fe-share"></i></li>
											<li><i class="fe fe-share-2" data-bs-toggle="tooltip" title="fe fe-share-2"></i></li>
											<li><i class="fe fe-shield" data-bs-toggle="tooltip" title="fe fe-shield"></i></li>
											<li><i class="fe fe-shield-off" data-bs-toggle="tooltip" title="fe fe-shield-off"></i></li>
											<li><i class="fe fe-shopping-bag" data-bs-toggle="tooltip" title="fe fe-shopping-bag"></i></li>
											<li><i class="fe fe-shopping-cart" data-bs-toggle="tooltip" title="fe fe-shopping-cart"></i></li>
											<li><i class="fe fe-shuffle" data-bs-toggle="tooltip" title="fe fe-shuffle"></i></li>
											<li><i class="fe fe-sidebar" data-bs-toggle="tooltip" title="fe fe-sidebar"></i></li>
											<li><i class="fe fe-skip-back" data-bs-toggle="tooltip" title="fe fe-skip-back"></i></li>
											<li><i class="fe fe-skip-forward" data-bs-toggle="tooltip" title="fe fe-skip-forward"></i></li>
											<li><i class="fe fe-slack" data-bs-toggle="tooltip" title="fe fe-slack"></i></li>
											<li><i class="fe fe-slash" data-bs-toggle="tooltip" title="fe fe-slash"></i></li>
											<li><i class="fe fe-sliders" data-bs-toggle="tooltip" title="fe fe-sliders"></i></li>
											<li><i class="fe fe-smartphone" data-bs-toggle="tooltip" title="fe fe-smartphone"></i></li>
											<li><i class="fe fe-speaker" data-bs-toggle="tooltip" title="fe fe-speaker"></i></li>
											<li><i class="fe fe-square" data-bs-toggle="tooltip" title="fe fe-square"></i></li>
											<li><i class="fe fe-star" data-bs-toggle="tooltip" title="fe fe-star"></i></li>
											<li><i class="fe fe-stop-circle" data-bs-toggle="tooltip" title="fe fe-stop-circle"></i></li>
											<li><i class="fe fe-sun" data-bs-toggle="tooltip" title="fe fe-sun"></i></li>
											<li><i class="fe fe-sunrise" data-bs-toggle="tooltip" title="fe fe-sunrise"></i></li>
											<li><i class="fe fe-sunset" data-bs-toggle="tooltip" title="fe fe-sunset"></i></li>
											<li><i class="fe fe-tablet" data-bs-toggle="tooltip" title="fe fe-tablet"></i></li>
											<li><i class="fe fe-tag" data-bs-toggle="tooltip" title="fe fe-tag"></i></li>
											<li><i class="fe fe-target" data-bs-toggle="tooltip" title="fe fe-target"></i></li>
											<li><i class="fe fe-terminal" data-bs-toggle="tooltip" title="fe fe-terminal"></i></li>
											<li><i class="fe fe-thermometer" data-bs-toggle="tooltip" title="fe fe-thermometer"></i></li>
											<li><i class="fe fe-thumbs-down" data-bs-toggle="tooltip" title="fe fe-thumbs-down"></i></li>
											<li><i class="fe fe-thumbs-up" data-bs-toggle="tooltip" title="fe fe-thumbs-up"></i></li>
											<li><i class="fe fe-toggle-left" data-bs-toggle="tooltip" title="fe fe-toggle-left"></i></li>
											<li><i class="fe fe-toggle-right" data-bs-toggle="tooltip" title="fe fe-toggle-right"></i></li>
											<li><i class="fe fe-trash" data-bs-toggle="tooltip" title="fe fe-trash"></i></li>
											<li><i class="fe fe-trash-2" data-bs-toggle="tooltip" title="fe fe-trash-2"></i></li>
											<li><i class="fe fe-trending-down" data-bs-toggle="tooltip" title="fe fe-trending-down"></i></li>
											<li><i class="fe fe-trending-up" data-bs-toggle="tooltip" title="fe fe-trending-up"></i></li>
											<li><i class="fe fe-triangle" data-bs-toggle="tooltip" title="fe fe-triangle"></i></li>
											<li><i class="fe fe-truck" data-bs-toggle="tooltip" title="fe fe-truck"></i></li>
											<li><i class="fe fe-tv" data-bs-toggle="tooltip" title="fe fe-tv"></i></li>
											<li><i class="fe fe-twitter" data-bs-toggle="tooltip" title="fe fe-twitter"></i></li>
											<li><i class="fe fe-type" data-bs-toggle="tooltip" title="fe fe-type"></i></li>
											<li><i class="fe fe-umbrella" data-bs-toggle="tooltip" title="fe fe-umbrella"></i></li>
											<li><i class="fe fe-underline" data-bs-toggle="tooltip" title="fe fe-underline"></i></li>
											<li><i class="fe fe-unlock" data-bs-toggle="tooltip" title="fe fe-unlock"></i></li>
											<li><i class="fe fe-upload" data-bs-toggle="tooltip" title="fe fe-upload"></i></li>
											<li><i class="fe fe-upload-cloud" data-bs-toggle="tooltip" title="fe fe-upload-cloud"></i></li>
											<li><i class="fe fe-user" data-bs-toggle="tooltip" title="fe fe-user"></i></li>
											<li><i class="fe fe-user-check" data-bs-toggle="tooltip" title="fe fe-user-check"></i></li>
											<li><i class="fe fe-user-minus" data-bs-toggle="tooltip" title="fe fe-user-minus"></i></li>
											<li><i class="fe fe-user-plus" data-bs-toggle="tooltip" title="fe fe-user-plus"></i></li>
											<li><i class="fe fe-user-x" data-bs-toggle="tooltip" title="fe fe-user-x"></i></li>
											<li><i class="fe fe-users" data-bs-toggle="tooltip" title="fe fe-users"></i></li>
											<li><i class="fe fe-video" data-bs-toggle="tooltip" title="fe fe-video"></i></li>
											<li><i class="fe fe-video-off" data-bs-toggle="tooltip" title="fe fe-video-off"></i></li>
											<li><i class="fe fe-voicemail" data-bs-toggle="tooltip" title="fe fe-voicemail"></i></li>
											<li><i class="fe fe-volume" data-bs-toggle="tooltip" title="fe fe-volume"></i></li>
											<li><i class="fe fe-volume-1" data-bs-toggle="tooltip" title="fe fe-volume-1"></i></li>
											<li><i class="fe fe-volume-2" data-bs-toggle="tooltip" title="fe fe-volume-2"></i></li>
											<li><i class="fe fe-volume-x" data-bs-toggle="tooltip" title="fe fe-volume-x"></i></li>
											<li><i class="fe fe-watch" data-bs-toggle="tooltip" title="fe fe-watch"></i></li>
											<li><i class="fe fe-wifi" data-bs-toggle="tooltip" title="fe fe-wifi"></i></li>
											<li><i class="fe fe-wifi-off" data-bs-toggle="tooltip" title="fe fe-wifi-off"></i></li>
											<li><i class="fe fe-wind" data-bs-toggle="tooltip" title="fe fe-wind"></i></li>
											<li><i class="fe fe-x" data-bs-toggle="tooltip" title="fe fe-x"></i></li>
											<li><i class="fe fe-x-circle" data-bs-toggle="tooltip" title="fe fe-x-circle"></i></li>
											<li><i class="fe fe-x-square" data-bs-toggle="tooltip" title="fe fe-x-square"></i></li>
											<li><i class="fe fe-zap" data-bs-toggle="tooltip" title="fe fe-zap"></i></li>
											<li><i class="fe fe-zap-off" data-bs-toggle="tooltip" title="fe fe-zap-off"></i></li>
											<li><i class="fe fe-zoom-in" data-bs-toggle="tooltip" title="fe fe-zoom-in"></i></li>
											<li><i class="fe fe-zoom-out" data-bs-toggle="tooltip" title="fe fe-zoom-out"></i></li>
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