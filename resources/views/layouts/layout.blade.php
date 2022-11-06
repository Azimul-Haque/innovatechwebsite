<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <link rel="stylesheet" href="/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/css/plugins/plugins.min.css">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>


<div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>


<!--====================  header area ====================-->
<div class="header-area">
    <div class="header-bottom-wrap  bg-white header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{route('home')}}">
                                <img src="/images/logo/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="header-right">

                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-three d-none d-xl-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="">
                                            <a href="{{route('home')}}"><span>Home</span></a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="{{route('services')}}"><span>Services</span></a>
                                            <ul class="submenu">
                                                <li><a href=""><span>Web Development</span></a></li>
                                                <li><a href=""><span>Government</span></a></li>
                                                <li><a href=""><span>Mobile App Development</span></a></li>
                                                <li><a href=""><span>E-commerce</span></a></li>
                                                <li><a href=""><span>ERP</span></a></li>
                                                <li><a href=""><span>SME Management</span></a></li>
                                                <li><a href=""><span>School Management</span></a></li>
                                                <li><a href=""><span>Microfinance Management</span></a></li>
                                                <li><a href=""><span>IT consultancy</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="{{route('about_us')}}"><span>About Us</span></a>
                                        </li>
                                        <li class="">
                                            <a href="{{route('contact_us')}}"><span>Contact</span></a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>

                            <div class="header-search-form-two">
                                <form action="#" class="search-form-top-active">
                                    <div class="search-icon" id="search-overlay-trigger">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>

                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of header area  ====================-->

@yield('content')



<!--====================  footer area ====================-->
<div class="footer-area-wrapper reveal-footer bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-4 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="/images/logo/logo.png" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <li>62/1, Tejturi Bazar, East Razbazar, Dhaka</li>
                        <li><a href="mailto:innovatech.frm@gmail.com"
                               class="hover-style-link">innovatech.frm@gmail.com</a></li>
                        <li><a href="" class="hover-style-link text-black font-weight--bold">(+88)01737988070</a>
                        </li>
                        <li><a href="https://innovabd.tech/"
                               class="hover-style-link text-color-primary">innovabd.tech</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Menu</h6>
                    <ul class="footer-widget__list">
                        <li><a href="{{route('home')}}" class="hover-style-link">Home</a></li>
                        <li><a href="{{route('services')}}" class="hover-style-link">Services</a></li>
                        <li><a href="{{route('about_us')}}" class="hover-style-link">About Us</a></li>
                        <li><a href="{{route('contact_us')}}" class="hover-style-link">Contact</a></li>
                        <li><a href="{{route('privacy_policy')}}" class="hover-style-link">Privacy Policy</a></li>
                        <li><a href="{{route('refund_return_policy')}}" class="hover-style-link">Refund and Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Services</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">Web Development </a></li>
                        <li><a href="#" class="hover-style-link">Government</a></li>
                        <li><a href="#" class="hover-style-link">Mobile App Development</a></li>
                        <li><a href="#" class="hover-style-link">E-commerce</a></li>
                        <li><a href="#" class="hover-style-link">ERP</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Services</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">SME Management</a></li>
                        <li><a href="#" class="hover-style-link">School Management</a></li>
                        <li><a href="#" class="hover-style-link">Microfinance Management</a></li>
                        <li><a href="#" class="hover-style-link">IT consultancy</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                        <span class="copyright-text">&copy; 2020 InnovaTech. <a href="https://innovabd.tech/">All Rights
                                Reserved.</a></span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ul class="list ht-social-networks solid-rounded-icon">

                        <li class="item">
                            <a href="https://twitter.com/" target="_blank" aria-label="Twitter"
                               class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-twitter link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://facebook.com/" target="_blank" aria-label="Facebook"
                               class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-facebook-f link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://instagram.com/" target="_blank" aria-label="Instagram"
                               class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-instagram link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin"
                               class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-linkedin link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->


<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->
>

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="/images/logo/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="">
                        <a href="{{route('home')}}"><span>Home</span></a>
                    </li>
                    <li class="has-children">
                        <a href="{{route('services')}}">Services</a>
                        <ul class="sub-menu">
                            <li><a href=""><span>Web Development</span></a></li>
                            <li><a href=""><span>Government</span></a></li>
                            <li><a href=""><span>Mobile App Development</span></a></li>
                            <li><a href=""><span>E-commerce</span></a></li>
                            <li><a href=""><span>ERP</span></a></li>
                            <li><a href=""><span>SME Management</span></a></li>
                            <li><a href=""><span>School Management</span></a></li>
                            <li><a href=""><span>Microfinance Management</span></a></li>
                            <li><a href=""><span>IT consultancy</span></a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{route('about_us')}}"><span>About Us</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('contact_us')}}"><span>Contact</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->


<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!--====================  End of search overlay  ====================-->

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="/js/vendor/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="/js/vendor/bootstrap.min.js"></script>

<!-- Swiper Slider JS -->
<script src="/js/plugins/swiper.min.js"></script>

<!-- Light gallery JS -->
<script src="/js/plugins/lightgallery.min.js"></script>

<!-- Waypoints JS -->
<script src="/js/plugins/waypoints.min.js"></script>

<!-- Counter down JS -->
<script src="/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
<script src="/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="/js/plugins/images-loaded.min.js"></script>

<!-- Wavify JS -->
<script src="/js/plugins/wavify.js"></script>

<!-- jQuery Wavify JS -->
<script src="/js/plugins/jquery.wavify.js"></script>

<!-- circle progress JS -->
<script src="/js/plugins/circle-progress.min.js"></script>

<!-- counterup JS -->
<script src="/js/plugins/counterup.min.js"></script>

<!-- wow JS -->
<script src="/js/plugins/wow.min.js"></script>

<!-- animation text JS -->
<script src="/js/plugins/animation-text.min.js"></script>

<!-- Vivus JS -->
<script src="/js/plugins/vivus.min.js"></script>

<!-- Some plugins JS -->
<script src="/js/plugins/some-plugins.js"></script>


<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<!--
<script src="/js/plugins/plugins.min.js"></script>
-->

<!-- Main JS -->
<script src="/js/main.js"></script>


</body>


</html>
