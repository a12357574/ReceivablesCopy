
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <?php if(session('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h3>Receipts
                    <a href="<?php echo e(url('admin/receipts/create')); ?>" class="btn btn-primary btn-sm text-white float-end">
                        Add Receipts
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Receipt ID</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th>Amount</th>
                            <th>College</th>
                            <th>Due Date</th>
                            <th>Date Paid</th>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $receipts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receipt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                               <td><?php echo e($receipt->ReceiptID); ?></td>
                               <td><?php echo e($receipt->StudentNumber); ?></td> 
                               <td><?php echo e($receipt->StudentName); ?></td> 
                               <td><?php echo e($receipt->Amount); ?></td>
                               <td><?php echo e($receipt->College); ?></td> 
                               <td><?php echo e($receipt->DueDate); ?></td> 
                               <td><?php echo e($receipt->DatePaid); ?></td>
                               <td>
                                    <a href="<?php echo e(url('admin/receipts/'.$receipt->ReceiptID.'/edit')); ?>" class= "btn btn-sm btn-success">Edit</a>
                                    <a href=" <?php echo e(url('admin/receipts/'.$receipt->ReceiptID.'/delete')); ?>" onclick="return confirm('Are you sure you want to delete this data?')"class= "btn btn-sm btn-danger">Delete</a>
                               </td> 
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7">No Receipts Available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\laravel-final\receivables\resources\views/admin/receipts/index.blade.php ENDPATH**/ ?>