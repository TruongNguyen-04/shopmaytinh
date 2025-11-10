<?php
echo "=== RESET ADMIN PASSWORD ===\n\n";

require_once 'Model/KetNoiDb.php';

if (!$connect) {
    echo "❌ Lỗi kết nối database!\n";
    exit;
}

// Reset admin password
$newPassword = "admin123";
$hashedPassword = md5($newPassword);
$adminUsername = "ADMIN";

$sql = "UPDATE taikhoan SET MatKhau = ? WHERE TenDangNhap = ? AND CapDo = 'MAX'";
$stmt = mysqli_prepare($connect, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $hashedPassword, $adminUsername);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "✅ Đã reset password admin thành công!\n\n";
        echo "🔑 THÔNG TIN ĐĂNG NHẬP MỚI:\n";
        echo "============================\n";
        echo "Username: ADMIN\n";
        echo "Password: admin123\n";
        echo "Email: abcccccccccccccccccc@gmail.com\n";
        echo "Level: MAX (Full quyền)\n\n";
        
        echo "🌐 TRUY CẬP ADMIN:\n";
        echo "==================\n";
        echo "1. Vào: http://localhost/Mvc_Web/index.php?action=login\n";
        echo "2. Nhập: ADMIN / admin123\n";
        echo "3. Hoặc: http://localhost/Mvc_Web/User/index.php\n";
        
    } else {
        echo "❌ Lỗi reset password: " . mysqli_stmt_error($stmt) . "\n";
    }
    mysqli_stmt_close($stmt);
} else {
    echo "❌ Lỗi prepare statement: " . mysqli_error($connect) . "\n";
}

mysqli_close($connect);
echo "\n✅ Hoàn thành!\n";
?>
