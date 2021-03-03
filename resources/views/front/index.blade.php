<!DOCTYPE html>
<html>

<!-- Mirrored from codelayers.net/templates/printer/index-beauty.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Mar 2021 12:19:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Printer - Responsive MultiPurpose HTML5 Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile view -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
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

    <!-- Style Customizer's stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/style-customizer/css/spectrum.css">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/style-customizer/css/style-customizer.css">
    <link rel="stylesheet/less" type="text/css" href="{{url('front')}}/assets/less/skin.html">
    <!-- Style Customizer's stylesheets END -->

    <!-- Skin stylesheet -->

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

<!-- Style Customizer -->
<section id="style-customizer">
    <div class="style-customizer-wrap form-horizontal">
        <h4 class="sc-header">Style Customizer</h4>
        <h5>Layout Style</h5>
        <div class="sc-variable-row form-group">
            <div class="radio-group col-xs-12">
                <input type="radio" name="sc-layout-type" id="sc-layout-type-boxed" class="sc-variable" data-key="layoutType" value="boxed" checked>
                <input type="radio" name="sc-layout-type" id="sc-layout-type-wide" class="sc-variable" data-key="layoutType" value="wide">
                <label for="sc-layout-type-wide" class="style-fweight-normal">Wide</label>
                <label for="sc-layout-type-boxed" class="style-fweight-normal">Boxed</label>
            </div>
        </div>
        <fieldset id="outer-bg-section">
            <h5 class="customizer-style-tytle-padd">Outer Background Styles</h5>
            <div class="sc-variable-row form-group">
                <div class="col-xs-12">
                    <select name="sc-bg-outer-type" id="sc-bg-outer-type" data-key="outerBgType" class="sc-variable col-xs-8">
                        <option value="color" selected>Solid color</option>
                        <option value="pattern">Pattern</option>
                        <option value="image">Image</option>
                    </select>
                    <div class="col-xs-4">
                        <div id="sc-bg-outer-color-wrap">
                            <input type="color" name="sc-bg-outer-color" id="sc-bg-outer-color" class="sc-variable" data-key="outerBgColor">
                        </div>
                        <div id="sc-bg-outer-image-wrap">
                            <input type="file" accept="image/*" name="sc-bg-outer-image" id="sc-bg-outer-image" class="sc-variable sr-only" data-key="outerBgImage">
                            <label for="sc-bg-outer-image" class="sc-btn" title="Upload image"><i class="fa fa-upload"></i> </label>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <h5 class="customizer-style-tytle-padd">Color Options</h5>
        <div class="sc-variable-row form-group style-form-group">
            <label for="sc-color-prim" class="col-xs-8 control-label color-text">Primary Color</label>
            <div class="col-xs-4">
                <input type="color" id="sc-color-prim" class="sc-variable" data-key="colorPrimary">
            </div>
        </div>
        <div class="style-divider-line"></div>
        <div class="sc-variable-row form-group style-form-group style-tpadd">
            <label for="sc-color-second" class="col-xs-8 control-label color-text">Secondary Color</label>
            <div class="col-xs-4">
                <input type="color" id="sc-color-second" class="sc-variable" data-key="colorSecondary">
            </div>
        </div>
        <div class="style-divider-line"></div>
        <div class="sc-variable-row form-group style-form-group style-tpadd">
            <label for="sc-color-third" class="col-xs-8 control-label color-text">Tertiary Color</label>
            <div class="col-xs-4">
                <input type="color" id="sc-color-third" class="sc-variable" data-key="colorTertiary">
            </div>
        </div>
        <br/>
        <div class="form-group">
            <div class="col-xs-12">
                <button class="sc-btn" id="sc-download-css"><i class="fa fa-download"></i> Get CSS file</button>
            </div>
        </div>
        <br/>
        <br/>
        <div> <a class="sty-demo-btn" href="{{url('front')}}/assets/demo/demo.html" target="_blank">Demos</a> </div>
    </div>
    <button id="sc-toggle" title="Styles Customizer"><i class="fa fa-wrench"></i> </button>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="afterSaveCSSFileModal" aria-labelledby="afterSaveCSSFileModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="afterSaveCSSFileModalLabel">File saved</h4>
            </div>
            <div class="modal-body"> In order to apply the generated custom styles to your template, please follow these steps:
                <ol>
                    <li class="sc-after-save-todo-point-file">Upload the "skin.css" file to "css" directory in your template</li>
                    <li class="sc-after-save-todo-point-image">Upload the image file to "img" directory in your template. Keep the image file name unchanged.</li>
                    <li class="sc-after-save-todo-point-stylesheet-code"> Copy this code and paste it into "index.html" file in your template, after the line marked as <code>&lt;!-- Skin stylesheet --&gt;</code>
                        <pre><code>&lt;link rel="stylesheet" href="css/skin.css"&gt;</code></pre>
                    </li>
                    <li class="sc-after-save-todo-point-preloader"> Copy this code and paste it into "index.html" file in your template, after the line marked as <code>&lt;!-- Preloader icon --&gt;</code>
                        <pre><code class="sc-preloader-html"></code></pre>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Style customizer END -->

<div class="wrapper-boxed">
    <div class="site-wrapper">
        <div class="topbar light topbar-padding">
            <div class="container">
                <div class="topbar-left-items">
                    <ul class="toplist toppadding pull-left paddtop1">
                        <li class="rightl">Customer Care</li>
                        <li>(888) 123-4567</li>
                    </ul>
                </div>
                <!--end left-->

                <div class="topbar-right-items pull-right">
                    <ul class="toplist toppadding">
                        <li class="lineright"><a href="#">Login</a></li>
                        <li class="lineright"><a href="#">Register</a></li>
                        <li><a target="_blank" href="https://www.facebook.com/alaa_e_kullab"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/alaa2kullab"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
                            <div class="col-sm-2"> <a href="index.html" title="" class="logo mar-4"> <img src="{{url('front')}}/assets/images/logo/logo.png" alt=""> </a> </div>
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
{{--                                                <ul>--}}
{{--                                                    <li> <a href="#">Corporate Demos</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}

{{--                                                            <li> <a href="index-corporate2.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Layout 2</a> </li>--}}
{{--                                                            <li> <a href="index-corporate3.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Layout 3</a> </li>--}}
{{--                                                            <li> <a href="index-corporate4.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Layout 4</a> </li>--}}
{{--                                                            <li> <a href="index-corporate5.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Layout 5</a> </li>--}}
{{--                                                            <li> <a href="index-corporate6.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Layout 6</a> </li>--}}
{{--                                                            <li> <a href="index-corporate7.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Layout 7</a> </li>--}}
{{--                                                            <li> <a href="index-corporate.html"><i class="fa fa-angle-right"></i> &nbsp; Corporate Default</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Categories 1</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-construction.html"><i class="fa fa-angle-right"></i> &nbsp; Construction</a> </li>--}}
{{--                                                            <li> <a href="index-restaurant.html"><i class="fa fa-angle-right"></i> &nbsp; Restaurant</a> </li>--}}
{{--                                                            <li> <a href="index-creative.html"><i class="fa fa-angle-right"></i> &nbsp; Creative</a> </li>--}}
{{--                                                            <li> <a href="index-hairsaloon.html"><i class="fa fa-angle-right"></i> &nbsp; Hair Saloon</a> </li>--}}
{{--                                                            <li> <a href="index-fashion.html"><i class="fa fa-angle-right"></i> &nbsp; Fashion</a> </li>--}}
{{--                                                            <li> <a href="index-gym.html"><i class="fa fa-angle-right"></i> &nbsp; Gym</a> </li>--}}
{{--                                                            <li> <a href="index-agro.html"><i class="fa fa-angle-right"></i> &nbsp; Agro</a> </li>--}}
{{--                                                            <li> <a href="index-band.html"><i class="fa fa-angle-right"></i> &nbsp; Band</a> </li>--}}
{{--                                                            <li> <a href="index-bar.html"><i class="fa fa-angle-right"></i> &nbsp; Bar</a> </li>--}}
{{--                                                            <li class="active"> <a href="index-beauty.html"><i class="fa fa-angle-right"></i> &nbsp; Beauty</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Categories 2</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-hotel.html"><i class="fa fa-angle-right"></i> &nbsp; Hotel</a> </li>--}}
{{--                                                            <li> <a href="index-jewellery.html"><i class="fa fa-angle-right"></i> &nbsp; Jewellery</a> </li>--}}
{{--                                                            <li> <a href="index-hosting.html"><i class="fa fa-angle-right"></i> &nbsp; Hosting</a> </li>--}}
{{--                                                            <li> <a href="index-transport.html"><i class="fa fa-angle-right"></i> &nbsp; Transport</a> </li>--}}
{{--                                                            <li> <a href="index-icecream.html"><i class="fa fa-angle-right"></i> &nbsp; Icecream</a> </li>--}}
{{--                                                            <li> <a href="index-bakery.html"><i class="fa fa-angle-right"></i> &nbsp; Bakery</a> </li>--}}
{{--                                                            <li> <a href="index-blog.html"><i class="fa fa-angle-right"></i> &nbsp; Blog</a> </li>--}}
{{--                                                            <li> <a href="index-blog2.html"><i class="fa fa-angle-right"></i> &nbsp; Blog 2</a> </li>--}}
{{--                                                            <li> <a href="index-builder.html"><i class="fa fa-angle-right"></i> &nbsp; Builder</a> </li>--}}
{{--                                                            <li> <a href="index-cafe.html"><i class="fa fa-angle-right"></i> &nbsp; Cafe</a> </li>--}}

{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Categories 3</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-barber.html"><i class="fa fa-angle-right"></i> &nbsp; Barber</a> </li>--}}
{{--                                                            <li> <a href="index-school.html"><i class="fa fa-angle-right"></i> &nbsp; School</a> </li>--}}
{{--                                                            <li> <a href="index-dental.html"><i class="fa fa-angle-right"></i> &nbsp; Dental</a> </li>--}}
{{--                                                            <li> <a href="index-winery.html"><i class="fa fa-angle-right"></i> &nbsp; Winery</a> </li>--}}
{{--                                                            <li> <a href="index-yoga.html"><i class="fa fa-angle-right"></i> &nbsp; Yoga</a> </li>--}}
{{--                                                            <li> <a href="index-church.html"><i class="fa fa-angle-right"></i> &nbsp; Church</a> </li>--}}
{{--                                                            <li> <a href="index-cafe2.html"><i class="fa fa-angle-right"></i> &nbsp; Cafe 2</a> </li>--}}
{{--                                                            <li> <a href="index-casino.html"><i class="fa fa-angle-right"></i> &nbsp; Casino</a> </li>--}}
{{--                                                            <li> <a href="index-charity.html"><i class="fa fa-angle-right"></i> &nbsp; Charity</a> </li>--}}
{{--                                                            <li> <a href="index-cosmetics.html"><i class="fa fa-angle-right"></i> &nbsp; Cosmetics</a> </li>--}}

{{--                                                        </ul>--}}
{{--                                                    </li>--}}

{{--                                                    <li> <a href="#">Categories 4</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-education.html"><i class="fa fa-angle-right"></i> &nbsp; Education</a> </li>--}}
{{--                                                            <li> <a href="index-farmer.html"><i class="fa fa-angle-right"></i> &nbsp; Farmer</a> </li>--}}
{{--                                                            <li> <a href="index-finance.html"><i class="fa fa-angle-right"></i> &nbsp; Finance</a> </li>--}}
{{--                                                            <li> <a href="index-finance2.html"><i class="fa fa-angle-right"></i> &nbsp; Finance 2</a> </li>--}}
{{--                                                            <li> <a href="index-hotel2.html"><i class="fa fa-angle-right"></i> &nbsp; hotel 2</a> </li>--}}
{{--                                                            <li> <a href="index-mechanic.html"><i class="fa fa-angle-right"></i> &nbsp; Mechanic</a> </li>--}}
{{--                                                            <li> <a href="index-plumber.html"><i class="fa fa-angle-right"></i> &nbsp; Plumber</a> </li>--}}
{{--                                                            <li> <a href="index-pro-landing.html"><i class="fa fa-angle-right"></i> &nbsp; Product Landing</a> </li>--}}
{{--                                                            <li> <a href="index-realestate.html"><i class="fa fa-angle-right"></i> &nbsp; Realestate</a> </li>--}}
{{--                                                            <li> <a href="shop-full-width.html"><i class="fa fa-angle-right"></i> &nbsp; Shop</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}

{{--                                                    <li> <a href="#">Categories 5</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-university.html"><i class="fa fa-angle-right"></i> &nbsp; University</a> </li>--}}
{{--                                                            <li> <a href="index-wedding.html"><i class="fa fa-angle-right"></i> &nbsp; Wedding</a> </li>--}}
{{--                                                            <li> <a href="index-hairsaloon2.html"><i class="fa fa-angle-right"></i> &nbsp; Hair Saloon 2</a> </li>--}}
{{--                                                            <li> <a href="index-blog3.html"><i class="fa fa-angle-right"></i> &nbsp; Blog 3</a> </li>--}}
{{--                                                            <li> <a href="index-medical.html"><i class="fa fa-angle-right"></i> &nbsp; Medical</a> </li>--}}
{{--                                                            <li> <a href="#"><i class="fa fa-angle-right"></i> &nbsp; View all Demos</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
                                            </li>
                                            <li class="mega-menu six-col active"> <a href="#">{{ __('front.about_us')  }}</a> <span class="arrow"></span>
                                            <li class="mega-menu six-col active"> <a href="#">{{ __('front.contact_us')  }}</a> <span class="arrow"></span>
                                            <li class="mega-menu six-col active"> <a href="{{ url('/'.app()->getLocale().'/quiz') }}">{{ __('front.start_skin_quiz')  }}</a> <span class="arrow"></span>


                                            {{--                                            <li> <a href="slider-kenburns.html">Pages</a> <span class="arrow"></span>--}}
{{--                                                <ul class="dm-align-2">--}}
{{--                                                    <li> <a href="#">About <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-about1.html">About Style 1</a> </li>--}}
{{--                                                            <li> <a href="page-about2.html">About Style 2</a> </li>--}}
{{--                                                            <li> <a href="page-about3.html">About Style 3</a> </li>--}}
{{--                                                            <li> <a href="page-about4.html">About Style 4</a> </li>--}}
{{--                                                            <li> <a href="page-about5.html">About Me</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Services <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-services1.html">Services Style 1</a> </li>--}}
{{--                                                            <li> <a href="page-services2.html">Services Style 2</a> </li>--}}
{{--                                                            <li> <a href="page-services3.html">Services Style 3</a> </li>--}}
{{--                                                            <li> <a href="page-services4.html">Services Style 4</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Team <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-team-classic.html">Team Classic</a> </li>--}}
{{--                                                            <li> <a href="page-team-parallax.html">Team Parallax</a> </li>--}}
{{--                                                            <li> <a href="page-team-dark.html">Team dark Style</a> </li>--}}
{{--                                                            <li> <a href="page-team-creative.html">Team Creative</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">FAQ <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-faq1.html">FAQ Style 1</a> </li>--}}
{{--                                                            <li> <a href="page-faq2.html">FAQ Style 2</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Contact<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-contact.html">Contact Classic</a> </li>--}}
{{--                                                            <li> <a href="page-contact-left-sidebar.html">Contact Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="page-contact-right-sidebar.html">Contact Right Sidebar</a> </li>--}}
{{--                                                            <li> <a href="page-contact-map.html">Full Width Map</a> </li>--}}
{{--                                                            <li> <a href="page-contact-parallax.html">Contact Parallax</a> </li>--}}
{{--                                                            <li> <a href="page-contact-captcha.html">Contact With Captcha</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Other Pages 1<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-full-width.html">Full Width Page</a></li>--}}
{{--                                                            <li> <a href="page-left-sidebar.html">Left Sidebar</a></li>--}}
{{--                                                            <li> <a href="page-right-sidebar.html">Right Sidebar</a></li>--}}
{{--                                                            <li> <a href="page-packages.html">Package Plans</a></li>--}}
{{--                                                            <li> <a href="page-careers.html">Careers</a></li>--}}
{{--                                                            <li> <a href="page-coming-soon.html">Coming Soon</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Other Pages 2<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="page-login.html">Login</a></li>--}}
{{--                                                            <li> <a href="page-register.html">Register</a></li>--}}
{{--                                                            <li> <a href="page-sitemap.html">Sitemap</a></li>--}}
{{--                                                            <li> <a href="page-maintenance.html">Maintenance</a></li>--}}
{{--                                                            <li> <a href="page-404.html">404 Error Page</a></li>--}}
{{--                                                            <li> <a href="page-404-2.html">404 Error Page 2</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li> <a href="slider-kenburns.html">Features</a> <span class="arrow"></span>--}}
{{--                                                <ul class="dm-align-2">--}}
{{--                                                    <li> <a href="#">Sliders <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="slider-kenburns.html">KenBurns</a> </li>--}}
{{--                                                            <li> <a href="slider-parallax.html">Parallax</a> </li>--}}
{{--                                                            <li> <a href="slider-3d.html">3D</a> </li>--}}
{{--                                                            <li> <a href="slider-carousel.html">Carousel</a> </li>--}}
{{--                                                            <li> <a href="slider-gallery.html">Gallery</a> </li>--}}
{{--                                                            <li> <a href="slider-scroll-effect.html">Scroll Efects</a> </li>--}}
{{--                                                            <li> <a href="slider-vimeo.html">Vimeo Video</a> </li>--}}
{{--                                                            <li> <a href="slider-youtube.html">Youtube Video</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Headers <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-beauty.html">Header Light</a> </li>--}}
{{--                                                            <li> <a href="index-cafe.html">Header Dark</a> </li>--}}
{{--                                                            <li> <a href="index-bakery.html">Header Modern</a> </li>--}}
{{--                                                            <li> <a href="index-hotel.html">Header Transparent</a> </li>--}}
{{--                                                            <li> <a href="index-farmer.html">Header Creative</a> </li>--}}
{{--                                                            <li> <a href="index-corporate4.html">Header Left Logo</a> </li>--}}
{{--                                                            <li> <a href="index-bakery.html">Header Center Logo</a> </li>--}}
{{--                                                            <li> <a href="index-mechanic.html">Header White</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Menu Styles <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-barber.html">Menu Transparent</a> </li>--}}
{{--                                                            <li> <a href="index-creative.html">Menu Left logo</a> </li>--}}
{{--                                                            <li> <a href="index-realestate.html">Menu Right Logo</a> </li>--}}
{{--                                                            <li> <a href="index-toys.html">Menu Dark</a> </li>--}}
{{--                                                            <li> <a href="index-bakery.html">Menu Center Logo</a> </li>--}}
{{--                                                            <li> <a href="index-agro.html">Menu Boxed</a> </li>--}}
{{--                                                            <li> <a href="index-icecream.html">Menu Center</a> </li><li> <a href="onepage-corporate.html">Menu One Page</a> </li>--}}
{{--                                                            <li> <a href="onepage-leftsidebar.html">Dark Left Side Menu</a> </li>--}}

{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Loading Styles<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="loading-style1.html">Loading Style 1</a> </li>--}}
{{--                                                            <li> <a href="loading-style2.html">Loading Style 2</a> </li>--}}
{{--                                                            <li> <a href="loading-style3.html">Loading Style 3</a> </li>--}}
{{--                                                            <li> <a href="loading-style4.html">Loading Style 4</a> </li>--}}
{{--                                                            <li> <a href="loading-style5.html">Loading Style 5</a> </li>--}}
{{--                                                            <li> <a href="loading-style6.html">Loading Style 6</a> </li>--}}
{{--                                                            <li> <a href="loading-style7.html">Loading Style 7</a> </li>--}}
{{--                                                            <li> <a href="loading-style8.html">Loading Style 8</a> </li>--}}
{{--                                                            <li> <a href="loading-style9.html">Loading Style 9</a> </li>--}}
{{--                                                            <li> <a href="loading-style10.html">Loading Style 10</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Footer Styles<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="index-corporate4.html">Footer Dark</a> </li>--}}
{{--                                                            <li> <a href="shop-full-width.html">Footer Light</a> </li>--}}
{{--                                                            <li> <a href="index-fashion.html">Footer Simple</a> </li>--}}
{{--                                                            <li> <a href="index-beauty.html">Footer Parallax</a> </li>--}}
{{--                                                            <li> <a href="index-corporate7.html">Footer Big</a> </li>--}}
{{--                                                            <li> <a href="index-pro-landing.html">Footer Modern</a> </li>--}}
{{--                                                            <li> <a href="shortcodes-maps.html">Footer With Map</a> </li>--}}
{{--                                                            <li> <a href="index-band.html">Footer Transparent</a> </li>--}}
{{--                                                            <li> <a href="index-cosmetics.html">Footer Classic</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Videos<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="shortcodes-videos.html">Youtube Videos</a> </li>--}}
{{--                                                            <li> <a href="shortcodes-videos.html">Vimeo Videos</a> </li>--}}
{{--                                                            <li> <a href="shortcodes-videos.html">HTML 5 Videos</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Layered PSD Files</a> </li>--}}
{{--                                                    <li> <a href="#">Unlimited Colors</a> </li>--}}
{{--                                                    <li> <a href="#">Wide & Boxed</a> </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="mega-menu"> <a href="header-style3.html">Portfolio</a> <span class="arrow"></span>--}}
{{--                                                <ul>--}}
{{--                                                    <li> <a href="#" title="home samples">Portfolio columns</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="portfolio-1-columns.html"><i class="fa fa-angle-right"></i> &nbsp; One Column</a> </li>--}}
{{--                                                            <li> <a href="portfolio-2-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Two Column</a> </li>--}}
{{--                                                            <li> <a href="portfolio-3-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Three Column</a> </li>--}}
{{--                                                            <li> <a href="portfolio-4-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Four Column</a> </li>--}}
{{--                                                            <li> <a href="portfolio-5-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Five Column</a> </li>--}}
{{--                                                            <li> <a href="portfolio-6-columns.html"><i class="fa fa-angle-right"></i> &nbsp; Six Column</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Portfolio Styles</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="portfolio-masonry.html"><i class="fa fa-angle-right"></i> &nbsp; Masonry</a> </li>--}}
{{--                                                            <li> <a href="portfolio-masonry-projects.html"><i class="fa fa-angle-right"></i> &nbsp; Masonry-Projects</a> </li>--}}
{{--                                                            <li> <a href="portfolio-mosaic.html"><i class="fa fa-angle-right"></i> &nbsp; Mosaic</a> </li>--}}
{{--                                                            <li> <a href="portfolio-mosaic-flat.html"><i class="fa fa-angle-right"></i> &nbsp; Mosaic-Flat</a> </li>--}}
{{--                                                            <li> <a href="portfolio-mosaic-projects.html"><i class="fa fa-angle-right"></i> &nbsp; Mosaic-Projects</a> </li>--}}
{{--                                                            <li> <a href="portfolio-slider-projects.html"><i class="fa fa-angle-right"></i> &nbsp; slider-projects</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Portfolio Styles</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="portfolio-full-width.html"><i class="fa fa-angle-right"></i> &nbsp; Full Width</a> </li>--}}
{{--                                                            <li> <a href="portfolio-gallery.html"><i class="fa fa-angle-right"></i> &nbsp; Gallery</a> </li>--}}
{{--                                                            <li> <a href="portfolio-classic.html"><i class="fa fa-angle-right"></i> &nbsp; Classic</a> </li>--}}
{{--                                                            <li> <a href="portfolio-nospace.html"><i class="fa fa-angle-right"></i> &nbsp; No Space</a> </li>--}}
{{--                                                            <li> <a href="portfolio-boxed-size.html"><i class="fa fa-angle-right"></i> &nbsp; Boxed Size</a> </li>--}}
{{--                                                            <li> <a href="portfolio-modern.html"><i class="fa fa-angle-right"></i> &nbsp; Modern</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Portfolio Single Page</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="portfolio-parallax.html"><i class="fa fa-angle-right"></i> &nbsp; Parallax Image</a> </li>--}}
{{--                                                            <li> <a href="portfolio-video.html"><i class="fa fa-angle-right"></i> &nbsp; Video Background</a> </li>--}}
{{--                                                            <li> <a href="portfolio-left-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="portfolio-right-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Right Sidebar</a> </li>--}}
{{--                                                            <li> <a href="portfolio-carousel.html"><i class="fa fa-angle-right"></i> &nbsp; Carousel</a> </li>--}}
{{--                                                            <li> <a href="portfolio-fullwidth-image.html"><i class="fa fa-angle-right"></i> &nbsp; Full width Image</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="mega-menu five-col"> <a href="carousel-sliders.html">Shortcodes</a> <span class="arrow"></span>--}}
{{--                                                <ul>--}}
{{--                                                    <li> <a href="#">Shortcodes 1</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li><a href="shortcodes-accordions.html"><i class="fa fa-plus-circle"></i> &nbsp; Accordions</a> </li>--}}
{{--                                                            <li><a href="shortcodes-alerts.html"><i class="fa fa-exclamation" aria-hidden="true"></i> &nbsp; Alerts</a> </li>--}}
{{--                                                            <li><a href="shortcodes-animations.html"><i class="fa fa-bars"></i> &nbsp; Animations</a> </li>--}}
{{--                                                            <li><a href="shortcodes-blockquotes.html"><i class="fa fa-quote-right" aria-hidden="true"></i> &nbsp; Blockquotes</a> </li>--}}
{{--                                                            <li><a href="shortcodes-breadcrumbs.html"><i class="fa fa-share" aria-hidden="true"></i> &nbsp; Breadcrumbs</a> </li>--}}
{{--                                                            <li><a href="shortcodes-buttons.html"><i class="fa fa-external-link" aria-hidden="true"></i> &nbsp; Buttons</a> </li>--}}
{{--                                                            <li><a href="shortcodes-call-to-action.html"><i class="fa fa-level-up" aria-hidden="true"></i> &nbsp; Call to Action</a> </li>--}}
{{--                                                            <li><a href="shortcodes-clients-logos.html"><i class="fa fa-user" aria-hidden="true"></i> &nbsp; Clients Logos</a> </li>--}}
{{--                                                            <li><a href="shortcodes-carousel-sliders.html"><i class="fa fa-sort" aria-hidden="true"></i> &nbsp; Carousel Sliders</a> </li>--}}
{{--                                                            <li><a href="shortcodes-counters.html"><i class="fa fa-text-height" aria-hidden="true"></i> &nbsp; Counters</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Shortcodes 2</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li><a href="shortcodes-content-boxes.html"><i class="fa fa-th" aria-hidden="true"></i> &nbsp; Content Boxes</a> </li>--}}
{{--                                                            <li><a href="shortcodes-data-tables.html"><i class="fa fa-table" aria-hidden="true"></i> &nbsp; Data Tables</a> </li>--}}
{{--                                                            <li><a href="shortcodes-date-pickers.html"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; Date Pickers</a> </li>--}}
{{--                                                            <li><a href="shortcodes-dropcaps.html"><i class="fa fa-font" aria-hidden="true"></i> &nbsp; Dropcap & Highlight</a> </li>--}}
{{--                                                            <li><a href="shortcodes-dividers.html"><i class="fa fa-minus" aria-hidden="true"></i> &nbsp; Dividers</a> </li>--}}
{{--                                                            <li><a href="shortcodes-file-uploads.html"><i class="fa fa-upload" aria-hidden="true"></i> &nbsp; File Uploads</a> </li>--}}
{{--                                                            <li><a href="shortcodes-forms.html"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Forms</a> </li>--}}
{{--                                                            <li><a href="shortcodes-grids.html"><i class="fa fa-th-list" aria-hidden="true"></i> &nbsp; Grids</a> </li>--}}
{{--                                                            <li><a href="shortcodes-heading-styles.html"><i class="fa fa-text-height" aria-hidden="true"></i> &nbsp; Heading Styles</a> </li>--}}
{{--                                                            <li><a href="shortcodes-hover-styles.html"><i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp; Hover Styles</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Shortcodes 3</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li><a href="shortcodes-icon-boxes.html"><i class="fa fa-th-large" aria-hidden="true"></i> &nbsp; Icon Boxes</a> </li>--}}
{{--                                                            <li><a href="shortcodes-icon-circles.html"><i class="fa fa-circle-o" aria-hidden="true"></i> &nbsp; Icon Circles</a> </li>--}}
{{--                                                            <li><a href="shortcodes-countdown-timers.html"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Countdown Timers</a> </li>--}}
{{--                                                            <li><a href="shortcodes-icon-lists.html"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; Icon Lists</a> </li>--}}
{{--                                                            <li><a href="shortcodes-images.html"><i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp; Images</a> </li>--}}
{{--                                                            <li><a href="shortcodes-labels-and-badges.html"><i class="fa fa-adjust" aria-hidden="true"></i> &nbsp; Labels and Badges</a> </li>--}}
{{--                                                            <li><a href="shortcodes-lightbox.html"><i class="fa fa-th" aria-hidden="true"></i> &nbsp; Lightbox</a> </li>--}}
{{--                                                            <li><a href="shortcodes-lists.html"><i class="fa fa-list-ul" aria-hidden="true"></i> &nbsp; Lists</a> </li>--}}
{{--                                                            <li><a href="shortcodes-maps.html"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Maps</a> </li>--}}
{{--                                                            <li><a href="shortcodes-modal-popup.html"><i class="fa fa-search-plus" aria-hidden="true"></i> &nbsp; Modal Popup</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Shortcode 4</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li><a href="shortcodes-pagenation.html"><i class="fa fa-exchange" aria-hidden="true"></i> &nbsp; Pagenation</a> </li>--}}
{{--                                                            <li><a href="shortcodes-parallax-backgrounds.html"><i class="fa fa-align-center" aria-hidden="true"></i> &nbsp; Parallax Backgrounds</a> </li>--}}
{{--                                                            <li><a href="shortcodes-pricing-tables.html"><i class="fa fa-table" aria-hidden="true"></i> &nbsp; Pricing Tables</a> </li>--}}
{{--                                                            <li><a href="shortcodes-pie-charts.html"><i class="fa fa-pie-chart" aria-hidden="true"></i> &nbsp; Pie Charts</a> </li>--}}
{{--                                                            <li><a href="shortcodes-pricing-badges.html"><i class="fa fa-external-link"></i> &nbsp; Pricing Badges</a> </li>--}}
{{--                                                            <li><a href="shortcodes-progress-bars.html"><i class="fa fa-outdent" aria-hidden="true"></i> &nbsp; Progress Bars</a> </li>--}}
{{--                                                            <li><a href="shortcodes-process-steps.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> &nbsp; Process Steps</a> </li>--}}
{{--                                                            <li><a href="shortcodes-post-styles.html"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; Post Styles</a> </li>--}}
{{--                                                            <li><a href="shortcodes-toogle-switches.html"><i class="fa fa-toggle-on" aria-hidden="true"></i> &nbsp; Toogle Switches</a> </li>--}}
{{--                                                            <li><a href="shortcodes-timeline.html"><i class="fa fa-align-left" aria-hidden="true"></i> &nbsp; Timeline</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Shortcode 5</a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li><a href="shortcodes-star-ratings.html"><i class="fa fa-star-half-o" aria-hidden="true"></i> &nbsp; Star Ratings</a> </li>--}}
{{--                                                            <li><a href="shortcodes-sections.html"><i class="fa fa-square-o" aria-hidden="true"></i> &nbsp; Sections</a> </li>--}}
{{--                                                            <li><a href="shortcodes-social-icons.html"><i class="fa fa-twitter" aria-hidden="true"></i> &nbsp; Social Icons</a> </li>--}}
{{--                                                            <li><a href="shortcodes-tabs.html"><i class="fa fa-th-large" aria-hidden="true"></i> &nbsp; Tabs</a> </li>--}}
{{--                                                            <li><a href="shortcodes-team.html"><i class="fa fa-user" aria-hidden="true"></i> &nbsp; Team</a> </li>--}}
{{--                                                            <li><a href="shortcodes-testimonials.html"><i class="fa fa-pencil-square"></i> &nbsp; Testimonials</a> </li>--}}
{{--                                                            <li><a href="shortcodes-tooltips.html"><i class="fa fa-font" aria-hidden="true"></i> &nbsp; Tooltips</a> </li>--}}
{{--                                                            <li><a href="shortcodes-toogles.html"><i class="fa fa-toggle-on" aria-hidden="true"></i> &nbsp; Toogles</a> </li>--}}
{{--                                                            <li><a href="shortcodes-typography.html"><i class="fa fa-text-height" aria-hidden="true"></i> &nbsp; Typography</a> </li>--}}
{{--                                                            <li><a href="shortcodes-videos.html"><i class="fa fa-play-circle" aria-hidden="true"></i> &nbsp; Videos</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="right"> <a href="#">Blog</a> <span class="arrow"></span>--}}
{{--                                                <ul class="dm-align-2">--}}
{{--                                                    <li> <a href="#">Classic <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="blog-full-width.html">Full Width</a> </li>--}}
{{--                                                            <li> <a href="blog-left-sidebar.html">Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="blog-right-sidebar.html">Right Sidebar</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Grids <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="blog-1-columns.html">One Column</a> </li>--}}
{{--                                                            <li> <a href="blog-2-columns.html">Two Column</a> </li>--}}
{{--                                                            <li> <a href="blog-3-columns.html">Three Column</a> </li>--}}
{{--                                                            <li> <a href="blog-4-columns.html">Four Column</a> </li>--}}
{{--                                                            <li> <a href="blog-5-columns.html">Five Column</a> </li>--}}
{{--                                                            <li> <a href="blog-6-columns.html">Six Column</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Default<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="blog-default-full-width.html">Full Width</a> </li>--}}
{{--                                                            <li> <a href="blog-default-left-sidebar.html">Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="blog-default-right-sidebar.html">Right Sidebar</a> </li>--}}
{{--                                                            <li> <a href="blog-default-author.html">Author Page</a> </li>--}}
{{--                                                            <li> <a href="blog-default-comments.html">Blog Comments</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Thumbnail<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="blog-full-width-thumbnail.html">Full Width</a> </li>--}}
{{--                                                            <li> <a href="blog-left-sidebar-thumbnail.html">Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="blog-right-sidebar-thumbnail.html">Right Sidebar</a> </li>--}}
{{--                                                            <li> <a href="blog-author-thumbnail.html">Author Page</a> </li>--}}
{{--                                                            <li> <a href="blog-comments-thumbnail.html">Blog Comments</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Single Post<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="blog-image-post.html">Image Post</a> </li>--}}
{{--                                                            <li> <a href="blog-video-post.html">Video Post</a> </li>--}}
{{--                                                            <li> <a href="blog-gallery-post.html">Gallery Post</a> </li>--}}
{{--                                                            <li> <a href="blog-sidebar-post.html">Sidebar Post</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li class="right"> <a href="#">Shop</a> <span class="arrow"></span>--}}
{{--                                                <ul>--}}
{{--                                                    <li> <a href="#">Default<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="shop-full-width.html">Full Width</a> </li>--}}
{{--                                                            <li> <a href="shop-left-sidebar.html">Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="shop-right-sidebar.html">Right Sidebar</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Grids <span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="shop-2-columns.html">Two Column</a> </li>--}}
{{--                                                            <li> <a href="shop-3-columns.html">Three Column</a> </li>--}}
{{--                                                            <li> <a href="shop-4-columns.html">Four Column</a> </li>--}}
{{--                                                            <li> <a href="shop-5-columns.html">Five Column</a> </li>--}}
{{--                                                            <li> <a href="shop-6-columns.html">Six Column</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Single Product<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="shop-single-full-width.html">Full Width</a> </li>--}}
{{--                                                            <li> <a href="shop-single-left-sidebar.html">Left Sidebar</a> </li>--}}
{{--                                                            <li> <a href="shop-single-right-sidebar.html">Right Sidebar</a> </li>--}}
{{--                                                            <li> <a href="shop-single-both-sidebar.html">both Sidebars</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li> <a href="#">Order Process<span class="sub-arrow dark pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> <span class="arrow"></span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li> <a href="shop-cart.html">Shoping Cart</a> </li>--}}
{{--                                                            <li> <a href="shop-checkout.html">Checkout</a> </li>--}}
{{--                                                            <li> <a href="shop-wishlist.html">Wishlist</a> </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
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
                    <!-- SLIDE  -->
                    <li data-transition="fade">

                        <!-- MAIN IMAGE -->
                        <img src="{{url('front')}}/assets/images/sliders/by2-1.jpg" alt=""  width="1920" height="1280">

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
                             style="z-index: 5; white-space: nowrap;">Beauty Care </div>

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
                             style="z-index: 5; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br/>
                            Suspendisse et justo. Praesent mattis commodo. </div>

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
                            <h4 class="text-white uppercase">Address</h4>
                            <h6 class="text-light uppercase">1234 new lorem Rd.<br/>
                                ipsum city, cA 012345<br/>
                                (0123) 123-456-789</h6>
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
                                <li><a target="_blank" class="twitter" href="https://twitter.com/alaa_e_kullab"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/alaa2kullab"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <div class="col-md-12">
                                <p class="text-gray">Copyright © 2021 <br/></p>
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

<!-- Mirrored from codelayers.net/templates/printer/index-beauty.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Mar 2021 12:21:10 GMT -->
</html>