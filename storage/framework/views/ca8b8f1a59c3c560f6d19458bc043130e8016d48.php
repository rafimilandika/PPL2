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
					<div>
						<table class="table table-striped">
							<thead>
								<tr style="text-align: center;">
									<th>No</th>
									<th>Nama</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td style="text-align: center;"><?php echo e($value -> id_penyakit); ?></td>
									<td style="padding-left:8%;"><?php echo e($value -> nama_penyakit); ?></td>
									<td style="text-align: center;" id="<?php echo e($value -> id_penyakit); ?>" value="<?php echo e($value -> id_penyakit); ?>" name="penyakit[]"><a href="<?php echo e(route('informasi.show',[$value->id_penyakit])); ?>">pilih</a></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->
			</div>
		</div>
		<!-- </div> -->
	</section>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\corndoctor\resources\views/informasi.blade.php ENDPATH**/ ?>