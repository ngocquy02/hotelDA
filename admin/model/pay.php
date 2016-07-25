<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/service_db.php');
        require_once('../include/room_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || isset($_GET['id'])==NULL) {
			header ("Location: $plink");
	}
		update_room_order($_GET['id'],'1');
    
	header ("Location: $plink/controller/bill.php?id=".$_GET['id']);

	?>