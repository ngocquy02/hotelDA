<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	require_once('menu.php');
	
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
	<form method="POST" class="col-sm-9 col-lg-10">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Cài đặt
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên khách sạn</label>
								<input type="text" class="form-control" id="sel10">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel11">Số tầng</label>
								<input type="number" min="1" value="1" class="form-control" id="sel11">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel12">Số phòng mỗi tầng</label>
								<input type="number" min="5" value="5" class="form-control" id="sel12">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel13">Số điện thoại bàn</label>
								<input type="tel"  class="form-control" id="sel13">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel14">Di động</label>
								<input type="tel"  class="form-control" id="sel14">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel15">Email</label>
								<input type="email" class="form-control" id="sel15">
				              </div>
				               <div class="col-md-6 form-group">
				                <label for="sel16">Fax</label>
								<input type="tel" class="form-control" id="sel16">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel17">Số nhân viên</label>
								<input type="number" min="1" value="5" class="form-control" id="sel17">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel18">Địa chỉ</label>
								<input type="text" class="form-control" id="sel16">
				              </div>
				              <div class="col-md-6 form-group">
				                <label for="sel19">Thành phố</label>
								<select type="password" class="form-control" id="sel16">
									<option>Thành phố</option>
									<?php foreach ($adress as $adresss):;?>
									<option value="<?php echo $adresss['id'];?>" ><?php echo $adresss['name'];?></option>
									<?php endforeach?>
								</select>
				              </div>
				              <div class="row">
								<div class="col-md-5">
								</div> 
									<div class="container col-md-2">

										<!-- Trigger the modal with a button -->
										<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lưu thông tin cài đặt</button>

										<!-- Modal -->
											<div class="modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">

												<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Thông báo</h4>
														</div>
														<div class="modal-body">
															<h3>Bạn có muốn lưu thông tin cài đặt</h3>
														</div>
														<div class="modal-footer">
															<input type="submit" type="submit" class="btn btn-default" data-dismiss="modal" value="Sửa">
														</div>
													</div>

												</div>
											</div>

										</div>
  
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
