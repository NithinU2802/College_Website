<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Card
                <a href="<?php echo e(url('admin/events')); ?>" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('admin/events/create')); ?>" method="POST" >
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label>Date</label>
                    <input type="text" name="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Month (Ex: JAN)</label>
                    <input type="text" name="month" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Time/Description</label>
                    <input type="text" name="time" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Link(optional)</label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" style="width:25px;height:25px">
                    Checked=Hidden,Unchecked=Visible
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-regular fa-square-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/events/create.blade.php ENDPATH**/ ?>