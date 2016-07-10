<?php
	require_once('admin/include/config.php');
	require_once('admin/include/admin_db.php');
	require_once('admin/include/get_list.php');
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
<head>
<title>Blue River Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nhà nghỉ giá rẽ, Motel giá rẻ, Cheap motel, Blue river, Blueriverdn, Nhà khách giá rẻ tại đà nẵng, Nhà nghỉ đà nẵng, Nhà khách đà nẵng, Nhà nghỉ giá rẻ đà nẵng," />
<meta name="description" content="Nhà nghỉ giá rẽ tại đà nẵng, tiện nghi sang trọng, thoáng mát sạch sẽ, vị trí đắc địa" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
<!--animated-css-->
<link href="<?php echo $plink;?>admin/img/favicon.ico" rel="shortcut icon">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="admin/css/system.css" rel="stylesheet">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="images/icon1.png" type="image/x-icon" rel="shortcut icon">
<link href="admin/css/datepicker.css" rel="stylesheet" />
<script src="admin/js/jquery-1.12.4.min.js"></script>
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/js/bootstrap-datepicker.js"></script>

<link href="admin/css/styles.css" rel="stylesheet">
 <!-- script-for-menu -->
<script>
	$( "span.menu" ).click(function() {
	$( "ul.cl-effect-1" ).slideToggle( 300, function() {
	// Animation complete.
	});
	});
</script>
<!-- script-for-menu -->	
<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
</script>

<style type="text/css">

	.btn-book{
	color: #0098da !important; 
	background-color: #fff !important; 
	border:1px #0098da solid;
	transition: all 0.5s;	
	}
	.btn-book:hover{
	background: #0098da !important;
	color: #fff !important;
	border: 1px #fff solid !important;
	transition: all 0.5s;	
}
</style>

</head>
<body>
<div>
	<?php
		include('include/menu.php');
		include('view/view_booking.php');
		include('view/view_room.php');
	?>
</div>
</body>
</html>