@extends('layouts.master')
@section('title','برنامه های گروه')
@section('content')
    <section class="popular-tours-two" style="background-color: #fcfcfc">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline"> برنامه های گروه</span>
                <h2 class="section-title__title">گزارش برنامه های کوهنوردی برگزار شده</h2>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Popular Tours Two Single-->
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="{{$post->image}}" alt="">
                                    <div class="popular-tours__icon" >

                                        <a href="{{route('blog.post.like',['id'=>$post->id])}}"><i class="fa fa-heart"><p>{{count($post->likes)}}</p></i></a>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p style="font-weight: bold">
                                                    @foreach($post->tags as $tag)
                                                        #{{$tag->name}}-
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        {{--<a href="tour-details.html">--}}
                                        {{--<i class="fa fa-heart"></i>--}}
                                        {{--</a>--}}
                                </div>
                            </div>
                            <div class="popular-tours__content">
                                <h3 class="popular-tours__title"><a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->title}}</a></h3>
                                <div class="date"><i class="fa fa-calendar"></i><span>{{$post->date}}</span></div>
                                <div class="gt-place"><i class="fa fa-map-marker"></i><span style="color: #e8604c">{{$post->location}}</span></div>

                                <ul class="popular-tours__meta list-unstyled">
                                    <li><a href="{{route('blog.post',['id'=>$post->id])}}"> {{$post->count}}</a></li>
                                    <li><a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->age}} </a></li>
                                    <li><a href="{{route('blog.post',['id'=>$post->id])}}">{{$post->time}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{$posts->links("pagination::bootstrap-4")}}

            </div>
        </div>
    </section>
@endsection