<?php
	

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	
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
										<th class="text-center">Trạng thái</th>
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
										<td class="text-center">
											<?php $date=strtotime("now");$dd=strtotime($order['date_check_in']);
												if ($date<$dd && $date) {
													echo "Đã đặt phòng";
												}else{
													if ($order['status_id']==1) {
														echo "Đã có khách ở";
													}if($order['status_id']==0){echo "Đã trả phòng";}
												}
											?>		

										</td>
										<td><?php echo $order['quantity'].' Ngày';?></td>
										<td>												
											<a href="<?php echo $plink;?>/controller/add_service_order.php?id=<?php echo $order['id'];?>" style="font-size:12px">
												<svg class="glyph stroked plus sign" style="height: 15;width:15;">
												<use xlink:href="#stroked-plus-sign"/>
												</svg>
											Thêm
											</a>
										</td>
										<td><?php $sum=sum_service($order['id']); echo $sum['SUM(price*quantity)'] +$order['price'];?></td>
										<td>
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/detail.php?id=<?php echo $order['id']?>" style="font-size:12px">
													<svg class="glyph stroked clipboard with paper" style="height: 15;width:15;">
													<use xlink:href="#stroked-clipboard-with-paper"/>
													</svg>
													Chi tiết 
												</a>
											</li>
											<a onclick="return confirm('Bạn có chắc chắn xóa không?')?true:false;" href="<?php echo $plink;?>/model/delete_order.php?id=<?php echo $order['id']?>" style="font-size:12px">
													<svg class="glyph stroked cancel" style="height: 15;width:15;">
														<use xlink:href="#stroked-cancel"></use>
													</svg>
													Xóa
												</a>

										</td>
									</tr>
								<?php endforeach?>
								</tbody>
							</table>
							<?php if(count($orders)==0)
						{echo 
							'<h3 class="col-lg-12" style="text-align:center;padding-top:20px;color:#f9243f;">Không có dữ liệu</h3>';} ?>
						</div>
					</section>
				</div>
			</div>
	</div>
		</body>
		</html>
