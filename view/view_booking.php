<?php
	require_once('./admin/include/config.php');
	require_once('./admin/include/room_db.php');
	require_once('./admin/include/get_list.php');
	$room_types=get_room_type();
?>

<!DOCTYPE html>
<html>
<head>

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/datepicker.css" rel="stylesheet" />
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="banner-text fadeInUp" >
	<h1 class="book_title">
	        <div id="typed-strings">
                <span>ĐẶT PHÒNG</span>
            </div>
    </h1>
</div>
<div class="reservation col-lg-10" style="background: rgba(60, 191, 232,0.4); border-radius:10px; padding:0 20px; margin:0 10%;">
<!--start-date-piker-->

	<ul style="margin-top: 10px;">
		<form method="POST" action="<?php echo $option['link'];?>/controller/search_room_result.php">		
		<li  class="col-lg-4">
			<h5>Ngày nhận phòng :</h5>
			<input id="dpd1" style="background: #fff;  border: 1px solid #0098DA !important;border-radius: 4px !important; width:100%;  padding : 7px 0; padding-left:30px; color: #0098da; background-image: url('images/calendar.png');background-position: center left; background-repeat: no-repeat;" type="text" class="span2 date_book" name="date_check_in" required placeholder="dd/mm/yyyy">

		</li>
		<li  class="col-lg-4">
			<h5>Ngày trả phòng:</h5>						
			<input id="dpd2" style="background: #fff;  border: 1px solid #0098DA !important;border-radius: 4px !important; width:100%; padding : 7px 0; padding-left:30px; color: #0098da; background-image: url('images/calendar.png');background-position: center left; background-repeat: no-repeat;" type="text" class="span2 date_book" name="date_checkout" required placeholder="dd/mm/yyyy">							
		</li>
		<li class="col-lg-4">
			<h5>Loại phòng</h5>
				<select style="background: #fff !important;border: 1px solid #0098DA !important;border-radius: 4px !important; width:100%; color: #0098da !important;" name="type_room" required>
					<?php foreach ($room_types as $room_type):;?>
						<option style="color: #0098da !important; " value="<?php echo $room_type['id'];?>"><?php echo $room_type['name'];?></option>
					<?php endforeach;?>
				</select>
		</li>
		<div class="clearfix"></div>
		<li class="col-lg-12 " style="margin-top:20px; margin-bottom: 20px;">
			<button type="submit" class="btn-book btn btn-info pull-right">Tìm Phòng</button>
		</li>
		</form>
	</ul>
</div> 	

</div>
</div>
</body>

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
</html>