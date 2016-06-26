<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	require_once('menu.php');

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				         Thông tin chi tiết người dùng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Chức vụ</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $levels['name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Mã nhân viên</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['employee_number'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Giới tính</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $genders['gender_name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Ngày sinh</label>
								<input type="date" class="form-control" id="sel10" value='<?php echo $users_admin['birth_day'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Số chứng minh</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['passport'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Điện thoại</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['phone'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Email</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['email'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Địa chỉ</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $users_admin['adress'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Thành phố</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $citys['name'];?>' disabled>
				              </div>	
				              	<div class="col-md-5">
								</div>			              
									<a href="<?php echo $plink;?>/controller/users.php"">
									<button class="col-md-2 btn btn-primary">Trở về</button>
									</a>
								<div class="col-md-5">
								</div>
						</div>
						</section>
				      </div>
						
				
				</div>
			</div>