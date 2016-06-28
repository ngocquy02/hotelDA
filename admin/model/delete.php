<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL && $_SESSION['level']!='1') {
			header ("Location: $plink");
	}
	if(isset($_GET['id'])){
	$id=$_GET['id'];
	if($_SESSION['level']=='1'){
	delete_admin($id);
		header ("Location: $plink/controller/users.php");
	}
	}header ("Location: $plink/controller/users.php");