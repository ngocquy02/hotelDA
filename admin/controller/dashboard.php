<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	require_once('../include/room_db.php');
	require_once('../link.php');
 	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('../view/menu.php');
		$setting=get_setting();
		$count=count(get_list_room());
	require_once('../view/view_dashboard.php');
?>