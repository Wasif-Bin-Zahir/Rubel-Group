<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.hotelinformation')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <?php if(count($data->notices)): ?>
                <div class="row">
                    <?php $__currentLoopData = $data->notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="<?php echo e(url('hotel-information/' . $notice->slug)); ?>">
                                <div class="blog-item-4" style="cursor: pointer;">
                                    <?php if(isset($notice->image->file_url)): ?>
                                        <img style="width: 100%; height: 200px;"
                                            src="<?php echo e($notice->image->file_url ?? url('images/default/thumb_3.jpg')); ?>"
                                            alt="#">
                                    <?php else: ?>
                                        <img style="width: 100%; height: 200px;"
                                            src="<?php echo e(url('images/default/thumbnail.jpeg')); ?>" alt="Notice Image">
                                    <?php endif; ?>
                                    <div class="content-box">
                                        <span class="blog-meta"><i class="fa fa-calendar"></i>
                                            <?php echo e(\Carbon\Carbon::parse($notice->created_at)->format('Y-m-d')); ?></span>
                                        <span class="blog-meta"><i class="fa fa-user"></i> Admin</span>
                                        <h3 class="blog-item-title"><a
                                                href="<?php echo e(url('hotel-information/' . $notice->slug)); ?>"><?php echo e(substr($notice->title, 0, 25)); ?></a>
                                        </h3>
                                        <p><?php echo substr($notice->description, 0, 55); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($data->notices->hasPages()): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $data->notices->links(); ?>

                        </div>
                    </div>
                <?php endif; ?>
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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\ahcab expo\advance-cms\modules/Front\Resources/views/theme1/hotelinformation/index.blade.php ENDPATH**/ ?>