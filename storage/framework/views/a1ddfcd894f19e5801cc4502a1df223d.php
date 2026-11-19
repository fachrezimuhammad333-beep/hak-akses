<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(isset($mesin) ? 'Edit' : 'Tambah'); ?> Mesin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
<div class="container" style="max-width: 600px;">
    <h1><?php echo e(isset($mesin) ? 'Edit' : 'Tambah'); ?> Mesin Laundry</h1>
    <hr>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div><?php echo e($e); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(isset($mesin) ? route('mesin.update', $mesin->id) : route('mesin.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($mesin)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <?php $__currentLoopData = ['nama' => 'Nama Mesin', 'merek' => 'Merek', 'kapasitas' => 'Kapasitas', 'status' => 'Status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-3">
                <label class="form-label"><?php echo e($label); ?></label>
                <input type="text" name="<?php echo e($field); ?>" class="search-box w-100"
                       value="<?php echo e(old($field, $mesin->$field ?? '')); ?>" required>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <button type="submit" class="btn"><?php echo e(isset($mesin) ? 'Perbarui' : 'Simpan'); ?></button>
        <a href="<?php echo e(route('mesin.index')); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
</body>
</html><?php /**PATH C:\laragon\www\laundry-app\resources\views/mesin/form.blade.php ENDPATH**/ ?>