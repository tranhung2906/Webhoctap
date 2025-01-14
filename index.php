<!DOCTYPE html>
<html lang="en">

<head>
	<title>Unicat</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

	<div class="super_container">
		<!-- Header -->
		<header class="header">
			<!-- Top Bar -->
			<div class="top_bar">
				<div class="top_bar_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										<li>
											<i class="fa fa-phone" aria-hidden="true"></i>
											<div>001-1234-88888</div>
										</li>
										<li>
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<div>info.deercreative@gmail.com</div>
										</li>
									</ul>
									<?php
									session_start();
									 if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != 0) {
									?>
									<div class="top_bar_login ml-auto">
										<div class="login_button"><a href="logout.php">Đăng xuất</a></div>
									</div>
									<?php }else{ ?>
										<div class="top_bar_login ml-auto">
										<div class="login_button"><a href="login.php">Đăng nhập</a></div>
									</div>
									<div class="top_bar_login ml-1">
										<div class="login_button"><a href="register.php">Đăng ký</a></div>
									</div>
										<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<a href="#">
										<div class="logo_text">Unic<span>at</span></div>
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
									<?php
                                        $current_page = basename($_SERVER['REQUEST_URI']);
                                        include "config/db_connect.php";
                                        $sql = "SELECT * FROM menu WHERE status = 1";
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
											$menu_items [] = $row;
										}
                                        ?>
                                            <?php foreach ($menu_items as $menu): ?>
                                                <li class="<?= (basename($menu['link']) === $current_page) ? 'active' : '' ?>">
                                                    <a href="<?= $menu['link'] ?>"><?= $menu['name'] ?></a>
                                                </li>
                                            <?php endforeach; ?>
									</ul>
									<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

									<!-- Hamburger -->
									<div class="hamburger menu_mm">
										<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
									</div>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form">
									<input type="search" class="search_input" placeholder="Search" required="required">
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_mm"><a href="#">About</a></li>
					<li class="menu_mm"><a href="#">Courses</a></li>
					<li class="menu_mm"><a href="#">Blog</a></li>
					<li class="menu_mm"><a href="#">Page</a></li>
					<li class="menu_mm"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
		<!-- Home -->
		<div class="home">
			<div class="home_slider_container">
				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">
					<?php
					include "config/db_connect.php";
					$sql1 = "SELECT * FROM slide WHERE status = 1";
					$query1 = mysqli_query($conn, $sql1);
					while ($row1 = mysqli_fetch_assoc($query1)) {
					?>
						<!-- Home Slider Item -->
						<div class="owl-item">
							<div class="home_slider_background" style="background-image:url(<?php echo str_replace('../', '', $row1['image']); ?>)"></div>
							<div class="home_slider_content">
								<div class="container">
									<div class="row">
										<div class="col text-center">
											<div class="home_slider_title"><?php echo $row1['title'] ?></div>
											<div class="home_slider_subtitle"><?php echo $row1['content'] ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- Home Slider Nav -->
			<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
			<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
		</div>

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Chào mừng bạn đến với <br> Unicat E-Learning</h2>
							<div class="section_subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row features_row">

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
							<h3 class="feature_title">The Experts</h3>
							<div class="feature_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							</div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
							<h3 class="feature_title">Book & Library</h3>
							<div class="feature_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							</div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
							<h3 class="feature_title">Best Courses</h3>
							<div class="feature_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							</div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
							<h3 class="feature_title">Award & Reward</h3>
							<div class="feature_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Popular Courses -->

		<div class="courses">
			<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Khóa học online</h2>
							<div class="section_subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row courses_row">
						<?php  
							$kh = "SELECT course.name as coursename, course.description as mota, lecturer.name as tengv, course.image as hinhanh, course.price as price
							 FROM course JOIN lecturer ON course.teacher_id = lecturer.id LIMIT 3";
							 $querykh = mysqli_query($conn, $kh);
							 while($khoahoc = mysqli_fetch_assoc($querykh)){
						?>
					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="<?php echo str_replace('../', '', $khoahoc['hinhanh']) ?>" alt=""></div>
							<div class="course_body">
								<h3 class="course_title"><a href="course.html"><?php echo $khoahoc['coursename'] ?></a></h3>
								<div class="course_teacher" style="color: red;"><?php echo $khoahoc['tengv'] ?></div>
								<div class="course_text">
									<p><?php echo $khoahoc['mota'] ?></p>
								</div>
							</div>
							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</div>
									<div class="course_price ml-auto"><?php echo number_format($khoahoc['price'], 0, '', '.'); ?> VND</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<div class="col">
						<div class="courses_button trans_200"><a href="course.php">Tất cả khóa học</a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Counter -->
		<!-- Events -->

		<div class="events">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Sự kiện nổi bật</h2>
							<div class="section_subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row events_row">
					<?php
					$sql2 = "SELECT *, DAY(date) AS day, MONTH(date) AS month FROM event WHERE status = 1 ORDER BY id DESC;";
					$query2 = mysqli_query($conn, $sql2);
					while ($row2 = mysqli_fetch_assoc($query2)) {
					?>
						<!-- Event -->
						<div class="col-lg-4 event_col">
							<div class="event event_left">
								<div class="event_image"><img src="<?php echo str_replace('../', '', $row2['image']) ?>" alt=""></div>
								<div class="event_body d-flex flex-row align-items-start justify-content-start">
									<div class="event_date">
										<div class="d-flex flex-column align-items-center justify-content-center trans_200">
											<div class="event_day trans_200"><?php echo $row2['day'] ?></div>
											<div class="event_month trans_200">Tháng <?php echo $row2['month'] ?></div>
										</div>
									</div>
									<div class="event_content">
										<div class="event_title"><a href="#"><?php echo $row2['title'] ?></a></div>
										<div class="event_info_container">
											<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php echo $row2['date'] ?></span></div>
											<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span><?php echo $row2['address'] ?></span></div>
											<div class="event_text">
												<p><?php echo $row2['content'] ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<!-- Team -->

		<div class="team">
			<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Giảng viên xuất sắc</h2>
							<div class="section_subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row team_row">
						<?php 
						$gv = "SELECT lecturer.image as image, lecturer.name as name, topic.name as topic 
						FROM lecturer JOIN topic ON lecturer.topic_id = topic.id LIMIT 4";
						$querygv = mysqli_query($conn, $gv);
						while($showgv = mysqli_fetch_assoc($querygv)){
						?>
					<!-- Team Item -->
					<div class="col-lg-3 col-md-6 team_col">
						<div class="team_item">
							<div class="team_image"><img src="<?php echo str_replace('../', '', $showgv['image']) ?>" alt=""></div>
							<div class="team_body">
								<div class="team_title"><a href="#"><?php echo $showgv['name'] ?></a></div>
								<div class="team_subtitle"><?php echo $showgv['topic'] ?></div>
								<div class="social_list">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<!-- Latest News -->

		<div class="news">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Bài viết mới</h2>
							<div class="section_subtitle">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row news_row">
					<div class="col-lg-7 news_col">
							<?php
								$bv = "SELECT * FROM blog ORDER BY date DESC LIMIT 1";
								$tt = mysqli_query($conn, $bv);
								$kq = mysqli_fetch_assoc($tt);
							?>
						<!-- News Post Large -->
						<div class="news_post_large_container">
							<div class="news_post_large">
								<div class="news_post_image"><img src="<?php echo str_replace('../', '', $kq['image']) ?>" alt=""></div>
								<div class="news_post_large_title"><a href="blogdetail.php?id=<?php echo $kq['id'] ?>"><?php echo $kq['title'] ?></a></div>
								<div class="news_post_meta">
									<ul>
										<li><a><?php echo $kq['author'] ?></a></li>
										<li><a><?php echo $kq['date'] ?></a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p><?php echo (strlen($kq['content']) > 100) ? substr($kq['content'], 0, 130) . '...' : $kq['content']; ?></p>
								</div>
								<div class="news_post_link"><a href="blogdetail.php?id=<?php echo $kq['id'] ?>">Đọc thêm</a></div>
							</div>
						</div>
					</div>

					<div class="col-lg-5 news_col">
						<div class="news_posts_small">
						<?php
								$data = "SELECT * FROM blog ORDER BY date DESC LIMIT 4 OFFSET 1";
								$thucthi = mysqli_query($conn, $data);
								while($show = mysqli_fetch_assoc($thucthi)){
							?>
							<!-- News Posts Small -->
							<div class="news_post_small">
								<div class="news_post_small_title"><a href="blogdetail.php?id=<?php echo $show['id'] ?>"><?php echo $show['title'] ?></a></div>
								<div class="news_post_meta">
									<ul>
										<li><a><a><?php echo $show['author'] ?></a></li>
										<li><a><a><?php echo $show['date'] ?></a></li>
									</ul>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<div class="newsletter">
			<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

							<!-- Newsletter Content -->
							<div class="newsletter_content text-lg-left text-center">
								<div class="newsletter_title">sign up for news and offers</div>
								<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
							</div>

							<!-- Newsletter Form -->
							<div class="newsletter_form_container ml-lg-auto">
								<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
									<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
									<button type="submit" class="newsletter_button">subscribe</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
			<div class="container">
				<div class="row footer_row">
					<div class="col">
						<div class="footer_content">
							<div class="row">

								<div class="col-lg-3 footer_col">

									<!-- Footer About -->
									<div class="footer_section footer_about">
										<div class="footer_logo_container">
											<a href="#">
												<div class="footer_logo_text">Unic<span>at</span></div>
											</a>
										</div>
										<div class="footer_about_text">
											<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
										</div>
										<div class="footer_social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col">

									<!-- Footer Contact -->
									<div class="footer_section footer_contact">
										<div class="footer_title">Contact Us</div>
										<div class="footer_contact_info">
											<ul>
												<li>Email: Info.deercreative@gmail.com</li>
												<li>Phone: +(88) 111 555 666</li>
												<li>40 Baria Sreet 133/2 New York City, United States</li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col">

									<!-- Footer links -->
									<div class="footer_section footer_links">
										<div class="footer_title">Contact Us</div>
										<div class="footer_links_container">
											<ul>
												<li><a href="index.html">Home</a></li>
												<li><a href="about.html">About</a></li>
												<li><a href="contact.html">Contact</a></li>
												<li><a href="#">Features</a></li>
												<li><a href="courses.html">Courses</a></li>
												<li><a href="#">Events</a></li>
												<li><a href="#">Gallery</a></li>
												<li><a href="#">FAQs</a></li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col clearfix">

									<!-- Footer links -->
									<div class="footer_section footer_mobile">
										<div class="footer_title">Mobile</div>
										<div class="footer_mobile_content">
											<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
											<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="row copyright_row">
					<div class="col">
						<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
							<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="ml-lg-auto cr_links">
								<ul class="cr_list">
									<li><a href="#">Copyright notification</a></li>
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>