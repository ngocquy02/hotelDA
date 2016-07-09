<?php

require_once('../include/config.php');
		require_once('../include/admin_db.php');
		require_once('../include/customer_db.php');
        require_once('../link.php');
        $admin=get_admin_id($_GET['id']);
		session_start();
		if (isset($_SESSION['email'])==NULL && $_SESSION['level']!='1') {
			header ("Location: $plink");
	}
	if(isset($_GET['id'])){
	if($_SESSION['level']=='1' && $admin['level_id']!='1'){
	delete_customer_id($_GET['id']);
		header ("Location: $plink/controller/customers.php");
	}
	}header ("Location: $plink/controller/customers.php");

	?>