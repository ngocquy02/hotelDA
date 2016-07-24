<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery-1.12.4.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<input type="button" value="Print" onclick="window.print()" />
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="text-center">
					Blue River Hotel
				</h2>
				<p class="text-center">
					Địa chỉ:03 Dương Khuê, Đà Nẵng<br>
					Email:songxanhmotel@gmail.com -  ĐT:05113 949545<br>
					Website:http://ezcloud.vn/
				</p>
				<h2 class="text-center">
					HÓA ĐƠN
				</h2>
				<div class="col-xs-12" style="background:black;margin-top:15px;margin-bottom:15px;">
				</div>
				<p class="text-left col-xs-6">
					<strong>Mã đặt phòng :</strong> <?php echo $room_order['id']; ?><br>
					<strong>Tên khách hàng :</strong> <?php echo $customer['name']; ?><br>
					<strong>Địa chỉ :</strong> <?php echo $customer['adress']; ?>
				</p>
				<p class="text-left col-xs-6">
					<strong>Số phòng :</strong> <?php echo $room['name'];?><br>
					<strong>Ngày đến :</strong> <?php echo date('d/m/Y',strtotime($room_order['date_check_in'])); ?><br>
					<strong>Ngày đi :</strong> <?php echo date('d/m/Y',strtotime($room_order['date_checkout'])); ?>
				</p>
				<div class="col-xs-12" style="background:black; margin-top:15px;margin-bottom:15px;">
				</div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>
								STT
							</th>
							<th>
								Ngày
							</th>
							<th>
								Mô tả
							</th>
							<th>
								Số lượng
							</th>
							<th>
								Đơn giá (VNĐ)
							</th>
							<th>
								Thành tiền (VNĐ)
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								1
							</td>
							<td>
								<?php echo date('d/m/Y',strtotime($room_order['date_check_in'])); ?>
							</td>
							<td>
								<?php echo $room['name'];?>
							</td>
							<td>
								<?php echo $room_order['quantity']; ?>
							</td>
							<td>
								<?php echo $room['price'];?>
							</td>
							<td>
								<?php echo $room_order['price']; ?>
							</td>
						</tr>
						<?php foreach ($room_service as $room_service): ?>

						<tr>
							<td>
								
							</td>
							<td>
								
							</td>
							<td>
								<?php $service=get_service($room_service['service_id']);echo $service['name']; ?>
							</td>
							<td>
								<?php echo $room_service['quantity']; ?>
							</td>
							<td>
								<?php echo $room_service['price'];?>
							</td>
							<td>
								<?php echo $room_service['quantity']*$room_service['price']; ?>
							</td>
						</tr>
					<?php endforeach;?>
					</tbody>
					<tfoot>
						<tr class="active">
							<td style="border-right:1px solid #f5f5f5!important;">
								<strong>Tổng cộng : </strong>	
							</td>
							<td style="border-right:1px solid #f5f5f5!important;">
							</td>
							<td style="border-right:1px solid #f5f5f5!important;">
								
							</td>
							<td style="border-right:1px solid #f5f5f5!important;">
							</td>
							<td>
							</td>
							<td>
								<strong><?php $sum=sum_service($_GET['id']); echo $room_order['price'] + $sum['SUM(price*quantity)']; ?></strong>
							</td>
						</tr>
					</tfoot>
					</table>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-12">
				<div class="col-xs-10 col-xs-offset-2" style="margin-bottom: 180px">
					<div class="col-xs-5">
						<strong><h4>THU NGÂN</h4></strong>
					</div>
					<div class="col-xs-5">
						<strong><h4>KHÁCH HÀNG</h4></strong>
					</div>
				</div>
				</div>
				<strong class="clear-fix col-xs-12"><p class="text-center">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi!</p></strong>
			</div>
		</div>
	</div>	
</body>
</html>


