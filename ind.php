<?php
include 'config.php'; 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ? AND password = ?");
    $stmt->execute([$email, $password]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
        $_SESSION['admin'] = $admin['email'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}


if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .login-container a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        
        @media (max-width: 576px) {
            .login-container {
                padding: 1.5rem;
            }

            .login-container h2 {
                font-size: 1.5rem;
            }

            .form-control {
                padding: 0.5rem 1rem;
            }

            .btn-primary {
                padding: 0.5rem 1rem;
            }
        }
        
         body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            background-attachment: fixed; 
            background-size: cover;
            align-items: center;
            margin: 0;
        }
        .login-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 2rem;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
}
.login-container {
            min-width: 400px;
            margin-top: 10vh;
            color:black;
        }
        .login-container .form-control {
            font-size: 1.1rem;
            padding: 10px;
            color:black;
        }
        .login-container .btn {
            font-size: 1.1rem;
            padding: 10px;
        }
        .login-container h2 {
            font-size: 2rem;
        }
        .login-container {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 2rem;
    border-radius: 15px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: background 0.4s, box-shadow 0.4s;
    color:black
}
.login-container input {
    width: 100%;
    padding: 0.75rem;
    margin-bottom: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 25px;
    background: rgba(255, 255, 255, 0.1);
    color: #333;
    transition: background 0.3s, border-color 0.3s;
}

.login-container input:focus {
    border-color: #667eea;
    background: rgba(255, 255, 255, 0.2);
}
    </style>
</head>
<body>
<div class="container">
        <?php if (!isset($_SESSION['admin'])): ?>
            
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow login-container">
                        <div class="card-body p-4">
                            <h2 class="card-title text-center mb-4">Login</h2>
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger"><?= $error ?></div>
                            <?php endif; ?>
                            <form method="POST">
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-lg w-100">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>

</body>
</html>