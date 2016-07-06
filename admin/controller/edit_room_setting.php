<?php
	require_once('../include/config.php');
	require_once('../include/room_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	$room=get_room($_GET['id']);
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' || isset($_GET['id'])==NULL ||isset($room['id'])==NULL) {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$room_list=get_list_room();
		$room_type=get_room_type();

	require_once('../view/view_edit_room.php');
?>