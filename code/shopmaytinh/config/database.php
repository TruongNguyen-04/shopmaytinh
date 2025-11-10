<?php
/**
 * Database Configuration
 * Centralized database connection settings
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'electronic_shop');
define('DB_CHARSET', 'utf8mb4');

/**
 * Get database connection
 * @return mysqli|false Database connection or false on error
 */
function getDBConnection() {
    static $connection = null;
    
    if ($connection === null) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if (!$connection) {
            error_log("Database connection failed: " . mysqli_connect_error());
            return false;
        }
        
        // Set charset
        mysqli_set_charset($connection, DB_CHARSET);
    }
    
    return $connection;
}

/**
 * Execute prepared statement safely
 * @param string $sql SQL query with placeholders
 * @param string $types Parameter types (s=string, i=integer, d=double, b=blob)
 * @param mixed ...$params Parameters to bind
 * @return mysqli_result|false Query result or false on error
 */
function executeQuery($sql, $types = '', ...$params) {
    $connection = getDBConnection();
    if (!$connection) return false;
    
    $stmt = mysqli_prepare($connection, $sql);
    if (!$stmt) {
        error_log("Prepare failed: " . mysqli_error($connection));
        return false;
    }
    
    if (!empty($params)) {
        mysqli_stmt_bind_param($stmt, $types, ...$params);
    }
    
    if (!mysqli_stmt_execute($stmt)) {
        error_log("Execute failed: " . mysqli_stmt_error($stmt));
        mysqli_stmt_close($stmt);
        return false;
    }
    
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    
    return $result;
}

/**
 * Sanitize input data
 * @param string $data Input data
 * @return string Sanitized data
 */
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate email format
 * @param string $email Email to validate
 * @return bool True if valid email
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate Vietnamese phone number
 * @param string $phone Phone number to validate
 * @return bool True if valid phone
 */
function isValidPhone($phone) {
    return preg_match('/^[0-9]{10,11}$/', $phone);
}

/**
 * Generate random string
 * @param int $length String length
 * @return string Random string
 */
function generateRandomString($length = 5) {
    $characters = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
    $characters = implode('', $characters);
    $characters = str_shuffle($characters);
    return substr($characters, 0, $length);
}
?>
