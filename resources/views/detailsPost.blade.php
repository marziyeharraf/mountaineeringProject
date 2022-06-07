@extends('layouts.master')
@section('title','گزارش')
@section('content')
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url(/assets/images/header-background.jpg)"></div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>گزارش برنامه ها</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.blade.php">صفحه اصلی</a></li>
                        <li><span>.</span></li>
                        <li class="active">برنامه های گروه</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{$post->image}}" alt="">
                        </div>
                        <div class="news-details__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><i  style="color: #e8604c"class="far fa-comments"></i>{{count($comments)}}</li>
                                <li><i  style="color: #e8604c" class="far fa-calendar"></i>{{$post->date}}</li>
                            </ul>
                            <h3 class="news-details__title">{{$post->title}}</h3>
                            <p class="news-details__text-1">{!! $post->content !!}</p></div>
                        <div class="news-details__bottom">


                        </div>
                        {{--@if(count($comments)>0)--}}
                        {{--<div class="tour-details__review-comment-single">--}}
                        {{--@foreach($comments as $comment)--}}
                        {{--@if($comment->status == 2)--}}
                        {{--<div class="tour-details__review-comment-top">--}}
                        {{--<div class="tour-details__review-comment-top-img">--}}
                        {{--<img src="/assets/images/resources/tour-review-1-2.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="tour-details__review-comment-top-content">--}}
                        {{--<h3>{{$comment->name}}</h3>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="tour-details__review-comment-content">--}}
                        {{--<p>{{$comment->message}}</p>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--@endforeach--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        @if(count($comments)>0)
                            @foreach($comments as $comment)
                                @if($comment->status == 2)
                                    <div class="author-one" style="background-color: #fafafa">

                                        <div class="author-one__image">
                                            <img src="/assets/images/blog/1001400465.png" alt="" style="max-width: 130px; max-height: 130px"
                                                 >
                                        </div>
                                        <div class="author-one__content">
                                            <h3>{{$comment->name}}</h3>
                                            <p>{{$comment->message}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        {{--<div class="comment-one">--}}
                        {{--<h3 class="comment-one__title">2 نظر</h3>--}}
                        {{--@foreach($comments as $comment)--}}
                        {{--@if($comment->status == 2)--}}
                        {{--<div class="comment-one__single">--}}
                        {{--<div class="comment-one__image">--}}
                        {{--<img src="/assets/images/blog/comment-1-1.png" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="comment-one__content">--}}
                        {{--<h3>{{$comment->name}}</h3>--}}
                        {{--<p>{{$comment->message}}</p>--}}
                        {{--<a href="#" class="thm-btn comment-one__btn">پاسخ</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        {{--@endforeach--}}
                        {{--</div>--}}

                        {{--Comment Form--}}
                        <div class="comment-form">
                            <h3 class="comment-form__title">پیام بگذارید</h3>
                            <form method="post" action="{{route('comments')}}" class="comment-one__form">
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
                                <input type="hidden" value="{{$post->id}}" name="post_id">
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
                        {{--end Comment Form--}}

                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">آخرین برنامه ها</h3>
                            @foreach($posts as $post)
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{$post->image}}" alt="" width="60" height="65">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                            class="far fa-comments"></i>{{count($comments)}}</a>
                                                <a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->title}}</a>
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