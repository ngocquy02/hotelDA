<?php
	 
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="text-align:center">Tổng quan</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3" style="padding-right: 5px;padding-left: 5px;">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $count;?></div>
							<div class="text-muted">Số phòng</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3" style="padding-right: 5px;padding-left: 5px;">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $count_user ;?></div>
							<div class="text-muted">Quản trị viên</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3" style="padding-right: 5px;padding-left: 5px;">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $count_customer ;?></div>
							<div class="text-muted">Khách hàng</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3" style="padding-right: 5px;padding-left: 5px;">
				<div class="panel panel-purple panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked paper coffee cup"><use xlink:href="#stroked-paper-coffee-cup"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $count_service; ?></div>
							<div class="text-muted">Dịch vụ</div>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-lg-offset-4 col-xs-12 col-md-6 col-lg-3" style="padding-right: 5px;padding-left: 5px;">
				<div class="panel panel-org panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $setting['view']; ?></div>
							<div class="text-muted">Lượt truy cập</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
</body>
</html>