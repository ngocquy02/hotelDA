<?php
require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	$admin=get_admin_id($_GET['id']);
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' ||isset($_GET['id'])==NULL || isset($admin['id'])==NULL) {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$level=get_level_id($admin['level_id']);
	$city=get_city_id($admin['city_id']);
	require_once('../view/user.php');

?>