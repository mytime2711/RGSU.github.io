<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('category.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Create new category</h3>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('category.save')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/products/create.blade.php ENDPATH**/ ?>