<?php $__env->startSection('content'); ?>


<?php if(count($errors)>0): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($error); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<h1>CREATE</h1>

<form action="/list-buku//<?php echo e($buku->slug); ?>" method="post">

        <input type="text" name="nama_buku" value="<?php echo e($buku->nama_buku); ?>" placeholder="nama buku"><br>
        <input type="text" name="harga_jual" value="<?php echo e($buku->harga_jual); ?>" placeholder="harga jual"><br>
        <input type="text" name="harga_dasar" value="<?php echo e($buku->harga_dasar); ?>" placeholder="harga_dasar"><br>
        <input type="text" name="penerbit_id" value="<?php echo e($buku->penerbit_id); ?>" placeholder="penerbit"><br>


	<input type="submit" value="edit">
    <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
    <input type="hidden" value="put" name="_method">
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>