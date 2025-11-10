<?php
session_start();

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenNguoiNhan = $_POST['tenNguoiNhan'] ?? '';
    $diaChi = $_POST['diaChi'] ?? '';
    $soDienThoai = $_POST['soDienThoai'] ?? '';
    $email = $_POST['email'] ?? '';
    $paymentMethod = $_POST['payment_method'] ?? '';
    
    // Validate required fields
    if (empty($tenNguoiNhan) || empty($diaChi) || empty($soDienThoai) || empty($email) || empty($paymentMethod)) {
        die('Vui lòng điền đầy đủ thông tin!');
    }
    
    // Generate order ID
    $orderId = 'DH' . date('Ymd') . rand(1000, 9999);
    
    // Calculate total
    $total = 0;
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }
    }
    
    // Store order info in session
    $_SESSION['order_info'] = [
        'orderId' => $orderId,
        'tenNguoiNhan' => $tenNguoiNhan,
        'diaChi' => $diaChi,
        'soDienThoai' => $soDienThoai,
        'email' => $email,
        'paymentMethod' => $paymentMethod,
        'total' => $total,
        'items' => $_SESSION['cart'] ?? []
    ];
    
    // Redirect based on payment method
    if ($paymentMethod === 'momo') {
        // Redirect to MoMo payment
        header("Location: momo_payment.php?orderId=$orderId");
        exit;
    } else {
        // COD - redirect to success page
        header("Location: View/ThongBao/DatHangThanhCong_View.php?orderId=$orderId&payment=cod");
        exit;
    }
} else {
    // Redirect back to cart if no POST data
    header("Location: View/GioHang/Complete_TrangGioHang_View.php");
    exit;
}
?>
