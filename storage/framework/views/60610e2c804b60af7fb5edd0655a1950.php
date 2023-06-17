



    
    
    
    <link rel="stylesheet" href="<?php echo e(asset('client_css/user.login.css')); ?>">

    <?php $__env->startSection('content'); ?>
        <div class="form-div right-side">
            <h1>Login</h1>
            <form action="" class="effect2">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address/Phone</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email/Phone">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->

                <button type="submit" class="btn btn-primary">Submit</button>
                <p>Do not have an account? <a href="#"><strong>Signup</strong></a></p>
            </form>
        </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate\resources\views/login.blade.php ENDPATH**/ ?>