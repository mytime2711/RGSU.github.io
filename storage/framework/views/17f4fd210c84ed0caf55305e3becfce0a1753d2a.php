<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
       
        <div class="row mb-3">
            <div class="col-sm-12">
                <a href="<?php echo e(route('invoice.index')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Invoice Detail</h3>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Logo</h2>
                        <h2>Company Name</h2>
                        <p>Address ......</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Invoice No.: <?php echo e($invoice->inv_no); ?></h4>
                        <h4>Invoice Date: <?php echo e(Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y')); ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Quanity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                            <?php $sub_total = 0; ?>
                            <?php $__currentLoopData = $invoice_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $sub_total += $detail->total_price ?>
                            <tr>
                                <td><?php echo e($k+1); ?></td>
                                <td><?php echo e($detail->product_name); ?></td>
                                <td><?php echo e($detail->quantity); ?></td>
                                <td>$<?php echo e(number_format($detail->price, 2)); ?></td>
                                <td>$<?php echo e(number_format($detail->total_price, 2)); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="4" class="text-right">
                                    <strong>Sub Total</strong>
                                </td>
                                <td>$<?php echo e(number_format($sub_total, 2)); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/invoices/detail.blade.php ENDPATH**/ ?>