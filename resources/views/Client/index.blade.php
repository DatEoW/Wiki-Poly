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




    <main>
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Xu hướng hiện nay</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Tương lai của công nghệ Blockchain.</li>
                                        <li class="news-item">Trí tuệ nhân tạo (AI).</li>
                                        <li class="news-item">An ninh mạng.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="/client/img/trending/trending-bee.png" alt="">
                                    <div class="trend-top-cap">
                                        <span>Đăng kí Ngay</span>
                                        <h2><a href="details.html">12/6 – 17/7/2023 – TP.HCM – Cuộc thi "Challenge Bee
                                                On TikTok"<br> </a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    @for($i = 0; $i < 5; $i+=2)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ $post[$i]->img }}" alt="" style="height:157px">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1">{{ $post[$i]->cate_name }}</span>
                                                <h4><a href="{{route('details',$post[$i]->slug)}}">{{ $post[$i]->title }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor


                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                            @foreach($post as $key => $value)
                                @if($value->hot==2)
                                    <div class="trand-right-single d-flex">
                                        <div class="trand-right-img">
                                            <img src="{{ $value->img }}" alt=""
                                                style="width: 120px; height: 100px;">
                                        </div>
                                        <div class="trand-right-cap">
                                            <span class="color1">{{ $value->cate_name }}</span>
                                            <h4><a href="{{route('details',$value->slug)}}">{{ $value->title }}</a></h4>
                                        </div>
                                    </div>
                                @else

                                @endif

                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Tin Tức Hàng Tuần</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <!-- <img src="/client/img/news/weeklyNews2.jpg" alt=""> -->
                                        <img src="/client/img/news/khai-giang.jpg" alt="">

                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Sẵn sàng trở thành sinh viên Cao đẳng FPT Polytechnic</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single active">
                                    <div class="weekly-img">
                                        <img src="/client/img/news/khai-giang.jpg" alt="">

                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Sẵn sàng trở thành sinh viên Cao đẳng FPT Polytechnic</a></h4>

                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="/client/img/news/khai-giang.jpg" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Sẵn sàng trở thành sinh viên Cao đẳng FPT Polytechnic</a></h4>
                                    </div>
                                </div>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="/client/img/news/khai-giang.jpg" alt="">

                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">Strike</span>
                                        <h4><a href="#">Sẵn sàng trở thành sinh viên Cao đẳng FPT Polytechnic</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Tin Tức Mới</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>


                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            @foreach($major as $key => $mj)
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">{{ $mj->name }}</a>
                                            @endforeach
                                            {{-- <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                href="#nav-home" role="tab" aria-controls="nav-home"
                                                aria-selected="true">Tất cả</a> --}}
                                            <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Phong cách</a> -->

                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Đèn trung thu của sinh viên thiết kế đồ
                                                                    họa</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Đèn trung thu của sinh viên Digital
                                                                    Marketing</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Đèn trung thu của sinh viên IT</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Đèn trung thu của sinh viên tự động hóa</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Đèn trung thu của sinh viên Polytechnic</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                        aria-labelledby="nav-Sports">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Six -->
                                    <div class="tab-pane fade" id="nav-techno" role="tabpanel"
                                        aria-labelledby="nav-technology">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews1.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews2.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews3.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="/client/img/news/whatNews4.jpg" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1">Night party</span>
                                                            <h4><a href="#">Welcome To The Best Model Winner Contest</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {{-- <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Theo Dõi Chúng Tôi</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="/client/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="/client/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="/client/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="/client/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div> --}}
                        {{-- </div> --}}
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="/client/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Whats New End -->
        <!--   Weekly2-News start -->
        <div class="weekly2-news-area  weekly2-pading gray-bg">
            <div class="container">
                <div class="weekly2-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Tin Tức Thịnh Hành</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly2-news-active dot-style d-flex dot-style">
                                @foreach($post_views as $key => $value)
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <img src="{{ $value->img }}" alt="" style="width:270;height:180px">
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1">{{ $value->cate_name }}</span>
                                        <p>25 Jan 2020</p>
                                        <h4><a href="{{ route('details',$value->slug)}}">{{ $value->title }}</a></h4>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Start Youtube -->
        <div class="youtube-area video-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-items-active">
                            <div class="video-items text-center">
                                <!-- <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.44404621428!2d106.62129990756507!3d10.85379174928337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b684ce076f3%3A0x4da1cf0078f423fa!2zRlBUIFBvbHl0ZWNobmljIEjhu5MgQ2jDrSBNaW5oIC0gVG_DoCBU!5e0!3m2!1svi!2s!4v1696133404206!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.0874546276746!2d106.62655543323616!3d10.853650057316653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b161f50ae47%3A0x2328d1d1acc3b11a!2sFPT%20Polytechnic%20-%20T%C3%B2a%20F!5e0!3m2!1svi!2s!4v1696133279566!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="video-items text-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.2279520792897!2d106.62798360630147!3d10.852887395149699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529466247deb7%3A0x837f6cf22372ab7e!2zUGjhu5UgVGjDtG5nIENhbyDEkOG6s25nIEZQVCBQb2x5dGVjaG5pYyBUUC5IQ00!5e0!3m2!1svi!2s!4v1696133539283!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                            <div class="video-items text-center">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9973252236186!2d106.67660517493326!3d10.811515939339383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0012b43cb%3A0xb29f8dae6c0c28e7!2sFPT%20Polytechnic!5e0!3m2!1svi!2s!4v1696133581087!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                            <!-- <div class="video-items text-center">
                                <iframe
                                    src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcaodang.fptpoly%2Fvideos%2F857805049337338%2F&show_text=false&width=560&t=0"
                                    width="560" height="314" style="border:none;overflow:hidden" scrolling="no"
                                    frameborder="0" allowfullscreen="true"
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                    allowFullScreen="true"></iframe>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="video-info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="video-caption">
                                <div class="top-caption">
                                    <span class="color1">Politics</span>
                                </div>
                                <div class="bottom-caption">
                                    <h2>Chào mừng bạn đến với cuộc thi với chiến thắng xuất sắc nhất </h2>
                                    <p>Sau 3 tháng phát động và tổ chức, vòng Chung kết toàn quốc cuộc thi Game Việt
                                        Hackathon 2023 đã diễn ra với sự tham gia của 14 cái tên xuất sắc nhất trong hơn
                                        150 đội tới từ các trường CĐ - ĐH trên cả nước.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testmonial-nav text-center">
                                <div class="single-video">
                                    <iframe
                                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcaodang.fptpoly%2Fvideos%2F782896553525640%2F&show_text=false&width=560&t=0"
                                        width="560" height="" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                        allowFullScreen="true"></iframe>
                                    <div class="video-intro">
                                        <h4>Nói gì về sinh viên FPT Polytechnic</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe
                                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcaodang.fptpoly%2Fvideos%2F3159943514312654%2F&show_text=false&width=560&t=0"
                                        width="560" height="" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                        allowFullScreen="true"></iframe>
                                    <div class="video-intro">
                                        <h4>Nói gì về sinh viên FPT Polytechnic</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe
                                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcaodang.fptpoly%2Fvideos%2F999183638065835%2F&show_text=false&width=560&t=0"
                                        width="560" height="314" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                        allowFullScreen="true"></iframe>
                                    <div class="video-intro">
                                        <h4>Nói gì về sinh viên FPT Polytechnic</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe
                                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcaodang.fptpoly%2Fvideos%2F177571308712759%2F&show_text=false&width=560&t=0"
                                        width="560" height="" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                        allowFullScreen="true"></iframe>
                                    <div class="video-intro">
                                        <h4>Nói gì về sinh viên FPT Polytechnic</h4>
                                    </div>
                                </div>
                                <div class="single-video">
                                    <iframe
                                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcaodang.fptpoly%2Fvideos%2F857805049337338%2F&show_text=false&width=560&t=0"
                                        width="560" height="" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowfullscreen="true"
                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                        allowFullScreen="true"></iframe>
                                    <div class="video-intro">
                                        <h4>Nói gì về sinh viên FPT Polytechnic</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Start youtube -->
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Bài Viết Gần Đây</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="recent-active dot-style d-flex dot-style">
                                @foreach($post_recent as $key => $value)
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="{{ $value->img }}" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">{{ $value->major_name }}</span>
                                        <h4><a href="{{ route('details',$value->slug) }}">{{ $value->title }}</a></h4>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="/client/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Sáng tạo nghệ thuật vẽ nhanh với Wacom</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="/client/img/news/recent3.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Sáng tạo nghệ thuật vẽ nhanh với Wacom</a></h4>
                                    </div>
                                </div>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="/client/img/news/recent2.jpg" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="#">Sáng tạo nghệ thuật vẽ nhanh với Wacom</a></h4>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Recent Articles End -->
        <!--Start pagination -->
        <div class="pagination-area pb-45 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow roted"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><span
                                                class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End pagination  -->
    </main>

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
