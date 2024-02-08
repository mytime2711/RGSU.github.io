<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary">Create</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>List of users</h3>
                <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
                <?php endif; ?>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Photo</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Type</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($k+1); ?></td>
                            <td>
                                <?php if($user->photo): ?>
                                <img src="<?php echo e(asset($user->photo)); ?>" alt="Profile" width="50px" height="50px" class="rounded-circle">
                                <?php else: ?>
                                <img src="<?php echo e(asset('assets/dist/img/user2-160x160.jpg')); ?>" alt="Profile" class="rounded-circle" width="50px">
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->user_type); ?></td>
                            <td>
                                <?php if($user->active): ?>
                                <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                <span class="badge badge-danger">Deleted</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(route('user.delete', $user->id)); ?>" onclick="return confirm('Are you OK?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/users/index.blade.php ENDPATH**/ ?>