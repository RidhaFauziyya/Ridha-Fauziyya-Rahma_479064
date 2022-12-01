

<?php $__env->startSection('content'); ?>
<div class="container text-center">
  <br>
  <?php if($message = Session::get('logout')): ?>
  <div class="alert alert-success alert-block">
    <strong><?php echo e($message); ?></strong>
  </div>
  <?php endif; ?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    <?php if(auth()->guard()->check()): ?>
      <h1 class="display-3">Hi! <br><b><?php echo e(Auth::user()->name); ?></b></h1>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
      <h1 class="display-3">Hi!</h1>
    <?php endif; ?>
      <h2 class="display-6">Welcome to my portfolio page</h2>
      <p class="lead">Hello, I am Ridha Fauziyya Rahma. This Webpage contains my portfolio.</p>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER 3\PPW 2\TUGAS\Ridha-Fauziyya-Rahma_479064\resources\views/home.blade.php ENDPATH**/ ?>