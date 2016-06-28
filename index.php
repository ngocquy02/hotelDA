<?php
	require_once('admin/include/config.php');
	require_once('admin/include/admin_db.php');
	require_once('admin/include/get_list.php');
	$setting=get_setting();
	$view=$setting['view'];
	$view++;
	// update_view('10');
	if (isset($_COOKIE['view'])==NULL) {
		setcookie('view','view', time() + 600);
		update_view($view);
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Khách Sạn VQ</title>
<link href="<?php echo $plink;?>admin/img/favicon.ico" rel="shortcut icon">
<link href="admin/css/styles.css" rel="stylesheet">
<link href="admin/css/system.css" rel="stylesheet">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body class="container">
<div>
	<?php
		include('admin/include/header.php');
		// include('admin/include/menu.php');
		// include('admin/include/booking.php');
		// include('admin/include/container.php');
		// include('admin/include/footer.php');
	?>
</div>
</body>
</html>