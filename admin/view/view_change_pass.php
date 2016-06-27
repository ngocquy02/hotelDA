<?php
	require_once('../include/config.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('menu.php');


?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" id='form' action ="<?php echo $plink;?>/model/pass.php" class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Đổi mật khẩu
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên</label>
								<input type="text" class="form-control" id="sel10" value="<?php echo $_SESSION['name'];?>"  disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel12">Ngày sinh</label>
								<input type="date" class="form-control" id="sel12" value="<?php echo $_SESSION['birth_day'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số chứng minh</label>
								<input type="text" class="form-control" id="sel13" value="<?php echo $_SESSION['passport'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel14">Di động</label>
								<input type="tel" class="form-control" id="sel14" value="<?php echo $_SESSION['phone'];?>" disabled>
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15" value="<?php echo $_SESSION['email'];?>" disabled>
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="se15">Mật khẩu cũ</label>
								<input type="password" class="form-control" id="se15" name="oldpassword" required minlength="6">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="password1">Mật khẩu mới</label>
								<input type="password" class="form-control" id="password1" required minlength="6" name="password">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="password2">Xác nhận mật khẩu</label>
								<input type="password" class="form-control" id="password2" required minlength="6" name="repassword">
								</div>
								</div>
								<div class="col-md-4"></div>
								
								<div class="row">
								<div class="col-md-5">

								</div> 
								<button type="submit" class="col-md-2 btn btn-primary" name="submit">Lưu thông tin</button>

								<div class="col-md-5">
								</div>
								</div>
				  </section>
				</div>
				</div>
				</form>
				</div>
					<script type="text/javascript">
					$("#form").validate({
					rules: {
					oldpassword:{
						required:true,
						minlength:6
					},
					password: {
					required: true,
					minlength: 6
					},
					repassword: {
					required: true,
					minlength: 6,
					equalTo: "#password1"
					},
					},
					messages: {
					password: {
					required: "Bạn chưa nhập thông tin",
					minlength: "Vui lòng hập trên 6 kí tự"
					},
					repassword: {
					required: "Bạn chưa nhập thông tin",
					minlength: "Vui lòng nhập trên 6 kí tự",
					equalTo: "Xác nhận mật khẩu mới chưa đúng"
					},
					oldpassword:{
						required:"Bạn chưa nhập thông tin",
						minlength: "Vui lòng hập trên 6 kí tự"
					},
					}
					});
				</script>
				</body>
				</html>
