<header class="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 hide-res">
                    <div class="top-contact">
                        <div class="single-contact"><i class="fa fa-phone"></i><?php echo e(__('cms.phone')); ?>: <?php echo e($global_contact->phone); ?></div>
                        <div class="single-contact"><i class="fa fa-envelope-open"></i><?php echo e(__('cms.email')); ?>: <?php echo e($global_contact->email); ?></div>
                        <?php if($global_contact->working_hours): ?>
                            <div class="single-contact"><i class="fa fa-clock-o"></i>Opening: <?php echo e($global_contact->working_hours); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 topbar-right-holder">
                    <div class="topbar-right">
                        <ul class="social-icons">
                            <li><a href="<?php echo e($global_contact->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo e($global_contact->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo e($global_contact->linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="<?php echo e($global_contact->youtube); ?>"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <div class="single-contact" style="margin-top: 0; margin-right: 20px;">
                            <i class="fa fa-user"></i>
                            <?php if(auth()->check()): ?>
                                <a href="<?php echo e(url('/backend/dashboard')); ?>">Dashboard</a>
                            <?php else: ?>
                                <a href="<?php echo e(url('/login')); ?>">Login</a>
                            <?php endif; ?>
                        </div>
                        <div class="single-contact" style="margin-top: 0;">
                            <i class="fa fa-globe"></i>
                            <?php if(app()->getLocale() == 'en'): ?>
                                <a style="font-weight: bold; text-decoration: underline;" href="<?php echo e(url(request()->path() . '?lang=en')); ?>">EN</a>
                            <?php else: ?>
                                <a href="<?php echo e(url(request()->path() . '?lang=en')); ?>">EN</a>
                            <?php endif; ?>
                            |
                            <?php if(app()->getLocale() == 'bn'): ?>
                                <a style="font-weight: bold; text-decoration: underline;" href="<?php echo e(url(request()->path() . '?lang=bn')); ?>">BN</a>
                            <?php else: ?>
                                <a href="<?php echo e(url(request()->path() . '?lang=bn')); ?>">BN</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="middle-inner">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="logo">
                                    <div class="img-logo">
                                        <a href="<?php echo e(url('/')); ?>">
                                            <img src="<?php echo e($global_site->logo->file_url ?? url('images/default/logo.png')); ?>" alt="<?php echo e($global_site->title); ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <div class="menu-area">
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="navbar-collapse">
                                            <div class="nav-inner">
                                                <div class="menu-home-menu-container">
                                                    <ul id="nav" class="nav main-menu menu navbar-nav">
                                                        <?php $__currentLoopData = $global_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_key => $g_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if(count($g_menu->children)): ?>
                                                                <li class="icon-active">
                                                                    <a href="#">
                                                                        <?php if(app()->getLocale() == 'bn'): ?>
                                                                            <?php echo e($g_menu->title_bn); ?>

                                                                        <?php else: ?>
                                                                            <?php echo e($g_menu->title); ?>

                                                                        <?php endif; ?>
                                                                    </a>
                                                                    <ul class="sub-menu">
                                                                        <?php $__currentLoopData = $g_menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_child_key => $g_child_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li>
                                                                                <a href="<?php echo e($g_child_menu->link); ?>">
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
                                                                <li>
                                                                    <a href="<?php echo e($g_menu->link); ?>">
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
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH E:\My_codes\cse alumni\advance-cms\resources\views/front/theme1/partials/_header.blade.php ENDPATH**/ ?>