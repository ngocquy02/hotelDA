<?php 
	
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" action ="<?php echo $plink;?>/model/profile.php" class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          <h2>Thông tin phòng</h2>
				      </header>
				      <div class="panel-body">
				              <div class="col-md-6 form-group">
								<h4>Tên khách hàng : <?php echo $customer['name']; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Giới tính : <?php echo $customer['gender']; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Ngày sinh : <?php echo date('d/m/Y',strtotime($customer['birth_day'])) ; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Số chứng minh : <?php echo $customer['passport']; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Địa chỉ : <?php echo $customer['adress']; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Email : <?php echo $customer['email']; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Tình trạng phòng : 
									<?php 
												if ($room_order['status_id']==0) {
													echo "Chưa thanh toán";
												}else{
													if ($room_order['status_id']==1) {
														echo "Đã thanh toán";
													}
												}
											?>		
								</h4>
				              </div>
				              <div class="col-md-6 form-group"> 
								<h4>Ngày đặt : <?php echo date('d/m/Y',strtotime($room_order['date_order'])) ; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Ngày đến : <?php echo date('d/m/Y',strtotime($room_order['date_check_in'])) ; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Ngày đi : <?php echo date('d/m/Y',strtotime($room_order['date_checkout'])) ; ?></h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Số ngày đã ở : <?php echo $room_order['quantity']; ?> Ngày</h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Số tiền : <?php echo $room_order['price']; ?> VNĐ</h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Dịch vụ đã dùng :
								<?php foreach ($room_service as $room_service): ?>
								 <?php $service=get_service($room_service['service_id']); echo $service['name'].","; ?>
								<?php endforeach;?>
								</h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h4>Số tiền : 
								<?php foreach ($r_service as $r_service): ?>
									<?php echo $r_service['price']."(VNĐ)" ."&nbsp;X&nbsp;". $r_service['quantity'].",";?>
								<?php endforeach;?>

								</h4>
				              </div>
				              <div class="col-md-6 form-group">
								<h3>Số tiền phải thanh toán </h3>
				              </div> 
				              <div class="col-md-6 form-group">
								<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
									<?php $sum=sum_service($room_order['id']);
										echo $room_order['price'] + $sum['SUM(price*quantity)'] . "&nbsp;(VNĐ)";
									?>
								</h3>
				              </div>

				       </div>
				       <div class="col-md-4"></div>
				           <a href="<?php echo $plink;?>/model/pay.php?id=<?php echo $_GET['id'];?>" onclick="return confirm('Thanh toán cho khách hàng?')?true:false;" type="submit" class="col-md-2 btn btn-primary" style=" margin-top:10px;<?php if ($room_order['status_id']==1) {
													echo "display: none;";
												} ?>">Thanh toán</a>
				           <a type="submit" href="<?php echo $plink;?>/controller/bill.php?id=<?php echo $_GET['id'];?>" class="col-md-2 btn btn-primary" style="margin-left:10px; margin-top:10px;" target="blank">In hóa đơn</a>   
				  </section>
				</div>
				</div>
				</form>
				</div>
				</body>
				</html>
