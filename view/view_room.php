<?php
	require_once('/admin/include/config.php');
	require_once('/admin/include/room_db.php');
	require_once('/admin/include/get_list.php');
	$rooms=get_list_room();
?>
<div class="container">
	<div class="row" style="width:100%;">
	<h2 class="text-success" style="text-align:center;">DANH SÁCH PHÒNG</h2>
	<?php foreach ($rooms as $room):;?>
		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image">
					<img itemprop="thumbnailUrl" alt="" src="images/room/phong101.png">
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
						<p><?php echo $room['description'];?></p>
					</div>
					<div class="clearfix"></div>
					<div >
						<a class="btn btn-success"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>
	<?php endforeach;?>

		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image">
					<img itemprop="thumbnailUrl" alt="" src="images/room/phong101.png">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p>Double room</p>
						</div>
						<div class="room_price pull-right">
							<p >300.000<sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p>Nằm về phía nam cầu trần thị lý. Blue River là môt nơi thích hợp cho những ai thích sự yên tĩnh </p>
					</div>
					<div class="clearfix"></div>
					<div >
						<a class="btn btn-success"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>

		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image">
					<img itemprop="thumbnailUrl" alt="" src="images/room/phong101.png">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p>Double room</p>
						</div>
						<div class="room_price pull-right">
							<p >300.000<sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p>Nằm về phía nam cầu trần thị lý. Blue River là môt nơi thích hợp cho những ai thích sự yên tĩnh </p>
					</div>
					<div class="clearfix"></div>
					<div >
						<a class="btn btn-success"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>

		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image">
					<img itemprop="thumbnailUrl" alt="" src="images/room/phong101.png">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p>Double room</p>
						</div>
						<div class="room_price pull-right">
							<p >300.000<sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p>Nằm về phía nam cầu trần thị lý. Blue River là môt nơi thích hợp cho những ai thích sự yên tĩnh </p>
					</div>
					<div class="clearfix"></div>
					<div >
						<a class="btn btn-success"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>

		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image">
					<img itemprop="thumbnailUrl" alt="" src="images/room/phong101.png">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p>Double room</p>
						</div>
						<div class="room_price pull-right">
							<p >300.000<sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p>Nằm về phía nam cầu trần thị lý. Blue River là môt nơi thích hợp cho những ai thích sự yên tĩnh </p>
					</div>
					<div class="clearfix"></div>
					<div >
						<a class="btn btn-success"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>

		<div class="col col-sm-4 room">
			<article class="room_detail" style="min-height: 403px;">
				<div class="item-image">
					<img itemprop="thumbnailUrl" alt="" src="images/room/phong101.png">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p>Double room</p>
						</div>
						<div class="room_price pull-right">
							<p >300.000<sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p>Nằm về phía nam cầu trần thị lý. Blue River là môt nơi thích hợp cho những ai thích sự yên tĩnh </p>
					</div>
					<div class="clearfix"></div>
					<div >
						<a class="btn btn-success"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>										
	</div>
</div>