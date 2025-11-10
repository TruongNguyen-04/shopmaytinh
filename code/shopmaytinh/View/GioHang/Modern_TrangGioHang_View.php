<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Giỏ Hàng - Electronic Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .cart-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        }
        
        .cart-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .cart-header h1 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .cart-item {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .cart-item:hover {
            transform: translateY(-2px);
        }
        
        .product-image {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
        }
        
        .product-info h5 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .product-price {
            color: #e74c3c;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .quantity-btn {
            width: 35px;
            height: 35px;
            border: none;
            border-radius: 50%;
            background: #3498db;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .quantity-btn:hover {
            background: #2980b9;
            transform: scale(1.1);
        }
        
        .quantity-input {
            width: 60px;
            text-align: center;
            border: 2px solid #ecf0f1;
            border-radius: 8px;
            padding: 0.5rem;
        }
        
        .remove-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .remove-btn:hover {
            background: #c0392b;
            transform: translateY(-1px);
        }
        
        .order-form {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .form-group label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            border: 2px solid #ecf0f1;
            border-radius: 10px;
            padding: 0.8rem 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }
        
        .btn-checkout {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-checkout:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
        }
        
        .total-section {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 1rem;
        }
        
        .total-amount {
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .empty-cart {
            text-align: center;
            padding: 3rem;
            color: #7f8c8d;
        }
        
        .empty-cart i {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: rgba(44, 62, 80, 0.9);">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">
                <i class="fas fa-shopping-cart"></i> Electronic Shop
            </a>
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="../../index.php">
                    <i class="fas fa-home"></i> Trang chủ
                </a>
                <?php if (isset($_SESSION['user'])): ?>
                    <a class="nav-link" href="../../Controller/logout.php">
                        <i class="fas fa-sign-out-alt"></i> Đăng xuất
                    </a>
                <?php else: ?>
                    <a class="nav-link" href="../../index.php?action=login">
                        <i class="fas fa-sign-in-alt"></i> Đăng nhập
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="cart-container">
            <div class="cart-header">
                <h1><i class="fas fa-shopping-cart"></i> Giỏ Hàng</h1>
                <p class="text-muted">Quản lý sản phẩm trong giỏ hàng của bạn</p>
            </div>

            <?php
            // Check if cart has items
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
                $total = 0;
            ?>
            
            <!-- Cart Items -->
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <?php $itemTotal = $item['quantity'] * $item['price']; ?>
                        <?php $total += $itemTotal; ?>
                        
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="../../Images/<?php echo htmlspecialchars($item['image']); ?>" 
                                         class="product-image" 
                                         alt="<?php echo htmlspecialchars($item['name']); ?>">
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="product-info">
                                        <h5><?php echo htmlspecialchars($item['name']); ?></h5>
                                        <p class="text-muted mb-0">
                                            <i class="fas fa-palette"></i> 
                                            <?php echo htmlspecialchars($item['color']); ?>
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="product-price">
                                        <?php echo number_format($item['price']); ?>₫
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="quantity-controls">
                                        <button class="quantity-btn" onclick="updateQuantity(<?php echo $id; ?>, -1)">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" 
                                               class="quantity-input" 
                                               value="<?php echo $item['quantity']; ?>" 
                                               min="1" 
                                               onchange="updateQuantity(<?php echo $id; ?>, this.value - <?php echo $item['quantity']; ?>)">
                                        <button class="quantity-btn" onclick="updateQuantity(<?php echo $id; ?>, 1)">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="col-md-1">
                                    <button class="remove-btn" onclick="removeItem(<?php echo $id; ?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Order Form -->
                <div class="col-md-4">
                    <div class="order-form">
                        <h4 class="mb-3">
                            <i class="fas fa-user"></i> Thông tin đặt hàng
                        </h4>
                        
                        <form method="POST" action="?cart=donhang">
                            <div class="form-group">
                                <label for="tenNguoiNhan">
                                    <i class="fas fa-user"></i> Tên người nhận
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="tenNguoiNhan" 
                                       name="tenNguoiNhan" 
                                       required>
                            </div>
                            
                            <div class="form-group">
                                <label for="diaChi">
                                    <i class="fas fa-map-marker-alt"></i> Địa chỉ
                                </label>
                                <textarea class="form-control" 
                                          id="diaChi" 
                                          name="diaChi" 
                                          rows="3" 
                                          required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="soDienThoai">
                                    <i class="fas fa-phone"></i> Số điện thoại
                                </label>
                                <input type="tel" 
                                       class="form-control" 
                                       id="soDienThoai" 
                                       name="soDienThoai" 
                                       required>
                            </div>
                            
                            <div class="total-section">
                                <div class="d-flex justify-content-between">
                                    <span>Tổng cộng:</span>
                                    <span class="total-amount"><?php echo number_format($total); ?>₫</span>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-checkout">
                                <i class="fas fa-credit-card"></i> Đặt hàng
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <?php else: ?>
                <!-- Empty Cart -->
                <div class="empty-cart">
                    <i class="fas fa-shopping-cart"></i>
                    <h3>Giỏ hàng trống</h3>
                    <p>Bạn chưa có sản phẩm nào trong giỏ hàng</p>
                    <a href="../../index.php" class="btn btn-primary">
                        <i class="fas fa-shopping-bag"></i> Tiếp tục mua sắm
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function updateQuantity(id, change) {
            const currentQuantity = parseInt(document.querySelector(`input[onchange*="${id}"]`).value);
            const newQuantity = Math.max(1, currentQuantity + change);
            
            // Update cart via AJAX
            $.post('../../Controller/GioHang/UpdateCart.php', {
                action: 'update',
                id: id,
                quantity: newQuantity
            }, function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert('Có lỗi xảy ra: ' + response.message);
                }
            }, 'json');
        }
        
        function removeItem(id) {
            if (confirm('Bạn có chắc muốn xóa sản phẩm này?')) {
                $.post('../../Controller/GioHang/UpdateCart.php', {
                    action: 'remove',
                    id: id
                }, function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('Có lỗi xảy ra: ' + response.message);
                    }
                }, 'json');
            }
        }
    </script>
</body>
</html>
