<?php include 'settings.php'?>
<!DOCTYPE .php>
<php>

<head>
    <meta charset="utf-8">
    <title><?=siteName?></title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="assets/css/color-switcher-design.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <script src="assets/js/custom.js" defer></script>

    <style>
        .bg-white::before {
            background-color: white !important;
        }
    </style>

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Main Header -->
        <header class="main-header header-style-three">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <div
                            class="nav-outer py-3 d-flex align-items-center flex-wrap justify-content-lg-between justify-content-md-between justify-content-between">
                            <!-- Logo Box -->
                            <div class="logo-box">
                                <div class="logo"><a href="index.php"><img src="assets/images/main_pics/logo.png"
                                            alt="" title="" class="img-fluid"></a></div>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="dropdown"><a href="about.php">About us</a>
                                            <ul>
                                                <li class="dropdown"><a href="about.php">About Us</a>
                                                    <ul>
                                                        <li><a href="about.php">Who we are</a></li>
                                                        <li><a href="story.php">Our Story</a>
                                                        <li><a href="culture.php">Our Values</a>
                                                        </li>
                                                        <!--<li><a href=".php">Asset Evaluation Team</a></li>-->
                                                    </ul>
                                                </li>


                                                <li class="dropdown"><a href="leadership.php">Leadership</a>
                                                    <ul>
                                                        <li><a href="leaders.php">Corporate Leaders</a></li>
                                                        <li><a href="policy.php">Strategy Council</a>
                                                        </li>
                                                        <li><a href="evaluation.php">Asset Evaluation Team</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="diferrence.php">A.G.U Difference</a></li>
                                                <li><a href="facts.php">Form CRS & Form ADV</a></li>

                                                <li><a href="team.php">Our Team</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class=""><a href="services.php"></a></li> -->
                                        <li class="dropdown"><a href="#">Wealth Management</a>
                                            <ul>
                                                <li><a href="wealth-mgt.php">Bespoke Financial Stewardship</a></li>
                                                <li><a href="retirement.php">Retirement Planning</a></li>
                                                <li class="dropdown"><a href="wealth.php">Oversee your wealth</a>
                                                    <ul>
                                                        <li><a href="expand.php">Expand your wealth</a></li>
                                                        <li><a href="maintain.php">Maintain your wealth</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="portfolio.php">Portfolio Management</a></li>
                                                <!--<li><a href="financial.php">Financial Planning</a></li>-->

                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="investment.php">Investments</a>
                                            <ul>
                                                <li><a href="investment.php">Institutional Investing</a></li>
                                                <li><a href="strategies.php">Strategies</a></li>
                                                <li><a href="clients.php">Our Clients</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="business-service.php">Business Services </a>
                                            <ul>
                                                <li><a href="business-service.php">Business 401(k) services</a></li>
                                                <li><a href="plans.php">Retirement Plans</a></li>
                                                <li><a href="clients.php">Our Clients</a></li>
                                                <li><a href="solutions.php">Investment solutions</a></li>
                                                <li><a href="support.php">Administration Support</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <div class="outer-box d-flex align-items-center flex-wrap">

                                <!-- Login Box -->
                                <div class="login-box"><a href="register.php"><span
                                            class="icon flaticon-user-1"></span>Login</a></div>

                                <!-- Button Box -->
                                <div class="header_button-box">
                                    <a href="register.php" class="theme-btn btn-style-three">
                                        <span class="btn-wrap">
                                            <span class="text-one">Sign Up</span>
                                            <span class="text-two">Sign Up</span>
                                        </span>
                                    </a>
                                </div>

                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.php"><img src="assets/images/main_pics/logo.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->