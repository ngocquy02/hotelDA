<?php
	$room_id = ($_GET['room_id']);
	require_once('../admin/include/config.php');
	require_once('../admin/include/room_db.php');
	require_once('../admin/include/get_list.php');
	require_once('../admin/link.php');
	$rooms=get_room($room_id);
	$cities=get_city();
	require_once('../view/detail.php');

?>