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
                        <h1 class="page-heading d-flex text-color fw-bolder fs-2 flex-column justify-content-center my-0">
                            Coachees</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3 mtx-sm-5">
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">12 Months</a>
                        <!--end::Primary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">6 Months</a>
                        <!--end::Primary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">30 Days</a>
                        <!--end::Primary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm btn-hover-dark-light border fw-semibold btn-theme-dark hover-scale" data-bs-toggle="modal" data-bs-target="#invoice_new_target" disabled>7 Days</a>
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
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-12 col-12 mb-5 mb-xl-10 ">
                            <!--begin::Chart widget 8-->
                            <div class="d-flex flex-wrap">
                                <div class="col-lg-3 col-12 total-client card-border-start px-3 card-border-sm-bottom">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">24 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="active-client rounded-circle d-block me-2"></span>Active
                                    </h6>
                                    <p class="text-color-secondary">A coachee with atleast one active project with atleast one scheduled session.</p>
                                </div>

                                <div class="col-lg-3 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">256 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="inactive-client rounded-circle d-block me-2"></span>Inactive
                                    </h6>
                                    <p class="text-color-secondary">A coachee with no active projects.</p>
                                </div>

                                <div class="col-lg-3 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">6 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                    </h6>
                                    <p class="text-color-secondary">A coachee with an active project with no scheduled or active session.</p>
                                </div>

                                <div class="col-lg-3 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">12 <span class="text-color-secondary fw-semibold ms-1">/326</span></h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="project-complete bg-danger rounded-circle d-block me-2"></span>Pending
                                    </h6>
                                    <p class="text-color-secondary">A coachee with a pending project or a pending session.</p>
                                </div>
                            </div>
                            <!--end::Chart widget 8-->
                        </div>

                        <div>
                            <div class="status-bar rounded mb-6 d-flex flex-row overflow-hidden mb-5">
                                <div class="project-active-status-bar" style="width: 15%;"></div>
                                <div class="project-inactive-status-bar" style="width:55%"></div>
                                <div class="project-draft-status-bar" style="width:18%"></div>
                                <div class="project-nocoach-status-bar  bg-danger" style="width:12%"></div>
                                <!-- <div class="project-complete-status-bar"></div> -->
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
                                                <button class="nav-link client-nav text-color active" id="All-coachees-tab" data-bs-toggle="pill" data-bs-target="#All-coachees" type="button" role="tab" aria-controls="All-coachees" aria-selected="true">All Coachees</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link client-nav text-color" id="active-client-tab" data-bs-toggle="pill" data-bs-target="#active-client" type="button" role="tab" aria-controls="active-client" aria-selected="false">Active </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link client-nav text-color" id="inactive-client-tab" data-bs-toggle="pill" data-bs-target="#inactive-client" type="button" role="tab" aria-controls="inactive-client" aria-selected="false">Inactive</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link client-nav text-color" id="no-coach-tab" data-bs-toggle="pill" data-bs-target="#no-coach" type="button" role="tab" aria-controls="no-coach" aria-selected="false">Invited</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link client-nav text-color" id="draft-tab" data-bs-toggle="pill" data-bs-target="#draft" type="button" role="tab" aria-controls="draft" aria-selected="false">Pending</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body px-4 rounded overflow-hidden p-2">
                                    <!--begin::Tab content-->
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="All-coachees" role="tabpanel" aria-labelledby="All-coachees-tab" tabindex="0">
                                            <div>
                                                <div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
                                                    <div class="d-flex flex-nowrap">
                                                        <div class="input-group flex-nowrap bg-transparent">
                                                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <div class="ms-2 select-rounded select-bg w-100">
                                                            <input class="form-control form-control-solid px-4" placeholder="Pick date rage" id="kt_daterangepicker_1" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-nowrap mtx-sm-5">
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
                                                            Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
                                                        </a>
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Add Coachee<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                                        </a>

                                                        <div class="menu mt-4 menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="z-index: 107; position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(-99px, 281px);" data-popper-placement="bottom-end">

                                                            <div class="menu-item bg-transparent text-color fw-semibold px-3">
                                                                <a href="#" class="menu-link text-color fw-bold px-3"><span><i class="bi bi-plus-lg fs-6 me-2"></i></span> Create Manually</a>
                                                            </div>
                                                            <div class="menu-item bg-transparent text-color fw-semibold px-3">
                                                                <a href="#" class="menu-link text-color fw-bold px-3"><span><i class="bi bi-cloud-upload-fill fs-6 me-2"></i></span> Upload CSV</a>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
                                                    <!--begin::Tab content-->
                                                    <div class="table-responsive">
                                                        <table class="table table-row-bordered">
                                                            <thead>
                                                                <tr class="fw-bolder fs-5 text-gray-800">
                                                                    <th>Status</th>
                                                                    <th>Coachee</th>
                                                                    <th class="text-nowrap">Active Projects</th>
                                                                    <th class="text-nowrap">Client Name</th>
                                                                    <th class="text-nowrap">Last Session</th>
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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="inactive-client rounded-circle bg-danger d-block me-2"></span>Pending
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                    <div class="d-flex flex-nowrap">
                                                        <div class="input-group flex-nowrap bg-transparent">
                                                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <div class="ms-2 select-rounded select-bg w-100">
                                                            <input class="form-control form-control-solid px-4" placeholder="Pick date rage" id="kt_daterangepicker_2" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-nowrap mtx-sm-5">
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
                                                            Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
                                                        </a>
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">Add Coachee<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
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
                                                                    <th>Coachee</th>
                                                                    <th class="text-nowrap">Active Projects</th>
                                                                    <th class="text-nowrap">Client Name</th>
                                                                    <th class="text-nowrap">Last Session</th>
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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                    <div class="d-flex flex-nowrap">
                                                        <div class="input-group flex-nowrap bg-transparent">
                                                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <div class="ms-2 select-rounded select-bg w-100">
                                                            <input class="form-control form-control-solid px-4" placeholder="Pick date rage" id="kt_daterangepicker_3" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-nowrap mtx-sm-5">
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
                                                            Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
                                                        </a>
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">Add Coachee<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
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
                                                                    <th>Coachee</th>
                                                                    <th class="text-nowrap">Active Projects</th>
                                                                    <th class="text-nowrap">Client Name</th>
                                                                    <th class="text-nowrap">Last Session</th>
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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                    <div class="d-flex flex-nowrap">
                                                        <div class="input-group flex-nowrap bg-transparent">
                                                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <div class="ms-2 select-rounded select-bg w-100">
                                                            <input class="form-control form-control-solid px-4" placeholder="Pick date rage" id="kt_daterangepicker_4" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-nowrap mtx-sm-5">
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
                                                            Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
                                                        </a>
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">Add Coachee<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
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
                                                                    <th>Coachee</th>
                                                                    <th class="text-nowrap">Active Projects</th>
                                                                    <th class="text-nowrap">Client Name</th>
                                                                    <th class="text-nowrap">Last Session</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <!-- <h6 class="my-4 fw-normal">In Person</h6> -->
                                                                        <h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
                                                                            <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="coachee-invite rounded-circle d-block me-2"></span>Invited
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                    <div class="d-flex flex-nowrap">
                                                        <div class="input-group flex-nowrap bg-transparent">
                                                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                            <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                        <div class="ms-2 select-rounded select-bg w-100">
                                                            <input class="form-control form-control-solid px-4" placeholder="Pick date rage" id="kt_daterangepicker_5" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-nowrap mtx-sm-5">
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
                                                            Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
                                                        </a>
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">Add Coachee<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
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
                                                                    <th>Coachee</th>
                                                                    <th class="text-nowrap">Active Projects</th>
                                                                    <th class="text-nowrap">Client Name</th>
                                                                    <th class="text-nowrap">Last Session</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <!-- <h6 class="my-4 fw-normal">In Person</h6> -->
                                                                        <h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
                                                                            <span class="inactive-client rounded-circle d-block me-2 bg-danger"></span>Pending
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="inactive-client rounded-circle d-block me-2 bg-danger"></span>Pending
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="inactive-client rounded-circle d-block me-2 bg-danger"></span>Pending
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="inactive-client rounded-circle d-block me-2 bg-danger"></span>Pending
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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
                                                                            <span class="inactive-client rounded-circle d-block me-2 bg-danger"></span>Pending
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5"><a href="coachee-profile.php" class="text-decoration-none text-hover-primary text-color">Robert Fox</a>
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <div class="d-flex flex-column text-nowrap">
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Active:<span class="text-color ms-2">3 / 15</span>
                                                                                    </div>
                                                                                    <div class="text-color-secondary fw-semibold d-flex align-items-center fs-5">Complete:<span class="text-color ms-2">8 / 15</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">30/04/2023</h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="me-0">
                                                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                                <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                            </button>
                                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

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