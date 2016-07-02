<?php
	require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$cities=get_city();
	$setting=get_setting();
	require_once('../view/view_setting.php');
?>