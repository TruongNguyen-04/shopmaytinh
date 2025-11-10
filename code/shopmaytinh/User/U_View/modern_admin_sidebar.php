<div class="admin-sidebar">
    <div class="sidebar-menu">
        <ul class="menu">
            <!-- Dashboard -->
            <li>
                <a href="index.php" class="<?php echo !isset($_GET['act']) ? 'active' : ''; ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            
            <!-- Sản phẩm -->
            <li>
                <a href="#" onclick="toggleSubmenu('products')">
                    <i class="fas fa-box"></i>
                    Sản phẩm
                    <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                </a>
                <ul class="submenu" id="products">
                    <li><a href="index.php?act=spdb">Sản phẩm đang bán</a></li>
                    <li><a href="index.php?act=spgg">Sản phẩm giảm giá</a></li>
                    <li><a href="index.php?act=themsp">Thêm sản phẩm</a></li>
                    <li><a href="index.php?act=themspgiamgia">Thêm sản phẩm giảm giá</a></li>
                    <li><a href="index.php?act=themchitietsp">Chi tiết sản phẩm</a></li>
                    <li><a href="index.php?act=themmausac">Ảnh & Màu sắc</a></li>
                    <li><a href="index.php?act=sspdb">Sửa & Xóa</a></li>
                </ul>
            </li>
            
            <!-- Người dùng -->
            <li>
                <a href="#" onclick="toggleSubmenu('users')">
                    <i class="fas fa-users"></i>
                    Người dùng
                    <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                </a>
                <ul class="submenu" id="users">
                    <li><a href="index.php?act=danhsachnguoidung">Danh sách người dùng</a></li>
                    <li><a href="index.php?act=xoanguoidung">Phân quyền & Xóa</a></li>
                </ul>
            </li>
            
            <!-- Đơn hàng -->
            <li>
                <a href="#" onclick="toggleSubmenu('orders')">
                    <i class="fas fa-shopping-cart"></i>
                    Đơn hàng
                    <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                </a>
                <ul class="submenu" id="orders">
                    <li><a href="index.php?act=donhang">Danh sách đơn hàng</a></li>
                    <li><a href="index.php?act=xemdonhang">Xem chi tiết</a></li>
                </ul>
            </li>
            
            <!-- Bình luận -->
            <li>
                <a href="index.php?act=xembinhluan">
                    <i class="fas fa-comments"></i>
                    Bình luận
                </a>
            </li>
            
            <!-- Cài đặt -->
            <li>
                <a href="#" onclick="toggleSubmenu('settings')">
                    <i class="fas fa-cog"></i>
                    Cài đặt
                    <i class="fas fa-chevron-down" style="margin-left: auto;"></i>
                </a>
                <ul class="submenu" id="settings">
                    <li><a href="index.php?act=taikhoanadmin">Tài khoản admin</a></li>
                    <li><a href="../../index.php">Trang bán hàng</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<script>
function toggleSubmenu(id) {
    const submenu = document.getElementById(id);
    const chevron = event.target.querySelector('.fa-chevron-down');
    
    if (submenu.classList.contains('show')) {
        submenu.classList.remove('show');
        chevron.style.transform = 'rotate(0deg)';
    } else {
        // Close all other submenus
        document.querySelectorAll('.submenu').forEach(menu => {
            menu.classList.remove('show');
        });
        document.querySelectorAll('.fa-chevron-down').forEach(icon => {
            icon.style.transform = 'rotate(0deg)';
        });
        
        submenu.classList.add('show');
        chevron.style.transform = 'rotate(180deg)';
    }
}

// Auto-open submenu if current page is in it
document.addEventListener('DOMContentLoaded', function() {
    const currentUrl = window.location.href;
    const submenus = document.querySelectorAll('.submenu a');
    
    submenus.forEach(link => {
        if (link.href === currentUrl) {
            const submenu = link.closest('.submenu');
            const parent = link.closest('li').querySelector('a');
            const chevron = parent.querySelector('.fa-chevron-down');
            
            submenu.classList.add('show');
            chevron.style.transform = 'rotate(180deg)';
        }
    });
});
</script>
