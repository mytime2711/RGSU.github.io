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
                <h3>Making Order</h3>
                <?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
                <?php endif; ?>
                <form class="row" action="<?php echo e(route('order.save_cart')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-sm-3 form-group">
                        <label for="product_id">Product</label>
                        <select name="id" id="product_id" class="form-control" required>
                            <option value="">-----</option>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>"><?php echo e($product->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label for="quantity">Product</label>
                        <input type="number" mix='1' name="quantity" id="quantity" value='1' class="form-control" required>
                    </div>
                    <div class="col-sm-2 form-group">
                        <label><br><br></label>
                        <button class="btn btn-primary mt-4">Add to Cart</button>
                    </div>
                    <div class="col-sm-2 form-group">
                        <label><br><br></label>
                        <a href="<?php echo e(route('order.clear_all')); ?>" class="btn btn-danger mt-4">Clear All Cart</a>
                    </div>
                </form>   
                <div class="row">
                    <div class="col-sm">
                        <form action="<?php echo e(route('order.save')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quanity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                    $sub_total = 0;
                                ?>
                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $sub_total += $cart->price * $cart->quantity;
                                ?>
                                <input type="hidden" name="id[]" value="<?php echo e($cart->id); ?>">
                                <input type="hidden" name="price[]" value="<?php echo e($cart->price); ?>">
                                <input type="hidden" name="quantity[]" value="<?php echo e($cart->quantity); ?>">
                                <input type="hidden" name="total[]" value="<?php echo e($cart->price * $cart->quantity); ?>">
                                <tr>
                                    <td><?php echo e($k+1); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset($cart->attributes->image)); ?>" alt="" width="50px" height="50px">
                                    </td>
                                    <td><?php echo e($cart->name); ?></td>
                                    <td><?php echo e($cart->quantity); ?></td>
                                    <td><?php echo e($cart->price); ?></td>
                                    <td><?php echo e($cart->price * $cart->quantity); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('order.remove', $cart->id)); ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="5" class="text-right"><strong>Sub Total:</strong></td>
                                    <td>$<?php echo e(number_format($sub_total, 2)); ?></td>
                                    <td>
                                        <button class="btn btn-primary">Save Order</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('custom-js'); ?>
<?php if(session()->has('print_url')): ?>

<script>
    var url = "<?php echo e(session()->get('print_url')); ?>";
    window.open(url, '_blank')
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rithy/Documents/teaching/sunrise/tri3/mini-pos/resources/views/admins/orders/index.blade.php ENDPATH**/ ?>