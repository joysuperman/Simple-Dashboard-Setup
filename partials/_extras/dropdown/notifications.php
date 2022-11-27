<?php 
	if (!defined("GRAPH.VIEW")) {
		header("location: /");
		die();
	}
?>
										<!--begin::Header-->
											<div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">

												<!--begin::Title-->
												<h4 class="d-flex flex-center rounded-top">
													<span class="text-white">User Notifications</span>
													<span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span>
												</h4>

												<!--end::Title-->

												<!--begin::Tabs-->
												<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
													</li>
												</ul>

												<!--end::Tabs-->
											</div>

											<!--end::Header-->

											<!--begin::Content-->
											<div class="tab-content">

												<!--begin::Tabpane-->
												<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">

													<!--begin::Scroll-->
													<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-primary mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-primary">

																		<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																				<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg>

																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Cool App</a>
																<span class="text-muted">Marketing campaign planning</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-warning mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-warning">

																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg>

																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Awesome SAAS</a>
																<span class="text-muted">Project status update meeting</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-success">

																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																				<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>

																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Claudy Sys</a>
																<span class="text-muted">Project Deployment &amp; Launch</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-danger mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-danger">

																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
																				<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
																				<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
																				<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
																			</g>
																		</svg>

																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Trilo Service</a>
																<span class="text-muted">Analytics &amp; Requirement Study</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-info mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-info">

																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																				<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
																				<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>

																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bravia SAAS</a>
																<span class="text-muted">Reporting Application</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-danger mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-danger">

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
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Express Wind</a>
																<span class="text-muted">Software Analytics &amp; Design</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->

														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">

															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-success">

																		<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
																				<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>

																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>

															<!--end::Symbol-->

															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Bruk Fitness</a>
																<span class="text-muted">Web Design &amp; Development</span>
															</div>

															<!--end::Text-->
														</div>

														<!--end::Item-->
													</div>

													<!--end::Scroll-->

													<!--begin::Action-->
													<div class="d-flex flex-center pt-7">
														<a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
													</div>

													<!--end::Action-->
												</div>

												<!--end::Tabpane-->

												<!--begin::Tabpane-->
												<div class="tab-pane" id="topbar_notifications_events" role="tabpanel">

													<!--begin::Nav-->
													<div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-line-chart text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New report has been received</div>
																	<div class="text-muted">23 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-paper-plane text-danger"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Finance report has been generated</div>
																	<div class="text-muted">25 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-user flaticon2-line- text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New order has been received</div>
																	<div class="text-muted">2 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-pin text-primary"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New customer is registered</div>
																	<div class="text-muted">3 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-sms text-danger"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Application has been approved</div>
																	<div class="text-muted">3 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-pie-chart-3 text-warning"></i>
																</div>
																<div class="navinavinavi-text">
																	<div class="font-weight-bold">New file has been uploaded</div>
																	<div class="text-muted">5 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-pie-chart-1 text-info"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New user feedback received</div>
																	<div class="text-muted">8 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-settings text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">System reboot has been successfully completed</div>
																	<div class="text-muted">12 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-safe-shield-protection text-primary"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New order has been placed</div>
																	<div class="text-muted">15 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-notification text-primary"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Company meeting canceled</div>
																	<div class="text-muted">19 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-fax text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New report has been received</div>
																	<div class="text-muted">23 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-download-1 text-danger"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">Finance report has been generated</div>
																	<div class="text-muted">25 hrs ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon-security text-warning"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New customer comment recieved</div>
																	<div class="text-muted">2 days ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->

														<!--begin::Item-->
														<a href="#" class="navi-item">
															<div class="navi-link">
																<div class="navi-icon mr-2">
																	<i class="flaticon2-analytics-1 text-success"></i>
																</div>
																<div class="navi-text">
																	<div class="font-weight-bold">New customer is registered</div>
																	<div class="text-muted">3 days ago</div>
																</div>
															</div>
														</a>

														<!--end::Item-->
													</div>

													<!--end::Nav-->
												</div>

												<!--end::Tabpane-->

												<!--begin::Tabpane-->
												<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">

													<!--begin::Nav-->
													<div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
														<br />No new notifications.
													</div>

													<!--end::Nav-->
												</div>

												<!--end::Tabpane-->
											</div>

											<!--end::Content-->