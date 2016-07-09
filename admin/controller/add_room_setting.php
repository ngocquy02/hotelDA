<?php
	require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../include/room_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$room_type=get_room_type();
	$rooms=get_list_room();
	$count=count($rooms);
	$count ++;
	require_once('../view/view_add_room.php');
?>