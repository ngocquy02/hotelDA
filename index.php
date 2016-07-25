<?php
	require_once('admin/include/config.php');
	require_once('admin/include/admin_db.php');
	require_once('admin/include/get_list.php');
	require_once('admin/include/room_db.php');
	require_once('admin/link.php');
	$slide=get_list_room();
	$setting=get_setting();
	$view=$setting['view'];
	$view++;
	// update_view('10');
	if (isset($_COOKIE['view'])==NULL) {
		setcookie('view','view', time() + 600);
		update_view($view);
	}
?>
<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
<div class="wrapper-body">
	<?php
		include('include/menu.php');
		include('view/view_booking.php');
		include('view/view_room.php');
?>
<div class="container">

<?php
	include('include/slide.php');
	include('include/lienhe.php');

?>
</div>
	<?php
		include('include/footer.php');
	?>
</div>
</body>
</html>