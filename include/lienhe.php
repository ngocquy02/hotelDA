<?php

?>
<div class="col col-md-4 col-xs-12">
	<form method="POST" action ="model/add_room_order.php?room_id=<?php echo $_GET['room_id'];?>" id="form">
		<div class="row col-md-12" style="background: #fff;padding: 0px;margin:0px;height: 442px; border-radius:10px;">
			<section>
				<h2 class="text-info list_room_title" style="text-align:center; margin:20px 0px;">THÔNG TIN LIÊN HỆ</h2>
			      <div class="col-md-12" style="padding: 0px 15px; margin:0px;">
		            <div class="form-group">
						<label for="1">Tên</label>
						<input type="text" class="form-control" id="1" name="name" required>
		            </div>
		            
		            <div class="form-group">
						<label for="2">Điện thoại</label>
						<input type="tel" class="form-control" id="2" required name="phone">
		            </div>
		            <div class="form-group">
						<label for="3">Email</label>
						<input type="email" class="form-control" id="3" required name="email">
		            </div>
		           
					<button id="button" onclick="return true;"  type="submit" class="btn btn-primary">Gửi
					</button>
				</div>
			</section>					
		</div>
	</form>

</div>						