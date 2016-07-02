<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$levels=get_level();
	$cities=get_city();
	$count=count(get_list_admin());
	$count++;
	require_once('../view/add_admin.php');
?>