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
        <th>ایمیل</th>
        <th>پیام</th>
        <th style="width: 80px"></th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->message}}</td>
        <td><a class="btn btn-block btn-danger btn-sm" href="{{route('adminContact.delete',['id'=>$contact->id])}}">حذف</a></td>
        </tr>
        @endforeach

</table>

    {{$contacts->links("pagination::bootstrap-4")}}

@endsection