<?php
if (!defined("GRAPH.VIEW")) {
	header("location: /");
	die();
}
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-23 15:50:43
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-07-04 13:03:45
 */
// Route
function route($path){
	$indexPage =array(""=>"pages\home.php");
	$files = new DirectoryIterator("pages/");

	foreach ($files as $file) {
		if ($file->isDot()) {
			continue;
		}
		$page[]= str_replace('.php', '', $file->getBasename());
		$pagePath[] = $file->getPathName();
	}
	$router = array_unique(array_merge($indexPage, array_combine($page, $pagePath)));

	if (array_key_exists($path, $router)) {
		return $router[$path];
	}else{
		return $router['error'];
	}
}