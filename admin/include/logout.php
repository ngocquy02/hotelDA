<?php
	require_once('../link.php');
	session_start();
	session_destroy();
	header ("Location: $plink");
?>