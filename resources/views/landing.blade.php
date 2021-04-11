<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Smarty V3</title>
    <meta name="description" content="...">

    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="{{asset('fonts/flaticon/Flaticon.woff2')}}" as="font" type="font/woff2" crossorigin>

    <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->

    <link rel="stylesheet" href="{{asset('css/core.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor_bundle.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

    <link rel="manifest" href="{{asset('images/manifest/manifest.json')}}">
    <meta name="theme-color" content="#377dff">

</head>



<body class="layout-admin aside-sticky header-sticky" data-s2t-class="btn-primary btn-sm bg-gradient-default rounded-circle b-0">

<div id="wrapper" class="d-flex align-items-stretch flex-column">



    <header id="header" class="shadow-xs">


        <!-- NAVBAR -->
        <div class="container-fluid position-relative">

            <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

                <div class="align-items-start">

                    <!--
                        sidebar toggler
                    -->
                    <a href="#aside-main" class="btn-sidebar-toggle h-100 d-inline-block d-lg-none justify-content-center align-items-center p-2">
								<span class="group-icon">
									<i>
										<svg width="25" viewBox="0 0 20 20">
											<path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
											<path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
											<path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
											<path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
										</svg>
									</i>

									<i>
										<svg width="25" viewBox="0 0 47.971 47.971">
											<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
										</svg>
									</i>
								</span>
                    </a>


                    <!--
                        Logo : height: 60px max
                        visibility : mobile only
                    -->
                    <a class="navbar-brand d-inline-block d-lg-none" href="#">
                    </a>


                </div>




                <!-- NAVIGATION -->
                <div class="collapse navbar-collapse" id="navbarMainNav">



                    <!-- MOBILE MENU NAVBAR -->
                    <div class="navbar-xs d-none">

                        <!-- mobile menu button : close -->
                        <button class="navbar-toggler pt-0" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="20" viewBox="0 0 20 20">
                                <path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
                            </svg>
                        </button>

                        <!--
                            Optional Mobile Menu Logo
                            Logo : height: 70px max
                        -->
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('images/logo/logo_dark.svg')}}">
                        </a>

                    </div>
                    <!-- /MOBILE MENU NAVBAR -->



                    <!-- Dropdowns -->
                    <ul class="navbar-nav align-items-center">

                        <!--

                            Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
                                .dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
                                .dropdown-menu-hover 		- open on hover
                                .dropdown-menu-clean 		- no background color on hover
                                .dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
                                .dropdown-menu-uppercase 	- uppercase text (font-size is scalled down to 13px)
                                .dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

                                Repositioning long dropdown childs (Example: Pages->Account)
                                    .dropdown-menu-up-n100 		- open up with top: -100px
                                    .dropdown-menu-up-n100 		- open up with top: -150px
                                    .dropdown-menu-up-n180 		- open up with top: -180px
                                    .dropdown-menu-up-n220 		- open up with top: -220px
                                    .dropdown-menu-up-n250 		- open up with top: -250px
                                    .dropdown-menu-up 			- open up without negative class


                                Dropdown prefix icon (optional, if enabled in variables.scss)
                                    .prefix-link-icon .prefix-icon-dot 		- link prefix
                                    .prefix-link-icon .prefix-icon-line 	- link prefix
                                    .prefix-link-icon .prefix-icon-ico 		- link prefix
                                    .prefix-link-icon .prefix-icon-arrow 	- link prefix

                                .nav-link.nav-link-caret-hide 	- no dropdown icon indicator on main link
                                .nav-item.dropdown-mega 		- required ONLY on fullwidth mega menu

                        -->

                        <!-- Features -->
                        <li class="nav-item dropdown">

                            <a href="#" class="nav-link nav-link-caret-hide dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavFeatures">
                                <i class="fi fi-shield-ok float-start m-0"></i>
                                <span>Upgrade</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-hover w--300 p-0 border border-light overflow-hidden" aria-labelledby="mainNavFeatures">

                                <div class="row no-gutters bg-gradient-secondary">


                                    <!-- REMOVE BAR IF NOT NEEDED -->
                                    <div class="col-2 d-none d-lg-block"><!-- empty -->

                                        <!-- text-rotate-90 , text-rotate-180 -->
                                        <p class="h6 font-weight-medium mb-0 text-white text-rotate-180 text-center position-absolute d-middle">
                                            BONUS • 30 DAYS • FREE
                                        </p>

                                    </div>

                                    <div class="col bg-white overflow-hidden">

                                        <ul class="mx-0 px-0 my-2">

                                            <li class="dropdown-item text-wrap">
                                                <a href="../layout_1/index.html" class="dropdown-link text-dark transition-hover-start p-3 line-height-1">
                                                    <i class="fi fi-round-lightning float-start fs--25 mt--n2"></i>
                                                    <span class="h5-xs d-block fs--18">Startup Go</span>
                                                    <span class="fs--11 text-muted text-uppercase">
																STARTING WITH $29 / mo
															</span>
                                                </a>
                                            </li>

                                            <li class="dropdown-item text-wrap">
                                                <a href="../layout_2/index.html" class="dropdown-link text-dark transition-hover-start p-3 line-height-1">
                                                    <i class="fi fi-graph float-start fs--25 mt--n2"></i>
                                                    <span class="h5-xs d-block fs--18">Strategic Business</span>
                                                    <span class="fs--11 text-muted text-uppercase">
																STARTING WITH $49 / mo
															</span>
                                                </a>
                                            </li>

                                            <li class="dropdown-item text-wrap">
                                                <a href="../layout_3/index.html" class="dropdown-link text-dark transition-hover-start p-3 line-height-1">
                                                    <i class="fi fi-gps float-start fs--25 mt--n2"></i>
                                                    <span class="h5-xs d-block fs--18">Advanced Marketer</span>
                                                    <span class="fs--11 text-muted text-uppercase">
																STARTING WITH $89 / mo
															</span>
                                                </a>
                                            </li>

                                        </ul>

                                        <div class="position-relative bg-theme-color-light py-4 px-3">

                                            <h6>Enterprise</h6>

                                            <ul class="mx-0 px-0">

                                                <li class="dropdown-item text-wrap bg-transparent">
                                                    <a href="#!" class="dropdown-link bg-transparent text-dark px-2 py-1">
                                                        <i class="fi fi-arrow-end"></i>
                                                        QA Testing
                                                    </a>
                                                </li>

                                                <li class="dropdown-item text-wrap bg-transparent">
                                                    <a href="#!" class="dropdown-link bg-transparent text-dark px-2 py-1">
                                                        <i class="fi fi-arrow-end"></i>
                                                        API
                                                    </a>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </li>


                        <!--  -->
                        <li class="nav-item dropdown">

                            <a href="#!" class="nav-link nav-link-caret-hide dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavApps">
                                <i class="fi fi-squared-dots float-start m-0"></i>
                                <span>Apps</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-clean dropdown-menu-hover w--280 p-0 overflow-hidden" aria-labelledby="mainNavApps">

                                <div class="bg-white">

                                    <!-- apps list -->
                                    <div class="max-h-50vh scrollable-vertical">
                                        <div class="overflow-hidden">
                                            <div class="row row-grid no-gutters p-0 m-0 list-unstyled b-0 ml--n1 mr--n1">

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-support d-block fs--40"></i>
                                                        <span class="d-block fs--15">Support</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-24 d-block fs--40"></i>
                                                        <span class="d-block fs--15">Monitoring</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-database d-block fs--40"></i>
                                                        <span class="d-block fs--15">Databases</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-calendar d-block fs--40"></i>
                                                        <span class="d-block fs--15">Calendar</span>
                                                        <!-- badge -->
                                                        <span class="badge badge-danger shadow-danger-md animate-pulse fs--10 p-1 m-2 position-absolute end-0 top-0">1</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-code d-block fs--40"></i>
                                                        <span class="d-block fs--15">Live Code</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-chart-up d-block fs--40"></i>
                                                        <span class="d-block fs--15">Stats</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-envelope d-block fs--40"></i>
                                                        <span class="d-block fs--15">Email</span>
                                                        <!-- badge -->
                                                        <span class="badge badge-success fs--10 p-1 m-2 position-absolute end-0 top-0">12</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-list-checked d-block fs--40"></i>
                                                        <span class="d-block fs--15">Tasks</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-truck-speed d-block fs--40"></i>
                                                        <span class="d-block fs--15">Delivery</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-gift d-block fs--40"></i>
                                                        <span class="d-block fs--15">Gifts</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-attachment d-block fs--40"></i>
                                                        <span class="d-block fs--15">Attachments</span>
                                                        <!-- badge -->
                                                        <span class="badge badge-secondary fs--10 p-1 m-2 position-absolute end-0 top-0">115</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-image d-block fs--40"></i>
                                                        <span class="d-block fs--15">Cloud Images</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-time d-block fs--40"></i>
                                                        <span class="d-block fs--15">Alarams</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-percent d-block fs--40"></i>
                                                        <span class="d-block fs--15">Discounts</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-heart-slim d-block fs--40"></i>
                                                        <span class="d-block fs--15">Favourites</span>
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a href="#!" class="dropdown-link text-dark text-center d-block transition-all-ease-250 shadow-primary-xs-hover p-2">
                                                        <i class="fi fi-umbrella d-block fs--40"></i>
                                                        <span class="d-block fs--15">Umbrella</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /apps list -->

                                    <div class="bg-theme-color-light shadow-dark-xs">

                                        <ul class="mx-0 px-0">

                                            <li class="dropdown-item text-wrap bg-transparent px-2 py-1">
                                                <a href="#!" class="dropdown-link bg-transparent text-dark py-3 px-3">
                                                    <i class="fi fi-plus"></i>
                                                    App Library
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>

                        </li>



                        <!--  -->
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavHome">
                                Shortcuts
                            </a>

                            <ul class="dropdown-menu dropdown-menu-clean dropdown-menu-hover" aria-labelledby="mainNavHome">

                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-link" href="#!" data-toggle="dropdown">
                                        <i class="fi fi-cart-1"></i>
                                        Components
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-hover b-0 m-0 shadow-primary-xs">
                                        <li class="dropdown-item">
                                            <a class="dropdown-link" href="components-alerts.html">
                                                <i class="fi fi-plus"></i>
                                                Alerts
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="dropdown-link" href="#">
                                                <i class="fi fi-list-checked"></i>
                                                Accordions
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="dropdown-link" href="#">
                                                <i class="fi fi-box"></i>
                                                Badges
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="dropdown-link" href="#">
                                                <i class="fi fi-close"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="dropdown-link" target="_blank" href="#">
                                                <i class="fi fi-close"></i>
                                                Documentation
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="#">
                                        <i class="fi fi-user-plus"></i>
                                        Sign In/Up
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="#">
                                        <i class="fi fi-users"></i>
                                        Account Settings
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="#">
                                        <i class="fi fi-graph"></i>
                                        Admin Staff
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="#">
                                        <i class="fi fi-task-list"></i>
                                        Page List
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="#">
                                        <i class="fi fi-task-list"></i>
                                        Product Add
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" href="#">
                                        <i class="fi fi-task-list"></i>
                                        Message Inbox
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="dropdown-link" target="_blank" href="#">
                                        <i class="fi fi-task-list"></i>
                                        Documentation
                                    </a>
                                </li>
                            </ul>

                        </li>

                        <li class="nav-item dropdown dropdown-mega">

                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainMegaNav">
                                Mega
                            </a>

                            <ul class="dropdown-menu dropdown-menu-clean dropdown-menu-hover shadow-primary-xs" aria-labelledby="mainMegaNav">
                                <li class="dropdown-item bg-transparent">

                                    <!--
                                        for 5 columns:
                                        .col-md-5th   -instead of-   .col-md-3
                                    -->
                                    <div class="row col-border-md">

                                        <div class="col-12 col-md-3">

                                            <h3 class="h6 text-muted text-uppercase fs--14 mb-3">DOTS</h3>
                                            <ul class="prefix-link-icon prefix-icon-dot">

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 1</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 2</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 3</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 4</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 5</a>
                                                </li>

                                            </ul>

                                        </div>

                                        <div class="col-12 col-md-3">

                                            <h3 class="h6 text-muted text-uppercase fs--14 mb-3">LINES</h3>
                                            <ul class="prefix-link-icon prefix-icon-line">

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 1</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 2</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 3</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 4</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 5</a>
                                                </li>

                                            </ul>

                                        </div>

                                        <div class="col-12 col-md-3">

                                            <h3 class="h6 text-muted text-uppercase fs--14 mb-3">ICONS</h3>
                                            <ul class="prefix-link-icon prefix-icon-ico">

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#">
                                                        <i class="fi fi-cart-1"></i>
                                                        Option 1
                                                    </a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#">
                                                        <i class="fi fi-user-plus"></i>
                                                        Option 2
                                                    </a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#">
                                                        <i class="fi fi-users"></i>
                                                        Option 3
                                                    </a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#">
                                                        <i class="fi fi-graph"></i>
                                                        Option 4
                                                    </a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="../../html_frontend/documentation/components-icons.html">
                                                        <i class="fi fi-task-list"></i>
                                                        Option 5
                                                    </a>
                                                </li>

                                            </ul>

                                        </div>

                                        <div class="col-12 col-md-3">

                                            <h3 class="h6 text-muted text-uppercase fs--14 mb-3">ARROWS</h3>
                                            <ul class="prefix-link-icon prefix-icon-arrow">

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 1</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 2</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 3</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 4</a>
                                                </li>

                                                <li class="dropdown-item">
                                                    <a class="dropdown-link transition-hover-start" href="#!">Option 5</a>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </li>
                            </ul>

                        </li>

                    </ul>
                    <!-- /Dropdowns -->

                </div>
                <!-- /NAVIGATION -->




                <!-- OPTIONS -->
                <ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

                    <!-- notifications -->
                    <li class="list-inline-item ml--6 mr--6 dropdown">

                        <a href="#" id="dropdownNotificationOptions" class="btn btn-sm rounded-circle btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">

                            <!-- badge -->
                            <span class="badge badge-danger fs--10 p--3 mt--n3 position-absolute end-0">2</span>

                            <span class="group-icon">
										<i class="fi fi-bell-full"></i>
                                <!-- <i class="fi fi-bell-full-active"></i> -->
										<i class="fi fi-close"></i>
									</span>

                        </a>

                        <div aria-labelledby="dropdownNotificationOptions" class="dropdown-menu dropdown-menu-clean dropdown-menu-navbar-autopos dropdown-menu-invert dropdown-click-ignore p-0 mt--18 fs--15 w--300">

                            <div class="dropdown-header fs--14 py-3">

                                2 UNREAD NOTIFICATIONS

                            </div>

                            <div class="dropdown-divider"></div>

                            <div class="max-h-50vh scrollable-vertical">

                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover bg-theme-color-light">

                                    <!-- badge -->
                                    <span class="badge badge-success float-end font-weight-normal mt-1">new</span>

                                    <!-- icon -->
                                    <i class="fi fi-cart-1 d-middle float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        2 new orders
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->


                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover bg-theme-color-light">

                                    <!-- badge -->
                                    <span class="badge badge-success float-end font-weight-normal mt-1">new</span>
                                    <span class="badge badge-danger float-end font-weight-normal mt-1">urgent</span>

                                    <!-- icon -->
                                    <i class="fi fi-round-close d-middle text-danger float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        CRM API update required!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- badge -->
                                    <span class="badge badge-warning float-end font-weight-normal mt-1">system</span>

                                    <!-- icon -->
                                    <i class="fi fi-shield-ok d-middle text-success float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        AI self repair success!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->


                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-check d-middle text-success float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Not really a heaven but good!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->


                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-close d-middle text-danger float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Not the end of the world!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-check d-middle text-white float-start fs--18 bg-success w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        This is good! Very good!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->


                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-close d-middle text-white float-start fs--18 bg-danger w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        The end of the world is here!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->


                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-user-male d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        A Spartan joined the team!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-user-female d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Pssst! We have girls in our team!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-star text-warning d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        This is something good?
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->




                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-star-full text-warning d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Or maybe this?
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->




                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-round-info-full text-muted d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Simple short information...
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->




                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-database text-muted d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Database related
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-chat text-muted d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Customer chat lost...
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-hourglass text-muted d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Pending approval
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium p-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- icon -->
                                    <i class="fi fi-shape-abstract-dots text-muted d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Various notifications...
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->



                                <!-- NOTIFICATION -->
                                <a href="https://wrapbootstrap.com/theme/smarty-website-admin-rtl-WB02DSN1B" target="wrapbootstrap" class="clearfix dropdown-item font-weight-medium px-3 rounded overflow-hidden shadow-md-hover">

                                    <!-- badge -->
                                    <span class="badge badge-pink float-end font-weight-normal mt-1">{wrapbootstrap}</span>

                                    <!-- icon -->
                                    <i class="fi fi-emoji-evil text-pink d-middle float-start fs--18 bg-light w--40 h--40 rounded-circle text-center"></i>

                                    <!-- NOTIFICATION -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        THIS IS <del>Spar..</del> Smarty!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Oct 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /NOTIFICATION -->


                            </div>

                            <div class="dropdown-divider mb-0"></div>

                            <a href="#!" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore font-weight-medium pt-3 pb-3">
                                <i class="fi fi-arrow-end fs--11"></i>
                                <span class="d-inline-block pl-2 pr-2">View all</span>
                            </a>
                        </div>

                    </li>

                    <!-- messages  d-none d-md-inline-block -->
                    <li class="list-inline-item ml--6 mr--6 dropdown">

                        <a href="#" id="dropdownMessageOptions" class="btn btn-sm rounded-circle btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">

                            <!-- badge -->
                            <span class="badge badge-danger shadow-danger-md animate-pulse fs--10 p--3 mt--n3 position-absolute end-0">1</span>

                            <span class="group-icon">
										<i class="fi fi-envelope-2"></i>
										<i class="fi fi-close"></i>
									</span>
                        </a>

                        <div aria-labelledby="dropdownMessageOptions" class="dropdown-menu dropdown-menu-clean dropdown-menu-navbar-autopos dropdown-menu-invert dropdown-click-ignore p-0 mt--18 fs--15 w--300">

                            <div class="dropdown-header fs--14 py-3">

                                <a href="#!" class="js-ajax-modal btn btn-sm btn-primary btn-soft b-0 px-2 py-1 m-0 fs--12 mt--n3 float-end"
                                   data-href="_ajax/admin_modal_message_write.html"
                                   data-ajax-modal-size="modal-md"
                                   data-ajax-modal-centered="false"
                                   data-ajax-modal-backdrop="static">
                                    + WRITE
                                </a>

                                1 NEW MESSAGE

                            </div>

                            <div class="dropdown-divider"></div>

                            <div class="max-h-50vh scrollable-vertical">

                                <!-- MESSAGE -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium px-3 border-bottom border-light overflow-hidden shadow-md-hover bg-theme-color-light">

                                    <span class="badge badge-success float-end font-weight-normal mt-1">new</span>
                                    <span class="badge badge-danger float-end font-weight-normal mt-1">urgent</span>

                                    <!-- image -->
                                    <div class="w--50 h--50 mb-2 mt-1 rounded-circle bg-cover bg-light float-start" style="background-image:url('../../html_frontend/demo.files/images/icons/user80.png')"></div>

                                    <!-- author -->
                                    <strong class="d-block text-truncate">John Doe</strong>

                                    <!-- subject -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Spartans has no weekends, so neither you!
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Jan 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /MESSAGE -->

                                <!-- MESSAGE -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium px-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- image -->
                                    <div class="w--50 h--50 mb-2 mt-1 rounded-circle bg-cover bg-light float-start" style="background-image:url('../../html_frontend/demo.files/images/unsplash/team/michael-dam-mEZ3PoFGs_k-unsplash.jpg')"></div>

                                    <!-- author -->
                                    <strong class="d-block text-truncate">Michael Dam</strong>

                                    <!-- subject -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Go with Smarty, you can't go wrong, trust me
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Jan 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /MESSAGE -->

                                <!-- MESSAGE -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium px-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- image -->
                                    <div class="w--50 h--50 mb-2 mt-1 rounded-circle bg-cover bg-light float-start" style="background-image:url('../../html_frontend/demo.files/images/unsplash/team/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg')"></div>

                                    <!-- author -->
                                    <strong class="d-block text-truncate">Joseph Gonzalez</strong>

                                    <!-- subject -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        RE: No Subject
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Jan 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /MESSAGE -->

                                <!-- MESSAGE -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium px-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- image -->
                                    <div class="w--50 h--50 mb-2 mt-1 rounded-circle bg-cover bg-light float-start" style="background-image:url('../../html_frontend/demo.files/images/unsplash/team/erik-mclean-06vpBIHmiYc-unsplash.jpg')"></div>

                                    <!-- author -->
                                    <strong class="d-block text-truncate">Erik Mclean</strong>

                                    <!-- subject -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        Indeed, this is unbeliveable
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Jan 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /MESSAGE -->

                                <!-- MESSAGE -->
                                <a href="#!" class="clearfix dropdown-item font-weight-medium px-3 border-bottom border-light overflow-hidden shadow-md-hover">

                                    <!-- image -->
                                    <div class="w--50 h--50 mb-2 mt-1 rounded-circle bg-cover bg-light float-start" style="background-image:url('../../html_frontend/demo.files/images/unsplash/team/valerie-elash-9IL_stSpvOU-unsplash.jpg')"></div>

                                    <!-- author -->
                                    <strong class="d-block text-truncate">Valerie Elash</strong>

                                    <!-- subject -->
                                    <p class="fs--14 m-0 text-truncate font-weight-normal">
                                        RE: No Subject
                                    </p>

                                    <!-- date -->
                                    <small class="d-block fs--11 text-muted">
                                        Jan 22, 2019 / 02:21:46pm
                                    </small>

                                </a>
                                <!-- /MESSAGE -->

                            </div>

                            <div class="dropdown-divider mb-0"></div>

                            <a href="#!" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore font-weight-medium pt-3 pb-3">
                                <i class="fi fi-arrow-end fs--11"></i>
                                <span class="d-inline-block pl-2 pr-2">View all</span>
                            </a>
                        </div>

                    </li>

                    <!-- account -->
                    <li class="list-inline-item ml--6 mr--6 dropdown">

                        <a href="#" id="dropdownAccountOptions" class="btn btn-sm btn-light dropdown-toggle btn-pill pl--12 pr--12" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">

									<span class="group-icon m-0">
										<!-- <i class="fi fi-user-female"></i> -->
										<i class="fi w--15 fi-user-male"></i>
										<i class="fi w--15 fi-close"></i>
									</span>

                            <span class="fs--14 d-none d-sm-inline-block font-weight-medium">John D.</span>
                        </a>


                        <!--

                            Dropdown Classes
                                .dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
                                .dropdown-menu-hover 		- open on hover
                                .dropdown-menu-clean 		- no background color on hover
                                .dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
                                .dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

                                Dropdown prefix icon (optional, if enabled in variables.scss)
                                    .prefix-link-icon .prefix-icon-dot 		- link prefix
                                    .prefix-link-icon .prefix-icon-line 	- link prefix
                                    .prefix-link-icon .prefix-icon-ico 		- link prefix
                                    .prefix-link-icon .prefix-icon-arrow 	- link prefix

                                    .prefix-icon-ignore 					- ignore, do not use on a specific link

                        -->
                        <div aria-labelledby="dropdownAccountOptions" class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-clean dropdown-menu-navbar-autopos dropdown-menu-invert dropdown-click-ignore p-0 mt--18 fs--15 w--300">

                            <div class="dropdown-header fs--14 py-4">

                                <!-- profile image -->
                                <div class="w--60 h--60 rounded-circle bg-light bg-cover float-start" style="background-image:url('../../html_frontend/demo.files/images/icons/user80.png')"></div>

                                <!-- initials - no image -->
                                <!--
                                <div data-initials="John Doe" data-assign-color="true" class="sow-util-initials bg-light rounded h5 w--60 h--60 d-inline-flex justify-content-center align-items-center rounded-circle float-start">
                                    <i class="fi fi-circle-spin fi-spin"></i>
                                </div>
                                -->

                                <!-- user detail -->
                                <span class="d-block font-weight-medium text-truncate fs--16">John Doe</span>
                                <span class="d-block text-muted font-weight-medium text-truncate">john.doe@gmail.com</span>
                                <small class="d-block text-muted"><b>Last Login:</b> 2019-09-03 01:48</small>

                            </div>

                            <div class="dropdown-divider"></div>

                            <a href="#!" target="_blank" class="dropdown-item text-truncate font-weight-medium">
                                Notes
                                <small class="d-block text-muted">personal encypted notes</small>
                            </a>

                            <a href="#!" target="_blank" class="dropdown-item text-truncate font-weight-medium">
                                <span class="badge badge-success float-end font-weight-normal mt-1">3 new</span>
                                Messages
                                <small class="d-block text-muted">internal messaging system</small>
                            </a>

                            <a href="#!" target="_blank" class="dropdown-item text-truncate font-weight-medium">
                                <span class="badge badge-danger float-end font-weight-normal mt-1">1 unpaid</span>
                                Invoices
                                <small class="d-block text-muted">montly billing</small>
                            </a>

                            <a href="#!" class="dropdown-item text-truncate font-weight-medium">
                                Account Settings
                                <small class="d-block text-muted">profile, password and more...</small>
                            </a>

                            <a href="#!" class="dropdown-item text-truncate font-weight-medium">
                                Upgrade
                                <small class="d-block text-muted">upgrade your account</small>
                            </a>

                            <div class="dropdown-divider mb-0"></div>

                            <a href="#!" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore font-weight-medium pt-3 pb-3">
                                <i class="fi fi-power float-start"></i>
                                Log Out
                            </a>
                        </div>

                    </li>

                </ul>
                <!-- /OPTIONS -->


            </nav>


            <!-- TOP NAVIGATION TOGGLER -->
            <button class="navbar-toggler shadow-xs h-auto w-auto m-0 btn btn-sm bg-white rounded-circle position-absolute end-0 mt-4 mb-1 ml--20 mr--20 z-index-2 d-none d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fi fi-bars"></i>
            </button>
            <!-- /TOP NAVIGATION TOGGLER -->

        </div>
        <!-- /NAVBAR -->

    </header>
    <!-- /HEADER -->





    <div id="wrapper_content" class="d-flex flex-fill">


        <!--

            SIDEBAR

                Example gradients:
                    .aside-primary
                    .bg-gradient-default
                    .bg-gradient-purple
                    etc

                    * Footer should also match
        -->
        <aside id="aside-main" class="aside-start aside-primary aside-hide-xs d-flex flex-column h-auto">


            <!--
                LOGO
                visibility : desktop only
            -->
            <div class="d-none d-sm-block">
                <div class="clearfix d-flex justify-content-between">

                    <!-- Logo : height: 60px max -->
                    <a class="w-100 align-self-center navbar-brand p-3" href="index.html">
                        <img src="assets/images/logo/logo_light.svg" width="110" height="60" alt="...">
                    </a>

                </div>
            </div>
            <!-- /LOGO -->


            <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

                <!--

                    All parent open navs are closed on click!
                    To ignore this feature, add .js-ignore to .nav-deep

                    Links height (paddings):
                        .nav-deep-xs
                        .nav-deep-sm
                        .nav-deep-md  	(default, ununsed class)

                    .nav-deep-hover 	hover background slightly different
                    .nav-deep-bordered	bordered links


                    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    IMPORTANT NOTE:
                        Curently using ajax navigation!
                        remove .js-ajax class to have regular links!
                    ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                -->
                <nav class="nav-deep nav-deep-dark nav-deep-hover pb-5">
                    <ul class="nav flex-column">

                        <li class="nav-item active">
                            <a class="nav-link js-ajax"href="#">
                                <i class="fi fi-menu-dots"></i>
                                <b>ادارة الموقع</b>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">
										<span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
                                <i class="fi fi-code"></i>
                                <span class="badge badge-warning float-end fs--11 mt-1">new</span>
                                Components
                            </a>

                            <ul class="nav flex-column fs--15">

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Alerts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax"href="#">
                                        Accordions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Badges
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Breadcrumbs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Buttons
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Cards
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Carousel
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Collapse
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Dropdowns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Forms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Icons
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Lists
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Media
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Modals
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Navs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Navigation
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Pagination
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax"href="#">
                                        Progress
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Popover
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Scrollspy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Spinners
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Tabs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Tables
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Timeline
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Thumbnails
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Tooltip
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Typography
                                    </a>
                                </li>

                            </ul>




                        <li class="nav-item">
                            <a class="nav-link" href="#">
											<span class="group-icon float-end">
												<i class="fi fi-arrow-end-slim"></i>
												<i class="fi fi-arrow-down-slim"></i>
											</span>
                                <i class="fi fi-shape-3dots"></i>
                                Utilities
                            </a>

                            <ul class="nav flex-column fs--15">

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Text &amp; Backgrouns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Borders
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Box Shadows
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Font Size / Weight
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Width / Height
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Paddings / Margins
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Transitions / Transforms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Position
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Visibility
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Overlays &amp; Opacity
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Scroll &amp; Scrollbar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Miscellaneous
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Responsive
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        RTL
                                    </a>
                                </li>

                            </ul>
                        </li>





                        <li class="nav-item">
                            <a class="nav-link" href="#">
											<span class="group-icon float-end">
												<i class="fi fi-arrow-end-slim"></i>
												<i class="fi fi-arrow-down-slim"></i>
											</span>
                                <i class="fi fi-mollecules"></i>
                                SOW : Core Plugins
                            </a>

                            <ul class="nav flex-column fs--15">

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">9Kb</span>
                                        SOW : Search Suggest
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">10Kb</span>
                                        SOW : Ajax : Navigation
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">4Kb</span>
                                        SOW : Ajax : Forms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">4Kb</span>
                                        SOW : Ajax : Content
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">3Kb</span>
                                        SOW : Ajax : Modals
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">6Kb</span>
                                        SOW : Ajax : Confirm
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">4.5Kb</span>
                                        SOW : Ajax : Select
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                        SOW : Form Validation
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">7Kb</span>
                                        SOW : Form Advanced
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">24Kb</span>
                                        SOW : File Upload
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                        SOW : Check All
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">4Kb</span>
                                        SOW : Toasts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                        SOW : GDPR Cookies
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                        SOW : Inline Search
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">3Kb</span>
                                        SOW : Dropdowns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                        SOW : Deep Navigation
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">2.5Kb</span>
                                        SOW : Button Toggle
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                        SOW : Scroll To
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                        SOW : Timer Autohide
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                        SOW : Timer Countdown
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1.5Kb</span>
                                        SOW : Google Font
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                        SOW : Lazyload
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">4.1Kb</span>
                                        SOW : Count Animate
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                        SOW : Service Worker!
                                    </a>
                                </li>
                                <li class="nav-item pl--15 pr--15">
                                    <div class="bg-diff text-gray-500 fs--13 p-2 rounded">
                                        SOW Core plugins are developed from scratch.
                                        You can remove, disable or use your own!
                                    </div>
                                </li>

                            </ul>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link" href="#">
											<span class="group-icon float-end">
												<i class="fi fi-arrow-end-slim"></i>
												<i class="fi fi-arrow-down-slim"></i>
											</span>
                                <i class="fi fi-layers"></i>
                                Vendor Plugins
                            </a>

                            <ul class="nav flex-column fs--15">

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Bootstrap Select
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Flickity Slider
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Swiper Slider
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Jaxallax
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Sticky Kit
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Fancybox
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Photoswipe
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
                                        Vendor : Map
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-slimscroll.html">
                                        Vendor : Slimscroll
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-nestable.html">
                                        Vendor : Nestable
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
													<span class="group-icon float-end">
														<i class="fi fi-arrow-end-slim"></i>
														<i class="fi fi-arrow-down-slim"></i>
													</span>
                                        Vendor : Pickers
                                    </a>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-datepicker.html">
                                                Datepicker
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-rangepicker.html">
                                                Rangepicker
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-colorpicker.html">
                                                Colorpicker
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
													<span class="group-icon float-end">
														<i class="fi fi-arrow-end-slim"></i>
														<i class="fi fi-arrow-down-slim"></i>
													</span>
                                        Vendor : Charts
                                    </a>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-chartjs.html">
                                                Chart.js
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-flot.html">
                                                Flot Chart
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-easypie.html">
                                                Easy Pie Chart
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-sparkline.html">
                                                Sparkline Charts
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
													<span class="group-icon float-end">
														<i class="fi fi-arrow-end-slim"></i>
														<i class="fi fi-arrow-down-slim"></i>
													</span>
                                        Vendor : Editors
                                    </a>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-medium-editor.html">
                                                Medium Editor
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-markdown.html">
                                                Markdown Editor
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link js-ajax" href="plugins-vendor-summernote.html">
                                                Summernote
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-datatable.html">
                                        Vendor : Datatable
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-fullcalendar.html">
                                        Vendor : Fullcalendar
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-prismjs.html">
                                        Vendor : Prismjs (Highlighter)
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-aos.html">
                                        Vendor : AOS
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-typed.html">
                                        Vendor : Typed
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="plugins-vendor-sortablejs.html">
                                        Vendor : Sortablejs
                                    </a>
                                </li>

                            </ul>
                        </li>





                        <li class="nav-item">
                            <a class="nav-link" href="#">
											<span class="group-icon float-end">
												<i class="fi fi-arrow-end-slim"></i>
												<i class="fi fi-arrow-down-slim"></i>
											</span>
                                <i class="fi fi-eq-vertical"></i>
                                Layout : Variants
                            </a>

                            <ul class="nav flex-column fs--15">

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
													<span class="group-icon float-end">
														<i class="fi fi-arrow-end-slim"></i>
														<i class="fi fi-arrow-down-slim"></i>
													</span>
                                        Sidebar
                                    </a>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="layout-sidebar-dark.html">
                                                Sidebar : Dark
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="layout-sidebar-light.html">
                                                Sidebar : Light
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link js-ajax" href="#">
													<span class="group-icon float-end">
														<i class="fi fi-arrow-end-slim"></i>
														<i class="fi fi-arrow-down-slim"></i>
													</span>
                                        Header
                                    </a>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="layout-header-dark.html">
                                                Header : Dark
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="layout-header-light.html">
                                                Header : Light
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-1.html">
                                        Defaults : 1
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-2.html">
                                        Defaults : 2
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-3.html">
                                        Defaults : 3
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-4.html">
                                        Defaults : 4
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-5.html">
                                        Defaults : 5
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-6.html">
                                        Defaults : 6
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-defaults-7.html">
                                        Defaults : 7
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-header-sticky.html">
                                        Header : Sticky
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="layout-sidebar-sticky.html">
                                        Sidebar : Sticky
                                    </a>
                                </li>

                            </ul>
                        </li>





                        <li class="nav-title mt-5">
                            <h6 class="fs--15 mb-1 text-white font-weight-normal">Pages</h6>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="#">
                                <i class="fi fi-database"><!-- main icon --></i>
                                <span class="group-icon float-end">
											<i class="fi fi-arrow-end-slim"></i>
											<i class="fi fi-arrow-down-slim"></i>
										</span>
                                System
                            </a>
                            <ul class="nav flex-column fs--15">
                                <li class="nav-item">
                                    <a class="nav-link" href="account-signin.html">
                                        Sign In/Up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="forum-index.html">
                                        Forum Pages
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="account-settings.html">
                                        Account Settings
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-staff.html">
                                        Admin Staff
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="message-inbox.html">
                                        Message Inbox
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page-list.html">
                                        Page List
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page-product-add.html">
                                        Page Product Add
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="404.html">
                                        404 Error
                                    </a>
                                </li>
                            </ul>
                        </li>





                        <li class="nav-title mt-5">
                            <h6 class="fs--15 mb-1 text-white font-weight-normal">Admin Layouts</h6>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link text-white" href="../layout_1/index.html">
                                <i class="fi fi-check text-success"><!-- main icon --></i>
                                <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_1</span>
                                Smarty SaaS
                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="../layout_2/index.html">
                                <i class="fi fi-shape-star"><!-- main icon --></i>
                                <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_2</span>
                                Smarty Fancy
                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="../layout_3/index.html">
                                <i class="fi fi-round-list text-warning"><!-- main icon --></i>
                                <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_3</span>
                                Horizontal Menu 1
                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="../layout_4/index.html">
                                <i class="fi fi-round-list text-warning"><!-- main icon --></i>
                                <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_42</span>
                                Horizontal Menu 2
                            </a>

                        </li>

                    </ul>
                </nav>

            </div>
        </aside>
        <!-- /SIDEBAR -->


        <!-- MIDDLE -->
        <div id="middle" class="flex-fill">



            <!--
                PAGE TITLE
            -->
            <div class="page-title bg-transparent b-0">

                <h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
                    Dashboard
                </h1>

            </div>




            <!-- Primary -->
            <section class="rounded mb-3">


                <!-- graph header -->
                <div class="clearfix fs--18 pt-2 pb-3 mb-3 border-bottom">

                    <!-- save image -->
                    <a href="#" data-chartjs-id="visitsvsorders" data-file-name="visitsvsorders" class="btn btn-sm btn-light rounded-circle chartjs-save float-end m-0" title="Save Chart" aria-label="Save Chart">
                        <i class="fi fi-arrow-download m-0"></i>
                    </a>
                    <!-- /save image -->

                    Visits &amp; Orders
                    <small class="fs--11 text-muted d-block mt-1">MONTHLY REVENUE OF 2019</small>

                </div>
                <!-- /graph header -->



                <div class="row gutters-sm">

                    <!-- MAIN GRAPH -->
                    <div class="col-12 col-lg-7 col-xl-9 mb-5">

                        <div class="position-relative min-h-250 max-h-500 max-h-300-xs h-100">
                            <canvas id="visitsvsorders" class="mb-5 chartjs"
                                    data-chartjs-dots="false"
                                    data-chartjs-legend="top"
                                    data-chartjs-grid="true"
                                    data-chartjs-tooltip="true"

                                    data-chartjs-title="Visits &amp; Orders"
                                    data-chartjs-xaxes-label=""
                                    data-chartjs-yaxes-label=""
                                    data-chartjs-line-width="5"

                                    data-chartjs-type="line"
                                    data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                                    data-chartjs-datasets='[{
									        "label": 				"Visits",
									        "data": 				[20, 22, 24, 21, 23, 26, 24, 23, 21, 24, 23, 22],
									        "fill": 				true,
									        "backgroundColor": 			"rgba(255, 206, 86, 0.2)"
										},{
									        "label": 				"Orders",
									        "data": 				[14, 16, 16, 14, 13, 12, 14, 14, 13, 14, 12, 10],
									        "fill": 				true,
									        "backgroundColor": 		"rgba(255, 206, 86, 0.4)"
										}]'></canvas>

                        </div>

                    </div>
                    <!-- /MAIN GRAPH -->

                    <div class="col-12 col-lg-5 col-xl-3 mb-5">

                        <!-- card -->
                        <div class="bg-white shadow-lg p-4 rounded my-3 transition-hover-top transition-all-ease-150">

                            <!-- dropdown options -->
                            <div class="float-end dropdown">

                                <!-- dropdown -->
                                <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" aria-label="Dropdown Options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fi fi-dots-vertical m-0"></i>
                                </button>

                                <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2">

                                    <a href="#!" class="dropdown-item">
                                        Export PDF
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Export Tasks
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Print
                                    </a>

                                </div>
                                <!-- /dropdown -->

                            </div>
                            <!-- /dropdown options -->


                            <div class="mb-3">
                                <a href="#!" class="w--40 h--40 rounded-circle d-inline-block bg-light bg-cover lazy" data-background-image="../../html_frontend/demo.files/images/unsplash/team/thumb_330/erik-mclean-06vpBIHmiYc-unsplash.jpg"></a>
                                <a href="#!" class="w--40 h--40 rounded-circle d-inline-block bg-light bg-cover lazy" data-background-image="../../html_frontend/demo.files/images/unsplash/team/thumb_330/craig-mckay-jmURdhtm7Ng-unsplash.jpg"></a>
                                <a href="#!" class="w--40 h--40 rounded-circle d-inline-block bg-light bg-cover lazy" data-background-image="../../html_frontend/demo.files/images/unsplash/team/thumb_330/michael-dam-mEZ3PoFGs_k-unsplash.jpg"></a>
                            </div>

                            <a href="#!" class="h6 text-dark">
                                Project Ikarus
                            </a>

                            <p class="font-weight-light fs--14">This project has a timeline, we need to finish it as soon as possible!</p>

                            <span class="fs--14">39%</span>
                            <div class="progress h--2">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>


                        <!-- card -->
                        <div class="bg-white shadow-lg p-4 rounded my-3 transition-hover-top transition-all-ease-150">

                            <!-- dropdown options -->
                            <div class="float-end dropdown">

                                <!-- dropdown -->
                                <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" aria-label="Dropdown Options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fi fi-dots-vertical m-0"></i>
                                </button>

                                <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2">

                                    <a href="#!" class="dropdown-item">
                                        Export PDF
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Export Tasks
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Print
                                    </a>

                                </div>
                                <!-- /dropdown -->

                            </div>
                            <!-- /dropdown options -->


                            <div class="mb-3">
                                <a href="#!" class="w--40 h--40 rounded-circle d-inline-block bg-light bg-cover lazy" data-background-image="../../html_frontend/demo.files/images/unsplash/team/thumb_330/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg"></a>
                                <a href="#!" class="w--40 h--40 rounded-circle d-inline-block bg-light bg-cover lazy" data-background-image="../../html_frontend/demo.files/images/unsplash/team/thumb_330/sage-kirk-Wx2AjoLtpcU-unsplash.jpg"></a>
                            </div>

                            <a href="#!" class="h6 text-dark">
                                Remarketing
                            </a>

                            <p class="font-weight-light fs--14">
                                Our client needs remarketing for his two projects!
                            </p>

                            <span class="fs--14">78%</span>
                            <div class="progress h--2">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div>






                        <div class="clearfix bg-light p-1 row-pill">
                            <a href="#!" class="btn btn-pill btn-sm btn-warning py-1 mb-0 float-start transition-hover-end" title="Detailed Revenue" aria-label="Detailed Revenue">View</a>
                            <span class="d-block pt-1 pl-2 pr-2 text-muted text-truncate">
										view all projects
									</span>
                        </div>

                    </div>

                </div>

            </section>
            <!-- /Primary -->


            <!-- WIDGETS -->
            <div class="row gutters-sm">

                <div class="col-12 col-md-6 col-xl-3 mb-3">

                    <!-- small graph widget -->
                    <div class="bg-white shadow-md text-dark p-5 rounded text-center">

								<span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-user-plus mt-1"></i>
								</span>

                        <h3 class="fs--20 mt-5">
                            New Customers
                        </h3>

                        <p>
                            Last 30 days
                        </p>

                        <div class="position-relative max-h-200">
                            <canvas class="chartjs"
                                    data-chartjs-dots="false"
                                    data-chartjs-legend="false"
                                    data-chartjs-grid="false"
                                    data-chartjs-tooltip="true"

                                    data-chartjs-line-width="3"
                                    data-chartjs-type="line"

                                    data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                                    data-chartjs-datasets='[{
									        "label":                    "Customers",
									        "data":                     [11, 11, 17, 11, 15, 12, 13, 12, 11, 12, 7, 8],
									        "fill":                     false,
									        "backgroundColor":          "rgba(255, 159, 64, 1)"
									    }]'
                            ></canvas>
                        </div>

                    </div>
                    <!-- /small graph widget -->

                </div>



                <div class="col-12 col-md-6 col-xl-3 mb-3">

                    <!-- small graph widget -->
                    <div class="bg-white shadow-md text-dark p-5 rounded text-center">

								<span class="badge badge-light fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-cart-1 mt-1"></i>
								</span>

                        <h3 class="fs--20 mt-5">
                            Monthly Orders
                        </h3>

                        <p>
                            Last 30 days
                        </p>

                        <div class="position-relative max-h-200">
                            <canvas class="chartjs"
                                    data-chartjs-dots="false"
                                    data-chartjs-legend="false"
                                    data-chartjs-grid="false"
                                    data-chartjs-tooltip="true"

                                    data-chartjs-line-width="3"
                                    data-chartjs-type="line"

                                    data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                                    data-chartjs-datasets='[{
									        "label":                    "Orders",
									        "data":                     [11, 11, 17, 11, 15, 12, 13, 16, 11, 18, 20, 21],
									        "fill":                     false,
									        "backgroundColor":          "rgba(54, 162, 235, 1)"
									    }]'
                            ></canvas>
                        </div>

                    </div>
                    <!-- /small graph widget -->

                </div>




                <div class="col-12 col-xl-6 mb-3">


                    <div class="portlet">

                        <div class="portlet-header">

                            <div class="float-end dropdown">

                                <!-- dropdown -->
                                <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownGraph1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fi fi-dots-vertical m-0"></i>
                                </button>

                                <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2" aria-labelledby="dropdownGraph1">

                                    <div class="dropdown-header">
                                        Export Options
                                    </div>

                                    <a href="#!" class="dropdown-item">
                                        Export CSV
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Export XLS
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Export PDF
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Print
                                    </a>

                                </div>
                                <!-- /dropdown -->

                            </div>

                            <span class="d-block text-muted text-truncate font-weight-medium">
										Monthly Conversions
									</span>
                        </div>

                        <div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark tab-content">


                            <div class="position-relative min-h-250 max-h-300-xs h-100">
                                <canvas class="chartjs"
                                        data-chartjs-dots="false"
                                        data-chartjs-legend="false"
                                        data-chartjs-grid="true"
                                        data-chartjs-tooltip="true"

                                        data-chartjs-line-width="3"
                                        data-chartjs-type="line"

                                        data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                                        data-chartjs-datasets='[{
									        "label":                    "Orders",
									        "data":                     [11, 11, 17, 11, 15, 12, 13, 16, 11, 18, 20, 21],
									        "fill":                     true,
									        "backgroundColor":          "rgba(201, 203, 207, 0.3)",
									        "borderColor": 				"rgba(255, 99, 132, 1)",
									        "borderWidth": 1
									    }]'
                                ></canvas>
                            </div>


                        </div>

                    </div>



                </div>


            </div>
            <!-- /WIDGETS -->


            <!-- WIDGETS -->
            <div class="row gutters-sm">


                <!-- WIDGET : TASKS -->
                <div class="col-12 col-xl-4 mb-3">

                    <div class="portlet">

                        <div class="portlet-header">

                            <ul class="nav nav-pills float-end " id="tabUserList" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link py-1 px-2 active" id="usertab-1" data-toggle="tab" href="#usertab_1" role="tab" aria-controls="usertab_1" aria-selected="true">
                                        Today
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link py-1 px-2" id="usertab-2" data-toggle="tab" href="#usertab_2" role="tab" aria-controls="usertab_2" aria-selected="false">
                                        Month
                                    </a>
                                </li>
                            </ul>


                            <span class="d-block text-muted text-truncate font-weight-medium">
										Tasks
									</span>
                        </div>

                        <div id="tabUserListContent" class="portlet-body max-h-500 tab-content">

                            <!-- tab 1 -->
                            <div class="h-100 tab-pane show active" id="usertab_1" role="tabpanel" aria-labelledby="usertab-1">

                                <!--
                                    PLEASE PAY ATTENTION TO FORM ID : REQUIRED ,
                                    MUST BE UNIQUE AND SPECIFIED TO EACH BUTTON/LINK IN "selected items" AS ATTRIBUTE

                                        data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY"
                                -->
                                <form novalidate="" id="FORM_TASK_LIST_TODAY" method="post" action="../../html_frontend/php/demo.ajax_request.php" class="bs-validate h-100 d-flex align-items-stretch justify-content-lg-between align-items-start flex-column">

                                    <!--

                                        IMPORTANT
                                        The "action" hidden input is updated by "selected items" action
                                            data-js-form-advanced-hidden-action-id="..."
                                            data-js-form-advanced-hidden-action-value="..."

                                        PHP example of data backed processing:

                                            if($_POST['action'] === 'delete') {

                                                foreach($_POST['item_id'] as $item_id) {
                                                    // ... delete $item_id from database
                                                }

                                            }

                                    -->
                                    <input type="hidden" id="action_today" name="action" value=""><!-- value populated by js -->

                                    <!-- task list -->
                                    <div id="task_list_today" class="max-h-500 scrollable-vertical scrollable-styled-dark align-self-baseline h-100 max-h-500 w-100">


                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-danger bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="1">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Retest Smarty and make a list of all bugs</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    30 min. ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-secondary-soft bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="2">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Check the documentation</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    2 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->


                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-warning bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="3">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Server gzip compression is failing</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    2 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-info bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="4">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">New niche layout is required</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    4 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-success bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="5">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted"><del>Fix server headers</del></a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    6 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->


                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-primary bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="6">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Check customer new data</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    2 weeks ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-primary bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="7">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Check server production logs</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by J. Doe</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    1 month ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->

                                    </div>
                                    <!-- /task list -->


                                    <div class="mt-3">

                                        <!-- SELECTED ITEMS -->
                                        <div class="d-flex align-self-baseline w-100"><!-- using .dropdown, autowidth not working -->

                                            <a href="#" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
														<span class="group-icon">
															<i class="fi fi-dots-vertical-full"></i>
															<i class="fi fi-close"></i>
														</span>
                                                <span>Selected Items</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-clean dropdown-click-ignore max-w-250">

                                                <!--
                                                    buttons attributes : documentation/components-tables.html
                                                -->
                                                <div class="scrollable-vertical max-h-50vh">

                                                    <a 	href="#"
                                                          class="dropdown-item text-truncate js-form-advanced-bulk"
                                                          data-js-form-advanced-bulk-hidden-action-id="#action_today"
                                                          data-js-form-advanced-bulk-hidden-action-value="mark_solved"
                                                          data-js-form-advanced-bulk-container-items="#task_list_today"
                                                          data-js-form-advanced-bulk-required-selected="true"
                                                          data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                          data-js-form-advanced-bulk-required-txt-position="top-center"
                                                          data-js-form-advanced-bulk-required-custom-modal=""
                                                          data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                          data-js-form-advanced-bulk-required-modal-type="success"
                                                          data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                          data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"


                                                          data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                          data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                          data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                          data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY">
                                                        <i class="fi fi-check"></i>
                                                        Set : Solved
                                                    </a>
                                                    <a 	href="#"
                                                          class="dropdown-item text-truncate js-form-advanced-bulk"
                                                          data-js-form-advanced-bulk-hidden-action-id="#action_today"
                                                          data-js-form-advanced-bulk-hidden-action-value="mark_unsolved"
                                                          data-js-form-advanced-bulk-container-items="#task_list_today"
                                                          data-js-form-advanced-bulk-required-selected="true"
                                                          data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                          data-js-form-advanced-bulk-required-txt-position="top-center"
                                                          data-js-form-advanced-bulk-required-custom-modal=""
                                                          data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                          data-js-form-advanced-bulk-required-modal-type="warning"
                                                          data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                          data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"

                                                          data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                          data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                          data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                          data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY">
                                                        <i class="fi fi-close"></i>
                                                        Set : Unsolved
                                                    </a>

                                                    <a 	href="#"
                                                          class="dropdown-item text-truncate js-form-advanced-bulk"
                                                          data-js-form-advanced-bulk-hidden-action-id="#action_today"
                                                          data-js-form-advanced-bulk-hidden-action-value="delete"
                                                          data-js-form-advanced-bulk-container-items="#task_list_today"
                                                          data-js-form-advanced-bulk-required-selected="true"
                                                          data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                          data-js-form-advanced-bulk-required-txt-position="top-center"
                                                          data-js-form-advanced-bulk-required-custom-modal=""
                                                          data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                          data-js-form-advanced-bulk-required-modal-type="danger"
                                                          data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                          data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                          data-js-form-advanced-bulk-required-modal-txt-body-info="Please note: this is a permanent action!"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-yes="Yes, Delete"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                          data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                          data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY">
                                                        <i class="fi fi-thrash text-danger"></i>
                                                        Set : Delete
                                                    </a>

                                                </div>

                                            </div>

                                        </div>
                                        <!-- /SELECTED ITEMS -->

                                    </div>

                                </form>

                            </div>

                            <!-- tab 2 -->
                            <div class="h-100 tab-pane" id="usertab_2" role="tabpanel" aria-labelledby="usertab-2">

                                <!--
                                    PLEASE PAY ATTENTION TO FORM ID : REQUIRED ,
                                    MUST BE UNIQUE AND SPECIFIED TO EACH BUTTON/LINK IN "selected items" AS ATTRIBUTE

                                        data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH"
                                -->
                                <form novalidate="" id="FORM_TASK_LIST_MONTH" method="post" action="../../html_frontend/php/demo.ajax_request.php" class="bs-validate h-100 d-flex align-items-stretch justify-content-lg-between align-items-start flex-column">

                                    <!--

                                        IMPORTANT
                                        The "action" hidden input is updated by "selected items" action
                                            data-js-form-advanced-hidden-action-id="..."
                                            data-js-form-advanced-hidden-action-value="..."

                                        PHP example of data backed processing:

                                            if($_POST['action'] === 'delete') {

                                                foreach($_POST['item_id'] as $item_id) {
                                                    // ... delete $item_id from database
                                                }

                                            }

                                    -->
                                    <input type="hidden" id="action_month" name="action" value=""><!-- value populated by js -->

                                    <!-- task list -->
                                    <div id="task_list_month" class="max-h-500 scrollable-vertical scrollable-styled-dark align-self-baseline h-100 max-h-500 w-100">

                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-danger bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="1">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Check the documentation</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    5 hours ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-secondary-soft bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="2">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Server gzip compression is failing</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    8 hours ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->


                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-warning bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="3">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Retest Smarty and make a list of all bugs</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    1 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-info bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="4">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Fix server headers</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    3 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-success bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="5">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">New niche layout is required</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    5 days ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-primary bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="6">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Check server production logs</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    3 weeks ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->



                                        <!-- item -->
                                        <div class="border-bottom border-light">
                                            <div class="d-flex align-items-center p-3 border-left border-primary bw--3">

                                                <div class="flex-none w--30">
                                                    <label class="form-checkbox form-checkbox-primary form-checkbox-inset">
                                                        <input type="checkbox" name="item_id[]" value="7">
                                                        <i></i>
                                                    </label>
                                                </div>

                                                <div class="flex-fill text-truncate line-height-1">
                                                    <a href="#!" class="text-muted">Check customer new data</a>
                                                    <a href="#!" class="fs--13 d-block text-gray-500">by Mark Dennis</a>
                                                </div>

                                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                                    2 months ago
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /item -->

                                    </div>
                                    <!-- /task list -->


                                    <div class="mt-3">

                                        <!-- SELECTED ITEMS -->
                                        <div class="d-flex align-self-baseline w-100"><!-- using .dropdown, autowidth not working -->

                                            <a href="#" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
														<span class="group-icon">
															<i class="fi fi-dots-vertical-full"></i>
															<i class="fi fi-close"></i>
														</span>
                                                <span>Selected Items</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-clean dropdown-click-ignore max-w-250">

                                                <!--
                                                    buttons attributes : documentation/components-tables.html
                                                -->
                                                <div class="scrollable-vertical max-h-50vh">

                                                    <a 	href="#"
                                                          class="dropdown-item text-truncate js-form-advanced-bulk"
                                                          data-js-form-advanced-bulk-hidden-action-id="#action_month"
                                                          data-js-form-advanced-bulk-hidden-action-value="mark_solved"
                                                          data-js-form-advanced-bulk-container-items="#task_list_month"
                                                          data-js-form-advanced-bulk-required-selected="true"
                                                          data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                          data-js-form-advanced-bulk-required-txt-position="top-center"
                                                          data-js-form-advanced-bulk-required-custom-modal=""
                                                          data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                          data-js-form-advanced-bulk-required-modal-type="success"
                                                          data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                          data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"

                                                          data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                          data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                          data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                          data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH">
                                                        <i class="fi fi-check"></i>
                                                        Set : Solved
                                                    </a>
                                                    <a 	href="#"
                                                          class="dropdown-item text-truncate js-form-advanced-bulk"
                                                          data-js-form-advanced-bulk-hidden-action-id="#action_month"
                                                          data-js-form-advanced-bulk-hidden-action-value="mark_unsolved"
                                                          data-js-form-advanced-bulk-container-items="#task_list_month"
                                                          data-js-form-advanced-bulk-required-selected="true"
                                                          data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                          data-js-form-advanced-bulk-required-txt-position="top-center"
                                                          data-js-form-advanced-bulk-required-custom-modal=""
                                                          data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                          data-js-form-advanced-bulk-required-modal-type="warning"
                                                          data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                          data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                          data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                          data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                          data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                          data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH">
                                                        <i class="fi fi-close"></i>
                                                        Set : Unsolved
                                                    </a>

                                                    <a 	href="#"
                                                          class="dropdown-item text-truncate js-form-advanced-bulk"
                                                          data-js-form-advanced-bulk-hidden-action-id="#action_month"
                                                          data-js-form-advanced-bulk-hidden-action-value="delete"
                                                          data-js-form-advanced-bulk-container-items="#task_list_month"
                                                          data-js-form-advanced-bulk-required-selected="true"
                                                          data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                          data-js-form-advanced-bulk-required-txt-position="top-center"
                                                          data-js-form-advanced-bulk-required-custom-modal=""
                                                          data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                          data-js-form-advanced-bulk-required-modal-type="danger"
                                                          data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                          data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                          data-js-form-advanced-bulk-required-modal-txt-body-info="Please note: this is a permanent action!"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-yes="Yes, Delete"
                                                          data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                          data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                          data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH">
                                                        <i class="fi fi-thrash text-danger"></i>
                                                        Set : Delete
                                                    </a>

                                                </div>

                                            </div>

                                        </div>
                                        <!-- /SELECTED ITEMS -->

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /WIDGET : TASKS -->




                <!-- WIDGET : TICKETS -->
                <div class="col-12 col-xl-4 mb-3">

                    <div class="portlet">

                        <div class="portlet-header">

                            <div class="float-end dropdown">

                                <!-- reload ajax content -->
                                <a href="#!" id="summaryTicketListReloadBtn" aria-label="Reload Content" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
											<span class="group-icon">
												<i class="fi fi-circle-spin"></i>
												<i class="fi fi-circle-spin fi-spin"></i>
											</span>
                                </a>

                                <!-- dropdown -->
                                <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownRecent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fi fi-dots-vertical m-0"></i>
                                </button>

                                <!--

                                    Note: .dropdown-menu-click-update
                                        is the key class to set the link active on click
                                        and close dropdown (if .dropdown-click-ignore is not set)

                                -->
                                <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert dropdown-menu-click-update end-0 mt-2" aria-labelledby="dropdownRecent">

                                    <div class="dropdown-header">
                                        Filter Tickets
                                    </div>

                                    <!--

                                        Note: these are working ajax links!
                                        html_frontend/documentation/plugins-sow-ajax-navigation.html

                                        Both plugins are working together:
                                            SOW : Ajax Navigation
                                            SOW : Ajax Content

                                        data-href used here, instead of href to hide
                                        the link from "open in new tab" actions

                                    -->
                                    <a class="dropdown-item js-ajax"
                                       href="#!"
                                       data-href="_ajax/widget_tickets_recent.html"
                                       data-ajax-target-container="#summaryTicketList"
                                       data-ajax-update-url="false"
                                       data-ajax-show-loading-icon="true"
                                       data-ajax-autoscroll-to-content="false">
                                        Recent
                                    </a>

                                    <a class="dropdown-item js-ajax"
                                       href="#!"
                                       data-href="_ajax/widget_tickets_open.html"
                                       data-ajax-target-container="#summaryTicketList"
                                       data-ajax-update-url="false"
                                       data-ajax-show-loading-icon="true"
                                       data-ajax-autoscroll-to-content="false">
                                        Open
                                    </a>

                                    <a class="dropdown-item js-ajax"
                                       href="#!"
                                       data-href="_ajax/widget_tickets_closed.html"
                                       data-ajax-target-container="#summaryTicketList"
                                       data-ajax-update-url="false"
                                       data-ajax-show-loading-icon="true"
                                       data-ajax-autoscroll-to-content="false">
                                        Cosed
                                    </a>

                                    <small class="p-4 text-gray-500">* working ajax links</small>
                                </div>
                                <!-- /dropdown -->

                            </div>

                            <span class="d-block text-muted text-truncate font-weight-medium">
										Support Tickets
									</span>

                        </div>


                        <!-- content loaded via ajax! -->
                        <div id="summaryTicketList"
                             data-ajax-url="_ajax/widget_tickets_recent.html"
                             data-ajax-btn-reload="#summaryTicketListReloadBtn"
                             class="js-ajax portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

                            <!-- ajax content pushed here -->
                            <div class="text-center p-5"><!-- loader indicator -->
                                <i class="fi fi-circle-spin fi-spin fs--30 text-gray-300"></i>
                            </div>

                        </div>

                        <div class="d-flex align-self-baseline w-100 py-2">
                            <a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
                                <i class="fi fi-arrow-end-slim"></i>
                                <span>View All</span>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- /WIDGET : TICKETS -->



                <!-- WIDGET : LOGS/NOTIFICATIONS -->
                <div class="col-12 col-xl-4 mb-3">

                    <div class="portlet">

                        <div class="portlet-header">

                            <div class="float-end dropdown">

                                <!-- reload ajax content -->
                                <a href="#!" id="summaryNotificationListReloadBtn" aria-label="Reload Content" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
											<span class="group-icon">
												<i class="fi fi-circle-spin"></i>
												<i class="fi fi-circle-spin fi-spin"></i>
											</span>
                                </a>

                                <!-- dropdown -->
                                <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownLog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="js-trigger-text">Recent</span>
                                    <i class="fi fi-arrow-down"></i>
                                </button>

                                <!--

                                    Note: .dropdown-menu-click-update
                                        is the key class to set the link active on click
                                        and close dropdown (if .dropdown-click-ignore is not set)

                                -->
                                <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-click-update dropdown-menu-invert end-0 mt-2" aria-labelledby="dropdownLog">

                                    <div class="dropdown-header">
                                        Filter Notif.
                                    </div>

                                    <!--

                                        Note: these are working ajax links!
                                        html_frontend/documentation/plugins-sow-ajax-navigation.html

                                        Both plugins are working together:
                                            SOW : Ajax Navigation
                                            SOW : Ajax Content

                                        data-href used here, instead of href to hide
                                        the link from "open in new tab" actions

                                        NOTE: .js-ajax-text-update
                                            Used by SOW : Dropdown to update the text
                                            on button trigger! The button must have the same class!

                                    -->
                                    <a class="dropdown-item js-ajax"
                                       href="#!"
                                       data-href="_ajax/widget_notification_recent.html"
                                       data-ajax-target-container="#summaryNotificationList"
                                       data-ajax-update-url="false"
                                       data-ajax-show-loading-icon="true"
                                       data-ajax-autoscroll-to-content="false">
                                        <span class="js-trigger-text">Recent</span>
                                    </a>

                                    <a class="dropdown-item js-ajax"
                                       href="#!"
                                       data-href="_ajax/widget_notification_errors.html"
                                       data-ajax-target-container="#summaryNotificationList"
                                       data-ajax-update-url="false"
                                       data-ajax-show-loading-icon="true"
                                       data-ajax-autoscroll-to-content="false">
                                        <span class="js-trigger-text">Errors</span>
                                    </a>

                                    <a class="dropdown-item js-ajax"
                                       href="#!"
                                       data-href="_ajax/widget_notification_warnings.html"
                                       data-ajax-target-container="#summaryNotificationList"
                                       data-ajax-update-url="false"
                                       data-ajax-show-loading-icon="true"
                                       data-ajax-autoscroll-to-content="false">
                                        <span class="js-trigger-text">Warnings</span>
                                    </a>

                                    <small class="p-4 text-gray-500">* working ajax links</small>
                                </div>
                                <!-- /dropdown -->

                            </div>


                            <span class="d-block text-muted text-truncate font-weight-medium">
										Notifications
									</span>

                        </div>


                        <!-- content loaded via ajax! -->
                        <div id="summaryNotificationList"
                             data-ajax-url="_ajax/widget_notification_recent.html"
                             data-ajax-btn-reload="#summaryNotificationListReloadBtn"
                             class="js-ajax portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

                            <!-- ajax content pushed here -->
                            <div class="text-center p-5"><!-- loader indicator -->
                                <i class="fi fi-circle-spin fi-spin fs--30 text-gray-300"></i>
                            </div>

                        </div>



                        <div class="d-flex align-self-baseline w-100 py-2">
                            <a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
                                <i class="fi fi-arrow-end-slim"></i>
                                <span>View All</span>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- /WIDGET : LOGS/NOTIFICATIONS -->



                <!-- ALERT : UPGRADE -->
                <div class="col-12 mb-3">
                    <div class="bg-white shadow-xs fs--16 p-2 row-pill">

                        <div class="clearfix bg-light p-2 rounded row-pill">
                            <a href="#!" title="Upgrade" aria-label="Upgrade" class="btn btn-pill btn-sm btn-warning py-1 mb-0 float-start transition-hover-end">
                                Upgrade
                            </a>
                            <span class="d-block pt-1 pl-2 pr-2 text-muted text-truncate">
										using 89% of total storage
									</span>
                        </div>

                    </div>
                </div>
                <!-- /ALERT : UPGDARE -->



                <!-- WIDGET : IMPORTS -->
                <div class="col-12 col-xl-8 mb-3">

                    <div class="portlet">

                        <div class="portlet-header">

                            <div class="float-end dropdown">

                                <a href="#!" class="btn btn-sm btn-light px-2 py-1 fs--15 mt--n3">
                                    View All
                                </a>

                            </div>


                            <span class="d-block text-muted text-truncate font-weight-medium">
										Shop Imports
									</span>

                        </div>


                        <!-- content loaded via ajax! -->
                        <div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

                            <!-- item -->
                            <div class="d-flex align-items-center p-3 border-bottom border-light">

                                <div class="flex-none w--40">
                                    <img width="40" height="40" class="img-fluid lazy" data-src="../../html_frontend/demo.files/svg/icons/files/csv.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </div>

                                <div class="flex-fill text-truncate px-3">
                                    <span class="text-muted">384 items imported, 766 updated, 12 ignored</span>
                                    <span class="fs--13 d-block text-gray-500">29 June, 2020 / 18:44</span>
                                </div>

                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end dropdown">

                                    <!-- dropdown -->
                                    <a id="dropdownImport_1" href="#!" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fi fi-dots-vertical m-0"></i>
                                    </a>

                                    <div aria-labelledby="dropdownImport_1" class="prefix-link-icon prefix-icon-dot dropdown-menu mt-2">

                                        <a href="#!" class="dropdown-item">
                                            View Log
                                        </a>

                                        <a href="#!" class="dropdown-item">
                                            Download
                                        </a>

                                    </div>
                                    <!-- /dropdown -->

                                </div>


                            </div>
                            <!-- /item -->



                            <!-- item -->
                            <div class="d-flex align-items-center p-3 border-bottom border-light">

                                <div class="flex-none w--40">
                                    <img width="40" height="40" class="img-fluid lazy" data-src="../../html_frontend/demo.files/svg/icons/files/csv.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </div>

                                <div class="flex-fill text-truncate px-3">
                                    <span class="text-muted">12 items imported, 67 updated, 1 ignored</span>
                                    <span class="fs--13 d-block text-gray-500">15 February, 2020 / 16:51</span>
                                </div>

                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                    <a href="#!">view log</a>
                                </div>

                            </div>
                            <!-- /item -->



                            <!-- item -->
                            <div class="d-flex align-items-center p-3 border-bottom border-light">

                                <div class="flex-none w--40">
                                    <img width="40" height="40" class="img-fluid lazy" data-src="../../html_frontend/demo.files/svg/icons/files/jpg.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </div>

                                <div class="flex-fill text-truncate px-3">
                                    <span class="text-muted">384 images imported to 281 products</span>
                                    <span class="fs--13 d-block text-gray-500">1 February, 2020 / 13:43</span>
                                </div>

                                <div class="w--180 fs--14 text-gray-500 font-weight-light text-align-end">
                                    <a href="#!">view log</a>
                                </div>

                            </div>
                            <!-- /item -->

                        </div>

                        <div class="d-flex align-self-baseline w-100 py-2">
                            <a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
                                <i class="fi fi-arrow-end-slim"></i>
                                <span>View All</span>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- /WIDGET : IMPORTS -->




                <!-- WIDGET : ORDERS -->
                <div class="col-12 col-xl-4 mb-3">

                    <div class="portlet">

                        <div class="portlet-header">

                            <div class="float-end dropdown">

                                <!-- dropdown -->
                                <button type="button" class="dropdown-toggle btn btn-sm btn-soft btn-primary px-2 py-1 fs--15 mt--n3" id="dropdownOrders" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="js-trigger-text">Export</span>
                                    <i class="fi fi-arrow-down"></i>
                                </button>

                                <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2" aria-labelledby="dropdownOrders">

                                    <div class="dropdown-header">
                                        Export Options
                                    </div>

                                    <a href="#!" class="dropdown-item">
                                        Export CSV
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Export XLS
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Export PDF
                                    </a>

                                    <a href="#!" class="dropdown-item">
                                        Print
                                    </a>

                                </div>
                                <!-- /dropdown -->

                            </div>

                            <span class="d-block text-muted text-truncate font-weight-medium">
										Orders
									</span>

                        </div>


                        <!-- content loaded via ajax! -->
                        <div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

                            <!-- ORDER -->
                            <a href="#!" class="clearfix d-block dropdown-item font-weight-medium p-3 rounded overflow-hidden border-bottom border-light">

                                <!-- badge -->
                                <span class="float-end font-weight-normal text-danger">$2155</span>

                                <!-- icon -->
                                <i class="text-success fi fi-cart-1 d-middle float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                <!-- products -->
                                <p class="fs--14 m-0 text-truncate font-weight-normal">
                                    2 items
                                </p>

                                <!-- date -->
                                <small class="text-muted d-block fs--11">
                                    3 hours ago
                                </small>

                            </a>
                            <!-- /ORDER -->



                            <!-- ORDER -->
                            <a href="#!" class="clearfix d-block dropdown-item font-weight-medium p-3 rounded overflow-hidden border-bottom border-light">

                                <!-- badge -->
                                <span class="float-end font-weight-normal text-danger">$984.99</span>

                                <!-- icon -->
                                <i class="text-success fi fi-cart-1 d-middle float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                <!-- products -->
                                <p class="fs--14 m-0 text-truncate font-weight-normal">
                                    3 items
                                </p>

                                <!-- date -->
                                <small class="text-muted d-block fs--11">
                                    8 hours ago
                                </small>

                            </a>
                            <!-- /ORDER -->



                            <!-- ORDER -->
                            <a href="#!" class="clearfix d-block dropdown-item font-weight-medium p-3 rounded overflow-hidden border-bottom border-light">

                                <!-- badge -->
                                <span class="float-end font-weight-normal text-danger">$2155</span>

                                <!-- icon -->
                                <i class="text-warning fi fi-cart-1 d-middle float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                <!-- products -->
                                <p class="fs--14 m-0 text-truncate font-weight-normal">
                                    2 products
                                </p>

                                <!-- date -->
                                <small class="text-warning d-block fs--11">
                                    12 hours ago
                                </small>

                            </a>
                            <!-- /ORDER -->



                            <!-- ORDER -->
                            <a href="#!" class="clearfix d-block dropdown-item font-weight-medium p-3 rounded overflow-hidden border-bottom border-light">

                                <!-- badge -->
                                <span class="float-end font-weight-normal text-danger">$2155</span>

                                <!-- icon -->
                                <i class="text-danger fi fi-cart-1 d-middle float-start fs--20 bg-light w--40 h--40 rounded-circle text-center"></i>

                                <!-- products -->
                                <p class="fs--14 m-0 text-truncate font-weight-normal">
                                    2 products
                                </p>

                                <!-- date -->
                                <small class="text-danger d-block fs--11">
                                    1 day ago
                                </small>

                            </a>
                            <!-- /ORDER -->


                        </div>


                        <div class="d-flex align-self-baseline w-100 py-2">
                            <a href="#!" class="btn btn-sm text-gray-500 b-0 fs--16 shadow-none font-weight-light">
                                <i class="fi fi-arrow-end-slim"></i>
                                <span>View All</span>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- /WIDGET : ORDERS -->

            </div>
            <!-- /WIDGETS -->


        </div>
        <!-- /MIDDLE -->

    </div>



    <!-- FOOTER -->
    <footer id="footer" class="aside-primary text-white">
        <div class="p-3 fs--14">
مراقب التعليم المتوسط لمنطقة الفروانية





        </div>
    </footer>
    <!-- /FOOTER -->


</div><!-- /#wrapper -->



<script src="{{asset('js/core.min.js')}}"></script>


<!--

    [SOW Ajax Navigation Plugin] [AJAX ONLY, IF USED]
    If you have specific page js files, wrap them inside #page_js_files
    Ajax Navigation will use them for this page!
    This way you can load this page in a normal way and/or via ajax.
    (you can change/add more containers in sow.config.js)

    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    NOTE: This is mostly for frontend, full ajax navigation!
    Admin Panels use a backend, so the content should be served without
    menu, header, etc! Else, the ajax has no reason to be used because will
    not minimize server load!

    /documentation/plugins-sow-ajax-navigation.html
    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

-->

</body>
</html>
