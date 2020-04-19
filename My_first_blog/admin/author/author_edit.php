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
    <h3 align="center">Update Author</h3>
    <hr>
		<?php if (isset($_COOKIE['thongbao'])) {?>
        <div class="alert alert-warning">
          <strong>Thông báo</strong> <?= $_COOKIE['thongbao']?>
        </div>
		<?php } ?>
        <form action="author_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?= $author['id']?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $author['name']?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $author['email']?>">
            </div>
			<div class="form-group">
                <label for="">Mật khẩu Mới</label>
                <input type="text" class="form-control" id="" placeholder="" name="password_new">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>