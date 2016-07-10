<?php
	require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../include/service_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}

	$services=get_list_service();
	require_once('../view/menu.php');
	require_once('../view/add_service.php');
?>