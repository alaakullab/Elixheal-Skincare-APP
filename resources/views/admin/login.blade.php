<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Login Page - 2</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{url('admin_panel')}}/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{url('admin_panel')}}/assets/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="{{url('admin_panel')}}/assets/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="{{url('admin_panel')}}/assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{url('admin_panel')}}/assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="{{url('admin_panel')}}/assets/demo/media/img/logo/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{url('admin_panel')}}/assets/app/media/img//bg/bg-1.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="{{url('admin_panel')}}/assets/demo/media/img/logo/logo_default_dark.png   ">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In To Admin</h3>
							</div>
							<form class="m-login__form m-form" method="POST" action="{{ route('admin.login', app()->getLocale()) }}">
                                @csrf
								<div class="form-group m-form__group">
                                    <input class="form-control m-input @error('email') is-invalid @enderror" type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input type="checkbox" name="remember"> Remember me
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary"> {{ __('Login') }}</button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
							</form>
						</div>
{{--						<div class="m-login__signup">--}}
{{--							<div class="m-login__head">--}}
{{--								<h3 class="m-login__title">Sign Up</h3>--}}
{{--								<div class="m-login__desc">Enter your details to create your account:</div>--}}
{{--							</div>--}}
{{--							<form class="m-login__form m-form" action="">--}}
{{--								<div class="form-group m-form__group">--}}
{{--									<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname">--}}
{{--								</div>--}}
{{--								<div class="form-group m-form__group">--}}
{{--									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">--}}
{{--								</div>--}}
{{--								<div class="form-group m-form__group">--}}
{{--									<input class="form-control m-input" type="password" placeholder="Password" name="password">--}}
{{--								</div>--}}
{{--								<div class="form-group m-form__group">--}}
{{--									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">--}}
{{--								</div>--}}
{{--								<div class="row form-group m-form__group m-login__form-sub">--}}
{{--									<div class="col m--align-left">--}}
{{--										<label class="m-checkbox m-checkbox--light">--}}
{{--											<input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.--}}
{{--											<span></span>--}}
{{--										</label>--}}
{{--										<span class="m-form__help"></span>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="m-login__form-action">--}}
{{--									<button id="m_login_signup_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign Up</button>&nbsp;&nbsp;--}}
{{--									<button id="m_login_signup_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Cancel</button>--}}
{{--								</div>--}}
{{--							</form>--}}
{{--						</div>--}}
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="m-login__form m-form" action="">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Cancel</button>
								</div>
							</form>
						</div>
{{--						<div class="m-login__account">--}}
{{--							<span class="m-login__account-msg">--}}
{{--								Don't have an account yet ?--}}
{{--							</span>&nbsp;&nbsp;--}}
{{--							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign Up</a>--}}
{{--						</div>--}}
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{url('admin_panel')}}/assets/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{url('admin_panel')}}/assets/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="{{url('admin_panel')}}/assets/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{url('admin_panel')}}/assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="{{url('admin_panel')}}/assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
