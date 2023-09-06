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
                    All Audio Files</h1>
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
                                                Add Audio <span><i class="bi bi-plus-lg text-white fs-6"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Tab content-->
                                    <div class="row my-10">
                                        <h3 class="text-color my-0">Audio</h3>

                                        <div class="col-lg-3">
                                            <div class="card">
                                                
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

    <?php
    include "footer.php"
    ?>