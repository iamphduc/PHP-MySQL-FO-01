<?php

require_once("../../connection.php");

$id = $_POST['id'];

$name = $_POST['name'];

$email = $_POST['email'];

$password_new = md5($_POST['password_new']);

$query = "UPDATE authors SET name = '".$name."', email = '".$email."', password='".$password_new."' WHERE id =".$id;
$status_query = $conn -> query($query);
	
if ($status_query) {
	setcookie("thongbao","Cập nhật thành công !!!",time()+3);
	header("Location: author_list.php");
} else {
	setcookie("thongbao","Cập nhật không thành công !!!",time()+3);
	header("Location: author_edit.php?id=".$id);
}

?>