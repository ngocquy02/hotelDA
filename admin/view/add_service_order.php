<?php
	

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" class="col-sm-12 col-lg-12">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Thêm dịch vụ
				      </header>
						<div class="panel-body table-responsive">
							<table class="table ">
								<thead>
									<tr>
										<th class="col-md-3">Tên dịch vụ</th>
										<th class="col-md-3">Mô tả </th>
										<th class="col-md-2">Giá / 1</th>
										<th class="col-md-2">Số lượng</th>
										<th class="col-md-2">Tùy chọn</th>
										
									</tr>
								</thead>
								<tbody>
								<?php foreach ($services as $service):?>
									<form method="POST" action="<?php echo $plink;?>/model/add_service_order.php?id=<?php echo $service['id']?>">
									<tr>
										<th scope="row"><?php echo $service['name']; ?></th>
										<td><?php echo $service['description']; ?></td>
										<td><?php echo $service['price']; ?></td>
										<td><input type="number" name="quantity"></td>
										<td>												
											<button onclick="return confirm('Bạn có muốn thêm dịch vụ?')?true:false;" style="color:#30a5ff;">
												<svg class="glyph stroked plus sign" style="height: 15;width:15;">
												<use xlink:href="#stroked-plus-sign"/>
												</svg>
											Thêm<?php $_SESSION['room_order_id']=$_GET['id'];$_SESSION['price']=$service['price'];?>
											</button>
										</td>
									</tr>
									</form>
								<?php endforeach?>
								</tbody>
							</table>
							<?php if(count($services)==0)
						{echo 
							'<h3 class="col-lg-12" style="text-align:center;padding-top:20px;color:#f9243f;">Không có dữ liệu</h3>';} ?>
						</div>
					</section>
				</div>
			</div>
	</form>
	</div>
		</body>
		</html>
