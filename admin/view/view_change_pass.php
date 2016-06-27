<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	$citys=$db->get_list('SELECT * FROM `citys`');
	$genders=$db->get_list('SELECT * FROM `gender`');

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
<script src="<?php echo $plink;?>/js/jquery.validate.min.js"></script>
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
			<li><a href="<?php echo $plink;?>/index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Tổng quan</a></li>
			<li><a href="<?php echo $plink;?>/controller/diagrams.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Sơ đồ phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/form.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Lễ tân</a></li>
			<li><a href="<?php echo $plink;?>/controller/room.php"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg>Phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/statistical.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Thống kê</a></li>
			<li><a href="<?php echo $plink;?>/controller/users.php""><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Báo cáo</a></li>
			<li><a href="<?php echo $plink;?>/controller/setting.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Cài đặt</a></li>
		</ul>

	</div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" id='form' action ="<?php echo $plink;?>/model/pass.php" class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Đổi mật khẩu
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên</label>
								<input type="text" class="form-control" id="sel10" value="<?php echo $_SESSION['name'];?>"  disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel12">Ngày sinh</label>
								<input type="date" class="form-control" id="sel12" value="<?php echo $_SESSION['birth_day'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số chứng minh</label>
								<input type="text" class="form-control" id="sel13" value="<?php echo $_SESSION['passport'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel14">Di động</label>
								<input type="tel" class="form-control" id="sel14" value="<?php echo $_SESSION['phone'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15" value="<?php echo $_SESSION['email'];?>" disabled>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="se15">Mật khẩu cũ</label>
								<input type="password" class="form-control" id="se15" name="oldpassword" required minlength="6">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="password1">Mật khẩu mới</label>
								<input type="password" class="form-control" id="password1" required minlength="6" name="password">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="password2">Xác nhận mật khẩu</label>
								<input type="password" class="form-control" id="password2" required minlength="6" name="repassword">
								</div>
								</div>
								<div class="col-md-4"></div>
								
								<div class="row">
								<div class="col-md-5">

								</div> 
								<button type="submit" class="col-md-2 btn btn-primary" name="submit">Lưu thông tin</button>

								<div class="col-md-5">
								</div>
								</div>
				  </section>
				</div>
				</div>
				</form>
				</div>
					<script type="text/javascript">
					$("#form").validate({
					rules: {
					oldpassword:{
						required:true,
						minlength:6
					},
					password: {
					required: true,
					minlength: 6
					},
					repassword: {
					required: true,
					minlength: 6,
					equalTo: "#password1"
					},
					},
					messages: {
					password: {
					required: "Bạn chưa nhập thông tin",
					minlength: "Vui lòng hập trên 6 kí tự"
					},
					repassword: {
					required: "Bạn chưa nhập thông tin",
					minlength: "Vui lòng nhập trên 6 kí tự",
					equalTo: "Xác nhận mật khẩu mới chưa đúng"
					},
					oldpassword:{
						required:"Bạn chưa nhập thông tin",
						minlength: "Vui lòng hập trên 6 kí tự"
					},
					}
					});
				</script>
				</body>
				</html>
