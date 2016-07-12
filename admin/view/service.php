<?php
	require_once('../controller/service.php');
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Quản lí dịch vụ
				      </header>
						<div class="panel-body table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Tên dịch vụ</th>
										<th class="col-md-2" style="list-style-type: none;text-align:center">Mô tả</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Giá</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($services as $service):?>
									<tr>
										<th scope="row" style="list-style-type: none; text-align:center;"><?php echo $service['name']?></th>
										<td style="list-style-type: none;text-align:center"><?php echo $service['description']?></td>
										<td type='date' style="list-style-type: none;text-align:center"><?php echo $service['price'];?></td>
										<td class="">
											<li style="list-style-type: none; text-align:center;">
												<a href="<?php echo $plink;?>/controller/edit_service.php?id=<?php echo $service['id']?>" style="font-size:12px">
													<svg class="glyph stroked pencil" style="height: 15;width:15;">
													<use xlink:href="#stroked-pencil"/>
													</svg>
													Sửa
												</a>
												<a onclick="return confirm('Bạn có chắc chắn xóa không?')?true:false;" href="<?php echo $plink;?>/model/delete_service.php?id=<?php echo $service['id']?>" style="font-size:12px;<?php if($_SESSION['level']!=1) {echo "display: none!important;"; };?>">
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
								<?php if(count($services)==0)
						{echo 
							'<h3 class="col-lg-12" style="text-align:center;padding-top:20px;color:#f9243f;">Không có dữ liệu</h3>';} ?>
						</div>
					</section>
					<div class="col-md-5">
					</div>			              
						<a href="<?php echo $plink;?>/controller/add_service.php">
						<button class="col-md-2 btn btn-primary">Thêm dịch vụ</button>
						</a>
					<div class="col-md-5">
					</div>
				</div>
			</div>
	</div>
		</body>
		</html>
