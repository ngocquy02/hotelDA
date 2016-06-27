<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	$users_admin=$db->get_list("SELECT * FROM gender, users_admin WHERE gender.id=users_admin.gender_id");
	
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
			<li class="active"><a href="<?php echo $plink;?>/index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Tổng quan</a></li>
			<li><a href="<?php echo $plink;?>/controller/diagrams.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Sơ đồ phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/form.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Lễ tân</a></li>
			<li><a href="<?php echo $plink;?>/controller/room.php"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg>Phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/statistical.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Thống kê</a></li>
			<li><a href="<?php echo $plink;?>/controller/users.php""><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Báo cáo</a></li>
			<li><a href="<?php echo $plink;?>/controller/setting.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Cài đặt</a></li>
		</ul>

	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Quản lí users
				      </header>
						<div class="panel-body table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Mã NV</th>
										<th class="col-md-2" style="list-style-type: none;text-align:center">Họ tên</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Ngày sinh</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center" >Giới tính</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Số điện thoại</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Email</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($users_admin as $users):?>
									<tr>
										<th scope="row" style="list-style-type: none;text-align:center"><?php echo $users['employee_number']?></th>
										<td style="list-style-type: none;text-align:center" charset=utf-8><?php echo $users['name']?></td>
										<td type='date' style="list-style-type: none;text-align:center"><?php echo date('d/m/Y',strtotime($users['birth_day']));?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $users['gender_name'];?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $users['phone']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $users['email']?></td>
										<td class="">
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/user.php?id=<?php echo $users['id']?>" style="font-size:12px">
													<svg class="glyph stroked clipboard with paper" style="height: 15;width:15;">
													<use xlink:href="#stroked-clipboard-with-paper"/>
													</svg>
													Xem
												</a>
												<a href="<?php echo $plink;?>/controller/delete.php?id=<?php echo $users['id']?>" style="font-size:12px">
													<svg class="glyph stroked cancel" style="height: 15;width:15;">
														<use xlink:href="#stroked-cancel"></use>
													</svg>
													Xóa
												</a>
											</li>
										</td>
									</tr>
								<?php endforeach?>
								</tbody>
							</table>

						</div>
					</section>
					<div class="col-md-5">
					</div>			              
						<a href="<?php echo $plink;?>/controller/add_user.php"">
						<button class="col-md-2 btn btn-primary">Thêm người dùng</button>
						</a>
					<div class="col-md-5">
					</div>
				</div>
			</div>
	</div>
		</body>
		</html>
