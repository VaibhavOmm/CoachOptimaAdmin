<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>

	<title>Coache Optima</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="assets/media/logos/Favicon.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,1,-50..200" /> <!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="false" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default  side-bg-color" data-kt-app-sidebar-minimize="on">
	<!--begin::Theme mode setup on page load-->
	<!-- <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script> -->
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<script src="assets/js/loader.js"></script>

	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<div id="kt_app_header" class="app-header border-bottom bg-white header-rounded py-5" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
				<!--begin::Header container-->
				<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
					<!--begin::Sidebar mobile toggle-->
					<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
						<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
							<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
					</div>
					<!--end::Sidebar mobile toggle-->
				
					<!--begin::Header wrapper-->
					<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
						<!--begin::Menu wrapper-->
						<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
							<!--begin::Menu-->
							<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<span class="menu-item user-name fs-3 fw-bold text-color" id="welcome">👋 Welcome, Santosh!</span>
								<span class="menu-item user-name fs-3 fw-bold text-color" id="back" style="display: none;">
									<div class="btn btn-sm p-2 hover-elevate-up  px-4 d-flex align-items-center justify-content-between select-rounded card-bg fw-bolder fs-6 text-color">
										<span class="material-symbols-outlined fs-3 me-2">
											keyboard_backspace
										</span>Back
									</div>
								</span>
								<!--end:Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Menu wrapper-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-shrink-0 align-items-center">
							<!--begin::Search-->
							<div class="app-navbar-item align-items-stretch ms-1 ms-md-4 d-none d-md-block">
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
									<!--begin::Search toggle-->
									<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
										<div>
											<h6 class="text-muted fw-6 fw-bold text-nowrap">Active Users:</h6>
										</div>
									</div>

								</div>
								<!--end::Search-->
							</div>
							<!--end::Search-->
							<!--begin::Activities-->
							<div class="app-navbar-item ms-2 ms-md-4 d-none d-md-block">
								<!--begin::Drawer toggle-->
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
								<!--end::Drawer toggle-->
							</div>
							<!--end::Activities-->
							<!--begin::Notifications-->
							<div class="app-navbar-item ms-1 ms-md-4">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom text-color btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
									<i class="bi bi-question-circle fs-3 fw-bold text-color"></i>
								</div>

								<!--end::Menu wrapper-->
							</div>
							<!--end::Notifications-->
							<!--begin::Chat-->
							<div class="app-navbar-item ms-1 ms-md-4">
								<!--begin::Menu wrapper-->
								<div class="btn btn-icon btn-custom fw-bold text-color btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle">
									<i class="bi bi-gear fs-3 fw-bold text-color"></i>
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Chat-->
							<!--begin::My apps links-->
							<div class="app-navbar-item ms-1 ms-md-4">
								<!--begin::Menu wrapper-->
								<div class="btn btn-icon btn-custom btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<i class="bi bi-bell bi-sub fs-3 fw-bold text-color"></i>
								</div>
								<!--begin::My apps-->

								<!--end::My apps-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::My apps links-->
							<!--begin::User menu-->
							<span class="bullet bullet-vertical h-100 bg-secondary w-2px"></span>
							<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<div class="px-0">
										<div class="menu-content d-flex align-items-center px-0">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-2">
												<img alt="Logo" src="assets/media/other/admin.png" class="rounded-circle user-picture" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="text-muted fw-bold d-flex align-items-center fs-5">Santosh
													<!-- <span
														class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span> -->
												</div>
												<a href="#" class=" text-hover-primary text-color fw-bold fs-7">Admin</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">

									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My
											Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title">My Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
													<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
														<i class="ki-duotone ki-information-5 fs-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<span class="form-check-label text-muted fs-7">Notifications</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My
											Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Mode
												<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
													<i class="ki-duotone ki-night-day theme-light-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
													<i class="ki-duotone ki-moon theme-dark-show fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span></span>
										</a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
													<span class="menu-title">Light</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Dark</span>
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-0">
												<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">System</span>
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
													</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
													</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
													</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
													</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
													</span>French</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account
											Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User menu-->
							<!--begin::Header menu toggle-->
							<div class="app-navbar-item d-none ms-2 me-n2" title="Show header menu">
								<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
									<i class="ki-duotone ki-element-4 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Header menu toggle-->
							<!--begin::Aside toggle-->
							<!--end::Header menu toggle-->
						</div>
						<!--end::Navbar-->
					</div>
					<!--end::Header wrapper-->
				</div>
				<!--end::Header container-->
			</div>
			<!--end::Header-->