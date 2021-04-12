




<div class="container-fluid position-relative">

    <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ __('مراقب المرحلة المتوسطة بالفروانية') }}

        </a>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول ') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('مستخدم جديد') }}</a>
                </li>
            @endif

        @else

        <div class="align-items-start">

            <!--
                sidebar toggler
            -->

            <!-- TOP NAVIGATION TOGGLER -->
            <button class="navbar-toggler shadow-xs h-auto w-auto m-0 btn btn-sm bg-white rounded-circle position-absolute end-0 mt-4 mb-1 ml--20 mr--20 z-index-2 d-none d-inline-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fi fi-bars"></i>
            </button>


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




                <!--  -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavHome">
                        <i class="fi fi-users"></i>المعلمون
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
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavHome">
                        <i class="fi fi-task-list"></i> الفصول
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
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavHome">
                        <i class="fi fi-graph"></i>الغياب اليومي
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

                    <span class="fs--14 d-none d-sm-inline-block font-weight-medium">{{Auth::user()->name}}</span>
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
                        <span class="d-block font-weight-medium text-truncate fs--16">{{Auth::user()->name}}</span>
                        <span class="d-block text-muted font-weight-medium text-truncate">{{Auth::user()->email}}</span>

                    </div>

                    <div class="dropdown-divider"></div>



                    <a href="#!" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore font-weight-medium pt-3 pb-3">

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();

       document.getElementById('logout-form').submit();">
                           تسجيل الخروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </a>
                </div>

            </li>

        </ul>
        <!-- /OPTIONS -->


    </nav>



    <!-- /TOP NAVIGATION TOGGLER -->
    @endguest
</div>
<!-- /NAVBAR -->
<!-- /NAVBAR -->






