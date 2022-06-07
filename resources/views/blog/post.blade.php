@extends('layouts.master')
@section('title')
    درباره ما
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">learning laravel</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="post-title">learning laravel 1</h1>
            <img src="{{URL::to('assets/images/laravel.jpg')}}" alt="" width="1000" height="500">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus dignissimos dolores
                exercitationem fugiat tempore? Atque debitis dicta expedita incidunt nesciunt odit officiis possimus
                quas?</p>
        </div>
    </div>

@endsection