<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bixwe - Customized Styling</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="slick.css"/>
        <link href="stylecat.css" rel="stylesheet">
        <link rel="stylesheet" href="navstyle.css">
        <link rel="stylesheet"href="buttonstyle.css">
        <link href="style-homepage.css" rel="stylesheet">

    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="homepage.php">
                        <strong><span>Bix</span>we</strong>
                    </a>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <div class="d-lg-none">
                        <a href="products.php" class="bi bi-bag custom-icon me-5"></a>
                        <a href="curate.php" class="bi bi-collection custom-icon me-5"></a>
                        <a href="cart.php" class="bi bi-cart2 custom-icon me-5"></a>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="profile.php" class="bi-person custom-icon me-5"><small><?php echo $_SESSION['email']; ?></small></a>
                        <a href="logout.php" class="bi-box-arrow-right custom-icon me-5"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">

                        <div class="d-none d-lg-block">
                            <a href="products.php" class="bi bi-bag custom-icon me-5"></a>
                            <a href="curate.php" class="bi bi-collection custom-icon me-5"></a>
                            <a href="cart.php" class="bi bi-cart2 custom-icon me-5"></a>
                            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <a href="profile.php" class="bi-person custom-icon me-5"><small><?php echo $_SESSION['email']; ?></small></a>
                            <a href="logout.php" class="bi-box-arrow-right custom-icon me-5"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="slick-slideshow">   
                <div class="slick-custom">
                    <img src="images/slideshow/clothes2.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Your Fashion</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Let Us Know What Your Tastes Are...</p>

                                    <a href="about.html" class="btn custom-btn">Take Your Style Quiz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/clothes1.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Cool Designs</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Take a Look at the Products...</p>

                                    <a href="category.php?category=7" class="btn custom-btn">Explore products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-5">Get started with <span>Bix</span>we</h2>
                        </div>

                        <div class="col-lg-2 col-12 mt-auto mb-auto">
                            <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Introduction</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="images/model.jpeg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">Good <span>Design</span> <br>Ideas for <span>Your</span> Fashion</h4>

                                                <p>Tell Us <span>About You</span><br>
                                                    We will help you find what <span>suites you..</span>
                                                    </p>

                                                <p><span>Styles Just For You</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="front-product">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12">
                            <img src="images/model1.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="px-5 py-5 py-lg-0">
                                
                                <h2 class="mb-4"><span>Styles</span> For You</h2>

                                <p class="lead mb-4">Take the Style quiz to know about your style preferences.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-product section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <h2 class="mb-5">Featured Products</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="products.php">
                                    <img src="images/product/active4.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">Active Wear</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="products.php" class="product-title-link">Active Wear</a>
                                        </h5>

                                        <p class="product-p">Trending Sports Wear</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5"></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="products.php">
                                    <img src="images/product/dress4.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">Western Wear</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="products.php" class="product-title-link">Dresses</a>
                                        </h5>

                                        <p class="product-p">Western Wear</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5"></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="products.phpproduct-detail.html">
                                    <img src="images/product/ethnic5.jpg" class="img-fluid product-image" alt="">
                                </a>
                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">Ethnics</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>
                                <div class="product-top d-flex">
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="products.phpproduct-detail.html" class="product-title-link">Ethnics</a>
                                        </h5>

                                        <p class="product-p">Indian & Fusion Wear</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5"></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <a href="products.php" class="view-all">View All Products</a>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="homepage.php">Bix</a>we</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Bixwe</strong></p>
                        <br>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="category.php?category=7" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
