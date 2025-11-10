<?php
echo "=== THÔNG TIN ADMIN CHI TIẾT ===\n\n";

require_once 'Model/KetNoiDb.php';

if (!$connect) {
    echo "❌ Lỗi kết nối database!\n";
    exit;
}

// Get admin details
$sql = "SELECT * FROM taikhoan WHERE CapDo = 'MAX'";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $admin = mysqli_fetch_assoc($result);
    
    echo "👤 THÔNG TIN ADMIN:\n";
    echo "==================\n";
    echo "Tên đăng nhập: " . $admin['TenDangNhap'] . "\n";
    echo "Email: " . $admin['Email'] . "\n";
    echo "Số điện thoại: " . $admin['SoDienThoai'] . "\n";
    echo "Cấp độ: " . $admin['CapDo'] . "\n";
    
    if (isset($admin['DiaChi'])) {
        echo "Địa chỉ: " . $admin['DiaChi'] . "\n";
    }
    
    if (isset($admin['MaNcc'])) {
        echo "Mã NCC: " . $admin['MaNcc'] . "\n";
    }
    
    echo "\n🔑 THÔNG TIN ĐĂNG NHẬP:\n";
    echo "======================\n";
    echo "Username: " . $admin['TenDangNhap'] . "\n";
    echo "Password: [Đã mã hóa MD5]\n";
    echo "Email: " . $admin['Email'] . "\n";
    
    echo "\n🌐 TRUY CẬP ADMIN:\n";
    echo "==================\n";
    echo "URL: http://localhost/Mvc_Web/User/index.php\n";
    echo "Hoặc: http://localhost/Mvc_Web/index.php?action=login\n";
    
} else {
    echo "❌ Không tìm thấy admin account!\n";
    echo "Chạy create_admin.php để tạo admin mới.\n";
}

// Show all users
echo "\n📋 TẤT CẢ TÀI KHOẢN:\n";
echo "===================\n";
$allSql = "SELECT TenDangNhap, Email, CapDo FROM taikhoan ORDER BY TenDangNhap";
$allResult = mysqli_query($connect, $allSql);

if ($allResult && mysqli_num_rows($allResult) > 0) {
    echo sprintf("%-20s %-30s %-10s\n", "Username", "Email", "Level");
    echo str_repeat("-", 60) . "\n";
    
    while ($row = mysqli_fetch_assoc($allResult)) {
        echo sprintf("%-20s %-30s %-10s\n", 
            $row['TenDangNhap'], 
            $row['Email'], 
            $row['CapDo'] ?? 'NULL'
        );
    }
} else {
    echo "Không có tài khoản nào.\n";
}

mysqli_close($connect);
echo "\n✅ Hoàn thành!\n";
?>
