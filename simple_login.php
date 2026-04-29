<?php
require_once 'config/config.php';
require_once 'config/database.php';

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle login submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    try {
        $database = new Database();
        $db = $database->getConnection();
        
        $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];
            
            header("Location: modules/dashboard/index.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    } catch (Exception $e) {
        $error = "Login failed: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackcafe Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #ff7e5f;
            --bg: #0f0f12;
            --glass: rgba(255, 255, 255, 0.05);
            --border: rgba(255, 255, 255, 0.1);
        }
        body {
            margin: 0;
            background: var(--bg);
            color: white;
            font-family: 'Inter', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 50% 50%, #1a1a2e 0%, #0f0f12 100%);
        }
        .login-card {
            width: 400px;
            background: var(--glass);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 50px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        }
        .login-header { text-align: center; margin-bottom: 40px; }
        .login-header h1 span { color: var(--primary); }
        .form-group { margin-bottom: 25px; }
        .form-group label { display: block; margin-bottom: 10px; font-size: 0.85rem; color: #a0a0b0; }
        .form-group input {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.2);
            border: 1px solid var(--border);
            border-radius: 12px;
            color: white;
            outline: none;
            transition: 0.3s;
        }
        .form-group input:focus { border-color: var(--primary); box-shadow: 0 0 10px rgba(255, 126, 95, 0.3); }
        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-login:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(255, 126, 95, 0.4); }
        .error {
            background: rgba(255, 118, 117, 0.1);
            border: 1px solid rgba(255, 118, 117, 0.3);
            color: #ff7675;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .success {
            background: rgba(0, 184, 148, 0.1);
            border: 1px solid rgba(0, 184, 148, 0.3);
            color: #00b894;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
        .credentials {
            background: rgba(255, 126, 95, 0.1);
            border: 1px solid rgba(255, 126, 95, 0.3);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.85rem;
        }
        .credentials h4 { color: var(--primary); margin-bottom: 10px; }
        .credentials p { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <h1>Black<span>cafe</span></h1>
            <p style="color: #a0a0b0; font-size: 0.9rem;">Management System Login</p>
        </div>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <div class="credentials">
            <h4>Default Admin Credentials:</h4>
            <p><strong>Username:</strong> admin</p>
            <p><strong>Password:</strong> admin123</p>
        </div>
        
        <form method="POST">
            <div class="form-group">
                <label>USERNAME</label>
                <input type="text" name="username" value="admin" required>
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="password" value="admin123" required>
            </div>
            <button type="submit" name="login" class="btn-login">SIGN IN TO BLACKCAFE</button>
        </form>
    </div>
</body>
</html>
