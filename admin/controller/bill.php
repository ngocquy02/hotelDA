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
		$room_service=get_list_room_service_room_order_id($_GET['id']);
		$r_service=get_list_room_service_room_order_id($_GET['id']);
		$room=get_room($room_order['room_id']);
		require_once('../view/bill.php');
?>