@extends('layout')
@section('content')
<main class="my-3">
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <!-- Hot Aimated News Tittle-->
            <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div> -->
            <div class="row flex-reverse">
                <div class="col-lg-8 ">
                    <!-- Trending Tittle -->
                    <div class="title">
                        <h3>
                           {{$post->title}}
                        </h3>
                    </div>
                    <div class="about-right mb-90">
                        <!-- <div class="about-img">

                            </div> -->
                        <!-- <div class="section-tittle mb-30 pt-30">
                                <h3>Here come the moms in space</h3>
                            </div> -->
                        <div class="about-prea">
                            <!-- DETAIL CONTENT -->

                            <p class="about-pera1 mb-25 about-img ">
                               {!!$post->content!!}
                            </p>

                            <!-- comment -->

                        </div>
                        <!-- <div class="section-tittle">
                                <h3>Unordered list style?</h3>
                            </div>
                            <div class="about-prea">
                                <p class="about-pera1 mb-25">The refractor telescope uses a convex lens to focus the light on the eyepiece.
                                    The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.</p>
                                <p class="about-pera1 mb-25">Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking at. You want your telescope to have good collimation so you are not getting a false image of the celestial body.</p>
                                <p class="about-pera1 mb-25">
My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                                    the refractor telescope uses a convex lens to focus the light on the eyepiece.
                                    The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.
                                    Collimation is a term fo
                                    Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                    <p class="about-pera1 mb-25">
                                    Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                                    Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                    <p class="about-pera1 mb-25">
                                    Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                                    Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                            </div>
                            <div class="social-share pt-30">
                                <div class="section-tittle">
                                    <h3 class="mr-20">Share:</h3>
                                    <ul>
                                        <li><a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div> -->
                    </div>
                    <!-- From -->
                    <!-- <div class="row">
                            <div class="col-lg-8">
<form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                </div>

                <div class="col-lg-4 ">




                    <!-- Section Tittle
<div class="section-tittle mb-40">
                            <h3>Follow Us</h3>
                        </div>
                        Flow Socail
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                    <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        New Poster
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div> -->
                </div>
            </div>



            <div class="container mt-5">

                <div class="row">

                    <div class="col-md-9">


                        <div class="headings d-flex justify-content-between align-items-center mb-3">
                            <h5>Bình luận({{ isset($comment) ? count($comment) : 0 }})</h5>
                        </div>

                        @if(isset($comment) && count($comment) > 0)
                            @foreach($comment as $singleComment)
                                <div class="card p-3 mt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="user d-flex flex-row align-items-center">
                                            <!-- Gravatar image based on the user's email -->
                                            <img src="{{ 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($singleComment->email_user))).'?s=30&d=mp' }}" class="user-img rounded-circle mr-2">
                                            <span>
                                                <small class="font-weight-bold text-primary">{{ $singleComment->name_user }}</small>

                                            </span>
                                        </div>
                                        <small>{{ $singleComment->time_ago }}</small>
                                    </div>

                                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                                        <div class="reply px-4">
                                            <small class="font-weight-bold">{{ $singleComment->content }}</small>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No comments yet.</p>
                        @endif

                    <!-- Comment Form -->
                <div class="  mt-2 ">
                    <form action="{{ route('save_comment') }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name_user" class="form-label">Tên người dùng:</label>
                                <input type="text" id="name_user" name="name_user" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="user_email" class="form-label">Email: (không bắt buộc)</label>
                                <input type="email" id="user_email" name="email_user" class="form-control">
                            </div>
                        </div>

                        <label for="content" class="form-label mt-3">Bình luận:</label>
                        <textarea id="content" name="content" class="form-control" required></textarea>

                        <input type="hidden" name="id_post" value="{{ $post->id }}">
                        <input type="hidden" name="id_major" value="{{ $post->id_major }}">
                        <input type="hidden" name="hidden" value="1">

                        <button type="submit" style="
    display: inline-block;margin-top:10px;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border: 2px solid #ff6600;
    color: #fff;
    background-color: #ff6600;
    border-radius: 4px;
">Gửi bình luận</button>

                    </form>
                </div>

                    </div>

                </div>

            </div>


        </div>
</div>
    <!-- About US End -->
</main>
@endsection
