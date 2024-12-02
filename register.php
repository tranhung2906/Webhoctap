<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="index2.html" class="h1"><b>EDU</b>C</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Đăng ký tài khoản</p>

                <form action="register.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="hoten" placeholder="Họ và tên">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pass" placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="cpass" placeholder="Nhập lại mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <a href="login.php" class="text-center">Đăng nhập</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <?php
                // Kết nối cơ sở dữ liệu và xử lý form
                include 'config/db_connect.php';

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = mysqli_real_escape_string($conn, $_POST['hoten']);
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['pass']);
                    $confirm_password = mysqli_real_escape_string($conn, $_POST['cpass']);

                    if ($password !== $confirm_password) {
                        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: 'Mật khẩu và xác nhận mật khẩu không trùng khớp!',
                });
              </script>";
                        exit();
                    }

                    $checkEmailQuery = "SELECT * FROM account WHERE email = '$email'";
                    $result = mysqli_query($conn, $checkEmailQuery);

                    if (mysqli_num_rows($result) > 0) {
                        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: 'Email này đã tồn tại. Vui lòng sử dụng một email khác.',
                });
              </script>";
                    } else {
                        $insertQuery = "INSERT INTO account (name, email, password, status) 
                        VALUES ('$name', '$email', '$password', 1)";

                        if (mysqli_query($conn, $insertQuery)) {
                            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công',
                        text: 'Đăng ký thành công!',
                    });
                  </script>";
                        } else {
                            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi',
                        text: 'Có lỗi xảy ra khi đăng ký. Vui lòng thử lại.',
                    });
                  </script>";
                        }
                    }
                }
                ?>
                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.min.js"></script>
</body>

</html>