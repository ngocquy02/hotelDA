<?php
		require_once('../include/config.php');
		require_once('../include/admin_db.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	$get_email=get_admin_email($_SESSION['email']);
	if (isset($_POST['submit']) && md5($_POST['oldpassword'])==$get_email['password'] ){
		session_start();
		$e=$_SESSION['email'];
		$_SESSION['password'] = md5($_POST['password']);
		update_password($_SESSION['password'],$e);
		header("Location:$plink/controller/password.php");
		$_SESSION['change'];
	} else { $_SESSION['error_pass']; 
	header("Location:$plink/controller/password.php");
}
	?> 