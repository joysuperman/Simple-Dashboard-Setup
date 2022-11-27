<?php
	if (!defined("GRAPH.VIEW")) {
		header("location: /");
		die();
	}

	require_once('helpers/route.php');

	$path = parse_url(trim($_SERVER['REQUEST_URI'],"/"), PHP_URL_PATH);

	if (route($path) == route('login')) {
		require route('login');
	}else if (route($path) == route('error')) {
		require route('error');
	}else{
		
		include("partials/_extras/offcanvas/quick-user.php");

		include("partials/_extras/offcanvas/quick-cart.php");

		include("partials/_extras/offcanvas/quick-panel.php");

		include("partials/_extras/scrolltop.php");

		include("partials/_extras/offcanvas/demo-panel.php");

		include("partials/_header-mobile.php"); 
	?>

		<!--begin::Main-->

		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<?php include("partials/_header.php"); ?>

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

						<?php require route($path);?>								

					</div>

					<!--end::Content-->

					<?php include("partials/_footer.php"); ?>

				</div>
				<?php include("partials/_aside.php"); ?>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->

		</div>

		<!--end::Main-->
	<?php
	}
?>	
		