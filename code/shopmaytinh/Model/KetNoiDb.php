<?php 
	// Include centralized database configuration
	require_once __DIR__ . '/../config/database.php';
	
	// Get database connection
	$connect = getDBConnection();
	
	if (!$connect) {
		die("Lỗi Kết Nối Tới Cơ Sở Dữ Liệu");
	}
?>