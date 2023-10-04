

<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.articles')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <?php if(count($data->articles)): ?>
                <div class="row">
                    <?php $__currentLoopData = $data->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-item-4">
                            <?php if(isset($article->image->file_url)): ?>
                                <img style="width: 100%; height: 200px;" src="<?php echo e($article->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                            <?php else: ?>
                                <img style="width: 100%; height: 200px;" src="<?php echo e(url('images/default/thumbnail.jpeg')); ?>" alt="Notice Image">
                            <?php endif; ?>
                                
                                <div class="content-box">
                                    <span class="blog-meta"><i class="fa fa-calendar"></i> <?php echo e(\Carbon\Carbon::parse($article->created_at)->format('Y-m-d')); ?></span>
                                    <span class="blog-meta"><i class="fa fa-user"></i> Admin</span>
                                    <h3 class="blog-item-title">
                                        <a href="<?php echo e(url('article/' . $article->slug)); ?>">
                                            <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e(substr($article->title_bn, 0, 25) ?? substr($article->title, 0, 25)); ?>

                                            <?php else: ?>
                                                <?php echo e(substr($article->title, 0, 25)); ?>

                                            <?php endif; ?>
                                        </a>
                                    </h3>
                                    <p>
                                        <?php if(app()->getLocale() == 'bn'): ?>
                                            <?php echo e(substr(strip_tags($article->description_bn), 0, 25) ?? substr(strip_tags($article->description), 0, 25)); ?>

                                        <?php else: ?>
                                            <?php echo e(substr(strip_tags($article->description), 0, 25)); ?>

                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($data->articles->hasPages()): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $data->articles->links(); ?>

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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\ahcab expo\advance-cms\modules/Front\Resources/views/theme1/article/index.blade.php ENDPATH**/ ?>