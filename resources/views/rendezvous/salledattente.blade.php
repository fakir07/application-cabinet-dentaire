@extends('layouts.master')
@section('title')
Patients
@endsection 
@include('layouts.header')

<style>
	.select2-container--default.select2-container--open.select2-container--above .select2-selection--single, .select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border: none !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #e4e6ef !important;
    border-radius: 4px;
    height: 41px !important;
	width: 213px !important;
	font-weight: 600 !important;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    padding-top: 6px !important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 8px !important;
    right: 3px !important;
    width: 38px !important;
}
</style>

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
				data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
				class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">
					List
					<!--begin::Separator-->
					<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
					<!--end::Separator-->
					<!--begin::Description-->
					<small class="text-muted fs-7 fw-bold my-1 ms-1">Salle d'attent</small>
					<!--end::Description-->
				</h1>
				<!--end::Title-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			@if (count($errors) > 0)
			<div class="alert alert-danger d-flex align-items-center p-5 mb-10">
				<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
				<span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path opacity="0.3"
							d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
							fill="black"></path>
						<path
							d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
							fill="black"></path>
					</svg>
				</span>
				<!--end::Svg Icon-->
				<div class="d-flex flex-column">
					<h4 class="mb-1 text-danger">This is an alert</h4>
					@foreach ($errors->all() as $error)
					<span>{{ $error }}</span>
					@endforeach
				</div>
				<!--begin::Close-->
				<button type="button"
					class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
					data-bs-dismiss="alert">
				<i class="bi bi-x fs-1 text-primary"></i>
				</button>
			</div>
			@endif
			<!--begin::Row-->
			<!--begin::Card-->
			<div class="card">
				<div class="card mb-5 mb-xl-8">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							{{-- <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>
							<span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span> --}}
						</h3>
						<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top">
							
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
									<th class="min-w-120px sorting text-start px-6" tabindex="0"
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
													<img src="{{ asset($rdv->patient->avatar)}}" alt="{{$rdv->patient->avatar}}" class="w-100">
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
											<a href="#" data-bs-toggle="modal"
												data-bs-target="#update{{ $rdv->id }}"
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
											<a data-bs-toggle="modal" data-bs-target="#delete{{ $rdv->id }}"
												class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
												<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
												<span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path
															d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
															fill="black" />
														<path opacity="0.5"
															d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
															fill="black" />
														<path opacity="0.5"
															d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
															fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</div>
									</td>
									<!--start::upadte=-->
									<!--end::Modal -->
								</tr>
								
								<div class="modal fade" tabindex="-1" id="update{{ $rdv->id }}">
									
										<div class="modal-dialog modal-dialog-centered mw-1000px ">
											<div class="modal-content">
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2>Modifer Un Rendez-vous</h2>  
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
																	
																	<form action="{{ URL::route('rendezvous.update','rendezvou') }}" method="POST">
																		@method('put')
																		@csrf

																		<div class="row  mx-6 my-6">
																				<!--begin::Col-->
																				<div class="col fv-row fv-plugins-icon-container">
																					<!--end::Label-->
																					<label class="required fs-5 fw-bold mb-2">Date Rendez-vous
																					</label>
																					<!--end::Label-->
																					<input type="datetime-local" name="start_date" class="form-control mb-2"  value="{{ $rdv->start_date }}"
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
																						<option value="Counsulation" {{  $rdv->type_rend ==  "Counsulation" ? "selected" : ""}}>Counsulation  </option>
																						<option value="Soins dentaiers orthdonte" {{  $rdv->type_rend ==  "Soins dentaiers orthdonte " ? "selected" : ""}}>Soins dentaiers orthdonte   </option>
																						<option value="Esthetique dentaier" {{  $rdv->type_rend ==  "Esthetique dentaier" ? "selected" : ""}}>Esthetique dentaier  </option>
																						<option value="Urgance dentaire" {{  $rdv->type_rend ==  "Urgance dentaire" ? "selected" : ""}}>Urgance dentaire  </option>
																						<option value="Prothesses & implants dentaires" {{  $rdv->type_rend ==  "Prothesses & implants dentaires" ? "selected" : ""}}>Prothesses & implants dentaires  </option>
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
																						<option value="RDV Planfie" {{  $rdv->statu_rend ==  "RDV Planfie" ? "selected" : ""}}>RDV Planfie  </option>
																						<option value="Patient En salle d'attente" {{  $rdv->statu_rend ==  "Patient En salle d'attente" ? "selected" : ""}}>Patient En salle d'attente  </option>
																						<option value="RDV Rapporte" {{  $rdv->statu_rend ==  "RDV Rapporte" ? "selected" : ""}}>RDV Rapporte  </option>
																						<option value="RDV Annule" {{  $rdv->statu_rend ==  "RDV Annule" ? "selected" : ""}}>RDV Annule  </option>
																						<option value="RDV Honore" {{  $rdv->statu_rend ==  "RDV Honore" ? "selected" : ""}}>RDV Honore  </option>
																					</select>
																					<!--end::Input-->
																					<div
																						class="fv-plugins-message-container invalid-feedback">
																					</div>
																					<!--end::Col-->
																				</div>
																					<div class="d-flex flex-wrap flex-sm-nowrap mb-3 my-6" style="background-color: #f8f9fa; /* Light background color */
																					border: 1px dashed #007bff; /* Border color */
																					border-radius: 8px; /* Rounded corners */
																					padding: 20px; /* Padding inside the container */
																					box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift */
																					" >
																					<!--begin: Pic-->
																					<div class="me-7 mb-4">
																					  <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
																						<img src="{{ asset($rdv->patient->avatar) }}" alt="image">
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
																							<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $rdv->patient->name }}</a>
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
																						
																						  <input type="hidden" name="doctor_id" id="doctor_id" value="{{ auth()->user()->id }}">
																						  <input type="hidden" value="{{ $rdv->id }}" id="id" name="id">
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
																							<!--end::Svg Icon-->{{ $rdv->patient->email }}
																						  </a>
																						  <a href="#" class="d-flex align-items-center text-black text-hover-primary me-5 mb-2">
																							<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
																							<span class="svg-icon svg-icon-4 me-1">
																							  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																								<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
																								<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
																							  </svg>
																							</span>
																							<!--end::Svg Icon-->{{ $rdv->patient->adresse }}
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
																							<!--end::Svg Icon-->{{$rdv->patient->age  }}
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
																							<!--end::Svg Icon-->{{$rdv->patient->cin  }}
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
																							<!--end::Svg Icon-->{{ $rdv->patient->telephone }}
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
																				
																				<div class="modal-footer">
																					<button type="button" class="btn btn-light"
																						data-bs-dismiss="modal">Fermer</button>
																					<button type="submit" class="btn btn-primary">Modifer</button>
																				</div>
																			</div>
															
															</form>
																</div>
															</div>
														</div>
													</div>
													<!--end::Tab content-->
												</div>
											</div>
										</div>
									</div>
									<!--end::Modal -->
								</div>
									<!--start::delet -->
									      <!-- modul delte -->
										  <div class="modal fade" tabindex="-1" id="delete{{ $rdv->id }}">
											<div class="modal-dialog mw-650px">
												<div class="modal-content">
													<div class="modal-body">
														<form
															action="{{ URL::route('rendezvous.destroy', 'delete') }}"
															method="POST" id="kt_modal_new_target_form"
															class="form">
															@method('delete')
															@csrf
															<!--begin::Heading-->
															<div class="mb-13 text-center">
																<!--begin::Title-->
																<h1 class="mb-3">Supperimer un patient</h1>

															</div>
															<!--end::Heading-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-8 fv-row">
																<!--begin::Label-->
																<label
																	class="d-flex align-items-center fs-6 fw-bold mb-2">
																	<span class="required">voulez-vous
																		supprimer Rendez-vous </span>
																	<code>{{ $rdv->patient->name }}</code>
																	<input type="hidden" id="id"
																		name="id" value="{{ $rdv->id }}">
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
									<!--end::delet -->


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
		<!--end::Card-->
		<!--end::Row-->
	</div>
</div>

</div>
@endsection
@section(' scripts') 
@toastr_js @toastr_render
 @endsection
 @include('layouts.filesjs')