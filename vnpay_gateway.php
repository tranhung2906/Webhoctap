<?php
session_start();
$selected_course = isset($_SESSION['info_course']) ? $_SESSION['info_course'] : null;

$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "https://localhost/WEBHOCTAP/vnpay_return.php";
$vnp_TmnCode = "AR9CJHBH";
$vnp_HashSecret = "PBJKG5TV036G3N4OHW68L7IWKMIORTV7";

$vnp_TxnRef = time();
$vnp_OrderInfo = "Thanh toán qua cổng VnPay";
$vnp_OrderType = "Bill Payment";
$vnp_Amount = $selected_course['price'] * 100;
$vnp_Locale = 'VN';
$vnp_BankCode = 'NCB';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);

$query = "";
$hashdata = "";
foreach ($inputData as $key => $value) {
    $hashdata .= ($hashdata === '' ? '' : '&') . urlencode($key) . "=" . urlencode($value);
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$query = rtrim($query, '&');
$vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
$vnp_Url = $vnp_Url . "?" . $query . '&vnp_SecureHash=' . $vnpSecureHash;

// Chuyển hướng đến cổng thanh toán
header('Location: ' . $vnp_Url);
exit;
?>
