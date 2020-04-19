<?php

require_once("../../connection.php");

// Upload file
$target_dir = "../../img/"; // Thu muc chua cac file anh de upload
$thumbnail = ""; // Bien luu tru anh

// Lay anh: ../../img/'ten_anh'.'phan_mo_rong'
$target_file = $target_dir.basename($_FILES["thumbnail"]["name"]); // path cua anh

$status_upload_img = move_uploaded_file($_FILES["thumbnail"]["tmp_name"],$target_file);

if($status_upload_img) { // Neu upload khong bi loi
	$thumbnail = basename($_FILES["thumbnail"]["name"]);
}

$status = 0;

if(isset($_POST['status'])) {
	$status = $_POST['status'];
}

$title = $_POST['title'];

$description = $_POST['description'];

$content = $_POST['content'];

$category_id = $_POST['category_id'];

$author_id = 1;

date_default_timezone_set('Asia/Ho_Chi_Minh');

$created_at =  date('Y-m-d H:i:s');

$query = "INSERT INTO posts(title,description,content,thumbnail,category_id,author_id,status,created_at) VALUES ('".$title."','".$description."','".$content."','".$thumbnail."','".$category_id."','".$author_id."','".$status."','".$created_at."')";
$status_query = $conn -> query($query);

if ($status_query) {
	setcookie("thongbao","Thêm mới thành công !!!",time()+3);
	header("Location: post_list.php"); // Di chuyen tro ve trang post_list
} else {
	setcookie("thongbao","Thêm mới không thành công !!!",time()+3);
	header("Location: post_add.php"); // O lai trang tao moi vi tao moi that bai
}

?>