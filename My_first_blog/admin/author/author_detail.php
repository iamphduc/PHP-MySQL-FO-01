<?php
require_once("../../connection.php");

$id = $_GET['id'];

$query_author = "SELECT * FROM authors WHERE id =".$id;

// Thuc thi CSDL
// O day chi su dung cho 1 ban ghi nen khong can tao mang
$author = $conn -> query($query_author) -> fetch_assoc();

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
		<h3 align="center">Author Detail</h3>
		<hr>
		<h1>Name: <?= $author['name']?></h2>
		<h2><em>Email: <?= $author['email']?></em></h2>
	</div>
</body>