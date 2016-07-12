<?php
	require_once('../include/config.php');
	require_once('../include/service_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' || isset($_GET['id'])==NULL) {
		header ("Location: $plink");
	}

	$service=get_service($_GET['id']);
	require_once('../view/menu.php');
	require_once('../view/edit_service.php');
?>