<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.committee')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio">
        <div class="container">
            <?php if(count($data->committeeMembers)): ?>
                <div class="row" style="margin-top: 50px !important;">
                    <div class="col-12">
                        <div class="portfolio-menu">
                            <ul id="portfolio-nav" class="portfolio-nav tr-list list-inline cbp-l-filters-work">
                                <li class="cbp-filter-item <?php echo e(!request()->has('category') ? 'active' : ''); ?>">
                                    <a href="<?php echo e(url('committee')); ?>">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            All
                                        <?php else: ?>
                                            সব
                                        <?php endif; ?>
                                    </a>
                                </li>
                                <?php $__currentLoopData = $data->committeeCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $committeeCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="cbp-filter-item <?php echo e(request()->get('category') == $committeeCategory->id ? 'active' : ''); ?>">
                                        <a href="<?php echo e(url('committee?category=' . $committeeCategory->id)); ?>">
                                            <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($committeeCategory->title_bn ?? $committeeCategory->title); ?>

                                            <?php else: ?>
                                                <?php echo e($committeeCategory->title); ?>

                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 100px !important;">
                    <?php $__currentLoopData = $data->committeeMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $committeeMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-team active mb-4">
                                <div class="team-head">
                                    <div class="team-head-image" style="background-size: cover !important; background: url('<?php echo e($committeeMember->avatar->file_url ?? url('images/default/avatar.jpg')); ?>');"></div>
                                    <ul class="team-social">
                                        <li><a href="<?php echo e($committeeMember->facebook); ?>"><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="<?php echo e($committeeMember->twitter); ?>"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="<?php echo e($committeeMember->linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="mailto:<?php echo e($committeeMember->email); ?>"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="t-content">
                                    <div class="content-inner">
                                        <h5 class="name">
                                            <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($committeeMember->name_bn ?? $committeeMember->name); ?>

                                            <?php else: ?>
                                                <?php echo e($committeeMember->name); ?>

                                            <?php endif; ?>

                                        </h5>
                                        <span class="designation">
                                            <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($committeeMember->designation_bn ?? $committeeMember->designation); ?>

                                            <?php else: ?>
                                                <?php echo e($committeeMember->designation); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/committee/index.blade.php ENDPATH**/ ?>