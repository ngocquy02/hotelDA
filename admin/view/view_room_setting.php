<?php
	require_once('../include/config.php');
	require_once('../include/room_db.php');
	require_once('../include/get_list.php');
	require_once('../link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1') {
		header ("Location: $plink");
	}
	require_once('menu.php');
	$rooms=get_list_room();
	
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Quản lí phòng
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
								<?php foreach ($rooms as $room):?>
									<tr>
										<th scope="row" style="list-style-type: none;text-align:center"><?php echo $room['name']?></th>
										<td style="list-style-type: none;text-align:center"><?php $type=get_room_type_id($room['room_type_id']); echo $type['name']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $room['description']?></td>
										<td style="list-style-type: none;text-align:center"><?php echo $room['price'];?></td>
										<td class="">
											<li style="list-style-type: none;">
												<a href="<?php echo $plink;?>/controller/edit_room_setting.php?id=<?php echo $room['id']?>" style="font-size:12px">
													<svg class="glyph stroked pencil" style="height: 15;width:15;">
													<use xlink:href="#stroked-pencil"/>
													</svg>
													Sửa
												</a>
												<a href="<?php echo $plink;?>/model/delete_room.php?id=<?php echo $room['id']?>" style="font-size:12px">
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

						</div>
					</section>
					<div class="col-md-5">
					</div>			              
						<a href="<?php echo $plink;?>/controller/add_room_setting.php"">
						<button class="col-md-2 btn btn-primary">Thêm phòng</button>
						</a>
					<div class="col-md-5">
					</div>
				</div>
			</div>
	</div>
		</body>
		</html>
