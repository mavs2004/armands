<?php
require_once 'config.php';
$page_title = 'Logout Confirmation';
require_once 'header.php';
?>

    <!-- Page Top Section -->
    <section class="page-top-section set-bg" data-setbg="assets/images/page-top-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Logout</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Logout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Logout Section -->
    <section class="logout-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="logout-box">
                        <h3 class="text-center mb-4">Are you sure you want to logout?</h3>
                        <div class="text-center">
                            <a href="logout.php" class="primary-btn me-3">Yes, Logout</a>
                            <a href="index.php" class="secondary-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Add confirmation dialog to all logout links
document.addEventListener('DOMContentLoaded', function() {
    const logoutLinks = document.querySelectorAll('a[href*="logout"]');
    
    logoutLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === 'logout.php' && !confirm('Are you sure you want to logout?')) {
                e.preventDefault();
            }
        });
    });
});
    </script>

<?php require_once 'footer.php'; ?>