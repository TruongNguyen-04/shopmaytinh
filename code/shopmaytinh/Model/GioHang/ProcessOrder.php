<?php
// Process complete order with proper foreign key handling
require_once 'KetNoiDb.php';

function processOrder($customerInfo, $cartItems) {
    global $connect;
    
    // Start transaction
    mysqli_autocommit($connect, false);
    
    try {
        // Generate unique order ID
        $orderId = 'DH' . date('Ymd') . rand(1000, 9999);
        
        // Insert customer info first
        $customerSql = "INSERT INTO tb_nguoidatmua(
            TenDangNhap, TenNguoiNhan, DiaChi, SoDienThoai, Email, 
            MaDonHang, TinhTrang, ThoiGianDat
        ) VALUES (?, ?, ?, ?, ?, ?, 'Đang xử lý', NOW())";
        
        $stmt = mysqli_prepare($connect, $customerSql);
        if (!$stmt) {
            throw new Exception("Prepare failed: " . mysqli_error($connect));
        }
        
        mysqli_stmt_bind_param($stmt, "ssssss", 
            $customerInfo['username'],
            $customerInfo['name'],
            $customerInfo['address'],
            $customerInfo['phone'],
            $customerInfo['email'],
            $orderId
        );
        
        if (!mysqli_stmt_execute($stmt)) {
            throw new Exception("Customer insert failed: " . mysqli_stmt_error($stmt));
        }
        mysqli_stmt_close($stmt);
        
        // Insert order items
        foreach ($cartItems as $item) {
            $itemSql = "INSERT INTO tb_donhang(
                id, TenNguoiNhan, TenSanPham, MauSac, SoLuong, 
                GiaTien, TongTienSp, MaDonHang, TinhTrang
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'Đang xử lý')";
            
            $stmt = mysqli_prepare($connect, $itemSql);
            if (!$stmt) {
                throw new Exception("Item prepare failed: " . mysqli_error($connect));
            }
            
            $totalPrice = $item['quantity'] * $item['price'];
            
            mysqli_stmt_bind_param($stmt, "isssiiis", 
                $item['id'],
                $customerInfo['name'],
                $item['name'],
                $item['color'],
                $item['quantity'],
                $item['price'],
                $totalPrice,
                $orderId
            );
            
            if (!mysqli_stmt_execute($stmt)) {
                throw new Exception("Item insert failed: " . mysqli_stmt_error($stmt));
            }
            mysqli_stmt_close($stmt);
        }
        
        // Commit transaction
        mysqli_commit($connect);
        mysqli_autocommit($connect, true);
        
        return ['success' => true, 'orderId' => $orderId];
        
    } catch (Exception $e) {
        // Rollback transaction
        mysqli_rollback($connect);
        mysqli_autocommit($connect, true);
        
        return ['success' => false, 'error' => $e->getMessage()];
    }
}

// Handle order processing
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tenNguoiNhan'])) {
    $customerInfo = [
        'username' => $_SESSION['user'] ?? 'guest',
        'name' => $_POST['tenNguoiNhan'],
        'address' => $_POST['diaChi'],
        'phone' => $_POST['soDienThoai'],
        'email' => $_POST['email'] ?? ''
    ];
    
    $result = processOrder($customerInfo, $_SESSION['cart'] ?? []);
    
    if ($result['success']) {
        // Clear cart
        $_SESSION['cart'] = [];
        
        // Redirect to success page
        header('Location: ../../View/ThongBao/DatHangThanhCong_View.php?orderId=' . $result['orderId']);
        exit;
    } else {
        // Show error
        echo "<div class='alert alert-danger'>Lỗi: " . htmlspecialchars($result['error']) . "</div>";
    }
}
?>
