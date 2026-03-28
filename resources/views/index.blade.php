<!DOCTYPE html>
<html lang="en">

<head>
  <!-- begin::Meta Basic -->
  <meta charset="utf-8">
  <meta name="theme-color" content="#316AFF">
  <meta name="robots" content="index, follow">
  <meta name="author" content="LayoutDrop">
  <meta name="format-detection" content="telephone=no">
  <meta name="keywords" content="HR Management, HR Dashboard, Admin Template, Admin Dashboard, Bootstrap Admin, HR Admin Panel, Employee Management, Human Resources Dashboard, Responsive Admin Template, Web App Dashboard, HRMS Admin, Staff Management Dashboard, Bootstrap 5 Admin, Modern Admin Template, Admin UI Kit, ThemeForest Admin Template, SaaS Dashboard, Project Management Admin, HR Web Application, RTL Dashboard">
  <meta name="description" content="GXON is a professional and modern HR Management Admin Dashboard Template built with Bootstrap. It includes light and dark modes, and is ideal for managing employees, attendance, payroll, recruitment, and more — perfect for HR software and admin panels.">
  <!-- end::Meta Basic -->

  <!-- begin::Meta Social -->
  <meta property="og:url" content="https://gxon.layoutdrop.com/demo/">
  <meta property="og:site_name" content="GXON HR Management Admin Dashboard Template + RTL">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="GXON HR Management Admin Dashboard Template + RTL">
  <meta property="og:description" content="GXON is a professional and modern HR Management Admin Dashboard Template built with Bootstrap. It includes light and dark modes, and is ideal for managing employees, attendance, payroll, recruitment, and more — perfect for HR software and admin panels.">
  <meta property="og:image" content="https://gxon.layoutdrop.com/demo/preview.png">
  <!-- end::Meta Social -->

  <!-- begin::Meta Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="https://gxon.layoutdrop.com/demo/">
  <meta name="twitter:creator" content="@layoutdrop">
  <meta name="twitter:title" content="GXON HR Management Admin Dashboard Template + RTL">
  <meta name="twitter:description" content="GXON is a professional and modern HR Management Admin Dashboard Template built with Bootstrap. It includes light and dark modes, and is ideal for managing employees, attendance, payroll, recruitment, and more — perfect for HR software and admin panels.">
  <!-- end::Meta Twitter -->

  <!-- begin::Page Title -->
  <title>GXON HR Management Admin Dashboard Template + RTL</title>
  <!-- end::Page Title -->

  <!-- begin::Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end::Mobile Specific -->

  <!-- begin::Favicon -->
  <link rel="icon" type="image/png" href="{{ URL::asset('assets/images/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/images/apple-touch-icon.png') }}">
  <!-- end::Favicon -->

  <!-- begin::Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <!-- end::Google Fonts -->

  <!-- begin::Required Stylesheets -->
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/flaticon/css/all/all.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/lucide/lucide.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/simplebar/simplebar.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/node-waves/waves.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}">
  <!-- end::Required Stylesheets -->

  <!-- begin::Custom CSS -->
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
  <!-- end::Custom CSS -->
</head>

<body>
  <div class="page-layout">

    <!-- begin::GXON Page Header -->
    <header class="app-header">
      <div class="app-header-inner">
        <button class="app-toggler" type="button" aria-label="app toggler">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="app-header-start d-none d-md-flex">
          <form class="d-flex align-items-center h-100 w-lg-250px w-xxl-300px position-relative" action="#">
            <button type="button" class="btn btn-sm border-0 position-absolute start-0 ms-3 p-0">
              <i class="fi fi-rr-search"></i>
            </button>
            <input type="text" class="form-control rounded-5 ps-5" placeholder="Search anything's" data-bs-toggle="modal" data-bs-target="#searchResultsModal">
          </form>
        </div>
        <div class="app-header-end">
          <div class="px-lg-3 px-2 ps-0 d-flex align-items-center">
            <div class="dropdown">
              <button class="btn btn-icon btn-action-gray rounded-circle waves-effect waves-light position-relative" id="ld-theme" type="button" data-bs-auto-close="outside" aria-expanded="false" data-bs-toggle="dropdown">
                <i class="fi fi-rr-brightness scale-1x theme-icon-active"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button type="button" class="dropdown-item d-flex gap-2 align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <i class="fi fi-rr-brightness scale-1x" data-theme="light"></i> Light
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex gap-2 align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <i class="fi fi-rr-moon scale-1x" data-theme="dark"></i> Dark
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex gap-2 align-items-center" data-bs-theme-value="auto" aria-pressed="true">
                    <i class="fi fi-br-circle-half-stroke scale-1x" data-theme="auto"></i> Auto
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <div class="vr my-3"></div>
          <div class="dropdown text-end ms-sm-3 ms-2 ms-lg-4">
            <a href="#" class="d-flex align-items-center py-2" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">
              <div class="text-end me-2 d-none d-lg-inline-block">
                <div class="fw-bold text-dark">Robert Brown</div>
                <small class="text-body d-block lh-sm">
                  <i class="fi fi-rr-angle-down text-3xs me-1"></i> Manager
                </small>
              </div>
              <div class="avatar avatar-sm rounded-circle avatar-status-success">
                <img src="assets/images/avatar/avatar1.webp" alt="">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end w-225px mt-1">
              <li class="d-flex align-items-center p-2">
                <div class="avatar avatar-sm rounded-circle">
                  <img src="assets/images/avatar/avatar1.webp" alt="">
                </div>
                <div class="ms-2">
                  <div class="fw-bold text-dark">Robert Brown </div>
                  <small class="text-body d-block lh-sm">robert@gmail.com</small>
                </div>
              </li>
              <li>
                <div class="dropdown-divider my-1"></div>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="profile.html">
                  <i class="fi fi-rr-user scale-1x"></i> View Profile
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="task-management.html">
                  <i class="fi fi-rr-note scale-1x"></i> My Task
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="pages/faq.html">
                  <i class="fi fi-rs-interrogation scale-1x"></i> Help Center
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="settings.html">
                  <i class="fi fi-rr-settings scale-1x"></i> Account Settings
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="pages/pricing.html">
                  <i class="fi fi-rr-usd-circle scale-1x"></i> Upgrade Plan
                </a>
              </li>
              <li>
                <div class="dropdown-divider my-1"></div>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center gap-2 text-danger" href="authentication/login-basic.html">
                  <i class="fi fi-sr-exit scale-1x"></i> Log Out
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- end::GXON Page Header -->

    <div class="modal fade" id="searchResultsModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header py-1 px-3">
            <form class="d-flex align-items-center position-relative w-100" action="#">
              <button type="button" class="btn btn-sm border-0 position-absolute start-0 p-0 text-sm ">
                <i class="fi fi-rr-search"></i>
              </button>
              <input type="text" class="form-control form-control-lg ps-4 border-0 shadow-none" id="searchInput" placeholder="Search anything's">
            </form>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-2" style="height: 300px;" data-simplebar>
            <div id="recentlyResults">
              <span class="text-uppercase text-2xs fw-semibold text-muted d-block mb-2">Recently Searched:</span>
              <ul class="list-inline search-list">
                <li>
                  <a class="search-item" href="index.html">
                    <i class="fi fi-rr-apps"></i> Dashboard
                  </a>
                </li>
                <li>
                  <a class="search-item" href="chat.html">
                    <i class="fi fi-rr-comment"></i> Chat
                  </a>
                </li>
                <li>
                  <a class="search-item" href="calendar.html">
                    <i class="fi fi-rr-calendar"></i> Calendar
                  </a>
                </li>
                <li>
                  <a class="search-item" href="chart/apexchart.html">
                    <i class="fi fi-rr-chart-pie-alt"></i> Apexchart
                  </a>
                </li>
                <li>
                  <a class="search-item" href="pages/pricing.html">
                    <i class="fi fi-rr-file"></i> Pricing
                  </a>
                </li>
                <li>
                  <a class="search-item" href="email/inbox.html">
                    <i class="fi fi-rr-envelope"></i> Email
                  </a>
                </li>
              </ul>
            </div>
            <div id="searchContainer"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- begin::GXON Sidebar Menu -->
    <aside class="app-menubar" id="appMenubar">
      <div class="app-navbar-brand">
        <a class="navbar-brand-logo" href="index.html">
          <img src="assets/images/logo.svg" alt="GXON Admin Dashboard Logo">
        </a>
        <a class="navbar-brand-mini visible-light" href="index.html">
          <img src="assets/images/logo-text.svg" alt="GXON Admin Dashboard Logo">
        </a>
        <a class="navbar-brand-mini visible-dark" href="index.html">
          <img src="assets/images/logo-text-white.svg" alt="GXON Admin Dashboard Logo">
        </a>
      </div>
      <nav class="app-navbar" data-simplebar>
        <ul class="menubar">
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-apps"></i>
              <span class="menu-label">Dashboard</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="index.html">
                  <span class="menu-label">Dashboard</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="index-rtl.html">
                  <span class="menu-label">Dashboard RTL</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="ecommerce/ecommerce.html">
                  <span class="menu-label">E-Commerce</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="employee.html">
                  <span class="menu-label">Employee</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="attendance.html">
                  <span class="menu-label">Attendance</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="leave.html">
                  <span class="menu-label">Leave</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="payroll.html">
                  <span class="menu-label">Payroll</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="recruitment.html">
                  <span class="menu-label">Recruitment</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="task-management.html">
                  <span class="menu-label">Task Management</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="analytics.html">
                  <span class="menu-label">Analytics</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-heading">
            <span class="menu-label">Apps & Pages</span>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="chat.html">
              <i class="fi fi-rr-comment"></i>
              <span class="menu-label">Chat</span>
            </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="calendar.html">
              <i class="fi fi-rr-calendar"></i>
              <span class="menu-label">Calendar</span>
            </a>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-envelope"></i>
              <span class="menu-label">Email</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="email/inbox.html">
                  <span class="menu-label">Inbox</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="email/compose.html">
                  <span class="menu-label">Compose</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="email/read-email.html">
                  <span class="menu-label">Read email</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-file"></i>
              <span class="menu-label">Pages</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="pages/pricing.html">
                  <span class="menu-label">Pricing</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="pages/faq.html">
                  <span class="menu-label">FAQ's</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="pages/coming-soon.html">
                  <span class="menu-label">Coming Soon</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="profile.html">
                  <span class="menu-label">Profile</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="roles-permissions.html">
                  <span class="menu-label">Roles Permissions</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="settings.html">
                  <span class="menu-label">Settings</span>
                </a>
              </li>
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Blog</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="pages/blog.html">
                      <span class="menu-label">Blog Grid</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="pages/blog-list.html">
                      <span class="menu-label">Blog List</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="pages/blog-details.html">
                      <span class="menu-label">Blog Details</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Error</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="pages/error-404.html">
                      <span class="menu-label">Basic</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="pages/error-404-cover.html">
                      <span class="menu-label">Cover</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="pages/error-404-full.html">
                      <span class="menu-label">Full</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Under Construction</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="pages/under-construction.html">
                      <span class="menu-label">Basic</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="pages/under-construction-cover.html">
                      <span class="menu-label">Cover</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="pages/under-construction-full.html">
                      <span class="menu-label">Full</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-user-key"></i>
              <span class="menu-label">Authentication</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Login</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/login-basic.html">
                      <span class="menu-label">Basic</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/login-cover.html">
                      <span class="menu-label">Cover</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/login-frame.html">
                      <span class="menu-label">Frame</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Register</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/register-basic.html">
                      <span class="menu-label">Basic</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/register-cover.html">
                      <span class="menu-label">Cover</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/register-frame.html">
                      <span class="menu-label">Frame</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Forgot Password</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/forgot-password-basic.html">
                      <span class="menu-label">Basic</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/forgot-password-cover.html">
                      <span class="menu-label">Cover</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/forgot-password-frame.html">
                      <span class="menu-label">Frame</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">New Password</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/new-password-basic.html">
                      <span class="menu-label">Basic</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/new-password-cover.html">
                      <span class="menu-label">Cover</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="authentication/new-password-frame.html">
                      <span class="menu-label">Frame</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-heading">
            <span class="menu-label">Components</span>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-flux-capacitor"></i>
              <span class="menu-label">UI Components</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="components/accordion.html">
                  <span class="menu-label">Accordion</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/alerts.html">
                  <span class="menu-label">Alerts</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/badge.html">
                  <span class="menu-label">Badge</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/breadcrumb.html">
                  <span class="menu-label">Breadcrumb</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/buttons.html">
                  <span class="menu-label">Buttons</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/typography.html">
                  <span class="menu-label">Typography</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/button-group.html">
                  <span class="menu-label">Button Group</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/card.html">
                  <span class="menu-label">Card</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/collapse.html">
                  <span class="menu-label">Collapse</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/carousel.html">
                  <span class="menu-label">Carousel</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/dropdowns.html">
                  <span class="menu-label">Dropdowns</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/modal.html">
                  <span class="menu-label">Modal</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/navbar.html">
                  <span class="menu-label">Navbar</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/list-group.html">
                  <span class="menu-label">List Group</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/tabs.html">
                  <span class="menu-label">Tabs</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/offcanvas.html">
                  <span class="menu-label">Offcanvas</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/pagination.html">
                  <span class="menu-label">Pagination</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/popovers.html">
                  <span class="menu-label">Popovers</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/progress.html">
                  <span class="menu-label">Progress</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/scrollspy.html">
                  <span class="menu-label">Scrollspy</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/spinners.html">
                  <span class="menu-label">Spinners</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/toasts.html">
                  <span class="menu-label">Toasts</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="components/tooltips.html">
                  <span class="menu-label">Tooltips</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-apps-add"></i>
              <span class="menu-label">Extended UI</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="extended-ui/avatar.html">
                  <span class="menu-label">Avatar</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="extended-ui/card-action.html">
                  <span class="menu-label">Card action</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="extended-ui/drag-and-drop.html">
                  <span class="menu-label">Drag & drop</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="extended-ui/simplebar.html">
                  <span class="menu-label">Simplebar</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="extended-ui/swiper.html">
                  <span class="menu-label">Swiper</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="extended-ui/team.html">
                  <span class="menu-label">Team</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-bolt"></i>
              <span class="menu-label">Icons</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="icons/flaticon.html">
                  <span class="menu-label">Flaticon</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="icons/lucide.html">
                  <span class="menu-label">Lucide</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="icons/fontawesome.html">
                  <span class="menu-label">Font Awesome</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-heading">
            <span class="menu-label">Forms & Tables</span>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-form"></i>
              <span class="menu-label">Form Elements</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="forms/form-elements.html">
                  <span class="menu-label">Form Elements</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="forms/form-floating.html">
                  <span class="menu-label">Form Floating</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="forms/form-input-group.html">
                  <span class="menu-label">Form Input Group</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="forms/form-layout.html">
                  <span class="menu-label">Form Layout</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="forms/form-validation.html">
                  <span class="menu-label">Form Validation</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="forms/flatpickr.html">
                  <span class="menu-label">Flatpickr</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="forms/tagify.html">
                  <span class="menu-label">Tagify</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-table-layout"></i>
              <span class="menu-label">Table</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="table/tables-basic.html">
                  <span class="menu-label">Table</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="table/tables-datatable.html">
                  <span class="menu-label">Datatable</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-heading">
            <span class="menu-label">Charts & Maps</span>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-chart-pie-alt"></i>
              <span class="menu-label">Charts</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="chart/apexchart.html">
                  <span class="menu-label">Apex Chart</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="chart/chartjs.html">
                  <span class="menu-label">Chart JS</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rr-marker"></i>
              <span class="menu-label">Maps</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item">
                <a class="menu-link" href="maps/jsvectormap.html">
                  <span class="menu-label">JS Vector Map</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="maps/leaflet.html">
                  <span class="menu-label">Leaflet</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-heading">
            <span class="menu-label">Others</span>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="javascript:void(0);">
              <i class="fi fi-rs-badget-check-alt"></i>
              <span class="menu-label">Badge</span>
              <span class="badge badge-sm rounded-pill bg-secondary ms-2 float-end">5</span>
            </a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="https://gxon.layoutdrop.com/doc/changelog.html" target="_blank">
              <i class="fi fi-rr-square-terminal"></i>
              <span class="menu-label">Changelog v1.4.0</span>
            </a>
          </li>
          <li class="menu-item menu-arrow">
            <a class="menu-link" href="javascript:void(0);" role="button">
              <i class="fi fi-rs-floor-layer"></i>
              <span class="menu-label">Multi Level</span>
            </a>
            <ul class="menu-inner">
              <li class="menu-item menu-arrow">
                <a class="menu-link" href="javascript:void(0);">
                  <span class="menu-label">Multi Level 2</span>
                </a>
                <ul class="menu-inner">
                  <li class="menu-item">
                    <a class="menu-link" href="javascript:void(0);">
                      <span class="menu-label">Multi Level 3</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="javascript:void(0);">
                      <span class="menu-label">Multi Level 3</span>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="javascript:void(0);">
                      <span class="menu-label">Multi Level 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <div class="app-footer">
        <a href="pages/faq.html" class="btn btn-outline-light waves-effect btn-shadow btn-app-nav w-100">
          <i class="fi fi-rs-interrogation text-primary"></i>
          <span class="nav-text">Help and Support</span>
        </a>
      </div>
    </aside>
    <!-- end::GXON Sidebar Menu -->

    <!-- begin::GXON Sidebar right -->

    <main class="app-wrapper">

      <div class="container">

        <div class="app-page-head d-flex flex-wrap gap-3 align-items-center justify-content-between">
          <div class="clearfix">
            <h1 class="app-page-title">Dashboard</h1>
            <span>Mon, Aug 01, 2024 - Sep 01, 2024 </span>
          </div>
        </div>

        
        <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header py-3">
                <h5 class="modal-title">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="example@email.com">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control" id="phone" placeholder="+91 9876543210">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="department" class="form-label">Department</label>
                      <select class="form-select" id="department">
                        <option selected disabled>Select Department</option>
                        <option>HR</option>
                        <option>Development</option>
                        <option>Sales</option>
                        <option>Marketing</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="designation" class="form-label">Designation</label>
                      <input type="text" class="form-control" id="designation" placeholder="e.g. Software Engineer">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="joiningDate" class="form-label">Joining Date</label>
                      <input type="date" class="form-control flatpickr-date" id="joiningDate">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="status" class="form-label">Employment Status</label>
                      <select class="form-select" id="status">
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Probation</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" rows="2" placeholder="Enter address"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="photo" class="form-label">Profile Photo</label>
                    <input class="form-control" type="file" id="photo">
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-success">Add Employee</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>

    <!-- begin::GXON Footer -->
    <footer class="footer-wrapper bg-body">
      <div class="container">
        <div class="row g-2">
          <div class="col-lg-6 col-md-7 text-center text-md-start">
            <p class="mb-0">© <span class="currentYear">2025</span> GXON. Proudly powered by <a href="javascript:void(0);">LayoutDrop</a>.</p>
          </div>
          <div class="col-lg-6 col-md-5">
            <ul class="d-flex list-inline mb-0 gap-3 flex-wrap justify-content-center justify-content-md-end">
              <li>
                <a class="text-body" href="index.html">Home</a>
              </li>
              <li>
                <a class="text-body" href="pages/faq.html">Faq's</a>
              </li>
              <li>
                <a class="text-body" href="pages/faq.html">Support</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- end::GXON Footer -->

  </div>

  <!-- begin::GXON Page Scripts -->
  <script src="{{ URL::asset('assets/libs/global/global.min.js') }}"></script>
  <script src="{{ URL::asset('assets/libs/sortable/Sortable.min.js') }}"></script>
  <script src="{{ URL::asset('assets/libs/chartjs/chart.js') }}"></script>
  <script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ URL::asset('assets/js/todolist.js') }}"></script>
  <script src="{{ URL::asset('assets/js/appSettings.js') }}"></script>
  <script src="{{ URL::asset('assets/js/main.js') }}"></script>
  <!-- end::GXON Page Scripts -->
</body>

</html>