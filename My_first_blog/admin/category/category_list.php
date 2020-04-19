<?php

require_once("../../connection.php");

// Cau lenh truy van "Danh muc"
$query_categories = "SELECT * FROM categories";

// Thuc thi CSDL
$result_categories = $conn -> query($query_categories);

// Tao 1 mang de chua CSDL
$categories = array();
while($row = $result_categories -> fetch_assoc()) {
	$categories[] = $row;
}

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
		<h3 align="center">Post List</h3>
		<a href="category_add.php" type="button" class="btn btn-primary">Thêm mới</a>
		<?php if (isset($_COOKIE['thongbao'])) {?>
		<div class="alert alert-success">
			<strong>Thành công! </strong> <?= $_COOKIE['thongbao']?>
		</div>
		<?php } ?>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Title</th>
					<th scope="col">Description</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($categories as $category) { ?>
				<tr>
					<th scope="row"><?= $category['id']?></th>
					<td><?= $category['title']?></td>
					<td><?= $category['description']?></td>
					<td>
						<a href="category_detail.php?id=<?= $category['id']?>" type="button" class="btn btn-default">Xem</a>
						<a href="category_edit.php?id=<?= $category['id']?>" type="button" class="btn btn-success">Sửa</a>
						<a href="category_delete.php?id=<?= $category['id']?>" type="button" class="btn btn-warning">Xóa</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
    </div>
</body>
</html>