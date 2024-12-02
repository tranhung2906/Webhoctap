<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Validation Form</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?php include "menu.php"; ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bài viết</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Quản lý bài viết</a></li>
                                <li class="breadcrumb-item active">Sửa bài viết</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Chỉnh sửa bài viết</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="edit_blog.php" method="post" enctype="multipart/form-data">
                                    <?php
                                 include "../config/db_connect.php";
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM blog WHERE id = '$id';";
                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($query);
                                    }
                                 ?>
                                 <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tiêu đề</label>
                                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="<?php echo $row['title']  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nội dung</label>
                                            <input type="text" name="content" class="form-control" id="exampleInputEmail1" value="<?php echo $row['content']  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tác giả</label>
                                            <input type="text" name="author" class="form-control" id="exampleInputEmail1" value="<?php echo $row['author']  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ngày đăng</label>
                                            <input type="date" name="date" class="form-control" id="exampleInputEmail1" value="<?php echo $row['date']  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Hình ảnh</label>
                                            <input type="file" name="image" class="form-control" id="exampleInputFile">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelect">Trạng thái</label>
                                            <select name="status" class="form-control" id="exampleSelect">
                                                <?php if($row['status'] == 1){ ?>
                                                <option selected value="1">Hoạt động</option>
                                                <option value="0">Không hoạt động</option>
                                                <?php }else{ ?>
                                                    <option selected value="0">Không hoạt động</option>  
                                                    <option value="1">Hoạt động</option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Lưu lại</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <?php
                        include "../config/db_connect.php";
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            // Lấy dữ liệu từ form
                            $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
                            $title = isset($_POST['title']) ? mysqli_real_escape_string($conn, $_POST['title']) : '';
                            $content = isset($_POST['content']) ? mysqli_real_escape_string($conn, $_POST['content']) : '';
                            $author = isset($_POST['author']) ? mysqli_real_escape_string($conn, $_POST['author']) : '';
                            $date = isset($_POST['date']) ? mysqli_real_escape_string($conn, $_POST['date']) : '';
                            $status = isset($_POST['status']) ? intval($_POST['status']) : 0;
                        
                            // Kiểm tra ID hợp lệ
                            if ($id > 0) {
                                $updateImage = "";
                        
                                // Kiểm tra xem người dùng có tải ảnh lên không
                                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                                    $uploadDir = "../uploads/"; // Thư mục lưu trữ ảnh
                                    $fileName = basename($_FILES['image']['name']);
                                    $fileTmp = $_FILES['image']['tmp_name'];
                                    $targetFile = $uploadDir . $fileName;
                        
                                    // Kiểm tra định dạng file (chỉ cho phép JPG, PNG, GIF)
                                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                                    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
                        
                                    if (in_array($fileType, $allowedTypes)) {
                                        if (move_uploaded_file($fileTmp, $targetFile)) {
                                            $updateImage = ", image = '$targetFile'";
                                        } else {
                                            $_SESSION['error'] = "Không thể tải tệp lên.";
                                            echo"<script>window.location.href = 'all_blog.php';</script>";
                                        }
                                    } else {
                                        $_SESSION['error'] = "Định dạng file không hợp lệ. Chỉ cho phép JPG, PNG, GIF.";
                                        echo"<script>window.location.href = 'all_blog.php';</script>";
                                    }
                                }
                        
                                // Cập nhật thông tin slide trong cơ sở dữ liệu
                                $sql = "UPDATE blog 
                                        SET title = '$title', content = '$content', author = '$author', date = '$date', status = $status $updateImage 
                                        WHERE id = $id";
                        
                                if (mysqli_query($conn, $sql)) {
                                    $_SESSION['success'] = "Bài viết cập nhật thành công!";
                                    echo"<script>window.location.href = 'all_blog.php';</script>";
                                } else {
                                    $_SESSION['error'] = "Lỗi khi cập nhật slide: " . mysqli_error($conn);
                                    echo"<script>window.location.href = 'all_blog.php';</script>";
                                }
                            } else {
                                $_SESSION['error'] = "ID slide không hợp lệ.";
                                echo"<script>window.location.href = 'all_blog.php';</script>";
                            }
                        }
                        ?>
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                }
            });
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <script>
        setTimeout(function() {
            const alertElement = document.querySelector('.alert');
            if (alertElement) {
                alertElement.style.transition = "opacity 0.5s ease";
                alertElement.style.opacity = "0";
                setTimeout(() => alertElement.remove(), 500); // Xóa khỏi DOM sau khi ẩn
            }
        }, 2000);
    </script>

</body>

</html>