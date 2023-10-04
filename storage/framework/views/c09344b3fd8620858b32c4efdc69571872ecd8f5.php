<?php $__env->startSection('content'); ?>

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>"><?php echo e(__('cms.home')); ?></a></li>
                                <li><a href="javascript:void(0)"><?php echo e(__('cms.schedule')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <?php if(count($data->notices)): ?>
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Day</th>
                            <th scope="col">Start</th>
                            <th scope="col">End</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $data->notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row">1</th>
                            <td><?php echo e(substr($notice->title, 0, 25)); ?></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                        </table>
                    </table>
                </div>
                <?php if($data->notices->hasPages()): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $data->notices->links(); ?>

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

<?php echo $__env->make('front.theme1.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bemantech\projects\advance-cms\modules/Front\Resources/views/theme1/schedule/index.blade.php ENDPATH**/ ?>