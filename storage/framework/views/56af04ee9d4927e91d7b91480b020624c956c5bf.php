<?php $__env->startSection('title','View Users'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Users
                <a href="<?php echo e(url('admin/users')); ?>" class="btn btn-danger float-end"><i class="fa-solid fa-circle-chevron-left"></i> BACK</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label>Full Name</label>
                <p class="form-control"><?php echo e($user->name); ?></p>
            </div>
            <div class="mb-3">
                <label>Email ID</label>
                <input type="email" class="form-control" value="<?php echo e($user->email); ?>">
            </div>
            <div class="mb-3">
                <label>Updated at</label>
                <p class="form-control"><?php echo e($user->updated_at->format('d/m/Y')); ?></p>
            </div>

            <form action="<?php echo e(url('admin/update-user/'.$user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label>Role as</label>
                    <select name="role_as" class="form-control form-select">
                        <option value="1" <?php echo e($user->role_as=='1' ? 'selected':''); ?>>Admin</option>
                        <option value="0" <?php echo e($user->role_as=='0' ? 'selected':''); ?>>User</option>
                        <option value="2" <?php echo e($user->role_as=='2' ? 'selected':''); ?>>Coordinator</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Update Role</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wwwse\Downloads\clgweb\clgweb\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>