<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tentang Kami</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/styles/bootstrap4/bootstrap.min.css">
    <link href="{{URL::to('/')}}/front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}/front/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/styles/about.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/front/styles/about_responsive.css">
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
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                                    <li><a href="{{url('/abimbel')}}">Bimbel</a></li>
                                    <li class="active"><a href="{{url('/daftar')}}">Daftar</a></li>
                                </ul>
                                <!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

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
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">Tentang Kami</a></li>
                <li><a href="{{url('/abimbel')}}">Bimbel</a></li>
                <li class="active"><a href="{{url('/daftar')}}">Daftar</a></li>
            </ul>
        </nav>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="breadcrumbs_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="home">Home</a></li>
                                <li>Daftar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Daftar Sekarang !</h2>
                        <div class="section_subtitle"><p>Solusi Dalam Kemudahan Mencari Tempat Bimbel</p></div>
                    </div>
                </div>
            </div>
            <div class="row team_row">

                <!-- Team Item -->


                <!-- Team Item -->
                <div class="col-lg-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="front/images/siswa.jpg" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#">Daftar Sebagai Siswa</a></div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-lg-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="front/images/build.png" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="{{ route('bimbel.register') }}">Daftar Sebagai Bimbel</a></div>

                        </div>
                    </div>
                </div>

                <!-- Team Item -->

            </div>
        </div>
    </div>

    <!-- Counter -->


    <!-- Milestones -->



    <!-- Milestone -->

    <!-- Milestone -->


    <!-- Milestone -->


    <!-- Milestone -->


    <!-- Partners -->


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
<script src="{{URL::to('/')}}/front/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="{{URL::to('/')}}/front/js/about.js"></script>
</body>
</html>