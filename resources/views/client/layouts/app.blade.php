<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.svg in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="./client/img/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('client/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/flaticon_musicly.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('client/app/css/main.css') }}">
</head>

<body>


    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- Preloader start -->
    <div id="preloader">
        <div class="line-loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="client/img/logo/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__user mb-30 d-xxl-none">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
                            <div class="user__name-mail">
                                <h4 class="user__name"><a href="javascript:void(0)">Johnson</a></h4>
                                <p class="user__mail">johnson@webmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas__search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="mobile-menu fix mb-30  d-xl-none"></div>
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="offcanvas__btn mb-30">
                        <a class="ms-border-btn" href="services.html"><i class="fa-solid fa-plus"></i> List Your
                            Service</a>
                    </div>
                    <div class="offcanvas__social">
                        <div class="ms-footer-social mb-0">
                            <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    @include('client.layouts.header')
    <!-- Header area end -->

    <div class="ms-all-content ms-content-mobile-space pt-130">
        <main>
            @yield('content')
        </main>
        <!-- Footer Area Start Here  -->
        @include('client.layouts.footer')
        <!-- Footer Area End Here  -->
    </div>


    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- JS here -->
    <script src="{{ asset('client/app/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/app/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('client/app/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/app/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('client/app/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('client/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('client/app/js/slick.min.js') }}"></script>
    <script src="{{ asset('client/app/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('client/app/js/backtotop.js') }}"></script>
    <script src="{{ asset('client/app/js/ajax-form.js') }}"></script>
    <script src="{{ asset('client/app/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('client/app/js/gsap.min.js') }}"></script>
    <script src="{{ asset('client/app/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('client/app/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('client/app/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('client/app/js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('client/app/js/jplayer.playlist.js') }}"></script>
    <script src="{{ asset('client/app/js/settings.js') }}"></script>
    <script src="{{ asset('client/app/js/main.js') }}"></script>

</body>

</html>
