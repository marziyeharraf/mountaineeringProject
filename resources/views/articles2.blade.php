@extends('layouts.master')
@section('title')
    اخبار
@endsection
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url(assets/images/header-background.jpg)"></div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>مقالات</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index">صفحه اصلی</a></li>
                        <li><span>.</span></li>
                        <li class="active">مقالات</li>
                        <li><span>.</span></li>
                        <li class="active">انگیزشی</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <video  width="370" height="487"  poster="" controls>
                                <source src="assets/films/articles2vi.mp4" type="video/mp4" />
                            </video>

                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p>26 <br> <span>مهر</span></p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/articlepic2.png" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p>22 <br> <span>مهر</span></p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">لازمه رسیدن به هدف</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/articlein2.png" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p >18 <br> <span>مهر</span></p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">به پایان کوهنوردی فکر کن</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/maghale2.png" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p>12 <br> <span>مهر</span></p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">نه به انرژی منفی</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/articlein3.png" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p>14 <br> <span>شهریور</span></p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">                                    شجاعت نیز اندازه ای دارد، بیش از آن، بی احتیاطی است.</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/articleiin4.png" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p>21 <br> <span>شهریور</span></p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html"> از ناملایمات زندگی نترس!</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News One End-->
@endsection

