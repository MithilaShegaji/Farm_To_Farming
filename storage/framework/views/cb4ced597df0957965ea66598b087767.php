<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .add-button {
            float: right;
            margin-bottom: 10px;
            text-decoration: none;
            background-color: #008CBA;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Contacts</h1>
    <a href="<?php echo e(route('addedit')); ?>" class="add-button">+</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>State</th>
            <th>Pincode</th>
            <th>Action</th>
        </tr>
        <?php $i=1;?>
                <?php $__currentLoopData = $userdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($i); ?></td>
            <td><?php echo e($formdata->name); ?></td>
            <td><?php echo e($formdata->adress); ?></td>
            <td><?php echo e($formdata->phone); ?></td>
            <td><?php echo e($formdata->state); ?></td>
            <td><?php echo e($formdata->pincode); ?></td>
            <td>
                <a href="<?php echo e(route('form.edit',['id'=>$formdata->id])); ?>">
                edit
                </a>
                <a href="<?php echo e(route('form.delete',['id'=>$formdata->id])); ?>">
                delete
                </a>
            </td>
        </tr>
        <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\FarmToFarming\farmtofarming\resources\views/AdminDashboard/index.blade.php ENDPATH**/ ?>