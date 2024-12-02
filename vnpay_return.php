<?php
session_start();
include "config/db_connect.php";

// Kiểm tra dữ liệu trả về từ VnPay
if (isset($_GET['vnp_TxnRef']) && isset($_GET['vnp_Amount']) && isset($_GET['vnp_OrderInfo']) && isset($_GET['vnp_TransactionNo']) && isset($_GET['vnp_SecureHash']) && isset($_GET['vnp_ResponseCode'])) {
    
    // Lấy các tham số trả về từ VnPay
    $vnp_TxnRef = $_GET['vnp_TxnRef'];
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
    $vnp_ResponseCode = $_GET['vnp_ResponseCode'];
    $secretKey = 'PBJKG5TV036G3N4OHW68L7IWKMIORTV7';
    $rawHash = "vnp_Amount=" . $vnp_Amount . "&vnp_OrderInfo=" . $vnp_OrderInfo . "&vnp_ResponseCode=" . $vnp_ResponseCode . "&vnp_TxnRef=" . $vnp_TxnRef . "&vnp_TransactionNo=" . $vnp_TransactionNo;

    $calculatedSecureHash = hash_hmac('sha512', $rawHash, $secretKey);

        if ($vnp_ResponseCode == '00') { 
            $orderId = $_SESSION['register_id'];
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
        echo "<h2>Chữ ký không hợp lệ.</h2>";
    }
mysqli_close($conn);
?>
