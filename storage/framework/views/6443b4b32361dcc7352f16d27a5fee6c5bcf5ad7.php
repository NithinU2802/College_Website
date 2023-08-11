<?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>
<?php echo $__env->make('frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\Nithin U\Dropbox\My PC (LAPTOP-GE7L8071)\Desktop\clgweb\resources\views/layouts/frontend/master.blade.php ENDPATH**/ ?>