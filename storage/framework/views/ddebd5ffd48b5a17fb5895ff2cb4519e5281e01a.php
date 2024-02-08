<?php $__env->startSection('meta'); ?>
    <meta name="description"
        content="CamboTransportClub.Com is one of the top 10 Car Rental Companies in Cambodia with more than 38 cars and more than 30 employees. It was founded on June 1, 2001 in Phnom Penh, Cambodia. CamboTransportClub.Com not only rents cars at a competitive price but also creates employment and training opportunities for local young students graduated from NGOs, OIs or any private institution and poor students from remote provinces so that they can enjoy internship in the field of tourism." />
    <meta name="keywords"
        content="Car, car rental, car in cambodia, car for sell, car for rent, tourism, tourism in cambodia, cambodia tourism, tour, cambodia tour ">
    <!-- meta content  -->
    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo e($article->title); ?>" />
    <meta property="og:type" content="Article"/>
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:image" content="<?php echo e(asset($article->thumbnail)); ?>" />
    <meta property="og:description" content="<?php echo e($article->short_description); ?>" />
    <meta property="og:site_name" content="Laravel new Webiste" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-primary"><?php echo e($article->title); ?></h3>
            <p class="text-secondary fs-6">
                <i>Published Date: <?php echo e($article->publish_date); ?></i>
            </p>
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url()->current()); ?>">
                Share to FB
            </a>

            <div>
                <?php echo $article->description; ?>

            </div>
            <img src="<?php echo e(asset($article->thumbnail)); ?>" alt="" class="img-fluid">

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.webs.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/news/resources/views/website/article_detail.blade.php ENDPATH**/ ?>