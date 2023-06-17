<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    
    <title>Ship-Mate</title>
    <link rel = "icon" href ="<?php echo e(asset('icons/bag-fill.svg')); ?>" type = "image/x-icon">

    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue-500 shadow">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-center" href="<?php echo e(route('site.home')); ?>">
            <i class="bi bi-bag text-white" style="font-size: 2rem;"></i>
            <span class="ms-3 fw-bold text-white" style="font-size: 2rem;">Ship-Mate-<em>Buyer</em></span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="font-size: 1.4rem;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Company</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo e(route('site.buyer.buyer_login')); ?>">Login/SignUp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary rounded px-4 text-white" href="#">Start Free Trial</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <main>
        
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
        <!-- Footer -->
        <footer
                class="text-center text-lg-start text-dark" id="contact"
                style="background-color: #ECEFF1"
                >
        <!-- Section: Social media -->
        <section
                class="d-flex justify-content-between p-4 text-white"
                style="background-color: #2b2b2b"
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate2\resources\views/buyer/buyer_master.blade.php ENDPATH**/ ?>