<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Create new user</h3>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('user.save')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Photo <span class="text-danger"></span></label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/news/resources/views/admins/users/create.blade.php ENDPATH**/ ?>