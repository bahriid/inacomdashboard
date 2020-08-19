<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/loader.js')}}"></script>
    <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="assets/img/90x90.jpg"> <span class="navbar-brand-name">CORK</span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/ca.png" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="de" data-value="de" href="javascript:void(0);"><img src="assets/img/de.png" class="flag-width" alt="flag"> German</a>
                            <a class="dropdown-item" data-img-value="jp" data-value="jp" href="javascript:void(0);"><img src="assets/img/jp.png" class="flag-width" alt="flag"> Japanese</a>
                            <a class="dropdown-item" data-img-value="fr" data-value="fr" href="javascript:void(0);"><img src="assets/img/fr.png" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="en" href="javascript:void(0);"><img src="assets/img/ca.png" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute animated fadeInUp" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">KY</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Kara Young</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">
                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">DA</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Daisy Anderson</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">OG</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Oscar Garner</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="assets/img/90x90.jpg" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6><span>Hi,</span> Alan</h6>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="user_profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_login.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>
    
            <!--  BEGIN TOPBAR  -->
            <div class="topbar-nav header navbar" role="banner">
                <nav id="topbar">
                    <ul class="navbar-nav theme-brand flex-row  text-center">
                        <li class="nav-item theme-logo">
                            <a href="index.html">
                                <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                            </a>
                        </li>
                        <li class="nav-item theme-text">
                            <a href="index.html" class="nav-link"> CORK </a>
                        </li>
                    </ul>
    
                    <ul class="list-unstyled menu-categories" id="topAccordion">
    
                        <li class="menu single-menu active">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span>Dashboard</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                                <li>
                                    <a href="index.html"> Analytics </a>
                                </li>
                                <li class="active">
                                    <a href="index2.html"> Sales </a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu single-menu">
                            <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                    <span>Apps</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                                <li>
                                    <a href="apps_chat.html"> Chat </a>
                                </li>
                                <li>
                                    <a href="apps_mailbox.html"> Mailbox </a>
                                </li>
                                <li>
                                    <a href="apps_todoList.html"> Todo List </a>
                                </li>
                                <li>
                                    <a href="apps_notes.html">Notes</a>
                                </li>
                                <li>
                                    <a href="apps_scrumboard.html">Task Board</a>
                                </li>
                                <li>
                                    <a href="apps_contacts.html">Contacts</a>
                                </li>
                                <li>
                                    <a href="apps_invoice.html">Invoice List</a>
                                </li>
                                <li>
                                    <a href="apps_calendar.html"> Calendar</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="menu single-menu">
                            <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    <span>Components</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                                <li>
                                    <a href="component_tabs.html"> Tabs </a>
                                </li>
                                <li>
                                    <a href="component_accordion.html"> Accordions  </a>
                                </li>
                                <li>
                                    <a href="component_modal.html"> Modals </a>
                                </li>                            
                                <li>
                                    <a href="component_cards.html"> Cards </a>
                                </li>
                                <li>
                                    <a href="component_bootstrap_carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="component_blockui.html"> Block UI </a>
                                </li>
                                <li>
                                    <a href="component_countdown.html"> Countdown </a>
                                </li>
                                <li>
                                    <a href="component_counter.html"> Counter </a>
                                </li>
                                <li>
                                    <a href="component_sweetalert.html"> Sweet Alerts </a>
                                </li>
                                <li>
                                    <a href="component_timeline.html"> Timeline </a>
                                </li>
                                <li>
                                    <a href="component_snackbar.html"> Notifications </a>
                                </li>
                                <li>
                                    <a href="component_session_timeout.html"> Session Timeout </a>
                                </li>
                                <li>
                                    <a href="component_media_object.html"> Media Object </a>
                                </li>
                                <li>
                                    <a href="component_list_group.html"> List Group </a>
                                </li>
                                <li>
                                    <a href="component_pricing_table.html"> Pricing Tables </a>
                                </li>
                                <li>
                                    <a href="component_lightbox.html"> Lightbox </a>
                                </li>
                            </ul>
                        </li>
    
    
                        <li class="menu single-menu">
                            <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                    <span>UI Kit</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                                <li>
                                    <a href="ui_alerts.html"> Alerts </a>
                                </li>
                                <li>
                                    <a href="ui_avatar.html"> Avatar </a>
                                </li>
                                <li>
                                    <a href="ui_badges.html"> Badges </a>
                                </li>
                                <li>
                                    <a href="ui_breadcrumbs.html"> Breadcrumbs </a>
                                </li>                            
                                <li>
                                    <a href="ui_buttons.html"> Buttons </a>
                                </li>
                                <li>
                                    <a href="ui_buttons_group.html"> Button Groups </a>
                                </li>
                                <li>
                                    <a href="ui_color_library.html"> Color Library </a>
                                </li>
                                <li>
                                    <a href="ui_dropdown.html"> Dropdown </a>
                                </li>
                                <li>
                                    <a href="ui_infobox.html"> Infobox </a>
                                </li>
                                <li>
                                    <a href="ui_jumbotron.html"> Jumbotron </a>
                                </li>
                                <li>
                                    <a href="ui_loader.html"> Loader </a>
                                </li>
                                <li>
                                    <a href="ui_pagination.html"> Pagination </a>
                                </li>
                                <li>
                                    <a href="ui_popovers.html"> Popovers </a>
                                </li>
                                <li>
                                    <a href="ui_progress_bar.html"> Progress Bar </a>
                                </li>
                                <li>
                                    <a href="ui_search.html"> Search </a>
                                </li>
                                <li>
                                    <a href="ui_tooltips.html"> Tooltips </a>
                                </li>
                                <li>
                                    <a href="ui_treeview.html"> Treeview </a>
                                </li>
                                <li>
                                    <a href="ui_typography.html"> Typography </a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu single-menu">
                            <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                    <span>Tables</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                                <li>
                                    <a href="table_basic.html"> Basic </a>
                                </li>
                                <li class="sub-sub-submenu-list">
                                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                                        <li>
                                            <a href="table_dt_basic.html"> Basic </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_basic-light.html"> Light </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                        </li>
                                        <li>
                                            <a href="table_dt_alternative_pagination.html"> Alt. Pagination</a>
                                        </li>
                                        <li>
                                            <a href="table_dt_custom.html"> Custom </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_range_search.html"> Range Search </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_html5.html"> HTML5 Export </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                        </li>
                                        <li>
                                            <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu single-menu">
                            <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                    <span>Forms</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                                <li>
                                    <a href="form_bootstrap_basic.html"> Basic </a>
                                </li>
                                <li>
                                    <a href="form_input_group_basic.html"> Input Group </a>
                                </li>
                                <li>
                                    <a href="form_layouts.html"> Layouts </a>
                                </li>
                                <li>
                                    <a href="form_validation.html"> Validation </a>
                                </li>
                                <li>
                                    <a href="form_input_mask.html"> Input Mask </a>
                                </li>
                                <li>
                                    <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                                </li>
                                <li>
                                    <a href="form_select2.html"> Select2 </a>
                                </li>
                                <li>
                                    <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                                </li>
                                <li>
                                    <a href="form_maxlength.html"> Maxlength </a>
                                </li>
                                <li>
                                    <a href="form_checkbox_radio.html"> Checkbox &amp; Radio </a>
                                </li>
                                <li>
                                    <a href="form_switches.html"> Switches </a>
                                </li>
                                <li>
                                    <a href="form_wizard.html"> Wizards </a>
                                </li>
                                <li>
                                    <a href="form_fileupload.html"> File Upload </a>
                                </li>
                                <li>
                                    <a href="form_quill.html"> Quill Editor </a>
                                </li>
                                <li>
                                    <a href="form_markdown.html"> Markdown Editor </a>
                                </li>
                                <li>
                                    <a href="form_date_range_picker.html"> Date &amp; Range Picker </a>
                                </li>
                                <li>
                                    <a href="form_clipboard.html"> Clipboard </a>
                                </li>
                                <li>
                                    <a href="form_typeahead.html"> Typeahead </a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu single-menu">
                            <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                    <span>Pages</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                                <li>
                                    <a href="pages_helpdesk.html"> Helpdesk </a>
                                </li>
                                <li>
                                    <a href="pages_contact_us.html"> Contact Form </a>
                                </li>
                                <li>
                                    <a href="pages_faq.html"> FAQ </a>
                                </li>
                                <li>
                                    <a href="pages_faq2.html"> FAQ 2 </a>
                                </li>
                                <li>
                                    <a href="pages_privacy.html"> Privacy Policy </a>
                                </li>
                                <li>
                                    <a href="pages_coming_soon.html"> Coming Soon </a>
                                </li>
                                <li>
                                    <a href="user_profile.html"> Profile </a>
                                </li>
                                <li>
                                    <a href="user_account_setting.html"> Account Settings </a>
                                </li>
                                <li class="sub-sub-submenu-list">
                                    <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                        <li>
                                            <a href="pages_error404.html"> 404 </a>
                                        </li>
                                        <li>
                                            <a href="pages_error500.html"> 500 </a>
                                        </li>
                                        <li>
                                            <a href="pages_error503.html"> 503 </a>
                                        </li>
                                        <li>
                                            <a href="pages_maintenence.html"> Maintanence </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-sub-submenu-list">
                                    <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page"> 
                                        <li>
                                            <a href="auth_login.html"> Login </a>
                                        </li>
                                        <li>
                                            <a href="auth_login_boxed.html"> Login Boxed </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-sub-submenu-list">
                                    <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page"> 
                                        <li>
                                            <a href="auth_register.html"> Register </a>
                                        </li>
                                        <li>
                                            <a href="auth_register_boxed.html"> Register Boxed </a>
                                        </li>
                                    </ul>
                                </li>
    
                                <li class="sub-sub-submenu-list">
                                    <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page"> 
                                        <li>
                                            <a href="auth_pass_recovery.html"> Recover ID </a>
                                        </li>
                                        <li>
                                            <a href="auth_pass_recovery_boxed.html"> Recover ID Boxed </a>
                                        </li>
                                    </ul>
                                </li>
    
                                <li class="sub-sub-submenu-list">
                                    <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page"> 
                                        <li>
                                            <a href="auth_lockscreen.html"> Unlock </a>
                                        </li>
                                        <li>
                                            <a href="auth_lockscreen_boxed.html"> Unlock Boxed </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
    
                        <li class="menu single-menu">
                            <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                    <span>More</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                                <li>
                                    <a href="dragndrop_dragula.html"> Drag and Drop</a>
                                </li>
                                <li>
                                    <a href="widgets.html"> Widgets </a>
                                </li>
                                <li>
                                    <a href="map_jvector.html"> Vector Maps</a>
                                </li>
                                <li>
                                    <a href="charts_apex.html"> Charts </a>
                                </li>
                                <li>
                                    <a href="fonticons.html"> Font Icons </a>
                                </li>
                                <li class="sub-sub-submenu-list">
                                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Starter Kit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                    <ul class="collapse list-unstyled sub-submenu eq-animated eq-fadeInUp" id="starter-kit" data-parent="#more">
                                        <li>
                                            <a href="starter_kit_blank_page.html"> Blank Page </a>
                                        </li>
                                        <li>
                                            <a href="starter_kit_breadcrumb.html"> Breadcrumb </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../../documentation/index.html"> Documentation </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--  END TOPBAR  -->

            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="layout-top-spacing">

                        <div class="row">

                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="widget widget-chart-one">
                                    <div class="widget-heading">
                                        <h5 class="">Transaction per Day in a Week</h5>
                                    </div>
        
                                    <div class="widget-content">
                                        <div class="tabs tab-content">
                                            <div id="content_1" class="tabcontent"> 
                                                <div id="revenueMonthly"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                var days = <?php echo json_encode($days); ?>;
                                var options1 = {
                                    chart: {
                                        fontFamily: 'Quicksand, sans-serif',
                                        height: 350,
                                        type: 'area',
                                        zoom: {
                                            enabled: false
                                        },
                                        dropShadow: {
                                        enabled: true,
                                        opacity: 0.3,
                                        blur: 5,
                                        left: -7,
                                        top: 22
                                        },
                                        toolbar: {
                                        show: false
                                        },
                                        events: {
                                        mounted: function(ctx, config) {
                                            const highest1 = ctx.getHighestValueInSeries(0);

                                            ctx.addPointAnnotation({
                                            x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
                                            y: highest1,
                                            label: {
                                                style: {
                                                cssClass: 'd-none'
                                                }
                                            },
                                            customSVG: {
                                                SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                                cssClass: undefined,
                                                offsetX: -8,
                                                offsetY: 5
                                            }
                                            })
                                        },
                                        }
                                    },
                                    colors: ['#1b55e2', '#e7515a'],
                                    dataLabels: {
                                        enabled: false
                                    },
                                    markers: {
                                        discrete: [{
                                        seriesIndex: 0,
                                        dataPointIndex: 7,
                                        fillColor: '#000',
                                        strokeColor: '#000',
                                        size: 5
                                    }, {
                                        seriesIndex: 2,
                                        dataPointIndex: 11,
                                        fillColor: '#000',
                                        strokeColor: '#000',
                                        size: 4
                                    }]
                                    },
                                    // subtitle: {
                                    //     text: 'Total Profit',
                                    //     align: 'left',
                                    //     margin: 0,
                                    //     offsetX: -10,
                                    //     offsetY: 35,
                                    //     floating: false,
                                    //     style: {
                                    //     fontSize: '14px',
                                    //     color:  '#888ea8'
                                    //     }
                                    // },
                                    title: {
                                        text: '<?php echo ($sum_array); ?> Users',
                                        align: 'left',
                                        margin: 0,
                                        offsetX: -10,
                                        offsetY: 0,
                                        floating: false,
                                        style: {
                                        fontSize: '25px',
                                        color:  '#bfc9d4'
                                        },
                                    },
                                    stroke: {
                                        show: true,
                                        curve: 'smooth',
                                        width: 2,
                                        lineCap: 'square'
                                    },
                                    series: [{
                                        name: 'Income',
                                        data: {{$sale_count_data}}
                                    }],
                                    labels: <?php echo ($days); ?>,
                                    xaxis: {
                                        axisBorder: {
                                        show: false
                                        },
                                        axisTicks: {
                                        show: false
                                        },
                                        crosshairs: {
                                        show: true
                                        },
                                        labels: {
                                        offsetX: 0,
                                        offsetY: 5,
                                        style: {
                                            fontSize: '12px',
                                            fontFamily: 'Quicksand, sans-serif',
                                            cssClass: 'apexcharts-xaxis-title',
                                        },
                                        }
                                    },
                                    yaxis: {
                                        labels: {
                                        formatter: function(value, index) {
                                            return value
                                        },
                                        offsetX: -22,
                                        offsetY: 0,
                                        style: {
                                            fontSize: '12px',
                                            fontFamily: 'Quicksand, sans-serif',
                                            cssClass: 'apexcharts-yaxis-title',
                                        },
                                        }
                                    },
                                    grid: {
                                        borderColor: '#191e3a',
                                        strokeDashArray: 5,
                                        xaxis: {
                                            lines: {
                                                show: true
                                            }
                                        },   
                                        yaxis: {
                                            lines: {
                                                show: false,
                                            }
                                        },
                                        padding: {
                                        top: 0,
                                        right: 0,
                                        bottom: 0,
                                        left: -10
                                        }, 
                                    }, 
                                    legend: {
                                        position: 'top',
                                        horizontalAlign: 'right',
                                        offsetY: -50,
                                        fontSize: '16px',
                                        fontFamily: 'Quicksand, sans-serif',
                                        markers: {
                                        width: 10,
                                        height: 10,
                                        strokeWidth: 0,
                                        strokeColor: '#fff',
                                        fillColors: undefined,
                                        radius: 12,
                                        onClick: undefined,
                                        offsetX: 0,
                                        offsetY: 0
                                        },    
                                        itemMargin: {
                                        horizontal: 0,
                                        vertical: 20
                                        }
                                    },
                                    tooltip: {
                                        theme: 'dark',
                                        marker: {
                                        show: true,
                                        },
                                        x: {
                                        show: false,
                                        }
                                    },
                                    fill: {
                                        type:"gradient",
                                        gradient: {
                                            type: "vertical",
                                            shadeIntensity: 1,
                                            inverseColors: !1,
                                            opacityFrom: .28,
                                            opacityTo: .05,
                                            stops: [45, 100]
                                        }
                                    },
                                    responsive: [{
                                        breakpoint: 575,
                                        options: {
                                        legend: {
                                            offsetY: -30,
                                        },
                                        },
                                    }]
                                }
                                /*
                                    ================================
                                        Revenue Monthly | Render
                                    ================================
                                */
                                var chart1 = new ApexCharts(
                                    document.querySelector("#revenueMonthly"),
                                    options1
                                );

                                chart1.render();
                                /*
                                    =================================
                                        Revenue Monthly | Options
                                    =================================
                                */

                            </script>

                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="widget widget-chart-three">
                                    <div class="widget-heading">
                                        <div class="">
                                            <h5 class="">Weekly User Registered</h5>
                                        </div>
                                    </div>
        
                                    <div class="widget-content">
                                        <div id="uniqueVisits"></div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                /*
                                    ===================================
                                        Unique Visitors | Options
                                    ===================================
                                */

                                var d_1options1 = {
                                chart: {
                                    height: 350,
                                    type: 'bar',
                                    toolbar: {
                                        show: false,
                                    },
                                    dropShadow: {
                                        enabled: true,
                                        top: 1,
                                        left: 1,
                                        blur: 1,
                                        color: '#515365',
                                        opacity: 0.3,
                                    }
                                },
                                colors: ['#5c1ac3', '#ffbb44'],
                                plotOptions: {
                                    bar: {
                                        horizontal: false,
                                        columnWidth: '55%',
                                        endingShape: 'rounded'  
                                    },
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                legend: {
                                        position: 'bottom',
                                        horizontalAlign: 'center',
                                        fontSize: '14px',
                                        markers: {
                                        width: 10,
                                        height: 10,
                                        },
                                        itemMargin: {
                                        horizontal: 0,
                                        vertical: 8
                                        }
                                },
                                grid: {
                                    borderColor: '#191e3a',
                                },
                                stroke: {
                                    show: true,
                                    width: 2,
                                    colors: ['transparent']
                                },
                                series: [{
                                    name: 'Direct',
                                    data: [58, 44, 55, 57, 56, 61, 58]
                                }],
                                xaxis: {
                                    categories: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
                                },
                                fill: {
                                    type: 'gradient',
                                    gradient: {
                                    shade: 'dark',
                                    type: 'vertical',
                                    shadeIntensity: 0.3,
                                    inverseColors: false,
                                    opacityFrom: 1,
                                    opacityTo: 0.8,
                                    stops: [0, 100]
                                    }
                                },
                                tooltip: {
                                    theme: 'dark',
                                    y: {
                                        formatter: function (val) {
                                            return val
                                        }
                                    }
                                }
                                }
                                /*
                                    ===================================
                                        Unique Visitors | Script
                                    ===================================
                                */

                                var d_1C_3 = new ApexCharts(
                                    document.querySelector("#uniqueVisits"),
                                    d_1options1
                                );
                                d_1C_3.render();
                            </script>
                        </div>

                        <div class="row">

                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="row widget-statistic">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="widget">
                                        <div class="card-body">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                            </div>
                                            <h5 class="card-title">Simple</h5>
                                            <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="widget">
                                        <div class="card-body">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                            </div>
                                            <h5 class="card-title">Simple</h5>
                                            <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-account-invoice-one">

                                <div class="widget-heading">
                                    <h5 class="">User Registered</h5>
                                </div>
    
                                <div class="widget-content">
                                    <div class="invoice-box">
                                        
                                        <div class="acc-total-info">
                                            <h5>Total</h5>
                                            <p class="acc-amount">1500K</p>
                                        </div>
    
                                        <div class="inv-detail">                                        
                                            <div class="info-detail-1">
                                                <p>History</p>
                                            </div>
                                            <div class="info-detail-2">
                                                <p>July</p>
                                                <p>190K</p>
                                            </div>
                                            <div class="info-detail-3">
                                                <p>June</p>
                                                <p>190K</p>
                                            </div>
                                            <div class="info-detail-4">
                                                <p>May</p>
                                                <p>190K</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="widget widget-activity-four">

                                <div class="widget-heading">
                                    <h5 class="">Recent Transaction</h5>
                                </div>
    
                                <div class="widget-content">
    
                                    <div class="mt-container mx-auto">
                                        <div class="timeline-line">
                                            
                                            <div class="item-timeline  timeline-danger">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Backup <span>Files EOD</span></p>
                                                    <span class="badge badge-danger">Pending</span>
                                                    <p class="t-time">14:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-dark">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                                    <span class="badge badge-success">Completed</span>
                                                    <p class="t-time">16:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                                    <span class="badge badge-primary">In progress</span>
                                                    <p class="t-time">17:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-secondary">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Rebooted Server</p>
                                                    <span class="badge badge-success">Completed</span>
                                                    <p class="t-time">17:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Send contract details to Freelancer</p>
                                                    <span class="badge badge-danger">Pending</span>
                                                    <p class="t-time">18:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-dark">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Kelly want to increase the time of the project.</p>
                                                    <span class="badge badge-primary">In Progress</span>
                                                    <p class="t-time">19:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-success">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Server down for maintanence</p>
                                                    <span class="badge badge-success">Completed</span>
                                                    <p class="t-time">19:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-secondary">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Malicious link detected</p>
                                                    <span class="badge badge-warning">Block</span>
                                                    <p class="t-time">20:00</p>
                                                </div>
                                            </div>
    
                                            <div class="item-timeline  timeline-warning">
                                                <div class="t-dot" data-original-title="" title="">
                                                </div>
                                                <div class="t-text">
                                                    <p>Rebooted Server</p>
                                                    <span class="badge badge-success">Completed</span>
                                                    <p class="t-time">23:00</p>
                                                </div>
                                            </div>
    
                                        </div>                                    
                                    </div>
    
                                    <div class="tm-action-btn">
                                        <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                
                    </div>
                </div> 
            </div>            
        </div>    






    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

</body>
</html>    