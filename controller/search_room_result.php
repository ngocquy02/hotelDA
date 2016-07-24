<?php
	require_once('../admin/include/config.php');
	require_once('../admin/include/get_list.php');
	require_once('../admin/include/customer_db.php');
	require_once('../admin/include/room_db.php');
	require_once('../admin/link.php');
	session_start();

	$rooms=get_list_room();

	$date_in = $_POST['date_check_in'];
	$date_out = $_POST['date_checkout'];
	// echo $date_in;
	// echo $date_out;
	// die;
	$get_result_search=get_result_search($date_in,$date_out,$_POST['type_room']);
	// $_SESSION['date_check_in']=$_POST['date_check_in'];
	// $_SESSION['date_checkout']=$_POST['date_checkout'];
	// var_dump($date_in);die;

	$count=count($get_result_search);
	$_SESSION['date_check_in']=$date_in;
	$_SESSION['date_checkout']=$date_out;

	$_SESSION['type_room']=$_POST['type_room'];
	require_once('../view/search_room_result.php');
?>   