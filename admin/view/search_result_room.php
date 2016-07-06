<?php
	
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Đặt phòng
				      </header>
						<div class="panel-body table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Tên phòng</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Loại phòng</th>
										<th class="col-md-5" style="list-style-type: none;text-align:center">Mô tả</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center" >Giá (VNĐ)</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center" >Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($get_result_search as $room):?>
									<tr>
										<th scope="row" style="list-style-type: none;text-align:center"><?php echo $room['name']?></th>
										<td style="list-style-type: none;text-align:center"><?php $type = get_room_type_id($room['room_type_id']);echo $type['name'] ?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $room['description']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $room['price'];?></td>
										<td class="">
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/add_room_order.php?id=<?php echo $room['id']?>" style="font-size:12px">
													<svg class="glyph stroked pen tip" style="height: 15;width:15;">
													<use xlink:href="#stroked-pen-tip"/>
													</svg>
													Đặt phòng
												</a>
											</li>
										</td>
									</tr>
								<?php endforeach?>
								</tbody>
							</table>
							<?php if(count($get_result_search)==0)
						{echo 
							'<h3 class="col-lg-12" style="text-align:center;padding-top:20px;color:#f9243f;">Không có dữ liệu</h3>';} ?>
						</div>
					</section>
				</div>
			</div>
	</div>
		</body>
		</html>
