<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo SEO::generate(true); ?>

    <link rel="icon" href="<?php echo e($global_site->favicon->file_url ?? config('core.image.' . config('core.theme') . '.default.favicon')); ?>" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/app.min.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo e(url('/')); ?>">CSE ALUMNI</a>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write(`<script src="<?php echo e(asset('common/plugins/jquery-3.3.1/jquery-3.3.1.min.js')); ?>"><\/script>`)</script>
<script src="<?php echo e(asset('common/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/app.min.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH E:\My_codes\cse alumni\advance-cms\resources\views/auth/layouts/master.blade.php ENDPATH**/ ?>