<?php
	require_once('../include/config.php');
	require_once('../include/admin_db.php');
	require_once('../include/customer_db.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
	require_once('menu.php');
	$customers=get_list_customer();
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Quản lí khách hàng
				      </header>
						<div class="panel-body table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Mã khách hàng</th>
										<th class="col-md-2" style="list-style-type: none;text-align:center">Họ tên</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Ngày sinh</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center" >Giới tính</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Số điện thoại</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Email</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Địa chỉ</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($customers as $customer):?>
									<tr>
										<th scope="row" style="list-style-type: none;text-align:center"><?php echo "KH-".$customer['id']?></th>
										<td style="list-style-type: none;text-align:center"><?php echo $customer['name']?></td>
										<td type='date' style="list-style-type: none;text-align:center"><?php echo date('d/m/Y',strtotime($customer['birth_day']));?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $customer['gender'];?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $customer['phone']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $customer['email']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $customer['adress']?></td>
										<td class="">
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/customer.php?id=<?php echo $customer['id']?>" style="font-size:12px">
													<svg class="glyph stroked clipboard with paper" style="height: 15;width:15;">
													<use xlink:href="#stroked-clipboard-with-paper"/>
													</svg>
													Xem
												</a>
												<a href="<?php echo $plink;?>/controller/delete_customer.php?id=<?php echo $customer['id']?>" style="font-size:12px">
													<svg class="glyph stroked cancel" style="height: 15px;width:15px;">
														<use xlink:href="#stroked-cancel"></use>
													</svg>
													Xóa
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
	</div>
		</body>
		</html>
