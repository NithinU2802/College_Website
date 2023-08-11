<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add News
                        <a href="<?php echo e(url('admin/news')); ?>" class="btn btn-danger text-white float-end"><i class="fa-solid fa-circle-chevron-left"></i> Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('admin/news/create')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"/>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control"/>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                            <label>Status (Check to hide)</label><br>
                            <input type="checkbox" name="status"/>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" ><i class="fa-regular fa-square-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/news/create.blade.php ENDPATH**/ ?>