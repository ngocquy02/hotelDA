<?php
	require_once('../include/driver.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	if ($_SESSION['level']==1 && $_SESSION['level']==2) {
		$_SESSION['level_1']=1;
		$_SESSION['level_2']=2;
	}
?>