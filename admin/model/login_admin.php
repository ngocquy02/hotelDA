<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
		require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
		if (isset($_POST['submit'])) {
			$email_admin=$_POST['email'];
			$pass_admin =$_POST['password'];
			$pass_admin = md5($pass_admin);
			$users_admin=get_admin_email($email_admin);
			var_dump($users_admin);
			if ($email_admin==$users_admin['email'] && $pass_admin==$users_admin['password']) {
				session_start();
				$_SESSION['email']=$email_admin;
				$_SESSION['level']=$users_admin['level_id'];
				header("Location:$plink/controller/dashboard.php");
}
}
?>