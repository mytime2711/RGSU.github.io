<?php $__env->startSection('content'); ?>
    <div class="row mt-3">
        <div class="col-sm-12">
            <h3 class="text-danger bg-secondary p-1 rounded">
                <?php echo e($name); ?>

            </h3>
        </div>
    </div>
    <!-- all article  -->
    <?php if(count($articles)): ?>
    <div class="row mt-3">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-3 mb-3">
            <div class="card" style="w-100">
                <img src="<?php echo e(asset($art->thumbnail)); ?>" class="card-img-top" alt="Article Thumbnail">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($art->title); ?></h5>
                    <p class="card-text"><?php echo e($art->short_description); ?></p>
                    <a href="<?php echo e(route('article_detail', $art->id)); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php echo e($articles->links()); ?>

        </div>
    </div>
    <?php else: ?> 
    <div class="row">
        <div class="col">
            <h5 class="text-danger text-center">There is no record...</h5>
        </div>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/news/resources/views/website/article_by_category.blade.php ENDPATH**/ ?>