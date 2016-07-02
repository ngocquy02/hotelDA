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
<title>Nhà nghỉ giá rẻ đà nẵng Blue River Motel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nhà nghỉ giá rẽ, Motel giá rẻ, Cheap motel, Blue river, Blueriverdn, Nhà khách giá rẻ tại đà nẵng, Nhà nghỉ đà nẵng, Nhà khách đà nẵng, Nhà nghỉ giá rẻ đà nẵng," />
<meta name="description" content="Nhà nghỉ giá rẽ tại đà nẵng, tiện nghi sang trọng, thoáng mát sạch sẽ, vị trí đắc địa" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
<!--animated-css-->
<link href="admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $plink;?>admin/img/favicon.ico" rel="shortcut icon">
<link href="admin/css/styles.css" rel="stylesheet">
<link href="admin/css/system.css" rel="stylesheet">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="images/icon1.png" type="image/x-icon" rel="shortcut icon">
<link type="text/css" rel="stylesheet" href="admin/css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="admin/css/JFFormStyle-1.css" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="admin/css/jquery-ui.css" />
<script src="admin/js/jquery.min.js"></script>
<script src="admin/js/jquery-ui.js"></script>
<script src="admin/js/wow.min.js"></script>
<script type="text/javascript" src="admin/js/move-top.js"></script>
<script type="text/javascript" src="admin/js/easing.js"></script>
<script>
	$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
	});
 </script>
<script type="text/javascript" src="admin/js/JFCore.js"></script>
<script type="text/javascript" src="admin/js/JFForms.js"></script>

<script type="text/javascript">
(function() {
JC.init({
	domainKey: ''
});
})();
</script>

<script>
 	new WOW().init();
</script>
<!--/animated-css-->

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

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

</head>
<body>
<div>
	<?php
		include('include/menu.php');
		include('view/booking.php');
	?>
</div>
</body>
</html>