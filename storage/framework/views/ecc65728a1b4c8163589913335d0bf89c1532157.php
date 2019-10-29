<?php $__env->startSection('contentuser'); ?>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 --><!-- <div class="card-header">Dashboard</div>
             -->
              <!--   <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Halo <?php echo e(Auth::user()->name); ?> -->
                    <!--  </div> -->
      <!--   </div>
    </div>
</div> -->
<div style="color: white; margin: 25%; text-align: center; font-family: nunito, sans-serif">
<h1><b><?php echo e(Auth::user()->name); ?>, Jawablah pertanyaan berikut dengan benar</b></h1>
<a href="#" class="btn btn-block btn-warning">Mulai</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\corndoctor\resources\views/diagnosa.blade.php ENDPATH**/ ?>