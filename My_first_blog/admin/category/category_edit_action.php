<?php

require_once("../../connection.php");

$id = $_POST['id'];

$title = $_POST['title'];
$description = $_POST['description'];

$query = "UPDATE categories SET title = '".$title."', description = '".$description."' WHERE id =".$id;
$status_query = $conn -> query($query);

if ($status_query) {
	setcookie("thongbao","Cập nhật thành công !!!",time()+3);
	header("Location: category_list.php");
} else {
	setcookie("thongbao","Cập nhật không thành công !!!",time()+3);
	header("Location: category_edit.php?id=".$id);
}

?>