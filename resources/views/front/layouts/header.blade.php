<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $settings->site_name }}</title>
    <meta name="keywords" content="{{ $settings->meta_keyword }}" />
    <meta name="description" content="{{ $settings->site_desc }}">
    <meta name="author" content="">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('images/icon')}}/{{$settings->icon}}">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/bootstrap/bootstrap.min.css">

    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

    <!-- Template's stylesheets -->
    <link rel="stylesheet" href="{{url('front')}}/assets/js/megamenu/stylesheets/screen.css">
    <link rel="stylesheet" href="{{url('front')}}/assets/css/theme-default.css" type="text/css">
    <link rel="stylesheet" href="{{url('front')}}/assets/js/loaders/stylesheets/screen.css">
    <link rel="stylesheet" href="{{url('front')}}/assets/css/beauty.css" type="text/css">
    <link rel="stylesheet" href="{{url('front')}}/assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="{{url('front')}}/assets/fonts/et-line-font/et-line-font.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/revolution-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/revolution-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/revolution-slider/css/navigation.css">
    <link href="{{url('front')}}/assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/cubeportfolio/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/smart-forms/smart-forms.css">
    <!-- Template's stylesheets END -->
    @yield('css')
    @toastr_css
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Skin stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/style-customizer/css/spectrum.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/style-customizer/css/style-customizer.css">
    <link rel="stylesheet" href="{{url('front')}}/assets/css/skin.css">

</head>
<body>
<div class="over-loader loader-live">
    <div class="loader">
        <div class="loader-item style4">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
</div>
<!--end loading-->
