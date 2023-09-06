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
                            <h4 class="fw-bold text-white mb-5">Coachee Profile</h4>
                            <div class="menu-content d-flex align-items-center px-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-2">
                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" width="60" class="rounded-circle">
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row flex-wrap gap-3">
                                        <h2 class=" text-hover-warning text-decoration-none text-white fw-bold">Robert
                                            Fox
                                        </h2>
                                        <div class="d-flex flex-row align-items-center"> <span class="text-white  ms-2 fs-6"> <span class="text-white me-0 fs-4">
                                                    <i class="bi bi-person-fill text-white"></i>
                                                </span> Executive Coach</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row flex-wrap gap-3">
                                        <div class="d-flex flex-row align-items-center"> <span class="text-white ms-0 fs-6">
                                                <span class="text-white me-0 fs-4">
                                                    <i class="bi bi-envelope-fill text-white"></i>
                                                </span>
                                                @abccompany.com</span> </div>
                                        <div class="d-flex flex-row align-items-center"> <span class="text-white  ms-2 fs-6">
                                                <span class="text-white me-0 fs-4">
                                                    <i class="bi bi-telephone-fill text-white"></i>
                                                </span>
                                                8405626262</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 my-auto">
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-4">
                                <a href="#" class="btn bg-white w-25 wx-sm-100 btn-md p-2 px-4 d-flex flex-wrap justify-content-center align-items-center">
                                    <span class="client-active rounded-circle d-block me-3"></span> Active</a>
                                <a href="#" class="btn w-25 wx-sm-100 btn-md btn-orange rounded-pill p-2 text-white">
                                    <span class="text-white fs-5"><i class="bi bi-envelope-check-fill text-white fs-5 me-3"></i></span>Sent Email</a>
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
                                <button class="nav-link client-nav text-color" id="Projects-tab" data-bs-toggle="pill" data-bs-target="#Projects" type="button" role="tab" aria-controls="Projects" aria-selected="false">Projects</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color px-0" id="Profile-tab" data-bs-toggle="pill" data-bs-target="#Profile" type="button" role="tab" aria-controls="Profile" aria-selected="false">Personal Info</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link client-nav text-color" id="Admin-chat-tab" data-bs-toggle="pill" data-bs-target="#Admin-chat" type="button" role="tab" aria-controls="Admin-chat" aria-selected="false">Admin Chat</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="Overview" role="tabpanel" aria-labelledby="Overview-tab" tabindex="0">
                                <div>
                                    <div class="row px-0 mt-5">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <!--begin::Title-->
                                                <div class="col-lg-1 col-1">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bolder text-dark d-flex flex-nowrap align-items-center">
                                                            <span class="ms-0">Coach Info</span>
                                                        </span>
                                                    </h3>
                                                </div>
                                                <!--end::Title-->
                                                <div class="col-lg-11 col-11">
                                                    <div class="custom-separator my-auto mx-auto"></div>
                                                </div>
                                            </div>
                                            <div class="card mt-5">
                                                <div class="d-flex flex-column flex-md-row flex-wrap justify-content-between align-items-center text-center gap-5 p-5">
                                                    <div class="col">
                                                        <div class="d-flex flex-row gap-4 align-items-center">
                                                            <img src="assets/media/other/IconC.png" width="32" class="img-fluid">
                                                            <h6 class="text-color fw-semibold mb-0">ABC Test Company RV</h6>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="fw-bold text-color">Website</h6>
                                                        <h6 class="fw-normal text-color-secondary">abccompany.com</h6>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="fw-bold text-color">Email</h6>
                                                        <h6 class="fw-normal text-color-secondary">info@abccompany.com</h6>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="fw-bold text-color">Industry</h6>
                                                        <h6 class="fw-normal text-color-secondary">Consultancy</h6>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="fw-bold text-color">Location</h6>
                                                        <h6 class="fw-normal text-color-secondary">Mumbai, Maharashtra, India</h6>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="fw-bold text-color">Added on</h6>
                                                        <h6 class="fw-normal text-color-secondary">12 Jul 2023</h6>
                                                    </div>

                                                    <div class="col">
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
                                                                    <th class="text-nowrap">Session Date</th>
                                                                    <th>Coachees</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">ABC Test Company RV </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 text-color fw-semibold text-nowrap">28 Jul 2023 <span class="ms-2">11:10 AM</span></h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">ABC Test Company RV </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 text-color fw-semibold text-nowrap">28 Jul 2023 <span class="ms-2">11:10 AM</span></h6>
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
                                                                        <p class="text-color-secondary fs-7 text-nowrap">ABC Test Company RV </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 text-color fw-semibold text-nowrap">28 Jul 2023 <span class="ms-2">11:10 AM</span></h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">ABC Test Company RV </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 text-color fw-semibold text-nowrap">28 Jul 2023 <span class="ms-2">11:10 AM</span></h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold">Session #2</h6>
                                                                        <p class="text-color-secondary fs-7 text-nowrap">ABC Test Company RV </p>
                                                                    </td>

                                                                    <td>
                                                                        <h6 class="my-4 text-color fw-semibold text-nowrap">28 Jul 2023 <span class="ms-2">11:10 AM</span></h6>
                                                                    </td>

                                                                    <td>
                                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                                                <img alt="Pic" src="assets/media/avatars/300-11.jpg">
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
                                                        <div class="col-lg-2 col-2">
                                                            <h3 class="card-title align-items-start flex-column">
                                                                <span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
                                                                    <span class="ms-0">Reviews</span>
                                                                </span>
                                                            </h3>
                                                        </div>
                                                        <!--end::Title-->
                                                        <div class="col-lg-10 col-10">
                                                            <div class="custom-separator my-auto mx-auto"></div>
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
                                                                    <th>Feedback</th>
                                                                    <th class="text-nowrap">Projects / Coach</th>
                                                                    <th>Date</th>
                                                                    <th>Ratings</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="fw-normal text-color-secondary my-4"> Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">Effective Time Management</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">20/06/2023</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">4/5</h6>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="fw-normal text-color-secondary my-4"> Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">Effective Time Management</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">20/06/2023</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">4/5</h6>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="fw-normal text-color-secondary my-4"> Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">Effective Time Management</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">20/06/2023</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">4/5</h6>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="fw-normal text-color-secondary my-4"> Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">Effective Time Management</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">20/06/2023</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">4/5</h6>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <h6 class="fw-normal text-color-secondary my-4"> Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">Effective Time Management</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">20/06/2023</h6>
                                                                    </td>
                                                                    <td>
                                                                        <h6 class="text-color fw-semibold my-4">4/5</h6>
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
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="Projects-tab" tabindex="0">
                                <div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-5">
                                        <div class="d-flex flex-nowrap w-100 w-sm-50">
                                            <div class="input-group flex-nowrap bg-transparent">
                                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Select an option" data-hide-search="true" data-select2-id="select2-data-4-7b9m" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                <option></option>
                                                <option value="1" selected="" data-select2-id="select2-data-6-uixv">Select Sessions Type</option>
                                                <option value="2">Group</option>
                                                <option value="3">One on One</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-5-f2d0" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-y11m-container" aria-controls="select2-y11m-container"><span class="select2-selection__rendered" id="select2-y11m-container" role="textbox" aria-readonly="true" title="Select Sessions Type">Select Sessions Type</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>

                                        <div class="d-flex flex-nowrap mtx-sm-5">
                                            <a href="#" class="btn btn-padding p-2 px-2 h-100 bg-white border me-4 hover-scale text-color">
                                                Export <span><i class="bi bi-arrow-down text-color fs-6"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body bg-white  px-4 rounded overflow-hidden p-2">
                                        <!--begin::Tab content-->
                                        <div class="table-responsive">
                                            <table class="table table-row-bordered">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Status</th>
                                                        <th>Project Name</th>
                                                        <th class="text-nowrap">Sessions Type</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Coachees</th>
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
                                                            <div class="d-flex flex-row gap-4 align-items-center">

                                                                <div class="text-nowrap">
                                                                    <h6 class="text-color fw-semibold mb-0 my-4 me-2">Effective Time Management <span class="w-16px h-16px bg-danger rounded-circle p-1 px-2"><i class="bi bi-flag-fill fs-6 text-white"></i></span></h6>

                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                            <div class="d-flex flex-row gap-4 align-items-center">

                                                                <div class="text-nowrap">
                                                                    <h6 class="text-color fw-semibold mb-0 my-4 me-2">Effective Time Management <span class="w-16px h-16px bg-danger rounded-circle p-1 px-2"><i class="bi bi-flag-fill fs-6 text-white"></i></span></h6>

                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                            <div class="d-flex flex-row gap-4 align-items-center">

                                                                <div class="text-nowrap">
                                                                    <h6 class="text-color fw-semibold mb-0 my-4 me-2">Effective Time Management <span class="w-16px h-16px bg-danger rounded-circle p-1 px-2"><i class="bi bi-flag-fill fs-6 text-white"></i></span></h6>

                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">One on One</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                            <div class="d-flex flex-row gap-4 align-items-center">

                                                                <div class="text-nowrap">
                                                                    <h6 class="text-color fw-semibold mb-0 my-4 me-2">Effective Time Management <span class="w-16px h-16px bg-danger rounded-circle p-1 px-2"><i class="bi bi-flag-fill fs-6 text-white"></i></span></h6>

                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">Group</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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
                                                            <div class="d-flex flex-row gap-4 align-items-center">

                                                                <div class="text-nowrap">
                                                                    <h6 class="text-color fw-semibold mb-0 my-4 me-2">Effective Time Management <span class="w-16px h-16px bg-danger rounded-circle p-1 px-2"><i class="bi bi-flag-fill fs-6 text-white"></i></span></h6>

                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">One on One</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">20/06/2023</h6>
                                                        </td>

                                                        <td>
                                                            <h6 class="my-4 fw-semibold text-color-secondary">30/09/2023</h6>
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

                            <div class="tab-pane fade" id="Profile" role="tabpanel" aria-labelledby="Profile-tab" tabindex="0">
                                <div class="row gap-0">
                                    <div class="col-lg-12">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Title-->
                                            <div class="col-lg-1 col-3">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-dark d-flex flex-nowrap align-items-center">
                                                        <span class="ms-0">Personal Info</span>
                                                    </span>
                                                </h3>
                                            </div>
                                            <!--end::Title-->
                                            <div class="col-lg-11 col-9">
                                                <div class="custom-separator my-auto mx-auto"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="menu-content d-flex justify-content-center justify-content-md-start align-items-center px-0 mt-5">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-2">
                                                    <img alt="Logo" src="assets/media/avatars/300-3.jpg" class="rounded-circle coachee-profile">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div class="text-color fw-bold d-flex align-items-center fs-5">Robert
                                                        Fox
                                                    </div>
                                                    <div class="d-flex flex-wrap">
                                                        <a href="#" class="text-color-secondary fw-semibold fs-7">sid@google.com</a>
                                                        <a href="#" class="text-color-secondary fw-semibold ms-3 fs-7">8405626262</a>
                                                    </div>
                                                    <div class="d-flex flex-wrap">
                                                        <a href="#" class="text-color-secondary fw-semibold fs-7">Mumbai, Maharashtra, India</a>
                                                        <a href="#" class="text-color-secondary fw-semibold ms-3 fs-7">Female</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <form>
                                                <div class="row mt-5">
                                                    <div class="col-md-6 col-12">
                                                        <label for="exampleFormControlInput1" class="required form-label">First name</label>
                                                        <input type="text" class="form-control select-bg select-rounded form-control-solid" placeholder="Robert" />
                                                    </div>
                                                    <div class="col-md-6 col-12 mtx-sm-5">
                                                        <label for="exampleFormControlInput1" class="required form-label">Last name</label>
                                                        <input type="text" class="form-control select-bg select-rounded form-control-solid" placeholder="Fox" />
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-6 col-12">
                                                        <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                                        <input type="email" class="form-control select-bg select-rounded form-control-solid" placeholder="sid@google.com" />
                                                    </div>
                                                    <div class="col-md-6 col-12 mtx-sm-5">
                                                        <label for="exampleFormControlInput1" class="required form-label">Phone</label>
                                                        <input type="number" class="form-control select-bg select-rounded form-control-solid" placeholder="8405626262" disabled/>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-6 col-12">
                                                        <label for="exampleFormControlInput1" class="required form-label">Select Country</label>
                                                        <select class="form-control select-bg select-rounded form-control-solid" aria-label="Select example">
                                                            <option value="1">India</option>
                                                            <option value="2">America</option>
                                                            <option value="3">Europe</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-12 mtx-sm-5">
                                                        <label for="exampleFormControlInput1" class="required form-label">State</label>
                                                        <select class="form-control select-bg select-rounded form-control-solid" aria-label="Select example">
                                                            <option value="1">Uttar Pradesh</option>
                                                            <option value="2">Uttrakhand</option>
                                                            <option value="3">Rajasthan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">                                                   
                                                    <div class="col-md-6 col-12">
                                                        <label for="exampleFormControlInput1" class="required form-label">City</label>
                                                        <select class="form-control select-bg select-rounded form-control-solid" aria-label="Select example">
                                                            <option value="1">Lucknow</option>
                                                            <option value="2">Kanpur</option>
                                                            <option value="3">Varanasi</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-12 mtx-sm-5">
                                                        <label for="exampleFormControlInput1" class="required form-label">Gander</label>
                                                        <select class="form-control select-bg select-rounded form-control-solid" aria-label="Select example">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                <div class="col-md-6 col-12">
                                                        <label for="exampleFormControlInput1" class="required form-label">LinkedIn</label>
                                                        <input type="text" class="form-control select-bg select-rounded form-control-solid" placeholder="https://linkedin.com/in/yourprofile" />
                                                    </div>
                                                    <div class="col-md-6 col-12 mtx-sm-5">
                                                        <label for="exampleFormControlInput1" class="required form-label">Facebook</label>
                                                        <select class="form-control select-bg select-rounded form-control-solid" aria-label="Select example">
                                                            <option value="1">https://facebook.com/yourprofile</option>
                                                            <option value="2">https://instagram.com/yourprofile</option>
                                                            <option value="3">https://twitter.com/yourprofile</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-12 text-center text-md-end">
                                                <button type="submit" class="btn btn-orange hover-scale p-2 text-white mt-10 ms-auto mx-lg-auto px-4">Submit</button>
                                                </div>
                                            </form>
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