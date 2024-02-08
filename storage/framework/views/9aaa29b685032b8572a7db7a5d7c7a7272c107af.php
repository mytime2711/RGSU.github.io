<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <!-- <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary">Create</a>
            </div>
        </div> -->

        <div class="card">
            <div class="card-body">
                <h3>List of invoice</h3>
                <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
                <?php endif; ?>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Invoice No.</td>
                            <td>Total Amount</td>
                            <td>Created By</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($invoices->firstItem() + $k); ?></td>
                            <td><?php echo e($invoice->inv_no); ?></td>
                            <td>$<?php echo e(number_format($invoice->total_amount, 2)); ?></td>
                            <td><?php echo e($invoice->created_by); ?></td>
                            <td>
                              <a href="<?php echo e(route('invoice.detail', $invoice->id)); ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                              <a href="<?php echo e(route('invoice.print', $invoice->id)); ?>" target="_blank" class="btn btn-success"><i class="fa fa-print"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo e($invoices->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/invoices/index.blade.php ENDPATH**/ ?>