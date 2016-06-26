<?php
		require_once('include/driver.php');
		session_start();
		if (isset($_SESSION['email'])){
		header ("Location: $plink/controller/dashboard.php");
		}
?>
	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đăng nhập hệ thống quản trị</title>
<link href="<?php echo $plink;?>img/favicon.ico" rel="shortcut icon">


<link href="<?php echo $plink;?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $plink;?>/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo $plink;?>/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="text-align:center;">Hệ thống quản trị</div>
				<div class="panel-body">
					<form method="POST" action="<?php echo $plink;?>/model/login_admin.php" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" minlength="6" required>
							</div>
							<?php if(isset($_SESSION['error']))
							{echo "<div class='alert alert-danger' role='alert' style='text-align:center'>Sai email hoặc mật khẩu</div>";};?>
							<div class="col-md-4">
							</div>
							<input type="submit" name="submit" class="col-md-4 btn btn-primary" value="Đăng nhập">
							<div class="col-md-4">
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="<?php echo $plink;?>/js/jquery-1.12.4.min.js"></script>
	<script src="<?php echo $plink;?>/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
