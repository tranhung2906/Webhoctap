<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Single</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/blog_single.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_single_responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
											<div>tranhung296203@gmail.com</div>
										</li>
									</ul>
									<?php
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
										include "config/db_connect.php";
										$sql = "SELECT * FROM menu WHERE status = 1";
										$query = mysqli_query($conn, $sql);
										while ($row = mysqli_fetch_assoc($query)) {
										?>
											<li><a href="<?php echo $row['link'] ?>"><?php echo $row['name'] ?></a></li>
										<?php } ?>
                                    </ul>
                                    <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                                    <!-- Hamburger -->

                                    <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
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
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Tràng chủ</a></li>
                                    <li><a href="blog.html">Bài viết</a></li>
                                    <li>Chi tiết bài viết</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog -->

        <div class="blog">
            <div class="container">
                <div class="row">
                    <?php
                    include "config/db_connect.php";
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $bv = "SELECT * FROM blog WHERE id  = '$id';";
                        $tt = mysqli_query($conn, $bv);
                        $kq = mysqli_fetch_assoc($tt);
                    }
                    ?>
                    <!-- Blog Content -->
                    <div class="col-lg-8">
                        <div class="blog_content">
                            <div class="blog_title"><?php echo $kq['title'] ?></div>
                            <div class="blog_meta">
                                <ul>
                                    <li>Đăng tải ngày <a href="#"><?php echo $kq['date'] ?></a></li>
                                    <li>Bởi <a href="#"><?php echo $kq['author'] ?></a></li>
                                </ul>
                            </div>
                            <div class="blog_image"><img src="<?php echo str_replace('../', '', $kq['image']) ?>" alt=""></div>
                            <p><?php echo $kq['content'] ?></p>

                            <div class="blog_social ml-lg-auto">
                                <span>Share: </span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Comments -->
                        <div class="comments_container">
                            <div class="comments_title">Bình luận</div>
                            <ul class="comments_list">
                                <?php
                                $blog_id = $_GET['id'];
                                $truyvan = "SELECT * FROM account JOIN comment ON comment.user_id = account.id WHERE blog_id = '$blog_id' ORDER BY comment.id DESC LIMIT 3 ";
                                $thucthi = mysqli_query($conn, $truyvan);
                                if (mysqli_num_rows($thucthi) > 0) {
                                    while ($comment = mysqli_fetch_assoc($thucthi)) {
                                ?>
                                        <li>
                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                <div class="comment_image">
                                                    <div><img src="images/comment_1.jpg" alt=""></div>
                                                </div>
                                                <div class="comment_content">
                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author"><a href="#"><?php echo $comment['name'] ?></a></div>
                                                        <div class="comment_rating">
                                                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                                        </div>
                                                        <div class="comment_time ml-auto"><?php
                                                                                            $comment_time = strtotime($comment['date']);
                                                                                            $current_time = time();
                                                                                            $time_diff = $current_time - $comment_time;
                                                                                            if ($time_diff < 60) {
                                                                                                echo "<div class='comment_time ml-auto'>Vừa xong</div>";
                                                                                            } elseif ($time_diff < 3600) {
                                                                                                $minutes = floor($time_diff / 60);
                                                                                                echo "<div class='comment_time ml-auto'>$minutes phút trước</div>";
                                                                                            } elseif ($time_diff < 86400) {
                                                                                                $hours = floor($time_diff / 3600);
                                                                                                echo "<div class='comment_time ml-auto'>$hours giờ trước</div>";
                                                                                            } elseif ($time_diff < 2592000) {
                                                                                                $days = floor($time_diff / 86400);
                                                                                                echo "<div class='comment_time ml-auto'>$days ngày trước</div>";
                                                                                            } elseif ($time_diff < 31536000) {
                                                                                                $months = floor($time_diff / 2592000);
                                                                                                echo "<div class='comment_time ml-auto'>$months tháng trước</div>";
                                                                                            } else {
                                                                                                $years = floor($time_diff / 31536000);
                                                                                                echo "<div class='comment_time ml-auto'>$years năm trước</div>";
                                                                                            }
                                                                                            ?></div>
                                                    </div>
                                                    <div class="comment_text">
                                                        <p><?php echo $comment['message'] ?></p>
                                                    </div>
                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_extra comment_likes">
                                                            <a href="<?php echo $comment['id']; ?>" class="like-button" data-id="<?php echo $comment['id']; ?>">
                                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                                <span class="like-count"><?php echo $comment['luotlike']; ?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                <?php }
                                } else {
                                    echo "Chưa có bình luận nào.";
                                }
                                ?>
                            </ul>
                            <div class="add_comment_container">
                                <div class="add_comment_title">Viết bình luận</div>
                                <form action="" class="comment_form" method="post">
                                    <div>
                                        <div class="form_title">Tin nhắn</div>
                                        <textarea class="comment_input comment_textarea" name="message" required="required"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="comment_button trans_200">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    include "config/db_connect.php";
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $user_id = $_SESSION['user_id'];
                        $blog_id = $_GET['id'];
                        $message = $conn->real_escape_string($_POST['message']);
                        $date = date("Y-m-d H:i:s");
                        $sql = "INSERT INTO comment (user_id, blog_id, message, date) VALUES ('$user_id', '$blog_id', '$message', '$date')";
                        if ($conn->query($sql) === TRUE) {
                            echo "<script>
                                        Swal.fire({
                                        icon: 'success',
                                        title: 'Thành công!',
                                        text: 'Bình luận thành công.',
                                        timer: 2000,
                                        showConfirmButton: false
                                        });
                                        </script>";
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit;
                        } else {
                            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: 'Có lỗi xảy ra: " . $conn->error . "',
                timer: 2000,
                showConfirmButton: false
            });
        </script>";
                            exit;
                        }
                    }
                    $conn->close();
                    ?>

                    <!-- Blog Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <!-- Gallery -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Instagram</div>
                                <div class="sidebar_gallery">
                                    <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                                        <li class="gallery_item">
                                            <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                            <a class="colorbox" href="images/gallery_1_large.jpg">
                                                <img src="images/gallery_1.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                            <a class="colorbox" href="images/gallery_2_large.jpg">
                                                <img src="images/gallery_2.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                            <a class="colorbox" href="images/gallery_3_large.jpg">
                                                <img src="images/gallery_3.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                            <a class="colorbox" href="images/gallery_4_large.jpg">
                                                <img src="images/gallery_4.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                            <a class="colorbox" href="images/gallery_5_large.jpg">
                                                <img src="images/gallery_5.jpg" alt="">
                                            </a>
                                        </li>
                                        <li class="gallery_item">
                                            <div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
                                            <a class="colorbox" href="images/gallery_6_large.jpg">
                                                <img src="images/gallery_6.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   $(document).on('click', '.like-button', function (e) {
    e.preventDefault();

    var likeButton = $(this);
    var commentId = likeButton.data('id');

    $.ajax({
        url: 'likecomment.php',
        type: 'POST',
        data: { comment_id: commentId },
        dataType: 'json',
        success: function (response) {
            if (response.status === "success") {
                likeButton.find('.like-count').text(response.new_likes);
                Swal.fire({
                    icon: 'success',
                    title: 'Cảm ơn!',
                    text: 'Bạn đã thích bình luận này.',
                    showConfirmButton: false,
                    timer: 1000
                }).then(() => {
                window.location.reload();
            });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: response.message,
                    showConfirmButton: true
                }).then(() => {
                window.location.reload();
            });
            }
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi',
                text: 'Không thể kết nối đến server.',
                showConfirmButton: true
            });
        }
    });
});

</script>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/blog_single.js"></script>
</body>

</html>