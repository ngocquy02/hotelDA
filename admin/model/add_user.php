<?php
		require_once('../include/driver.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}

	$db->insert('users_admin', array(
    'adress' => $_POST['adress'],
    'birth_day' => $_POST['birth_day'],
    'adress' => $_POST['adress'],
    'citys' => $_POST['city'],
    'email' => $_POST['email'],
    'gender_id' => $_POST['gender'],
    'level_id' => $_POST['level'],
    'name' => $_POST['name'],
    'password' => md5($_POST['password']),
    'phone' => $_POST['phone'],
    'passport' => $_POST['passport'],
    'employee_number' => $_POST['employee_number'],
));
	header ("Location: $plink/controller/users.php");
	?>