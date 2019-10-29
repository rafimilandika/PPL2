<?php $__env->startSection('contentuser'); ?>
<h1 style="color: white; margin: 25%; text-align: center; font-family: nunito, sans-serif"><b>Selamat Datang <?php echo e(Auth::user()->name); ?></b></h1>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP 7.3\htdocs\corndoctor\resources\views/home.blade.php ENDPATH**/ ?>