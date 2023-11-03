

<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="<?php echo e(url('news')); ?>"><?php echo e(__('cms.news')); ?></a></li>
                                <li><a href="javascript:void(0)">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($data->news->title_bn ?? $data->news->title); ?>

                                        <?php else: ?>
                                            <?php echo e($data->news->title); ?>

                                        <?php endif; ?>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-area archive blog-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-single-main">
                                <?php if(isset($data->news->image->file_url)): ?>
                                    <div class="main-image">
                                        <img src="<?php echo e($data->news->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                                    </div>
                                <?php endif; ?>
                                <div class="blog-detail">
                                    
                                    <h2 class="blog-title">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($data->news->title_bn ?? $data->news->title); ?>

                                        <?php else: ?>
                                            <?php echo e($data->news->title); ?>

                                        <?php endif; ?>

                                    </h2>
                                    <p>
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo $data->news->description_bn ?? $data->news->description; ?>

                                        <?php else: ?>
                                            <?php echo $data->news->description; ?>

                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\Rubel-Group\modules/Front\Resources/views/theme2/news/show.blade.php ENDPATH**/ ?>