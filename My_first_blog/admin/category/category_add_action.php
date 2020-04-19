<?php

require_once("../../connection.php");

$title = $_POST['title'];
$description = $_POST['description'];

$query = "INSERT INTO categories(title,description) VALUES ('".$title."','".$description."')";
$status_query = $conn -> query($query);

if ($status_query) {
	setcookie("thongbao","Thêm mới thành công !!!",time()+3);
	header("Location: category_list.php"); // Di chuyen tro ve trang category_list
} else {
	setcookie("thongbao","Thêm mới không thành công !!!",time()+3);
	header("Location: category_add.php"); // O lai trang tao moi vi tao moi that bai
}

?>