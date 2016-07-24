<?php
	require_once('admin/include/config.php');
	require_once('admin/include/get_list.php');
	require_once('admin/include/customer_db.php');
	require_once('admin/include/room_db.php');
	require_once('admin/link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_POST['type_room'])==NULL) {
		header ("Location: ");
	}
	$rooms=get_list_room();
?>  
<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
<?php
	include('include/menu.php');
?>
<form class="container wrapper-body" style=" width : 100% ; margin: 0;" method="POST" action="/hotelDA/model/send_mail_contact.php">
	<div class="row" style="width:90%; margin: auto;">
	<h2 class="list_room_title" style="text-align:center; margin:20px 0px;">LIÊN HỆ</h2>
	<div class="col-md-12" style="padding: auto 0px; margin:auto;">
        <div class="col-md-6" style="padding-left:0px;">
	        <div class="form-group">
				<label for="1">Tên</label>
				<input type="text" class="form-control" id="1" name="name" required>
	        </div>
	        
	        <div class="form-group">
				<label for="2">Điện Thoại</label>
				<input type="tel" class="form-control" id="2" required name="phone">
	        </div>
	        <div class="form-group">
				<label for="3">Email</label>
				<input type="email" class="form-control" id="3" required name="email">
	        </div>
        </div>
        <div class="form-group col-md-6" style="height:100%; padding-right:0px;">
			<label for="4">Nội Dung</label>
			<textarea class="form-control" id="4" required name="email" style="height:138px;"></textarea>

        </div>
            <input style="margin:10px 0; float:right;" id="button" onclick="return true;"  type="submit" class="btn btn-primary" value="Gửi Đi">

	</div>								
	<iframe class="col-md-12" src="https://www.google.com/maps/d/embed?mid=1-KjZNYslWab9NDLm9fhR00hvwkw" style="height:420px; margin:30px 0;"></iframe>	
	</div>
</form>
	<?php include('include/footer.php'); ?>
</body>
</html>



