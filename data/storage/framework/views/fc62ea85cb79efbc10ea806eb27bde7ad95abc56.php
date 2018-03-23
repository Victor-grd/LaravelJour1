<?php $__env->startSection('content'); ?>
<center><h1>Bonsoir</h1></center>
<center><h2>Bienvenue sur le Laravel de Victor</h2></center>
<center><a href="<?php echo e(url('/liste')); ?>">let's go</a><center>
  <footer>
  </footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>