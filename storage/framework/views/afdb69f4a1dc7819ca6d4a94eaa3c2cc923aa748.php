<?php $__env->startSection('content'); ?>

<div class="row mt">
    <?php if(count($errors)>0): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($error); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <form action="/list-buku" method="post" enctype="multipart/form-data">


        <input type="text" name="nama_buku" value="" placeholder="nama buku"><br>
        <input type="text" name="harga_jual" value="" placeholder="harga jual"><br>
        <input type="text" name="harga_dasar" value="" placeholder="harga_dasar"><br>
        <input type="text" name="penerbit_id" value="" placeholder="penerbit"><br>
        <input type="submit" value="post">
        <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>