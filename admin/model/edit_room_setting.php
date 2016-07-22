<?php
		require_once('../include/config.php');
        require_once('../link.php');
        require_once('../include/room_db.php');
		session_start();
		if (isset($_SESSION['email'])==NULL || $_SESSION['level']!='1' || isset($_GET['id'])==NULL) {
			header ("Location: $plink");
	}

	if($_FILES['hinhanh']['name'] != NULL){ // Đã chọn file
        // Tiến hành code upload file
			if($_FILES['hinhanh']['type'] == "image/jpeg"
			|| $_FILES['hinhanh']['type'] == "image/png"
			|| $_FILES['hinhanh']['type'] == "image/gif")
			{
			// là file ảnh
			// Tiến hành code upload    
					// file hợp lệ, tiến hành upload
					$path = "../images/room/"; // file sẽ lưu vào thư mục data
					$tmp_name = $_FILES['hinhanh']['tmp_name'];
					$name_img = $_FILES['hinhanh']['name'];
					$type = $_FILES['hinhanh']['type']; 
					$size = $_FILES['hinhanh']['size']; 
					
					// Upload file
					move_uploaded_file($tmp_name,$path.$name_img);
				  update_room($_GET['id'],$_POST['type_room'],$name_img,$_POST['description'],$_POST['price']);	
				header ("Location: $plink/controller/room_setting.php");
				}
    				echo "<h1>Lỗi khi tải ảnh</h1><br><a href='$plink/controller/edit_room_setting.php?id=".$_GET['id']."'"."><h4>Trở về</h4></a>";
				}
   

	?>
   
    
    
	