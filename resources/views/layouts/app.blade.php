<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/invoika/layouts/transaction-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 12:29:46 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Transaction List | Invoika - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Sweet Alert css-->
    <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="21">
                        </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="21">
                        </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block me-2">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                            <span class="las la-search search-widget-icon"></span>
                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                            <div data-simplebar style="max-height: 320px;">
                                <!-- item-->
                                <div class="dropdown-header">
                                    <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                </div>

                                <div class="dropdown-item bg-transparent text-wrap">
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                    <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                </div>
                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Analytics Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                    <span>Help Center</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                    <span>My account settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header mt-2">
                                    <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/users/avatar-2.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Angela Bernier</h6>
                                                <span class="fs-11 mb-0 text-muted">Manager</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/users/avatar-3.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">David Grasso</h6>
                                                <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- item -->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/users/avatar-5.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="m-0">Mike Bunch</h6>
                                                <span class="fs-11 mb-0 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="text-center pt-3 pb-1">
                                <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="d-flex align-items-center">



                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-primary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-search fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown ms-1 topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-primary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img id="header-lang-img" src="{{asset('assets/images/flags/us.svg')}}" alt="Header Language" height="20" class="rounded">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                <img src="{{asset('assets/images/flags/us.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                <img src="{{asset('assets/images/flags/spain.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">Española</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                <img src="{{asset('assets/images/flags/germany.svg')}}" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                <img src="{{asset('assets/images/flags/italy.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">Italiana</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                <img src="{{asset('assets/images/flags/russia.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">русский</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                <img src="{{asset('assets/images/flags/china.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">中国人</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                <img src="{{asset('assets/images/flags/french.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">français</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                                <img src="{{asset('assets/images/flags/ae.svg')}}" alt="user-image" class="me-2 rounded" height="18">
                                <span class="align-middle">Arabic</span>
                            </a>
                        </div>
                    </div>

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-primary rounded-circle" data-toggle="fullscreen">
                            <i class='las la-expand fs-24'></i>
                        </button>
                    </div>

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-primary rounded-circle light-dark-mode">
                            <i class='las la-moon fs-24'></i>
                        </button>
                    </div>

                    <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-primary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class='las la-bell fs-24'></i>
                            <span class="position-absolute topbar-badge fs-9 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                            <div class="dropdown-head rounded-top">
                                <div class="p-3 bg-primary bg-pattern">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                        </div>
                                        <div class="col-auto dropdown-tabs">
                                            <span class="badge bg-light-subtle text-light  fs-13"> 4 New</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-2">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-info-subtle text-info   text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 fs-14 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                            Optimization <span class="text-secondary">reward</span> is
                                                            ready!
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                        <label class="form-check-label" for="all-notification-check01"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/images/users/avatar-2.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-14 fw-semibold">Angela Bernier</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                            graph 🔔.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                        <label class="form-check-label" for="all-notification-check02"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-danger-subtle text-danger  text-danger rounded-circle fs-16">
                                                    <i class='bx bx-message-square-dots'></i>
                                                </span>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                        <label class="form-check-label" for="all-notification-check03"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">
                                                <img src="{{asset('assets/images/users/avatar-8.jpg')}}" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-14 fw-semibold">Maureen Gibson</h6>
                                                    </a>
                                                    <div class="fs-13 text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-15">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                        <label class="form-check-label" for="all-notification-check04"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="my-3 text-center view-all">
                                            <button type="button" class="btn btn-soft-success btn-sm waves-effect waves-light">View
                                                All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="dropdown header-item">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block fw-medium user-name-text fs-16">Calvin D. <i class="las la-angle-down fs-12 ms-1"></i></span>
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="bx bx-user fs-15 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-wallet fs-15 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench fs-15 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                            <a class="dropdown-item" href="auth-lockscreen.html"><i class="bx bx-lock-open fs-15 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off fs-15 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- removeNotificationModal -->
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="21">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="21">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="index.html">
                            <i class="las la-house-damage"></i> <span data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarInvoiceManagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoiceManagement">
                            <i class="las la-file-invoice"></i> <span data-key="t-invoices">Invoices Management</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarInvoiceManagement">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="invoice.html" class="nav-link" data-key="t-invoice"> Invoice </a>
                                </li>

                                <li class="nav-item">
                                    <a href="invoice-add.html" class="nav-link" data-key="t-add-invoice"> Add Invoice </a>
                                </li>


                                <li class="nav-item">
                                    <a href="invoice-details.html" class="nav-link" data-key="t-invoice-details"> Invoice Details </a>
                                </li>

                                <li class="nav-item">
                                    <a href="payments.html" class="nav-link" data-key="t-payments">Payments</a>
                                </li>

                                <li class="nav-item">
                                    <a href="taxes.html" class="nav-link" data-key="t-taxes">Taxes</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts"
                                       data-key="t-products">Products
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarProducts">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="product-list.html" class="nav-link" data-key="t-product-list"> Product List </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-add.html" class="nav-link" data-key="t-add-product"> Add Product </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#sidebarReport" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarReport"
                                       data-key="t-report">Report
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarReport">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="payment-summary.html" class="nav-link" data-key="t-payment-summary"> Payment Summary </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sale-report.html" class="nav-link" data-key="t-sale-report"> Sale Report </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="expenses-report.html" class="nav-link" data-key="t-expenses-report"> Expenses Report </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="user.html" class="nav-link" data-key="t-users">Users</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#sidebarTransaction" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTransaction"
                                       data-key="t-transaction">Transaction
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTransaction">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="transaction-list.html" class="nav-link" data-key="t-transaction-list"> Transaction List </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="transaction-new.html" class="nav-link" data-key="t-new-transaction"> New Transaction </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="las la-cog"></i> <span data-key="t-authentication">Authentication</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuthentication">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="auth-signin.html" class="nav-link" data-key="t-signin">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a href="auth-signup.html" class="nav-link" data-key="t-signup">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a href="auth-pass-reset.html" class="nav-link" data-key="t-password-reset">Password Reset</a>
                                </li>
                                <li class="nav-item">
                                    <a href="auth-lockscreen.html" class="nav-link" data-key="t-lock-screen">Lock Screen</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                            <i class="las la-pen-nib"></i> <span data-key="t-bootstrap-ui">Bootstrap UI</span>
                        </a>
                        <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion & Collapse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-modals.html" class="nav-link" data-key="t-modals">modals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                            <i class="las la-share-alt"></i> <span data-key="t-advance-ui">Advance UI</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                                </li>
                                <li class="nav-item">
                                    <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                            <i class="lab la-wpforms"></i> <span data-key="t-forms">Forms</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarForms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-select.html" class="nav-link" data-key="t-form-select"> Form Select </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-pickers.html" class="nav-link" data-key="t-pickers"> Pickers </a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider">Range Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms-tom-select.html" class="nav-link" data-key="t-tom-select">Tom Select</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                            <i class="las la-table"></i> <span data-key="t-tables">Tables</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarTables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                            <i class="las la-chart-pie"></i> <span data-key="t-apexchart">Apexcharts</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarCharts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="charts-apex-line.html" class="nav-link" data-key="t-line"> Line
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-area.html" class="nav-link" data-key="t-area"> Area
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-column.html" class="nav-link" data-key="t-column"> Column </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar"> Bar </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick"> Candlstick </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot"> Boxplot </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">
                                        Bubble </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">
                                        Scatter </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">
                                        Heatmap </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">
                                        Treemap </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie"> Pie </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar"> Radialbar </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">
                                        Polar Area </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                            <i class="las la-gift"></i> <span data-key="t-icons">Icons</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarIcons">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-bootstrap.html" class="nav-link" data-key="t-bootstrap">Bootstrap</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line Awesome</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                            <i class="las la-map-marked"></i> <span data-key="t-maps">Maps</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMaps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="maps-google.html" class="nav-link" data-key="t-google">
                                        Google
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                        Vector
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                        Leaflet
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                            <i class="las la-share-square"></i> <span data-key="t-multi-level">Multi Level</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMultilevel">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                        1.2
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarAccount">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarCrm">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <div class="help-box text-center">
                        <img src="{{asset('assets/images/create-invoice.png')}}" class="img-fluid" alt="">
                        <p class="mb-3 mt-2 text-muted">Upgrade To Pro For More Features</p>
                        <div class="mt-3">
                            <a href="invoice-add.html" class="btn btn-primary"> Create Invoice</a>
                        </div>
                    </div>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('content')

    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>


<!-- Theme Settings -->

<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Sweet Alert -->
<script src="{{asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{asset('assets/js/pages/sweetalerts.init.js')}}"></script>
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
@include('scripts.ajax')
</body>


<!-- Mirrored from themesbrand.com/invoika/layouts/transaction-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 12:29:46 GMT -->
</html>
