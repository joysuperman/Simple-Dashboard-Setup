<?php
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-22 12:44:11
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-07-06 04:11:15
 */
session_name('_graph_view');
session_start();

include "config.php";
include_once "functions.php";

$action = filter_var(filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING)?? "";

if (!$action) {
    header('location: /login');
    die();
}else{
    
    if ('register' == $action && filter_var(filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) == $_SESSION["token"]) {
        
        $name = filter_var(filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";
	    $email = filter_var(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING), FILTER_VALIDATE_EMAIL) ?? "";
	    $befpassword = filter_var(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";
	    $afrPassword = filter_var(filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";
	    $password = "";
	    if ($befpassword == $afrPassword) {
	    	$password = $afrPassword;
	    }

        userRegistration($name, $email, $password, $connection);

    }else if ('login' == $action && filter_var(filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) == $_SESSION["token"] ) {

    	$email = filter_var(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING), FILTER_VALIDATE_EMAIL) ?? "";
		$password = filter_var(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";

        userLogin($email, $password, $connection);

    }else if ('forgot' == $action && filter_var(filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) == $_SESSION["token"]) {

    	$email = filter_var(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING), FILTER_VALIDATE_EMAIL) ?? "";

    	forgotPassword($email, $connection);
    }
    else if ('resetPass' == $action && filter_var(filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) == $_SESSION["token"]) {

    	$email = filter_var(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING), FILTER_VALIDATE_EMAIL) ?? "";
    	$getKey = filter_var(filter_input(INPUT_POST, 'key', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";
		$befpassword = filter_var(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";
    	$afrPassword = filter_var(filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING), FILTER_SANITIZE_STRING) ?? "";
    	$password = "";
	    if ($befpassword == $afrPassword) {
	    	$password = $afrPassword;
	    }

		resetPassword($email, $getKey, $password, $connection);
  	}else{
        header("location: /login?status=token_missing");
    }
}
