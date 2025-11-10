<?php
session_start();

// Simple cart with basic products
$_SESSION['cart'] = [
    [
        'id' => 1,
        'name' => 'iPhone 15',
        'price' => 25000000,
        'quantity' => 1,
        'color' => 'Xanh',
        'image' => 'iphone.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Samsung Galaxy S24',
        'price' => 22000000,
        'quantity' => 1,
        'color' => 'Đen',
        'image' => 'samsung.jpg'
    ]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Giỏ Hàng Đơn Giản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: #f8f9fa; }
        .cart-item { background: white; border-radius: 10px; padding: 1rem; margin-bottom: 1rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .product-name { font-weight: bold; color: #2c3e50; }
        .product-price { color: #e74c3c; font-weight: bold; }
        .total-section { background: #2c3e50; color: white; padding: 1rem; border-radius: 10px; }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2><i class="fas fa-shopping-cart"></i> Giỏ Hàng</h2>
        
        <?php
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $itemTotal = $item['price'] * $item['quantity'];
            $total += $itemTotal;
        ?>
        <div class="cart-item">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="product-name"><?php echo htmlspecialchars($item['name']); ?></div>
                    <small class="text-muted">Màu: <?php echo htmlspecialchars($item['color']); ?></small>
                </div>
                <div class="col-md-2">
                    <div class="product-price"><?php echo number_format($item['price']); ?>₫</div>
                </div>
                <div class="col-md-2">
                    <input type="number" value="<?php echo $item['quantity']; ?>" min="1" class="form-control">
                </div>
                <div class="col-md-2">
                    <div class="product-price"><?php echo number_format($itemTotal); ?>₫</div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <div class="total-section">
            <div class="row">
                <div class="col-md-8">
                    <h4>Tổng cộng</h4>
                </div>
                <div class="col-md-4 text-right">
                    <h4><?php echo number_format($total); ?>₫</h4>
                </div>
            </div>
        </div>
        
        <div class="mt-4">
            <h4>Thông tin đặt hàng</h4>
            <form method="POST" action="process_order.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên người nhận</label>
                            <input type="text" name="tenNguoiNhan" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="tel" name="soDienThoai" class="form-control" required>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <textarea name="diaChi" class="form-control" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label>Phương thức thanh toán</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" value="momo" id="momo" required>
                        <label class="form-check-label" for="momo">
                            <i class="fas fa-mobile-alt" style="color: #d82d8b;"></i> Ví MoMo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" value="cod" id="cod">
                        <label class="form-check-label" for="cod">
                            <i class="fas fa-money-bill-wave" style="color: #27ae60;"></i> Thanh toán khi nhận hàng (COD)
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success btn-lg">
                    <i class="fas fa-credit-card"></i> Đặt hàng ngay
                </button>
            </form>
        </div>
    </div>
</body>
</html>
