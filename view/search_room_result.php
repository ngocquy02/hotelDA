<div class="container">
	<div class="row" style="width:100%;">
	<h2 class="text-success list_room_title" style="text-align:center; margin:20px 0px;">DANH SÁCH PHÒNG</h2>
	<?php foreach ($rooms as $room):;?>
		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image" >
					<img style="width: 100%;" itemprop="thumbnailUrl" alt="" src="images/room/phong201.png">
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
						<a class="btn-book btn btn-info pull-right" href="../model/add_room_order.php"><span>Đặt ngay</span></a>
<!-- 						<a class="btn-book btn btn-info pull-right" href="controller/room_detail?room_id=<?php echo $room['id'];?>"><span>Đặt ngay</span></a> -->
					</div>
				</div>
			</article>
		</div>
	<?php endforeach;?>										
	</div>
</div>

<?php var_dump()?>