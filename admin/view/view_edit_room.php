<?php
	
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
	<form method="POST" class="col-sm-9 col-lg-10" action ="<?php echo $plink;?>/model/edit_room_setting.php?id=<?php echo $_GET['id']; ?>">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Sửa thông tin phòng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên Phòng</label>
								<input type="text" class="form-control" id="sel10" name="name" value="<?php echo $room['name'];?>" required>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel17">Loại phòng</label>
								<input type="text" class="form-control" id="sel17" name="type_room" value="<?php echo $room['room_type'];?>" required>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Hình ảnh</label>
								<input type="text" class="form-control" id="sel15" name="img" value="<?php echo $room['img'];?>" required>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Giá (VNĐ)</label>
								<input type="text" class="form-control" id="sel16" name="price" value="<?php echo $room['price'];?>" required>
				              </div>
				              <div class="col-md-12 form-group">
				                <label for="sel18">Mô tả</label>
								<textarea class="form-control" id="sel18" name="description" required><?php echo $room['description'];?></textarea>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<button type="submit" class="col-md-2 btn btn-primary">Sửa</button>
								<div class="col-md-5">
								</div>
							</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>