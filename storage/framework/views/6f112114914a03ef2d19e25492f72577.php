

<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('client_css/UserLogincss/userLogin.css')); ?>">

    <div class="form-div right-side">

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($e); ?> <Br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        
        <?php if( !empty(!session('buyer_register_process_done')) and !empty(!session('wrong_buyer_otp'))): ?>
            <h1 class="text-4xl">Signup <i class="bi bi-pencil-square"></i></h1>
        
            <form action="<?php echo e(route('site.buyer.buyer_signup')); ?>" id="registration-form" method="POST" enctype="multipart/form-data">
    
                <?php echo csrf_field(); ?>
    
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter name">
                    
                </div>
    
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter email">
                    
                </div>
    
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Enter Phone">
                    
                </div>
    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    
                </div>
    
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                    <div class="form-text text-danger"><?php echo e($errors->first('password_confirmation')); ?></div>
                </div>
    
                <button type="submit" class="btn btn-primary" id="signup-btn">SignUp</button>
            </form>
        <?php endif; ?>

        <?php if( !empty(session('buyer_register_process_done')) or !empty(session('wrong_buyer_otp'))): ?>
            <?php if(!empty(!session('wrong_buyer_otp'))): ?>
                <div class="alert alert-primary">check your email or message for OTP.</div>
            <?php endif; ?>
            <?php if( !empty(session('wrong_buyer_otp'))): ?>
                <div class="alert alert-danger">Enter valid OTP.</div>
            <?php endif; ?>
            <form action="<?php echo e(route('site.buyer.buyer_otp')); ?>" method="POST" class="effect2">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>OTP</label>
                    <input type="text" class="form-control" name="userotp" placeholder="Enter OTP">
                </div>
                <a href="#">resend</a><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('buyer.buyer_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate - Copy\resources\views/buyer/buyer_signup.blade.php ENDPATH**/ ?>