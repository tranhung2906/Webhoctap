<?php
session_start();
isset($_SESSION['user_id']);
$userid = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course Details</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/course.css">
    <link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
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
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><a href="courses.html">Khóa học</a></li>
                                    <li>Chi tiết khóa học</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course -->
        <div class="course">
            <div class="container">
                <div class="row">

                    <!-- Course -->
                    <div class="col-lg-8">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "config/db_connect.php";
                            $review = "SELECT course.*, lecturer.name as lecturer, lecturer.description as motagv, lecturer.image as imgv, topic.name as topic
                                            FROM course JOIN lecturer ON course.teacher_id = lecturer.id 
                                            JOIN topic ON course.topic_id = topic.id WHERE course.id = '$id'";
                            $queryrv = mysqli_query($conn, $review);
                            $result = mysqli_fetch_assoc($queryrv);
                            $_SESSION['info_course'] = [
                                'id' => $result['id'],
                                'name' => $result['name'],
                                'price' => $result['price'],
                                'teacher' => $result['lecturer'],
                                'duration' => $result['duration']
                            ];
                        }
                        ?>
                        <div class="course_container">
                            <div class="course_title"><?php echo $result['name'] ?></div>
                            <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Giảng viên:</div>
                                    <div class="course_info_text"><a href="#"><?php echo $result['lecturer'] ?></a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Chủ đề:</div>
                                    <div class="course_info_text"><a href="#"><?php echo $result['topic'] ?></a></div>
                                </div>

                                <!-- Course Info Item -->
                                <div class="course_info_item">
                                    <div class="course_info_title">Đăng ký học</div>
                                    <div class="course_info_text">
                                        <?php
                                        // Lấy thông tin khóa học
                                        $query_check_course = "SELECT price, status FROM course WHERE id = '$id'";
                                        $course_result = mysqli_query($conn, $query_check_course);
                                        $course = mysqli_fetch_assoc($course_result);

                                        if ($course) {
                                            if ($course['price'] == 0 || $course['status'] == 0) {
                                                echo '<span style="color: green;">Khóa học miễn phí</span>';
                                            } else {
                                                $query_check_registration = "SELECT * FROM registration WHERE user_id = '$userid' AND course_id = '$id'";
                                                $registration_result = mysqli_query($conn, $query_check_registration);

                                                if (mysqli_num_rows($registration_result) > 0) {
                                                    echo '<span style="color: green;">Đã đăng ký</span>';
                                                } else {
                                                    echo '<a href="register_course.php?id=' . htmlspecialchars($id) . '">Đăng ký ngay --></a>';
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>

                            <!-- Course Image -->
                            <div class="course_image"><img src="<?php echo str_replace('../', '', $result['image']) ?>" alt=""></div>

                            <!-- Course Tabs -->
                            <div class="course_tabs_container">
                                <div class="tabs d-flex flex-row align-items-center justify-content-start">
                                    <div class="tab active">Mô tả</div>
                                    <div class="tab">Bài giảng</div>
                                </div>
                                <div class="tab_panels">

                                    <!-- Description -->
                                    <div class="tab_panel active">
                                        <div class="tab_panel_title"><?php echo $result['name'] ?></div>
                                        <div class="tab_panel_content">
                                            <div class="tab_panel_text">
                                                <p><?php echo $result['description'] ?>.</p>
                                            </div>
                                            <div class="tab_panel_section">
                                                <div class="tab_panel_subtitle"></div>
                                            </div>
                                            <div class="tab_panel_section">

                                            </div>
                                            <div class="tab_panel_faq">
                                                <div class="tab_panel_title"></div>
                                                <!-- Accordions -->
                                                <div class="accordions">
                                                    <div class="elements_accordions">
                                                        <div class="accordion_container">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Curriculum -->
                                    <div class="tab_panel tab_panel_2">
                                        <div class="tab_panel_content">
                                            <div class="tab_panel_title"><?php echo $result['name'] ?></div>
                                            <div class="tab_panel_content">
                                                <div class="tab_panel_text">
                                                    <p><?php echo $result['description'] ?></p>
                                                </div>
                                                <!-- Dropdowns -->
                                                <ul class="dropdowns">
                                                    <?php
                                                    $lesson = "SELECT lesson.* FROM lesson JOIN course 
                                                    ON lesson.course_id = course.id 
                                                    LEFT JOIN registration ON course.id = registration.course_id AND registration.user_id = '$userid'
                                                    WHERE lesson.course_id = '$id' AND (course.status = 0 OR registration.user_id = '$userid')";
                                                    $queryls = mysqli_query($conn, $lesson);
                                                    if (mysqli_num_rows($queryls) == 0) {
                                                        echo "<p style='color: red;'>Chưa có bài giảng được đăng tải!.</p>";
                                                    } else {
                                                        while ($showlesson = mysqli_fetch_assoc($queryls)) {
                                                    ?>
                                                            <li>
                                                                <div class="dropdown_item">
                                                                    <div class="dropdown_item_title">
                                                                        <span>Bài <?php echo htmlspecialchars($showlesson['orders']); ?>:</span>
                                                                        <?php echo htmlspecialchars($showlesson['name']); ?>
                                                                    </div>
                                                                    <div class="dropdown_item_text">
                                                                        <p>Bài giảng video:
                                                                            <a href="<?php echo htmlspecialchars($showlesson['video_url']); ?>" target="_blank">
                                                                                <?php echo htmlspecialchars($showlesson['video_url']); ?>
                                                                            </a>
                                                                        </p>
                                                                        <p>Tài liệu:
                                                                            <?php
                                                                            $resourcePath = str_replace('../', '', $showlesson['resource']);
                                                                            $fileExtension = strtolower(pathinfo($resourcePath, PATHINFO_EXTENSION));

                                                                            if ($fileExtension == 'pdf') {
                                                                                echo '<iframe src="' . htmlspecialchars($resourcePath) . '" width="70%" height="300px"></iframe>';
                                                                            } else {
                                                                                echo '<a href="' . htmlspecialchars($resourcePath) . '" target="_blank" download>Tải tài liệu</a>';
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                        <p>Mô tả: <?php echo htmlspecialchars($showlesson['description']); ?></p>
                                                                        <p>Đăng tải ngày: <?php echo htmlspecialchars($showlesson['create_at']); ?></p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <!-- Feature -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Thông tin khoá học</div>
                                <div class="sidebar_feature">
                                    <div class="course_price"><?php
                                                                if ($result['status'] == 0) {
                                                                    echo "Miễn phí";
                                                                } else {
                                                                    echo number_format($result['price'], 0, '', '.') . " VND";
                                                                }
                                                                ?>
                                    </div>
                                    <!-- Features -->
                                    <div class="feature_list">

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Thời gian:</span></div>
                                            <div class="feature_text ml-auto"><?php echo $result['duration'] ?></div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Bài giảng:</span></div>
                                            <div class="feature_text ml-auto">Chưa làm</div>
                                        </div>

                                        <!-- Feature -->
                                        <div class="feature d-flex flex-row align-items-center justify-content-start">
                                            <div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Học viên:</span></div>
                                            <div class="feature_text ml-auto">Chưa làm</div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Feature -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Thông tin giảng viên</div>
                                <div class="sidebar_teacher">
                                    <div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
                                        <div class="teacher_image"><img src="<?php echo str_replace('../', '', $result['imgv']) ?>" alt=""></div>
                                        <div class="teacher_title">
                                            <div class="teacher_name"><a href="#"><?php $result['lecturer'] ?></a></div>
                                            <div class="teacher_position">Họ và tên: <?php echo $result['lecturer'] ?></div>
                                            <div class="teacher_position">Chuyên môn: <?php echo $result['topic'] ?></div>
                                        </div>
                                    </div>
                                    <div class="teacher_info">
                                        <p><?php echo $result['motagv'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Khóa học mới nhất</div>
                                <div class="sidebar_latest">
                                    <?php
                                    $new = "SELECT * FROM course ORDER BY id DESC LIMIT 3 ";
                                    $querynew = mysqli_query($conn, $new);
                                    while ($khnew = mysqli_fetch_assoc($querynew)) {
                                    ?>
                                        <!-- Latest Course -->
                                        <div class="latest d-flex flex-row align-items-start justify-content-start">
                                            <div class="latest_image">
                                                <div><img src="<?php echo str_replace('../', '', $khnew['image']) ?>" alt=""></div>
                                            </div>
                                            <div class="latest_content">
                                                <div class="latest_title"><a href="coursedetail.php?id=<?php echo $khnew['id'] ?>"><?php echo $khnew['name'] ?></a></div>
                                                <div class="latest_price">
                                                    <?php
                                                    if ($khnew['status'] == 0) {
                                                        echo "Miễn phí";
                                                    } else {
                                                        echo number_format($khnew['price'], 0, '', '.') . " VND";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

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

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/course.js"></script>
</body>

</html>