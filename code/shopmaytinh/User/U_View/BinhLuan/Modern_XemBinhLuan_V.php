<div class="content-card">
    <h2 class="mb-4">
        <i class="fas fa-comments"></i>
        Quản lý bình luận
    </h2>
    
    <!-- Action Buttons -->
    <div class="row mb-4">
        <div class="col-md-12">
            <a href="index.php?act=xembinhluan" class="btn-modern">
                <i class="fas fa-sync-alt"></i> Làm mới
            </a>
            <a href="index.php?act=xoabl" class="btn-danger-modern">
                <i class="fas fa-trash"></i> Xóa bình luận đã chọn
            </a>
        </div>
    </div>
    
    <!-- Comments Table -->
    <div class="modern-table">
        <table>
            <thead>
                <tr>
                    <th>Người bình luận</th>
                    <th>Đánh giá</th>
                    <th>Nội dung</th>
                    <th>Thời gian</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($bl = mysqli_fetch_array($qr)) {
                    // Convert rating
                    $rating = '';
                    $ratingClass = '';
                    switch ($bl['DanhGia']) {
                        case 'verybad':
                            $rating = "1/5 ★";
                            $ratingClass = 'text-danger';
                            break;
                        case 'bad':
                            $rating = "2/5 ★";
                            $ratingClass = 'text-warning';
                            break;
                        case 'normal':
                            $rating = "3/5 ★";
                            $ratingClass = 'text-info';
                            break;
                        case 'good':
                            $rating = "4/5 ★";
                            $ratingClass = 'text-primary';
                            break;
                        case 'verygood':
                            $rating = "5/5 ★";
                            $ratingClass = 'text-success';
                            break;
                        default:
                            $rating = "Chưa đánh giá";
                            $ratingClass = 'text-muted';
                            break;
                    }
                ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="user-avatar" style="width: 30px; height: 30px; font-size: 0.8rem; margin-right: 10px;">
                                <?php echo strtoupper(substr($bl['TenNguoiBinhLuan'], 0, 1)); ?>
                            </div>
                            <strong><?php echo htmlspecialchars($bl['TenNguoiBinhLuan']); ?></strong>
                        </div>
                    </td>
                    <td>
                        <span class="<?php echo $ratingClass; ?> font-weight-bold">
                            <?php echo $rating; ?>
                        </span>
                    </td>
                    <td>
                        <div style="max-width: 300px; word-wrap: break-word;">
                            <?php echo htmlspecialchars($bl['NoiDungBinhLuan']); ?>
                        </div>
                    </td>
                    <td>
                        <small class="text-muted">
                            <?php echo $bl['ThoiGian']; ?>
                        </small>
                    </td>
                    <td>
                        <a href="index.php?act=xoabl&id=<?php echo $bl['id']; ?>&time=<?php echo $bl['ThoiGian']; ?>" 
                           class="btn btn-sm btn-outline-danger"
                           onclick="return confirm('Bạn có chắc muốn xóa bình luận này?')">
                            <i class="fas fa-trash"></i> Xóa
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <!-- Statistics -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="content-card">
                <h4 class="mb-3">
                    <i class="fas fa-chart-bar"></i>
                    Thống kê bình luận
                </h4>
                <div class="row text-center">
                    <div class="col-md-2">
                        <div class="p-3">
                            <h5 class="text-danger">1★</h5>
                            <small>Rất tệ</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="p-3">
                            <h5 class="text-warning">2★</h5>
                            <small>Tệ</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="p-3">
                            <h5 class="text-info">3★</h5>
                            <small>Bình thường</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="p-3">
                            <h5 class="text-primary">4★</h5>
                            <small>Tốt</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="p-3">
                            <h5 class="text-success">5★</h5>
                            <small>Rất tốt</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="p-3">
                            <h5 class="text-muted">Tổng</h5>
                            <small><?php echo mysqli_num_rows($qr); ?> bình luận</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
