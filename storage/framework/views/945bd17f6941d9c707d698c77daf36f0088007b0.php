

<?php $__env->startSection('content'); ?>
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $__env->make('admin.partials._alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <?php if(isset($_GET['id']) && $_GET['id']==1): ?>
                            <h3 class="card-title">Executive Committee List</h3>
                            <?php elseif(isset($_GET['id']) && $_GET['id']==4): ?>
                            <h3 class="card-title">Venue Management Sub-Committee List</h3>
                            <?php elseif(isset($_GET['id']) && $_GET['id']==5): ?>
                            <h3 class="card-title">IT and Media Management Sub-Committee List</h3>
                            <?php elseif(isset($_GET['id']) && $_GET['id']==6): ?>
                            <h3 class="card-title">Branding Sub-Committee</h3>
                            <?php elseif(isset($_GET['id']) && $_GET['id']==7): ?>
                            <h3 class="card-title">Printing and Publication Sub-Committee List</h3>
                            <?php elseif(isset($_GET['id']) && $_GET['id']==8): ?>
                            <h3 class="card-title">International Promotion & Guest Reception Sub-Committee List</h3>
                            <?php elseif(isset($_GET['id']) && $_GET['id']==9): ?>
                            <h3 class="card-title">Food and Cultural Sub-Committee List</h3>
                            <?php else: ?>
                            <h3 class="card-title">All Committee Member List</h3>
                            <?php endif; ?>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <?php echo $dataTable->table(['class' => 'table table-hover', 'style' => 'width: 100%;']); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('common/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('common/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('common/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('common/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('common/plugins/datatables-ssr/buttons.server-side.js')); ?>"></script>
    <?php echo $dataTable->scripts(); ?>

    <script src="<?php echo e(asset('admin/js/datatable.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\Rubel-Group\modules/Cms\Resources/views/committee_member/index.blade.php ENDPATH**/ ?>