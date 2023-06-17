

<?php $__env->startSection('content'); ?>
<section class="h-screen flex flex-col justify-center items-center bg-white-100">
    <div class="container mx-auto px-4">

      <!-- Title -->
      <h1 class="text-4xl mb-8 text-center font-bold text-gray-800">Welcome to Ship-Mate</h1>

      <!-- Button group -->
      <div class="flex justify-center">
        <div class="btn-group" role="group" aria-label="Buyer/Seller buttons">
          <button type="button" class="btn btn-primary mr-4 py-4 px-6 text-lg font-bold"><a href="<?php echo e(route('site.buyer.buyer_login')); ?>">I'm a Buyer</a></button>
          <button type="button" class="btn btn-secondary py-4 px-6 text-lg font-bold"><a href="<?php echo e(route('site.seller.seller_login')); ?>">I'm a Seller</a></button>
        </div>
      </div>

    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01PARUL\ASMP_Project\project_ASMP1\ship-mate\resources\views/askEveryone.blade.php ENDPATH**/ ?>