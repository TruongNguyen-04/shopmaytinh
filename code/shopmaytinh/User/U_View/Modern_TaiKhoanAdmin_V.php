<div class="content-card">
    <h2 class="mb-4">
        <i class="fas fa-user-cog"></i>
        Thông tin tài khoản admin
    </h2>
    
    <?php if (!$acc): ?>
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-triangle"></i>
            Không thể tải thông tin tài khoản. Vui lòng đăng nhập lại.
        </div>
    <?php else: ?>
    
    <!-- Avatar Section -->
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <div class="user-avatar" style="width: 120px; height: 120px; font-size: 3rem; margin: 0 auto 20px;">
                <?php echo strtoupper(substr($acc['TenDangNhap'], 0, 1)); ?>
            </div>
            <h4><?php echo htmlspecialchars($acc['TenDangNhap']); ?></h4>
            <p class="text-muted">Administrator</p>
        </div>
    </div>
    
    <!-- Account Form -->
    <div class="modern-form">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tdn">
                            <i class="fas fa-user"></i> Tên đăng nhập
                        </label>
                        <input type="text" 
                               class="form-control" 
                               id="tdn" 
                               name="tdn" 
                               value="<?php echo htmlspecialchars($acc['TenDangNhap']); ?>"
                               readonly>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mk">
                            <i class="fas fa-lock"></i> Mật khẩu
                        </label>
                        <input type="password" 
                               class="form-control" 
                               id="mk" 
                               name="mk" 
                               value="<?php echo htmlspecialchars($acc['MatKhau']); ?>"
                               placeholder="Nhập mật khẩu mới">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i> Email
                        </label>
                        <input type="email" 
                               class="form-control" 
                               id="email" 
                               name="email" 
                               value="<?php echo htmlspecialchars($acc['Email']); ?>">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sdt">
                            <i class="fas fa-phone"></i> Số điện thoại
                        </label>
                        <input type="tel" 
                               class="form-control" 
                               id="sdt" 
                               name="sdt" 
                               value="<?php echo htmlspecialchars($acc['SoDienThoai']); ?>">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="dc">
                            <i class="fas fa-map-marker-alt"></i> Địa chỉ
                        </label>
                        <input type="text" 
                               class="form-control" 
                               id="dc" 
                               name="dc" 
                               value="<?php echo htmlspecialchars($acc['DiaChi']); ?>">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="img">
                            <i class="fas fa-image"></i> Đổi ảnh đại diện
                        </label>
                        <input type="file" 
                               class="form-control-file" 
                               id="img" 
                               name="img" 
                               accept="image/*">
                        <small class="form-text text-muted">
                            Chọn file ảnh (JPG, PNG, GIF) - Tối đa 2MB
                        </small>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <button type="submit" 
                            name="capnhattaikhoan" 
                            class="btn-modern">
                        <i class="fas fa-save"></i> Cập nhật thông tin
                    </button>
                    
                    <a href="index.php" class="btn btn-outline-secondary ml-2">
                        <i class="fas fa-arrow-left"></i> Quay lại
                    </a>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Account Info Card -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="content-card">
                <h4 class="mb-3">
                    <i class="fas fa-info-circle"></i>
                    Thông tin tài khoản
                </h4>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Quyền hạn:</strong> <span class="status-badge status-active">Administrator</span></p>
                        <p><strong>Trạng thái:</strong> <span class="status-badge status-active">Hoạt động</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($acc['Email']); ?></p>
                        <p><strong>SĐT:</strong> <?php echo htmlspecialchars($acc['SoDienThoai']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php endif; ?>
</div>
