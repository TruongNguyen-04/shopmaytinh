<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Đặt Hàng Thành Công - Electronic Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .success-card {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        
        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            animation: bounce 1s ease-in-out;
        }
        
        .success-icon i {
            font-size: 3rem;
            color: white;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        .success-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .success-message {
            color: #7f8c8d;
            margin-bottom: 2rem;
        }
        
        .order-id {
            background: #ecf0f1;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        
        .order-id strong {
            color: #e74c3c;
            font-size: 1.2rem;
        }
        
        .btn-home {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            margin-right: 1rem;
        }
        
        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .btn-continue {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-continue:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .features {
            margin-top: 2rem;
            text-align: left;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #7f8c8d;
        }
        
        .feature-item i {
            color: #27ae60;
            margin-right: 1rem;
            width: 20px;
        }
        
        .countdown {
            margin-top: 1rem;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="success-card">
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        
        <h2 class="success-title">Đặt Hàng Thành Công!</h2>
        <p class="success-message">
            Cảm ơn bạn đã đặt hàng. Chúng tôi sẽ xử lý đơn hàng của bạn trong thời gian sớm nhất.
        </p>
        
        <?php if (isset($_GET['orderId'])): ?>
            <div class="order-id">
                <strong>Mã đơn hàng: <?php echo htmlspecialchars($_GET['orderId']); ?></strong>
            </div>
        <?php endif; ?>
        
        <div class="features">
            <div class="feature-item">
                <i class="fas fa-shipping-fast"></i>
                <span>Giao hàng trong 2-3 ngày làm việc</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-phone"></i>
                <span>Liên hệ: 1900-xxxx để theo dõi đơn hàng</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-alt"></i>
                <span>Bảo hành chính hãng 12 tháng</span>
            </div>
        </div>
        
        <div>
            <a href="../../index.php" class="btn-home">
                <i class="fas fa-home"></i> Về trang chủ
            </a>
            
            <a href="../../index.php" class="btn-continue">
                <i class="fas fa-shopping-bag"></i> Tiếp tục mua sắm
            </a>
        </div>
        
        <div class="countdown">
            <p>Tự động chuyển về trang chủ sau <span id="countdown">10</span> giây...</p>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        // Auto redirect after 10 seconds
        let countdown = 10;
        const countdownElement = document.getElementById('countdown');
        
        const timer = setInterval(function() {
            countdown--;
            countdownElement.textContent = countdown;
            
            if (countdown <= 0) {
                clearInterval(timer);
                window.location.href = '../../index.php';
            }
        }, 1000);
        
        // Stop countdown if user clicks any button
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                clearInterval(timer);
            });
        });
    </script>
</body>
</html>