<?php $__env->startSection('content'); ?>

    <section class="hero-slider style1">
        <div class="home-slider" style="height: 550px;">
            <?php $__currentLoopData = $data->sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-slider"
                    style="background-image:url('<?php echo e($slider->image->file_url ?? url('images/default/slider.png')); ?>'); height: 680px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="welcome-text" style="padding: 50px; background: #2e275199;">
                                    <div class="hero-text">
                                        <h2 style="color: #f8f9fa;">
                                            <?php if(app()->getLocale() == 'bn'): ?>
                                                <?php echo e($slider->title_bn ?? $slider->title); ?>

                                            <?php else: ?>
                                                <?php echo e($slider->title); ?>

                                            <?php endif; ?>

                                        </h2>
                                        <?php if($slider->link): ?>
                                            <div class="button">
                                                <a href="<?php echo e($slider->link); ?>"
                                                    class="bizwheel-btn theme-1 effect"><?php echo e(__('cms.click_here')); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>




    <section class="features-area section-bg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if(!empty($data->welcomeMessage)): ?>
                        <div class="col-12">
                            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                                <div class="section-title default text-center mb-0">
                                    <div class="section-top">
                                        <h1><b><?php echo e(__('cms.welcome_message')); ?></b></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="section-title default text-center mb-0">
                                <div class="section-top text-justify">
                                    <?php echo $data->welcomeMessage->description; ?>

                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-12 text-center display: flex  justify-content: center">
                            <img src="<?php echo e(asset('common/img/empty-block.png')); ?>" alt="Empty Block">
                        </div>
                    <?php endif; ?>

                    <?php if(!empty($data->aboutorganiser)): ?>
                        <div class="col-12">
                            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                                <div class="section-title default text-center mb-0">
                                    <div class="section-top">
                                        <h1><b><?php echo e(__('cms.about_organiser')); ?></b></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="section-title default text-center mb-0">
                                <div class="section-top text-justify">
                                    <?php echo $data->aboutorganiser->description; ?>

                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-12 text-center display: flex  justify-content: center">
                            <img src="<?php echo e(asset('common/img/empty-block.png')); ?>" alt="Empty Block">
                        </div>
                    <?php endif; ?>
                </div>


                <div class="col-md-4">


                    <div
                        style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); max-width: 600px;">




                        

                        <div style="margin-bottom: 5px;">
                            <h2 style="font-size: 24px; margin-bottom: 10px;">Countdown to Exhibition</h2>

                        </div>

                        <div style="font-size: 20px; display: flex;">
                            <div id="days"
                                style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0<span style="font-size: 14px;">Days</span>
                            </div>
                            <div id="hours"
                                style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0<span style="font-size: 14px;">Hours</span></div>
                            <div id="minutes"
                                style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0<span style="font-size: 14px;">Mins</span></div>
                            <div id="seconds"
                                style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0<span style="font-size: 14px;">Secs</span></div>
                        </div>









                        

                        <div style="margin-bottom: 30px;">
                            <h2 style="font-size: 24px; margin-bottom: 10px;">Registered Visitors</h2>
                            <div style="font-size: 20px; display: flex;">
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    0</div>
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    0</div>
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    0</div>
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    0</div>
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    0</div>
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    0</div>
                            </div>
                        </div>

                        <div>
                            <h2 style="font-size: 24px; margin-bottom: 10px;">Exhibition Location</h2>
                            <p>International Convention City Bashundhara, Dhaka, Bangladesh</p>
                            <iframe
                                src="https://www.google.com/maps/d/embed?mid=1eI6iqbO3TQfnWZekhs_P18a541c&hl=en_US&ehbc=2E312F"
                                width="300" height="200"></iframe>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <h2 style="font-size: 24px; margin-bottom: 10px;">Participants</h2>
                            <div style="font-size: 20px; display: flex;">
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    600
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <h2 style="font-size: 24px; margin-bottom: 10px;">Countries</h2>
                            <div style="font-size: 20px; display: flex;">
                                <div
                                    style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                    20
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 30px;">
                            <h2 style="font-size: 24px; margin-bottom: 10px;">Important links</h2>
                            <ul>
                                <li><a href="ahcab.net" target="_blank">Ahcab Website</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>


    <section class="features-area section-bg" style="background: #4954a0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1 style="color: #fff;"><b><?php echo e(__('cms.exhibitors_list')); ?></b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -15px;">
                <?php if(count($data->participants)): ?>
                    <?php $__currentLoopData = $data->participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="blog-latest" style="cursor: pointer;">
                                <div class="single-news">
                                    <div class="news-body">
                                        <a href="<?php echo e(url('exhibitors-list/' . $part->slug)); ?>">
                                                <?php if(isset($part->image->file_url)): ?>
                                                    <img style="width: 100%; height:150px" src="<?php echo e($part->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                                                <?php else: ?>
                                                <div class="blank_image"><?php echo e(substr($part->title, 0,1)); ?></div>
                                                    <!-- <img style="width: 100%; height: 100px;" src="<?php echo e(url('images/default/thumbnail.jpeg')); ?>" alt="Notice Image"> -->
                                                <?php endif; ?>
                                            <div class="news-content">

                                                <h3 class="news-title">
                                                    <a href="<?php echo e(url('exhibitors-list/' . $part->slug)); ?>"><?php echo e(substr($part->title, 0, 41)); ?></a>
                                                </h3>
                                                <!-- <ul class="news-meta">
                                                    <li class="date"><i class="fa fa-calendar"></i><?php echo e($part->start_date); ?></li>
                                                </ul>
                                                <div class="news-text">
                                                    <p><?php echo substr($part->description, 0, 208); ?> <?php echo e(strlen($part->description) > 208 ? '...' : ''); ?></p>
                                                </div> -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 m-bottom-20" style="margin-top: 30px">
                        <div class="section-title default text-center mb-0">
                            <div class="section-top">
                                <div class="button">
                                    <a href="<?php echo e(url('exhibitors-list')); ?>"
                                       class="bizwheel-btn theme-1 effect"><?php echo e(__('cms.view_all')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo e(asset('common/img/empty-block.png')); ?>" alt="Empty Block">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="features-area section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1><b><?php echo e(__('cms.sponsors')); ?></b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -15px;">
                <?php if(count($data->sponsors)): ?>
                    <?php $__currentLoopData = $data->sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-2 col-sm-3">
                            <div class="blog-latest" style="cursor: pointer;">
                                <div class="single-news">
                                    <div class="news-body">
                                        <a href="<?php echo e(url('sponsors/' . $spon->slug)); ?>">
                                                <?php if(isset($spon->image->file_url)): ?>
                                                    <img style="width: 100%; height:150px" src="<?php echo e($spon->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                                                <?php else: ?>
                                                <div class="blank_image"><?php echo e(substr($part->title, 0,1)); ?></div>
                                                    <!-- <img style="width: 100%; height: 100px;" src="<?php echo e(url('images/default/thumbnail.jpeg')); ?>" alt="Notice Image"> -->
                                                <?php endif; ?>
                                            <div class="news-content">
                                                <!-- <h3 class="news-title">
                                                    <a href="<?php echo e(url('sponsors/' . $spon->slug)); ?>"><?php echo e(substr($spon->title, 0, 41)); ?></a>
                                                </h3>
                                                <ul class="news-meta">
                                                    <li class="date"><i class="fa fa-calendar"></i><?php echo e($spon->start_date); ?></li>
                                                </ul>
                                                <div class="news-text">
                                                    <p><?php echo substr($spon->description, 0, 208); ?> <?php echo e(strlen($spon->description) > 208 ? '...' : ''); ?></p>
                                                </div> -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-12 m-bottom-20" style="margin-top: 30px">
                        <div class="section-title default text-center mb-0">
                            <div class="section-top">
                                <div class="button">
                                    <a href="<?php echo e(url('sponsors')); ?>"
                                       class="bizwheel-btn theme-1 effect"><?php echo e(__('cms.view_all')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo e(asset('common/img/empty-block.png')); ?>" alt="Empty Block">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="features-area section-bg" style="background: #4954a0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1 style="color: #fff;"><b><?php echo e(__('cms.participating_countries')); ?></b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -15px;">
                <?php if(count($data->countries)): ?>
                    <?php $__currentLoopData = $data->countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-2 col-sm-3">
                            <div class="blog-latest" style="cursor: pointer;">
                                <div class="single-news" >
                                    <div class="news-body">
                                        <a href="<?php echo e(url('participating-countries/' . $coun->slug)); ?>">
                                                <?php if(isset($coun->image->file_url)): ?>
                                                    <img style="width: 100%; height:150px" src="<?php echo e($coun->image->file_url ?? url('images/default/thumb_3.jpg')); ?>" alt="#">
                                                <?php else: ?>
                                                <div class="blank_image"><?php echo e(substr($part->title, 0,1)); ?></div>
                                                    <!-- <img style="width: 100%; height: 100px;" src="<?php echo e(url('images/default/thumbnail.jpeg')); ?>" alt="Notice Image"> -->
                                                <?php endif; ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 m-bottom-20" style="margin-top: 30px">
                        <div class="section-title default text-center mb-0">
                            <div class="section-top">
                                <div class="button">
                                    <a href="<?php echo e(url('participating-countries')); ?>"
                                       class="bizwheel-btn theme-1 effect"><?php echo e(__('cms.view_all')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-md-12 text-center">
                        <img src="<?php echo e(asset('common/img/empty-block.png')); ?>" alt="Empty Block">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>



    <section class="features-area section-bg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1><b><?php echo e(__('cms.archives')); ?></b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <a href="http://iedap.com/2018/" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;">
                            <img style="width: 100%; height: 200px;" src="<?php echo e(url('images/default/logo.png')); ?>" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span>
                                <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 class="blog-item-title"><a target="_blank" href="http://iedap.com/2018/">IEDAP 2018</a></h3>
                                <p>
                                            4th International Exhibition of Dairy, Aqua and
                                            Pet-2018 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                </p>
                                <div class="button" style="text-align: center;">
                                        <a href="http://iedap.com/2018/" target="_blank"
                                            class="bizwheel-btn theme-1 effect">Visit</a>
                                    </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://iedap.com/2016/" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;">
                            <img style="width: 100%; height: 200px;" src="<?php echo e(url('images/default/logo.png')); ?>" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span>
                                <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 class="blog-item-title"><a target="_blank" href="http://iedap.com/2016/">IEDAP 2016</a></h3>
                                <p>
                                        3rd International Exhibition of Dairy, Aqua and
                                            Pet-2016 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                </p>
                                <div class="button" style="text-align: center;">
                                        <a href="http://iedap.com/2016/" target="_blank"
                                            class="bizwheel-btn theme-1 effect">Visit</a>
                                    </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://iedap.com/2014/" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;">
                            <img style="width: 100%; height: 200px;" src="<?php echo e(url('images/default/logo.png')); ?>" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span>
                                <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 class="blog-item-title"><a target="_blank" href="http://iedap.com/2014/">IEDAP 2014</a></h3>
                                <p>
                                2nd International Exhibition of Dairy, Aqua and
                                            Pet-2014 (IEDAP)' organised by Animal Health Companies of Bangladesh


                                </p>
                                <div class="button" style="text-align: center;">
                                            <a href="http://iedap.com/2014/" target="_blank"
                                                class="bizwheel-btn theme-1 effect">Visit</a>
                                        </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="http://iedap.com/2012/" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;">
                            <img style="width: 100%; height: 200px;" src="<?php echo e(url('images/default/logo.png')); ?>" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span> -->
                                <!-- <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 class="blog-item-title"><a target="_blank" href="http://iedap.com/2012/">IEDAP 2012</a></h3>
                                <p>
                                1st International Exhibition of Dairy, Aqua and
                                            Pet-2012 (IEDAP)' organised by Animal Health Companies of Bangladesh</p>
                                    <div class="button" style="text-align: center;">
                                        <a href="http://iedap.com/2012/" target="_blank"
                                            class="bizwheel-btn theme-1 effect">Visit</a>
                                    </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script>
        $('#sponsor-carousel').carousel({
            interval: 3000,
            cycle: true
        });

        $('#participants-carousel').carousel({
            interval: 3000,
            cycle: true
        });

        $('#country-carousel').carousel({
            interval: 3000,
            cycle: true
        });
    </script>

    <script src="<?php echo e(asset('/front/theme1/js/countdown.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My_codes\cse alumni\advance-cms\modules/Front\Resources/views/theme1/home/index.blade.php ENDPATH**/ ?>