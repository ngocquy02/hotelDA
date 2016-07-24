<?php
	require_once('../include/config.php');
	require_once('../include/room_db.php');
	require_once('../include/get_list.php');
	require_once('../include/customer_db.php');
	require_once('../include/service_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('../view/menu.php');
		$orders=get_list_room_order();

	require_once('../view/view_room.php');
?>