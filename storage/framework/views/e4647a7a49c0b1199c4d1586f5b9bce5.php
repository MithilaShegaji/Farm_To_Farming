<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $clientdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="data:image/jpg;base64,<?php echo e(base64_encode($data->soilreport)); ?>" alt="Soil Report">
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/FarmerDashboard/index.blade.php ENDPATH**/ ?>