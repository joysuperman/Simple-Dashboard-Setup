<?php
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-22 12:44:46
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-07-04 23:26:29
 */
define("DB_HOST","localhost");
define("DB_NAME","graphview");
define("DB_USER","root");
define("DB_PASSWORD","mysql");
define("HOST_PATH","mysql");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($connection,'utf8'); 
$status = 0; 

if (!$connection) {
    throw new Exception("Database Connection Has Lost"); 
}