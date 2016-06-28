<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/admin_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
			header ("Location: $plink");
	}
    add_admin($_POST['name'],$_POST['adress'],$_POST['birth_day'],$_POST['city'],$_POST['email'],$_POST['gender'],$_POST['level'],md5($_POST['password']),$_POST['passport'],$_POST['phone'],$_POST['employee_number']);	
    
	header ("Location: $plink/controller/users.php");

	?>