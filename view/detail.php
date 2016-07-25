<?php
	
?>
<!DOCTYPE html>
<html>
<?php include('../include/head.php'); ?>
<body>
<?php
	include('../include/menu.php');
?>
	<div class="container" style="background: #fff; padding: 0; padding-top : 50px; width:100%;">
		<div class="row" style="width:90%; margin:auto;">
			<div class="col col-md-7 col-xs-12 room">
				<article class="" style="min-height: 403px;">
					<div class="item-image">
						<img style="width: 100%;margin-bottom:15px;" itemprop="thumbnailUrl" alt="" src="<?php echo $option['link'];?>/admin/images/room/<?php echo $rooms['img'];?>">
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
					<a href="<?php echo $option['link'];?>"><button type="submit" class="btn btn-primary">Đặt phòng
					</button>
					</a>
				</div>
			</div>
	</div>
	<?php include('../include/footer.php'); ?>
</body>
</html>