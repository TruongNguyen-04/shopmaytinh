<?php
// Script to check admin accounts and database issues
require_once 'Model/KetNoiDb.php';

echo "<h2>🔍 Kiểm Tra Database và Admin Accounts</h2>";

// Check database connection
if (!$connect) {
    echo "<div style='color: red;'>❌ Lỗi kết nối database!</div>";
    exit;
}

echo "<div style='color: green;'>✅ Kết nối database thành công!</div>";

// Check admin accounts
echo "<h3>👤 Admin Accounts:</h3>";
$sql = "SELECT TenDangNhap, CapDo, Email FROM taikhoan WHERE CapDo = 'MAX' OR CapDo LIKE '%admin%' OR CapDo LIKE '%ADMIN%'";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th>Tên Đăng Nhập</th><th>Cấp Độ</th><th>Email</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['TenDangNhap']) . "</td>";
        echo "<td>" . htmlspecialchars($row['CapDo']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div style='color: orange;'>⚠️ Không tìm thấy admin accounts!</div>";
}

// Check recent registrations
echo "<h3>📝 Recent Registrations (Last 10):</h3>";
$sql = "SELECT TenDangNhap, Email, SoDienThoai, CapDo FROM taikhoan ORDER BY TenDangNhap DESC LIMIT 10";
$result = mysqli_query($connect, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th>Tên Đăng Nhập</th><th>Email</th><th>SĐT</th><th>Cấp Độ</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['TenDangNhap']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['SoDienThoai']) . "</td>";
        echo "<td>" . htmlspecialchars($row['CapDo']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<div style='color: red;'>❌ Không có dữ liệu!</div>";
}

// Check table structure
echo "<h3>🗄️ Table Structure:</h3>";
$sql = "DESCRIBE taikhoan";
$result = mysqli_query($connect, $sql);

if ($result) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['Field']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Type']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Null']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Key']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Default']) . "</td>";
        echo "<td>" . htmlspecialchars($row['Extra']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Test registration process
echo "<h3>🧪 Test Registration Process:</h3>";
echo "<div style='background: #f0f0f0; padding: 10px; border-radius: 5px;'>";

// Test config file
if (file_exists('config/database.php')) {
    echo "✅ Config file exists<br>";
} else {
    echo "❌ Config file missing<br>";
}

// Test functions
if (function_exists('executeQuery')) {
    echo "✅ executeQuery function available<br>";
} else {
    echo "❌ executeQuery function missing<br>";
}

if (function_exists('isValidEmail')) {
    echo "✅ isValidEmail function available<br>";
} else {
    echo "❌ isValidEmail function missing<br>";
}

echo "</div>";

mysqli_close($connect);
?>
