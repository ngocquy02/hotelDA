<?php
require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../include/customer_db.php');
	require_once('../include/room_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_POST['type_room'])==NULL) {
		header ("Location: $plink");
	}
$get_result_search=get_result_search($_POST['date_check_in'],$_POST['date_checkout'],$_POST['type_room']);
	require_once('../view/menu.php');
	// setcookie("date_check_in",$_POST['date_check_in'],time() +180);
	// setcookie("date_checkout",$_POST['date_checkout'],time() +180);
	// setcookie("type_room",$_POST['type_room'],time() +180);
	// setcookie("childent",$_POST['childent'],time() +180);
	// setcookie("adults",$_POST['adults'],time() +180);
	$_SESSION['date_check_in']=$_POST['date_check_in'];
	$_SESSION['date_checkout']=$_POST['date_checkout'];
	$_SESSION['type_room']=$_POST['type_room'];
	$_SESSION['childent']=$_POST['childent'];
	$_SESSION['adults']=$_POST['adults'];
	require_once('../view/search_result_room.php');
?>