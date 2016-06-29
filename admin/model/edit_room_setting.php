<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/room_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' || isset($_GET['id'])==NULL) {
			header ("Location: $plink");
	}
    update_room($_GET['id'],$_POST['name'],$_POST['type_room'],$_POST['img'],$_POST['description'],$_POST['price']);	
    
	header ("Location: $plink/controller/room_setting.php");

	?>