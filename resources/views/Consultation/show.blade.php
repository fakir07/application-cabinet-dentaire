@extends('layouts.master')
@section('title')
Patients
@endsection

@section('content')

<div class="content" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Subscription Details</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Subscriptions</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Add Subscription</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475f9c55bb">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475f9c55bb" data-allow-clear="true" data-select2-id="select2-data-7-nz6p" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-9-ko0m"></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-a55y" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-mn6n-container" aria-controls="select2-mn6n-container"><span class="select2-selection__rendered" id="select2-mn6n-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    

    <div class="container mx-6">
     <!--begin::Card-->
     <div class="card card-flush pt-3 mb-0" >
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Fiche de patient : <code class="fs-5"> {{ $rdvs->patient->name }}</code></h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0 fs-6">
            <!--begin::Section-->
            
            <div class="separator separator-dashed mb-7"></div>
           
            <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                <!--begin::Image-->
                <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                    <img class="mw-50px mw-lg-75px" src="{{ asset($rdvs->patient->avatar) }}" alt="image">
                </div>
                <!--end::Image-->
                <!--begin::Wrapper-->
                <div class="flex-grow-1">
                    <!--begin::Head-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::Details-->
                        <div class="d-flex flex-column">
                            <!--begin::Status-->
                            <div class="d-flex align-items-center mb-1">
                                <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{ $rdvs->patient->name }}</a>
                                <span class="badge badge-light-success me-auto">In Progress</span>
                            </div>
                            <!--end::Status-->
                            <!--begin::Description-->
                            <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">
                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                    <a  class="btn btn-sm btn-light-primary">Modifier</a>
                                    <a class="btn btn-sm btn-light-primary">Supprimer</a>
                                </div>

                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Actions-->
                        
                        <!--end::Actions-->
                    </div>
                </div>
            </div>  

            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bolder fs-6 text-muted-800">Le Nom  : <span class="text-muted " style="color: #586187!important;">  {{ $rdvs->patient->name }} </span></label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-muted-800">Telephone : <span class="text-muted " style="color: #586187!important;"> {{ $rdvs->patient->telephone }}</span></span>
                </div>
                <!--end::Col-->
            </div>                            
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bolder fs-6 text-muted-800">Cnss  : <span class="text-muted " style="color: #586187!important;"> {{ $rdvs->patient->cnss }}</span> </label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-muted-800">Emial : <span class="text-muted " style="color: #586187!important;">  {{ $rdvs->patient->email }} </span></span>
                </div>
                <!--end::Col-->
            </div>                            
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bolder fs-6 text-muted-800">Ville  : <span class="text-muted "style="color: #586187!important;"> {{ $rdvs->patient->ville }}</span></label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-muted-800">Sex : <span class="text-muted " style="color: #586187!important;"> {{ $rdvs->patient->sex }}</span></span>
                </div>
                <!--end::Col-->
            </div>                            
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bolder fs-6 text-muted-800">Age  : <span class="text-muted " style="color: #586187!important;"> {{ $rdvs->patient->age }}</span></label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-muted-800">cine : <span class="text-muted " style="color: #586187!important;"> {{ $rdvs->patient->cin }}</span></span>
                </div>
                <!--end::Col-->
            </div>                            
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-bolder fs-6 text-muted-800">Adreese  : <span class="text-muted  " style="color: #586187!important;"> {{ $rdvs->patient->adresse }}</span></label>
                <!--end::Label-->
               
            </div>                            
                                  
                                            
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
    <div class="container mx-6  my-6">
     <!--begin::Card-->
     <div class="card card-flush pt-3 mb-0" >
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mx-6 my-3 ">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Consultation</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#Ordonnace">Ordonnance</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#Traitements">Plans de Traitements</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#Devis">Devis</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#Facture">Facture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#Reglements">Reglements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#Rendez">Rendez-vous</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end::Close-->
            </div>
            <!--end::Card title-->
            	<!--begin:::Tabs-->
									
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="separator separator-dashed "></div>

        <div class="card-body pt-0 fs-6">
            <!--begin::Section-->
            
            <div class="d-flex flex-column flex-row-fluid">
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade active show" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                           
                           <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                {{-- <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                    <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                            </h3>
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top">
                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#counsultation">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Ajouter un Consultation
                                </a>
                            </div>
                        </div>
                            <table id="kt_datatable_example_5"
                            class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                           
                            <!--begin::Table head-->
                            <thead>

                                <!--begin::Table row-->
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-125px sorting text-start px-6" tabindex="0"
                                        aria-controls="kt_table_users" rowspan="1" colspan="1"
                                        aria-label="User: activate to sort column ascending" style="width: 224.953px;">
                                        Title</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                        rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending"
                                        style="width: 125px;">
                                        Description</th>
                                  
                                    <th class="text-center min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                        aria-label="Actions" style="width: 100px;">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <tr class="">
                                    <!--begin::Checkbox-->
                                    <td class="min-w-125px sorting text-start px-6"></td>
                                    <!--end::Role=-->
                                    <!--begin::Role=-->
                                    <td></td>
                                    <!--end::Role=-->
                                    <td>
                                        <div class="d-flex justify-content-center flex-shrink-0">

                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#update"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                            fill="black" />
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>

                                         

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>

                        <div class="modal fade" tabindex="-1" id="counsultation">
                            <div class="modal-dialog mw-650px">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form action="{{ route('Ordonnance.store') }}" method="POST" class="form">
                                            @csrf
                                            <!--begin::Heading-->
                                            <div class="mb-11 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-muted fw-bold ">Ajouter une Medicament</h1>
                                                <!--end::Title-->
                                                <div class="separator border-2 my-10"></div>
                                            </div>
    
                                            <input type="hidden" name="patient_id" id="patient_id" value="{{$rdvs->patient->id }}">
                                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-bold">
                                                        <h4 class="text-gray-900 fw-bolder">Warning</h4>
                                                        <div class="fs-6 text-gray-700">Updating address may affter to your
                                                        <a href="#">Tax Location</a></div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
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
                        </div>
                    </div>
                    <div class="tab-pane fade active " id="Ordonnace" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <div class="card-header border-0 pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    {{-- <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
                                        <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
                                </h3>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top">
                                    <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                        data-bs-target="#aziz">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Ajouter un Ordonnance
                                    </a>
                                </div>
                            </div>
                                <table id="kt_datatable_example_5"
                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                               
                                <!--begin::Table head-->
                                <thead>
    
                                    <!--begin::Table row-->
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="min-w-125px sorting text-start px-6" tabindex="0"
                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                            aria-label="User: activate to sort column ascending" style="width: 224.953px;">
                                            Title</th>
                                        <th class="min-w-125px sorting text-start px-6" tabindex="0"
                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                            aria-label="User: activate to sort column ascending" style="width: 224.953px;">
                                            Title</th>
                                        <th class="min-w-125px sorting text-start px-6" tabindex="0"
                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                            aria-label="User: activate to sort column ascending" style="width: 224.953px;">
                                            Title</th>
                                        <th class="min-w-125px sorting text-start px-6" tabindex="0"
                                            aria-controls="kt_table_users" rowspan="1" colspan="1"
                                            aria-label="User: activate to sort column ascending" style="width: 224.953px;">
                                            Title</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending"
                                            style="width: 125px;">
                                            Description</th>
                                      
                                        <th class="text-center min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Actions" style="width: 100px;">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                    @foreach ($ordos  as $ordo )
                                    <tr class="">
                                        <!--begin::Checkbox-->
                                        <td class="min-w-125px sorting text-start px-6">{{ $ordo->nameOrd }} </td>
                                        <!--end::Role=-->
                                        <!--begin::Role=-->
                                        <td> {{$ordo->qnty}}</td>
                                        <td> {{$ordo->usejr}}</td>
                                        <td> {{$ordo->usekl}}</td>
                                        <td> {{$ordo->description}}</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
    
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#delete{{$ordo->id}}"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                fill="black" />
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
    
                                             
    
                                            </div>
                                        </td>
                                        <!--end::Role=-->
                                       
                                    </tr>
                                     <!-- modul delte -->
                                     <div class="modal fade" tabindex="-1" id="delete{{ $ordo->id }}">
                                        <div class="modal-dialog mw-650px">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ URL::route('Ordonnance.destroy', 'delete') }}"
                                                        method="POST" id="kt_modal_new_target_form"
                                                        class="form">
                                                        @method('delete')
                                                        @csrf
                                                        <!--begin::Heading-->
                                                        <div class="mb-13 text-center">
                                                            <!--begin::Title-->
                                                            <h1 class="mb-3">Supperimer un traitement</h1>

                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-column mb-8 fv-row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                <span class="required">voulez-vous
                                                                    supprimer Traitement </span>
                                                                <code>{{ $ordo->title }}</code>
                                                                <input type="hidden" id="id"
                                                                    name="id" value="{{ $ordo->id }}">
                                                            </label>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Supprimer
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal delete -->
                                    @endforeach
                                  
                                </tbody>
                                <!--end::Table body-->
                            </table>                     
                         <!-- Modal -->
                      <div class="modal fade" tabindex="-1" id="aziz">
                        <div class="modal-dialog mw-650px">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="{{ route('Ordonnance.store') }}" method="POST" class="form">
                                        @csrf
                                        <!--begin::Heading-->
                                        <div class="mb-11 text-center">
                                            <!--begin::Title-->
                                            <h1 class="text-muted fw-bold ">Ajouter une Medicament</h1>
                                            <!--end::Title-->
                                            <div class="separator border-2 my-10"></div>
                                        </div>

                                        <input type="hidden" name="patient_id" id="patient_id" value="{{$rdvs->patient->id }}">
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span class="required">Le nom de Medicament </span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select border" name="nameOrd" aria-label="Default select example">
                                                <option selected disabled>Open this select </option>
                                                @foreach ($medcs as $medc )
                                                <option value="{{ $medc->title }}">{{ $medc->title }}</option>
                                                @endforeach
                                              </select>
                                        </div>
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <div class="row">
                                                <div class="col"><label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                    <span class="required">Posolgie </span>
                                                </label>
                                                <input 
                                                class="form-control form-control-solid border"
                                                placeholder="Quantitie" type="number"  name="qnty">
                                    
                                            </div>
                                                <div class="col">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Posolgie </span>
                                                    </label>
                                                    <select class="form-select border" name="usejr" aria-label="Default select example">
                                                        <option selected disabled>Open this select </option>
                                                        <option value="par-jour">Par jour</option>
                                                        <option value="par-semaine">Par semaine</option>
                                                        <option value="par-mois">Par mois</option>
                                                      </select>
                                            </div>
                                                <div class="col">
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Posolgie </span>
                                                    </label>
                                                    <select class="form-select border" name="usekl" aria-label="Default select example">
                                                        <option selected disabled>Open this select </option>
                                                        <option value="Avant les repas">Avant les repas</option>
                                                        <option value="Durant les repas">Durant les repas</option>
                                                        <option value="Apres les repas">Apres les repas</option>
                                                      </select>
                                                </div>
                                            </div>
                                              </div>
                                        
                                        
                                        <div class="d-flex flex-column mb-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                <span >Description</span>
                                            </label>
                                            <!--end::Label-->
                                            <textarea type="text" name='description' class="form-control form-control-solid"
                                                placeholder="Enter le Description" name="description" rows="3"></textarea>
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
                    <!--end::Modal -->

                        </div>
                    </div>
                    <div class="tab-pane fade active " id="Traitements" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <h2>Traitements</h2>
                        </div>
                    </div>
                </div>
                                            
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>



</div>
@endsection

