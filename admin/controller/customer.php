<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/customer_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_GET['id']==NULL) {
		header ("Location: $plink");
	}
	$customers=get_list_customer();
	$customer=get_customer_id($_GET['id']);
	if($_GET['id']!=$customer['id']){
		header ("Location: $plink");
	}
	require_once('../view/menu.php');
	require_once('../view/view_customer.php');
?>