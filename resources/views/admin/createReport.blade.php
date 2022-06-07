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
            <form action="{{route('admin.create')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="form-group">
                    <label for="image">افزودن تصویر</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="date">تاریخ</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{old('date')}}">
                </div>

                <div class="form-group">
                    <label for="location">مکان</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{old('location')}}" >
                </div>
                <div class="form-group">
                    <label for="count">شماره برنامه</label>
                    <input type="text" class="form-control" id="count" name="count" value="{{old('count')}}">
                </div>
                <div class="form-group">
                    <label for="age">گروه سنی</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{old('age')}}">
                </div>
                <div class="form-group">
                    <label for="time">زمان</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{old('time')}}">
                </div>


                <div class="form-group">
                    <label for="content">محتوا</label>
                    <textarea type="text" class="form-control" id="content" name="content">{{old('content')}}
                    </textarea>
                </div>

                {{--<div class="form-group" style="float: left">--}}
                    {{--<label for="tags">دسته بندی</label>--}}
                    {{--@foreach($tags as $tag)--}}
                    {{--<div class="checkbox">--}}
                        {{--<span>--}}
                        {{--<input type="checkbox" id="tags" name="tags[]" value="{{$tag->id}}">{{$tag->name}}--}}
                    {{--</span>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="row">
                    <div class="col-xl-12">
                        <button style=" margin-right: 550px; margin-top: 20px;
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
    <script>
        CKEDITOR.replace('content',{
            language:'fa',
            content:'{{app()->getLocale()}}',
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection