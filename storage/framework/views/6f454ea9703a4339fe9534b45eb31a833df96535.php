<?php $metrics = app('App\model\UsersModel'); ?>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic | <?php echo $__env->yieldContent('title'); ?></title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<?php echo $__env->yieldContent('css'); ?>
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo e(asset('assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="<?php echo e(asset('assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo e(asset('assets/media/logos/favicon.ico')); ?>" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo e(asset('assets/media/logos/logo-light.png')); ?>" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<?php echo $__env->make('component.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<?php echo $__env->make('component/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-2">
									<!--begin::Page Title-->
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
									<!--end::Page Title-->
									<!--begin::Actions-->
									<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
									<span class="text-muted font-weight-bold mr-4">#XRS-45670</span>
									<a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
									<!--end::Actions-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Actions-->
									<a href="#" class="btn btn-clean btn-hover-light-primary- active btn-sm font-weight-bold font-size-base mr-1">Today</a>
									<a href="#" class="btn btn-clean btn-hover-light-primary- btn-sm font-weight-bold font-size-base mr-1">Month</a>
									<a href="#" class="btn btn-clean btn-hover-light-primary- btn-sm font-weight-bold font-size-base mr-1">Year</a>
									<!--end::Actions-->
									<!--begin::Dropdowns-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
										<a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</a>
										<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
											<!--begin::Navigation-->
											<ul class="navi navi-hover py-5">
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-drop"></i>
														</span>
														<span class="navi-text">New Group</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-list-3"></i>
														</span>
														<span class="navi-text">Contacts</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
														<span class="navi-text">Groups</span>
														<span class="navi-link-badge">
															<span class="label label-light-primary label-inline font-weight-bold">new</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
														<span class="navi-text">Calls</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-gear"></i>
														</span>
														<span class="navi-text">Settings</span>
													</a>
												</li>
												<li class="navi-separator my-3"></li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-magnifier-tool"></i>
														</span>
														<span class="navi-text">Help</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
														<span class="navi-text">Privacy</span>
														<span class="navi-link-badge">
															<span class="label label-light-danger label-rounded font-weight-bold">5</span>
														</span>
													</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdowns-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<?php echo $__env->yieldContent('content'); ?>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?php echo e(Auth::user()->name); ?></a>
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary"><?php echo e(Auth::user()->email); ?></span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!--end::Header-->
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
			<!--begin::Item-->
			<li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
				<a class="btn btn-sm btn-icon btn-bg-light btn-text-success btn-hover-success" href="#">
					<i class="flaticon2-drop"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-text-primary btn-hover-primary" href="https://keenthemes.com/metronic/preview/demo1/builder.html" target="_blank">
					<i class="flaticon2-gear"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-text-warning btn-hover-warning" href="https://keenthemes.com/metronic/?page=docs" target="_blank">
					<i class="flaticon2-telegram-logo"></i>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-text-danger btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
					<i class="flaticon2-chat-1"></i>
				</a>
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo1.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo1/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo1/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo2.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo2/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo2/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo3.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo3/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo3/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo4.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo4/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo4/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo5.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo5/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo5/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo6.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo6/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo6/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo7.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo7/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo7/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo8.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo8/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo8/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo9.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo9/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo9/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo10.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="https://keenthemes.com/metronic/preview/demo10/index.html" class="btn font-weight-bold btn-primary btn-shadow" target="_blank">Default</a>
							<a href="https://keenthemes.com/metronic/preview/demo10/rtl/index.html" class="btn btn-light btn-shadow" target="_blank">RTL Version</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo11.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo12.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo13.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo14.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo15.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo16.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo17.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo18.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo19.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo20.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo21.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo22.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo23.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo24.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo25.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo26.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo27.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo28.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo29.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets//../../../../../../doc/assets/img/demos/demo30.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn font-weight-bold btn-primary btn-shadow disabled">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Demo Panel-->
		<script>
			var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
			var alamat = "<?php echo e(URL::to('/')); ?>";
		</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<?php echo $__env->yieldContent('vendorJs'); ?>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<?php echo $__env->yieldContent('js'); ?>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html><?php /**PATH C:\xampp\htdocs\hasbiproject\resources\views/layout.blade.php ENDPATH**/ ?>