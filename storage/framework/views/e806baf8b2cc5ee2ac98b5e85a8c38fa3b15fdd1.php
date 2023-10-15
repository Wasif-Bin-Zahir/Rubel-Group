<footer class="footer" style="background-image:url('img/map.png')">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget footer-about widget">
                        <div class="logo">
                            <div class="img-logo">
                                <a class="logo" href="<?php echo e(url('/')); ?>">
                                    <img class="img-responsive" src="<?php echo e($global_site->logo->file_url ?? url('images/default/logo.png')); ?>" alt="<?php echo e($global_site->title); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="footer-widget-about-description">
                            <p><?php echo $global_site->description; ?></p>
                        </div>
                        <div class="social">
                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="<?php echo e($global_contact->facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="<?php echo e($global_contact->twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="<?php echo e($global_contact->linkedin); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="pinterest" href="<?php echo e($global_contact->youtube); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title"><?php echo e(__('cms.company')); ?></h3>
                        <ul>
                            <!-- <li><a href="<?php echo e(url('event')); ?>"><?php echo e(app()->getLocale() == 'bn' ? 'ইভেন্ট' : 'Event'); ?></a></li> -->
                            <li><a href="<?php echo e(url('news')); ?>"><?php echo e(app()->getLocale() == 'bn' ? 'নিউজ' : 'News'); ?></a></li>
                            <li><a href="<?php echo e(url('notice')); ?>"><?php echo e(app()->getLocale() == 'bn' ? 'নোটিশ' : 'Notice'); ?></a></li>
                            <li><a href="<?php echo e(url('faq')); ?>"><?php echo e(app()->getLocale() == 'bn' ? 'সচারাচর জানতে যাওয়া' : 'FAQ'); ?></a></li>
                            <li><a href="<?php echo e(url('login')); ?>"><?php echo e(app()->getLocale() == 'bn' ? 'লগইন' : 'Login'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <?php
                    $articles = \Modules\Cms\Entities\Article::get()->take(2);
                ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-widget footer-news widget">
                        <h3 class="widget-title"><?php echo e(__('cms.latest_articles')); ?></h3>
                        <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="single-f-news">
                                <div class="post-thumb">
                                    <a href="<?php echo e(url('article/' . $article->slug)); ?>">
                                        <img src="<?php echo e($article->image->file_url ?? url('images/default/thumb_2.jpg')); ?>" alt="#">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="post-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i><?php echo e(\Carbon\Carbon::parse($article->created_at)->format('M d, Y')); ?></time>
                                    </p>
                                    <h4 class="title">
                                        <a href="<?php echo e(url('article/' . $article->slug)); ?>">
                                            <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($article->title_bn ?? $article->title); ?>

                                            <?php else: ?>
                                                <?php echo e($article->title); ?>

                                            <?php endif; ?>
                                        </a>
                                    </h4>
                                </div>
                                <br>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-white"><?php echo e(app()->getLocale() == 'bn' ? 'কোনো আর্টিকেল নেই' : 'No Articles Available'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget footer_contact widget">
                        <h3 class="widget-title"><?php echo e(__('cms.contact')); ?></h3>
                        <ul class="address-widget-list">
                            <li class="footer-mobile-number"><i class="fa fa-phone"></i><?php echo e($global_contact->phone); ?></li>
                            <li class="footer-mobile-number"><i class="fa fa-mobile"></i><?php echo e($global_contact->mobile); ?></li>
                            <li class="footer-mobile-number"><i class="fa fa-envelope"></i><?php echo e($global_contact->email); ?></li>
                            <li class="footer-mobile-number"><i class="fa fa-map-marker"></i><?php echo e($global_contact->address); ?>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright" style="color:bisque ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content">
                        <p>
                            <?php echo e(__('cms.copyright')); ?>: <?php echo e(date('Y')); ?> © <a href="<?php echo e(url('/')); ?>">
                                <?php if(app()->getLocale() == 'bn'): ?>
                                    <?php echo e($global_site->title_bn ?? $global_site->title); ?>

                                <?php else: ?>
                                    <?php echo e($global_site->title); ?>

                                <?php endif; ?>
                            </a>
                        </p>

                        <p>
                        Developed and maintained by <a href="https://bemantech.com" target="_blank" style="color:wheat">
                        Bemantech Ltd.
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH D:\bemantech\projects\Rubel-Group\resources\views/front/theme1/partials/_footer.blade.php ENDPATH**/ ?>