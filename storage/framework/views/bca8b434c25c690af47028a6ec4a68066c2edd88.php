<?php $__env->startSection('contentuser'); ?>
<h2>daftar penyakit</h2>
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($value -> id_penyakit); ?></td>
			<td><?php echo e($value -> nama_penyakit); ?></td>
			<td id="<?php echo e($value -> id_penyakit); ?>" value="<?php echo e($value -> id_penyakit); ?>" name="penyakit[]"><a href="<?php echo e(route('informasi.show',[$value->id_penyakit])); ?>">pilih</a></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP 7.3\htdocs\corndoctor\resources\views/informasi.blade.php ENDPATH**/ ?>