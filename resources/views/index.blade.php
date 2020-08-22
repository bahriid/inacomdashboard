<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('assets/js/loader.js')}}"></script>
        <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    </head>

    <body class="alt-menu sidebar-noneoverflow">
        <!-- BEGIN LOADER -->
        <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <div class="header-container">
            <header class="header navbar navbar-expand-sm">

                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg></a>

                <div class="nav-logo align-self-center">
                    <a class="navbar-brand" href="index.html"><span
                            class="navbar-brand-name">inacom.</span><span
                            class="navbar-brand-name2">id</span></a>
                </div>

                <ul class="navbar-item flex-row mr-auto">
                    <li class="nav-item align-self-center search-animated">
                        <form class="form-inline search-full form-inline search" role="search">
                            <div class="search-bar">
                                <input type="text" class="form-control search-form-control  ml-lg-auto"
                                    placeholder="Search...">
                            </div>
                        </form>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-search toggle-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </li>
                </ul>

                <ul class="navbar-item flex-row nav-dropdowns">
                    <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media">
                                {{-- <img src="assets/img/90x90.jpg" class="img-fluid" alt="admin-profile"> --}}
                                <div class="media-body align-self-center">
                                    <h6><span>Hi,</span> Admin</h6>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu position-absolute animated fadeInUp"
                            aria-labelledby="user-profile-dropdown">
                            <div class="">
                                <div class="dropdown-item">
                                    <a class="" href="user_profile.html"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg> My Profile</a>
                                </div>
                                <div class="dropdown-item">
                                    <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-inbox">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path
                                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                            </path>
                                        </svg> Inbox</a>
                                </div>
                                <div class="dropdown-item">
                                    <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg> Lock Screen</a>
                                </div>
                                <div class="dropdown-item">
                                    <a class="" href="auth_login.html"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg> Sign Out</a>
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
                    <ul class="list-unstyled menu-categories" id="topAccordion">

                        <li class="menu single-menu active mx-auto">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    <span>Dashboard</span>
                                </div>
                            </a>
                        </li>

                        <li class="menu single-menu active mx-auto">
                            <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-cpu">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <rect x="9" y="9" width="6" height="6"></rect>
                                        <line x1="9" y1="1" x2="9" y2="4"></line>
                                        <line x1="15" y1="1" x2="15" y2="4"></line>
                                        <line x1="9" y1="20" x2="9" y2="23"></line>
                                        <line x1="15" y1="20" x2="15" y2="23"></line>
                                        <line x1="20" y1="9" x2="23" y2="9"></line>
                                        <line x1="20" y1="14" x2="23" y2="14"></line>
                                        <line x1="1" y1="9" x2="4" y2="9"></line>
                                        <line x1="1" y1="14" x2="4" y2="14"></line>
                                    </svg>
                                    <span>Lihat Pesanan</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--  END TOPBAR  -->

            <div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="layout-top-spacing">


                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                <li data-target="#multi-item-example" data-slide-to="1"></li>
                                <li data-target="#multi-item-example" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <!--  BEGIN CONTENT PART  -->


                                    <div class="row">

                                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="widget2 widget-chart-one">
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
                                            var options1 = {
                                                chart: {
                                                    fontFamily: 'Quicksand, sans-serif',
                                                    height: 330,
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
                                                            SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#E71A27" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
                                                            cssClass: undefined,
                                                            offsetX: -8,
                                                            offsetY: 5
                                                        }
                                                        })
                                                    },
                                                    }
                                                },
                                                colors: ['#FD8610', '#e7515a'],
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
                                                    text: '<?php echo ($transaction_sum); ?> Users',
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
                                                    name: 'Users',
                                                    data: {{$transaction_count_data}}
                                                }],
                                                labels: <?php echo ($transaction_days); ?>,
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
                                                            show: false
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
                                            <script>
                                                /*
                                                    ===================================
                                                        Unique Visitors | Options
                                                    ===================================
                                                */
    
                                                var d_1options1 = {
                                                chart: {
                                                    height: 330,
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
                                                colors: ['#FD8610', '#ffbb44'],
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
                                                    data: {{$user_count_data}}
                                                }],
                                                xaxis: {
                                                    categories: <?php echo ($user_days); ?>,
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

                                    </div>

                                    <div class="row">

                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="row widget-statistic">

                                                <div
                                                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                    <div class="widget-one">
                                                        <div class="widget-content">
                                                            <div class="w-numeric-value">
                                                                <div class="w-icon">
                                                                    <svg width="82" height="91" viewBox="0 0 82 91"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g filter="url(#filter0_d)">
                                                                            <path d="M59 34.592L23 13.832"
                                                                                stroke="white" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M77 60.9918V28.9918C76.9986 27.5889 76.6282 26.211 75.9262 24.9964C75.2241 23.7819 74.2149 22.7732 73 22.0718L45 6.0718C43.7838 5.36965 42.4043 5 41 5C39.5957 5 38.2162 5.36965 37 6.0718L9 22.0718C7.78505 22.7732 6.77592 23.7819 6.07385 24.9964C5.37177 26.211 5.00144 27.5889 5 28.9918V60.9918C5.00144 62.3947 5.37177 63.7726 6.07385 64.9871C6.77592 66.2017 7.78505 67.2103 9 67.9118L37 83.9118C38.2162 84.6139 39.5957 84.9836 41 84.9836C42.4043 84.9836 43.7838 84.6139 45 83.9118L73 67.9118C74.2149 67.2103 75.2241 66.2017 75.9262 64.9871C76.6282 63.7726 76.9986 62.3947 77 60.9918Z"
                                                                                stroke="white" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M6.07996 24.832L41 45.032L75.92 24.832"
                                                                                stroke="white" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M41 85.3122V44.9922" stroke="white"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <filter id="filter0_d" x="0" y="0"
                                                                                width="82" height="90.3122"
                                                                                filterUnits="userSpaceOnUse"
                                                                                color-interpolation-filters="sRGB">
                                                                                <feFlood flood-opacity="0"
                                                                                    result="BackgroundImageFix" />
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                    type="matrix"
                                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                                                <feOffset />
                                                                                <feGaussianBlur stdDeviation="2" />
                                                                                <feColorMatrix type="matrix"
                                                                                    values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                                                                <feBlend mode="normal"
                                                                                    in2="BackgroundImageFix"
                                                                                    result="effect1_dropShadow" />
                                                                                <feBlend mode="normal"
                                                                                    in="SourceGraphic"
                                                                                    in2="effect1_dropShadow"
                                                                                    result="shape" />
                                                                            </filter>
                                                                        </defs>
                                                                    </svg>

                                                                </div>
                                                                <div class="w-content">
                                                                    <span class="w-value">112,678</span>
                                                                    <span class="w-numeric-title">SKU Product</span>
                                                                </div>
                                                            </div>
                                                            <div class="w-chart">
                                                                <div id="total-orders"></div>
                                                            </div>
                                                            <script>
                                                                var d_2options2 = {
                                                                        chart: {
                                                                            id: 'sparkline1',
                                                                            group: 'sparklines',
                                                                            type: 'area',
                                                                            height: 185,
                                                                            sparkline: {
                                                                            enabled: true
                                                                            },
                                                                        },
                                                                        stroke: {
                                                                            curve: 'smooth',
                                                                            width: 2
                                                                        },
                                                                        // fill: {
                                                                        //     opacity: 1,
                                                                        // },
                                                                        series: [{
                                                                            name: 'Sales',
                                                                            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
                                                                        }],
                                                                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                                                                        yaxis: {
                                                                            min: 0
                                                                        },
                                                                        grid: {
                                                                            padding: {
                                                                            top: 100,
                                                                            right: 0,
                                                                            
                                                                            left: 0
                                                                            }, 
                                                                        },
                                                                        fill: {
                                                                            type:"gradient",
                                                                            gradient: {
                                                                                type: "vertical",
                                                                                shadeIntensity: 1,
                                                                                inverseColors: !1,
                                                                                opacityFrom: .40,
                                                                                opacityTo: .05,
                                                                                stops: [45, 100]
                                                                            }
                                                                        },
                                                                        tooltip: {
                                                                            x: {
                                                                            show: false,
                                                                            },
                                                                            theme: 'dark'
                                                                        },
                                                                        colors: ['#E71A27']
                                                                        }
                                                                
                                                                        var d_2C_22 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
                                                                        d_2C_22.render();
                                                                    
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                    <div class="widget-one2">
                                                        <div class="widget-content">
                                                            <div class="w-numeric-value">
                                                                <div class="w-icon">
                                                                    <svg width="70" height="85" viewBox="0 0 70 85"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g filter="url(#filter0_d)">
                                                                            <path
                                                                                d="M42.5 5H12.5C10.5109 5 8.60322 5.79018 7.1967 7.1967C5.79018 8.60322 5 10.5109 5 12.5V72.5C5 74.4891 5.79018 76.3968 7.1967 77.8033C8.60322 79.2098 10.5109 80 12.5 80H57.5C59.4891 80 61.3968 79.2098 62.8033 77.8033C64.2098 76.3968 65 74.4891 65 72.5V27.5L42.5 5Z"
                                                                                stroke="white" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M42.5 5V27.5H65" stroke="white"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M35 65V42.5" stroke="white"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M23.75 53.75H46.25" stroke="white"
                                                                                stroke-width="2" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </g>
                                                                        <defs>
                                                                            <filter id="filter0_d" x="0" y="0"
                                                                                width="70" height="85"
                                                                                filterUnits="userSpaceOnUse"
                                                                                color-interpolation-filters="sRGB">
                                                                                <feFlood flood-opacity="0"
                                                                                    result="BackgroundImageFix" />
                                                                                <feColorMatrix in="SourceAlpha"
                                                                                    type="matrix"
                                                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                                                <feOffset />
                                                                                <feGaussianBlur stdDeviation="2" />
                                                                                <feColorMatrix type="matrix"
                                                                                    values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                                                                                <feBlend mode="normal"
                                                                                    in2="BackgroundImageFix"
                                                                                    result="effect1_dropShadow" />
                                                                                <feBlend mode="normal"
                                                                                    in="SourceGraphic"
                                                                                    in2="effect1_dropShadow"
                                                                                    result="shape" />
                                                                            </filter>
                                                                        </defs>
                                                                    </svg>

                                                                </div>
                                                                <div class="w-content">
                                                                    <span class="w-value">Rp 990.000.500</span>
                                                                    <span class="w-numeric-title">Sum Transaction
                                                                        Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="w-chart">
                                                                <div id="total-orders2"></div>
                                                            </div>
                                                            <script>
                                                                var d_2options22 = {
                                                                        chart: {
                                                                            id: 'sparkline2',
                                                                            group: 'sparklines2',
                                                                            type: 'area',
                                                                            height: 185,
                                                                            sparkline: {
                                                                            enabled: true
                                                                            },
                                                                        },
                                                                        stroke: {
                                                                            curve: 'smooth',
                                                                            width: 2
                                                                        },
                                                                        fill: {
                                                                            opacity: 1,
                                                                        },
                                                                        series: [{
                                                                            name: 'Sales',
                                                                            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
                                                                        }],
                                                                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                                                                        yaxis: {
                                                                            min: 0
                                                                        },
                                                                        grid: {
                                                                            padding: {
                                                                            top: 100,
                                                                            right: 0,
                                                                            left: 0
                                                                            }, 
                                                                        },
                                                                        fill: {
                                                                            type:"gradient",
                                                                            gradient: {
                                                                                type: "vertical",
                                                                                shadeIntensity: 1,
                                                                                inverseColors: !1,
                                                                                opacityFrom: .40,
                                                                                opacityTo: .05,
                                                                                stops: [45, 100]
                                                                            }
                                                                        },
                                                                        tooltip: {
                                                                            x: {
                                                                            show: false,
                                                                            },
                                                                            theme: 'dark'
                                                                        },
                                                                        colors: ['#FD8610']
                                                                        }
                                                                
                                                                        var d_2C_2 = new ApexCharts(document.querySelector("#total-orders2"), d_2options22);
                                                                        d_2C_2.render();
                                                                    
                                                            </script>
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
                                                            <h5 style="color:#E71A27">Total</h5>
                                                            <p style="color:#FD8610" class="acc-amount">{{$user_sum}}
                                                                Users</p>
                                                        </div>

                                                        <div class="inv-detail">
                                                            <div class="info-detail-1">
                                                                <p style="color:#E71A27">History</p>
                                                            </div>

                                                            @foreach($userCountMonthlyArray as $item)
                                                            <div class="info-detail-2">
                                                                <p>{!! $item['month'] !!}</p>
                                                                <p style="color:#FD8610">{!! $item['total'] !!}</p>
                                                            </div>
                                                            @endforeach

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
                                                                    <p>Collect documents from <a
                                                                            href="javascript:void(0);">Sara</a></p>
                                                                    <span class="badge badge-success">Completed</span>
                                                                    <p class="t-time">16:00</p>
                                                                </div>
                                                            </div>

                                                            <div class="item-timeline  timeline-warning">
                                                                <div class="t-dot" data-original-title="" title="">
                                                                </div>
                                                                <div class="t-text">
                                                                    <p>Conference call with <a
                                                                            href="javascript:void(0);">Marketing
                                                                            Manager</a>.</p>
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
                                                                    <p>Kelly want to increase the time of the project.
                                                                    </p>
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
                                                        <button class="btn">View All <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-chevron-down">
                                                                <polyline points="6 9 12 15 18 9"></polyline>
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!--  BEGIN CONTENT PART  -->
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="widget widget-chart-two">
                                                <div class="widget-heading">
                                                    <h5 class="">Global</h5>
                                                </div>
                                                <div class="widget-content">
                                                    <div id="chart-2" class=""></div>
                                                </div>
                                            </div>
                                            <script>
                                                /*
                                        ==================================
                                            Sales By Category | Options
                                        ==================================
                                    */
                                    var options = {
                                        chart: {
                                            type: 'donut',
                                            width: '350px',
                                            height: '350px'
                                        },
                                        colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
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
                                        plotOptions: {
                                        pie: {
                                            donut: {
                                            size: '60%',
                                            background: 'transparent',
                                            labels: {
                                                show: true,
                                                name: {
                                                show: true,
                                                fontSize: '29px',
                                                fontFamily: 'Quicksand, sans-serif',
                                                color: undefined,
                                                offsetY: -10
                                                },
                                                value: {
                                                show: true,
                                                fontSize: '26px',
                                                fontFamily: 'Quicksand, sans-serif',
                                                color: '#bfc9d4',
                                                offsetY: 16,
                                                formatter: function (val) {
                                                    return val
                                                }
                                                },
                                                total: {
                                                show: true,
                                                showAlways: true,
                                                label: 'Total',
                                                color: '#888ea8',
                                                formatter: function (w) {
                                                    return w.globals.seriesTotals.reduce( function(a, b) {
                                                    return a + b
                                                    }, 0)
                                                }
                                                }
                                            }
                                            }
                                        }
                                        },
                                        stroke: {
                                        show: true,
                                        width: 25,
                                        colors: '#1D2225'
                                        },
                                        series: [985, 737],
                                        labels: ['Transaction Paid', 'Transaction Pending'],
                                        responsive: [{
                                            breakpoint: 1599,
                                            options: {
                                                chart: {
                                                    width: '350px',
                                                    height: '350px'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                }
                                            },

                                            breakpoint: 1439,
                                            options: {
                                                chart: {
                                                    width: '250px',
                                                    height: '350px'
                                                },
                                                legend: {
                                                    position: 'bottom'
                                                },
                                                plotOptions: {
                                                pie: {
                                                    donut: {
                                                    size: '60%',
                                                    }
                                                }
                                                }
                                            },
                                        }]
                                    }
                                    /*
                                        =================================
                                            Sales By Category | Render
                                        =================================
                                    */
                                    var chart = new ApexCharts(
                                        document.querySelector("#chart-2"),
                                        options
                                    );

                                    chart.render();
                                            </script>
                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="row widget-statistic">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="widget widget-table-one">
                                                        <div class="widget-heading">
                                                            <h5 class="">Top 5 Most Transaction</h5>
                                                        </div>

                                                        <div class="widget-content">
                                                            <div class="transactions-list">
                                                                <div class="t-item">
                                                                    <div class="t-company-name">
                                                                        <div class="t-icon">
                                                                            <div class="avatar avatar-xl">
                                                                                <span
                                                                                    class="avatar-title rounded-circle">J</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="t-name">
                                                                            <h4>Jabodetabek</h4>
                                                                        </div>

                                                                    </div>
                                                                    <div class="t-rate rate-inc">
                                                                        <p><span>Rp 450.500</span>
                                                                            </svg></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="transactions-list">
                                                                <div class="t-item">
                                                                    <div class="t-company-name">
                                                                        <div class="t-icon">
                                                                            <div class="avatar avatar-xl">
                                                                                <span
                                                                                    class="avatar-title rounded-circle">ML</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="t-name">
                                                                            <h4>Malang</h4>
                                                                        </div>

                                                                    </div>
                                                                    <div class="t-rate rate-inc">
                                                                        <p><span>Rp 421.140</span>
                                                                            </svg></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="transactions-list">
                                                                <div class="t-item">
                                                                    <div class="t-company-name">
                                                                        <div class="t-icon">
                                                                            <div class="avatar avatar-xl">
                                                                                <span
                                                                                    class="avatar-title rounded-circle">B</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="t-name">
                                                                            <h4>Banjarmasin</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="t-rate rate-inc">
                                                                        <p><span>Rp 450.000</span>
                                                                            </svg></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="transactions-list">
                                                                <div class="t-item">
                                                                    <div class="t-company-name">
                                                                        <div class="t-icon">
                                                                            <div class="avatar avatar-xl">
                                                                                <span
                                                                                    class="avatar-title rounded-circle">SB</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="t-name">
                                                                            <h4>Surabaya</h4>
                                                                        </div>

                                                                    </div>
                                                                    <div class="t-rate rate-inc">
                                                                        <p><span>Rp 340.800</span>
                                                                            </svg></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="transactions-list">
                                                                <div class="t-item">
                                                                    <div class="t-company-name">
                                                                        <div class="t-icon">
                                                                            <div class="avatar avatar-xl">
                                                                                <span
                                                                                    class="avatar-title rounded-circle">MD</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="t-name">
                                                                            <h4>Medan</h4>
                                                                        </div>

                                                                    </div>
                                                                    <div class="t-rate rate-inc">
                                                                        <p><span>Rp 330.105</span>
                                                                            </svg></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="widget-four widget">
                                                        <div class="widget-heading">
                                                            <h5 class="">Top 5 Most SKU Product</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="vistorsBrowser">
                                                                <div class="browser-list">

                                                                    <div class="w-browser-details">
                                                                        <div class="w-browser-info">
                                                                            <h6>Chrome</h6>
                                                                            <p class="browser-count">65%</p>
                                                                        </div>
                                                                        <div class="w-browser-stats">
                                                                            <div class="progress">
                                                                                <div class="progress-bar bg-gradient-success"
                                                                                    role="progressbar"
                                                                                    style="width: 65%"
                                                                                    aria-valuenow="90" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="browser-list">
                                                                    <div class="w-browser-details">
                                                                        <div class="w-browser-info">
                                                                            <h6>Safari</h6>
                                                                            <p class="browser-count">25%</p>
                                                                        </div>
                                                                        <div class="w-browser-stats">
                                                                            <div class="progress">
                                                                                <div class="progress-bar bg-gradient-success"
                                                                                    role="progressbar"
                                                                                    style="width: 35%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="browser-list">
                                                                    <div class="w-browser-details">

                                                                        <div class="w-browser-info">
                                                                            <h6>Safari</h6>
                                                                            <p class="browser-count">25%</p>
                                                                        </div>

                                                                        <div class="w-browser-stats">
                                                                            <div class="progress">
                                                                                <div class="progress-bar bg-gradient-success"
                                                                                    role="progressbar"
                                                                                    style="width: 35%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <div class="browser-list">
                                                                    <div class="w-browser-details">
                                                                        <div class="w-browser-info">
                                                                            <h6>Safari</h6>
                                                                            <p class="browser-count">25%</p>
                                                                        </div>

                                                                        <div class="w-browser-stats">
                                                                            <div class="progress">
                                                                                <div class="progress-bar bg-gradient-success"
                                                                                    role="progressbar"
                                                                                    style="width: 35%"
                                                                                    aria-valuenow="65" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <div class="browser-list">
                                                                    <div class="w-browser-details">

                                                                        <div class="w-browser-info">
                                                                            <h6>Others</h6>
                                                                            <p class="browser-count">15%</p>
                                                                        </div>

                                                                        <div class="w-browser-stats">
                                                                            <div class="progress">
                                                                                <div class="progress-bar bg-gradient-success"
                                                                                    role="progressbar"
                                                                                    style="width: 15%"
                                                                                    aria-valuenow="15" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="widget-four widget">
                                                <div class="widget-heading">
                                                    <h5 class="">Top 5 Most Selling Product</h5>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="vistorsBrowser">
                                                        <div class="browser-list">

                                                            <div class="w-browser-details">
                                                                <div class="w-browser-info">
                                                                    <h6>Chrome</h6>
                                                                    <p class="browser-count">65%</p>
                                                                </div>
                                                                <div class="w-browser-stats">
                                                                    <div class="progress2">
                                                                        <div class="progress-bar2 bg-gradient-warning"
                                                                            role="progressbar" style="width: 65%"
                                                                            aria-valuenow="90" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="browser-list">
                                                            <div class="w-browser-details">
                                                                <div class="w-browser-info">
                                                                    <h6>Safari</h6>
                                                                    <p class="browser-count">25%</p>
                                                                </div>
                                                                <div class="w-browser-stats">
                                                                    <div class="progress2">
                                                                        <div class="progress-bar2 bg-gradient-warning"
                                                                            role="progressbar" style="width: 35%"
                                                                            aria-valuenow="65" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="browser-list">
                                                            <div class="w-browser-details">

                                                                <div class="w-browser-info">
                                                                    <h6>Safari</h6>
                                                                    <p class="browser-count">25%</p>
                                                                </div>

                                                                <div class="w-browser-stats">
                                                                    <div class="progress2">
                                                                        <div class="progress-bar2 bg-gradient-warning"
                                                                            role="progressbar" style="width: 35%"
                                                                            aria-valuenow="65" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="browser-list">
                                                            <div class="w-browser-details">
                                                                <div class="w-browser-info">
                                                                    <h6>Safari</h6>
                                                                    <p class="browser-count">25%</p>
                                                                </div>

                                                                <div class="w-browser-stats">
                                                                    <div class="progress2">
                                                                        <div class="progress-bar2 bg-gradient-warning"
                                                                            role="progressbar" style="width: 35%"
                                                                            aria-valuenow="65" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="browser-list">
                                                            <div class="w-browser-details">

                                                                <div class="w-browser-info">
                                                                    <h6>Others</h6>
                                                                    <p class="browser-count">15%</p>
                                                                </div>

                                                                <div class="w-browser-stats">
                                                                    <div class="progress2">
                                                                        <div class="progress-bar2 bg-gradient-warning"
                                                                            role="progressbar" style="width: 15%"
                                                                            aria-valuenow="15" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="widget-four widget">
                                                <div class="widget-heading">
                                                    <h5 class="">Top 5 Most Views Products</h5>
                                                </div>
                                                <div class="widget-content">
                                                    <div id="donut-chart">
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                var donutChart = {
                                                    chart: {
                                                        height: 300,
                                                        type: 'pie',
                                                        toolbar: {
                                                            show: false,
                                                        }
                                                    },
                                                    stroke: {
                                                        colors: '#0e1726'
                                                    },
                                                    series: [44, 55, 41, 17, 20],
                                                    dataLabels: {
                                                        enabled: true,
                                                    },
                                                    fill: {
                                                        // colors: ['#B32824','#288A28','#FD8610', '#4690A7', '#D5C17B'],
                                                        type: 'gradient',
                                                    },
                                                    labels: ['Apple', 'Mango', 'Orange', 'Watermelon', 'Nanas'],
                                                    responsive: [{
                                                        breakpoint: 480,
                                                        options: {
                                                            chart: {
                                                                width: 200
                                                            },
                                                            legend: {
                                                                position: 'bottom'
                                                            }
                                                        }
                                                    }]
                                                }

                                                var donut = new ApexCharts(
                                                    document.querySelector("#donut-chart"),
                                                    donutChart
                                                );

                                                donut.render();
                                            </script>
                                        </div>
                                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-heding">
                                                    <h5 class="">Total Product per Category</h4>
                                                </div>
                                                <div class="widget-content">
                                                    <div id="s-bar" class=""></div>
                                                </div>
                                            </div>
                                            <script>
                                                Apex.grid = {
                                                    borderColor: '#1D2225'
                                                }
                                                Apex.track = {
                                                    background: '#0e1726',
                                                }
                                                Apex.tooltip = {
                                                    theme: 'dark'
                                                }
                                                var sBar = {
                                                    chart: {
                                                        height: 350,
                                                        type: 'bar',
                                                        toolbar: {
                                                        show: false,
                                                        }
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            horizontal: true,
                                                        }
                                                    },
                                                    fill: {
                                                    colors: ['#B32824']
                                                    },
                                                    dataLabels: {
                                                        enabled: false
                                                    },
                                                    series: [{
                                                        data: [400, 430, 448, 470, 540, 580, 690, 1100]
                                                    }],
                                                    xaxis: {
                                                        type: 'category',
                                                        categories: ['Perkebunan', 'Peternakan', 'Perikanan', 'Pertanian', 'Buah', 'Saprodi', 'Olahan', 'Donasi'],
                                                        labels: {
                                                            show: true,
                                                            style: {
                                                                colors: ['#FFF'],
                                                                fontSize: '12px',
                                                                fontFamily: 'Helvetica, Arial, sans-serif',
                                                                fontWeight: 400,
                                                                cssClass: 'apexcharts-xaxis-label',
                                                            },
                                                        },
                                                    },
                                                    yaxis: [{
                                                        show: true,
                                                        showAlways: true,
                                                        labels: {
                                                            style: {
                                                                // colors: ['#FFF'],
                                                                fontSize: '12px',
                                                                fontFamily: 'Helvetica, Arial, sans-serif',
                                                                fontWeight: 400,
                                                                cssClass: 'apexcharts-xaxis-label',
                                                            }
                                                        },
                                                        title: {
                                                            text: "Kategori",
                                                            style: {
                                                                color: '#FFF',
                                                            }
                                                        },
                                                    }]
                                                }

                                                var chart = new ApexCharts(
                                                    document.querySelector("#s-bar"),
                                                    sBar
                                                );

                                                chart.render();
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div id="tableCaption" class="col-lg-12 col-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            
                                            <div class="widget-content widget-content-area">
                                                <div class="table-responsive">
                                                    <table class="table mb-4">
                                                        <caption>List of all users</caption>
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th>Costumer</th>
                                                                <th>Product</th>
                                                                <th class="">Status</th>
                                                                <th>Price</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-primary">Shaun Park</td>
                                                                <td>Beras Merah</td>
                                                                <td class=""><span
                                                                        class=" shadow-none badge outline-badge-primary">Complete</span>
                                                                </td>
                                                                <td>5 min ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-primary">Shaun Park</td>
                                                                <td>Beras Merah</td>
                                                                <td class=""><span
                                                                        class=" shadow-none badge outline-badge-primary">Complete</span>
                                                                </td>
                                                                <td>5 min ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td class="text-primary">Andy King</td>
                                                                <td>Wortel</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-secondary shadow-none">Pending</span>
                                                                </td>
                                                                <td>10 min ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-primary">Mary McDonald</td>
                                                                <td>Shirataki Rice</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-info shadow-none">In
                                                                        Progress</span></td>
                                                                <td>1 hour ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td class="text-primary">Vincent Carpenter</td>
                                                                <td>Beras Merah</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-danger shadow-none">Cancel</span>
                                                                </td>
                                                                <td>1 day ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td class="text-primary">Shaun Park</td>
                                                                <td>Gula Jawa</td>
                                                                <td class=""><span
                                                                        class=" shadow-none badge outline-badge-primary">Complete</span>
                                                                </td>
                                                                <td>5 min ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td class="text-primary">Andy King</td>
                                                                <td>Minyak Goreng</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-secondary shadow-none">Pending</span>
                                                                </td>
                                                                <td>10 min ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-primary">Mary McDonald</td>
                                                                <td>Gula Halus</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-info shadow-none">In
                                                                        Progress</span></td>
                                                                <td>1 hour ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td class="text-primary">Vincent Carpenter</td>
                                                                <td>Beras Pandan Wangi</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-danger shadow-none">Cancel</span>
                                                                </td>
                                                                <td>1 day ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-primary">Mary McDonald</td>
                                                                <td>Gula Halus</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-info shadow-none">In
                                                                        Progress</span></td>
                                                                <td>1 hour ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td class="text-primary">Vincent Carpenter</td>
                                                                <td>Beras Pandan Wangi</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-danger shadow-none">Cancel</span>
                                                                </td>
                                                                <td>1 day ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-primary">Mary McDonald</td>
                                                                <td>Gula Halus</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-info shadow-none">In
                                                                        Progress</span></td>
                                                                <td>1 hour ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td class="text-primary">Vincent Carpenter</td>
                                                                <td>Beras Pandan Wangi</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-danger shadow-none">Cancel</span>
                                                                </td>
                                                                <td>1 day ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td class="text-primary">Mary McDonald</td>
                                                                <td>Gula Halus</td>
                                                                <td class=""><span
                                                                        class="badge outline-badge-info shadow-none">In
                                                                        Progress</span></td>
                                                                <td>1 hour ago</td>
                                                            </tr>
                                                            <tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
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