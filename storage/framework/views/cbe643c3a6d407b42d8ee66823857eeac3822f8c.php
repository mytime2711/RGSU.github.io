<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('product.index')); ?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Edit product</h3>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('product.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Purchase Price <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" name="purchase_price" value="<?php echo e($product->purchase_price); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Sell Price <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" name="sell_price" value="<?php echo e($product->sell_price); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category <span class="text-danger">*</span></label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="">Select a category</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>" <?php if($product->category_id == $cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" rows="10" class="form-control" required><?php echo e($product->descrtiption); ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail <span class="text-danger"></span></label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="active">Status <span class="text-danger">*</span></label>
                        <select name="active" id="active" class="form-control" required>
                            <option value="">Select one</option>
                            <option value="1" <?php if($product->active == 1): ?> selected <?php endif; ?>>Active</option>
                            <option value="0" <?php if($product->active == 0): ?> selected <?php endif; ?>>Disabled</option>
                        </select>
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

<?php $__env->startSection('custom-js'); ?>
    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/products/edit.blade.php ENDPATH**/ ?>