<?php
session_start();

header('Content-Type: application/json');

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$action = $_POST['action'] ?? '';
$id = $_POST['id'] ?? '';
$quantity = $_POST['quantity'] ?? 1;

switch ($action) {
    case 'update':
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] = max(1, intval($quantity));
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Sản phẩm không tồn tại']);
        }
        break;
        
    case 'remove':
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Sản phẩm không tồn tại']);
        }
        break;
        
    default:
        echo json_encode(['success' => false, 'message' => 'Hành động không hợp lệ']);
        break;
}
?>
