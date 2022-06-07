@extends('layouts.admin')
@section('content')
    @include('partial.errors')
    <style>
        table {
            direction: rtl;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: right;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        button{
            width:50px!important;
        }

    </style>
<table>
    <tr>
        <th>عنوان</th>
        <th>تاریخ</th>
        <th>مکان</th>
        <th style="width: 80px"></th>
        <th style="width: 80px"></th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->date}}</td>
        <td>{{$post->location}}</td>
        <td><a class="btn btn-block btn-success btn-sm" href="{{route('admin.edit',['id'=>$post->id])}}">ویرایش</a></td>
        <td><a class="btn btn-block btn-danger btn-sm" href="{{route('admin.delete',['id'=>$post->id])}}">حذف</a></td>
    </tr>
        @endforeach

</table>
    {{$posts->links("pagination::bootstrap-4")}}
@endsection