<?php
// Thong so ket noi CSDL
$servername = "localhost"; // Dia chi IP cua may chua CSDL

$username = "root"; // Ten dang nhap

$password = ""; // Mat khau

$dbname = "blogs"; // Ten CSDL

// Ket noi CSDL
$conn = new mysqli($servername, $username, $password, $dbname);

// Cau lenh truy van
$query_posts = "SELECT * FROM posts limit 6";
$query_attentions = "SELECT * FROM posts WHERE id >7";
$query_first_attentions = "SELECT * FROM posts WHERE id =7";

// Thuc thi CSDL
$result_posts = $conn -> query($query_posts);
$result_attentions = $conn -> query($query_attentions);
$result_first_attentions = $conn -> query($query_first_attentions);

// Tao 1 mang de chua CSDL
$posts = array();
$attentions = array();

while($row = $result_posts -> fetch_assoc()) {
	$posts[] = $row;
}

while($row = $result_attentions -> fetch_assoc()) {
	$attentions[] = $row;
}

$first_attentions = $result_first_attentions -> fetch_assoc();
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
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="category.html">News</a></li>
							<li><a href="category.html">Popular</a></li>
							<li class="cat-1"><a href="category.html">Web Design</a></li>
							<li class="cat-2"><a href="category.html">JavaScript</a></li>
							<li class="cat-3"><a href="category.html">Css</a></li>
							<li class="cat-4"><a href="category.html">Jquery</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="#">Join Us</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="contact.html">Contacts</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
							</div>
						</div>
					</div>
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Blog mới nhất</h2>
						</div>
					</div>
					<?php foreach($posts as $post) { ?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="<?php echo $post['thumbnail']; ?>" alt="" width="400px" height="350px"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html">Web Design</a>
									<span class="post-date"><?php echo $post['created_at']; ?></span>
								</div>
								<h3 class="post-title"><a href="blog-post.html"><?php echo $post['title']; ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php } ?>

					<div class="clearfix visible-md visible-lg"></div>
		
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="section-title">
							<h2>Đáng chú ý</h2>
						</div>
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.html"><img src="<?php echo $first_attentions['thumbnail']; ?>" alt="" width="750" height="600"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="category.html">Jquery</a>
											<span class="post-date"><?php echo $first_attentions['created_at']; ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.html"><?php echo $first_attentions['title']; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							
							<?php foreach($attentions as $attention) { ?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.html"><img src="<?php echo $attention['thumbnail']; ?>" alt="" width="500" height="200"></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.html">Css</a>
											<span class="post-date"><?php echo $attention['created_at']; ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.html"><?php echo $attention['title']; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } ?>
				
							<div class="clearfix visible-md visible-lg"></div>

						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
								</div>
							</div>
						</div>
						<!-- /post widget -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<div class="post post-thumb">
								<a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-3" href="category.html">Jquery</a>
										<span class="post-date">March 27, 2018</span>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
								</div>
							</div>

							<div class="post post-thumb">
								<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-meta">
										<a class="post-category cat-2" href="category.html">JavaScript</a>
										<span class="post-date">March 27, 2018</span>
									</div>
									<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
								</div>
							</div>
						</div>
						<!-- /post widget -->
						
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		<!-- section -->
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Posts</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">JavaScript</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html">Web Design</a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Most Read</h2>
								</div>
							</div>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="category.html">JavaScript</a>
											<span class="post-date">March 27, 2018</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									</div>
								</div>
							</div>
							<!-- /post -->

							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="category.html">JavaScript</a>
											<span class="post-date">March 27, 2018</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									</div>
								</div>
							</div>
							<!-- /post -->

							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.html">Css</a>
											<span class="post-date">March 27, 2018</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									</div>
								</div>
							</div>
							<!-- /post -->
							
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="category.html">Jquery</a>
											<span class="post-date">March 27, 2018</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									</div>
								</div>
							</div>
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
