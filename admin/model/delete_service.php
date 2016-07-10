<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
		require_once('../include/service_db.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL && $_SESSION['level']!='1') {
			header ("Location: $plink");
	}
	$service=get_service($_GET['id']);
	if(isset($service['id'])==NuLL){	header ("Location: $plink");}

	delete_service($_GET['id']);
	header ("Location: $plink/controller/service.php");