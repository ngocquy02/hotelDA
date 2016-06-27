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
			<li class="active"><a href="<?php echo $plink;?>/controller/form.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg>Lễ tân</a></li>
			<li><a href="<?php echo $plink;?>/controller/room.php"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg>Phòng</a></li>
			<li><a href="<?php echo $plink;?>/controller/statistical.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Thống kê</a></li>
			<li><a href="<?php echo $plink;?>/controller/users.php""><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Báo cáo</a></li>
			<li><a href="<?php echo $plink;?>/controller/setting.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg>Cài đặt</a></li>
		</ul>

	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<section class="fc panel">
		
		<div class="row">
			<div class="col-lg-12">
				<header class="panel-heading" style="text-align:center">
				          Lễ tân
		      	</header>
			</div>
		</div><!--/.row-->
	<!-- Nav tabs -->
<div class="tab-wrapper">
<div class="col-md-3"></div>
<ul class="tab nav nav-pills col-md-6">
	<li class="active col-md-4"><a href="#all">Tổng hợp</a></li>
	<li class="col-md-3"><a href="#select">Tùy chọn</a></li>
	<li class="col-md-4"><a href="#pay">Thanh toán</a></li>
</ul>
<div class="col-md-3"></div>
</div>
<div class="tab-content">
		<form method="get" class="tab-item" id="all">
			<div class="row">
				<div class="right col-lg-6">
				  <section class="panel">
				      <header class="panel-heading">
				          Thông tin chung
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel1">Chọn Loại</label>
								<select class="form-control" id="sel1">
									<option>Chọn Loại</option>
									<option>Phòng Đơn Hạng Tiết Kiệm</option>
									<option>Phòng Đơn Ban Công</option>
									<option>Phòng Đôi</option>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel2">Chọn Phòng</label>
								<select class="form-control" id="sel2">
									<option>Chọn Phòng</option>
									<option>Phòng 1</option>
									<option>Phòng 2</option>
									<option>Phòng 3</option>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel3">Chọn Giá</label>
								<select class="form-control" id="sel3">
									<option>Chọn Giá</option>
									<option>Giá 1</option>
									<option>Giá 2</option>
									<option>Giá 3</option>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel4">Giá</label>
								<input type="text" class="form-control" name="price" id="sel4">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel5">Ngày đến</label>
								<input type="date" class="form-control" id="sel5" format="DD/MM/YYYY">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel6">Người lớn</label>
								<input type="number" class="form-control" id="sel6" value="1" min=1>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel7">Ngày đi</label>
								<input type="date" class="form-control" id="sel7">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel8">Trẻ em</label>
								<input type="number" class="form-control" id="sel8" value="0" min=0>
				              </div>
				              <div class="col-md-12 form-group">
				                <label for="sel9">Ghi chú</label>
								<input type="text" class="form-control" id="sel9">
				              </div>
				      </div>
				  </section>
				</div>

				<div class="left col-lg-6">
				  <section class="panel">
				      <header class="panel-heading">
				          Khách hàng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên khách</label>
								<input type="text" class="form-control" id="sel10">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel11">Giới tính</label>
								<select class="form-control" id="sel11">
									<option>Giới tính</option>
									<option>Nam</option>
									<option>Nữ</option>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel12">Ngày sinh</label>
								<input type="date" class="form-control" id="sel12">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số chứng minh</label>
								<input type="text" pattem="[0-9]" class="form-control" id="sel13">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel14">Di động</label>
								<input type="tel" class="form-control" id="sel14">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Địa Chỉ</label>
								<input type="text" class="form-control" id="sel16">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel17">Thành phố</label>
								<select class="form-control" id="sel17">
									<option>Thành phố</option>
									<option>Đà Nẵng</option>
									<option>Hồ Chí Minh</option>
									<option>Hà Nội</option>
								</select>
				              </div>
				      </div>
				  </section>
				</div>
			</div>
			<div class="row">
			<div class="col-md-5">
			</div> 
			<button type="submit" class="col-md-2 btn btn-primary">Lưu thông tin</button>  
			<div class="col-md-5">
			</div>
			</div>
			</form>
	<!--CCCCCCCCCCCCCCCCCCCCCCCCCCC-->
	<form method="POST" class="tab-item" id="select">
			<div class="row">
				<div class="right col-lg-4">
				  <section class="panel">
				      <header class="panel-heading">
				          Nhắc nhở
				      </header>
				      <div class="panel-body">
				              <div class="col-md-12 form-group">
								<label for="se4">Nội dung nhắc nhở</label>
								<input type="text" class="form-control" id="se4">
				              </div>
				      </div>
				  </section>
				</div>

				<div class="center col-lg-4">
				  <section class="panel">
				      <header class="panel-heading">
				          Marketing
				      </header>
				      <div class="panel-body">
				              <div class="col-md-12 form-group">
								<label for="se1">Công ty</label>
								<input type="text" class="form-control" id="se1">
				              </div>
				              <div class="col-md-12 form-group">
								<label for="se2">Nguồn</label>
								<input type="text" class="form-control" id="se2">
				              </div>
				              <div class="col-md-12 form-group">
								<label for="se3">Thị trường</label>
								<input type="text" class="form-control" id="se3">
				              </div>
				      </div>
				  </section>
				</div>


				<div class="left col-lg-4">
				  <section class="panel">
				      <header class="panel-heading">
				          Ăn sáng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="se5">Chọn</label>
								<select class="form-control" id="se5">
									<option>Có</option>
									<option>Không</option>
								</select>
				              </div>
				      </div>
				  </section>
				</div>
			<div class="row">
			<div class="col-md-5">
			</div> 
  			<button type="submit" class="col-md-2 btn btn-primary">Lưu thông tin</button>
			<div class="col-md-5">
			</div>
			</div>
			</div>
			</form>
			<!--dgfjwèwe-->

			<form method="POST" action="<?php echo $plink;?>/view/view_form.php" class="tab-item" id="pay">
			<div class="row">
				<div class="right col-lg-6">
				  <section class="panel">
				      <header class="panel-heading">
				          Thanh toán
				      </header>
				      <div class="panel-body">
			              	<div class="col-md-4 form-group">
								<label for="s1">Loại</label>
								<select class="form-control" id="s1">
									<option>Đặt cọc</option>
								</select>
							</div>
			              	<div class="col-md-4 form-group">
								<label for="s2">Hình thức TT</label>
								<select class="form-control" id="s2">
									<option>Tiền mặt</option>
									<option>Thẻ tín dụng</option>
									<option>Chuyển khoản ngân hàng</option>
								</select>
							</div>
			              	<div class="col-md-4 form-group">
								<label for="s3">Tiền tệ</label>
								<select class="form-control" id="s3">
									<option>VNĐ</option>
									<option>USD</option>
								</select>
				            </div>
				            <div class="col-md-4 form-group">
								<label for="s4">Tổng tiền</label>
								<input type="text" class="form-control" pattern="[0-9]" id="s4">
				            </div>
				            <div class="col-md-8 form-group">
								<label for="s5">Mô tả</label>
								<input type="text" class="form-control" id="s5">
				            </div>
				      </div>
				  </section>
				</div>

				<div class="left col-lg-6">
				  <section class="panel">
				      <header class="panel-heading">
				          Danh sách giá
				      </header>
				      <div class="panel-body">
				              <div class="col-md-12 form-group">
								<label for="se5">Cách hiển thị</label>
								<select class="form-control" id="se5">
									<option>Theo ngày</option>
									<option>Theo nhóm</option>
								</select>
				              </div>
				      </div>
				  </section>
				</div>
			<div class="row">
			<div class="col-md-5">
			</div> 
			<button type="submit" class="col-md-2 btn btn-primary">Lưu thông tin</button>
			<div class="col-md-5">
			</div>
			</div>
			</div>
			</form>
			</div>
			</section>
			</div>

<script language="javascript">
            
            $(document).ready(function()
            {
                // Hàm active tab nào đó
                function activeTab(obj)
                {
                    // Xóa class active tất cả các tab
                    $('.tab-wrapper ul li').removeClass('active');

                    // Thêm class active vòa tab đang click
                    $(obj).addClass('active');

                    // Lấy href của tab để show content tương ứng
                    var id = $(obj).find('a').attr('href');

                    // Ẩn hết nội dung các tab đang hiển thị
                    $('.tab-item').hide();

                    // Hiển thị nội dung của tab hiện tại
                    $(id) .show();
                }

                // Sự kiện click đổi tab
                $('.tab li').click(function(){
                    activeTab(this);
                    return false;
                });

                // Active tab đầu tiên khi trang web được chạy
                activeTab($('.tab li:first-child'));
            });
        </script>

</body>

</html>
