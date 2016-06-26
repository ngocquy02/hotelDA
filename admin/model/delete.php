<?php
		require_once('../include/driver.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	if(isset($_GET['id'])){
	$id=$_GET['id'];
	if($id!=1){
	$db->remove('users_admin', "id = $id");
		header ("Location: $plink/controller/users.php");
	}
	}header ("Location: $plink/controller/users.php");