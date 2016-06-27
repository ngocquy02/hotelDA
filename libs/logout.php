<?php
	require_once('driver.php');
	session_start();
	session_destroy();
	header ("Location: $plink");
?>