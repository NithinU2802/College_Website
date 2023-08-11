<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit events
                <a href="<?php echo e(url('admin/events/')); ?>" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('admin/events/'.$events->id)); ?>" method="POST" >
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label>Date</label>
                    <input type="text" name="date" value="<?php echo e($events->date); ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Month</label>
                    <input type="text" name="month" value="<?php echo e($events->month); ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo e($events->title); ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Time/Description</label>
                    <input type="text" name="time" value="<?php echo e($events->time); ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Link(optional)</label>
                    <input type="text" name="link" value="<?php echo e($events->link); ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" <?php echo e($events->status=='1' ? 'checked':''); ?> style="width:25px;height:25px">
                    Checked=Hidden,Unchecked=Visible
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/events/edit.blade.php ENDPATH**/ ?>