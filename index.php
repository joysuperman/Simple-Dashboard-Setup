<?php
	define("GRAPH.VIEW", true);
	
	session_name('_graph_view');
	session_start();
	$_user_id = $_SESSION['id'] ?? 0;
	$_user_name = '';

	require_once('helpers/route.php');
	require_once('helpers/config.php');

	$path = parse_url(trim($_SERVER['REQUEST_URI'],"/"), PHP_URL_PATH);

	if (route($path) == route('login')) {
		if ($_user_id) {
		    header("location: /");
		    $_user_name = $_SESSION['name'];
		}
	}else{
		if (!$_user_id) {
		    header("location: /login");
		}else{
			$_user_name = $_SESSION['name'];
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>GraphView</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<!--end::Fonts-->

		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<?php if (route($path) == route('login')) { ?>
		<link href="/assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
		<?php } ?>
		<!--end::Page Vendors Styles-->

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes(used by all pages)-->
		<link href="/assets/css/themes/layout/header/base/dark.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/themes/layout/header/menu/dark.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
	</head>

	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize aside-minimize-hoverable page-loading">

		<?php include("layout.php"); ?>

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>
			var KTAppSettings = {
				"breakpoints": {
					"sm": 576,
					"md": 768,
					"lg": 992,
					"xl": 1200,
					"xxl": 1400
				},
				"colors": {
					"theme": {
						"base": {
							"white": "#ffffff",
							"primary": "#3699FF",
							"secondary": "#E5EAEE",
							"success": "#1BC5BD",
							"info": "#8950FC",
							"warning": "#FFA800",
							"danger": "#F64E60",
							"light": "#E4E6EF",
							"dark": "#181C32"
						},
						"light": {
							"white": "#ffffff",
							"primary": "#E1F0FF",
							"secondary": "#EBEDF3",
							"success": "#C9F7F5",
							"info": "#EEE5FF",
							"warning": "#FFF4DE",
							"danger": "#FFE2E5",
							"light": "#F3F6F9",
							"dark": "#D6D6E0"
						},
						"inverse": {
							"white": "#ffffff",
							"primary": "#ffffff",
							"secondary": "#3F4254",
							"success": "#ffffff",
							"info": "#ffffff",
							"warning": "#ffffff",
							"danger": "#ffffff",
							"light": "#464E5F",
							"dark": "#ffffff"
						}
					},
					"gray": {
						"gray-100": "#F3F6F9",
						"gray-200": "#EBEDF3",
						"gray-300": "#E4E6EF",
						"gray-400": "#D1D3E0",
						"gray-500": "#B5B5C3",
						"gray-600": "#7E8299",
						"gray-700": "#5E6278",
						"gray-800": "#3F4254",
						"gray-900": "#181C32"
					}
				},
				"font-family": "Poppins"
			};
		</script>

		<!--end::Global Config-->

		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>

		<!--end::Global Theme Bundle-->

		<!--begin::Page Vendors(used by this page)-->
		<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		
		<?php if (route($path) == route('login')) { ?>
<!--begin::Login Scripts(used by this page)-->
		<script src="/assets/js/pages/custom/login/login-general.js"></script>
		<!--end::Login Scripts-->
		<?php }
		elseif (route($path) == route('apexchart')) { ?>
<!--begin::Page Scripts(used by this page)-->
		<script src="/assets/js/pages/features/charts/apexcharts.js"></script>
		<!--end::Page Scripts-->
		<?php } ?>
<!--begin::Page Scripts(used by this page)-->
		<script src="/assets/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->
	</body>

	<!--end::Body-->
</html>