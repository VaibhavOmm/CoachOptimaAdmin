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
                <div id="kt_app_content_container" class="app-container container-fluid mb-5">
                    <h1 class="page-heading d-flex text-color fw-bolder fs-2 flex-column justify-content-center my-0">
                        All Videos</h1>
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

                                        <div class="d-flex flex-nowrap">
                                            <a href="#" class="btn btn-padding p-2 px-2 h-100 btn-orange hover-scale text-white">
                                                Add Video <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Tab content-->
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-lg-8">
                            <video loop muted class="w-100" controls>
                                <source src="assets/media/other/video/rabbit.mp4" type="video/mp4">
                            </video>
                            <h5 class="card-title text-color p-2 ps-0 fw-bolder">
                                Coaching-management.mp4
                            </h5>
                            <p class="card-para p-2 ps-0 text-color-secondary fw-normal">
                                <span><i class="bi bi-person-fill"></i></span> Jun 24, 2023
                                <span class="ms-2"><i class="bi bi-cloud-upload-fill"></i></span> Uploaded on Jun 24, 2023
                            </p>
                        </div>
                        <div class="col-lg-4 h-100">
                            <div class="card">
                            <div class="p-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-color fw-bolder my-4">Description</h6>
                                        <button type="button" class="btn-close text-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <p class="text-color-secondary fw-normal">Lorem ipsum dolor sit amet consectetur. Est in aliquet nunc vitae. Arcu sit feugiat sagittis etiam. Non vulputate fermentum velit sit dui. Quisque non dolor lacinia duis convallis dignissim pulvinar. </p>
                                    <h6 class="text-color fw-bold mt-4">Category</h6>
                                    <div class="gap-2">

                                        <span class="badge bg-light fw-normal fs-6 select-rounded px-2 mt-4 p-1">Coaching Management</span>
                                        <span class="badge bg-light fw-normal fs-6 select-rounded px-2 mt-4 p-1">Management</span>
                                        <span class="badge bg-light fw-normal fs-6 select-rounded px-2 mt-4 p-1">Business Management</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php"
    ?>