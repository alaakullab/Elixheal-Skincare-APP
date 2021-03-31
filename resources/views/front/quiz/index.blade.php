<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="{{ $settings->meta_keyword }}" />
    <meta name="description" content="{{ $settings->site_desc }}">
    <meta name="author" content="{{ $settings->site_name }}">
    <title>{{ $settings->site_name }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{url('images/icon')}}/{{$settings->icon}}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('images/icon')}}/{{$settings->icon}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{url('images/icon')}}/{{$settings->icon}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{url('images/icon')}}/{{$settings->icon}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{url('images/icon')}}/{{$settings->icon}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{url('front')}}/quiz/assets/css/animate.min.css" rel="stylesheet">
    <link href="{{url('front')}}/quiz/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('front')}}/quiz/assets/css/style.css" rel="stylesheet">
    <link href="{{url('front')}}/quiz/assets/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="{{url('front')}}/quiz/assets/css/magnific-popup.min.css" rel="stylesheet">
    <link href="{{url('front')}}/quiz/assets/css/skins/square/yellow.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{url('front')}}/quiz/assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /Loader_form -->

    <div id="main_container" class="visible">

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab_1">
                        <div class="subheader" id="quote"></div>
                        <div class="row">
                            <aside class="col-xl-3 col-lg-4">
                                <h2>{{__('front.quiz_title_formulate_your_custom_skincare')}}</h2>
                                <p class="lead">{{__('front.quiz_dec_3_minutes_to_your_best_skincare_let_is_go')}}</p>
                                <ul class="list_ok">
                                    <li>{{ __('front.let_is_make_your_formula') }}</li>
                                    <li>{{ __('front.skin_concerns') }}</li>
                                    <li>{{ __('front.heritage') }}</li>
                                    <li>{{ __('front.style_of_life') }}</li>
                                    <li>{{ __('front.skincare_history') }}</li>
                                    <li>{{ __('front.environment') }}</li>
                                </ul>
                            </aside><!-- /aside -->

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <strong>{{ __('front.progress') }}</strong>
                                        <div id="progressbar"></div>
                                    </div><!-- /top-wizard -->

                                    <form name="example-1" id="wrapped" method="POST">
                                            <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                        <div id="middle-wizard">
                                            @php($count = 1)
                                            @foreach($questions as $question)
                                            <div class="<?php if ($questions_count == $count){ ?>submit <?php } ?> step">
                                                <h3 class="main_question"><strong>{{ $count++ }}/{{ $questions_count }}</strong>{{ $question->question_value }}</h3>
                                                @foreach($question->answer as $answer)
                                                <div class="form-group radio_questions">
                                                    <label>{{ $answer->answer_value }}
                                                        <input name="question_{{ $question->id }}" type="radio" value="{{ $answer->answer_value }}" class="icheck required">
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endforeach
{{--                                            <div class="step">--}}
{{--                                                <h3 class="main_question"><strong>2/4</strong>What your poject need?</h3>--}}

{{--                                                <div class="row add_bottom_30">--}}

{{--                                                    <div class="col-sm-6">--}}
{{--                                                        <div class="form-group checkbox_questions">--}}
{{--                                                            <label>--}}
{{--                                                                <input name="question_2[]" type="checkbox" value="Custom interface and layout" class="icheck required">Custom interface and layout--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group checkbox_questions">--}}
{{--                                                            <label>--}}
{{--                                                                <input name="question_2[]" type="checkbox" value="Web site design" class="icheck required">Web site design--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group checkbox_questions">--}}
{{--                                                            <label>--}}
{{--                                                                <input name="question_2[]" type="checkbox" value="Seo optimization" class="icheck required">Seo optimization--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="col-sm-6">--}}
{{--                                                        <div class="form-group checkbox_questions">--}}
{{--                                                            <label>--}}
{{--                                                                <input name="question_2[]" type="checkbox" value="CMS integrations (Wordpress)" class="icheck required">CMS integrations (Wordpress)--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group checkbox_questions">--}}
{{--                                                            <label>--}}
{{--                                                                <input name="question_2[]" type="checkbox" value="Domain registration" class="icheck required">Domain registration--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group checkbox_questions">--}}
{{--                                                            <label>--}}
{{--                                                                <input name="question_2[]" type="checkbox" value="Hosting plan" class="icheck required">Hosting plan--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div><!-- /row-->--}}
{{--                                                <div class="form-group textarea_info">--}}
{{--                                                    <label>Additional info</label>--}}
{{--                                                    <textarea name="addtional_info" class="form-control" style="height:150px;" placeholder="How many pages, other details, etc..."></textarea>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- /step 2-->--}}

{{--                                            <div class="step">--}}
{{--                                                <h3 class="main_question"><strong>3/4</strong>Please answer the following questions:</h3>--}}

{{--                                                <div class="row">--}}

{{--                                                    <div class="col-lg-10">--}}
{{--                                                        <div class="form-group select">--}}
{{--                                                            <label>If you already have an hosting plan, please define:</label>--}}
{{--                                                            <div class="styled-select">--}}
{{--                                                                <select class="required" name="select_1">--}}
{{--                                                                    <option value="" selected>Select</option>--}}
{{--                                                                    <option value="Unix/Linux + Mysql">Unix/Linux + Mysql</option>--}}
{{--                                                                    <option value="Windows + Sql">Windows + Sql</option>--}}
{{--                                                                    <option value="Other">Other</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div><!-- /select-->--}}

{{--                                                        <div class="form-group select">--}}
{{--                                                            <label>If you need an hosting plan, please define which one:</label>--}}
{{--                                                            <div class="styled-select">--}}
{{--                                                                <select class="required" name="select_2">--}}
{{--                                                                    <option value="" selected>Select</option>--}}
{{--                                                                    <option value="Hosting Plan 1 year + Mysql database 500MB">1 year + Mysql database 500MB</option>--}}
{{--                                                                    <option value="Hosting Plan 2 year + Mysql database 500MB">2 year + Mysql database 500MB</option>--}}
{{--                                                                    <option value="Hosting Plan 2 year + Mysql database 1GB">2 year + Mysql database 1GB</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div><!-- /select-->--}}

{{--                                                        <div class="form-group select">--}}
{{--                                                            <label>If you need a newsletter campaign, please define the provider you prefer:</label>--}}
{{--                                                            <div class="styled-select">--}}
{{--                                                                <select class="required" name="select_3">--}}
{{--                                                                    <option value="" selected>Select</option>--}}
{{--                                                                    <option value="Mailchimp">Mailchimp</option>--}}
{{--                                                                    <option value="CampaignMonitor">CampaignMonitor</option>--}}
{{--                                                                    <option value="MailUp">MailUp</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div><!-- /select-->--}}
{{--                                                    </div>--}}
{{--                                                </div><!-- /row-->--}}
{{--                                            </div><!-- /step 3-->--}}


{{--                                            <div class="submit step">--}}

{{--                                                <h3 class="main_question"><strong>4/4</strong>Please fill with your details</h3>--}}

{{--                                                <div class="row">--}}

{{--                                                    <div class="col-sm-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="text" name="company_name" class="form-control" placeholder="Your company name">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="text" name="firstname" class="required form-control" placeholder="First name">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="text" name="lastname" class="required form-control" placeholder="Last name">--}}
{{--                                                        </div>--}}
{{--                                                    </div><!-- /col-sm-6 -->--}}

{{--                                                    <div class="col-sm-6">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="email" name="email" class="required form-control" placeholder="Your Email">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <input type="text" name="telephone" class="required form-control" placeholder="Your Telephone">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <div class="styled-select">--}}
{{--                                                                <select class="required" name="country">--}}
{{--                                                                    <option value="" selected>Select your country</option>--}}
{{--                                                                    <option value="Europe">Europe</option>--}}
{{--                                                                    <option value="Asia">Asia</option>--}}
{{--                                                                    <option value="North America">North America</option>--}}
{{--                                                                    <option value="South America">South America</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div><!-- /col-sm-6 -->--}}
{{--                                                </div><!-- /row -->--}}

{{--                                                <div class="form-group checkbox_questions">--}}
{{--                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">--}}
{{--                                                    <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}

{{--                                            </div><!-- /step 4-->--}}

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Backward </button>
                                            <button type="button" name="forward" class="forward">Forward</button>
                                            <button type="submit" name="process" class="submit">Submit</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                        </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                </div><!-- /tab content -->
            </div><!-- /container-fluid -->
        </div><!-- /wrapper_in -->
    </div><!-- /main_container -->

	<!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="{{url('front')}}/quiz/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Common script -->
    <script src="{{url('front')}}/quiz/assets/js/common_scripts_min.js"></script>
    <!-- Theme script -->
    <script src="{{url('front')}}/quiz/assets/js/functions_no_side_panel.js"></script>

</body>


</html>
