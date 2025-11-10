<?php
session_start();

// Get order ID from URL
$orderId = $_GET['orderId'] ?? '';

// Check if order info exists in session
if (!isset($_SESSION['order_info']) || empty($_SESSION['order_info'])) {
    // Set sample data for demo
    $_SESSION['order_info'] = [
        'orderId' => $orderId ?: 'DH' . date('Ymd') . rand(1000, 9999),
        'tenNguoiNhan' => 'Nguyễn Văn A',
        'diaChi' => '123 Đường ABC, Quận 1, TP.HCM',
        'soDienThoai' => '0123456789',
        'email' => 'test@gmail.com',
        'paymentMethod' => 'momo',
        'total' => 25000000,
        'items' => [
            [
                'id' => 1,
                'name' => 'iPhone 15 Pro Max',
                'price' => 25000000,
                'quantity' => 1,
                'color' => 'Titan Xanh',
                'image' => 'iphone15.jpg'
            ]
        ]
    ];
}

$orderInfo = $_SESSION['order_info'];
$total = $orderInfo['total'] ?? 0;
$items = $orderInfo['items'] ?? [];

// Generate MoMo payment URL (Demo)
$momoUrl = "https://payment.momo.vn/v2/gateway/pay?partnerCode=MOMO&accessKey=test&requestId=" . $orderId . "&amount=" . $total . "&orderId=" . $orderId . "&orderInfo=Thanh%20toan%20don%20hang%20" . $orderId . "&returnUrl=http://localhost/Mvc_Web/View/ThongBao/DatHangThanhCong_View.php&notifyUrl=http://localhost/Mvc_Web/View/ThongBao/DatHangThanhCong_View.php&extraData=&requestType=captureMoMoWallet&signature=test";

// Generate QR Code using Google Charts API
$qrData = "momo://transfer?phone=0123456789&amount=" . $total . "&note=Thanh%20toan%20don%20hang%20" . $orderId;
$qrCodeUrl = "https://chart.googleapis.com/chart?chs=300x300&chld=L|0&cht=qr&chl=" . urlencode($qrData);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Thanh Toán MoMo - Electronic Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #d82d8b 0%, #ff6b6b 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px 0;
        }
        
        .payment-container {
            background: white;
            border-radius: 25px;
            padding: 3rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .payment-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #d82d8b, #ff6b6b);
        }
        
        .momo-header {
            margin-bottom: 2rem;
        }
        
        .momo-logo {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #d82d8b, #ff6b6b);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            color: white;
            font-weight: bold;
            box-shadow: 0 8px 25px rgba(216, 45, 139, 0.3);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .payment-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 2rem;
        }
        
        .payment-subtitle {
            color: #7f8c8d;
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }
        
        .order-info {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            text-align: left;
            border: 1px solid #dee2e6;
        }
        
        .order-info h5 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .order-info h5 i {
            margin-right: 10px;
            color: #d82d8b;
        }
        
        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.8rem 0;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .info-row:last-child {
            border-bottom: none;
            font-weight: bold;
            font-size: 1.2rem;
            color: #e74c3c;
            background: linear-gradient(135deg, #fff5f5, #ffe6e6);
            padding: 1rem;
            border-radius: 10px;
            margin-top: 1rem;
        }
        
        .qr-section {
            background: white;
            border: 2px solid #f1f3f4;
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .qr-section h5 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .qr-section h5 i {
            margin-right: 10px;
            color: #d82d8b;
        }
        
        .qr-code {
            width: 250px;
            height: 250px;
            margin: 0 auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .qr-code img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .payment-steps {
            text-align: left;
            margin: 2rem 0;
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
        }
        
        .payment-steps h5 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .payment-steps h5 i {
            margin-right: 10px;
            color: #d82d8b;
        }
        
        .step {
            display: flex;
            align-items: center;
            margin-bottom: 1.2rem;
            color: #5a6c7d;
            font-size: 1rem;
        }
        
        .step:last-child {
            margin-bottom: 0;
        }
        
        .step-number {
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.2rem;
            font-weight: bold;
            font-size: 1.1rem;
            box-shadow: 0 3px 10px rgba(52, 152, 219, 0.3);
        }
        
        .btn-momo {
            background: linear-gradient(135deg, #d82d8b, #ff6b6b);
            color: white;
            border: none;
            padding: 1.2rem 2.5rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 1rem;
            box-shadow: 0 8px 25px rgba(216, 45, 139, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-momo:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(216, 45, 139, 0.4);
        }
        
        .btn-momo:active {
            transform: translateY(-1px);
        }
        
        .btn-cancel {
            background: #95a5a6;
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
        }
        
        .btn-cancel:hover {
            background: #7f8c8d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(149, 165, 166, 0.3);
        }
        
        .countdown {
            margin-top: 1.5rem;
            color: #7f8c8d;
            font-size: 1rem;
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 10px;
            border-left: 4px solid #d82d8b;
        }
        
        .countdown strong {
            color: #e74c3c;
            font-size: 1.1rem;
        }
        
        .demo-notice {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            border: 1px solid #ffeaa7;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            color: #856404;
            font-weight: 500;
        }
        
        .demo-notice i {
            margin-right: 10px;
            color: #f39c12;
        }
        
        .phone-demo {
            background: #e8f5e8;
            border: 1px solid #c3e6c3;
            border-radius: 15px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            color: #2d5a2d;
        }
        
        .phone-demo h6 {
            color: #27ae60;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .phone-demo ol {
            margin: 0;
            padding-left: 1.5rem;
        }
        
        .phone-demo li {
            margin-bottom: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .payment-container {
                padding: 2rem 1.5rem;
                margin: 10px;
            }
            
            .qr-code {
                width: 200px;
                height: 200px;
            }
            
            .payment-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <div class="momo-header">
            <div class="momo-logo">Mo</div>
            <h2 class="payment-title">Thanh Toán MoMo</h2>
            <p class="payment-subtitle">Quét mã QR để thanh toán nhanh chóng và an toàn</p>
        </div>
        
        <div class="demo-notice">
            <i class="fas fa-info-circle"></i>
            <strong>DEMO MODE:</strong> Đây là trang thanh toán demo. Trong môi trường thực tế, bạn sẽ được chuyển đến cổng thanh toán MoMo chính thức.
        </div>
        
        <div class="order-info">
            <h5><i class="fas fa-receipt"></i> Thông tin đơn hàng</h5>
            <div class="info-row">
                <span><i class="fas fa-hashtag"></i> Mã đơn hàng:</span>
                <span><strong><?php echo htmlspecialchars($orderInfo['orderId']); ?></strong></span>
            </div>
            <div class="info-row">
                <span><i class="fas fa-user"></i> Người nhận:</span>
                <span><?php echo htmlspecialchars($orderInfo['tenNguoiNhan']); ?></span>
            </div>
            <div class="info-row">
                <span><i class="fas fa-phone"></i> Số điện thoại:</span>
                <span><?php echo htmlspecialchars($orderInfo['soDienThoai']); ?></span>
            </div>
            <div class="info-row">
                <span><i class="fas fa-box"></i> Số sản phẩm:</span>
                <span><?php echo count($orderInfo['items']); ?> sản phẩm</span>
            </div>
            <div class="info-row">
                <span><i class="fas fa-money-bill-wave"></i> Tổng tiền:</span>
                <span><?php echo number_format($orderInfo['total']); ?>₫</span>
            </div>
        </div>
        
        <div class="qr-section">
            <h5><i class="fas fa-qrcode"></i> Quét mã QR để thanh toán</h5>
            <div class="qr-code">
                <img src="<?php echo $qrCodeUrl; ?>" alt="QR Code MoMo" title="Quét mã QR này bằng ứng dụng MoMo">
            </div>
            <p style="margin-top: 1rem; color: #7f8c8d; font-size: 0.9rem;">
                <i class="fas fa-mobile-alt"></i> Mở ứng dụng MoMo và quét mã QR này
            </p>
        </div>
        
        <div class="phone-demo">
            <h6><i class="fas fa-mobile-alt"></i> Hướng dẫn test trên điện thoại:</h6>
            <ol>
                <li><strong>Tải ứng dụng MoMo</strong> từ App Store/Google Play</li>
                <li><strong>Đăng ký tài khoản</strong> hoặc đăng nhập</li>
                <li><strong>Mở ứng dụng</strong> và chọn "Quét mã QR"</li>
                <li><strong>Quét mã QR</strong> ở trên màn hình</li>
                <li><strong>Nhập số tiền:</strong> <?php echo number_format($total); ?>₫</li>
                <li><strong>Xác nhận thanh toán</strong> trong ứng dụng</li>
            </ol>
        </div>
        
        <div class="payment-steps">
            <h5><i class="fas fa-list-ol"></i> Hướng dẫn thanh toán</h5>
            <div class="step">
                <div class="step-number">1</div>
                <span>Mở ứng dụng MoMo trên điện thoại</span>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <span>Chọn "Quét mã QR" hoặc "Thanh toán"</span>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <span>Quét mã QR ở trên</span>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <span>Xác nhận thông tin và thanh toán</span>
            </div>
            <div class="step">
                <div class="step-number">5</div>
                <span>Nhận thông báo thanh toán thành công</span>
            </div>
        </div>
        
        <button class="btn-momo" onclick="simulatePayment()">
            <i class="fas fa-mobile-alt"></i> Mở ứng dụng MoMo
        </button>
        
        <button class="btn-cancel" onclick="cancelPayment()">
            <i class="fas fa-times"></i> Hủy thanh toán
        </button>
        
        <div class="countdown">
            <p><i class="fas fa-clock"></i> Phiên thanh toán sẽ hết hạn sau <strong><span id="countdown">300</span></strong> giây...</p>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Countdown timer
        let countdown = 300; // 5 minutes
        const countdownElement = document.getElementById('countdown');
        
        const timer = setInterval(function() {
            countdown--;
            const minutes = Math.floor(countdown / 60);
            const seconds = countdown % 60;
            countdownElement.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
            
            if (countdown <= 0) {
                clearInterval(timer);
                alert('Phiên thanh toán đã hết hạn!');
                window.location.href = 'View/GioHang/Complete_TrangGioHang_View.php';
            }
        }, 1000);
        
        function simulatePayment() {
            if (confirm('Bạn có chắc muốn thanh toán qua MoMo?\n\n💡 TIP: Trong demo này, bạn có thể:\n1. Mở ứng dụng MoMo trên điện thoại\n2. Quét mã QR ở trên\n3. Test quy trình thanh toán thật\n\nHoặc click OK để giả lập thanh toán thành công.')) {
                // Simulate successful payment
                setTimeout(function() {
                    window.location.href = 'View/ThongBao/DatHangThanhCong_View.php?orderId=<?php echo $orderId; ?>&payment=momo';
                }, 2000);
                
                // Show loading
                document.querySelector('.btn-momo').innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang xử lý...';
                document.querySelector('.btn-momo').disabled = true;
            }
        }
        
        function cancelPayment() {
            if (confirm('Bạn có chắc muốn hủy thanh toán?')) {
                window.location.href = 'View/GioHang/Complete_TrangGioHang_View.php';
            }
        }
        
        // Auto refresh QR code every 30 seconds
        setInterval(function() {
            // In real implementation, this would generate a new QR code
            console.log('Refreshing QR code...');
        }, 30000);
        
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to QR code
            const qrCode = document.querySelector('.qr-code img');
            if (qrCode) {
                qrCode.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                qrCode.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            }
        });
    </script>
</body>
</html>