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
                            Invoices & Payments</h1>
                        <!--end::Title-->
                    </div>
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

                        <div class="col-md-6 col-12 mb-5 mb-xl-10 ">
                            <!--begin::Chart widget 8-->
                            <div class="d-flex flex-wrap mb-10">
                                <div class="col-lg-4 col-12 total-client card-border-start px-3 card-border-sm-bottom">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">24</h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="partially-paid rounded-circle d-block me-2"></span>Partially Paid
                                    </h6>
                                    <p class="text-color-secondary">A project Invoice that is partially paid.</p>
                                </div>

                                <div class="col-lg-4 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">256</h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="fully-paid rounded-circle d-block me-2"></span>Fully Paid
                                    </h6>
                                    <p class="text-color-secondary">A project Invoice that is fully paid.</p>
                                </div>

                                <div class="col-lg-4 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">6</h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="unpaid rounded-circle d-block me-2"></span>Unpaid
                                    </h6>
                                    <p class="text-color-secondary">A project Invoice that is not paid so far.</p>
                                </div>
                                <!--end::Chart widget 8-->
                            </div>
                            <div class="status-bar rounded mb-6 d-flex flex-row overflow-hidden mb-5">
                                <div class="partially-paid-status-bar" style="width: 15%;"></div>
                                <div class="fully-paid-status-bar" style="width:65%"></div>
                                <div class="unpaid-status-bar" style="width:20%"></div>
                                <!-- <div class="project-complete-status-bar"></div> -->
                            </div>
                        </div>

                        <div class="col-md-6 col-12 mb-5 mb-xl-10 ">
                            <!--begin::Chart widget 8-->
                            <div class="d-flex flex-wrap mb-4">
                                <div class="col-lg-4 col-12 total-client card-border-start px-3 card-border-sm-bottom">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">36</h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="no-invoice rounded-circle d-block me-2"></span>No Invoice
                                    </h6>
                                    <p class="text-color-secondary">A project for which no invoice is generated so far.</p>
                                </div>

                                <div class="col-lg-4 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">62</h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="draft-invoice rounded-circle d-block me-2"></span>Draft Invoice
                                    </h6>
                                    <p class="text-color-secondary">A project invoice which generated but not sent.</p>
                                </div>

                                <div class="col-lg-4 col-12 total-client card-border-start px-3 card-border-sm-bottom mtx-sm-5">
                                    <h3 class="d-flex align-items-center fw-bolder text-color">6</h3>
                                    <h6 class="text-color d-flex flex-nowrap align-items-center fw-bold">
                                        <span class="invoice-sent rounded-circle d-block me-2"></span>Invoice Sent
                                    </h6>
                                    <p class="text-color-secondary">A project for which an invoice was sent.</p>
                                </div>
                                <!--end::Chart widget 8-->
                            </div>
                            <div class="status-bar rounded mb-6 d-flex flex-row overflow-hidden mb-5">
                                <div class="no-invoice-invoice-bar" style="width: 15%;"></div>
                                <div class="draft-invoice-status-bar" style="width:65%"></div>
                                <div class="invoice-sent-status-bar" style="width:20%"></div>
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
                                                <button class="nav-link client-nav text-color active" id="Invoices-tab" data-bs-toggle="pill" data-bs-target="#Invoices" type="button" role="tab" aria-controls="Invoices" aria-selected="true">Invoices</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link client-nav text-color" id="Payments-tab" data-bs-toggle="pill" data-bs-target="#Payments" type="button" role="tab" aria-controls="Payments" aria-selected="false">Payments</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body px-4 rounded overflow-hidden p-2">
                                    <!--begin::Tab content-->
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="Invoices" role="tabpanel" aria-labelledby="Invoices-tab" tabindex="0">
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
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">Add Invoice<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
                                                    <!--begin::Tab content-->
                                                    <div class="table-responsive">
                                                        <table class="table table-row-bordered">
                                                            <thead>
                                                                <tr class="fw-bolder fs-5 text-gray-800">
                                                                    <th  class="text-nowrap">Invoice Number</th>
                                                                    <th>Client</th>
                                                                    <th>Project</th>
                                                                    <th>Status</th>
                                                                    <th class="text-nowrap">Due Amount</th>
                                                                    <th>Due Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-warning fw-semibold">
                                                                            Draft Invoice
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-warning fw-semibold">
                                                                            Draft Invoice
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-warning fw-semibold">
                                                                            Draft Invoice
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-primary fw-semibold">
                                                                            Invoice Sent
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-primary fw-semibold">
                                                                            Invoice Sent
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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

                                        <div class="tab-pane fade" id="Payments" role="tabpanel" aria-labelledby="Payments-tab" tabindex="0">
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
                                                        <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">Add Invoice<span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
                                                    <!--begin::Tab content-->
                                                    <div class="table-responsive">
                                                        <table class="table table-row-bordered">
                                                            <thead>
                                                                <tr class="fw-bolder fs-5 text-gray-800">
                                                                    <th  class="text-nowrap">Invoice Number</th>
                                                                    <th>Client</th>
                                                                    <th>Project</th>
                                                                    <th>Status</th>
                                                                    <th class="text-nowrap">Due Amount</th>
                                                                    <th>Due Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-secondary fw-semibold text-color">
                                                                            No Payment
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-secondary fw-semibold text-color">
                                                                            No Payment
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-secondary fw-semibold text-color">
                                                                            No Payment
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-success fw-semibold">
                                                                            Fully Paid
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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
                                                                        <h6 class="my-4 fw-semibold text-nowrap text-color-secondary">
                                                                            6B1E73DA–0017
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-row w-15rem gap-4 text-nowrap align-items-center" style="
    width: 15rem;
">
                                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            Test Coaching Project
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 badge badge-light-success fw-semibold">
                                                                            Fully Paid
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary text-nowrap">
                                                                            ₹ 10,000
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 fw-semibold text-color-secondary">
                                                                            30/04/2023
                                                                        </h6>
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