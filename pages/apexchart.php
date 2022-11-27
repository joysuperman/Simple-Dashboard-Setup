<?php 
	if (!defined("GRAPH.VIEW")) {
		header("location: /");
		die();
	}

	$query = "SELECT * FROM account ORDER BY year ASC";
	$result = mysqli_query($connection,$query);
	$year=[];
	$purchase=[];
	$sale=[];
	$profit=[];
	while($rel=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	    $year[] = $rel['year'];
	    $purchase[] = $rel['purchase'];
	    $sale[] = $rel['sale'];
	    $profit[] = $rel['profit'];
	}
?>



						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Notice-->
								<!--end::Notice-->
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<!--begin::Header-->
											<div class="card-header h-auto">
												<!--begin::Title-->
												<div class="card-title py-5">
													<h3 class="card-label">Line Chart</h3>
												</div>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_1"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Area Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_2"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Column Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_3"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Area Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_4"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Mixed Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_5"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Timeline Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_6"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Candlestick Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_7"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Bubble Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_8"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Scatter Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_9"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Heatmap Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_10"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Donut Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_11" class="d-flex justify-content-center"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Pie Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_12" class="d-flex justify-content-center"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Radial Bar Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_13"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
									<div class="col-lg-6">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Radar Chart</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Chart-->
												<div id="chart_14"></div>
												<!--end::Chart-->
											</div>
										</div>
										<!--end::Card-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->

						<script>
							var year = <?php echo json_encode($year);?>;
							var purchase = <?php echo json_encode($purchase);?>;
							var sale = <?php echo json_encode($sale);?>;
							var profit = <?php echo json_encode($profit);?>;
						</script>