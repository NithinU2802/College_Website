<?php $__env->startSection('title','Footer1'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Footer
                <a href="<?php echo e(url('admin/footer1/create')); ?>" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add footer1
                </a>
            </h4>
        </div>
        <div class="card-body">
            <?php if(session('message')): ?>
                <div class="alert alert-success"><?php echo e(session('message')); ?></div>
            <?php endif; ?>
            <table id="myDataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $footer1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($footer->name); ?></td>

                            <td><?php echo e($footer->link); ?></td>
                            <td><?php echo e($footer->status=='0' ? 'Visible':'Hidden'); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin/footer1/'.$footer->id.'/edit')); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(url('admin/footer1/'.$footer->id.'/delete')); ?>"
                                    onclick="return confirm('Are you sure you want to delete this footer?');"
                                    class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/footers/footer1/index.blade.php ENDPATH**/ ?>