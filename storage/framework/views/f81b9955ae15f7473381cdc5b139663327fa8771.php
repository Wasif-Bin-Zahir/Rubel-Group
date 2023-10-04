<div class="btn-group">
    <a href="<?php echo e(route('backend.cms.page.show', [$data->id])); ?>" type="button" class="btn btn-default">
        <i class="fas fa-eye"></i>
    </a>
    <a href="<?php echo e(route('backend.cms.page.edit', [$data->id])); ?>" type="button" class="btn btn-default">
        <i class="fas fa-pen"></i>
    </a>
    <a type="button" class="btn btn-default btn-delete" tabindex="0" data-html="true" data-popover-content="#confirm_delete<?php echo e($data->id); ?>">
        <i class="fas fa-trash"></i>
    </a>
    <div style="display: none;" id="confirm_delete<?php echo e($data->id); ?>">
        <div class="popover-body">
            <a type="button" class="btn btn-danger text-white delete_submit <?php echo e($data->id); ?>">Delete</a>
            <a role="button" class="btn btn-dark text-white">Cancel</a>
        </div>
    </div>
    <?php echo Form::open(['url' => route('backend.cms.page.destroy', [$data->id]), 'method' => 'delete', 'id' => 'delete_form' . $data->id]); ?><?php echo Form::close(); ?>

</div>
<?php /**PATH /home4/ariful3010/expo.ahcab.net/modules/Cms/Resources/views/page/action.blade.php ENDPATH**/ ?>