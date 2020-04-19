<?php

require_once("../../connection.php");

$id = $_GET['id'];

$query = "DELETE FROM authors WHERE id =".$id;
$status = $conn -> query($query);

if ($status) {
	setcookie("thongbao","Xoá thành công",time()+3);
}
else {
	setcookie("thongbao","Xoá không thành công",time()+3);
}

header("Location: author_list.php");

?>