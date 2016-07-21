<?php

?>
<div class="col col-md-4 col-xs-12">
	<form method="POST" action ="model/add_room_order.php?room_id=<?php echo $_GET['room_id'];?>" id="form">
		<div class="row col-md-12" style="padding: 0px; margin:0px;">
			<section class="panel">
			      <header class="panel-heading" style="text-align:center">
			         THÔNG TIN LIÊN HỆ
			      </header>
			      <div class="col-md-12" style="padding: 0px; margin:0px;">
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