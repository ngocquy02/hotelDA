<?php
//lưu biến môi trường khi thực hiện upload
if (isset($_FILES['img'])==NULL) {
	echo "Vui lòng chọn ảnh";
}else{
$file  = $_FILES['img'];
$count = count($file['name']);//lấy tổng số file được upload
for($i=0; $i<=$count-1; $i++) {

	 move_uploaded_file($_FILES['img']['tmp_name'][$i],"upload/".$_FILES['img']['name'][$i]);
     $url  = "upload/".$_FILES['img']['name'][$i];
     echo $url;
}
}
?>