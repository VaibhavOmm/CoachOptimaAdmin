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
				<div id="kt_app_toolbar_container" class="app-container flex-wrap container-fluid d-flex flex-stack">
					<!--begin::Page title-->
					<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
						<!--begin::Title-->
						<h1 class="page-heading d-flex text-color fw-bolder fs-1 flex-column justify-content-center my-0">
							Clients List</h1>
						<!--end::Title-->
					</div>
					<!--end::Page title-->
					<!--begin::Actions-->
					<div class="d-flex align-items-center gap-2 gap-lg-3  mtx-sm-5">
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale">12 Months</a>
						<!--end::Primary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale">6 Months</a>
						<!--end::Primary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale">30 Days</a>
						<!--end::Primary button-->
						<!--begin::Primary button-->
						<a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale">7 Days</a>
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
						<div class="col-md-12 col-12 mb-5 mb-xl-10 ">
							<!--begin::Chart widget 8-->
							<div class="d-flex flex-wrap">
								<div class="col-lg-3 ps-3 col-12 total-client card-border-start Total-Client pe-0">
									<h3 class="d-flex align-items-center fw-bolder text-color">24 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
									<h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
										<span class="active-client rounded-circle d-block me-2"></span>Active
									</h6>
									<p class="text-color-secondary">A client with atleast one active project.</p>
								</div>
								<div class="col-lg-3 ps-3 col-12 total-client card-border-start Total-Client pe-0 mt-2">
									<h3 class="d-flex align-items-center fw-bolder text-color">256 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
									<h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
										<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
									</h6>
									<p class="text-color-secondary">A client with zero active project.</p>
								</div>
								<div class="col-lg-3 ps-3 col-12 total-client card-border-start Total-Client pe-0 mt-2">
									<h3 class="d-flex align-items-center fw-bolder text-color">6 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
									<h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
										<span class="no-coach rounded-circle d-block me-2"></span>No Coach
									</h6>
									<p class="text-color-secondary">A client with atleast one active project with no coach.</p>
								</div>
								<div class="col-lg-3 ps-3 col-12 total-client card-border-start Total-Client pe-0 mt-2">
									<h3 class="d-flex align-items-center fw-bolder text-color">12 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
									<h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
										<span class="draft rounded-circle d-block me-2"></span>Draft
									</h6>
									<p class="text-color-secondary">A client with atleast a project with 0 active sessions.</p>
								</div>
							</div>
							<!--end::Chart widget 8-->
						</div>

						<div>
							<div class="col-lg-3 col-12">
								<select class="form-select select-rounded form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
									<option></option>
									<option value="1">Active - Inactive</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
									<option value="5">Option 5</option>
								</select>

							</div>
							<div id="kt_charts_widget_36_client" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
							<div class="status-bar rounded mb-6 d-flex flex-row overflow-hidden">
								<div class="active-status-bar"></div>
								<div class="inactive-status-bar"></div>
								<div class="nocoach-status-bar"></div>
								<div class="draft-status-bar"></div>
							</div>
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
						<div class="col-md-12 col-12 mb-5 mb-xl-10 ">
							<!--begin::Chart widget 8-->
							<div class="card card-bg shadow-0 border-0 card-flush h-xl-100">
								<!--begin::Header-->
								<div class="card-header px-0 pt-5">
									<div class="d-flex flex-wrap align-items-center justify-content-between w-100">
										<!--begin::Title-->
										<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link client-nav text-color active" id="All-clients-tab" data-bs-toggle="pill" data-bs-target="#All-clients" type="button" role="tab" aria-controls="All-clients" aria-selected="true">All Clients</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link client-nav text-color" id="active-client-tab" data-bs-toggle="pill" data-bs-target="#active-client" type="button" role="tab" aria-controls="active-client" aria-selected="false">Active </button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link client-nav text-color" id="inactive-client-tab" data-bs-toggle="pill" data-bs-target="#inactive-client" type="button" role="tab" aria-controls="inactive-client" aria-selected="false">Inactive</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link client-nav text-color" id="no-coach-tab" data-bs-toggle="pill" data-bs-target="#no-coach" type="button" role="tab" aria-controls="no-coach" aria-selected="false">No coach</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link client-nav text-color" id="draft-tab" data-bs-toggle="pill" data-bs-target="#draft" type="button" role="tab" aria-controls="draft" aria-selected="false">Draft</button>
											</li>
										</ul>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-4 rounded overflow-hidden p-2">
									<!--begin::Tab content-->
									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="All-clients" role="tabpanel" aria-labelledby="All-clients-tab" tabindex="0">
											<div>
												<div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
													<div class="d-flex flex-nowrap w-100 w-sm-50">
														<div class="input-group flex-nowrap bg-transparent">
															<span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
															<input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
														</div>
														<select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
															<option></option>
															<option value="1" selected>Select Client Type</option>
															<option value="2">Organisation</option>
															<option value="3">Individual</option>
														</select>
													</div>

													<div class="d-flex flex-nowrap mtx-sm-5">
														<a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
															Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
														</a>
														<a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white" data-bs-toggle="modal" data-bs-target="#add_client">
															Add Client <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
														</a>
													</div>
												</div>
												<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
													<!--begin::Tab content-->
													<div class="table-responsive">
														<table class="table table-row-bordered">
															<thead>
																<tr class="fw-bolder fs-5 text-gray-800">
																	<th>Status</th>
																	<th>Client Name</th>
																	<th>Project Manager</th>
																	<th class="text-nowrap">Active Projects</th>
																	<th class="text-nowrap">Complete Projects</th>
																</tr>
															</thead>
															<tbody>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconC.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0"> <a href="client-profile.php" class=" text-hover-primary text-color fw-bold">ABC Test Company RV</a></h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconC.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>  

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">10</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center text-nowrap">
																			<span class="no-coach rounded-circle d-block me-2"></span>No Coach
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="draft rounded-circle d-block me-2"></span>Draft
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
													<!--end::Tab content-->
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="active-client" role="tabpanel" aria-labelledby="active-client-tab" tabindex="0">
											<div>
												<div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
													<div class="d-flex flex-nowrap w-100 w-sm-50">
														<div class="input-group flex-nowrap bg-transparent">
															<span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
															<input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
														</div>
														<select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
															<option></option>
															<option value="1" selected>Select Client Type</option>
															<option value="2">Organisation</option>
															<option value="3">Individual</option>
														</select>
													</div>

													<div class="d-flex flex-nowrap mtx-sm-5">
														<a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
															Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
														</a>
														<a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white" data-bs-toggle="modal" data-bs-target="#add_client">
															Add Client <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
														</a>
													</div>
												</div>
												<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
													<!--begin::Tab content-->
													<div class="table-responsive">
														<table class="table table-row-bordered">
															<thead>
																<tr class="fw-bolder fs-5 text-gray-800">
																	<th>Status</th>
																	<th>Client Name</th>
																	<th>Project Manager</th>
																	<th class="text-nowrap">Active Projects</th>
																	<th class="text-nowrap">Complete Projects</th>
																</tr>
															</thead>
															<tbody>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconC.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="active-client rounded-circle d-block me-2"></span>Active
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
													<!--end::Tab content-->
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="inactive-client" role="tabpanel" aria-labelledby="inactive-client-tab" tabindex="0">
											<div>
												<div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
													<div class="d-flex flex-nowrap w-100 w-sm-50">
														<div class="input-group flex-nowrap bg-transparent">
															<span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
															<input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
														</div>
														<select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
															<option></option>
															<option value="1" selected>Select Sessions Type</option>
															<option value="2">Group</option>
															<option value="3">One on One</option>
														</select>
													</div>

													<div class="d-flex flex-nowrap mtx-sm-5">
														<a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
															Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
														</a>
														<a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white" data-bs-toggle="modal" data-bs-target="#add_client">
															Add Client <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
														</a>
													</div>
												</div>
												<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
													<!--begin::Tab content-->
													<div class="table-responsive">
														<table class="table table-row-bordered">
															<thead>
																<tr class="fw-bolder fs-5 text-gray-800">
																	<th class="text-nowrap">Status</th>
																	<th class="text-nowrap">Project Name</th>
																	<th class="text-nowrap">Sessions Type</th>
																	<th class="text-nowrap">Coach </th>
																	<th class="text-nowrap">Start Date</th>
																	<th class="text-nowrap">End Date</th>
																	<th class="text-nowrap">Coachees</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">

																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Effective Time Management</h6>
																				<p class="text-color-secondary fw-semibold mb-0">ABC Test Company RV</p>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="fw-semibold text-color-secondary d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">-</h6>
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
																				<span class="symbol-label bg-light text-dark-300 fs-8 fw-bold">+5</span>
																			</a>
																		</div>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">

																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Effective Time Management</h6>
																				<p class="text-color-secondary fw-semibold mb-0">ABC Test Company RV</p>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="fw-semibold text-color-secondary d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">-</h6>
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
																				<span class="symbol-label bg-light text-dark-300 fs-8 fw-bold">+5</span>
																			</a>
																		</div>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">

																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Effective Time Management</h6>
																				<p class="text-color-secondary fw-semibold mb-0">ABC Test Company RV</p>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">One on One</h6>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="fw-semibold text-color-secondary d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">-</h6>
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
																				<span class="symbol-label bg-light text-dark-300 fs-8 fw-bold">+5</span>
																			</a>
																		</div>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">

																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Effective Time Management</h6>
																				<p class="text-color-secondary fw-semibold mb-0">ABC Test Company RV</p>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="fw-semibold text-color-secondary d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">-</h6>
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
																				<span class="symbol-label bg-light text-dark-300 fs-8 fw-bold">+5</span>
																			</a>
																		</div>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">

																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Effective Time Management</h6>
																				<p class="text-color-secondary fw-semibold mb-0">ABC Test Company RV</p>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">One on One</h6>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="fw-semibold text-color-secondary d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">-</h6>
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
																				<span class="symbol-label bg-light text-dark-300 fs-8 fw-bold">+5</span>
																			</a>
																		</div>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="inactive-client rounded-circle d-block me-2"></span>Inactive
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">

																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Effective Time Management</h6>
																				<p class="text-color-secondary fw-semibold mb-0">ABC Test Company RV</p>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="fw-semibold text-color-secondary d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">-</h6>
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
																				<span class="symbol-label bg-light text-dark-300 fs-8 fw-bold">+5</span>
																			</a>
																		</div>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Tab content-->
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="no-coach" role="tabpanel" aria-labelledby="no-coach-tab" tabindex="0">
											<div>
												<div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
													<div class="d-flex flex-nowrap w-100 w-sm-50">
														<div class="input-group flex-nowrap bg-transparent">
															<span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
															<input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
														</div>
														<select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
															<option></option>
															<option value="1" selected>Select Client Type</option>
															<option value="2">Organisation</option>
															<option value="3">Individual</option>
														</select>
													</div>

													<div class="d-flex flex-nowrap mtx-sm-5">
														<a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
															Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
														</a>
														<a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white" data-bs-toggle="modal" data-bs-target="#add_client">
															Add Client <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
														</a>
													</div>
												</div>
												<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
													<!--begin::Tab content-->
													<div class="table-responsive">
														<table class="table table-row-bordered">
															<thead>
																<tr class="fw-bolder fs-5 text-gray-800">
																	<th>Status</th>
																	<th>Client Name</th>
																	<th>Project Manager</th>
																	<th class="text-nowrap">Active Projects</th>
																	<th class="text-nowrap">Complete Projects</th>
																</tr>
															</thead>
															<tbody>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center text-nowrap">
																			<span class="no-coach rounded-circle d-block me-2"></span>No Coach
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconC.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center text-nowrap">
																			<span class="no-coach rounded-circle d-block me-2"></span>No Coach
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center text-nowrap">
																			<span class="no-coach rounded-circle d-block me-2"></span>No Coach
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center text-nowrap">
																			<span class="no-coach rounded-circle d-block me-2"></span>No Coach
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center text-nowrap">
																			<span class="no-coach rounded-circle d-block me-2"></span>No Coach
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
													<!--end::Tab content-->
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab" tabindex="0">
											<div>
												<div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
													<div class="d-flex flex-nowrap w-100 w-sm-50">
														<div class="input-group flex-nowrap bg-transparent">
															<span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
															<input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
														</div>
														<select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
															<option></option>
															<option value="1" selected>Select Client Type</option>
															<option value="2">Organisation</option>
															<option value="3">Individual</option>
														</select>
													</div>

													<div class="d-flex flex-nowrap mtx-sm-5">
														<a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
															Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
														</a>
														<a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white" data-bs-toggle="modal" data-bs-target="#add_client">
															Add Client <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
														</a>
													</div>
												</div>
												<div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
													<!--begin::Tab content-->
													<div class="table-responsive">
														<table class="table table-row-bordered">
															<thead>
																<tr class="fw-bolder fs-5 text-gray-800">
																	<th>Status</th>
																	<th>Client Name</th>
																	<th>Project Manager</th>
																	<th class="text-nowrap">Active Projects</th>
																	<th class="text-nowrap">Complete Projects</th>
																</tr>
															</thead>
															<tbody>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="draft rounded-circle d-block me-2"></span>Draft
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconC.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="draft rounded-circle d-block me-2"></span>Draft
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="draft rounded-circle d-block me-2"></span>Draft
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="draft rounded-circle d-block me-2"></span>Draft
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>
																		<!-- <h6 class="my-4 fw-normal">In Person</h6> -->
																		<h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
																			<span class="draft rounded-circle d-block me-2"></span>Draft
																		</h6>
																	</td>

																	<td>
																		<div class="d-flex flex-row gap-4 align-items-center w-24rem">
																			<img src="assets/media/other/IconI.png" width="32" class="img-fluid">
																			<div class="">
																				<h6 class="text-color fw-semibold mb-0">Binod Smith</h6>
																				<div class="d-flex flex-row flex-nowrap gap-3">
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary ms-2 fs-6">Mumbai</span> </div>
																					<div class="d-flex flex-row align-items-center"><span class="client-dot rounded-pill"></span> <span class="text-color-secondary  ms-2 fs-6">Added: 24-Jul-2023</span> </div>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<div class="px-0">
																			<div class="menu-content d-flex align-items-center px-0">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-50px me-2">
																					<img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
																				</div>
																				<div class="d-flex flex-column">
																					<div class="text-color fw-bold d-flex align-items-center fs-5"><a href="project-manager.php" class="text-color text-hover-primary  text-decoration-none">Robert Fox</a>
																					</div>
																					<a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
																				</div>
																			</div>
																		</div>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">1</h6>
																	</td>

																	<td>
																		<h6 class="my-4 fw-semibold text-color-secondary">0</h6>
																	</td>

																	<td>
																		<div class="me-0">
																			<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																				<i class="ki-solid ki-dots-horizontal fs-2x"></i>
																			</button>
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">View Profile</a>
																				</div>

																				<div class="menu-item bg-transparent text-color px-3">
																					<a href="#" class="menu-link px-3">Delete Profile</a>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
													<!--end::Tab content-->
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
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
	</section>

	<?php
	include "footer.php"
	?>