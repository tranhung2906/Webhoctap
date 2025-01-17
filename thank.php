<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Unicat project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/contact.css">
  <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
/* Success Message Container */
.success-message {
  margin-top: 50px;
  color: #333;
  font-family: "Arial", sans-serif;
}

/* Icon Styling */
.icon-container {
  position: relative;
  display: inline-block;
  margin-bottom: 20px;
  animation: fade-in-scale 1s ease-in-out;
}

.icon-container i {
  font-size: 100px;
  color: #28a745;
  opacity: 0;
  animation: fade-in 1.5s ease-in-out forwards;
}

/* Text Styling */
.success-message h1 {
  font-weight: 700;
  color: #333;
}

.success-message p {
  font-size: 18px;
  color: #666;
}

/* Button Styling */
.success-message .btn {
  background-color: #28a745;
  border: none;
  color: white;
  transition: background-color 0.3s, transform 0.3s;
}

.success-message .btn:hover {
  background-color: #218838;
  transform: scale(1.05);
}

/* Animations */
/* Icon appears and scales up */
@keyframes fade-in {
  0% {
    opacity: 0;
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

/* Entire container pops up */
@keyframes fade-in-scale {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

  </style>
</head>

<body>

  <div class="super_container">

    <!-- Header -->

    <header class="header">

      <!-- Top Bar -->

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
    <!-- Contact -->

    <div class="contact">

      <!-- Contact Map -->
      <!-- Contact Info -->

      <div class="contact_info_container">
        <div class="container">
          <div class="row">

            <!-- Contact Form -->
            <div class="container-fluid py-1">
              <div class="container py-1 text-center">
                <div class="row justify-content-center text-center success-message">
                  <div class="col-lg-6">
                    <div class="icon-container">
                      <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <h1 class="display-4 mb-3">Đăng ký thành công!</h1>
                    <p class="mb-4">Chúc bạn học tập thật tốt!</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="index.php">Quay lại trang chủ</a>
                  </div>
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
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
  <script src="plugins/marker_with_label/marker_with_label.js"></script>
  <script src="js/contact.js"></script>
</body>

</html>