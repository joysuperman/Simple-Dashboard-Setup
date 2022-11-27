<?php
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-28 00:06:30
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-07-06 04:09:59
 */
session_name('_graph_view');
session_start();
$_SESSION['id'] = 0;
unset($_SESSION['token']);
session_destroy();
header("location: /login");