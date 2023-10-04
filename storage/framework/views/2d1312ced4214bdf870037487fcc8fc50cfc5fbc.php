<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.faq')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <?php if(count($data->faqs)): ?>
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="section-title default text-center mb-0">
                                    <div class="section-top">
                                        <h1><b><?php echo e(__('cms.faq')); ?></b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion">
                                    <?php $__currentLoopData = $data->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faqKey => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card mb-4">
                                            <div class="card-header" style="cursor: pointer;" id="heading<?php echo e($faqKey); ?>">
                                                <h5 class="mb-0 <?php echo e($faqKey == 0 ? '' : 'collapsed'); ?>" data-toggle="collapse" data-target="#collapse<?php echo e($faqKey); ?>" aria-expanded="<?php echo e($faqKey == 0 ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($faqKey); ?>">
                                                    <?php if(app()->getLocale() == 'bn'): ?>
                                                        <?php echo $faq->question_bn ?? $faq->question; ?>

                                                    <?php else: ?>
                                                        <?php echo $faq->question; ?>

                                                    <?php endif; ?>
                                                </h5>
                                            </div>
                                            <div id="collapse<?php echo e($faqKey); ?>" class="collapse <?php echo e($faqKey == 0 ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($faqKey); ?>" data-parent="#accordion">
                                                <div class="card-body">
                                                    <?php if(app()->getLocale() == 'bn'): ?>
                                                        <?php echo $faq->answer_bn ?? $faq->answer; ?>

                                                    <?php else: ?>
                                                        <?php echo $faq->answer; ?>

                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php if($data->faqs->hasPages()): ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php echo $data->faqs->links(); ?>

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
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/faq/index.blade.php ENDPATH**/ ?>