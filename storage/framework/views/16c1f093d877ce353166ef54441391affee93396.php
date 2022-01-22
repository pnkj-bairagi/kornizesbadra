<?php if(session()->has('success')): ?>
<div class="alert alert-success">
<?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>.
<?php if(session()->has('error')): ?>
<div class="alert alert-danger">
<?php echo e(session()->get('error')); ?>

</div>
<?php endif; ?>.<?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/layout/includes/message.blade.php ENDPATH**/ ?>