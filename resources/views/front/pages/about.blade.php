@extends('front.layouts.index')
@section('title') - {{ucwords(__('front.about_us'))}}@endsection
@section('css')
    <link rel="stylesheet" href="{{url('front')}}/assets/css/corporate.css" type="text/css">
    <link rel="stylesheet" href="{{url('front')}}/assets/css/shortcodes.css" type="text/css">
    <link href="{{url('front')}}/assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/accordion/js/demo.css">
@endsection
@section('content')
    <div class="clearfix"></div>
    <section>
        <div class="pagenation-holder">
            <div class="section-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <br/>
                            <div class="col-md-2" style="width: 11.67%;"><h4>{{__('front.about_us')}}</h4></div>
                            <div class="col-md-10">
                        <p> -  {{__('front.FEEL FREE TO CONTACT US')}} <a href="{{ url('/'.app()->getLocale().'/contact') }}" class="btn-link">{{__('front.contact_us')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
    @php($count = 1)
    @foreach($about as $about)
        @php($cnt = $count++)
        @if(($cnt%2) === 1)
            <section id="{{$about->title}}" class="sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            @if($about->title)<h3 class="uppercase font-weight-6">{{$about->title}}</h3>@endif
                            @if($about->sub_title)<h6 class="raleway">{{$about->sub_title}}</h6>@endif
                            <br/>
                            {!! $about->desc !!}
                            <br/>
                            <br/>
                            @if($about->hyperlink)<a class="btn btn-dark-3 uppercase" @if(str_split($about->hyperlink,1)[0] != '#')target="_blank"@endif
                                                     href="{{$about->hyperlink}}">{{__('front.Click to more')}}</a>@endif
                        </div>
                        <!--end item-->
                        <div class="col-md-6 margin-bottom">
                            @php($media_type = explode("/",$about->media_type))
                            @if($media_type[0] == 'image')
                                <img
                                    src="{{ url('/assets/media/about/images/') }}/{{ $about->media_path ?? $about->media_path }}"
                                    alt="" class="img-responsive"/>
                            @else
                                <div class="embed-responsive embed-responsive-4by3">
                                    <video class="embed-responsive-item" controls>
                                        <source src="{{url('/assets/media/about/videos/')}}/{{$about->media_path}}"
                                                type="video/{{$about->media_extension}}">
                                        {{__('admin.Your browser does not support HTML video.')}}
                                    </video>
                                </div>
                            @endif
                        </div>
                        <!--end item-->
                    </div>
                </div>
            </section>
        @else
            <section class="section-side-image section-dark clearfix">
                    @php($media_type = explode("/",$about->media_type))
                    @if($media_type[0] == 'image')
                    <div class="img-holder col-md-6 col-sm-3 pull-left">
                    <div class="background-imgholder"
                             style="background:url({{ url('/assets/media/about/images/') }}/{{ $about->media_path ?? $about->media_path }});">
                            <img
                                class="nodisplay-image"
                                src="{{ url('/assets/media/about/images/') }}/{{ $about->media_path ?? $about->media_path }}"
                                alt="{{$about->title}}"/>
                        </div>
                    </div>
                    @else
                    <div class="img-holder col-md-6 col-sm-3 pull-left col-sm-offset-1">
                        <br/>
                        <div class="embed-responsive embed-responsive-4by3">
                            <video class="embed-responsive-item" controls>
                                <source src="{{url('/assets/media/about/videos/')}}/{{$about->media_path}}"
                                        type="video/{{$about->media_extension}}">
                                {{__('admin.Your browser does not support HTML video.')}}
                            </video>
                        </div>
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div id="{{$about->title}}" class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4 text-inner-2 clearfix align-left">
                            <div class="text-box padding-5">
                                <div class="ce3-feature-box-7">
                                    <div class="col-xs-12 nopadding">
                                        <div class="sec-title-container less-padding-3 text-left">
                                            <div class="ce4-title-line-1 align-left"></div>
                                            @if($about->title)<h4
                                                class="uppercase font-weight-7 less-mar-1 text-white">{{$about->title}}</h4>
                                            <div class="clearfix"></div>@endif
                                            @if($about->sub_title)<p
                                                class="by-sub-title">{{$about->sub_title}}</p>@endif
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!--end title-->

                                    @if($about->desc)
                                        <div class="iconlist-2">
                                            <div class="icon dark"><i class="fa fa-long-arrow-right text-white"
                                                                      aria-hidden="true"></i></div>
                                            <div class="text">{!! $about->desc !!}</div>
                                        </div>@endif
                                <!--end item-->
                                    <div class="clearfix"></div>
                                    <br/>
                                    <br/>
                                    @if($about->hyperlink)<a class="btn btn-gyellow-2 hre#" @if(str_split($about->hyperlink,1)[0] != '#')target="_blank"@endif
                                                             href="{{$about->hyperlink}}">{{__('front.Click to more')}}</a>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!--end section-->
    @endforeach
    <div class="divider-line solid light"></div>
    <section class="moreless-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul class="ce4-clients noborder grid-cols-6 hover-2">
                        <li><a href="#"><img src="images/shortcodes/2.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/4.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/5.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/6.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/2.png" alt=""></a></li>
                    </ul>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

@endsection
@section('script')
    <script type="text/javascript" src="{{url('front')}}/assets/js/accordion/js/accordion.js"></script>
    <script>
        $(document).ready(function () {
            //toggle the component with class accordion_body
            $(".accordion_head").click(function () {
                if ($('.accordion_body').is(':visible')) {
                    $(".accordion_body").slideUp(300);
                    $(".plusminus").text('+');
                }
                if ($(this).next(".accordion_body").is(':visible')) {
                    $(this).next(".accordion_body").slideUp(300);
                    $(this).children(".plusminus").text('+');
                } else {
                    $(this).next(".accordion_body").slideDown(300);
                    $(this).children(".plusminus").text('-');
                }
            });
        });
    </script>
@endsection
