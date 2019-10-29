<!DOCTYPE html>
<html>
<head>
	<title>corn</title>
</head>
<body>
Nama Penyakit:<br>
<?php echo e($nama); ?><br>
Penjelasan Penyakit:<br>
<?php echo e($penjelasan); ?><br>
Penanganan Penyakit:<br>
<?php echo e($penanganan); ?><br>
Gejala Penyakit:<br>
<?php $__currentLoopData = $gejala2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($value->nama_gejala); ?><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH D:\XAMPP 7.3\htdocs\corndoctor\resources\views/v_detail_penyakit.blade.php ENDPATH**/ ?>