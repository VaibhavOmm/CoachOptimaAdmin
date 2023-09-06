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
            <div class="p-2 p-lg-8 ">
                <div class="page-header p-0 p-lg-10">
                    <div class="row p-4 rounded">
                        <div class="col-lg-8 col-8">
                            <h4 class="fw-bold text-white mb-5">Project Profile</h4>
                            <div class="d-flex flex-row gap-4 align-items-center">
                                <img src="assets/media/other/IconC.png" width="40" class="img-fluid">
                                <div class="text-white">
                                    <h2 class="text-color fw-semibold mb-0"> <a href="client-profile.php" class=" text-hover-warning text-decoration-none text-white fw-bold">ABC Test Company RV</a></h2>
                                </div>
                            </div>
                            <div class="d-flex flex-row flex-wrap gap-3 mt-2">
                                <div class="d-flex flex-row align-items-center"> <span class="text-white ms-0 fs-2">

                                        Effective Time Management</span>
                                </div>
                                <div class="d-flex flex-row align-items-center"> <span class="text-white ms-0 fs-7">
                                        <span class="text-white me-0 fs-4">
                                            <i class="bi  bi-dot text-white"></i>
                                        </span>
                                        Start Date: 20 Aug 2023</span>
                                </div>
                                <div class="d-flex flex-row align-items-center"> <span class="text-white  ms-2 fs-7"> <span class="text-white me-0 fs-4">
                                            <i class="bi  bi-dot text-white"></i>
                                        </span> End Date: 30 Aug 2023</span>
                                </div>
                                <div class="d-flex flex-row align-items-center"> <span class="text-white  ms-2 fs-7"> <span class="text-white me-0 fs-4">
                                            <i class="bi  bi-dot text-white"></i>
                                        </span> One on One Sessions</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 my-auto">
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-4">
                                <a href="#" class="btn bg-white w-25 wx-sm-100 btn-md p-2 px-4 d-flex flex-wrap justify-content-center align-items-center">
                                    <span class="client-active rounded-circle d-block me-3"></span> Active</a>
                                <a href="#" class="btn w-25 wx-sm-100 btn-md btn-orange p-2 px-4 text-white">
                                    <span class="text-white fs-5"><i class="bi bi-envelope-check-fill text-white fs-5 me-3"></i></span> Email</a>
                                <a class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

                                    <div class="menu-item bg-transparent text-color px-3">
                                        <a href="#" class="menu-link px-3">View Profile</a>
                                    </div>

                                    <div class="menu-item bg-transparent text-color px-3">
                                        <a href="#" class="menu-link px-3">Delete Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="d-flex align-items-center flex-column mt-3 w-100">
                    <div class="d-flex justify-content-between fw-bold fs-6 text-color w-100 mt-auto mb-2">
                        <span>Progress: 20%</span>
                        <!-- <span>72%</span> -->
                    </div>

                    <div class="h-8px mx-3 w-100 bg-success bg-opacity-50 rounded">
                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 20%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
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
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color active" id="Overview-tab" data-bs-toggle="pill" data-bs-target="#Overview" type="button" role="tab" aria-controls="Overview" aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color" id="Coachee-tab" data-bs-toggle="pill" data-bs-target="#Coachee" type="button" role="tab" aria-controls="Coachee" aria-selected="false">Coachee</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color" id="Resources-tab" data-bs-toggle="pill" data-bs-target="#Resources" type="button" role="tab" aria-controls="Resources" aria-selected="false">Resources</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color" id="Admin-chat-tab" data-bs-toggle="pill" data-bs-target="#Admin-chat" type="button" role="tab" aria-controls="Admin-chat" aria-selected="false">Chat</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color" id="Nudges-tab" data-bs-toggle="pill" data-bs-target="#Nudges" type="button" role="tab" aria-controls="Nudges" aria-selected="false">Nudges</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab" tabindex="0">
                                <div>
                                    <div class="row px-0 mt-5">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Title-->
                                                <div class="col-lg-1 col-3">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bolder text-dark d-flex flex-nowrap align-items-center">
                                                            <span class="ms-0">Coach Info</span>
                                                        </span>
                                                    </h3>
                                                </div>
                                                <!--end::Title-->
                                                <div class="col-lg-10 col-5">
                                                    <div class="custom-separator my-auto mx-auto"></div>
                                                </div>
                                                <!--begin::Toolbar-->
                                                <div class="col-lg-1 col-4 text-end">
                                                    <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">
                                                        Add Coach <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card mt-4">
                                                <div class="bg-white px-4 rounded overflow-hidden p-2">
                                                    <!--begin::Tab content-->
                                                    <div class="table-responsive">
                                                        <table class="table table-row-bordered mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="px-0">
                                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-50px me-2">
                                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                </div>
                                                                                <div class="d-flex flex-column">
                                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                                        Fox
                                                                                    </div>
                                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="fw-bold text-color">Avg. Rating</h6>
                                                                            <p class="fw-normal text-color-secondary"><span><i class="bi bi-star-fill"></i></span> 4.52</p>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="fw-bold text-color">Coaching Hours</h6>
                                                                            <p class="fw-normal text-color-secondary">1136 hours</p>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="fw-bold text-color">Coaching Type</h6>
                                                                            <p class="fw-normal text-color-secondary">Corporate / Organizational</p>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-column text-nowrap">
                                                                            <h6 class="fw-bold text-color">Projects</h6>
                                                                            <p class="fw-normal text-color-secondary">32</p>
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="d-flex flex-column text-nowrap">
                                                                            <h6 class="fw-bold text-color">Modalities</h6>
                                                                            <div class="d-flex flex-wrap gap-3">
                                                                                <span class="badge bg-white fs-6 select-rounded px-2 p-1">In Person</span>
                                                                                <span class="badge bg-white fs-6 select-rounded px-2 p-1">Video Conference</span>
                                                                            </div>
                                                                        </div>
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

                                    <div class="row gx-5 gx-xl-10 mb-5">
                                        <!--begin::Col-->
                                        <div class="col-xxl-6 col-12 mb-5 mb-xl-10 pb-0">
                                            <!--begin::Chart widget 8-->
                                            <div class="card card-bg shadow-0 border-0 card-flush h-xl-100">
                                                <!--begin::Header-->
                                                <div class="card-header px-0 pt-5">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                        <!--begin::Title-->
                                                        <div class="col-lg-3 col-3">
                                                            <h3 class="card-title align-items-start flex-column">
                                                                <span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
                                                                    <span class="ms-0">Upcoming Sessions</span>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <!--end::Title-->
                                                        <div class="col-lg-9 col-9">
                                                            <div class="custom-separator my-auto mx-auto"></div>
                                                        </div>
                                                    </div>
                                                    <!--end::Toolbar-->
                                                    <div class="d-flex flex-wrap px-2">
                                                        <span><i class="bi bi-distribute-vertical"></i></span>
                                                        <p class="text-color-secondary"><span class="fw-bolder text-color ms-2">5</span> <span class="text-color-gray fw-normal">Projects are in the list.</span></p>
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
                                                                    <th>Sessions</th>
                                                                    <th>Modality</th>
                                                                    <th class="text-nowrap">Session Date</th>
                                                                    <th>Coachees</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">Effective Time Management </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Video Conference 60 minutes</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">28 Jul 2023 <span class="ms-3"> 11:10 AM</span> </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                            </div>
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">Effective Time Management </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Video Conference 60 minutes</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">28 Jul 2023 <span class="ms-3"> 11:10 AM</span> </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">Effective Time Management </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Video Conference 60 minutes</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">28 Jul 2023 <span class="ms-3"> 11:10 AM</span> </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">Effective Time Management </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Video Conference 60 minutes</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">28 Jul 2023 <span class="ms-3"> 11:10 AM</span> </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">Effective Time Management </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Video Conference 60 minutes</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">28 Jul 2023 <span class="ms-3"> 11:10 AM</span> </h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
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
                                        <div class="col-xxl-6 col-12 mb-5 mb-xl-10 pb-0">
                                            <!--begin::Chart widget 8-->
                                            <div class="card card-bg shadow-0 border-0 card-flush h-xl-100">
                                                <!--begin::Header-->
                                                <div class="card-header px-0 pt-5">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                        <!--begin::Title-->
                                                        <div class="col-lg-3 col-3">
                                                            <h3 class="card-title align-items-start flex-column">
                                                                <span class="card-label fw-bolder text-dark d-flex flex-nowrap align-items-center">
                                                                    <span class="ms-0">Project Manager</span>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <!--end::Title-->
                                                        <div class="col-lg-6 d-sm-none d-md-block">
                                                            <div class="custom-separator my-auto mx-auto"></div>
                                                        </div>
                                                        <!--begin::Toolbar-->
                                                        <div class="col-lg-2 col-4">
                                                            <a href="#" class="btn  p-2 px-2 h-100 btn-orange text-nowrap hover-scale text-white">
                                                                Add Manager <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                                            </a>
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
                                                <div class="card mt-4">
                                                    <div class="bg-white px-4 rounded overflow-hidden p-2">
                                                        <!--begin::Tab content-->
                                                        <div class="table-responsive">
                                                            <table class="table table-row-bordered mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="px-0">
                                                                                <div class="menu-content d-flex align-items-center px-0">
                                                                                    <!--begin::Avatar-->
                                                                                    <div class="symbol symbol-50px me-2">
                                                                                        <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                                    </div>
                                                                                    <div class="d-flex flex-column">
                                                                                        <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                                            Fox
                                                                                        </div>
                                                                                        <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <h6 class="fw-bold text-color my-6">+91 8445565615</h6>
                                                                        </td>

                                                                        <td>
                                                                            <div class="me-0 my-4">
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
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Coachee" role="tabpanel" aria-labelledby="Coachee-tab" tabindex="0">
                                <div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
                                        <div class="d-flex flex-nowrap w-100 w-sm-50 gap-4">
                                            <div class="input-group flex-nowrap bg-transparent">
                                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <div class=" w-100 w-sm-50">
                                                <input class="form-control form-control-solid select-bg select-rounded" placeholder="Pick date rage" id="kt_daterangepicker_1" />
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
                                                <div class="menu-item bg-transparent text-color fw-semibold px-3">
                                                    <a href="#" class="menu-link text-color fw-bold px-3"><span><i class="bi bi-list-task fs-6 me-2"></i></span> Select from list</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
                                        <!--begin::Tab content-->
                                        <div class="table-responsive">
                                            <table class="table table-row-bordered">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Status</th>
                                                        <th>Coachee</th>
                                                        <th class="text-nowrap">Sessions Type</th>
                                                        <th>Sessions Progress</th>
                                                        <th>Last Session</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <!-- <h6 class="my-4 fw-normal">In Person</h6> -->
                                                            <h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
                                                                <span class="project-complete rounded-circle d-block me-2"></span>Completed
                                                            </h6>
                                                        </td>

                                                        <td>
                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px me-2">
                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                        Fox
                                                                    </div>
                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
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

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px me-2">
                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                        Fox
                                                                    </div>
                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
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

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px me-2">
                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                        Fox
                                                                    </div>
                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">One on One</h6>
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

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                                <span class="project-complete rounded-circle d-block me-2"></span>Completed
                                                            </h6>
                                                        </td>

                                                        <td>
                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px me-2">
                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                        Fox
                                                                    </div>
                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
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

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                                <span class="project-complete rounded-circle d-block me-2"></span>Completed
                                                            </h6>
                                                        </td>

                                                        <td>
                                                            <div class="menu-content d-flex align-items-center px-0">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px me-2">
                                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle user-picture">
                                                                </div>
                                                                <div class="d-flex flex-column">
                                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                                        Fox
                                                                    </div>
                                                                    <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">One on One</h6>
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

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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

                            <div class="tab-pane fade" id="Resources" role="tabpanel" aria-labelledby="Resources-tab" tabindex="0">
                                <div class="row gap-0">
                                    <div class="col-lg-12">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Title-->
                                            <div class="">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-dark d-flex flex-nowrap align-items-center">
                                                        <span class="ms-0">Resources</span>
                                                    </span>
                                                </h3>
                                            </div>
                                            <!--end::Title-->
                                            <div class="col-lg-10 col-5">
                                                <div class="custom-separator my-auto mx-auto"></div>
                                            </div>
                                            <!--begin::Toolbar-->
                                            <div class="col-lg-1 col-4 text-end">
                                                <a href="#" class="btn btn-padding p-2 px-1 h-100 btn-orange hover-scale text-white" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Add Resources <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                                </a>

                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">

                                                    <div class="menu-item bg-transparent text-color px-3">
                                                        <a href="#" class="menu-link px-3">Upload Manually</a>
                                                    </div>

                                                    <div class="menu-item bg-transparent text-color px-3">
                                                        <a href="#" class="menu-link px-3">Upload From Site</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-10">
                                            <div class="col">
                                                <div class="card hover-elevate-up shadow-sm parent-hover">
                                                    <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#video-details">
                                                        <h3 class="card-title">Video</h3>
                                                        <div class="card-toolbar rotate-180">
                                                            <i class="ki-duotone ki-down fs-1"></i>
                                                        </div>
                                                    </div>
                                                    <div id="video-details" class="collapse show">
                                                        <div class="card-body p-2">
                                                            <img class="img-fluid resource-img mx-auto mb-5 d-flex" src="assets/media/other/coaching-management.png">
                                                            <span class="position-absolute"><img src="assets/media/other/play-button.png" class="img-fluid play-btn position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal"></span>
                                                            <h5 class="card-title text-color fw-bolder"> <a href="video-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Coaching-management.mp4</a> </h5>
                                                            <p class="card-para text-color-secondary fw-normal"><span><i class="bi bi-person-fill"></i></span> Jun 24, 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="card hover-elevate-up shadow-sm parent-hover">
                                                    <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#video-details">
                                                        <h3 class="card-title">Video</h3>
                                                        <div class="card-toolbar rotate-180">
                                                            <i class="ki-duotone ki-down fs-1"></i>
                                                        </div>
                                                    </div>
                                                    <div id="video-details" class="collapse show">
                                                        <div class="card-body p-2">
                                                            <img class="img-fluid resource-img mx-auto mb-5 d-flex" src="assets/media/other/coaching-management.png">
                                                            <span class="position-absolute"><img src="assets/media/other/play-button.png" class="img-fluid play-btn position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal"></span>
                                                            <h5 class="card-title text-color fw-bolder"> <a href="video-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Coaching-management.mp4</a> </h5>
                                                            <p class="card-para text-color-secondary fw-normal"><span><i class="bi bi-person-fill"></i></span> Jun 24, 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="card hover-elevate-up shadow-sm parent-hover">
                                                    <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#video-details">
                                                        <h3 class="card-title">Video</h3>
                                                        <div class="card-toolbar rotate-180">
                                                            <i class="ki-duotone ki-down fs-1"></i>
                                                        </div>
                                                    </div>
                                                    <div id="video-details" class="collapse show">
                                                        <div class="card-body p-2">
                                                            <img class="img-fluid resource-img mx-auto mb-5 d-flex" src="assets/media/other/coaching-management.png">
                                                            <span class="position-absolute"><img src="assets/media/other/play-button.png" class="img-fluid play-btn position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal"></span>
                                                            <h5 class="card-title text-color fw-bolder"> <a href="video-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Coaching-management.mp4</a> </h5>
                                                            <p class="card-para text-color-secondary fw-normal"><span><i class="bi bi-person-fill"></i></span> Jun 24, 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="card hover-elevate-up shadow-sm parent-hover">
                                                    <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#video-details">
                                                        <h3 class="card-title">Video</h3>
                                                        <div class="card-toolbar rotate-180">
                                                            <i class="ki-duotone ki-down fs-1"></i>
                                                        </div>
                                                    </div>
                                                    <div id="video-details" class="collapse show">
                                                        <div class="card-body p-2">
                                                            <img class="img-fluid resource-img mx-auto mb-5 d-flex" src="assets/media/other/coaching-management.png">
                                                            <span class="position-absolute"><img src="assets/media/other/play-button.png" class="img-fluid play-btn position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal"></span>
                                                            <h5 class="card-title text-color fw-bolder"> <a href="video-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Coaching-management.mp4</a> </h5>
                                                            <p class="card-para text-color-secondary fw-normal"><span><i class="bi bi-person-fill"></i></span> Jun 24, 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="card hover-elevate-up shadow-sm parent-hover">
                                                    <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#video-details">
                                                        <h3 class="card-title">Video</h3>
                                                        <div class="card-toolbar rotate-180">
                                                            <i class="ki-duotone ki-down fs-1"></i>
                                                        </div>
                                                    </div>
                                                    <div id="video-details" class="collapse show">
                                                        <div class="card-body p-2">
                                                            <img class="img-fluid resource-img mx-auto mb-5 d-flex" src="assets/media/other/coaching-management.png">
                                                            <span class="position-absolute"><img src="assets/media/other/play-button.png" class="img-fluid play-btn position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal"></span>
                                                            <h5 class="card-title text-color fw-bolder"> <a href="video-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Coaching-management.mp4</a> </h5>
                                                            <p class="card-para text-color-secondary fw-normal"><span><i class="bi bi-person-fill"></i></span> Jun 24, 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Admin-chat" role="tabpanel" aria-labelledby="Admin-chat-tab" tabindex="0">
                                <div class="d-flex flex-column flex-lg-row">
                                    <!--begin::Sidebar-->
                                    <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                                        <!--begin::Contacts-->
                                        <div class="card card-flush">
                                            <!--begin::Card header-->
                                            <div class="card-header pt-7" id="kt_chat_contacts_header">
                                                <!--begin::Form-->
                                                <form class="w-100 position-relative" autocomplete="off">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid px-13" name="search" value="" placeholder="Search by username or email...">
                                                    <!--end::Input-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-5" id="kt_chat_contacts_body">
                                                <!--begin::List-->
                                                <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_toolbar, #kt_app_toolbar, #kt_footer, #kt_app_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px" style="max-height: 293px;">

                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol  symbol-45px symbol-circle "><span class="symbol-label  bg-light-danger text-danger fs-6 fw-bolder ">M</span></div><!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Lat seen-->
                                                        <div class="d-flex flex-column align-items-end ms-2">
                                                            <span class="text-muted fs-7 mb-1">5 hrs</span>

                                                        </div>
                                                        <!--end::Lat seen-->
                                                    </div>
                                                    <!--end::User-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed d-none"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol  symbol-45px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-1.jpg"></div><!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Lat seen-->
                                                        <div class="d-flex flex-column align-items-end ms-2">
                                                            <span class="text-muted fs-7 mb-1">20 hrs</span>

                                                        </div>
                                                        <!--end::Lat seen-->
                                                    </div>
                                                    <!--end::User-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed d-none"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol  symbol-45px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-5.jpg"></div><!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Lat seen-->
                                                        <div class="d-flex flex-column align-items-end ms-2">
                                                            <span class="text-muted fs-7 mb-1">20 hrs</span>

                                                            <span class="badge badge-sm badge-circle badge-light-success">2</span>
                                                        </div>
                                                        <!--end::Lat seen-->
                                                    </div>
                                                    <!--end::User-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed d-none"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol  symbol-45px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                                                <div class="symbol-badge bg-success start-100 top-100 border-4 h-8px w-8px ms-n2 mt-n2"></div>
                                                            </div><!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Lat seen-->
                                                        <div class="d-flex flex-column align-items-end ms-2">
                                                            <span class="text-muted fs-7 mb-1">3 hrs</span>

                                                        </div>
                                                        <!--end::Lat seen-->
                                                    </div>
                                                    <!--end::User-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed d-none"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol  symbol-45px symbol-circle "><span class="symbol-label  bg-light-warning text-warning fs-6 fw-bolder ">C</span></div><!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Lat seen-->
                                                        <div class="d-flex flex-column align-items-end ms-2">
                                                            <span class="text-muted fs-7 mb-1">1 day</span>

                                                            <span class="badge badge-sm badge-circle badge-light-success">6</span>
                                                        </div>
                                                        <!--end::Lat seen-->
                                                    </div>
                                                    <!--end::User-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed d-none"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::User-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol  symbol-45px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-9.jpg"></div><!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-5">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Details-->

                                                        <!--begin::Lat seen-->
                                                        <div class="d-flex flex-column align-items-end ms-2">
                                                            <span class="text-muted fs-7 mb-1">3 hrs</span>

                                                        </div>
                                                        <!--end::Lat seen-->
                                                    </div>
                                                    <!--end::User-->



                                                </div>
                                                <!--end::List-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Contacts-->
                                    </div>
                                    <!--end::Sidebar-->

                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                                        <!--begin::Messenger-->
                                        <div class="card" id="kt_chat_messenger">
                                            <!--begin::Card header-->
                                            <div class="card-header" id="kt_chat_messenger_header">
                                                <!--begin::Title-->
                                                <div class="card-title">
                                                    <!--begin::User-->
                                                    <div class="d-flex justify-content-center flex-column me-3">
                                                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                                                        <!--begin::Info-->
                                                        <div class="mb-0 lh-1">
                                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                                            <span class="fs-7 fw-semibold text-muted">Active</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Title-->

                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <div class="me-n3">
                                                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-dots-square fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> </button>

                                                        <!--begin::Menu 3-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                            <!--begin::Heading-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                    Contacts
                                                                </div>
                                                            </div>
                                                            <!--end::Heading-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
                                                                    Add Contact
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                                    Invite Contacts

                                                                    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-bs-original-title="Specify a contact email to send an invitation" data-kt-initialized="1">
                                                                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i> </span>
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                                <a href="#" class="menu-link px-3">
                                                                    <span class="menu-title">Groups</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>

                                                                <!--begin::Menu sub-->
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                                                            Create Group
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                                                            Invite Members
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                                                            Settings
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu sub-->
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3 my-1">
                                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                                                    Settings
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu 3-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body" id="kt_chat_messenger_body">
                                                <!--begin::Messages-->
                                                <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 145px;">



                                                    <!--begin::Message(in)-->
                                                    <div class="d-flex justify-content-start mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-start">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                                                </div>
                                                                <!--end::Details-->

                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                                                How likely are you to recommend our company to your friends and family ? </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(in)-->

                                                    <!--begin::Message(out)-->
                                                    <div class="d-flex justify-content-end mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-end">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Details-->
                                                                <div class="me-3">
                                                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/other/admin.png"></div><!--end::Avatar-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                                                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub. </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(out)-->

                                                    <!--begin::Message(in)-->
                                                    <div class="d-flex justify-content-start mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-start">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                                                </div>
                                                                <!--end::Details-->

                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                                                Ok, Understood! </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(in)-->

                                                    <!--begin::Message(out)-->
                                                    <div class="d-flex justify-content-end mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-end">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Details-->
                                                                <div class="me-3">
                                                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/other/admin.png"></div><!--end::Avatar-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                                                You’ll receive notifications for all issues, pull requests! </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(out)-->

                                                    <!--begin::Message(in)-->
                                                    <div class="d-flex justify-content-start mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-start">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                                                </div>
                                                                <!--end::Details-->

                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                                                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com">Keenthemes.com</a> </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(in)-->

                                                    <!--begin::Message(out)-->
                                                    <div class="d-flex justify-content-end mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-end">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Details-->
                                                                <div class="me-3">
                                                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/other/admin.png"></div><!--end::Avatar-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                                                Most purchased Business courses during this sale! </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(out)-->

                                                    <!--begin::Message(in)-->
                                                    <div class="d-flex justify-content-start mb-10 ">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-start">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                                                </div>
                                                                <!--end::Details-->

                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(in)-->

                                                    <!--begin::Message(template for out)-->
                                                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-end">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Details-->
                                                                <div class="me-3">
                                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/other/admin.png"></div><!--end::Avatar-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                                            </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(template for out)-->

                                                    <!--begin::Message(template for in)-->
                                                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-start">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                                </div>
                                                                <!--end::Details-->

                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                                                Right before vacation season we have the next Big Deal for you. </div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Message(template for in)-->
                                                    <div class="d-flex justify-content-end mb-10" data-kt-element="template-out">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-end">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Details-->
                                                                <div class="me-3">
                                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                                                </div>
                                                                <!--end::Details-->

                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/other/admin.png"></div><!--end::Avatar-->
                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"> <br> dfsfsfsfafsdf</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <div class="d-flex justify-content-start mb-10" data-kt-element="template-in">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column align-items-start">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                                                </div>
                                                                <!--end::Details-->

                                                            </div>
                                                            <!--end::User-->

                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Thank you for your awesome support!</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                </div>
                                                <!--end::Messages-->
                                            </div>
                                            <!--end::Card body-->

                                            <!--begin::Card footer-->
                                            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                                <!--begin::Input-->
                                                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">        </textarea>
                                                <!--end::Input-->

                                                <!--begin:Toolbar-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                                                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" aria-label="Coming soon" data-bs-original-title="Coming soon" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-exit-up fs-3"><span class="path1"></span><span class="path2"></span></i> </button>
                                                    </div>
                                                    <!--end::Actions-->

                                                    <!--begin::Send-->
                                                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                                                    <!--end::Send-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Card footer-->
                                        </div>
                                        <!--end::Messenger-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Nudges" role="tabpanel" aria-labelledby="Nudges-tab" tabindex="0">
                                <div>
                                    <div class="row px-0 mt-5">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Title-->
                                                <div class="col-lg-1 col-1">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bolder text-dark d-flex flex-nowrap align-items-center">
                                                            <span class="ms-0">Nudges</span>
                                                        </span>
                                                    </h3>
                                                </div>
                                                <!--end::Title-->
                                                <div class="col-lg-11 col-11">
                                                    <div class="custom-separator my-auto mx-auto"></div>
                                                </div>
                                            </div>
                                            <div class="card mt-4">
                                                <div class="bg-white px-4 rounded overflow-hidden p-2">
                                                    <!--begin::Tab content-->
                                                    <div class="table-responsive">
                                                        <table class="table table-row-bordered">
                                                            <thead>
                                                                <tr class="fw-bolder fs-5 text-gray-800">
                                                                    <th>Status</th>
                                                                    <th>Title</th>
                                                                    <th>Message</th>
                                                                    <th class="text-nowrap">Active From</th>
                                                                    <th class="text-nowrap">Active To</th>
                                                                    <th class="text-nowrap">Trigger Type</th>
                                                                    <th>For</th>
                                                                    <th class="text-nowrap">Delivery Time</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
                                                                            <span class="active-client rounded-circle d-block me-2"></span>Active
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Upcoming Session Review & Prep </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Just a quick note that you have an upcoming session in the next few days.</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">06/08/2023 03:15 am</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">07/08/2023 03:15 am </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">1 Day Pre Session </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">All Sessions</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">9:30 AM</h6>
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
                                                                        <h6 class="text-color-secondary my-4 d-flex flex-nowrap align-items-center">
                                                                            <span class="inactive-client rounded-circle d-block me-2"></span>Inactive
                                                                        </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Upcoming Session Review & Prep </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">Just a quick note that you have an upcoming session in the next few days.</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">06/08/2023 03:15 am</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">07/08/2023 03:15 am </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">1 Day Pre Session </h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">All Sessions</h6>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="text-color my-4 fw-semibold text-nowrap">9:30 AM</h6>
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
                                </div>
                            </div>
                        </div>
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