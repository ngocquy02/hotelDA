<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_SESSION['date_check_in'])==NULL) {
		header ("Location: $plink");
	}
	require_once('menu.php');
	$cities=get_city();
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" action ="<?php echo $plink;?>/model/add_room_order.php?id=<?php echo $_GET['id']?>" id="form">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				         Thông tin đặt phòng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="1">Tên</label>
								<input type="text" class="form-control" id="1" name="name" required>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="">Giới tính</label>
								<select class="form-control" id="4" name="gender" required="">
									<option value="">Giới tính</option>
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="5">Ngày sinh</label>
								<input type="date" class="form-control" id="5" name="birth_day" required>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="6">Số chứng minh</label>
								<input type="text" class="form-control" id="6" required pattern="[0-9]{9}" name="passport">
				              </div>
				              <div class="col-md-6 form-group">
								<label for="7">Điện thoại</label>
								<input type="tel" class="form-control" id="7" required name="phone">
				              </div>
				              <div class="col-md-6 form-group">
								<label for="8">Email</label>
								<input type="email" class="form-control" id="8" required name="email">
				              </div>
				              <div class="col-md-6 form-group">
								<label for="9">Địa chỉ</label>
								<input type="text" class="form-control" name="adress" id="9" required>
				              </div>
				                 <div class="col-md-6 form-group">
								<label for="10">Thành phố</label>
								<select class="form-control" id="10" name="city" required="">
									<option value="">Thành phố</option>
									<?php foreach ($cities  as $city ):;?>
									<option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
									<?php endforeach;?>
								</select>
				              </div>
				              	<div class="col-md-5">
								</div>			              
									<button type="submit" class="col-md-2 btn btn-primary">Đặt phòng</button>
								<div class="col-md-5">
								</div>
						</div>
						</section>
				      </div>
						
				
				</div>
				</form>
			</div>