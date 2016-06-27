<?php
		require_once('../include/config.php');
        require_once('../link.php');
		session_start();
		if (isset($_SESSION['email'])==NULL) {
			header ("Location: $plink");
	}
	if (isset($_POST['submit']) && $_POST['password']==$_POST['rpassword']) {
			$e=$_SESSION['email'];
			$_SESSION['name']=$_POST['name'];
			$_SESSION['gender']=$_POST['gender'];
			$_SESSION['birth_day']=$_POST['birth_day'];
			$_SESSION['phone']=$_POST['phone'];
			$_SESSION['adress']=$_POST['adress'];
			$_SESSION['citys']=$_POST['citys'];
			$db->update('users_admin', 
				array(
				'citys' =>$_SESSION['citys'],
				'name' => $_SESSION['name'],
				'gender_id' => $_SESSION['gender'],
				'birth_day' => $_SESSION['birth_day'],
				'phone' => $_SESSION['phone'],
				'adress' => $_SESSION['adress']),"email='$e'");
				header("Location:$plink/controller/profile.php");
}
else{ header("Location:$plink/controller/profile.php"); }

?>