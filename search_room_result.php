<?php
	require_once('admin/include/config.php');
	require_once('admin/include/get_list.php');
	require_once('admin/include/customer_db.php');
	require_once('admin/include/room_db.php');
	require_once('admin/link.php');
	session_start();

	$rooms=get_list_room();

	$date_in = $_POST['date_check_in'];
	$date_out = $_POST['date_checkout'];
	// echo $date_in;
	// echo $date_out;
	// die;
	$get_result_search=get_result_search($date_in,$date_out,$_POST['type_room']);
	// $_SESSION['date_check_in']=$_POST['date_check_in'];
	// $_SESSION['date_checkout']=$_POST['date_checkout'];
	// var_dump($date_in);die;


	$_SESSION['date_check_in']=$date_in;
	$_SESSION['date_checkout']=$date_out;

	$_SESSION['type_room']=$_POST['type_room'];
?>  
<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
<?php
	include('include/menu.php');
?>
<div class="container wrapper-body" style="width:100%;">
	<div class="row" style="width:90%; margin:20px 5% 5% 60px;">
	<h2 class="text-success list_room_title" style="text-align:center; margin:20px 0px;">KẾT QUẢ TÌM KIẾM</h2>
	<?php foreach ($get_result_search as $room):;?>
		<div class="col col-sm-4 room">
			<article class="room_detail">
				<div class="item-image" >
					<img style="width: 100%;" itemprop="thumbnailUrl" alt="" src="images/room/phong201.png">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p><?php $type=get_room_type_id($room['room_type_id']);echo $type['name']; ?></p>
						</div>
						<div class="room_price pull-right">
							<p ><?php echo $room['price'];?><sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p><?php echo substr($room['description'],0,150)." ... ";?></p>
					</div>
					<div class="clearfix"></div>
					<div class="room_button" >
						<a class="btn-book btn btn-info" href="./order_room.php?room_id=<?php echo $room['id']?>"><span>Đặt ngay</span></a>
					</div>
				</div>
			</article>
		</div>
	<?php endforeach;?>										
	</div>
</div>
	<?php include('include/footer.php'); ?>
</body>
</html>



