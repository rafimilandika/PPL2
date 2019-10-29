<?php $__env->startSection('contentuser'); ?>
<section class="content" style=" margin: 10%; margin-top: 2%;padding-top: 8%">
	<!-- <div class="container-fluid" style="margin: 10%; overflow-x: hidden;> -->
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h2 class="card-title"><strong><center>Hasil Diagnosa</center></strong></h2><br/>
					</div>
					<div class="card-body">
						<div class="card-body p-0">
							<table class="table">
								<tr>
									<th>Nama Penyakit</th>
									<td><?php echo e($namap); ?></td>
								</tr>
								<tr>
									<th>Gejala yang dipilih</th>
									<td>
											<?php $__currentLoopData = $gejala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li><?php echo e($value->nama_gejala); ?></li>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td>
								</tr>
								<tr>
									<th>Penjelasan</th>
									<td><?php echo e($penjelasanp); ?></td>
								</tr>
								<tr>
									<th>Penanganan</th>
									<td><?php echo e($penangananp); ?></td>
								</tr>
							</table>
							<a href="<?php echo e(route('kembali')); ?>"><button>Kembali</button></a>
						</div>
						<!-- /.card-body -->
						<!-- <div class="card-footer">

						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nonav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\corndoctor\resources\views/v_hasil_diagnosa.blade.php ENDPATH**/ ?>