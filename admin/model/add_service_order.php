<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/admin_db.php');
        require_once('../include/service_db.php');
        require_once('../include/room_db.php');
        $service=get_list_service();
		session_start();
		if (isset($_SESSION['email'])==NULL || $_GET['id']==NULL) {
			header ("Location: $plink");
	}
	
		for ($i=1; $i <=count(get_list_service()) ; $i++) { 
			add_room_service($_GET['id'],$_POST["id$i"],$_POST["price$i"],$_POST["quantity$i"]);		
	}
  		header ("Location: $plink/controller/room.php");
				
	?> 