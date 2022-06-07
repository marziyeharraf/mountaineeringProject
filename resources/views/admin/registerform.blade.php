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
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>سن</th>
        <th>شماره تماس</th>
        <th>شماره تماس یکی از نزدیکان</th>
        <th>جنسیت</th>
        <th>آدرس</th>
        <th>توضیحات</th>
        <th style="width: 80px"></th>
    </tr>
    @foreach($registers as $register)
    <tr>
        <td>{{$register->name}}</td>
        <td>{{$register->family}}</td>
        <td>{{$register->age}}</td>
        <td>{{$register->phonenumber}}</td>
        <td>{{$register->phonenumberfamily}}</td>
        <td>{{$register->gender}}</td>
        <td>{{$register->address}}</td>
        <td>{{$register->explain}}</td>
        <td><a class="btn btn-block btn-danger btn-sm" href="{{route('adminregister.delete',['id'=>$register->id])}}">حذف</a></td>
        </tr>
        @endforeach
</table>
    {{$registers->links("pagination::bootstrap-4")}}
@endsection