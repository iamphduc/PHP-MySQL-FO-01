<?php

require_once("../../connection.php");

$name = $_POST['name'];

$email = $_POST['email'];

$status = 0;
if (isset($_POST['status'])) {
	$status = $_POST['status'];
}

$password = $_POST['password'];

// Ma hoa md 5 password
$md5_password = md5($password);

$query = "INSERT INTO authors(name,email,password,status) VALUES ('".$name."','".$email."','".$md5_password."','".$status."')";
$status_query = $conn -> query($query);

if ($status_query) {
	setcookie("thongbao","Thêm mới thành công !!!",time()+3);
	header("Location: author_list.php"); // Di chuyen tro ve trang category_list
} else {
	setcookie("thongbao","Thêm mới không thành công !!!",time()+3);
	header("Location: author_add.php"); // O lai trang tao moi vi tao moi that bai
}

?>