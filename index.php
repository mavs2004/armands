<?php
require_once 'config.php';
$page_title = 'Home';

// Check for login success message
if(isset($_SESSION['login_success'])) {
    flash('login_success', $_SESSION['login_success']);
    unset($_SESSION['login_success']);
}

// Check for logout success message
if(isset($_SESSION['logout_success'])) {
    flash('logout_success', $_SESSION['logout_success'], 'alert alert-info');
    unset($_SESSION['logout_success']);
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym ">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym ni Armando</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="stylee.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <li><a href="./class-timetable.php"> Classes timetable</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./team.php">Our team</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./about-us.php">About us</a></li>
                        <li><a href="./class-timetable.php">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.php">Bmi calculate</a></li>
                        <li><a href="./team.php">Our team</a></li>
                       
                        <li><a href="./gallery.php">Gallery</a></li>
                        
                    </ul>
                </li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./register.php">Register</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
           
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/ARMANDO12.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                        <li class="active"><a href="./index.php"><i class="fas fa-home"></i></a></li>
                        <li><a href="./about-us.php"><i class="fas fa-info-circle"></i></a></li>
                        <li><a href="./class-details.php"><i class="fas fa-chalkboard-teacher"></i></a></li>
                        <li><a href="./services.php"><i class="fas fa-concierge-bell"></i></a></li>
                        <li><a href="./team.php"><i class="fas fa-users"></i></a></li>
                        <li><a href="#"><i class="fas fa-file-alt"></i></a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.php">About us</a></li>
                                    <li><a href="./class-timetable.php">Classes timetable</a></li>
                                    <li><a href="./bmi-calculator.php">Bmi calculate</a></li>
                                    <li><a href="./team.php">Our team</a></li>
                                    <li><a href="./gallery.php">Gallery</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="./contact.php"><i class="fas fa-envelope"></i></a></li>                             <?php if(!isset($_SESSION['user_id'])): ?>
                                <li><a href="register.php" class="secondary-btn"><i class="fas fa-user-plus"></i></a></li>
                    <?php else: ?>
                        <li><a href="logout.php" class="secondary-btn"><i class="fas fa-sign-out-alt"></i></a></li>                    <?php endif; ?>
                        <li><a href="profile.php"><i class="fas fa-user"></i></a></li>
                        </ul>
                       
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                           
                        </div>
                        <div class="to-social">
                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/img1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Set your goal.</span>
                                <h1>DON'T <strong>WISH </strong><h1>FOR IT <strong> WORK </strong> FOR IT.</h1>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/img2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Set your goal.</span>
                                <h1>DON'T <strong>WISH </strong><h1>FOR IT <strong> WORK </strong> FOR IT.</h1>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>Exercise is an essential activity that benefits everyone, regardless of age or fitness level. One effective and engaging way to meet your daily exercise needs is by going to the gym. Gyms cater to all ages and fitness levels, offering a wide variety of equipment and machines.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>At Verywell, we believe there is no one-size-fits-all approach to a healthy lifestyle. Successful eating plans need to be individualized and consider the whole person. Before starting a new diet plan, consult with a healthcare provider or a registered dietitian, especially if you have an underlying health condition.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Proffesional training plan</h4>
                        <p>At the most basic level, a training plan is simply a document that details a training program. It includes the goals of the training, learning outcomes and how training will be delivered. It can be used to provide a big picture of the training needs of your whole organization or to help individual employees improve their performance.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>In today’s world, more and more people are gravitating towards a class-based, group fitness model where the most successful gyms go above and beyond. The boutique fitness industry looks to create a unique and memorable experience while adding value at the same time. In this article, we will discuss the nine things that the most successful gyms have in common.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/weg.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Weightlifting</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/cyc.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Indoor cycling</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/ket.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/body.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h4>Body Building</h4>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/box.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Training</span>
                            <h4>Boxing</h4>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/sts1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>register now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>1 Month Unlimited</h3>
                        <div class="pi-price">
                            <h2>₱ 400</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                          
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                           
                            <li>No time restriction</li>
                        </ul>
                        <a href="enroll.php" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>3 Months unlimited</h3>
                        <div class="pi-price">
                            <h2>₱ 1,200</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                        
                            <li>Unlimited equipments</li> 
                           
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                           
                            <li>No time restriction</li>
                        </ul>
                        <a href="enroll2.php" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>1 Year unlimited</h3>
                        <div class="pi-price">
                            <h2>₱ 4,800</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                           
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                          
                            <li>No time restriction</li>
                        </ul>
                        <a href="enroll3.php" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gal1.jpg">
                <a href="img/gallery/gal1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gal2.jpg">
                <a href="img/gallery/gal2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gal3.jpg">
                <a href="img/gallery/gal3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gal4.jpg">
                <a href="img/gallery/gal4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gal5.jpg">
                <a href="img/gallery/gal5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gal6.jpg">
                <a href="img/gallery/gal6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/PIC7.jpg">
                            <div class="ts_text">
                                <h4>JENNIFER GAO</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/PIC6.jpg">
                            <div class="ts_text">
                                <h4>MAY THIN KHINE</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/PIC5.jpg">
                            <div class="ts_text">
                                <h4>SHAUN CHISPA</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/baki.jpg">
                            <div class="ts_text">
                                <h4>JILLIANNE DACAY</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/kiffy.jpg">
                            <div class="ts_text">
                                <h4>JHERO RICH LLANTO</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/smrt.jpg">
                            <div class="ts_text">
                                <h4>ENVER FLORENDO</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/ken.jpg">
                            <div class="ts_text">
                                <h4>KEN RAFAEL RAMUYA</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/PIC9.jpg">
                            <div class="ts_text">
                                <h4>ANJONEL ROSALES</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/RAYVEN.jpg">
                            <div class="ts_text">
                                <h4>RAYVEN DAACO</h4>
                                <span>Gym Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>96 Kalayaan B, Quezon City, Metro Manila<br/> M3RQ+FR</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>GymNiArmnado@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/ARMANDO12.png" alt=""></a>
                        </div>
                        <p>“I hated every minute of training, but I said, ‘Don’t quit. Suffer now and live the rest of your life as a champion.” – Muhammad Ali</p>
                        <div class="fa-social">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                      
                        </div>
                        <div class="fw-recent">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

<script>
    // Add to your existing JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Handle Enroll Now buttons
    const enrollButtons = document.querySelectorAll('.enroll-now-btn');
    
    enrollButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (!this.classList.contains('disabled')) {
                e.preventDefault();
                document.querySelector('.page-transition').classList.add('active');
                
                setTimeout(() => {
                    window.location.href = 'enroll.php';
                }, 500);
            }
        });
    });
    
    // Make sure user is logged in for enroll buttons
    <?php if(!isset($_SESSION['user_id'])): ?>
        enrollButtons.forEach(button => {
            button.classList.add('disabled');
            button.addEventListener('click', function(e) {
                e.preventDefault();
                window.location.href = 'login.php?redirect=enroll.php';
            });
        });
    <?php endif; ?>
});
</script>

</body>
<?php 
flash('login_success');
flash('logout_success');
?>
</html>
<?php

?>