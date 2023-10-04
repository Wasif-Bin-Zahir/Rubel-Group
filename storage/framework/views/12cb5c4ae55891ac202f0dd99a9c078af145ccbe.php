<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.event')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <?php if(count($data->events)): ?>
                <div class="row" style="padding-bottom: 40px;">
                    <?php $__currentLoopData = $data->events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="blog-latest">
                                <div class="single-news" style="height: 220px">
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h3 class="news-title">
                                                <a href="<?php echo e(url('event/' . $event->slug)); ?>"><?php echo e(substr($event->title, 0, 41)); ?></a>
                                            </h3>
                                            <ul class="news-meta">
                                                <li class="date"><i class="fa fa-calendar"></i><?php echo e($event->start_date); ?></li>
                                            </ul>
                                            <div class="news-text">
                                                <p><?php echo substr($event->description, 0, 208); ?> <?php echo e(strlen($event->description) > 208 ? '...' : ''); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($data->events->hasPages()): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $data->events->links(); ?>

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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/event/index.blade.php ENDPATH**/ ?>