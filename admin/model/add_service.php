<?php
		require_once('../include/config.php');
        require_once('../include/service_db.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
			header ("Location: $plink");
	}
   	add_service($_POST['name_service'],$_POST['description_service'],$_POST['price_service']);	
    
	header ("Location: $plink/controller/service.php");

	?>