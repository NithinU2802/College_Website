<?php $__env->startSection('title','Events'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Events
                <a href="<?php echo e(url('admin/events/create')); ?>" class="btn btn-primary btn-sm text-white float-end">
                    <i class="fa-regular fa-square-plus"></i> Add events
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
                        <th>Date</th>
                        <th>Month</th>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($slider->date); ?></td>
                            <td><?php echo e($slider->month); ?></td>
                            <td><?php echo e($slider->title); ?></td>
                            <td><?php echo e($slider->time); ?></td>
                            <td><?php echo e($slider->link); ?></td>
                            <td><?php echo e($slider->status=='0' ? 'Visible':'Hidden'); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin/events/'.$slider->id.'/edit')); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(url('admin/events/'.$slider->id.'/delete')); ?>"
                                    onclick="return confirm('Are you sure you want to delete this event?');"
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/events/index.blade.php ENDPATH**/ ?>