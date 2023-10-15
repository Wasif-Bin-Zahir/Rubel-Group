<!--Start Top Header-->
<div class="tob-header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4">
                    <div class="heder-left-content">
                        <div class="content">
                            <i class="ri-user-voice-line"></i>
                            <p>Welcome To Rubel Group Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="heder-right-content">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-7">
                                <div class="time-content">
                                    <i class="ri-time-line"></i>
                                    <p>Sun-Thu: 10 AM to 7 PM - Sat-Fri: Closed</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5">
                                <div class="social-content">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank"><i
                                                    class="ri-facebook-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/" target="_blank"><i
                                                    class="ri-twitter-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                    class="ri-instagram-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->

    <!--Start Middle Header-->
    <div class="middle-header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="middle-header-logo">
                        <img src="assets/images/rubel_logo.png" class="logo-1 nav-logo" alt="Logo">
                        <img src="assets/images/white-logo.png" class="logo-2 nav-logo" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="middle-header-right-content">
                        <ul>
                            <li>
                                <div class="header-contact-box">
                                    <div class="icon">
                                        <i class="flaticon-phone-call-1"></i>
                                    </div>
                                    <p>Call Us Now</p>
                                    <a href="tel:+0408886666">+040 888 6666</a>
                                </div>
                            </li>
                            <li>
                                <div class="header-contact-box">
                                    <div class="icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <p>Email Address</p>
                                    <a
                                        href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#ee868b828281aea79c879d8bc08d8183"><span
                                            class="__cf_email__"
                                            data-cfemail="49212c25252609003b203a2c672a2624">[email&#160;protected]</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="header-contact-box">
                                    <div class="icon">
                                        <i class="flaticon-place"></i>
                                    </div>
                                    <p>Address</p>
                                    <span>204 Protector Here, USA</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Middle Header-->

    <!-- Start Navbar Area -->
    <div class="navbar-area nav-style-1">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="assets/images/logo-icon-2.png" class="logo-icon-1" alt="logo">
                            <img src="assets/images/logo-icon-2.png" class="logo-icon-2" alt="logo">

                            <img src="assets/images/white-logo.png" class="main-logo nav-logo" alt="logo">
                            <img src="assets/images/white-logo.png" class="white-logo nav-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Home
                            </a>
                        </li>
                        <?php $__currentLoopData = $global_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_key => $g_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(count($g_menu->children)): ?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($g_menu->title_bn); ?>

                                        <?php else: ?>
                                            <?php echo e($g_menu->title); ?>

                                        <?php endif; ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php $__currentLoopData = $g_menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_child_key => $g_child_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e($g_child_menu->link); ?>" class="nav-link">
                                                    <?php if(app()->getLocale() == 'bn'): ?>
                                                        <?php echo e($g_child_menu->title_bn); ?>

                                                    <?php else: ?>
                                                        <?php echo e($g_child_menu->title); ?>

                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item"> 
                                    <a href="<?php echo e($g_menu->link); ?>" class="nav-link">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($g_menu->title_bn); ?>

                                        <?php else: ?>
                                            <?php echo e($g_menu->title); ?>

                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </ul>

                        <!-- <div class="others-options ms-auto">
                            <div class="option-item">
                                <a href="contact-us.html" class="default-btn btn style-2">Get Started Now <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                            <div class="option-item">
                                <div class="switch-box">
                                    <label id="switch" class="switch">
                                        <input type="checkbox" onchange="toggleTheme()" id="slider">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="others-options">
                            <div class="option-item">
                                <a href="contact-us.html" class="default-btn btn style-2">Get Started</a>
                            </div>
                            <div class="option-item">
                                <div class="switch-box">
                                    <label id="switch2" class="switch">
                                        <input type="checkbox" onchange="toggleTheme()" id="slider2">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area --><?php /**PATH D:\bemantech\projects\Rubel-Group\resources\views/front/theme2/partials/_header.blade.php ENDPATH**/ ?>