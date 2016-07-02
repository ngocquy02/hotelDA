<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_SESSION['date_check_in'])==NULL) {
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	$cities=get_city();
	require_once('../view/add_room_order.php');
?>