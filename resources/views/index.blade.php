@extends('layouts.master')
@section('title',' باشگاه کوهنوردی شهید تهرانی مقدم')
@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/images/backgrounds/slideshow.jpg);"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2>باشگاه کوهنوردی</h2>
                                    <p>شهید تهرانی مقدم</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(assets/images/backgrounds/2661026.jpg);"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h2>آموزش</h2>
                                    <p>کوهنوردی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-slider-nav">

                <div class="main-slider-button-next"><span class="icon-right-arrow"></span></div>
                <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
            </div>
        </div>
    </section>

    <!--Tour Search Start-->

    <!--Tour Search End-->

    <!--Destinations One Start-->

    <!--Destinations One End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one-shape-1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="assets/images/shapes/about-one-shape-1.png" alt="">
        </div>
        <div class="about-one-shape-2 float-bob-y"><img src="assets/images/shapes/about-one-shape-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="about-one__left">
                        <div class="about-one__img-box">
                            <div class="about-one__img">
                                <img src="assets/images/photo_2021-10-08_08-54-17.jpg" alt="">
                            </div>
                            <div class="about-one__call">
                                <div class="about-one__call-icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="about-one__call-number">
                                    <p>اکنون عضو شوید.</p>
                                    <h4><a href="tel:666-888-0000">09215561469</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <p class="about-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">با ما آشنا بشو</span>
                        <h2 class="section-title__title">به گروه کوهنوردی ما بپیوندید.</h2>
                    </div>
                    <p class="about-one__right-text">                            گروه کوهنوردی شهید تهرانی مقدم زیر نظر مسجد عظیمی شیراز، هر جمعه در شیراز یا خارج از شیراز برنامه کوهنوردی برگزار میکند. افراد میتوانند به صورت خانوادگی یا انفرادی در این برنامه شرکت کنند.</p><br>

                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>محیطی سالم برای شرکت خانواده ها و همچنین به صورت انفرادی</p>

                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>محیطی با نشاط برای کودکان و نوجوانان</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>صعود به قله های مختلف</p>
                            </div>
                        </li>
                    </ul>
                    <p>                        جهت عضویت و یا تماس با مدیریت جهت دریافت اطلاعات بیشتر روی لینک زیر کلیک کنید.</p>
                    <a href="{{route('registerform')}}" class="about-one__btn thm-btn">ثبت نام در گروه</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--About One End-->

    <!--Popular Tours Start-->
    <section class="popular-tours-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">آخرین برنامه ها</span>
                <h2 class="section-title__title">گزارش برنامه های کوهنوردی برگزار شده</h2>
            </div>
            <div class="row">
                @foreach($posts as $post)
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--Popular Tours Two Single-->
                    <div class="popular-tours__single">
                        <div class="popular-tours__img">
                            <a href="{{route('blog.post',['id'=>$post->id])}}"><img src="{{$post->image}}" alt=""></a>

                        </div>
                        <div class="popular-tours__content">
                            <h3 class="popular-tours__title"> <a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->title}}</a></h3>
                            <div class="date"><i class="fa fa-calendar"></i><span>{{$post->date}}</span></div>
                            <div class="gt-place"><i class="fa fa-map-marker"></i><span style="color: #e8604c">{{$post->location}}</span></div>

                            <ul class="popular-tours__meta list-unstyled">
                                <li><a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->count}}</a></li>
                                <li><a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->age}} </a></li>
                                <li><a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->time}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </section>
    <!--Popular Tours End-->
    <!--Video Two Start-->
    <section class="video-one">
        <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(assets/images/backgrounds/video-one-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="video-one__left">
                        <div class="video-one__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-one__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <p class="video-one__tagline">آیا آماده کوهنوردی هستید؟</p>
                        <h2 class="video-one__title">برنامه این هفته گروه کوهنوردی :</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="video-one__right">
                        <ul class="list-unstyled video-one__four-icon-boxes">
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="fa fa-mountain"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">کوه<br>{{$PlainsThisweek->title}}</a></h4>

                            </li>
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="icon-place"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">مکان<br> {{$PlainsThisweek->place}}</a></h4>
                            </li>
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="fa fa-calendar"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">تاریخ <br>{{$PlainsThisweek->date}}</a></h4>
                            </li>
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="icon-clock"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">زمان کوهنوردی <br> {{$PlainsThisweek->time}}</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video Two End-->

    <!--Counter One Start-->
    <div class="counter-one">
        <div class="counter-one__container">
            <ul class="list-unstyled counters-one__box">
                <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                <h3 style="direction: ltr" class="odometer" data-count="{{$PlainsThisweek->countplains}}">00</h3>
                    <p class="counter-one__text">تعداد برنامه های برگزار شده</p>
                </li>
                <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                    <h3 style="direction: ltr" class="odometer" data-count="{{$PlainsThisweek->averageplains}}">00</h3>
                    <p class="counter-one__text">میانگین افراد شرکت کننده در برنامه ها</p>
                </li>
            </ul>
        </div>
    </div>
    <!--Counter One End-->
    <!--Brand One Start-->

    <!--Brand One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/mountain-3-xxl.png" alt="">
        </div>
        <div class="testimonial-one-shape-3 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
        </div>

    </section>
    <!--Testimonial One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one-bg" style="background-image: url(assets/images/shapes/gallery-map.png)"></div>
        <div class="gallery-one__container-box clearfix">
            <ul class="list-unstyled gallery-one__content clearfix">
                <li class="wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/asb1.png" alt="">
                        <div class="gallery-one__iocn">
                            <a href="https://www.instagram.com/p/CQ3Q3PqsNnF/?utm_medium=copy_link" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="200ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/31.png" alt="">
                        <div class="gallery-one__iocn">
                            <a href="https://www.instagram.com/p/CRZbtYIsOkI/?utm_medium=copy_link" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/71.png" alt="">
                        <div class="gallery-one__iocn">
                            <a href="https://www.instagram.com/p/CQBxijihBia/?utm_medium=copy_link" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/chare.png" alt="">
                        <div class="gallery-one__iocn">
                            <a href="https://www.instagram.com/p/CR_SsIAMd2d/?utm_medium=copy_link" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/Bamoo_mountain1.png" alt="">
                        <div class="gallery-one__iocn">
                            <a href="https://www.instagram.com/p/CT7e9C-MO3d/?utm_medium=copy_link" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Gallery Oned End-->

    <!--Why Choose Start-->
    <section class="why-choose">
        <div class="why-choose__container">
            <div class="why-choose__left">
                <div class="why-choose__left-bg"
                     style="background-image: url(assets/images/3491376.png)"></div>
                <div class="why-choose__toggle">
                    <p>تفریحی<br>کوهنوردی</p>
                </div>
            </div>
            <div class="why-choose__right">
                <div class="why-choose__right-map"
                     style="background-image: url(assets/images/shapes/why-choose-right-map.png)"></div>
                <div class="why-choose__right-content">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">چگونگی برنامه های ما</span>
                        <h2 class="section-title__title">چرا ما را انتخاب کنید</h2>
                    </div>
                    <ul class="list-unstyled why-choose__list">
                        <li>
                            <div class="icon">
                                <span class="icon-user"></span>
                            </div>
                            <div class="text">
                                <h4>خانواده محور!</h4>
                                <p>محیط سالم و فرهنگی باشگاه این امکان را فراهم آورده است که خانواده ها به باشگاه اعتماد کرده و از حضور خانوادگی و انفرادی در برنامه های ناب ما لذت ببرند.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-travel-map"></span>
                            </div>
                            <div class="text">
                                <h4>برنامه های فرهنگی</h4>
                                <p>از جمله برنامه های فرهنگی این گروه میتوان به مسابقات ورزشی برای کودکان و نوجوانان , قرعه کشی از بین افرادی که در کوهنوردی شرکت نموده اند و دادن هدایا به آن ها , قراعت زیارت عاشورا در ایام سوگواری ائمه به همراه صبحانه و... میتوان اشاره کرد.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="news-one__top">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="news-one__top-left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">آخرین اخبار</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="news-one__top-right">
                            <a href="{{route('news')}}" class="news-one__btn thm-btn">دیدن همه </a></div>
                    </div>
                </div>
            </div>
            <div class="news-one__bottom">
                <div class="row">
                    @foreach($akhbar as $khabar)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img style="height: 300px" src="{{$khabar->image}}" alt="">
                                <a href="{{route('blogNews.post',['id'=>$khabar->id])}}">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>{{$khabar->date}}</p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><i class="far fa-user-circle"></i>مدیر</li>
                                    <li><i class="far fa-comments"></i>2 نظر</li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="{{route('blogNews.post',['id'=>$khabar->id])}}">{{$khabar->title}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!--News One End-->
@endsection