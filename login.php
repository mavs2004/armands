<?php
require_once 'config.php';

// Redirect if already logged in
if(isset($_SESSION['user_id'])) {
    header('location: index.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $data = [
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'username_err' => '',
        'password_err' => '',
    ];

    // Validate username
    if(empty($data['username'])) {
        $data['username_err'] = 'Please enter username or email';
    }

    // Validate password
    if(empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
    }

    // Check for user
    if(empty($data['username_err'])) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username OR email = :username");
        $stmt->execute(['username' => $data['username']]);
        if($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            if(password_verify($data['password'], $user['password'])) {
                // Create session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['email'] = $user['email'];
                
                // Update last login
                $stmt = $conn->prepare("UPDATE users SET last_login = NOW() WHERE id = :id");
                $stmt->execute(['id' => $user['id']]);
                
                // Set success message
                $_SESSION['login_success'] = 'Welcome back, ' . $user['username'] . '!';
                
                // Redirect to home
                header('location: index.php');
                exit();
            } else {
                $data['password_err'] = 'Password incorrect';
            }
        } else {
            $data['username_err'] = 'No account found with that username or email';
        }
    }
}

$page_title = 'Login';
require_once 'header.php';
?>
<style>
     /* Responsive adjustments */
     @media (max-width: 768px) {
        .navbar-brand {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1000;
        }
        
        .register-form, .login-form {
            margin-top: 60px; /* Add space for the fixed logo */
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Better readability */
            border-radius: 10px;
        }
        
        .register-section, .login-section {
            padding-top: 30px;
        }
        
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }
        
        .col-lg-6 {
            padding: 0;
        }
    }

    /* Make form inputs better on mobile */
    @media (max-width: 576px) {
        .form-control {
            font-size: 16px; /* Prevent zooming on focus in iOS */
        }
        
        label {
            font-size: 16px;
        }
        
        .btn {
            padding: 10px;
            font-size: 16px;
        }
    }
     body {
    overflow-x: hidden;
    position: relative;
}

.page-enter {
    position: absolute;
    top: 0;
    left: 100%;
    width: 100%;
    height: 100%;
    transition: transform 0.5s ease;
}

.page-enter-active {
    transform: translateX(-100%);
}

.page-exit {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: transform 0.5s ease;
}

.page-exit-active {
    transform: translateX(-100%);
}
.loading-bar {
    position: fixed;
    top: 0;
    left: 0;
    height: 3px;
    background-color: #e43c5c;
    width: 0%;
    z-index: 9999;
    transition: width 0.3s ease;
    
}
    h2{
        color:white;
        font-style:bold;
    }
    label{
color: white;
font-size: 20px;
font-family:"sans-serif","times new roman";
    }
    .login-section{
        background-color: rgba(0, 0, 0, 0.5);
        padding: 50px;
       
        position:relative;
    }
    register-section, .login-section {
    background-attachment: fixed;
}

@media (max-width: 768px) {
    .register-section, .login-section {
        background-attachment: scroll;
    }
}
</style>
<!-- Login Form -->
<section class="login-section" style="background-image: url('img/hero/wack.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-form">
                    <h2 class="text-center mb-4">Member Login</h2>
                    <?php flash('register_success'); ?>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-group mb-3">
                            <label for="username">Username or Email</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
                            <span class="invalid-feedback"><?php echo $data['username_err']; ?></span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                        <div class="form-group mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                            <a href="forgot-password.php" class="float-end">Forgot password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Don't have an account? <a href="register.php">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php ?>