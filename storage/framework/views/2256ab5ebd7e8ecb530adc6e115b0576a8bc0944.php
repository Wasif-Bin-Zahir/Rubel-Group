<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="<?php echo e(url('article')); ?>"><?php echo e(__('cms.articles')); ?></a></li>
                                <?php if(app()->getLocale() == 'bn'): ?>
                                    <li><a href="javascript:void(0)"><?php echo e($data->article->title_bn ?? $data->article->title); ?></a></li>
                                <?php else: ?>
                                    <li><a href="javascript:void(0)"><?php echo e($data->article->title); ?></a></li>
                                <?php endif; ?>
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
                                <?php if(isset($data->article->image->file_url)): ?>
                                    <div class="main-image">
                                        <img src="<?php echo e($data->article->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                                    </div>
                                <?php endif; ?>
                                <div class="blog-detail">
                                    <ul class="news-meta">
                                        <li><i class="fa fa-user"></i>Admin</li>
                                        <li><i class="fa fa-pencil"></i><?php echo e(\Carbon\Carbon::parse($data->article->created_at)->format('M d, Y')); ?></li>
                                    </ul>
                                    <h2 class="blog-title">
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e($data->article->title_bn ?? $data->article->title); ?>

                                        <?php else: ?>
                                            <?php echo e($data->article->title); ?>

                                        <?php endif; ?>
                                    </h2>
                                    <p>
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo $data->article->description_bn ?? $data->article->description; ?>

                                        <?php else: ?>
                                            <?php echo $data->article->description; ?>

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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/article/show.blade.php ENDPATH**/ ?>