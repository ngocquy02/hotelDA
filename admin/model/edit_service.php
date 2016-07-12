<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/service_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' || isset($_GET['id'])==NULL) {
			header ("Location: $plink");
	}
		update_service($_GET['id'],$_POST['name_service'],$_POST['description_service'],$_POST['price_service']); 
    
	header ("Location: $plink/controller/service.php");

	?>