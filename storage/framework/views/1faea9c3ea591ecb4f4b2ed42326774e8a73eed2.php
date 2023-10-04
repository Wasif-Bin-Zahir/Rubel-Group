

<?php $__env->startSection('content'); ?>
    <div class="p-5">
        <div class="row">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 col-6">
                    <a href="<?php echo e($item['url']); ?>">
                        <div class="info-box">
                            <span class="info-box-icon bg-gradient-purple">
                                <i class="far <?php echo e($item['icon']); ?>"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text text-dark" style="font-size: 16px"><?php echo e($item['title']); ?></span>
                                <span class="info-box-number text-bold text-dark" style="font-size: 20px"><?php echo e($item['count']); ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\ahcab expo\advance-cms\modules/Ums\Resources/views/dashboard/index.blade.php ENDPATH**/ ?>