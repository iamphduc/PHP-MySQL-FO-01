<?php
require_once("connection.php");

// Cau lenh truy van "Danh muc"
$query_category = "SELECT * FROM categories limit 4";

// Thuc thi CSDL
$result_categories = $conn -> query($query_category);

// Tao 1 mang de chua CSDL
$categories = array();
while($row = $result_categories -> fetch_assoc()) {
	$categories[] = $row;
}

// Lay id bai viet
$id = $_GET['id'];
// Lay category bai viet
$cate_name = $_GET['category'];

// Cau lenh truy van 3 bai viet
$query_posts = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 AND p.category_id =".$id." ORDER BY p.created_at desc limit 3";

$result_posts = $conn -> query($query_posts);

$first_post = $result_posts -> fetch_assoc();

$posts = array();
while($row = $result_posts -> fetch_assoc()) {
	$posts[] = $row;
}

// Cau lenh truy van toi da 5 bai viet
$query_posts5 = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 AND p.category_id =".$id." ORDER BY p.created_at limit 3,5";

$result_posts5 = $conn -> query($query_posts5);

$posts5 = array();
while($row = $result_posts5 -> fetch_assoc()) {
	$posts5[] = $row;
}

// 5 bai MOST READ moi nhat
$query_mostRead = "SELECT p.*, c.title AS 'category' FROM posts p LEFT JOIN categories c ON p.category_id = c.id WHERE p.status = 1 AND p.category_id =".$id." ORDER BY p.created_at desc limit 5";
$result_mostRead = $conn -> query($query_mostRead);

$mostReads = array();
while ($row = $result_mostRead -> fetch_assoc()) {
	$mostReads[] = $row;
}
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>My First Blog | PHP-mySQL-F0-01</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
		<!-- Header -->
		<header id="header">
			<?php require_once("MainNav.php")?>
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li><?= $cate_name?></li>
							</ul>
							<h1><?= $cate_name?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.html"><img src="<?= $first_post['thumbnail']?>" alt="" width ="500" height="500"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?= $first_post['category']?></a>
											<span class="post-date"><?= $first_post['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?= $first_post['id'] ?>&category_id=<?= $first_post['category_id']?>"><?= $first_post['title']?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
										
							<!-- post -->
							<?php foreach($posts as $post) { ?>
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.html"><img src="<?= $post['thumbnail']?>" alt="" width ="300" height="300"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?= $post['category']?></a>
											<span class="post-date"><?= $post['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?= $post['id'] ?>&category_id=<?= $post['category_id']?>"><?= $post['title']?></a></h3>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- /post -->

							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->
							
							<!-- post -->
							<?php foreach($posts5 as $post) {?>
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.html"><img src="<?= $post['thumbnail']?>" alt="" width ="300" height="200"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="#"><?= $post['category']?></a>
											<span class="post-date"><?= $post['created_at']?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php?id=<?= $post['id'] ?>&category_id=<?= $post['category_id']?>"><?= $post['title']?></a></h3>
										<p><?= $post['description']?></p>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- /post -->
														
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
							<?php foreach($mostReads as $mostRead) {?>
							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="<?= $mostRead['thumbnail']?>" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php?id=<?= $mostRead['id']?>&category_id=<?= $mostRead['category_id']?>"><?= $mostRead['title']?></a></h3>
								</div>
							</div>
							<?php }?>
						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">Jan 2018</a></li>
									<li><a href="#">Feb 2018</a></li>
									<li><a href="#">Mar 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<li><a href="category.html">Web Design</a></li>
										<li><a href="category.html">JavaScript</a></li>
										<li><a href="category.html">Css</a></li>
										<li><a href="category.html">Jquery</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
