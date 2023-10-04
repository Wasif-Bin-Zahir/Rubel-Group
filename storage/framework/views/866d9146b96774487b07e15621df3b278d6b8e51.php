<?php if(session()->has('alert.status')): ?>
    <div class="alert alert-<?php echo e(session()->get('alert.status')); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas <?php echo e(session()->get('alert.icon')); ?>"></i> <?php echo e(session()->get('alert.title')); ?></h5>
        <?php echo e(session()->get('alert.body')); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\bemantech\projects\advance-cms\resources\views/admin/partials/_alert.blade.php ENDPATH**/ ?>