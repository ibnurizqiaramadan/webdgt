<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <!-- <a href="index.html"><span>Com</span>pany</a> -->
            <a href="<?php echo base_url('/'); ?>" class="logo me-auto me-lg-0">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo" class="img-fluid">
            </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="<?php echo base_url('/news'); ?>">News</a></li>
                <li><a href="<?php echo base_url('/abouts'); ?>">About Us</a></li>
                <li><a href="<?php echo base_url('/product'); ?>">Product</a></li>

                <li class="dropdown"><a href="#"><span>Company Profile</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?php echo base_url('/profile/id'); ?>">ID <i class="bi bi-download"></i></a></li>
                        <li><a href="<?php echo base_url('/profile/en'); ?>">EN <i class="bi bi-download"></i></a></li>
                    </ul>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="https://www.facebook.com/dian.globaltech.92/" target="_blank" class="facebook"><i class="bu bi-facebook"></i></a>
        </div>

    </div>
</header>