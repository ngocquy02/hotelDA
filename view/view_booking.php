<?php
	require_once('./admin/include/config.php');
	require_once('./admin/include/room_db.php');
	require_once('./admin/include/get_list.php');
	$room_types=get_room_type();
?>
<div class="banner-text wow fadeInUp" data-wow-delay="0.5s">
	<h1>Tìm Phòng Trống</h1>
</div>
<div class="booking-form reservation">
<!--start-date-piker-->
	<div class="online_reservation">
		<div class="b_room">
			<div class="booking_room">
				<div>
					<ul>
						<form>		
						<li  class="span1_of_1 left">
							<h5>Ngày nhận phòng :</h5>
							<input type="text" class="span2" value="" id="dpd1">						
						</li>
						<li  class="span1_of_1 left">
							<h5>Ngày trả phòng:</h5>						
							<input type="text" class="span2" value="" id="dpd2"></th>								
						</li>
						<li class="span1_of_1">
							<h5>Loại phòng</h5>
								<select class="form-control loaiphong ">
									<?php foreach ($room_types as $room_type):;?>
										<option value="<?php echo $room_type['id'];?>"><?php echo $room_type['name'];?></option>
									<?php endforeach;?>
								</select>
							
							</div>	
						</li>
						</form>
					</ul>
					
				</div>
						<div class="clearfix"></div>
						<div class="col-lg-12">
							<div class="col-lg-2 col-lg-offset-10" style="margin-top:20px; margin-bottom:20px;">
								<button type="button" class="btn btn-info">Tìm Phòng</button>
							</div>	
						</div> 	
			</div>
		</div>
	</div>
</div>
</div>
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