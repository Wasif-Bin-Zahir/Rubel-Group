

<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.gallary')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <?php if(count($data->galleryPhotos)): ?>
                <div class="row">
                    <?php $__currentLoopData = $data->galleryPhotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleryPhoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-service">
                                <div class="service-head">
                                    <a class="mg-image" href="<?php echo e($galleryPhoto->image->file_url ?? url('images/default/thumb_1.jpg')); ?>">
                                        <img style="width: 100%; height: 275px;" src="<?php echo e($galleryPhoto->image->file_url ?? url('images/default/thumb_1.jpg')); ?>" alt="<?php echo e($galleryPhoto->title); ?>">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <h4 style="font-weight: 500; font-size: 16px;">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e(substr($galleryPhoto->title_bn ?? $galleryPhoto->title , 0, 35)); ?>

                                        <?php else: ?>
                                            <?php echo e(substr($galleryPhoto->title, 0, 35)); ?>

                                        <?php endif; ?>

                                    </h4>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($data->galleryPhotos->hasPages()): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $data->galleryPhotos->links(); ?>

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

<?php echo $__env->make('front.theme2.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\Rubel-Group\modules/Front\Resources/views/theme2/gallery/index.blade.php ENDPATH**/ ?>