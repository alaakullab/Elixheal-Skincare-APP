
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
                            <li><a href="#">{{ __('front.home')  }}</a></li>
                            <li><a href="{{ url('/'.app()->getLocale()) }}">{{ __('front.about_us')  }}</a></li>
                            <li><a href="{{ url('/'.app()->getLocale().'/contact') }}">{{ __('front.contact_us')  }}</a></li>
                            <li><a href="{{ url('/'.app()->getLocale().'/faqs') }}">{{ __('front.FAQS')  }}</a></li>
                            <li><a href="{{ url('/'.app()->getLocale().'/quiz') }}">{{ __('front.start_skin_quiz')  }}</a></li>
                        </ul>
                        <div class="divider-line solid light opacity-1"></div>
                        <ul class="footer-social-icons round">
                            @if($settings->twitter)<li><a target="_blank" class="twitter" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>@endif
                            @if($settings->facebook)<li><a target="_blank" href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>@endif
                            @if($settings->instagram)<li><a target="_blank" href="{{$settings->instagram}}"><i class="fa fa-instagram"></i></a></li>@endif
                            @if($settings->whatsapp)<li><a target="_blank" href="https://wa.me/{{ $settings->whatsapp }}"><i class="fa fa-whatsapp"></i></a></li>@endif
                        </ul>
                        <div class="col-md-12">
                            <p class="text-gray">{{ $settings->copyright ?? __('front.copyright') }} © {{ date('Y') }} <br/></p>
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

<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a><!-- end scroll to top of the page-->

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
<script>
    $(window).load(function(){
        setTimeout(function(){

            $('.loader-live').fadeOut();
        },1000);
    })

</script>
@toastr_js
@toastr_render
<script type="text/javascript">
    $(window).load(function(){
        setTimeout(function(){
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
        },2000);
    })
    @endif
</script>
<script src="{{url('front')}}/assets/js/functions/functions.js"></script>
@yield('script')
</body>

</html>
