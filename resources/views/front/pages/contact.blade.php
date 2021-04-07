@extends('front.layouts.index')

@section('content')
    <div class="clearfix"></div>
    <section class="sec-padding section-light">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                    <h3 class="uppercase">{{ __('front.Contact Form') }}</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis
                        commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo.
                        augue.</p>
                    <br/>
                    <br/>

                    <div class="text-box white padding-4">
                        <div class="smartforms-modal-body">
                            <div class="smart-wrap">
                                <div class="smart-forms smart-container transparent wrap-full">
                                    <div class="form-body no-padd">
                                        <form method="POST" action="{{ route('pages.Contact.StoreView',app()->getLocale()) }}" id="smart-form">
                                       @csrf
                                            <div class="section">
                                                <label for="full_name" class="field prepend-icon">
                                                    <input type="text" name="full_name" id="full_name"
                                                           class="gui-input" placeholder="{{ __('front.Enter name') }}">
                                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                                </label>
                                            </div><!-- end section -->

                                            <div class="section">
                                                <label for="email_contacts" class="field prepend-icon">
                                                    <input type="email" name="email_contacts" id="email_contacts"
                                                           class="gui-input" placeholder="{{ __('front.Email address') }}">
                                                    <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                                </label>
                                            </div><!-- end section -->

                                            <div class="section">
                                                <label for="phone" class="field prepend-icon">
                                                    <input type="text" name="phone" id="phone" class="gui-input"
                                                           placeholder="{{__('front.Enter Telephone...')}}">
                                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                                </label>
                                            </div><!-- end section -->


                                            <div class="section">
                                                <label for="subject" class="field prepend-icon">
                                                    <input type="text" name="subject" id="subject"
                                                           class="gui-input" placeholder="{{__('front.Enter subjec')}}">
                                                    <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                                                </label>
                                            </div><!-- end section -->

                                            <div class="section">
                                                <label for="message" class="field prepend-icon">
                                                    <textarea class="gui-textarea" id="message"
                                                              name="message"
                                                              placeholder="{{__('front.Enter message')}}"></textarea>
                                                    <span class="field-icon"><i class="fa fa-comments"></i></span>
                                                    <span class="input-hint"> <strong>{{__('front.Hint:')}}</strong> {{__('front.Please enter between 80 - 300 characters.')}}</span>
                                                </label>
                                            </div><!-- end section -->


                                            <div class="result"></div><!-- end .result  section -->

                                            <!-- end .form-body section -->
                                            <div class="form-footer text-left">
                                                <button type="submit" data-btntext-sending="Sending..."
                                                        class="button btn-primary">{{__('front.Submit')}}
                                                </button>
                                                <button type="reset" class="button">{{__('front.Cancel')}}</button>
                                            </div><!-- end .form-footer section -->
                                        </form>
                                    </div><!-- end .form-body section -->
                                </div><!-- end .smart-forms section -->
                            </div><!-- end .smart-wrap section -->
                        </div>
                    </div><!-- end .smart-wrap section -->
                    <!-- end .smart-forms section -->
                </div>
                <!--end item-->
                <div class="col-md-4 text-left">
                    <address>
                        <h4>{{ __('front.Address Info') }}</h4>
                        <p>{{ $settings->address }}</p>
                        <br/>
                        <p>{{ __('front.E-mail:') }} <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></p>
                        <p>{{ __('front.Website:') }} <a href="{{ url()->current() }}" target="_blank">{{ url()->current() }}</a></p>
                    </address>
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->

    <div class="divider-line solid light"></div>
    <section class="moreless-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="ce4-clients noborder grid-cols-6 hover-2">
                        <li><a href="#"><img src="images/shortcodes/1.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/2.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/4.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/5.png" alt=""></a></li>
                        <li><a href="#"><img src="images/shortcodes/6.png" alt=""></a></li>
                    </ul>
                </div>
                <!--end item-->

            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
@endsection
