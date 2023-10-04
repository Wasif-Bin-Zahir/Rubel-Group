<?php $__env->startSection('content'); ?>
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $__env->make('admin.partials._alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Form Details</h3>
                            <a href="<?php echo e(route('backend.cms.form.index')); ?>" type="button"
                               class="btn btn-success btn-sm text-white float-right">View Form List</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Date: <span style="font-weight: 400"><?php echo e($form->created_at->format('d M, Y')); ?></span>
                                        </label>
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Name: <span style="font-weight: 400"><?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?></span>
                                        </label>
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Email: <span style="font-weight: 400"><?php echo e($data->email ?? 'N/A'); ?></span>
                                        </label>
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Phone: <span style="font-weight: 400"><?php echo e($data->phone ?? 'N/A'); ?></span>
                                        </label>
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Address: <span style="font-weight: 400"><?php echo e($data->address ?? 'N/A'); ?></span>,  Country: <span style="font-weight: 400"><?php echo e($data->country ?? 'N/A'); ?></span>
                                        </label>
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Subject: <span style="font-weight: 400"><?php echo e($data->subject ?? 'N/A'); ?></span>
                                        </label>
                                        <label for="data" class="<?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> text-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> d-block">
                                            Message: <span style="font-weight: 400"><?php echo e($data->message ?? 'N/A'); ?></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo e(route('backend.cms.form.index')); ?>" type="button"
                               class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Cms\Resources/views/form/show.blade.php ENDPATH**/ ?>