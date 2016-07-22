<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	require_once('../include/room_db.php');
	require_once('../include/customer_db.php');
	require_once('../include/service_db.php');
	require_once('../link.php');
 	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('../view/menu.php');
		$setting=get_setting();
		$count=count(get_list_room());
		$count_user=count(get_list_admin());
		$count_customer=count(get_list_customer());
		$count_service=count(get_list_service());
	require_once('../view/view_dashboard.php');
?>