

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
                            <ul id="portfolio-nav" class="portfolio-nav tr-list list-inline cbp-l-filters-work" style="display: flex;">
                              
                                <?php $__currentLoopData = $data->committeeCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $committeeCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="cbp-filter-item <?php echo e(request()->get('category') == $committeeCategory->id ? 'active' : ''); ?>" style="margin-right:10px; border: 1px solid #ccc; padding: 3px;">
                                        <a href="<?php echo e(url('members?category=' . $committeeCategory->id)); ?>" style="<?php echo e(request()->get('category') == $committeeCategory->id ? 'color: red;' : 'color: #000'); ?>">
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
                <div class="section-title">
                <span>Meet The Team</span>
                <h2>Our Members</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus, dignissim phareta lorem. Sed ut
                    lacus aliquet, volutpat sem pellentesque, egestas nisl.</p> -->
            </div>
            <div class="row">
                <?php $__currentLoopData = $data->committeeMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $committeeMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-team-card">
                            <div class="team-img">
                                <img src="<?php echo e($committeeMember->avatar->file_url ?? url('images/default/avatar.jpg')); ?>" alt="Image">
                                <div class="social-content">
                                    <ul>
                                        <li>
                                            <a href="<?php echo e($committeeMember->facebook!=''?$committeeMember->facebook:'#'); ?>" target="_blank"><i
                                                    class="ri-facebook-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($committeeMember->twitter!=''?$committeeMember->twitter:'#'); ?>" target="_blank"><i
                                                    class="ri-twitter-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e($committeeMember->linkedin!=''?$committeeMember->linkedin:'#'); ?>" target="_blank"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="mailto:<?php echo e($committeeMember->email!=''?$committeeMember->email:'#'); ?>" target="_blank"><i
                                                    class="ri-mail-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($committeeMember->name_bn ?? $committeeMember->name); ?>

                                            <?php else: ?>
                                                <?php echo e($committeeMember->name); ?>

                                            <?php endif; ?></h3>
                                <span> <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($committeeMember->designation_bn ?? $committeeMember->designation); ?>

                                            <?php else: ?>
                                                <?php echo e($committeeMember->designation); ?>

                                            <?php endif; ?></span>
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

<?php echo $__env->make('front.theme2.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\Rubel-Group\modules/Front\Resources/views/theme2/committee/index.blade.php ENDPATH**/ ?>