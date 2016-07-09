<?php
	
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Quản lí users
				      </header>
						<div class="panel-body table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Mã NV</th>
										<th class="col-md-2" style="list-style-type: none;text-align:center">Họ tên</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Ngày sinh</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center" >Giới tính</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Số điện thoại</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Email</th>
										<th class="col-md-1" style="list-style-type: none;text-align:center">Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($admin as $users):?>
									<tr>
										<th scope="row" style="list-style-type: none;text-align:center"><?php echo $users['employee_number']?></th>
										<td style="list-style-type: none;text-align:center"><?php echo $users['name']?></td>
										<td type='date' style="list-style-type: none;text-align:center"><?php echo date('d/m/Y',strtotime($users['birth_day']));?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $users['gender'];?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $users['phone']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $users['email']?></td>
										<td class="">
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/user.php?id=<?php echo $users['id']?>" style="font-size:12px">
													<svg class="glyph stroked clipboard with paper" style="height: 15;width:15;">
													<use xlink:href="#stroked-clipboard-with-paper"/>
													</svg>
													Xem
												</a>
												<a onclick="return confirm('Bạn có chắc chắn xóa không?')?true:false;" href="<?php echo $plink;?>/controller/delete.php?id=<?php echo $users['id']?>" style="font-size:12px">
													<svg class="glyph stroked cancel" style="height: 15;width:15;">
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
							<?php if(count($admin)==0)
						{echo 
							'<h3 class="col-lg-12" style="text-align:center;padding-top:20px;color:#f9243f;">Không có dữ liệu</h3>';} ?>
						</div>
					</section>
					<div class="col-md-5">
					</div>			              
						<a href="<?php echo $plink;?>/controller/add_admin.php"">
						<button class="col-md-2 btn btn-primary">Thêm người dùng</button>
						</a>
					<div class="col-md-5">
					</div>
				</div>
			</div>
	</div>
		</body>
		</html>
