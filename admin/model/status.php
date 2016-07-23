<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/admin_db.php');
        require_once('../include/room_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
   	 update_room_order($_GET['id'],'2');
    
	header ("Location: $plink/controller/room.php");

	?>