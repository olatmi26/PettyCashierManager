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

    <!-- Simpleline CSS -->
    <link
      rel="stylesheet"
      href="assets/plugins/simpleline/simple-line-icons.css"
    />

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
                  <li>
                    <a class="active" href="icon-simpleline.html"
                      >Simpleline Icons</a
                    >
                  </li>
                  <li><a href="icon-themify.html">Themify Icons</a></li>
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
              <h5>Simpleline Icon</h5>
            </div>
          </div>
          <!-- /Page Header -->

          <div class="row">
            <!-- Chart -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Simpleline Icons</div>
                </div>
                <div class="card-body">
                  <div class="icons-items">
                    <ul class="icons-list">
                      <li>
                        <i
                          class="si si-user"
                          data-bs-toggle="tooltip"
                          title="si-user"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-people"
                          data-bs-toggle="tooltip"
                          title="si-people"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-user-female"
                          data-bs-toggle="tooltip"
                          title="si-user-female"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-user-follow"
                          data-bs-toggle="tooltip"
                          title="si-user-follow"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-user-following"
                          data-bs-toggle="tooltip"
                          title="si-user-following"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-user-unfollow"
                          data-bs-toggle="tooltip"
                          title="si-user-unfollow"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-login"
                          data-bs-toggle="tooltip"
                          title="si-login"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-logout"
                          data-bs-toggle="tooltip"
                          title="si-logout"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-emotsmile"
                          data-bs-toggle="tooltip"
                          title="si-emotsmile"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-phone"
                          data-bs-toggle="tooltip"
                          title="si-phone"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-call-end"
                          data-bs-toggle="tooltip"
                          title="si-call-end"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-call-in"
                          data-bs-toggle="tooltip"
                          title="si-call-in"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-call-out"
                          data-bs-toggle="tooltip"
                          title="si-call-out"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-map"
                          data-bs-toggle="tooltip"
                          title="si-map"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-location-pin"
                          data-bs-toggle="tooltip"
                          title="si-location-pin"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-direction"
                          data-bs-toggle="tooltip"
                          title="si-direction"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-directions"
                          data-bs-toggle="tooltip"
                          title="si-directions"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-compass"
                          data-bs-toggle="tooltip"
                          title="si-compass"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-layers"
                          data-bs-toggle="tooltip"
                          title="si-layers"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-menu"
                          data-bs-toggle="tooltip"
                          title="si-menu"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-list"
                          data-bs-toggle="tooltip"
                          title="si-list"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-options-vertical"
                          data-bs-toggle="tooltip"
                          title="si-options-vertical"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-options"
                          data-bs-toggle="tooltip"
                          title="si-options"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-down"
                          data-bs-toggle="tooltip"
                          title="si-arrow-down"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-left"
                          data-bs-toggle="tooltip"
                          title="si-arrow-left"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-right"
                          data-bs-toggle="tooltip"
                          title="si-arrow-right"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-up"
                          data-bs-toggle="tooltip"
                          title="si-arrow-up"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-up-circle"
                          data-bs-toggle="tooltip"
                          title="si-arrow-up-circle"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-left-circle"
                          data-bs-toggle="tooltip"
                          title="si-arrow-left-circle"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-right-circle"
                          data-bs-toggle="tooltip"
                          title="si-arrow-right-circle"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-arrow-down-circle"
                          data-bs-toggle="tooltip"
                          title="si-arrow-down-circle"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-check"
                          data-bs-toggle="tooltip"
                          title="si-check"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-clock"
                          data-bs-toggle="tooltip"
                          title="si-clock"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-plus"
                          data-bs-toggle="tooltip"
                          title="si-plus"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-minus"
                          data-bs-toggle="tooltip"
                          title="si-minus"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-close"
                          data-bs-toggle="tooltip"
                          title="si-close"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-event"
                          data-bs-toggle="tooltip"
                          title="si-event"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-exclamation"
                          data-bs-toggle="tooltip"
                          title="si-exclamation"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-organization"
                          data-bs-toggle="tooltip"
                          title="si-organization"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-trophy"
                          data-bs-toggle="tooltip"
                          title="si-trophy"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-screen-smartphone"
                          data-bs-toggle="tooltip"
                          title="si-screen-smartphone"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-screen-desktop"
                          data-bs-toggle="tooltip"
                          title="si-screen-desktop"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-plane"
                          data-bs-toggle="tooltip"
                          title="si-plane"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-notebook"
                          data-bs-toggle="tooltip"
                          title="si-notebook"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-mustache"
                          data-bs-toggle="tooltip"
                          title="si-mustache"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-mouse"
                          data-bs-toggle="tooltip"
                          title="si-mouse"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-magnet"
                          data-bs-toggle="tooltip"
                          title="si-magnet"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-energy"
                          data-bs-toggle="tooltip"
                          title="si-energy"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-disc"
                          data-bs-toggle="tooltip"
                          title="si-disc"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-cursor"
                          data-bs-toggle="tooltip"
                          title="si-cursor"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-cursor-move"
                          data-bs-toggle="tooltip"
                          title="si-cursor-move"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-crop"
                          data-bs-toggle="tooltip"
                          title="si-crop"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-chemistry"
                          data-bs-toggle="tooltip"
                          title="si-chemistry"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-speedometer"
                          data-bs-toggle="tooltip"
                          title="si-speedometer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-shield"
                          data-bs-toggle="tooltip"
                          title="si-shield"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-screen-tablet"
                          data-bs-toggle="tooltip"
                          title="si-screen-tablet"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-magic-wand"
                          data-bs-toggle="tooltip"
                          title="si-magic-wand"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-hourglass"
                          data-bs-toggle="tooltip"
                          title="si-hourglass"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-graduation"
                          data-bs-toggle="tooltip"
                          title="si-graduation"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-ghost"
                          data-bs-toggle="tooltip"
                          title="si-ghost"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-game-controller"
                          data-bs-toggle="tooltip"
                          title="si-game-controller"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-fire"
                          data-bs-toggle="tooltip"
                          title="si-fire"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-eyeglass"
                          data-bs-toggle="tooltip"
                          title="si-eyeglass"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-envelope-open"
                          data-bs-toggle="tooltip"
                          title="si-envelope-open"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-envelope-letter"
                          data-bs-toggle="tooltip"
                          title="si-envelope-letter"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-bell"
                          data-bs-toggle="tooltip"
                          title="si-bell"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-badge"
                          data-bs-toggle="tooltip"
                          title="si-badge"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-anchor"
                          data-bs-toggle="tooltip"
                          title="si-anchor"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-wallet"
                          data-bs-toggle="tooltip"
                          title="si-wallet"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-vector"
                          data-bs-toggle="tooltip"
                          title="si-vector"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-speech"
                          data-bs-toggle="tooltip"
                          title="si-speech"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-puzzle"
                          data-bs-toggle="tooltip"
                          title="si-puzzle"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-printer"
                          data-bs-toggle="tooltip"
                          title="si-printer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-present"
                          data-bs-toggle="tooltip"
                          title="si-present"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-playlist"
                          data-bs-toggle="tooltip"
                          title="si-playlist"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-pin"
                          data-bs-toggle="tooltip"
                          title="si-pin"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-picture"
                          data-bs-toggle="tooltip"
                          title="si-picture"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-handbag"
                          data-bs-toggle="tooltip"
                          title="si-handbag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-globe-alt"
                          data-bs-toggle="tooltip"
                          title="si-globe-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-globe"
                          data-bs-toggle="tooltip"
                          title="si-globe"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-folder-alt"
                          data-bs-toggle="tooltip"
                          title="si-folder-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-folder"
                          data-bs-toggle="tooltip"
                          title="si-folder"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-film"
                          data-bs-toggle="tooltip"
                          title="si-film"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-feed"
                          data-bs-toggle="tooltip"
                          title="si-feed"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-drop"
                          data-bs-toggle="tooltip"
                          title="si-drop"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-drawer"
                          data-bs-toggle="tooltip"
                          title="si-drawer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-docs"
                          data-bs-toggle="tooltip"
                          title="si-docs"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-doc"
                          data-bs-toggle="tooltip"
                          title="si-doc"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-diamond"
                          data-bs-toggle="tooltip"
                          title="si-diamond"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-cup"
                          data-bs-toggle="tooltip"
                          title="si-cup"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-calculator"
                          data-bs-toggle="tooltip"
                          title="si-calculator"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-bubbles"
                          data-bs-toggle="tooltip"
                          title="si-bubbles"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-briefcase"
                          data-bs-toggle="tooltip"
                          title="si-briefcase"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-book-open"
                          data-bs-toggle="tooltip"
                          title="si-book-open"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-basket-loaded"
                          data-bs-toggle="tooltip"
                          title="si-basket-loaded"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-basket"
                          data-bs-toggle="tooltip"
                          title="si-basket"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-bag"
                          data-bs-toggle="tooltip"
                          title="si-bag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-action-undo"
                          data-bs-toggle="tooltip"
                          title="si-action-undo"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-action-redo"
                          data-bs-toggle="tooltip"
                          title="si-action-redo"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-wrench"
                          data-bs-toggle="tooltip"
                          title="si-wrench"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-umbrella"
                          data-bs-toggle="tooltip"
                          title="si-umbrella"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-trash"
                          data-bs-toggle="tooltip"
                          title="si-trash"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-tag"
                          data-bs-toggle="tooltip"
                          title="si-tag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-support"
                          data-bs-toggle="tooltip"
                          title="si-support"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-frame"
                          data-bs-toggle="tooltip"
                          title="si-frame"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-size-fullscreen"
                          data-bs-toggle="tooltip"
                          title="si-size-fullscreen"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-size-actual"
                          data-bs-toggle="tooltip"
                          title="si-size-actual"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-shuffle"
                          data-bs-toggle="tooltip"
                          title="si-shuffle"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-share-alt"
                          data-bs-toggle="tooltip"
                          title="si-share-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-share"
                          data-bs-toggle="tooltip"
                          title="si-share"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-rocket"
                          data-bs-toggle="tooltip"
                          title="si-rocket"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-question"
                          data-bs-toggle="tooltip"
                          title="si-question"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-pie-chart"
                          data-bs-toggle="tooltip"
                          title="si-pie-chart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-pencil"
                          data-bs-toggle="tooltip"
                          title="si-pencil"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-note"
                          data-bs-toggle="tooltip"
                          title="si-note"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-loop"
                          data-bs-toggle="tooltip"
                          title="si-loop"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-home"
                          data-bs-toggle="tooltip"
                          title="si-home"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-grid"
                          data-bs-toggle="tooltip"
                          title="si-grid"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-graph"
                          data-bs-toggle="tooltip"
                          title="si-graph"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-microphone"
                          data-bs-toggle="tooltip"
                          title="si-microphone"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-music-tone-alt"
                          data-bs-toggle="tooltip"
                          title="si-music-tone-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-music-tone"
                          data-bs-toggle="tooltip"
                          title="si-music-tone"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-earphones-alt"
                          data-bs-toggle="tooltip"
                          title="si-earphones-alt"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-earphones"
                          data-bs-toggle="tooltip"
                          title="si-earphones"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-equalizer"
                          data-bs-toggle="tooltip"
                          title="si-equalizer"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-like"
                          data-bs-toggle="tooltip"
                          title="si-like"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-dislike"
                          data-bs-toggle="tooltip"
                          title="si-dislike"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-control-start"
                          data-bs-toggle="tooltip"
                          title="si-control-start"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-control-rewind"
                          data-bs-toggle="tooltip"
                          title="si-control-rewind"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-control-play"
                          data-bs-toggle="tooltip"
                          title="si-control-play"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-control-pause"
                          data-bs-toggle="tooltip"
                          title="si-control-pause"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-control-forward"
                          data-bs-toggle="tooltip"
                          title="si-control-forward"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-control-end"
                          data-bs-toggle="tooltip"
                          title="si-control-end"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-volume-1"
                          data-bs-toggle="tooltip"
                          title="si-volume-1"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-volume-2"
                          data-bs-toggle="tooltip"
                          title="si-volume-2"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-volume-off"
                          data-bs-toggle="tooltip"
                          title="si-volume-off"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-calendar"
                          data-bs-toggle="tooltip"
                          title="si-calendar"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-bulb"
                          data-bs-toggle="tooltip"
                          title="si-bulb"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-chart"
                          data-bs-toggle="tooltip"
                          title="si-chart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-ban"
                          data-bs-toggle="tooltip"
                          title="si-ban"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-bubble"
                          data-bs-toggle="tooltip"
                          title="si-bubble"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-camrecorder"
                          data-bs-toggle="tooltip"
                          title="si-camrecorder"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-camera"
                          data-bs-toggle="tooltip"
                          title="si-camera"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-cloud-download"
                          data-bs-toggle="tooltip"
                          title="si-cloud-download"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-cloud-upload"
                          data-bs-toggle="tooltip"
                          title="si-cloud-upload"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-envelope"
                          data-bs-toggle="tooltip"
                          title="si-envelope"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-eye"
                          data-bs-toggle="tooltip"
                          title="si-eye"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-flag"
                          data-bs-toggle="tooltip"
                          title="si-flag"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-heart"
                          data-bs-toggle="tooltip"
                          title="si-heart"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-info"
                          data-bs-toggle="tooltip"
                          title="si-info"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-key"
                          data-bs-toggle="tooltip"
                          title="si-key"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-link"
                          data-bs-toggle="tooltip"
                          title="si-link"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-lock"
                          data-bs-toggle="tooltip"
                          title="si-lock"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-lock-open"
                          data-bs-toggle="tooltip"
                          title="si-lock-open"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-magnifier"
                          data-bs-toggle="tooltip"
                          title="si-magnifier"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-magnifier-add"
                          data-bs-toggle="tooltip"
                          title="si-magnifier-add"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-magnifier-remove"
                          data-bs-toggle="tooltip"
                          title="si-magnifier-remove"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-paper-clip"
                          data-bs-toggle="tooltip"
                          title="si-paper-clip"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-paper-plane"
                          data-bs-toggle="tooltip"
                          title="si-paper-plane"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-power"
                          data-bs-toggle="tooltip"
                          title="si-power"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-refresh"
                          data-bs-toggle="tooltip"
                          title="si-refresh"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-reload"
                          data-bs-toggle="tooltip"
                          title="si-reload"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-settings"
                          data-bs-toggle="tooltip"
                          title="si-settings"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-star"
                          data-bs-toggle="tooltip"
                          title="si-star"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-symbol-female"
                          data-bs-toggle="tooltip"
                          title="si-symbol-female"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-symbol-male"
                          data-bs-toggle="tooltip"
                          title="si-symbol-male"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-target"
                          data-bs-toggle="tooltip"
                          title="si-target"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-credit-card"
                          data-bs-toggle="tooltip"
                          title="si-credit-card"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-paypal"
                          data-bs-toggle="tooltip"
                          title="si-paypal"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-tumblr"
                          data-bs-toggle="tooltip"
                          title="si-social-tumblr"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-twitter"
                          data-bs-toggle="tooltip"
                          title="si-social-twitter"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-facebook"
                          data-bs-toggle="tooltip"
                          title="si-social-facebook"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-instagram"
                          data-bs-toggle="tooltip"
                          title="si-social-instagram"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-linkedin"
                          data-bs-toggle="tooltip"
                          title="si-social-linkedin"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-pinterest"
                          data-bs-toggle="tooltip"
                          title="si-social-pinterest"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-github"
                          data-bs-toggle="tooltip"
                          title="si-social-github"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-google"
                          data-bs-toggle="tooltip"
                          title="si-social-google"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-reddit"
                          data-bs-toggle="tooltip"
                          title="si-social-reddit"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-skype"
                          data-bs-toggle="tooltip"
                          title="si-social-skype"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-dribbble"
                          data-bs-toggle="tooltip"
                          title="si-social-dribbble"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-behance"
                          data-bs-toggle="tooltip"
                          title="si-social-behance"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-foursqare"
                          data-bs-toggle="tooltip"
                          title="si-social-foursqare"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-soundcloud"
                          data-bs-toggle="tooltip"
                          title="si-social-soundcloud"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-spotify"
                          data-bs-toggle="tooltip"
                          title="si-social-spotify"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-stumbleupon"
                          data-bs-toggle="tooltip"
                          title="si-social-stumbleupon"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-youtube"
                          data-bs-toggle="tooltip"
                          title="si-social-youtube"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-dropbox"
                          data-bs-toggle="tooltip"
                          title="si-social-dropbox"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-vkontakte"
                          data-bs-toggle="tooltip"
                          title="si-social-vkontakte"
                        ></i>
                      </li>
                      <li>
                        <i
                          class="si si-social-steam"
                          data-bs-toggle="tooltip"
                          title="si-social-steam"
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
