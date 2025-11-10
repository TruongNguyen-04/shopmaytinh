<?php
session_start();

// Check if login form submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Simple admin check
    if ($username === 'ADMIN' && $password === 'admin123') {
        $_SESSION['user'] = 'ADMIN';
        header('Location: User/Admin/index.php?act=taikhoanadmin');
        exit;
    } else {
        $error = "Sai tên đăng nhập hoặc mật khẩu!";
    }
}

// Check if already logged in
if (isset($_SESSION['user']) && $_SESSION['user'] === 'ADMIN') {
    header('Location: User/Admin/index.php?act=taikhoanadmin');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quick Login - Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            width: 400px;
        }
        .btn-login {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            width: 100%;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="text-center mb-4">
            <i class="fas fa-user-shield fa-3x text-primary mb-3"></i>
            <h3>Admin Login</h3>
            <p class="text-muted">Đăng nhập vào hệ thống quản trị</p>
        </div>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="username">
                    <i class="fas fa-user"></i> Tên đăng nhập
                </label>
                <input type="text" 
                       class="form-control" 
                       id="username" 
                       name="username" 
                       value="ADMIN"
                       required>
            </div>
            
            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i> Mật khẩu
                </label>
                <input type="password" 
                       class="form-control" 
                       id="password" 
                       name="password" 
                       value="admin123"
                       required>
            </div>
            
            <button type="submit" name="login" class="btn btn-login">
                <i class="fas fa-sign-in-alt"></i> Đăng nhập
            </button>
        </form>
        
        <div class="text-center mt-3">
            <small class="text-muted">
                <i class="fas fa-info-circle"></i> 
                Username: ADMIN | Password: admin123
            </small>
        </div>
    </div>
</body>
</html>
