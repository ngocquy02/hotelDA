<?php
		require_once('../include/config.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	if (isset($_POST['submit']) && md5($_POST['oldpassword'])==$_SESSION['password'] ){
		session_start();
		$e=$_SESSION['email'];
		$_SESSION['password'] = md5($_POST['password']);
		$db->update('users_admin', 
				array(
				'password' =>md5($_SESSION['password']),
				),"email='$e'");
		header("Location:$plink/controller/password.php");
		$_SESSION['change'];
	} else { $_SESSION['error_pass']; 
	header("Location:$plink/controller/password.php");
}

	?>