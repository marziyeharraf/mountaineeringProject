@extends('layouts.master')
@section('title')
    تماس با ما
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url(assets/images/header-background.jpg)">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>تماس با ما</h2>
                </div>
            </div>
        </div>
        <div class="page-header__bottom">
            <div class="container">
                <div class="page-header__bottom-inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index">خانه</a></li>
                        <li><span>.</span></li>
                        <li class="active">تماس با ما</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">با تیم ما صحبت کنید</span>
                            <h2 class="section-title__title">سوالی هست؟ در صورت تمایل با ما تماس بگیرید</h2>
                        </div>
                        <div class="contact-page__social">
                            <a href="https://www.instagram.com/p/CQ3Q3PqsNnF/?utm_medium=copy_link" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-page__right">
                        <div class="comment-form">
                            <form action="{{route('contact.create')}}" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="نام شما" name="name" >
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="آدرس ایمیل" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="نوشتن پیام"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">ارسال</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div><!-- /.result -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Information Start-->
    <section class="information">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Information Single-->
                    <div class="information__single">
                        <div class="information__icon">
                            <span class="icon-place"></span>
                        </div>
                        <div class="information__text">
                            <p>فارس <br>شیراز</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Information Single-->
                    <div class="information__single">
                        <div class="information__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="information__text">
                            <h4>
                                <a href="tel:09215561469" class="information__number-1">09162352304</a>
                                <br>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Information Single-->
                    <div class="information__single">
                        <div class="information__icon">
                            <span class="icon-at"></span>
                        </div>
                        <div class="information__text">
                            <h4>
                                <a href="mailto:setinco@gmail.com"
                                   class="information__mail-1"></a> <br>
                                <a href="mailto:setinco@gmail.com" class="information__mail-2"></a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Information End-->

    <!--Google Map Start-->
    <section class="contact-page-google-map">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="contact-page-google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->

@endsection