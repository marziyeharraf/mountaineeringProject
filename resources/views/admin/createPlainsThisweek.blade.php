@extends('layouts.admin')
@section('content')
    @include('partial.errors')
    <style>
        button:hover {
            background-color: #4CAF50;
            color: white;
        }
        </style>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('postadminPlainsthisweek.create')}}" method="post" >
                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>

                <div class="form-group">
                    <label for="place">مکان</label>
                    <input type="text" class="form-control" id="place" name="place" value="{{old('content')}}">
                </div>

                <div class="form-group">
                    <label for="image">تاریخ</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{old('image')}}">
                </div>
                <div class="form-group">
                    <label for="time">مدت زمان کوهنوردی</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{old('image')}}">
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <button style=" margin-right: 550px; margin-top: 50px;
                            padding: 10px;
                            padding-right: 40px;
                            padding-left: 40px;
                            background-color: #3c8dbc;
                            border-radius: 10px;" type="submit" class="thm-btn comment-form__btn">افزودن
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection