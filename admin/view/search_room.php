<?php
	require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../include/customer_db.php');
	require_once('../include/room_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}

	require_once('menu.php');
	$room_type=get_list_room();
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
									<option value="<?php echo $type['room_type'];?>"><?php echo $type['room_type']?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Ngày đến</label>
								<input type="date" class="form-control" id="sel15" name="date_check_in" required>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Ngày đi</label>
								<input type="date" class="form-control" id="sel16" name="date_checkout" required>
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
				</body>
				</html>
