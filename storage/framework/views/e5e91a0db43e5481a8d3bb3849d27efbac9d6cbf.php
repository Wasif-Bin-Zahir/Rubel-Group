<?php if(session()->has('alert.status')): ?>
    <div class="alert alert-<?php echo e(session()->get('alert.status')); ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><?php echo e(session()->get('alert.title')); ?></h5>
        <?php echo e(session()->get('alert.body')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home4/ariful3010/expo.ahcab.net/resources/views/common/partials/_alert.blade.php ENDPATH**/ ?>