<?php
	
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-4 main">
	<form method="POST" class="col-sm-9 col-lg-10" action ="<?php echo $plink;?>/controller/search_result_room.php">
			<div class="row">
				<div class="right col-lg-8">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Tìm phòng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-12 form-group">
				                <label for="sel17">Loại phòng</label>
								<select class="form-control" id="sel17" name="type_room" required>
									<option value="">Loại phòng</option>
									<?php foreach ($room_type as $type):;?>
									<option value="<?php echo $type['id'];?>"><?php echo $type['name']?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="col-md-12 form-group">
				                <label for="dpd1">Ngày đến</label>
								<input type="date" class="form-control" id="dpd1" name="date_check_in" required>
				              </div>
				               <div class="col-md-12 form-group">
				                <label for="dpd2">Ngày đi</label>
								<input type="date" class="form-control" id="dpd2" name="date_checkout" required>
				              </div>
				              <div class="row">
								<div class="col-md-4">
								</div> 
									<button type="submit" class="col-md-4 btn btn-primary">Tìm</button>
								<div class="col-md-4">
								</div>
							</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>
				</div>
				
				</body>
				</html>
