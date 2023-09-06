<?php
include "header.php"
?>
<!--begin::Body-->
<?php
include "sidepanal.php"
?>

<!--begin::Main-->
<div class="app-main bg-white flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<section>
		<div class="d-flex flex-column pt-3 flex-column-fluid shadow-outer-card">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-fluid flex-wrap d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-color fw-bold fs-1 flex-column justify-content-center my-0">
							Dashboard</h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
					<!--begin::Actions-->
					<div class="d-flex align-items-center gap-2 gap-lg-3 mtx-sm-5 mtx-sm-5">
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm fw-semibold btn-theme-dark" data-bs-toggle="modal" data-bs-target="#add_client">Add Client</a>
						<!--end::Primary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm fw-semibold btn-theme-dark" data-bs-toggle="modal" data-bs-target="#add_project">Add Project</a>
						<!--end::Primary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm fw-semibold btn-theme-dark" data-bs-toggle="modal" data-bs-target="#add_coach">Add Coach</a>
						<!--end::Primary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm fw-semibold btn-theme-dark" data-bs-toggle="modal" data-bs-target="#invoice_new_target">Create Invoice</a>
						<!--end::Primary button-->
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Toolbar container-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Row-->

					<!--end::Row-->
					<!--begin::Row-->
					<div class="row gx-5 gx-xl-10 mtx-sm-5">
						<!--begin::Col-->
						<div class="col-xxl-6 col-12 mb-5 mb-xl-10 ">
							<!--begin::Chart widget 8-->
							<div class="card card-bg card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header px-4 pt-5">
									<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
										<!--begin::Title-->
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
												<span class="primary-dark p-1 px-2 rounded-circle d-flex justify-content-center align-items-center">
													<i class="bi bi-person-fill text-white fs-6"></i></span>
												<span class="ms-2">Client</span>
											</span>
										</h3>
										<!--end::Title-->
										<!--begin::Toolbar-->
										<div>
											<i class="bi bi-three-dots-vertical fs-6 text-color"></i>
										</div>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-2">
									<!--begin::Tab content-->
									<div class="row">
										<div class="col-lg-8 col-12 mb-sm-4 px-0">
											<div class="row">
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Total Client
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">256
														<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>10.78%
													</h1>
												</div>
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Active Clients
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">52 <span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>1.08%
													</h1>
												</div>
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Inactive Clients
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">92 <span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>5.90%
													</h1>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<select class="form-select select-bg" data-control="select2" data-placeholder="This Month">
												<option></option>
												<option value="1">Option 1</option>
												<option value="2">Option 2</option>
											</select>
										</div>
									</div>
									<div class="chart">
										<ul class="nav nav-pills px-5 my-5 gap-3" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link theme-tab btn btn-sm fw-semibold btn-white active" id="pills-12months-tab" data-bs-toggle="pill" data-bs-target="#pills-12months" type="button" role="tab" aria-controls="pills-12months" aria-selected="true">12 Months</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link theme-tab btn btn-sm fw-semibold btn-white" id="pills-6months-tab" data-bs-toggle="pill" data-bs-target="#pills-6months" type="button" role="tab" aria-controls="pills-6months" aria-selected="false">6
													Months</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link theme-tab btn btn-sm fw-semibold btn-white" id="pills-30days-tab" data-bs-toggle="pill" data-bs-target="#pills-30days" type="button" role="tab" aria-controls="pills-30days" aria-selected="false">30
													Days</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link theme-tab btn btn-sm fw-semibold btn-white" id="pills-7days-tab" data-bs-toggle="pill" data-bs-target="#pills-7days" type="button" role="tab" aria-controls="pills-7days" aria-selected="false">7
													Days</button>
											</li>
										</ul>
										<div class="tab-content" id="pills-tabContent">
											<div class="tab-pane fade show active" id="pills-12months" role="tabpanel" aria-labelledby="pills-12months-tab" tabindex="0">
												<div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
											</div>
											<div class="tab-pane fade" id="pills-6months" role="tabpanel" aria-labelledby="pills-6months-tab" tabindex="0">
												<div id="kt_charts_widget_4" data-kt-chart-color="primary" class="min-h-auto w-100 text-primary pe-6" style="height: 300px"></div>
											</div>
											<div class="tab-pane fade" id="pills-30days" role="tabpanel" aria-labelledby="pills-30days-tab" tabindex="0">
												<div id="kt_charts_widget_3" class="min-h-auto w-100 text-primary pe-6" style="height: 300px"></div>
											</div>
											<div class="tab-pane fade" id="pills-7days" role="tabpanel" aria-labelledby="pills-7days-tab" tabindex="0">
												<div id="kt_charts_widget_5" data-kt-chart-color="primary" class="min-h-auto w-100 text-primary pe-6" style="height: 300px"></div>
											</div>
										</div>
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 8-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xxl-6 col-12 mb-5 mb-xl-10 ">
							<!--begin::Chart widget 8-->
							<div class="card card-bg card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header px-4 pt-5">
									<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
										<!--begin::Title-->
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
												<span class="primary-dark p-1 px-2 rounded-circle d-flex justify-content-center align-items-center">
													<i class="bi bi-rocket-takeoff-fill text-white fs-6"></i></span>
												<span class="ms-2">Projects</span>
											</span>
										</h3>
										<!--end::Title-->
										<!--begin::Toolbar-->
										<div>
											<i class="bi bi-three-dots-vertical fs-6 text-color"></i>
										</div>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-2">
									<!--begin::Tab content-->
									<div class="row">
										<div class="col-lg-8 col-12 mb-sm-2">
											<div class="row">
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Total Projects
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">322
														<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>10.78%
													</h1>
												</div>
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Active Projects
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">62 <span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>1.08%
													</h1>
												</div>
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Inactive Projects
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">192
														<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>5.90%
													</h1>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<select class="form-select select-bg" data-control="select2" data-placeholder="This Month">
												<option></option>
												<option value="1">Option 1</option>
												<option value="2">Option 2</option>
											</select>
										</div>
									</div>
									<div class="chart">
										<!-- <div id="kt_charts_widget_18_chart" style="height: 350px;"></div> -->
										<canvas id="kt_chartjs_1" class="mh-400px"></canvas>
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 8-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->

					<!--start::Row-->
					<div class="row gx-5 gx-xl-10">
						<!--begin::Col-->
						<div class="col-xxl-6 col-12 mb-5 mb-xl-10 ">
							<!--begin::Chart widget 8-->
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="card card-bg card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-body px-4 pt-5">
											<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
														<span class="primary-dark p-1 px-2 rounded-circle d-flex justify-content-center align-items-center">
															<i class="bi bi-clipboard2-fill fs-6 fw-bold text-white"></i></span>
														<span class="ms-2">Coachee(s)</span>
													</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div>
													<i class="bi bi-three-dots-vertical fs-6 text-color"></i>
												</div>
											</div>
											<div class="row mt-4">
												<div class="col-lg-12 col-12">
													<div id="kt_docs_google_chart_pie" class="my-3"></div>
												</div>
												<div class="col-lg-12 col-12">
													<div class="d-flex flex-wrap">
														<div class="total-client card-border-start px-2">
															<h6 class="text-color-secondary">
																Total </h6>
															<h1 class="d-flex align-items-center fw-bolder">
																256
																<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>10.78%
																</span>
															</h1>
														</div>
														<div class="total-client card-border-start px-2">
															<h6 class="text-color-secondary">
																Active
															</h6>
															<h1 class="d-flex align-items-center fw-bolder">
																52
																<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>1.08%
																</span>
															</h1>
														</div>
														<div class="total-client card-border-start px-2">
															<h6 class="text-color-secondary">
																Inactive
															</h6>
															<h1 class="d-flex align-items-center fw-bolder">
																92
																<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>5.90%
																</span>
															</h1>
														</div>
													</div>
												</div>

											</div>
											<!--end::Toolbar-->
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12 mtx-sm-5">
									<div class="card card-bg card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-body px-4 pt-5">
											<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
														<span class="primary-dark p-1 px-2 rounded-circle d-flex justify-content-center align-items-center">
															<i class="bi bi-people-fill text-white fs-6"></i></span>
														<span class="ms-2">Coachee</span>
													</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div>
													<i class="bi bi-three-dots-vertical fs-6 text-color"></i>
												</div>
											</div>
											<div class="row mt-4">
												<div class="col-lg-12 col-12">
													<div id="kt_docs_google_chart_pie_coache" class="my-3"></div>
												</div>
												<div class="col-lg-12 col-12">
													<div class="d-flex flex-wrap">
														<div class="total-client card-border-start px-2">
															<h6 class="text-color-secondary">
																Active </h6>
															<h1 class="d-flex align-items-center fw-bolder">
																56
																<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>10.78%
																</span>
															</h1>
														</div>
														<div class="total-client card-border-start px-2">
															<h6 class="text-color-secondary">
																Inactive
															</h6>
															<h1 class="d-flex align-items-center fw-bolder">
																58
																<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>1.08%
																</span>
															</h1>
														</div>
														<div class="total-client card-border-start px-2">
															<h6 class="text-color-secondary">
																Pending
															</h6>
															<h1 class="d-flex align-items-center fw-bolder">
																6
																<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>5.90%
																</span>
															</h1>
														</div>
													</div>
												</div>

											</div>
											<!--end::Toolbar-->
										</div>
									</div>
								</div>
							</div>
							<!--end::Chart widget 8-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-xxl-6 col-12 mb-5 mb-xl-10 ">
							<!--begin::Chart widget 8-->
							<div class="card card-bg card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header px-4 pt-5">
									<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
										<!--begin::Title-->
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
												<span class="primary-dark p-1 px-2 rounded-circle d-flex justify-content-center align-items-center">
													<i class="bi bi-rocket-takeoff-fill text-white fs-6"></i></span>
												<span class="ms-2">Invoices <span class="text-muted fs-7">This Month</span></span>
											</span>
										</h3>
										<!--end::Title-->
										<!--begin::Toolbar-->
										<div>
											<i class="bi bi-three-dots-vertical fs-6 text-color"></i>
										</div>
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-2">
									<!--begin::Tab content-->
									<div class="row mt-5">
										<div class="col-lg-12 col-12  mb-sm-2">
											<div id="kt_charts_widget_36_chart_1" data-kt-chart-color="primary" class="min-h-auto h-150px mt--50" data-kt-size="150" data-kt-line="25"><canvas height="150" width="150" style="height: 0px;"></canvas></div>
										</div>
										<div class="col-lg-12 col-12">
											<div class="row">
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Paid Invoices
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">22
														<span class="text-success fw-bold ms-2 fs-6"><i class="bi bi-caret-up-fill text-success"></i>10.78%</span>
													</h1>
												</div>
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Unpaid Invoices
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">12 <span class="text-danger fw-bold ms-2 fs-6"><i class="bi bi-caret-down-fill text-danger"></i>1.08%</span>
													</h1>
												</div>
												<div class="col-lg-4 col-4 total-client card-border-start Total-Client pe-0">
													<h6 class="text-color-secondary">
														Not Invoiced
													</h6>
													<h1 class="d-flex align-items-center fw-bolder">12
													</h1>
												</div>
											</div>
											<div class="row mt-5">
												<div class="col-lg-6 col-6 ps-0">
													<div class="card card-bg amount p-3">
														<h5 class="text-muted text-color-secondary">Amount
															Received</h5>
														<h3 class="text-color"><span class="text-success">₹</span> 23,54,300</h3>
													</div>
												</div>
												<div class="col-lg-6 col-6 pe-0">
													<div class="card card-bg amount p-3">
														<h5 class="text-muted text-color-secondary">Amount
															Due</h5>
														<h3 class="text-color"><span class="text-success">₹</span> 7,54,300</h3>
													</div>
												</div>
											</div>
										</div>

									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 8-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->

					<!--start::Row-->

					<!--end::Row-->
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
	</section>
	<!--end::Content wrapper-->

	<section class="card-bg mt-5 perfect-height">
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid mb-5">
					<!--begin::Row-->
					<div class="row gx-5 gx-xl-10 mb-5">
						<!--begin::Col-->
						<div class="col-md-6 col-12 mb-5 mb-xl-10 pb-5">
							<!--begin::Chart widget 8-->
							<div class="card card-bg shadow-0 border-0 card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header px-0 pt-5">
									<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
										<!--begin::Title-->
										<div class="col-lg-1 col-3">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
													<span class="ms-0">Projects</span>
												</span>
											</h3>
										</div>
										<!--end::Title-->
										<div class="col-lg-8 d-sm-none d-md-block">
											<div class="custom-separator my-auto mx-auto"></div>
										</div>
										<!--begin::Toolbar-->
										<div class="col-lg-2 col-4">
											<select class="form-select select-bg select-rounded form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
												<option></option>
												<option value="Active" selected="" data-select2-id="select2-data-9-9voz">Active</option>
												<option value="Inactive">Inactive</option>
												<option value="Draft">Draft</option>
												<option value="Complete">Complete</option>
												<option value="Pending">Pending</option>
											</select>
										</div>
									</div>
									<!--end::Toolbar-->
									<div class="d-flex flex-wrap px-2">
										<span><i class="bi bi-distribute-vertical"></i></span>
										<p class="text-color-secondary"><span class="fw-bolder text-color ms-2">62</span> <span class="text-color-gray fw-normal">Projects are in the list.</span></p>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
									<!--begin::Tab content-->
									<div class="table-responsive">
										<table class="table table-row-bordered">
											<thead>
												<tr class="fw-bolder fs-5 text-gray-800">
													<th class="text-nowrap">Project Name</th>
													<th>Modality</th>
													<th>Coachees</th>
													<th>Sessions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<h6 class="my-4 fw-normal">In Person</h6>
													</td>
													<td>
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
															</a>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center flex-column mt-3">
															<div class="d-flex justify-content-between mt-auto mb-2">
																<span class="fw-semibold fs-6 text-color">1/10 Complete</span>
																<!-- <span class="fw-bold fs-6">50%</span> -->
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<h6 class="my-4 fw-normal">Video Conference</h6>
													</td>
													<td>
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
															</a>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center flex-column mt-3">
															<div class="d-flex justify-content-between mt-auto mb-2">
																<span class="fw-semibold fs-6 text-color">2/10 Complete</span>
																<!-- <span class="fw-bold fs-6">50%</span> -->
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<h6 class="my-4 fw-normal">Video Conference</h6>
													</td>
													<td>
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
															</a>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center flex-column mt-3">
															<div class="d-flex justify-content-between mt-auto mb-2">
																<span class="fw-semibold fs-6 text-color">4/10 Complete</span>
																<!-- <span class="fw-bold fs-6">50%</span> -->
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<h6 class="my-4 fw-normal">Video Conference</h6>
													</td>
													<td>
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
															</a>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center flex-column mt-3">
															<div class="d-flex justify-content-between mt-auto mb-2">
																<span class="fw-semibold fs-6 text-color">5/10 Complete</span>
																<!-- <span class="fw-bold fs-6">50%</span> -->
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<h6 class="my-4 fw-normal">Video Conference</h6>
													</td>
													<td>
														<div class="symbol-group symbol-hover flex-nowrap">
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
																<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-11.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
																<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-2.jpg">
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
																<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
															</div>
															<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
																<img alt="Pic" src="assets/media/avatars/300-12.jpg">
															</div>
															<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
																<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
															</a>
														</div>
													</td>
													<td>
														<div class="d-flex align-items-center flex-column mt-3">
															<div class="d-flex justify-content-between mt-auto mb-2">
																<span class="fw-semibold fs-6 text-color">9/10 Complete</span>
																<!-- <span class="fw-bold fs-6">50%</span> -->
															</div>
															<div class="h-5px mx-3 w-100 bg-light mb-3">
																<div class="bg-success rounded h-5px" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 8-->
							<ul class="pagination my-5">
								<li class="page-item previous disabled">
									<span class="page-link page-text">Previous</span>
								</li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item "><a href="#" class="page-link">2</a></li>
								<li class="page-item "><a href="#" class="page-link">3</a></li>
								<li class="page-item "><a href="#" class="page-link">4</a></li>
								<li class="page-item "><a href="#" class="page-link">5</a></li>
								<li class="page-item "><a href="#" class="page-link">6</a></li>
								<li class="page-item next">
									<a class="page-link page-text" href="#">Next</a>
								</li>
							</ul>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 col-12 mb-5 mb-xl-10 pb-5">
							<!--begin::Chart widget 8-->
							<div class="card card-bg shadow-0 border-0 card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header px-0 pt-5">
									<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
										<!--begin::Title-->
										<div class="col-lg-1 col-3">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
													<span class="ms-0">Invoices</span>
												</span>
											</h3>
										</div>
										<!--end::Title-->
										<div class="col-lg-8 d-sm-none d-md-block">
											<div class="custom-separator my-auto mx-auto"></div>
										</div>
										<!--begin::Toolbar-->
										<div class="col-lg-2 col-4">
											<select class="form-select select-bg select-rounded form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
												<option></option>
												<option value="Active" selected="" data-select2-id="select2-data-9-9voz">Active</option>
												<option value="Inactive">Inactive</option>
												<option value="Draft">Draft</option>
												<option value="Complete">Complete</option>
												<option value="Pending">Pending</option>
											</select>
										</div>
									</div>
									<!--end::Toolbar-->
									<div class="d-flex flex-wrap px-2">
										<span><i class="bi bi-distribute-vertical"></i></span>
										<p class="text-color-secondary"><span class="fw-bolder text-color ms-2">62</span> <span class="text-color-gray fw-normal">Projects are in the list.</span></p>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
									<!--begin::Tab content-->
									<div class="table-responsive">
										<table class="table table-row-bordered">
											<thead>
												<tr class="fw-bolder fs-5 text-gray-800">
													<th>Invoice</th>
													<th>Amount</th>
													<th>Projects</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h6 class="my-4 fw-normal text-nowrap">6B1E73DA–0017</h6>
													</td>
													<td>
														<h6 class="my-4 fw-normal text-nowrap"> ₹ 118,000</h6>
													</td>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<span class="badge badge-light-primary my-4">Partially Paid</span>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="my-4 fw-normal text-nowrap">6B1E73DA–0017</h6>
													</td>
													<td>
														<h6 class="my-4 fw-normal text-nowrap"> ₹ 118,000</h6>
													</td>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<span class="badge badge-light-dark">No Payment</span>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="my-4 fw-normal text-nowrap">6B1E73DA–0017</h6>
													</td>
													<td>
														<h6 class="my-4 fw-normal text-nowrap"> ₹ 118,000</h6>
													</td>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<span class="badge badge-light-primary my-4">Partially Paid</span>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="my-4 fw-normal text-nowrap">6B1E73DA–0017</h6>
													</td>
													<td>
														<h6 class="my-4 fw-normal text-nowrap"> ₹ 118,000</h6>
													</td>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<span class="badge badge-light-warning my-4">Draft Invoice</span>
													</td>
												</tr>

												<tr>
													<td>
														<h6 class="my-4 fw-normal text-nowrap">6B1E73DA–0017</h6>
													</td>
													<td>
														<h6 class="my-4 fw-normal text-nowrap"> ₹ 118,000</h6>
													</td>
													<td>
														<h6 class="text-color fw-normal text-nowrap">CEO Coaching</h6>
														<p class="text-color-secondary">TASC Batch 48 - Coaching Engagement </p>
													</td>
													<td>
														<span class="badge badge-light-warning my-4">Draft Invoice</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Chart widget 8-->
							<ul class="pagination my-5">
								<li class="page-item previous disabled">
									<span class="page-link page-text">Previous</span>
								</li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item "><a href="#" class="page-link">2</a></li>
								<li class="page-item "><a href="#" class="page-link">3</a></li>
								<li class="page-item "><a href="#" class="page-link">4</a></li>
								<li class="page-item "><a href="#" class="page-link">5</a></li>
								<li class="page-item "><a href="#" class="page-link">6</a></li>
								<li class="page-item next">
									<a class="page-link page-text" href="#">Next</a>
								</li>
							</ul>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
	</section>

	<?php
	include "footer.php"
	?>