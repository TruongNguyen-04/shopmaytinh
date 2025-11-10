<?php
session_start();

echo "=== KIỂM TRA SESSION ===\n\n";

if (isset($_SESSION['user'])) {
    echo "✅ Đã đăng nhập!\n";
    echo "User: " . $_SESSION['user'] . "\n";
    
    // Check user level
    require_once 'Model/KetNoiDb.php';
    if ($connect) {
        $sql = "SELECT CapDo FROM taikhoan WHERE TenDangNhap = ?";
        $stmt = mysqli_prepare($connect, $sql);
        mysqli_stmt_bind_param($stmt, "s", $_SESSION['user']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            echo "Level: " . $row['CapDo'] . "\n";
            
            if ($row['CapDo'] == 'MAX') {
                echo "✅ Có quyền admin!\n";
                echo "Admin URL: http://localhost/Mvc_Web/User/Admin/index.php\n";
            } else {
                echo "⚠️ Không có quyền admin!\n";
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    }
} else {
    echo "❌ Chưa đăng nhập!\n";
    echo "Vào: http://localhost/Mvc_Web/index.php?action=login\n";
    echo "Nhập: ADMIN / admin123\n";
}

echo "\n✅ Hoàn thành!\n";
?>
