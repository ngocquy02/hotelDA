<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
		require_once('../include/get_list.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
			header ("Location: $plink");
	}
	if($_SESSION['level']=='1'){
	update_setting($_POST['title'],$_POST['phone'],$_POST['email'],$_POST['fax'],$_POST['adress'],$_POST['city_id']);
		header ("Location: $plink/controller/setting.php");
	}
	header ("Location: $plink/controller/setting.php");