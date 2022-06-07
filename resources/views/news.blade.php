@extends('layouts.master')
@section('title')
    اخبار
@endsection
@section('content')

    <link href="/assets/css/style1.css" rel="stylesheet" type="text/css">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--Whole Container Start-->
    <div class="page-wrapper">

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__top">
                <div class="page-header-bg" style="background-image: url(/assets/images/header-background.jpg)"></div>
                <div class="page-header-bg-overly"></div>
                <div class="container">
                    <div class="page-header__top-inner">
                        <h2>اخبار</h2>
                    </div>
                </div>
            </div>
            <div class="page-header__bottom">
                <div class="container">
                    <div class="page-header__bottom-inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.blade.php">صفحه اصلی</a></li>
                            <li><span>.</span></li>
                            <li class="active">اخبار</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Content Wrapper Start-->
        <section class="tours-list">
            <div class="container">
                <div class="row">
                    <!--Content Start-->
                    @foreach($akhbar as $khabar)
                        <div class="col-xl-12 col-lg-12">
                            <div class="tours-list__right">
                                <div class="tours-list__inner">
                                    <!--Post Entry 2 Start-->
                                    <div class="tours-list__single">
                                        <div class="tours-list__img">
                                            <img src="{{$khabar->image}}" height="270" alt="">

                                        </div>
                                        <div class="tours-list__content">
                                            <h3 class="tours-list__title"><a
                                                        href="{{route('blogNews.post',['id'=>$khabar->id])}}">{{$khabar->title}}</a>
                                            </h3>
                                            <p class="tours-list__text">
                                            <p>{!! Str::limit($khabar->content, 198, ' ...') !!}</p></p>
                                            <ul class="tours-list__meta list-unstyled" style="background-color: white">
                                                <li><i
                                                            class="far fa-calendar"></i>{{$khabar->date}}

                                                <li><i style="color: #e8604c"
                                                       class="far fa-comments"></i>{{count($Newscomments)}}</li>

                                            </ul>
                                            <div class="read-more-btn"><a
                                                        href="{{route('blogNews.post',['id'=>$khabar->id])}}">ادامه
                                                    مطلب</a></div>
                                        </div>

                                    </div>
                                </div>

                            <!--Pagination Start-->
                            </div>
                        </div>
                        <!--Content End-->
                    @endforeach
                    <div style="padding-right: 550px"> {{$akhbar->links("pagination::bootstrap-4")}}</div>

                </div>
                <div class="layout-divider"></div>

            </div>
    </div>
    <!--Content Wrapper End-->

    </div>
    <!--Whole Container End-->

@endsection

