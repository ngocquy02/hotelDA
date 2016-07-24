<?php
	require_once('../admin/include/config.php');
	require_once('../admin/include/get_list.php');
	require_once('../admin/include/customer_db.php');
	require_once('../admin/include/room_db.php');
	require_once('../admin/link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_POST['type_room'])==NULL) {
		header ("Location: ");
	}
	$rooms=get_list_room();
	$room_types=get_room_type();
	require_once('../view/booking_room.php');

?>