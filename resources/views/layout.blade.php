<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wiki-Poly-edu-vn </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/client/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/client/css/bootstrap.min.css">
    <link rel="stylesheet" href="/client/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/client/css/ticker-style.css">
    <link rel="stylesheet" href="/client/css/flaticon.css">
    <link rel="stylesheet" href="/client/css/slicknav.css">
    <link rel="stylesheet" href="/client/css/animate.min.css">
    <link rel="stylesheet" href="/client/css/magnific-popup.css">
    <link rel="stylesheet" href="/client/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/client/css/themify-icons.css">
    <link rel="stylesheet" href="/client/css/slick.css">
    <link rel="stylesheet" href="/client/css/nice-select.css">
    <link rel="stylesheet" href="/client/css/style.css">
    <style>
        /* Kiểu menu cấp 1 */
        ul.submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
        }

        /* Hiển thị menu con khi hover vào menu cấp 1 */
        li:hover>ul.submenu {
            display: block;
        }

        /* Kiểu menu cấp 2 */
        ul.submenu ul.sub-submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            padding: 10px 0;

        }

        /* Hiển thị menu con cấp 2 khi hover vào menu cấp 1 */
        ul.submenu li:hover>ul.sub-submenu {
            display: block;
            top: 15px;
            background-color: white;
            /* width: 180px; */


        }

        ul.sub-submenu>li {
            height: 30px;
            cursor: pointer;
            background-color: white;
        }

        ul.sub-submenu>li>a{
            height: 30px;
            cursor: pointer;
            padding: 6px 15px !important;
            background-color: white;
        }
    </style>


</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/client/img/logo/logo-cao-dang.png" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <header>
        <!-- Header Start -->

        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="/client/img/icon/header_icon1.png" alt="">34ºc, Nắng tý có mưa!
                                        </li>
                                        <li><img src="/client/img/icon/header_icon1.png" alt="">Thứ Sáu, 29 tháng 9, 2023
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#" class="text-uppercase">Đăng Nhập</a></li>
                                        <li><a href="#" class="text-uppercase">Đăng Ký</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="/client/img/logo/logo-cao-dang.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="/client/img/hero/caodang-card.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="/client/img/logo/logo-cao-dang.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Trang Chủ</a></li>
                                            <!-- <li><a href="categori.html">Tuyển Sinh</a></li> -->
                                            <!-- <li><a href="about.html">Chương Trình Đào Tạo</a></li> -->
                                            <li><a href="#">Tuyển Sinh <i class="fa-solid fa-angle-right fa-rotate-90 fa-xs"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Tuyển sinh 2023</a></li>
                                                    <li><a href="blog.html">Học phí</a></li>
                                                    <li><a href="single-blog.html">Nộp hồ sơ online</a></li>
                                                    <li><a href="details.html">Những điều cần biết ?</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Chương Trình Đào Tạo  <i class="fa-solid fa-angle-right fa-rotate-90 fa-xs"></i></a>
                                                <ul class="submenu">
                                                    {{-- <li><a href="elements.html">Công nghệ thông tin <i class="fa-solid fa-angle-right fa-xs"></i></a>
                                                        <ul class="sub-submenu">
                                                            <li><a href="elements.html" class="pt-3 ">Lập trình Web</a>
                                                            </li>
                                                            <li><a href="elements.html" class="pt-3 ">Lập trình
                                                                    Mobile</a></li>
                                                            <li class="pb-3"><a href="elements.html" class="pt-3 ">Phát trển phầm
                                                                    mềm</a></li>
                                                        </ul>
                                                    </li> --}}
                                                    {{-- <li><a href="blog.html">Quản trị kinh doanh</a></li>
                                                    <li><a href="single-blog.html">Thiết kế đồ họa</a></li>
                                                    <li><a href="single-blog.html">Tiếng anh</a></li>
                                                    <li><a href="details.html">Công nghệ kỹ thuật cơ khí</a></li> --}}
                                                    {{-- {{ $majorC }} --}}
                                                    @foreach($major as $key => $mj)


                                                    <li><a href="{{ route('sort_major',$mj->id )}}">{{ $mj->name }}</a>
                                                        <ul class="sub-submenu" style="border-top: 5px #fc3f00 solid;">
                                                        @foreach($majorC as $key => $maC)

                                                            @if($maC->id_major==$mj->id)

                                                                    <li style=" width: 180px;"><a href="{{ route('sort_major_child',$maC->id ) }}" class="pt-3 ">{{ $maC->name }}</a>
                                                                    </li>




                                                            @endif

                                                        @endforeach
                                                    </ul>

                                                    </li>


                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#">Hoạt Động Sinh Viên <i class="fa-solid fa-angle-right fa-rotate-90 fa-xs"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Hoạt động cơ sơ</a></li>
                                                    <li><a href="blog.html">Tra cứu Poly</a></li>
                                                    <li><a href="single-blog.html">Tin tức văn bằng</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Tuyển Dụng <i class="fa-solid fa-angle-right fa-rotate-90 fa-xs"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Tuyển dụng giảng viên</a></li>
                                                    <li><a href="blog.html">Làm việc & Thực tập</a></li>
                                                    <li><a href="single-blog.html">Doanh nghiệp tuyển dụng</a></li>
                                                </ul>
                                            </li>
                                            {{-- <li><a href="contact.html">Hot</a></li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="{{ route('sort_search') }}" method="POST">
                                            @csrf
                                            <input type="text" placeholder="Tìm kiếm ..." name="keyword">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            {{-- {{ $majorC[3]->id_major }} --}}
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>




    @yield('content')

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="/client/img/logo/logo_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Với triết lý đào tạo “Thực học – Thực nghiệp”, Cao đẳng FPT Polytechnic hướng
                                            tới đào tạo nguồn nhân lực chất lượng cao với phương pháp giảng dạy qua dự
                                            án thật.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Bản Tin</h4>
                                <p>Hãy chat với chúng tôi!</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Địa chỉ Email" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Địa chỉ Email '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="/client/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="/client/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra1.jpg" alt=""></a></li>
                                    <!-- <li><a href="#"><img src="/client/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/client/img/post/instra6.jpg" alt=""></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Bản quyền &copy;
                                    <script>document.write(new Date().getFullYear());</script> Mọi quyền được bảo lưu |
                                    Trang web này được thực hiện <i class="ti-heart" aria-hidden="true"></i> bởi <a
                                        href="" target="_blank">Nguyen Huy Thien</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Điều khoản sử dụng</a></li>
                                    <li><a href="#">Chính sách riêng tư</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./client/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./client/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./client/js/popper.min.js"></script>
    <script src="./client/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./client/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./client/js/owl.carousel.min.js"></script>
    <script src="./client/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./client/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./client/js/wow.min.js"></script>
    <script src="./client/js/animated.headline.js"></script>
    <script src="./client/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="./client/js/jquery.ticker.js"></script>
    <script src="./client/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./client/js/jquery.scrollUp.min.js"></script>
    <script src="./client/js/jquery.nice-select.min.js"></script>
    <script src="./client/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./client/js/contact.js"></script>
    <script src="./client/js/jquery.form.js"></script>
    <script src="./client/js/jquery.validate.min.js"></script>
    <script src="./client/js/mail-script.js"></script>
    <script src="./client/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./client/js/plugins.js"></script>
    <script src="./client/js/main.js"></script>
    <script src="https://kit.fontawesome.com/073099d884.js" crossorigin="anonymous"></script>


</body>

</html>
