<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Cards
                <a href="<?php echo e(url('admin/cards/')); ?>" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('admin/cards/'.$cards->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" value="<?php echo e($cards->title); ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control"><br>
                    <img src="<?php echo e(asset("$cards->image")); ?>" style="width:80px;height:80px" alt="cards">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea type="text" name="description" class="form-control"><?php echo e($cards->description); ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <input type="checkbox" name="status" <?php echo e($cards->status=='1' ? 'checked':''); ?> style="width:25px;height:25px">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/cards/edit.blade.php ENDPATH**/ ?>