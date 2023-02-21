<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-envelope"></i>contact@company.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/myprojects/mobile/index.php">
                <h2>Mobile Store<em> Website</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($page=='home'){echo 'active';} ?>">
                        <a class="nav-link" href="/myprojects/mobile/index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if($page=='products'){echo 'active';} ?>">
                        <a class="nav-link" href="/myprojects/mobile/products.php">Products</a>
                    </li>
                    <li class="nav-item <?php if($page=='checkout'){echo 'active';} ?>">
                        <a class="nav-link" href="/myprojects/mobile/checkout.php">Checkout</a>
                    </li>
                    <li class="nav-item dropdown <?php if($page=='brands'){echo 'active';} ?>">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Brands</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/myprojects/mobile/brands/apple.php">Apple</a>
                            <a class="dropdown-item" href="/myprojects/mobile/brands/nokia.php">Nokia</a>
                            <a class="dropdown-item" href="/myprojects/mobile/brands/oneplus.php">One Plus</a>
                            <a class="dropdown-item" href="/myprojects/mobile/brands/oppo.php">Oppo</a>
                            <a class="dropdown-item" href="/myprojects/mobile/brands/samsung.php">Samsung</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown <?php if($page=='about'){echo 'active';} ?>">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">About Us</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/myprojects/mobile/about.php">About us</a>
                            <a class="dropdown-item" href="/myprojects/mobile/contact.php">Contact Us</a>
                            <a class="dropdown-item" href="/myprojects/mobile/terms.php">Terms</a>
                            <a class="dropdown-item" href="/myprojects/mobile/testimonials.php">Testimonials</a>
                            <a class="dropdown-item" href="/myprojects/mobile/blog.php">Blogs</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if($page=='signup'){echo 'active';} ?>">
                        <a class="nav-link" href="/myprojects/mobile/signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item <?php if($page=='login'){echo 'active';} ?>">
                        <a class="nav-link" href="/myprojects/mobile/login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>