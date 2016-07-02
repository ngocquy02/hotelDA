<?php
require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../include/customer_db.php');
	require_once('../include/room_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}

	require_once('../view/menu.php');
	$room_type=get_room_type();
	$date_check_in=date('d/m/Y');
	require_once('../view/search_room.php');
?>