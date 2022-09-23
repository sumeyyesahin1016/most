<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat Laravel Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="dashboard, admin, dashboard template, admin template, laravel, php laravel, laravel bootstrap, laravel admin template, bootstrap laravel, bootstrap in laravel, laravel dashboard template, laravel admin, laravel dashboard, laravel blade template, php admin">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template</title>


    <!-- BOOTSTRAP CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/dark-style.css" rel="stylesheet"/>
    <link href="assets/css/skin-modes.css" rel="stylesheet"/>

    <!--C3.JS CHARTS PLUGIN -->
    <link href="assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    @yield('css')

    <!--- FONT-ICONS CSS -->
    <link href="assets/plugins/icons/icons.css" rel="stylesheet"/>

    <!-- P-scroll bar css-->
    <link href="assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

</head>

<body>

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- HEADER -->
        <div class="header hor-header">
            <div class="container">
                <div class="d-flex">
                    <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                    <div class="">
                        <a class="header-brand1" href="#">
                            <img src="assets/images/brand/logo-3.png" class="header-brand-img desktop-logo" alt="logo">

                            <img src="assets/images/brand/logo.png" class="header-brand-img light-logo" alt="logo">
                        </a><!-- LOGO -->
                    </div>
                    <div class="d-flex  ml-auto header-right-icons header-search-icon">
                        <div class="dropdown d-sm-flex">
                            <a href="#" class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-search"></i>
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-left">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control " placeholder="Search....">
                                    <div class="input-group-append ">
                                        <button type="button" class="btn btn-primary ">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- SEARCH -->
                        <div class="dropdown d-md-flex">
                            <a class="nav-link icon full-screen-link nav-link-bg">
                                <i class="fe fe-maximize fullscreen-button"></i>
                            </a>
                        </div><!-- FULL-SCREEN -->
                        <div class="dropdown d-md-flex notifications">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                                <span class="nav-unread badge badge-success badge-pill">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="notifications-menu">
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-success mr-3">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div class="">
                                            <strong>Someone likes our posts.</strong>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-primary mr-3">
                                            <i class="fa fa-commenting-o"></i>
                                        </div>
                                        <div class="">
                                            <strong>3 New Comments.</strong>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-danger mr-3">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div class="">
                                            <strong>Server Rebooted</strong>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">View all Notification</a>
                            </div>
                        </div><!-- NOTIFICATIONS -->
                        <div class="dropdown d-md-flex message">
                            <a class="nav-link icon text-center" data-toggle="dropdown">
                                <i class="fe fe-mail"></i>
                                <span class="nav-unread badge badge-danger badge-pill">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="message-menu">
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
                                        <div>
                                            <strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted">
                                                3 hours ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
                                        <div>
                                            <strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted">
                                                5 hour ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
                                        <div>
                                            <strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted">
                                                45 mintues ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex pb-3" href="#">
                                        <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
                                        <div>
                                            <strong>Sanderson</strong> New Schedule Realease......
                                            <div class="small text-muted">
                                                2 days ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center">See all Messages</a>
                            </div>
                        </div><!-- MESSAGE-BOX -->
                        <div class="dropdown profile-1">
                            <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
										<span>
											<img src="assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="drop-heading">
                                    <div class="text-center">
                                        <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                        <small class="text-muted">Administrator</small>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"></span>
                                    <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                </a>
                                <div class="dropdown-divider mt-0"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                </a>
                            </div>
                        </div>
                        <div class="dropdown d-md-flex header-settings">
                            <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="fe fe-align-right"></i>
                            </a>
                        </div><!-- SIDE-MENU -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End HEADER -->


        <!--/Horizontal-main -->
        <div class="sticky">
            <div class="horizontal-main hor-menu clearfix">
                <div class="horizontal-mainwrapper container clearfix">
                    <!--Nav-->
                    <nav class="horizontalMenu clearfix">
                        <ul class="horizontalMenu-list">
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-home"></i> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='index') }}">Sales Dashboard</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='index2') }}">Marketing Dashboard</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='index3') }}">Service Dashboard</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='index4') }}">Finance Dashboard</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='index5') }}">IT Dashboard</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="{{ url('/' . $page='widgets') }}" class=""><i class="ti-package"></i> Widgets</a></li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-panel"></i>Components <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='cards') }}"> Cards design</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='calendar') }}">Default calendar</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='calendar2') }}">Full calendar</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chat') }}">Default Chat</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='notify') }}">Notifications</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='sweetalert') }}">Sweet alerts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='rangeslider') }}">Range slider</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='scroll') }}">Content Scroll bar</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='loaders') }}">Loaders</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='counters') }}">Counters</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='rating') }}">Rating</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='timeline') }}">Timeline</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-layers"></i> Elements  <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <div class="horizontal-megamenu clearfix">
                                    <div class="container">
                                        <div class="mega-menubg">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li aria-haspopup="true"><a href=" ">Alerts</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Buttons</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Colors</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Avatar-Square</a></li>
                                                        <li aria-haspopup="true"><a href= """>Avatar-Rounded</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Avatar-Radius</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li aria-haspopup="true"><a href=" ">Pagination</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Navigation</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Typography</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Breadcrumbs</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Badges</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Jumbotron</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li><h3 class="fs-14 font-weight-bold mb-1">Tables</h3></li>
                                                        <li aria-haspopup="true"><a href=" ">Default table</a></li>
                                                        <li aria-haspopup="true"><a href=" "> Data Tables</a></li>
                                                        <li><h3 class="fs-14 font-weight-bold mb-1 mt-3">Forms</h3></li>
                                                        <li aria-haspopup="true"><a href=" ">Form Elements</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Form Editor</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Form Wizard</a></li>
                                                        <li><h3 class="fs-14 font-weight-bold mb-1 mt-3">E-Commerce</h3></li>
                                                        <li aria-haspopup="true"><a href=" ">Shop</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Product Details</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Shopping Cart</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-12 col-xs-12 link-list">
                                                    <ul>
                                                        <li><h3 class="fs-14 font-weight-bold mb-3">Authenication & Error</h3></li>
                                                        <li aria-haspopup="true"><a href=" ">Login</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Register</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Forgot Password</a></li>
                                                        <li aria-haspopup="true"><a href=" ">Lock screen </a></li>
                                                        <li aria-haspopup="true"><a href=" ">400</a></li>
                                                        <li aria-haspopup="true"><a href=" ">401</a></li>
                                                        <li aria-haspopup="true"><a href=" ">403</a></li>
                                                        <li aria-haspopup="true"><a href=" ">404</a></li>
                                                        <li aria-haspopup="true"><a href=" ">500</a></li>
                                                        <li aria-haspopup="true"><a href=" ">503</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-rocket"></i>Advanced Elements <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='accordion') }}"> Accordions</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='tabs') }}">Tabs</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chart') }}">Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='headers') }}">Headers</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='footers') }}">Footers</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='userslist') }}">User List</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='search') }}">Search</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='cryptocurrencies') }}">Crypto-currencies</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='maps') }}">Maps</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-bar-chart"></i> Charts <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartchartist') }}">Chart Js</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartflot') }}">Flot Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartechart') }}">ECharts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartmorris') }}">Morris Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartnvd3') }}">Nvd3 Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chart') }}">C3 Bar Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartline') }}">C3 Line Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartdonut') }}">C3 Donut Charts</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='chartpie') }}">C3 Pie Charts</a></li>
                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-files"></i> Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Profile</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{ url('/' . $page='profile') }}"> Profile </a></li>
                                            <li aria-haspopup="true"><a href="{{ url('/' . $page='editprofile') }}">Edit Profile</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="{{ url('/' . $page='email') }}">Mail-Inbox</a></li>
                                            <li aria-haspopup="true"><a href="{{ url('/' . $page='emailservices') }}">Mail-Compose</a></li>
                                        </ul>
                                    </li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='gallery') }}">Gallery</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='about') }}">About Company </a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='services') }}">Services </a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='faq') }}">FAQS</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='terms') }}">Terms</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='invoice') }}">Invoice</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='pricing') }}">Pricing Tables</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='blog') }}">Blog</a></li>
                                    <li aria-haspopup="true"><a href="{{ url('/' . $page='empty') }}">Empty Page</a></li>
                                    <li aria-haspopup="true" ><a href="{{ url('/' . $page='construction') }}">Under Construction</a></li>

                                    <li aria-haspopup="true" class="sub-menu-sub"><a href="#">submenu <span class="badge badge-pink side-badge"></span></a>
                                        <ul class="sub-menu">
                                            <li aria-haspopup="true"><a href="#" class="slide-item">sub-menu-1</a></li>
                                            <li aria-haspopup="true" class="sub-menu-sub"><a href="#">submenu-2 <span class="badge badge-pink side-badge"></span></a>
                                                <ul class="sub-menu">
                                                    <li aria-haspopup="true"><a href="#" class="slide-item">sub-menu-2.1</a></li>
                                                    <li aria-haspopup="true"><a href="#" class="slide-item">sub-menu-2.2</a></li>
                                                </ul>
                                            </li>
                                            <li aria-haspopup="true"><a href="#" class="slide-item">sub-menu-3</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="ti-shield"></i> Icons <i class="fa fa-angle-down horizontal-icon"></i></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href=" ">Font Awesome</a></li>
                                    <li aria-haspopup="true"><a href=" ">Material Design Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Simple Line Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Feather Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Ionic Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Flag Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">pe7 Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Themify Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Typicons Icons</a></li>
                                    <li aria-haspopup="true"><a href=" ">Weather Icons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!--Nav-->
                </div>
            </div>
        </div>
        <!--/Horizontal-main -->

        <!-- Mobile Header -->
        <div class="mobile-header hor-mobile-header">
            <div class="container">
                <div class="d-flex">
                    <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                    <a class="header-brand" href="#">
                        <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="assets/images/brand/logo-3.png" class="header-brand-img desktop-logo mobile-light" alt="logo">
                    </a>
                    <div class="d-flex order-lg-2 ml-auto header-right-icons">
                        <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                        </button>
                        <div class="dropdown profile-1">
                            <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                                        <span>
                                            <img src="assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                        </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="drop-heading">
                                    <div class="text-center">
                                        <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                        <small class="text-muted">Administrator</small>
                                    </div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"></span>
                                    <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                                </a>
                            </div>
                        </div>
                        <div class="dropdown d-md-flex header-settings">
                            <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="fe fe-align-right"></i>
                            </a>
                        </div><!-- SIDE-MENU -->
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 ml-auto">
                    <div class="dropdown d-sm-flex">
                        <a href="#" class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-search"></i>
                        </a>
                        <div class="dropdown-menu header-search dropdown-menu-left">
                            <div class="input-group w-100 p-2">
                                <input type="text" class="form-control " placeholder="Search....">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary ">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- SEARCH -->
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg">
                            <i class="fe fe-maximize fullscreen-button"></i>
                        </a>
                    </div><!-- FULL-SCREEN -->
                    <div class="dropdown d-md-flex notifications">
                        <a class="nav-link icon" data-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="notifications-menu">
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-success mr-3">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="">
                                        <strong>Someone likes our posts.</strong>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-primary mr-3">
                                        <i class="fa fa-commenting-o"></i>
                                    </div>
                                    <div class="">
                                        <strong>3 New Comments.</strong>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <div class="fs-16 text-danger mr-3">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="">
                                        <strong>Server Rebooted</strong>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">View all Notification</a>
                        </div>
                    </div><!-- NOTIFICATIONS -->
                    <div class="dropdown d-md-flex message">
                        <a class="nav-link icon text-center" data-toggle="dropdown">
                            <i class="fe fe-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="message-menu">
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/1.jpg')}}"></span>
                                    <div>
                                        <strong>Madeleine</strong> Hey! there I' am available....
                                        <div class="small text-muted">
                                            3 hours ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/12.jpg')}}"></span>
                                    <div>
                                        <strong>Anthony</strong> New product Launching...
                                        <div class="small text-muted">
                                            5 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/4.jpg')}}"></span>
                                    <div>
                                        <strong>Olivia</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            45 mintues ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex pb-3" href="#">
                                    <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{URL::asset('assets/images/users/15.jpg')}}"></span>
                                    <div>
                                        <strong>Sanderson</strong> New Schedule Realease......
                                        <div class="small text-muted">
                                            2 days ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">See all Messages</a>
                        </div>
                    </div><!-- MESSAGE-BOX -->
                </div>
            </div>
        </div>
        <!-- /Mobile Header -->


        <!--app-content open-->
        <div class="container app-content">
            <div class="">

                <div class="page-header">
                    @yield('page-header')
                    <div class="ml-auto pageheader-btn">
                        <a href="#" class="btn btn-success btn-icon text-white mr-2">
                                    <span>
                                        <i class="fe fe-plus"></i>
                                    </span> Add Account
                        </a>
                        <a href="#" class="btn btn-danger btn-icon text-white">
                                    <span>
                                        <i class="fe fe-log-in"></i>
                                    </span> Export
                        </a>
                    </div>
                </div>

                @yield('content')

                <!-- SIDE-BAR -->
                <div class="sidebar sidebar-right sidebar-animate">
                    <div class="p-4 border-bottom">
                        <span class="fs-17">Notifications</span>
                        <a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-primary brround avatar-md">CH</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>New Websites is Created</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">30 mins ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-danger brround avatar-md">N</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare For the Next Project</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">2 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-info brround avatar-md">S</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Decide the live Discussion Time</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">3 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-warning brround avatar-md">K</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Team Review meeting</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">4 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-success brround avatar-md">R</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-pink brround avatar-md">MS</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-purple brround avatar-md">L</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 day ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center border-bottom p-4">
                        <div class="">
                            <span class="avatar bg-warning brround avatar-md">L</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">1 day ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                    <div class="list d-flex align-items-center p-4">
                        <div class="">
                            <span class="avatar bg-blue brround avatar-md">U</span>
                        </div>
                        <div class="wrapper w-100 ml-3">
                            <p class="mb-0 d-flex">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-clock text-muted mr-1"></i>
                                    <small class="text-muted ml-auto">2 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- LIST END -->
                </div>


                <!-- FOOTER -->
                <footer class="footer hor-footer">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-md-12 col-sm-12 text-center">
                                Copyright © 2021 <a href="#">Volgh</a>. Designed by <a href="#"> Spruko Technologies Pvt.Ltd </a> All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- FOOTER END -->

                <!-- BACK-TO-TOP -->
                <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

                <!-- JQUERY JS -->
                <script src="assets/plugins/jquery/jquery.min.js"></script>

                <!-- BOOTSTRAP JS -->
                <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="assets/plugins/bootstrap/js/popper.min.js"></script>

                <!-- SPARKLINE JS-->
                <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

                <!-- CHART-CIRCLE JS -->
                <script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

                <!-- C3.JS CHART JS -->
                <script src=assets/plugins/charts-c3/d3.v5.min.js></script>
                <script src="assets/plugins/charts-c3/c3-chart.js"></script>

                <!-- INPUT MASK JS-->
                <script src="assets/plugins/input-mask/jquery.mask.min.js"></script>

                <!-- SIDE-MENU JS-->
                <script src="assets/plugins/horizontal-menu/horizontal-menu.js"></script>

                @yield('js')

                <!-- SIDEBAR JS -->
                <script src="assets/plugins/sidebar/sidebar.js"></script>

                <!-- P-scroll bar js-->
                <script src="assets/plugins/p-scroll/perfect-scrollbar.j"></script>
                <script src="assets/plugins/p-scroll/pscroll-1.js')}}"></script>

                <script src="assets/js/stiky.js"></script>

                <!--CUSTOM JS -->
                <script src="assets/js/custom.js
              }"></script>


            </div>

</body>
</html>
