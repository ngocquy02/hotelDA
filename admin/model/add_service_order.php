<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/admin_db.php');
        require_once('../include/service_db.php');
        require_once('../include/room_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_GET['id']=NULL) {
			header ("Location: $plink");
	}
		add_room_service($_SESSION['room_order_id'],$_GET['id'];$_SESSION['price'],$_POST['quantity']);


   echo "thêm thành công";

	?>