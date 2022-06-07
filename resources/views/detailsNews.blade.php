@extends('layouts.master')
@section('title','گزارش')
@section('content')
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
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__">
                        <div class="news-details__img">
                            <img src="{{$khabar->image}}" height="577" alt="">

                        </div>
                        <div class="news-details__content">
                            <ul class="list-unstyled news-one__meta">left
                                <li ><i style="color: #e8604c" class="far fa-comments"></i>{{count($Newscomments)}}</li>
                                <li><i  style="color: #e8604c" class="far fa-calendar"></i>{{$khabar->date}}</li>
                            </ul>
                            <h3 class="news-details__title">{{$khabar->title}}</h3>
                            <p class="news-details__text-1">{!! $khabar->content !!}</p></div>
                        <div class="news-details__bottom">

                        </div>

                        @if(1/*count($Newscomments)>0*/)
                            @foreach($Newscomments as $Newscomment)
                                @if($Newscomment->status == 2)
                                    <div class="author-one" style="background-color: #fafafa">

                                        <div class="author-one__image">
                                            <img src="/assets/images/blog/1001400465.png" alt="" style="max-width: 130px; max-height: 130px"
                                            >
                                        </div>
                                        <div class="author-one__content">
                                            <h3>{{$Newscomment->name}}</h3>
                                            <p>{{$Newscomment->message}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="comment-form">
                            <h3 class="comment-form__title">پیام بگذارید</h3>
                            <form method="post" action="{{route('NewsComments')}}" class="comment-one__form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="نام شما" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="آدرس ایمیل" name="email">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$khabar->id}}" name="post_id">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="نوشتن پیام"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">ارسال</button>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">آخرین برنامه ها</h3>
                            @foreach($akhbar as $khabar)
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{$khabar->image}}" alt="" width="60px" height="65px">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i class="far fa-comments">{{count($Newscomments)}}</i></a>
                                                <a href="{{route('blogNews.post',['id'=>$khabar->id])}}">{{$khabar->title}}</a>
                                            </h3>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection