


    <link rel="stylesheet" href="<?php echo e(asset('client_css/UserLogincss/userLogin.css')); ?>">

    <?php $__env->startSection('content'); ?>
        <div class="form-div right-side">

            <div>
                <?php if( ! empty( session('buyer_otp_verified'))): ?>
                    <div class="alert alert-success">You are now registered as Buyer. Please Login.</div>
                <?php endif; ?>
            </div>

            <h1 class="login" style="font-size: 2rem;">Login <i class="bi bi-person-circle"></i></h1>

            <form action="" class="effect2">

                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address/Phone</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email/Phone">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <a href="#" class="text-primary">forgot password?</a><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <p class="noAcc">Don't have an account?&nbsp;&nbsp;<a href="<?php echo e(route('site.buyer.buyer_signup')); ?>"><strong>  Signup <i class="bi bi-pencil-square"></i></strong></a></p>
            </form>
        </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('buyer.buyer_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate - Copy\resources\views/buyer/buyer_login.blade.php ENDPATH**/ ?>