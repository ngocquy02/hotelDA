<?php
	
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-9 col-lg-offset-3 main">
	<form method="POST" class="col-sm-9 col-lg-10" action ="<?php echo $plink;?>/controller/search_result_room.php">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Tìm phòng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
				                <label for="sel17">Loại phòng</label>
								<select class="form-control" id="sel17" name="type_room" required>
									<option value="">Loại phòng</option>
									<?php foreach ($room_type as $type):;?>
									<option value="<?php echo $type['id'];?>"><?php echo $type['name']?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="dpd1">Ngày đến</label>
								<input type="text" class="form-control" id="dpd1" name="date_check_in" required>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="dpd2">Ngày đi</label>
								<input type="text" class="form-control" id="dpd2" name="date_checkout" required>
				              </div>
				              <div class="col-md-3 form-group">
				                <label for="sel18">Người lớn</label>
								<input type="number" class="form-control" id="sel18" name="adults" min="1" value="1" required>
				              </div>
				              <div class="col-md-3 form-group">
				                 <label for="sel19">Trẻ em</label>
								<input type="number" class="form-control" id="sel19" name="childent" min="0" value="0" required>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<button type="submit" class="col-md-2 btn btn-primary">Tìm</button>
								<div class="col-md-5">
								</div>
							</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>
				</div>
				<script type="text/javascript">
						var nowTemp = new Date();
					var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
					 
					var checkin = $('#dpd1').datepicker({
					  onRender: function(date) {
					    return date.valueOf() < now.valueOf() ? 'disabled' : '';
					  }
					}).on('changeDate', function(ev) {
					  if (ev.date.valueOf() > checkout.date.valueOf()) {
					    var newDate = new Date(ev.date)
					    newDate.setDate(newDate.getDate() + 1);
					    checkout.setValue(newDate);
					  }
					  checkin.hide();
					  $('#dpd2')[0].focus();
					}).data('datepicker');
					var checkout = $('#dpd2').datepicker({
					  onRender: function(date) {
					    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
					  }
					}).on('changeDate', function(ev) {
					  checkout.hide();
					}).data('datepicker');
				</script>
				</body>
				</html>
