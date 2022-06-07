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

        button {
            width: 50px !important;
        }

    </style>
    <table>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>پیام</th>
            <th>نام برنامه</th>
            <th>وضعیت</th>
            <th style="width: 80px"></th>
            <th style="width: 80px"></th>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->name}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->message}}</td>
                    @foreach($posts as $post)
                    @if($post->id == $comment->post_id)
                        <td> {{$post->title}}</td>
                    @endif
                @endforeach
                @if($comment->status == 2)
                    <td>منتشر شده</td>
                @else

                <td>نیاز به تایید</td>
                @endif
                <td>
                @if($comment->status != 2)
                    <a class="btn btn-block btn-primary btn-sm" href="{{route('admin.accept.comment',['id'=>$comment->id])}}">تاییدیه</a>
                @endif
                </td>
                <td><a class="btn btn-block btn-danger btn-sm" href="{{route('adminComment.delete',['id'=>$comment->id])}}">حذف</a></td></tr>

        @endforeach
    </table>
    {{$comments->links("pagination::bootstrap-4")}}
@endsection