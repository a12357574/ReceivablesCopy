
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <?php if(session('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h3>Invoices
                    <a href="<?php echo e(url('admin/invoices/create')); ?>" class="btn btn-primary btn-sm text-white float-end">
                        Add Invoices
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th>Amount</th>
                            <th>College</th>
                            <th>Due Date</th>
                            <th>Date Paid</th>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                               <td><?php echo e($invoice->InvoiceID); ?></td>
                               <td><?php echo e($invoice->StudentNumber); ?></td> 
                               <td><?php echo e($invoice->StudentName); ?></td> 
                               <td><?php echo e($invoice->Amount); ?></td>
                               <td><?php echo e($invoice->College); ?></td> 
                               <td><?php echo e($invoice->DueDate); ?></td> 
                               <td><?php echo e($invoice->DatePaid); ?></td>
                               <td>
                                    <a href="<?php echo e(url('admin/invoices/'.$invoice->InvoiceID.'/edit')); ?>" class= "btn btn-sm btn-success">Edit</a>
                                    <a href=" <?php echo e(url('admin/invoices/'.$invoice->InvoiceID.'/delete')); ?>" onclick="return confirm('Are you sure you want to delete this data?')"class= "btn btn-sm btn-danger">Delete</a>
                               </td> 
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7">No Invoices Available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\laravel-final\receivables\resources\views/admin/invoices/index.blade.php ENDPATH**/ ?>