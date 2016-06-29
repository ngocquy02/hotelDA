<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/room_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' || isset($_GET['id'])==NULL) {
			header ("Location: $plink");
	}
    delete_room($_GET['id']);
    
	header ("Location: $plink/controller/room_setting.php");

	?>