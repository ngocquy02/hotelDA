<?php
	

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				         Thông tin chi tiết Khách hàng
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<label for="sel10">Tên</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $customer['name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Chức vụ</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $level['name'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Mã khách hàng</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo "KH-".$customer['id'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Giới tính</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $customer['gender'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Ngày sinh</label>
								<input type="date" class="form-control" id="sel10" value='<?php echo $customer['birth_day'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Số chứng minh</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $customer['passport'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Điện thoại</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $customer['phone'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Email</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $customer['email'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Địa chỉ</label>
								<input type="text" class="form-control" id="sel10" value='<?php echo $customer['adress'];?>' disabled>
				              </div>
				              <div class="col-md-6 form-group">
								<label for="sel10">Thành phố</label>
								<input type="text" class="form-control" id="sel10" value='<?php $city=get_city_id($customer['city_id']); echo $city['name'] ;?>' disabled>
				              </div>	
				              	<div class="col-md-5">
								</div>			              
									<a href="<?php echo $plink;?>/controller/customers.php"">
									<button class="col-md-2 btn btn-primary">Trở về</button>
									</a>
								<div class="col-md-5">
								</div>
						</div>
						</section>
				      </div>
						
				
				</div>
			</div>