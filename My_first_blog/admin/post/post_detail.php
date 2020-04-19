<?php
require_once("../../connection.php");

$id = $_GET['id'];

// Cau lenh truy van "Danh muc"
$query_post = "SELECT * FROM posts WHERE id =".$id;

// Thuc thi CSDL
$post = $conn -> query($query_post) -> fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">Zent - Education And Technology Group</h3>
		<h3 align="center">Post Detail</h3>
		<hr>
		<h1>Title: <?= $post['title']?></h2>
		<h2><em>Description: <?= $post['description']?></em></h2>
		<h2>Thumbnail: <img src="../../img/<?= $post['thumbnail']?>"></h2>
		<p><h2>Contain:</h2> </br><?= $post['contain']?></p>
	</div>
</body>