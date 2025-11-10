<?php
session_start();

// Transfer products from old cart format to new format
if (isset($_SESSION['arMua']) && is_array($_SESSION['arMua'])) {
    $newCart = [];
    
    foreach ($_SESSION['arMua'] as $item) {
        $newCart[] = [
            'id' => $item['id'],
            'name' => $item['TenSanPham'],
            'price' => $item['GiaTien'],
            'quantity' => $item['SoLuong'],
            'color' => $item['MauSac'],
            'image' => 'product' . $item['id'] . '.jpg' // Default image
        ];
    }
    
    // Set new cart format
    $_SESSION['cart'] = $newCart;
    
    // Clear old cart
    unset($_SESSION['arMua']);
    
    // Redirect to new cart page
    header("Location: Complete_TrangGioHang_View.php");
    exit;
} else {
    // No products in old cart, redirect to new cart
    header("Location: Complete_TrangGioHang_View.php");
    exit;
}
?>
