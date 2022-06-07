@extends('layouts.admin')
@section('content')
    @include('partial.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="form-group">
                    <label for="image">تصویر</label>

                    <input type="file" class="form-control" id="image" name="image" value="{{$post->image}}">
                </div>
                <div class="form-group">
                    <label for="date">تاریخ</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{$post->date}}">
                </div>

                <div class="form-group">
                    <label for="location">مکان</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{$post->location}}">
                </div>
                <div class="form-group">
                    <label for="count">شماره برنامه</label>
                    <input type="text" class="form-control" id="count" name="count" value="{{$post->count}}">
                </div>
                <div class="form-group">
                    <label for="age">گروه سنی</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{$post->age}}">
                </div>
                <div class="form-group">
                    <label for="time">زمان</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{$post->time}}">
                </div>


                <div class="form-group">
                    <label for="content">محتوا</label>
                    <textarea type="text" class="form-control" id="content" name="content">{{$post->content}}
                    </textarea>
                </div>

                {{--<div class="form-group">--}}
                    {{--<label for="tags">دسته بندی</label>--}}
                    {{--<div class="checkbox">--}}
                        {{--@foreach($tags as $tag)--}}

                        {{--<span>--}}
                        {{--<input type="checkbox" id="tags" name="tags[]"--}}
                               {{--value="{{$tag->id}}"{{$post->tags->contains($tag->id)?'checked':''}}>{{$tag->name}}--}}
                        {{--</span>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}

                {{--</div>--}}

                <div class="form-group">
                    <button type="submit" class="btn-primary">edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection