<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php
        $user = \Modules\Ums\Entities\User::find(auth()->user()->id);
    ?>
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="<?php echo e($global_site->favicon->file_url ?? config('core.image.' . config('core.theme') . '.default.favicon')); ?>">
    <?php echo SEO::generate(true); ?>

    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <!-- Jquery-ui -->
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/jquery-ui/jquery-ui.min.css')); ?>">
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/datepicker/bootstrap-datepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/app.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/style.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm" onload="display_current_time()">
<div class="wrapper">
    <?php echo $__env->make('admin.partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.partials._menubar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('admin.partials._right_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.partials._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<script src="<?php echo e(asset('common/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('common/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/tinymce/tinymce.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('common/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('common/plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<script src="<?php echo e(asset('common/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('common/plugins/select2/js/select2.full.min.js')); ?>"></script>
<!-- Datepicker -->
<script src="<?php echo e(asset('common/plugins/datepicker/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>

<style>
    .card .card-body label {
        font-weight: bold;
    }
</style>

<script src="//cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
    // tinymce activation
    window.tinymce.init({
        relative_urls: false,
        remove_script_host: true,
        selector: "textarea", theme: "modern", height: 200,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true,
        external_filemanager_path: "/plugins/filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "/plugins/filemanager/plugin.min.js"}
    });
    /*$(document).ready(function() {
        if (document.getElementById('description')) {
            if(CKEDITOR.instances.description) {
                CKEDITOR.instances.description.destroy();
            }
            CKEDITOR.replace( 'description' );
        }
    });*/

    $('.select2').select2().on('change', function() {
        //$(this).valid();
    });
    $('.datepicker').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        //startDate: new Date(),
        changeMonth: true,
        changeYear: true,
        autoclose: true
    });
</script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH /home4/ariful3010/expo.ahcab.net/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>