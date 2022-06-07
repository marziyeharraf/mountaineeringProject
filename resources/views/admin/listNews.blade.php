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
            <th>عنوان</th>
            <th>تاریخ</th>
            <th style="width: 80px"></th>
            <th style="width: 80px"></th>
        </tr>
        @foreach($akhbar as $khabar)
            <tr>
                <td>{{$khabar->title}}</td>
                <td>{{$khabar->date}}</td>

                <td><a class="btn btn-block btn-success btn-sm" href="{{route('adminNews.edit',['id'=>$khabar->id])}}">ویرایش</a></td>
                <td><a class="btn btn-block btn-danger btn-sm" href="{{route('adminNews.delete',['id'=>$khabar->id])}}">حذف</a></td>
                    <!-- Modal -->
                    {{--<div class="modal fade" id="dal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                        {{--<div class="modal-dialog">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
                                    {{--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
                                {{--</div>--}}
                                {{--<div class="modal-body">--}}
                                    {{--...--}}
                                {{--</div>--}}
                                {{--<div class="modal-footer">--}}
                                    {{--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
            </tr>
        @endforeach
    </table>
    {{$akhbar->links("pagination::bootstrap-4")}}
@endsection

