<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)">Directory</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio">
        <div class="container">
            <?php if(count($users)): ?>
                <div class="row" style="margin-bottom: 100px !important; margin-top: 100px !important;">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <a href="<?php echo e(url('/directory/' . $user->username)); ?>">
                                <section>
                                    <div class="single-team active mb-4">
                                        <div class="team-head">
                                            <img style="height: 270px; width: 100%;" src="<?php echo e($users->avatar->file_url ?? url('images/default/avatar.jpg')); ?>" alt="#">
                                            <ul class="team-social">
                                                <li><a href="<?php echo e($user->personalInfo->facebook_link ?? ''); ?>"><i class="fa fa-facebook-official"></i></a></li>
                                                <li><a href="<?php echo e($user->personalInfo->twitter_link ?? ''); ?>"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="<?php echo e($user->personalInfo->linkedin_link ?? ''); ?>"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="t-content">
                                            <div class="content-inner">
                                                <h5 class="name">
                                                    <?php echo e($user->personalInfo->first_name); ?> <?php echo e($user->personalInfo->last_name); ?>

                                                </h5>
                                                <span class="designation">
                                                     <?php echo e($user->personalInfo->designation); ?>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="<?php echo e(asset('common/img/empty-page.jpg')); ?>" alt="Empty state">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/directory/index.blade.php ENDPATH**/ ?>