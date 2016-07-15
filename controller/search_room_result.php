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
$get_result_search=get_result_search($_POST['date_check_in'],$_POST['date_checkout'],$_POST['type_room']);
	// require_once('../view/menu.php');
	$_SESSION['date_check_in']=$_POST['date_check_in'];
	$_SESSION['date_checkout']=$_POST['date_checkout'];
	$_SESSION['type_room']=$_POST['type_room'];
	require_once('../view/search_room_result.php');
?>  