<?php
	require_once('../include/config.php');
	require_once('../include/room_db.php');
	require_once('../include/customer_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('menu.php');
		$orders=get_list_room_order();

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" class="col-sm-12 col-lg-12">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Thông tin đặt phòng
				      </header>
						<div class="panel-body table-responsive">
							<table class="table ">
								<thead>
									<tr>
										<th class="col-md-1">Phòng</th>
										<th class="col-md-2">Tên</th>
										<th class="col-md-1">Đặt phòng</th>
										<th class="col-md-1">Ngày đến</th>
										<th class="col-md-1">Ngày đi</th>
										<th class="col-md-1">Đã ở</th>
										<th class="col-md-1">Dịch vụ</th>
										<th class="col-md-1">Số tiền (VNĐ)</th>
										<th class="col-md-1">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($orders as $order):?>
									<tr>
										<th scope="row"><?php $room=get_room($order['room_id']);echo $room['name'];?></th>
										<td><?php $customer=get_customer_id($order['customer_id']);echo $customer['name'];?></td>
										<td><?php echo date('d/m/Y',strtotime($order['date_order']));?></td>
										<td><?php echo date('d/m/Y',strtotime($order['date_check_in']));?></td>
										<td><?php echo date('d/m/Y',strtotime($order['date_checkout']));?></td>
										<td><?php echo $order['quantity']." Ngày";?></td>
										<td></td>
										<td><?php echo $order['price'];?></td>
										<td>
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/user.php?id=<?php echo $order['id']?>" style="font-size:12px">
													<svg class="glyph stroked clipboard with paper" style="height: 15;width:15;">
													<use xlink:href="#stroked-clipboard-with-paper"/>
													</svg>
													Chi tiết
												</a>
											</li>

										</td>
									</tr>
								<?php endforeach?>
								</tbody>
							</table>
						</div>
					</section>
				</div>
			</div>
	</form>
	</div>
		</body>
		</html>
