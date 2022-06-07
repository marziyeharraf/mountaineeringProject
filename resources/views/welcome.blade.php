@extends('layouts.master')
<style>

    .row {
        padding: 25px;
    }

    .quote {
        font: 400 72px "arizonia", Helvetica, sans-serif;
        color: #F4645f;
        text-align: center;
    }

    .post-title {
        color: #a2d5f4;
    }
    img {
        display: block;
        margin: 0px auto;
    }
    p{
        text-align: center;
    }
    h1{
        text-align: center;
    }
</style>
@section('title')
    title that you want
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">the beautiful laravel website</p>
        </div>
    </div>
    @foreach($posts as $post){
    <div class="row">
        <div class="col-md-12">
            <h1 class="post-title">{{$post['title']}}</h1>
            <img src="{{URL::to('assets/images/laravel.jpg')}}" alt="" width="1000" height="500">
            <p>{{$post['content']}}</p>
            <p><a href="{{route('blog.post',['id'=>array_search($post,$posts)])}}">read more</a></p>
        </div>
    </div>}
    @endforeach
    <hr>

@endsection

