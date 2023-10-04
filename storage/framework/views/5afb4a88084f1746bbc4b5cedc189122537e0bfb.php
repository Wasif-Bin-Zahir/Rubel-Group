<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.registration')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-us section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="contact-form-area m-top-30">
                        <h4><?php echo e(__('cms.registration')); ?></h4>
                        <div style="margin-top: 30px;">
                            <?php echo $__env->make('common.partials._alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php echo Form::open(['url' => 'contact', 'method' => 'post', 'class' => 'form']); ?>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="first_name" name="first_name" type="text" placeholder="Name">
                                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="email" name="email" type="text" placeholder="Email Address">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="phone" name="phone" type="text" placeholder="Phone/Mobile No">
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback font-weight-light d-block" role="alert"><strong><?php echo e($message); ?></strong></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="address" name="address" type="text" placeholder="company name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="country" name="country" type="text" placeholder="designation">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    
                                    <div class="form">
                                        <label>Interest On</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Dairy industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Aqua industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Poultry industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Pet industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Feed industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Others
                                            </label>
                                        </div>

                                    
                                    </div>
                                </div>
                               
                               
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-1"><?php echo e(__('cms.submit')); ?></button>
                                    </div>
                                </div>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact-box-main m-top-30">
                        <div class="contact-title">
                            <h2>Registration Instruction</h2>
                        </div>
                        <div class="single-contact-box">
                            <div class="c-text">
                                <p>Please check your mobile and email for your QR Code and show it to the Registration counter for your Visitors Pass</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('common/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('common/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.select-dd').select2({
                theme: 'bootstrap4',
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/registration/index.blade.php ENDPATH**/ ?>