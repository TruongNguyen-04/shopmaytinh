<?php
// Get statistics
$stats = [];

// Check if database connection exists
if (isset($connect) && $connect) {
    // Total products
    $productSql = "SELECT COUNT(*) as total FROM danh_sach_san_pham";
    $productResult = mysqli_query($connect, $productSql);
    $stats['products'] = $productResult ? mysqli_fetch_assoc($productResult)['total'] : 0;

    // Total users
    $userSql = "SELECT COUNT(*) as total FROM taikhoan";
    $userResult = mysqli_query($connect, $userSql);
    $stats['users'] = $userResult ? mysqli_fetch_assoc($userResult)['total'] : 0;

    // Total orders
    $orderSql = "SELECT COUNT(*) as total FROM don_hang";
    $orderResult = mysqli_query($connect, $orderSql);
    $stats['orders'] = $orderResult ? mysqli_fetch_assoc($orderResult)['total'] : 0;

    // Recent orders
    $recentOrderSql = "SELECT COUNT(*) as total FROM don_hang WHERE DATE(ngay_dat) = CURDATE()";
    $recentOrderResult = mysqli_query($connect, $recentOrderSql);
    $stats['today_orders'] = $recentOrderResult ? mysqli_fetch_assoc($recentOrderResult)['total'] : 0;
} else {
    // Default values if no connection
    $stats['products'] = 0;
    $stats['users'] = 0;
    $stats['orders'] = 0;
    $stats['today_orders'] = 0;
}
?>

<div class="admin-content fade-in-up">
    <div class="content-card">
        <h2 class="mb-4">
            <i class="fas fa-chart-line"></i>
            Tổng quan hệ thống
        </h2>
        
        <!-- Dashboard Cards -->
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <h3><?php echo $stats['products']; ?></h3>
                <p><i class="fas fa-box"></i> Sản phẩm</p>
            </div>
            
            <div class="dashboard-card">
                <h3><?php echo $stats['users']; ?></h3>
                <p><i class="fas fa-users"></i> Người dùng</p>
            </div>
            
            <div class="dashboard-card">
                <h3><?php echo $stats['orders']; ?></h3>
                <p><i class="fas fa-shopping-cart"></i> Đơn hàng</p>
            </div>
            
            <div class="dashboard-card">
                <h3><?php echo $stats['today_orders']; ?></h3>
                <p><i class="fas fa-calendar-day"></i> Đơn hôm nay</p>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <h3 class="mb-3">
                    <i class="fas fa-bolt"></i>
                    Thao tác nhanh
                </h3>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a href="index.php?act=themsp" class="btn-modern w-100 text-center">
                            <i class="fas fa-plus"></i> Thêm sản phẩm
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="index.php?act=danhsachnguoidung" class="btn-modern w-100 text-center">
                            <i class="fas fa-users"></i> Quản lý người dùng
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="index.php?act=donhang" class="btn-modern w-100 text-center">
                            <i class="fas fa-shopping-cart"></i> Xem đơn hàng
                        </a>
                    </div>
                    <div class="col-md-3 mb-3">
                        <a href="index.php?act=xembinhluan" class="btn-modern w-100 text-center">
                            <i class="fas fa-comments"></i> Bình luận
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="content-card">
                    <h4 class="mb-3">
                        <i class="fas fa-clock"></i>
                        Hoạt động gần đây
                    </h4>
                    <div class="list-group">
                        <div class="list-group-item">
                            <i class="fas fa-user-plus text-success"></i>
                            <span class="ml-2">Người dùng mới đăng ký</span>
                            <small class="text-muted float-right">5 phút trước</small>
                        </div>
                        <div class="list-group-item">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="ml-2">Đơn hàng mới</span>
                            <small class="text-muted float-right">10 phút trước</small>
                        </div>
                        <div class="list-group-item">
                            <i class="fas fa-comment text-warning"></i>
                            <span class="ml-2">Bình luận mới</span>
                            <small class="text-muted float-right">15 phút trước</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="content-card">
                    <h4 class="mb-3">
                        <i class="fas fa-chart-pie"></i>
                        Thống kê nhanh
                    </h4>
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="p-3">
                                <h5 class="text-primary"><?php echo $stats['products']; ?></h5>
                                <small>Sản phẩm</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3">
                                <h5 class="text-success"><?php echo $stats['users']; ?></h5>
                                <small>Người dùng</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3">
                                <h5 class="text-warning"><?php echo $stats['orders']; ?></h5>
                                <small>Đơn hàng</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3">
                                <h5 class="text-info"><?php echo $stats['today_orders']; ?></h5>
                                <small>Hôm nay</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.list-group-item {
    border: none;
    border-bottom: 1px solid #ecf0f1;
    padding: 1rem;
    display: flex;
    align-items: center;
}

.list-group-item:last-child {
    border-bottom: none;
}

.list-group-item i {
    width: 20px;
    text-align: center;
}
</style>
