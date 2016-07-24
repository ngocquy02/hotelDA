<?php
	
?>  
<!DOCTYPE html>
<html>
<?php include('../include/head.php'); ?>
<body>
<?php
	include('../include/menu.php');
?>
<div class="container wrapper-body" style="width:100%;">
	<div class="row" style="width:90%; margin:20px 5% 5% 60px;">
	<h2 class="text-success list_room_title" style="text-align:center; margin:20px 0px;">KẾT QUẢ TÌM KIẾM</h2>

	<?php if($count==0){echo "<div class='text-center'><h2 style='color:white;height:200px;'>Không có phòng trống</h2></div>";}?>
	<?php foreach ($get_result_search as $room):;?>
		<div class="col col-sm-4 room">
			<article class="room_detail">
				<div class="item-image" >
					<img style="width: 100%;height:225px;" itemprop="thumbnailUrl" alt="" src="/hotelDA/admin/images/room/<?php echo $room['img'];?>">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p><?php $type=get_room_type_id($room['room_type_id']);echo $type['name']; ?></p>
						</div>
						<div class="room_price pull-right">
							<p ><?php echo $room['price'];?><sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p><?php echo substr($room['description'],0,150)." ... ";?></p>
					</div>
					<div class="clearfix"></div>
					<div class="room_button" >
						<a class="btn-book btn btn-info" href="/hotelDA/controller/order_room.php?room_id=<?php echo $room['id']?>"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>
	<?php endforeach;?>										
	</div>
</div>
	<?php include('../include/footer.php'); ?>
</body>
</html>



