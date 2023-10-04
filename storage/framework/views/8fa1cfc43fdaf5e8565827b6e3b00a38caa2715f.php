<div class="card card-purple card-outline">
    <div class="card-body box-profile">
        <?php
            $user = \Modules\Ums\Entities\User::find(auth()->user()->id);
        ?>
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" style="height: 100px; width: 100px;"
                 src="<?php echo e(isset($user->avatar->file_url) ? $user->avatar->file_url : 'https://via.placeholder.com/128x128.jpg?text=' . $user->username); ?>" alt="<?php echo e($user->username); ?>">
        </div>
        <h3 class="profile-username text-center"><?php echo e($user->personalInfo->first_name); ?></h3>
        <p class="text-muted text-center"><?php echo e($user->personalInfo->designation); ?></p>
        <ul class="nav nav-pills flex-column">
            <?php $__currentLoopData = json_decode(json_encode(config('core.profile_menu'))); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile_menu_key => $profile_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item <?php echo e($profile_menu_key == ($active ?? '') ? 'bg-light' : ''); ?>">
                    <a href="<?php echo e($profile_menu->url); ?>" class="nav-link"
                       style="padding: 10px; font-size: 16px; color: #212543;">
                        <?php echo e($profile_menu->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH E:\My_codes\ahcab expo\advance-cms\resources\views/admin/partials/_profile_menu.blade.php ENDPATH**/ ?>