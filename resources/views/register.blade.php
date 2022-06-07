@extends('layouts.master')
@section('title')
    تماس با ما
@endsection
@section('content')
    <div class="wrapper" style="background-color: #e2e3e5;direction: ltr">
        <div class="inner">
            <div class="image-holder">
                <img src="assets/images/formpic.jpg" style="margin-top: 45px" alt="">
            </div>
            <form action="{{route('register.create')}}" style="direction: rtl" method="post">
                <h3>فرم عضویت</h3>
                <div class="form-group">
                    <input type="text" placeholder="نام" class="form-controls" name="name">
                    <input type="text" placeholder="نام خانوادگی" class="form-controls" name="family">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="form-wrapper">
                    <input type="number" placeholder="سن" class="form-controls" name="age">
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="شماره تماس" class="form-controls" name="phonenumber">
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder=" شماره تماس یکی از نزدیکان" class="form-controls" name="phonenumberfamily">
                </div>
                <div class="form-wrapper">
                    <select name="gender" id="" class="form-controls" style="font-family: IRANSans;font-weight: 100;color: #999">
                        <option value="" disabled selected>جنسیت</option>
                        <option value="male">مرد</option>
                        <option value="femal">زن</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="آدرس" class="form-controls" name="address">
                </div>
                <div class="form-wrapper">
                    <label for="" style="font-family: IRANSans; color: #999 ">در صورت داشتن مشکل جسمی لطفا با ما در میان بگذارید,تا در صورت بروز حوادث احتمالی آگاهی داشته باشیم.</label>
                    <textarea cols="30" rows="10" class="form-controls" name="explain" ></textarea>
                </div>
                <button style="margin: 0px auto">عضویت
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
@endsection