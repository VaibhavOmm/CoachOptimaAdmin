<?php
include "header.php"
?>
<!--begin::Body-->
<?php
include "sidepanal.php"
?>

<!--begin::Main-->
<div class="app-main card-bg flex-column flex-row-fluid" id="kt_app_main">

    <section class="mt-5">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-fluid my-5">
                    <h1 class="page-heading d-flex text-color fw-bolder fs-2 flex-column justify-content-center my-0">
                        Resources</h1>
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10 mb-5">
                        <!--begin::Col-->
                        <div class="col-md-12 col-12 mb-5 mb-xl-10 ">
                            <!--begin::Chart widget 8-->
                            <div class="card card-bg shadow-0 border-0 card-flush h-xl-100">
                                <!--begin::Body-->
                                <div class="card-body px-4 rounded overflow-hidden p-2">
                                    <!--begin::Tab content-->
                                    <div class="d-flex flex-wrap justify-content-between align-items-center my-5">
                                        <div class="d-flex flex-nowrap w-100 w-sm-50">
                                            <div class="input-group flex-nowrap bg-transparent">
                                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search text-color"></i></span>
                                                <input type="text" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                            <select class="form-select select-bg select-rounded ms-4 w-50 w-100 w-sm-50 form-select-solid" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
                                                <option></option>
                                                <option value="0" selected>Select Category</option>
                                                <option value="1">Video</option>
                                                <option value="2">Audio</option>
                                                <option value="3">Articles</option>
                                                <option value="4">Documents</option>
                                                <option value="5">Forms</option>
                                            </select>
                                        </div>

                                        <div class="d-flex flex-nowrap mtx-sm-5">
                                            <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange border me-4 hover-scale text-white">
                                                Add Category
                                                <!-- <span><i class="bi bi-arrow-down text-color fs-6"></i></span> -->
                                            </a>
                                            <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">
                                                Add Resources <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Tab content-->
                                    <div class="row my-10">
                                        <div class="col-lg-3 col-12 mt-5">
                                            <div class="card hover-elevate-up shadow-sm parent-hover">
                                                <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#video-details">
                                                    <h3 class="card-title">Video</h3>
                                                    <div class="card-toolbar rotate-180">
                                                        <i class="ki-duotone ki-down fs-1"></i>
                                                    </div>
                                                </div>
                                                <div id="video-details" class="collapse show">
                                                    <div class="card-body">
                                                        <img class="img-fluid resource-img w-50 w-100 w-sm-50 wx-sm-100 mx-auto mb-5 d-flex" src="assets/media/other/video.png">
                                                        <h5 class="card-title text-center text-color fw-bolder"> <a href="video-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Video Resources</a> </h5>
                                                        <p class="card-para text-center text-color-secondary fw-normal">Store all your Coaching Video Resources in a single place</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-12 mt-5">
                                            <div class="card hover-elevate-up shadow-sm parent-hover">
                                                <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#audio-details">
                                                    <h3 class="card-title">Audio</h3>
                                                    <div class="card-toolbar rotate-180">
                                                        <i class="ki-duotone ki-down fs-1"></i>
                                                    </div>
                                                </div>
                                                <div id="audio-details" class="collapse show">
                                                    <div class="card-body">
                                                        <img class="img-fluid resource-img w-50 w-100 w-sm-50 wx-sm-100 mx-auto mb-5 d-flex" src="assets/media/other/audio.png">
                                                        <h5 class="card-title text-center text-color fw-bolder"><a href="audio-resources.php" class="text-color text-hover-primary hover-scale text-decoration-none">Audio Resources</a> </h5>
                                                        <p class="card-para text-center text-color-secondary fw-normal">Store all your Coaching Video Resources in a single place</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 mt-5">
                                            <div class="card hover-elevate-up shadow-sm parent-hover">
                                                <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#articles-details">
                                                    <h3 class="card-title">Articles</h3>
                                                    <div class="card-toolbar rotate-180">
                                                        <i class="ki-duotone ki-down fs-1"></i>
                                                    </div>
                                                </div>
                                                <div id="articles-details" class="collapse show">
                                                    <div class="card-body">
                                                        <img class="img-fluid resource-img w-50 w-100 w-sm-50 wx-sm-100 mx-auto mb-5 d-flex" src="assets/media/other/article.png">
                                                        <h5 class="card-title text-center text-color fw-bolder">Articles Resources</h5>
                                                        <p class="card-para text-center text-color-secondary fw-normal">Store all your Coaching Articles & Blogs in a single place</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 mt-5">
                                            <div class="card hover-elevate-up shadow-sm parent-hover">
                                                <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#documents-details">
                                                    <h3 class="card-title">Documents</h3>
                                                    <div class="card-toolbar rotate-180">
                                                        <i class="ki-duotone ki-down fs-1"></i>
                                                    </div>
                                                </div>
                                                <div id="documents-details" class="collapse show">
                                                    <div class="card-body">
                                                        <img class="img-fluid resource-img w-50 w-100 w-sm-50 wx-sm-100 mx-auto mb-5 d-flex" src="assets/media/other/document.png">
                                                        <h5 class="card-title text-center text-color fw-bolder">Documents Resources</h5>
                                                        <p class="card-para text-center text-color-secondary fw-normal">Store all your Coaching Documents in a single place</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-4 col-lg-3 col-xl-3 col-12 mt-5">
                                            <div class="card hover-elevate-up shadow-sm parent-hover">
                                                <div class="card-header collapsible cursor-pointer rotate " data-bs-toggle="collapse" data-bs-target="#forms-details">
                                                    <h3 class="card-title">Forms</h3>
                                                    <div class="card-toolbar rotate-180">
                                                        <i class="ki-duotone ki-down fs-1"></i>
                                                    </div>
                                                </div>
                                                <div id="forms-details" class="collapse show">
                                                    <div class="card-body">
                                                        <img class="img-fluid resource-img w-50 w-100 w-sm-50 wx-sm-100 mx-auto mb-5 d-flex" src="assets/media/other/document.png">
                                                        <h5 class="card-title text-center text-color fw-bolder">Forms Resources</h5>
                                                        <p class="card-para text-center text-color-secondary fw-normal">Collect information from prospects or coachees.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
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