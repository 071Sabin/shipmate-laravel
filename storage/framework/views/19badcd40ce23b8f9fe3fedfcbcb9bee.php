<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <title>Ship-Mate</title>
    <link rel = "icon" href ="<?php echo e(asset('icons/bag-fill.svg')); ?>" type = "image/x-icon">

    <link rel="stylesheet" href="<?php echo e(asset('client_css/masterCss/master.css')); ?>">
</head>

<body>
    <header>
        <h1><i class="bi bi-bag-fill"></i><a href="<?php echo e(route('site.home')); ?>"> Ship-Mate-Vendor</a></h1>
        <div class="ham-menu" id="ham-menu">
            <div class="top bar"></div>
            <div class="mid bar"></div>
            <div class="bottom bar"></div>
        </div><br>
        <nav class="" id="navbar">
            <!-- <li><a href="#">Home</a></li> -->
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="<?php echo e(route('site.user.login')); ?>">Login/SignUp</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a class="btn btn-primary" href="#">Start free trial</a></li>
        </nav>
    </header>

    <main>
        
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-dark"
                style="background-color: #ECEFF1"
                >
        <!-- Section: Social media -->
        <section
                class="d-flex justify-content-between p-4 text-white"
                style="background-color: #21D192"
                >
            <!-- Left -->
            <div class="me-5">
            <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->
    
            <!-- Right -->
            <div>
            <a href="" class="text-white me-4">
                <i class="fab bi-facebook"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab bi-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab bi-google"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab bi-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab bi-linkedin"></i>
            </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold">Ship-Mate</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                    Ship-Mate from 2023 facilitates people with its direct D2C business.
                </p>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold">Products</h6>
                <hr
                    class="mb-4 mt-0 d-inline-block mx-auto"
                    style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                <p>
                    <a href="#!" class="text-dark">Electronics</a>
                </p>
                <p>
                    <a href="#!" class="text-dark">Cosmetics</a>
                </p>
                <p>
                    <a href="#!" class="text-dark">FootWears</a>
                </p>
                <p>
                    <a href="#!" class="text-dark">Tshirts</a>
                </p>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Try Us</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p>
                        <a href="#!" class="text-dark">Your Account</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Help</a>
                    </p>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 contact" id="#contact">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p><i class="fas bi-house-door-fill"></i> Vadodara, Gujarat, India</p>
                    <p><i class="fas bi-envelope-fill"></i> shipmate@gmail.com</p>
                    <p><i class="fas bi-telephone-fill"></i> + 91 234 567 8932</p>
                    <p><i class="fas bi-printer-fill"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)"
            >
            &copy; Ship-Mate 2023. All Rights Reserved.
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
    


</body>
<script src="<?php echo e(asset('js/nav-bar.js')); ?>"></script>
</html><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate\resources\views/user/user_master.blade.php ENDPATH**/ ?>