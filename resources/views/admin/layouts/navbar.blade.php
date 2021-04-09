<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
        class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item " aria-haspopup="true"><a href="{{route('admin.dashboard',app()->getLocale())}}"
                                                              class="m-menu__link "><i
                        class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span
                            class="m-menu__link-wrap"> <span
                                class="m-menu__link-text">{{ ucwords(__('admin.dashboard')) }}</span>
                                <span
                                    class="m-menu__link-badge"><!-- <span class="m-badge m-badge--danger">2</span> --></span> </span></span></a>
            </li>
            {{-- <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Components</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li> --}}

            <li class="m-menu__item  m-menu__item--submenu m-menu__item--open_ m-menu__item--expanded"
                aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                      class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-layers"></i><span
                        class="m-menu__link-text">{{  ucwords(__('admin.quiz')) }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{  ucwords(__('admin.quiz')) }}</span></span>
                        </li>
                        <li class="m-menu__item  m-menu__item--active " aria-haspopup="true">
                            <a href="{{route('admin.question.indexView',app()->getLocale())}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.question')) }}</span></a>
                        </li>

                        <li class="m-menu__item  m-menu__item--active " aria-haspopup="true">
                            <a href="{{route('admin.quiz.results.indexView',app()->getLocale())}}"
                               class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.results_quiz')) }}</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-cart"></i><span
                        class="m-menu__link-text">{{ ucwords(__('admin.store')) }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{ ucwords(__('admin.store')) }}</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{route('admin.category.indexView',app()->getLocale())}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span class="m-menu__link-text">@lang('admin.category')</span></a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{route('admin.product.indexView',app()->getLocale())}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.product')) }}</span></a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{route('admin.orders.indexView',app()->getLocale())}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.view_orders')) }}</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-email"></i><span
                        class="m-menu__link-text">{{ ucwords(__('admin.contact')) }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                        <span class="m-menu__link">
                            <span class="m-menu__link-text">{{ ucwords(__('admin.contact')) }}</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{route('admin.contact.indexView',app()->getLocale())}}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.contact')) }}</span></a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--expanded" aria-haspopup="true"
                m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-questions-circular-button"></i><span
                        class="m-menu__link-text">{{ ucwords(__('faqs')) }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                <span class="m-menu__link">
                    <span class="m-menu__link-text">{{ ucwords(__('faqs')) }}</span></span>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{ route('admin.faqs_questions.add',app()->getLocale()) }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.add_faqs_question')) }}</span></a>
                        </li>
                        <li class="m-menu__item" aria-haspopup="true">
                            <a href="{{ route('admin.faqs_questions.indexView',app()->getLocale()) }}"
                               class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.faqs_question_list')) }}</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--expanded" aria-haspopup="true"
                m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon flaticon-questions-circular-button"></i><span
                        class="m-menu__link-text">{{ ucwords(__('settings')) }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
                <span class="m-menu__link">
                    <span class="m-menu__link-text">{{ ucwords(__('settings')) }}</span></span>
                        </li>
                        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true"
                            m-menu-submenu-toggle="hover"><a href="{{ route('admin.about.indexView',app()->getLocale()) }}"
                                                             class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-photo-camera"></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.about-us')) }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true"
                            m-menu-submenu-toggle="hover"><a href="{{ route('admin.slider.indexView',app()->getLocale()) }}"
                                                             class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-photo-camera"></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.sliders')) }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item m-menu__item--expanded" aria-haspopup="true"
                            m-menu-submenu-toggle="hover"><a href="{{ route('admin.setting.edit',app()->getLocale()) }}"
                                                             class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-settings"></i><span
                                    class="m-menu__link-text">{{ ucwords(__('admin.settings')) }}</span>
                            </a>
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
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="row">
