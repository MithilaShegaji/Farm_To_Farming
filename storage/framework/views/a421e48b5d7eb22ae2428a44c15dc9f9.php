<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FARM TO FARMING | <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    

    <?php echo $__env->make('layout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body>
<div class="navbar">
         <!-- Add your logo here -->
         <img src="<?php echo e(asset('assests/images/logo.png')); ?>" alt="StartupHub Community Logo" class="logo">
        <!-- Add more navigation links as needed -->
        <a href="/">Home</a>
        <a href="about">About Us</a>
        <a href="login">Sign-in/Sign-up</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        
    </div>
    <?php echo $__env->yieldContent('content'); ?>
    <footer>
        <p>Contact us at: <a href="mailto:e21@bmsit.in">e21@bmsit.in</a></p>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/layout/baseview.blade.php ENDPATH**/ ?>