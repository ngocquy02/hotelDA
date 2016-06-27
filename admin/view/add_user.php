<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	
	require_once('menu.php');
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" action ="<?php echo $plink;?>/model/add_user.php" id="form">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				         Thêm người dùng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="1">Tên</label>
								<input type="text" class="form-control" id="1" name="name" required>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="2">Chức vụ</label>
								<select class="form-control" id="2" name="level" required="">
									<option value="">Chức vụ</option>
									<?php foreach ($levels  as $level ):;?>
									<option value="<?php echo $level['id'];?>"><?php echo $level['name'];?></option>
									<?php endforeach;?>
								</select>
				              </div>
				              <div class="col-md-6 form-group" style="display:none">
								<label for="3">Mã nhân viên</label>
								<input type="text" class="form-control" id="3" name="employee_number" value="<?php echo "MS-".$count;?>">
				              </div>
				              <div class="col-md-6 form-group">
								<label for="4">Giới tính</label>
								<select class="form-control" id="4" name="gender" required="">
									<option value="">Giới tính</option>
									<?php foreach ($genders  as $gender ):;?>
									<option value="<?php echo $gender['id'];?>"><?php echo $gender['gender_name'];?></option>
									<?php endforeach;?>
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
									<?php foreach ($citys  as $city ):;?>
									<option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
									<?php endforeach;?>
								</select>

				              </div>
				                <div class="col-md-6 form-group">
				                <label for="password1">Mật khẩu</label>
								<input type="password" class="form-control" id="password1" required minlength="6" name="password">
				              </div>
				              	<div class="col-md-5">
								</div>			              
									
									<button type="submit" class="col-md-2 btn btn-primary">Thêm</button>
									
								<div class="col-md-5">
								</div>
						</div>
						</section>
				      </div>
						
				
				</div>
				</form>
			</div>