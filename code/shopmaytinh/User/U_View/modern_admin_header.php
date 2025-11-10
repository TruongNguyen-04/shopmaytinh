<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<div class="admin-header">
    <div class="d-flex justify-content-between align-items-center">
        <h1>
            <i class="fas fa-tachometer-alt"></i>
            Admin Dashboard
        </h1>
        <div class="user-info">
            <div class="user-avatar">
                <?php 
                $user = $_SESSION['user'] ?? 'Admin';
                echo strtoupper(substr($user, 0, 1)); 
                ?>
            </div>
            <div>
                <div style="font-weight: 600;"><?php echo $user; ?></div>
                <small style="opacity: 0.8;">Administrator</small>
            </div>
            <a href="../../index.php" class="btn btn-outline-light btn-sm">
                <i class="fas fa-external-link-alt"></i> Trang chủ
            </a>
            <a href="../../Controller/logout.php" class="btn btn-outline-light btn-sm">
                <i class="fas fa-sign-out-alt"></i> Đăng xuất
            </a>
        </div>
    </div>
</div>
