<?php $__env->startSection('content'); ?>
	<?php $no=1; ?>
	<table id="datatable" class="table table-striped table-bordered">
       <thead>          
        	<tr class="headings">
        	<th class="column-title">No </th>
        	<th class="column-title">Nama Buku</th>
        	<th class="column-title">Harga Jual</th>
        	<th class="column-title">Harga Dasar</th>
        	<th class="column-title">Penerbit</th>
        	<th class="column-title no-link last"><span class="nobr">Action</span>
        	</th>
       </thead>
		<tbody>
			<?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
              	<td><a href="#"><a href="/liblary/<?php echo e($buku->slug); ?>"><p> <?php echo e($buku->nama_buku); ?> </p></a></a></td>
				<td class="hidden-phone">Rp.<?php echo e($buku->harga_jual); ?></td>
				<td>Rp.<?php echo e($buku->harga_dasar); ?></td>
				<td><?php echo e($buku->penerbit->nama_penerbit); ?></td>
				<td>
						<button class="btn btn-primary btn-xs">
							<a href="/list-buku/<?php echo e($buku->slug); ?>/edit"><i class='fa fa-pencil' style="color: white"></i></a>
						</button>
						<button class="btn btn-danger btn-xs">
							<form action="/list-buku/<?php echo e($buku->id); ?>" method="post">
							<input type="hidden" name="_method" value="delete">
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<input type="submit">
								<i class="glyphicon glyphicon-trash"></i>
							</form>
						</button>
					
					
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      	</tbody>
	</table>







<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>