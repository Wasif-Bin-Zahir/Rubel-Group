<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.contact')); ?></a></li>
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
                        <h4 style="color:wheat;text-align:center"><?php echo e(__('cms.get_in_touch')); ?></h4>
                        <div style="margin-top: 30px;">
                            <?php echo $__env->make('common.partials._alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php echo Form::open(['url' => 'contact', 'method' => 'post', 'class' => 'form']); ?>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <input id="first_name" name="first_name" type="text" placeholder="First Name">
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

                                        <input id="last_name" name="last_name" type="text" placeholder="Last Name">
                                        <?php $__errorArgs = ['last_name'];
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

                                        <input id="address" name="address" type="text" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                        <input id="country" name="country" type="text" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <?php $__errorArgs = ['subject'];
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
                                <div class="col-12">
                                    <div class="form-group textarea">
                                        <textarea type="textarea" name="message" rows="5"></textarea>
                                        <?php $__errorArgs = ['message'];
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
                                <div class="col-12">
                                    <div class="form-group button">
                                        <button type="submit" class="bizwheel-btn theme-1" style="background-color: wheat;color:#053B50;font-weight:bold";><?php echo e(__('cms.send_now')); ?></button>
                                    </div>
                                </div>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="contact-box-main m-top-30">
                        <div class="contact-title">
                            <h2><?php echo e(__('cms.contact_with_us')); ?></h2>
                        </div>
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-address-book"></i></div>
                            <div class="c-text">
                                <h4><?php echo e(__('cms.address')); ?></h4>
                                <p><?php echo e($global_contact->address); ?></p>
                            </div>
                        </div>
                        <?php if($global_contact->working_days): ?>
                            <div class="single-contact-box">
                                <div class="c-icon"><i class="fa fa-clock-o"></i></div>
                                <div class="c-text">
                                    <h4>Working Days & Hours</h4>
                                    <p><?php echo e($global_contact->working_days); ?><br><?php echo e($global_contact->working_hours); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-phone"></i></div>
                            <div class="c-text">
                                <h4><?php echo e(__('cms.call_us')); ?></h4>
                                <p><?php echo e(__('cms.telephone')); ?>.: <?php echo e($global_contact->phone); ?><br><?php echo e(__('cms.mobile')); ?>.: <?php echo e($global_contact->mobile); ?></p>
                            </div>
                        </div>
                        <div class="single-contact-box">
                            <div class="c-icon"><i class="fa fa-envelope-o"></i></div>
                            <div class="c-text">
                                <h4><?php echo e(__('cms.email_us')); ?></h4>
                                <p><?php echo e($global_contact->email); ?></p>
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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\ahcab expo\advance-cms\modules/Front\Resources/views/theme1/contact/index.blade.php ENDPATH**/ ?>