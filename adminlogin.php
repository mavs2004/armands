<?php
session_start();
require_once 'config.php';

// Redirect to dashboard if already logged in
if (isset($_SESSION['admin_id'])) {
    header("Location: admin/dashboard.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ? AND password = ?");
        $stmt->execute([$email, $password]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin) {
            // Login successful
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_email'] = $admin['email'];
            $_SESSION['admin_name'] = $admin['full_name'];
            
            // Update last login
            $stmt = $conn->prepare("UPDATE admins SET last_login = NOW() WHERE id = ?");
            $stmt->execute([$admin['id']]);
            
            header("Location: admin/dashboard.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    } catch (PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymLife - Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('img/hero/wack.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
    
        
        .login-container {
            width: 400px;
            padding: 2rem;
            border-radius: 15px;
            background: rgba(0, 0, 0, 0.6);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .login-container h2 {
            color: white; /* Changed to white */
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Added shadow for better visibility */
        }
        
        .login-logo {
            margin-bottom: 1.5rem;
        }
        
        .login-logo img {
            max-height: 80px;
            width: auto;
        }
        
        .login-container h2 {
            color: white;
            margin-bottom: 1.5rem;
            font-weight: 600;
            font-family:"sans-serif","times new roman";
        }
        
        .login-container .form-control {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border-radius: 25px;
            border: 1px solid #ddd;
        }
        
        .login-container .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
        }
        
        .login-container .btn-primary {
            background-color: #667eea;
            border: none;
            padding: 0.75rem;
            border-radius: 25px;
            font-weight: 500;
        }
        
        .login-container .btn-primary:hover {
            background-color: #5a6fd1;
        }
        
        .alert-danger {
            border-radius: 25px;
        }
        
        @media (max-width: 576px) {
            .login-container {
                width: 90%;
                padding: 1.5rem;
            }
            
            .login-logo img {
                max-height: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
    <div class="login-logo">
            <a href="#">
                <img src="img/ARMANDO12.png" alt="GymLife Logo">
            </a>
        </div>
        <h2>Admin Login</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>