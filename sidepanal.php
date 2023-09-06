<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
	<!--begin::Sidebar-->
	<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
		<!--begin::Logo-->
		<div class="app-sidebar-logo pt-0 px-6" id="kt_app_sidebar_logo">
			<!--begin::Logo image-->
			<a href="index.php">
				<img alt="Logo" src="assets/media/logos/Logo.png" class="img-fluid app-sidebar-logo-default" />
				<img alt="Logo" src="assets/media/logos/Favicon.png" class="img-fluid app-sidebar-logo-minimize" />
			</a>
			<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow shadow-lg btn-color-muted btn-active-color-primary h-20px w-20px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
				<i class="bi bi-chevron-right fs-4 rotate-180">
				</i>
			</div>
			<!--end::Sidebar toggle-->
		</div>
		<!--end::Logo-->
		<!--begin::sidebar menu-->
		<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
			<!--begin::Menu wrapper-->
			<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
				<!--begin::Scroll wrapper-->
				<div id="kt_app_sidebar_menu_scroll" class="scroll-y ps-4 my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
					<!--begin::Menu-->
					<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu">
						<!--begin:Menu item-->
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="index.php" class="menu-link">
								<span class="material-symbols-outlined fs-2">
									home_app_logo
								</span>
								<span class="menu-title ms-3">Dashboard</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="client.php" class="menu-link">
								<span class="material-symbols-outlined fs-2">
									groups
								</span>
								<span class="menu-title ms-3">Clients</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="Project.php" class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									rocket_launch
								</span>
								<span class="menu-title ms-3">Projects</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="coaches.php" class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									sports
								</span>
								<span class="menu-title ms-3">Coaches</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="coachees.php" class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									groups
								</span>
								<span class="menu-title ms-3">Coachees</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="Invoice.php" class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									request_quote
								</span>
								<span class="menu-title ms-3">Invoices</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="calender.php" class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									date_range
								</span>
								<span class="menu-title ms-3">Calender</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="resources.php" class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									data_table
								</span>
								<span class="menu-title ms-3">Resources</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item here show menu-accordion support-top-border mt-4 pt-4">
							<!--begin:Menu link-->
							<span class="ps-2 mt-4">
								<span class="menu-icon fs-6 fw-bold text-white text-uppercase mt-2 fs-7">Support</span>
							</span>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a class="menu-link app-sidebar-icon-minimize">
								<span class="material-symbols-outlined fs-2">
									help
								</span>
								<span class="menu-title ms-3">Help</span>
							</a>
							<!--end:Menu link-->
						</div>
						<div class="menu-item menu-btn here show menu-accordion">
							<!--begin:Menu link-->
							<a href="setting.php" class="menu-link app-sidebar-icon-minimize">
								<span  class="material-symbols-outlined fs-2">
									settings
								</span>
								<span class="menu-title ms-3">Settings</span>
							</a>
							<!--end:Menu link-->
						</div>
					</div>
					<!--end::Menu-->

				</div>
				<!--end::Scroll wrapper-->
			</div>
			<!--end::Menu wrapper-->
		</div>
		<!--end::sidebar menu-->
	</div>
	<!--end::Sidebar-->