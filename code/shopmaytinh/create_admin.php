<?php
// Script to create admin account
require_once 'Model/KetNoiDb.php';

echo "<h2>🔧 Tạo Admin Account</h2>";

if (!$connect) {
    echo "<div style='color: red;'>❌ Lỗi kết nối database!</div>";
    exit;
}

// Check if admin already exists
$checkSql = "SELECT TenDangNhap FROM taikhoan WHERE CapDo = 'MAX'";
$result = mysqli_query($connect, $checkSql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<div style='color: orange;'>⚠️ Admin account đã tồn tại!</div>";
    
    // Show existing admin
    $adminSql = "SELECT TenDangNhap, Email, CapDo FROM taikhoan WHERE CapDo = 'MAX'";
    $adminResult = mysqli_query($connect, $adminSql);
    
    if ($adminResult && mysqli_num_rows($adminResult) > 0) {
        echo "<h3>👤 Admin hiện tại:</h3>";
        echo "<table border='1' style='border-collapse: collapse;'>";
        echo "<tr><th>Tên Đăng Nhập</th><th>Email</th><th>Cấp Độ</th></tr>";
        
        while ($row = mysqli_fetch_assoc($adminResult)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['TenDangNhap']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['CapDo']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} else {
    // Create admin account
    $adminUsername = "admin";
    $adminPassword = md5("admin123");
    $adminEmail = "admin@hunre.edu.vn";
    $adminPhone = "0123456789";
    
    $insertSql = "INSERT INTO taikhoan(TenDangNhap, MatKhau, Email, SoDienThoai, CapDo) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $insertSql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $adminUsername, $adminPassword, $adminEmail, $adminPhone, "MAX");
        
        if (mysqli_stmt_execute($stmt)) {
            echo "<div style='color: green;'>✅ Admin account đã được tạo thành công!</div>";
            echo "<div style='background: #f0f0f0; padding: 10px; border-radius: 5px; margin: 10px 0;'>";
            echo "<strong>Thông tin đăng nhập:</strong><br>";
            echo "👤 Tên đăng nhập: <strong>admin</strong><br>";
            echo "🔑 Mật khẩu: <strong>admin123</strong><br>";
            echo "📧 Email: admin@hunre.edu.vn<br>";
            echo "📱 SĐT: 0123456789<br>";
            echo "🔐 Cấp độ: MAX (Full quyền)";
            echo "</div>";
        } else {
            echo "<div style='color: red;'>❌ Lỗi tạo admin account: " . mysqli_stmt_error($stmt) . "</div>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<div style='color: red;'>❌ Lỗi prepare statement: " . mysqli_error($connect) . "</div>";
    }
}

// Show all accounts with MAX level
echo "<h3>🔍 Tất cả accounts có quyền admin:</h3>";
$allAdminSql = "SELECT TenDangNhap, Email, SoDienThoai, CapDo FROM taikhoan WHERE CapDo = 'MAX'";
$allAdminResult = mysqli_query($connect, $allAdminSql);

if ($allAdminResult && mysqli_num_rows($allAdminResult) > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th>Tên Đăng Nhập</th><th>Email</th><th>SĐT</th><th>Cấp Độ</th></tr>";
    
    while ($row = mysqli_fetch_assoc($allAdminResult)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['TenDangNhap']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['SoDienThoai']) . "</td>";
        echo "<td>" . htmlspecialchars($row['CapDo']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div style='color: red;'>❌ Không có admin accounts!</div>";
}

mysqli_close($connect);
?>
