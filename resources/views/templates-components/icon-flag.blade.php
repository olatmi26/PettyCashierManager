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
		<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
		
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
									<li><a href="icon-typicon.html">Typicon Icons</a></li>
									<li><a class="active" href="icon-flag.html">Flag Icons</a></li>
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
							<h5>Flag Icon</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Flag Icons</div>
								</div>
								<div class="card-body">
									<div class="icons-items">
										<ul class="icons-list">
											<li><i class="flag flag-ad" data-bs-toggle="tooltip" title="flag flag-ad"></i></li>
											<li><i class="flag flag-ae" data-bs-toggle="tooltip" title="flag flag-ae"></i></li>
											<li><i class="flag flag-af" data-bs-toggle="tooltip" title="flag flag-af"></i></li>
											<li><i class="flag flag-ag" data-bs-toggle="tooltip" title="flag flag-ag"></i></li>
											<li><i class="flag flag-ai" data-bs-toggle="tooltip" title="flag flag-ai"></i></li>
											<li><i class="flag flag-al" data-bs-toggle="tooltip" title="flag flag-al"></i></li>
											<li><i class="flag flag-am" data-bs-toggle="tooltip" title="flag flag-am"></i></li>
											<li><i class="flag flag-ao" data-bs-toggle="tooltip" title="flag flag-ao"></i></li>
											<li><i class="flag flag-ar" data-bs-toggle="tooltip" title="flag flag-ar"></i></li>
											<li><i class="flag flag-as" data-bs-toggle="tooltip" title="flag flag-as"></i></li>
											<li><i class="flag flag-at" data-bs-toggle="tooltip" title="flag flag-at"></i></li>
											<li><i class="flag flag-au" data-bs-toggle="tooltip" title="flag flag-au"></i></li>
											<li><i class="flag flag-aw" data-bs-toggle="tooltip" title="flag flag-aw"></i></li>
											<li><i class="flag flag-ax" data-bs-toggle="tooltip" title="flag flag-ax"></i></li>
											<li><i class="flag flag-az" data-bs-toggle="tooltip" title="flag flag-az"></i></li>
											<li><i class="flag flag-ba" data-bs-toggle="tooltip" title="flag flag-ba"></i></li>
											<li><i class="flag flag-bb" data-bs-toggle="tooltip" title="flag flag-bb"></i></li>
											<li><i class="flag flag-bd" data-bs-toggle="tooltip" title="flag flag-bd"></i></li>
											<li><i class="flag flag-be" data-bs-toggle="tooltip" title="flag flag-be"></i></li>
											<li><i class="flag flag-bf" data-bs-toggle="tooltip" title="flag flag-bf"></i></li>
											<li><i class="flag flag-bg" data-bs-toggle="tooltip" title="flag flag-bg"></i></li>
											<li><i class="flag flag-bh" data-bs-toggle="tooltip" title="flag flag-bh"></i></li>
											<li><i class="flag flag-bi" data-bs-toggle="tooltip" title="flag flag-bi"></i></li>
											<li><i class="flag flag-bj" data-bs-toggle="tooltip" title="flag flag-bj"></i></li>
											<li><i class="flag flag-bl" data-bs-toggle="tooltip" title="flag flag-bl"></i></li>
											<li><i class="flag flag-bm" data-bs-toggle="tooltip" title="flag flag-bm"></i></li>
											<li><i class="flag flag-bn" data-bs-toggle="tooltip" title="flag flag-bn"></i></li>
											<li><i class="flag flag-bo" data-bs-toggle="tooltip" title="flag flag-bo"></i></li>
											<li><i class="flag flag-bq" data-bs-toggle="tooltip" title="flag flag-bq"></i></li>
											<li><i class="flag flag-br" data-bs-toggle="tooltip" title="flag flag-br"></i></li>
											<li><i class="flag flag-bs" data-bs-toggle="tooltip" title="flag flag-bs"></i></li>
											<li><i class="flag flag-bt" data-bs-toggle="tooltip" title="flag flag-bt"></i></li>
											<li><i class="flag flag-bv" data-bs-toggle="tooltip" title="flag flag-bv"></i></li>
											<li><i class="flag flag-bw" data-bs-toggle="tooltip" title="flag flag-bw"></i></li>
											<li><i class="flag flag-by" data-bs-toggle="tooltip" title="flag flag-by"></i></li>
											<li><i class="flag flag-bz" data-bs-toggle="tooltip" title="flag flag-bz"></i></li>
											<li><i class="flag flag-ca" data-bs-toggle="tooltip" title="flag flag-ca"></i></li>
											<li><i class="flag flag-cc" data-bs-toggle="tooltip" title="flag flag-cc"></i></li>
											<li><i class="flag flag-cd" data-bs-toggle="tooltip" title="flag flag-cd"></i></li>
											<li><i class="flag flag-cf" data-bs-toggle="tooltip" title="flag flag-cf"></i></li>
											<li><i class="flag flag-cg" data-bs-toggle="tooltip" title="flag flag-cg"></i></li>
											<li><i class="flag flag-ch" data-bs-toggle="tooltip" title="flag flag-ch"></i></li>
											<li><i class="flag flag-ci" data-bs-toggle="tooltip" title="flag flag-ci"></i></li>
											<li><i class="flag flag-ck" data-bs-toggle="tooltip" title="flag flag-ck"></i></li>
											<li><i class="flag flag-cl" data-bs-toggle="tooltip" title="flag flag-cl"></i></li>
											<li><i class="flag flag-cm" data-bs-toggle="tooltip" title="flag flag-cm"></i></li>
											<li><i class="flag flag-cn" data-bs-toggle="tooltip" title="flag flag-cn"></i></li>
											<li><i class="flag flag-co" data-bs-toggle="tooltip" title="flag flag-co"></i></li>
											<li><i class="flag flag-cr" data-bs-toggle="tooltip" title="flag flag-cr"></i></li>
											<li><i class="flag flag-cu" data-bs-toggle="tooltip" title="flag flag-cu"></i></li>
											<li><i class="flag flag-cv" data-bs-toggle="tooltip" title="flag flag-cv"></i></li>
											<li><i class="flag flag-cw" data-bs-toggle="tooltip" title="flag flag-cw"></i></li>
											<li><i class="flag flag-cx" data-bs-toggle="tooltip" title="flag flag-cx"></i></li>
											<li><i class="flag flag-cy" data-bs-toggle="tooltip" title="flag flag-cy"></i></li>
											<li><i class="flag flag-cz" data-bs-toggle="tooltip" title="flag flag-cz"></i></li>
											<li><i class="flag flag-de" data-bs-toggle="tooltip" title="flag flag-de"></i></li>
											<li><i class="flag flag-dj" data-bs-toggle="tooltip" title="flag flag-dj"></i></li>
											<li><i class="flag flag-dk" data-bs-toggle="tooltip" title="flag flag-dk"></i></li>
											<li><i class="flag flag-dm" data-bs-toggle="tooltip" title="flag flag-dm"></i></li>
											<li><i class="flag flag-do" data-bs-toggle="tooltip" title="flag flag-do"></i></li>
											<li><i class="flag flag-dz" data-bs-toggle="tooltip" title="flag flag-dz"></i></li>
											<li><i class="flag flag-ec" data-bs-toggle="tooltip" title="flag flag-ec"></i></li>
											<li><i class="flag flag-ee" data-bs-toggle="tooltip" title="flag flag-ee"></i></li>
											<li><i class="flag flag-eg" data-bs-toggle="tooltip" title="flag flag-eg"></i></li>
											<li><i class="flag flag-er" data-bs-toggle="tooltip" title="flag flag-er"></i></li>
											<li><i class="flag flag-es" data-bs-toggle="tooltip" title="flag flag-es"></i></li>
											<li><i class="flag flag-et" data-bs-toggle="tooltip" title="flag flag-et"></i></li>
											<li><i class="flag flag-fi" data-bs-toggle="tooltip" title="flag flag-fi"></i></li>
											<li><i class="flag flag-fj" data-bs-toggle="tooltip" title="flag flag-fj"></i></li>
											<li><i class="flag flag-fk" data-bs-toggle="tooltip" title="flag flag-fk"></i></li>
											<li><i class="flag flag-fm" data-bs-toggle="tooltip" title="flag flag-fm"></i></li>
											<li><i class="flag flag-fo" data-bs-toggle="tooltip" title="flag flag-fo"></i></li>
											<li><i class="flag flag-fr" data-bs-toggle="tooltip" title="flag flag-fr"></i></li>
											<li><i class="flag flag-ga" data-bs-toggle="tooltip" title="flag flag-ga"></i></li>
											<li><i class="flag flag-gb" data-bs-toggle="tooltip" title="flag flag-gb"></i></li>
											<li><i class="flag flag-gd" data-bs-toggle="tooltip" title="flag flag-gd"></i></li>
											<li><i class="flag flag-ge" data-bs-toggle="tooltip" title="flag flag-ge"></i></li>
											<li><i class="flag flag-gf" data-bs-toggle="tooltip" title="flag flag-gf"></i></li>
											<li><i class="flag flag-gg" data-bs-toggle="tooltip" title="flag flag-gg"></i></li>
											<li><i class="flag flag-gh" data-bs-toggle="tooltip" title="flag flag-gh"></i></li>
											<li><i class="flag flag-gi" data-bs-toggle="tooltip" title="flag flag-gi"></i></li>
											<li><i class="flag flag-gl" data-bs-toggle="tooltip" title="flag flag-gl"></i></li>
											<li><i class="flag flag-gm" data-bs-toggle="tooltip" title="flag flag-gm"></i></li>
											<li><i class="flag flag-gn" data-bs-toggle="tooltip" title="flag flag-gn"></i></li>
											<li><i class="flag flag-gp" data-bs-toggle="tooltip" title="flag flag-gp"></i></li>
											<li><i class="flag flag-gq" data-bs-toggle="tooltip" title="flag flag-gq"></i></li>
											<li><i class="flag flag-gr" data-bs-toggle="tooltip" title="flag flag-gr"></i></li>
											<li><i class="flag flag-gs" data-bs-toggle="tooltip" title="flag flag-gs"></i></li>
											<li><i class="flag flag-gt" data-bs-toggle="tooltip" title="flag flag-gt"></i></li>
											<li><i class="flag flag-gu" data-bs-toggle="tooltip" title="flag flag-gu"></i></li>
											<li><i class="flag flag-gw" data-bs-toggle="tooltip" title="flag flag-gw"></i></li>
											<li><i class="flag flag-gy" data-bs-toggle="tooltip" title="flag flag-gy"></i></li>
											<li><i class="flag flag-hk" data-bs-toggle="tooltip" title="flag flag-hk"></i></li>
											<li><i class="flag flag-hn" data-bs-toggle="tooltip" title="flag flag-hn"></i></li>
											<li><i class="flag flag-hr" data-bs-toggle="tooltip" title="flag flag-hr"></i></li>
											<li><i class="flag flag-ht" data-bs-toggle="tooltip" title="flag flag-ht"></i></li>
											<li><i class="flag flag-hu" data-bs-toggle="tooltip" title="flag flag-hu"></i></li>
											<li><i class="flag flag-id" data-bs-toggle="tooltip" title="flag flag-id"></i></li>
											<li><i class="flag flag-ie" data-bs-toggle="tooltip" title="flag flag-ie"></i></li>
											<li><i class="flag flag-il" data-bs-toggle="tooltip" title="flag flag-il"></i></li>
											<li><i class="flag flag-im" data-bs-toggle="tooltip" title="flag flag-im"></i></li>
											<li><i class="flag flag-in" data-bs-toggle="tooltip" title="flag flag-in"></i></li>
											<li><i class="flag flag-io" data-bs-toggle="tooltip" title="flag flag-io"></i></li>
											<li><i class="flag flag-iq" data-bs-toggle="tooltip" title="flag flag-iq"></i></li>
											<li><i class="flag flag-ir" data-bs-toggle="tooltip" title="flag flag-ir"></i></li>
											<li><i class="flag flag-is" data-bs-toggle="tooltip" title="flag flag-is"></i></li>
											<li><i class="flag flag-it" data-bs-toggle="tooltip" title="flag flag-it"></i></li>
											<li><i class="flag flag-je" data-bs-toggle="tooltip" title="flag flag-je"></i></li>
											<li><i class="flag flag-jm" data-bs-toggle="tooltip" title="flag flag-jm"></i></li>
											<li><i class="flag flag-jo" data-bs-toggle="tooltip" title="flag flag-jo"></i></li>
											<li><i class="flag flag-jp" data-bs-toggle="tooltip" title="flag flag-jp"></i></li>
											<li><i class="flag flag-ke" data-bs-toggle="tooltip" title="flag flag-ke"></i></li>
											<li><i class="flag flag-kg" data-bs-toggle="tooltip" title="flag flag-kg"></i></li>
											<li><i class="flag flag-kh" data-bs-toggle="tooltip" title="flag flag-kh"></i></li>
											<li><i class="flag flag-ki" data-bs-toggle="tooltip" title="flag flag-ki"></i></li>
											<li><i class="flag flag-km" data-bs-toggle="tooltip" title="flag flag-km"></i></li>
											<li><i class="flag flag-kn" data-bs-toggle="tooltip" title="flag flag-kn"></i></li>
											<li><i class="flag flag-kp" data-bs-toggle="tooltip" title="flag flag-kp"></i></li>
											<li><i class="flag flag-kr" data-bs-toggle="tooltip" title="flag flag-kr"></i></li>
											<li><i class="flag flag-kw" data-bs-toggle="tooltip" title="flag flag-kw"></i></li>
											<li><i class="flag flag-ky" data-bs-toggle="tooltip" title="flag flag-ky"></i></li>
											<li><i class="flag flag-kz" data-bs-toggle="tooltip" title="flag flag-kz"></i></li>
											<li><i class="flag flag-la" data-bs-toggle="tooltip" title="flag flag-la"></i></li>
											<li><i class="flag flag-lb" data-bs-toggle="tooltip" title="flag flag-lb"></i></li>
											<li><i class="flag flag-lc" data-bs-toggle="tooltip" title="flag flag-lc"></i></li>
											<li><i class="flag flag-li" data-bs-toggle="tooltip" title="flag flag-li"></i></li>
											<li><i class="flag flag-lk" data-bs-toggle="tooltip" title="flag flag-lk"></i></li>
											<li><i class="flag flag-lr" data-bs-toggle="tooltip" title="flag flag-lr"></i></li>
											<li><i class="flag flag-ls" data-bs-toggle="tooltip" title="flag flag-ls"></i></li>
											<li><i class="flag flag-lt" data-bs-toggle="tooltip" title="flag flag-lt"></i></li>
											<li><i class="flag flag-lu" data-bs-toggle="tooltip" title="flag flag-lu"></i></li>
											<li><i class="flag flag-lv" data-bs-toggle="tooltip" title="flag flag-lv"></i></li>
											<li><i class="flag flag-ly" data-bs-toggle="tooltip" title="flag flag-ly"></i></li>
											<li><i class="flag flag-ma" data-bs-toggle="tooltip" title="flag flag-ma"></i></li>
											<li><i class="flag flag-mc" data-bs-toggle="tooltip" title="flag flag-mc"></i></li>
											<li><i class="flag flag-md" data-bs-toggle="tooltip" title="flag flag-md"></i></li>
											<li><i class="flag flag-me" data-bs-toggle="tooltip" title="flag flag-me"></i></li>
											<li><i class="flag flag-mg" data-bs-toggle="tooltip" title="flag flag-mg"></i></li>
											<li><i class="flag flag-mh" data-bs-toggle="tooltip" title="flag flag-mh"></i></li>
											<li><i class="flag flag-mk" data-bs-toggle="tooltip" title="flag flag-mk"></i></li>
											<li><i class="flag flag-ml" data-bs-toggle="tooltip" title="flag flag-ml"></i></li>
											<li><i class="flag flag-mm" data-bs-toggle="tooltip" title="flag flag-mm"></i></li>
											<li><i class="flag flag-mn" data-bs-toggle="tooltip" title="flag flag-mn"></i></li>
											<li><i class="flag flag-mo" data-bs-toggle="tooltip" title="flag flag-mo"></i></li>
											<li><i class="flag flag-mp" data-bs-toggle="tooltip" title="flag flag-mp"></i></li>
											<li><i class="flag flag-mq" data-bs-toggle="tooltip" title="flag flag-mq"></i></li>
											<li><i class="flag flag-mr" data-bs-toggle="tooltip" title="flag flag-mr"></i></li>
											<li><i class="flag flag-ms" data-bs-toggle="tooltip" title="flag flag-ms"></i></li>
											<li><i class="flag flag-mt" data-bs-toggle="tooltip" title="flag flag-mt"></i></li>
											<li><i class="flag flag-mu" data-bs-toggle="tooltip" title="flag flag-mu"></i></li>
											<li><i class="flag flag-mv" data-bs-toggle="tooltip" title="flag flag-mv"></i></li>
											<li><i class="flag flag-mw" data-bs-toggle="tooltip" title="flag flag-mw"></i></li>
											<li><i class="flag flag-mx" data-bs-toggle="tooltip" title="flag flag-mx"></i></li>
											<li><i class="flag flag-my" data-bs-toggle="tooltip" title="flag flag-my"></i></li>
											<li><i class="flag flag-mz" data-bs-toggle="tooltip" title="flag flag-mz"></i></li>
											<li><i class="flag flag-na" data-bs-toggle="tooltip" title="flag flag-na"></i></li>
											<li><i class="flag flag-nc" data-bs-toggle="tooltip" title="flag flag-nc"></i></li>
											<li><i class="flag flag-ne" data-bs-toggle="tooltip" title="flag flag-ne"></i></li>
											<li><i class="flag flag-nf" data-bs-toggle="tooltip" title="flag flag-nf"></i></li>
											<li><i class="flag flag-ng" data-bs-toggle="tooltip" title="flag flag-ng"></i></li>
											<li><i class="flag flag-ni" data-bs-toggle="tooltip" title="flag flag-ni"></i></li>
											<li><i class="flag flag-nl" data-bs-toggle="tooltip" title="flag flag-nl"></i></li>
											<li><i class="flag flag-no" data-bs-toggle="tooltip" title="flag flag-no"></i></li>
											<li><i class="flag flag-np" data-bs-toggle="tooltip" title="flag flag-np"></i></li>
											<li><i class="flag flag-nr" data-bs-toggle="tooltip" title="flag flag-nr"></i></li>
											<li><i class="flag flag-nu" data-bs-toggle="tooltip" title="flag flag-nu"></i></li>
											<li><i class="flag flag-nz" data-bs-toggle="tooltip" title="flag flag-nz"></i></li>
											<li><i class="flag flag-om" data-bs-toggle="tooltip" title="flag flag-om"></i></li>
											<li><i class="flag flag-pa" data-bs-toggle="tooltip" title="flag flag-pa"></i></li>
											<li><i class="flag flag-pe" data-bs-toggle="tooltip" title="flag flag-pe"></i></li>
											<li><i class="flag flag-pf" data-bs-toggle="tooltip" title="flag flag-pf"></i></li>
											<li><i class="flag flag-pg" data-bs-toggle="tooltip" title="flag flag-pg"></i></li>
											<li><i class="flag flag-ph" data-bs-toggle="tooltip" title="flag flag-ph"></i></li>
											<li><i class="flag flag-pk" data-bs-toggle="tooltip" title="flag flag-pk"></i></li>
											<li><i class="flag flag-pl" data-bs-toggle="tooltip" title="flag flag-pl"></i></li>
											<li><i class="flag flag-pm" data-bs-toggle="tooltip" title="flag flag-pm"></i></li>
											<li><i class="flag flag-pn" data-bs-toggle="tooltip" title="flag flag-pn"></i></li>
											<li><i class="flag flag-pr" data-bs-toggle="tooltip" title="flag flag-pr"></i></li>
											<li><i class="flag flag-ps" data-bs-toggle="tooltip" title="flag flag-ps"></i></li>
											<li><i class="flag flag-pt" data-bs-toggle="tooltip" title="flag flag-pt"></i></li>
											<li><i class="flag flag-pw" data-bs-toggle="tooltip" title="flag flag-pw"></i></li>
											<li><i class="flag flag-py" data-bs-toggle="tooltip" title="flag flag-py"></i></li>
											<li><i class="flag flag-qa" data-bs-toggle="tooltip" title="flag flag-qa"></i></li>
											<li><i class="flag flag-re" data-bs-toggle="tooltip" title="flag flag-re"></i></li>
											<li><i class="flag flag-ro" data-bs-toggle="tooltip" title="flag flag-ro"></i></li>
											<li><i class="flag flag-rs" data-bs-toggle="tooltip" title="flag flag-rs"></i></li>
											<li><i class="flag flag-ru" data-bs-toggle="tooltip" title="flag flag-ru"></i></li>
											<li><i class="flag flag-rw" data-bs-toggle="tooltip" title="flag flag-rw"></i></li>
											<li><i class="flag flag-sa" data-bs-toggle="tooltip" title="flag flag-sa"></i></li>
											<li><i class="flag flag-sb" data-bs-toggle="tooltip" title="flag flag-sb"></i></li>
											<li><i class="flag flag-sc" data-bs-toggle="tooltip" title="flag flag-sc"></i></li>
											<li><i class="flag flag-sd" data-bs-toggle="tooltip" title="flag flag-sd"></i></li>
											<li><i class="flag flag-se" data-bs-toggle="tooltip" title="flag flag-se"></i></li>
											<li><i class="flag flag-sg" data-bs-toggle="tooltip" title="flag flag-sg"></i></li>
											<li><i class="flag flag-sh" data-bs-toggle="tooltip" title="flag flag-sh"></i></li>
											<li><i class="flag flag-si" data-bs-toggle="tooltip" title="flag flag-si"></i></li>
											<li><i class="flag flag-sk" data-bs-toggle="tooltip" title="flag flag-sk"></i></li>
											<li><i class="flag flag-sl" data-bs-toggle="tooltip" title="flag flag-sl"></i></li>
											<li><i class="flag flag-sm" data-bs-toggle="tooltip" title="flag flag-sm"></i></li>
											<li><i class="flag flag-sn" data-bs-toggle="tooltip" title="flag flag-sn"></i></li>
											<li><i class="flag flag-so" data-bs-toggle="tooltip" title="flag flag-so"></i></li>
											<li><i class="flag flag-sr" data-bs-toggle="tooltip" title="flag flag-sr"></i></li>
											<li><i class="flag flag-ss" data-bs-toggle="tooltip" title="flag flag-ss"></i></li>
											<li><i class="flag flag-st" data-bs-toggle="tooltip" title="flag flag-st"></i></li>
											<li><i class="flag flag-sv" data-bs-toggle="tooltip" title="flag flag-sv"></i></li>
											<li><i class="flag flag-sx" data-bs-toggle="tooltip" title="flag flag-sx"></i></li>
											<li><i class="flag flag-sy" data-bs-toggle="tooltip" title="flag flag-sy"></i></li>
											<li><i class="flag flag-sz" data-bs-toggle="tooltip" title="flag flag-sz"></i></li>
											<li><i class="flag flag-tc" data-bs-toggle="tooltip" title="flag flag-tc"></i></li>
											<li><i class="flag flag-td" data-bs-toggle="tooltip" title="flag flag-td"></i></li>
											<li><i class="flag flag-tf" data-bs-toggle="tooltip" title="flag flag-tf"></i></li>
											<li><i class="flag flag-tg" data-bs-toggle="tooltip" title="flag flag-tg"></i></li>
											<li><i class="flag flag-th" data-bs-toggle="tooltip" title="flag flag-th"></i></li>
											<li><i class="flag flag-tj" data-bs-toggle="tooltip" title="flag flag-tj"></i></li>
											<li><i class="flag flag-tk" data-bs-toggle="tooltip" title="flag flag-tk"></i></li>
											<li><i class="flag flag-tl" data-bs-toggle="tooltip" title="flag flag-tl"></i></li>
											<li><i class="flag flag-tm" data-bs-toggle="tooltip" title="flag flag-tm"></i></li>
											<li><i class="flag flag-tn" data-bs-toggle="tooltip" title="flag flag-tn"></i></li>
											<li><i class="flag flag-to" data-bs-toggle="tooltip" title="flag flag-to"></i></li>
											<li><i class="flag flag-tr" data-bs-toggle="tooltip" title="flag flag-tr"></i></li>
											<li><i class="flag flag-tt" data-bs-toggle="tooltip" title="flag flag-tt"></i></li>
											<li><i class="flag flag-tv" data-bs-toggle="tooltip" title="flag flag-tv"></i></li>
											<li><i class="flag flag-tw" data-bs-toggle="tooltip" title="flag flag-tw"></i></li>
											<li><i class="flag flag-tz" data-bs-toggle="tooltip" title="flag flag-tz"></i></li>
											<li><i class="flag flag-ua" data-bs-toggle="tooltip" title="flag flag-ua"></i></li>
											<li><i class="flag flag-ug" data-bs-toggle="tooltip" title="flag flag-ug"></i></li>
											<li><i class="flag flag-um" data-bs-toggle="tooltip" title="flag flag-um"></i></li>
											<li><i class="flag flag-us" data-bs-toggle="tooltip" title="flag flag-us"></i></li>
											<li><i class="flag flag-uy" data-bs-toggle="tooltip" title="flag flag-uy"></i></li>
											<li><i class="flag flag-uz" data-bs-toggle="tooltip" title="flag flag-uz"></i></li>
											<li><i class="flag flag-va" data-bs-toggle="tooltip" title="flag flag-va"></i></li>
											<li><i class="flag flag-vc" data-bs-toggle="tooltip" title="flag flag-vc"></i></li>
											<li><i class="flag flag-ve" data-bs-toggle="tooltip" title="flag flag-ve"></i></li>
											<li><i class="flag flag-vg" data-bs-toggle="tooltip" title="flag flag-vg"></i></li>
											<li><i class="flag flag-vi" data-bs-toggle="tooltip" title="flag flag-vi"></i></li>
											<li><i class="flag flag-vn" data-bs-toggle="tooltip" title="flag flag-vn"></i></li>
											<li><i class="flag flag-vu" data-bs-toggle="tooltip" title="flag flag-vu"></i></li>
											<li><i class="flag flag-wf" data-bs-toggle="tooltip" title="flag flag-wf"></i></li>
											<li><i class="flag flag-ws" data-bs-toggle="tooltip" title="flag flag-ws"></i></li>
											<li><i class="flag flag-ye" data-bs-toggle="tooltip" title="flag flag-ye"></i></li>
											<li><i class="flag flag-yt" data-bs-toggle="tooltip" title="flag flag-yt"></i></li>
											<li><i class="flag flag-za" data-bs-toggle="tooltip" title="flag flag-za"></i></li>
											<li><i class="flag flag-zm" data-bs-toggle="tooltip" title="flag flag-zm"></i></li>
											<li><i class="flag flag-zw" data-bs-toggle="tooltip" title="flag flag-zw"></i></li>
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