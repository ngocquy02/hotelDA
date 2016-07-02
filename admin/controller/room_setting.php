<?php
	require_once('../include/config.php');
	require_once('../include/room_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$rooms=get_list_room();
	require_once('../view/view_room_setting.php');
?>