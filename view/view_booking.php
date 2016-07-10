<?php
	require_once('./admin/include/config.php');
	require_once('./admin/include/room_db.php');
	require_once('./admin/include/get_list.php');
	$room_types=get_room_type();
?>
<div class="banner-text wow fadeInUp" data-wow-delay="0.5s">
	<h1>Tìm Phòng Trống</h1>
</div>
<div class="reservation col-lg-12" style="background: rgba(60, 191, 232,0.4); border-radius:10px; padding:0 20px;">
<!--start-date-piker-->

	<ul style="margin-top: 10px;">
		<form>		
		<li  class="col-lg-4">
			<h5>Ngày nhận phòng :</h5>
			<input style="background: #fff;  border: 1px solid #0098DA !important;border-radius: 4px !important; width:100%; padding-left:30px; color: #0098da; background-image: url('images/calendar.png');background-position: center left; background-repeat: no-repeat;" type="text" class="span2 date_book" value="" id="dpd1">						
		</li>
		<li  class="col-lg-4">
			<h5>Ngày trả phòng:</h5>						
			<input style="background: #fff;  border: 1px solid #0098DA !important;border-radius: 4px !important; width:100%; padding-left:30px; color: #0098da; background-image: url('images/calendar.png');background-position: center left; background-repeat: no-repeat;" type="text" class="span2 date_book" value="" id="dpd2">							
		</li>
		<li class="col-lg-4">
			<h5>Loại phòng</h5>
				<select style="background: #fff !important;border: 1px solid #0098DA !important;border-radius: 4px !important; width:100%; color: #0098da !important;" >
					<?php foreach ($room_types as $room_type):;?>
						<option style="color: #0098da !important; " value="<?php echo $room_type['id'];?>"><?php echo $room_type['name'];?></option>
					<?php endforeach;?>
				</select>
		</li>
		<div class="clearfix"></div>
		<li class="col-lg-12 " style="margin-top:20px; margin-bottom: 20px;">
			<button type="button" class="btn-book btn btn-info pull-right">Tìm Phòng</button>
		</li>
		</form>
	</ul>
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