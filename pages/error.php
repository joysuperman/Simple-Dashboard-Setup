<?php
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-23 01:10:56
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-06-30 23:55:56
 */
	if (!defined("GRAPH.VIEW")) {
		header("location: /");
		die();
	}
echo "I am not found";
// echo "<div class='d-flex align-items-center justify-content-center'>";

// $path = preg_replace('~[^\\pL\d]+~u', '',parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// 	$indexPage =array(""=>"pages\home.php");
// 	$files = new DirectoryIterator("pages/");

// 	foreach ($files as $file) {
// 		if ($file->isDot()) {
// 			continue;
// 		}
// 		$page[]= str_replace('.php', '', $file->getBasename());
// 		$pagePath[] = $file->getPathName();
// 	}
// 	$router = array_unique(array_merge($indexPage, array_combine($page, $pagePath)));

// 	if (array_key_exists($path, $router)) {
// 		print_r($router[$path]);
// 		// echo "<br>";
// 		// echo "$path \n";
// 		// echo "<br>";
// 		// print_r($page);
// 		// echo "<br>";
// 		// print_r($pagePath);
// 		// echo "<br>";
// 		print_r($router);
// 	}
	

// echo "</div>";