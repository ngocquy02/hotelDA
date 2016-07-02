<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$admin=get_list_admin();
	require_once('../view/view_users.php');
?>