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
                <h3>Edit category</h3>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('category.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="active">Status <span class="text-danger">*</span></label>
                        <select name="active" id="active" class="form-control">
                            <option value="1" <?php if($category->active): ?> selected <?php endif; ?>>Active</option>
                            <option value="0"  <?php if(!$category->active): ?> selected <?php endif; ?>>Deleted</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/news/resources/views/admins/categories/edit.blade.php ENDPATH**/ ?>