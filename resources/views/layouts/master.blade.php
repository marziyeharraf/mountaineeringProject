<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>باشگاه کوهنوردی شهید تهرانی مقدم|@yield('title') </title>
    <link rel="site-logo" sizes="180x180" href="/assets/images/favicons/site-logo.jpg"/>
    <link rel="icon" type="image/jpeg" sizes="32x32" href="/assets/images/favicons/site-logo.jpg"/>
    <link rel="icon" type="image/jpeg" sizes="16x16" href="/assets/images/favicons/site-logo.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <!-- STYLE CSS -->
   <!-- <link rel="stylesheet" href="/assets/css/style.css">-->
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">

    <meta name="description" content="Tevily HTML Template For Tour"/>
    <style>
        .popular-tours__content i {
            margin-left: 7px;
            margin-right: 2px;
            color: #007790;
        }
    </style>

    <!-- fonts -->


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css"/>
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css"/>
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"/>
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css"/>
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/tevily-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css"/>
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/twentytwenty/twentytwenty.css"/>
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css"/>

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/tevily.css"/>
    <link rel="stylesheet" href="/assets/css/tevily-responsive.css"/>


</head>
<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="/assets/images/preload.png" alt=""/>
</div>
<div class="page-wrapper">
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
</div>
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="/assets/images/resources/logo-2.png" width="155"
                                                              alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:setinco@gmail.com">setinco@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">09162352304</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">جستجو کنید</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="جستجو کنید..."/>
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->


<script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="/assets/vendors/odometer/odometer.min.js"></script>
<script src="/assets/vendors/swiper/swiper.min.js"></script>
<script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="/assets/vendors/wow/wow.js"></script>
<script src="/assets/vendors/isotope/isotope.js"></script>
<script src="/assets/vendors/countdown/countdown.min.js"></script>
<script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/assets/vendors/twentytwenty/twentytwenty.js"></script>
<script src="/assets/vendors/twentytwenty/jquery.event.move.js"></script>
<script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/assets/vendors/vegas/vegas.min.js"></script>
<script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="/assets/vendors/timepicker/timePicker.js"></script>
<script src="/assets/vendors/bootstrap-datepicker.min.js"></script>
<script src="/assets/vendors/bootstrap-datepicker.fa.min.js"></script>


<!-- template js -->
<script src="/assets/js/tevily.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>