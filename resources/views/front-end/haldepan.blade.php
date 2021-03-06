<!DOCTYPE html>
<html lang="en">
<head>
    <title>BimbelBest</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/styles/bootstrap4/bootstrap.min.css">
    <link href="{{URL::to('/')}}/front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->
        <div class="top_bar">
            <div class="top_bar_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                <div class="top_bar_login ml-auto">
                                    <div class="login_button"><a href="{{url('/hallogin')}}">Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <a href="#">
                                    <div class="logo_text">Bimbel<span>Best</span></div>
                                </a>
                            </div>
                            <nav class="main_nav_contaner ml-auto">
                                <ul class="main_nav">
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                                    <li><a href="{{url('/abimbel')}}">Bimbel</a></li>
                                    <li><a href="{{url('/daftar')}}">Daftar</a></li>
                                </ul>
                                <!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
 -->
                                <!-- Hamburger -->


                                <div class="hamburger menu_mm">
                                    <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Search Panel -->
        <div class="header_search_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                            <form action="#" class="header_search_form">
                                <input type="search" class="search_input" placeholder="Search" required="required">
                                <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
        <div class="search">
            <form action="#" class="header_search_form menu_mm">
                <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                    <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <nav class="menu_nav">
            <ul class="main_nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                <li><a href="{{url('/abimbel')}}">Bimbel</a></li>
                <li><a href="{{url('/daftar')}}">Daftar</a></li>
            </ul>
        </nav>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(front/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">BimbelBest</div>
                                    <div class="home_slider_subtitle">Cari Bimbel Terbaikmu !</div>
                                    <div class="home_slider_form_container">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(front/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">BimbelBest</div>
                                    <div class="home_slider_subtitle">Cari Bimbel Terbaikmu !</div>
                                    <div class="home_slider_form_container">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(front/images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">BimbelBest</div>
                                    <div class="home_slider_subtitle">Cari Bimbel Terbaikmu !</div>
                                    <div class="home_slider_form_container">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>

    <!-- Features -->

    <!-- Features Item -->


    <!-- Features Item -->


    <!-- Features Item -->

    <!-- Features Item -->


    <!-- Popular Courses -->

    <div class="courses">
        <div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Bimbel</h2>
                        <div class="section_subtitle"><p>Cari & Pilih Yang Terbaik </p></div>
                    </div>
                </div>
            </div>
            <div class="row courses_row">

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="front/images/jarimatikabaru.png" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="detailbimbel">Jarimatika</a></h3>
                            <div class="course_teacher">Randugunting, Tegal Selatan, Kota Tegal</div>
                            <div class="course_text">
                                <p>SD</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>20 Murid</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="front/images/kumonbaru.png" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="course.html">Kumon</a></h3>
                            <div class="course_teacher">Slerok, Tegal Timur, Kota Tegal</div>
                            <div class="course_text">
                                <p>SD, SMP</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>24 Murid</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="front/images/ganeshabaru.png" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title"><a href="course.html">Ganesha Operation</a></h3>
                            <div class="course_teacher">Mangkukusuman, Tegal Timur, Kota Tegal</div>
                            <div class="course_text">
                                <p>SD, SMP SMA</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>32 Murid</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="courses_button trans_200"><a href="bimbel">Lihat Semua Bimbel</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Counter -->

    <
    <!-- Milestones -->

    <!-- Milestone -->


    <!-- Milestone -->

    <!-- Milestone -->


    <!-- Milestone -->


    <!-- Events -->


    <!-- Event -->

    <!-- Event -->


    <!-- Event -->

    <!-- Team -->


    <!-- Team Item -->


    <!-- Team Item -->


    <!-- Team Item -->


    <!-- Team Item -->

    <!-- Latest News -->

    <!-- News Post Large -->


    <!-- News Posts Small -->


    <!-- News Posts Small -->


    <!-- News Posts Small -->


    <!-- News Posts Small -->


    <!-- Newsletter -->


    <!-- Newsletter Content -->

    <!-- Newsletter Form -->

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_background" style="background-image:url(front/images/footer_background.png)"></div>
        <div class="container">
            <div class="row footer_row">
                <div class="col">
                    <div class="footer_content">
                        <div class="row">

                            <div class="col-lg-3 footer_col">

                                <!-- Footer About -->
                                <div class="footer_section footer_about">
                                    <div class="footer_logo_container">
                                        <a href="#">
                                            <div class="footer_logo_text">Bimbel<span>Best</span></div>
                                        </a>
                                    </div>
                                    <div class="footer_about_text">
                                        <p>Cari Bimbel Terbaikmu</p>
                                    </div>
                                    <div class="footer_social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 footer_col">

                                <!-- Footer Contact -->
                                <div class="footer_section footer_contact">
                                    <div class="footer_title">Kontak Kami</div>
                                    <div class="footer_contact_info">
                                        <ul>
                                            <li>Email: BimbelBest.nesia@gmail.com</li>
                                            <li>Phone:  +(62) 85321432516</li>
                                            <li>Kota Tegal, Jawa Tengah, Indonesia</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 footer_col">

                                <!-- Footer links -->


                                <!-- Footer links -->


                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row copyright_row">
                <div class="col">
                    <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                        <div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | BimbelBest Indonesia
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{URL::to('/')}}/front/js/jquery-3.2.1.min.js"></script>
<script src="{{URL::to('/')}}/front/styles/bootstrap4/popper.js"></script>
<script src="{{URL::to('/')}}/front/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/front/plugins/greensock/TweenMax.min.js"></script>
<script src="{{URL::to('/')}}/front/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{URL::to('/')}}/front/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{URL::to('/')}}/front/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{URL::to('/')}}/front/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{URL::to('/')}}/front/plugins/easing/easing.js"></script>
<script src="{{URL::to('/')}}/front/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{URL::to('/')}}/front/js/custom.js"></script>
</body>
</html>