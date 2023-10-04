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
                    <div class="contact-form-area m-top-30" style="background: #053B50;">
                        <div style="margin-top: 30px;">
                        <h4 style="text-align:center;color:wheat;"><?php echo e(__('cms.registration')); ?></h4>
                        <?php if(session()->has('alert.status') && session()->has('alert.status')=='success'): ?>
                            <div class="alert alert-<?php echo e(session()->get('alert.status')); ?> alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5>Registration Successfully Completed</h5>
                                Take Screen Short This QR Code and Show This in Registration Booth
                            </div>
                        <?php else: ?>

                            <?php echo $__env->make('common.partials._alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php endif; ?>
                        </div>
                        <?php if(session()->has('alert.status') && session()->has('alert.status')=='success'): ?>
                        <?php echo e(QrCode::size(100)->color(40,40,40)->generate(session()->get('alert.body'))); ?>

                        <?php endif; ?>


                        <?php echo Form::open(['url' => 'registration', 'method' => 'post', 'class' => 'form']); ?>

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
                                        <input id="company" name="company" type="text" placeholder="Company name">
                                    </div>
                                    <?php $__errorArgs = ['company'];
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

                                

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="country" name="designation" type="text" placeholder="Designation">
                                    </div>
                                    <?php $__errorArgs = ['designation'];
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

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="country" name="country" type="text" placeholder="Country">
                                    </div>
                                    <?php $__errorArgs = ['designation'];
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
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="form" style="margin-top: 10px; margin-left: 19px;color: #fff;">
                                        <label style="margin-left: -17px;">Interest On</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="interest_on[]" type="checkbox" value="Dairy industry" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Dairy industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Aqua industry" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Aqua industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Poultry industry" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Poultry industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Pet industry" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Pet industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Feed industry" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Feed industry
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="interest_on[]" value="Others" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Others
                                            </label>
                                        </div>


                                    </div>
                                    <?php $__errorArgs = ['interest_on'];
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


                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-1" style="background: wheat;color:#053B50"><?php echo e(__('cms.submit')); ?></button>
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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\ahcab expo\advance-cms\modules/Front\Resources/views/theme1/registration/index.blade.php ENDPATH**/ ?>