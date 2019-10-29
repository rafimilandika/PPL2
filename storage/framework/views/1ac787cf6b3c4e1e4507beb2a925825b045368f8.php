<?php $__env->startSection('contentuser'); ?>
<section class="content" style=" margin: 10%; margin-top: 2%">
  <!-- <div class="container-fluid" style="margin: 10%; overflow-x: hidden;> -->
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h2 class="card-title"><strong>List Diagnosa</strong></h2><br/>
            <i>Silahkan centang diagnosa berikut ini</i>
          </div>
          <form method="POST" action="<?php echo e(route('diagnosa.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Gejala</th>
                      <th>Pilih</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td style="text-align: center;"><?php echo e($value -> id_gejala); ?></td>
                      <td style="padding-left:8%;"><?php echo e($value -> nama_gejala); ?></td>
                      <td style="text-align: center;"><input type="checkbox" id="<?php echo e($value -> id_gejala); ?>" value="<?php echo e($value -> id_gejala); ?>" name="gejala[]"></td>
                      <input type="hidden" name="jum" id="jum" value="$jum">
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <br>
                <input type="submit" name="submit" value="Diagnosa" class="btn btn-block btn-info btn-lg" style="width: 30%">
              </div>         
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">

            </div> -->
          </form>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- </div> -->
  </section>
  <!-- /.content -->
  <!-- </div> -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP 7.3\htdocs\corndoctor\resources\views/v_diagnosa.blade.php ENDPATH**/ ?>