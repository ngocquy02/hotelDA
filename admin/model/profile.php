<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	if (isset($_POST['submit'])) {
			$c=update_admin($_POST['name'],$_POST['adress'],$_POST['birth_day'],$_POST['city'],$_SESSION['email'],$_POST['gender'],$_POST['phone']);
}
 header("Location:$plink/controller/profile.php"); 

?>