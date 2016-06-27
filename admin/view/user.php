<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	$id=$_GET['id'];
	if ($db->get_row("SELECT * FROM users_admin WHERE id=$id")==FALSE) {
			die(header ("Location: $plink/404.php"));
}
	$users_admin=$db->get_row("SELECT * FROM users_admin WHERE id=$id");
	$gender_id=$users_admin['gender_id'];
	$genders=$db->get_row("SELECT * FROM `gender` WHERE id=$gender_id");
	$city=$users_admin['citys'];
	$citys=$db->get_row("SELECT * FROM `citys` WHERE id=$city");
	$level=$users_admin['level_id'];
	$levels=$db->get_row("SELECT * FROM `level` WHERE id=$level");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hệ thống quản trị</title>
<link href="<?php echo $plink;?>/img/favicon.ico" rel="shortcut icon">


<link href="<?php echo $plink;?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $plink;?>/css/styles.css" rel="stylesheet">
<link href="<?php echo $plink;?>/css/form.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo $plink;?>/js/lumino.glyphs.js"></script>
<script src="<?php echo $plink;?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo $plink;?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $plink;?>/bootstrap/js/jquery.validate.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $plink;?>/index.php"><span></span>admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $plink;?>/controller/profile.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Thông tin cá nhân</a></li>
							<li><a href="<?php echo $plink;?>/controller/password.php""><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg>Đổi mật khẩu</a></li>
							<li><a href="<?php echo $plink;?>/controller/users.php""><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"></use></svg>Quản lí user</a></li>
							<li><a href="<?php echo $plink;?>/include/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="<?php echo $plink;?>/index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Tổng quan</a></li>
			<li><a href="<?php echo $plink;?>/controller/diagrams.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Sơ đồ phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/form.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Lễ tân</a></li>
			<li><a href="<?php echo $plink;?>/controller/room.php"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg>Phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/statistical.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Thống kê</a></li>
			<li><a href="<?php echo $plink;?>/controller/user.php""><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Báo cáo</a></li>
			<li><a href="<?php echo $plink;?>/controller/setting.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Cài đặt</a></li>
		</ul>

	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				         Thông tin chi tiết người dùng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Chức vụ</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $levels['name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Mã nhân viên</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['employee_number'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Giới tính</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $genders['gender_name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Ngày sinh</label>
								<input type="date" class="form-control" id="sel10" value='<?php echo $users_admin['birth_day'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Số chứng minh</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['passport'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Điện thoại</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['phone'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Email</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['email'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Địa chỉ</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['adress'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Thành phố</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $citys['name'];?>' disabled>
				              </div>	
				              	<div class="col-md-5">
								</div>			              
									<a href="<?php echo $plink;?>/controller/users.php"">
									<button class="col-md-2 btn btn-primary">Trở về</button>
									</a>
								<div class="col-md-5">
								</div>
						</div>
						</section>
				      </div>
						
				
				</div>
			</div>