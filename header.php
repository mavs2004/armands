<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="stylee.css" type="text/css">
    <style>
        .header-section {
            position: relative;
            padding: 0px 0; /* Adjust padding as needed */
            background-color: #000; /* Change to your desired color */
        }

        .logo {
            position: absolute;
            top: 0;
            left: 0;
            
        }
        @media (max-width: 768px) {
    .register-form, .login-form {
        width: 100%;
        margin: 0 auto;
    }
    
    .form-group {
        margin-bottom: 15px;
    }
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

    <!-- Header Section -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="logo">
                       
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">
                          
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>