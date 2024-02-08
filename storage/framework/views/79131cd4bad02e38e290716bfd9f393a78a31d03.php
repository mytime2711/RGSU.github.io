<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('article.index')); ?>" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Edit article</h3>
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
                <?php endif; ?>
                <form action="<?php echo e(route('article.update')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($article->id); ?>">
                    <div class="form-group">
                        <label for="">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" value="<?php echo e($article->title); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category <span class="text-danger">*</span></label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="">Select a category</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>" <?php if($article->category_id == $cat->id): ?> selected <?php endif; ?>><?php echo e($cat->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description <span class="text-danger">*</span></label>
                        <textarea name="short_description" id="short_description" rows="2" class="form-control" required><?php echo e($article->short_description); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description">Long Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" rows="10" class="form-control" required><?php echo e($article->description); ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail <span class="text-danger"></span></label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="is_publish">Publish Status <span class="text-danger">*</span></label>
                        <select name="is_publish" id="is_publish" class="form-control" required>
                            <option value="">Select one</option>
                            <option value="1" <?php if($article->is_publish == 1): ?> selected <?php endif; ?>>Published</option>
                            <option value="0" <?php if($article->is_publish == 0): ?> selected <?php endif; ?>>Un-published</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="active">Status <span class="text-danger">*</span></label>
                        <select name="active" id="active" class="form-control" required>
                            <option value="">Select one</option>
                            <option value="1" <?php if($article->active == 1): ?> selected <?php endif; ?>>Active</option>
                            <option value="0" <?php if($article->active == 0): ?> selected <?php endif; ?>>Disabled</option>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/news/resources/views/admins/articles/edit.blade.php ENDPATH**/ ?>