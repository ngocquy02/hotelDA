<?php
	require_once('../include/config.php');
	require_once('../include/room_db.php');
	require_once('../include/customer_db.php');
	require_once('../include/service_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		$room_order=get_room_order($_GET['id']);
		$customer=get_customer_id($room_order['customer_id']);
		require_once('../view/menu.php');
		require_once('../view/detail.php');
?>