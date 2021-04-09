@extends('front.layouts.index')

@section('content')
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
                                @php($media_type = explode("/",$about[0]->media_type))
                                @if($media_type[0] == 'image')
                                    <img
                                        src="{{ url('/assets/media/about/images/') }}/{{ $about[0]->media_path ?? $about[0]->media_path }}"
                                        alt="{{$about[0]->title ?? ''}}" class="img-responsive"/>
                                @else
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <video class="embed-responsive-item" controls>
                                            <source src="{{url('/assets/media/about/videos/')}}/{{$about[0]->media_path}}"
                                                    type="video/{{$about[0]->media_extension}}">
                                            {{__('admin.Your browser does not support HTML video.')}}
                                        </video>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                    <!--end item-->

                    <div class="col-md-8 padding-left-3">
                        <div class="col-md-12">
                            <div class="sec-title-container less-padding-4">
                                <h2 class=" playfair less-mar-1">{{__('front.about-us')}}</h2>
                                <div class="text-left"><img src="{{url('front')}}/assets/images/by2-2.png" alt=""/></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--end title-->
                        <h6>{{$about[0]->title}}</h6>
                        <strong>{{$about[0]->sub_title}}</strong> {!! Str::limit($about[0]->desc,250) !!}
                        <br/>
                        <br/>
                       @if($about[0]->hyperlink)<a class="btn btn-dark-3 btn-xround-2" @if($about[0]->hyperlink != '#' && strlen($about[0]->hyperlink) > 1)target="_blank" @endif href="{{$about[0]->hyperlink}}">{{__('front.Click to more')}}</a>@endif </div>
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
                                        <h2 class=" pompiere text-gyellow">{{$about[1]->title}}</h2>
                                        <h1 class=" playfair uppercase font-weight-5 less-mar-1 text-white">{{$about[1]->sub_title}}</h1>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!--end title-->

                                <div style="color:white !important ;">{!! Str::limit($about[1]->desc,250) !!}</div>
                                <br/>
                                @if($about[1]->hyperlink)<a class="btn btn-gyellow btn-medium uppercase btn-xround-2"  @if($about[1]->hyperlink != '#' && strlen($about[1]->hyperlink) > 1)target="_blank" @endif href="{{$about[1]->hyperlink}}">{{__('front.Click to more')}}</a>@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->

    <section class="section-less-padding section-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="text-dark uppercase less-mar-1">{{__('front.It’s all about you')}}</h4>
                    <p>{{__('front.Experience the power of personalized skincare, skincare that gives you everything that you need and nothing that you don’t.')}}</p>
                </div>
                <div class="col-md-3">
                    <div class="margin-top2"></div>
                    <a class="btn btn-border light btn-large pull-right btn-xround-2" href="{{ url('/'.app()->getLocale().'/quiz') }}">{{__('front.FIND MY FORMULA')}}</a></div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
@endsection
