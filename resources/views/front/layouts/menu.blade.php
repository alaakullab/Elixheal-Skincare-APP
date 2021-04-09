<div class="wrapper-boxed">
    <div class="site-wrapper">
        <div class="topbar light topbar-padding">
            <div class="container">
                @if($settings->phone)
                    <div class="topbar-left-items">
                        <ul class="toplist toppadding pull-left paddtop1">
                            <li class="rightl">{{ __('customer_care') }}</li>
                            <li>{{ $settings->phone }}</li>
                        </ul>
                    </div>
            @endif
            <!--end left-->

                <div class="topbar-right-items pull-right">
                    <ul class="toplist toppadding">
{{--                        <li class="lineright"><a href="#">Login</a></li>--}}
{{--                        <li class="lineright"><a href="#">Register</a></li>--}}
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
                            <div class="col-sm-2"> <a href="{{ url('/'.app()->getLocale()) }}" title="{{ $settings->site_name }}" class="logo mar-4"> @if($settings->logo)<img src="{{url('images/logo')}}/{{$settings->logo}}" style="h" alt="{{ __('front.logo') }}">@else{{$settings->site_name}}@endif </a> </div>
                            <div class="col-sm-10">
                                <div class="main-nav">
                                    <ul class="nav navbar-nav top-nav">
                                        <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a> </li>
                                    </ul>
                                    <div id="menu" class="collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="mega-menu six-col @if(Request::segment(0) != '') active @endif "> <a href="{{ url('/'.app()->getLocale()) }}">{{ __('front.home')  }}</a> <span class="arrow"></span>
                                            </li>
                                            <li class="mega-menu six-col @if(Request::segment(2) == 'about') active @endif "> <a href="{{ url('/'.app()->getLocale().'/about') }}">{{ __('front.about_us')  }}</a> <span class="arrow"></span>
                                            <li class="mega-menu six-col @if(Request::segment(2) == 'contact') active @endif"> <a href="{{ url('/'.app()->getLocale().'/contact') }}">{{ __('front.contact_us')  }}</a> <span class="arrow"></span>
                                            <li class="mega-menu six-col @if(Request::segment(2) == 'quiz') active @endif"> <a style="font-weight: bold;" href="{{ url('/'.app()->getLocale().'/quiz') }}">{{ __('front.start_skin_quiz')  }}</a> <span class="arrow"></span>
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
