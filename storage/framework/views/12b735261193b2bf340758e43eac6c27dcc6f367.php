<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>CornDoctor</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('/')); ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    body{
      background-image: url('<?php echo e(url('/')); ?>/assets/img/1.2.jpg');
      background-repeat: no-repeat;
      background-size:cover;
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
  
    <div class="contentuser">
      <?php echo $__env->yieldContent('contentuser'); ?>
    </div>


    <!-- jQuery -->
    <script src="<?php echo e(url('/')); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(url('/')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(url('/')); ?>/dist/js/adminlte.min.js"></script>
  </body>
  </html>
<?php /**PATH C:\xampp\htdocs\corndoctor\resources\views/layouts/nonav.blade.php ENDPATH**/ ?>