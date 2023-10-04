<aside class="main-sidebar sidebar-light-warning elevation-4">
    <a href="<?php echo e(url('/backend/dashboard')); ?>" class="brand-link navbar-purple text-center">
        <span class="text-uppercase text-bold text-white text-center">WEB PORTAL</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if(auth()->check()): ?>
                    <?php
                        $user = \Modules\Ums\Entities\User::find(auth()->user()->id);
                    ?>
                    <?php $__currentLoopData = config('core.admin_menu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(empty($nav['children'])): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e($nav['url']); ?>" class="nav-link">
                                        <i class="nav-icon fas <?php echo e($nav['icon']); ?>"></i>
                                        <p>
                                            <?php echo e($nav['name']); ?>

                                        </p>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0)" class="nav-link">
                                        <i class="nav-icon fas <?php echo e($nav['icon']); ?>"></i>
                                        <p>
                                            <?php echo e($nav['name']); ?>

                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <?php $__currentLoopData = $nav['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subNav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item">
                                                <a href="<?php echo e($subNav['url']); ?>" class="nav-link">
                                                    <i class="fas <?php echo e($subNav['icon']); ?> nav-icon"></i>
                                                    <p><?php echo e($subNav['name']); ?></p>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>
<?php /**PATH D:\bemantech\projects\advance-cms\resources\views/admin/partials/_menubar.blade.php ENDPATH**/ ?>