<?php
session_start();
include "config/db_connect.php";
if (isset($_GET['partnerCode']) && isset($_GET['orderId']) && isset($_GET['requestId']) && isset($_GET['amount']) && isset($_GET['message']) && isset($_GET['resultCode'])) {
    $partnerCode = $_GET['partnerCode'];
    $orderId =  $_SESSION['register_id'];
    $requestId = $_GET['requestId'];
    $amount = $_GET['amount'];
    $message = $_GET['message'];
    $resultCode = $_GET['resultCode'];
    $signature = $_GET['signature'];
    $rawHash = "partnerCode=" . $partnerCode . "&orderId=" . $orderId . "&requestId=" . $requestId . "&amount=" . $amount . "&message=" . $message . "&resultCode=" . $resultCode;
    $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
    $calculatedSignature = hash_hmac("sha256", $rawHash, $secretKey);
        if ($resultCode == 0) {
            $update = "UPDATE registration SET status = 'Đã thanh toán' WHERE id = '$orderId'";
            if (mysqli_query($conn, $update)) {
                echo "<script>window.location.href = 'thank.php';</script>";
            } else {
                echo "<p>Lỗi khi cập nhật trạng thái đơn hàng: " . mysqli_error($conn) . "</p>";
            }
        } else {
            $deleteorder = "DELETE FROM registration WHERE id = '$orderId'";
            if (mysqli_query($conn, $deleteorder)) {
            echo "<script>alert('Thanh toán thất bại!'); window.location.href = 'index.php';</script>";
            }
        }
} else {
    echo "<h2>Không nhận được dữ liệu từ MoMo.</h2>";
}
mysqli_close($conn);
?>
