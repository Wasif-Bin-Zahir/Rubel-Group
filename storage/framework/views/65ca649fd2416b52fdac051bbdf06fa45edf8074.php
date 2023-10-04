

<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="<?php echo e(url('notice')); ?>"><?php echo e(__('cms.sponsors')); ?></a></li>
                                <li><a href="javascript:void(0)">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($data->notice->title_bn ?? $data->notice->title); ?>

                                        <?php else: ?>
                                            <?php echo e($data->notice->title); ?>

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
                                <?php if(isset($data->notice->image->file_url)): ?>
                                    <div class="main-image">
                                        <img src="<?php echo e($data->notice->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                                    </div>
                                <?php endif; ?>
                                <div class="blog-detail">
                                    
                                    <h2 class="blog-title">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($data->notice->title_bn ?? $data->notice->title); ?>

                                        <?php else: ?>
                                            <?php echo e($data->notice->title); ?>

                                        <?php endif; ?>

                                    </h2>
                                    <p>
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo $data->notice->description_bn ?? $data->notice->description; ?>

                                        <?php else: ?>
                                            <?php echo $data->notice->description; ?>

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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\ahcab expo\advance-cms\modules/Front\Resources/views/theme1/sponsors/show.blade.php ENDPATH**/ ?>