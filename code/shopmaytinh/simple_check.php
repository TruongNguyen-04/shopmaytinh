<?php
echo "=== KIỂM TRA ADMIN ACCOUNTS ===\n\n";

// Test database connection
require_once 'Model/KetNoiDb.php';

if (!$connect) {
    echo "❌ Lỗi kết nối database!\n";
    exit;
}

echo "✅ Kết nối database thành công!\n\n";

// Check admin accounts
echo "👤 Admin Accounts:\n";
$sql = "SELECT TenDangNhap, CapDo, Email FROM taikhoan WHERE CapDo = 'MAX'";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "Tìm thấy " . mysqli_num_rows($result) . " admin account(s):\n";
    echo "----------------------------------------\n";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Tên: " . $row['TenDangNhap'] . "\n";
        echo "Cấp độ: " . $row['CapDo'] . "\n";
        echo "Email: " . $row['Email'] . "\n";
        echo "----------------------------------------\n";
    }
} else {
    echo "⚠️ Không tìm thấy admin accounts!\n";
    echo "Chạy create_admin.php để tạo admin mặc định.\n";
}

// Check total users
echo "\n📊 Thống kê:\n";
$totalSql = "SELECT COUNT(*) as total FROM taikhoan";
$totalResult = mysqli_query($connect, $totalSql);
$total = mysqli_fetch_assoc($totalResult)['total'];
echo "Tổng số tài khoản: $total\n";

mysqli_close($connect);
echo "\n✅ Hoàn thành!\n";
?>
