<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Kanakku - Bootstrap Admin HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Fontawesome CSS -->
    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <!-- Feather CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/feather/feather.css" />

    <!-- Themify CSS -->
    <link rel="stylesheet" href="assets/plugins/icons/themify/themify.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
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
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
              <img src="assets/img/icons/search.svg" alt="img" />
            </button>
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
            <a
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              href="#"
              role="button"
            >
              <img src="assets/img/flags/us1.png" alt="" height="20" /><span
                >English</span
              >
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/us.png" alt="" height="16" /><span
                  >English</span
                >
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/fr.png" alt="" height="16" /><span
                  >French</span
                >
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/es.png" alt="" height="16" /><span
                  >Spanish</span
                >
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/de.png" alt="" height="16" /><span
                  >German</span
                >
              </a>
            </div>
          </li>
          <!-- /Flag -->

          <li class="nav-item has-arrow dropdown-heads">
            <a href="javascript:void(0);" class="toggle-switch">
              <i class="fe fe-moon"></i>
            </a>
          </li>
          <li class="nav-item dropdown flag-nav dropdown-heads">
            <a
              class="nav-link"
              data-bs-toggle="dropdown"
              href="#"
              role="button"
            >
              <i class="fe fe-bell"></i>
              <span class="badge rounded-pill"></span>
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
                          <img
                            class="avatar-img rounded-circle"
                            alt=""
                            src="assets/img/profiles/avatar-02.jpg"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Brian Johnson</span> paid
                            the invoice <span class="noti-title">#DF65485</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm">
                          <img
                            class="avatar-img rounded-circle"
                            alt=""
                            src="assets/img/profiles/avatar-03.jpg"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Marie Canales</span> has
                            accepted your estimate
                            <span class="noti-title">#GTR458789</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <div class="avatar avatar-sm">
                          <span
                            class="avatar-title rounded-circle bg-primary-light"
                            ><i class="far fa-user"></i
                          ></span>
                        </div>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">New user registered</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm">
                          <img
                            class="avatar-img rounded-circle"
                            alt=""
                            src="assets/img/profiles/avatar-04.jpg"
                          />
                        </span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Barbara Moore</span>
                            declined the invoice
                            <span class="noti-title">#RDW026896</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="profile.html">
                      <div class="media d-flex">
                        <div class="avatar avatar-sm">
                          <span
                            class="avatar-title rounded-circle bg-info-light"
                            ><i class="far fa-comment"></i
                          ></span>
                        </div>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title"
                              >You have received a new message</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
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
          <li class="nav-item has-arrow dropdown-heads">
            <a href="javascript:void(0);" class="win-maximize">
              <i class="fe fe-maximize"></i>
            </a>
          </li>
          <!-- User Menu -->
          <li class="nav-item dropdown">
            <a
              href="javascript:void(0)"
              class="user-link nav-link"
              data-bs-toggle="dropdown"
            >
              <span class="user-img">
                <img
                  src="assets/img/profiles/avatar-07.jpg"
                  alt="img"
                  class="profilesidebar"
                />
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
              <img src="assets/img/logo.png" class="img-fluid logo" alt="" />
            </a>
            <a href="index.html">
              <img
                src="assets/img/logo-small.png"
                class="img-fluid logo-small"
                alt=""
              />
            </a>
          </div>
        </div>
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <!-- Main -->
            <ul>
              <li class="menu-title"><span>Main</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-home"></i> <span> Dashboard</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="index.html">Admin Dashboard</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-grid"></i> <span> Applications</span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="customers.html"
                  ><i class="fe fe-users"></i> <span>Customers</span></a
                >
              </li>
              <li>
                <a href="customer-details.html"
                  ><i class="fe fe-file"></i> <span>Customer Details</span></a
                >
              </li>
              <li>
                <a href="vendors.html"
                  ><i class="fe fe-user"></i> <span>Vendors</span></a
                >
              </li>
            </ul>
            <!-- /Customers -->

            <!-- Inventory -->
            <ul>
              <li class="menu-title"><span>Inventory</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-package"></i>
                  <span> Products / Services</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="product-list.html">Product List</a></li>
                  <li><a href="category.html">Category</a></li>

                  <li><a href="units.html">Units</a></li>
                </ul>
              </li>
              <li>
                <a href="inventory.html"
                  ><i class="fe fe-user"></i> <span>Inventory</span></a
                >
              </li>
            </ul>
            <!-- /Inventory -->

            <!-- Sales -->
            <ul>
              <li class="menu-title"><span>Sales</span></li>
              <li class="submenu">
                <a href="invoices.html"
                  ><i class="fe fe-file"></i> <span>Invoices</span
                  ><span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="invoices.html">Invoices List</a></li>
                  <li><a href="invoice-template.html">Invoice Templates</a></li>
                </ul>
              </li>
              <li>
                <a href="recurring-invoices.html"
                  ><i class="fe fe-clipboard"></i>
                  <span>Recurring Invoices</span></a
                >
              </li>
              <li>
                <a href="credit-notes.html"
                  ><i class="fe fe-edit"></i> <span>Credit Notes</span></a
                >
              </li>
            </ul>
            <!-- /Sales -->

            <!-- Purchases -->
            <ul>
              <li class="menu-title"><span>Purchases</span></li>
              <li>
                <a href="purchases.html"
                  ><i class="fe fe-shopping-cart"></i> <span>Purchases</span></a
                >
              </li>
              <li>
                <a href="purchase-orders.html"
                  ><i class="fe fe-shopping-bag"></i>
                  <span>Purchase Orders</span></a
                >
              </li>
              <li>
                <a href="debit-notes.html"
                  ><i class="fe fe-file-text"></i> <span>Debit Notes</span></a
                >
              </li>
            </ul>
            <!-- /Purchases -->

            <!-- Finance & Accounts -->
            <ul>
              <li class="menu-title"><span>Finance & Accounts</span></li>
              <li>
                <a href="expenses.html"
                  ><i class="fe fe-file-plus"></i> <span>Expenses</span></a
                >
              </li>
              <li>
                <a href="payments.html"
                  ><i class="fe fe-credit-card"></i> <span>Payments</span></a
                >
              </li>
            </ul>
            <!-- /Finance & Accounts -->

            <!-- Quotations -->
            <ul>
              <li class="menu-title"><span>Quotations</span></li>
              <li>
                <a href="quotations.html"
                  ><i class="fe fe-clipboard"></i> <span>Quotations</span></a
                >
              </li>
              <li>
                <a href="delivery-challans.html"
                  ><i class="fe fe-file-text"></i>
                  <span>Delivery Challans</span></a
                >
              </li>
            </ul>
            <!-- /Quotations -->

            <!-- Reports -->
            <ul>
              <li class="menu-title"><span>Reports</span></li>
              <li>
                <a href="quotations.html"
                  ><i class="fe fe-clipboard"></i> <span>Quotations</span></a
                >
              </li>
              <li>
                <a href="payment-summary.html"
                  ><i class="fe fe-credit-card"></i>
                  <span>Payment Summary</span></a
                >
              </li>
            </ul>
            <!-- /Reports -->

            <!-- User Management -->
            <ul>
              <li class="menu-title"><span>User Management</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-user"></i> <span> Manage Users</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="add-user.html">Add User</a></li>
                  <li><a href="users.html">Users</a></li>
                </ul>
              </li>
              <li>
                <a href="roles-permission.html"
                  ><i class="fe fe-clipboard"></i>
                  <span>Roles & Permission</span></a
                >
              </li>
              <li>
                <a href="delete-account-request.html"
                  ><i class="fe fe-trash-2"></i>
                  <span>Delete Account Request</span></a
                >
              </li>
            </ul>
            <!-- /User Management -->

            <!-- Membership) -->
            <ul>
              <li class="menu-title"><span>Membership</span></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-book"></i> <span> Membership</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="membership-plans.html">Membership Plans</a></li>
                  <li>
                    <a href="membership-addons.html">Membership Addons</a>
                  </li>
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
                <a href="#"
                  ><i class="fe fe-folder"></i> <span> Pages</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="add-page.html">Add Page</a></li>
                  <li><a href="pages.html">Pages</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-book"></i> <span> Blog</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="all-blogs.html">All Blogs</a></li>
                  <li><a href="add-blog.html">Add Blog</a></li>
                  <li><a href="categories.html">Categories</a></li>
                  <li><a href="blog-comments.html">Blog Comments</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-map-pin"></i> <span> Location</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="countries.html">Countries</a></li>
                  <li><a href="states.html">States</a></li>
                  <li><a href="cities.html">Cities</a></li>
                </ul>
              </li>
              <li>
                <a href="testimonials.html"
                  ><i class="fe fe-message-square"></i>
                  <span>Testimonials</span></a
                >
              </li>
              <li>
                <a href="faq.html"
                  ><i class="fe fe-alert-circle"></i> <span>FAQ</span></a
                >
              </li>
            </ul>
            <!-- /Content (CMS) -->

            <!-- Support -->
            <ul>
              <li class="menu-title"><span>Support</span></li>
              <li>
                <a href="contact-messages.html"
                  ><i class="fe fe-printer"></i>
                  <span>Contact Messages</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-save"></i> <span> Tickets</span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="#"
                  ><i class="fe fe-lock"></i> <span> Authentication </span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="profile.html"
                  ><i class="fe fe-user"></i> <span>Profile</span></a
                >
              </li>
              <li>
                <a href="error-404.html"
                  ><i class="fe fe-x-square"></i> <span>Error Pages</span></a
                >
              </li>
              <li>
                <a href="blank-page.html"
                  ><i class="fe fe-file"></i> <span>Blank Page</span></a
                >
              </li>
              <li>
                <a href="maps-vector.html"
                  ><i class="fe fe-image"></i> <span>Vector Maps</span></a
                >
              </li>
            </ul>
            <!-- /Pages -->

            <!-- UI Interface -->
            <ul>
              <li class="menu-title">
                <span>UI Interface</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-pocket"></i> <span>Base UI </span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="#"
                  ><i class="fe fe-box"></i> <span>Elements </span>
                  <span class="menu-arrow"></span
                ></a>
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
                  <li>
                    <a href="horizontal-timeline.html">Horizontal Timeline</a>
                  </li>
                  <li><a href="form-wizard.html">Form Wizard</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-bar-chart"></i> <span> Charts </span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="#"
                  ><i class="fe fe-award"></i> <span> Icons </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                  <li><a href="icon-feather.html">Feather Icons</a></li>
                  <li><a href="icon-ionic.html">Ionic Icons</a></li>
                  <li><a href="icon-material.html">Material Icons</a></li>
                  <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                  <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                  <li>
                    <a class="active" href="icon-themify.html">Themify Icons</a>
                  </li>
                  <li><a href="icon-weather.html">Weather Icons</a></li>
                  <li><a href="icon-typicon.html">Typicon Icons</a></li>
                  <li><a href="icon-flag.html">Flag Icons</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fe fe-sidebar"></i> <span> Forms </span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="#"
                  ><i class="fe fe-layout"></i> <span> Tables </span>
                  <span class="menu-arrow"></span
                ></a>
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
                <a href="settings.html"
                  ><i class="fe fe-settings"></i> <span>Settings</span></a
                >
              </li>
              <li>
                <a href="login.html"
                  ><i class="fe fe-power"></i> <span>Logout</span></a
                >
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
              <h5>Themify Icon</h5>
            </div>
          </div>
          <!-- /Page Header -->

          <div class="row">
            <!-- Chart -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Themify Icon</div>
                </div>
                <div class="card-body">
                  <div class="icons-items">
                    <ul class="icons-list">
                      <li>
                        <i
                          class="ti-arrow-up"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-right"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-left"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-down"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrows-vertical"
                          data-bs-toggle="tooltip"
                          title="ti-arrows-vertical"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrows-horizontal"
                          data-bs-toggle="tooltip"
                          title="ti-arrows-horizontal"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-up"
                          data-bs-toggle="tooltip"
                          title="ti-angle-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-right"
                          data-bs-toggle="tooltip"
                          title="ti-angle-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-left"
                          data-bs-toggle="tooltip"
                          title="ti-angle-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-down"
                          data-bs-toggle="tooltip"
                          title="ti-angle-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-double-up"
                          data-bs-toggle="tooltip"
                          title="ti-angle-double-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-double-right"
                          data-bs-toggle="tooltip"
                          title="ti-angle-double-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-double-left"
                          data-bs-toggle="tooltip"
                          title="ti-angle-double-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-angle-double-down"
                          data-bs-toggle="tooltip"
                          title="ti-angle-double-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-move"
                          data-bs-toggle="tooltip"
                          title="ti-move"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-fullscreen"
                          data-bs-toggle="tooltip"
                          title="ti-fullscreen"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-top-right"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-top-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-top-left"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-top-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-circle-up"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-circle-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-circle-right"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-circle-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-circle-left"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-circle-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrow-circle-down"
                          data-bs-toggle="tooltip"
                          title="ti-arrow-circle-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-arrows-corner"
                          data-bs-toggle="tooltip"
                          title="ti-arrows-corner"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-split-v"
                          data-bs-toggle="tooltip"
                          title="ti-split-v"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-split-v-alt"
                          data-bs-toggle="tooltip"
                          title="ti-split-v-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-split-h"
                          data-bs-toggle="tooltip"
                          title="ti-split-h"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-point-up"
                          data-bs-toggle="tooltip"
                          title="ti-hand-point-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-point-right"
                          data-bs-toggle="tooltip"
                          title="ti-hand-point-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-point-left"
                          data-bs-toggle="tooltip"
                          title="ti-hand-point-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-point-down"
                          data-bs-toggle="tooltip"
                          title="ti-hand-point-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-back-right"
                          data-bs-toggle="tooltip"
                          title="ti-back-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-back-left"
                          data-bs-toggle="tooltip"
                          title="ti-back-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-exchange-vertical"
                          data-bs-toggle="tooltip"
                          title="ti-exchange-vertical"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-wand"
                          data-bs-toggle="tooltip"
                          title="ti-wand"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-save"
                          data-bs-toggle="tooltip"
                          title="ti-save"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-save-alt"
                          data-bs-toggle="tooltip"
                          title="ti-save-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-direction"
                          data-bs-toggle="tooltip"
                          title="ti-direction"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-direction-alt"
                          data-bs-toggle="tooltip"
                          title="ti-direction-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-user"
                          data-bs-toggle="tooltip"
                          title="ti-user"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-link"
                          data-bs-toggle="tooltip"
                          title="ti-link"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-unlink"
                          data-bs-toggle="tooltip"
                          title="ti-unlink"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-trash"
                          data-bs-toggle="tooltip"
                          title="ti-trash"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-target"
                          data-bs-toggle="tooltip"
                          title="ti-target"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-tag"
                          data-bs-toggle="tooltip"
                          title="ti-tag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-desktop"
                          data-bs-toggle="tooltip"
                          title="ti-desktop"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-tablet"
                          data-bs-toggle="tooltip"
                          title="ti-tablet"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-mobile"
                          data-bs-toggle="tooltip"
                          title="ti-mobile"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-email"
                          data-bs-toggle="tooltip"
                          title="ti-email"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-star"
                          data-bs-toggle="tooltip"
                          title="ti-star"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-spray"
                          data-bs-toggle="tooltip"
                          title="ti-spray"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-signal"
                          data-bs-toggle="tooltip"
                          title="ti-signal"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shopping-cart"
                          data-bs-toggle="tooltip"
                          title="ti-shopping-cart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shopping-cart-full"
                          data-bs-toggle="tooltip"
                          title="ti-shopping-cart-full"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-settings"
                          data-bs-toggle="tooltip"
                          title="ti-settings"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-search"
                          data-bs-toggle="tooltip"
                          title="ti-search"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-zoom-in"
                          data-bs-toggle="tooltip"
                          title="ti-zoom-in"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-zoom-out"
                          data-bs-toggle="tooltip"
                          title="ti-zoom-out"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-cut"
                          data-bs-toggle="tooltip"
                          title="ti-cut"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-ruler"
                          data-bs-toggle="tooltip"
                          title="ti-ruler"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-ruler-alt-2"
                          data-bs-toggle="tooltip"
                          title="ti-ruler-alt-2"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-ruler-pencil"
                          data-bs-toggle="tooltip"
                          title="ti-ruler-pencil"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-ruler-alt"
                          data-bs-toggle="tooltip"
                          title="ti-ruler-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bookmark"
                          data-bs-toggle="tooltip"
                          title="ti-bookmark"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bookmark-alt"
                          data-bs-toggle="tooltip"
                          title="ti-bookmark-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-reload"
                          data-bs-toggle="tooltip"
                          title="ti-reload"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-plus"
                          data-bs-toggle="tooltip"
                          title="ti-plus"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-minus"
                          data-bs-toggle="tooltip"
                          title="ti-minus"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-close"
                          data-bs-toggle="tooltip"
                          title="ti-close"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pin"
                          data-bs-toggle="tooltip"
                          title="ti-pin"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pencil"
                          data-bs-toggle="tooltip"
                          title="ti-pencil"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pencil-alt"
                          data-bs-toggle="tooltip"
                          title="ti-pencil-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-paint-roller"
                          data-bs-toggle="tooltip"
                          title="ti-paint-roller"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-paint-bucket"
                          data-bs-toggle="tooltip"
                          title="ti-paint-bucket"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-na"
                          data-bs-toggle="tooltip"
                          title="ti-na"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-medall"
                          data-bs-toggle="tooltip"
                          title="ti-medall"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-medall-alt"
                          data-bs-toggle="tooltip"
                          title="ti-medall-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-marker"
                          data-bs-toggle="tooltip"
                          title="ti-marker"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-marker-alt"
                          data-bs-toggle="tooltip"
                          title="ti-marker-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-lock"
                          data-bs-toggle="tooltip"
                          title="ti-lock"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-unlock"
                          data-bs-toggle="tooltip"
                          title="ti-unlock"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-location-arrow"
                          data-bs-toggle="tooltip"
                          title="ti-location-arrow"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-layout"
                          data-bs-toggle="tooltip"
                          title="ti-layout"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-layers"
                          data-bs-toggle="tooltip"
                          title="ti-layers"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-layers-alt"
                          data-bs-toggle="tooltip"
                          title="ti-layers-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-key"
                          data-bs-toggle="tooltip"
                          title="ti-key"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-image"
                          data-bs-toggle="tooltip"
                          title="ti-image"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-heart"
                          data-bs-toggle="tooltip"
                          title="ti-heart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-heart-broken"
                          data-bs-toggle="tooltip"
                          title="ti-heart-broken"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-stop"
                          data-bs-toggle="tooltip"
                          title="ti-hand-stop"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-open"
                          data-bs-toggle="tooltip"
                          title="ti-hand-open"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hand-drag"
                          data-bs-toggle="tooltip"
                          title="ti-hand-drag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-flag"
                          data-bs-toggle="tooltip"
                          title="ti-flag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-flag-alt"
                          data-bs-toggle="tooltip"
                          title="ti-flag-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-flag-alt-2"
                          data-bs-toggle="tooltip"
                          title="ti-flag-alt-2"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-eye"
                          data-bs-toggle="tooltip"
                          title="ti-eye"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-import"
                          data-bs-toggle="tooltip"
                          title="ti-import"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-export"
                          data-bs-toggle="tooltip"
                          title="ti-export"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-cup"
                          data-bs-toggle="tooltip"
                          title="ti-cup"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-crown"
                          data-bs-toggle="tooltip"
                          title="ti-crown"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-comments"
                          data-bs-toggle="tooltip"
                          title="ti-comments"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-comment"
                          data-bs-toggle="tooltip"
                          title="ti-comment"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-comment-alt"
                          data-bs-toggle="tooltip"
                          title="ti-comment-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-thought"
                          data-bs-toggle="tooltip"
                          title="ti-thought"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-clip"
                          data-bs-toggle="tooltip"
                          title="ti-clip"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-check"
                          data-bs-toggle="tooltip"
                          title="ti-check"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-check-box"
                          data-bs-toggle="tooltip"
                          title="ti-check-box"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-camera"
                          data-bs-toggle="tooltip"
                          title="ti-camera"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-announcement"
                          data-bs-toggle="tooltip"
                          title="ti-announcement"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-brush"
                          data-bs-toggle="tooltip"
                          title="ti-brush"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-brush-alt"
                          data-bs-toggle="tooltip"
                          title="ti-brush-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-palette"
                          data-bs-toggle="tooltip"
                          title="ti-palette"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-briefcase"
                          data-bs-toggle="tooltip"
                          title="ti-briefcase"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bolt"
                          data-bs-toggle="tooltip"
                          title="ti-bolt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bolt-alt"
                          data-bs-toggle="tooltip"
                          title="ti-bolt-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-blackboard"
                          data-bs-toggle="tooltip"
                          title="ti-blackboard"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bag"
                          data-bs-toggle="tooltip"
                          title="ti-bag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-world"
                          data-bs-toggle="tooltip"
                          title="ti-world"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-wheelchair"
                          data-bs-toggle="tooltip"
                          title="ti-wheelchair"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-car"
                          data-bs-toggle="tooltip"
                          title="ti-car"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-truck"
                          data-bs-toggle="tooltip"
                          title="ti-truck"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-timer"
                          data-bs-toggle="tooltip"
                          title="ti-timer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-ticket"
                          data-bs-toggle="tooltip"
                          title="ti-ticket"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-thumb-up"
                          data-bs-toggle="tooltip"
                          title="ti-thumb-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-thumb-down"
                          data-bs-toggle="tooltip"
                          title="ti-thumb-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-stats-up"
                          data-bs-toggle="tooltip"
                          title="ti-stats-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-stats-down"
                          data-bs-toggle="tooltip"
                          title="ti-stats-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shine"
                          data-bs-toggle="tooltip"
                          title="ti-shine"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shift-right"
                          data-bs-toggle="tooltip"
                          title="ti-shift-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shift-left"
                          data-bs-toggle="tooltip"
                          title="ti-shift-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shift-right-alt"
                          data-bs-toggle="tooltip"
                          title="ti-shift-right-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shift-left-alt"
                          data-bs-toggle="tooltip"
                          title="ti-shift-left-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shield"
                          data-bs-toggle="tooltip"
                          title="ti-shield"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-notepad"
                          data-bs-toggle="tooltip"
                          title="ti-notepad"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-server"
                          data-bs-toggle="tooltip"
                          title="ti-server"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pulse"
                          data-bs-toggle="tooltip"
                          title="ti-pulse"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-printer"
                          data-bs-toggle="tooltip"
                          title="ti-printer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-power-off"
                          data-bs-toggle="tooltip"
                          title="ti-power-off"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-plug"
                          data-bs-toggle="tooltip"
                          title="ti-plug"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pie-chart"
                          data-bs-toggle="tooltip"
                          title="ti-pie-chart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-panel"
                          data-bs-toggle="tooltip"
                          title="ti-panel"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-package"
                          data-bs-toggle="tooltip"
                          title="ti-package"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-music"
                          data-bs-toggle="tooltip"
                          title="ti-music"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-music-alt"
                          data-bs-toggle="tooltip"
                          title="ti-music-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-mouse"
                          data-bs-toggle="tooltip"
                          title="ti-mouse"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-mouse-alt"
                          data-bs-toggle="tooltip"
                          title="ti-mouse-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-money"
                          data-bs-toggle="tooltip"
                          title="ti-money"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-microphone"
                          data-bs-toggle="tooltip"
                          title="ti-microphone"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-menu"
                          data-bs-toggle="tooltip"
                          title="ti-menu"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-menu-alt"
                          data-bs-toggle="tooltip"
                          title="ti-menu-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-map"
                          data-bs-toggle="tooltip"
                          title="ti-map"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-map-alt"
                          data-bs-toggle="tooltip"
                          title="ti-map-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-location-pin"
                          data-bs-toggle="tooltip"
                          title="ti-location-pin"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-light-bulb"
                          data-bs-toggle="tooltip"
                          title="ti-light-bulb"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-info"
                          data-bs-toggle="tooltip"
                          title="ti-info"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-infinite"
                          data-bs-toggle="tooltip"
                          title="ti-infinite"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-id-badge"
                          data-bs-toggle="tooltip"
                          title="ti-id-badge"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-hummer"
                          data-bs-toggle="tooltip"
                          title="ti-hummer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-home"
                          data-bs-toggle="tooltip"
                          title="ti-home"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-help"
                          data-bs-toggle="tooltip"
                          title="ti-help"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-headphone"
                          data-bs-toggle="tooltip"
                          title="ti-headphone"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-harddrives"
                          data-bs-toggle="tooltip"
                          title="ti-harddrives"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-harddrive"
                          data-bs-toggle="tooltip"
                          title="ti-harddrive"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-gift"
                          data-bs-toggle="tooltip"
                          title="ti-gift"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-game"
                          data-bs-toggle="tooltip"
                          title="ti-game"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-filter"
                          data-bs-toggle="tooltip"
                          title="ti-filter"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-files"
                          data-bs-toggle="tooltip"
                          title="ti-files"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-file"
                          data-bs-toggle="tooltip"
                          title="ti-file"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-zip"
                          data-bs-toggle="tooltip"
                          title="ti-zip"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-folder"
                          data-bs-toggle="tooltip"
                          title="ti-folder"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-envelope"
                          data-bs-toggle="tooltip"
                          title="ti-envelope"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-dashboard"
                          data-bs-toggle="tooltip"
                          title="ti-dashboard"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-cloud"
                          data-bs-toggle="tooltip"
                          title="ti-cloud"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-cloud-up"
                          data-bs-toggle="tooltip"
                          title="ti-cloud-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-cloud-down"
                          data-bs-toggle="tooltip"
                          title="ti-cloud-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-clipboard"
                          data-bs-toggle="tooltip"
                          title="ti-clipboard"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-calendar"
                          data-bs-toggle="tooltip"
                          title="ti-calendar"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-book"
                          data-bs-toggle="tooltip"
                          title="ti-book"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bell"
                          data-bs-toggle="tooltip"
                          title="ti-bell"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-basketball"
                          data-bs-toggle="tooltip"
                          title="ti-basketball"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bar-chart"
                          data-bs-toggle="tooltip"
                          title="ti-bar-chart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-bar-chart-alt"
                          data-bs-toggle="tooltip"
                          title="ti-bar-chart-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-archive"
                          data-bs-toggle="tooltip"
                          title="ti-archive"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-anchor"
                          data-bs-toggle="tooltip"
                          title="ti-anchor"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-alert"
                          data-bs-toggle="tooltip"
                          title="ti-alert"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-alarm-clock"
                          data-bs-toggle="tooltip"
                          title="ti-alarm-clock"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-agenda"
                          data-bs-toggle="tooltip"
                          title="ti-agenda"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-write"
                          data-bs-toggle="tooltip"
                          title="ti-write"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-wallet"
                          data-bs-toggle="tooltip"
                          title="ti-wallet"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-video-clapper"
                          data-bs-toggle="tooltip"
                          title="ti-video-clapper"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-video-camera"
                          data-bs-toggle="tooltip"
                          title="ti-video-camera"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-vector"
                          data-bs-toggle="tooltip"
                          title="ti-vector"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-support"
                          data-bs-toggle="tooltip"
                          title="ti-support"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-stamp"
                          data-bs-toggle="tooltip"
                          title="ti-stamp"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-slice"
                          data-bs-toggle="tooltip"
                          title="ti-slice"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-shortcode"
                          data-bs-toggle="tooltip"
                          title="ti-shortcode"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-receipt"
                          data-bs-toggle="tooltip"
                          title="ti-receipt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pin2"
                          data-bs-toggle="tooltip"
                          title="ti-pin2"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pin-alt"
                          data-bs-toggle="tooltip"
                          title="ti-pin-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-pencil-alt2"
                          data-bs-toggle="tooltip"
                          title="ti-pencil-alt2"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-eraser"
                          data-bs-toggle="tooltip"
                          title="ti-eraser"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-more"
                          data-bs-toggle="tooltip"
                          title="ti-more"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-more-alt"
                          data-bs-toggle="tooltip"
                          title="ti-more-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-microphone-alt"
                          data-bs-toggle="tooltip"
                          title="ti-microphone-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-magnet"
                          data-bs-toggle="tooltip"
                          title="ti-magnet"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-line-double"
                          data-bs-toggle="tooltip"
                          title="ti-line-double"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-line-dotted"
                          data-bs-toggle="tooltip"
                          title="ti-line-dotted"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-line-dashed"
                          data-bs-toggle="tooltip"
                          title="ti-line-dashed"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-ink-pen"
                          data-bs-toggle="tooltip"
                          title="ti-ink-pen"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-info-alt"
                          data-bs-toggle="tooltip"
                          title="ti-info-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-help-alt"
                          data-bs-toggle="tooltip"
                          title="ti-help-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-headphone-alt"
                          data-bs-toggle="tooltip"
                          title="ti-headphone-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-gallery"
                          data-bs-toggle="tooltip"
                          title="ti-gallery"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-face-smile"
                          data-bs-toggle="tooltip"
                          title="ti-face-smile"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-face-sad"
                          data-bs-toggle="tooltip"
                          title="ti-face-sad"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-credit-card"
                          data-bs-toggle="tooltip"
                          title="ti-credit-card"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-comments-smiley"
                          data-bs-toggle="tooltip"
                          title="ti-comments-smiley"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-time"
                          data-bs-toggle="tooltip"
                          title="ti-time"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-share"
                          data-bs-toggle="tooltip"
                          title="ti-share"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-share-alt"
                          data-bs-toggle="tooltip"
                          title="ti-share-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-rocket"
                          data-bs-toggle="tooltip"
                          title="ti-rocket"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-new-window"
                          data-bs-toggle="tooltip"
                          title="ti-new-window"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-rss"
                          data-bs-toggle="tooltip"
                          title="ti-rss"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="ti-rss-alt"
                          data-bs-toggle="tooltip"
                          title="ti-rss-alt"
                        ></i>
                      </li>
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