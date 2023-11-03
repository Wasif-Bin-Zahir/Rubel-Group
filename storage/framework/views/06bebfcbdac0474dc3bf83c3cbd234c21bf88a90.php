

<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.news')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <?php if(count($data->newses)): ?>
                <div class="row">
                    <?php $__currentLoopData = $data->newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="<?php echo e(url('news/' . $news->slug)); ?>">
                                <div class="blog-item-4" style="cursor: pointer;">
                                    <img style="width: 100%; height: 200px;" src="<?php echo e(url('images/default/thumbnail.jpeg')); ?>" alt="News Image">
                                    <div class="content-box">
                                        <span class="blog-meta"><i class="fa fa-calendar"></i> <?php echo e(\Carbon\Carbon::parse($news->created_at)->format('Y-m-d')); ?></span>
                                        <span class="blog-meta"><i class="fa fa-user"></i> Admin</span>
                                        <h3 class="blog-item-title"><a href="<?php echo e(url('news/' . $news->slug)); ?>"><?php echo e(substr($news->title, 0, 25)); ?></a></h3>
                                        <p><?php echo substr($news->description, 0, 55); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($data->newses->hasPages()): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $data->newses->links(); ?>

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

<?php echo $__env->make('front.theme2.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\Rubel-Group\modules/Front\Resources/views/theme2/news/index.blade.php ENDPATH**/ ?>