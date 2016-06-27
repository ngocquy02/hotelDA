<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
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
	<style type="text/css">
		.room{padding: 15px;}
	</style>

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
			<li class="active"><a href="<?php echo $plink;?>/controller/diagrams.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Sơ đồ phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/form.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Lễ tân</a></li>
			<li><a href="<?php echo $plink;?>/controller/room.php"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg>Phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/statistical.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Thống kê</a></li>
			<li><a href="<?php echo $plink;?>/controller/users.php""><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Báo cáo</a></li>
			<li><a href="<?php echo $plink;?>/controller/setting.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Cài đặt</a></li>
		</ul>

	</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" class="col-sm-9 col-lg-12">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Sơ đồ phòng
				      </header>
				      <div class="panel-body">
				              	
							<div class="col-xs-12 col-md-6 col-lg-4">
								<div class="panel panel-blue panel-widget ">
									<div class="row no-padding">
										<div class="col-sm-3 col-lg-5 widget-left">
											<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>
										</div>
										<div class="col-sm-9 col-lg-7 widget-right">
											<h4>Tầng 1</h4>
											<div class="text-mute">10 phòng</div>
										</div>
										
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 1</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 2</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 3</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 4</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 5</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 6</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 7</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 8</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 9</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 10</h5>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-6 col-lg-4">
								<div class="panel panel-teal panel-widget ">
									<div class="row no-padding">
										<div class="col-sm-3 col-lg-5 widget-left">
											<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>
										</div>
										<div class="col-sm-9 col-lg-7 widget-right">
											<h4>Tầng 2</h4>
											<div class="text-mute">10 phòng</div>
										</div>
										
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 11</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 12</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 13</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 14</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 15</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 16</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 17</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 18</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 19</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 20</h5>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-md-6 col-lg-4">
								<div class="panel panel-orange panel-widget ">
									<div class="row no-padding">
										<div class="col-sm-3 col-lg-5 widget-left">
											<svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg>
										</div>
										<div class="col-sm-9 col-lg-7 widget-right">
											<h4>Tầng 3</h4>
											<div class="text-mute">10 phòng</div>
										</div>
										
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 21</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 22</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 23</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 24</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 25</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 26</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 27</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 28</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 29</h5>
													</div>

												</div>
											</div>
										</div>
										<div class="room col-xs-12 col-md-6 col-lg-12">
											<div class="panel panel-red panel-widget ">
												<div class="row no-padding">
													<div class="col-sm-3 col-lg-5 widget-left">
													<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
													</div>
													<div class="col-sm-9 col-lg-7 widget-right">
													<h5>Phòng 30</h5>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>
				</div>
