@extends('layouts.admin')
@section('content')
    @include('partial.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.updatePlainsThisweek')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$PlainsThisweek->id}}">
                <div class="form-group">
                    <label for="title">عنوان</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$PlainsThisweek->title}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>

                <div class="form-group">
                    <label for="place">مکان</label>
                    <input type="text" class="form-control" id="place" name="place" value="{{$PlainsThisweek->place}}">
                </div>

                <div class="form-group">
                    <label for="date">تاریخ</label>
                    <input type="text" class="form-control" id="date" name="date" value="{{$PlainsThisweek->date}}">
                </div>
                <div class="form-group">
                    <label for="time">زمان</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{$PlainsThisweek->time}}">
                </div>

                <div class="form-group">
                    <label for="countplains">تعداد برنامه های برگزار شده</label>
                    <input type="text" class="form-control" id="countplains" name="countplains" value="{{$PlainsThisweek->countplains}}">
                </div>
                <div class="form-group">
                    <label for="averageplains">میانگین افراد شرکت کننده در برنامه ها</label>
                    <input type="text" class="form-control" id="averageplains" name="averageplains" value="{{$PlainsThisweek->averageplains}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary">edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection