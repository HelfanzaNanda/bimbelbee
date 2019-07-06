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
                                    <li class="active"><a href="{{url('/about')}}">Tentang Kami</a></li>
                                    <li><a href="{{url('/abimbel')}}">Bimbel</a></li>
                                    <li><a href="{{url('/daftar')}}">Daftar</a></li>
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
                                <li>Tentang Kami</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Tentang Kami</h2>
                        <div class="section_subtitle"><p>BimbelBest Merupakan Suatu Aplikasi Yang Berfokus Pada Layanan Pendidikan, Guna Memudahkan Masyarakat Dalam Melakukan Pencarian Tempat Bimbingan Belajar </p></div>
                    </div>
                </div>
            </div>
            <div class="row about_row">

                <!-- About Item -->
                <div class="col-lg-4 about_col about_col_left">
                    <div class="about_item">
                        <div class="about_item_image"><img src="front/images/about_1.jpg" alt=""></div>
                        <div class="about_item_title"><a href="#">Visi</a></div>
                        <div class="about_item_text">
                            <p>Memudahkan Masyarakat Dalam Melakukan Pencarian Tempat Bimbingan Belajar di Kota Tegal</p>
                        </div>
                    </div>
                </div>

                <!-- About Item -->
                <div class="col-lg-4 about_col about_col_middle">
                    <div class="about_item">
                        <div class="about_item_image"><img src="front/images/about_2.jpg" alt=""></div>
                        <div class="about_item_title"><a href="#">Misi</a></div>
                        <div class="about_item_text">
                            <p>Mewujudkan Masyarakat akan sadar Teknologi.</p>
                        </div>
                    </div>
                </div>

                <!-- About Item -->
                <div class="col-lg-4 about_col about_col_right">
                    <div class="about_item">
                        <div class="about_item_image"><img src="front/images/about_3.jpg" alt=""></div>
                        <div class="about_item_title"><a href="#">Client</a></div>
                        <div class="about_item_text">
                            <p>Masyarakat, Mitra Bimbel</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Feature -->

    <div class="section_title_container text-center">
        <h2 class="section_title">Layanan BimbelBest</h2>
        <div class="section_subtitle"><p>Berikut Layanan Yang Kami Tawarkan Pada Anda</p></div> <br>
    </div>
</div>
</div>
<div class="row features_row">

    <!-- Features Item -->
    <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="front/images/cari.png" alt=""></div>
            <h3 class="feature_title">Cari Bimbel</h3>
            <div class="feature_text"><p>Anda Dapat Mencari Tempat Bimbel Yang Sesuai Dengan Keinginan</p></div>
        </div>
    </div>

    <!-- Features Item -->
    <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="front/images/wallet.png" alt=""></div>
            <h3 class="feature_title">Pembayaran</h3>
            <div class="feature_text"><p>Kini, Pembayaran Lebih Praktis, Anda Dapat Membayar Lewat No. Rekening Yang Sudah Tersedia, dan Meng-Unggah Foto Bukti Pembayaran</p></div>
        </div>
    </div>

    <!-- Features Item -->
    <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="front/images/Rating.png" alt=""></div>
            <h3 class="feature_title">Rating</h3>
            <div class="feature_text"><p>Anda Dapat Memberi Penilaian Kepada Tempat Bimbel, Sebagai Wujud Apresiasi Kepada Mitra Bimbel</p></div>
        </div>
    </div>

    <!-- Features Item -->
    <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
            <div class="feature_icon"><img src="front/images/mitra.png" alt=""></div>
            <h3 class="feature_title">Mitra Bimbel</h3>
            <div class="feature_text"><p> Anda Punya Tempat Bimbel ? Daftarkan Segera, dan Bergabung Bersama Kami Menjadi Mitra Bimbel</p></div>
        </div>
    </div>

</div>

<!-- Team -->

<div class="team">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">BimbelBest Team</h2>
                    <div class="section_subtitle"><p></p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">

            <!-- Team Item -->


            <!-- Team Item -->
            <div class="col-lg-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="front/images/deni.png" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Deni Marwansyah</a></div>
                        <div class="team_subtitle">Website Development</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="front/images/arip.png" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Arif Firmansyah</a></div>
                        <div class="team_subtitle">Mobile Development</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
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

<div class="section_title_container text-center">
    <h2 class="section_title">Mitra BimbelBest</h2>
    <div class="section_subtitle"><p></p></div>
</div>

<div class="partners">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="partners_slider_container">
                    <div class="owl-carousel owl-theme partners_slider">

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="front/images/partner_1.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="front/images/partner_2.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="front/images/partner_3.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="front/images/partner_4.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="front/images/partner_5.png" alt=""></div>

                        <!-- Partner Item -->
                        <div class="owl-item partner_item"><img src="front/images/partner_6.png" alt=""></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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