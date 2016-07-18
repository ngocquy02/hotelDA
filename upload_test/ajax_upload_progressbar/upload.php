<?php
//lưu biến môi trường khi thực hiện upload
$file  = $_FILES['img'];
$count = count($file['name']);//lấy tổng số file được upload
for($i=0; $i<=$count-1; $i++) {

	 move_uploaded_file($_FILES['img']['tmp_name'][$i],"upload/".$_FILES['img']['name'][$i]);
     $url  = "upload/".$_FILES['img']['name'][$i];
     echo "<img src='".$url."' width='100px' height='100px' /><hr/><br/>";
}
?>