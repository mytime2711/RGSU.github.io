<?php $__env->startSection('slideshow'); ?>
    <?php echo $__env->make('website.slideshow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- all article  -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/website/index.blade.php ENDPATH**/ ?>