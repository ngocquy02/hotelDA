<?php
	$room_id = ($_GET['room_id']);
	require_once('../admin/include/config.php');
	require_once('../admin/include/room_db.php');
	require_once('../admin/include/get_list.php');
	require_once('../admin/link.php');
	include('../include/menu.php');
	include('../view/view_booking.php');
	include('../view/view_room_detail.php');
	$rooms=get_room($room_id);
?>

