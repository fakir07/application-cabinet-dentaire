<!DOCTYPE html>
<html lang="en">


@include('layouts.header')
<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
           @include('layouts.main-saidbare')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts.main-headerbar')
               
                <!--end::Header-->
                <!--begin::Content-->
                @yield('content')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <!--begin::Title-->
                                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Online Courses</h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <!--begin::Secondary button-->
                                <a href="../../demo1/dist/.html" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                                <!--end::Secondary button-->
                                <!--begin::Primary button-->
                                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Add Goal</a>
                                <!--end::Primary button-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-4 mb-xl-10">
                                    <!--begin::Lists Widget 19-->
                                    <div class="card card-xl-stretch mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title fw-bolder text-dark">Salle d'attent</h3>
                                            <div class="card-toolbar">
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                                                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                                                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                                                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 2-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->
                                                <!--end::Menu-->
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            @foreach ($salles as $rdv )
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="{{ asset($rdv->patient->avatar)}}" alt="{{$rdv->patient->avatar}}" class="w-100">

                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="{{ URL::route('consultation.show', $rdv->patient->id) }}" class="text-dark fw-bolder text-hover-primary fs-6">{{ $rdv->patient->name }}</a>
                                                    <span class="text-muted d-block fw-bold">{{ $rdv->patient->telephone }}</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            @endforeach

                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Lists Widget 19-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-8 mb-5 mb-xl-10">
                                    <!--begin::Row-->
                                    <div class="row g-5 g-xl-10">
                                        <!--begin::Col-->
                                        <div class="col-xl-6 mb-xl-10">
                                            <!--begin::Slider Widget 1-->
                                            <div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5">
                                                    <!--begin::Title-->
                                                    <h4 class="card-title d-flex align-items-start flex-column">
                                                        <span class="card-label fw-bolder text-gray-800">Today’s Course</span>
                                                        <span class="text-gray-400 mt-1 fw-bolder fs-7">4 lessons, 3 hours 45 minutes</span>
                                                    </h4>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Carousel Indicators-->
                                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="ms-1"></li>
                                                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1 active" aria-current="true"></li>
                                                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
                                                        </ol>
                                                        <!--end::Carousel Indicators-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-6">
                                                    <!--begin::Carousel-->
                                                    <div class="carousel-inner mt-n5">
                                                        <!--begin::Item-->
                                                        <div class="carousel-item show">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-5">
                                                                <!--begin::Chart-->
                                                                <div class="w-80px flex-shrink-0 me-2">
                                                                    <div class="min-h-auto ms-n3 initialized" id="kt_slider_widget_1_chart_1" style="height: 100px; min-height: 101px;"><div id="apexchartsu5k9inlf" class="apexcharts-canvas apexchartsu5k9inlf apexcharts-theme-light" style="width: 90px; height: 101px;"><svg id="SvgjsSvg1006" width="90" height="100.99999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(-5, 0)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMasku5k9inlf"><rect id="SvgjsRect1010" width="106" height="102" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasku5k9inlf"></clipPath><clipPath id="nonForecastMasku5k9inlf"></clipPath><clipPath id="gridRectMarkerMasku5k9inlf"><rect id="SvgjsRect1011" width="104" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1012" class="apexcharts-radialbar"><g id="SvgjsG1013"><g id="SvgjsG1014" class="apexcharts-tracks"><g id="SvgjsG1015" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579" fill="none" fill-opacity="1" stroke="rgba(241,250,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.414634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579"></path></g></g><g id="SvgjsG1017"><g id="SvgjsG1020" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath1021" d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 18.917364043733517 47.826490360777576" fill="none" fill-opacity="0.85" stroke="rgba(0,158,247,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.414634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="274" data:value="76" index="0" j="0" data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 18.917364043733517 47.826490360777576"></path></g><circle id="SvgjsCircle1018" r="26.951219512195127" cx="50" cy="50" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1019" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1022" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1023" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1009" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                                </div>
                                                                <!--end::Chart-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="mb-1">
                                                                <a href="#" class="btn btn-sm btn-light me-2">Skip This</a>
                                                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item active">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-5">
                                                                <!--begin::Chart-->
                                                                <div class="w-80px flex-shrink-0 me-2">
                                                                    <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2" style="height: 100px"></div>
                                                                </div>
                                                                <!--end::Chart-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="mb-1">
                                                                <a href="#" class="btn btn-sm btn-light me-2">Skip This</a>
                                                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-5">
                                                                <!--begin::Chart-->
                                                                <div class="w-80px flex-shrink-0 me-2">
                                                                    <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3" style="height: 100px"></div>
                                                                </div>
                                                                <!--end::Chart-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="mb-1">
                                                                <a href="#" class="btn btn-sm btn-light me-2">Skip This</a>
                                                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Continue</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Carousel-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Slider Widget 1-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-6 mb-5 mb-xl-10">
                                            <!--begin::Slider Widget 2-->
                                            <div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5">
                                                    <!--begin::Title-->
                                                    <h4 class="card-title d-flex align-items-start flex-column">
                                                        <span class="card-label fw-bolder text-gray-800">Today’s Events</span>
                                                        <span class="text-gray-400 mt-1 fw-bolder fs-7">24 events on all activities</span>
                                                    </h4>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Carousel Indicators-->
                                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
                                                            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
                                                            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
                                                        </ol>
                                                        <!--end::Carousel Indicators-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-6">
                                                    <!--begin::Carousel-->
                                                    <div class="carousel-inner">
                                                        <!--begin::Item-->
                                                        <div class="carousel-item active show">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-70px symbol-circle me-5">
                                                                    <span class="symbol-label bg-light-success">
                                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
                                                                        <span class="svg-icon svg-icon-3x svg-icon-success">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor"></path>
                                                                                <path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->5 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->60 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->137 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="mb-1">
                                                                <a href="#" class="btn btn-sm btn-light me-2">Details</a>
                                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-70px symbol-circle me-5">
                                                                    <span class="symbol-label bg-light-danger">
                                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
                                                                        <span class="svg-icon svg-icon-3x svg-icon-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="currentColor"></path>
                                                                                <path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->12 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="mb-1">
                                                                <a href="#" class="btn btn-sm btn-light me-2">Details</a>
                                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-70px symbol-circle me-5">
                                                                    <span class="symbol-label bg-light-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
                                                                        <span class="svg-icon svg-icon-3x svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z" fill="currentColor"></path>
                                                                                <path opacity="0.3" d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bolder text-gray-800 mb-3">Ruby on Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center fs-7 fw-bolder text-gray-400 mb-2">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span class="d-flex align-items-center text-gray-400 fw-bolder fs-7">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                                                                            <span class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                                                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="mb-1">
                                                                <a href="#" class="btn btn-sm btn-light me-2">Details</a>
                                                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Carousel-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Slider Widget 2-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Engage widget 4-->
                                    <div class="card" style="background: #89CFF0;">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex ps-xl-15">
                                            <!--begin::Action-->
                                            <div class="m-0">
                                                <!--begin::Title-->
                                                <div class="position-relative fs-2x z-index-2 fw-bolder text-white mb-7">
                                                <span class="me-2">You have got
                                                <span class="position-relative d-inline-block text-danger">
                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-danger opacity-75-hover">2300 bonus</a>
                                                    <!--begin::Separator-->
                                                    <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                    <!--end::Separator-->
                                                </span></span>points.
                                                <br>Feel free to use them in your lessons</div>
                                                <!--end::Title-->
                                                <!--begin::Action-->
                                                <div class="mb-3">
                                                    <a href="#" class="btn btn-danger fw-bold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Get Reward</a>
                                                    <a href="../../demo1/dist/apps/support-center/overview.html" class="btn btn-color-white bg-body bg-opacity-15 bg-hover-opacity-25 fw-bold">How to</a>
                                                </div>
                                                <!--begin::Action-->
                                            </div>
                                            <!--begin::Action-->
                                            <!--begin::Illustration-->
                                            {{-- <img src="{{  }}" class="position-absolute me-3 bottom-0 end-0 h-200px" alt=""> --}}
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    
                                    <!--end::Engage widget 4-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row g-5 g-xl-10 mx-2">
                                <div class="card">
                                    <div class="card mb-5 mb-xl-8">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                {{-- <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                                <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                                            </h3>
                                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_new_target">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                                transform="rotate(-90 11.364 20.364)" fill="black" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Ajouter un Rendez-vous
                                                </a>
                                         
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-3">
                                            <!--begin::Accordion-->
                                            <!--begin::Table-->
                                            <!--begin::Table-->
                                            <table id="kt_datatable_example_5"
                                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="fw-bolder text-muted bg-light">
                                                        <th class="min-w-125px sorting text-start px-6" tabindex="0"
                                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                                            aria-label="User: activate to sort column ascending" style="width: 224.953px;">
                                                            Patient
                                                        </th>
                                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                            rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending"
                                                            style="width: 125px;">
                                                            Type Rendez-Vous
                                                        </th>
                                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                                            rowspan="1" colspan="1" aria-label="Two-step: activate to sort column ascending"
                                                            style="width: 125px;">Status </th>
                                                        <th class="text-center min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                                            aria-label="Actions" style="width: 100px;">Actions</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="text-gray-600 fw-bold">
                                                    @foreach ($rdvs as $rdv)
                                                    <tr class="">
                                                        <!--begin::Checkbox-->
                                                        <!--begin::User=-->
                                                        <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a>
                                                                    <div class="symbol-label">
                                                                        <img src="{{ asset($rdv->patient->avatar) }}" alt="{{$rdv->patient->avatar}}" class="w-100">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                                <a class="text-gray-800 text-hover-primary mb-1">{{$rdv->patient->name}}</a>
                                                                <span>{{$rdv->patient->email}}</span>
                                                            </div>
                                                            <!--begin::User details-->
                                                        </td>
                                                        <td> {{$rdv->type_rend}}</td>
                                                        <td>{{ $rdv->statu_rend }}</td>
                                                        <!--begin::Joined-->
                                                        <!--begin::Action=-->
                                                        <td>
                                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                          
                                                                <a class=" btn btn-light-primary fw-bolder me-auto px-4 py-3"
                                                                data-bs-toggle="modal" data-bs-target="#delete{{ $rdv->id }}"
                                                                >Status RDV</a>
                                                            </div>
                                                        </td>
                                                        <!--start::upadte=-->
                                                        <!--end::Modal -->
                                                    </tr>
                                                              <div class="modal fade " tabindex="-1"  id="delete{{ $rdv->id }}">
                                                                <div class="modal-dialog mw-650px">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <form
                                                                                action="{{ URL::route('updateStatus') }}"
                                                                                method="POST" id=""
                                                                                class="form">
                                                                                @csrf
                                                                                <!--begin::Heading-->
                                                                                <div class="mb-13 text-center">
                                                                                    <!--begin::Title-->
                                                                                    <h1 class="mb-3">Gestion Rendez-vous  REF:{{$rdv->id  }}</h1>
                                                                                </div>
                                                                                <!--end::Heading-->
                                                                                <!--begin::Input group-->
                                                                                <div class="d-flex flex-column mb-8 fv-row">
                                                                                    <!--begin::Label-->
                                                                                    <div class="col fv-row fv-plugins-icon-container">
                                                                                        <!--end::Label-->
                                                                                        <label class="required fs-5 fw-bold mb-2">Type Rendez-vous
                                                                                        </label>
                                                                                        <!--end::Label-->
                                                                                        <!--end::Input-->
                                                                                        <select class="form-select border" name="statu_rend" aria-label="Default select example">
                                                                                            <option selected disabled>Open this select </option>
                                                                                            <option value="RDV Planfie">RDV Planfie  </option>
                                                                                            <option value="Patient En salle d'attente ">Patient En salle d'attente  </option>
                                                                                            <option value="RDV Rapporte ">RDV Rapporte  </option>
                                                                                            <option value="RDV Annule ">RDV Annule  </option>
                                                                                            <option value="RDV Honore ">RDV Honore  </option>
                                                                                        </select>
                                                                                            <!--end::Input-->
                                                                                            <input type="hidden" name="id" id="id" value="{{ $rdv->id }}">
                                                                                        <div
                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light"
                                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Modifier
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endforeach
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" tabindex="-1" id="kt_modal_new_target">
                                            {{-- 
                                            <div class="modal-dialog modal-fullscreen p-9">
                                                --}}
                                                <div class="modal-dialog modal-dialog-centered mw-1000px ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <!--begin::Modal title-->
                                                            <h2>Ajouter Un Rendez-vous</h2>  
                                                            <!--end::Modal title-->
                                                            <!--begin::Close-->
                                                            <!--begin:::Tabs-->
                                                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mx-6 my-3 justify-content-end">
                                                                <!--begin:::Tab item-->
                                                                <li class="nav-item">
                                                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Existe Patient</a>
                                                                </li>
                                                                <!--end:::Tab item-->
                                                                <!--begin:::Tab item-->
                                                                <li class="nav-item">
                                                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Nouveau Patient</a>
                                                                </li>
                                                                <!--end:::Tab item-->
                                                            </ul>
                                                            <!--end::Close-->
                                                        </div>
                                                        <div class="d-flex flex-column flex-row-fluid">
                                                            <!--end:::Tabs-->
                                                            <!--begin::Tab content-->
                                                            <div class="tab-content">
                                                                <!--begin::Tab pane-->
                                                                <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                                                        <!--begin::Inventory-->
                                                                        <div class="card card-flush py-4">
                                                                            <!--begin::Card header-->
                                                                            <form method="POST" action="{{ URL::route('rendezvous.store') }}">
                                                                                @csrf
                                                                                    <div class="row  mx-6 my-6">
                                                                                        <!--begin::Col-->
                                                                                        <div class="col fv-row fv-plugins-icon-container">
                                                                                            <!--end::Label-->
                                                                                            <label class="required fs-5 fw-bold mb-2">Telephone Patients
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Input-->
                                                                                            <select class="form-control border mySelect " name="patient_id" style="height: 50px !important;" name=""  aria-label="Default select example">
                                                                                                <option selected disabled>choiser Le patient </option>
                                                                                                @foreach ($patients as $patient )
                                                                                                <option value="{{ $patient->id }}">{{ $patient->telephone }}  </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                            <!--end::Input-->
                                                                                            <input type="hidden" name="doctor_id" id="doctor_id" value="{{ auth()->user()->id }}">
                                                                                            <div
                                                                                                class="fv-plugins-message-container invalid-feedback">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--begin::Col-->
                                                                                        <!--begin::Col-->
                                                                                        <div class="col fv-row fv-plugins-icon-container">
                                                                                            <!--end::Label-->
                                                                                            <label class="required fs-5 fw-bold mb-2">Date Rendez-vous
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <input type="datetime-local" name="start_date" class="form-control mb-2" 
                                                                                                >
                                                                                            <div
                                                                                                class="fv-plugins-message-container invalid-feedback">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--begin::Col-->
                                                                                        <div class="col fv-row fv-plugins-icon-container">
                                                                                            <!--end::Label-->
                                                                                            <label class="required fs-5 fw-bold mb-2">Type Rendez-vous
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Input-->
                                                                                            <select class="form-select border" name="type_rend" aria-label="Default select example">
                                                                                                <option selected disabled>Open this select </option>
                                                                                                <option value="Counsulation" >Counsulation  </option>
                                                                                                <option value="Soins dentaiers orthdonte" >Soins dentaiers orthdonte   </option>
                                                                                                <option value="Esthetique dentaier" >Esthetique dentaier  </option>
                                                                                                <option value="Urgance dentaire" >Urgance dentaire  </option>
                                                                                                <option value="Prothesses & implants dentaires" >Prothesses & implants dentaires  </option>
                                                                                            </select>
                                                                                            <!--end::Input-->
                                                                                            <div
                                                                                                class="fv-plugins-message-container invalid-feedback">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--begin::Col-->
                                                                                        <div class="col fv-row fv-plugins-icon-container">
                                                                                            <!--end::Label-->
                                                                                            <label class="required fs-5 fw-bold mb-2">Status Rendez-vous
                                                                                            </label>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Input-->
                                                                                            <select class="form-select border" name="statu_rend" aria-label="Default select example">
                                                                                                <option selected disabled>Open this select </option>
                                                                                                <option value="RDV Planfie">RDV Planfie  </option>
                                                                                                <option value="Patient En salle d'attente ">Patient En salle d'attente  </option>
                                                                                                <option value="RDV Rapporte ">RDV Rapporte  </option>
                                                                                                <option value="RDV Annule ">RDV Annule  </option>
                                                                                                <option value="RDV Honore ">RDV Honore  </option>
                                                                                            </select>
                                                                                            <!--end::Input-->
                                                                                            <div
                                                                                                class="fv-plugins-message-container invalid-feedback">
                                                                                            </div>
                                                                                            <!--end::Col-->
                                                                                            
                                        
                                                                                        </div>
                                                                                        <div id="patientInfo" class=" my-6" >
                                                                                        </div>
                                                                                        
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-light"
                                                                                                data-bs-dismiss="modal">Fermer</button>
                                                                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                                                                        </div>
                                                                                    </div>
                                                                        </form> 
                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Tab pane-->
                                                                <!--begin::Tab pane-->
                                                                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                                                    <div class="d-flex flex-column ">
                                                                        <!--begin::General options-->
                                                                        <div class="card card-flush">
                                                                            <div class="card-body pt-0">
                                                                                <div class="modal-body">
                                                                                    <form action="{{ URL::route('add_rend') }}" method="POST" >
                                                                                        @csrf
                                                                                    <!--begin::Scroll-->
                                                                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll"
                                                                                        data-kt-scroll="true"
                                                                                        data-kt-scroll-activate="{default: false, lg: true}"
                                                                                        data-kt-scroll-max-height="auto"
                                                                                        data-kt-scroll-dependencies="#kt_modal_new_address_header"
                                                                                        data-kt-scroll-wrappers="#kt_modal_new_address_scroll"
                                                                                        data-kt-scroll-offset="300px" style=""
                                                                                        data-select2-id="select2-data-kt_modal_new_address_scroll">
                                                                                        <div class="row">
                                                                                            <div class="col col-lg-2">
                                                                                                <div class="fv-row mb-7">
                                                                                                    <!--begin::Label-->
                                                                                                    <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                                                                                    <!--end::Label-->
                                                                                                    <!--begin::Image input-->
                                                                                                    <div class="image-input image-input-outline"
                                                                                                        data-kt-image-input="true">
                                                                                                        <!--begin::Preview existing avatar-->
                                                                                                        <div class="image-input-wrapper w-125px h-125px "
                                                                                                            style="background-image: url(assets/media/svg/avatars/001-boy.svg);">
                                                                                                        </div>
                                                                                                        <!--end::Preview existing avatar-->
                                                                                                        <!--begin::Label-->
                                                                                                        <label class=" btn btn-icon btn-circle
                                                                                                            btn-active-color-primary w-25px h-25px bg-body
                                                                                                            shadow" data-kt-image-input-action="change"
                                                                                                            data-bs-toggle="tooltip" title=""
                                                                                                            data-bs-original-title="Change avatar">
                                                                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                                                                            <!--begin::Inputs-->
                                                                                                            <input type="file" name="avatar"
                                                                                                                accept=".png, .jpg, .jpeg"
                                                                                                                >
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Cancel-->
                                                                                                    </div>
                                                                                                    <!--end::Image input-->
                                                                                                    <!--begin::Hint-->
                                                                                                    <div class="form-text">Allowed file types: png, jpg,
                                                                                                        jpeg.
                                                                                                    </div>
                                                                                                    <!--end::Hint-->
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="row mb-5">
                                                                                                    <input type="hidden" name="doctor_id" id="doctor_id" value="{{ auth()->user()->id }}">
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--begin::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Le Nom et
                                                                                                        Prenom
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="name">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Email
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="email">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Telephone
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="telephone">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                </div>
                                                                                                <div class="row mb-5">
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--begin::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Adresse
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border "
                                                                                                            placeholder="" name="adresse">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Ville
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="ville">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Sex
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <select class="form-select border" name="sex" aria-label="Default select example">
                                                                                                            <option selected disabled>Open this select </option>
                                                                                                            <option value="Masculine">Masculine  </option>
                                                                                                            <option value="Féminine">Féminine</option>
                                                                                                        </select>
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                </div>
                                                                                                <div class="row mb-5">
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--begin::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Age
                        
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--begin::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="age" value="">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Cin
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="cin"  value="">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Cnss
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <input type="text"
                                                                                                            class="form-control form-control-solid border"
                                                                                                            placeholder="" name="cnss" value="">
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                </div>
                                                                                                <div class="separator separator-dashed mb-7 " style="border-bottom: 2px dashed;
                                                                                                    ; border-bottom-color: #009ef7 !important;"></div>
                                                                                                <div class="row mb-5">
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Date Rendez-vous
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <input type="datetime-local" name="start_date" class="form-control mb-2" 
                                                                                                            >
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Type Rendez-vous
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <select class="form-select border" name="type_rend" aria-label="Default select example">
                                                                                                            <option selected disabled>Open this select </option>
                                                                                                            <option value="Counsulation">Counsulation  </option>
                                                                                                            <option value="Soins dentaiers orthdonte">Soins dentaiers orthdonte   </option>
                                                                                                            <option value="Esthetique dentaier" >Esthetique dentaier  </option>
                                                                                                            <option value="Urgance dentaire" >Urgance dentaire  </option>
                                                                                                            <option value="Prothesses & implants dentaires">Prothesses & implants dentaires  </option>
                                                                                                        </select>
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--begin::Col-->
                                                                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                                                                        <!--end::Label-->
                                                                                                        <label class="required fs-5 fw-bold mb-2">Status Rendez-vous
                                                                                                        </label>
                                                                                                        <!--end::Label-->
                                                                                                        <!--end::Input-->
                                                                                                        <select class="form-select border" name="statu_rend" aria-label="Default select example">
                                                                                                                <option selected disabled>Open this select </option>
                                                                                                                <option value="RDV Planfie">RDV Planfie  </option>
                                                                                                                <option value="Patient En salle d'attente ">Patient En salle d'attente  </option>
                                                                                                                <option value="RDV Rapporte ">RDV Rapporte  </option>
                                                                                                                <option value="RDV Annule ">RDV Annule  </option>
                                                                                                                <option value="RDV Honore ">RDV Honore  </option>
                                                                                                        </select>
                                                                                                        <!--end::Input-->
                                                                                                        <div
                                                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--end::Col-->
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Scroll-->
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light"
                                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                                                                </div>
                                                                                   </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Tab pane-->
                                                            </div>
                                                            <!--end::Tab content-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Modal -->
                                        </div>
                                        <!--end::Table-->
                                        <!--end::Table-->
                                    </div>
                            
                            </div>
                        </div>
                    </div>
                    <!--end::Post-->
                </div>
               @include('layouts.footer');
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    @include('layouts.filesjs')
<script>
	$(document).ready(function() {
	    $('select[name="patient_id"]').on('change', function() {
	        var patient_id = $(this).val();
	        // alert(Niveauxdetudes_id);
	        if (patient_id) {
	            $.ajax({
	                url: "{{ URL::to('getpatient') }}/" + patient_id,
	                type: "GET",
	                dataType: "json",
	                success: function(data) {
	                    $.each(data, function(key, value) {
	                        console.log(data);
	                        var htmlContent = `
                           <div class="d-flex flex-wrap flex-sm-nowrap mb-3" style="background-color: #f8f9fa; /* Light background color */
  border: 1px dashed #007bff; /* Border color */
  border-radius: 8px; /* Rounded corners */
  padding: 20px; /* Padding inside the container */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift */
  " >
  <!--begin: Pic-->
  <div class="me-7 mb-4">
    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
      <img src="${data.avatar}" alt="image">
      <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
    </div>
  </div>
  <!--end::Pic-->
  <!--begin::Info-->
  <div class="flex-grow-1">
    <!--begin::Title-->
    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
      <!--begin::User-->
      <div class="d-flex flex-column">
        <!--begin::Name-->
        <div class="d-flex align-items-center mb-2">
          <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">${data.name}</a>
          <a href="#">
            <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
            <span class="svg-icon svg-icon-1 svg-icon-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
                <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
              </svg>
            </span>
            <!--end::Svg Icon-->
          </a>
        </div>
        <!--end::Name-->
        <!--begin::Info-->
        <a href="#" class="d-flex align-items-center text-black text-hover-primary mb-2">
          <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
          <span class="svg-icon svg-icon-4 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
              <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
            </svg>
          </span>
          <!--end::Svg Icon-->${data.email}
        </a>
        <a href="#" class="d-flex align-items-center text-black text-hover-primary me-5 mb-2">
          <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
          <span class="svg-icon svg-icon-4 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
              <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
            </svg>
          </span>
          <!--end::Svg Icon-->${data.adresse}
        </a>
        <a href="#" class="d-flex align-items-center text-black text-hover-primary me-5 mb-2">
          <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
          <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil002.svg-->
          <span class="svg-icon svg-icon-4 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor"/>
              <path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor"/>
            </svg>
          </span>
          <!--end::Svg Icon-->
          <!--end::Svg Icon-->${data.age}
        </a>
        <a href="#" class="d-flex align-items-center text-black text-hover-primary me-5 mb-2">
          <!--begin::Svg Icon | path: assets/media/icons/duotune/finance/fin002.svg-->
          <span class="svg-icon svg-icon-4 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M22 7H2V11H22V7Z" fill="currentColor"/>
              <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor"/>
            </svg>
          </span>
          <!--end::Svg Icon-->
          <!--end::Svg Icon-->${data.cin}
        </a>
        <a href="#" class="d-flex align-items-center text-black text-hover-primary me-5 mb-2">
          <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com005.svg-->
          <span class="svg-icon svg-icon-4 me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"/>
              <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"/>
            </svg>
          </span>
          <!--end::Svg Icon-->
          <!--end::Svg Icon-->${data.telephone}
        </a>
        <!--end::Info-->
      </div>
      <!--end::User-->
      <!--begin::Actions-->
      <!--end::Actions-->
    </div>
    <!--end::Title-->
    <!--begin::Stats-->
    <div class="d-flex flex-wrap flex-stack">
      <!--begin::Wrapper-->
      <div class="d-flex flex-column flex-grow-1 pe-8">
        <!--begin::Stats-->
        <!--end::Stats-->
      </div>
      <!--end::Wrapper-->
      <!--begin::Progress-->
      <!--end::Progress-->
    </div>
    <!--end::Stats-->
  </div>
  <!--end::Info-->
</div>
	                        `;
	
	                      $('#patientInfo').html(htmlContent);
	                     
	                    });
	                },
	            });
	        } else {
	            console.log('AJAX load did not work');
	        }
	    });
	});
</script>
</body>
<!--end::Body-->

</html>
