<?php
	
?>
<!DOCTYPE html>
<html>
<?php include('../include/head.php'); ?>
<body>
<?php
	include('../include/menu.php');
?>
	<div class="container wrapper-body" style="background: #fff; padding: 0; padding-top : 50px;  padding-bottom : 80px; width:100%;">
		<div class="row" style="width:90%; margin:auto;">
			<div class="col col-md-7 col-xs-12 room">
				<article class="" style="min-height: 403px; background:#fff; padding:10px;border-radius:10px;">
					<div class="item-image">
						<img style="width: 100%;" itemprop="thumbnailUrl" alt="" src="<?php echo $option['link'];?>/admin/images/room/<?php echo $rooms['img']; ?>">
					</div>

					<div class="room_content">
						<h3>
							<div class="room_title pull-left">
								<p><?php $type=get_room_type_id($rooms['room_type_id']);echo $type['name']; ?></p>
							</div>
							<div class="room_price pull-left">
								<p > <?php echo "&nbsp;&nbsp;&nbsp;".$rooms['price'];?><sup>đ</sup></p>
							</div>
						</h3>
						<div class="clearfix"></div>
						<div class="room_description">
							<p><?php echo $rooms['description'];?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
			</div>

			<div class="col col-md-5 col-xs-12">
				<form method="POST" action ="<?php echo $option['link'];?>/model/add_room_order.php?room_id=<?php echo $_GET['room_id'];?>" id="form">
					<div class="row col-md-12" style="padding: 0px; margin:0px;">
						<section >
							<h2 class="text-info list_room_title" style="text-align:center; margin:20px 0px;">THÔNG TIN ĐẶT PHÒNG</h2>
						      <div class="col-md-12" style="padding: 0px; margin:0px;">
						            <div class="col-md-6 form-group">
										<label for="1">Tên</label>
										<input type="text" class="form-control" id="1" name="name" required>
						            </div>
						            <div class="col-md-6 form-group">
										<label for="">Giới tính</label>
										<select class="form-control" id="4" name="gender" required>
											<option value="">Giới tính</option>
											<option value="Nam">Nam</option>
											<option value="Nữ">Nữ</option>
										</select>
						            </div>
						            <div class="col-md-6 form-group">
										<label for="5">Ngày sinh</label>
										<input type="date" class="form-control" id="5" name="birth_day" required>
						            </div>
						            <div class="col-md-6 form-group">
										<label for="6">Số chứng minh</label>
										<input type="text" class="form-control" id="6" required pattern="[0-9]{9}" name="passport">
						            </div>
						            <div class="col-md-6 form-group">
										<label for="7">Điện thoại</label>
										<input type="tel" class="form-control" id="7" required name="phone">
						            </div>
						            <div class="col-md-6 form-group">
										<label for="8">Email</label>
										<input type="email" class="form-control" id="8" required name="email">
						            </div>
						            <div class="col-md-6 form-group">
										<label for="9">Địa chỉ</label>
										<input type="text" class="form-control" name="adress" id="9" required>
						            </div>
					                <div class="col-md-6 form-group">
									<label for="10">Thành phố</label>
									<select class="form-control" id="10" name="city" required>
										<option value="">Thành phố</option>
										<?php foreach ($cities  as $city ):;?>
										<option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
										<?php endforeach;?>
									</select>
					              	</div>
					              	<div class="col-md-5">
									</div>

             
									<button id="button"  type="submit" class="btn btn-primary">Đặt phòng
									</button>
									<div id="modal">
										<div id="heading">
											Thông báo
										</div>

										<div id="content">
										<p>Bạn có chắc chắn sẽ đặt phòng này chứ?</p>
											<button onclick="return true;" class="button green close" style="opacity: 1;"><img src="<?php echo $option['link'];?>/images/tick.png"><h4 style="margin-top:5px; color: #fff;">Có</h4></button> 

											<button onclick="return false;" class="button red close" style="opacity: 1;"><img src="<?php echo $option['link'];?>/images/cross.png"><h4 style="margin-top:5px; color: #fff;">Không</h4></button>
										</div>
									</div>

									<div class="col-md-5">
									</div>
								</div>
							</section>					
					</div>
				</form>

			</div>								
		</div>
	</div>

	<?php include('../include/footer.php'); ?>
</body>
</html>