<?php


?>

<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-4 main">
	<form method="POST" action ="<?php echo $plink;?>/model/edit_service.php?id=<?php echo $_GET['id'];  ?>" class="col-sm-12 col-lg-12">
			<div class="row">
				<div class="right col-lg-6">
				  <section class="panel">
				      <header class="panel-heading" style="text-align:center">
				          Sửa thông tin dịch vụ
				      </header>
				      <div class="panel-body">
				              <div class="col-md-12 form-group">
								<label for="sel10">Tên dịch vụ</label>
								<input type="text" class="form-control" id="sel10" value="<?php echo $service['name'];?>" name="name_service" required>
							</div>
							<div class="col-md-12 form-group">
								<label for="sel11">Giá (VND) / 1</label>
								<input type="text" class="form-control" id="sel11" value="<?php echo $service['price'];?>" name="price_service" required>
							</div>
							<div class="col-md-12 form-group">
								<label for="sel12">Mô tả</label>
								<textarea type="text" class="form-control" id="sel12" name="description_service" required><?php echo $service['description'];?></textarea>
							</div>
				              
				              <div class="row">
								<div class="col-md-3">
								</div> 
									<button onclick="return confirm('Bạn có muốn sử thông tin dịch vụ?')?true:false;" type="submit" class="col-md-6 btn btn-primary" name="submit">Sửa thông tin dịch vụ</button>
								<div class="col-md-3">
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
