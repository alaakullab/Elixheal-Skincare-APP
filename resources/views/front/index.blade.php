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

    <!-- Template's stylesheets END -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Skin stylesheet -->
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

<div class="wrapper-boxed">
    <div class="site-wrapper">
        <div class="topbar light topbar-padding">
            <div class="container">
                <div class="topbar-left-items">
                    <ul class="toplist toppadding pull-left paddtop1">
                        <li class="rightl">{{ __('customer_care') }}</li>
                        <li>{{ $settings->phone }}</li>
                    </ul>
                </div>
                <!--end left-->

                <div class="topbar-right-items pull-right">
                    <ul class="toplist toppadding">
                        <li class="lineright"><a href="#">Login</a></li>
                        <li class="lineright"><a href="#">Register</a></li>
                        @if($settings->facebook)<li><a target="_blank" href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>@endif
                        @if($settings->twitter)<li><a target="_blank" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>@endif
                        @if($settings->instagram)<li><a href="{{ $settings->instagram }}"><i class="fa fa-instagram"></i></a></li>@endif
                        @if($settings->whatsapp)<li class="last"><a href="https://wa.me/{{ $settings->whatsapp }}" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>@endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--end topbar-->

        <div class="col-md-12 nopadding">
            <div class="header-section white dark-dropdowns style1 links-dark pin-style">
                <div class="container">
                    <div class="mod-menu">
                        <div class="row">
                            <div class="col-sm-2"> <a href="{{ url('/'.app()->getLocale()) }}" title="{{ $settings->site_name }}" class="logo mar-4"> @if($settings->logo)<img src="{{url('images/logo')}}/{{$settings->logo}}" alt="{{ __('front.logo') }}">@else{{$settings->site_name}}@endif </a> </div>
                            <div class="col-sm-10">
                                <div class="main-nav">
                                    <ul class="nav navbar-nav top-nav">
                                        <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                                            <div class="search-box">
                                                <div class="content">
                                                    <div class="form-control">
                                                        <input type="text" placeholder="Type to search" />
                                                        <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                                                    <a href="#" class="close-btn">x</a> </div>
                                            </div>
                                        </li>
{{--                                        <li class="cart-parent"> <a href="javascript:void(0)" title=""> <i aria-hidden="true" class="fa fa-shopping-cart"></i> <span class="number"> 4 </span> </a>--}}
{{--                                            <div class="cart-box">--}}
{{--                                                <div class="content">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-xs-8"> 2 item(s) </div>--}}
{{--                                                        <div class="col-xs-4 text-right"> <span>$99</span> </div>--}}
{{--                                                    </div>--}}
{{--                                                    <ul>--}}
{{--                                                        <li> <img src="{{url('front')}}/assets/images/cart-img1.jpg" alt=""> Jean & Teashirt <span>$30</span> <a href="#" title="" class="close-btn">x</a> </li>--}}
{{--                                                        <li> <img src="{{url('front')}}/assets/images/cart-img2.jpg" alt=""> Jean & Teashirt <span>$30</span> <a href="#" title="" class="close-btn">x</a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-xs-6"> <a href="#" title="View Cart" class="btn btn-block btn-warning">View Cart</a> </div>--}}
{{--                                                        <div class="col-xs-6"> <a href="#" title="Check out" class="btn btn-block btn-primary">Check out</a> </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
                                        <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                                    </ul>
                                    <div id="menu" class="collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="mega-menu six-col active"> <a href="{{ url('/'.app()->getLocale()) }}">{{ __('front.home')  }}</a> <span class="arrow"></span>
                                            </li>
                                            <li class="mega-menu six-col active"> <a href="#">{{ __('front.about_us')  }}</a> <span class="arrow"></span>
                                            <li class="mega-menu six-col active"> <a href="#">{{ __('front.contact_us')  }}</a> <span class="arrow"></span>
                                            <li class="mega-menu six-col active"> <a href="{{ url('/'.app()->getLocale().'/quiz') }}">{{ __('front.start_skin_quiz')  }}</a> <span class="arrow"></span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end menu-->

        </div>
        <!--end menu-->

        <div class="clearfix"></div>

        <!-- START REVOLUTION SLIDER 5.0 -->
        <div class="rev_slider_wrapper">
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->
            <div id="rev_slider" class="rev_slider"  data-version="5.0">
                <ul>
                    @foreach($slider as $slider)
                    <!-- SLIDE  -->
                    <li data-transition="fade">

                        <!-- MAIN IMAGE -->
                        <img src="{{url('/')}}/images/slider/{{$slider->image_path}}" alt=""  width="1920" height="1280">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption by2-text-2 tp-resizeme"
                             data-x="['left','left','left','left']" data-hoffset="['90','50','50','50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-100','-120','-120','-50']"
                             data-fontsize="['40','40','40','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;">professional</div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption by2-text-1 tp-resizeme"
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-80','-80','-20']"
                             data-fontsize="['60','60','40','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="2500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;">{{ $slider->title }}</div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption br-text-3 tp-resizeme"
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['30','0','-15','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="3000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;">{!!  $slider->desc !!} </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sbut2 btn-xradius"
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                             data-y="['top','top','top','top']" data-voffset="['440','450','400','350']"
                             data-speed="800"
                             data-start="3500"
                             data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                             data-endspeed="300"
                             data-captionhidden="off"
                             style="z-index: 6"> <a href="#">Read more</a> </div>
                    </li>
                    @endforeach

                    <!-- SLIDE  -->
                    <li data-transition="fade">

                        <!-- MAIN IMAGE -->
                        <img src="{{url('front')}}/assets/images/sliders/by2-2.jpg" alt=""  width="1920" height="1280">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['right','right','right','right']" data-hoffset="['40','40','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['170','170','170','270']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                             data-start="1000"
                             data-responsive_offset="off"
                             data-responsive="off"
                             style="z-index: 5;text-transform:left;"> <img src="{{url('front')}}/assets/images/sliders/by2-slide-img1.png" alt="" width="765" height="370" data-ww="['765','365','365','365']" data-hh="['370','170','170','170']" data-no-retina> </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption by2-text-2 tp-resizeme"
                             data-x="['left','left','left','left']" data-hoffset="['90','50','50','50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-100','-120','-120','-150']"
                             data-fontsize="['40','40','40','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;">professional</div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption by2-text-1 tp-resizeme"
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-80','-80','-110']"
                             data-fontsize="['60','60','40','30']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="2500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;">Beauty Care </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption br-text-3 tp-resizeme"
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['30','0','-15','-40']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-start="3000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br/>
                            Suspendisse et justo. Praesent mattis commodo. </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption sbut2 btn-xradius"
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']"
                             data-y="['top','top','top','top']" data-voffset="['440','450','400','280']"
                             data-speed="800"
                             data-start="3500"
                             data-transform_in="y:bottom;s:1500;e:Power3.easeOut;"
                             data-transform_out="opacity:0;s:3000;e:Power4.easeIn;s:3000;e:Power4.easeIn;"
                             data-endspeed="300"
                             data-captionhidden="off"
                             style="z-index: 6"> <a href="#">Read more</a> </div>
                    </li>
                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <div class="clearfix"></div>
        <!-- END OF SLIDER WRAPPER -->

        <section class="sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="by2-feature-box-1">
                            <div class="img-box">
                                <div class="badge">
                                    <p>from<br/>
                                        as low as<br/>
                                        <span>$99</span> </p>
                                </div>
                                <img src="{{url('front')}}/assets/images/by2-1.jpg" alt="" class="img-responsive"/> </div>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="col-md-8 padding-left-3">
                        <div class="col-md-12">
                            <div class="sec-title-container less-padding-4">
                                <h2 class=" playfair less-mar-1">About Us</h2>
                                <div class="text-left"><img src="{{url('front')}}/assets/images/by2-2.png" alt=""/></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->

                        <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare.</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci </p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci </p>
                        <br/>
                        <br/>
                        <a class="btn btn-dark-3 btn-xround-2" href="#">Read more</a> </div>
                    <!--end item-->
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->

        <section class="sec-padding section-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="sec-title-container">
                            <h2 class=" playfair less-mar-1">Our Services</h2>
                            <div class="text-center"><img src="{{url('front')}}/assets/images/by2-3.png" alt=""/></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <div class="by2-feature-box-2">
                            <div class="img-circle overflow-hidden">
                                <div class="img"><img src="{{url('front')}}/assets/images/by2-5.jpg" alt="" class="img-responsive"/></div>
                            </div>
                            <img src="{{url('front')}}/assets/images/4.html" alt=""/>
                            <div class="clearfix"></div>
                            <br/>
                            <h4 class="uppercase">eye treatments</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo.</p>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <div class="by2-feature-box-2">
                            <div class="img-circle overflow-hidden">
                                <div class="img"><img src="{{url('front')}}/assets/images/by2-6.jpg" alt="" class="img-responsive"/></div>
                            </div>
                            <img src="{{url('front')}}/assets/images/4.html" alt=""/>
                            <div class="clearfix"></div>
                            <br/>
                            <h4 class="uppercase">makeup</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo.</p>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <div class="by2-feature-box-2">
                            <div class="img-circle overflow-hidden">
                                <div class="img"><img src="{{url('front')}}/assets/images/by2-7.jpg" alt="" class="img-responsive"/></div>
                            </div>
                            <img src="{{url('front')}}/assets/images/4.html" alt=""/>
                            <div class="clearfix"></div>
                            <br/>
                            <h4 class="uppercase">Manicure</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo.</p>
                        </div>
                    </div>
                    <!--end item-->

                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->

        <section class="sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="sec-title-container">
                            <h2 class=" playfair less-mar-1">Featured Products</h2>
                            <div class="text-center"><img src="{{url('front')}}/assets/images/by2-3.png" alt=""/></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="by2-feature-box-3 overflow-hidden margin-bottom"> <img src="{{url('front')}}/assets/images/by2-8.jpg" alt="" class="img-responsive"/> </div>
                        <div class="clearfix"></div>
                        <br/>
                        <h5 class="uppercase nopadding less-mar-1">skin cream</h5>
                        <h5 class="text-gyellow nopadding">$250</h5>
                    </div>
                    <!--end item-->

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="by2-feature-box-3 overflow-hidden margin-bottom"> <img src="{{url('front')}}/assets/images/by2-9.jpg" alt="" class="img-responsive"/> </div>
                        <div class="clearfix"></div>
                        <br/>
                        <h5 class="uppercase nopadding less-mar-1">skin cream</h5>
                        <h5 class="text-gyellow nopadding">$250</h5>
                    </div>
                    <!--end item-->

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="by2-feature-box-3 overflow-hidden margin-bottom"> <img src="{{url('front')}}/assets/images/by2-10.jpg" alt="" class="img-responsive"/> </div>
                        <div class="clearfix"></div>
                        <br/>
                        <h5 class="uppercase nopadding less-mar-1">skin cream</h5>
                        <h5 class="text-gyellow nopadding">$250</h5>
                    </div>
                    <!--end item-->

                    <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                        <div class="by2-feature-box-3 overflow-hidden margin-bottom"> <img src="{{url('front')}}/assets/images/by2-11.jpg" alt="" class="img-responsive"/> </div>
                        <div class="clearfix"></div>
                        <br/>
                        <h5 class="uppercase nopadding less-mar-1">skin cream</h5>
                        <h5 class="text-gyellow nopadding">$250</h5>
                    </div>
                    <!--end item-->
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end section -->

        <section class="parallax-4">
            <div class="container-fluid nopadding">
                <div class="parallax-overlay bg-opacity-6">
                    <div class="container sec-tpadding-3 sec-bpadding-3">
                        <div class="row">

                            <div class="col-md-6 col-centered text-center">
                                <div class="col-xs-12 text-center">
                                    <div class="sec-title-container less-padding-6 text-center">
                                        <h2 class=" pompiere text-gyellow">Know more about</h2>
                                        <h1 class=" playfair uppercase font-weight-5 less-mar-1 text-white">Special Offers</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--end title-->

                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.</p>
                                <br/>
                                <a class="btn btn-gyellow btn-medium uppercase btn-xround-2" href="#">Read more</a> </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="sec-title-container">
                        <h2 class=" playfair less-mar-1">Our Gallery</h2>
                        <div class="text-center"><img src="{{url('front')}}/assets/images/by2-3.png" alt=""/></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->

                <div id="js-grid-full-width" class="cbp">
                    <div class="cbp-item identity logos"> <a href="{{url('front')}}/assets/images/portfolio/by2-1.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap"> <img src="{{url('front')}}/assets/images/portfolio/by2-1.jpg" data-cbp-src="{{url('front')}}/assets/images/portfolio/by2-1.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="cbp-item identity logos"> <a href="{{url('front')}}/assets/images/portfolio/by2-2.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap"> <img src="{{url('front')}}/assets/images/portfolio/by2-2.jpg" data-cbp-src="{{url('front')}}/assets/images/portfolio/by2-2.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="cbp-item identity logos"> <a href="{{url('front')}}/assets/images/portfolio/by2-3.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap"> <img src="{{url('front')}}/assets/images/portfolio/by2-3.jpg" data-cbp-src="{{url('front')}}/assets/images/portfolio/by2-3.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="cbp-item identity logos"> <a href="{{url('front')}}/assets/images/portfolio/by2-4.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap"> <img src="{{url('front')}}/assets/images/portfolio/by2-4.jpg" data-cbp-src="{{url('front')}}/assets/images/portfolio/by2-4.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="cbp-item identity logos"> <a href="{{url('front')}}/assets/images/portfolio/by2-5.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap"> <img src="{{url('front')}}/assets/images/portfolio/by2-5.jpg" data-cbp-src="{{url('front')}}/assets/images/portfolio/by2-5.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                    <div class="cbp-item identity logos"> <a href="{{url('front')}}/assets/images/portfolio/by2-6.jpg" class="cbp-caption cbp-lightbox" data-title="Dashboard<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap"> <img src="{{url('front')}}/assets/images/portfolio/by2-6.jpg" data-cbp-src="{{url('front')}}/assets/images/portfolio/by2-6.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Dashboard</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

    <section>
        <div class="divider-line solid light"></div>
        <div class="container">
            <div class="row sec-padding">
                <div class="col-md-4 margin-bottom">
                    <div class="col-md-12 nopadding">
                        <div class="sec-title-container less-padding-4">
                            <h3 class="playfair less-mar-1">Online Booking</h3>
                            <div class="text-left"><img src="{{url('front')}}/assets/images/by2-13.html" alt=""/></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                    <br/>
                    <div class="iconlist-2">
                        <div class="icon dark"><i class="fa fa-arrow-circle-right"></i></div>
                        <div class="text">Nullam turpis. Cras dapibus, orci rutrum adipiscing</div>
                    </div>
                    <!--end item-->

                    <div class="iconlist-2">
                        <div class="icon dark"><i class="fa fa-arrow-circle-right"></i></div>
                        <div class="text">Vestibulum eleifend, magna sem iaculis risus.</div>
                    </div>
                    <!--end item-->

                    <div class="iconlist-2">
                        <div class="icon dark"><i class="fa fa-arrow-circle-right"></i></div>
                        <div class="text">Etiam enim. Suspendisse imperdiet cursus.</div>
                    </div>
                    <!--end item-->

                    <div class="clearfix"></div>
                    <br/>
                    <a class="btn btn-dark-3 btn-xround-2" href="#">Read more</a> </div>
                <!--end item-->

                <div class="col-md-4 slide-controls-2 margin-bottom">
                    <div class="col-md-12 nopadding">
                        <div class="sec-title-container less-padding-4">
                            <h3 class="playfair less-mar-1">People Says</h3>
                            <div class="text-left"><img src="{{url('front')}}/assets/images/by2-13.html" alt=""/></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->

                    <div id="owl-demo2" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="text-box padding-3 light">
                                <p>Nullam turpis. Cras dapibus, orci rutrum adipiscing luctus, nisl magna Nullam turpis.</p>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="imgbox-smedium round left overflow-hidden"><img src="{{url('front')}}/assets/images/by2-12.jpg" alt="" class="img-responsive"/></div>
                            <div class="text-box-right padding-top-1">
                                <h6 class="less-mar-1">Olivia</h6>
                            </div>
                            <p class="text-gyellow">Fashion Model</p>
                        </div>
                        <!--end carousel item-->

                        <div class="item">
                            <div class="text-box padding-3 light">
                                <p>Nullam turpis. Cras dapibus, orci rutrum adipiscing luctus, nisl magna Nullam turpis.</p>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <div class="imgbox-smedium round left overflow-hidden"><img src="{{url('front')}}/assets/images/by2-12.jpg" alt="" class="img-responsive"/></div>
                            <div class="text-box-right padding-top-1">
                                <h6 class="less-mar-1">Olivia</h6>
                            </div>
                            <p class="text-gyellow">Fashion Model</p>
                        </div>
                        <!--end carousel item-->

                    </div>
                    <!--end carousel-->

                </div>
                <!--end item-->

                <div class="col-md-4 margin-bottom">
                    <div class="col-md-12 nopadding">
                        <div class="sec-title-container less-padding-4">
                            <h3 class="playfair less-mar-1">Bridal Makeup</h3>
                            <div class="text-left"><img src="{{url('front')}}/assets/images/by2-13.html" alt=""/></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                    <br/>
                    <div class="iconlist-2">
                        <div class="icon dark"><i class="fa fa-arrow-circle-right"></i></div>
                        <div class="text">Nullam turpis. Cras dapibus, orci rutrum adipiscing</div>
                    </div>
                    <!--end item-->

                    <div class="iconlist-2">
                        <div class="icon dark"><i class="fa fa-arrow-circle-right"></i></div>
                        <div class="text">Vestibulum eleifend, magna sem iaculis risus.</div>
                    </div>
                    <!--end item-->

                    <div class="iconlist-2">
                        <div class="icon dark"><i class="fa fa-arrow-circle-right"></i></div>
                        <div class="text">Etiam enim. Suspendisse imperdiet cursus.</div>
                    </div>
                    <!--end item-->

                    <div class="clearfix"></div>
                    <br/>
                    <a class="btn btn-dark-3 btn-xround-2" href="#">Read more</a> </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

    <section class="section-less-padding section-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="text-dark uppercase less-mar-1">Unlimited Beautiful Home Page Styles</h4>
                    <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent.</p>
                </div>
                <div class="col-md-3">
                    <div class="margin-top2"></div>
                    <a class="btn btn-border light btn-large pull-right btn-xround-2" href="#">Purchase Now</a></div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

    <section class="parallax-5">
        <div class="container-fluid nopadding">
            <div class="parallax-overlay bg-opacity-8">
                <div class="container sec-tpadding-3 sec-bpadding-3">
                    <div class="row">
                        <div class=" col-md-12 col-centered text-center"> <img src="{{url('front')}}/assets/images/logo/fn2-logo.html" alt=""/>
                            <div class="clearfix"></div>
                            <br/>
                            <br/>
                            <h4 class="text-white uppercase">{{ __('front.address') }}</h4>
                            <h6 class="text-light uppercase">{{ $settings->address }}</h6>
                            <div class="clearfix"></div>
                            <ul class="footer-quick-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <div class="divider-line solid light opacity-1"></div>
                            <ul class="footer-social-icons round">
                                @if($settings->twitter)<li><a target="_blank" class="twitter" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>@endif
                                @if($settings->facebook)<li><a target="_blank" href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>@endif
                                @if($settings->instagram)<li><a target="_blank" href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a></li>@endif
                                @if($settings->whatsapp)<li><a target="_blank" href="https://wa.me/{{ $settings->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>@endif
                            </ul>
                            <div class="col-md-12">
                                <p class="text-gray">{{ $settings->copyright ?? $settings->copyright }} © {{ date('Y') }} <br/></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<div class="clearfix"></div>
<!--end section-->

<a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

</div>
<!--end site wrapper-->
</div>
<!--end wrapper boxed-->

<!-- Scripts -->
<script src="{{url('front')}}/assets/js/jquery/jquery.js"></script>
<script src="{{url('front')}}/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="{{url('front')}}/assets/js/style-customizer/js/spectrum.js"></script>
<script src="{{url('front')}}/assets/js/less/less.min.js" data-env="development"></script>
<script src="{{url('front')}}/assets/js/style-customizer/js/style-customizer.js"></script>
<!-- Scripts END -->

<!-- Template scripts -->
<script src="{{url('front')}}/assets/js/megamenu/js/main.js"></script>
<script src="{{url('front')}}/assets/js/owl-carousel/owl.carousel.js"></script>
<script src="{{url('front')}}/assets/js/owl-carousel/custom.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/cubeportfolio/main3.js"></script>
<script src="{{url('front')}}/assets/js/parallax/jquery.parallax-1.1.3.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{url('front')}}/assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>


<script type="text/javascript">
    var tpj=jQuery;
    var revapi4;
    tpj(document).ready(function() {
        if(tpj("#rev_slider").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider");
        }else{
            revapi4 = tpj("#rev_slider").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"auto",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    arrows:{
                        enable:true,
                        style:"erinyen"

                    },
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,



                },
                viewPort: {
                    enable:true,
                    outof:"pause",
                    visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[640,640,640,500],
                lazyType:"smart",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                disableProgressBar:"on",
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	/*ready*/
</script>

<script>
    $(window).load(function(){
        setTimeout(function(){

            $('.loader-live').fadeOut();
        },1000);
    })

</script>
<script src="{{url('front')}}/assets/js/functions/functions.js"></script>

</body>

</html>
