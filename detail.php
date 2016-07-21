<?php
	$room_id = ($_GET['room_id']);
require_once('./admin/include/config.php');
	require_once('./admin/include/room_db.php');
	require_once('./admin/include/get_list.php');
	require_once('./admin/link.php');
	$rooms=get_room($room_id);
	$cities=get_city();
?>
<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
<?php
	include('include/menu.php');
?>
	<div class="container" style="background: #fff; padding: 0; padding-top : 50px; width:100%;">
		<div class="row" style="width:90%; margin:auto;">
			<div class="col col-md-7 col-xs-12 room">
				<article class="" style="min-height: 403px;">
					<div class="item-image">
						<img style="width: 100%;" itemprop="thumbnailUrl" alt="" src="images/room/phong101.jpg">
					</div>


				</article>
			</div>
			<div class="col col-md-5 col-xs-12 room">
				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p><?php $type=get_room_type_id($rooms['room_type_id']);echo $type['name']; ?></p>
						</div>
						<div class="room_price pull-right">
							<p > <?php echo $rooms['price'];?><sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p><?php echo $rooms['description'];?></p>
					</div>
					<div class="clearfix"></div>
					<a href="order_room.php?room_id=<?php echo $rooms['id'];?>"><button type="submit" class="btn btn-primary">Đặt phòng
					</button>
					</a>
				</div>
			</div>
	</div>
	<?php include('include/footer.php'); ?>
</body>
</html>