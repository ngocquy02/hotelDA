<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
		require_once('../include/room_db.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	

	delete_room_order($_GET['id']);
	header ("Location: $plink/controller/room.php");