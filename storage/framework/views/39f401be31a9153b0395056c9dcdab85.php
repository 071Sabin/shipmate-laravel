

<link rel="stylesheet" href="<?php echo e(asset('client_css/UserLogincss/userLogin.css')); ?>">

<?php $__env->startSection('content'); ?>      
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <span>Enter valid OTP.</span>
            
        </div>
    <?php endif; ?>
    <div class="form-div right-side">
        

        <div class="alert alert-danger" style="padding: 100px;">404 ERROR</div>


    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('seller.seller_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate2\resources\views/seller/otp_seller_signup.blade.php ENDPATH**/ ?>