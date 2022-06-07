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
                        <li><a href="index.blade.php">صفحه اصلی</a></li>
                        <li><span>.</span></li>
                        <li class="active">مقالات</li>
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
                            <div style="position: absolute ; top: 0 ; right: 0" class="news-one__date">
                                <p >26 <br> <span>مهر</span></p>
                            </div>
                            <video  width="370" height="487" controls poster="assets/images/3491445.png">
                                <source src="assets/films/teach.mp4" type="video/mp4" />
                            </video>


                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                </li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="news-details.html">اصول گام برداری در کوهنوردی</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-page-2.jpg" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>28 <br> <span>مرداد</span></p>
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
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-page-3.jpg" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>28 <br> <span>مرداد</span></p>
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
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-page-4.jpg" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>28 <br> <span>مرداد</span></p>
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
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-page-5.jpg" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>28 <br> <span>مرداد</span></p>
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
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <!--News One Single-->
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-page-6.jpg" alt="">
                            <a href="news-details.html">
                                <span class="news-one__plus"></span>
                            </a>
                            <div class="news-one__date">
                                <p>28 <br> <span>مرداد</span></p>
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
            </div>
        </div>
    </section>
    <!--News One End-->
@endsection

