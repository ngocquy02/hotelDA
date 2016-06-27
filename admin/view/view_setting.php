<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	$adress=$db->get_list('SELECT * FROM `province`');
	
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
			<li><a href="<?php echo $plink;?>/view/view_diagrams.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Sơ đồ phòng</a></li>
			<li><a href="<?php echo $plink;?>/view/view_form.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Lễ tân</a></li>
			<li><a href="<?php echo $plink;?>/view/view_room.php"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg>Phòng</a></li>
			<li><a href="<?php echo $plink;?>/view/view_statistical.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Thống kê</a></li>
			<li><a href="<?php echo $plink;?>/view/view_users.php""><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Báo cáo</a></li>
			<li class="active"><a href="<?php echo $plink;?>/controller/setting.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Cài đặt</a></li>
		</ul>

	</div><!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
	<form method="POST" class="col-sm-9 col-lg-10">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Cài đặt
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên khách sạn</label>
								<input type="text" class="form-control" id="sel10">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel11">Số tầng</label>
								<input type="number" min="1" value="1" class="form-control" id="sel11">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel12">Số phòng mỗi tầng</label>
								<input type="number" min="5" value="5" class="form-control" id="sel12">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số điện thoại bàn</label>
								<input type="tel"  class="form-control" id="sel13">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel14">Di động</label>
								<input type="tel"  class="form-control" id="sel14">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Fax</label>
								<input type="tel" class="form-control" id="sel16">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel17">Số nhân viên</label>
								<input type="number" min="1" value="5" class="form-control" id="sel17">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel18">Địa chỉ</label>
								<input type="text" class="form-control" id="sel16">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel19">Thành phố</label>
								<select type="password" class="form-control" id="sel16">
									<option>Thành phố</option>
									<?php foreach ($adress as $adresss):;?>
									<option value="<?php echo $adresss['id'];?>" ><?php echo $adresss['name'];?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<div class="container col-md-2">

										<!-- Trigger the modal with a button -->
										<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lưu thông tin cài đặt</button>

										<!-- Modal -->
											<div class="modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">

												<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Thông báo</h4>
														</div>
														<div class="modal-body">
															<h3>Bạn có muốn lưu thông tin cài đặt</h3>
														</div>
														<div class="modal-footer">
															<input type="submit" type="submit" class="btn btn-default" data-dismiss="modal" value="Sửa">
														</div>
													</div>

												</div>
											</div>

										</div>
  
								<div class="col-md-5">
								</div>
							</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>
				</div>
				</body>
				</html>
