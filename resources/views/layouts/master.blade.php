<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.bdevs.net/faime-prev/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2024 10:43:47 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('page') || Cinema On Stage</title>
    <meta name="title" content="@yield('title')">
    <link rel="canonical" href="@yield('canonical')">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- verification code  -->
    <meta name="google-site-verification" content="_7En7MJwLW__XKlHyMbAIhIH_rLnHc--c-QMKDe1kBQ" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1Y7WGKJ5KK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1Y7WGKJ5KK');
    </script>
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <!-- CSS here -->
    <link rel="stylesheet" href="{!! asset('assets/css/preloader.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/meanmenu.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/animate.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/swiper-bundle.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/slick.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/magnific-popup.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/nice-select.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/ui-range-slider.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/flaticon_faime.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/all.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/default.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/main.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/responsive.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/odometer-theme-default.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/fancybox.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/floating-icon.css') !!}">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    @yield('extracss')
    <style>
        #home_mobile {
            display: none;
        }

        @media(max-width:992px) {
            #home_mobile {
                display: block;
            }
        }

        .buy_ticket_sticky {
            position: fixed;
            right: 50px !important;
            top: 29px !important;
            z-index: 99;
            display: none;
        }

        .buy_ticket_sticky button {
            background: #ea5a00;
            padding: 9px 15px;
            text-align: center;
            font-size: 15px;
            color: #fff;
            border-radius: 3px;
        }

        .buy_ticket_sticky_2 {
            position: fixed;
            bottom: 30px;
            left: 5px;
            z-index: 99;
            display: none;
        }

        .buy_ticket_sticky_2 button {
            background: #ea5a00;
            /* padding: 9px 15px; */
            text-align: center;
            font-size: 15px;
            color: #fff;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            line-height: 20px;
            text-align: center;
        }

        .buy_ticket_sidebar {
            background: #ea5a00;
            /* padding: 9px 15px; */
            text-align: center;
            font-size: 15px;
            color: #fff;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            line-height: 20px;
            text-align: center;
        }
    </style>
    <style>
        body {
            font-family: "Montserrat", sans-serif !important;

        }

        .whatsapp1 {
            left: 5px;
            bottom: 30px;
            position: fixed;
            z-index: 9999;
            display: block;
        }

        .shake {
            animation: shake-animation 3.72s ease infinite;
            transform-origin: 50% 50%;
        }

        .iframe-container {
            padding-bottom: 45% !important;
        }

        .whatsapp {
            right: 5px;
            bottom: 30px;
            position: fixed;
            z-index: 9999;
            display: block;
        }

        .contact_us {
            font-size: 30px;
            line-height: 1.5em;
            color: #fe5e02;
            font-weight: 400;
            /* font-family: "Long Cang", cursive; */
        }

        @keyframes shake-animation {
            0% {
                transform: translate(0, 0)
            }

            1.78571% {
                transform: translate(10px, 0)
            }

            3.57143% {
                transform: translate(0, 0)
            }

            5.35714% {
                transform: translate(10px, 0)
            }

            7.14286% {
                transform: translate(0, 0)
            }

            8.92857% {
                transform: translate(10px, 0)
            }

            10.71429% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(0, 0)
            }
        }

        @media(max-width:992px) {
            .iframe_height {
                height: 300px !important;
            }

            .iframe-container {
                padding-bottom: 70% !important;
            }

            .buy_ticket_sticky {
                right: 0px;
                top: 93px;
                position: absolute;
                z-index: 9999;
                left: unset;
                /* display: block; */
            }

        }
    </style>
    <link rel="stylesheet" href="{!! asset('assets/css/client-review.css') !!}">
    <style>
        .card-review-container {
            height: 150px;
            overflow-y: auto;
        }

        .review-card {
            position: relative;
            height: 280px;
        }

        .google-svg {
            position: absolute;
            right: 10px;
        }

        .swiper-button-prev:after {
            content: 'prev';
            color: #ff5d00;
            border: 2px solid #cecece;
            padding: 5px;
            background: #cbc7c7d9;
            border-radius: 50%;
            width: 25px;
            text-align: center;

        }

        .swiper-button-next:after {
            /* content: 'prev'; */
            color: #ff5d00;
            border: 2px solid #cecece;
            padding: 5px;
            background: #cbc7c7d9;
            border-radius: 50%;
            width: 25px;
            text-align: center;
        }

        .iframe-container {
            position: relative;
            width: 100%;
            padding-bottom: 50%;
            /* 16:9 aspect ratio */
            overflow: hidden;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Custom styles for carousel controls */
        .carousel-control-prev,
        .carousel-control-next {
            color: white;
        }



        /* Custom styles for carousel controls icons */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(255, 255, 255, 0.5);
            /* Set background color to semi-transparent white */
        }

        /* Custom styles for carousel controls on hover */
        .carousel-control-prev1:hover,
        .carousel-control-next1:hover {
            color: white;

        }

        .history-area .tab-teaser .tab-menu ul {
            padding-left: 0;
            margin-bottom: 10px;
        }

        .history-area .tab-teaser .tab-menu li {
            list-style-type: none;
            margin-bottom: 12px;
        }

        .history-area .tab-teaser .tab-menu li a {
            color: #000;
            width: 200px;
            font-size: 1.6rem;
            padding: 10px 35px;
            background: #f5f5f5;
            font-weight: 600;
            position: relative;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
            display: inline-block;
        }

        .history-area .tab-teaser .tab-menu li a::before {
            position: absolute;
            content: "";
            right: -35px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
            height: 2px;
            width: 25px;
            background-color: #000;
            opacity: 0;
        }

        .history-area .tab-teaser .tab-menu li a::after {
            position: absolute;
            content: "";
            height: 12px;
            width: 12px;
            background-color: #000;
            -webkit-clip-path: polygon(30% 0,
                    50% 0,
                    100% 50%,
                    50% 100%,
                    30% 100%,
                    80% 47%,
                    80% 51%);
            clip-path: polygon(30% 0,
                    50% 0,
                    100% 50%,
                    50% 100%,
                    30% 100%,
                    80% 47%,
                    80% 51%);
            right: -37px;
            top: 51%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
            opacity: 0;
        }

        .history-area .tab-teaser .tab-menu li a.active,
        .history-area .tab-teaser .tab-menu li a:hover,
        .history-area .tab-teaser .tab-menu li a:focus {
            background-color: #000;
            color: #fff;
        }

        .history-area .tab-teaser .tab-menu li a.active::before,
        .history-area .tab-teaser .tab-menu li a:hover::before,
        .history-area .tab-teaser .tab-menu li a:focus::before {
            opacity: 1;
        }

        .history-area .tab-teaser .tab-menu li a.active::after,
        .history-area .tab-teaser .tab-menu li a:hover::after,
        .history-area .tab-teaser .tab-menu li a:focus::after {
            opacity: 1;
        }

        .history-area .tab-teaser .tab-menu li a:hover::before {
            opacity: 0;
        }

        .history-area .tab-teaser .tab-menu li a:hover::after {
            opacity: 0;
        }

        .history-area .tab-teaser .tab-menu li:last-child {
            margin-bottom: 0;
        }

        .history-area .tab-box {
            display: none;
            padding: 35px;
            -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            /* margin-left: -35px; */
        }

        .history-area .tab-box:first-child {
            display: block;
        }

        .history-area .tab-box .history-content .history-title {
            margin-bottom: 35px;
        }

        .history-area .tab-box .history-content .history-title span {
            color: #c59970;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 18px;
            display: inline-block;
        }

        .history-area .tab-box .history-content .history-title h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .history-area .tab-box .history-content .logo-list ul {
            padding-left: 0;
            margin-bottom: 0;
        }

        .history-area .tab-box .history-content .logo-list ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .history-area .tab-box .history-content .logo-list ul li:last-child {
            margin-right: 0;
        }

        .history-content-style2 .history-title {
            margin-bottom: 30px;
        }

        .history-content-style2 .history-title span {
            color: #c59970;
            display: inline-block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 600;
        }

        .history-content-style2 .history-title h2 {
            font-size: 56px;
        }

        .history-box {
            background-color: #f8f8f8;
            padding: 20px;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
            position: relative;
        }

        .history-box .card-left-content {
            text-align: center;
        }

        .history-box .card-left-content h4 {
            font-size: 18px;
            margin-bottom: 10px;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }

        .history-box .card-left-content span {
            font-size: 18px;
            font-weight: 600;
            color: #c59970;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }

        .history-box .card-right-content {
            border-left: 1px dashed #c59970;
            padding-left: 25px;
        }


        .history-box .card-right-content h3 {
            font-size: 24px;
            margin-bottom: 10px;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }

        .history-box .card-right-content p {
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }

        .history-box:hover,
        .history-box.active {
            background-color: #000;
        }

        .history-box:hover::after,
        .history-box.active::after {
            height: 75%;
        }

        .history-box:hover .card-left-content h4,
        .history-box.active .card-left-content h4 {
            color: #fff;
        }

        .history-box:hover .card-right-content h3,
        .history-box.active .card-right-content h3 {
            color: #fff;
        }

        .history-box:hover .card-right-content p,
        .history-box.active .card-right-content p {
            color: #fff;
        }

        .history-img-content-style2 {
            padding-left: 70px;
            padding-bottom: 35px;
            position: relative;
        }

        .history-img-content-style2 .small-img {
            height: 300px;
            width: 300px;
            border-radius: 100%;
            border: 6px solid #fff;
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .history-content-style2 {}

        .history-content-style2 .scrollmenu {
            overflow-y: scroll;
            -ms-flex-wrap: unset;
            flex-wrap: unset;
            height: 320px;
            display: block;
            left: 0;
            top: 0;
        }

        .history-content-style2 * {
            scrollbar-width: auto;
            scrollbar-color: #e2dede #e2dede;
        }

        .history-content-style2 *::-webkit-scrollbar {
            width: 12px;
        }

        .history-content-style2 *::-webkit-scrollbar-track {
            background: #e2dede;
        }

        .history-content-style2 *::-webkit-scrollbar-thumb {
            background-color: #c59970;
            border-radius: 0;
            border: 3px solid #e2dede;
        }

        /* .carousel-control-next-icon,
    .carousel-control-prev-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      background: transparent no-repeat center center;
      background-size: 100% 100%;
    } */

        .carousel_youtube .carousel-control-prev-icon {
            display: inline-block;
            width: 5rem;
            height: 5rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
            background-color: unset;

            position: absolute;
            left: 0;
            top: 43%;
        }

        .carousel_youtube .carousel-control-next-icon {
            display: inline-block;
            width: 5rem;
            height: 5rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
            position: absolute;
            right: 0;
            background-color: unset;
            top: 43%;
        }

        .carousel_home .carousel-control-next-icon,
        .carousel-control-prev-icon {
            width: 5rem;
            height: 5rem;
            background-color: unset;
        }

        @media(max-width:992px) {
            .review-col-10 {
                margin-left: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- cursor animation-->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Preloader -->
    <div class="loader">
        <div class="loader__container">
            <div class="loader__film">
                <img class="loader__film-img" src="{{ asset('assets/img/loader/film.png') }}" alt="img not found" />
                <img class="loader__film-img" src="{{ asset('assets/img/loader/film-2.png') }}" alt="img not found" />
            </div>
            <img class="loader__camera" src="{{ asset('assets/img/loader/camera.png') }}" alt="img not found" />
        </div>
    </div>
    <div class="floating-button" onclick="toggleSocialMenu()">
        <!-- <span class="floating_icon_plus">+</span> -->
        <a href="https://api.whatsapp.com/send?phone=+18552674636&amp;text=I would like to know more about Cinema On Stage"
            target="_blank" style="border:0px;">
            <div class="social-icons">
                <div class="social-icon">
                    <p class="floating-social-title" style="left: -50px;">Whatsapp</p>
                    <div class="social-phone">
                        <img src="{{ asset('assets/img/whatsapp.png') }}" alt="whatsapp">

                    </div>

                </div>
        </a>

        <a id="fancybox" class="fancyboxEnq fancybox.iframe" href="{{ route('quick.enquiry') }}">
            <div class="social-icon" style="background-color: #ea5a00;">
                <p class="floating-social-title">Enquire Now </p>
                <div class="social-chat">

                    <svg width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 18L9 12M20 18L15 12M3 8L10.225 12.8166C10.8665 13.2443 11.1872 13.4582 11.5339 13.5412C11.8403 13.6147 12.1597 13.6147 12.4661 13.5412C12.8128 13.4582 13.1335 13.2443 13.775 12.8166L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            fill="none" />
                    </svg>

                </div>
            </div>
        </a>


    </div>
    </div>
    <header id="header-sticky" class="fm-header-area header-border transparent-header">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="header-wrapper">
                    <div class="fm-header-logo-wrapper">
                        <a href="{{ route('home') }}" class="fm-header-logo ">
                            <img class="" src="{{ asset('assets/img/logo (1).png') }}" alt="img not found" />
                        </a>

                        <!-- <span class="separator d-none d-xl-block"></span> -->
                        <a href="#0" class="fm-header-bar-1">
                            <span class="fm-header-bar-line fm-header-bar-line-1"></span>
                            <span class="fm-header-bar-line fm-header-bar-line-2"></span>
                            <span class="fm-header-bar-line fm-header-bar-line-3"></span>
                        </a>
                    </div>
                    <div class="header-menu-spc d-none d-xl-block">
                        <div class="fm-header-nav">
                            <nav class="desktop_menu" id="mobile-menu">
                                <ul>

                                    <li class="has-dropdown" id="home_mobile">
                                        <a href="{{ route('home') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">Home</div>
                                            <button href="{{ route('home') }}">Home</button>
                                        </a>
                                    </li>

                                    <li class="active has-dropdown">
                                        <a href="{{ route('about') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">About Us</div>
                                            <button href="{{ route('about') }}">About Us</button>
                                        </a>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="{{ route('about.show') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">About show</div>
                                            <button href="{{ route('about.show') }}">About Show </button>
                                        </a>


                                    <li class="has-dropdown ">
                                        <a href="{{ route('book.now') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">Book Now</div>
                                            <button href="{route('book.now')}}">Book Now</button>
                                        </a>
                                        <!-- <div id="dub-arrow">Home</div>
                                    <a href="tour-schedule.php"> Book Now </a> -->

                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('past.shows') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">Past Shows</div>
                                            <button href="{{ route('past.shows') }}">Past Shows</button>
                                        </a>
                                    </li>
                                    <!-- abdul edited -->
                                    <li class="has-dropdown">
                                        <a href="{{ route('blog') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">Blog</div>
                                            <button href="{{ route('blog') }}">Blog</button>
                                        </a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('contact.us') }}" class="button upper_menu_margin1"
                                            id="button-7">
                                            <div id="dub-arrow">Contact Us</div>
                                            <button href="{{ route('contact.us') }}">Contact Us</button>
                                        </a>
                                    </li>




                                </ul>
                                </li>

                            </nav>


                            <nav class="mobile_menu" id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="{{ route('home') }}">Home</a>

                                    </li>
                                    <li class=" has-dropdown">
                                        <a href="{{ route('about') }}">About Us</a>

                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('about.show') }}">About show</a>

                                    </li>
                                    <li class="has-dropdown">
                                        <a href="tour-schedule.php"> Tour Schedule </a>

                                    </li>
                                    <li class="has-dropdown">
                                        <a href="past-shows.php">Past Shows</a>

                                    </li>
                                    <li class="has-dropdown">
                                        <a href="contact.php">Contact Us</a>

                                    </li>





                                </ul>
                                </li>

                            </nav>
                        </div>
                    </div>
                    <!-- <div class="fm-header-right d-none d-xl-block">
                        <a href="contact.html" class="fill-btn">Let's Chat
                            <span>
                                <i class="fa-regular fa-arrow-right"></i>
                            </span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- sidebar area start -->
        <div class="fm-header-sidebar-area fm-header-sidebar-left" style="z-index: 999999999999999999;">
            <div class="fm-header-sidebar-wrapper">
                <div class="fm-header-sidebar-action mb-75">
                    <div class="fm-header-sidebar-logo">
                        <a href="#"><img src="{{ asset('assets/img/logo (1).png') }}"
                                alt="img not found" /></a>
                    </div>
                    <div class="offcanvas-close">
                        <a class="offcanvas-btn" href="#0">
                            <i class="fa-thin fa-times" style="color: black;"></i>
                        </a>
                    </div>
                </div>
                <!-- <div class="d-none d-sm-block">
        <div class="fm-header-sidebar-search">
          <form action="https://html.bdevs.net/faime-prev/index.html">
            <input type="text" placeholder="Search here" />
            <button type="submit">
              <i class="flaticon flaticon-search"></i>
            </button>
          </form>
        </div>
      </div> -->
                <div class="mobile-menu"></div>
                <!-- <div class="d-none d-sm-block">
        <div class="fm-offcanvas-about mt-30 mb-30">
          <h4 style="color: black;">About Cinema On Stage</h4>
          <p style="color: black;">
            We believe theater and live performance have the power to ignite meaningful transformation.
          </p>
        </div>
      </div> -->
                <div class="offcanvas-contact mt-45 mb-30">
                    <h4 class="offcanvas-contact-title" style="color: black;">Contact Information</h4>
                    <ul>

                        <li class="d-flex align-items-center gap-2">
                            <div class="offcanvas-contact-icon" style="color: black;">
                                <a href="tel:+088889797697"><i class="far fa-phone"></i></a>
                            </div>
                            <div class="offcanvas-contact-text" style="color: black;">
                                <a href="tel:+18552674636">855-267-4636</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2" style="color: black;">
                            <div class="offcanvas-contact-icon" style="color: black;">
                                <a><i class="fal fa-envelope"></i></a>
                            </div>
                            <div class="offcanvas-contact-text" style="color: black;">
                                <a href="mailto:info@cinemaonstage.com"><span class="__cf_email__"
                                        data-cfemail="cfa7aaa3a3a08fa9aea6a2aaa2aaaba6aee1aca0a2">info@cinemaonstage.com</span></a>

                            </div>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <button class="buy_ticket_sidebar"><a href="{{ route('book.now') }}">Book Now
                                </a></button>

                        </li>
                    </ul>

                </div>
                <div class="d-none d-sm-block d-sm-none d-md-block">
                    <div class="fm-offcanvas-social">
                        <span class="social-text">Follow :</span>
                        <div class="fm-offcanvas-social-icon" style="color: black;">
                            <a href="https://www.facebook.com/MughalEAzamPlay/" target="_blank"
                                style="color: black;"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/mughaleazamplay" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.instagram.com/mughaleazamplay/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCyptcakFN2xlKUrju_RxiMw/" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <!-- sidebar area end -->


        <a class=" buy_ticket_sticky" href="{{ route('book.now') }}">
            <button>Book Now</button>
        </a>
        <!--<a class=" buy_ticket_sticky_2" href="{{ route('book.now') }}">-->
        <!--    <button>Book Now</button>-->
        <!--</a>-->
    </header>
    <main>
        @yield('content')




        <!-- contact-area-start -->
        <section class="contact-top-area bg-common-black " style="position: relative;">

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="fm-contact-wrapper fm-contact-pad">
                            <div class="section-title ibm-plex">
                                <h2 class="section-main-title text-white ibm-plex" style="letter-spacing: 2px;">
                                    <a href="{{ route('book.now') }}">Book Tickets Now </a>
                                </h2>
                            </div>

                            <div class="fm-contact-btn btn_wrapper">
                                <div class="btn-featured-wrapper d-flex justify-content-lg-end">
                                    <div class="featured-btn-circle-wrap btn_wrapper"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                        <a href="{{ route('book.now') }}" class="featured-rotate-btn "
                                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                            <span>
                                                <i class="flaticon-right-arrow-1"></i>
                                            </span>
                                        </a>
                                        <img class="image-text" src="{{ asset('assets/img/bg/btn-bg.png') }}"
                                            alt="img not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->


    </main>
    <footer>
        <div class="footer-area-5 section-spacing-top pos-rel">
            <div class="footer-bg-3" data-background="{{ asset('assets/img/bg/footer/img-1.jpg') }}"></div>
            <div class="container">

                <div class="footer-middle-area">
                    <div class="footer-wrapper footer-widget-about">
                        <div class="footer-logo-2">
                            <a href="{{ route('home') }}"><img class="w-100 wow zoomInLeft"
                                    src="{{ asset('assets/img/footer/logo.png') }}" alt="" /></a>
                        </div>
                        <!-- <div class="footer-text">
                        <p style="color: white;">
                            We believe theater and live performance have the power to ignite meaningful transformation.
                        </p>
                    </div> -->
                    </div>

                    <div class="footer-wrapper footer-widget-social">
                        <div class="footer-title">
                            <h4>Useful Links</h4>
                        </div>
                        <ul class="wow zoomInLeft">
                            <li><a href="{{ route('home') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#e04b00" stroke-width="2"
                                            d="M5 9h7V5.483a.2.2 0 0 1 .341-.142L19 12l-6.659 6.659a.2.2 0 0 1-.341-.142V15H5">
                                        </path>
                                    </svg>
                                    <span style="color:white">Home</span>
                                </a></li>
                            <li><a href="{{ route('about') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#e04b00" stroke-width="2"
                                            d="M5 9h7V5.483a.2.2 0 0 1 .341-.142L19 12l-6.659 6.659a.2.2 0 0 1-.341-.142V15H5">
                                        </path>
                                    </svg>
                                    <span style="color:white">About Us</span>
                                </a></li>
                            <!-- .php remove kiya bas -->
                            <li><a href="{{ route('about.show') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#e04b00" stroke-width="2"
                                            d="M5 9h7V5.483a.2.2 0 0 1 .341-.142L19 12l-6.659 6.659a.2.2 0 0 1-.341-.142V15H5">
                                        </path>
                                    </svg>
                                    <span style="color:white">About Show</span>
                                </a></li>
                            <li><a href="{{ route('book.now') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#e04b00" stroke-width="2"
                                            d="M5 9h7V5.483a.2.2 0 0 1 .341-.142L19 12l-6.659 6.659a.2.2 0 0 1-.341-.142V15H5">
                                        </path>
                                    </svg>
                                    <span style="color:white">Book Now</span>
                                </a></li>
                            <li><a href="{{ route('blog') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#e04b00" stroke-width="2"
                                            d="M5 9h7V5.483a.2.2 0 0 1 .341-.142L19 12l-6.659 6.659a.2.2 0 0 1-.341-.142V15H5">
                                        </path>
                                    </svg>
                                    <span style="color:white">Blog</span>
                                </a></li>

                        </ul>


                    </div>
                    <div class="footer-wrapper footer-widget-contact">
                        <div class="footer-title">
                            <h4>Contact Us</h4>
                        </div>
                        <ul class="footer-2-link wow zoomInLeft">

                            <li>
                                <i class="fa-sharp fa-solid fa-phone"></i>
                                <p style="color: white;"><a href="tel:+18552674636">855-267-4636</a></p>
                            </li>
                            <li>
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <p style="color: white;">
                                    <a href="mailto:info@cinemaonstage.com" class="text-lowercase"><span
                                            class="__cf_email__"
                                            data-cfemail="cfa7aaa3a3a08fa9aea6a2aaa2aaaba6aee1aca0a2">info@cinemaonstage.com</span></a>
                                </p>
                            </li>

                        </ul>
                        <div class="fm-social-2 footer-social-3">
                            <a href="https://www.facebook.com/cinemaonstage" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/cinemaonstage/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@cinemaonstage" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=+18552674636&amp;text=I would like to know more about Cinema On Stage"
                                target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-4">
                    <div class="footer-bottom-wrapper-2">
                        <div class="footer-bottom-inner">
                            <div class="footer-copyright wow zoomInLeft">
                                <p style="color: white;">
                                    © 2024<a href="{{ route('home') }}"> Cinema On Stage </a> All Rights
                                    Reserved.
                                </p>
                            </div>

                            <div class="footer-rules wow zoomInLeft" style="color: white;">
                                <!-- <a href="Privacy Policy.php">Privacy Policy</a> -->
                                <a href="{{ route('terms.condition') }}">Terms & Condition</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- JS here -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{!! asset('assets/js/jquery-3.6.0.min.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/meanmenu.js') !!}"></script>
    <script src="{!! asset('assets/js/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/slick.min.js') !!}"></script>
    <script src="{!! asset('assets/js/magnific-popup.min.js') !!}"></script>
    <script src="{!! asset('assets/js/parallax.min.js') !!}"></script>
    <script src="{!! asset('assets/js/gsap.min.js') !!}"></script>
    <script src="{!! asset('assets/js/ScrollTrigger.min.js') !!}"></script>
    <script src="{!! asset('assets/js/ScrollToPlugin.min.js') !!}"></script>
    <script src="{!! asset('assets/js/SplitText.min.js') !!}"></script>
    <script src="{!! asset('assets/js/vanilla-tils.js') !!}"></script>
    <script src="{!! asset('assets/js/appair.min.js') !!}"></script>
    <script src="{!! asset('assets/js/knob.min.js') !!}"></script>
    <script src="{!! asset('assets/js/nice-select.min.js') !!}"></script>
    <script src="{!! asset('assets/js/ajax-form.js') !!}"></script>
    <script src="{!! asset('assets/js/wow.min.js') !!}"></script>
    <script src="{!! asset('assets/js/imagesloaded.pkgd.min.js') !!}"></script>
    <script src="{!! asset('assets/js/isotope.pkgd.min.js') !!}"></script>
    <script src="{!! asset('assets/js/fontawesome.min.js') !!}"></script>
    <script src="{!! asset('assets/js/ui-range-slider.js') !!}"></script>
    <script src="{!! asset('assets/js/main.js') !!}"></script>
    <script src="{!! asset('assets/js/sidebar.js') !!}"></script>
    <script src="{!! asset('assets/js/fancybox.js') !!}"></script>
    <script src="{!! asset('assets/js/custom.js') !!}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                'width': 1000,
                fitToView: true,
                autoSize: false,
                closeClick: false,

                helpers: {
                    overlay: {
                        locked: false,

                    }
                }
            });
            $(".fancybox1").fancybox({
                'width': 1000,
                'height': 700,
                fitToView: true,
                autoSize: true,
                closeClick: false,

                helpers: {
                    overlay: {
                        locked: false,

                    }
                }
            });


            $(".fancyboxEnq").fancybox({
                'width': 400,
                'height': 450,
                'z-index': 9999,
                fitToView: true,
                autoSize: false,
                closeClick: false,

                helpers: {
                    overlay: {
                        locked: false,

                    }
                }
            });

        });

        //  if ($(window).width() < 768) {
        //         $("#v-pills-profile-tab").on('click', function() {
        //             // Find the element with both id "dynamictabstrp" and class "active"
        //             var $target = $(".tab-pane.active");

        //             // If no element with both id "tab-pane" and class "active" is found,
        //             // fallback to selecting the element with id "tab-pane" only
        //             if ($target.length === 0) {
        //                 $target = $(".tab-pane");
        //             }

        //             // Scroll to the top of the target element
        //             $('html, body').animate({
        //                 scrollTop: $target.position().top
        //             });
        //         });
        //     }
        if ($(window).width() < 768) {
            // Array of IDs for elements to scroll to
            var tabIDs = ["#v-pills-home-tab", "#v-pills-profile-tab", "#v-pills-messages-tab", "#v-pills-settings-tab",
                "#v-pills-la-tab", "#v-pills-new-tab", "#v-pills-tabContent"
            ];

            // Loop through each tab ID
            tabIDs.forEach(function(tabID) {
                $(tabID).on('click', function() {
                    // Find the element with both id "dynamictabstrp" and class "active"
                    var $target = $(".tab-pane.active");

                    // If no element with both id "tab-pane" and class "active" is found,
                    // fallback to selecting the element with id "tab-pane" only
                    if ($target.length === 0) {
                        $target = $(".tab-pane");
                    }

                    // Scroll to the top of the target element
                    $('html, body').animate({
                        scrollTop: $target.position().top
                    });
                });
            });
        }

        var floatingButton = $('.floating-button span');
        floatingButton.text('+');

        function toggleSocialMenu() {
            var socialIcons = $('.social-icons');

            if (socialIcons.is(':visible')) {
                socialIcons.fadeOut();
                floatingButton.text('+');
            } else {
                socialIcons.fadeIn();
                floatingButton.text('-');
            }
        }
    </script>
    @yield('extrajs')

</body>

</html>
