@extends('front.layouts.index')
@section('css')
    <link rel="stylesheet" href="{{url('front')}}/assets/css/corporate.css" type="text/css">
    <link rel="stylesheet" href="{{url('front')}}/assets/css/shortcodes.css" type="text/css">
    <link href="{{url('front')}}/assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{url('front')}}/assets/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('front')}}/assets/js/accordion/js/demo.css">
@endsection
@section('content')
{{--    <div class="clearfix"></div>--}}
{{--    <section class="section-side-image clearfix">--}}
{{--        <div class="img-holder col-md-12 col-sm-12 col-xs-12">--}}
{{--            <div class="background-imgholder" style="background:url({{url('images')}}/slider/97653360_by2-1.jpg);"><img class="nodisplay-image" src="{{url('images')}}/slider/97653360_by2-1.jpg" alt=""/> </div>--}}
{{--        </div>--}}
{{--        <div class="container-fluid" >--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">--}}
{{--                    <div class="header-inner less-height">--}}
{{--                        <div class="overlay">--}}
{{--                            <div class="text text-center">--}}
{{--                                <h3 class="uppercase text-white less-mar-1 title">FAQ Style 1</h3>--}}
{{--                                <h6 class="uppercase text-white sub-title">Get Many More Features</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <div class=" clearfix"></div>--}}
    <!--end header section -->
<section class="section section-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <br/>
                <h3>{{__('front.FAQ')}}</h3>
                <div class="pages-sidebar-item">
                    <form>
                        <h6 class="uppercase pages-sidebar-item-title">{{__('admin.search')}}</h6>
                        <input type="text" name="search" class="form-control search-field pages-newsletter" value="{{ old('search',@request()->search) }}" maxlength="100"/>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-12 nopadding">
                        @foreach($faqs_question as $faqs_question)
                        <div class="accordion_head"><i class="fa fa-pencil" aria-hidden="true"></i>{{$faqs_question->question_value}}<span class="plusminus">+</span>
                        </div>
                        <div class="accordion_body" style="display: none;">
                            @foreach($faqs_question->faqs_answer as $faqs_answer)
                            <p>{{$faqs_answer->answers_value}} </p>
                                <hr/>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    <!--end item-->


                    <div class="clearfix"></div>
                    <!-- end section -->
                </div>
                <!--end left col-->

            </div>
            <!--end right col-->


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
