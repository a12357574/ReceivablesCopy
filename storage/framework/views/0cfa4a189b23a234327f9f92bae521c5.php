
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Invoices
                    <a href="<?php echo e(url('admin/invoices')); ?>" class="btn btn-danger btn-sm text-white float-end">
                        Back
                    </a>
                </h3>
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                <div class="alert alert-warning">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
                <form action="<?php echo e(url('admin/invoices/'.$invoices->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    Home
                </button>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"></div>
                <div class="mb-3">
                    <label>Invoices</label>
                </div>
                <div class="mb-3">
                    <label>Invoice ID</label>
                    <input type="text" name="InvoiceID" value="<?php echo e($invoices->InvoiceID); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Student Number</label>
                    <input type="text" name="StudentNumber" value="<?php echo e($invoices->StudentNumber); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Student Name</label>
                    <input type="text" name="StudentName" value="<?php echo e($invoices->StudentName); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Amount</label>
                    <input type="text" name="Amount" value="<?php echo e($invoices->Amount); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>College</label>
                    <input type="text" name="College" value="<?php echo e($invoices->College); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Due Date</label>
                    <input type="date" name="DueDate" value="<?php echo e($invoices->DueDate); ?>" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label>Date Paid</label>
                    <input type="date" name="DatePaid" value="<?php echo e($invoices->DatePaid); ?>" class="form-control"/>
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary float-end">Save</button</div>
                </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
            </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\laravel-final\receivables\resources\views/admin/invoices/edit.blade.php ENDPATH**/ ?>