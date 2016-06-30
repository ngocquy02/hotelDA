<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/room_db.php');
        require_once('../include/customer_db.php');
        require_once('../include/get_list.php');
		session_start();
		if (isset($_SESSION['email'])==NULL ) {
			header ("Location: $plink");
	}
    add_customer_order($_POST['name'],$_POST['adress'],$_POST['birth_day'],$_POST['city'],$_POST['email'],$_POST['gender'],$_POST['passport'],$_POST['phone']);	
    $get_customer=get_customer($_POST['email']);
    $get_list_room=get_list_room();
    $date_order=date("Y/m/d");

    add_room_order_search($_GET['id'],$_SESSION['date_check_in'],$_SESSION['date_checkout'],$date_order,$get_customer['id']);
	header ("Location: $plink/controller/room.php");

	?>