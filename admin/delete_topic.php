<?php
session_start();
if(isset($_GET['id'])){
    include "../config/db_connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM topic WHERE id = '$id';";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Xóa thành công!";
        echo"<script>window.location.href = 'all_topic.php';</script>";
    } else {
        $_SESSION['error'] = "Lỗi: " . $conn->error;
    }
} else {
    $_SESSION['error'] = "Vui lòng điền đầy đủ thông tin.";
}
$conn->close();
?>