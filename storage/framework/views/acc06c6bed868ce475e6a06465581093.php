

<?php $__env->startSection('content'); ?>
    

    <link rel="stylesheet" href="<?php echo e(asset('client_css/UserLogincss/userLogin.css')); ?>">

    <div class="form-div right-side">

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <span>Please fill all the details.</span>
                
            </div>
        <?php endif; ?>

        <h1 style="font-size: 2rem;">Signup <i class="bi bi-pencil-square"></i></h1>
        
        <form action="<?php echo e(route('site.buyer.buyer_signup')); ?>" id="registration-form" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter name">
                <div class="form-text text-danger"><?php echo e($errors->first('name')); ?></div>
            </div>

            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter email">
                <div class="form-text text-danger"><?php echo e($errors->first('email')); ?></div>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Enter Phone">
                <div class="form-text text-danger"><?php echo e($errors->first('phone')); ?></div>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="form-text text-danger"><?php echo e($errors->first('password')); ?></div>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                <div class="form-text text-danger"><?php echo e($errors->first('password_confirmation')); ?></div>
            </div>

            <button type="submit" class="btn btn-primary" id="signup-btn">SignUp</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('buyer.buyer_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate\resources\views/buyer/buyer_signup.blade.php ENDPATH**/ ?>