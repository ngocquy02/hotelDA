<?php
	
?>  
<!DOCTYPE html>
<html>
<?php include('../include/head.php'); ?>
<body>
<?php
	include('../include/menu.php');
?>
<form class="container wrapper-body" style=" width : 100% ; margin: 0;" method="POST" action="<?php echo $option['link'];?>/model/send_mail_contact.php">
	<div class="row" style="width:90%; margin: auto;">
	<h2 class="list_room_title" style="text-align:center; margin:20px 0px;">Gửi thông tin thành công</h2>
	<div class="text-center" style="height:200px;"><strong><h2></h2></strong> </div>
	</div>
</form>
	<?php include('../include/footer.php'); ?>
</body>
</html>



