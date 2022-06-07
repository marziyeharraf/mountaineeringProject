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
        @foreach($Newscomments as $Newscomment)
            <tr>
                <td>{{$Newscomment->name}}</td>
                <td>{{$Newscomment->email}}</td>
                <td>{{$Newscomment->message}}</td>
                    @foreach($akhbar as $khabar)
                    @if($khabar->id == $Newscomment->post_id)
                        <td> {{$khabar->title}}</td>
                    @endif
                @endforeach
                @if($Newscomment->status == 2)
                    <td>منتشر شده</td>
                @else

                <td>نیاز به تایید</td>
                @endif
                <td>
                @if($Newscomment->status != 2)
                    <a class="btn btn-block btn-primary btn-sm" href="{{route('admin.accept.Newscomment',['id'=>$Newscomment->id])}}">تاییدیه</a>
                @endif
                </td>
                <td><a class="btn btn-block btn-danger btn-sm" href="{{route('adminNewsComment.delete',['id'=>$Newscomment->id])}}">حذف</a></td></tr>

        @endforeach
    </table>
    {{$Newscomments->links("pagination::bootstrap-4")}}
@endsection