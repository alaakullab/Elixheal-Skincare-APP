<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
<!-- BEGIN: Aside Menu -->
<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.dashboard',app()->getLocale())}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">{{ __('admin.dashboard') }}</span>
                                <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
        {{-- <li class="m-menu__section ">
            <h4 class="m-menu__section-text">Components</h4>
            <i class="m-menu__section-icon flaticon-more-v2"></i>
        </li> --}}

        <li class="m-menu__item  m-menu__item--submenu m-menu__item--open m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
                    class="m-menu__link-text">{{  __('admin.quiz') }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{  __('admin.quiz') }}</span></span>
                    </li>
                    <li class="m-menu__item  m-menu__item--active " aria-haspopup="true">
                        <a href="{{route('admin.question.indexView',app()->getLocale())}}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">@lang('admin.question')</span></a>
                    </li>

                    <li class="m-menu__item  m-menu__item--active " aria-haspopup="true">
                        <a href="{{route('admin.quiz.results.indexView',app()->getLocale())}}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">@lang('admin.results_quiz')</span></a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
            class="m-menu__link-text">@lang('admin.category')</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">@lang('admin.category')</span></span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{route('admin.category.indexView',app()->getLocale())}}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">@lang('admin.category')</span></a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
            class="m-menu__link-text">@lang('admin.contact')</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">@lang('admin.contact')</span></span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{route('admin.contact.indexView',app()->getLocale())}}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">@lang('admin.contact')</span></a>
                    </li>

                </ul>
            </div>
        </li>

    <li class="m-menu__item  m-menu__item--submenu m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
        class="m-menu__link-text">{{ __('faqs') }}</span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu ">
        <span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">
            <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                <span class="m-menu__link">
                    <span class="m-menu__link-text">{{ __('faqs') }}</span></span>
            </li>
            <li class="m-menu__item" aria-haspopup="true">
                <a href="{{ route('admin.faqs_questions.add',app()->getLocale()) }}" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                <span></span></i><span class="m-menu__link-text">Add faqs question</span></a>
            </li>
            <li class="m-menu__item" aria-haspopup="true">
                <a href="{{ route('admin.faqs_questions.indexView',app()->getLocale()) }}" class="m-menu__link ">
                    <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                <span></span></i><span class="m-menu__link-text">View faqs questions</span></a>
            </li>
        </ul>
    </div>
</li>

        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
            class="m-menu__link-text">{{   __('admin.product')  }}</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{   __('admin.product')  }}</span></span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{route('admin.product.indexView',app()->getLocale())}}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">{{   __('admin.product')  }}</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
            class="m-menu__link-text">{{   __('admin.orders')  }}</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{   __('admin.orders')  }}</span></span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="../../components/quiz/state.html" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">{{   __('admin.view_orders')  }}</span></a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span
            class="m-menu__link-text">{{   __('admin.settings')  }}</span>
            <i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
                <span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{   __('admin.settings')  }}</span></span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true">
                        <a href="{{ route('admin.setting.edit',app()->getLocale()) }}" class="m-menu__link ">
                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                        <span></span></i><span class="m-menu__link-text">{{  __('view_setting') }}</span></a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<!-- END: Aside Menu -->
</div>
    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    @yield('title')
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Base</span>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                @yield('title')
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>

                {{-- <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                        <i class="la la-plus m--hide"></i>
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first m--hide">
                                            <span class="m-nav__section-text">Quick Actions</span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">Activity</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                <span class="m-nav__link-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                <span class="m-nav__link-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                <span class="m-nav__link-text">Support</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__separator m-nav__separator--fit">
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 --}}

            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="row">
