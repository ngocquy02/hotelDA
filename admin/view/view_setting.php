<?php
	require_once('../include/config.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('menu.php');
	$cities=get_city();
	$setting=get_setting();
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
	<form method="POST" class="col-sm-9 col-lg-10" action ="<?php echo $plink;?>/model/setting.php">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Cài đặt
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên khách sạn</label>
								<input type="text" class="form-control" id="sel10" name="title" value='<?php echo $setting['title']?>'>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số điện thoại</label>
								<input type="tel"  class="form-control" id="sel13" name="phone" value="<?php echo $setting['phone'];?>">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15" name="email" value="<?php echo $setting['email'];?>">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Fax</label>
								<input type="tel" class="form-control" id="sel16" name="fax" value="<?php echo $setting['fax'];?>">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel18">Địa chỉ</label>
								<input type="text" class="form-control" id="sel16" name="adress" value="<?php echo $setting['adress'];?>">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel19">Thành phố</label>
								<select class="form-control" id="sel19" name="city_id" required>
									<option value="">Thành phố</option>
									<?php foreach ($cities as $city):;?>
									<option value="<?php echo $city['id'];?>" <?php if ($setting['city_id']==$city['id']) {
										echo "selected";};?>><?php echo $city['name'];?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<button type="submit" class="col-md-2 btn btn-primary">Sửa thông tin cài đặt</button>
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
