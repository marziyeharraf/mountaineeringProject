@extends('layouts.admin')
@section('content')
    @include('partial.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('adminNews.update')}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$akhbar->title}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$akhbar->id}}">
                </div>

                <div class="form-group">
                    <label for="title">تصویر</label>
                    <img src="{{$akhbar->image}}" alt="" width="100" height="100">
                    <input type="file" class="form-control" id="image" name="image" value="{{$akhbar->image}}">
                </div>

                <div class="form-group">
                    <label for="content">محتوا</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{$akhbar->content}}">
                </div>

                <div class="form-group">
                    <label for="date">تاریخ</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{$akhbar->date}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn-primary">edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection