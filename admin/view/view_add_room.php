<?php
	
?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
	<form method="POST" class="col-sm-9 col-lg-10" action ="<?php echo $plink;?>/model/add_room_setting.php">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Quản lí phòng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên Phòng</label>
								<input type="text" class="form-control" id="sel10" value="<?php echo "Phòng ".$count ;?>" disabled>
								<input type="text" class="form-control" id="sel10" value="<?php echo "Phòng ".$count ;?>" style="display:none;" name="name" required>   
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel17">Loại phòng</label>
								<select class="form-control" id="sel17" name="type_room" required>
									<option value="">Loại phòng</option>
									<?php foreach ($room_type as $type):;?>
									<option value="<?php echo $type['id'];?>"><?php echo $type['name'];?></option>
									<?php endforeach?>
								</select>
				              </div>
								
				               <div class="col-md-6 form-group">
				                <label for="sel16">Giá (VNĐ)</label>
								<input type="text" class="form-control" id="sel16" name="price" required>
				              </div>
				              <div class="col-md-12 form-group">
				                <label for="sel18">Mô tả</label>
								<textarea class="form-control" id="sel18" name="description" required></textarea>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<button onclick="return confirm('Bạn có muốn thêm phòng không?')?true:false;" type="submit" class="col-md-2 btn btn-primary">Thêm</button>
								<div class="col-md-5">
								</div>
							</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>
			