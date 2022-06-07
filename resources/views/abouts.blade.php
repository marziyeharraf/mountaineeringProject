@extends('layouts.master')
@section('title')
    درباره ما
@endsection
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url(assets/images/header-background.jpg)">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>درباره ما</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">خانه</a></li>
                        <li><span>.</span></li>
                        <li>صفحات</li>
                        <li><span>.</span></li>
                        <li class="active">درباره ما</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Page Start-->
    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-page__left">
                        <div class="about-page__img">
                            <img src="assets/images/about.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-page__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">درباره ما بیاموزید</span>
                            <h2 class="section-title__title">لذت تفریح با گروه</h2>
                        </div>
                        <p class="about-page__text-1">

                            محیطی سالم برای شرکت خانواده ها و همچنین به صورت انفرادی
                        </p>
                        <p class="about-page__text-2">گروه کوهنوردی شهید تهرانی مقدم زیر نظر مسجد عظیمی شیراز، هر جمعه در شیراز یا خارج از شیراز برنامه کوهنوردی برگزار میکند. افراد میتوانند به صورت خانوادگی یا انفرادی در این برنامه شرکت کنند.</p>
                        <div class="about-page__progress">
                            <div class="about-page__progress-single">
                                <h4 class="about-page__progress-title">سطح برنامه ها</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="77%">
                                        <div class="count-text">77%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-page__progress-single">
                                <h4 class="about-page__progress-title">میانگین شرکت کننده ها از افراد گروه</h4>
                                <div class="bar marb-0">
                                    <div class="bar-inner count-bar" data-percent="60%">
                                        <div class="count-text">60%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Page End-->

    <!--Book Now Start-->

    <!--Video Two Start-->

    <!--Video Two End-->

    <!--Counter One Start-->
    <!--Counter One End-->

    <!--Brand Three Start-->

    <!--Brand Three End-->
    @endsection