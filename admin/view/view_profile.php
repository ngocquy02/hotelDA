<?php
	
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" action ="<?php echo $plink;?>/model/profile.php" class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Thông tin cá nhân
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên</label>
								<input type="text" class="form-control" id="sel10" value="<?php echo $admin['name'];?>" name="name" required>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel11">Giới tính</label>
								<select class="form-control" id="sel11" name="gender" required="">
									<option value="">Giới tính</option>
									<option value="Nam"<?php if ($admin['gender']=="Nam") {
										echo "selected";
									}?> >Nam</option>
									<option value="Nữ" <?php if ($admin['gender']=="Nữ") {
										echo "selected";
									}?>>Nữ</option>
								</select>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel12">Ngày sinh</label>
								<input type="date" class="form-control" id="sel12" value="<?php echo $admin['birth_day'];?>" name="birth_day" required min="1900-01-01">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số chứng minh</label>
								<input type="text" class="form-control" id="sel13" value="<?php echo $admin['passport'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel14">Di động</label>
								<input type="tel" class="form-control" id="sel14" value="<?php echo $admin['phone'];?>" name="phone" pattern="[0-9]{10,11}" required>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15" value="<?php echo $admin['email'];?>" name="email" disabled>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Địa Chỉ</label>
								<input type="text" class="form-control" id="sel16" value="<?php echo $admin['adress'];?>" name="adress" required>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel17">Thành phố</label>
								<select class="form-control" id="sel17" name="city" required>
									<option value="">Thành phố</option>
									<?php foreach ($cities as $city):;?>
									<option value="<?php echo $city['id'];?>" <?php if ($admin['city_id']==$city['id']) {
										echo "selected";};?>><?php echo $city['name'];?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<button type="submit" class="col-md-2 btn btn-primary" name="submit">Lưu thông tin</button>
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
