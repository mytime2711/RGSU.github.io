<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary">Create</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>List of category</h3>
                <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
                <?php endif; ?>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Name</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($k+1); ?></td>
                            <td><?php echo e($category->name); ?></td>
                            <td>
                                <?php if($category->active): ?>
                                <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                <span class="badge badge-danger">Deleted</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('category.edit', $category->id)); ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(route('category.delete', $category->id)); ?>" onclick="return confirm('Are you OK?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/news/resources/views/admins/categories/index.blade.php ENDPATH**/ ?>