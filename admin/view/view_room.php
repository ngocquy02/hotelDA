<?php
	require_once('../include/driver.php');
	session_start();
	if (isset($_SESSION['email'])==NULL) {
		header ("Location: $plink");
	}
		require_once('menu.php');

?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<form method="POST" class="col-sm-12 col-lg-12">
			<div class="row col-md-12">
				<div class="right col-lg-12">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Phòng
				      </header>
						<div class="panel-body table-responsive">
							<table class="table ">
								<thead>
									<tr>
										<th class="col-md-1">Phòng</th>
										<th class="col-md-1">Mã khách hàng</th>
										<th class="col-md-2">Tên</th>
										<th class="col-md-1">Ngày đến</th>
										<th class="col-md-1">Ngày đi</th>
										<th class="col-md-1">Tiền thanh toán</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($customer as $customers):?>
									<tr>
										<th scope="row"><?php echo $customers['makh'];?></th>
										<td><?php echo $customers['makh'];?></td>
										<td><?php echo $customers['hoten'];?></td>
										<td><?php echo $customers['makh'];?></td>
										<td><?php echo $customers['makh'];?></td>
										<td><?php echo $customers['makh'];?></td>
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
