<?php


?>

<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-4 main">
	<form method="POST" action ="<?php echo $plink;?>/model/add_service.php" class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="right col-lg-6">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Thêm dịch vụ
				      </header>
				      <div class="panel-body">
				              <div class="col-md-12 form-group">
								<label for="sel10">Tên dịch vụ</label>
								<input type="text" class="form-control" id="sel10" name="name_service" required>
							</div>
							<div class="col-md-12 form-group">
								<label for="sel11">Giá (VND) / 1</label>
								<input type="text" class="form-control" id="sel11" name="price_service" required>
							</div>
							<div class="col-md-12 form-group">
								<label for="sel12">Mô tả</label>
								<textarea type="text" class="form-control" id="sel12" name="description_service" required></textarea>
							</div>
				              
				              <div class="row">
								<div class="col-md-4">
								</div> 
									<button onclick="return confirm('Bạn có muốn thêm dịch vụ?')?true:false;" type="submit" class="col-md-4 btn btn-primary" name="submit">Thêm dịch vụ</button>
								<div class="col-md-4">
								</div>
							</div>
				      </div>
				  </section>
				</div>
				</div>
				</form>
				</div>
				</body>
				</html>
