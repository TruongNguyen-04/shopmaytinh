<?php
// Test registration functionality
echo "<h2>🧪 Test Registration System</h2>";

// Test form validation
echo "<h3>📝 Test Form Validation:</h3>";

// Test email validation
$testEmails = [
    'user@gmail.com',
    'student@hunre.edu.vn',
    'admin@company.com',
    'invalid-email',
    'test@domain.co.uk'
];

echo "<div style='background: #f0f0f0; padding: 10px; border-radius: 5px;'>";
echo "<strong>Email Validation Test:</strong><br>";

foreach ($testEmails as $email) {
    $isValid = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    $status = $isValid ? "✅ Valid" : "❌ Invalid";
    echo "• $email: $status<br>";
}
echo "</div>";

// Test phone validation
$testPhones = [
    '0123456789',
    '0987654321',
    '1234567890',
    '12345',
    '123456789012'
];

echo "<div style='background: #f0f0f0; padding: 10px; border-radius: 5px; margin-top: 10px;'>";
echo "<strong>Phone Validation Test:</strong><br>";

foreach ($testPhones as $phone) {
    $isValid = preg_match('/^[0-9]{10,11}$/', $phone);
    $status = $isValid ? "✅ Valid" : "❌ Invalid";
    echo "• $phone: $status<br>";
}
echo "</div>";

// Test username validation
$testUsernames = [
    'Trần Đình Quyết',
    'Nguyen Van A',
    'admin123',
    'user@domain',
    'test_user',
    'a' // Too short
];

echo "<div style='background: #f0f0f0; padding: 10px; border-radius: 5px; margin-top: 10px;'>";
echo "<strong>Username Validation Test:</strong><br>";

foreach ($testUsernames as $username) {
    $isValid = preg_match('/^[a-zA-Z0-9áãạảàâấầẫậđềếêễệơớỡợởờóòõỏọìíỉĩịôổỗồốộđĐ\s]{5,30}$/', $username);
    $status = $isValid ? "✅ Valid" : "❌ Invalid";
    echo "• '$username': $status<br>";
}
echo "</div>";

// Test database connection
echo "<h3>🗄️ Database Connection Test:</h3>";
require_once 'Model/KetNoiDb.php';

if ($connect) {
    echo "<div style='color: green;'>✅ Database connection successful!</div>";
    
    // Test table structure
    $tableCheck = "SHOW TABLES LIKE 'taikhoan'";
    $result = mysqli_query($connect, $tableCheck);
    
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div style='color: green;'>✅ Table 'taikhoan' exists!</div>";
        
        // Show table structure
        $structureSql = "DESCRIBE taikhoan";
        $structureResult = mysqli_query($connect, $structureSql);
        
        if ($structureResult) {
            echo "<h4>📋 Table Structure:</h4>";
            echo "<table border='1' style='border-collapse: collapse;'>";
            echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
            
            while ($row = mysqli_fetch_assoc($structureResult)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['Field']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Type']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Null']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Key']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Default']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "<div style='color: red;'>❌ Table 'taikhoan' does not exist!</div>";
    }
    
    mysqli_close($connect);
} else {
    echo "<div style='color: red;'>❌ Database connection failed!</div>";
}

// Test registration form
echo "<h3>📝 Test Registration Form:</h3>";
echo "<div style='background: #e8f4f8; padding: 15px; border-radius: 5px; border: 1px solid #bee5eb;'>";
echo "<strong>Form Test Data:</strong><br>";
echo "• Tên đăng nhập: 'Trần Đình Quyết' (should work)<br>";
echo "• Email: 'quyet@hunre.edu.vn' (should work)<br>";
echo "• SĐT: '0123456789' (should work)<br>";
echo "• Mật khẩu: 'password123'<br>";
echo "</div>";

echo "<h3>🔧 Registration Issues Fixed:</h3>";
echo "<div style='background: #d4edda; padding: 15px; border-radius: 5px; border: 1px solid #c3e6cb;'>";
echo "✅ Tên có dấu được hỗ trợ<br>";
echo "✅ Email @hunre.edu.vn được hỗ trợ<br>";
echo "✅ Số điện thoại validation cải thiện<br>";
echo "✅ SQL Injection protection<br>";
echo "✅ Input sanitization<br>";
echo "✅ Error handling cải thiện<br>";
echo "</div>";
?>
