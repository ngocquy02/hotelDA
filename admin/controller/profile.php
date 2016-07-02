<?php
require_once('../include/config.php');
	require_once('../link.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('../view/menu.php');
		$admin=get_admin_email($_SESSION['email']);
		$cities=get_city();
	require_once('../view/view_profile.php');
?>