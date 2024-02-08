<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('article.create')); ?>" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> Create</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>List of articles</h3>
                <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
                <?php endif; ?>

                <form class="row" method="get">
                    <div class="col-sm-3 form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">----</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categ->id); ?>"><?php echo e($categ->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="">Keyword</label>
                        <input type="text" name="keyword" class="form-control" placeholder="Search by title, category name, creator name, description...">
                    </div>
                    <div class="col-sm form-group">
                        <label for=""><br><br></label>
                        <button class="btn btn-primary mt-4"><i class="fa fa-search"></i> Search</button>
                    </div>
                </form>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Thumbnail</td>
                            <td>Title</td>
                            <!-- <td>Short Description</td> -->
                            <td>Category</td>
                            <td>Published Date</td>
                            <td>Created By</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                            <?php echo e($articles->firstItem() + $k); ?>

                            </td>

                            <td>
                                <img src="<?php echo e(asset($article->thumbnail)); ?>" alt="Thumbnail" width="50">
                            </td>
                            <td><?php echo e($article->title); ?></td>
                            <!-- <td><?php echo e($article->short_descrtiption); ?></td> -->
                            <td><?php echo e($article->category_name); ?></td>
                            <td><?php echo e($article->publish_date); ?></td>
                            <td><?php echo e($article->creator); ?></td>
                            <td>
                                <?php if($article->active): ?>
                                <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                <span class="badge badge-danger">Deleted</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('article.edit', $article->id)); ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(route('article.delete', $article->id)); ?>" onclick="return confirm('Are you OK?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo e($articles->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/articles/index.blade.php ENDPATH**/ ?>